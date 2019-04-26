<?php 
session_start();
require_once(dirname(__FILE__).'/_dbconfig.php');



if(preg_match("/^select|show/i", $_GET['sql'])){
	// si la requête commence par select
	if(!preg_match('/delete|truncate|drop|create|grant|revoke|update|insert/',$_GET['sql'])){
		// et pas DELETE, TRUNCATE, DROP, CREATE, GRANT, REVOKE, SHOW, UPDATE, INSERT
		$query=$_GET['sql'];

		$query=utf8_decode($query);


		if(!@mysqli_query($_SESSION['connect'],$query)){
			echo '<div class="alert alert-sm alert-danger"><strong>Requête invalide</strong> : <small><em>'.utf8_encode(mysqli_error($_SESSION['connect'])).'</em></small></div>';
		} else {
			$r=mysqli_query($_SESSION['connect'],$query);
			while($rez[]=mysqli_fetch_row($r)){

			}
			$nb=count($rez)-1;
			if($nb<=0){
				$color="warning";
				$label= "Aucune réponse";
			} else if($nb==1) {
				$color="info";
				$label="Une seule réponse";
			} else {
				$color="success";
				$label="$nb réponses";
			}
			echo '<div class="alert alert-sm alert-'.$color.'"><strong>Requête valide</strong> ['.$label.']... (F9 pour affichage)</div>';

		} 
	} // if not mots interdits

} else {// if select
	echo '<div class="alert alert-sm alert-info">Résultat de la requête non évalué : ne débute pas par \'select\'</div>';
}


?>