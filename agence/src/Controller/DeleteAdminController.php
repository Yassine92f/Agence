<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeleteAdminController extends AbstractController
{
    #[Route('/deleteAdmin', name: 'app_deleteAdmin')]
    public function index(): Response
    {
        return $this->render('deleteAdmin/index.html.twig', [
            'controller_name' => 'DeleteAdminController',
        ]);
    }
}
