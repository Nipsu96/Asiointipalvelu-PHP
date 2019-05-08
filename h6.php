<?php require "head.php"; ?>

<h2>Harjoitus 6</h2>
<form action="h6.php" method="post">
    Tehdyt tunnit: <input type="number" name="tunnit" maxlength=30><br>
    Anna tuntipalkka:     <input type="number" name="palkka"><br>
Anna veroprosentti (esim.30):   <input type="number" name="vpros"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['tunnit'], $_POST['palkka'],$_POST['vpros'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "Mitä kuuluu  $name? ", "Olet $age vuotta vanha";
    }
?>
