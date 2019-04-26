var a = "toto", b=0; // variables obligatoires
if( !(!a) ) { console.log("ok pour !a"); }
if( !b ) { console.log("ok pour b"); }
if( a && !b ) { console.log("ok pour a && b"); }
if( !a || !b ) { console.log("ok pour !a || b"); }