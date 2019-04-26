<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <meta name="author" content="david">
    <meta name="description" content="XXX description XXX.">
    <!-- Compatibilité IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        /* Styles internes */
    </style>
</head>

<body>



<?php

/* echo "<h1>coucou</h1>";
print "<h1>coucou avec print</h1>"; */

/* echo $_SERVER;
print $_SERVER;
print_r ($_SERVER);
var_dump ($_SERVER); */

/* $tab= array("cellule1"=>"salut les amis",
"cellule2"=>35,
"cellule3"=>true
);

echo "avec print_r <br>";
print_r($tab);
echo "<br>avec var_dump <br>";
var_dump($tab); */


/* $glob ="coucou";

function demo(){
    global $glob;
echo $glob;

}
demo(); */

$age = 16;

if($age >=18){
echo "tu peux boire de l'alcool";

}else {
   echo "tu ne peux pas boire de l'alcool";
}




?>




</body>
</html>