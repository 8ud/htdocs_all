$(function(){


$(".tn").on("click",function(){

   var picture = $(this).attr("data-bigimg");
   var desc = $(this).attr("data-desc");


 $("#imageprincipale").attr("src",picture+".jpg");

// $("#titre").html(picture);
$("#valeur").html(picture+desc);
console.log(desc);





});



});