$(function(){



$(".pic").on("click",function(){

var bimage = $(this).attr("data-set");

$("#image").attr("src","big_"+bimage+".png");

$.get("http://localhost/JQuery/tpajax2/fic_"+bimage+".txt",function(data){
   
   
$("#imgdesc").html(data);


});

});































});