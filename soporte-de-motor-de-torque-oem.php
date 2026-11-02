<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
<title>soporte-de-motor-de-torque-oem</title>

<meta name="description" content="">

<meta name="keywords" content="">
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

.part1{
border-bottom: 2px dotted darkgray;
text-align: justify;
overflow: hidden;
margin-bottom: 5%;
}img{
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
.part2{
text-align: justify;
overflow: hidden;
}

.image2{
  width: 50%;
  float: right;
}img{
    display: block; 
    margin: 0 auto;
}

.text2{
  width: 50%;
  float: left;
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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de sensores de torque
  <h1 class="my-5"><b class="margen">Soporte de motor de torque OEM</b></h1>
<center><h2><b>Soporte de motor de torque OEM</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
Los sensores de torque de reacci&oacute;n son usados frecuentemente como herramientas de auditor&iacute;a y monitorizaci&oacute;n. Esta aplicaci&oacute;n utiliza serie TFF de FUTEK (sensores de torque OEM) para medir el torque de reacci&oacute;n producido por un motor el&eacute;ctrico CC en miniatura (con escobillas/ sin escobillas) o de CA utilizando un amplificador de sensores de torque.
</p>

<img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/soporte-de-motor-de-torque-oem.png" alt="" width="50%">

 <p><b>Productos en uso:</b>&nbsp;
Un sensor de torque de reacci&oacute;n (serie TFF) junto con instrumentaci&oacute;n (amplificador analogico IAA o el amplificador digital configurable IDA100).
 </article>

</div>





<section id="equipos-implementados" class="img-fluid container-fluid ">
          <div class="row img-fluid"  alt="Responsive image">
            <div class="col-6 col-md-3 container img-fluid">
        <img  src="https://tienda.logicbus.com.mx/assets/images/36/thumbnails/FSH03912_thumbnail.jpg" alt="Una-celda-de-carga-OEM-LSM250" width="80%"><br>
        <center><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html">IDA100</a></center><br>
            </div>
        </div>

</section>
<br>

<div>
  <p><b>C&oacute;mo funciona:</b><br></p>
  <ol>
    
<li style="color: black;">En esta aplicaci&oacute;n, un sensor de torque de reacci&oacute;n es montado en el motor el&eacute;ctrico con el eje del motor pasando libremente a trav&eacute;s del sensor de torque. </li>
<li style="color: black;">Para un rendimiento &oacute;ptimo del sensor de torque de reacci&oacute;n, el Extremo libre del sensor, como se muestra en la imagen, debe estar fijo.</li>
<li style="color: black;">La serie TFF mide el torque de reacci&oacute;n y momentos de torsi&oacute;n creados por el motor el&eacute;ctrico en miniatura durante el funcionamiento </li>
<li style="color: black;">Estas medidas pueden ser amplificadas con la serie IAA o IDA100 para ser usado con PLCs y dispositivos de adquisici&oacute;n de datos o transmitido a una PC con IDA100 USB. </li>
<li style="color: black;">Adicionalmente, con IDA100, los operadores pueden ver y registrar los datos en tiempo real mediante el software de prueba y medici&oacute;n SENSIT de FUTEK.</li>

	
	
	
  </ol>
    
</div><br>


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
