<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageOrderController extends AbstractController
{
    #[Route('/manageOrder', name: 'app_manageOrder')]
    public function index(): Response
    {
        return $this->render('manageOrder/index.html.twig', [
            'controller_name' => 'ManageOrderController',
        ]);
    }
}
