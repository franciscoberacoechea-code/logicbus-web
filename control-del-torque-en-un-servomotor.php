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


<title>Control del torque en un servomotor | Celdas de carga | Logicbus</title>

<meta name="description" content="Los sistemas automatizados en muchas industrias dependen de servomotores para monitorear el movimiento lineal y rotacional. Las p&eacute;rdidas por fricci&oacute;n y los cambios de velocidad hacen necesaria la inclusi&oacute;n de un sistema de lazo cerrado">

<meta name="keywords" content="Celdas de carga, agricultura, aplicación, Logicbus, futek, Mexico, Guadalajara, Automatizacion, Proyecto, serie LSB, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>


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

.part1{
border-bottom: 2px dotted darkgray;
text-align: justify;
overflow: hidden;
margin-bottom: 5%;
}

.part1 img{
    display: block; /*para centrar las imágenes*/
    margin: 0 auto;
}

.centro{
  text-align: center;
}
.image1{
margin-left: 20px;
margin-bottom: 10%;
}

ol{
color: black;
}

.seccion-aplicaiones{
  padding: 5px;
}

.seccion-aplicaiones2{
  padding: 10px 5px 10px 5px;
}
.margen{
  border-bottom: 6px solid #ff7e00; 

 }

  </style>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 seccionSoluciones();
?>

<div id="main" class="container productos_page" >
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de carga
    <br>

<?
  menuMovilApp();
  menuPC();
?>
  <h1 class="my-5"><b class="margen">Control del torque en un servomotor</b></h1>
<center><h2><b>Aplicaci&oacute;n de Sensor de torque</b></h2></center><br>

<div class="part1">
        <article>
            <p><b>Resumen de la aplicaci&oacute;n:</b>
              Los sistemas automatizados en muchas industrias dependen de servomotores para monitorear el movimiento lineal y rotacional. Las pérdidas por fricción y los cambios de velocidad hacen necesaria la inclusión de un sistema de lazo cerrado. Para lograr esto, se coloca un sensor de torque a reacción entre la caja de engranajes del servo y su plataforma de montaje.
            </p>

            <img src="imagenes/36/diagramas/manufactura/control-del-torque-en-un-servomotor.png" alt="Control del torque en un servomotor" width="50%"><br>

            <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
              <ol>
                <li style="color: black;">Se monta un sensor de torque a reacción modelo <strong><a href="https://tienda.logicbus.com.mx/tff500-sensor-de-torque-de-reaccion.html" target="_blank">TFF500</a></strong> entre una caja de engranajes y su plataforma de montaje.</li>
                <li style="color: black;">A medida que el servo se activa, el torque producido es transmitido al sensor <strong><a href="https://tienda.logicbus.com.mx/tff500-sensor-de-torque-de-reaccion.html" target="_blank">TFF500</a></strong>.</li>
                <li style="color: black;">El acondicionador de señal <strong><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank">IAA</a></strong> amplifica la señal para que pueda ser recolectada por un PLC.</li>
              </ol>
            </div><br>
            <p><b>Productos en uso:</b>&nbsp;
              Un sensor de torque a reacción <strong><a href="https://tienda.logicbus.com.mx/tff500-sensor-de-torque-de-reaccion.html" target="_blank">TFF500</a></strong> con agujero central junto a un acondicionador de señal <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> para controlar el torque del servo.
            </p>
          </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
      <div class="row img-fluid" alt="Responsive image">

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/tff500-sensor-de-torque-de-reaccion.html" target="_blank"><img src="imagenes/36/tff500-futek.jpg" alt="" width="65%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/tff500-sensor-de-torque-de-reaccion.html" target="_blank">TFF500</a></center><br>
        </div>

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank"><img src="imagenes/36/ida100-futek.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></center><br>
        </div>

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank"><img src="imagenes/36/iaa-series.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">Series IAA</a></center><br>
        </div>

      </div>
    </section>
    <br>
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


</div>


<br><br>



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
