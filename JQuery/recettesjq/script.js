$(function(){

$(".bouton").on("click",function(){

   var cocktail = $(this).attr("data-set");
   
   $.get("http://localhost/JQuery/recettesjq/ingredients"+cocktail+".txt",function(data){
      
      $("#ing").html(data);
      
   });
   
   $.get("http://localhost/JQuery/recettesjq/preparation"+cocktail+".txt",function(data){
      
      $("#recette").html(data);
      
   });
   console.log($("#coc").attr("src","img"+cocktail+".jpg"));
   
   $("#coc").attr("src","img"+cocktail+".jpg");
   
   
   





});



























});