<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageCarteController extends AbstractController
{
    #[Route('/manageCarte', name: 'app_manageCarte')]
    public function index(): Response
    {
        return $this->render('manageCarte/index.html.twig', [
            'controller_name' => 'ManageCarteController',
        ]);
    }
}
