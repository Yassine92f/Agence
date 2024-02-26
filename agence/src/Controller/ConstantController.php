<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConstantController extends AbstractController
{
    #[Route('/constant', name: 'app_constant')]
    public function index(): Response
    {
        return $this->render('constant/index.html.twig', [
            'controller_name' => 'ConstantController',
        ]);
    }
}
