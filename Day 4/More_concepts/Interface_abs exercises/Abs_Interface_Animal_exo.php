<?php

function projectAutoLoader($class)
{
    include_once 'Animal/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');


$garfield = new Cat('Garfield', 'Male', 'Orange');
//var_dump($garfield);
echo $garfield->sound();

echo '<br><br>';

$snoopy = new Dog('Snoopy', 'Male', 'White/Black');
//var_dump($snoopy);
echo $snoopy->sound();

echo '<hr>';

$liliana = new Human('Liliana', 'Woman', 'Brown');
//var_dump($liliana);
echo $liliana->sound();
echo $liliana->work();

echo '<br><br>';

$zoltan = new Robot('4177', 'Silver');
echo $zoltan->work();

for ($i = 0; $i < 10; $i++) {
    $animal . $i;
}
