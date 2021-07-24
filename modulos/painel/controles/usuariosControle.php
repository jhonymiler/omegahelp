<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariosControle
 *
 * @author Jonatas
 */
class usuariosControle extends painelControle
{
    //put your code here
    protected $_user;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('usuarios');
        $this->_view->addNavLink('painel/usuarios', 'Usuarios');

        $this->_view->assign('current_link', 'usuarios');
        $this->_user = $this->loadModulo('painel', 'usuario');
        
        $lista = $this->_user->listaUsuarios();
        $this->_view->assign('lista', $lista);
    }

    
    public function index()
    {
        $this->_view->assign('titulo', 'Gerenciamnto de usuários');

        $this->_view->addNavLink('usuarios/registro', 'Gerenciamnto de usuários');
        
        $this->_view->assign('FormAction', BASE_URL.'painel/usuarios/novo');
        $this->_view->addConteudo('usuarioCadastro');
        $this->_view->renderizar();
    }

    public function novo()
    {
        $post = $this->POST();
        unset($post['confirma_senha']);
        
        if ($this->POST()) {
            $this->_user->_load($post);

            if (isset($post['USU_imagem'])) {
                $this->_user->upImagem();
            }
            
            if ($this->_user->_grava()) {
                $this->_view->addMsg('sucesso', 'Usuário gravado com Sucesso');
            } else {
                $this->_view->addMsg('erro', "Usuário não pode ser gravado.");
            }
        }
        $this->index();
    }
    
    
    public function editar($id)
    {
        if (is_numeric($id)) {
            $user = $this->_user->_selectUser('USU_id', $id);
            if (is_array($user)) {
                unset($user[0]['USU_senha']);// deleta o campo senha para não ser exibido pela consulta;
                $this->_view->assign('campos', json_encode($user[0]));
            }
            
            
            if ($this->POST()) {
                $this->_user->_load($this->POST());
                if (!empty($this->POST('USU_imagem'))) {
                    unlink(RAIZ.'upload/'.$user[0]['USU_imagem']);
                    $this->_user->upImagem();
                }
                if ($this->_user->_atualiza($id)) {
                    $this->_view->addMsg('sucesso', 'Usuário atualizado com Sucesso');
                } else {
                    $this->_view->addMsg('erro', 'Usuário não pode ser atualizado');
                }
                $this->_view->assign('campos', json_encode($this->POST()));
            }
        }

        $this->_view->addNavLink('painel/usuarios/editar', 'Editar usuário');
        $this->_view->assign('titulo', 'Editando usuário:'.$user[0]['USU_nome']);
        $this->_view->assign('FormAction', BASE_URL.'painel/usuarios/editar/'.$user[0]['USU_id']);
        $this->_view->assign('usuario', $user[0]);
        $this->_view->addConteudo('usuarioCadastro');
        $this->_view->renderizar();
    }
    
    public function excluir($id = false)
    {
        if (is_numeric($id)) {
            if ($this->_user->_excluir($id)) {
                $this->_view->addMsg('sucesso', 'Usuário excluido com Sucesso');
            } else {
                $this->_view->addMsg('erro', 'Usuário não pode ser excluído');
            }
        } elseif ($this->POST()) {
            if ($this->_db->_query('DELETE FROM usuarios WHERE USU_id IN ('.$this->POST('selUser').')')) {
                $this->_view->addMsg('sucesso', 'Todos os usuários selecionados foram excluidos.');
            } else {
                $this->_view->addMsg('erro', 'Os usuários não puderam ser excluídos');
            }
        }
        $this->index();

        exit;
    }
}
