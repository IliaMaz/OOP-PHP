<?php

class Author
{
    private $_name;
    private $_gender;
    private $_dob;

    public function __construct($name, $gender, $dob)
    {
        $this->_name = $name;
        $this->_gender = $gender;
        $this->_dob = $dob;
    }
}
