<?php

class Client
{
    protected $_name;
    protected $_gender;
    protected $_address;
    protected $_account;

    public function __construct($name, $gender, $address, $acc)
    {
        $this->_name = $name;
        $this->_gender = $gender;
        $this->_address = $address;
        $this->_account = $acc;
    }
}
