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

    #[Route('/characters', name: 'app_character_crud_index')]
    public function index(CharacterRepository $characterRepository): Response
    {
        return $this->render('character_crud/index.html.twig', [
            'controller_name' => 'CharacterController',
            'characters' => $characterRepository->findAll(),
        ]);
    }
    #[Route('/characters/{id}', name: 'app_character_crud_show')]
    # @Entity("character", expr="repository.find(id)")

    public  function show(Character $character):Response {
        return $this->render('character_crud/show.html.twig', [
            'character' => $character,
            'letters_sent' => $character->getSentLetters(),
            'letters_received' => $character->getReceivedLetters(),

        ]);
    }
}
