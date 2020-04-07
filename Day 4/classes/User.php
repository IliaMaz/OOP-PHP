<?php

class User
{
    private $_name;
    private $_email;

    public function __construct($name, $email)
    {
        $this->_name = $name;
        $this->_email = $email;
    }
}
