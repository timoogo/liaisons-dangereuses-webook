<?php

namespace App\Controller;

use App\Entity\Galaxy;
use App\Repository\GalaxyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalaxyController extends AbstractController
{
    #[Route('/galaxies', name: 'galaxies')]
    public function index(GalaxyRepository $galaxyRepository): Response
    {
        return $this->render('galaxy/index.html.twig', [
            'controller_name' => 'GalaxyController',
            'galaxies' => $galaxyRepository->findAll()
        ]);
    }

    #[Route('/galaxies/{id}', name: 'galaxies_details')]
    # @Entity("galaxy", expr="repository.find(id)")

    public function show(Galaxy $galaxy): Response
    {
        return $this->render('galaxy/details.html.twig', [
            'galaxy' => $galaxy,

        ]);
    }
}
