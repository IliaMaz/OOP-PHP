<?php
// * Animal exo with interfaces
// * Some of my animals can sit (Dog, Cat, Human, Robot)

interface IDomestic
{
    public function sit();
}

class Dog /* extends Animal */ implements IDomestic
{
    public function sit()
    {
        // *
    }
}

/*

    * Abstract Class :

        * 1 - When a model / template must be set for a group of subclasses
        * 2 - An abstract class can contain 'concrete' methods
        * 3 - Abstract classes provide default actions for subclasses
        * 4 - Used to provide a template for potential future inherited classes

    * Interfaces : 

        * 1 - Use an interface when a role must be defined for other classes as
            * well, regardless of the inheritance.
        * 2 - Interface can only contain the signature line 6 in this file
        * 3 - A class can implement multiple interfaces
        * 4 - An interface can inherit from a class (More on this tomorrow) 

*/
