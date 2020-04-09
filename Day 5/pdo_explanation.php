<?php

/* 
    * A new way to access DBs 
    * PDO - PHP Data Object
        * PDO is an abstraction layer to query the DB
        * It can handle more than 12(or so) different types of DBs (Orace / MySql ...)
    
    * In PDO we don't use params to connect
    * Instead we use a DSN (Data Source Name)

    * DSN looks like this:
        * "dbDriver:host=localhost;dbname=name;port=3306;charset=ut8mb4";

    * WHY we use PDO:
        * - reusability (access to many databases)
        * - usability (many functions that are really useful, etc.)
        * - security (prepared statements)
*/

$dsn = "mysql:host=localhost;dbname=moviedb;port=3309;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

// * Select all the movies: 

$selectQuery = 'SELECT * FROM movies';
// * Query will return a rowset (result set)
// * Returns a PDOStatement which will contain a rowset IF you fetch it
$results = $pdo->query($selectQuery);
var_dump($results);

/* 

    * For now, results have been retrieved but we need to us the fetch() method
    * to manipulate/use/display the results

*/
// * line by line
while ($movie = $results->fetch(PDO::FETCH_ASSOC)) {
    echo $movie['title'] . '<br>';
}
