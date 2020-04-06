<?php

/*
- Part 1 : 
An animal is represented by a number of legs, a color, a sex and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes

- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a sex.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes

- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).

- Part 4 : 

Human can talk.

	-> Change your code to match
*/
class MagicalBeing
{
	public function work()
	{
		echo 'WORK';
	}
	public function talk()
	{
		echo 'TALK TALK TALK TALK';
	}
}

class Human extends MagicalBeing
// ! having the protected is pointless in this case because they have no children
{
	private $_name;
	private $_hairColor;
	private $_sex;

	// public function work()
	// {
	// 	parent::work();
	// }
	public function talk()
	{
		parent::talk();
	}
}
class Robot extends MagicalBeing
{
	private $_identifier;
	private $_color;

	public function work()
	{
		parent::work();
	}
}

class Animal
{
	protected $_name;
	protected $_legs;
	protected $_color;
	protected $_sex;

	public function setName($name)
	{
		$this->_name = $name . ' (parent)';
	}
}

class Dog extends Animal
{
	public function setName($name)
	{
		parent::setName($name);
		$this->_name = $name . ' (child)';
	}

	public function bark()
	{
		echo 'Wooooof';
	}
}

class Cat extends Animal
{

	public function meow()
	{
		echo 'Meeeow';
	}
}

$dog = new Dog();
$dog->setName('REE');

var_dump($dog);

$hooman = new Human();
$hooman->talk();
