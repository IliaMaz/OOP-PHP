<?php

namespace Flowers\Db;

use PDO;
use Flowers\User;

// require_once 'Flowers/User.php';

// spl_autoload_register();

class UserManager
{

    public static function login($user, $pass)
    {
        // ? Connection through PDO
        $dsn = "mysql:host=localhost;dbname=flowers;port=3309;charset=utf8mb4";
        $pdo = new PDO($dsn, 'root', '');
        // ? Query
        $loginQuery = "SELECT * FROM users WHERE username = ?";
        // ? Prepare the statement
        $prep = $pdo->prepare($loginQuery);
        // ? Bind values
        $prep->bindValue(1, $user);
        // ! Do not assign prep->exec to a variable, result will be bool
        // ? Execute the query
        $prep->execute();
        // ? Fetch the return
        $row = $prep->fetch(PDO::FETCH_ASSOC);
        // ? Assign properties for later use
        $id = $row['id'];
        $mail = $row['email'];
        // ? verify password
        $pCheck = password_verify($pass, $row['password']);
        // ? Return true if query returns and password correct
        if ($row && $pCheck) {
            $user = new User($id, $mail);
            return $user;
        } else
            return false;
    }
}
