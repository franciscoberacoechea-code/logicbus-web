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


<title>Pesaje de dosificaci&oacute;n | Celdas de carga | Logicbus</title>

<meta name="description" content="Implementa celdas de carga. En esta guia rapida encontraras opciones de como implementar una celda de carga de Serie LLB  por cada junta de soporte emparejada con Instrumentación, Serie IAA, IHH500 e IPM650 con instrumentación que Logicbus tiene disponible para que desarrolles tu proyecto">

<meta name="keywords" content="Aplicaciones agricultura, celdas de carga, futek, Logicbus, prueba de resistencia, serie LLB, modulo usb, IHH500, Mexico, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
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
.iac200{
  margin-bottom: 20%;
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

<div id="main" class="container productos_page" >
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de carga
    <br>

<?
  menuMovilApp();
 // menuPC();
?>

  <h1 class="my-5"><b class="margen">Pesaje de dosificaci&oacute;n</b></h1>
<center><h2><b>Aplicación de Celda de carga</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
Conocida por sus capacidades de prueba de resistencia, la serie de botones de carga de FUTEK se puede utilizar en la fabricación de aplicaciones de pesaje por lotes.
 </p>

<img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/agricultura/Pesaje-de-lotes.jpg" alt="Celda de carga-Pesaje-de-dosificacion" width="50%">
<br>
<div>
  <p><b>C&oacute;mo funciona:</b><br></p>
  <ol>
    <li>Utilizando botones de carga, se puede monitorear el contenido de un silo / contenedor industrial a pequeña escala.</li>
    <li>Instalados en la base de cada pata del contenedor, estos botones de carga basados ​​en compresión medirán el contenido del contenedor a medida que aumenta y disminuye.</li>
    <li>Como celda de carga en línea, la serie LLB de FUTEK requiere una carga vertical directa en su superficie de carga, el botón, para obtener mediciones precisas.</li>
    <li>Los datos de cada celda de carga se pueden recopilar y transmitir a través de una caja de conexiones sumadora, como la caja de conexiones sumadora de 2–4 canales <strong><a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank">IAC200</a></strong> de FUTEK, a una pantalla digital. Tanto la pantalla de montaje en panel <strong><a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank">IPM650</a></strong> de FUTEK como la pantalla de mano digital inteligente <strong><a href="https://tienda.logicbus.com.mx/Display-port%C3%A1til_c_1664.html" target="_blank">IHH500</a></strong> son compatibles con esta plataforma de prueba.</li>
    <li>Al equipar la plataforma con el <strong><a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank">IPM650</a></strong> o <strong><a href="https://tienda.logicbus.com.mx/Display-port%C3%A1til_c_1664.html" target="_blank">IHH500</a></strong> de FUTEK, se pueden utilizar alarmas y / o relés para automatizar el proceso.</li>
    <li>Los operadores también pueden utilizar las soluciones USB de FUTEK, un módulo USB por celda de carga, para transmitir los datos directamente a una PC.</li>
    <li>El software de prueba y medición SENSIT ™ de FUTEK puede mejorar la plataforma de prueba, lo que permite al operador la capacidad de recopilar y representar gráficamente en vivo todos los datos.</li>
  </ol>
    
</div><br>
 <p><b>Productos en uso:</b>&nbsp;
Se utiliza un botón de carga (Serie LLB) por cada junta de soporte emparejada con Instrumentación (Soluciones USB, Serie IAA, <strong><a href="https://tienda.logicbus.com.mx/Display-port%C3%A1til_c_1664.html" target="_blank">IHH500</a></strong> e <strong><a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank">IPM650</a></strong>). 
</p>
</article>

</div>

<section id="equipos-implementados" class="img-fluid container-fluid ">
          <div class="row img-fluid"  alt="Responsive image">
             <div class="col-3 col-md-3 container img-fluid">
                <a href="https://tienda.logicbus.com.mx/Display-port%C3%A1til_c_1664.html" target="_blank"><img
                        src="imagenes/36/ihh500-futek.jpg" alt="Aplicacion en la agricultura, Pesaje de dosificacion"
                        width="80%"></a><br>
                <center><a href="https://tienda.logicbus.com.mx/Display-port%C3%A1til_c_1664.html" target="_blank">IHH500</a></center><br><br>
            </div>
            <div class="col-3 col-md-3 container img-fluid">
                <a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank"><img src="imagenes/36/ipm650-futek.jpg" alt=""
                        width="80%"></a><br>
                <center><a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank">IPM650</a></center><br><br>
            </div>
            <div class="col-3 col-md-3 container img-fluid">
             <a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank"><img class="" src="imagenes/36/iac200-futek.jpg" alt="" width="80%"></a><br>
          <center><a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank">IAC200</a></center><br><br>
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
