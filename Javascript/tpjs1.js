// calcul soustraction

/*var nbre1 = prompt("entrez nombre 1 :");
 nbre1 = parseInt(nbre1);


 var nbre2 = prompt("entrez nombre 2 :");
 nbre2 = parseInt(nbre2);


 var sous = nbre1 - nbre2;
alert("le résultat de la soustraction est: " + sous);*/

// calcul soustraction 2
/*document.write( "le résultat est : "+ soustraction(10,5));

function soustraction(nbre1,nbre2){

var resultat =nbre1-nbre2;
return resultat;
// return nbr1-nbre2;
}*/

// calcul l'aire d'un carré

/*function carre (cote){

alert( "l'air du carré = " + cote*cote);


}

carre(5);*/

// calcul tva
/*prixht = prompt("Donnez le prix HT");
prixht = parseInt(prixht);

tva = prompt("Donnez la tva");
tva = parseInt(tva);


document.write(prixttc(prixht,tva));

function prixttc (prixht,tva){

var prix = prixht +(prixht*tva/100);

return "le prixHT est de : "+prixht+"euros, la tva est de : "+tva+"% "+ "le prix total est de : "+prix+"euros";



}*/
// calcul sphere

/*rayon = prompt("Donnez le rayon (en cm) :");
rayon = parseInt(rayon);

alert(sphere(rayon));

function sphere(rayon) {

   var volume = (4 / 3) * 3.14 * (rayon * rayon * rayon);

   return "le volume de la sphère est de : " + volume + "cm3."

}*/


// calcul factorielle

function factorielle() {


   var factNbr = prompt("Factorielle de quoi ?"),
      resultat = 0;

   factNbr = parseInt(factNbr);

   for (var i = 1; i <= factNbr; i++) {

      resultat = resultat + i;
      // = resultat +=i;


   }


   return("la factorielle de " + factNbr + " = " + resultat + "<br>");
}

document.write(factorielle());




