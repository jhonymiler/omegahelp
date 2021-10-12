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

console.log( A( "iframe" ) );
console.log()