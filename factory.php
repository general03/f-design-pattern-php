<?php

class TodoFactory {

    public static function create($item)
    {
        return new Card($item);
    }

}

abstract class Info {
    
    private $_text;
    
    public function getInfo(){
        return $this->_text;
    }    
}

class Card extends Info {

    public function __construct($text)
    {
        $this->_text = $text;
    }

    public function getText()
    {
        return "Card : " . $this->_text;
    }
}

?>