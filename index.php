<?php

   session_start();
   
   ini_set ("display_errors", "On");
   
   define ('SITE_PATH',   realpath (dirname (__FILE__)).DIRECTORY_SEPARATOR);
   define ('APP_PATH',    SITE_PATH.'application'.DIRECTORY_SEPARATOR);
   define ('CONFIG_PATH', APP_PATH.'config'.DIRECTORY_SEPARATOR);
   
   require_once CONFIG_PATH.'config.php';
   require_once 'functions.php';
   
   //Load required componants
   
   try
   {
      $componants = new loadComponants ();
      $componants->__loadComp ();
      
      Router::route(new Request());
      
    //  $registry = new Registry ();
      
   
   }catch (Exception $e) {
       
        //set controller's error
   }

   echo getIncludedFiles ();
   unregisterGlobals ();
   removeMagicQuotes ();