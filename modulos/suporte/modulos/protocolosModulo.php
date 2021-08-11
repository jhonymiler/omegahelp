<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of protocolosModulo
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
    private $arquivos=array();

    public function __construct()
    {
        parent::__construct();
    }

    //Lista todos Protocolos deste usuário
    public function lista()
    {
        $this->_db->_setTabela($this->tabela);
        $this->usuario = $this->_db->_select('USU_id', Sessao::get('user')['USU_id']);
        return is_array($this->usuario)? $this->usuario : false;
    }

    public function listaTipos()
    {
        $this->_db->_setTabela('tipoProtocolos');
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
        $this->_db->_setTabela('protocolos');

        $this->$novoProtocolo = array(
            'CHA_assunto'=>$campos['CHA_assunto'],
            'CHA_texto'=>$campos['CHA_texto'],
            'TIP_id'=>$campos['TIP_id'],
//            'CHA_prioridade'=>$campos[''],
//            'CHA_aberto'=>$campos[''],
//            'CHA_alterado'=>$campos[''],
//            'CHA_fechado'=>$campos[''],
            'USU_id'=>Sessao::get('user')['USU_id']
        );
        
        
        // Realiza upload dos arquivos
        if (isset($arquivos['files']['name']) && is_array($arquivos['files']['name'])) {
            $this->arquivos = $this->upload($arquivos);
        }
        
        
    }
    
    
    
    public function grava(){
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
        } elseif (is_array($id) && count($id)>0) {
            return $this->_db->_query('DELETE FROM empresas WHERE EMP_id IN ('.implode(',', $id).')');
        }
    }
    public function getErro()
    {
        return $this->erro = $this->_db->_getErro();
    }
}
