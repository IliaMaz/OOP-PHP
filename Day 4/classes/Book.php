<?php

class Book
{
    private $_title;
    private $_pubDate;
    private $_genre;
    private $_price;
    private $_author;

    public function __construct($title, $pubDate, $genre, $price, $author)
    {
        $this->_title = $title;
        $this->_pubDate = $pubDate;
        $this->_genre = $genre;
        $this->_price = $price;
        $this->_author = $author;
    }

    // public function setAuthors($author)
    // {
    //     return $this->_author[] = $author;
    // }
}
