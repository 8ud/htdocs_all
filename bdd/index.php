<?php 
session_start();
require_once(dirname(__FILE__).'/_dbconfig.php');
// pour franciser MySQL: 
// A partir de xampp: MySQL : CONFIG
// en fin de fichier mysql.ini
//ajouter :
//	[mysqld]
//	language=french
//redémarrer MySQL
// ou 
//mysqli_query($connect, "SET lc_messages = 'fr_FR'");

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="bootstrap.css" rel="stylesheet">
    <link id="maincss" href="bootstrap-theme.css" rel="stylesheet">
  
  
    <link href="perso.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    
    <script src="bootstrap.min.js"></script>
   

    	<title>Requêteur Mysql By Fano</title>
			</head>
			<body>  
			<div id="overlay">
    <div id="overlayblock" class="alert alert-info">
      <div id="overlayclose" class="tip" title="Annuler/Fermer cette fenêtre"></div>
      <div id="overlaypad">

        <div id="overlaycontent">
          <div id="overlaytext" class="text-center"></div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
<div class="container"><!-- master container -->
 <div class="row">
   				     
   				     
     <div class="col-sm-16 col-md-15">
		      <h1><img  id="titlelogo" src="requetes.png" class="img-responsive"  alt="" > Requêteur Mysql By Fano<hr>
       </h1>

     </div>
   </div>
 </div>
<?php





define("FICHSAUV", 'saved_requests.sql'); //Nom du fichier texte de sauvegarde: modifiable



$this_file=$_SERVER['REQUEST_URI'];

$resultFichier='';
function findfile($file) {
	if(file_exists($file)) {
		return "<span style='color:green'>OK</span>";
		
	} else {
		return "<span style='color:red'>NON TROUVE</span>";
	}
}


	

	if (!empty($_POST)) {
		$message=strtolower($_POST['sql']); 
	
		 // efface le fichier de requetes
		if(isset($_POST['delqueries']) && $_POST['delqueries']==1){
			if(file_exists(FICHSAUV)){
				unlink(FICHSAUV);
			}
		}
	


	// sauvegarde de la requête dans fichier
	if($_POST['refreq']!='' && $_POST['sql'] !='') { // si le champ reférence requete est rempli de même que la requete
		//vérifie l'existence du fichier, sinon le crée
		if(!file_exists(FICHSAUV)) {
			$fichier=fopen(FICHSAUV,'w+');
		} else {
			$fichier=fopen(FICHSAUV,'a+');
		}
		//ajout de la requete
		
		fwrite($fichier,"!#".$_POST['refreq']." --- [".date('d/m/Y à G:i:s')."]#"); // écrit la référence
		// supprime les sauts de ligne \r\n
		//$message= str_replace("\r",'',$message);
		//$message= str_replace("\n",'',$message);
		$message= str_replace("\r\n",'<br />',$message);
		fwrite($fichier,'µ'.$message.'µ'); // écrit la requête
		fwrite($fichier,"\r\n"); // saute 1 ligne
		fclose($fichier);	//ferme le fichier
	}
} else {
	$message="";
}
?>

	   	

			
			
