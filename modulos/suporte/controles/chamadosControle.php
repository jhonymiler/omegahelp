<?php

/*
 * Classe para tickets (chamados)
 * Trabalha as páginas para exibição ao usuário
 */

/**
 * Description of chamadosControle
 *
 * @author Jonatas
 */
class chamadosControle extends suporteControle
{
    //put your code here
    protected $chamados;
    public $erro;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('chamados');
        $this->_view->addNavLink('suporte/chamados', 'Chamados');
        $this->chamados = $this->loadModulo('suporte', 'chamados');
    }

    
    public function index()
    {
        $this->_view->assign('titulo', 'Painel do Usuário');

        $this->_view->addNavLink('usuarios', 'Painel de Usuários');
        $this->_view->assign('current_link', 'chamados');
        $this->_view->addConteudo('home');
        $this->_view->renderizar();
    }
    
    public function novo()
    {
        $tipos = $this->chamados->listaTipos();
        $this->_view->assign('tipos', $tipos);
                  
        if ($this->POST()) {
            if (is_array($this->chamados->load($this->POST(), $_FILES))) {
                if ($this->_db->_grava()) {
                    $this->_view->addMsg('sucesso', 'Chamado gravado com Sucesso');
                    $this->index();
                } else {
                    $this->_view->addMsg('erro', 'Chamado não pode ser gravado.');
                }
            }
        }
        $this->_view->addConteudo('novochamado');
        $this->_view->renderizar();
    }
    
    
    public function editar($id)
    {
        if ($this->POST()) {
            $this->chamados->load($this->POST());
            if ($this->chamados->atualiza($id)) {
                $this->_view->addMsg('sucesso', 'Chamado atualizado com Sucesso');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível atualizar este chamados.');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        if ($cli = $this->chamados->getChamadoID($id)) {
            $this->_view->assign('titulo', 'Editando chamados:'.$cli[0]['EMP_fantazia']);
            $this->_view->assign('formAction', BASE_URL.'painel/chamados/editar/'.$cli[0]['EMP_id']);
            $this->_view->assign('chamados', $cli[0]);
            $this->_view->assign('campos', json_encode($cli[0]));
        } else {
            $this->_view->addMsg('erro', 'Chamado não existe!');

            $this->_view->assign('formAction', BASE_URL.'painel/chamados/editar');
        }
            
        $lista = $this->chamados->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->addNavLink('painel/chamados/editar', 'Editar chamados');
        $this->_view->addConteudo('chamadosCadastro');
        $this->_view->renderizar();
    }
    
    public function excluir($id = false)
    {
        if (is_numeric($id)) {
            if ($this->chamados->excluir($id)) {
                $this->_view->addMsg('sucesso', 'Chamado excluido com Sucesso');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível excluir este Chamado.');
            }
        } elseif ($this->POST()) {
            if ($this->chamados->excluir($this->POST('selAll'))) {
                $this->_view->addMsg('sucesso', 'Todos os Chamados selecionados foram excluidos.');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível excluir este Chamado.');
            }
        }
        $this->index();

        exit;
    }
}
