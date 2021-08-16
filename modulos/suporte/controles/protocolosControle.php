<?php

/*
 * Classe para tickets (protocolos)
 * Trabalha as páginas para exibição ao usuário
 */

/**
 * Description of protocolosControle
 *
 * @author Jonatas
 */
class protocolosControle extends suporteControle {

    //put your code here
    protected $protocolos;
    public $erro;
    public $anexos;

    public function __construct() {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('protocolos');
        $this->_view->addNavLink('suporte/protocolos', 'Protocolos');
        $this->protocolos = $this->loadModulo('suporte', 'protocolos');
        $this->anexos = $this->loadModulo('suporte', 'anexos');

        $listaProtocolos = $this->protocolos->getListaUser();

        $this->_view->assign('listaProtocolos', $listaProtocolos);
        $this->_view->assign('abertos', $this->protocolos->qtd(false, Sessao::get('user')['USU_id']));
        $this->_view->assign('atendidos', $this->protocolos->qtd(2, Sessao::get('user')['USU_id']));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, Sessao::get('user')['USU_id']));
    }

    public function index() {


        $this->_view->assign('titulo', 'Painel do Usuário');

        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'protocolos');
        $this->_view->addConteudo('home');
        $this->_view->renderizar();
    }

    public function novo() {
        $tipos = $this->protocolos->listaTipos();
        $this->_view->assign('tipos', $tipos);

        if ($this->POST()) {
            $this->protocolos->load($this->POST());
            if ($id = $this->protocolos->grava()) {
                Sessao::addMsg('sucesso', 'Protocolo gravado com Sucesso');
                if ($id > 0 && is_array($_FILES['files']['name'])) {
                    if ($this->anexos->grava('PRO_id', $id)) {
                        Sessao::addMsg('sucesso', 'Anexos adicionados com sucesso');
                    } else {
                        Sessao::addMsg('erro', 'Os anexos não puderam ser adicionados');
                    }
                }
            } else {
                Sessao::addMsg('erro', 'O Protocolo não pode ser gravado.');
            }
            $this->redir('suporte/protocolos/');
        } else {
            $this->_view->addConteudo('novoprotocolo');
            $this->_view->renderizar();
        }
    }

    public function ver($proID) {
        
        $protocolo = $this->protocolos->getProtocolo($proID);
        
        $this->_view->assign('protocolo', $protocolo);
        $this->_view->assign('titulo', 'Protocolo #'.$proID);

        $this->_view->addNavLink('protocolo', 'Protocolo');
        $this->_view->assign('current_link', 'protocolos');
        $this->_view->addConteudo('protocolo');
        $this->_view->renderizar();
    }

}
