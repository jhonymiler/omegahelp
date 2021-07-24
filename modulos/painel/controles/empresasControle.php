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

        $this->_view->assign('titulo', 'Gerenciamnto de Empresas');
        $this->_view->assign('formAction', BASE_URL.'painel/empresas/novo');
        $this->_view->addConteudo('empresasCadastro');
        $this->_view->renderizar();
    }
    
    public function novo()
    {
        $post = $this->POST();
        
        if ($this->POST()) {
            if (is_array($this->empresa->load($this->POST()))) {
                if ($this->_db->_grava()) {
                    $this->_view->addMsg('sucesso', 'Cliente gravado com Sucesso');
                } else {
                    $this->_view->addMsg('erro', 'Cliente não pode ser gravado.');
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
                $this->_view->addMsg('sucesso', 'Cliente atualizado com Sucesso');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível atualizar este empresa.');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        if ($cli = $this->empresa->getClienteID($id)) {
            $this->_view->assign('titulo', 'Editando empresa:'.$cli[0]['EMP_fantazia']);
            $this->_view->assign('formAction', BASE_URL.'painel/empresas/editar/'.$cli[0]['EMP_id']);
            $this->_view->assign('empresa', $cli[0]);
            $this->_view->assign('campos', json_encode($cli[0]));
        } else {
            $this->_view->addMsg('erro', 'Cliente não existe!');

            $this->_view->assign('formAction', BASE_URL.'painel/empresas/editar');
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
                $this->_view->addMsg('sucesso', 'Cliente excluido com Sucesso');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível excluir este Cliente.');
            }
        } elseif ($this->POST()) {
            if ($this->empresa->excluir($this->POST('selAll'))) {
                $this->_view->addMsg('sucesso', 'Todos os Empresas selecionados foram excluidos.');
            } else {
                $this->_view->addMsg('erro', 'Não foi possível excluir este Cliente.');
            }
        }
        $this->index();

        exit;
    }
}
