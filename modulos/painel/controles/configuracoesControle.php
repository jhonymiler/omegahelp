<?php

/**
 * Classe que cuidará das configurações do sistema,
 * incluindo os modelos de email
 */
class configuracoesControle extends painelControle
{
    //put your code here
    public $erro;
    public $email;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }

        $this->_view->addNavLink('configuracoes', 'Configurações');
        $this->protocolos = $this->loadModulo('painel', 'conviguracoes');
        $this->email = $this->loadModulo('painel', 'email');
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Configurações do Sistema');

        $this->_view->addConteudo('configuracoes');
        $this->_view->renderizar();
    }
}
