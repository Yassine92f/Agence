<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AdminType;
use App\Entity\Admin;

class UpdateAdminController extends AbstractController
{
    #[Route('/updateAdmin', name: 'app_updateAdmin' ,methods:['GET', 'POST'])]
    public function index(Request $request): Response
    {
        // Création d'une nouvelle instance de l'entité Admin
        $admin = new Admin();

        // Création du formulaire en utilisant le formulaire AdminType
        $form = $this->createForm(AdminType::class, $admin);

        // Gestion de la soumission du formulaire
        $form->handleRequest($request);

        // Vérifier si le formulaire a été soumis et s'il est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données du formulaire
            $name = $form->get('name')->getData();
            $utilisateur = $form->get('utilisateur')->getData();
            $mdp = $form->get('mdp')->getData();

            // Faites quelque chose avec les données, comme les enregistrer en base de données
            // Par exemple :
            // $admin->setName($name);
            // $admin->setUtilisateur($utilisateur);
            // $admin->setMdp($mdp);
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($admin);
            // $entityManager->flush();

            // Rediriger ou afficher une réponse
            // return $this->redirectToRoute('some_route');
            // ou
            // return new Response('Données soumises avec succès');
        }

        // Affichage du formulaire
        return $this->render('updateAdmin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
