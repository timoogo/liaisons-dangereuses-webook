<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NaturalSatelliteController extends AbstractController
{
    #[Route('/natural_satellites', name: 'natural_satellites')]
    public function index(): Response
    {
        return $this->render('natural_satellite/index.html.twig', [
            'controller_name' => 'NaturalSatelliteController',
        ]);
    }
}
