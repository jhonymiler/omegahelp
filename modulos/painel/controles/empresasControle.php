<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empresasControle
 *
 * @author Jonatas
 */
class empresasControle extends painelControle
{
    //put your code here
    protected $empresa;
    public $erro;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('empresas');
        $this->_view->addNavLink('painel/empresas', 'Empresas');

        $this->_view->assign('current_link', 'empresas');
        $this->empresa = $this->loadModulo('painel', 'empresas');
    }


    public function index()
    {
        $lista = $this->empresa->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->assign('titulo', 'Gerenciamento de Empresas');
        $this->_view->assign('formAction', BASE_URL . 'painel/empresas/novo');
        $this->_view->addConteudo('empresasCadastro');
        $this->_view->renderizar();
    }

    public function novo()
    {
        $post = $this->POST();

        if ($this->POST()) {
            if (is_array($this->empresa->load($this->POST()))) {
                if ($this->_db->_grava()) {
                    Sessao::addMsg('sucesso', 'Empresa gravada com Sucesso');
                } else {
                    Sessao::addMsg('erro', 'Empresa não pode ser gravada.');
                }
            }
        }
        $this->index();
    }


    public function editar($id)
    {
        if ($this->POST()) {
            $this->empresa->load($this->POST());
            if ($this->empresa->atualiza($id)) {
                Sessao::addMsg('sucesso', 'Empresa atualizado com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível atualizar esta empresa.');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        if ($emp = $this->empresa->getEmpresaID($id)) {
            $this->_view->assign('titulo', 'Editando empresa:' . $emp[0]['EMP_fantasia']);
            $this->_view->assign('formAction', BASE_URL . 'painel/empresas/editar/' . $emp[0]['EMP_id']);
            $this->_view->assign('empresa', $emp[0]);
            $this->_view->assign('campos', json_encode($emp[0]));
        } else {
            Sessao::addMsg('erro', 'Empresa não existe!');

            $this->_view->assign('formAction', BASE_URL . 'painel/empresas/editar');
        }

        $lista = $this->empresa->lista();
        $this->_view->assign('lista', $lista);

        $this->_view->addNavLink('painel/empresas/editar', 'Editar empresa');
        $this->_view->addConteudo('empresasCadastro');
        $this->_view->renderizar();
    }

    public function excluir($id = false)
    {
        if (is_numeric($id)) {
            if ($this->empresa->excluir($id)) {
                Sessao::addMsg('sucesso', 'Empresa excluido com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir esta Empresa.');
            }
        } elseif ($this->POST()) {
            if ($this->empresa->excluir($this->POST('selAll'))) {
                Sessao::addMsg('sucesso', 'Todas as Empresas selecionadas foram excluidas.');
            } else {
                Sessao::addMsg('erro', 'Não foi possível excluir esta Empresa.');
            }
        }
        $this->index();

        exit;
    }
}
