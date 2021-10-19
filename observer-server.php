<?php

class Message implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo "Message !";
    }
}

?>