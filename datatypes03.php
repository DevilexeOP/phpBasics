<?php
$name = "devil";
$income = "69000000";

/* php data types
1- string data types
2-interger data types
3-float data types
4-boolean data types
5-object data types
6-array data types
7-null data types

*/

// String sqeuence of characters
$name = "devil";
$age =  "17";
echo "$name 's age is $age";
echo "<br>";

// Integer - Non decimal number
$income = 100000;
$debt = 5000;
echo $income;
echo "<br>";
echo $debt;

// Float - Decimal number
$income = 45.7;
$debt =  10.0;
echo $income;
echo "<br>";
echo $debt;

// Boolean - Can be true or false
$x =  true;
$is_friend = false;
echo $x;
echo "<br>";
echo $is_friend;

// Object -Instances of classes
// Employee is a class ---> devil can be an object 

// Array - used to store multiple values in single variable
$friends = array("devil","d3vil","D3vilOPエース");
echo var_dump($friends);
echo "<br>";
echo $friends[2];
echo "<br>";

// Null
$name = NULL;
echo var_dump($name);
?>