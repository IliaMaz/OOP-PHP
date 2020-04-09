<?php

namespace Flowers;

class User
{
    private $_id;
    private $_mail;

    public function __construct($id, $mail)
    {
        $this->_id = $id;
        $this->_mail = $mail;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function getId()
    {
        return $this->_id;
    }
}
