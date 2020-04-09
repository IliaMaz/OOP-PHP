<?php

use Flowers\Db\FlowerManager;
use Flowers\Flower;

session_start();
spl_autoload_register();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower 4 U</title>
</head>

<body>
    <h1>Welcome to the flowers site</h1>
    <p>A site dedicated to describing and showing the coolest and weirdest flowers in the world.</p>
    <h2>Add flowers to your library</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name ..."> <br>
        <input type="text" name="latinName" placeholder="Latin name..."> <br>
        <input type="text" name="colour" placeholder="Colour / Colours..."> <br>
        <select name="gender" id="">
            <option value="gender" selected disabled>Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Bisexual">Bisexual</option>
        </select>
        <input type="submit" name="submit" value="Add it!">
    </form>
    <?php
    if (isset($_POST['submit']) && $_POST['gender'] != 'Gender') {
        Flower::flowerInsert($_POST['name'], $_POST['latinName'], $_POST['colour'], $_POST['gender'], $_SESSION['user']['id']);
    }
    ?>
    <h2>The Library</h2>
    <?php
    FlowerManager::getAll();
    ?>
</body>

</html>