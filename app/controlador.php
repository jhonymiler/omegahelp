<?php


abstract class controlador
{
    protected $_view;
    protected $_db;
    protected $_pgParams;
    protected $_request;
    protected $_registro;
    protected $_data;


    public function __construct()
    {
        $this->_registro = Registro::getInstancia();
        $this->_request = $this->_registro->_request;
        $this->_view = new View($this->_request);
        $this->_db = $this->_registro->_db;

        if (Sessao::get('user')) {
            $this->_view->assign('user', Sessao::get('user'));
        }
    }

    abstract public function index();

    protected function getUrlAtual()
    {
        return $this->_request->_urlAtual;
    }


    protected function loadModulo($modulo, $model = false)
    {
        if (!$model) {
            $model = $modulo . 'Modulo';
            $pathModelo = RAIZ . 'models' . DS . $model . '.php';
        } else {
            $model = $model . 'Modulo';
            $pathModelo = RAIZ . 'modulos' . DS . $modulo . DS . 'modulos' . DS . $model . '.php';
        }

        if (is_readable($pathModelo)) {
            require_once $pathModelo;
            $modulo = new $model;
            return $modulo;
        } else {
            throw new Exception('Erro ao Carregar Modulo');
        }
    }


    // PEGA UM TEXTO EM UM POST E TRATA
    protected function POST($clave = false)
    {
        if (count($_POST)) {
            if ($clave == false) {
                return $this->parsePost($_POST);
            } else {
                if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
                    $_POST[$clave] = $this->parsePost($_POST[$clave]);
                    return $_POST[$clave];
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    public function getIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }


    private function parsePost($campos)
    {
        if (is_array($campos)) {
            foreach ($campos as $key => $value) {
                $campos[$key] = $this->parsePost($campos[$key], ENT_QUOTES);
            }
        } else {
            $campos = strip_tags($campos);

            if (!addslashes($campos)) {
                $campos = mysqli_real_escape_string(mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME), $campos);
            }
            return trim($campos);
        }
        //print_r($campos);
        return $campos;
    }
    //PEGA UM POST E VALIDA SE É REALMENTE UM NUMERO INTEIRO
    protected function GET($chave)
    {
        if (!empty($_POST[$chave])) {
            $_POST[$chave] = filter_input(INPUT_POST, $chave, FILTER_VALIDATE_INT);
            return $_POST[$chave];
        }
    }
    //REDIRECIONA A PAGINA
    protected function redir($path = false)
    {
        if ($path == false) {
            header('location:' . BASE_URL);
            exit;
        } else {
            header('location:' . BASE_URL . $path);
            exit;
        }
    }



    protected function encript($str)
    {
        $e = '';
        $q = strlen($str);
        for ($i = 0; $i < $q; $i++) {
            $e .= chr(ceil($q / 57 / 5) ^ ord($str[$i]));
        }
        return strtoupper(implode(unpack("H*", $e)));
    }


    protected function decript($str)
    {
        $e = '';
        $str = pack("H*", $str);
        $q = strlen($str);
        for ($i = 0; $i < $q; $i++) {
            $e .= chr(ceil($q / 57 / 5) ^ ord($str[$i]));
        }
        return $e;
    }
}
