<?php

/*

    * JSON
    * : Data / File format which allows to store a variety of data.
    * : Most of the time, the data will be represented as an Object.
    
    * The reasons for use :
        * It's really simple / easy to read and the syntax is simple.
        * This format is used a lot in the industry:
            * It is lightweight and allows for fast data transfer
        * In most cases of data transfer, this format will be used.

    * Syntax recap : 
            * - {...} : defines an Object
            * - [...] : defines an Array
            * - JSON understands Strings, boolean and numbers
    ! DOUBLE QUOTES

    * ----------- *

    * SERIALIZATION
            * This is just the process of converting the state 
            * an object into a string format.

    * DESERIALIZATION
            * Deserialization is the process of retrieving a string
            * and converting it into an Object (reverse of serialization).


*/

// * Step 1 : Get the content of my json

$jsonFile = file_get_contents('movie.json');
var_dump($jsonFile);

// * Step 2 : Convert the string to Object -> Deserializaiton
$myObject = json_decode($jsonFile);
var_dump($myObject);

echo '<hr style="width:80%;">';

$serializedMovie = json_encode($myObject, JSON_PRETTY_PRINT);

var_dump($serializedMovie);
