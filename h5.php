<?php require "head.php"; ?>

<h2>Harjoitus 5</h2>
<h3>Koearvosana </h3>
<form action="h5.php" method="post">
   Valitse kokeen arvosana: <input type="number" name="arvosana" maxlength=30><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['arvosana'])){
        $luku = $_POST ['arvosana'];
        if ($luku == 1){
        echo "Parannettavaa";
} else if ($luku == 2) {
    echo "Ihan Ok, vielä on töitä";
}else if ($luku == 3){
    echo "Hienoa työtä!";
} else {
    echo "Anna oikea arvosana!";
}
}
?>
