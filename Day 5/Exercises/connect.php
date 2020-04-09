<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Username..."><br>
        <input type="password" name="password" id="password" placeholder="Password..."><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
<?php

// require_once 'Flowers/Db/UserManager.php';

spl_autoload_register();

use Flowers\Db\UserManager as Manager;

// ! Users imported from other exo, db is not included in the files here so... 

if (isset($_POST['username']) && isset($_POST['password'])) {
    var_dump($_POST);
    $userManager = new Manager();
    $userLogged = $userManager->login($_POST['username'], $_POST['password']);
    // ? Line below is just a test from instructions: OOP_Ex_PDO_Flowers.php
    // Manager::login($_POST['username'], $_POST['password']);
    if (!empty($userLogged)) {
        session_start();
        $_SESSION['user']['mail'] = $userLogged->getMail();
        $_SESSION['user']['id'] = $userLogged->getId();
        header("Location: view-flowers.php");
        // var_dump($userLogged);
        // var_dump($_SESSION);

    }
}

?>