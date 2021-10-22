<?php

class Log {

    private $_severity;
    private $_message;

    public function __construct($message, $severity)
    {
        $this->_message = $message;
        $this->_severity = $severity;
    }

    public function display(){
        return array($this->_severity, $this->_message);
    }
}

interface InfoCommandInterface
{
    public function execute();
}

class EchoCommand implements InfoCommandInterface
{
    private $_log;

    public function __construct(Log $log)
    {
        $this->_log = $log;
    }

    public function execute()
    {
        print_r($this->_log->display());
    }
}

class FileCommand implements InfoCommandInterface
{
    private $_log;

    public function __construct(Log $log)
    {
        $this->_log = $log;
    }

    public function execute()
    {
        file_put_contents('command.txt', implode(' : ', $this->_log->display()));
    }
}

class CommandInvoker
{
    private $_command;

    public function __construct(InfoCommandInterface $command)
    {
        $this->_command = $command;
    }

    public function setCommand(InfoCommandInterface $command)
    {
        $this->_command = $command;
    }

    public function handle()
    {
        return $this->_command->execute();
    }
}

?>