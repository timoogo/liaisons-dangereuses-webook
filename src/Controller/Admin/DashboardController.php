<?php

namespace App\Controller\Admin;
use App\Entity\Character;
use App\Entity\Letter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class DashboardController extends AbstractDashboardController
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(CharacterCrudController::class)->generateUrl());

    }
    public function sortByIdAsc()
{
    // récupérez votre liste d'enregistrements

    $records = $this->entityManager->getRepository(Letter::class)->findAll();
    // triez votre liste d'enregistrements en utilisant la fonction usort() et une fonction de comparaison qui compare l'ID de chaque enregistrement
    usort($records, function($a, $b) {
        return $a->getId() <=> $b->getId();
    });

    // retournez votre liste triée
    return $records;
}

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Liaisons Dangereuses');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section("Personnages");
        yield MenuItem::linkToCrud('Characters', 'fa fa-user-astronaut', Character::class);

        yield MenuItem::section("Lettres");
        yield MenuItem::linkToCrud('Letters', 'fa fa-envelope', Letter::class);
    }
}
