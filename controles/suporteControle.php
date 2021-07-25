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

        $this->_view->setTemplate('usuario');
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Painel do Usuário');
        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'home');


        $usu_emp = $this->user->getEmpresa(Sessao::get('user')['USU_id']);
        $this->_view->assign('titulo', 'Painel do Usuário');
        $this->_view->assign('usuario', $usu_emp);

        $this->_view->addConteudo('home');
        $this->_view->renderizar();
    }
}
