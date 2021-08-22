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
class indexControle extends suporteControle {

    protected $protocolos;
    public $anexos;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->protocolos = $this->loadModulo('painel', 'protocolos');
        $this->anexos = $this->loadModulo('painel', 'anexos');
    }

    public function index() {
        $listaProtocolos = $this->protocolos->getListaUser();

        $this->_view->assign('listaProtocolos', $listaProtocolos);
        $this->_view->assign('abertos', $this->protocolos->qtd(false, Sessao::get('user')['USU_id']));
        $this->_view->assign('atendidos', $this->protocolos->qtd(2, Sessao::get('user')['USU_id']));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, Sessao::get('user')['USU_id']));


        $this->_view->assign('titulo', 'Painel do Usuário');
        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'home');
        $this->_view->addConteudo('home');
        $this->_view->renderizar();
        ;
    }

}
