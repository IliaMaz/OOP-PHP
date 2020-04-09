<?php

/*
    * Prepared Statements:
*/

$dsn = "mysql:host=localhost;dbname=moviedb;port=3309;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

// ? Classic way:

$title = 'Jurassic Park';
$pdo->exec("INSERT INTO movies(title) VALUES('" . $title . "')");

// ? PDO way:

$prep = $pdo->prepare("INSERT INTO movies(title) VALUES(?)");
$prep->bindParam(1, $title);

$title = 'REE';
$prep->execute();
// ? This is why it is so powerful.
$title = 'SHMEE';
$prep->execute();
