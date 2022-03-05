<?php

namespace App\Controller\Admin;

use App\Entity\Officer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OfficerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Officer::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled()->hideOnIndex(),
            TextField::new('name'),
            AssociationField::new('spacecraft_related'),
        ];
    }

}
