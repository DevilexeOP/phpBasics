<?php

/* Operators in Php
1- Arthmetic Operators
2-Assignment Operators
3-Comparison Operators
4-Logical Operators

1- Arthmetic Oeprators same as Python Programming Language
(+ , - , * , / )

*/

// 2- Assignment Operators
$x = $a;
echo "for x , the value is " . $x . "<br>" ;
$a += 6;
echo "for a , the value is " . $a . "<br>" ;
$a -= 6;
echo "for a , the value is " . $a . "<br>" ;
$a *= 6;
echo "for a , the value is " . $a . "<br>" ;
$a /= 6;
echo "for a , the value is " . $a . "<br>" ;


// 3-Comparison Operators
$x = 712;
$y = 733;

echo "For x == y , the result is ";
echo  var_dump($x == $y);
echo "<br>" ;

echo "For x < y , the result is ";
echo  var_dump($x < $y);
echo "<br>" ;

echo "For x > y , the result is ";
echo  var_dump($x > $y);
echo "<br>" ;

echo "For x <= y , the result is ";
echo  var_dump($x <= $y);
echo "<br>" ;

echo "For x <= y , the result is ";
echo  var_dump($x <> $y);
echo "<br>" ;


// 4- Logical Operators
$m = true;
$n = false;

echo "For m and n , the result is ";
echo  var_dump($m and  $n);
echo "<br>" ;

echo "For m or n , the result is ";
echo  var_dump($m or $n);
echo "<br>" ;

echo "For m && n , the result is ";
echo  var_dump($m && $n);
echo "<br>" ;

echo "For m || n , the result is ";
echo  var_dump($m || $n);
echo "<br>" ;

echo "For !m  , the result is ";
echo  var_dump(!$m);
echo "<br>" ;


?>