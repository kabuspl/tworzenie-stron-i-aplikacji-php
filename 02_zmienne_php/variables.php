<?php

$string = "tekst";
$int = 1234;
$float = 12.34;
$bool = false;

echo $string;
echo "<br>";
var_dump($string);
echo "<br><br>";

echo $int;
echo "<br>";
var_dump($int);
echo "<br><br>";

echo $float;
echo "<br>";
var_dump($float);
echo "<br><br>";

echo $bool;
echo "<br>";
var_dump($bool);
echo "<br><br>";

define("STALA_JEDEN", "wartosc jeden");
define("STALA_DWA", 4321);

print(STALA_JEDEN);
echo "<br>";
var_export(STALA_JEDEN);
echo "<br><br>";

print(STALA_DWA);
echo "<br>";
var_export(STALA_DWA);
echo "<br><br>";

?>