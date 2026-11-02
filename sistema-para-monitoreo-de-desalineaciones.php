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


<title>Sistema para monitoreo de desalineaciones - Logicbus S.A de C.V</title>

<meta name="description" content="El acceso a agua limpia es necesario para cada persona en el mundo. En muchas &aacute;reas de escasez, el agua dulce es limitada y el agua salada es abundante.">

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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Instrumentos y amplificadores
    <br>

<?
  menuMovilApp();
  menuPC();
?>
  <h1 class="my-5"><b class="margen">Sistema para monitoreo de desalineaciones</b></h1>
<center><h2><b>Aplicaci&oacute;n de Instrumentos y amplificadores</b></h2></center><br>

<div class="part1">
        <article>
            <p><b>Resumen de la aplicaci&oacute;n:</b>
              El acceso a agua limpia es necesario para cada persona en el mundo. En muchas áreas de escasez, el agua dulce es limitada y el agua salada es abundante.
            </p>
            <p>Convertir agua salada a dulce se realiza mediante un proceso de ósmosis para alta presión. Estos sistemas requieren de presión constante entregada por una bomba para mantener la integridad de la membrana y maximizar la eficiencia del sistema. Al incorporar un sensor de presión en un sistema de control a lazo cerrado, la bomba puede mantener operación constante a máxima operación.</p>

            <img src="imagenes/36/diagramas/manufactura/sistema-para-monitoreo-de-desalineaciones.jpg" alt="Sistema para monitoreo de desalineaciones" width="50%"><br>

            <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
              <ol>
                <li style="color: black;">Un sensor de presión <strong><a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank">PFT510</a></strong> se coloca entre la salida de la bomba de agua y el filtro de ósmosis invertida.</li>
    
                <li style="color: black;">La salida del sensor de presión se amplica después con el acondicionador de la serie <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> o con un <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></strong> para entregar esta señal a un PLC.</li>
              
                <li style="color: black;">El PLC regula la salida del motor, para mantener una salida de presión constante.</li>
              
                <li style="color: black;">Al mantener una presión constante y consistente, la vida útil del filtro se maximiza.</li>
              
                <li style="color: black;">Adicionalmente con el <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></strong> se puede ajustar y monitorear la señal con el software Sensit.</li>
              </ol>

            </div><br>
            <p><b>Productos en uso:</b>&nbsp;
              Sensor de presión <strong><a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank">PFT510</a></strong> de Futek con instrumentación (Acondicionadores de señal Serie <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> o <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">IDA100</a></strong>).
            </p>
          </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
      <div class="row img-fluid" alt="Responsive image">

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank"><img src="imagenes/36/pft510-futek.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank">PFT510</a></center><br>
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
