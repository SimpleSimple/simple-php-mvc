<?php

 class loadComponants 
 {
     public function __construct() {
     }
     
     public function Componants ($className)
     {
         if (is_readable(COMPONANTS.strtolower($className).'.php'))
         {
             require_once COMPONANTS.strtolower($className).'.php';
         }
         
         return false;
     }
     
     public function Controllers ($className)
     {
         if (is_readable(LIBRARYS.strtolower($className).'.php'))
         {
             require_once LIBRARYS.strtolower($className).'.php';
         }
 
         return false;         
     }
     
     public function __loadComp ()
     {
         spl_autoload_register(null, false);
         spl_autoload_extensions ('.php, .class.php'); //hmm
         spl_autoload_register (array ($this, 'Componants'));
         spl_autoload_register (array ($this, 'Controllers'));
     }
     
     public function showLoadedComponants ()
     {
         echo '<pre>'.print_r (spl_autoload_functions(), true).'</pre>';
     }
 }
?>
