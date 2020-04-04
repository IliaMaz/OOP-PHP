<?php
class HtmlString
{
    private $string;

    public function __construct($string)
    {
        $this->setString($string);
    }

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        return '<b>' . $this->string . '</b>';
    }

    public function getItalicString()
    {
        return '<i>' . $this->string . '</i>';
    }

    public function getItalicBoldString()
    {
        return '<b> <i>' . $this->string . '</i> </b>';
    }
}
