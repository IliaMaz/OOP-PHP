<?php

$dsn = "mysql:host=localhost;dbname=moviedb;port=3309;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

// * Select all the movie: 
$delQuery = 'DELETE FROM movies where id = 20';

// * exec() only returns the nmb of lines that were affected
// * If you don't need to display or use the data, use exec since it is faster
$results = $pdo->exec($delQuery);
var_dump($results);
