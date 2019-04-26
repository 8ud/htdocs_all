<?php 

//// IMPORTANT !
///////////// LES REDIRECTIONS vers /validform échouent en POST : AJOUTER / /validform/ ou utiliser /validform/index.php





  if(isset($_GET['dlSelfPage']) && $_GET['dlSelfPage']=="yo") {
  download();

}
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Traitement formulaire</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      td, th {
        padding:7px 30px !important;
      }
      .title {
        font-size:1.4em;
        font-weight:bold;
      }
      .tdnum {
        width:30px;
        max-width:30px;
        text-align:right;
          font-weight:bold;
      }
      .tdval {
        width:60%;
        font-style:italic;
      }

      .vals td {
        font-size:1.2em;
        font-weight:bold;
      }
      .vals td:nth-child(2){
        color:#555;
        position:relative;
      }
      .vals td:last-child{
        font-style:italic;
        color:#333
      }
      th.text-right {
        position:relative;
      }
      th.text-right:after, td.text-right:after{
        content:"=";
        display:block;
        position:absolute;
        right:-15px;
        top:3px;
        text-align:center;
        width:30px;
        height:30px;
        border:1px solid #ddd;
        border-radius:50%;
        line-height:22px;
        font-weight:bold;
        font-size:1.2em;
        background-color:white;
      /*   box-shadow:0 0 10px rgba(0,0,0,0.2) */
      }
      .nodata {
        width:50%;
        min-width:250px;
        max-width:400px;
        margin:15px auto;
      }
    </style>
  </head>
  <body>

<div class="container"><br>
   <a href="<?php echo ref(); ?>"><div class="btn btn-md btn-info">Retour</div></a>
  <row>

    <div class="col-lg-12">
      <h1>Traitement de formulaire</h1>
    </div>
</row>
<row>

    <!-- DEBUT GET -->
    <div class="col-lg-12">
      <table class="table table-responsive table-striped table-condensed table-bordered table-hover">
        <?php 
          echo showData("get");
        ?>
      </table>
    </div>
   <!-- FIN GET -->

<!-- DEBUT POST -->
     <div class="col-lg-12">
      <table class="table table-responsive table-striped table-condensed table-bordered table-hover">
        <?php 
          echo showData("post");
        ?>
      </table>
    </div>
    <!-- FIN POST -->





    <p><a href="?dlSelfPage=yo"><span class="btn btn-warning btn-lg">Telecharger les sources</span></a></p>
  </row>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  </body>
</html>


<?php 
//nope
function download(){
$file = $_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['SCRIPT_NAME'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} 
}

function ref(){
  if(@$_SERVER["HTTP_REFERER"]!=""){
    return $_SERVER["HTTP_REFERER"];
  } else {
    return 'javascript:window.history.go(-1)';
  }
}

function showData($method) {


  $tabMethod=array("get", "GET", "post", "POST");
  if (in_array($method, $tabMethod)) { // si méthode get ou past
    $method = strtoupper($method); // get => GET
    
    $str='<caption>
          <h2>'.$method.'</h2>
        </caption>
        <tr class="info title">
          <td class="tdnum">#</td>
          <th class="text-right">Paramètres</th>
          <th class="tdval">Valeurs</th>
        </tr>';



    $data = eval('return $_'.$method.';'); // convertit "GET" en variable $_GET
    if(count($data)>0){
      // affichage des données
      $nbParam = 1;
      
      foreach ($data as $param => $val) {
        $str .= ' <tr class="vals">
          <td class="tdnum">'.$nbParam.'</td>
          <td class="text-right">'.$param.'</td>
          <td>'.$val.'</td>
        </tr>';
        $nbParam++;
      }
      return $str;
     
    } else {
      // nbr data = 0 : aucune donnée reçue
      return $str.echoWarning($method);

    }



  } else {
    // méthode invalide
    return "<div class=\"aelrt alert-danger\">La méthode demandée ($method) est <b>invalide</b></div>";
  }


   
}


function echoWarning($method) {

return '<tr><td colspan="3"><div class="text-center alert alert-danger nodata">Aucune donnée '.strtoupper($method).' reçue...</div></td></tr>';

}

 ?>
