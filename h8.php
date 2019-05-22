<?php require "head.php"; ?>

<h2>Harjoitus 8</h2>
<h3> Lukulomake</h3>
<form action="h8.php" method="post">
    Anna luku 1: <input type="number" name="luku1" maxlength=30><br>
    Anna luku 2: <input type="number" name="luku2" maxlength=30><br>
    Tulosta suurempi: <input type="radio" name="valinta" value="suurempi"> <br>
Tulosta pienempi: <input type="radio" name="valinta" value="pienempi"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['luku1'], $_POST['luku2'])){
    $luku1= $_POST['luku1'];
    $luku2 = $_POST ['luku2'];
if ($luku1 < $luku2){
    $pienempi = $luku1;
    $suurempi =$luku2;
}else {
    $pienempi = $luku2;
    $suurempi =$luku1;
}
    if($_POST["valinta"]=="pienempi"){
echo $pienempi;
    }else{
        echo "<br>", $suurempi;
    }
}
?>

