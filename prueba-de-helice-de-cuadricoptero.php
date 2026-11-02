<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
<title>prueba-de-helice-de-cuadricoptero</title>

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
  <h1 class="my-5"><b class="margen">Prueba de h&eacute;lice de cuadric&oacute;ptero</b></h1>
<center><h2><b>Prueba de h&eacute;lice de cuadric&oacute;ptero</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
los cuadric&oacute;pteros y drones de nivel profesional y aficionado se est&aacute;n volviendo m&aacute;s populares en el mercado. un cuadric&oacute;ptero, por definici&oacute;n, utiliza sus cuatro h&eacute;lices para generar elevaci&oacute;n de aire y cambio de direcci&oacute;n. las h&eacute;lices est&aacute;n dise&ntilde;adas para trabajar en conjunto entre s&iacute; para garantizar que no haya desequilibrio de torque que haga que el veh&iacute;culo gire fuera de control.
</p>

<img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/prueba-de-helice-de-cuadricoptero.png" alt="" width="50%">

 <p><b>Productos en uso:</b>&nbsp;
Sensor biaxial de torque y empuje MBA500 junto con instrumentaci&oacute;n (USB220 y amplificador IAA).
</article>

</div>





<section id="equipos-implementados" class="img-fluid container-fluid ">
          <div class="row img-fluid"  alt="Responsive image">
            <div class="col-6 col-md-3 container img-fluid">
        <img  src="https://tienda.logicbus.com.mx/assets/images/36/thumbnails/FSH04259-1_thumbnail.jpg" alt="Una-celda-de-carga-OEM-LSM250" width="80%"><br>
        <center><a href="https://tienda.logicbus.com.mx/FSH04259_p_14592.html">MBA500</a></center><br>
            </div>
            <div class="col-3 col-md-3 container img-fluid">
                    <img src="https://tienda.logicbus.com.mx/assets/images/36/thumbnails/FSH03927_thumbnail.jpg" alt="" width="80%"><br>
          <center><a href="https://tienda.logicbus.com.mx/FSH03927_p_14415.html">USB220</a></center><br><br>
            </div>
        </div>

</section>
<br>

<div>
  <p><b>C&oacute;mo funciona:</b><br></p>
  <ol>
<li style="color: black;">Para caracterizar el empuje y torque generados por cada motor y h&eacute;lice, se fija un MBA500 en el extremo del motor.</li>
<li style="color: black;">Cuando el motor est&aacute; encendido y girando, el empuje de las h&eacute;lices se medir&aacute; mediante el canal de Fz del MBA500 y el torque de retroceso del motor se medir&aacute; mediante el canal Mz mientras se mantiene una diafon&iacute;a baja.</li>
<li style="color: black;">Este sensor multiaxial, cuando se usa con un USB220 permite una configuraci&oacute;n port&aacute;til donde el aficionado o ingeniero de prueba pueden usar una computadora port&aacute;til para analizar los datos en vivo de una prueba tanto en un entorno exterior o un entorno interior m&aacute;s controlado.</li>

	
	
	
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
