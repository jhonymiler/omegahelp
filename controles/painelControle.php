<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pageControle
 *
 * @author Jonatas
 */
class painelControle extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_view->assign('titulo', 'Painel de Administração');
        $this->_view->assign('sessaoUsuario', Sessao::get('user'));

        $this->_view->assign('current_link', 'home');
        $this->_view->addNavLink('painel', 'Home');
    }

    public function index()
    {
    }
}
