<?php


define('DS', DIRECTORY_SEPARATOR); // para não dar conflito em sistemas que não são windows
define('RAIZ', realpath(dirname(dirname(__FILE__))).DS); //diretório RAIZ da aplicação
define('BASE_URL', 'http://localhost/sistemas/omegahelp/'); // url para postagens
define('CONTROLE_PATRAO', 'index'); //controlador padão da aplicação
define('DEFAOULT_LAYOUT', 'painel'); // template padrão
define('TIME', 10); //Tempomáximo de acesso STANDBY em minutos

define('APP_NOME', 'ARO HELP'); // template padrão
define('APP_SLOGAN', 'Sistema de ajuda'); // template padrão
define('APP_COMPANIA', 'JM SOLUTIONS'); // template padrão
define('APP_PATH', RAIZ.'app'.DS);

// BANCO DE DADOS
define('DB_HOST', "localhost");
define('DB_NAME', 'omegahelp');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');

try {
    // PEGAS OS PRINCIPAIS ARQUIVOS DO SISTEMA
    require_once APP_PATH . 'sessao.php';
    require_once APP_PATH . 'requisicao.php';
    require_once APP_PATH . 'ferramentas.php';
    require_once APP_PATH . 'controlador.php';
    require_once APP_PATH . 'modulo.php';
    require_once APP_PATH . 'view.php';
    require_once APP_PATH . 'registro.php';
    require_once APP_PATH . 'database.php';
    
    
    function autoload($class)
    {
        $path = RAIZ . 'lbs' . DS . 'classes' . DS . strtolower($class) . '.class.php';
        if (file_exists($path)) {
            include_once $path;
        }
    }

    spl_autoload_register("autoload");
} catch (Exception $e) {
    echo $e->getMessage();
}
