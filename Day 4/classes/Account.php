<?php

class Account extends Operations
{
    protected $_accountNumber;
    protected $_withdrawLimit;
    protected $_balance;

    public function __construct($accNmb, $withdrawLimit, $balance)
    {
        $this->_accountNumber = $accNmb;
        $this->_withdrawLimit = $withdrawLimit;
        $this->_balance = $balance;
    }
}
