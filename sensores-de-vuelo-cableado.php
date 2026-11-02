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

<title>Sensores de vuelo cableado</title>

<meta name="description" content="Un sistema “Fly by Wire” es un sistema de vuelo automático que procesa el comando que realiza el piloto o la computadora y envía los comandos correspondientes a los actuadores del control de vuelo. Este arreglo automático reemplaza los controles clásicos mecánicos e hidráulicos.">

<meta name="keywords" content="Sensores de presión, agricultura, aplicación, Logicbus, futek, Mexico, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">


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

ol{
color: black;
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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de sensores de torque
  <h1 class="my-5"><b class="margen">Sensores de vuelo cableado</b></h1>
<center><h2><b>Celdas de carga</b></h2></center><br>

<div class="part1">
        <article>
            <p align="justify"><b>Resumen de la aplicaci&oacute;n:</b>
              Un sistema “Fly by Wire” es un sistema de vuelo automático que procesa el comando que realiza el piloto o la computadora y envía los comandos correspondientes a los actuadores del control de vuelo. Este arreglo automático reemplaza los controles clásicos mecánicos e hidráulicos.<br> 
              La computadora de control monitorea los sensores durante el vuelo para hacer ajustes automáticos.
            </p>
            <p align="justify">
              <b>¿Cómo se utilizan los sensores de fuerzas en sistemas FbW?</b>
              Los sensores de fuerza multiaxiales se utilizan frecuentemente en pruebas de vuelo para validar el sistema de control que se diseña con base en  las leyes de control para vuelos. Las celdas de carga y sensores multiaxiales se agregan al sistema de control durante la verificación y validación para calibrar los parámetros de control.
            </p>
            <center><img src="imagenes/36/diagramas/desarrollo-de-productos-y-oem/sensores-de-vuelo-cableado.png" alt="Sensores de vuelo cableado" width="60%"></center>

            <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
                <ol>
                  <li>Control lateral: Durante la fase de validación, el sensor de fuerza multiaxial <strong><a href="https://tienda.logicbus.com.mx/MAU300_c_1948.html" target="_blank">MAU300</a></strong> se instala para asegurar que el mecanismo de control lateral esté funcionando correctamente.</li>
                  <li>Yoke: Los pilotos utilizan el control de columna (yoke) para guiar la altura e inclinación del avión. Al rotar el yoke, el piloto maniobra los giros del avión. Para asegurar el correcto funcionamiento del yoke se instala un sensor multiaxial <strong><a href="https://tienda.logicbus.com.mx/MBA500_c_1950.html" target="_blank">MBA500</a></strong> que pueda medir Mz (giro) y Fz (inclinación).</li>
                  <li>Controlador de aceleración: el nanosensor QLA414 o el sensor <strong><a href="https://tienda.logicbus.com.mx/FSH04633_p_31692.html" target="_blank">LMD300</a></strong> se utiliza en los botones actuadores para controlar la presión que puede ejercer el piloto.</li>
                  <li>Pedales: Al utilizar la celda tipo pedal <strong><a href="https://tienda.logicbus.com.mx/LAU220_c_1820.html" target="_blank">LAU220</a></strong> podemos auditar la presión que el piloto ejerce sobre el pedal y asegurarnos de que se dirige correctamente.</li>
                  <li>Actuadores de control para superficies: Se puede utilizar la celda LCB para controlar la fuerza que se ejerce sobre la superficie y colocar un actuador en respuesta.</li>
                </ol>
            </div>

            <p><b>Productos en uso:</b>&nbsp;
              <ul>
                <li>Celda de carga para engranajes <strong><a href="https://tienda.logicbus.com.mx/MAU300_c_1948.html" target="_blank">MAU300</a></strong></li>
                <li>Sensor biaxial para torque y empuje <strong><a href="https://tienda.logicbus.com.mx/MBA500_c_1950.html" target="_blank">MBA500</a></strong></li>
                <li>Nanosensor QLA414</li>
                <li>Sensor de agarre <strong><a href="https://tienda.logicbus.com.mx/FSH04633_p_31692.html" target="_blank">LMD300</a></strong></li>
                <li>Sensor de pedal <strong><a href="https://tienda.logicbus.com.mx/LAU220_c_1820.html" target="_blank">LAU220</a></strong></li>
                <li>Celda de carga tipo barra <strong><a href="https://tienda.logicbus.com.mx/LCB400_c_1836.html" target="_blank">LCB400</a></strong></li>
              </ul>
            </p>
        </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
        <div class="row img-fluid" alt="Responsive image">
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/MBA500_c_1950.html" target="_blank">
              <center><img src="imagenes/36/mba500-futek.jpg" alt="Producto MBA500" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/MBA500_c_1950.html" target="_blank">MBA500</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/QSH02089_p_31691.html" target="_blank">
              <center><img src="imagenes/36/qma148-futek.jpg" alt="Producto QMA148" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/QSH02089_p_31691.html" target="_blank">QMA148</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/FSH04633_p_31692.html" target="_blank">
              <center><img src="imagenes/36/lmd300-futek.jpg" alt="Producto LMD300" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/FSH04633_p_31692.html" target="_blank">LMD300</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/LAU220_c_1820.html" target="_blank">
              <center><img src="imagenes/36/lau220-futek.jpg" alt="Producto LAU220" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/LAU220_c_1820.html" target="_blank">LAU220</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/LCB400_c_1836.html" target="_blank">
             <center><img src="imagenes/36/LCB400.jpg" alt="Producto LCB400" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/LCB400_c_1836.html" target="_blank">LCB400</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/MAU300_c_1948.html" target="_blank">
               <center><img src="imagenes/36/mau300-futek.jpg" alt="Producto MAU300" width="80%"></a><br>
             <a href="https://tienda.logicbus.com.mx/MAU300_c_1948.html" target="_blank">MAU300</a></center><br><br>
          </div>
        </div>
    </section>
    <br>

    
</div>
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


<br><br>



  </div>  

</div><!--  /main -->

<?
 abajo();
?>

</body>
</html>
