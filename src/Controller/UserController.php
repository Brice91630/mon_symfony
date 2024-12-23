<?php
namespace App\Controller;

use App\Entity\User; // On importe la classe User
use App\Repository\UserRepository; // On importe le repository User
use Doctrine\ORM\EntityManagerInterface; // On importe EntityManagerInterface
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // Classe de base des contrôleurs Symfony
use Symfony\Component\HttpFoundation\Request; // Classe Request pour gérer les données envoyées
use Symfony\Component\HttpFoundation\Response; // Classe Response pour envoyer une réponse HTTP
use Symfony\Component\Routing\Annotation\Route; // Annotation Route pour définir les routes

#[Route('/users')] // Route principale pour ce contrôleur
class UserController extends AbstractController
{
    #[Route('/', name: 'user_index', methods: ['GET'])] // Route pour afficher la liste des utilisateurs
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll(); // Récupère tous les utilisateurs
        return $this->render('user/index.html.twig', ['users' => $users]); // Affiche la vue avec les utilisateurs
    }

    #[Route('/new', name: 'user_new', methods: ['GET', 'POST'])] // Route pour afficher le formulaire et traiter la création d'un utilisateur
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $user = new User(); // Création d'un nouvel utilisateur

            // Récupération des données du formulaire et attribution des valeurs à l'entité $user
            $user->setName($request->request->get('name'));
            $user->setEmail($request->request->get('email'));

            // Hachage du mot de passe
            $hashedPassword = password_hash($request->request->get('password'), PASSWORD_BCRYPT);
            $user->setPassword($hashedPassword);

            // Récupération du rôle, par défaut 'ROLE_USER'
            $role = $request->request->get('role', 'ROLE_USER');
            $user->setRoles([$role]);

            // Sauvegarde de l'utilisateur dans la base de données
            $em->persist($user);
            $em->flush();

            // Redirection vers la page des articles après l'ajout de l'utilisateur
            return $this->redirectToRoute('article_index'); // Changez 'article_index' selon le nom de votre route articles
        }

        return $this->render('user/new.html.twig'); // Si la méthode est GET, on affiche le formulaire
    }

    #[Route('/{id}/edit', name: 'user_edit', methods: ['GET', 'POST'])] // Route pour modifier un utilisateur
    public function edit(User $user, Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            // Modification des données de l'utilisateur
            $user->setName($request->request->get('name'));
            $user->setEmail($request->request->get('email'));

            $role = $request->request->get('role', 'ROLE_USER');
            $user->setRoles([$role]);

            $em->flush(); // Sauvegarde des modifications

            // Redirection vers la liste des utilisateurs après modification
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', ['user' => $user]); // Affiche le formulaire de modification avec les données de l'utilisateur
    }

    #[Route('/{id}/delete', name: 'user_delete', methods: ['POST'])] // Route pour supprimer un utilisateur
    public function delete(User $user, EntityManagerInterface $em): Response
    {
        $em->remove($user); // Suppression de l'utilisateur de la base de données
        $em->flush(); // Sauvegarde de la suppression

        // Redirection vers la liste des utilisateurs après suppression
        return $this->redirectToRoute('user_index');
    }
}
