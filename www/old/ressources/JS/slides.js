var slideIndex = 1;//on commence a l'image 1
showDivs(slideIndex);//affiche la premiere slide

function plusDivs(n) {
  showDivs(slideIndex += n);// affiche la div suivantes (+1) ou la precedante (-1)
}

function currentDiv(n) {
  showDivs(slideIndex = n);// affiche la div ou on a clique (petit rond en bas)
}

function showDivs(n) {// n est la slide a afficher
  var i;//var temporaire
  var x = document.getElementsByClassName("mySlides");// x[] = toutes les slides
  var dots = document.getElementsByClassName("demo");//dots[] = tous les petits points
  if (n > x.length) {slideIndex = 1}// SI n > nombre de slides (ex: derniere slides) alors la slide a afficher est 1
  if (n < 1) {slideIndex = x.length}// SI n < nombre de slides (ex : premiere slide) alors la slide a afficher est 
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  // on desactive TOUTES les slides
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");// on desactive TOUS les petits points en bas
  }
  x[slideIndex-1].style.display = "block";//on affiche la slide  (-1 parce que un tableau commence par 0,1,2,3,...)
  dots[slideIndex-1].className += " w3-white";//on affiche le point en bas  (-1 idem)
}