<?php


/**
 * Descrição de anexosModulo
 * Classe para manipular os anexos que serão vinculados
 * a tabela protocolo ou chat.
 *
 * @author Jhony
 */

class anexosModulo extends Modulo
{

    /** @var = array de arquivos */
    private $arquivos = array();
    
    private $tabela = 'anexos';
    
    public function __construct()
    {
        parent::__construct();
        $this->_db->_setTabela($this->tabela); // seta a tabela protocolos
    }

    /**
     * Retorna os anexos do protocolo passado
     *
     * @param [int] $id
     *
     * @return array ou false
     */
    public function getProAnexos($id)
    {
        $anexos = $this->_db->_select('PRO_id', $id);
        if (is_array($anexos)) {
            return $anexos;
        } else {
            return false;
        }
    }

    /**
     * Grava o anexo de acordo com o $campo passado
     * pode ser um anexo de protocolo (PRO_id)
     * ou um anexo do chat (CHA_id)
     * As duas chaves podem ser passadas para gravar na mesma tabela.
     *
     * @param  [string] $campo
     * @param  [int] $id
     * @return void
     */
    public function grava($campo, $id)
    {
        $arquivos = $_FILES;
        if ($id > 0) {
            // Realiza upload dos arquivos
            if (isset($arquivos['files']['name']) && is_array($arquivos['files']['name'])) {
                $valores = array();
                $this->arquivos = $this->upload($arquivos);
                if (is_array($this->arquivos) && count($this->arquivos)>0) {
                    foreach ($this->arquivos as $nomes) {
                        $valores[] =  "('".$nomes."',".$id.")";
                    }
                    $sql = "INSERT INTO ".$this->tabela." (ANE_arquivo,".$campo.") values ".implode(',', $valores);
                    return $this->_db->_query($sql);
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
