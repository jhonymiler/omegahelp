<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexControle
 *
 * @author Jonatas
 */
class indexControle extends painelControle
{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->_view->addConteudo('index');
        $this->_view->renderizar();
    }
}
