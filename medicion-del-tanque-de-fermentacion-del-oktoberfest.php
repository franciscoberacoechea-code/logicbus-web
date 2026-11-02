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


<title>Medici&oacute;n del tanque de fermentaci&oacute;n del Oktoberfest</title>

<meta name="description" content="Aplicación Medición del tanque de fermentaci&oacute;n del Oktoberfest en la industria de la agricultura. En esta guia rapida encontrarás opciones de como implementar una celda de carga de familia LCF con instrumentación que Logicbus tiene disponible para que desarrolles tu proyecto">

<meta name="keywords" content="Celdas de carga, agricultura, aplicación, Logicbus, futek, Mexico, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
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
  //menuPC();
?>
  <h1 class="my-5"><b class="margen">Medici&oacute;n del tanque de fermentaci&oacute;n del Oktoberfest</b></h1>
<center><h2><b>Aplicación de Celda de carga</b></h2></center><br>

<div class="part1">
        <article>
            <p><b>Resumen de la aplicaci&oacute;n:</b>
                Perfeccionar una buena cerveza requiere partes iguales de excelentes granos, así como un excelente equipo. Los recipientes de fermentación son parte integral del resultado del sabor, color y contenido de alcohol de la cerveza. Las células de carga se utilizan para controlar el contenido del tanque durante todo el proceso de elaboración.
            </p>

            <img src="imagenes/36/diagramas/agricultura/medicion-del-tanque-de-fermentacion-del-oktoberfest.jpg" alt="medicion del tanque de fermentación del oktoberfest" width="50%">

 <div>
        <p><b>C&oacute;mo funciona:</b><br></p>
        <ol>
            <li>En las cervecerías comerciales, el contenido de los tanques de fermentación (recipientes) debe medirse con precisión durante todo el período de elaboración. Estas cervecerías tienden a usar celdas de carga en la base de sus tanques para monitorear estas mediciones.</li>
            <li>En esta representación, se instalaron cuatro celdas de carga Pancake de la familia LCF en la base de cada uno de los postes del tanque.</li>
            <li>Una vez que concluye el proceso de fermentación, los cerveceros deberán drenar el tanque para continuar con el envasado de la cerveza.</li>
            <li>Cuando esto ocurre, una cantidad de líquido cuidadosamente extraída sale del tanque. Esta medida es monitoreada por las celdas de carga LCF y pasa a una caja de conexiones sumadora de 2–4 canales (<strong><a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank" target="_blank">IAC200</a></strong>).</li>
            <li>La caja de conexiones sumadora promedia la tasa de vaciado de la cerveza desde el tanque y la transmite al <strong><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank">USB520</a></strong>, que puede mostrar los datos en una PC.</li>
        </ol>
    </div>
            <p><b>Productos en uso:</b>&nbsp;
                Cuatro celdas de carga Pancake (familia LCF) emparejadas con instrumentación (<strong><a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank" target="_blank">IAC200</a></strong> y <strong><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank">USB520</a></strong>). 
            </p>
        </article>

    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
        <div class="row img-fluid" alt="Responsive image">
            <div class="col-3 col-md-3 container img-fluid">
                <center>
                  <a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank"><img src="imagenes/36/usb520-futek.jpg" alt="Productos USB520" width="80%"></a><br>
                <a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank">USB520</a></center><br><br>
            </div>
            <div class="col-3 col-md-3 container img-fluid">
                <center><a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank" target="_blank"><img src="imagenes/36/iac200-futek.jpg" alt="Productos IAC200" width="80%"></a><br>
                <a href="https://tienda.logicbus.com.mx/FSH01927_p_10161.html" target="_blank">IAC200</a></center><br><br>
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
