<?php

/*

 * Static properties and methods can be used without the need to instantiate?? (create an instance?) the class.
 * 
 * You can directly access the property / method like this: (line 24)

*/

class Dog
{
    // * Properties
    private $_breed;
    // private $_legs;

    // * An animal has a certain amount of legs (by birth, not always in life)
    public static function getNumberLegs()
    {
        return 4;
    }
}

echo Dog::getNumberLegs();
