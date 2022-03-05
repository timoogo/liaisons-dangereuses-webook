<?php

namespace App\Controller;

use App\Entity\Planet;
use App\Repository\PlanetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanetController extends AbstractController
{
    #[Route('/planets', name: 'planets')]
    public function index(PlanetRepository $planetRepository): Response
    {
        return $this->render('planet/index.html.twig', [
            'controller_name' => 'PlanetController',
            'planets' => $planetRepository->findAll(),

        ]);
    }
    #[Route('/planets/{id}', name: 'planets_details')]
    # @Entity("planet", expr="repository.find(id)")

    public function show(Planet $planet): Response
    {
        return $this->render('planet/details.html.twig', [
            'planet' => $planet,

        ]);
    }
}
