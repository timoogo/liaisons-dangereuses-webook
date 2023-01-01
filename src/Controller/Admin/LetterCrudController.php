<?php

namespace App\Controller\Admin;

use App\Entity\Letter;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// import actions 
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class LetterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Letter::class;
    }

    public function configureFields(string $pageName): iterable
    {

        return [
            IdField::new('id')->setDisabled()->hideOnIndex()->hideOnForm(),
            TextField::new('title')->setSortable(true),
            // AssociationField for sender Character mandatory
            AssociationField::new('sender'),
            AssociationField::new('receiver'),
            // AssociationField for receiver Character mandatory
            TextareaField::new('content')->hideOnIndex(),
            // next and previous Letter in edit mode

            ];
    }

}
