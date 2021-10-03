<?php


function substituiTexto($dados, $texto)
{

    preg_match_all("(\\\${([\w\d\-\\.]+)})", $texto, $m, PREG_PATTERN_ORDER);
    $arr = array();
    foreach ($m[0] as $i => $valor) {
        $arr[$valor] = $dados[$m[1][$i]];
    }
    return  str_replace(array_keys($arr), array_values($arr), $texto);
}


$var = array(
    'nome' => 'Jonatas Miler',
    'email' => 'jonatas@gmail.com.br'
);

$texto = '
    O que é texto?
    O conceito de texto pode variar a depender da perspectiva 
    teórica ${nome} para estudá-lo. A palavra texto, ao longo da 
    história, foi ganhando diferentes sentidos, 
    de modo que novas construções foram compreendidas como tal.

    De acordo com o percusso de ${email} investigações sobre o texto, 
    nas mais diversas correntes teóricas que se debruçam ${email} sobre esse objeto, 
    o ${{nome}}conceito foi se ${nome} modificando e se $nome ampliando. 
    Hoje o texto não é considerado uma estrutura pronta, 
    com unidade de sentido completa, 
    pois consideram-se ${email} também os processos de planejamento,
    construção e recepção do texto.
';

echo substituiTexto($var, $texto);
