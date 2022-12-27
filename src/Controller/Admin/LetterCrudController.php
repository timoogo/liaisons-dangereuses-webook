<?php

namespace App\Controller\Admin;

use App\Entity\Letter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LetterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Letter::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
           // IdField::new('id')->setDisabled()->hideOnIndex(),
            TextField::new('title'),
            // AssociationField for sender Character mandatory
            AssociationField::new('sender'),
            AssociationField::new('receiver'),
            // AssociationField for receiver Character mandatory
            TextareaField::new('content'),
            
            ];
    }
    
}
