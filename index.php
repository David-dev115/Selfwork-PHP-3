

<?php



// Selfwork PHP 3
// Dati i seguenti array:

// $words1 = [
//   'vostro',
//   67,
//   'essere',
//   'colle',
//   'mi',
//   'sempre',
// [
//   'oscura',
//   'era',
//   89,
//   [
//   'mezzo',
//    'E'
//   ],
// 'ritrovai',
// 'per'
// ],
// 'diritta'
// ];

// $words2 = [
//   'elemento1' => 25.89,
//   'elemento2' => 'possa',
//   'elemento3' => [
//     'Virgilio',
//     'Favore',
//     'favore',
//     ['fortuna']
//   ],
//  'fine' => '!'
// ];


// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

// HINT:
// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.


$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];



$words1 [] = "Nel";

$words1 [] = "di cammin di nostra vita";

$words1 [] = "una selva";

$words1 [] = ", che la diritta via";

$words1 [] = "smarrita";





$parola_1 = $words1[8];
$parola_2 = $words1[6][3][0];
$parola_3 = $words1[9];
$parola_4 = $words1[4];
$parola_5 = $words1[6][4];
$parola_6 = $words1[6][5];
$parola_7 = $words1[10];
$parola_8 = $words1[6][0];
$parola_9 = $words1[11];
$parola_10 = $words1[6][1];
$parola_11 = $words1[12];
$space = " ";

//carico esercizio completo



print_r($words1);

$results = $parola_1 . $space  . $parola_2 . $space . $parola_3 . $space . $parola_4 . $space . $parola_5 . $space . $parola_6 . $space . $parola_7 . $space . $parola_8 . $parola_9 . $space . $parola_10 . $space . $parola_11 . "." . "\n";

echo $results;

// correzione 