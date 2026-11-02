<?
include("libreria/libreria.php");
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/GPIB/Computer Interfaces</title>

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
  <table width="100%" border="0">
  <tr>
    <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="gpib_ieee488">GPIB</a>-&gt;Interfaces de Computadora </td>
  </tr>
  <tr><td colspan="2"><h2 align="center">Computer Interfaces</h2></td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr><td width="23%" align="center"><div><a href="PCI-488"><img src="imagenes/01/pci-488.gif" alt="PCI-488" width="150"></a></div></td>
  <td width="77%"><a href="PCI-488"><strong>PCI-488 / PCI-GPIB </strong></a>
    <div align="justify">Interfaz PCI IEEE 488.2 est&aacute;ndar </div></td></tr>
  <tr><td colspan="2"><hr color="#CCCCCC" align="center"></td></tr>
  <tr><td align="center"><a href="USB-488"><img src="imagenes/01/USB-488small.gif" alt="USB-488" width="150"></a></td>
  <td><a href="USB-488"><strong>USB-488 / USB-GPIB </strong></a>
    <div align="justify">Interfaz para Computadoras comptibles con USB IEEE-488.2</div></td></tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
 </table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>