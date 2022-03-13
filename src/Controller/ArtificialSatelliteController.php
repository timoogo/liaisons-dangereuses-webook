<?php

namespace App\Controller;

use App\Entity\ArtificialSatellite;
use App\Repository\ArtificialSatelliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtificialSatelliteController extends AbstractController
{
    #[Route('/artificial_satellites', name: 'artificial_satellites')]
    public function index(ArtificialSatelliteRepository $artificialSatelliteRepository): Response
    {
        return $this->render('artificial_satellite/index.html.twig', [
            'controller_name' => 'ArtificialSatelliteController',
            'artificial_satellites' => $artificialSatelliteRepository->findAll(),

        ]);
    }
    #[Route('/artificial_satellites/{id}', name: 'artificial_satellites_details')]
    # @Entity("artificial_satellite", expr="repository.find(id)")

    public function show(ArtificialSatellite $artificialSatellite): Response
    {
        return $this->render('artificial_satellite/details.html.twig', [
            'artificial_satellite' => $artificialSatellite,

        ]);
    }
}
