<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testController
 *
 * @author xlordt
 */
class testController extends mainController 
{
    public function mainIndex ()
    {
        echo 'this is test';
      // $this->_loadreg->models ('post');
       //echo '<pre>'.print_r ($this->post->getEntries (), 1);
    }
}
