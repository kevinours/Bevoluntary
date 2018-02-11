var divTest = document.getElementById("banniere");
var titreSite = document.getElementById("titre-site");
var hauteurMenu=document.getElementById("myTopnav").offsetHeight;
var hauteurTitreSite=document.getElementById("titre-site").offsetHeight;
var sH = $(window).height();
     divTest.style.height = sH+"px";
     titreSite.style.marginTop = sH/2-hauteurMenu-hauteurTitreSite/2+"px";
