<?php

// ! From dog.php Day 2

/* 

    * INHERITANCE:
    *   Relationships between objects.
    *   The relationship takes the form of a parent / child relationship.
    
    *   The child uses the properties / methods defined in the parent.
    *   The parent doesn't have to share everything with its children.
    
    *   Purpose: REUSABILITY. Many children can inherit from one parent.

    *  --  * DRY : Don't Repeat Yourself * -- *

*/
class Pet
{
    protected $_name;
    private $_breed;
    private $_hairColor;

    public function setName($name)
    {
        $this->_name = $name . ' (parent)';
    }
}

class Dog extends Pet
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

class Cat
{

    public function meow()
    {
        echo 'Meeeow';
    }
}

$dog = new Dog();
$dog->setName('REE');

var_dump($dog);
