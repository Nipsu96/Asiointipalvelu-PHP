<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>
<h3>Bensalaskuri </h3>
<form action="h1.php" method="post">
    Anna rahamäärä: <input type="number" name="hinta" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['hinta'])){
    $Bensa = 1.55;
        $Maara = round ($_POST['hinta']/$Bensa,2) ;

        echo "Bensan määrä:$Maara Litraa";
}
?>
