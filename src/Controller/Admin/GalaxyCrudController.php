<?php

namespace App\Controller\Admin;

use App\Entity\Galaxy;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GalaxyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Galaxy::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
