<?php

class Operations
{

    public function withdraw($amount)
    {
        if ($this->_balance < $amount)
            return 'Insufficient funds';
        if ($this->_withdrawLimit < $amount)
            return 'Exceeding widthdraw limit, your limit is: ' . $this->_withdrawLimit;
        if ($amount < $this->_withdrawLimit and $this->_balance) {
            $this->_balance -= $amount;
            return 'Operation successful';
        }
    }
    public function deposit($amount)
    {
        $this->_balance += $amount;
        return $this->_balance;
    }
}
