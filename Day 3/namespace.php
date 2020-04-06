<?php

/* 
    * NAMESPACES

    * Namespaces allow us to compartmentalize the classes of a project
    * Namespace can be compared to a folder

    * spl_autoload_register();
    * By default it looks inside the current folder

    function projectAutoloader($class) {
        include_once 'classes/' . $class . '.php';
    }
    spl_autoload_register(projectAutoLoader);
    */


require_once 'MyClass.php';
$myObj = new MyClass();
$myObj->doStuff();
var_dump($myObj);
