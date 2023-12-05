<?php

$first = [
    "first_name" => "Siska"
];

$last = [
    "first_name" => "Nias",
    "Last_name" => "Asso"
];

$full = $first + $last;
var_dump($full);

$a = [
    "last_name" => "Asso",
    "first_name" => "Siska"
];

var_dump($a == $b);
var_dump($a === $b);