<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use App\Services\MongoDBService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('home', name: 'home')]
    public function index(ArticlesRepository $articlesRepository, MongoDBService $mongoDBService ): Response
    {
        // Récupérer tous les articles ou une sélection (ex. les 3 plus récents)
        $articles = $articlesRepository->findBy([], ['updatedAt' => 'DESC'], 3);

        $mongoDBService->insertVisit('home');
         
        return $this->render('home.html.twig', [
            'articles' => $articles,
        ]);
    }
}