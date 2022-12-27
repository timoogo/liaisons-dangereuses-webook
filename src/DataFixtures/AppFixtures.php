<?php

namespace App\DataFixtures;

use App\Entity\Galaxy;
use App\Entity\Planet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {}
    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
