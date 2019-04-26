<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>XXX titre XXX</title>
    <meta name="author" content="david">
    <meta name="description" content="XXX description XXX.">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, shrink-to-fit=no">
    <!-- Compatibilité IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <style>
        /* Styles internes */
    </style>
</head>

<body>
    <!-- debut page -->

<form action="" method="get">
   <input type="text" name="annee">
   <input type="text" name="login">
   <input type="submit" value="Tester bissextile">
</form>

<?php 
  $Y=$_GET["annee"];
if($_GET["annee"]!=""){
   if($Y%4 ==0 && $Y%1000!=0){
      
      echo "$Y est une année bissextile<br><br>";
   }else {
      echo  "$Y n'est pas une année bissextile<br><br>";
   }
}else{
   
   
   echo "renseignez le formulaire!!<br><br>";
  ?>
   <a href="/php/tp02.php">recommencez</a>
  <?php
   
}

// var_dump($_GET);
// echo "vous avez demande l'année ".$_GET['annee']."<br><br>";
// echo " ,vous avez demande le login ".$_GET['login'];

?>



<!--  <?php 
  $Y=Date('Y');
  
  if($Y%4 ==0 && $Y%1000!=0){
     
     echo "$Y est une année bissextile";
   }else {
    echo  "$Y n'est pas une année bissextile";
   }
   
     ?>
 -->





    <!-- fin page -->

    <script src="script.js"> </script>
    <script>
        ///ICI MES SCRIPTS INTERNES
    </script>
</body>
</html>