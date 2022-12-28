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
                "id" => 1
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 2
                
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 3
                
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],        
                "id" => 4
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 5
                 
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 6
                
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 7
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 8
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
                "id" => 9
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 10
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 11
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 12
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
                "id" => 13
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 14
                
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 15
            ],
        
        
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Carnay"],
                "id" => 16
            ],
            
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 17
            ],
            
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 18
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 19
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" =>$names["Danceny"],
                "id" => 20
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 21
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 22
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 23
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 24
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 25
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 26
            ],
            
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 27
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 28
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 29
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 30
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 31
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 32
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Présidente"],
                "id" => 33
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 34
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 35
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 36
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"] ,
                "id" => 37
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 38
            ],
            
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 39
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 40
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 41
            ],
            
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 42
            ],
            
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 43
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 44
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 45
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 46
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["MereVolanges"],
                "id" => 47
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 48
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 49
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 50
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 51
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 52
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 53
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 54
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 55
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 56
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"] ,
                "id" => 57
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 58
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 59
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 60
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 61
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 62
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"] ,
                "id" => 63
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 64
            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Danceny"],
                "id" => 65
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 66
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["MereVolanges"],
                "id" => 67
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 68
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 69
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 70
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 71
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 72
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 73
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 74
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 75
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
                "id" => 76
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 77
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Carnay"],
                "id" => 78
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 79
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 80
            ],
            [
          
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 81
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 82
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 83
            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 84
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 85
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 86
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Cécile"],
                "id" => 87
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 88
            ],
            [
                "sender" => $names["Maréchale"] ,
                "receiver" => $names["Marquise"] ,
                "id" => 89
            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
                "id" => 90
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
                "id" => 91
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
                "id" => 92
            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 93
            ],
            [
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 94
            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" => 95
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 96
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 97
            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Vicomte"],
                "id" => 98
            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 99
            ],
            [
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 100

            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Marquise"],
                "id" => 101

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 102

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 103

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Azolan"],
                "id" => 104

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 105

            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 106

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["MereVolanges"],
                "id" => 107

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Cécile"],
                "id" => 108

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 109

            ],
            [
        
                "sender" => $names["Azolan"],
                "receiver" => $names["Vicomte"],
                "id" => 110

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 111

            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Marquise"],
                "id" => 112

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 113

            ],
            [
        
                "sender" => $names["Gercourt"],
                "receiver" => $names["MereVolanges"],
                "id" => 114

            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"] ,
                "id" => 115

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 116

            ],
            [
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 117

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 118

            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Cécile"],
                "id" => 119

            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"] ,
                "id" => 120

            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
                "id" => 121

            ],
            [
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 122

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Anselme"],
                "id" => 123

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
                "id" => 124

            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 125

            ],
            [
        
                "sender" => $names["Anselme"],
                "receiver" => $names["Vicomte"],
                "id" => 126

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 127

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 128

            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 129

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 130

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 131

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 132

            ],
            [
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Présidente"],
                "id" => 133

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 134

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 135

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 136

            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 137

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 138

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Vicomte"],
                "id" => 139

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Présidente"],
                "id" => 140

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 141

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 142

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 143

            ],
            [
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 144

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" => 145

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 146

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Rosemonde"],
                "id" => 147

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 148

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" =>     149

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Danceny"],
                "id" => 150

            ],
            [
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 151

            ],
            [
                "sender" => $names["Danceny"],
                "receiver" => $names["Marquise"],
                "id" => 152

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" => 153

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"],
                "id" =>  154

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"],
                "id" =>     155

            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 156

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Danceny"],
                "id" => 157

            ],
            [
        
                "sender" => $names["Cécile"],
                "receiver" => $names["Danceny"],
                "id" => 158

            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" =>     159

            ],
            [
        
                "sender" => $names["Vicomte"],
                "receiver" => $names["Marquise"] ,
                "id" => 160

            ],
            [
        
                "sender" => $names["Marquise"],
                "receiver" => $names["Vicomte"] ,
                "id" => 161

            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 162

            ],
            [
        
                "sender" => $names["Présidente"],
                "receiver" => $names["Anonyme"] ,
                "id" => 163

            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Vicomte"],
                "id" => 164

            ],
            [
        
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
                "id" => 165

            ],
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Bertrand"],
                "id" => 166

            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 167

            ],
            [
        
                "sender" => $names["Bertrand"],
                "receiver" => $names["Rosemonde"],
                "id" => 168

            ],
        
            [
        
                "sender" => $names["Anonyme"],
                "receiver" => $names["Danceny"],
                "id" => 169
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 170
            ],
            
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
                "id" => 171
            ],
            
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 172
            ],
            
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["Danceny"],
                "id" => 173
            ],
            
            [
        
                "sender" => $names["Rosemonde"],
                "receiver" => $names["MereVolanges"],
                "id" => 174
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 175
            ],
            [
        
                "sender" => $names["Danceny"],
                "receiver" => $names["Rosemonde"],
                "id" => 176
            ],
            [
        
                "sender" => $names["MereVolanges"],
                "receiver" => $names["Rosemonde"],
                "id" => 177
            ],
        ]
    ];

    
    $characters = $this->characterRepository->findAll();
    // store sender and receiver from the array in a variable


    $files = scandir($path);
    sort($files, SORT_NUMERIC);
    $numFiles = count($files);
    // sort the files in numerical order
    for ($i = 0; $i < $numFiles; $i++) {

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
