<?php 
require("./config.php");

//seuls champs autorisés
$champs=["titre", "realisateur", "genre"];

   if(count($_GET)>0 ){
      // si GET RECU
      // récupère le nom du champ recherché (1ere clé du tableau GET)
   $champRecherche = array_keys($_GET)[0];

   // si champs vide ou invalide=> "titre"
   if(!in_array($champRecherche,$champs )){
      $champRecherche="titre";
   }

   $chaineRecherche = $_GET[$champRecherche];
   $req='SELECT titre, genre, realisateur,an from films WHERE '.$champRecherche." LIKE :".$champRecherche."";
   
   $result = $bdd->prepare($req);
   $data=array($champRecherche =>"%".$chaineRecherche."%");
   $result->execute($data);
   while ($row = $result->fetch()){
      
      echo $row['titre'] .';' . $row['genre'] . ';' . $row['realisateur'] . ';' . $row['an'] ."|"; 
   }

}


?>