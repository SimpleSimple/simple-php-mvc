<?php

 class loadComponants 
 {
     public function __construct() {
     }
     
     public function Componants ($className)
     {
         //echo $className .'<br />';
         if (is_readable(COMPONANTS.strtolower($className).'.php'))
         {
             require_once COMPONANTS.strtolower($className).'.php';
         }
         
         return false;
     }
     
     public function Controllers ($className)
     {
         if (is_readable(CONTROLLERS.strtolower($className).'.php'))
         {
             require_once CONTROLLERS.strtolower($className).'.php';
         }
 
         return false;         
     }
     
     public function __loadComp ()
     {
         spl_autoload_register(null, false);
         spl_autoload_extensions ('.php, .class.php'); //hmm
         spl_autoload_register (array ($this, 'Componants'));
         spl_autoload_register (array ($this, 'Controllers'));
         echo $clasName;
     }
     
     public function showLoadedComponants ()
     {
         echo '<pre>'.print_r (spl_autoload_functions(), true).'</pre>';
     }
 }
?>
