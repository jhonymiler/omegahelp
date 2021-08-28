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
    private $ext_arquivos;
    private $ext_imagens;

    public function __construct()
    {
        parent::__construct();
        $this->_db->_setTabela($this->tabela); // seta a tabela protocolos
        $this->ext_arquivos = array('xls', 'xlsx', 'doc', 'docx', 'pdf', 'xml', 'zip', 'rar');
        $this->ext_imagens = array('jpg', 'jpeg', 'png', 'gif');
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
            return $this->trataAnexo($anexos);
        } else {
            return false;
        }
    }

    public function trataAnexo($anexos)
    {
        if (is_array($anexos)) {
            foreach ($anexos as $i => $a) {
                $anexos[$i]['nomecortado'] = $this->corta_texto($anexos[$i]['ANE_arquivo'], 20, true);
                // verifica se a extensão do arquivo existe em $this->extensao
                // para poder ser chamado o ícone de cada arquivo no front
                // se existir coloca a extensão do arquivo na variável
                $info = new SplFileInfo($anexos[$i]['ANE_arquivo']);
                if (in_array($info->getExtension(), $this->ext_arquivos)) {
                    $anexos[$i]['extensao'] = $info->getExtension();
                    // se for imagem passa uma variável indicando como imagem para que
                    // ao invés de trazer um ícone no front, trazer a imagem para ser exibida
                } elseif (in_array($info->getExtension(), $this->ext_imagens)) { // se não, coloca a extensão file
                    $anexos[$i]['imagem'] = true;
                } else { // se não, seta a extensão como file para trazer um ícone genérico
                    $anexos[$i]['extensao'] = 'file';
                }
            }
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
                if (is_array($this->arquivos) && count($this->arquivos) > 0) {
                    foreach ($this->arquivos as $nomes) {
                        $valores[] =  "('" . $nomes . "'," . $id . ")";
                    }
                    $sql = "INSERT INTO " . $this->tabela . " (ANE_arquivo," . $campo . ") values " . implode(',', $valores);
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
