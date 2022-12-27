<?php

namespace App\Controller;

use App\Entity\Character;
use App\Repository\CharacterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;


class CharacterController extends AbstractController
{

    #[Route('/characters', name: 'characters')]
    public function index(CharacterRepository $characterRepository): Response
    {
        return $this->render('officer/index.html.twig', [
            'controller_name' => 'CharacterController',
            'characters' => $characterRepository->findAll(),
        ]);
    }
    #[Route('/characters/{id}', name: 'characters_details')]
    # @Entity("character", expr="repository.find(id)")

    public  function show(Character $character):Response {
        return $this->render('character/details.html.twig', [
            'character' => $character,

        ]);
    }
}
