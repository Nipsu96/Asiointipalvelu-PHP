<?php
echo "Niko \n";
$nimi = "Lukas \n";
echo $nimi;
$tervehdys = "Hei mitä kuuluu $nimi ";
echo $tervehdys . "ja Niko?\n";

$nimet = ["Keijo","Lukas", "Pertti", "Jaana"];
echo $nimet[1];

$ikä = 10;
if ($ikä >= 18) {
    echo "Olet täysi-ikäinen\n";
} else{
    echo "Olet lapanen \n";
}

function tervehdi ($nimi){
    echo "Heippa $nimi \n";
}
tervehdi("Jussi");
tervehdi ("Pekka");

echo (5*5)/2 ;