var body = document.getElementById("body-position");
var footer = document.getElementById("footerFixe");
var bodyhauteur = document.getElementById("body-position").offsetHeight;
var ecranhauteur = $(window).height();



if(bodyhauteur<ecranhauteur){
    body.style.height = "100%";
    footer.style.position ="absolute";
    footer.style.bottom = "0";
    footer.style.margin = "0 -15px";
}