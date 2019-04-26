$(function(){



$("input").on("keyup",function(){
console.log($(this).val().length);
if($(this).val().length >=3){

var titre = $(this).val();


var nom = $(this).attr("name");
$('input').val('');
$("input[name='"+nom+"']").val(titre);
/*
 $.get("http://localhost/JQuery/tdajax_films/request.php?titre=%"+titre+"%",function(data){

$("#listresult").html(data);


});

 $.get("http://localhost/JQuery/tdajax_films/request.php?realisateur=%"+titre+"%",function(data){

$("#listresult").html(data);


});

 $.get("http://localhost/JQuery/tdajax_films/request.php?genre=%"+titre+"%",function(data){

$("#listresult").html(data);


});
*/
$.get("http://localhost/JQuery/tdajax_films/request.php?"+$(this).attr("name")+"="+$(this).val(),function(data){

   $("#listresult").html(data);
   
   
   });



















}




});
























});