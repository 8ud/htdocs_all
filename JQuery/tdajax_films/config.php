<?php 
//**********CONFIGURATION **********
$base="cinema"; // base de données
$host="127.0.0.1"; // serveur BdD
$util = "root"; // utilisateur
$password = ""; // mot de passe
$charset = 'utf8'; // encodage


//**********CONNEXION **********
$connexion = "mysql:dbname=$base;host=$host;charset=$charset";
$options = [
		PDO::ATTR_EMULATE_PREPARES=> false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $bdd = new PDO($connexion, $util, $password, $options);

} catch (PDOException $e) {
    die('Échec lors de la connexion : ' . $e->getMessage());
}

?>