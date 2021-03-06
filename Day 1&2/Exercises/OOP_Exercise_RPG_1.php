<?php
require_once 'inc/Character.php';
require_once 'inc/Equipment.php';
echo 'To create your character please choose a name, a war-cry and last but not least your race.';

// ! When selection has been posted execute create character and launch inform();

$elf = new Character('Princess Pute', 'RRRR', 'Human');
$elf->inform();
$elfSword = new Equipment('Miniature sword of horror', 30, 30, -5);
$elfArmour = new Equipment('Miniature bulwark of horror', 30, 30, -5);
// !! Should have used equipment declarations to pass values to the character class.
var_dump($elfSword);
// !! Should be done using a loop, push items to array
// !! then get items and stats for all, then format data then send data to inventory.
$item = $elfSword->getItem();
$stats = $elfSword->getStats();
$item1 = $elfArmour->getItem();
$stats1 = $elfArmour->getStats();
// echo $gear;
// var_dump($stats);
$formattedData = array(
	$item => $stats
);
$formattedData1 = array(
	$item1 => $stats1
);
$elf->setItem($formattedData);
// $elf->removeItem('Miniature sword of horror');
$elf->setItem($formattedData1);

$test = $elf->getItem();
var_dump($test);

var_dump($elf);

/* 

	Imagine a Role-Playing Game.

	Each character has:
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> A war-cry (eg "Attaaaaaack!")
		> There are several types of characters: Humans, Orcs and Elves.

	-- Step 1 :

	Create a Character class.
	This class will implement all attributes and methods common to the characters.

	Set up different type of character. You must be able to create Elves, Orcs or Humans.
	Example : 
	$elf = new Character('Elf');
	$orc = new Character('Orc');

	-- Step 2 :

	Orcs are not understood by anyone.
	Their war cry is now: "wwouogrouroulou mlll !!"

	-- Step 3 :

	There are several types of equipment: armor, sword, others (you can add as many as you want).

	Each equipment is designated by a name and a description of the item.
	Equipment also gives a special bonus.

	For example: an armor can give +5 in defense, a +3 sword in attack.
	There is even some object that gives +10 in attack but decreases defense.

	Create an Equipment class.
	This class will implement all the attributes and methods common to the devices.

	Set up the different types of equipment. You must be able to create multiple equipment.
	(I leave you free to your imagination for the creation of weapon and specific power ....)
	For example :
	$sword = new equipment("Death Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	$jewel = new equipment("Grace Necklace", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;


	-- Step 4 :
	
	A character can now hold an equipment.
	You have to change the Character class and add a new property : $equipment;
	You can add/remove/display the equipment for a character (create a method for each action)

	Implement the fact that a character has (or not) an inventory.
	
	-- Step 5 :

	A character can now hold many equipments.
	It's actually an 'inventory' of equipments.
	Change the type of $equipment => It's now an array.

	A character may have several equipments but:
	- It can only be equipped with 4 objects in total.
	- It can only be equipped with 2 swords at a time.
	- He can only wear one armor.

	Change your function to 'add'/'remove'/'display' an equipement.
	Now it will add/remove/display to the inventory.








*/
