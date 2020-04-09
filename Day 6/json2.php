<?php

require_once 'Movie.php';

$myMovie = new Movie('Fight Club', 1999);
$jsonString = json_encode($myMovie, JSON_PRETTY_PRINT);

var_dump($jsonString);

$myObject = json_decode($jsonString);
var_dump($myObject);
