<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Administrator
 */
 class login extends mainController 
 {
     public function mainIndex() 
     {  
         $params = security::getInstance ()->cleanHTTPVars ();
         
         echo '<pre>'.print_r ($params, 1). '</pre>';
         
         $this->_loadreg->models ('authentication');
         $this->_template->title = "test";
         $this->_template->templateView ('login.php');
     }
 }

?>
