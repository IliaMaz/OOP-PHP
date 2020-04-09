<?php

function projectAutoLoader($class)
{
    include_once 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');

$i = 1;
// ! To make it more logical, use setter in client to make the account
// ! After the client creation
$b0nkAcc0unt = new Account($i, 1000, 10000);
$cl = new Client('re', 're', 're', $b0nkAcc0unt);
echo $b0nkAcc0unt->withdraw(100);
$b0nkAcc0unt->deposit(200);
var_dump($cl);
