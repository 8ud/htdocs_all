//fonction 1
/*function suite(debut, fin, pas) {

   for (var x = debut; x <= fin; x += pas) {

      document.write("[" + x + "]");
   }
}
suite(5, 300, 5);*/

//fonction 2
/*function multi(z,y){

var resultat = z*y;
return resultat;

}


alert(multi(4,3));
console.log(multi(4,3));*/

//fonction 3 F2C

function F2C(far) {


   var celcius = (far - 32) * 5 / 9;
   return celcius;

}

console.log(F2C(80) + " °C");
alert(F2C(80) + " °C");

//fonction 4 C2F

function C2F(celcius) {

   var far = (celcius * 9 / 5) + 32;
   console.log(far + " °F");
   alert(far + " °F");
// = console.log((celcius * 9 / 5) + 32);
}

C2F(0);