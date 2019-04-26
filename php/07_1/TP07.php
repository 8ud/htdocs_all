<!doctype html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <title>Page 1</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

   <!-- ARTICLE -->

   <!-- <?php debutArticle('bonjour') ?> -->

   <?php 
   function  debutArticle($titre){
      ?>
   <div class="article">

      <div class="titrearticle"><?= $titre?></div>
      <div class="datearticle"><?= date("d-m-Y à H:i:s")?></div>
      <div style="clear:both"></div>
      <div class="corpsarticle">
         <div class="blocimage">
            <img class="imagearticle" src="" alt="" />
            <div class="legendeimage">
               Legende image
               <br>Lorem ipsum dolor sit amet, consectetur adipisicing.
            </div>
         </div>

         <?php 
   }
    ?>
        <!--  <div class="textarticle">

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, necessitatibus voluptas ipsum
            commodi esse. Hic, esse consectetur tenetur distinctio amet sequi corporis quis saepe molestiae! Ipsa,
            accusantium, debitis odit unde est itaque nemo quidem sit sequi eius error cumque! Dolore, aliquid, ad
            temporibus recusandae magnam nobis eveniet quo dignissimos voluptas.

            <div style="clear:both"></div>
         </div>
 -->
      <?php 
function finArticle(){
       ?>
         <div style="clear:both"></div>
      </div>

      <div class="auteur">Copyright: Moi &copy;</div>
   </div>

   <?php 
}
 ?>
   <!-- <?php  finArticle() ?> -->
</body>

</html>