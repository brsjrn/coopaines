<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Map\Map;
use Symfony\UX\Map\Point;
use Symfony\UX\Map\Marker;

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
        // Create a new map instance
        $myMap = (new Map());

        $myMap
            // Explicitly set the center and zoom
            ->center(new Point(46.903354, 1.888334))
            ->zoom(6)

            // Or automatically fit the bounds to the markers
            ->fitBoundsToMarkers()
        ;

        $myMap
            ->addMarker(new Marker(
                position: new Point(48.8566, 2.3522),
                title: 'Paris'
            ))
        ;

        return $this->render('app/evenement.html.twig', [
            'controller_name' => 'AppController',
            'myMap' => $myMap
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

    #[Route('/entite', name: 'app_entite')]
    public function entite(): Response
    {
        // Create a new map instance
        $myMap = (new Map());

        $myMap
            // Explicitly set the center and zoom
            ->center(new Point(46.903354, 1.888334))
            ->zoom(6)

            // Or automatically fit the bounds to the markers
            ->fitBoundsToMarkers()
        ;

        $myMap
            ->addMarker(new Marker(
                position: new Point(48.8566, 2.3522),
                title: 'Paris'
            ))
        ;

        return $this->render('app/entite.html.twig', [
            'controller_name' => 'AppController',
            'myMap' => $myMap
        ]);
    }
    
    #[Route('/entite-evenement', name: 'app_entiteEvenement')]
    public function entiteEvenement(): Response
    {
        return $this->render('app/entite-evenement.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
