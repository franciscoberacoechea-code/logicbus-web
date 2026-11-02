<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
<title>Presi&oacute;n diferencial</title>

<meta name="description" content="En algunas aplicaciones industriales, en lugar de un solo transductor de presión recibiendo información de las mediciones del proceso, se utilizan dos en diferentes lugares y se realiza una comparación.">

<meta name="keywords" content="Sensores de presión, agricultura, aplicación, Logicbus, futek, Mexico, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>



<link rel="canonical" href="https://www.logicbus.com.mx/marcas-logicbus">
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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de sensores de torque
  <h1 class="my-5"><b class="margen">Presi&oacute;n diferencial</b></h1>
<center><h2><b>Instrumentos de Medición</b></h2></center><br>

<div class="part1">
        <article>
            <p><b>Resumen de la aplicaci&oacute;n:</b>
                En algunas aplicaciones industriales, en lugar de un solo transductor de presión recibiendo información de las mediciones del proceso, se utilizan dos en diferentes lugares y se realiza una comparación.<br>
                Al utilizar dos sensores podemos realizar una resta de señales para lograr medir la presión diferencial y el nivel, flujo e incluso densidad.<br> 
                La medición de presión al fondo del contenedor es la presión total que ejerce el fluido en el contenedor y el gas sobre él. Por lo tanto podemos medir la presión del fluido si restamos la presión que ejerce el gas sobre él.

            </p>

            <center><img src="imagenes/36/diagramas/automatizacion/presion-diferencial.png" alt="presión diferencial" width="60%"></center>

            <div>
              <p><b>C&oacute;mo funciona:</b><br></p>
                <ol>
                  <li>En esta aplicación, los ingenieros y operadores instalaron dos sensores de presión diferencial a miniatura para monitorear el factor de líquido y gas en el tanque.</li>
                  <li>Como se observa en la ilustración, la presión del fluido en el tanque es de 300 PSI, mientras que la presión de los gases emitidos es de 100 PSI.</li>
                  <li>Estas medidas se envían a la PC a través de las soluciones USB  y el software SENSIT.</li>
                  <li>En este caso específico, el software Sensit calculará la presión diferencial de 200 PSI.</li>
                </ol>
            </div><br>

            <p><b>Productos en uso:</b>&nbsp;
              Dos sensores de presión miniatura con soluciones USB y el software SENSIT para medición.
            </p>
        </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">
        <div class="row img-fluid" alt="Responsive image">
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank">
              <img src="imagenes/36/pft510-futek.jpg" alt="Producto PFT510" width="80%"></a><br>
              <center><a href="https://tienda.logicbus.com.mx/Sensores-de-Presi%C3%B3n_c_3795.html" target="_blank">PFT510</a></center><br><br>
          </div>
          <div class="col-3 col-md-3 container img-fluid">
            <a href="https://tienda.logicbus.com.mx/M%C3%B3dulos-USB_c_1662.html" target="_blank">
              <img src="imagenes/36/modulos-usb-futek.jpg" alt="Producto PFT510" width="80%"></a><br>
              <center><a href="https://tienda.logicbus.com.mx/M%C3%B3dulos-USB_c_1662.html" target="_blank">Series USB</a></center><br><br>
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
