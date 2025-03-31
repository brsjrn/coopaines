<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AppController extends AbstractController
{
    #[Route('/', name: 'app_app')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/evenement', name: 'app_evenement')]
    public function evenement(): Response
    {
        return $this->render('app/evenement.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/agenda', name: 'app_agenda')]
    public function agenda(): Response
    {
        return $this->render('app/agenda.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/covoiturage', name: 'app_covoiturage')]
    public function covoiturage(): Response
    {
        return $this->render('app/covoiturage.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
