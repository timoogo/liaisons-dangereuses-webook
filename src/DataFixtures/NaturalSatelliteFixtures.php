<?php

namespace App\DataFixtures;

use App\Entity\NaturalSatellite;
use App\Entity\Planet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

abstract class NaturalSatelliteFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            PlanetFixtures::class,
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $tab_craft = array(
            array('name' => 'ISS', 'description' => "desc", 'sponsor'=>'nasa', 'setTypeOfMission' => 'Experimental'),
            array('name' => 'ISS2', 'description' => "desc", 'sponsor'=>'nasa','setTypeOfMission' => 'Observation'),

        );

        foreach($tab_craft as $row)
        {
            $n_s = new NaturalSatellite();

            $n_s->setName($row['name']);
            $n_s->setDiameter(rand(200, 9999999));
            $n_s->setPlanet($this->getReference(PlanetFixtures::related_planet));
            $manager->persist($n_s);


        }


        $manager->flush();
    }
}
