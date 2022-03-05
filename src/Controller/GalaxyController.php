<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalaxyController extends AbstractController
{
    #[Route('/galaxies', name: 'galaxies')]
    public function index(): Response
    {
        return $this->render('galaxy/index.html.twig', [
            'controller_name' => 'GalaxyController',
        ]);
    }
}
