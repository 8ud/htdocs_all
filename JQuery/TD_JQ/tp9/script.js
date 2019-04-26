$(function(){

   
   
   $(".details").on("click",function(){
      
      var ile = $(this).attr("data-image");
 var para = "fiches/"+ile+".txt";
 var pict = "images/"+ile+".jpg";
var titre = ile;

      $(".cache").show(500);


       $.get("http://localhost/JQuery/TD_JQ/tp9/"+para,function(data){

$("#para").html(data);
}); 

$(".affiche").addClass("content");
$("#image").attr("src",pict);

  $("#bloc h2").text(titre);


   }); 
   
   
   $("#close").on("click",function(){
      
      
      //  $(".cache").hide(500);
       $(".cache").css("display","flex").hide(500).fadeOut(500); 
      
      
   });



});