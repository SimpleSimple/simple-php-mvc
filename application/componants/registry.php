<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registry
 *
 * @author Administrator
 */
class Registry 
{
     private static $_instance;
     private $_store;
     
    // private function __construct() {}
     
     public function __set ($key, $value) 
     {
          $this->_store [$key] = $value;
     }
     
     public function __get ($key) 
     {
         if (isSet ($this->_store [$key]))
         {
             return $this->_store [$key];
         }

         return false;
     }
     
     public static function getInstance ()
     {
         if (!(self::$_instance instanceof self))
         {
               self::$_instance = new self;
         }
         return self::$_instance;
     }
}