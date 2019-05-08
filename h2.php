<?php require "head.php"; ?>

<h2>Harjoitus 2</h2>
<h3>Ostosten hinta </h3>
<form action="h2.php" method="post">
    Anna rahamäärä: <input type="number" name="hinta" maxlength=30><br>
    Anna loppusumma: <input type="number" name="summa" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['hinta'], $_POST['summa'])){
        $Takaisin = round ($_POST['hinta'] - $_POST['summa'],2) ;
        if ($Takaisin >= 0){
        echo "Takaisin annettava rahamäärä: $Takaisin ";
} else {
    echo "Anna lisää rahee!";
}
}
?>
