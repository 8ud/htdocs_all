
// modif du titre

document.title = "Plongeon" ;
document.querySelector("#titre1").innerHTML = "pas du tout" ;

var liste = document.getElementById("liste");
var listElements = liste.getElementsByTagName("li");


console.log("VOICI LE UL3",liste);
console.log("liste des li",listElements);
//alert("il y a "+listElements.length+" élément(s) dans la liste");

for (var i =0; i<listElements.length; i++) {

// listElements[i].innerHTML = "test";
// console.log(" fini de traiter l'element n°: "+i);

listElements[i].addEventListener("click", activElement);
}

function activElement () {

  var th1 = document.querySelector("#titre1").innerHTML ;
  th1.innerHTML = this.innerHTML;
   


for (var i =0; i<listElements.length; i++) {

       listElements[i].classList.remove("jaune");
   }


this.classList.add("jaune");
}

var bouton = document.getElementById("bluebutton");

bouton.addEventListener("click", afficher);




function afficher () {

   var ajouter = listElements.length+1;
   liste.innerHTML= liste.innerHTML+ '<li class="list-group-item">Element '+ ajouter +'</li>'  ;




//    console.log("vous avez cliqué");

//    bouton.innerHTML = bouton.innerHTML + "." ;
}






// for (var i=1;i<1001; i++) {

// console.log ("j'en suis à " +i);

// }





