<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><title>Logicbus/Productos/Controladores Inteligentes PLC/LBAF-1320MR-E</title>
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
<body>
<br>
<br>


<?
/* 
Se leen la variable de $formulario y cotizacion, dando lugar a los siguientes casos.
Si, respuesta entonces se envia el correo.
Si, cotizacion se muestra el formulario sin el campo de cotizacion.
Si, no cotizacion se muestra el formulario con el campo de cotizacion.
*/
$formulario=false;
$ticket=false;

$formulario=$_POST['formulario'];
$ticket=$_GET['ipbx'];

/*Esta seciion se ejecutara una vez que se haya enviado el formulario para poder enviar el correo*/
$realizado="";
$ipbz="";
if ($formulario=="Send")
{
$Q1=$_POST['Q1'];
$TQ1=$_POST['TQ1'];
$Q2=$_POST['Q2'];
$TQ2=$_POST['TQ2'];
$Q3=$_POST['Q3'];
$TQ3=$_POST['TQ3'];
//$Q4=$_POST['Q4'];
//$TQ4=$_POST['TQ4'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$ipbz=$_POST['ipbz'];
$fecha=date_default_timezone_get();
$ticket=$_POST['ticket'];
  if($ipbz=="TXZ")
  {
     $ticket="https://podio.com/logicbuscom/proceso-de-venta/apps/tickets/items/".$ticket;   
  }
  else
  {
	 $ticket="Not data";
  }
  
 // echo $cotizacion;
  //exit();

//echo "Cotizacion: ".$cotizacion."<br/><br/>";

/*
"pregunta-1": integer_value_of_option
"title": "sample_value"
"2-el-tiempo-de-respuesta-en-el-proceso-de-cotizacion": integer_value_of_option
"comentarios-extra": "sample_value"
"3-las-alternativas-de-equipo-que-le-ofrecio-el-asesor-d": integer_value_of_option
"comentarios-extra-2": "sample_value"
"4-en-terminos-generales-cual-ha-sido-su-experiencia-de-": integer_value_of_option
"comentarios-extra-3": "sample_value"
"nombre": "sample_value"
"correo-electronico": "sample_value"
"cotizacion": "sample_value"
*/


$asunto="Support satisfaction survey about Logicbus ";


/*
Comenzamos con el codigo para calcular la calificacion
*/

$C1="Excellent";
$C2="Good";
$C3="Regular";
$C4="Bad";
$C5="Does not apply";
$R1=0;
$R2=0;
$R3=0;
$R4=0;
$R5=0;

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
/*
if($Q4==$C1)
  $R4=100;
if($Q4==$C2)
  $R4=80;
if($Q4==$C3)
  $R4=60;
if($Q4==$C4)
  $R4=40;  
*/

$resultado=($R1+$R2+$R3)/3;

/*
if($Q3==$C5)
  $resultado=($R1+$R2+$R4)/3;
else
  $resultado=($R1+$R2+$R3+$R4)/4;
*/

//Se define la clasificacion de la encuesta

if($resultado >= 95)
  $clasificacion="Excellent";
if($resultado >= 80 && $resultado < 94)
  $clasificacion="Good";
if($resultado >= 60 && $resultado < 79)
  $clasificacion="Regular";
if($resultado < 60)
  $clasificacion="Bad";


//$body='1. La atención de nuestros asesores de Servicio al Cliente : '.$Q1.' <br/>Comentarios extra acerca de la atencion: '.$TQ1;
$body='How was the information provided about your doubts : '.$Q1."\r\n\r\n".
'Comments about the information provided : '.$TQ1."\r\n\r\n".
'The answer time in the technical support process was : '.$Q2."\r\n\r\n".
'Comments about the answer time : '.$TQ2."\r\n\r\n".
'How do you rate the advice provided by our Technical Support Engineers : '.$Q3."\r\n\r\n".
'Comments : '.$TQ3."\r\n\r\n".
'Name : '.$nombre."\r\n\r\n".
'Email : '.$correo."\r\n\r\n".
'Survey date : '.$fecha."\r\n\r\n".
'Ticket : '.$ticket."\r\n\r\n".
'Score : '.$resultado."\r\n\r\n".
'Ranking of the Survey Score : '.$clasificacion."\r\n\r\n";



/*
$body='pregunta-1: '.$Q1.' '.
'title: '.$TQ1.''.' '.
'"2-el-tiempo-de-respuesta-en-el-proceso-de-cotizacion": '.$Q2.' '.
'"comentarios-extra": "'.$TQ2.'"'.' '.
'"3-las-alternativas-de-equipo-que-le-ofrecio-el-asesor-d": '.$Q3.' '.
'"comentarios-extra-2": "'.$TQ3.'"'.' '.
'"4-en-terminos-generales-cual-ha-sido-su-experiencia-de-": '.$Q4.' '.
'"comentarios-extra-3": "'.$TQ4.'"'.' '.
'"nombre": "'.$nombre.'"'.' '.
'"correo-electronico": "'.$correo.'"'.' '.
'"cotizacion": "'.$cotizacion.'" ';
*/

//$correo_a_enviar="cotizaciones-encuesta-de-satisfaccion.bd1e8923@ingenieria-it.logicbuscom.podio.com";
//$correo_a_enviar="soporte-encuesta-de-satisfaccion.139b0664@ingenieria-it.logicbuscom.podio.com";

$correo_a_enviar="support-satisfaction-survey.ad8ff04d@atencion-a-clientes.logicbuscom.podio.com";
//cotizaciones-encuesta-de-satisfaccion.fb5dccf6@atencion-a-clientes.logicbuscom.podio.com
//echo $body;


$cabeceras = "Content-type: text/plain; charset=UTF-8" . "\r\n";

//exit();

if(mail($correo_a_enviar,$asunto,$body,$cabeceras))
{
	$realizado="si";
	mail('ivantorres@logicbus.com',$asunto,$body,$cabeceras);

}
}
/*Esta seccion se ejecuta cuando dan click en el link de encuesta. Si viene especificada la cotizacion se adjunta automatoicamente, si no viene adjuntada se pide la cotización como obligatoria*/

