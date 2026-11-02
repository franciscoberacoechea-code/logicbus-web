<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
 include("libreria/libreria.php");
?>



<html>
<head>
<title>Logicbus/ Productos/ Control de Movimiento</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="motores a pasos, teoria, Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Seguridad, Consultoria,  Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
  <meta name="description" content="Motores a pasos de Secuencia Normal">
  <meta name="revisit after" content="14 days">
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
<center>
<h1><strong>Secuencia Normal</strong>
</h1>
<table width="80%" border="1">
  <tr>
    <td width="15%"><div align="center">PASO</div></td>
    <td width="16%"><div align="center">BOBINA A</div></td>
    <td width="16%"><div align="center">BOBINA B</div></td>
    <td width="18%"><div align="center">BOBINA C</div></td>
    <td width="18%"><div align="center">BOBINA D</div></td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td><div align="center"><font color="#FF0000"><strong>ON</strong></font></div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><img src="imagenes/27/sec1A.jpg" width="123" height="129" alt="bobina_A" /></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td><div align="center">OFF</div></td>
    <td bgcolor="#FFFFFF"><div align="center"><font color="#FF0000"><strong>ON</strong></font></div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><img src="imagenes/27/sec2B.jpg" width="121" height="125" alt="bobina_B" /></td>
  </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center"><font color="#FF0000"><strong>ON</strong></font></div></td>
    <td><div align="center">OFF</div></td>
    <td><img src="imagenes/27/sec3C.jpg" width="122" height="124" alt="bobina_C" /></td>
  </tr>
  <tr>
    <td><div align="center">4</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center">OFF</div></td>
    <td><div align="center"><font color="#FF0000"><strong>ON</strong></font></div></td>
    <td><img src="imagenes/27/sec4D.jpg" width="123" height="125" alt="bobina_D" /></td>
  </tr>
</table>
<h4 align="left"><a href="info_motores_a_pasos">Regresar <--</a></h4>

 </center>
</div>

<?
 abajo();
?>
</body>
</html>
