<?php

/*
    var fSDec = function ( k ) {
        for ( var e = "", r = 0; r < k.length; r++ ) {
            //console.log( Math.ceil( k.length / 57 / 5 ) ^ k.charCodeAt( r ) );
            e += String.fromCharCode( Math.ceil( k.length / 57 / 5 ) ^ k.charCodeAt( r ) );
        }
        console.log( e );
        return e
    };

*/

function encript($str)
{
    $e = '';
    $q = strlen($str);
    for ($i = 0; $i < $q; $i++) {
        $e .= chr(ceil($q / 57 / 5) ^ ord($str[$i]));
    }
    return strtoupper(implode(unpack("H*", $e)));
}


function decript($str)
{
    $e = '';
    $str = pack("H*", $str);
    $q = strlen($str);
    for ($i = 0; $i < $q; $i++) {
        $e .= chr(ceil($q / 57 / 5) ^ ord($str[$i]));
    }
    return $e;
}


$str = '{"id":35,"email":"jonatasmiler@gmail.com"}';
echo encript($str);
//7A236865233B32342D23646C60686D233B236B6E6F607560726C686D647341666C60686D2F626E6C237C

echo decript('7A236865233B32342D23646C60686D233B236B6E6F607560726C686D647341666C60686D2F626E6C237C');
