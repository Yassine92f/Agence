<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

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

class AdminController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/manageAdmin', name: 'admin_manageAdmin')]
    public function index(): JsonResponse
    {
        // Créer un tableau associatif contenant le message "toto"
        $data = ['message' => 'toto'];

        // Retourner une réponse JSON contenant le tableau associatif
        return new JsonResponse($data);
    }
}
