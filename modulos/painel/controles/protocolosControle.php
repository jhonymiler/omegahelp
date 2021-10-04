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
class protocolosControle extends painelControle
{

    //put your code here
    protected $protocolos;
    public $erro;
    public $anexos;
    public $email;
    public $users;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }

        //$this->_db->_select(); 
        $this->_db->_setTabela('protocolos');
        $this->_view->addNavLink('painel/protocolos', 'Protocolos');
        $this->protocolos = $this->loadModulo('painel', 'protocolos');
        $this->anexos = $this->loadModulo('painel', 'anexos');
        $this->email = $this->loadModulo('painel', 'email');


        //if (Sessao::get('user')['USU_nivel'] = 3) {
        $listaProtocolos = $this->protocolos->ListaTodos();
        //}

        $this->_view->assign('listaProtocolos', $listaProtocolos);
        $this->_view->assign('abertos', $this->protocolos->qtd(false, false));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, false));
        $this->_view->assign('pendentes', $this->protocolos->qtd(1, false));
        $this->_view->assign('atendidos', array('qtd' => $this->protocolos->qtd(false, false)['qtd'] - $this->protocolos->qtd(1, false)['qtd']));
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Protocolos');

        $this->_view->addNavLink('protocolos', 'Gerenciamento de Protocolos');
        $this->_view->assign('current_link', 'protocolos');
        $this->_view->addConteudo('protocolos');
        $this->_view->renderizar();
    }

    public function novo()
    {
        $tipos = $this->protocolos->listaTipos();
        $this->_view->assign('tipos', $tipos);

        if ($this->POST()) {
            $this->protocolos->load($_POST);
            if ($id = $this->protocolos->grava()) {
                Sessao::addMsg('sucesso', 'Protocolo gravado com Sucesso');
                if ($id > 0 && is_array($_FILES['files']['name'])) {
                    if ($this->anexos->grava('PRO_id', $id)) {
                        Sessao::addMsg('sucesso', 'Anexos adicionados com sucesso');
                    } else {
                        Sessao::addMsg('erro', 'Os anexos não puderam ser adicionados');
                    }
                }
            } else {
                Sessao::addMsg('erro', 'O Protocolo não pode ser gravado.');
            }
            $this->redir('painel/protocolos/');
        } else {
            $this->_view->addConteudo('novoprotocolo');
            $this->_view->renderizar();
        }
    }

    /**
     * Mostra o protocolo na página para o cliente
     *
     * @param [type] $proID
     * 
     * @return void
     */
    public function ver($proID)
    {

        $protocolo = $this->protocolos->getProtocolo($proID);
        if (isset($protocolo["PRO_id"])) {

            $respostas = $this->protocolos->getRespostas($proID);
            if (is_array($respostas)) {
                foreach ($respostas as $k => $v) {
                    $respostas[$k]['anexos'] = $this->anexos->getAnexos('RES_id', $v["RES_id"]);
                }
            }
            $qtdRespostas = is_array($respostas) ? count($respostas) : 0;

            $anexos = $this->anexos->getAnexos('PRO_id', $protocolo["PRO_id"]);
            $this->_view->assign('anexos', $anexos);
            $this->_view->assign('respostas', $respostas);
            $this->_view->assign('protocolo', $protocolo);
            $this->_view->assign('respostaQtd', $qtdRespostas);

            $listaStatus = $this->protocolos->listaStatus();
            $this->_view->assign('listaStatus', $listaStatus);

            // lista atendentes para atribuição
            $this->users = $this->loadModulo('painel', 'usuario');
            $listaAtendentes = $this->users->getAtendentes();
            $this->_view->assign('atendentes', $listaAtendentes);



            $this->_view->assign('titulo', 'Protocolo #' . $proID);
            $this->_view->addNavLink('protocolo', 'Protocolo');
            $this->_view->assign('current_link', 'protocolos');
            $this->_view->addConteudo('protocolo');
            $this->_view->renderizar();
        } else {
            $this->redir('painel/protocolos/');
        }
    }

    public function resposta()
    {
        if ($this->POST()) {

            $this->protocolos->loadResposta($_POST);
            if ($id = $this->protocolos->gravaResposta()) {
                Sessao::addMsg('sucesso', 'Resposta gravada com sucesso');
                if ($id > 0 && is_array($_FILES['files']['name'])) {
                    if ($this->anexos->grava('RES_id', $id)) {
                        Sessao::addMsg('sucesso', 'Anexos adicionados com sucesso');
                    } else {
                        Sessao::addMsg('erro', 'Os anexos não puderam ser adicionados');
                    }
                }

                if ($_POST['enviar_email'] == 'on') {
                    $pro_user = $this->_db->_query("
                        SELECT * FROM protocolos as p
                        INNER JOIN usuarios as u on u.USU_id=p.USU_id
                        WHERE p.PRO_id='" . addslashes($_POST['PRO_id']) . "'
                    ");

                    if (is_array($pro_user) && count($pro_user) > 0) {
                        $pro_user = $pro_user[0];
                        $this->email->Para($pro_user['USU_email'], $pro_user['USU_nome']);

                        $pro_user['link_protocolo'] = BASE_URL . 'suporte/protocolos/ver/' . $pro_user['PRO_id'];
                        $pro_user['email'] = EMAIL_USER;

                        $modelo = $this->email->getModelo(5);
                        $modelo = $this->email->substituiTexto($pro_user, $modelo[0]['MOD_html']);

                        $this->email->Enviar(APP_NOME . ' - Alteração de Senha', $modelo);
                    }
                }
            } else {
                Sessao::addMsg('erro', 'A resposta não pode ser gravada.');
            }
            $this->redir('painel/protocolos/ver/' . $this->POST()['PRO_id']);
        } else {
            $this->redir('painel/protocolos');
        }
    }
}
