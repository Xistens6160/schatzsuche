<?php
$befehl = $_GET['input'];
include 'orte.php';

if ($befehl == 'norden' || 'osten' || 'süden' || 'westen')
{
    echo '<script src="lib.js">',
    'callRichtung(1);',
    '</script>'
    ;
}

if ($befehl == 'tipp')
{
//    echo '<script src="lib.js">',
//    'callRichtung(2);',
//    '</script>'
//    ;
}

if ($befehl == 'start')
{
    echo  $ausgabestart;
}

