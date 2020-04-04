<?php

class Character
{
    private $_name;
    private $_hP;
    private $_aP;
    private $_dP;
    private $_warCry;
    private $_race;
    private $_item;

    public function __construct($name, $warCry, $race)
    {
        $this->_name = $name;
        $this->_hP = 100;
        $this->_aP = 10;
        $this->_dP = 5;
        $this->_race = $race;
        if ($this->_race == 'Orc')
            $this->_warCry = 'wwouogrouroulou mlll !!';
        elseif ($this->_race == 'Human')
            $this->_warCry = 'REEEEEEEEEEEEEEEEE !!';
        else
            $this->_warCry = $warCry;
        $this->_item = [];
    }

    public function inform()
    {
        echo '<br> If you would like to have a chance at surviving this terrible world, please go to the store. <br> Info: At the store you can find a lot of amazing equipment and, if lucky, a legendary item just for you.';
    }

    public function setItem($assocArr)
    {
        if (count($this->getItem()) == 6) {
            echo 'You cannot have more than 6 pieces of equipment';
        } else {
            array_push($this->_item, $assocArr);
            foreach ($this->_item as $key => $value) {
                foreach ($value as $k => $v) {
                    foreach ($v as $kee => $val) {
                        if ($kee == 'Attack')
                            $att = $val;
                        if ($kee == 'Defence')
                            $def = $val;
                        if ($kee == 'Health')
                            $hp = $val;
                    }
                }
            }
            $this->_aP += $att;
            $this->_dP += $def;
            $this->_hP += $hp;
        }
    }

    public function getItem()
    {
        return $this->_item;
    }
    public function removeItem($item)
    {
        foreach ($this->_item as $key => $value) {
            if ($key === $item) {
                var_dump($this->_item);
                unset($this->_item[$key]);
                var_dump($this->_item);
            }
        }
    }
}
