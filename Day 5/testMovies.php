<?php

class Movie
{
    public $_title;
    public $_description;
}

$dsn = "mysql:host=localhost;dbname=moviedb;port=3309;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

$results = $pdo->query('SELECT * FROM movies');
$movies = $results->fetchAll(PDO::FETCH_CLASS, 'Movie');

/*

    * Hydration

    * Hydrating an object is, in the simplest form: 
        * Taking the data that exists in memory (DB, File ...) and
        * populating an object with that data.

    ! If it doesnt find the properties, it will make the object properties public
*/
