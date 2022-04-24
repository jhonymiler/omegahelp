<?php


// bootstrap
class Ferramentas
{
    /**
     *  PROCESSA A NOVA REQUISIÇÃO
     *
     * requisição qualquer passada para processamento
     * @param request $peticion
     */
    public static function rodar(Requisicao $peticion)
    {
        $modulo = $peticion->getModulo();
        $controller = $peticion->getControlador() . 'Controle';
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();
        
        if ($modulo) {
            $rutaModulo = RAIZ . 'controles' . DS . $modulo . 'Controle.php';
            
            if (is_readable($rutaModulo)) {
                require_once $rutaModulo;
                $rutaControlador = RAIZ . 'modulos'. DS . $modulo . DS . 'controles' . DS . $controller . '.php';
            } else {
                throw new Exception('Error de base de modulo');
            }
        } else {
            $rutaControlador = RAIZ . 'controles' . DS . $controller . '.php';
        }
        //echo $rutaControlador;
        if (is_readable($rutaControlador)) {
            require_once $rutaControlador;
            $controller = new $controller;
            
            if (is_callable(array($controller, $metodo))) {
                $metodo = $peticion->getMetodo();
            } else {
                $metodo = 'index';
            }
            
            if (isset($args)) {
                call_user_func_array(array($controller, $metodo), $args);
            } else {
                call_user_func(array($controller, $metodo));
            }
        } else {
            //require_once RAIZ . 'controles' . DS . 'erroControle.php';
            //$controller = new erroControle;
            //call_user_func(array($controller, "index"));
        }
    }
}
