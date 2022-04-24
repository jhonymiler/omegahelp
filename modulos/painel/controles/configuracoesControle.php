<?php

/**
 * Classe que cuidará das configurações do sistema,
 * incluindo os modelos de email
 */
class configuracoesControle extends painelControle
{
    //put your code here
    public $config;
    public $email;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('email_modelos');

        $this->_view->addNavLink('configuracoes', 'Configurações');
        $this->email = $this->loadModulo('painel', 'email');
        $this->_view->assign('current_link', 'configuracoes');
    }

    public function index($id = false)
    {
        if ($this->POST('MOD_titulo')) {
            $dados = array(
                'MOD_titulo' => $this->POST('MOD_titulo'),
                'MOD_html' => addslashes($_POST['MOD_html'])
            );

            $this->_db->_load($dados);
            if ($this->_db->_grava()) {
                Sessao::addMsg('sucesso', 'Modelo gravado com sucesso!');
            } else {
                Sessao::addMsg('erro', 'Houve um erro, o modelo não pode ser gravado!');
            }
        }

        $modelos = $this->_db->_select();
        if (count($modelos) > 0) {
            $this->_view->assign('modelos', $modelos);
        }

        if (is_numeric($id)) {
            $modelo = $this->_db->_select('MOD_id', $id);
            if (count($modelo[0]) > 0) {
                $this->_view->assign('modelo', $modelo[0]);
            }
        }

        $this->_view->assign('titulo', 'Configurações do Sistema');

        $this->_view->addConteudo('configuracoes');
        $this->_view->renderizar();
    }

    public function email($acao = false, $id = false)
    {
        switch ($acao) {
            case 'editar':

                if ($this->POST('MOD_titulo')) {
                    $dados = array(
                        'MOD_titulo' => $this->POST('MOD_titulo'),
                        'MOD_html' => addslashes($_POST['MOD_html'])
                    );
                    $this->email->editar_modelo($dados, $id);
                    // zerar variável
                    $_POST = array();
                }
                $this->index($id);

                break;
            case 'excluir':
                $this->email->excluir_modelo($id);
                $this->redir('painel/configuracoes/');
                break;

            default:
                # code...
                break;
        }
    }
}
