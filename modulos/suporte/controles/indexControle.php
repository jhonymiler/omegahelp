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
class indexControle extends suporteControle
{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->_view->assign('titulo', 'Painel do Usuário');
        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'home');
        $this->_view->addConteudo('home');
        $this->_view->renderizar();
        ;
    }
}
