<?
session_start();
// Archivo actualizado el dia 16 de Marzo de 2012 por Manuel Urquidy
//se modifico para que se condicionara cuando sea pais = mexico y estado = distrito federal ó estado = estado de mexico  que el  municipio o delegacion sea un requisito
 include("libreria/libreria.php");


$nom=$_POST["nombrec"];
$ape=$_POST["apellido_pc"];
$men=$_POST["msgc"];
function getRealIP()
{
 
   if( $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
   {
      $client_ip = 
         ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
            $_SERVER['REMOTE_ADDR'] 
            : 
            ( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
               $_ENV['REMOTE_ADDR'] 
               : 
               "unknown" );
 
      // los proxys van añadiendo al final de esta cabecera
      // las direcciones ip que van "ocultando". Para localizar la ip real
      // del usuario se comienza a mirar por el principio hasta encontrar 
      // una dirección ip que no sea del rango privado. En caso de no 
      // encontrarse ninguna se toma como valor el REMOTE_ADDR
 
      $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);
 
      reset($entries);
      while (list(, $entry) = each($entries)) 
      {
         $entry = trim($entry);
         if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
         {
            // http://www.faqs.org/rfcs/rfc1918.html
            $private_ip = array(
                  '/^0\./', 
                  '/^127\.0\.0\.1/', 
                  '/^192\.168\..*/', 
                  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/', 
                  '/^10\..*/');
 
            $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
 
            if ($client_ip != $found_ip)
            {
               $client_ip = $found_ip;
               break;
            }
         }
      }
   }
   else
   {
      $client_ip = 
         ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
            $_SERVER['REMOTE_ADDR'] 
            : 
            ( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
               $_ENV['REMOTE_ADDR'] 
               : 
               "unknown" );
   }
 
   return $client_ip;
 
}
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
require_once('recaptchalib.php');
  $privatekey = "6LcI3tUSAAAAAKitABP-byDFxesbMRePPeF24IaZ";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
								
	  if (!$resp->is_valid) {
  $band = 1;
  } else {
  $band = 0;
  }

if ($band == 0)
{
   $link = mysql_connect("localhost", "logicbus_form", "mWRcZNzQ4zH5");
   mysql_select_db("logicbus_logicbusbd", $link);
   $sql = "INSERT INTO Comentarios (nombre, empresa, comentario) ".
     "VALUES ('$nom', '$ape', '$men')";
   $result = mysql_query($sql);
   $ip = getRealIP();
   $encabezados = "From: $ip". "\r\n" . "Content-type:text/html;charset=utf-8";
   mail("it@logicbus.com","Nuevo testimonio publicado", $men, $encabezados);
  echo '<script language="javascript">window.location="index.php"</script>;';
  }
  else
  {
   echo "<script> alert('Texto de seguridad ingresado \\n incorrecto');history.back()</script>";
  }
?> 
</BODY>
</HTML> 