<?php

$dsn = "mysql:host=localhost;dbname=moviedb;port=3309;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');
$mail = 'a@xy.gg';

/*

    * Prepared Statements:

    * PROS:
        * - Safety
        * - Better Performance

    * It's also useful when we want to execute the same query many times (with different values)

 ! Classic way:
$selectQuery = "SELECT * FROM users WHERE mail = '" . $mail . "'";

*/
// * Prepared way :
// ? Question mark is the simplest placeholder
$selectQuery = "SELECT * FROM users WHERE mail = '?'";
// ? You can use the following :d , :description as placeholders
// ? In the case of using these placeholders, your are going to call them directly as: bindValue('d') 
// ? Prep the query
$prep = $pdo->prepare($selectQuery);
// ? Bind the value
$prep->bindValue('1', $mail);
// ? Compile & Execute the query
// ? return row sets
$description = 'bla';
// ! You can also bind values using the execute() arguments i.e: execute(['d' => $description]) [1 => $user, 2 => $pass]
$prep->execute();
