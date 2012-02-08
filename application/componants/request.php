<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of request
 *
 * @author xlordt
 */
 class Request {
    
    private $_controller;
    private $_action;
    private $_Args;
    
    public function __construct () 
    {
        $rawuri = explode('/', rtrim(strtolower($_GET ['params']), '/'));
        $newuri = security::getInstance ()->cleanHTTPArray ($rawuri);  
        
        $this->_controller = !empty ($newuri [0])?$newuri [0]:'index';
        $this->_action     = !empty ($newuri [1])?$newuri [1]:'mainIndex';
        $this->_Args       = !empty ($newuri [0])?$newuri:array ();  //in this case I need everything
    }
    
    public function getController () {return $this->_controller;}
    public function getAction () {return $this->_action;}
    public function getArgs () {return $this->_Args;}
 }
