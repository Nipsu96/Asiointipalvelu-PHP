<?php require "head.php"; ?>

<h2>Harjoitus 3</h2>
<h3>Arvolisävero </h3>
<form action="h3.php" method="post">
    Anna Hinta: <input type="number" name="hinta" maxlength=30><br>
    Anna alv% (esim 23): <input type="number" name="alv" maxlength=30><br>
             <input type="submit" value="Lähetä"> 
</form>

<?php
if(isset($_POST['hinta'], $_POST['alv'])){
        $alv = round (($_POST['alv'] /100)* $_POST['hinta'] ,2) ;
        $verollinen = round ( $_POST['hinta'] + $alv);

        echo "Alv euroissa: $alv € "."<br>" ;
        echo "Verollinen hinta: $verollinen €";
    }
?>