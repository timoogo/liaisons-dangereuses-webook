<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanetController extends AbstractController
{
    #[Route('/planets', name: 'planets')]
    public function index(): Response
    {
        return $this->render('planet/index.html.twig', [
            'controller_name' => 'PlanetController',
        ]);
    }
}
