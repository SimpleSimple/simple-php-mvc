<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of postModel
 *
 * @author xlordt
 */
class postModel extends loadModel 
{
    public function getEntries ()
    {
         $return = array ();
         $return [0] = array ('title' => 'Hello World');
         $return [1] = array ('title' => 'Hello Universe');
         
         return $return;
    }
}

?>
