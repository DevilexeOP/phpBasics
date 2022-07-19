<?php

echo "Topic - Associative Array";
// simple array [indexed array]
$a = array('dog','cat','mouse' );
echo "<br>";
echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo "<br>";

// Associative Array
$favPet = array(
 'anthony' => 'cat',
 'akhbar'=>'dog',
 'amar' => 'mouse',
);

foreach ($favPet as $key => $value) {
    echo "Favorite pet of $key is $value <br>";
}

echo '<br>';

echo $favPet['anthony'];
echo '<br>';
echo $favPet['akhbar'];
echo '<br>';
echo $favPet['amar'];

?>