<?php
 
class Singleton {
 
   private static $_instance = null;
 
   private function __construct() { 

       echo "Constructeur \n" ; 

   }
 
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new Singleton();  
     }
     return self::$_instance;

   }
}
 
?>