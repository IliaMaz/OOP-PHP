<?php

spl_autoload_register();

$myArray = array(
    'banana',
    'kiwi',
    'melon',
    'apple',
    'windows' // XD
);

$myObjArray = array(
    new Movie('Fight Club', 1999),
    new Movie('Figh Club', 1999),
    new Movie('Fig Club', 1999)
);

$jsonString = json_encode($myArray);
$jsonObjString = json_encode($myObjArray, JSON_PRETTY_PRINT);
var_dump($jsonString);
var_dump($jsonObjString);
