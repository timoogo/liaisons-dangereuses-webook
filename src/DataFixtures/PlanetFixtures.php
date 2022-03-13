<?php

namespace App\DataFixtures;

use App\Entity\Galaxy;
use App\Entity\Planet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlanetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tab_planet = array(
            array('name' => 'Earth', 'diameter' => 1000000000 ),
            array('name' => 'Jupiter', 'diameter' => 1000000000 ),
            array('name' => 'Mars', 'diameter' => 1000000000 ),
            array('name' => 'Saturn', 'diameter' => 1000000000 ),

        );

        foreach($tab_planet as $row_planet)
        {
            $planet = new Planet();

            $planet->setName($row_planet['name']);

            $planet->setDiameter($row_planet['diameter']);
            $manager->persist($planet);
        }
        $manager->flush();
    }
}
