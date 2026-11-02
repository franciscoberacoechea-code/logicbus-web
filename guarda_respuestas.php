<?
session_start();
require("class.phpmailer.php");
$mail = new PHPMailer();
 include("libreria/libreria.php");
$fac=$_POST["factura"];
$cot=$_POST["cotizacion"];
$res1=$_POST["respuesta1"];
$res2=$_POST["respuesta2"];
$res3=$_POST["respuesta3"];
$res4=$_POST["respuesta4"];
$res5=$_POST["respuesta5"];
$res6=$_POST["respuesta6"];
$res7=$_POST["respuesta7"];
$res8=$_POST["respuesta8"];
$res9=$_POST["respuesta9"];
$res10=$_POST["respuesta10"];
$coment=$_POST["comen"];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Compa&ntilde;&iacute;a</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?php 
$band = 0;
if($res1=='')
{
$band = 1;
}
if($res2=='')
{
$band = 1;
}
if($res2==1 || $res2==2) 
{
    if($res3=='')
      {
       $band = 1;
      }
}
if($res4=='')
{
$band = 1;
}
if($res4==1)
{
if ($res5=='')
 {
  $band = 1;
 }
}
if($res6=='')
{
$band = 1;
}
if($res7=='')
{
$band = 1;
}
if($res8=='')
{
$band = 1;
}
if($res9=='')
{
$band = 1;
}
if($res10=='-')
{
$band = 1;
}
$fecha=date("d-m-Y H:i:s");
////////////////////////
switch ($res1) {

   case 1 :
   $re1="Excelente";
   break;

   case 2 :
   $re1="Muy Buena";
   break;
   
   case 3 :
   $re1="Buena";
   break;
   
   case 4 :
   $re1="Regular";
   break;
   
   case 5 :
   $re1="Mala";
   break;
   
   default :
   $re1="Sin respuesta";
   break;
 }

 switch ($res2) {

   case 1 :
   $re2="Si";
   break;

   case 2 :
   $re2="No";
   break;
   
   case 3 :
   $re2="No requeri cotizacion";
   break;

   default :
   $re2="Sin respuesta";
   break;
 }
  switch ($res3) {

   case 1 :
   $re3="Excelente";
   break;

   case 2 :
   $re3="Muy Bueno";
   break;
   
   case 3 :
   $re3="Bueno";
   break;
   
   case 4 :
   $re3="Regular";
   break;
   
   case 5 :
   $re3="Malo";
   break;
   
   default :
   $re3="Sin respuesta";
   break;
 }
 
 switch ($res4) {

   case 1 :
   $re4="Si";
   break;

   case 2 :
   $re4="No";
   break;
 
   default :
   $re4="Sin respuesta";
   break;
 }
 

switch ($res5) {

   case 1 :
   $re5="Excelente";
   break;

   case 2 :
   $re5="Muy Buena";
   break;
   
   case 3 :
   $re5="Buena";
   break;
   
   case 4 :
   $re5="Regular";
   break;
   
   case 5 :
   $re5="Mala";
   break;
   
   default :
   $re5="Sin respuesta";
   break;
 }
 
  switch ($res6) {

   case 1 :
   $re6="Excelente";
   break;

   case 2 :
   $re6="Muy Bueno";
   break;
   
   case 3 :
   $re6="Bueno";
   break;
   
   case 4 :
   $re6="Regular";
   break;
   
   case 5 :
   $re6="Malo";
   break;
   
   default :
   $re6="Sin respuesta";
   break;
 }
 
   switch ($res7) {

   case 1 :
   $re7="Excelente";
   break;

   case 2 :
   $re7="Muy Bueno";
   break;
   
   case 3 :
   $re7="Bueno";
   break;
   
   case 4 :
   $re7="Regular";
   break;
   
   case 5 :
   $re7="Malo";
   break;
   
   default :
   $re7="Sin respuesta";
   break;
 }
   switch ($res8) {

   case 1 :
   $re8="Excelente";
   break;

   case 2 :
   $re8="Muy Bueno";
   break;
   
   case 3 :
   $re8="Bueno";
   break;
   
   case 4 :
   $re8="Regular";
   break;
   
   case 5 :
   $re8="Malo";
   break;
   
   default :
   $re8="Sin respuesta";
   break;
 }
   switch ($res9) {

   case 1 :
   $re9="Excelente";
   break;

   case 2 :
   $re9="Muy Bueno";
   break;
   
   case 3 :
   $re9="Bueno";
   break;
   
   case 4 :
   $re9="Regular";
   break;
   
   case 5 :
   $re9="Malo";
   break;
   
   default :
   $re9="Sin respuesta";
   break;
 }




