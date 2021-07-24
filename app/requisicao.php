<?php

/**
 * Description of request
 *
 * @author Jonatas
 */
class Requisicao
{
    public $_urlAtual;
    public $_navLinks;
    private $_modulo;
    private $_controlador;
    private $_metodo;
    private $_argumentos;
    private $_modules;
    
    public function __construct()
    {
        if (isset($_GET['url'])) {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $this->_navLinks = $url;
            $url = array_filter($url);
            
            $this->_urlAtual = implode('/', $url);
            foreach (new DirectoryIterator(RAIZ."Modulos") as $Files) {
                if ($Files->isDir() && $Files->isDot()) {
                    continue;
                }
                $this->_modules[] = $Files->getFilename();
            }
            
            /* modulos de la app */
            $this->_modulo = strtolower(array_shift($url));
            
            if (!$this->_modulo) {
                $this->_modulo = false;
            } else {
                if (count($this->_modules)) {
                    if (!in_array($this->_modulo, $this->_modules)) {
                        $this->_controlador = $this->_modulo;
                        $this->_modulo = false;
                    } else {
                        $this->_controlador = strtolower(array_shift($url));
                        
                        if (!$this->_controlador) {
                            $this->_controlador = 'index';
                        }
                    }
                } else {
                    $this->_controlador = $this->_modulo;
                    $this->_modulo = false;
                }
            }
            
            $this->_metodo = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }
        
        if (!$this->_controlador) {
            $this->_controlador = CONTROLE_PATRAO;
        }
        
        if (!$this->_metodo) {
            $this->_metodo = 'index';
        }
        
        if (!isset($this->_argumentos)) {
            $this->_argumentos = array();
        }
        
        /*echo "<pre>";
        print_r($this);
        echo "</pre>";*/
    }
    
    public function getControlador()
    {
        return $this->_controlador;
    }
    
    public function getModulo()
    {
        return $this->_modulo;
    }
    
    public function getMetodo()
    {
        return $this->_metodo;
    }
    
    public function getArgs()
    {
        return $this->_argumentos;
    }
}
