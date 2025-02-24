<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaire;
use App\Form\ArticleType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/articles')]
class ArticlesController extends AbstractController
{
    // Liste des articles avec filtrage par catégorie et recherche
    #[Route('/', name: 'article_index', methods: ['GET'])]
    public function index(ArticlesRepository $articleRepository, Request $request): Response
    {
        $search = $request->query->get('search');
        $category = $request->query->get('category');

        if ($search && $category) {
            $articles = $articleRepository->findBySearchAndCategory($search, $category);
        } elseif ($search) {
            $articles = $articleRepository->findArticlesByName($search);
        } elseif ($category) {
            $articles = $articleRepository->findBy(['category' => $category]);
        } else {
            $articles = $articleRepository->findAll();
        }

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    // Création d'un nouvel article
    #[Route('/new', name: 'article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Laisse VichUploaderBundle gérer l'upload initial
            $em->persist($article);
            $em->flush();

            // Si une image a été uploadée, renomme le fichier avec un nom unique
            if ($article->getImageName()) {
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/articles';
                $originalFilePath = $uploadDir . '/' . $article->getImageName();

                // Génère un nouveau nom basé sur l'ID
                $article->generateUniqueImageName();
                $newFilePath = $uploadDir . '/' . $article->getImageName();

                // Renomme le fichier sur le serveur
                if (file_exists($originalFilePath)) {
                    rename($originalFilePath, $newFilePath);
                }

                // Met à jour l'entité avec le nouveau nom
                $em->persist($article);
                $em->flush();
            }

            $this->addFlash('success', 'Article créé avec succès !');
            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Afficher un article spécifique et gérer les commentaires
    #[Route('/{id}/page', name: 'article_page', methods: ['GET', 'POST'])]
    public function page(Articles $article, Request $request, EntityManagerInterface $em, UserInterface $user): Response
    {
        if ($request->isMethod('POST')) {
            $content = $request->request->get('content');
            if ($content) {
                $commentaire = new Commentaire();
                $commentaire->setContent($content);
                $commentaire->setArticle($article);
                $commentaire->setUser($user);

                $em->persist($commentaire);
                $em->flush();

                return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
            }
        }

        return $this->render('articles/page.html.twig', [
            'article' => $article,
        ]);
    }

    // Modifier un article existant
    #[Route('/{id}/edit', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Articles $article, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si une nouvelle image est uploadée, renomme-la avec un nom unique
            if ($article->getImageFile()) {
                $em->flush(); // Persiste d'abord pour que VichUploader traite l'upload

                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/articles';
                $originalFilePath = $uploadDir . '/' . $article->getImageName();

                // Génère un nouveau nom basé sur l'ID
                $article->generateUniqueImageName();
                $newFilePath = $uploadDir . '/' . $article->getImageName();

                // Renomme le fichier sur le serveur
                if (file_exists($originalFilePath)) {
                    rename($originalFilePath, $newFilePath);
                }

                $em->persist($article);
            }

            $em->flush();

            $this->addFlash('success', 'Article modifié avec succès !');
            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    // Supprimer un article
    #[Route('/{id}/delete', name: 'article_delete', methods: ['POST'])]
    public function delete(Articles $article, EntityManagerInterface $em): Response
    {
        $em->remove($article);
        $em->flush(); // VichUploaderBundle supprime l'image grâce à delete_on_remove

        return $this->redirectToRoute('article_index');
    }
}