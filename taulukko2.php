<?php require "head.php"; ?>

<h2>Tehtävä 4.2</h2>

<?php

    $task = [
        "Tehtävä" => "Osta Jäätelöä",
        "Deadline" => "1.6.2019",
        "Vastuuhenkilö" => "Niko",
        "Valmis" => true
    ]
;
    $task2 = [
        "Tehtävä" => "Käytä koira",
        "Deadline" => "2.6.2019",
        "Vastuuhenkilö" => "Allu",
        "Valmis" => false
    
    ]
    ;
    $task3 = [
        "Tehtävä" => "Laita ruokaa",
        "Deadline" => "1.6.2019",
        "Vastuuhenkilö" => "Meri",
        "Valmis" => false
    
    ];

    $tasks = [$task,$task2,$task3];

    foreach($tasks as $task) :?>
    <ul>
    <li>
    <?= "Tehtävä: ".$task['Tehtävä'] ?>
    </li> 
    <li>
    <?="Deadline: ".$task['Deadline'] ?>
    </li> 
    <li>
    <?="Vastuuhenkilö: ".$task['Vastuuhenkilö'] ?>
    </li> 
    <li>
    <?="Valmis: ".($task['Valmis']? "Valmis" : "Kesken")  ?>
    </li> 
</ul>
<?php endforeach ?>

<?php foreach($tasks as $task) :?>
 <ul>
 <?php 
 foreach($task as $key => $value){
     if($key === "Valmis"){
        echo "<li>" . ucwords($key) . ":" . ($value ? "&#9989;" : "&#10060;") . "</li>"; 
 }else {
    echo "<li> $key : $value </li>"; 
 }
}
 ?>
</ul>
<?php endforeach ?>

