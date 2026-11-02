<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
<title>prueba-de-tunel-de-viento</title>

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
  <h1 class="my-5"><b class="margen">Prueba de t&uacute;nel de viento</b></h1>
<center><h2><b>Prueba de t&uacute;nel de viento</b></h2></center><br>

<div class="part1">

<article>
  <p><b>Resumen de la aplicaci&oacute;n:</b>
Los t&uacute;neles de viento se utilizan en la investigaci&oacute;n aerodin&aacute;mica para estudiar los efectos del aire que pasa junto a objetos s&oacute;lidos denominados s&oacute;lidos. Se monta un modelo en un sensor triaxial estacionario que proporciona la medici&oacute;n de la presi&oacute;n ejercida sobre un objeto en prueba.
</p>

<img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/prueba-de-tunel-de-viento.png" alt="" width="50%">

 <p><b>Productos en uso:</b>&nbsp;
Celda de carga triaxial (MTA400) junto con instrumentaci&oacute;n (amplificador de la serie IAA y soluciones USB).
</article>

</div>





<section id="equipos-implementados" class="img-fluid container-fluid ">
          <div class="row img-fluid"  alt="Responsive image">
            <div class="col-6 col-md-3 container img-fluid">
        <img  src="https://tienda.logicbus.com.mx/assets/images/36/thumbnails/FSH04139-1_thumbnail.jpg" alt="Una-celda-de-carga-OEM-LSM250" width="80%"><br>
        <center><a href="https://tienda.logicbus.com.mx/FSH04139_p_18525.html">MTA400</a></center><br>
            </div>
        </div>

</section>
<br>

<div>
  <p><b>C&oacute;mo funciona:</b><br></p>
  <ol>
    
<li style="color: black;">Los investigadores usan t&uacute;neles de viento para aprender m&aacute;s sobre la relaci&oacute;n entre el flujo del aire y un objeto. Se necesitan modelos de medici&oacute;n precisos para registrar con precisi&oacute;n los hallazgos.</li>
<li style="color: black;">Los sensores de t&uacute;nel de viento MTA400 se fijan en un campo de pruebas para cuantificar la fuerza aplicada en un modelo. El modelo se sujeta a la celda de carga triaxial que registra la medici&oacute;n precisa de la presi&oacute;n en respuesta a las condiciones de la detecci&oacute;n del t&uacute;nel de viento.</li>
<li style="color: black;">Estas medidas de fuerza se pueden transmitir a una PC utilizando las soluciones USB de FUTEK.</li>
<li style="color: black;">Una vez transmitidos a una PC, estos datos pueden ser monitoreados en el software de prueba y medici&oacute;n SENSIT de FUTEK. SENSIT puede monitorear hasta 16 canales de lectura de medici&oacute;n, as&iacute; como gr&aacute;ficos en vivo y registro de datos.</li>

	
	
	
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
