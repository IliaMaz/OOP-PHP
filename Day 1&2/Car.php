<?php
class Car
{
    // ! Declare properties
    private $color;
    public $brand;
    public $category;

    // ! Constructor allows you to initialize certain properties when creating an object
    public function __construct($color, $brand, $category)
    {
        $this->setColor($color);
        $this->brand = $brand;
        $this->category = $category;
    }

    // ! Declare methods
    public function makeSound()
    {
        echo 'Vroom Vroom';
    }

    // ? Setter (sets a property)
    public function setColor($newColor)
    {
        if (strlen($newColor) >= 4)
            $this->color = $newColor;
    }
    public function getColor()
    {
        return $this->color;
    }
    // * To string method
    public function __toString()
    {
        return '<br> Car : ' . '<br>' . 'Color: ' . $this->color;
    }
}
