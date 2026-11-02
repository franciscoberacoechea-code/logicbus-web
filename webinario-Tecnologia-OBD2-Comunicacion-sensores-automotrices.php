<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><title>Tecnologia OBD2: Comunicación de sensores automotrices</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Controladores, Inteligentes, PLC, LBAF-1320MR-E, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas">
  <meta name="description" content="Logicbus - inscribite a nuestro webinario Tecnologia OBD2: Comunicación de sensores automotrices, 27 de octubre 2017"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

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
<div align="left" style="padding-left:20px; padding-right:10px;" >

<?
/* 
Se leen la variable de $formulario y cotizacion, dando lugar a los siguientes casos.
Si, respuesta entonces se envia el correo.
Si, cotizacion se muestra el formulario sin el campo de cotizacion.
Si, no cotizacion se muestra el formulario con el campo de cotizacion.
*/
$formulario=false;


$formulario=$_POST['formulario'];


/*Esta seciion se ejecutara una vez que se haya enviado el formulario para poder enviar el correo*/
$realizado="";
$ipbz="";
if ($formulario=="Verificar")
{

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
//echo $correo."<br/><br/>";

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


$asunto="Participánte Webinario".$nombre;






//$body='1. La atención de nuestros asesores de Servicio al Cliente : '.$Q1.' <br/>Comentarios extra acerca de la atencion: '.$TQ1;
$body='Nombre : '.$nombre."\r\n".
'Correo : '.$correo."\r\n".
'Password : '.$password."\r\n".
'Webinario : Como utilizar una tarjeta DAQ USB-__ como Osciloscopio'."\r\n";



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
$correo_a_enviar="participantes-webinarios.ef8b0ed7@atencion-a-clientes.logicbuscom.podio.com";
//$correo_a_enviar="ivantorres@logicbus.com";
//cotizaciones-encuesta-de-satisfaccion.fb5dccf6@atencion-a-clientes.logicbuscom.podio.com
//echo $body;


$cabeceras = "Content-type: text/plain; charset=UTF-8" . "\r\n";



if(mail($correo_a_enviar,$asunto,$body,$cabeceras))
{
	$realizado="si";
	
	echo'<script language="javascript">window.location="https://www.youtube.com/watch?v=XsKQAWuxOdo"</script>';
	//exit();

}
}
else
{
   $nombre=$_GET['name'];
   $correo=$_GET['email'];
   $password=$_GET['pass'];
   if($nombre!="" && $correo!="" && $password!="")
   {
       $body='Nombre : '.$nombre."\r\n".
'Correo : '.$correo."\r\n".
'Password : '.$password."\r\n".
'Webinario : Como utilizar una tarjeta DAQ USB-__ como Osciloscopio'."\r\n";
       $correo_a_enviar="participantes-webinarios.ef8b0ed7@atencion-a-clientes.logicbuscom.podio.com";
	   $cabeceras = "Content-type: text/plain; charset=UTF-8" . "\r\n";
	   if(mail($correo_a_enviar,$asunto,$body,$cabeceras))
{
	$realizado="si";
	
	echo'<script language="javascript">window.location="https://www.youtube.com/watch?v=XsKQAWuxOdo"</script>';
	//exit();

}
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
     echo "<br><h4>Muchas gracias por su correo</h4><br/><br/>";
  }
?>
<form action="" method="post" onsubmit="return valforms(this)" style="font-size:12px;line-height: 2.42587;">
<h4>Verificacion de usuario - Tecnologia OBD2: Comunicación de sensores automotrices</h4>

<h5>Favor de verificar sus datos de Inscripcion. Todos los campos son obligatorios</h5>

<? /*   Preguntas Generales   */ ?>
<br/>
<b>Nombre *</b>
<br/>
Favor de confirmar su nombre
<br/>
<input type="text" name="nombre" size="35" style="border-radius: 10px 10px 10px 10px;" editcheck="req=Y=Por favor ingresa tu Nombre.;type=ALPHANUM" value="<?php echo $_GET['name']; ?>"></input>
<br/>
<br/>
<b>Correo Eléctronico *</b>
<br/>
Favor de confirmar su direcion de correo
<br/>
<input type="text" name="correo" size="35" style="border-radius: 10px 10px 10px 10px;" editcheck="req=Y=Por favor ingresa tu correo.;type=EMAIL" value="<?php echo $_GET['email']; ?>"></input>
<br/>
<br/>
<b>Password *</b>
<br/>
Digite el password que le fue proporcionado en la confirmación de su inscripción, en caso de no contar con el, favor de solicitarlo en nuestro chat en linea en la esquina inferior derecha.
<br/>
<input type="text" name="password" size="35" style="border-radius: 10px 10px 10px 10px;" editcheck="req=Y=Por favor ingresa el password.;type=ALPHANUM" value="<?php echo $_GET['pass']; ?>"></input>
<br/>
<br/>
<br/>
<input type="submit" style="background-color: #337ab7;border-color: #2e6da4;color: #fff; padding:6px 12px; font-weight:bold; font-size: 117%;border-radius: 10px 10px 10px 10px;" value="Verificar" name="formulario">
</form>

</div>
</div>
<?
	  
//}
?>



</div>
<div align="justify">
  <div align="center">
    <div align="center">    </div>
  </div>
</div>
  </div> 
  <span class="Estilo6">
  <!-- DIV DE CIERRE DEL MAIN -->  
  </span><!-- FUNCION PARA CODIFICAR AUTOMATICAMENTE LA BARRA LATERAL DERECHA DEL INDEX -->

</div>
</div>

<br>
<br>

<?
 abajo();
?>
</body>
</div>
</html>
