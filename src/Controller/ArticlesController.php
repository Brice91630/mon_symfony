<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaire;
use App\Repository\ArticlesRepository;
use App\Repository\CategorieRepository;
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
        // Récupérer les paramètres 'search' et 'category' depuis la requête
        $search = $request->query->get('search');
        $category = $request->query->get('category');

        // Initialiser la variable des articles
        if ($search && $category) {
            // Rechercher les articles par titre/contenu ET filtrer par catégorie
            $articles = $articleRepository->findBySearchAndCategory($search, $category);
        } elseif ($search) {
            // Rechercher les articles par titre/contenu
            $articles = $articleRepository->findArticlesByName($search);
        } elseif ($category) {
            // Filtrer les articles par catégorie
            $articles = $articleRepository->findBy(['category' => $category]);
        } else {
            // Si aucun filtre ou recherche, récupérer tous les articles
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
        if ($request->isMethod('POST')) {
            $article = new Articles();
            $article->setTitle($request->request->get('title'));
            $article->setContent($request->request->get('content'));
            $article->setCategory($request->request->get('category'));

            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/new.html.twig');
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
        if ($request->isMethod('POST')) {
            $article->setTitle($request->request->get('title'));
            $article->setContent($request->request->get('content'));
            $article->setCategory($request->request->get('category'));

            $em->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/edit.html.twig', ['article' => $article]);
    }

    // Supprimer un article
    #[Route('/{id}/delete', name: 'article_delete', methods: ['POST'])]
    public function delete(Articles $article, EntityManagerInterface $em): Response
    {
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('article_index');
    }
}
