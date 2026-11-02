<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Productos/PAC - Controladores Automaticos Programables/WinCon</title>
 <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1024HLS, HLS"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <table width="100%"  border="0">
    <tr>
      <td colspan="2" align="center"><h2> <strong>W-8x3x Hardware Specification</strong><br>
      </h2></td>
    </tr>
		<tr>
      <td colspan="2" align="center">&nbsp;  </td>
    </tr>	
	<tr align="right">
      <td><div align="center"><img src="imagenes/02/spec.gif">
	</div>     
	  </td>
    </tr>
    <tr align="right">
      <td ><div align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0 onClick="atienda()"></a></div></td>
    </tr>
    <tr><td><div align="justify"><strong>Specifications:</strong></div></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><div align="justify">
		 The MCU (Main Control Unit) of WinCon-8x3x is the powerhouse of the W-8x3x. Each MCU comprises a Central Processor Module(CPM) and a wide-range power supply. Except the zero-slot version, there is a three or seven slot backplane for either 3 or 7 Parallel or Serial I/O modules. The CPM is powerful integrated processing engine comprising a CPU, the internal 32M bytes flash memory and 64M bytes SDRAM. The CPM offers an additional memory medium in Compact Flash type II format. Ethernet port is also part of the basic configuration. The CPM is equipped with PC interface: PS/2(keyboard and mouse), VGA port and USB port. Further system interfaces or fieldbus connections such as Modbus/TCP and CANopen/DeviceNet are available in the basic MCU of WinCon.
	</div></td></tr>  
	<tr><td>&nbsp;</td></tr>
	<tr><td align="left">
	<table cellspacing="2" cellpadding="3">
      <tr>
        <td  width="154" bgcolor="#000000"><font color="#FFFFFF">WinCon-8000 with Display</font></td>
        <td  width="150" bgcolor="#d7d7d7"><strong>W-8031/8037/8039-G </strong></td>
        <td  width="150" bgcolor="#d7d7d7"><strong>W-8331/8337/8339-G </strong></td>
        <td  width="150" bgcolor="#d7d7d7"><strong>W-8731/8737/8739-G </strong></td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Processor</strong> </td>
        <td  bgcolor="#e1e1e1" colspan="3">compatible with Intel Strong ARM CPU, 206MHz</td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Operating System </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">Windows CE.NET</td>
      </tr>
      <tr>
        <td  valign="top" width="154" bgcolor="#d7d7d7"><strong>Pre-load Software </strong></td>
        <td  bgcolor="#d7d7d7" colspan="3">Standard WinConSDK for W-8031/8331/8731 <br>
      ISaGRAF Software for W-8037/8337/8737 <br>
      InduSoft Software for W-8039/8339/8739 </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>SDRAM </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">64M bytes</td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Flash </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">32M bytes </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>EEPROM </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">16K bytes </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Expansion Slot </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">1 x Compact Flash type II insert with ejector</td>
      </tr>
      <tr>
        <td  valign="top" width="154" bgcolor="#d7d7d7"><strong>Interface </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">1x USB1.1, <br>
      2 x PS/2 port(Keyboard and Mouse), <br>
      1 x VGA port </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"> <strong>Ethernet Port  </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">1 x RJ45, 10BaseT </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>COM 2</strong> </td>
        <td  bgcolor="#e1e1e1" colspan="3">9-pin D-Sub (RS-232) </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>COM 3</strong> </td>
        <td  bgcolor="#e1e1e1" colspan="3">2-wire Terminal Block (RS-485) </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Additional Serial Port </strong></td>
        <td  bgcolor="#d7d7d7" colspan="3">N/A </td>
      </tr>
      <tr>
        <td  valign="top" width="154" bgcolor="#d7d7d7"><strong>Default Function </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">64-bit hardware unique serial number <br>
      Reset button <br>
      Power LEDs <br>
      Watchdog Timer <br>
      Real Time Clock </td>
      </tr>
      <tr>
        <td  valign="top" width="154" bgcolor="#d7d7d7"><strong>I/O Expansion Slot </strong></td>
        <td  width="139" bgcolor="#d7d7d7">0 </td>
        <td  width="139" bgcolor="#d7d7d7">3 </td>
        <td  width="139" bgcolor="#d7d7d7">7 </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Operating Temp. </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">-25&deg;C to +75&deg;C </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Storage Temp. </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">-30&deg;C to +85&deg;C </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Humidity </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">5~95% </td>
      </tr>
      <tr>
        <td  width="154" bgcolor="#d7d7d7"><strong>Power Supply </strong></td>
        <td  bgcolor="#e1e1e1" colspan="3">20W, Unregulated +10Vdc to +30Vdc </td>
      </tr>
      <tr>
        <td  valign="top" width="154" bgcolor="#d7d7d7"><strong>Dimensions (LxHxD)(mm) </strong></td>
        <td  width="139" bgcolor="#d7d7d7">114x110x90 </td>
        <td  width="139" bgcolor="#d7d7d7">229x110x90 </td>
        <td  width="139" bgcolor="#d7d7d7">354x110x90 </td>
      </tr>
    </table></td></tr>
	</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
