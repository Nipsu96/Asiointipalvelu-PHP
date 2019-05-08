<!DOCTYPE html>
<html lang="fi">
<head>
<title>PHP</title>
<link rel="stylesheet" href="index2.css" type="text/css">
</head>
<body>
<?php
$otsikko = "Tervetuloa sivulleni " . htmlspecialchars ($_GET['name']);
?>
<h1>
    <?= $otsikko ?>
</h1>
<p>
    <?php  
    $name = "Tampere";
    echo "Hello $name";
      $vappulaskuri = 7;?>
      <br>
    <?= "Vappuun on:" .  $vappulaskuri . "päivää!" ?>
    <br>
           <?= "How are you $name"?>
</p>

</body>
</html>