<?php
$befehl = $_GET['input'];
include 'orte.php';

if ($befehl == 'norden'&& 'osten' && 'süden' && 'westen')
{
echo $ausgabeort;
}

if ($befehl == 'tipp')
{
echo  $ausgabetipp;
}

if ($befehl == 'start')
{
    echo  $ausgabestart;
}
