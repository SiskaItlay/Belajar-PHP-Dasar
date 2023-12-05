<?php

$values = array(10, 9, 8, 7, 5);
var_dump($values);

$names = ["Siska", "Yolanda", "Asso"];
var_dump($names);

var_dump($names[0]);

$names[0] = "siska";
var_dump($names);

$unset($names[1]);
var_dump($names);

$names[] = "chika";
var_dump($names);

var_dump(count($names));

$siska = array(
    "id" => "siska",
    "names" => "Siska Asso",
    "age" => 30,
     "address" => array(
        "city" => "Jayapura",
        "country" => "Papaua"
     )
);
var_dump($siska);

var_dump($siska["name"]);
var_dump($siska("address")["country"]);

$nias = [
    "id" => "nias",
    "name" => "Nias Asso",
    "age" => 35,
    "address" => [
        "city" => "Jayapura",
        "country" => "Papua"
    ]
];
var_dump($nias);