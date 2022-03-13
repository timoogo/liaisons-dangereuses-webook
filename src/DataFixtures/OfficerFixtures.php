<?php

namespace App\DataFixtures;

use App\Entity\Officer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OfficerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tab_officer = array(
            array('name' => 'Spike', 'spacecraft' => 14 ),
            array('name' => 'Faye Valentine', 'spacecraft' => 17 ),
            array('name' => 'Spoke', 'spacecraft' => 32 ),

        );

        foreach($tab_officer as $row_officer)
        {
            $officer = new Officer();

            $officer->setName($row_officer['name']);
            $manager->persist($officer);

        }

        $manager->flush();
    }
}
