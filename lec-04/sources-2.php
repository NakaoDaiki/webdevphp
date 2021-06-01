<?php
$scores = [];
$scores[0] = 81;
$scores[1] = 79;
$scores[2] = 78;
$scores[3] = 74;
$scores[4] = 88;
for($i = 0; $i < count($scores); $i++){
    if($scores[$i] >= 80){
        echo "合格";
    }else{
        echo "不合格";
    }
    echo "<br>";
}