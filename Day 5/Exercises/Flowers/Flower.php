<?php

namespace Flowers;

use PDO;

class Flower
{

    public static function flowerInsert($name, $latinName, $colour, $gender, $userId)
    {
        // ? Connection through PDO
        $dsn = "mysql:host=localhost;dbname=flowers;port=3309;charset=utf8mb4";
        $pdo = new PDO($dsn, 'root', '');
        // ? Query
        $insertQuery = "INSERT INTO flowers(name, latin_name, colour, gender, id_user) 
        VALUES (?,?,?,?,?)";
        // ? Prepare the query
        $prep = $pdo->prepare($insertQuery);
        // ? Insert using execute
        $prep->execute([0 => $name, 1 => $latinName, 2 => $colour, 3 => $gender, 4 => $userId]);
    }
}
