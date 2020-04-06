<?php
// ** Overall this class is functioning the way it was meant to
// ** Based on this class the others can be made very easily in the same manner
// ** If my personal time allows I will finish the other 2 and make them all 
// !! FIGHT :D
class Orc extends Adventurer
{
    public function __construct($name)
    {
        parent::__construct();
        $this->_race = get_class();
        $this->_name = $name;
    }

    public function attack($opponent)
    {
        if (get_class($opponent) === 'Elf' && $opponent->_shield === 0) {
            $opponent->_healthPoints -= 50;
        }
        if (get_class($opponent) === 'Elf' && $opponent->_shield > 0) {
            // ! PHP is nice and allows this, C sharp and other languages do not ($opponent->_defencePoints)
            // ! ^ This means that you should use Setters and Getters as seen before in Day 1 & 2
            $opponent->_healthPoints = $opponent->_defensePoints - $this->_attackPoints;
        }
    }

    public function power()
    {
        if ($this->_flag = true) {
            $this->_defensePoints += 20;
            $this->_attackPoints -= 10;
            $this->_flag = false;
        }
    }
}
