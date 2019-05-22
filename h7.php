<?php require "head.php"; ?>

<h2>Harjoitus 7</h2>
<h3> Alennusprosentti </h3>
<form action="h7.php" method="post">
    Anna yksikköhinta: <input type="number" name="hinta" maxlength=30><br>
    Anna määrä: <input type="number" name="maara" maxlength=30><br>
    Anna alenusprosentti (esim 5): <input type="number" name="alepro" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['hinta'], $_POST['alepro'],$_POST['maara'])){
        $loppusumma = round ($_POST['hinta'] * $_POST['maara'],2) ;
        $alennus = round ($loppusumma)* (($_POST['alepro'])/100);
        $alennettu = round ($loppusumma) - ($alennus);

        echo "Loppusumma: $loppusumma", "<br>";
        echo "Alennus: $alennus", "<br>";
        echo "Alesumma: $alennettu";
}
?>


