<?php

class Message implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "Un nouvelle utilisateur est arrivé !\r\n";
    }
}

?>