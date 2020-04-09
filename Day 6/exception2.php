<?php

class DivideByNegativeException extends Exception
{
    private $_date;

    public function __construct($message)
    {
        $this->_date = date('Y-m-d');
        $finalMsg = $this->_date . ' : ' . $message;
        parent::__construct($finalMsg);
    }
}

function myFunction($x)
{
    if ($x < 0)
        throw new DivideByNegativeException('No negative numbers!');
    elseif ($x == 0)
        throw new Exception('Do not divide by 0, you fool!');
    return $x;
}

try {
    // * Code you want to test
    echo 'Hello <br>';
    // throw new Exception('This is an exception');
    $dsn = '';
    echo myFunction(-1);
    // $pdo = new PDO($dsn);
    echo 'Bye';
} catch (DivideByNegativeException $e) {
    // * Code you want to execute if exception is raised
    echo $e->getMessage();
} catch (Exception $e) {
    echo 'STANDARD EXCEPTION <br>';
    echo $e->getMessage();
}
