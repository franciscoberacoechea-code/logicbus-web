<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
 include("libreria/libreria.php");
?>



<html>
<head>
<title>M200 - Interfaz para tarjetas serie M eE/S - Logicbus S.A de C.V</title>
 <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1024HLS, HLS">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Módulo base M200 para conectar tarjetas de la serie M de E/S a tableros de control numérico. Alimentación 5-30VDC, indicadores LED.">

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
  <table width="100%"  border="0">
  <tr>
    <td><a href="productos">Productos</a>-&gt;<a href="usb_categorias">USB</a>-&gt;<a href="tarjetaDAQ">Tarjetas DAQ</a>-&gt;<a href="usb_ES_digital">E/S Digitales</a>-&gt;<a href="usb_daq5">Paralelas</a>-&gt;<a href="8203">8203</a>-&gt;<a href="eio-digital">E/S Digital &amp; E/S Expansi&oacute;n</a>-&gt;M2OO</td>
  </tr>
  <tr><td align="center"><h1>M200<br></h1></td></tr>
	<tr>
      <td align="center"><img src="imagenes/03/M200.gif" width="250" height="223" border="0" alt="M200">  <div align="justify"></div></td>
    </tr>
	<tr>
	  <td align="center">&nbsp;</td>
    </tr>
	<tr>
	  <td align="center"><strong>M&oacute;dulo de tarjeta base hace interfaz a las tarjetas de la serie M eE/S</strong></td>
    </tr>
	<tr>
	  <td align="center"><div align="right"><a href="#"><img title="Ir a tienda"  src="images/shopping_cart.png" border=0 onClick="atienda()" alt="Comprar"></a></div></td>
    </tr>
	<tr>
	  <td align="center"><div align="left">El m&oacute;dulo M200 conecta los m&oacute;dulos de interfaz de entrada y salida con los tableros de control num&eacute;rico por medio del cable  de 50 pines. La alimentaci&oacute;n del sistema se puede hacer por medio de una fuente externa de 5VDC o 9VDC  a 30VDC de entrada usando el regulador. Los LEDs a bordo indican el estado de energ&iacute;a de entrada y conexi&oacute;n de hasta cuatro m&oacute;dulos de entrada y salida.</div></td>
    </tr>
	<tr>
      <td align="center">&nbsp;  </td>
    </tr>
    <tr align="right">
      <td><div align="center">
        <table width="510" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" bgcolor="#666666"><div align="center" class="Estilo1">Especificaciones Tecnicas </div></td>
            </tr>
          <tr bgcolor="#999999">
            <td width="177"><div align="left">Requerimientos de energ&iacute;a </div></td>
            <td width="262">               <div align="left">5V @ 75mA seleccionable: <br>
                  5VDC a trav&eacute;s del cable de cinta <br>
                  5VDC v&iacute;a bloque terminal <br>
  9 - 30VDC utilizando regulador (1A max.)  </div></td></tr>
          <tr bgcolor="#CCCCCC">
            <td><div align="left"> Conector </div></td>
            <td> <div align="left">50 Pines</div></td></tr>
          <tr bgcolor="#999999">
            <td><div align="left"> Dimensiones </div></td>
            <td>              <div align="left">2.5" (L) x 4.2" (W) </div></td></tr>
          <tr bgcolor="#CCCCCC">
            <td><div align="left"> Temperatura en operaci&oacute;n </div></td>
            <td>              <div align="left">0 - +70&deg;C </div></td></tr>
          <tr bgcolor="#999999">
            <td><div align="left"> Temperatura de almacenaje </div></td>
            <td>              <div align="left">-50&deg; - +105&deg;C </div></td></tr>
          <tr bgcolor="#CCCCCC">
            <td><div align="left"> Rango de humedad </div></td>
            <td> <div align="left">10 - 90% R.H. </div></td></tr>
        </table>
      </div>
      <center>
      </center></td>
    </tr>
    <tr align="right">
      <td>&nbsp;</td>
    </tr>
    
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
