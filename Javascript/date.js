// exo1

// référence
/*var anneeRef = new Date(0);
anneeRef = anneeRef.getFullYear();






function compareDate(dateATraiter) {


dateATraiter+="T00:00:00Z";
var dateEnCours = new Date(dateATraiter);// new Date("2019-03-21T00:00:00Z")
var anneEnCours = dateEnCours.getFullYear();

var resultat = anneEnCours - anneeRef;
return resultat;
}

var calcul = compareDate("2019-03-21");

document.write(calcul);*/


// exo 2
/*var uneDate = prompt("entrez une date :")
var choixDate = new Date (uneDate);*/


var tabS = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];

var tabM = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];

/*function laDate(){
   
   var annee = choixDate.getFullYear();
   var mois = choixDate.getMonth();
   var semaine = choixDate.getDay(); 
   var jour = choixDate.getDate();
   
document.write("le "+jour+" "+tabM[mois]+" "+annee+" tombe un "+tabS[semaine]);

 }

laDate();*/


//exo 2 corrigé

function laDate(Dte){
  
//créer un objet date
var dateATraiter = new Date(Dte)


// créer un objet date
var numJour = dateATraiter.getDate();
var nomMois = dateATraiter.getMonth();
var annee = dateATraiter.getFullYear();
var jourSemaine = dateATraiter.getDay();

document.write("le "+numJour+" "+tabM[nomMois]+" "+annee+" tombe un "+tabS[jourSemaine]+"<br/>");


}
laDate("2020-02-20");
