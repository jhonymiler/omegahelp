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
class protocolosControle extends suporteControle
{
    //put your code here
    protected $protocolos;
    public $erro;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('protocolos');
        $this->_view->addNavLink('suporte/protocolos', 'Protocolos');
        $this->protocolos = $this->loadModulo('suporte', 'protocolos');
    }

    
    public function index()
    {
        $this->_view->assign('titulo', 'Painel do Usuário');

        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'protocolos');
        $this->_view->addConteudo('home');
        $this->_view->renderizar();
    }
    
    public function novo()
    {
        $tipos = $this->protocolos->listaTipos();
        $this->_view->assign('tipos', $tipos);
                  
        if ($this->POST()) {
            if (is_array($this->protocolos->load($this->POST(), $_FILES))) {
                if ($this->_db->_grava()) {
                    Sessao::addMsg('sucesso', 'Protocolo gravado com Sucesso');
                    $this->index();
                } else {
                    Sessao::addMsg('erro', 'Protocolo não pode ser gravado.');
                }
            }
        }
        $this->_view->addConteudo('novoprotocolo');
        $this->_view->renderizar();
    }
    
    
    public function editar($id)
    {
        if ($this->POST()) {
            $this->protocolos->load($this->POST());
            if ($this->protocolos->atualiza($id)) {
                Sessao::addMsg('sucesso', 'Protocolo atualizado com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível atualizar este protocolos.');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        if ($cli = $this->protocolos->getProtocoloID($id)) {
            $this->_view->assign('titulo', 'Editando protocolos:'.$cli[0]['EMP_fantazia']);
            $this->_view->assign('formAction', BASE_URL.'painel/protocolos/editar/'.$cli[0]['EMP_id']);
            $this->_view->assign('protocolos', $cli[0]);
            $this->_view->assign('campos', json_encode($cli[0]));
        } else {
            Sessao::addMsg('erro', 'Protocolo não existe!');

            $this->_view->assign('formAction', BASE_URL.'painel/protocolos/editar');
        }
            
        $lista = $this->protocolos->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->addNavLink('painel/protocolos/editar', 'Editar protocolos');
        $this->_view->addConteudo('protocolosCadastro');
        $this->_view->renderizar();
    }
    
    public function excluir($id = false)
    {
        if (is_numeric($id)) {
            if ($this->protocolos->excluir($id)) {
                Sessao::addMsg('sucesso', 'Protocolo excluido com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir este Protocolo.');
            }
        } elseif ($this->POST()) {
            if ($this->protocolos->excluir($this->POST('selAll'))) {
                Sessao::addMsg('sucesso', 'Todos os Protocolos selecionados foram excluidos.');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir este Protocolo.');
            }
        }
        $this->index();

        exit;
    }
}
