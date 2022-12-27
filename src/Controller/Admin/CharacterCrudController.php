<?php

namespace App\Controller\Admin;

use App\Entity\Character;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CharacterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Character::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
//            IdField::new('id')->setDisabled()->hideOnIndex(),
            TextField::new('name'),
            // field for description as a text area
            TextField::new('description'),
            BooleanField::new('isOriginal'),            
            ];
    }

}
