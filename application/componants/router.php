<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of router
 *
 * @author xlordt
 */
 class Router 
 {   
    
     public static function route (Request $request)
     {    
         $controllerName   = $request->getController ().'Controller';
         $methods          = $request->getAction ();
         $arguments        = $request->getArgs ();
         $controllLocation = CONTROLLERS.strtolower($controllerName).'.php';
    
         if (!is_readable ($controllLocation))
         {   
              $controllerName = 'indexController'; //if not callable than just set main controller
              $methods        = 'mainIndex';       //and method, the hell with the rest.. no need to complicate shit
           
              return false;
         }

         if (class_exists($controllerName))
         { 
             $controllerName = new $controllerName ();
             $methods    = (is_callable(array ($controllerName, $methods)))?$methods:'mainIndex';
         
         }else{
             
             echo 'class not found';
             return false; //transfer to 404 later
         }
        // echo '<pre>'.print_r ($arguments, 1).'</pre>';
         call_user_func_array (array ($controllerName, $methods), $arguments);
     }   
 }
