<?php require "head.php"; ?>

<h2>Harjoitus 1</h2>
<form action="h1.php" method="post">
    Etunimi: <input type="text" name="name" maxlength=30><br>
    Ikä:     <input type="number" name="age"><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['name'], $_POST['age'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "Mitä kuuluu  $name? ", "Olet $age vuotta vanha";
    }
?>

<?php require "footer.php"; ?>