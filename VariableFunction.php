<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";!
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function samplefunction(string $name): string {
    return "Sample $name";
}

sayHello("Siska", "sampleFunction");
sayHello("Siska", "strtoupper");
sayHello("Siska", "strtolower");