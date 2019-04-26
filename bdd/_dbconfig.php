<?php 

	
// CONFIGURATON DES ACCES A LA BASE
//Remplacer les valeurs suivantes par vos identifiants de connexion MySQL

		$db_host='localhost';
		$db_user='root';
		$db_password='';
		$db_name='';





$connect=@mysqli_connect($db_host,$db_user,$db_password) or die('
	<h1 style="color:red">Erreur de connexion</h1>
	La connexion avec les paramètres suivants a échoué :<br>
	- Serveur: '.$db_host.'<br>
	- Utilisateur: '.$db_user.'<br>
	- Mot de passe: '.$db_password.'<br><br>
	Editez les paramètres de connexion dans _dbconfig.php ');

if($connect) {
	$_SESSION['connect'] = $connect;
}


	if(isset($_GET['dbname'])){

		$db_name=$_GET['dbname'];
		$_SESSION['db']=$db_name;

	} else if($connect && $db_name=='') {

		$sql="SHOW DATABASES";
		$mysql_result=@mysqli_query($connect,$sql);
		$oneBase = @mysqli_fetch_row($mysql_result);
		if(count($oneBase)>=1) {
			$db_name=$oneBase[0];
			
		} else {
			die('<h1 style="color:red">Erreur de sélection de base de données</h1>
		Editez les paramètres de base de données par défaut dans _dbconfig.php ');
		}
		
	}


@mysqli_select_db($connect,$_SESSION['db']);

mysqli_query($connect, "SET lc_messages = 'fr_FR'");

 ?>