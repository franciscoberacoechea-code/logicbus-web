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
<title>Medición de torque a Reómetro</title>

<meta name="description" content="Determinar la viscosidad y propiedades de un fluido, como pinturas, aceites y adhesivos, requiere un reómetro. En este caso, un reómetro con un cilindro rotacional se utiliza para medir la disolución de los materiales a distintas velocidades.">

<meta name="keywords" content="aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas ">
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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de Sensores de torque e Instrumentos de medición
  <h1 class="my-5"><b class="margen">Medición de torque a Reómetro</b></h1>
<center><h2><b>Aplicación de Sensores de torque e Instrumentos de medición</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
    Determinar la viscosidad y propiedades de un fluido, como pinturas, aceites y adhesivos, requiere un reómetro. En este caso, un reómetro con un cilindro rotacional se utiliza para medir la disolución de los materiales a distintas velocidades.
</p>

<center>
  <img src="imagenes/36/diagramas/ensayo-materiales-resistencia/medicion-de-torque-a-reometro.jpg" alt="" width="50%">
</center>

          <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
              <ol>
                <li style="color: black;">Un sensor de torque a reacción <strong><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></strong> se monta debajo de un cilindro que sostiene el fluido que se analizará por el viscosímetro.</li>
                <li style="color: black;">Se coloca un huso junto al motor en el fluido.</li>
                <li style="color: black;">El Huso se coloca a una velocidad específica y el torque que se ejerce en el cilindro por el huso se mide mediante <strong><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></strong>.</li>
                <li style="color: black;">La señal del sensor <strong><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></strong> se envía al <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html">IDA100</a></strong> para lograr la comunicación con el PLC.</li>
                <li style="color: black;">Para una conexión directa a un microprocesador, el IDC305 puede utilizarse en un control de lazo cerrado.</li>
                <li style="color: black;">Si no es así, la señal del <strong><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></strong> puede ser capturada por el <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html">IDA100</a></strong>, <strong><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html">USB220</a></strong> y <strong><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html">USB520</a></strong> para procesarse y registrarse en el software Sensit.</li>
                <li style="color: black;">Esta información puede utilizarse para lograr el cumplimiento de la ASMT D562, ASTM D1084-16, ISO 3448.</li>
                <li style="color: black;">Para medir directamente puede utilizarse el sensor de torque rotativo de la serie TRS.</li>
              </ol>
            </div><br>

            <p><b>Productos en uso:</b>&nbsp;
              Un sensor de torque a reacción de la familia <strong><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></strong> con instrumentación (<strong><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html">USB220</a></strong>, <strong><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html">USB520</a></strong>, <strong><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html">IDA100</a></strong> or IDC305.
            </article>
          </div>

          <section id="equipos-implementados" class="img-fluid container-fluid ">
          <div class="row img-fluid"  alt="Responsive image">

            <div class="col-3 col-md-3 container img-fluid">
              <center><a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html"><img src="imagenes/36/TFF425-500-v2.jpg" alt="" width="52%"></a><br>
              <a href="https://tienda.logicbus.com.mx/tff425-sensor-de-torque-de-reaccion.html">TFF425</a></center><br><br>
            </div>

            <div class="col-6 col-md-3 container img-fluid">
              <center><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html"><img  src="imagenes/36/ida100-futek.jpg" alt="" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html">IDA100</a></center><br>
            </div>

            <div class="col-3 col-md-3 container img-fluid">
              <center><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html"><img src="imagenes/36/usb220-futek.jpg" alt="" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html">USB220</a></center><br><br>
            </div>

            <div class="col-3 col-md-3 container img-fluid">
              <center><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html"><img src="imagenes/36/usb520-futek.jpg" alt="" width="80%"></a><br>
              <a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html">USB520</a></center><br><br>
            </div>

        </div>

</section>
<br>

</div>


</div>


<br><br>



  </div>  

</div><!--  /main -->

<?
 abajo();
?>

</body>
</html>
