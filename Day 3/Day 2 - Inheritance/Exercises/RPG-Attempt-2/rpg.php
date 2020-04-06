<?php

function projectAutoLoader($class)
{
    include_once 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');

$legolas = new Adventurer('Elves');
$sword = new Equipment('Sword', 'Death sword', 10, 0, 0);
$shield = new Equipment('Shield', 'Wood shield', 0, 5, 0);


echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';

//echo $legolas->removeEquipment($sword);

echo $legolas->getStats();

var_dump($legolas);

$orc = new Orc('SHMEE');
var_dump($orc);
