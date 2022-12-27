<?php

namespace App\Controller\Admin;
use App\Entity\Character;
use App\Entity\Letter;
use App\Entity\Officer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(OfficerCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Liaisons Dangereuses');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section("Officers");
        yield MenuItem::linkToCrud('Officers', 'fa fa-user-astronaut', Officer::class);
        yield MenuItem::linkToCrud('Characters', 'fa fa-user-astronaut', Character::class);

        yield MenuItem::section("Letters");
        yield MenuItem::linkToCrud('Letters', 'fa fa-envelope', Letter::class);
    }
}
