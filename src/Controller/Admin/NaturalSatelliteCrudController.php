<?php

namespace App\Controller\Admin;

use App\Entity\NaturalSatellite;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NaturalSatelliteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NaturalSatellite::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled()->hideOnIndex(),
            AssociationField::new("planet"),
            TextField::new('name'),
            IntegerField::new('diameter'),
        ];
    }

}
