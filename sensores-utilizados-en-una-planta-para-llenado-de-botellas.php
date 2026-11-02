<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

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


<title>Sensores utilizados en una planta para llenado de botellas | Celdas de carga | Logicbus</title>

<meta name="description" content="Uno de los mayores retos en la automatizaci&oacute;n, en la producci&oacute;n de alimentos, bebidas, medicamentos o qu&iacute;micos, es asegurarse de que los empaques o las botellas llevan exactamente los pesos que se esperan para cumplir con los requerimientos de regulaci&oacute;n.">

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
  <h1 class="my-5"><b class="margen">Sensores utilizados en una planta para llenado de botellas</b></h1>
<center><h2><b>Aplicaci&oacute;n de Celda de carga</b></h2></center><br>

<div class="part1">
        <article>
            <p><b>Resumen de la aplicaci&oacute;n:</b>
                Uno de los mayores retos en la automatización, en la producción de alimentos, bebidas, medicamentos o químicos, es asegurarse de que los empaques o las botellas llevan exactamente los pesos que se esperan para cumplir con los requerimientos de regulación.
            </p>
            <p>Como es difícil contar la cantidad de fluído que se introduce a una botella, el método más popular para regular estos dispensadores es mediante el peso. Para estos casos la mejor recomendación es utilizar una celda de carga de alta precisión.</p>

            <img src="imagenes/36/diagramas/automatizacion/llenado-automatico-de-botellas.jpg" alt="Sensores utilizados en una planta para llenado de botellas" width="50%">

            <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
              <ol>
                <li style="color: black;">Una celda de carga de la serie <strong><a href="https://tienda.logicbus.com.mx/LSM300_c_1645.html" target="_blank">LSM</a></strong> se monta en línea debajo de la plataforma que soporta al contenedor que se llenará.</li>
                <li style="color: black;">A medida que se llena el contenedor, la celda de carga obtiene los datos de pesaje sobre el fluido que se está dispensando.</li>
                <li style="color: black;">Esa señal puede enviarse a un controlador digital, o un acondicionador de señal análogo de la familia <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> para enviarse a un PLC o tarjeta de adquisición de datos.</li>
                <li style="color: black;">El PLC lee la señal y apaga el dispensador al llegar al peso correcto.</li>
                <li style="color: black;">Adicionalmente, la celda de carga tiene una protección contra sobrecarga para que el sensor no se afecte por casos imprevistos.</li>
                <li style="color: black;">El nivel de precisión es fundamental en las aplicaciones químicas y farmacéuticas ya que las dosis en este tipo de procesos, son muy importantes para mantener un radio químico correcto.</li>
              </ol>
            </div><br>
            <p><b>Productos en uso:</b>&nbsp;
              Celda de carga familia <strong><a href="https://tienda.logicbus.com.mx/LSM300_c_1645.html" target="_blank">LSM</a></strong> con instrumentación (Tarjetas digitales, <strong><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">IPM650</a></strong>, acondicionadores <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong>).
            </p>
          </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
      <div class="row img-fluid" alt="Responsive image">
         
        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank"><img src="imagenes/36/ipm650-futek.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">IPM650</a></center><br>
        </div>

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/LSM300_c_1645.html" target="_blank"><img src="imagenes/36/lsm300-futek.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/LSM300_c_1645.html" target="_blank">LSM300</a></center>
        </div>

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank"><img src="imagenes/36/iaa-series.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">Series IAA</a></center>
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
