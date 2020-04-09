<?php

/* 

    * EXCEPTIONS :
        * they must be handled by the dev
        * they are handled in an Object Oriented way

    * When an exception is thrown, an 'Exception' object is created
    * An exception object contains some details & methods i.e: 
        * getMessage, getCode, toString
    * The exception class exists in php by default

    * Syntax : 
        * throw new Exception("This is an exception") <- throw is the only difference
    * Throw allows to trigger an exception
    * new creates an instance of an exception as seen before
*/

// ! The blocks of code below is just an example for comprehension

function myFunction($x)
{
    if ($x < 0)
        throw new Exception('No negative numbers!');

    return $x;
}

try {
    // * Code you want to test
    echo 'Hello <br>';
    // throw new Exception('This is an exception');
    $dsn = '';
    echo myFunction(-1);
    // $pdo = new PDO($dsn);
    echo 'Bye';
} catch (Exception $e) {
    // * Code you want to execute if exception is raised
    echo $e->getMessage();
}
