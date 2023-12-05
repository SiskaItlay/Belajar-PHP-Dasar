<?php

$name = "Siska Yolanda Asso";

echo "name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$ValueString = (string)100;
var_dump($valueString);

$valuesInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$name = "Siska";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;

echo "Hello $name, Selamat Belajar PHP" . PHP_EOL; 

$var = "Siska";
echo "THIs is {$var}s" . PHP_EOL;