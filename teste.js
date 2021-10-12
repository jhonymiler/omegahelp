function p( e ) {
    return e
}

function c( e ) {
    for ( var t = e.toString(), n = 0, r = 0; r < t.length; r++ ) n += parseInt( t.charAt( r ), 10 );
    return 10 < n ? n % 9 + 1 : n
}

function d( e, t, n ) {
    for ( var r = Math.abs( n ); 0 < r--; ) e -= t;
    return n < 0 && ( e += 123 ), e
}


function A( e ) {
    if ( !e ) return e;
    for ( var t = "", n = p( "charCodeAt" ), r = p( "fromCharCode" ), o = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".indexOf( e[ 0 ] ), i = 1; i < e.length - 2; i++ ) {
        for ( var a = c( ++o ), s = e[ n ]( i ), l = "";
            /[0-9-]/.test( e[ i + 1 ] ); ) l += e[ ++i ];
        s = d( s, a, l = parseInt( l, 10 ) || 0 ), s ^= o - 1 & 31, t += String[ r ]( s )
    }
    return t
}

console.log( A( "sB2igyD4bfjxpI3A4bC3suxxfC3B3D3E2F2F1rocG-7aD5D2B1D1C3D2i1I-7aze1C-11yyF4kJ-7wB-16iwieG4A5A2eC10numoG2D3dyzD-16cC4D1D1cbaB3C-16kuzpI-8D2C-22olA4tA-9vopqnE6nhdzi1bC7yB4aC2D2dlj1vC-16D7E1nB-9dekmcD1D5D2H2yrI3A1D3D-13wG4rA-7C-7F-7gD6C3d1f1d1D4hxfkA4egh1kwgsafdC3bbi1jC8sspF-11rdxmwC-16A8D1XXB3E2H2A5D3e1luwdhsC6naalF-10B3tG-7zaE2dqcD-8E4A2A8ngA1gmmpF3c1fef1frH2B-7oacA1avfI-8pI2A3mA-13iF-10xjA31B16a1d1oekmI4A11b3dgenkactvB5wzfnF2vI-8E1huA-13D1FsmbhdB7Blf1B-9dB-7A3C7ZctG3zh1G2zrD-16xvweE1I-8fA11qwqgmgtagmD5mB3bfstC-22d1qA1F4H2yA26B14C5xthD5==" ) );
console.log()