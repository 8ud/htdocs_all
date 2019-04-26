// creation des éléments
var div1 = document.createElement("div");
var field = document.createElement("fieldset");
var legend = document.createElement("legend");
var form = document.createElement("form");
var nom = document.createElement("input");
var tnom = document.createElement("h3");
var prenom = document.createElement("input");
var tprenom = document.createElement("h3");
var mail = document.createElement("input");
var tmail = document.createElement("h3");
var envoie = document.createElement("input");
var check = document.createElement("input");
var tcheck = document.createElement("i");
var br = document.createElement("br");
var br1 = document.createElement("br");


// mise en forme des éléments

legend.textContent = "formulaire d'inscription";
form.action = "http://localhost/validform.php";
// form.innerHTML='<form action="http://www.pleione.fr/validform"></form>'
nom.type = "text";
prenom.type = "text";
mail.type = "email";
nom.name = "nom";
prenom.name = "prenom";
mail.name = "email";
tnom.textContent = "nom";
tprenom.textContent = "prenom";
tmail.textContent = "email";
envoie.type = "submit";
envoie.value = "envoyer";
div1.style = 'background-color:#badc58 ';
legend.style = "font-size: 20px; font-weight: bold";
envoie.style.backgroundColor = "blue";
field.style.display="flex";
envoie.style = "width:150px; height:40px; border-radius:8px";
envoie.value.style = "font-size:25px";
nom.autocomplete = "off";
prenom.autocomplete = "off";
mail.autocomplete = "off";
form.method = "POST";
tcheck.textContent = "abonnez-vous a la news-letter";
check.type = "checkbox";
envoie.style.margin = "15px";
check.style.margin = "15px";


// ajout des éléments au DOM
div1.appendChild(field);
field.appendChild(form);
field.appendChild(legend);
form.appendChild(tnom);
form.appendChild(nom);
form.appendChild(tprenom);
form.appendChild(prenom);
form.appendChild(tmail);
form.appendChild(mail);
 form.appendChild(br);
 form.appendChild(check);
 form.appendChild(tcheck);
 form.appendChild(br1);
 form.appendChild(envoie);
document.body.appendChild(div1);
var cocher = document.querySelector("input[type='checkbox']");

//abonnements
var validnom = false;
var validprenom = false;
var validmail = false;

// abo submit
envoie.addEventListener("click", send);

function send() {
   if (validmail && validnom && validprenom) {
      legend.textContent = "formulaire envoyé";
      envoie.style.backgroundColor = "green";

   } else {
      alert("vous n'avez pas renseigné tous les champs");
      form.action ="";
   }

};

// abo verification du nom
nom.addEventListener("blur", verifnom);

function verifnom() {

   if (nom.value.length <= 3) {
      nom.placeholder = "vous devez inscrire un nom";
      // nom.placeholder.style.color = "red";
      // nom.style.fontWeight = "bold";
      validnom = false;
   } else {
      tnom.textContent = "nom : ok";
      tnom.style.color = "green";
      validnom = true;

   }
};
// abo verification du prenom
prenom.addEventListener("blur", verifprenom);

function verifprenom() {

   if (prenom.value.length <= 3) {
      prenom.placeholder = "vous devez inscrire un prenom";
      // prenom.style.color = "red";
      // prenom.style.fontWeight = "bold";
      $(prenom).show(1000);
      validprenom = false;
   } else {
      tprenom.textContent = "prenom : ok";
      tprenom.style.color = "green";
      
      validprenom = true;
   }
};
// abo verification du mail
mail.addEventListener("blur", verifmail);

function verifmail() {

   if (mail.value.length <= 5) {
      mail.placeholder = "vous devez inscrire un mail";
      // mail.style.color = "red";
      // mail.style.fontWeight = "bold";
      validmail = false
   } else {
      tmail.textContent = "mail : ok";
      tmail.style.color = "green";
      validmail = true;
   }
};

// abo newsletter
check.addEventListener("click", news);

function news(){

if(cocher.checked){

   tcheck.textContent = "vous êtes abonné a la news-letter";
} else{

   tcheck.textContent = "abonnez-vous a la news-letter";
}


};



// retour champ nom
nom.addEventListener("focus", videnom);

function videnom() {
   nom.value = "";
   nom.style.color = "black";
   tnom.textContent = "nom";
   tnom.style.color = "black";

};

// retour champ prenom
prenom.addEventListener("focus", videprenom);

function videprenom() {

   prenom.value = "";
   prenom.style.color = "black";
   tprenom.textContent = "prenom";
   tprenom.style.color = "black";

};

// retour champ mail
mail.addEventListener("focus", videmail);

function videmail() {
   mail.value = "";
   mail.style.color = "black";
   tmail.textContent = "mail";
   tmail.style.color = "black";

};

// fonction pret

envoie.addEventListener("mouseover", pret);

function pret(){
   
   if (validmail && validnom && validprenom) {
      legend.textContent = "formulaire pret";
      envoie.style.backgroundColor = "green";
      
   } 
   
};

/* envoie.addEventListener("mouseout", paspret);

function paspret(){
   
   if(validmail || validnom || validprenom == false){

      envoie.style.backgroundColor = "";
      legend.textContent = "formulaire d'inscription";
   }

}; */