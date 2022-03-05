<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtificialSatelliteController extends AbstractController
{
    #[Route('/artificial_satellites', name: 'artificial_satellites')]
    public function index(): Response
    {
        return $this->render('artificial_satellite/index.html.twig', [
            'controller_name' => 'ArtificialSatelliteController',
        ]);
    }
}
