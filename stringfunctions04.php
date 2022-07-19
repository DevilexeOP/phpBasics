<?php
$name = "D3vilOPエース is a programmer and a developer";
echo $name;
echo "<br>";

echo "The length of my string " . strlen($name) . "<br>" . "and the word count is" . str_word_count($name);

echo "<br>";

echo strrev($name);

echo "<br>";

echo strpos($name, "a");

echo "<br>";

echo str_replace("developer", "web developer", $name);

echo "<br>";

echo str_repeat($name,2);

echo "<br>";
echo "<pre>";

echo rtrim("       developer    ");
echo "<br>";
echo ltrim("       developer    ");
echo "</pre>";

?>