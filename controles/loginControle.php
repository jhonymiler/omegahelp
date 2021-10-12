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
    protected $email;
    public $_info;

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->_user = $this->loadModulo('painel', 'usuario');
        $this->email = $this->loadModulo('painel', 'email');
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
        $this->_view->assign('msg', Sessao::getMsg($limpa = true));

        $this->_view->display($this->_view->getPath('view') . 'login.tpl');
    }

    public function acesso()
    {
        Sessao::set('autenticado', false);

        if (!$this->POST('email')) {
            $assign = $this->_view->assign('_error', 'Digite um nome de Usuário');
        } elseif (!$this->POST('senha')) {
            Sessao::addMsg('erro', 'Digite uma senha');
        } else {
            if (!is_array($this->_user->_selectUser("USU_email", $this->POST('email')))) {
                Sessao::addMsg('erro', 'Usuário ou senha incorretos');
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
                    Sessao::addMsg('erro', 'Usuário ou senha incorretos');
                }
            }
        }

        if (Sessao::get('autenticado') === true) {
            if ($this->_user->_get('USU_nivel') == 0) {
                if (Sessao::get('url_pretendido')) {
                    header('location:' . BASE_URL . Sessao::get('url_pretendido'));
                    exit;
                } else {
                    $this->redir('suporte');
                }
            } else {
                if (Sessao::get('url_pretendido')) {
                    header('location:' . BASE_URL . Sessao::get('url_pretendido'));
                    exit;
                } else {
                    $this->redir('painel');
                }
            }
        } else {
            $this->index();
        }
    }

    public function recuperar_senha($token = false)
    {
        Sessao::set('autenticado', false);

        if ($this->POST('email')) {
            $user = $this->_user->_selectUser("USU_email", $this->POST('email'));
            if (is_array($user) && count($user) > 0) {
                $user = $user[0];
                $this->email->Para($user['USU_email'], $user['USU_nome']);

                $user['link'] = BASE_URL . 'login/recuperar_senha/' . $this->encript('{"id":' . $user['USU_id'] . ',"email":"' . $user['USU_email'] . '"}');
                $user['email'] = EMAIL_USER;

                $modelo = $this->email->getModelo(1);
                $modelo = $this->email->substituiTexto($user, $modelo[0]['MOD_html']);
                $enviado = $this->email->Enviar(APP_NOME . ' - Alteração de Senha', $modelo);
                if ($enviado) {
                    $this->_view->assign('enviado', true);
                }
            } else {

                Sessao::addMsg('erro', 'Desculpe, este email não existe.');
            }
        }

        if ($token) {
            $dados = json_decode($this->decript($token));
            if (is_object($dados)) {
                if ($this->POST('senha') && $this->POST('senha') == $this->POST('confirma_senha')) {
                    $this->_user->_load(array('USU_senha' => $this->POST('senha')));
                    if ($this->_user->_atualiza($dados->id)) {

                        Sessao::addMsg('sucesso', 'Senha atualizada com sucesso.');
                        $this->redir('login');
                    } else {
                        Sessao::addMsg('erro', 'Desculpe, ocorreu um erro. Sua senha não pode ser atualizada! Por Favor, escolha outra senha.');
                    }
                }

                $this->_view->assign('alterar_senha', true);
            } else {
                Sessao::addMsg('erro', 'Desculpe, este Token não existe.');
            }
            $this->_view->assign('token', $token);
        }

        $this->_view->assign('titulo', APP_NOME . ' - Recuperar Senha');
        $this->_view->assign('msg', Sessao::getMsg($limpa = true));
        $this->_view->display($this->_view->getPath('view') . 'recupera_senha.tpl');
    }


    public function sair()
    {
        Sessao::destroy();
        $this->redir('login');
    }
}
