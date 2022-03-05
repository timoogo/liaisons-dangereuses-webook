<?php

namespace App\Controller;

use App\Entity\Officer;
use App\Repository\OfficerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;


class OfficerController extends AbstractController
{

    #[Route('/officers', name: 'officers')]
    public function index(OfficerRepository $officerRepository): Response
    {
        return $this->render('officer/index.html.twig', [
            'controller_name' => 'OfficerController',
            'officers' => $officerRepository->findAll(),
        ]);
    }
    #[Route('/officers/{id}', name: 'officers_details')]
    # @Entity("officer", expr="repository.find(id)")

    public  function show(Officer $officer):Response {
        return $this->render('officer/details.html.twig', [
            'officer' => $officer,

        ]);
    }
}
