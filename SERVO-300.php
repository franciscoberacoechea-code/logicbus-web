<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
 include("libreria/libreria.php");
?>



<html>
<head>
<title>SERVO-300 - Tarjeta controladora de Servomotor - Logicbus S.A de C.V</title>
 <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1024HLS, HLS"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Control de servomotor 3 ejes con CPU embebido. Transferencia comandos y estado desde PC. Drivers para DOS y Windows.">

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
      <td><a href="productos">Productos</a>-&gt;<a href="pci_boards">PCI</a>-&gt;<a href="sub_data6">Tarjetas PCI/ISA para Adquisici&oacute;n de Datos</a>-&gt;<a href="sub_data6-5">Tarjetas PCI/ISA para Control de Movimiento</a> -&gt;SERVO-300</td>
    </tr>
  <tr><td align="center"><h1 align="center"> SERVO-300</h1></td> </tr>
	<tr>
	  <td  align="center"><div align="center"><img src="imagenes/02/SERVO-300.jpg" alt="SERVO-300" border="0"></div></td>
    </tr>
	<tr>
	  <td  align="center"><div align="center"><strong>Tarjeta controladora de Servomotor de 3 ejes de alta velocidad</strong></div></td>
    </tr>
	<tr>
	  <td  align="center"><div align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0 onClick="atienda()" alt="Comprar"></a></div></td>
    </tr>
	<tr>
	  <td  align="center">&nbsp;</td>
    </tr>
	<tr>
	  <td  align="center"><div align="justify">El SERVO-300 es una tarjeta de control de servomotor de tipo de comando de pulso de 3 ejes. El CPU embebido de SERVO-300 realiza el comando de movimiento transferido desde una PC hist por medio de un FIFO de 2K bytes. Tambi&eacute;n manda la posici&oacute;n y el estado del PC host por medio de un FIFO de 2K bytes. &Eacute;ste buffer proporciona un buffer de tiempo y es muy &uacute;til para sistemas operativos windows. Los drivers para DOS, windows 95 y windows NT son proporcionados.</div></td>
    </tr>
	<tr>
      <td align="center">&nbsp;  </td>
    </tr>
	
    
	
   	 <tr><td><div align="left"><h2>Especificaciones & Informaci&oacute;n Adicional </h2>
   	 </div></td></tr>
	<tr><td>&nbsp;</td></tr>	
		<tr>
		  <td><div align="justify">
		   
	       <ul>		
              <li>Tipo comando, con un total de 42 comandos </li>
              <li>Modo Simulaci&oacute;n / lazo abierto / lazo cerrado </li>
              <li>CPU Embebido </li>
              <li>Interpolaci&oacute;n lineal, interpolaci&oacute;n circular</li>
              <li>Configuraci&oacute;n de direcci&oacute;n </li>
              <li>2500 puntos/compensaci&oacute;n de error de pitch del eje </li>
              <li>8 entradas digitales, 7 salidas digitales</li>
              <li>Dos switches para l&iacute;mite, un switch por eje</li>
              <li>Puede detectar el fallo del hardware </li>
              <li>Paro de emergencia por software /hardware </li>
              <li>Driver para DOS, Windows 95, Windows NT </li>
              <li>Aislamiento &oacute;ptico de 2500Vrms</li>
              <li>Software</li>
                  <ul>
                    <li>Kit de herramientas para DOS</li>
                    <li>Kit de herramientas para Windows 95/98</li>
                    <li>Kit de herramientas para Windows NT</li>
                    <li>Kit de herramientas para Windows 2000/XP</li>
                    <li>Kit de herramientas para LabVIEW 95/98</li>
                    <li>Kit de herramientas para LabVIEW NT</li>
                    <li>Kit de herramientas para LabVIEW 2000/XP</li>
                    <li>Driver para LINUX<br>   
                      <br>                     
                  </li>
                  </ul>
              <li><strong>Software DDA </strong><br>
				  Para un control preciso y velocidad ajustable, el Software DDA dividir&aacute; el comando en muchos comandos delta iguales. El comando maximo es un pulso de  2040 pulsos, as&iacute; que la velociadad m&aacute;xima es : 2040 / (0.0022 * DDA) * 60 / ENCODER. Por ejemplo, DDA=5, ENCODER=4000 pulso/rev.delta comando = 2040/5 = 255 velocidad de pulso = 2040/(0.0022*5) * 60/4000 = 2781 rpm. Por lo tanto es muy importante seleccionar un DDA propio a tu sistema.<br>
				  <br>
       	     <li><strong>El Modo de Operaci&oacute;n</strong><br>
				  Para desarrollar f&aacute;cilmente tu sistema la tarjeta  SERVO-300 proporciona tres modos de operaci&oacute;n: <br>
				  modo de simulaci&oacute;n / modo de lazo abierto / modo de lazo cerrado. Referir a MSERVO3_SET_CONTROL_MODE() command <br>
				  <br>
           	 <li><strong>Modo de Simulaci&oacute;n </strong></li><br>
  					En &eacute;ste modo, la tarjeta SERVO-300 simular&aacute; el perfil de movimiento. &Eacute;ste perfil es generado por comandos de movimiento del usuario y regresa la posici&oacute;n a la PC. La tarjeta no sacar&aacute; el comando al control del motor. Es muy efectivo y eficiente en la fase de dise&ntilde;o. El modo de simulaci&oacute;n puede ser operado  offline. El  usuario puede debuggear y desarrollarsu software previamente. Y si tu tienes una tarjeta secundarios, tambi&eacute;n puedes simular la entrada/salida digital como una m&aacute;quina. <br>
  				<br>	
              <li><strong> Modo de Lazo Abierto</strong></li><br>
  				En &eacute;ste modo, el usuario puede sacar directamente un voltaje constante al driver del servo. El valor constante puede configurarse con  el comando MSERVO3_CALV(). &Eacute;ste modo puede ser usado para configurar la velocidad de ganancia del lazo o manejar el inversor. La posici&oacute;n y velocidad pueden ser recibidos desde el comando MSERVO3_GET_CARD (cardNo) en una interrupci&oacute;n de  timer (~10ms). <br>
			  <br>
              <li><strong>Modo de Lazo Cerrado </strong></li><br>
			  En &eacute;ste modo, la tarjeta realiza el controlador  PD. Tambi&eacute;n ejecuta las siguientes  funciones. <br>
			  1. Compensaci&oacute;n de error de Pitch<br>
			  2. Auto protecci&oacute;n de Switch de L&iacute;mite<br>
			  3. Detecci&oacute;n de fallos de Hardware<br>
			  La informaci&oacute;n relacionada puede ser recibida desde el comando MSERVO3_GET_CARD (cardNo) usando la interrupcion del timer <br>
			  SERVO-300 esta basado en un microprocesador y un comando de tipo servo de 3 ejes. Contiene un FIFO de 2Kbytes para recibir comando de movimiento desde una PC host, y tambi&eacute;n manda la posici&oacute;n y estado a la PC host por medio de ptro FIFO de 2K bytes. El perfil de movimiento es generado por un  microprocesador. &Eacute;ste microprocesador tambi&eacute;n soporta la funci&oacute;n de auto protecci&oacute;n. Cada E/S digital soporta aislamiento &oacute;ptico de  2500Vrms. <br>
			  <br>
              <li><strong>El Sistema de  Control </strong></li> <br>
  				El tiempo de muestreo es 2.2ms para un sistema de control de 3 ejes. El lazo de control incluye un controlador PD y un compensador de error de pitch. El par&aacute;metro de ganancia, Kp y Kd, del controlador PD puede configurarse desde una PC host. Los  errores de  pitch son registrados en una tabla de tama&ntilde;o 2500 que puede ser configurado por el usuario. El pitch de compensaci&oacute;n es 256 pulsos, asi que el rango de compensaci&oacute;n es 2500*256=640000 pulsos. 
	       </ul>           
		  </div></td>
		</tr>		
		<tr><td><div align="left">&nbsp;</td></tr>	
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
