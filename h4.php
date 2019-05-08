<?php require "head.php"; ?>

<h2>Harjoitus 4</h2>
<h3>Random luku</h3>
<form action="h4.php" method="post">
    Anna luku väliltä 1-10 <input type="number" name="luku" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['luku'])){
        $Luku = rand (1,10) ;
        $ALuku = $_POST ['luku'];
if ($Luku == $ALuku){
        echo "Onneksi olkoon!";
} else {
    echo "Ei osunut";
}
}
?>