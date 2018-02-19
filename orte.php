<?php

$tipp  = ['output => Geh nach Norden',
          'output => Geh nach Osten',
          'output => Geh nach Sueden',
          'output => Geh nach Westen'];

$starttext = ['output => Du Findest eine Notiz auf dem Boden....',
              'output => Ein verdeckt gekleiderter man rempelt dich an und laesst Notiz fallen...',
            'output => Dein Vater gibt Erzaehlt dir von einem Schatz...'];

$richtung = $_POST["richtung"];
if ($richtung == 1) {
    $ort   = ['Ort => Markplatz(
            "Beschreibung => Toll"',
        'output => Schmiede',
        'output => Kirche',
        'output => Rathaus',
        'output => Wirtshaus',
        'output => Burgtor',
        'output => Eigenes Haus',
        'output => Schatz gefunden'
];
    $zufall = array_rand($ort,1);
    $response = $ort[$zufall];
}
//if ($input == 2) {
//    $zufalltipp = array_rand($tipp, 1);
//    $response = $tipp[$zufalltipp];
//}
//if ($input == 0) {
//    $zufallstart = array_rand($starttext, 1);
//    $response = $starttext[$zufallstart];
//}

$json = json_encode($response);
echo $json;




