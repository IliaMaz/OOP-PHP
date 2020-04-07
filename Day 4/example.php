<?php

function projectAutoLoader($class)
{
    include_once 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');

$author = new Author('Simon', 'Undefined Object', '12-23-3020');
$author2 = new Author('Tester', 'Shmeeee', 'n/a');
$authors[] = $author;
$authors[] = $author2;
$book = new Book('How to fly', '01-29-3050', 'Factual Drama', 2000, $authors);
var_dump($book);
