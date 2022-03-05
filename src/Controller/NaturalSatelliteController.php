<?php

namespace App\Controller;

use App\Entity\NaturalSatellite;
use App\Repository\NaturalSatelliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NaturalSatelliteController extends AbstractController
{
    #[Route('/natural_satellites', name: 'natural_satellites')]
    public function index(NaturalSatelliteRepository $naturalSatelliteRepository): Response
    {
        return $this->render('natural_satellite/index.html.twig', [
            'controller_name' => 'NaturalSatelliteController',
            'natural_satellites' => $naturalSatelliteRepository->findAll(),

        ]);
    }
    #[Route('/natural_satellites/{id}', name: 'natural_satellites_details')]
    # @Entity("natural_satellite", expr="repository.find(id)")

    public function show(NaturalSatellite $naturalSatellite): Response
    {
        return $this->render('natural_satellite/details.html.twig', [
            'natural_satellite' => $naturalSatellite,

        ]);
    }
}
