<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageCategorieController extends AbstractController
{
    #[Route('/manageCategorie', name: 'app_manageCategorie')]
    public function index(): Response
    {
        return $this->render('manageCategorie/index.html.twig', [
            'controller_name' => 'ManageCategorieController',
        ]);
    }
}
