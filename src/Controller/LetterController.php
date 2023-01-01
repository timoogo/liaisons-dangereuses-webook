<?php

namespace App\Controller;

use App\Entity\Letter;
use App\Repository\LetterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;


class LetterController extends AbstractController
{

    #[Route('/letters', name: 'app_letter_crud_index')]
    public function index(LetterRepository $letterRepository): Response
    {
        return $this->render('letter_crud/index.html.twig', [
            'controller_name' => 'LetterController',
            'letters' => $letterRepository->findAll(),
        ]);
    }
    #[Route('/letters/{id}', name: 'app_letter_crud_show')]
    # @Entity("letter", expr="repository.find(id)")

    public  function show(Letter $letter):Response {
        return $this->render('letter_crud/show.html.twig', [
            'letter' => $letter,
            'sender' => $letter->getSender(),
            'receiver' => $letter->getReceiver(),

        ]);
    }
}