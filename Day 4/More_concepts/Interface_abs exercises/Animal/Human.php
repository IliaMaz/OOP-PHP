<?php

require_once 'Creature.php';

class Human extends Creature implements IWork
{

	public function __construct($name, $sex, $color)
	{
		parent::__construct($name, $sex, $color);
	}

	public function work()
	{
		return $this->_name . ' is working !<br>';
	}

	public function sound()
	{
		return 'Hello, my name is ' . $this->_name . ', and Im a ' . $this->_sex . '<br>';
	}
}
