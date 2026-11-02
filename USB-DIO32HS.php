<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>USB-DIO32HS</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
 <meta name="description" content="USB-1208HS High-speed analog input module with eight 13-bit, 1 MS/s analog inputs">
 <meta name="keywords" content="USB-1208HS, High-speed, analog, input, module, eight, 13-bit, 1 MS/s, analog, inputs, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1208FS, FS, Device, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
 <meta name="revisit after" content="14 days">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 


<link rel="stylesheet" type="text/css" href="estilos.css">

<style type="text/css">
<!--
.Estilo2 {font-size: smaller;
	font-style: italic;
}
-->
</style>
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
  <table width="100%"  border="0">
    <tr>
      <td align="center"><div align="left"><a href="productos">Productos</a>-&gt;<a href="usb_categorias">USB</a>-&gt;<a href="tarjetaDAQ">Tarjetas DAQ</a>-&gt;<a href="usb_ES_analogas">Entradas/Salidas An&aacute;logas</a>-&gt;<a href="usb_daq2">Dispositivo de E/S digital de alta velocidad USB</a>-&gt;USB-DIO32HS</div></td>
    </tr>
    <tr><td align="center"><h2> USB-DIO32HS      </h2></td></tr>
    <tr>
      <td><div align="center"><a href="javascript:openWin('imagenes/01/usb-1208hspop.jpg',600,600)"><img src="imagenes/02/usb-dio32hs-32-bit.jpg" width="265" border="0" alt="Click to enlarge imagen: USB-1208HS"></a></div></td>
    </tr>
    <tr>
      <td><div align="right"><a href="https://tienda.logicbus.com.mx/USB-1208HS_p_1336.html" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0 onClick=""></a></div></td>
    </tr>
    <tr>
      <td> <div align="center">        <strong>Dispositivo de E/S digital de alta velocidad USB-DIO32HS de 32 bits</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="justify"> 
	    <p> <strong> Descripci&oacute;n General</strong></br>
	    El USB-DIO32HS proporciona 32 bits de E / S digital de alta velocidad y cuenta con relojes independientes de exploración de entrada y salida, activación de hardware y software y detección / generación de patrones.</p>
      <p><strong>E/S Digital</strong></br>
	    Los 32 bits DIO están disponibles como dos puertos de 16 bits que son configurables en bits para entrada o salida. Cada puerto se configura de forma independiente, por lo que se pueden realizar tanto las operaciones de sondeo de software como las operaciones de exploración de hardware al mismo tiempo.
      Al realizar sondeo de software, el puerto puede contener cualquier combinación de bits de entrada o de salida. Cuando se realizan comprobaciones de salida con ritmo de hardware, todos los bits del puerto deben estar configurados para la salida. Sin embargo, para las exploraciones de entrada, se lee el estado actual de los bits del puerto que se configuran para la salida.</p>
	    <p><strong>Digitalización de salida digital</strong></br>
	    Cualquiera de los dos puertos puede emitir un patrón digital de 16 bits. El patrón se actualiza a una velocidad de hasta 8 MS / s, y se sincroniza utilizando el reloj de exploración de salida. Utilice ambos puertos para generar un patrón digital de 32 bits. Los datos de un puerto se leen y se almacenan en el búfer PEPS hasta que se lee el segundo puerto. Ambos puertos se emiten simultáneamente en el flanco ascendente de la siguiente señal de reloj de marcapasos.</p>
	    <p><strong>Transferencia de datos</strong></br>
	    El USB-DIO32HS utiliza un retardo entre el reloj de exploración de salida y el pin de transferencia de datos, lo que permite a un dispositivo externo que está recibiendo los datos saber que los datos son estables en ese punto y asegura una transferencia de datos coherente entre dispositivos.</p>
      <p><strong>Configuración Pull-Up/Down</strong></br>
      Los bits DIO se pueden extraer hasta 5V o hacia abajo a 0V a través de resistores de 47 kO a través de puentes incorporados.</p>
      <p><strong>E/S del reloj</strong></br>
      Los usuarios pueden realizar el ritmo de las operaciones de exploración de entrada con el reloj de exploración de entrada de entrada o con una señal externa. La frecuencia de reloj de entrada es 8 MHz, máximo.</br>
      Se mantiene un ciclo de trabajo del 50% cuando el reloj interno de entrada hace las operaciones. Cuando se utiliza un reloj externo, la señal se emite inmediatamente después de recibir la entrada del reloj externo.</p>
      <p><strong>EXTRAS</strong></br>
      El pin TRIG se utiliza para activar el nivel TTL externo y se puede utilizar para activar exploraciones de entrada o de salida. La latencia de activación es inferior a 1 μs. El modo de activación es seleccionable por software para sensibilidad de borde o nivel, y lógica alta o baja.</br>
      Cualquiera de los puertos digitales se puede utilizar para la activación de patrones. Se dispara una exploración cuando se detecta un patrón especificado. Los bits específicos pueden ser enmascarados o ignorados. La latencia de activación es 1 período de reloj de exploración. Puede introducir o emitir un patrón digital bajo el control de temporización de una señal de reloj.</p>
	  </div></td>
    </tr>
	<tr>
	  <td><div align="right">&nbsp;</div></td>
    </tr>
    <tr>
      <td>  <div align="left"><strong>Caracter&iacute;sticas:</strong>            
          <ul>
              <li>32 bits de E/S digitales TTL bidireccionales</li>
              <li>Detección y generación de patrones</li>
              <li>Velocidad de exploración de entrada de hasta 8 MS/s</li>
      <li>Velocidad de actualización hasta 8 MS/s</li>
      <li>250 μS (típico) tiempo de respuesta para lectura/escritura de un solo valor</li>
      <li>Relojes independientes de escaneo de entrada y salida</li>
      <li>Fuente de 24 mA, corriente de salida del sumidero de 10 mA</li>
      <li>Trigger externo y entradas de reloj</li>
      <li>Board-Only OEM Version Disponible  con conectores de cabecera</li>
      </ul>
      </div></td>
    </tr>
    <tr>
      <td><ul>
      </ul></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Software:</strong>
      <ul>
            <li>TracerDAQ ® para la adquisición y visualización de datos y la generación de señales</li>
            <li>Universal Libra ry  incluye soporte para Visual Studio® y Visual Studio® .NET, </br>
            incluyendo ejemplos de Visual C ++®, Visual C #®, Visual Basic® y Visual Basic® .NET</li>
            <li>Universal Libr ary para Android ™ incluye soporte y ejemplos para la 
            plataforma Android 3.1  (API nivel 12) y posterior</li>
            <li>Controladores DASY Lab ® y  NI La bVIEW ™</li>
            <li>Utilidad de software InstaCal ™ para la instalación, configuración y pruebas</li>
            <li><strong>Sistemas Operativos compatibles: </strong>Windows® 8/7 / Vista® / XP, 32 bits o 64 bits; 
            Android 3.1 (API nivel 12) y posterior; Linux®</li>
      </ul>
            
      <p><span class="Estilo2">Para ver todos nuestros software disponibles <a href="https://www.logicbus.com.mx/software">Click aqu&iacute;</a></span></p>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><a href="https://www.measurementsystems.co.uk/docs/mc/DS-USB-DIO32HS.pdf" target="_blank"><img src="imagenes/iconpdf.jpg" width="30" height="30" border="0" alt="Ver archivo pdf"> <br>
      Ver archivo pdf </a></div></td>
    </tr>
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
