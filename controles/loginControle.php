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
class loginControle extends Controlador
{
    protected $_user;
    public $_info;

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->_user = $this->loadModulo('painel', 'usuario');
        $this->_view->setTemplate(DEFAOULT_LAYOUT);
        $this->_info = array(
            'nome'       => $this->_user->info['USU_nome'],
            'email'      => $this->_user->info['USU_email']

        );
    }

    public function index()
    {
        Sessao::set('autenticado', false);

        $this->_view->assign('titulo', APP_NOME . ' - LOGIN');
        $this->_view->assign('user', $this->_info);
        $this->_view->display($this->_view->getPath('view') . 'login.tpl');
    }

    public function acesso()
    {
        Sessao::set('autenticado', false);

        if (!$this->POST('email')) {
            $assign = $this->_view->assign('_error', 'Digite um nome de Usuário');
        } elseif (!$this->POST('senha')) {
            $this->_view->assign('_error', 'Digite uma senha');
        } else {
            if (!is_array($this->_user->_selectUser("USU_email", $this->POST('email')))) {
                $this->_view->assign('_error', 'Usuário ou senha incorretos');
            } else {
                if ($this->_user->_get('USU_senha') == md5($this->POST('senha'))) {
                    // se a senha for verdadeira
                    Sessao::set('autenticado', true);

                    $usuario = array(
                        'USU_id'         => $this->_user->_get('USU_id'),
                        'USU_nome'       => $this->_user->_get('USU_nome'),
                        'USU_email'      => $this->_user->_get('USU_email'),
                        'USU_imagem'     => $this->_user->_get('USU_imagem'),
                        'USU_nivel'      => $this->_user->_get('USU_nivel'),
                        'sessao'         => time()
                    );
                    Sessao::set('user', $usuario);
                } else {
                    $this->_view->assign('_error', 'Usuário ou senha incorretos');
                }
            }
        }

        if (Sessao::get('autenticado') === true) {
            if ($this->_user->_get('USU_nivel') == 0) {
                $this->redir('suporte');
            } else {
                $this->redir('painel');
            }

            exit();
        } else {
            $this->index();
        }
    }

    public function recuperar_senha()
    {
        Sessao::set('autenticado', false);

        if ($this->POST('email')) {
            if (!is_array($this->_user->_selectUser("USU_email", $this->POST('email')))) {
                $this->_view->assign('alterar_senha', true);
            }
        }

        $this->_view->assign('titulo', APP_NOME . ' - Recuperar Senha');
        $this->_view->display($this->_view->getPath('view') . 'recupera_senha.tpl');
    }


    public function sair()
    {
        Sessao::destroy();
        $this->redir('login');
    }
}
