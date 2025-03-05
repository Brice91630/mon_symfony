<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'home')]
    public function index(ArticlesRepository $articlesRepository): Response
    {
        // Récupérer tous les articles ou une sélection (ex. les 3 plus récents)
        $articles = $articlesRepository->findBy([], ['updatedAt' => 'DESC'], 3);

        return $this->render('home.html.twig', [
            'articles' => $articles,
        ]);
    }
}