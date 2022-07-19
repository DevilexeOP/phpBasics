<?php
echo "Welcome to forEachLoops";
$arr = array("bananas","apples","Harpic","monkey");

// for($i=0; $i < count($arr);$i++){
//     echo $arr[$i];
//     echo "<br>";
// }

//  Better way to do this

foreach ($arr as $value) {
   echo "$value <br>";
}


?>