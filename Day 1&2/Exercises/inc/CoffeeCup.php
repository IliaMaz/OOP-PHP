<?php
class CoffeeCup
{
    private $_quantity;
    private $_brand;
    private $_temperature;
    private $_volume;

    public function __construct($volume, $brand, $temperature)
    {
        $this->_brand = $brand;
        $this->_temperature = $temperature;
        $this->_volume = $volume;
        $this->_quantity = $this->_volume;
    }

    public function reHeat($deg)
    {
        $this->_temperature += $deg;
        echo $this->_temperature;
    }

    public function coolDown($deg)
    {
        if ($this->_quantity > 0) {
            $this->_temperature -= $deg;
            echo 'Your cup is cooling down, the temperature is ' . $this->_temperature . ' degrees <br>';
        }
    }
    // public function setQuantity($quantity)
    // {
    //     $this->quantity = $quantity;
    // }

    // public function setBrand($brand)
    // {
    //     $this->_brand = $brand;
    // }

    // public function setTemperature($temperature)
    // {
    //     $this->_temperature = $temperature;
    // }

    public function getTemperature()
    {
        return $this->_temperature;
    }

    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getBrand()
    {
        return $this->_brand;
    }
    public function sip($quantity)
    {
        if ($this->_quantity - $quantity <= 0) {
            $this->_quantity = 0;
            echo 'Not enough coffee left. <br>';
        } else {
            $this->_quantity -= $quantity;
            echo 'You take a sip, You have ' . $this->_quantity . ' cl remaining <br>';
        }
    }
    public function refill()
    {
        $this->_quantity = $this->_volume;
        echo 'Mug has been refilled <br>';
    }
}
