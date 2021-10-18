<?php

abstract class base{
    
    private $_connection;

    public function __construct(){
        try{        
            $this->_connection = new \PDO("mysql:dbname=mysql;host=localhost","root","");
            $this->_connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('ERROR : '.$e->getMessage());
        }   
    }
   
    public function fetch( $key, $value){
        $sql = 'SELECT * FROM '.$this->_tablename.' WHERE '.$key.' = "'.$value.'"';
        $dispose = $this->_connection->query($sql);
        return $dispose->fetch(PDO::FETCH_ASSOC);        
    }

}

class userDao extends base{

    protected $_tablename = 'my_database';

    public function getPseudoUser( $value ){
        return parent::fetch('User', $value);
    }
}

?>