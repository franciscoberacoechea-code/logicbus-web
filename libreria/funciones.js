// JavaScript Document

////////////////////////////////////////////////////////////////////////////////////////
////  Prepara el objeto de Ajax y checa que no existan errores /////////////////////////
function objetoAjax(){
	var xmlhttp=false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(E){
			xmlhttp = false;
  		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

/////////////////////////////////////////////////////////////////////////////
///////  carga la animacion en el id que se indica con ajax /////////////////

function carga_animacion(animacion, contenedor){
		//alert("animacion = "+animacion +" contenedor = "+ contenedor);
		
	ubicar = document.getElementById(contenedor);
	
	ajax=objetoAjax();
	ajax.open("GET", animacion,true);
	ajax.onreadystatechange=function() {
	if (ajax.readyState==4) {
		ubicar.innerHTML = ajax.responseText;
		}
	else{
		ubicar.innerHTML = '<p align="center"><img src="images/loading.gif" width="80" height="80" align="middle"/></p>';
		}
	}
	ajax.send(null);
}



// Javascript to enable link to tab
jQuery(document).ready(function() {
var url = document.location.toString();
if (url.match('#')) {
    $('.list-group a[href=#tabslist]').tab('show') ;
} 

// Change hash for page-reload
$('.list-group a').on('shown.bs.tab', function (e) {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
})
});