<?php
$response =[];
$ort = [["name" => "Markplatz", "Beschreibung" => "Voller"],
    ["name" => "Schmiede", "Beschreibung" => "Heiss"],
    ["name" => "Kirche", "Beschreibung" => "Still"],
    ["name" => "Rathaus", "Beschreibung" => "Rathaus Beschreibung"],
    ["name" => "Wirtshaus", "Beschreibung" => "Besoffene Gaeste"],
    ["name" => "Burgtor", "Beschreibung" => "Wachen stehen da"],
    ["name" => "Eigenes Haus", "Beschreibung" => "Ofen brennt"],
    ["name" => "Schatz gefunden", "Beschreibung" => "Du hast Gewonnen"]];
$befehl = $_GET['input'];

if ($befehl == 'norden' || 'osten' || 'süden' || 'westen') {
    $zufall = array_rand($ort, 1);
    $response["ort"] = $ort[$zufall];
    $json = json_encode($response["ort"]);
}




$tipp  = ['output => Geh nach Norden',
          'output => Geh nach Osten',
          'output => Geh nach Sueden',
          'output => Geh nach Westen'];

$starttext = ['output => Du Findest eine Notiz auf dem Boden....',
              'output => Ein verdeckt gekleiderter man rempelt dich an und laesst Notiz fallen...',
            'output => Dein Vater gibt Erzaehlt dir von einem Schatz...'];




//if ($input == 2) {
//    $zufalltipp = array_rand($tipp, 1);
//    $response = $tipp[$zufalltipp];
//}
//if ($input == 0) {
//    $zufallstart = array_rand($starttext, 1);
//    $response = $starttext[$zufallstart];
//}







