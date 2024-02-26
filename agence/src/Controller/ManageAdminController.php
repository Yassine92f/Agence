<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageAdminController extends AbstractController
{
    #[Route('/manageAdmin', name: 'app_manageAdmin')]
    public function index(): Response
    {
        return $this->render('manageAdmin/index.html.twig', [
            'controller_name' => 'ManageAdminController',
        ]);
    }
}
