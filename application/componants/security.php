<?php

/**
 * Description of security
 *
 * I could of easily created a loop here
 * but I really want everything to look simple and work
 * for pretty much medium websites.
 * it can use some optimizing though.
 * 
 * @author xlordt
 */

 class security 
 {
     public $_params = array (); 
     private static $_instance;

     public function cleanHTTPArray ($arrayVar = '') 
     {
         return preg_replace ("/[^A-Z0-9a-z_\/]*/", "", $this->specialChars ($arrayVar));
     }

     public function specialChars ($arrayVar) 
     {
	  return preg_replace ("#(^[^a-z_]+)|[^\w\d_.]+|([^\w_]$)#i", "", $arrayVar);
     }

     public function cleanHTTPVars ($var = null)
     {
           $v = !empty ($var)?$var:array (
                         "_post" => $_POST, "_get" => $_GET, "_session" => $_SESSION);
           
           $this->_params ['raw'] = $v;
           
           foreach ($v as $key => $value)
           {
                $this->_params [$key] = $this->cleanHTTPArray ($value);
           }
           
           return $this->_params;
     }
     
     public static function getInstance ()
     {
          if (!self::$_instance instanceof self)
          {
              self::$_instance = new security;
          }
          
          return self::$_instance;
     }
 }

?>
