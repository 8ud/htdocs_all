    
    // alias de document.querySelector
    var dqs = function (e) {
      return document.querySelector(e);
    }
    // alias de document.querySelectorAll
    var dqsa = function (e) {
      return document.querySelectorAll(e);
    }
    
    /*INITIALISATION DES VARIABLES*/

    /*Elements HTML*/
    
    var valInitialeInp = dqs('#valInitiale');//champ valeur
    var btnMinus = dqs('#minus');//bouton moins
    var btnMore = dqs('#more');//bouton plus
    var suite = dqs('#suite'); // conteneur des éléments de la suite
    
    // valeur renseignée par l'utilisateur
    var pas=parseInt(valInitialeInp.value);
    // variable de comptage des éléments de la suite
    var a=1;
    
    // déclencheurs 'évènements
    btnMinus.addEventListener("click", listeMoins);
    btnMore.addEventListener("click", listePlus);
    valInitialeInp.addEventListener('change', makeListe)
    // valInitialeInp.addEventListener('click', makeListe)
    valInitialeInp.addEventListener('keyup', makeListe)
    
    /*Ajoute un élément à la liste*/
    function listePlus() {
      //création du nouvel élément
      var newBloc = document.createElement('div');
      newBloc.className="valbloc centre coral";
      
      // injection de l'élément (valeur vide) dans le DOM
      suite.appendChild(newBloc);
      // appel de la fonction de recalcul des valeurs
      refreshListe();
    }

    /*Retire un élément de la liste*/
    function listeMoins() {
      // sélection de tous les éléments de la liste
      var allBlocs = dqsa('.valbloc');
      // valeur d'indice du dernier élément
      nbBlocks=allBlocs.length-1;
      //suppresson du dernier élément s'il n'est pas le dernier
      if(nbBlocks>0){
        var adieuBob=allBlocs[nbBlocks];
        suite.removeChild(adieuBob);
      }
    }

    /*Si valeur change*/
    function makeListe() {
       
      try {
        // si la valeur du pas n'est pas numérique ou pas utilisable
        if(typeof(pas) !="number" || isNaN(pas)){
          // on lance une exception
          throw('Veuillez entrer un nombre')  ;
          // on assigne la valeur par défaut 1
          pas=1;
          valInitialeInp.innerHTML="1";
        }
        //recalcul de la liste
        refreshListe();

      } catch(e){
        //interception de l'exception et affichage du message
        alert(e);
      }
     
    }
    /*Fonction de recalcul et affichage des valeurs de la suite*/
    function refreshListe() {
      // sélection de tous les blocs
      var allBlocs = dqsa('.valbloc');

      for (var b = 0; b < allBlocs.length; b++) {
        // pour chaque enfant de la suite
        // calculer la nouvelle valeur
        // on se base sur le numéro de l'élément * la valeur du pas
        // 1er  = 1*pas
        // 2eme = 2*pas
        // 3eme = 3*pas
        allBlocs[b].innerHTML = a*pas;
      }
    }