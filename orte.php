<?php
$ort   = ['output => Markplatz',
          'output => Schmiede',
          'output => Kirche',
          'output => Rathaus',
          'output => Wirtshaus',
          'output => Burgtor',
          'output => Eigenes Haus',
          'output => Schatz gefunden'];

$tipp  = ['output => Geh nach Norden',
          'output => Geh nach Osten',
          'output => Geh nach Sueden',
          'output => Geh nach Westen'];

$starttext = ['output => Du Findest eine Notiz auf dem Boden....',
              'output => Ein verdeckt gekleiderter man rempelt dich an und laesst Notiz fallen...',
              'output => Dein Vater gibt Erzaehlt dir von einem Schatz...'];

$zufallort = array_rand($ort,1);
$ausgabeort = $ort[$zufallort];

$zufalltipp = array_rand($tipp,1);
$ausgabetipp = $tipp[$zufalltipp];

$zufallstart = array_rand($starttext,1);
$ausgabestart =$starttext[$zufallstart];


$ausgabeort = json_encode($ausgabeort);
$zufalltipp = json_encode($zufalltipp);
$ausgabestart = json_encode($ausgabestart);

//$ausgaberichtung = utf8_encode($ausgaberichtung);
//$zufalltipp =utf8_encode($zufalltipp);
//$ausgabestart = utf8_encode($ausgabestart);