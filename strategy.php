<?php

interface Strategy
{
    public function display($text);
}

class EchoStrategy implements Strategy
{

    public function display($text)
    {
        echo $text;
    }
}

class FileStrategy implements Strategy
{

    public function display($text)
    {
        file_put_contents('strategy.txt', $text);
    }
}


class Context {

    private $_strategy;
 
    public function __construct ($strategy){
       $this->_strategy = $strategy;
    }
 
    public function launchStrategy($text){
       return $this->_strategy->display($text);
    }
 }