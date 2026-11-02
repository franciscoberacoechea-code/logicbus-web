
<?
 include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/ Productos/ Registradores/ Eventos/ Autonomos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

<table width="700">
  <tr>
    <td height="13" colspan="3"><a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a href="evento_logger">Evento</a>-&gt;Aut&oacute;nomos</td>
  </tr>
  <tr><td colspan="2"><h2 align="center">Aut&oacute;nomos</h2></td></tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr><td><div align="center"><a href="EVENT101A"><img src="imagenes/09/EVENT101A.JPG" width="120" border="0" alt="Event101A - Event Recorder"></a></div></td>
    <td><a href="EVENT101A"><strong>Event101A</strong></a><br>
Registrador de eventos con bater&iacute;a de 10 a&ntilde;os de vida</td>
  </tr>
  <tr><td width="84%" colspan="2" valign="top"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr><td><div align="center"><a href="contadores-eventos-estados_event101"><img src="imagenes/09/Contadores-eventos-estados/event101.gif" width="120" border="0" alt="Event101 - Event Recorder"></a></div></td>
    <td><a href="contadores-eventos-estados_event101"><strong><strike>Event101</strike></strong></a>&nbsp;&nbsp;<span style="color:#F00;"><strong>DESCONTINUADO</strong></span><br>
Registrador de Eventos<br><strong>NOTA:</strong> producto descontinuado.  Se recomienda reemplazo <a href="EVENT101A">Event101A</a></td>
  </tr>
  <tr><td width="84%" colspan="2" valign="top"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr><td><div align="center"><a href="contadores-eventos-estados_event110"><img src="imagenes/09/Contadores-eventos-estados/event110.gif" width="120" border="0" alt="Event110 - Event Recorder"></a></div></td>
    <td><a href="contadores-eventos-estados_event110"><strong><strike>Event110</strike></strong></a>&nbsp;&nbsp;<span style="color:#F00;"><strong>DESCONTINUADO</strong></span><br>
Registrador de Eventos con 10 a&ntilde;os de vida de bater&iacute;a<br>
<strong>NOTA:</strong> producto descontinuado.  Se recomienda reemplazo <a href="EVENT101A">Event101A</a></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><hr align="center" color="#CCCCCC"></td>
  </tr>
  <tr>
    <td valign="top"><div align="center"><a href="contadores-eventos-estados_usb505"><img src="imagenes/01/USB-505_265.jpg" width="150" border="0" alt="USB-505 - Event Recorder"></a></div></td>
    <td><a href="contadores-eventos-estados_usb505"><strong>USB-505</strong></a><br>
      Registrador de eventos </td>
  </tr>
  <tr><td width="84%" colspan="2" valign="top">&nbsp; </td></tr>
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>