<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of departamentosControle
 *
 * @author Jonatas
 */
class departamentosControle extends painelControle
{
    //put your code here
    protected $Departamento;
    public $erro;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('departamentos');
        $this->_view->addNavLink('painel/departamentos', 'departamentos');

        $this->_view->assign('current_link', 'departamentos');
        $this->departamento = $this->loadModulo('painel', 'departamentos');
    }


    public function index()
    {
        $lista = $this->departamento->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->assign('titulo', 'Gerenciamento de departamentos');
        $this->_view->assign('formAction', BASE_URL . 'painel/departamentos/novo');
        $this->_view->addConteudo('departamentosCadastro');
        $this->_view->renderizar();
    }

    public function novo()
    {
        $post = $this->POST();

        if ($this->POST()) {
            if (is_array($this->departamento->load($this->POST()))) {
                if ($this->_db->_grava()) {
                    Sessao::addMsg('sucesso', 'Departamento gravado com Sucesso');
                } else {
                    Sessao::addMsg('erro', 'Departamento não pode ser gravado.');
                }
            }
        }
        $this->index();
    }


    public function editar($id)
    {
        if ($this->POST()) {
            $this->departamento->load($this->POST());
            if ($this->departamento->atualiza($id)) {
                Sessao::addMsg('sucesso', 'Departamento atualizado com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível atualizar este Departamento.');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        if ($dep = $this->departamento->getDepartamentoID($id)) {
            $this->_view->assign('titulo', 'Editando departamento:' . $dep[0]['DEP_titulo']);
            $this->_view->assign('formAction', BASE_URL . 'painel/departamentos/editar/' . $dep[0]['DEP_id']);
            $this->_view->assign('Departamento', $dep[0]);
            $this->_view->assign('campos', json_encode($dep[0]));
        } else {
            Sessao::addMsg('erro', 'Departamento não existe!');

            $this->_view->assign('formAction', BASE_URL . 'painel/departamentos/editar');
        }

        $lista = $this->departamento->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->addNavLink('painel/departamentos/editar', 'Editar departamento');
        $this->_view->addConteudo('departamentosCadastro');
        $this->_view->renderizar();
    }

    public function excluir($id = false)
    {
        if (is_numeric($id)) {
            if ($this->departamento->excluir($id)) {
                Sessao::addMsg('sucesso', 'Departamento excluido com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir este Departamento.');
            }
        } elseif ($this->POST()) {
            if ($this->departamento->excluir($this->POST('selAll'))) {
                Sessao::addMsg('sucesso', 'Todos os departamentos selecionados foram excluidos.');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir este Departamento.');
            }
        }
        $this->index();

        exit;
    }
}
