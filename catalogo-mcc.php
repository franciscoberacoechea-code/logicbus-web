<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Nuevo catálogo de MCC</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="description" content="Descubre la nueva integracion de Python a productos MCC">
<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoc&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuct&aacute;n, Yucatan, Zacatecas, MCC, PYTHON, python, DAQ, daq, mcc, API Python, api python, git python, github python">
<meta name="revisit after" content="14 days">

  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=23)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=23)">

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

<style>
h1 { 
    font-size: 1.5em;
    font-weight: normal;
}
h2 { 
    font-size: 1em;
    font-weight: bold;
}
img.resp {
    
	max-width: 100%;
	height:auto;
}
</style>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">

<iframe src="https://www.logicbus.com.mx/pdf/01/catalogo-mcc.pdf" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
</div>

<?
 abajo();
?>
</body>
</html>