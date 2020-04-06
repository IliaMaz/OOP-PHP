<?php

require_once 'Character.php';
require_once 'Equipment.php';
require_once 'Elf.php';
require_once 'Orc.php';
require_once 'Human.php';

// $legolas = new Adventurer('Ree', 'Elf');
$sword = new Equipment('Sword', 'Death sword', 10, 0, 0);
$shield = new Equipment('Shield', 'Wood shield', 0, 5, 0);

// echo $legolas->addEquipment($sword) . '<br>';
// echo $legolas->addEquipment($shield) . '<br>';

//echo $legolas->removeEquipment($sword);

// echo $legolas->getStats();

// var_dump($legolas);
$orcccc = new Orc('REE', 'Orc');
$orcccc->addEquipment($shield);
// var_dump($orcccc);
$stupidElf = new Elf('SHMEE', 'Elf');
$stupidElf->addEquipment($sword);
$smartHooman = new Human('Simon', 'Human');

// var_dump($stupidElf);
$orcccc->attack($stupidElf, $orcccc); // ! works
var_dump($stupidElf);
$stupidElf->attack($orcccc, $stupidElf);
var_dump($stupidElf);
$smartHooman->attack($orcccc, $smartHooman);
var_dump($smartHooman);
// var_dump($stupidElf);
