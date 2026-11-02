<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ISaGRAF, Software de programación en escalera para PLC y PAC | Logicbus</title>
<meta name="description" content="ISaGRAF es un software de programación para PLC y PAC, basado en el lenguaje de control de automatizacion internacional IEC61131-3, para los 5 lenguajes de PLC">

 <meta name="copyright" content="Logicbus S.A. de C.V.">
 <meta name="author" content="Logicbus"> 
 <meta name="keywords" content="ISaGRAF, software de programacion, software para PLC, plc software, programacion plc, programacion de plc, programas para plc, software para plc, software para programar plc, software de plc">
<meta name="revisit after" content="14 days">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
			};
</script>

 <style>
	.carrito{
		width: 40px;
		border: 0;
	}

	h1{
		text-align: center;
	}

 	 p{
 	 	text-align: justify;
 	 }
	</style>
 
</head>

<body onLoad="menu_actual();">

<?php
  arriba();
  lado1("no","");
 ?>

<div id="main">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="productos">

Productos</a>-&gt;<a href="embedded_controllers">PLC</a>-&gt;<a href="uPAC-7186EGD">Controlador &mu;PAC-7186EGD</a>-&gt;Programable en ISaGRAF</td>

<h1>ISaGRAF</h1>

<div align="center"><img src="imagenes/02/isagraf/isagraf_pac.jpg" alt="ISaGRAF"></div>

<p><font color="#0000CC" size="3"><strong>&iquest;Qu&eacute; es ISaGRAF?</strong></font><br>
ISaGRAF est&aacute; basado en el &uacute;nico lenguaje de control de automatizaci&oacute;n internacionalmente reconocido, el  IEC61131-3, para soportar completamente los 5 lenguajes de  PLC: Escalera (LD), Diagrama a Bloques (FBD), Tabla de Funciones Secuenciales (SFC), Texto Estructurado (ST), y Lista de Instrucciones (IL) mas el diagrama de flujo (FC).<br>
ISaGRAF es soportado en sistemas operativos Windows 95/98/NT/2000/XP, no est&aacute;  soportado en Windows Vista. <br><br>

<img src="imagenes/02/isagraf/New_Hot_Features.gif" alt="New Hot Features"><br>
1.Wincon-8xx7 puede mandar correos electr&oacute;nicos con un archivo adjunto.<br>
<center><img src="imagenes/02/isagraf/email_eth.jpg" width="520" height="403" alt="Diagrama Wincon-8xx7 puede mandar correos electrónicos con un archivo adjunto"></center><br><br>
2. Sistema de autoreporte por internet de adquisici&oacute;n de datos E/S, documento, Programas demo de VC++ 6.0 , VB 6.0 y ISaGRAF est&aacute;n listos para descargarse.<br>
<center><a href="imagenes/02/isagraf/udp_ip_eng.jpg" target="_blank"><img src="imagenes/02/isagraf/udp_ip_eng.jpg" width="520" height="283" alt="Click To Extend" border="0"></a></center>

<strong>Caracter&iacute;sticas Principales: </strong>
		  <ol>
			<li value="1">ISaGRAF Versiones 3.4 & 3.5 ahora soportan &quot;Arreglos de variables &quot;</li>
			<li>Wincon-8xx7 / 8xx6 ahora soporta E/S de Ethernet, el tiempo de escaneo de E/S es alrededor de 30 ~ 40 ms para 3000 a 6000 canales de E/S </li>
			<li>Controlador Redundante: FAQ-041 & FAQ-036</li>
			<li>W-8xx7 / 8xx6 reporta datos autom&aacute;ticamente a la PC / InduSoft o PC / HMI</li>
			<li>I-8437 / 8837 / 8437-80 / 8837-80 soporta max. 2 puertos Modbus RTU esclavo . Uno es COM1:RS232 , el otro es COM3:RS232/485</li>
			<li>W-8xx7 / 8xx6 soporta max. 5 puertos  Modbus RTU esclavo. COM2:RS232 o COM3:RS485, COM5 a COM8 (RS232 o RS485 o RS422)</li>
			<li>W-8xx7 / 8xx6 soporta max 10 puertos Modbus RTU / ASCII maestro</li>
			<li>Display de mensajes de controladores ISaGRAF a EKAN - Modview display LED </li>
		  </ol>
<center>
<strong>I-7188XG:  Convertidor serial Modbus para m&oacute;dulos E/S de la serie I-7000 & I-87K.</strong><br><br>
<a href="imagenes/02/I-7188XG_dg.jpg" alt="I-7188XG_dg" target="_blank"><img src="imagenes/02/I-7188XG_dg.jpg" alt="Modbus serial (RS232/RS485)"></a><br><br>
<strong>I-7188EG: Modbus serial & TCP/IP para m&oacute;dulos de E/S de la serie I-7000 & I-87K.</strong><br><br>
<a href="imagenes/02/I-7188EG_dg.jpg" alt="I-7188EG_dg" target="_blank"><img src="imagenes/02/I-7188EG_dg.jpg" alt="Diagrama Modbus serial & TCP/IP para módulos de E/S"></a>
</center>

