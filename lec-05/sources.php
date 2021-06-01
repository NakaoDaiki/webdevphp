<?php
$scores = [];
$scores["language"] = 81;
$scores["math"] = 79;
$scores["english"] = 78;
$scores["society"] = 74;
$scores["science"] = 88;
foreach($scores as $key => $value){
    echo "{$key} : {$value}";
    echo "<br>";
}