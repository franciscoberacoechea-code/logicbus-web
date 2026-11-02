<?php 
header ("Location: https://www.logicbus.com.mx/convertidores_protocolos.php"); 
?>
<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>RS-232/422/485 Conversion Devices</title>
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
<table width="776" border="0">
 <tr>
   <td><a href="productos">Productos</a>-&gt;<a href="convertidores_protocolos">Convertidores de protocolos</a>-&gt;<a href="din_rail">Industrial Data Communication &amp; Conversion</a>-&gt;RS-232/422/485 </td>
 </tr>
  <tr>
    <td><h2 align="center"><strong>RS-232/422/485 Conversion Devices</h2></td>
  </tr>
  <tr>
    <td><div align="center"><img src="imagenes/03/2113.jpg" width="150" alt="2113"><img src="sealevel/serial-async/converters-serial-async/1104.jpg" width="150" alt="1104"><img src="imagenes/02/I-7520R.jpg" width="150" alt="Para m&aacute;s informaci&oacute;n haga click"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><a href="din2-2">Serial Communication Converters</a></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><a href="din2-1">Serial Communication Repeaters</a><a href="din2-2"></a></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> <a href="I-7513"><strong>RS-485 Hub Module </strong></a></td>
  </tr>
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>