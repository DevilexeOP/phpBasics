<?php

echo "Functions in Php  <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach($marksArr as $value){
        $sum += $value;
        $i ++;
    }
    return $sum/$i;
    
}

$devil = [80,80,77,69,64];
$sumMarks  = processMarks($devil);
$avgMarks  = avgMarks($devil);

echo "marks of devil $sumMarks <br>";
echo "avgmarks of devil $avgMarks";


?>