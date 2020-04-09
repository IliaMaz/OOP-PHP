<?php

namespace Flowers\Db;

use PDO;

class FlowerManager

{

    public static function getAll()
    {
        // ? Connection through PDO
        $dsn = "mysql:host=localhost;dbname=flowers;port=3309;charset=utf8mb4";
        $pdo = new PDO($dsn, 'root', '');
        // ? Query
        $getAllQuery = "SELECT * FROM flowers";
        $prep = $pdo->prepare($getAllQuery);
        $prep->execute();
        // ! If I ever include the db, don't look at the information as factual. This is done for testing purposes.
        // ? Use rowcount to check if theres anything
        while ($row = $prep->fetch(PDO::FETCH_ASSOC)) {
            echo 'This is the ' . $row['name'] . '.<br> Also known as: ' . $row['latin_name'] . '.<br> Its colour(s) are: ' . $row['colour'] . '.<br> It is a ' . $row['gender'] . ' gendered flower!';
        }
    }
}
