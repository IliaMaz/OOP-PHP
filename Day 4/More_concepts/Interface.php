<?php

/* 

    * INTERFACES

    * An interface looks like a class but it only has static constants
    * and abstract methods

    * PHP uses interface to implement multiple inheritance 
    * It does not truly implement it, but it actually simulates it.

    * Interfaces are used to implement/share roles

    * An interface allows you to specify that one part of your code
    * must be implemented by a class.

*/

interface IExampleName
{
    // * Methods
    // ! By default an interface, assumes its methods to be abstract
    public function example();
}
// ? Implementing the interface
class ClassExample implements IExampleName
{
    public function example()
    {
        echo 'REEEEEEEE';
    }
}

$myObj = new ClassExample();
$myObj->example();

// ? MORE in animal.php
