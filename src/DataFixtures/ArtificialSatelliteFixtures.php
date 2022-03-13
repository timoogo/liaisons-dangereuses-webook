<?php

namespace App\DataFixtures;

use App\Entity\ArtificialSatellite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArtificialSatelliteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tab_craft = array(
            array('name' => 'ISS', 'description' => "desc", 'sponsor'=>'nasa', 'setTypeOfMission' => 'Experimental'),
            array('name' => 'ISS2', 'description' => "desc", 'sponsor'=>'nasa','setTypeOfMission' => 'Observation'),

        );

        foreach($tab_craft as $row)
        {
            $a_s = new ArtificialSatellite();

            $a_s->setName($row['name']);
            $a_s->setDescription($row['description']);
            $a_s->setSponsor($row['sponsor']);
            $a_s->setTypeOfMission("Experimental");
            $manager->persist($a_s);


        }


        $manager->flush();
    }}
