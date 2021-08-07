<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of chamadosModulo
 *
 * @author Jonatas
 */
class chamadosModulo extends Modulo
{
   
    //put your code here
    public $erro;

    private $tabela = 'chamados';
    private $usuario;
    private $tipos;
    private $respostas;
    private $empresa = array();

    public function __construct()
    {
        parent::__construct();
    }

    //Lista todos Chamados deste usuário
    public function lista()
    {
        $this->_db->_setTabela($this->tabela);
        $this->usuario = $this->_db->_select('USU_id', Sessao::get('user')['USU_id']);
        return is_array($this->usuario)? $this->usuario : false;
    }

    public function listaTipos()
    {
        $this->_db->_setTabela('tipoChamados');
        $this->tipos = $this->_db->_select();
        return is_array($this->tipos)? $this->tipos : false;
    }



    public function getCLienteID($id)
    {
        $this->empresa =  $this->_db->_select('EMP_id', $id);
        $endereco = explode(', ', $this->empresa[0]['EMP_endereco']);
        $this->empresa[0]['rua'] = $endereco[0];
        $this->empresa[0]['numero'] = $endereco[1];
        return $this->empresa;
    }
    public function load($campos, $arquivos)
    {
        $this->_db->_setTabela('chamados');

        $c = array(
            'CHA_assunto'=>$campos['CHA_assunto'],
            'CHA_texto'=>$campos['CHA_texto'],
            'CHA_tipo'=>$campos['CHA_tipo'],
            'CHA_prioridade'=>$campos[''],
            'CHA_aberto'=>$campos[''],
            'CHA_alterado'=>$campos[''],
            'CHA_fechado'=>$campos[''],
            'USU_id'=>$campos['']
        );
        $this->_db->_load();
        if (isset($arquivos['files']['name']) && is_array($arquivos['files']['name'])) {
            $arq = $this->upload($arquivos);
        }
    }
    public function atualiza($id)
    {
        return $this->_db->_atualiza('EMP_id', $id);
    }
    public function excluir($id)
    {
        if (is_numeric($id)) {
            return $this->_db->_delete('EMP_id', $id);
        } elseif (is_array($id) && count($id)>0) {
            return $this->_db->_query('DELETE FROM empresas WHERE EMP_id IN ('.implode(',', $id).')');
        }
    }
    public function getErro()
    {
        return $this->erro = $this->_db->_getErro();
    }
}
