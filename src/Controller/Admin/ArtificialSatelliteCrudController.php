<?php

namespace App\Controller\Admin;

use App\Entity\ArtificialSatellite;
use Doctrine\Common\Collections\Selectable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Validator\Constraints\Choice;

class ArtificialSatelliteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ArtificialSatellite::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled()->hideOnIndex(),
            TextField::new('name'),
            TextField::new('sponsor'),
            ChoiceField::new('type_of_mission')->setChoices([
                'Experimental' => 'success',
                'Earth Observation' => 'warning',
                'Communication' => 'danger',
                'Navigation' => 'success',])

        ];
    }

}
