<?php

class Modulo
{
    protected $_db;


    // constroi conexao
    public function __construct()
    {
        $this->_registro = Registro::getInstancia();
        $this->_db = $this->_registro->_db;
    }
    /*
        Exemplo:
        $array = array(
            array('id'=>1,"nome"=>"Fulano","sobrenome"=>"Da silva"),
            array('id'=>1,"nome"=>"Ciclano","sobrenome"=>"Da Costa"),
        );
        $this->array_orderby($array, 'nome', SORT_DESC);

    */

    public function array_orderby()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = array();
                foreach ($data as $key => $row) {
                    $tmp[$key] = $row[$field];
                }
                $args[$n] = $tmp;
            }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }

    public function slug($string)
    {
        $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
ßàáâãäåæçÇèéêëìíîïðñòóôõöøùúûýýþÿŔŕ%&$!?()#@:.ºª, ( )';
        $b = 'aaaaaaaceeeeiiiidnoooooouuuuy
bsaaaaaaacceeeeiiiidnoooooouuuyybyRr-es----------- (-)';

        $string = utf8_decode($string);
        $string = strtr($string, utf8_decode($a), $b);
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9-\$\.\,]/', '-', $string);
        $string = preg_replace('/-+/', '-', $string);

        return utf8_encode($string);
    }
}
