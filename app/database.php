<?php

// BANCO DE DADOS
define('DB_HOST', "localhost");
define('DB_NAME', 'omegahelp');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');


class Database
{
    //propriedades
    private $host           = DB_HOST;
    private $db             = DB_NAME;
    private $dbUser         = DB_USER;
    private $dbPass         = DB_PASS;
    public $conexao        = null;
    public $dataset        = null;
    public $linhasafetadas = -1;

    
    //nome da tabela
    public $tabela = '';
    // $campos =  array campo=>valor
    protected $campos = array('');
    // erros recebidos, use _getErro();
    protected $erro = '';
    // array com os verdadeiros nomes da tabela para verificação
    protected $nomesReais = array();


    //métodos
    public function __construct($tabela = null)
    {
        if ($tabela != null) {
            $this->tabela = $tabela;
        }
        $this->conecta();
    }//construtor do objeto da conexão
    
    
    public function __destruct()
    {
        if ($this->conexao != null):
             mysqli_close($this->conexao);
        endif;
    }// destrói o objeto da conexão

    
    
    public function conecta()
    {
        $this->conexao = mysqli_connect($this->host, $this->dbUser, $this->dbPass, $this->db)
        or die($this->trataerro(__FILE__, __FUNCTION__, mysqli_errno($this->conexao), mysqli_error($this->conexao), true));
        
        mysqli_query($this->conexao, "SET NAMES '".DB_CHAR."'");
        mysqli_query($this->conexao, "SET character_set_connection=".DB_CHAR);
        mysqli_query($this->conexao, "SET character_set_client=".DB_CHAR);
        mysqli_query($this->conexao, "SET character_set_results=".DB_CHAR);
    }
    /*
     * @param $arquivo = arquivo a ser gravado os erros
     * @param $rotina = funcção onde aconteceu o erro
     * @param $numerro = numero do erro
     * @param msgerro  = mensagem do erro
     * @param $geraexcept = determina de ao gerar este erro a execução do script vai parar de funcionar ali onde deu o erro
     * ou continuará executando o script normalmente;
     */
    public function trataerro($arquivo=null, $rotina=null, $numerro=null, $msgerro=null, $geraexcept=false)
    {
        if ($arquivo == null) {
            $arquivo = "não informado";
        }
        if ($rotina==null) {
            $rotina = "nao informada";
        }
        if ($numerro==null) {
            $numerro = mysqli_errno($this->conexao);
        }
        if ($msgerro==null) {
            $msgerro = mysqli_error($this->conexao);
        }
        $resultado = 'Ocorreu um erro com o seguintes detalhes:<br>
            <b>Arquivo:</b> '.$arquivo.'<br>
            <b>Rotina:</b> '.$rotina.'<br>
            <b>Num Erro:</b> '.$numerro.'<br>
            <b>Msg Erro:</b> '.$msgerro.'<br>
        ';
        
        if ($geraexcept==false) {
            echo $resultado;
        } else {
            die($resultado);
        }
    }// tratamento de erro

    public function _setTabela($tabela)
    {
        $this->tabela = $tabela;
        $this->_loadCampos();
    }


    /*--------------------SELECTS--------------------*/
    public function _select()
    {
        // pega os argumentos passados para este metodo
        $args = func_get_args();
        //$args = $args[0];

        //print_r($args);
        //exit();
        $this->tabela;
        $select = "SELECT * FROM ".$this->tabela;
        // verifica as alternativas de select
        switch (is_array($args)) {
            // se não hover argumentos seleciona tudo
            case func_num_args() == 0:
                $retorno = $select;
                break;
            /*// se houver apenas um argumento e for numerico: seleciona pela id
            case func_num_args() == 1 && is_numeric($args[0]):
                $retorno = $select." WHERE ".$this->_addPrefixo('id')." = ".(int)$args[0];
                break;
            */
            // se houver 2 argumentos e ambos forem numericos
            case func_num_args() == 2 && is_numeric($args[0]) && is_numeric($args[1]):
                // seleciona tudo com limite argumento1,argumento2
                $retorno = $select." LIMIT ".$args[0].",".$args[1];
                break;

            // se houver o campo1, for string e estiver setado o segundo campo
            case func_num_args() > 1 && is_string($args[0]) && isset($args[1]):
                // seleciona tudo da tabela com nomeDoCampo=>Valor
                // se houver um terceiro considera-se um adicional como ex: ORDER BY... ou LIMIT...
                if (isset($args[2])) {
                    $adicional = $args[2];
                } else {
                    $adicional = '';
                }
                
                $retorno = $select." WHERE ".$args[0]." = '".$args[1]."' ".$adicional;
                break;
            default:
                return false;

        }
        // executa a query e retorna o registro
   
        $this->campos = $this->_query($retorno);

        return (is_array($this->campos) && count($this->campos)>0)?$this->campos:false;
    }
    
    /*------------------------VALORES------------------------*/
    // seta valores somente no primeiro registro do array _set('email','email@email.com');
    // ou _set( array('nome'=>'jose','email','email@email.com') );
    // ou também pode setar valores em registro especifico do array ex:
    // _set('email','email@email.com',$i = 5); ou apenas _set('email','email@email.com');
    public function _set()
    {
        $args = func_get_args();
        //print_r($args)."\n";
        if (func_num_args() > 0) {
            $i = 0;
            switch ($args) {
                case func_num_args() == 2:
                    if ($this->_isValid($args[0])) {
                        $this->campos[$args[0]] = $args[1];
                    }
                    break;

                case func_num_args() == 1 && is_array($args[0]):
                    foreach ($args[0] as $campo => $valor) {
                        $campos = $this->_set($campo, $valor, $i);
                    }
                    break;
                
                case func_num_args() == 3:

                    $i = ($args[2])?$args[2]:0;
                    $campo = $args[0];
                    $valor = $args[1];
                    if ($this->_isValid($campo)) {
                        $this->campos[$i][$campo] = $valor;
                    }
                    break;
            }
            
            $i++;
        }
    }
    
    
    /*---------------------BUSCAS---------------------*/
    
