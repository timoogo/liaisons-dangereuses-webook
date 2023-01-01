<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LetterRepository;
use App\Repository\CharacterRepository;
class AppController extends AbstractController
{
    function __construct(LetterRepository $letterRepository, CharacterRepository $characterRepository)
    {
        $this->letterRepository = $letterRepository;
        $this->characterRepository = $characterRepository;
    }
    #[Route('/', name: 'app')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'letters' => $this->letterRepository->findAll(),
            'characters' => $this->characterRepository->findAll(),
        ]);
    }
}