<div class="container">
	<div class="row">
		<?php
			//images encodées en base64
			// $img['fermer']='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';
			
			$img ['database']='iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MkY2N0MwQTE2ODYzMTFFMkExOTFEMUY1MjEyMjY3M0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MkY2N0MwQTI2ODYzMTFFMkExOTFEMUY1MjEyMjY3M0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyRjY3QzA5RjY4NjMxMUUyQTE5MUQxRjUyMTIyNjczQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoyRjY3QzBBMDY4NjMxMUUyQTE5MUQxRjUyMTIyNjczQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pifc6MAAAAdgSURBVHjaxFdbT1zX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';
			
			$img ['help']='iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAYAAAAfrhY5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0YzOTBFNkI2ODYzMTFFMjlEOUY4NDJEMDk3RTRFMDciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0YzOTBFNkM2ODYzMTFFMjlEOUY4NDJEMDk3RTRFMDciPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozRjM5MEU2OTY4NjMxMUUyOUQ5Rjg0MkQwOTdFNEUwNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozRjM5MEU2QTY4NjMxMUUyOUQ5Rjg0MkQwOTdFNEUwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PkYH4GMAAArDSURBVHjadFdrbBzV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';
			
			$img ['password']='iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTJDRTlFNDQ2ODYzMTFFMkExOENDM0NGMEJFMUY1NUYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTJDRTlFNDU2ODYzMTFFMkExOENDM0NGMEJFMUY1NUYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MkNFOUU0MjY4NjMxMUUyQTE4Q0MzQ0YwQkUxRjU1RiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MkNFOUU0MzY4NjMxMUUyQTE4Q0MzQ0YwQkUxRjU1RiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhNxIfUAAAc2SURBVHjanFZrUJTX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';
			
			$img ['server']='iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NUQxQkNCMDI2ODYzMTFFMjhBOTg4MjE4ODMyNEIyNEIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NUQxQkNCMDM2ODYzMTFFMjhBOTg4MjE4ODMyNEIyNEIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1RDFCQ0IwMDY4NjMxMUUyOEE5ODgyMTg4MzI0QjI0QiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1RDFCQ0IwMTY4NjMxMUUyOEE5ODgyMTg4MzI0QjI0QiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PidzdW4AAAXTSURBVHjarFdbaBxl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';
			
			$img ['tables']='iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjhBOENGNkU2ODYzMTFFMjgwMzZDRkFGQUQyODMxRkQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjhBOENGNkY2ODYzMTFFMjgwMzZDRkFGQUQyODMxRkQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2OEE4Q0Y2QzY4NjMxMUUyODAzNkNGQUZBRDI4MzFGRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2OEE4Q0Y2RDY4NjMxMUUyODAzNkNGQUZBRDI4MzFGRCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiZX4XAAAAegSURBVHja7FZLjBxX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';
				
			$img ['user']='iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzdGQ0Q1MTM2ODYzMTFFMkI5QjhEQzk2NDczRjRGQkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzdGQ0Q1MTQ2ODYzMTFFMkI5QjhEQzk2NDczRjRGQkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3N0ZDRDUxMTY4NjMxMUUyQjlCOERDOTY0NzNGNEZCQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3N0ZDRDUxMjY4NjMxMUUyQjlCOERDOTY0NzNGNEZCQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhHDfw4AAAhtSURBVHjalFdrjFRn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';


			if(isset($_POST)){
				
			?>
		<div id="login" class="col-sm-10">
			<div class="boxgrey">
				<img   title="Serveur" src=data:image/gif;base64,<?php echo $img['server']; ?> width="20">&nbsp;
				<?php echo $db_host; ?>
				&nbsp;&nbsp;
				<img   title="Utilisateur" src=data:image/gif;base64,<?php echo $img['user']; ?> width="20">&nbsp;
				<?php echo $db_user; ?>
				&nbsp;&nbsp;
				<img   title="Mot de passe" src=data:image/gif;base64,<?php echo $img['password']; ?> width="20">&nbsp;
<?php
					if ($db_password=='') {
					 	echo "&Oslash;";} else {
					 	echo $db_password;
					 	}
					 	// echo "&nbsp;&nbsp";
						
						?>
			<select class="form-control input-sm form-sm" id="dbname" name="dbname" onchange="document.location.href='<?php echo $_SERVER['PHP_SELF'];?>'+'?dbname='+this.options[this.selectedIndex].value">
						<?php
						// LISTE LES BASES DE DONNEES DISPONIBLES
						// DECOMMENTER POUR POUR MULTIBASES (début)
						$sql="SHOW DATABASES";
						$mysql_result=@mysqli_query($connect,$sql);
						while ($ligne = @mysqli_fetch_row($mysql_result))	{	
							if ($ligne[0]==$_SESSION['db']){
		   						$sel=" selected='selected' ";
		   					}else{
		   						$sel="";
		   					}
							echo "<option ".$sel." value='".$ligne[0]."'>".$ligne[0]."</option>";
						} 
						// DECOMMENTER POUR POUR MULTIBASES (fin)

						// COMMENTER LA LIGNE CI-DESSOUS POUR MONOBASES
						//echo "<option value='".$db_name."'>".$db_name."</option>";
						

						echo "</select><img   id=\"dbaseicon\" title=\"Base de données\" src=data:image/gif;base64,".$img['database']." width=\"20\">";
						?>
						<div class="clearfix"></div>
						</div>

						</div>
						<div id="tables" class="col-sm-6">
						<div class="boxgrey">
						<div class="titretables">
							<img   src=data:image/gif;base64,<?php echo $img['tables']; ?> style="margin-top:-6px" width="20"></div>
						<div class="seltables pull-right">
						
							<select class="input-sm form-control form-sm " name="tables" id="listtables" onchange="document.location.href='<?php echo $_SERVER['PHP_SELF'];?>'+'?table='+this.options[this.selectedIndex].value+'&dbname='+document.getElementById('dbname').options[document.getElementById('dbname').selectedIndex].text">
								<option value="%table%">-- Tables --</option>
								<?php
							$sql="SHOW TABLES";
							$mysql_result=mysqli_query($connect,$sql);

							while ($ligne = mysqli_fetch_row($mysql_result))	{	
								if ($ligne[0]==$_GET['table']){
			   						$sel="selected='selected'";
			   					}else{
			   						$sel="";
			   					}
								print("<option ".$sel." value='".$ligne[0]."'>".$ligne[0]."</option>");
							}
							?>
						</select>
						</div>
						<div class="clearfix"></div>
						</div>

						</div>
				
			<?php
			} else {
				$value="Rien a traiter";
			}
			?>
			<form name="form" method="post" action=<?php $_SERVER['PHP_SELF']; ?> >
					<div id="content">
						<div class="col-sm-16">
							<div class="boxgrey">
							<?php 
							if (isset($_GET['table'])&& $_GET['table']!="%table%"){
								echo '<input type="button" class="btn btn-xs btn-primary" value="'.$_GET['table'].'" onclick="insertfield(\''.$_GET['table'].'\');">';
							}
							 ?>
																Champs
																
														<?php 
														if (isset($_GET['table'])&& $_GET['table']!="%table%"){
															$sql="DESCRIBE ".$_GET['table'];
								
															$debloqueshowall='<script type="text/javascript">document.getElementById(\'showall\').disabled=false;</script>';
															$mysql_result=mysqli_query($connect, $sql);
															while ($ligne = mysqli_fetch_row($mysql_result)){
																print("<input type=\"button\" class=\"btn btn-xs btn-info\" value=\"".$ligne[0]."\" onclick=\"insertfield('".$ligne[0]."');\">");
															}
														//stocke la valeur de la table en Jscript
															
															$exempletable=$_GET['table'];
														} else {
															$exempletable="matable";
															$debloqueshowall='';
															
														}
														echo '<script type="text/javascript">
															tablechoisie="'.$exempletable.'";
															</script>';
														?>
														<div style="clear:both"></div>
														</div></div>


						<!-- ZONE DE REQUETES -->
						<div class="col-sm-10">
							<div id="rezquery"></div>
							<div class="boxgrey">
								<textarea wrap="virtual" onkeyup="ajax();active_sauv_btn()" placeholder="Tapez votre requête ici..." id="sql" name="sql" class="tx form-control" ><?php 
								if(isset($_POST['sql'])) {
									echo str_replace('<br/>','\r\n',$_POST['sql']); 
								}
								

								?></textarea>
							
							<div class="clearfix"></div>
							<div id="arrow"><input type="checkbox" id="newlines" value="1"><label for=""><small>&nbsp;Nouvelle ligne après FROM, WHERE, INNER, PRIMARY, FOREIGN</small></label></div>
							
								<div id="sqlcolors"></div>
								

								<div class="clearfix"></div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="boxgrey">
								<div id="buttons">
							
							<input  type="submit" class="btn btn-lg btn-success" id="showexec" value="EXECUTER (F9)" title="Exécuter la requête MySQ (F9)" >
							<button type="button" id="refresh" class="btn btn-lg btn-default tip" title="Réinitialiser la page"><span class="glyphicon glyphicon-refresh"></span></button>

							<div class="clear" style="line-height:10px" ><br></div>
							<input id="showall" type="button" class="btn btn-warning " style="width:98%" value="Voir le contenu de la table sélectionnée" onclick="writeExample('SELECT * FROM %table%;');document.forms[0].submit();" >
							<div class="clear" style="line-height:5px"><br></div>