    //  $user = new Registro("funcionarios");
    //  print_r($user->_busca("login", 's'));
    
    public function _busca($campo, $valor)
    {
        $this->campos = $this->_query("SELECT * FROM ".$this->tabela." WHERE ".$campo." REGEXP '".$valor."'");
        return $this->campos;
    }

    
    /*---------------------EDIÇÃO---------------------*/
    public function _atualiza($chavePrimaria, $valor)
    {
        foreach ($this->campos as $campo => $val) {
            if ($campo != $chavePrimaria) {
                $string[] = $campo."='".$val."'\n";
            }
        }
        return $this->_query(" UPDATE ".$this->tabela." SET ".implode(',', $string)." WHERE ".$chavePrimaria." = '".$valor."'");
    }
    
    public function _grava()
    {
        $i = 0;
        if (is_array($this->campos)) {
            foreach ($this->campos as $campo => $valor) {
                if ($campo != 'id') {
                    $campos[] = $campo;
                    $valores[] = "'".$valor."'";
                }
            }
            if ($this->_query("INSERT INTO ".$this->tabela." (".implode(',', $campos).") VALUES (".implode(',', $valores).")")) {
                $id = mysqli_insert_id($this->conexao);
            }
        }
        if ($id > 0) {
            return $id;
        } else {
            return $id = "";
        }
    }
    
    
    public function _delete($campo, $valor)
    {
        return $this->_query(" DELETE FROM ".$this->tabela." WHERE ".$campo." ='".$valor."'");
    }
    
    /*------------------------FERRAMENTAS-----------------------*/
    // Query do Mysql
    public function _query($param)
    {
        $retorno = array();
        $query = mysqli_query($this->conexao, $param) or die($this->trataerro(__FILE__, __FUNCTION__, mysqli_errno($this->conexao), mysqli_error($this->conexao), true));
        if (mysqli_affected_rows($this->conexao) > 0) {
            if ($this->procpalavras($param, array('delete', 'updade', 'DELETE', 'UPDATE', 'INSERT', 'insert', 'replace', 'REPLACE')) != 1) {
                while ($campos = mysqli_fetch_assoc($query)) {
                    $retorno[] = ($campos);
                }
                return $retorno;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
    
    // função boa pra procurar palavra
    public function procpalavras($frase, $palavras, $resultado = 0)
    {
        foreach ($palavras as $key => $value) {
            $pos = strpos($frase, $value);
            if ($pos !== false) {
                $resultado = 1;
                break;
            }
        }
        return $resultado;
    }

    public static function filtroData($data)
    {
        if (strpos($data, '-')) {
            return implode('/', array_reverse(explode('-', $data)));
        }
        if (strpos($data, '/')) {
            return implode('-', array_reverse(explode('/', $data)));
        }
    }


    // percorre o array dentro de uma função desejada
    public function _load($Arr)
    {
        $this->campos = array();
        foreach ($Arr as $key => $value) {
            if ($this->_isValid($key)) {
                $this->campos[$key] = "$value";
            }
        }
        return $this->campos;
    }
    
 

    
    // carrega os verdadeiros campos da tabela para comparação
    private function _loadCampos()
    {
        // seleciona os verdadeiros nomes das colunas
        if (preg_match('/^[a-zA-Z0-9_]+$/', $this->tabela)) {
            $query = mysqli_query($this->conexao, "SELECT * FROM ".$this->tabela);
            //$num_fields = mysqli_num_fields($query);
            while ($fields = mysqli_fetch_field($query)) {
                array_push($this->nomesReais, $fields->name);
            }
        }
    }


    public function _get($campo)
    {
        return $this->campos[$campo];
    }
    
    /*// adiciona o prefixo no nome dos campos para gravação ou seleção
    private function _addPrefixo($param)
    {
        return strtoupper(substr($this->tabela, 0, 3))."_".$param;
    }*/
    
    public function _getReg($param = "array")
    {
        switch ($param) {
            case "json":
                return str_replace('\/', '/', json_encode($this->campos[0]));
                break;

            case "xml":
                if (class_exists('Xml')) {
                    $xml = new Xml($this->tabela);
                } else {
                    require_once 'xml.class.php';
                    $xml = new Xml($this->tabela);
                }
                $xml->fromArray($this->campos[0]);
                
                return $xml->getDocument();
                break;
                
            default:
                if (isset($this->campos[0])) {
                    return $this->campos[0];
                } else {
                    return $this->campos;
                }
                
                break;
        }
    }


    private function _isValid($campo)
    {
        if (in_array($campo, $this->nomesReais)) {
            return true;
        } else {
            return false;
        }
    }

    // passa os erros para a variavel $this->erro
    private function _setErro($no, $msg)
    {
        return $this->erro .= "[".$no."] = ".$msg."\n";
    }

    // pega os erros ocorridos
    public function _getErro()
    {
        $msg = "Erros ocorridos\n";
        return $msg.$this->erro."\n";
    }
}
