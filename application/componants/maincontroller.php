<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mainController
 *
 * @author Administrator
 */
 abstract class mainController 
 {
     protected $_registry;
     protected $_loadreg;
     protected $_template;
     
     abstract function mainIndex ();
     
     public function __construct() 
     {
         $this->_registry = Registry::getInstance ();
         $this->_template = template::getInstance ();
         $this->_loadreg  = new loadModel ();
     }
     
     public function __get ($key)
     {
         if ($gkey = $this->_registry->$key)
         {
             return $gkey;
         }
         return false;
     }
 }