//else
//{
  /*  Seccion de jevescript para los dos formularios */
?>
   <script>
      
   </script>
<div id="fatherformulario" >
<div id="divformulario" style="display:block;width:90%;min-width:320px; max-width:600px;margin: auto;" >
<?
  if($realizado=="si")
  {
     echo "<br><h4>Thank you for your email</h4><br/><br/>";
  }
?>
<form action="" method="post" onsubmit="return valforms(this)" style="font-size:12px;line-height: 2.42587;">
<h4>Support satisfaction survey:</h4>
<? /*   Pregunta 1:  1. La atención de nuestros asesores de Servicio al Cliente   */ ?>
<br/>
<b>1. How was the information provided about your doubts *</b>
<br/>
<input type="radio" name="Q1" value="Excellent" checked="checked">Excellent</input>
<br/>
<input type="radio" name="Q1" value="Good">Good</input>
<br/>
<input type="radio" name="Q1" value="Regular">Regular</input>
<br/>
<input type="radio" name="Q1" value="Bad">Bad</input>
<br/>
<b>Comments</b>

<br/>
<textarea cols="35" rows="4" name="TQ1" ></textarea>

<? /*   Pregunta 2:  1. La atención de nuestros asesores de Servicio al Cliente   */ ?>
<br/>
<br/>
<b>2. The answer time in the technical support process was *</b>
<br/>
<input type="radio" name="Q2" value="Excellent" checked="checked">Excellent</input>
<br/>
<input type="radio" name="Q2" value="Good">Good</input>
<br/>
<input type="radio" name="Q2" value="Regular">Regular</input>
<br/>
<input type="radio" name="Q2" value="Bad">Bad</input>
<br/>

<b>Comments</b>
<br/>
<textarea cols="35" rows="4" name="TQ2"></textarea>

<? /*   Pregunta 3:  3. Las alternativas de equipo qué le ofreció el asesor de Atención a Clientes   */ ?>
<br/>
<br/>
<b>3. How do you rate the advice provided by our Technical Support Engineers *</b>
<br/>
<input type="radio" name="Q3" value="Excellent" checked="checked">Excellent</input>
<br/>
<input type="radio" name="Q3" value="Good">Good</input>
<br/>
<input type="radio" name="Q3" value="Regular">Regular</input>
<br/>
<input type="radio" name="Q3" value="Bad">Bad</input>
<br/>
Comments
<br/>
<textarea cols="35" rows="4" name="TQ3"></textarea>

<? /*   Preguntas Generales   */ ?>
<br/>
<br/>
<b>Name</b>
<br/>
<input type="text" name="nombre" size="35"></input>
<br/>
<?	
  if($cotizacion!="" and $cotizacion!=false)
  {
?>

<b>Email</b>
<br/>
<input type="text" name="correo" size="35" ></input>
<?
  }
  else
  {
?>
<b>Email</b>
<br/>
<input type="text" name="correo" size="35" onchange="return valforms(this.form,this)" editcheck="req=Y=Please enter the Email.;type=EMAIL"></input>

<?
  }
?>
<br/>
<?	
  if($ticket!="" and $ticket!=false)
  {
?>

<input type="hidden" value="<? echo $ticket; ?>" name="ticket" size="30"></input>
<input type="hidden" value="TXZ" name="ipbz" size="30"></input>

<?
}
else //Caso si no se envio la variable cotizacion
{
}
?>
<?
  if($realizado=="si")
  {
     echo "<h4>Thank you for your email</h4><br/><br/>";
  }
?>
<br>
<input type="submit" style="background-color: #337ab7;border-color: #2e6da4;color: #fff; padding:6px 12px; font-weight:bold; font-size: 117%;" value="Send" name="formulario">
</form>

</div>
</div>
</body>

</html>
