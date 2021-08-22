<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of anexosModulo
 *
 * @author Jhony
 */
class anexosModulo extends Modulo {

    /** @var = array de arquivos */
    private $arquivos = array();
    private $tabela = 'anexos';
    
    public function __construct() {
        parent::__construct();
    }

    public function grava($campo, $id) {

        $this->_db->_setTabela($this->tabela); // seta a tabela protocolos
        $arquivos = $_FILES;
        if ($id > 0) {
            // Realiza upload dos arquivos
            if (isset($arquivos['files']['name']) && is_array($arquivos['files']['name'])) {
                $valores = array();
                $this->arquivos = $this->upload($arquivos);
                if(is_array($this->arquivos) && count($this->arquivos)>0){
                    foreach($this->arquivos as $nomes){
                        $valores[] =  "('".$nomes."',".$id.")";
                    }
                    $sql = "INSERT INTO ".$this->tabela." (ANE_arquivo,".$campo.") values ".implode(',',$valores);
                    return $this->_db->_query($sql);
                }
                
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    

}
