<?php require "head.php"; ?>

<h2>Harjoitus 6</h2>
<h3>Palkka laskenta </h3>
<form action="h6.php" method="post">
    Tehdyt tunnit: <input type="number" name="tunnit" maxlength=30><br>
    Anna tuntipalkka:     <input type="number" name="palkka"><br>
Anna veroprosentti (esim.30):   <input type="number" name="vpros"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['tunnit'], $_POST['palkka'],$_POST['vpros'])){
        $bruttopalkka = $_POST['tunnit'] * $_POST['palkka'];
        $vero = ($_POST['vpros']/100) * $bruttopalkka;
        $nettopalkka = $bruttopalkka - $vero;

        echo "Bruttopalkka: $bruttopalkka € <br>" ;
        echo " Vero: $vero % <br>";
        echo "Nettopalkka: $nettopalkka € <br>";
    }
?>
