<?php

class User
{
    private string $name;
    private string $email;
}

class UsersRepository implements SplSubject
{
    private SplObjectStorage $observers;
    
    private array $users = [];    

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }  
    
    public function createUser(User $user)
    {
        $this->users[] = $user;
        $this->notify();
    }    
    
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }    
    
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }    
    
    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }    
}

?>