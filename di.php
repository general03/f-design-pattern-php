<?php

class Todo {

    private $card;

    public function __construct($card) { 

        $this->card = $card;
 
    }

    public function getContent(){
        return $this->card->name .", " . $this->card->priority;
    }


}

class Task {

    public $name;

    public $priority = 3;

}

?>