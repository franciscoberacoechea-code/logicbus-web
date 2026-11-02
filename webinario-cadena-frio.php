<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Webinario: Cadenas en Frío - Logicbus</title>
<meta name="author" content="Logicbus">
<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="description" content="Te esperamos en nuestro Webinario Gratuito: Cadenas en Frío, este 11 de Diciembre a las 10:00 AM Hora de la Cd. de México, conoce los Registradores de Temperatura que tenemos disponibles en Logicbus.">

<meta name="keywords" content="USB-2416, 24-bit, isolated, high-channel-count, multifunction, DAQ, module, modulo, adquisicion, datos, termopares, E/S, analoga, digital, voltaje, Logicbus, M&eacute;xico, México, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de México, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">

<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="libreria/estilos.css" rel="stylesheet" >
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
      };
</script>

</head>

<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div align="center">
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
</div>

<h1 align="center">¡Ven y Conoce más sobre los Cadenas en Frío!</h1><br>

<p align="justify">Te esperamos en nuestro Webinario Gratuito: Cadenas en Frío, este 11 de Diciembre a las 10:00 AM Hora de la Cd. de México, conoce los Registradores de Temperatura que tenemos disponibles en Logicbus.</p>

<table width="90%" class="table table-striped">
  <tbody>
    <tr>
      <td>
        <strong>Temario:</strong>
        <ol><p align="justify">
          <li>¿Qué es una cadena de Frío?</li>
          <li>Importancia de los Registradores de Temperatura en las Cadenas de Frío.</li>
          <li>Modelos de Registradores disponibles en Logicbus.</li>
          <li>Prueba de funcionamiento de Registradores deTemperatura.</li>
        </p></ol>
      </td>
      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
        <center><img src="imagenes/slide2/HiTemp.png" width="90%" alt="Registradores de Temperatura" title="Registradores de Temperatura"></center>
      </td>
    </tr>
  </tbody>
</table>

<br><br>

<div align="right">

<?php
function getGCalendarUrl($event){
$titulo = urlencode($event['titulo']);
$descripcion = urlencode($event['descripcion']);
$localizacion = urlencode($event['localizacion']);
$start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get());
$end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
$name = urlencode($event['nombre']);
$url = urlencode($event['url']);
$gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name";
return ($gCalUrl);
}

// array asociativo con los parametros mecesarios.
$evento = array(
'titulo' => 'Webinario: Cadenas en Frío',
'descripcion' => 'Conoce más sobre los Cadenas en Frío con Logicbus',
'localizacion' => 'Logicbus',
'fecha_inicio' => '2018-12-11', // Fecha de inicio de evento en formato AAAA-MM-DD
'hora_inicio'=>'09:50', // Hora Inicio del evento
'fecha_fin'=>'2018-12-11', // Fecha de fin de evento en formato AAAA-MM-DD
'hora_fin'=>'11:00', // Hora final del evento
'nombre'=>'Logicbus', // Nombre del sitio
'url'=>'https://www.logicbus.com.mx/eventos.php' // Url de la página
);
?>

<a href="<?php echo getGCalendarUrl($evento); ?>"><img src="https://www.logicbus.com.mx/News_Mail/2018/Junio/add.png" border="0"></a>
</div>

<br><br>

<h2><span style="background: #A2E2F7;"><a href="https://www.youtube.com/watch?v=nclonRBu3Kc"><b>Ver webinario en vivo</b></a></span></h2>
<br><br>

<div id="mc_embed_signup">
<form action="//logicbus.us1.list-manage.com/subscribe/post?u=917050f7949ae75f1fc654689&amp;id=c39d1294a8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

<div id="mc_embed_signup_scroll">
 <h2>Suscríbete a nuestro webinario</h2>
<div class="indicates-required"><span class="asterisk">*</span> Indicates Required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Correo electronico  <span class="asterisk">*</span></label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  <label for="mce-FNAME">Nombre  <span class="asterisk">*</span></label>
  <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-LNAME">Apellido  <span class="asterisk">*</span></label>
  <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE3">Empresa </label>
  <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
  <label for="mce-MMERGE4">Telefono </label>
  <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_917050f7949ae75f1fc654689_c39d1294a8" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: ES
 */
$.extend($.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->
    </div>
</form>

</div>
              
  <h2 align="center"><font color="#0B3791">Webinario - Cadenas en Frío</font></h2>
  <h2 align="center">Martes 11 de Diciembre a las 10:00 AM Hora de la Cd. de México</h2>
  
  <div align="center">
    <img src="imagenes/slide2/Banner-webinarios.png" width="50%" alt="Webinario no iniciado" title="Webinario no iniciado" class="img-responsive"><br>
    Nuestro webinario todavia no ha comenzado, favor de regresar el Martes 11 de Diciembre a partir de las <strong>09:50 AM hora del centro de México</strong> para visualizar este evento
  </div>

<br><br>

      </div>
    </div>
   </div>
</div>

<?
 abajo();
?>
</body>
</html>