<hr>
<div class="text-center">
								<input type="button" class="btn btn-sm btn-default funcBTN" value="ALTER" onclick="displaysql('Modifie la structure d\'une table<br/>Ajout d\'un champ :<br/><span class=\'hlp\'>ALTER TABLE <?php echo $exempletable; ?> ADD COLUMN nouveau_champ FLOAT(6,2)</span><br/>Suppression d\'un champ :<br/><span class=\'hlp\'>ALTER TABLE <?php echo $exempletable; ?> DROP COLUMN champ_a_effacer;</span>');ajax()" >

								<input type="button" class="btn btn-sm btn-default funcBTN" value="CREATE" onclick="displaysql('<span class=\'hlp\'>CREATE TABLE <?php echo $exempletable; ?> (<br/>champ1 INT(11) NOT NULL AUTO_INCREMENT,<br/>champ2 VARCHAR(50) NULL,<br/>PRIMARY KEY (champ1),<br/>FOREIGN KEY (champ2) REFERENCES table_distante(champ_distant)<br/>);</span>');ajax()" >

								<input type="button" class="btn btn-sm btn-default funcBTN" value="DROP" onclick="displaysql('DANGER !!! supprime la table <?php echo $exempletable; ?><br/><span class=\'hlp\'>DROP <?php echo $exempletable; ?><br/></span>');ajax()" >

								<input type="button" class="btn btn-sm btn-default funcBTN" value="TRUNCATE" onclick="displaysql('Vide la table, mais conserve sa structure<br/><span class=\'hlp\'>TRUNCATE <?php echo $exempletable; ?></span>');ajax()" >
								<hr>
								<!-- ORDRES DML -->
								<input type="button" class="btn btn-sm btn-info funcBTN" value="SELECT" onclick="displaysql('<span class=\'hlp\'>SELECT  champ1, champ2<br/>FROM <?php echo $exempletable; ?><br/>WHERE  condition;</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="DELETE" onclick="displaysql('Efface l\'enregistrement<br/><span class=\'hlp\'>DELETE FROM <?php echo $exempletable; ?><br/>WHERE  condition;</span><br/>DANGER ! Si la condition n\'est pas précise, tous les enregistrements correspondants sont effacés! ');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="INSERT" onclick="displaysql('<span class=\'hlp\'>INSERT INTO table (champ1, champ2) <br/>VALUES<br/>\(\'val1-1\', \'val1-2\'\),<br/>\(\'val2-1\', \'val2-2\'\);</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="UPDATE" onclick="displaysql('<span class=\'hlp\'>UPDATE table<br/>SET  champ =  \'nouvelle_valeur\'<br/>WHERE  table.champ =\'ancienne_valeur\';</span>');ajax()" >
								<hr>
								<!-- FONCTIONS NUMERIQUES-->
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="AVG" onclick="displaysql('Calcule la moyenne d\'un champ<br/><span class=\'hlp\'>SELECT AVG(champ)<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition</span><br/>AVG ne produit qu\'un seul résultat, utiliser GROUP BY pour répéter le calcul');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="CONCAT" onclick="displaysql('Concatène des champs<br/><span class=\'hlp\'>SELECT CONCAT(code_postal,\'-\',ville) from <?php echo $exempletable; ?><br/>WHERE condition</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="COUNT" onclick="displaysql('Compte le nombre de lignes<br/><span class=\'hlp\'>SELECT COUNT(*) ou COUNT(champ)<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition</span><br/>COUNT ne produit qu\'un seul résultat, utiliser GROUP BY pour répéter le calcul');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="DISTINCT" onclick="displaysql('Sélectionne les valeurs uniques, pas les doublons<br/><span class=\'hlp\'>SELECT DISTINCT(champ)<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="IN" onclick="displaysql('sélectionne les champs correspondant à la liste de valeurs<br/><span class=\'hlp\'>SELECT films<br/>FROM <?php echo $exempletable; ?><br/>WHERE annee IN (1980, 1990, 2000)</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="MAX" onclick="displaysql('Sélectionne la valeur maximum d\'un champ<br/><span class=\'hlp\'>SELECT MAX(champ)<br/>FROM <?php echo $exempletable; ?></span><br/>MAX ne produit qu\'un seul résultat, utiliser GROUP BY pour répéter le calcul');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="MIN" onclick="displaysql('Sélectionne la valeur minimum d\'un champ<br/><span class=\'hlp\'>SELECT MIN(champ)<br/>FROM <?php echo $exempletable; ?></span><br/>MIN ne produit qu\'un seul résultat, utiliser GROUP BY pour répéter le calcul');ajax()" >
								<input type="button" class="btn btn-sm btn-primary funcBTN" value="SUM" onclick="displaysql('calcule la somme d\'un champ<br/><span class=\'hlp\'>SELECT SUM(champ) FROM <?php echo $exempletable; ?></span><br/>SUM ne produit qu\'un seul résultat, utiliser GROUP BY pour répéter le calcul');ajax()" >
								
								<!-- SELECTION -->
								<hr>
								<input type="button" class="btn btn-sm btn-info funcBTN" value="AS" onclick="displaysql('Permet de donner un alias\(ici total\) à un champ<br/><span class=\'hlp\'>SELECT COUNT(*) AS total<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="BETWEEN" onclick="displaysql('Déclare deux valeurs afin de sélectionner celles qui sont comprises entre celles fournies<br/><span class=\'hlp\'>SELECT *<br/>FROM <?php echo $exempletable; ?><br/>WHERE annee BETWEEN valeur_debut AND valeur_fin</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="GROUP BY" onclick="displaysql('Effectue un traitement répétitif \(ici un comptage des elements de chaque categorie\) sur le champ fourni<br/><span class=\'hlp\'>SELECT COUNT(*), categorie<br/>FROM <?php echo $exempletable; ?><br/>WHERE annee=1980<br/>GROUP BY categorie;</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="HAVING" onclick="displaysql('Est utilisé pour filtrer les résultats (ici les catégories qui comportent un E) lorsque GROUP BY est précisé<br/><span class=\'hlp\'>SELECT COUNT(*), categorie<br/>FROM <?php echo $exempletable; ?><br/>WHERE annee=1980<br/>GROUP BY categorie<br/>HAVING categorie LIKE \'%E%\' </span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="JOIN" onclick="displaysql('Effectue une association entre tables<br/>Selon qu\'on utilise INNER, LEFT ou RIGHT, les résultats n\'afficheront que les correspondances complètes entre les tables (INNER),<br/>tous les enregistrements de la table de droite et ceux correspondants,<br/>ou tous ceux de la table de gauche  (LEFT)<br/><span class=\'hlp\'>SELECT * FROM table 1<br/>INNER/LEFT/RIGHT JOIN table2 ON champtablegauche=champtabledroite WHERE condition</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="LIKE" onclick="displaysql('Equivaut à égal, mais utilisé pour rechercher dans les chaines de caractères, principalement avec le caractère %<br/>Cette requête recherche tout ce qui commence par A, comporte un Y et finit par un T:<br/><span class=\'hlp\'>SELECT champ<br/>FROM <?php echo $exempletable; ?><br/>WHERE champ LIKE \'A%Y%T\'</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="LIMIT" onclick="displaysql('réduit les résultats de recherche<br/>LIMIT 10 ne renvoie que les 10 premiers enregistrements<br/>LIMIT 10,20 renvoie 20 enregistrements à partir du 10ème<br/><span class=\'hlp\'>SELECT *<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition<br/>LIMIT 50</span>');ajax()" >
								<input type="button" class="btn btn-sm btn-info funcBTN" value="ORDER BY" onclick="displaysql('Classe les résultats selon le champ fourni<br/>ASC \(valeur par défaut\) trie par ordre ascendant, de 1 à n ou de A à Z<br/>DESC trie du plus grand au plus petit<br/><span class=\'hlp\'>SELECT *<br/>FROM <?php echo $exempletable; ?><br/>WHERE condition<br/>ORDER BY champ_à_trier DESC</span>');ajax()" >
								</div>
							<!-- Sauvegarde des requêtes -->
							
								
							
							
							
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="boxgrey">
								<div class="row">
								<div class="col-sm-9">
									<input id="refnom" type="text"  placeholder="Nom de la requête à sauvegarder" class="form-control input-sm " name="refreq" onkeyup="active_sauv_btn()">
								</div>
								
									<div class="col-sm-7 text-right">
										<input type="hidden" value="" name="delqueries" id="delqueries"/>
										<input id="refsauv" type="button" class="btn btn-success btn-sm tip" disabled value="Sauve" onclick="document.forms[0].submit();" title="Sauvegarde la requête en cours (Un nom et une requête doivent être entrés pour activer ce bouton)">			
										<button onclick="delfile();return false;" class="btn btn-danger btn-sm tip" title="Supprimer les requêtes sauvegardées"><span class="glyphicon glyphicon-remove-circle"></span></button>
										<button onclick="showfile();return false;" class="btn btn-info btn-sm tip" title="Voir les requêtes sauvegardées"><span class="glyphicon glyphicon-eye-open"></span></button>
									</div>
									
							</div>
							</div>
						</div>
		
					</div>
				
				</form>
				<div style="clear:both"></div>
				<!-- greybox -->
			<div id="greybox" >
			<span id="fontminus" class="btn btn-warning btn-xs" title="Dimunuer la police">-</span> <div class="fermer" onclick="masque('greybox');" title="Fermer les résultats">X</div><span title="Augmenter la police" id="fontplus" class="btn btn-primary btn-xs">+</span>
				<table id="centrage" width="100%" height="100%">
					<tr>
						<td width="100%" height="100%" align="center" valign="middle">
				<?php 
				if( $_POST['refreq']!='' && $_POST['sql']!='') { // si une référence est sauvegardée, on n'affiche pas les résultats
					?>
					<script type="text/javascript">
						showoverlay('<h3>Requête sauvegardée.</h3>','sm','success','');
						autohideoverlay(900);
						</script>
					<?php
				}
				// s'il n'y a pas de référence à sauvegarder, on affiche les résultats
				
				/*if(($_POST['sql'])!='' && $_POST['refreq']=='' && $_POST['delqueries']!=1) {
					
					include(dirname(__FILE__).'/sql_results.php');
					//////// AFFICHAGE RESULTATS
				} //fin affichage resultats

				*/
					?>
							</td>
						</tr>
					</table>
				</div><!-- greybox -->
				
				<div id="exemples"><!-- div des exemples -->
				<div class="fermer" onclick="masque('exemples');" title="Fermer l'exemple'">X</div>
					<div id="aide"></div>
				
				</div><!-- div des exemples -->
				
				
					<div id="txtfile"><!-- div fichier sauvegarde -->
					<div class="fermer" onclick="masque('txtfile');" title="Fermer l'aperçu de fichier">X</div>
					<div id="filecontent">
								<?php
								
								if(file_exists(FICHSAUV)) {
									
									$fichier = fopen(FICHSAUV, "r");
									$contenu=fread($fichier,filesize(FICHSAUV));
									fclose($fichier);
									// affichage des requetes sauvegardees
									
									// découpage des requêtes
									$requetes=explode('!#',$contenu);
										unset($requetes[0]); // première ligne invalide
									if(is_array($requetes)){

											foreach ($requetes as $key => $requetebloc) {
												preg_match('/^(.+)#/',$requetebloc,$matches);
												preg_match('/µ(.*)µ/', $requetebloc,$Rmatches);
												
												echo '<strong>'.$matches[1].'</strong><div class="thumbnail"><em>'.nl2br($Rmatches[1]);
													
													echo '</em><br><button onclick="backedReqEdit(\''.addslashes($Rmatches[1]).'\')" class="pull-right btn btn-xs btn-info tip" title="Recopie cette requête dans la fenêtre d\'édition">Edition</button>';
													echo '<div class="clearfix"></div></div>';
											}
									}
									
									//echo nl2br($contenu);

								} else {
									echo"<br><br><br>Fichier introuvable: Faites au moins une sauvegarde<br><br><br>";
								}
								
								?>

					</div>
					
				</div><!-- div fichier sauvegarde -->


			</div></div>
			<div id="RESULTpreview">
				
					<?php 
					if(($_POST['sql'])!='' && $_POST['refreq']=='' && $_POST['delqueries']!=1) {
										
										include(dirname(__FILE__).'/sql_results.php');
										//////// AFFICHAGE RESULTATS
									} //fin affichage resultats
					 ?>
			</div>
			<!-- WRAPPER -->
			<?php echo $debloqueshowall; ?>
<?php //footer(); ?>
<!-- 
COPIER COLLER DANS LE TEXTAREA POUR VOIR LES COULEURS DES MOT-CLES

 add  all  alter  and  as  asc  date  having  if  in  int  inner  insert  into  join  left  like  limit  
 max  min  not  null  on  or  outfile  table  tables  text  to  varchar auto_increment avg between 
 binary bit blob bool by cascade char column columns concat constraint count create database databases 
 datetime delete desc distinct drop enum exists float foreign from grant grants group key 
 order outer primary privileges references revoke right select set show smallint sum time 
 tinytext truncate unsigned update use user values view where year 

-->