<?php

abstract class Shape
{
    // * Properties... 

    // * Mehtods... 
    public abstract function calcArea();
}

class Rectangle extends Shape
{
    // * Properties... 
    // * Mehtods... 
    // ! Since the parent function is abs, we are forced to implement it 
    // ! in all the children.
    public function calcArea()
    {
        //* return $l * $w
    }
}

class Triangle extends Shape
{
    // * Properties... 
    // * Mehtods... 
    public function calcArea()
    {
        //* return 1/2($b * $h)
    }
}
