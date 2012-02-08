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
 class loginController extends mainController 
 {
     public function mainIndex() 
     {  
        // $_Args = func_get_args();

         $params = security::getInstance ()->cleanHTTPVars ();
         
         echo '<pre>'.print_r ($params, 1). '</pre>';
         
         $this->_loadreg->models ('authentication');
         $this->_template->title = "test";
         $this->_template->templateView ('login.php');
     }
 }

?>
