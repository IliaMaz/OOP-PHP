<?php

/* 

    * INHERITANCE:
    *   Relationships between objects.
    *   The relationship takes the form of a parent / child relationship.
    
    *   The child uses the properties / methods defined in the parent.
    *   The parent doesn't have to share everything with its children.
    
    *   Purpose: REUSABILITY. Many children can inherit from one parent.

*/

class Pet
{
    protected $_name;
    private $_breed;
    private $_hairColor;

    public function setName($name)
    {
        $this->_name = $name;
    }
}

class Dog extends Pet
{
    // private $_name;
    // private $_breed;
    // private $_hairColor;

    // public function setName($name) {
    //     $this->_name =$name
    // }

    public function bark()
    {
        echo 'Wooooof';
    }
}

class Cat extends Pet
{
    // private $_name;
    // private $_breed;
    // private $_hairColor;

    // public function setName($name) {
    //     $this->_name =$name
    // }

    public function meow()
    {
        echo 'Meeeow';
    }
}

$dog = new Dog();
$dog->setName('REEEEEE');
var_dump($dog);
