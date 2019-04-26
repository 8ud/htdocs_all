var tableau =["Gardiner","Nert","Kesley","Marie","Emmey","Floyd","Brooke","Joey","Weber","Ingemar","Loutitia","Nydia","Saxon","Dilly","Gayle","Kerk","Auroora","Johnathan","Angelita","Pia","Guido","Lenora","Thorstein","Inglebert","Oneida","Dorthea","Keri","Price","Carmita","Mirna","Simone","Anallise","Orly","Hillard","Xever","Free","Lexy","Foss"];

var liste="";

  /*for (var i=tableau.length-1; i>=0; i--){

     liste +=tableau[i]+" ";

if(i%5==0){

   liste +="\n";
}

};


alert(liste);*/

for (prenoms in tableau){

document.write("l'indice "+prenoms+" contient la valeur "+tableau[prenoms]+"<br>");


}


