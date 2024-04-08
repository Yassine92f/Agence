<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddVoyageController extends AbstractController
{
    #[Route('/addVoyage', name: 'app_addVoyage')]
    public function index(): Response
    {
        return $this->render('add_voyage/index.html.twig', [
            'controller_name' => 'AddVoyageController',
        ]);
    }
}
