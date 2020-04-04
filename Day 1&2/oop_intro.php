<?php

// ? OOP object orient programming 
// ? OOP is a method/model of programming organized around real-world objects
// ? In programming an object has the same definition as an object of the real world
/* 
* For example a car has several characteristics:
* - name
* - color
* - brand
* ... 
* A car can also do things:
* - Brake
* - Accelerate
* - Open/Close the windows
* In programming, these characteristics are called 'properties'
* Actions are called 'methods'

!! Until now, you have learned how to program in a "Procedural way"

* - A CLASS -

* In programming, a class is what defines an object.
* It's the blueprint/mould

* A class groups/defines all the properties and methods of your object. 
* A class is not an Object! It is what defines the objects properties and methods!

* Some RULES/GOOD PRACTICES
    * - One class can be declared only once (with the same name)
    * - One class = One file
    * - Capitalize the first letter of each word: HelloWorld, Car, Dog    

! Scope :

! 'public' : specifies that the property or method will be accessible from 
! anywhere in your code
! 'private' : specifies that the property or method will only be accessible
! within the class 

* ENCAPSULATION:
* This is done to hide the details of the implementation and to expose only methods

*/

// ? Define a class:
require_once 'Car.php';
// ! Create an object: Instance of a class
$myCar = new Car('Blue', 'Ferrari', 'Sport');
// * I want to access a property of my object
// $myCar->color = 'red';
// $myCar->brand = 'ferrari';
// $myCar->category = 'sport';
$myCar->makeSound();
var_dump($myCar);
$myCar->brand = 'Lambo';
var_dump($myCar);
// ! I can create as much objects(car) as I want
$anotherCar = new Car('Blue', 'BMW', 'SUV');
var_dump($anotherCar);
// ? As you can see classes allow for reusability
$myCar->setColor('Yellow');
var_dump($myCar);
echo $myCar->getColor();
echo $myCar;
