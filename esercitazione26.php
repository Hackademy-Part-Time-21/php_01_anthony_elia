<?php
// $intero = 8;
// $float = 6.5;
// $stringa = "hello";
// $boolean = true;

// var_dump($intero);
// var_dump($float);
// var_dump($stringa);
// var_dump($boolean);

// define("INTERO",8);
// define("DECIMALE",6.5);
// define("STRINGA", "hello");
// define("BOOLEANO",true);

// var_dump(INTERO);
// var_dump(STRINGA);
// var_dump(DECIMALE);
// var_dump(BOOLEANO);


// $text1 = "Marco"; 
// $text2 = "hai"; 
// $text3 = "sete"; 
// $text4 = "?"; 
// $text5 = "Perchè"; 
// $text6 = "$text2"; 
// $text7 = 'bevuto'; 
// $text8 = "tutto";

// $concat = "$text1 $text2 $text3$text4 $text5 $text6 $text7 $text8"; 

// var_dump($concat); 


$words1 = [ 'una','vita', 'colle', 'mi', 'rosso',
    [ 'oscura','era',
      [ 'mezzo',
        ['cammin', 'Nel', 
          [ 'selva', 'la', 
            [ 'via', 'una' ] 
          ], 
        ] 
      ],
      'ritrovai', 
      'per' 
    ], 
    'diritta' 
  ]; 
  
  
  $words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] 
  ];
$words1 [] = "del";
$words1 [] = "di";

  $result = $words1[5][2][1][1] . " " . $words1[5][2][0] . " " . $words1[7] . " " . $words1[5][2][1][0] . " " . $words1[8] . " " . $words2['elemento2'];
  var_dump($result);