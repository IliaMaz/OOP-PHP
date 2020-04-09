<?php

class Nan extends Exception
{
    private $_date;

    public function __construct($msg)
    {
        $this->_date = date('Y-m-d');
        $finalMsg = $this->_date . ' : ' . $msg;
        parent::__construct($finalMsg);
    }
}
