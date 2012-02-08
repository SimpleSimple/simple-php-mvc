<?php


  //database varibles 

  define (DBUSERNAME,   'root');
  define (DBPASSWORD,   '');
  define (DBSERVER,     'localhost');
  define (DBDATABASE,   'test');
  
  //Server varibles
  
  $theme    = 'default';
  $language = 'en';

  
  define ('COMPONANTS',  APP_PATH.'componants'.DIRECTORY_SEPARATOR);
  define ('TEMPLATE',    SITE_PATH.'template'.DIRECTORY_SEPARATOR.$theme.DIRECTORY_SEPARATOR);
  define ('MODEL_PATH',  APP_PATH.'includes'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR);
  define ('LIBRARYS',    APP_PATH.'includes'.DIRECTORY_SEPARATOR.'librarys'.DIRECTORY_SEPARATOR);
  define ('CONTROLLERS', COMPONANTS.'controllers'.DIRECTORY_SEPARATOR);
  
  require_once APP_PATH.'loadComponants.php';
  require_once CONTROLLERS.'maincontroller.php';
  
?>
