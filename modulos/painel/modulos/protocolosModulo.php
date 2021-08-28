<?php

/**
 *
 * Modulo de protocolos
 *
 * Modulo responsavel por manipular todas as informações dos chamados
 * feitos pelos usuários
 *
 *
 * @author Jonatas
 */

class protocolosModulo extends Modulo
{

    //put your code here
    public $erro;
    private $tabela = 'protocolos';
    private $usuario;
    private $tipos;
    private $respostas;
    private $empresa = array();
    private $novoProtocolo;
    private $arquivos = array();
    private $status;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Lista todos os protocolos puzando pelo usuário logado
     */
    public function lista()
    {
        $this->_db->_setTabela($this->tabela);
        $this->usuario = $this->_db->_select('USU_id', Sessao::get('user')['USU_id']);
        return is_array($this->usuario) ? $this->usuario : false;
    }

    /**
     * Lista todos os tipos de protocolos
     *
     * @return void
     */
    public function listaTipos()
    {
        $this->_db->_setTabela('tipoProtocolos');
        $this->tipos = $this->_db->_select();
        return is_array($this->tipos) ? $this->tipos : false;
    }


    public function load($campos)
    {
        $this->novoProtocolo = array(
            'PRO_assunto' => $campos['PRO_assunto'],
            'PRO_texto' => $campos['PRO_texto'],
            'TIP_id' => $campos['TIP_id'],
            'USU_id' => Sessao::get('user')['USU_id']
        );
    }

    public function grava()
    {
        $this->_db->_setTabela($this->tabela); // seta a tabela protocolos
        $this->_db->_load($this->novoProtocolo);

        return $this->_db->_grava();
    }

    public function atualiza($id)
    {
        return $this->_db->_atualiza('EMP_id', $id);
    }

    public function excluir($id)
    {
        if (is_numeric($id)) {
            return $this->_db->_delete('EMP_id', $id);
        } elseif (is_array($id) && count($id) > 0) {
            return $this->_db->_query('DELETE FROM empresas WHERE EMP_id IN (' . implode(',', $id) . ')');
        }
    }

    public function getErro()
    {
        return $this->erro = $this->_db->_getErro();
    }

    /**
     * Lista todos os protocolos trazendo
     * trazendo os status e os tipos de protocolos pelo usuário logado.
     *
     * @return void
     */
    public function getListaUser(int $userID)
    {
        if (is_int($userID)) {
            $sql = "
            SELECT p.PRO_id,p.PRO_assunto,p.PRO_texto,s.STA_status,s.STA_corHtml, DATE_FORMAT(P.PRO_aberto,'%d/%m/%Y %H:%m:%s') as PRO_aberto,t.TIP_tipo,t.TIP_prioridade 
            FROM protocolos p 
            inner join tipoprotocolos t on t.TIP_id=p.TIP_id 
            inner join statusprotocolos as s on p.PRO_status=s.STA_id where p.USU_id=" . $userID . " order by PRO_id desc";

            $lista = $this->_db->_query($sql);

            if (is_array($lista)) {
                return $lista;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    /**
     * Tras a quantidade de chamados
     * de acordo com os parametros passados
     *
     * @param boolean $status
     * @param boolean $id
     * @return void
     */
    public function qtd($status = false, $id = false)
    {
        if ($id) {
            $u = ' AND USU_id=' . $id;
        } else {
            $u = '';
        }

        if (!$status) {
            $sql = "SELECT count(*) as qtd FROM protocolos WHERE PRO_status <> 6" . $u;
        } else {
            $sql = "SELECT count(*) as qtd FROM protocolos WHERE PRO_status=" . $status . $u;
        }
        $qtd =  $this->_db->_query($sql);
        return $qtd[0];
    }
    /**
     * Pega o protocolo pela id passada
     *
     * @param [type] $id
     * @return void
     */
    public function getProtocolo($id)
    {
        if (is_numeric($id)) {
            $sql = "SELECT p.PRO_id,p.PRO_assunto,p.PRO_texto,s.STA_status,s.STA_corHtml, 
            DATE_FORMAT(P.PRO_aberto,'%d/%m/%Y %H:%m:%s') as PRO_aberto,t.TIP_tipo,t.TIP_prioridade 
            FROM protocolos p 
            inner join tipoprotocolos t on t.TIP_id=p.TIP_id 
            inner join statusprotocolos as s on p.PRO_status=s.STA_id 
            where p.PRO_id=" . $id;

            return $this->_db->_query($sql)[0];
        } else {
            return false;
        }
    }
}
