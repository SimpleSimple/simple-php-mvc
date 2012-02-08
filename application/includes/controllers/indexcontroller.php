<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author xlordt
 */
class indexController extends mainController 
{
    public function __construct () 
    {
            parent::__construct();
            echo 'we are in';
    }
    
    public function mainIndex ()
    {      
       $this->_loadreg->models ('post');

     //  print_r ($this);
       //echo '<pre>'.print_r ($this->post->getEntries (), 1);
    }
}
