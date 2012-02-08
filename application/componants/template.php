<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of telmplate
 *
 * @author Administrator
 */

 class template 
 {
     private $_header;
     private $_footer;
     private $vars = array ();
     private static $_instance;
     
     //private function __construct () {}
     
     public function __set ($index, $value)
     {
         $this->vars [$index] = $value;
     }
     
     public function templateView ($view)
     {
          //echo TEMPLATE.$v;
          try
          {
               $viewfile = TEMPLATE.$view;
               
               if (!is_readable($viewfile))
               {
                   throw new Exception ("$view not found");
               }
               
               if (!empty ($this->vars))
               {
                   foreach ($this->vars as $keys => $value)
                   {
                        $key = $value;
                   }
               }
               
               $this->setHeader ();
               include TEMPLATE.$view;
               $this->setFooter ();
               
          }catch (Exception $e) {
              
              echo _("An error has accured");
              exit;
          }
     }

     public function setHeader ($header = '')
     {
         $this->_header = !empty ($header)?$header:'header.php';
         
         if (is_readable(TEMPLATE.$this->_header))
         {
              include TEMPLATE.$this->_header;
         }
     }
     
     public function setFooter ($footer = '')
     {
         $this->_footer = !empty ($footer)?$footer:'footer.php';
         
         if (is_readable(TEMPLATE.  $this->_footer))
         {
              include TEMPLATE.  $this->_footer;
         }
     }
     
     public static function getInstance ()
     {
         if (!(self::$_instance instanceof self))
         {
             self::$_instance = new template();
         }
         
         return self::$_instance;
     }
 }