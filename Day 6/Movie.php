<?php

class Movie implements JsonSerializable
{
    private $_title;
    private $_release_year;

    public function __construct($title, $year)
    {
        $this->_title = $title;
        $this->_release_year = $year;
    }

    public function jsonSerialize()
    {
        return ['title' => $this->_title, 'year' => $this->_release_year];
    }
}
