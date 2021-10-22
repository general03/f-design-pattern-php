<?php

interface Language
{
    public function display($text);
}

class MyLanguage implements Language {

    public function display($text){
        return "J'aime bien " . $text;
    }
}

class DecoratorLanguage implements Language {

    private $_lang;

    public function __construct(Language $lang)
    {
        $this->_lang = $lang;
    }

    public function display($text){
        return $this->_lang->display($text) . " => " . get_class($this);
    }
}