<br><br>

<p>La aplicaci&oacute;n ISaGRAF puede ser f&aacute;cilmente aplicado al <strong>I-8417</strong> / <strong>8817</strong> / <strong>8437</strong> / <strong>8837</strong> , <strong>I-7188E G/XG</strong> y los PAC <strong>Wincon-8037/8337/8737</strong>. Agregando programaci&oacute;n ISaGRAF, hay tres ventajas distintas. La primera es que el lenguaje PLC es f&aacute;cil de dise&ntilde;ar, en lugar de lenguaje C, el ISAGRAF soporta los 5 lenguajes IEC61131-3 mas el lenguaje de diagrama de flujo(FC).<br><br>
La segunda ventaja es su habilidad de comunicaci&oacute;n poderos. Hay 4 puertos de comunicaci&oacute;n en los controladores I-84X7 / 88X7. COM1 es un simple dispositivo RS232 que es vinculado a la  PC corriendo el ISaGRAF Workbench. Soporta el protocolo Modbus. Para el controladores I-8x17, COM2 es un dispositivo RS485 de 2 hilos que es construido como un sistema de red Modbus para mas de  255 controladores. Para el controlador I-8x37, COM2 es un puerto ethernet que soporta el protocolo Modbus TCP/IP que toma tu sistema de control al mundo de  Internet. COM3 es un dispositivo RS232/RS485. Puede ser dise&ntilde;ado por el usuario o ser construido como una red Fbus RS485 para que as&iacute; cada controlador  I-84X7 / 88X7 puede accesar los datos desde otros controladores  I-8xx7 en la misma red Fbus, y por lo tanto convertirse en un Sistema de Control Dsitribuido. COM4 es un dispositivo RS232 puede ser dise&ntilde;ado por el usuario.</p>

<div align="center">
<img src="imagenes/02/isagraf/isagraf_sw.jpg" alt="ISaGRAF">
<img src="imagenes/02/isagraf/isagraf_network.jpg" alt="ISaGRAF">
</div>
<br><br>

<p>La serie I-7000 y I-87K son soportados tambi&eacute;n por los controladores I-8xx7 y I-7188EG/XG. Mediante el puerto  RS485 los controladores I-8xx7 (COM3) y I-7188EG/XG (COM2), los m&oacute;dulos de la serie I-7000 / I-87K pueden ser utilizados por E/S remotos, controlados por el I-8xx7 y I-7188EG/XG.<br>
La tercera ventaja es que la integraci&oacute;n con el software HMI y MMI sean f&aacute;ciles y poderosos cuando se usa el protocolo  Modbus. MMI es similar al panel  Touch 506/509/510 o cualquier hardware o software que soporten el protocolo Modbus.</p><br><br>

<strong><font size="3">Caracter&iacute;sticas</font></strong><br><br>

