<?php

class Equipment
{
    private $_item;
    private $_atk;
    private $_def;
    private $_hp;
    // private $_jewelery;
    // private $_randomBonus;

    public function __construct($name, $atk, $def, $hp)
    {
        $this->_item = $name;
        $this->_atk = $atk;
        $this->_def = $def;
        $this->_hp = $hp;
        // if ($this->mtRand() < 1)
        //     $this->_armour = 'LEGENDARY BULWARK! <br> +25 Defence points.';
        // elseif ($this->mtRand() > 1450)
        //     $this->_armour = 'EPIC BULWARK! <br> +15 Defence points.';
        // elseif ($this->mtRand() < 1451 and $this->mtRand() > 1000)
        //     $this->_armour = 'MIL-SPEC BULWARK! <br> +10 Defence points.';
        // else
        //     $this->_armour = 'TRASH-SPEC BULWARK! <br> +5 Defence points.';

        // if ($this->mtRand() < 1)
        //     $this->_jewelery = 'LEGENDARY RING OF GRACE! <br> +50 Health points.';
        // elseif ($this->mtRand() > 1450)
        //     $this->_jewelery = 'EPIC RING OF GRACE! <br> +25 Health points.';
        // elseif ($this->mtRand() < 1451 and $this->mtRand() > 1000)
        //     $this->_jewelery = 'MIL-SPEC RING OF GRACE! <br> +10 Health points.';
        // else
        //     $this->_jewelery = 'TRASH-SPEC RING OF GRACE! <br> +5 Health points.';

        // if ($this->mtRand() < 1)
        //     $this->_randomBonus = 'LEGENDARY ATTACK BONUS! <br> +100 Attack points.';
        // elseif ($this->mtRand() > 1450)
        //     $this->_randomBonus = 'EPIC ATTACK BONUS! <br> +50 Attack points.';
        // elseif ($this->mtRand() < 1451 and $this->mtRand() > 1000)
        //     $this->_randomBonus = 'MIL-SPEC ATTACK BONUS! <br> +25 Attack points.';
        // else
        //     $this->_randomBonus = 'TRASH-SPEC ATTACK BONUS! <br> +10 Attack points.';


    }

    public function getItem()
    {
        return $this->_item;
    }

    public function getStats()
    {
        return array(
            'Attack' => $this->_atk,
            'Defence' => $this->_def,
            'Health' => $this->_hp
        );
    }

    // public function mtRand()
    // {
    //     return mt_rand(0, 1500);
    // }
}
