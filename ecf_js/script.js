$(function(){

   
   
   
   // 1.1 generation des blocs de page d'accueil
   var div1 = document.createElement("div");
   var h4 = document.createElement("h4");
   var span = document.createElement("span");
   var lien = document.createElement("a");
   var img = document.createElement("img");
   var br = document.createElement("br");
   
   var nbre = 0;
   function recent(){
      for(var i=0; i<=8; i++){
         console.log(i);
         div1.classList.add("quart_portfolio");
         h4.textContent ="Portfolio élément " +i;
         span.textContent = "Plus de détails";
         lien.setAttribute("href","#");
         img.setAttribute("src","assets/img/portfolio"+i+".jpg");
         img.setAttribute("alt","élément"+i);
         
         document.body.appendChild(div1);
         div1.appendChild(h4);
         h4.appendChild(br);
         h4.appendChild(span);
         div1.appendChild(lien);
         lien.appendChild(img);
      }
   };
   
   
   // recent(8);
   
   // 1.3validation formulaire
   
   
   //validation des champs obligatoires
   
   
   //declaration des variables
   var oblign = document.querySelector("#nom");
   var obligp = document.querySelector("#prenom");
   var obligv = document.querySelector("#ville");
   var obligm = document.querySelector("#mail");
   var im1 = document.querySelector("#im1");
   var im2 = document.querySelector("#im2");
   var im3 = document.querySelector("#im3");
   var im4 = document.querySelector("#im4");
   var sub = document.querySelector("#submitBTN");
   var ko = document.querySelector(".ko")
   var v1 = false;
   var v2 = false;
   var v3 = false;
   var v4 = false;
   
   
   
   oblign.addEventListener("keydown", active1);
   
   function active1(){
      if(oblign.value.length>=3){
         this.classList.add("ok");
         this.classList.remove("ko");
         im1.setAttribute("src","assets/img/ok.png");
         v1 = true;
         
      }else{
         this.classList.add("ko");
         this.classList.remove("ok");
         im1.setAttribute("src","assets/img/ko.png");
         v1 = false;
      }
      
   };
   obligp.addEventListener("keydown", active2);
   
   function active2(){
      if(obligp.value.length>=2){
         this.classList.add("ok");
         this.classList.remove("ko");
         im2.setAttribute("src","assets/img/ok.png");
         v2= true;
      }else{
         this.classList.add("ko");
         this.classList.remove("ok");
         im2.setAttribute("src","assets/img/ko.png");
         v2=false;
      }
      
   };
   obligv.addEventListener("keydown", active3);
   
   function active3(){
      if(obligv.value.length>=2){
         this.classList.add("ok");
         this.classList.remove("ko");
         im3.setAttribute("src","assets/img/ok.png");
         v3=true;
      }else{
         this.classList.add("ko");
         this.classList.remove("ok");
         im3.setAttribute("src","assets/img/ko.png");
         v3=false;
      }
      
   };
   obligm.addEventListener("keydown", active4);
   
   function active4(){
      if(obligm.value.length>=4){
         this.classList.add("ok");
         this.classList.remove("ko");
         im4.setAttribute("src","assets/img/ok.png");
         v4=true;
      }else{
         this.classList.add("ko");
         this.classList.remove("ok");
         im4.setAttribute("src","assets/img/ko.png");
         v4=false;
      }
      
   };
   
   
   
   if (v1 && v2 && v3 && v4) {
      
      sub.disabled=false;
      
      
   };
   
   // 1.4 injection des données asynchrones
   
   $(function(){

$("#cgu").on('click', function(){

$('#popup_contenu').load('http://ecf_js/cgu.txt');
$('#couverture visible').show();

});
   });
   
   
});