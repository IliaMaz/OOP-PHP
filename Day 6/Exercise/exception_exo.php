<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="nb" id="" placeholder="Give me a number..."><br>
        <input type="submit" name="submit" value="Send it!">
    </form>
    <?php

    require_once 'classes/Nan.php';
    require_once 'classes/Range.php';

    function nmb($number)
    {
        echo 'Please enter a number greater than 0 and below ' . $number;
        if (isset($_POST['submit'])) {
            var_dump($_POST);
            $numb = $_POST['nb'];
            var_dump($numb);
            if (+$numb > $number or +$numb < 1) {
                throw new Range('Entered value must be within the acceptable range');
            } elseif (is_nan($number)) {
                throw new Nan('Entered value is not a number.');
            } else
                return $number;
        }
    }
    try {
        echo nmb(rand(1, 500));
    } catch (Range $e) {
        echo $e->getMessage();
    } catch (Nan $e) {
        echo $e->getMessage();
    }

    ?>
</body>

</html>