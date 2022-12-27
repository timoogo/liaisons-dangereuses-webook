<?php

namespace App\DataFixtures;

use App\Entity\Character;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CharacterFixtures extends Fixture
{
   

    public function load(ObjectManager $manager): void
    {
        // array multidimensionnel avec les données des personnages nom et description
        $characters = [
            [
                'name' => 'Marquise de Merteuil',
                'description' => 'femme à la réputation vertueuse vivant à Paris. Elle cache hypocritement ses machiavéliques turpitudes en amour et en affaires.'
            ], 
            [
                "name" => "Vicomte de Valmont",
                "description" => "complice de matoiserie et ancien amant de la marquise de Merteuil. Sa forte réputation de galant licencieux ne lui apporte aucun préjudice."
            ],
            [
                "name" => "Présidente de Tourvel",
                "description" => "aussi appelée madame de Tourvel, jeune femme digne et pieuse, elle réside au château de madame de Rosemonde en attendant le retour de son mari, le président de Tourvel, qui est en déplacement. Elle a 22 ans."
            ],
            [
                'name' => 'Mme de Volanges',
                'description' => 'une parente de la marquise de Merteuil.'
            ], 
            [
                "name" => "Cécile de Volanges",
                "description" => "la jeune cousine de la marquise de Merteuil qui entre dans le monde après 4 années de couvent. Elle a 15 ans. Sa mère prévoit de la marier au comte de Gercourt."
            ],
            [
                "name" => "Chevalier Danceny",
                "description" => "un jeune chevalier de Malte qui est le professeur de musique de Cécile Volanges et éprouve des sentiments pour elle. Il a 20 ans."
            ],
            [
                'name' => 'Mme de Rosemonde',
                'description' => 'la tante du vicomte de Valmont. Elle est âgée de 84 ans.'
            ], 
            [
                "name" => "Le comte de Gercourt",
                "description" => "ancien amant de la marquise de Merteuil qu'il a quittée pour une autre maîtresse. Il est en voyage pendant le roman. Madame de Volanges a convenu de lui donner sa fille en mariage."
            ],
            [
                "name" => "Sophie Carnay",
                "description" => "amie de couvent et confidente de Cécile Volanges."
            ],
            [
                'name' => 'Victoire',
                'description' => 'fidèle et dévouée femme de chambre de la marquise de Merteuil. La marquise s’assure de la complicité de Victoire par le pouvoir qu’elle détient de la faire enfermer dans un couvent.'
            ], 
            [
                "name" => "Azolan",
                "description" => "le fidèle et dévoué chasseur du vicomte de Valmont. Il est complice de ses machinations."
            ],
            [
                "name" => "Maréchale de...",
                "description" => "amie de la marquise de Merteuil"
            ], 
            [
                "name" => "Prévan",
                "description" => "bel et infatigable séducteur, sa prétention lui vaudra d'être la victime de la marquise de Merteuil."
            ],
            [
                "name" => "Le chevalier de Belleroche",
                "description" => "un jeune chevalier de Malte qui est le professeur de musique de Cécile Volanges et éprouve des sentiments pour elle. Il a 20 ans."
            ]
        ];
        foreach ($characters as $character) {
            $characterEntity = new Character();
            $characterEntity->setName($character['name']);
            $characterEntity->setDescription($character['description']);
            $manager->persist($characterEntity);
        }
        $manager->flush();
    }
}
