<?php

namespace App\Controller\Admin;

use App\Entity\Planet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PlanetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Planet::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled()->hideOnIndex(),
            TextField::new('name'),
            IntegerField::new('diameter'),
            TextField::new('galaxy'),

            ];
    }

}
