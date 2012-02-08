<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loadModel
 *
 * @author Administrator
 */
 class loadModel 
 {
     public function models ($model)
     {
         $modelClass = $model.'model';
         $model_path = MODEL_PATH.$model.'.php';
         
         if (is_readable($model_path))
         {
             require_once $model_path;
              
             if (class_exists ($modelClass))
             {
                 $registry = Registry::getInstance();
                 $registry->$model = new $modelClass;
             }
         }else{
             
             return false;
         }
     }
 }
