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
class protocolosControle extends suporteControle
{

    //put your code here
    protected $protocolos;
    public $erro;
    public $anexos;
    public $user;

    public function __construct()
    {
        parent::__construct();
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        }
        $this->_db->_setTabela('protocolos');
        $this->_view->addNavLink('suporte/protocolos', 'Protocolos');

        $this->user = Sessao::get('user');
        $this->protocolos = $this->loadModulo('painel', 'protocolos');
        $this->anexos = $this->loadModulo('painel', 'anexos');
        $listaProtocolos = $this->protocolos->getListaUser($this->user['USU_id']);

        $this->_view->assign('listaProtocolos', $listaProtocolos);
        $this->_view->assign('abertos', $this->protocolos->qtd(false, $this->user['USU_id']));
        $this->_view->assign('atendidos', $this->protocolos->qtd(2, $this->user['USU_id']));
        $this->_view->assign('aguardando', $this->protocolos->qtd(1, $this->user['USU_id']));
    }

    public function index()
    {
        $this->_view->assign('titulo', 'Meus protocolos');

        $this->_view->addNavLink('usuarios', 'Meus protocolos');
        $this->_view->assign('current_link', 'protocolos');
        $this->_view->addConteudo('home');
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
            $this->redir('suporte/protocolos/');
        } else {
            $this->_view->addConteudo('novoprotocolo');
            $this->_view->renderizar();
        }
    }

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

            $this->_view->assign('titulo', 'Protocolo #' . $proID);

            $this->_view->addNavLink('protocolo', 'Protocolo');
            $this->_view->assign('current_link', 'protocolos');
            $this->_view->addConteudo('protocolo');
            $this->_view->renderizar();
        } else {
            $this->redir('suporte/protocolos/');
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
            } else {
                Sessao::addMsg('erro', 'A resposta não pode ser gravada.');
            }
            $this->redir('suporte/protocolos/ver/' . $this->POST()['PRO_id']);
        } else {
            $this->redir('suporte/protocolos');
        }
    }
}
