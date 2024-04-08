<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AdminType;
use App\Entity\Admin;
use Doctrine\ORM\EntityManagerInterface;

class UpdateAdminController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/updateAdmin', name: 'app_updateAdmin' ,methods:['GET', 'POST'])]
    public function index(Request $request, Admin $admin = null): Response
    {
        if (!$admin) {
            $admin = new Admin();
        }

        $form = $this->createForm(AdminType::class, $admin);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($admin);
            $this->entityManager->flush();

            $this->addFlash('success', 'Mise à jour réussie.');

            return $this->redirect('http://localhost:8000/manageAdmin');
        }

        return $this->render('updateAdmin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
