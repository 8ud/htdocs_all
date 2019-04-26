   // modif du title
   document.title = "JE CODE DU JS !!!!";

   document.getElementById("titre1").innerHTML = "youpi";
   document.querySelector("#titre1").innerHTML = "youpi";
   var th1 = document.querySelector("#titre1");
   th1.innerHTML = "youpi";
   var liste = document.getElementById("liste");
   var listElements = liste.getElementsByTagName("li");
   console.log("VOICI LE UL", liste);
   console.log("Liste des LI", listElements);
   //alert("Il y a "+listElements.length+" élément(s) dans la liste");
   for (var i = 0; i < listElements.length; i++) 
   {
      // listElements[i].innerHTML="sqglkh";
      // console.log(" fini de traiter l'element n°: "+i);
      listElements[i].addEventListener("click", activElement);
   }

   function activElement() 
   {
      //var th1 = document.getElementById("titre1");
      th1.innerHTML = this.innerHTML;
      for (var i = 0; i < listElements.length; i++) {
         listElements[i].classList.remove("jaune");
      }
      this.classList.add("jaune");
   }
   var btn = document.getElementById("bluebutton");
   btn.addEventListener('click', btnAction);

   function btnAction()
   {
      var numero = listElements.length + 1;
      /*
      liste.innerHTML = liste.innerHTML +
         '<li class="list-group-item">Nouvel élément ' + numero + '</li>';
         */

      var nouvo = document.createElement("li");
      nouvo.textContent = 'Nouvel élément ' + numero;
      nouvo.classList.add("list-group-item");
      liste.appendChild(nouvo);
      nouvo.addEventListener("click", activElement);


   }