<?php

function projectAutoLoader($class)
{
    include_once 'RPG/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');

$orc = new Orc();
$legolas = new Elf();
$legolas_2 = new Elf();
$sword = new Equipment('Sword', 'Death sword', 10, 0, 0);
$shield = new Equipment('Shield', 'Wood shield', 0, 5, 0);

//echo $legolas->addEquipment($sword) . '<br>';
//echo $legolas->addEquipment($shield) . '<br>';

$orc->attack($legolas);

var_dump($legolas);
var_dump($legolas_2);
