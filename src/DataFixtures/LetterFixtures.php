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
       //  path to the letters
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
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 1
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 2
                
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 3
                
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],        
                "id" => 4
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 5
                 
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 6
                
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 7
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 8
            ],
            [
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
                "id" => 9
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 10
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 11
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 12
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
                "id" => 13
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 14
                
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 15
            ],
        
        
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 16
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 17
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 18
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 19
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" =>$names["Danceny"],
                "id" => 20
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 21
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 22
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 23
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 24
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 25
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 26
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 27
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 28
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 29
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 30
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 31
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 32
            ],
            [
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
                "id" => 33
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 34
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 35
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 36
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"] ,
                "id" => 37
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 38
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 39
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 40
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 41
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 42
            ],
            
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 43
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 44
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 45
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 46
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 47
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 48
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 49
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 50
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 51
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 52
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 53
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 54
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 55
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 56
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"] ,
                "id" => 57
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 58
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 59
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 60
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 61
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 62
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"] ,
                "id" => 63
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 64
            ],
            [
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Danceny"],
                "id" => 65
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 66
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["MereVolanges"],
                "id" => 67
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 68
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 69
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 70
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 71
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 72
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 73
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 74
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 75
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
                "id" => 76
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 77
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 78
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 79
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 80
            ],
            [
          
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 81
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 82
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 83
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 84
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 85
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 86
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
                "id" => 87
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 88
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Maréchale"] ,
                "receiver" => $names["Marquise"] ,
                "id" => 89
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
                "id" => 90
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
                "id" => 91
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
                "id" => 92
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 93
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 94
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" => 95
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 96
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 97
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
                "id" => 98
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 99
            ],
            [
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 100

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Marquise"],
                "id" => 101

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 102

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 103

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Azolan"],
                "id" => 104

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 105

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 106

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
                "id" => 107

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
                "id" => 108

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 109

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Azolan"],
                "receiver" => $names["Vicomte"],
                "id" => 110

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 111

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 112

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 113

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Gercourt"],
                "receiver" => $names["MereVolanges"],
                "id" => 114

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"] ,
                "id" => 115

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 116

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 117

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 118

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 119

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"] ,
                "id" => 120

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
                "id" => 121

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 122

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Anselme"],
                "id" => 123

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
                "id" => 124

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 125

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Anselme"],
                "receiver" => $names["Vicomte"],
                "id" => 126

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 127

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 128

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 129

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 130

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 131

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 132

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 133

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 134

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 135

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 136

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 137

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 138

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 139

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 140

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 141

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 142

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 143

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 144

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 145

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 146

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 147

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 148

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" =>     149

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
                "id" => 150

            ],
            [
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 151

            ],
            [
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
                "id" => 152

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 153

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" =>  154

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" =>     155

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 156

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
                "id" => 157

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 158

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" =>     159

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"] ,
                "id" => 160

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"] ,
                "id" => 161

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 162

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Présidente"],
                "receiver" => $names["Anonyme"] ,
                "id" => 163

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" => 164

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
                "id" => 165

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Bertrand"],
                "id" => 166

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 167

            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
                "id" => 168

            ],
        
            [
        
                "title" => "Lettre",
                "sender" => $names["Anonyme"],
                "receiver" => $names["Danceny"],
                "id" => 169
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 170
            ],
            
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
                "id" => 171
            ],
            
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 172
            ],
            
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Danceny"],
                "id" => 173
            ],
            
            [
        
                "title" => "Lettre",
                "sender" => $names["Rosemonde"],
                "receiver" => $names["MereVolanges"],
                "id" => 174
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 175
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
                "id" => 176
            ],
            [
        
                "title" => "Lettre",
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 177
            ],
        ]
    ];

    
    $characters = $this->characterRepository->findAll();
    // store sender and receiver from the array in a variable


    $files = scandir($path);
   // sort($files, SORT_NUMERIC);
    $numFiles = count($files) -1;
    sort($files, SORT_NUMERIC);
/*
*  for each file in the directory, we create a new letter
*/


for ($i = 3; $i < $numFiles; $i++) {

    $sender = $array_sender_receiver[0][$i]["sender"];
    $receiver = $array_sender_receiver[0][$i]["receiver"];
    $id = $array_sender_receiver[0][$i]["id"];
    $file = $files[$i];
    $letter = new Letter();
    $letter->setId($id);
    if ($file != "." && $file != "..") {
        $content = file_get_contents($path . $file);
        echo $i . "\n";
       
        echo "id --> ". $letter->getId() . "\n";
        // title of the letter is everything after the underscore but without the extension .txt
        $letter->setTitle($file);



        $letter->setSender($this->characterRepository->findOneBy(['name' => $sender]));
        $letter->setReceiver($this->characterRepository->findOneBy(['name' => $receiver]));
        $letter->setContent($content);

        $manager->persist($letter);
    }

}
$manager->flush();

 
}

 
    public function getDependencies()
    {
        return [
            CharacterFixtures::class,
        ];
    }
        
}
