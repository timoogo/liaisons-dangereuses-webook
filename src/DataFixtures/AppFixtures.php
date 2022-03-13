<?php

namespace App\DataFixtures;

use App\Entity\Galaxy;
use App\Entity\Planet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $tab_galaxy = array(
            array('name' => 'Milky Way', 'description' => "The Milky Way[a] is the galaxy that includes our Solar System, with the name describing the galaxy's appearance from Earth: a hazy band of light seen in the night sky formed from stars that cannot be individually distinguished by the naked eye. The term Milky Way is a translation of the Latin via lactea, from the Greek γαλακτικός κύκλος (galaktikos kýklos), meaning \"milky circle.\" From Earth, the Milky Way appears as a band because its disk-shaped structure is viewed from within. Galileo Galilei first resolved the band of light into individual stars with his telescope in 1610. Until the early 1920s, most astronomers thought that the Milky Way contained all the stars in the Universe.[23] Following the 1920 Great Debate between the astronomers Harlow Shapley and Heber Curtis,[24] observations by Edwin Hubble showed that the Milky Way is just one of many galaxies.", 'hubbleSequence' => 'S'),
            array('name' => 'Andromeda', 'description' => "The well-known Andromeda Galaxy, also known as Messier 31, is a spiral galaxy and the nearest neighboring galaxy to the Milky Way. In 4.5 billion years, scientists believe that the Andromeda Galaxy and Milky Way Galaxy will collide, crashing together to form a new, giant elliptical galaxy. Although the Andromeda Galaxy contains around a trillion stars, it’s actually smaller than the Milky Way as result of containing less dark matter.", 'hubbleSequence' => 'S'),
            array('name' => 'Tadpole', 'description' => "Classified as a disrupted barred spiral galaxy, the Tadpole Galaxy stands apart from most of its counterparts. The unique tadpole-like shape that earned the galaxy its name is what makes it so unusual. Scientists believe that the Tadpole Galaxy got its unique shape from a prior collision with a smaller galaxy. The materials of the weaker galaxy have been absorbing into the Tadpole Galaxy, giving it the tail that makes it so notable.", 'hubbleSequence' => 'S'),
            array('name' => 'ESO 444-46', 'description' => "ESO 444-46 shines as the brightest member of the galaxy cluster Abell 3558 which lies in the Shapely Supercluster, setting it apart as particularly beautiful from a distance. This elliptical galaxy also boasts an estimated population of about 27,000 globular clusters, which could establish it as possessing the largest population yet studied.", 'hubbleSequence' => 'S'),

        );

        foreach($tab_galaxy as $row)
        {
            $galaxy = new Galaxy();

            $galaxy->setName($row['name']);
            $galaxy->setDescription($row['description']);
            $galaxy->setHubbleSequence($row['hubbleSequence']);
            $manager->persist($galaxy);


}


        $manager->flush();
    }
}
