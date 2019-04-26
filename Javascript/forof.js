//exo 6-1a

/*var fin = prompt("j'marrete où ?");
document.write("nombres pairs jusqu'à :"+fin+ " <br/>" );

for (var i=0; i<=fin; i+=2){
document.write("["+i+"]" );

}*/

//exo 6-1b

/*var reponse;
var total=0;

do {
reponse = prompt("entrez un nombre");
reponse=parseInt(reponse);

total +=reponse;

}
while(reponse !=0);

document.write(total);*/

//exo 6-1c


// boucle des rangées
for(var x = 1;x<=10;x++){

document.write("<tr>");
// boucle des cellules
   for (var y = 1;y<=10;y++){
      var nbre = x*y;
      couleur="";
      if(nbre%4==0){
         couleur="class=\"multiple\"";
      } 

document.write("<td "+couleur+">"+nbre+"</td>");
   }
document.write("</tr>");
   







}