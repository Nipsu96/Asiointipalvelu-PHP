<?php require "head.php"; ?>

<h2>Tehtävä 4.1</h2>

<?php

    $task = [
        "tehtävä" => "Osta Jäätelöä",
        "deadline" => "1.6.2019",
        "vastuuhenkilö" => "Niko",
        "valmis" => true
    ]

?>

<ul>
    <li>
    <?= "Tehtävä: ".$task['tehtävä'] ?>
    </li> 
    <li>
    <?="Deadline: ".$task['deadline'] ?>
    </li> 
    <li>
    <?="Vastuuhenkilö: ".$task['vastuuhenkilö'] ?>
    </li> 
    <li>
    <?="Valmis: ".($task['valmis']? "Valmis" : "Kesken")  ?>
    </li> 

</ul>


