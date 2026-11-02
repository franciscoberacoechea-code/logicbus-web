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


<title>Medici&oacute;n de torque con celdas de carga</title>

<meta name="description" content="Medir el torque generado por un motor o frenos se puede lograr un sensor de torque rotativo en línea con la flecha del motor o montar el motor directamente en un sensor de torque a reacción. Sin embargo, en ocasiones ninguna de estas soluciones funciona. En estos casos se puede colocar una celda de carga y se utiliza la ecuación Torque= Fuerza x distancia">

<meta name="keywords" content="celdas de carga, agricultura, aplicacion alimenticio, Logicbus, futek, Mexico, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
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

<div id="main" class="container productos_page" >
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de carga
    <br>

<?
  menuMovilApp();
  menuPC();
?>
  <h1 class="my-5"><b class="margen">Medici&oacute;n de torque con celdas de carga
</b></h1>
<center><h2><b>Aplicación de Celda de carga</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
  Medir el torque generado por un motor o frenos se puede lograr un sensor de torque rotativo en línea con la flecha del motor o montar el motor directamente en un sensor de torque a reacción. Sin embargo, en ocasiones ninguna de estas soluciones funciona. En estos casos se puede colocar una celda de carga y se utiliza la ecuación Torque= Fuerza x distancia.
</p>

<img src="imagenes/36/diagramas/manufactura/medicion-de-torque-con-celdas-de-carga.jpg" alt="Medición de torque con celdas de carga" width="50%">

<div>
  <p><b>C&oacute;mo funciona:</b><br></p>
  <ol>
    <li style="color: black;">Un freno es colocado con un brazo de palanca.</li>
    <li style="color: black;">Se le anexa una celda de carga <strong><a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a></strong> para medir la fuerza generada sobre el brazo mientras el freno genera torque al resistirse al movimiento.</li>
    <li style="color: black;">En este escenario, la celda <strong><a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a></strong> es ideal, ya que es altamente resistente a fuerzas fuera del eje y puede resistir cambios espontáneos en la salida del motor.</li>
    <li style="color: black;">La señal de la celda <strong><a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a></strong> es amplificada a través del Amplificador analógico <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> para enviarse a una DAQ. También puede enviarse al display <strong><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">IPM650</a></strong> o registrado con el <strong><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html" target="_blank">USB220</a></strong> en una PC con el software SENSIT.</li>
    <li style="color: black;">Cualquier fuerza medida con la celda <strong><a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a></strong> puede ser multiplicada por la distancia al centro del motor para conseguir el torque.</li>
    <li style="color: black;">Esta conversión puede realizarse de forma automática con el software SENSIT.</li>
    <li style="color: black;">Adicionalmente, el amplificador configurable digital <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></strong> puede utilizarse para monitorear el torque a través del software Sensit y realizar un control de lazo cerrado.</li>
  </ol>
</div><br>

 <p><b>Productos en uso:</b>&nbsp;
  Celda de carga tipo panqueque <strong><a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a></strong> junto a instrumentación (<strong><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html" target="_blank">USB220</a></strong>, <strong><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">IPM650</a></strong>, <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></strong> ó acondicionador de señal <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong>).
</article>

</div>

<section id="equipos-implementados" class="img-fluid container-fluid ">
  <div class="row img-fluid"  alt="Responsive image">
    <div class="col-3 col-md-3 container img-fluid">
      <center>
        <a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank"><img src="imagenes/36/lcf400-futek.jpg" alt="Producto LCF400" width="70%"></a><br>
        <a href="https://tienda.logicbus.com.mx/LCF400_c_1842.html" target="_blank">LCF400</a>
      </center><br><br>
    </div>
    
    <div class="col-3 col-md-3 container img-fluid">
      <center><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html" target="_blank"><img src="imagenes/36/usb220-futek.jpg" alt="Producto USB220" width="80%"></a><br>
      <a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html" target="_blank">USB220</a></center><br><br>
    </div>

    <div class="col-3 col-md-3 container img-fluid">
      <center><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank"><img src="imagenes/36/ipm650-futek.jpg" alt="Producto IPM650" width="80%"></a><br>
      <a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">IPM650</a></center><br><br>
    </div>

    <div class="col-3 col-md-3 container img-fluid">
      <center><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank"><img src="imagenes/36/ida100-futek.jpg" alt="Producto IDA100" width="80%"></a><br>
      <a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></center>
    </div>

    <div class="col-3 col-md-3 container img-fluid">
      <center><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank"><img src="imagenes/36/iaa-series.jpg" alt="Producto IAA300" width="80%"></a><br>
      <a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">Series IAA</a></center><br><br>
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
