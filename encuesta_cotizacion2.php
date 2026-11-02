<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><title>Logicbus Encuesta de Calidad</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Controladores, Inteligentes, PLC, LBAF-1320MR-E, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas">
  <meta name="description" content="Logicbus - Encuesta de satisfaccion para cotizaciones enviadas"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex,nofollow">
<link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="libreria/estilos.css" rel="stylesheet" >
    
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script src="libreria/formulario_encuesta.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript">
function menu_actual(){
  document.getElementById("encuesta").className = "dropdown active";
			};
</script>

</head>
<body onLoad="menu_actual();">
<?
 arriba();
?>
<br>
<br>
<div align="" class="main" >
  <div class="container">

<?
/* 
Se leen la variable de $formulario y cotizacion, dando lugar a los siguientes casos.
Si, respuesta entonces se envia el correo.
Si, cotizacion se muestra el formulario sin el campo de cotizacion.
Si, no cotizacion se muestra el formulario con el campo de cotizacion.
*/
$formulario=false;
$cotizacion=false;

$formulario=$_POST['formulario'];
$cotizacion=$_GET['ipbx'];

/*Esta seciion se ejecutara una vez que se haya enviado el formulario para poder enviar el correo*/
$realizado="";
$ipbz="";
if ($formulario=="Enviar")
{
$Q1=$_POST['Q1'];
$TQ1=$_POST['TQ1'];
$Q2=$_POST['Q2'];
$TQ2=$_POST['TQ2'];
$Q3=$_POST['Q3'];
$TQ3=$_POST['TQ3'];
$Q4=$_POST['Q4'];
$TQ4=$_POST['TQ4'];
$Q5=$_POST['Q5'];
$TQ5=$_POST['TQ5'];
$Q6=$_POST['Q6'];
$TQ6=$_POST['TQ6'];
$Q7=$_POST['Q7'];
$TQ7=$_POST['TQ7'];
$Q8=$_POST['Q8'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$autoriza=$_POST['autoriza'];
$ipbz=$_POST['ipbz'];
if($cotizacion!=="" && $cotizacion!==false)
{
	//echo "Si entra";
$cotizacion=$_POST['cotizacion'];
  if($ipbz=="TXZ")
  {
     $cotizacion="https://podio.com/logicbuscom/proceso-de-venta/apps/cotizaciones/items/".$cotizacion;   
  }
 // echo $cotizacion;
  //exit();
}
else
{
  $cotizacion=$_POST['cotizacion'];	
  $cotizacion="https://podio.com/logicbuscom/proceso-de-venta/apps/cotizaciones/items/".$cotizacion;
}


$asunto="Cotizacion: ".$cotizacion;


/*
Comenzamos con el codigo para calcular la calificacion
*/

$C1="Excelente";
$C2="Bueno";
$C3="Regular";
$C4="Malo";
$C5="No Aplica";

$C6="Bueno";
$C7="Adecuado";
$C8="Tardado";
$C9="Muy Tardado";

$C10="Bajo";
$C11="Adecuado";
$C12="Excesivo";

$C13="Ya lo compre";
$C14="Si";
$C15="Probablemente";
$C16="No";

$R1=0;
$R2=0;
$R3=0;
$R4=0;
$R5=0;
$R6=0;
$R7=0;
$R8=0;

//Se obtiene la calificacion para la pregunta 1 

if($Q1==$C1)
  $R1=100;
if($Q1==$C2)
  $R1=80;
if($Q1==$C3)
  $R1=60;
if($Q1==$C4)
  $R1=40;

//Se obtiene la calificacion para la pregunta 2 
  
if($Q2==$C1)
  $R2=100;
if($Q2==$C2)
  $R2=80;
if($Q2==$C3)
  $R2=60;
if($Q2==$C4)
  $R2=40;  

//Se obtiene la calificacion para la pregunta 3

if($Q3==$C1)
  $R3=100;
if($Q3==$C2)
  $R3=80;
if($Q3==$C3)
  $R3=60;
if($Q3==$C4)
  $R3=40;  

//Se obtiene la calificacion para la pregunta 4

if($Q4==$C6)
  $R4=100;
if($Q4==$C7)
  $R4=80;
if($Q4==$C8)
  $R4=60;
if($Q4==$C9)
  $R4=40;  
  
//Se obtiene la calificacion para la pregunta 5

if($Q5==$C10)
  $R5=100;
if($Q5==$C11)
  $R5=80;
if($Q5==$C12)
  $R5=60;
  
//Se obtiene la calificacion para la pregunta 6

$R6 = ((int) $Q6) * 10;

//Se obtiene la calificacion para la pregunta 7

if($Q7==$C1)
  $R7=100;
if($Q7==$C2)
  $R7=80;
if($Q7==$C3)
  $R7=60;
if($Q7==$C4)
  $R7=40;

//Se obtiene la calificacion para la pregunta 8

if($Q8==$C13)
  $R8=100;
if($Q8==$C14)
  $R8=80;
if($Q8==$C15)
  $R8=60;
if($Q8==$C16)
  $R8=40;

if($Q3==$C5)
  $resultado=($R1+$R2+$R4+$R5+$R6+$R7+$R8)/7;
else
  $resultado=($R1+$R2+$R3+$R4+$R5+$R6+$R7+$R8)/8;


//Se define la clasificacion de la encuesta

if($resultado >= 95)
  $clasificacion="Excelente";
if($resultado >= 80 && $resultado < 95)
  $clasificacion="Bueno";
if($resultado >= 60 && $resultado < 80)
  $clasificacion="Regular";
if($resultado < 60)
  $clasificacion="Malo";
  
if($R6 >= 90)
  $cR6="Excelente";
if($R6 >= 80 && $R6 < 90)
  $cR6="Bueno";
if($R6 >= 70 && $R6 < 80)
  $cR6="Regular";
if($R6 < 70)
  $cR6="Malo";


$body='La atencion de nuestros asesores de Servicio al Cliente : '.$Q1."\r\n\r\n".
'Comentarios extra acerca de la atencion : '.$TQ1."\r\n\r\n".
'El tiempo de respuesta en el proceso de Cotizacion : '.$Q2."\r\n\r\n".
'Comentarios extra acerca del tiempo de respuesta : '.$TQ2."\r\n\r\n".
'Las alternativas de equipo que le ofrecio el asesor de Atencion a Clientes : '.$Q3."\r\n\r\n".
'Comentarios extra acerca de las alternativas ofrecidas : '.$TQ3."\r\n\r\n".
'Que le parece el tiempo de entrega de los productos : '.$Q4."\r\n\r\n".
'Comentarios extra acerca del tiempo de entrega de los productos : '.$TQ4."\r\n\r\n".
'Como Considera el precio de los productos : '.$Q5."\r\n\r\n".
'Comentarios extra acerca del precio de los productos : '.$TQ5."\r\n\r\n".
'Como considera el servicio recibido en Logicbus : '.$R6."\r\n\r\n".
'Servicio : '.$cR6."\r\n\r\n".
'Comentarios extra acerca del servicio recibido : '.$TQ6."\r\n\r\n".
'Como considera la calidad de los equipos : '.$Q7."\r\n\r\n".
'Comentarios extra acerca de la calidad de los equipos : '.$TQ7."\r\n\r\n".
'Esta dispuesto a comprar el equipo : '.$Q8."\r\n\r\n".
'Nombre : '.$nombre."\r\n\r\n".
'Correo Electronico : '.$correo."\r\n\r\n".
'Podemos utilizar sus comentarios en nuestra pagina : '.$autoriza."\r\n\r\n".
'Cotizacion : '.$cotizacion."\r\n\r\n".
'Calificacion : '.$resultado."\r\n\r\n".
'Clasificacion de la Calificacion de Encuesta : '.$clasificacion."\r\n\r\n";


$correo_a_enviar="cotizaciones-encuesta-de-satisfaccion.fb5dccf6@atencion-a-clientes.logicbuscom.podio.com";


$cabeceras = "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(mail($correo_a_enviar,$asunto,$body,$cabeceras))
{
	$realizado="si";
	mail('it@logicbus.com',$asunto,$body,$cabeceras);

}
}
?>


<div id="fatherformulario" class="row justify-content-center" >
<div id="divformulario" class="col-12 col-md-6"  >

  <div class="card">
    <div class="card-body">
      
<?
  if($realizado=="si")
  {
     echo "<br><h4>Muchas gracias por su correo</h4><br/><br/>";
  }
  else
  {
?>
<form action="" method="post" onsubmit="return valforms(this)" class="form" style="font-size:12px;line-height: 2.42587;">
<h4 align="center">Encuesta de satisfacción del servicio de Cotización</h4>
<hr>
<? /*   Pregunta 1:  1. La atención de nuestros asesores de Servicio al Cliente   */ ?>
<h5>Como califica los siguientes aspectos:</h5>
<br/>
<b>1. La atención de nuestros asesores de Servicio al Cliente *</b>
<br/>
<div class="form-check">
  <input class="form-check-input" type="radio"  name="Q1" value="Excelente" checked="checked">Excelente</input> 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q1" value="Bueno">Bueno</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q1" value="Regular">Regular</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q1" value="Malo">Malo</input>
</div>
<div class="form-group">
    <b>Comentarios extra</b>
    <textarea class="form-control" cols="35" rows="4" name="TQ1" ></textarea>
  </div>



<? /*   Pregunta 2:  2. La atención de nuestros asesores de Servicio al Cliente   */ ?>
<br/>
<br/>
<b>2. El tiempo de respuesta en el proceso de Cotización *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q2" value="Excelente" checked="checked">Excelente</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q2" value="Bueno">Bueno</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q2" value="Regular">Regular</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q2" value="Malo">Malo</input>
</div>

<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ2"></textarea>
</div>


<? /*   Pregunta 3:  3. Las alternativas de equipo qué le ofreció el asesor de Atención a Clientes   */ ?>
<br/>
<br/>
<b>3. Las alternativas de equipo qué le ofreció el asesor de Atención a Clientes *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q3" value="Excelente" checked="checked">Excelente</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q3" value="Bueno">Bueno</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q3" value="Regular">Regular</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q3" value="Malo">Malo</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q3" value="No Aplica">No Aplica</input>
</div>
<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ3"></textarea>
</div>

<? /*   Pregunta Nueva:*/ ?>
<br/>
<br/>
<b>4. ¿Qué le parece el tiempo de entrega de los productos? *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q4" value="Bueno" checked="checked" >Bueno</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q4" value="Adecuado">Adecuado</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q4" value="Tardado" >Tardado</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q4" value="Muy Tardado" >Muy Tardado</input>
</div>
<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ4"></textarea>
</div>

<? /*   Pregunta Nueva:*/ ?>
<br/>
<br/>
<b>5. ¿Como Considera el precio de los productos? *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q5" value="Bajo" checked="checked" >Bajo</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q5" value="Adecuado">Adecuado</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q5" value="Excesivo" >Excesivo</input>
</div>
<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ5"></textarea>
</div>

<? /*   Pregunta Nueva:*/ ?>
<br/>
<br/>
<b>6. Del 1 al 10, ¿Como considera el servicio recibido en Logicbus? - siendo 1 pésimo y 10 Excelente *</b>
<div class="form-group">
  <select  name="Q6" >
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option selected = "selected">10</option>
</select>
</div>
<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ6"></textarea>
</div>


<? /*   Pregunta Nueva:*/ ?>
<br/>
<br/>
<b>7. ¿Como considera la calidad de los equipos? *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q7" value="Excelente" checked="checked">Excelente</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q7" value="Bueno">Bueno</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q7" value="Regular">Regular</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q7" value="Malo">Malo</input>
</div>
<div class="form-group">
  <b>Comentarios extra</b>
  <textarea class="form-control" cols="35" rows="4" name="TQ7"></textarea>
</div>

<? /*   Pregunta Nueva:*/ ?>
<br/>
<br/>
<b>8. ¿Está dispuesto a comprar el equipo? *</b>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q8" value="Ya lo compre" checked="checked">Ya lo compré</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q8" value="Si">Si</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q8" value="Probablemente" >Probablemente</input>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Q8" value="No" >No</input>
</div>

<? /*   Preguntas Generales   */ ?>
<br/>
<br/>
<div class="form-group">
  <b>Nombre</b>
  <input class="form-control" type="text" name="nombre" size="35"></input>
</div>
<div class="form-group">
  <b>Correo Eléctronico</b>
  <input class="form-control" type="email" name="correo" size="35" ></input>
</div>


<br/>
<?	
  if($cotizacion!="" and $cotizacion!=false)
  {
?>

<input type="hidden" value="<? echo $cotizacion; ?>" name="cotizacion" size="30"></input>
<input type="hidden" value="TXZ" name="ipbz" size="30"></input>

<?
}
else //Caso si no se envio la variable cotizacion
{
?>
<div class="form-group">
  <b>Cotización *</b>
  <input class="form-control" type="text" size="35" name="cotizacion" onchange="return valforms(this.form,this)" editcheck="req=Y=Por favor introduce la cotizacion que estas evaluando.;type=ALPHANUM"></input>
</div>
<?
  }

?>
<br/>
<b>Podemos utilizar sus comentarios en nuestra pagina</b>

<div class="form-check">
  <input type="Radio" name="autoriza" value="Si" checked="checked">Si</input>
</div>
<div class="form-check">
  <input type="Radio" name="autoriza" value="No">No</input>
</div>

<hr>

 <input class="btn btn-primary btn-block" type="submit" value="Enviar" name="formulario">



</form>

<?
  }
?>

 </div>
  </div>
</div>
</div>

<?
	  
//}
?>


</div>
</div>


<?
 abajo();
?>
</body>
</div>
</html>
