<?php

class Todo {

    private $_card;

    public function __construct($card) { 

        $this->_card = $card;
 
    }

    public function getContent(){
        return $this->_card->name .", " . $this->_card->priority;
    }


}

class Task {

    public $name;

    public $priority = 3;

}

?>