////////////////////////////////////////////


if ($band == 0)
{
$db_nombre="logicbus_logicbusbd"; 	
$sql = "INSERT INTO cuestionario (factura,cotizacion, r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, comentario, fecha)".
     "VALUES ('$fac','$cot','$res1','$res2','$res3','$res4','$res5','$res6','$res7','$res8','$res9','$res10','$coment','$fecha')";
$result=coneccion_db($db_nombre, $sql);
$mail->Host = "localhost";
$mail->From = "cuestionarios@logicbus.com";
$mail->FromName = "Cuestionario de satisfaccion";
$mail->Subject = "Respuesta Cuestionario factura No $fac";
$mail->AddAddress("adanleyva@logicbus.com","Adan Leyva");
$mail->AddAddress("gerencia@logicbus.com","Gerencia");
//$mail->AddAddress("ivantorres@logicbus.com","IT");
 $body  = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 
<body>

<h1>Respuestas del cuestionario de satisfaccion del cliente  Numero de Factura: '.$fac.' </h1>
<hr></hr>
<p>1-&iquest;C&oacute;mo califica la atenci&oacute;n de nuestro personal al tel&eacute;fono?  <strong>'.$re1.'</strong></p>
<p>2-&iquest;La cotizaci&oacute;n enviada por nuestro personal, &iquest;cumpl&iacute;a con las caracter&iacute;sticas que solicit&oacute;? <strong>'.$re2.'</strong></p>
<p>3-&iquest;En cuanto a rapidez, &iquest;C&oacute;mo califica el tiempo de espera para el env&iacute;o de su cotizaci&oacute;n? <strong>'.$re3.'</strong></p>
<p>4-&iquest;Requiri&oacute; ayuda para elegir el equipo adecuado a sus necesidades o requerimientos? <strong>'.$re4.'</strong></p>
<p>5-&iquest;Si requiri&oacute; ayuda, la atenci&oacute;n brindada fue? <strong>'.$re5.'</strong></p>
<p>6-&iquest;Haciendo referencia a la rapidez, &iquest;C&oacute;mo considera que fue el proceso de compra? <strong>'.$re6.'</strong></p>
<p>7-&iquest;En cuanto a d&iacute;as de espera, &iquest;Qu&eacute; le pareci&oacute; el tiempo de embarque de su equipo? <strong>'.$re7.'</strong></p>
<p>8-&iquest;C&oacute;mo califica el equipo que compr&oacute;?,en cuanto a las expectativas que usted ten&iacute;a del mismo, su facilidad de configuraci&oacute;n y operaci&oacute;n: <strong>'.$re8.'</strong></p>
<p>9-&iquest;Como califica nuestro servicio?, con respecto a haberle facilitado las herramientas necesarias para poner a funcionar su equipo (manuales, drivers, instrucciones). <strong>'.$re9.'</strong></p>
<p>10-En una escala de 0 a 10, &iquest;qu&eacute; tan dispuesto est&aacute; usted a recomendar a LOGICBUS con un conocido o amigo?. &nbsp; <strong>'.$res10.'</strong></p>
<p>&nbsp;</p>
<p>Sus comentarios fueron:<strong>'.$coment.'</strong>.</p>
</body>
</html>';
$mail->Body = $body;
$mail->IsHTML(true);
$mail->AddAttachment("descargas/facturas/".$fac.".PDF", "".$fac.".PDF");
$mail->AddAttachment("descargas/cotizaciones/".$cot.".PDF", "".$cot.".pdf");
$mail->Send();
  echo '<script language="javascript">window.location="index.php"</script>;';
   }
  else
  {
   echo "<script> alert('Por favor llene todos los campos correspondientes');history.back()</script>";
  }
?> 
</BODY>
</HTML> 