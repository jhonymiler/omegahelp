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
class suporteControle extends Controlador
{
    private $user;
    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        } elseif (Sessao::get('USU_nivel') > 0) {
            $this->redir('painel');
            exit();
        }
        $this->user = $this->loadModulo('painel', 'usuario');
        $usu_emp = $this->user->getEmpresa(Sessao::get('user')['USU_id']);

        $this->_view->setTemplate('suporte');
        $this->_view->assign('titulo', 'Painel do Usuário');
        $this->_view->assign('usuario', $usu_emp);

        $this->_view->assign('current_link', 'home');
        $this->_view->addNavLink('painel', 'Home');
    }

    public function index()
    {
    }
}
