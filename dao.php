<?php

abstract class BaseDao{
    
    private $_connection;

    public function __construct(){
        try{        
            $this->_connection = new \PDO("mysql:dbname=".getenv('MYSQL_DATABASE').";host=0.0.0.0",getenv('MYSQL_USER'),getenv('MYSQL_PASSWORD'));
            $this->_connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('ERROR : '.$e->getMessage());
        }   
    }
   
    public function fetch($column, $value){
        $sql = "SELECT * FROM $this->_tablename WHERE $column = :value";

        $prepare = $this->_connection->prepare($sql);   
        $prepare->bindParam(':value', $value);

        $dispose = $prepare->execute();
        return $prepare->fetch(PDO::FETCH_ASSOC);        
    }

}

class UserDao extends BaseDao{

    protected $_tablename = 'user';

    public function getPseudoUser( $value ){
        return parent::fetch('pseudo', $value);
    }
}

?>