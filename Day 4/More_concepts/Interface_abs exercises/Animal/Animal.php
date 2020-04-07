<?php

require_once 'Creature.php';

abstract class Animal extends Creature
{
	protected $_legs;

	public function __construct($name, $sex, $color, $legs = 4)
	{
		parent::__construct($name, $sex, $color);
		$this->_legs = $legs;
	}

	public abstract function sound();
}
