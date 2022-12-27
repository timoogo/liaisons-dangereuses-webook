<?php

namespace App\DataFixtures;

use App\Entity\Letter;
use App\Repository\CharacterRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LetterFixtures extends Fixture
{
    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    public function load(ObjectManager $manager): void
    {
        // path to the letters
        $path = __DIR__ . '/letters/';
 
        $names =[
            "Marquise"=>["Marquise de Merteuil"],
            "Vicomte"=>["Vicomte de Valmont"],
            "Présidente"=>["Présidente de Tourvel"],
            "MereVolanges"=>["Mme de Volanges"],
            "Cécile"=>["Cécile de Volanges"],
            "Danceny"=>["Chevalier Danceny"],
            "Rosemonde"=>["Mme de Rosemonde"],
            "Gercourt"=>["Comte de Gercourt"],
            "Carnay"=>["Sophie Carnay"],
            "Victoire"=>["Victoire"],
            "Azolan"=>["Azolan"],
            "Maréchale"=>["Maréchale de..."],
            "Prévan"=>["Prévan"],
            "Anselme"=>["Anselme"],
            "Anonyme"=>["Anonyme"],
            "Bertrand"=>["Bertrand"],
            "Chevalier"=>["Chevalier de Belleroche"],
        ];
        
    $array_sender_receiver = [
        [
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],        
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                 
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
        
        
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
            ],
            
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Danceny"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"] ,
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
            ],
            
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"] ,
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"] ,
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Danceny"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
          
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Maréchale"] ,
                "receiver" => $names["Marquise"] ,
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Azolan"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Azolan"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Gercourt"],
                "receiver" => $names["MereVolanges"],
            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"] ,
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"] ,
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Anselme"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Anselme"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"] ,
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"] ,
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Anonyme"] ,
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
            ],
            [
        
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Bertrand"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
            ],
        
            [
        
                "sender" => $names["Anonyme"],
                "receiver" => $names["Danceny"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
            ],
            
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Danceny"],
            ],
            
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["MereVolanges"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
            ],
        ]
    ];

    
    $characters = $this->characterRepository->findAll();
    // store sender and receiver from the array in a variable


    $files = scandir($path);
    $numFiles = count($files);
    
    for ($i = 0; $i < $numFiles; $i++) {

        $sender = $array_sender_receiver[0][$i]["sender"];
        $receiver = $array_sender_receiver[0][$i]["receiver"];
        $file = $files[$i];
        if ($file != "." && $file != "..") {
            $content = file_get_contents($path . $file);
            $letter = new Letter();
            // title of the letter is everything after the underscore but without the extension .txt
            $letter->setTitle(substr($file, strpos($file, "_") + 1, strpos($file, ".") - strpos($file, "_") - 1));
            


            $letter->setSender($this->characterRepository->findOneBy(['name' => $sender]));
            $letter->setReceiver($this->characterRepository->findOneBy(['name' => $receiver]));
            $letter->setContent($content);

            $manager->persist($letter);
        }
    }
    // flush the manager
    $manager->flush();
  
    }

 
    public function getDependencies()
    {
        return [
            CharacterFixtures::class,
        ];
    }
        
}
