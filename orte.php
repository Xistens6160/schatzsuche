<?php
$response =[];

$ort = [["name" => "Markplatz", "Beschreibung" => "Der Markplatz ist reichlich Besucht von Händlern aus der ganzen Welt...."],
    ["name" => "Schmiede", "Beschreibung" => "Du siehst wie der Schmied das neue Schwert schleift"],
    ["name" => "Kirche", "Beschreibung" => "Du siehst ein Prister der vor einer kleinen Menschenhruppe eine Predigt hält"],
    ["name" => "Rathaus", "Beschreibung" => "Vor dem Rathaus ist ein kleiner Stand aufgebaut wo die Bürger ihre Steuern zahlen müssen"],
    ["name" => "Wirtshaus", "Beschreibung" => "Schon von draußen hörst du das gebrülle und gelache der Besoffenen Geaste"],
    ["name" => "Burgtor", "Beschreibung" => "Das Burgtor ist stark von Wachen bewacht, du hast keine Chance da durch zu kommen"],
    ["name" => "Eigenes Haus", "Beschreibung" => "Aus deinem Haus kommt ein leckerer Geruch, wie es aussieht kocht deine Mutter gerade"],
    ["name" => "Schatz gefunden", "Beschreibung" => "Du hast Gewonnen"]];

$tipp  = [["tipp" => "Geh nach Norden"],
         ["tipp" => "Geh nach Osten"],
         ["tipp" => "Geh nach Sueden"],
         ["tipp" => "Geh nach Westen"]];

$starttext = [["start" => "Du Findest eine Notiz auf dem Boden, in der Notiz steht das sich irgendwo in der Stadt ein Schatz befindet. Also Startest du die Suche"],
              ["start" => 'Ein verdeckt gekleiderter man rempelt dich an und laesst Notiz fallen, auf der Notiz steht:"Der Schatz ist in der Stadt". Da du nichts zu tun hast beginnst du die Suche nach dem Schatz'],
              ["start" => "Dein Vater gibt Erzaehlt dir von einem Schatz den er in seiner Kindheit gesucht hat, er soll irgendwo in der Stadt sein. Also versuchst du es selber mal und suchst nach dem Schatz"]];


    $zufall = array_rand($ort, 1);
    $response["ort"] = $ort[$zufall];
    $json = json_encode($response["ort"]);












//if ($input == 2) {
//    $zufalltipp = array_rand($tipp, 1);
//    $response = $tipp[$zufalltipp];
//}
//if ($input == 0) {
//    $zufallstart = array_rand($starttext, 1);
//    $response = $starttext[$zufallstart];
//}







