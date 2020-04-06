<?php
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
            $opponent->_healthPoints = $opponent->_defensePoints - $this->_attackPoints;
        }
    }
}
