<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Name..."> <br>
        <input type="email" name="mail" id="" placeholder="E-mail..."> <br>
        <input type="submit" name="submit" value="Enter...">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        function projectAutoLoader($class)
        {
            include_once 'classes/' . $class . '.php';
        }
        spl_autoload_register('projectAutoLoader');

        $user = new User($_POST['name'], $_POST['mail']);
        $jsonString = json_encode($user, JSON_PRETTY_PRINT);

        if (file_exists('user.json')) {
            // ! FPC creates if it does not exist
            // ? use post['name'] to create by name of user for each user
            file_put_contents('user.json', $jsonString);
            $json = file_get_contents('user.json');
        }

        if (strlen($json) > 0) {
            $jsonObj = json_decode($json);
            $name = $jsonObj->name;
            echo 'Welcome ' . $name;
        }
    }
    ?>
</body>

</html>