<?php

class TodoFactory {

    public static function create($item)
    {
        return new Card($item);
    }

}

class Card {

    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}

?>