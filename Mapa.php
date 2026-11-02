<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//Ddiv HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.ddiv">
<html>
<head>
<title>Celdas de carga y transductores</title>
<meta name="description" content="La celda de carga convierte la fuerza en una salida eléctrica medible. Esta señal eléctrica puede ser un cambio de voltaje, cambio de corriente o cambio de frecuencia dependiendo del tipo de celda de carga. Pueden ser utilizadas para medir compresión, tensión, o fuerzas de corte y doblado.">

<meta name="keywords" content="Celda, Load cell, Loadcell, celdas de carga, Celdas de carga, Celda de carga Tipo Botón, Celda de Carga Tipo Barra, Celda de Carga Tipo Columna, Celda de Carga Tipo Dona, Celda de Carga En Línea, Celda de Carga Low Profile, Celda de Carga Low Profile Pancake, Celda de Carga tipo Medical, Celda de Carga Mini-Beam, Celda de Carga Montaje en Panel, Celda de Carga Pancake, Celda de Carga Paralelogramo, Celda de Carga Tipo S, Celda de Carga Viga, Paneles, Display portátil, Acondicionador de señal, Módulos USB,Transductores, Logicbus, M&eacute;xico, Mexico, Guadalajara, Futek">

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
      };
</script>

<style>
   p{
    text-align: justify;
   }
  </style>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>
<div id="main">

<div class="card-header">
    <h1>Mapa con coordenadas</h1>
</div>

<img
 id="ImgMap"
 src="https://www.logicbus.com.mx/imagenes/images/mapa-de-representantes-regionales-por-estados.png"
 usemap="#process-map"
 >
<map name="process-map">
  <area
    title="Nombre: Juan Ruben<br>Correo: juanmarvenn@gmail.com"
    data-toggle="tooltip"
    coords="131, 42, 184, 84"
   >
   <area
    coords="229, 66, 278, 109"
    title="Chihuahua"
    data-toggle="tooltip"
   >
   <area
    coords="312, 96, 356, 130"
    data-toggle="tooltip"
    title="Coahuila"
   >
   <area
    coords="181, 166, 216, 210"
    data-toggle="tooltip"
    title="Sinaloa"
   >
   <area
    coords="359, 166, 398, 212"
    data-toggle="tooltip"
    title="Nuevo León"
   >
   <area
    coords="229, 256, 266, 297"
    data-toggle="tooltip"
    title="Nayarit"
   >
   <area
    coords="300, 277, 341, 316"
    data-toggle="tooltip"
    title="Jalisco"
   >
   <area
    coords="258, 341, 303, 385"
    data-toggle="tooltip"
    title="Colima"
   >
   <area
   coords="388, 320, 412, 358"
   data-toggle="tooltip"
   title="Mexico"
   >

   <area
    coords="417, 344, 444, 388"
    data-toggle="tooltip"
    title="Puebla"
    >
   <area
    coords="465, 355, 511, 405"
    data-toggle="tooltip"
    title="Veracruz"
   >

</map>



  


<script>

$('[data-toggle="tooltip"]').tooltip({
    placement: "bottom",
    html:true,

});

$(document).mousemove( function(e) {
	  var mouseX = e.pageX - $('#ImgMap').offset().left;
    var mouseY = e.pageY - $('#ImgMap').offset().top + 20;
    $('.tooltip').css({'top':mouseY,'left':mouseX}).fadeIn('slow');
});
</script>





</div> <!--  /main -->
<?
 abajo();
?>
</body>
</html>