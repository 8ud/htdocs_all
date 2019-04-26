<?php 
session_start();


if(isset($_POST) && $_POST['sql']!='')
{
	//récupération de la requête
	$requete= utf8_decode(nl2br($_POST['sql']));

	// conversion de la requête en minuscules pour analyse correcte des mots
	$requete=strtolower($requete);

	// construction du tableau des mots-clés à remplacer. Le tableau est gardé 
	// en session PHP. Les modifications ne seront prises en compte qu'après
	// fermeture et ré-ouverture du navigateur...

if(!isset($_SESSION['mots'])) {
	$motsSQL=array(
				'key',
				'add',
				'all',
				'alter',
				'and',
				'as',
				'asc',
				'auto_increment',
				'avg',
				'between',
				'binary',
				'bit',
				'blob',
				'bool',
				'by',
				'cascade',
				'char',
				'column',
				'columns',
				'concat',
				'constraint',
				'count',
				'create',
				'database',
				'databases',
				'date',
				'datetime',
				'delete',
				'desc',
				'distinct',
				'drop',
				'enum',
				'exists',
				'float',
				'foreign',
				'from',
				'grant',
				'grants',
				'group',
				'having',
				'if',
				'in',
				'inner',
				'insert',
				'int',
				'into',
				'join',
				'left',
				'like',
				'limit',
				'max',
				'min',
				'not',
				'null',
				'on',
				'or',
				'order',
				'outer',
				'outfile',
				'primary',
				'privileges',
				'references',
				'revoke',
				'right',
				'select',
				'set',
				'show',
				'smallint',
				'sum',
				'table',
				'tables',
				'text',
				'time',
				'tinytext',
				'to',
				'truncate',
				'unsigned',
				'update',
				'use',
				'user',
				'values',
				'varchar',
				'view',
				'where',
				'year'
		);
	

	// le tableau est stocké en session
	$_SESSION['mots']=$motsSQL;
} else {
	//le tableau est déjà stocké en session
	$motsSQL=$_SESSION['mots'];
}

	// boucle de transformation des mots de la requête
	foreach ($motsSQL as $cle => $valeur) {
		
		// recherche & transformation du mot en MAJ et ajout des classes
		$valeurMaj=strtoupper($valeur);
		
			$valarechercher="/\b".$valeur."\b/";
			$valremplacement="<span class=\"$valeur\">".$valeurMaj."</span>";
			$requete=preg_replace($valarechercher,$valremplacement, $requete);
	
		
		
	} // fin du foreach

	// coloration des étoiles
	$requete=preg_replace('/\*/','<span class="star">*</span>', $requete);
	//coloration des parenthèses
	$requete=str_replace('(','<span class="parenth">(</span>',$requete);
	$requete=str_replace(')','<span class="parenth">)</span>',$requete);
	
	// rajout des sauts de ligne, après FROM, WHERE, INNER, PRIMARY, FOREIGN
	if($_POST['nl']==1){
		$requete=str_replace('FROM','<br/>FROM',$requete);
		$requete=str_replace('WHERE','<br/>WHERE',$requete);
		$requete=str_replace('INNER','<br/>INNER',$requete);
		$requete=str_replace('PRIMARY','<br/>PRIMARY',$requete);
		$requete=str_replace('LEFT JOIN','<br/>LEFT JOIN',$requete);
		$requete=str_replace('RIGHT JOIN','<br/>RIGHT JOIN',$requete);
		$requete=str_replace('FOREIGN','<br/>FOREIGN',$requete);
	}

		
	// et on renvoie la chaine transformée à AJAX
	echo utf8_encode($requete);

	} // fin du si requete fournie et non vide (sinon on ne fait rien)
 ?>