<p><img src="imagenes/02/isagraf/f1_hmi.jpg" width="200" height="89" align="right" alt="Web HMI = HMI running on IE">
<strong>Web HMI est&aacute; disponible ahora</strong><br>
WebHMI es un mecanismo de software libre que viene con algunos PAC (Programmable Automation Controller), WebHMI te ofrece  monitorear y controlar el controlador local y remoto por medio de  Internet Explorer corriendo en la PC.</p>
<br>
<p><a href="imagenes/02/isagraf/f2_sms.jpg" target="_blank"><img src="imagenes/02/isagraf/f2_sms.jpg" width="200" height="89"  alt="Click To Extend" align="right"></a>
<strong>SMS</strong><br>
El servicio de mensajes cortos se puede integrar con I-8417/8817/8437/8837, I-7188EG, I-7188XG &amp; Wincon-8037/8337/8737 ya que pueden integrarse con un Moden GSM. Esto permite al usuario solicitar informaci&oacute;n o controlar algo desde su propio celular al controlador ISaGRAF. Aparte el controlador puede mandar informaci&oacute;n y alarmas al celular del usuario.</p>
<br>
<p><img src="imagenes/02/isagraf/f3_datalog.jpg" width="200" height="89"  align="right" alt="S256/S512 Registrador de Datos">
<strong>Registrador de Datos </strong><br>
Datos, fecha &amp; hora pueden registrarse en el S256/S512 para I-8xx7, mientras que los X607/X608 son para I-7188EG/XG, y despu&eacute;s la PC puede registrar esos datos por medio de  RS232/RS485, ethernet &amp; Modem.</p>
<br>
<p><img src="imagenes/02/isagraf/f4_mmicon.jpg" width="200" height="89" align="right">
<strong>MMICON:  Man Machine Interface</strong><br>
El I-8417/8817/8437/8837 & I-7188EG/XG soporta MMICON, que tiene una LCD de 240 x 64 puntos y un teclado 4 x 4. El usuario puede utilizarla para mostrar im&aacute;genes, cadenas, enteros, flotantes y entradas como un caracter, cadena, entero y flotante. Tora la l&oacute;gica de control es escrita en el programa ISaGRAF.</p>			
<br><br>
<p><a href="imagenes/02/isagraf/f5_auto-scan.jpg" target="_blank"><img src="imagenes/02/isagraf/f5_auto-scan.jpg" width="150" height="100" alt="Click To Extend" align="right"></a>
<strong>Autoescaneo de E/S </strong><br>
&Eacute;sta es una herramienta para  I-8417/8817/8437/8837 para autoescanear tarjetas E/S y autodeclarar variables para cada canal de E/S encontrado.</p>
<br><br>
<p><a href="imagenes/02/isagraf/f6_spotlight_simple_hmi.jpg" target="_blank"><img src="imagenes/02/isagraf/f6_spotlight_simple_hmi.jpg" width="150" height="100" alt="Click To Extend" align="right"></a>
<strong>Spotlight : Simple HMI</strong><br>
Spotlight es una simple HMI que viene con ISaGRAF lo que permite al usuario para integrar <strong>&Iacute;conos Booleanos, Gr&aacute;fica de Barras, Curva de Tendencias, Texto de Valores, Imagen de mapa de bits</strong> para hacer la aplicaci&oacute;n m&aacute;s amigable.</p>
<br><br>
<p>
<strong>Monitoreo Remoto &amp; Descarga Via Modem</strong>
<a href="imagenes/02/isagraf/f7_to_one_controller.jpg" target="_blank"><img src="imagenes/02/isagraf/f7_to_one_controller.jpg" width="150" height="70" alt="Click To Extend" align="right">
</a><br>
El COM4 de los controladores I-8417/8817/8437/8837 soporta se&ntilde;ales completas de m&oacute;dem. Tiene embebido el protocolo Modem_Link para descargar y monitorear remotamente. Todo lo que tienes que hacer es marcar a un l&iacute;nea telefonica desde tu PC al controlador que est&aacute; lejos para monitorear toda la informaci&oacute;n que requieras.</div></td>

<p><strong>ISaGRAF Workbench</strong><br>
    El  workbench ISaGRAF, que es compatible con Windows 95, 98, NT o Windows 2000 PC, incluye: 
    <ul>
<strong>Editores Gr&aacute;ficos para programaci&oacute;n:</strong>
  <li>Diagrama Esclaera </li>
  <li>Diagrama a bloques</li>
  <li>Tabla de funciones secuenciales</li>
  <li>Diagrama de Flujo </li><br>
<strong>Editores de Texto para programaci&oacute;n:</strong>
  <li>Lista de Instrucciones</li>
  <li>Texto Estructurado </li><br>
<strong>Herramientas poderosas para:</strong>
  <li>Descarga de aplicaciones </li>
  <li>Debugger y controlador en linea</li>
  <li>Simulacion</li>
  <li>Referencia Cruzada</li>
  <li>Administraci&oacute;n del Proyecto</li>
  <li>Generaci&oacute;n de documento</li>
  <li>Respaldo y restauraci&oacute;n de  aplicaciones</li>
  <li>Animaci&oacute;n de debuggeo gr&aacute;fico</li>
