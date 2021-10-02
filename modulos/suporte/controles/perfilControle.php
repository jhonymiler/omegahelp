<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilControle
 *
 * @author Jonatas
 */
class perfilControle extends suporteControle
{
    //put your code here
    protected $_user;
    protected $_emp;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_view->addNavLink('suporte/perfil', 'Meu Perfil');

        $this->_view->assign('current_link', 'perfil');
        $this->_user = $this->loadModulo('painel', 'usuario');

        $this->user = Sessao::get('user');
        $this->protocolos = $this->loadModulo('painel', 'protocolos');

        $this->_view->assign('abertos', $this->protocolos->qtd(false, $this->user['USU_id']));
        $this->_view->assign('atendidos', $this->protocolos->qtd(2, $this->user['USU_id']));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, $this->user['USU_id']));
    }


    public function index()
    {
        $user = $this->_user->_selectUser('USU_id', Sessao::get('user')['USU_id']);

        if (is_array($user)) {
            unset($user[0]['USU_senha']); // deleta o campo senha para não ser exibido pela consulta;
            $this->_view->assign('campos', json_encode($user[0]));
        }

        if ($this->POST()) {

            $this->_user->_load($this->POST());
            if (!empty($this->POST('USU_imagem'))) {
                if (is_readable(RAIZ . 'upload/' . $user[0]['USU_imagem'])) {
                    unlink(RAIZ . 'upload/' . $user[0]['USU_imagem']);
                }
                $this->_user->upImagem();
            }
            if ($this->_user->_atualiza(Sessao::get('user')['USU_id'])) {
                Sessao::addMsg('sucesso', 'Usuário atualizado com Sucesso');
            } else {
                Sessao::addMsg('erro', 'Usuário não pode ser atualizado');
            }
            $this->_view->assign('campos', json_encode($this->POST()));
        }

        $user = $this->_user->_selectUser('USU_id', Sessao::get('user')['USU_id']);

        $this->_view->assign('FormAction', BASE_URL . 'suporte/perfil/');
        $this->_view->assign('usuario', $user[0]);
        $this->_view->assign('titulo', 'Meu perfil');

        $this->_view->addConteudo('perfil');
        $this->_view->renderizar();
    }
}
