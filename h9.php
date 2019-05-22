<?php require "head.php"; ?>

<h2>Harjoitus 9</h2>
<h3> Arvosana</h3>
<form action="h9.php" method="post">
    Anna arvosanasi: <select name="arvosana">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select><br>
             <input type="submit" value="Lähetä">
</form>

<?php
if(isset($_POST['arvosana'])){
   $arvosana = $_POST ['arvosana'];

   switch ($arvosana) {
       case "1":
           echo "Hylätty!", "<br>";
           break;
       case "2":
           echo "Juuri ja juuri läpi..", "<br>";
           break;
       case "3":
           echo "Paljon parannettavaa", "<br>";
           break;
           case "4":
           echo "Parempi", "<br>";
           break;
       case "5":
           echo "Keskivertoa", "<br>";
           break;
       case "6":
           echo "Paranemaan päin!", "<br>";
           break;
           case "7":
           echo "Hienoa", "<br>";
           break;
       case "8":
           echo "Hyvä :) ", "<br>";
           break;
       case "9":
           echo "Melkein täydellistä!", "<br>";
           break;
           case "10":
           echo "Loistavaa!", "<br>";
           break;
       default:
           echo "Anna Arvosana!", "<br>";
   }
}
   ?>

