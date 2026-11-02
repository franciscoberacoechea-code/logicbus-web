

<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Productos/Software/NAPOPC Server</title>

<meta name="keywords" content=" Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria,  Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, NAPOPC, server, servidor, software">
<meta name="description" content="NAPOPC server">
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
 

<table width="100%">
  <tr>
     <td colspan="2" height="13"><a href="productos">Productos</a>-&gt;<a href="software">Software</a>-&gt;NAPOPC</td>
  </tr>
	<tr><td colspan="2"><div align="center">
	  <h2>&iquest;Qu&eacute; es el servidor NAPOPC?</h2>
	</div></td></tr>
  	<tr><td colspan="2"><div align="center"><img src="imagenes/02/napopc-2.jpg" alt="NAPOPC"></div></td></tr>
	<tr><td colspan="2"><div align="justify"><p>&nbsp;</p>
	<strong>Introducci&oacute;n
	<p>&nbsp;</p></strong></div></td></tr>
	<tr><td colspan="2"><div align="justify"><font color="#FF0000">OPC</font> es una serie de especificaciones est&aacute;ndar. El primer est&aacute;ndar (originalmente llamada simplemente especificaci&oacute;n OPC y ahora llamada<font color="#0000FF"> Especificaci&oacute;n de Acceso de Datos</font>) resulta de la colaboraci&oacute;n de un n&uacute;mero de proveedores de automatizaci&oacute;n de todo el mundo trabajando en cooperaci&oacute;n con Microsoft. Originalmente basado en el COM (component object model) OLE de Microsoft y DCOM (distributed component object model) la especificaic&oacute;n define un set de objetos, interfaces y m&eacute;todos para usar en el control de procesos yu en aplicaciones de manufatura y automatizaci&oacute;n para facilitar la interoperabilidad. Ahora hay cientos de Acceso de Datos OPC y clientes. </div></td></tr>
	<tr>
	<td width="58%"><div align="justify"><br>
	    <span class="Estilo1">El servidor</span><font color="#FF0000"> NAPOPC DA </font>es un servidor OPC fuera de proceso el cual utiliza una interfaz para mostrar un arbol jer&aacute;rquico de dispositivos y grupos con sus tags asociados. Un grupo puede ser definido como subcategor&iacute;a conteniendo uno o mas tags. Un dispositivo puede tener muchos subgrupos de tags. Todos los tags pertenecen a su dispositivo cuando son escaneados para que realices E/S. (OPC: &quot;OLE for Process Control&quot; y DA: "Data Access").</div></td>
	<td width="42%"><div align="justify"><img src="imagenes/02/introduction.jpg"></div></td>
	</tr>
	<tr><td colspan="2"><div align="justify"></div></td></tr>
	<tr><td colspan="2"><div align="justify"><p>&nbsp;</p><strong>Support</strong><p>&nbsp;</p></div></td></tr>
	<tr><td colspan="2"><div align="justify">
		<ul>
					<li>Sistemas Operativos Windows 95/98/ME/2000/NT/XP</li>
					<li>M&oacute;dulos ICPDAS I-7K/I-8K/I-87K I/O</li>
					<li>Controladores Embebidos ICPDAS I-7188 </li> 
					<ul>
						<li>Controladores Embebidos(I-8410/I-8411/I-8810/I-8811)</li> 
						<li>Controlador Embebido Internet/Ethernet (I-8430/I-8431/I-8830/I-8831) </li>
						<li>Controlador EmbebidoISaGRAF  (I-8417/I-8437/I-8817/I-8837) </li>
						<li>Controlador Embebido Modbus/TCP (I-8430-MTCP/I-8431-MTCP/<br>I-8830-MTCP/I-8831-MTCP/I-7188EX-MTCP/I-7188EXD-MTCP) </li>
					</ul>
					<li>Compatible con la mayor&iacute;a de las plataformas de desarrollo (Visual C++,Visual Basic, Visual Studio .Net) </li>
					<li>Compatible con todos los Clientes OPC locales y remotos (Acceso Remoto  usando la t&eacute;cnica DCOM) </li>
					<li>Hemos probado los servidores con los siguientes paquetes: </li>
					<ul>
						<li>Programa cliente proporcionado por Factory Soft Inc. (Visual Basic 5.0 Demo) </li>
						<li>LabVIEW</li>
						<li>ServerExplore proporcionado por  National Instruments</li> 
						<li>WIZCON</li>
						<li>iFix</li>
						<li>InduSoft</li>
						<li>CitectSCADA</li>
		  </ul>
						<li>Compila con especificaci&oacute;n OPC V2.0 </li>

	</ul>
	</div></td></tr>
	
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>

