<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    /**
     * Création, Modification et Suppression d'un commentaire
     * 
     * @Route("/articles/{articleId}/commentaire", name="commentaire_create_edit_delete", methods={"POST"})
     */
    public function createEditDelete(Request $request, ArticlesRepository $articleRepository, UserInterface $user, int $articleId, EntityManagerInterface $em): Response
    {
        // Récupérer l'article avec l'ID passé en paramètre dans l'URL
        $article = $articleRepository->find($articleId);

        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé');
        }

        // Loguer les rôles de l'utilisateur connecté pour déboguer
        $roles = $user->getRoles();
        $this->get('logger')->info('Rôles de l\'utilisateur : ' . implode(', ', $roles));

        // Vérifier si c'est une demande de modification
        if ($request->request->get('commentaire_id') && $request->request->get('content')) {
            return $this->handleEditComment($request, $article, $user, $em, $roles);
        }

        // Vérifier si c'est une demande de suppression
        if ($request->request->get('commentaire_id') && $request->request->get('action') === 'delete') {
            return $this->handleDeleteComment($request, $article, $user, $em, $roles);
        }

        // Si aucune action n'est trouvée, retourner à la page de l'article
        return $this->redirectToRoute('article_page', ['id' => $articleId]);
    }

    private function handleEditComment(Request $request, $article, UserInterface $user, EntityManagerInterface $em, array $roles): Response
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($request->request->get('commentaire_id'));

        // Vérifier si le commentaire existe
        if (!$commentaire) {
            return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
        }

        // Vérifier si l'utilisateur est le propriétaire ou un administrateur
        if ($commentaire->getUser() !== $user && !in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
        }

        // Modifier le commentaire
        $commentaire->setContent($request->request->get('content'));
        $em->flush();

        // Rediriger vers la page de l'article
        return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
    }

    private function handleDeleteComment(Request $request, $article, UserInterface $user, EntityManagerInterface $em, array $roles): Response
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($request->request->get('commentaire_id'));

        // Vérifier si le commentaire existe
        if (!$commentaire) {
            return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
        }

        // Vérifier si l'utilisateur est le propriétaire ou un administrateur
        if ($commentaire->getUser() !== $user && !in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
        }

        // Supprimer le commentaire
        $em->remove($commentaire);
        $em->flush();

        // Rediriger vers la page de l'article
        return $this->redirectToRoute('article_page', ['id' => $article->getId()]);
    }
}
