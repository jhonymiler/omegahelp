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
    protected $protocolos;
    public $erro;
    public $anexos;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }

        //$this->_db->_select(); 
        $this->_db->_setTabela('protocolos');
        $this->_view->addNavLink('home', 'Home');
        $this->protocolos = $this->loadModulo('painel', 'protocolos');
        $this->anexos = $this->loadModulo('painel', 'anexos');

        //if (Sessao::get('user')['USU_nivel'] = 3) {
        $listaProtocolos = $this->protocolos->ListaTodos();
        //}

        $this->_view->assign('listaProtocolos', $listaProtocolos);
        $this->_view->assign('abertos', $this->protocolos->qtd(false, false));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, false));
        $this->_view->assign('pendentes', $this->protocolos->qtd(1, false));
        $this->_view->assign('atendidos', array('qtd' => $this->protocolos->qtd(false, false)['qtd'] - $this->protocolos->qtd(1, false)['qtd']));
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Painel Adminsitrativo');

        $this->_view->addConteudo('protocolos');
        $this->_view->renderizar();
    }
}
