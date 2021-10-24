<?php

interface Game {

    public function getAuthor();

    public function getYear();

}

class Monopoly implements Game {

    private $_author;
    private $_year;

    function __construct($author, $year) {
        $this->_author = $author;
        $this->_year  = $year;
    }

    function getAuthor() {
        return $this->_author;
    }

    function getYear() {
        return $this->_year;
    }
}

class GameAdapter {

    private $_game;

    function __construct(Game $_game) {
        $this->_game = $_game;
    }
    function getInfo() {
        return $this->_game->getAuthor().' in '.$this->_game->getYear();
    }
}