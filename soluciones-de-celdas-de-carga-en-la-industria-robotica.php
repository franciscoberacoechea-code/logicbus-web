<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->



<head>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-31533636-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-1007518778');
</script>

<title>Aplicaciones en la Robótica -celdas de carga</title>

<meta name="description" content="Aplicaciones de celdas de carga en la industria robotica, descripcion, equipos implementados, esquema de conexión">

<meta name="keywords" content="celdas de carga, tipos de aplicaciones de celds de carga, sensores de celdas de carga, futek, logicbus, aplicaciones de celdas de carga robotica,celda de carga en robot humanoide,sensado tactil de una mano robotica,aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">

<!-- Menu movil - Icono menu - Tabla -->
<link href="libreria/menu-movil.css" rel="stylesheet">

<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="libreria/estilos.css">

<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
      };
</script>

<style>
  h1{
    text-align: center;
  }
table td{
    text-align: center;
   }


.img-aplicaiones{
  padding: 5px 5px 0px 5px;
}

.btnVermas{
  padding: 5px 5px 10px 5px;
}
.text-aplicaciones{
  padding: 10px 5px 10px 5px;
}
.seccion-aplicaiones{
  padding: 5px;
}

.seccion-aplicaiones2{
  padding: 10px 5px 10px 5px;
}
.margen{
  border-bottom: 6px solid #ff7e00; 
  padding-bottom: 15px;
   padding-left: 20px;
  padding-right: 20px; 
 }

  </style>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 seccionSoluciones();
?>

<div id="main" class="container productos_page">
	<a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en la Robótica
<?
  menuMovilApp();
  menuPC();
?>
  <h1 class="my-5"><hr class="hr-text" data-content="Robótica"></h1>
  <center>
    <h2 class="divider gradient" style="font-weight: bold;">Celdas de carga</h2>
  </center>
  <div class="row container-fluid seccion-aplicaiones">
      <div class="col-6 col-md-3 container-fluid">
          <a href="celda-de-carga-en-robot-humanoide"><img src="imagenes/soluciones-en-la-industria/Robotica/Celda-de-carga-en-robot-humanoide-portada.jpg" alt="soluciones en la industria de la robótica" title="soluciones en la industria de la robótica" class="img-fluid"></a><br><br> 
          <center><b><a href="celda-de-carga-en-robot-humanoide">Celda de carga en robot humanoide</a></b></center>
       </div>
    <div class="col-6 col-md-3 container-fluid">
      <a href="deteccion-tactil-robotica"><img src="imagenes/soluciones-en-la-industria/Robotica/deteccion-tactil-robotica-portada.jpg"  alt="soluciones en la industria de la robótica" title="soluciones en la industria de la robótica" class="img-fluid"></a><br><br> 
      <center><b><a href="deteccion-tactil-robotica">Sensado táctil de una mano robótica</a></b></center>
    </div>
  <div class="col-6 col-md-3 container-fluid">
      <a href="prueba-de-zapatos-para-nieve"><img src="imagenes/soluciones-en-la-industria/Robotica/prueba-de-zapatos-para-nieve.png"  alt="Prueba de zapatos para nieve" title="Prueba de zapatos para nieve" class="img-fluid"></a><br><br> 
      <center><b><a href="prueba-de-zapatos-para-nieve">Prueba de zapatos para nieve</a></b></center>
    </div>
    <div class="col-6 col-md-3 container-fluid">
          <a href="rehabilitacion-de-guantes-roboticos"><img src="imagenes/soluciones-en-la-industria/Robotica/rehabilitacion-de-guantes-roboticos-portada.jpg" alt="soluciones en la industria de la robótica" title="soluciones en la industria de la robótica" class="img-fluid"></a><br><br> 
          <center><b><a href="rehabilitacion-de-guantes-roboticos">Rehabilitación de guantes robóticos</a></b></center>
      </div>
</div>

<div class="row container-fluid seccion-aplicaiones">
    <div class="col-6 col-md-3 container-fluid">
      <a href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/celda-de-carga-criogenica-msl-mars-rover-portada.jpg"  alt="Celda de carga criogénica para su uso en el explorador de Marte" title="Celda de carga criogénica para su uso en el explorador de Marte" class="img-fluid"></a><br><br> 
      <center><b><a href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte">Celda de carga criogénica para su uso en el explorador de Marte</a></b></center>
    </div>
  <div  class="col-6 col-md-3 container-fluid">
       <br><br>
        <center>
        <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a></center>  
    </div>
</div><br><br>


<!--<center><h2><b>Sensores de torque</b></h2></center><br>
<div class="row container-fluid seccion-aplicaiones">
    <div class="col-4 col-md-3 container-fluid">
               <img src="imagenes/36/diagramas/agricultura/alimentador-de-aves-agricola-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"><br><br> 
              <center><b><a href="https://www.logicbus.com.mx/alimentador-de-aves-de-corral-agricola">Alimentador de aves agr&iacute;colas</a></b></center>
  </div>
    <div class="col-4 col-md-3 container-fluid">
               <img src="imagenes/36/diagramas/agricultura/presion-diferencial-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"><br><br> 
              <center><b><a href="https://www.logicbus.com.mx/presion-diferencial">Medici&oacute;n de presi&oacute;n diferencial</a></b></center>
    </div>
    <div  class="col-4 col-md-3 container-fluid">
      <br><br>
      <center><a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas">Ver más <br> aplicaciones</button></a></center>  
    </div>
</div>-->
<!-- BEGIN Odoo web form -->
<div class="container">
<div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
<iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
style="width:100%; min-height:1200px; border:0;">
</iframe>
</div>
</div>
<!-- END Odoo web form -->


  </div>  

</div><!--  /main -->

<?
 abajo();
?>
<script type="text/javascript">
   $(function() {
    var Accordion = function(el, multiple) {
      this.el = el || {};
      // more then one submenu open?
      this.multiple = multiple || false;
    
      var dropdownlink = this.el.find('.dropdownlink');
      dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})

   
 </script>
</body>
</html>
