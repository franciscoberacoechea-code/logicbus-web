<?
include("libreria/libreria.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta name="robots" content="noindex,nofollow">

<? function comprobar_email($email){ 
    $mail_correcto = 0; 
    //compruebo unas cosas primeras 
    if ((strlen($email)>= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
          //miro si tiene caracter . 
          if (substr_count($email,".")>= 1){ 
             //obtengo la terminacion del dominio 
             $term_dom = substr(strrchr ($email, '.'),1); 
             //compruebo que la terminación del dominio sea correcta 
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                //compruebo que lo de antes del dominio sea correcto 
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                if ($caracter_ult != "@" && $caracter_ult != "."){ 
                   $mail_correcto = 1; 
                } 
             } 
          } 
       } 
    } 
    if ($mail_correcto) 
       return 1; 
    else 
       return 0; 
}

?>



</head>
<?
if(isset($HTTP_POST_VARS['elimina']))
{
$respuesta = $_POST["correo"];
if($respuesta == "[E-mail Address]" or $respuesta == "" or comprobar_email($respuesta)== 0 ){
mail(divide(it), "ELIMINAR CONTACTO NO VALIDO", "Alguien intenta usar esta pagina enviando datos no validos para usar el servicio de envio de correos <br><br>Email: ".$respuesta.", 'From: ".divide(boletin)."");
echo "<table width='100%'>
    <tr><td colspan='2'><h3>ERROR <br> DATOS INVALIDOS</h3></td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>";

}
else
{
echo "<table width='100%'>
    <tr><td colspan='2'><h3>La direcci&oacute;n de correo ".$respuesta." ser&aacute; eliminada de nuestra base de datos</h3></td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>";
  mail(divide(it), "ELIMINAR CONTACTO", "ELIMINAR CONTACTO ". $respuesta. " DEL BOLETIN", "From: ".divide(boletin)."") or die("
   <table width='100%'>
    <tr><td colspan='2'><h3>Error al enviar la solicitud</h3></td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>
   ");
}
}
else
if(isset($_POST['invita']))
{
$correo = $_POST["correo_amigo"];
$respuesta = $_POST["correo"];
	if ($correo == "")
{
       echo "<table width='100%'  >
    <tr><td colspan='2' align='center'><h3>Escriba la direccion de correo de su amigo</h3></td></tr>
    <tr><td>
      <form name='form2' method='post' action='https://www.logicbus.com.mx/elimina_contact.php'>
        <div align='center'>Enviar a un amigo <br>
          Direcci&oacute;n de correo:  
            <input type='text' size='50' name='correo_amigo'>
            <br>
            <input type='submit' name='invita' value='Enviar'>
        </div>
      </form>
</td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>";
}
     else
{
       echo "<table width='100%' >
    <tr><td colspan='2' align='center'><h3>La informaci&aacute;n ha sido enviada</h3></td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>";
      mail(divide(it), "NUEVO CONTACTO", "SE HA INVITADO AL BOLETIN A: ". $correo.".", "From: ".divide(boletin)."") or die("
   <table width='100%'>
    <tr><td colspan='2'><h3>Error al enviar la solicitud</h3></td></tr>
    <tr><td align=center valign=middle><hr color=#0066FF align=center></td></tr>
     </table>
   ");
}
}
?>


<body>
</body>
</html>
