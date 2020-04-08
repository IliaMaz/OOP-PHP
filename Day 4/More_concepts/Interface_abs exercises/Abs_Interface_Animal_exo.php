<?php

function projectAutoLoader($class)
{
    include_once 'Animal/' . $class . '.php';
}

spl_autoload_register('projectAutoLoader');


$garfield = new Cat('Garfield', 'Male', 'Orange');
//var_dump($garfield);
echo $garfield->sound();

echo '<br><br>';

$snoopy = new Dog('Snoopy', 'Male', 'White/Black');
//var_dump($snoopy);
echo $snoopy->sound();

echo '<hr>';

$liliana = new Human('Liliana', 'Woman', 'Brown');
//var_dump($liliana);
echo $liliana->sound();
echo $liliana->work();

echo '<br><br>';

$zoltan = new Robot('4177', 'Silver');
echo $zoltan->work();

// * Step 3 random array of animals:

$randAnimArr = array(
    $cat1 = new Cat('CatUno', 'Undefined', 'Greyish White'),
    $dog1 = new Dog('UnoDog', 'Female', 'Orange'),
    $human1 = new Human('Lilith', 'Female', 'Undefined'),
    $dog2 = new Dog('DuoDawg', 'Male', 'Orange/Brown'),
    $human2 = new Human('Simon', 'Unknown', 'Green'),
    $cat2 = new Cat('Catto', 'Male', 'Rainbow'),
    $dog3 = new Dog('Pupper', 'Female', 'Brown'),
    $human3 = new Human('Pal', 'Unknown', 'Red'),
    $cat3 = new Cat('Boombox', 'Alien', 'Translucent'),
    $dog4 = new Dog('Dog5', 'Secret', 'Replaced Dog4')
);

$randRoboHumanArr = array(
    $humanR = new Human('Synth', 'Self-replicating', 'Brown'),
    $robotH = new Robot('Spy', 'Origin unknown', 'A piece of all'),
    $humanR1 = new Human('Synth1', 'Self-isolating', 'Blue'),
    $robotH1 = new Robot('Spy1', 'Origin: Alpha Omega', 'A piece hate'),
    $humanR2 = new Human('Synth2', 'Self-medicating', 'Green'),
    $robotH2 = new Robot('Spy2', 'Mars', 'Sand 4 days')

);
echo '<br>';
// ? step 3.3
for ($i = 0; $i < count($randAnimArr); $i++) {
    $randSelector = rand(0, 9);
    echo $randAnimArr[$randSelector]->sound() . '<br>';
}
echo '<br>';
// ? step 3.4
for ($i = 0; $i < count($randRoboHumanArr); $i++) {
    $randSel2 = rand(0, 5);
    echo $randRoboHumanArr[$randSel2]->work() . '<br>';
}