</ul>
</p>
	  <div align="center">
	    <table>
		  <tr>
		    <td><div align="justify"><strong>Editor  LD</strong><br>
		      El diagrama escalera  (LD) es uno de los m&eacute;todos m&aacute;s familiares que representan las ecuaciones l&oacute;gicas y acciones simples. Los contactos representan argumentos de entrada y las bobinas, las salidas que estan siendo utilizadas.<br>
		      El editor  ISaGRAF Quick LD Editor te ofrece el mejor compromiso ente capacidades gr&aacute;ficas de alto nivel y programaci&oacute;n de teclado f&aacute;cil de usar.<br>
		      Con las herramiendas de edici&oacute;n de gr&aacute;ficos  ISaGRAF el usuario puede combinar  programaci&oacute;n LD y FBD en el mismo diagrama. Cualquier funci&oacute;n del bloque de funciones de la librer&iacute;a pueede ser llamada desde &eacute;ste editor.</div></td>
			<td><img src="imagenes/02/isagraf/ed1_QuickLDEditor.jpg" alt="Quick LD Editor"></td>
		  </tr>
		  <tr>
		    <td><div align="justify"><strong>Editor </strong><strong>FBD </strong><br>
		      El diagrama a bloques (FBD) es un lenguaje basado en gr&aacute;ficos lo que permite al usuario hacer procedimientos complejos tomando una funci&oacute;n existente desde la librer&iacute;a  ISaGRAF, y uniendolas en la pantalla. ISaGRAF incluye una libreria con mas de  60 bloques est&aacute;ndares listos para usarse. </div></td>
			<td><img src="imagenes/02/isagraf/ed2_FBDEditor.jpg" alt="FBD Editor"></td>
		  </tr>
		  <tr>
		    <td><div align="justify"><strong> Editor </strong><strong>SFC</strong><br>
		      La tabla de funciones secuenciales  (SFC) divide el ciclo de proceso en un numero de pasos bien definidos, separados por transiciones. SFC es el lenguaje n&uacute;cleo del est&aacute;ndar IEC61131-3. Los otros lenguajes son usados para describir acciones hechas con los pasos y las condiciones l&oacute;gicas para las  transiciones. Los procesos paralelos pueden ser descritos f&aacute;cilmente usando el SFC.</div></td>
			<td><img src="imagenes/02/isagraf/ed3_SFCEditor.jpg" alt="SFC Editor"></td>
		  </tr>
		  <tr>
		    <td><div align="justify"><strong>Editpr de texto estructurado </strong><br>
		      Es un lenguaje estructurado de alto nivel con una sintaxis parecida a Pascal pero mas intuitiva a la ingenier&iacute;a de automatizaci&oacute;n. &Eacute;ste lenguaje es principalmente utilizado para implementar procedimientos complejos que no pueden ser f&aacute;cilmente expresados con lenguajes gr&aacute;ficos (IF / THEN / ELSE, FOR, WHILE...).</div></td>
			<td><img src="imagenes/02/isagraf/ed4_StructuredTextEditor.jpg" alt="Structured Text Editor"></td>
		  </tr>
		  <tr>
		    <td><div align="justify"><strong>Editor de Lista de instrucciones </strong><br>
		      Este es un lenguaje de bajo nivle. En Agosto de  1996, el editor ISaGRAF IL recibi&oacute; el certificado de compilador PLCopen con un rating-class de IEC61131-3.</div></td>
			<td><img src="imagenes/02/isagraf/ed5_InstructionListEditor.jpg" alt="Instruction List Editor"></td>
		  </tr>
		  <tr>
		    <td><div align="justify"><strong>Editor de Diagrama de Flujo </strong><br>
		    El diagrama de flujo no es un lenguaje IEC61131-3. Fue agregado a ISaGRAF en 1998 empezando con la versi&oacute;n 3.3. FC es un lenguaje basado en gr&aacute;ficos. Combina &quot;test&quot; , &quot;action&quot; , &quot;flow&quot;, y otros mecanismos para realizar un proceso de control.</div></td>
			<td><img src="imagenes/02/isagraf/ed6_FlowChartEditor.jpg" alt="Flow Chart Editor"></td>
		  </tr>
	   </table>
	</div>
<br><br>

<h2>Productos de ISaGRAF</h2>
	 <table class="table table-striped">
				<tbody>
				
					<tr>
					    <td><img src="imagenes/02/isagraf-256-e.jpg" alt="Programación en escalera para PLC's y PAC's: ISaGRAF-256" class="img-responsive" title="Programación en escalera para PLC's y PAC's: ISaGRAF-256"></td>
						<td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
						<p><a href="ISaGRAF-256" target="_self"><strong>ISaGRAF-256</strong></a><br>
						Software de programación ISaGRAF de 256 tags de entrada y salida, que permite crear sistemas de control locales o distribuidos.</p>
						</td>
		    			<td><a href="https://tienda.logicbus.com.mx/ISaGRAF-256_p_2237.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
		    			</td>
		 			</tr>

 					<tr>
	    				<td><img src="imagenes/02/isagraf-32-e.jpg" alt="Adquisición de datos Ethernet" class="img-responsive" title="Adquisición de datos Ethernet" ></td>
	    					<td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
		    					<p><a href="ISaGRAF-32" target="_self"><strong>ISAGRAF-32</strong></a><br>
		    					Software de programación ISaGRAF de 32 tags de entrada y salida, que permite crear sistemas de control locales o distribuidos.</p>
		    				</td>
    						<td><a href="https://tienda.logicbus.com.mx/ISAGRAF-32_p_2236.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
    						</td>
  					</tr>
  				</tbody>
  			</table>
 <br><br>
        </div>
      </div>
   </div>
</div>
</div>
</div>

<?
 abajo();
?>
</body>
</html>