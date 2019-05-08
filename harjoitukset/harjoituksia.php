<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<link rel="stylesheet" href="index2.css" type="text/css">
</head>
<body>
<h1>Alennuslaskuri </h1>
<?php 
$hinta = 100;
$alepros = 20; 

function addition() {
    $GLOBALS['loppu'] = (100-$GLOBALS['alepros']) /100 * $GLOBALS['hinta'];
}

addition();
echo "Hinta: $hinta € \n"; ?> <br>
<?="Alennusprosentti $alepros % \n"; ?> <br>
<?="Tuotteen hinta on nyt vain: " . $loppu . "€";
?>

</body>
</html>
