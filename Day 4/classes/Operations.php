<?php

class Operations extends Log
{

    public function withdraw($amount)
    {
        if ($this->_balance < $amount)
            return 'Insufficient funds';
        if ($this->_withdrawLimit < $amount)
            return 'Exceeding widthdraw limit, your limit is: ' . $this->_withdrawLimit;
        if ($amount < $this->_withdrawLimit and $this->_balance) {
            $this->_balance -= $amount;
            $content = 'Withdraw: ' . $amount . ' on: ' . time() . "\r\n";
            Log::logIt($content);
            return 'Operation successful';
        }
    }
    public function deposit($amount)
    {
        // * Condition for negative check is needed here
        $this->_balance += $amount;
        $content = 'Deposit: ' . $amount . ' on: ' . time() . "\r\n";
        Log::logIt($content);
        return $this->_balance;
    }
}
