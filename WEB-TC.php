<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>DAQ temperatura via internet WEB-TC - Logicbus S.A de C.V</title>
<meta name="description" content="Tarjeta USB con 8 canales de entrada de termopar J, K, R, S, T, N, E y B para adquisici&oacute;n de temperatura v&iacute;a servidor WEB. 24-bits de resoluci&oacute;n. Sensor de temperatura ambiente incorporado.">

<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, [KEYWORDS] ">

<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">


<!-- Bootstrap core CSS -->
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="libreria/estilos.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="libreria/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]color azul#184797-->
      <script language="javascript">
        function menu_actual(){
          document.getElementById("productos").className = "dropdown active";
        };
      </script>

</head>
<body onLoad="menu_actual();">
<style type="text/css">
  li{
    text-align: left;
  }
  p{
    text-align: justify;
  }
  h1{
    text-align: center;
  }

</style>
<?
 arriba();
 lado1("no","");
?>

<div id="main">
  <div class="container pagina_producto">
    <div class="row">
      <div class="col">

		<div class="ruta_productos">
		<a href="productos">Productos</a>-&gt;<a href="ethernet_daq">Ethernet</a>-&gt;WEB-TC
		</div>

		<h1 class="titulo_producto">WEB-TC</h1>

		<!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
        <div align="center">
        <img src="imagenes/01/web-tc.jpg" width="25%" alt="PLC Compacto XP300" title="PLC Compacto XP300"><br>
        <strong>Tarjeta USB con 8 canales de entrada de termopar J, K, R, S, T, N, E y B para adquisici&oacute;n de temperatura v&iacute;a servidor WEB. 24-bits de resoluci&oacute;n. Sensor de temperatura ambiente incorporado.</strong>
        </div>


          <div class="row">
            <div class="col" align="right"><!--Link a TV MX-->
              <a href="https://tienda.logicbus.com.mx/WEB-TC_p_1429.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" align="right"></a>
           </div>
         </div>

	    <p>El WEB-TC es un dispositivo de termopar de medici&oacute;n con un servidor web incorporado. Ypu puede conectar el dispositivo a un puerto o concentrador Ethernet, iniciar su navegador y ver los datos actuales. El WEB-TC es totalmente compatible con la Biblioteca Universal y TracerDAQ. Estos programas de software est&aacute;n incluidos en el CD.</p>

		<h2>Interfaz web.</h2>
		<p>La interfaz web incorporada WEB-TC proporciona acceso a los datos actuales y a los ajustes de configuraci&oacute;n mediante un navegador web est&aacute;ndar. Vaya a la p&aacute;gina de inicio del dispositivo ingresando la URL que est&aacute; impresa en el dispositivo en el navegador. Vea los medidores de termopar actuales y los datos del canal, y configure las opciones de hardware desde la p&aacute;gina de inicio del dispositivo. Solo un usuario puede cambiar las opciones de configuraci&oacute;n en el dispositivo a la vez. La interfaz web est&aacute; integrada en el firmware del dispositivo. y no necesita ser instalado en una computadora. No se requiere software externo que no sea una conexi&oacute;n TCP/IP del navegador web.</p>

		<h2>Conexi&oacute;n TCP/IP</h2>
		<p>Se requiere una conexi&oacute;n TCP/IP para acceder a la interfaz web. Conecte el puerto Ethernet 10Base-T del dispositivo a una red local o amplia que use el cable suministrado de Etherned, a una computadora sinlge a trav&eacute;s de un concentrador que use el cable de Ethernet suministrado, o directamente a una computadora que use un cable cruzado est&aacute;ndar CAT-5.</p>

		<h1>Caracter&iacute;sticas de WEB-TC</h1>
		<p>El WEB-TC proporciona ocho canales de termopar y ocho canales de E/S digitales. Un suministro externo enviado con el dispositivo proporciona alimentaci&oacute;n. Los LED incorporados muestran el estado de la comunicaci&oacute;n y la alimentaci&oacute;n externa. Todas las opciones configurables de hardware se pueden seleccionar con el navegador web o InstaCal. Las aplicaciones configurables en red se pueden configurar con InstaCal. Al usar InstCal, si la configuraci&oacute;n de inicio de sesi&oacute;n se ha cambiado de la predeterminada, se requieren un nombre de inicio de sesi&oacute;n y una contrase&ntilde;a para cambiar la configuraci&oacute;n.</p>

		<h2>Canales de entrada de termopar.</h2>
		<p>El WEB-TC proporciona ocho canales de entrada de termopar diferencial. Se proporciona un codificador de anal&oacute;gico a digital (A/D) de 24 bits para cada par de entradas anal&oacute;gicas. Puede tomar medidas de los termopares tipo J, K, R, S, T, N, E y B. El tipo de termopar es programable por software para cada canal. Se proporcionan cuatro sensores de compensaci&oacute;n de uni&oacute;n fr&iacute;a (CJC) para mediciones de termopares. Cada sensor CJC est&aacute; dedicado a dos canales de entrada de termopar. Una funci&oacute;n de detecci&oacute;n de termopar abierto le permite detectar un termopar roto. Un microprocesador incorporado alinea autom&aacute;ticamente los datos del pedido.</p>

		<h2>Alarmas</h2>
		<p>El WEB-TC presenta ocho alarmas de temperatura independientes. Cada alarma controla un canal de E/S digital asociado como salida de alarma. La entrada a cada alarma es uno de los canales de entrada de temperatura. La salida de cada alarma es configurable por software como activa alta o baja. Las condiciones de umbral configurables por el usuario activan cada alarma. Cuando se activa una alarma, el canal DIO asociado se dirige al estado de salida activo seleccionado.</p>

		<h2>Canales de E/S digitales</h2>
		<p>Se proporcionan ocho canales de E/S digitales para comunicarse con dispositivos externos y generar alarmas. Los bits digitales son programables por software para entrada o salida. La tensi&oacute;n de salida digital es seleccionable por el interruptor para l&oacute;gica de 3.3 V o 5 V. Se proporciona un terminal de tornillo para la configuraci&oacute;n de pull-up o pull-down. Los canales de E/S digitales se encienden en modo de entrada a menos que el bit est&eacute; configurado para una alarma. Cuando un bit digital se configura como una alarma, ese bit se configura como una salida y asume el estado definido por la configuraci&oacute;n de la alarma.</p>

	  <strong>Hardware:</strong>
		<ul>
		  <li>24-bits de resoluci&oacute;n</li>
		  <li>8 canales de entrada de termopar</li>
		  <li>Soporta los tipos de TCs: J, K, R, S, T, N, E y B</li>
		  <li>Sensor de temperatura ambiente incorporado</li>
		  <li>Entradas de temperatura independientes</li>
		  <li>8 bits digitales de Entrada/Salida</li>
		</ul>
		<strong>Software:</strong>
		<ul>
		  Incluye el CD MCC DAQ con:
		    <li>Software Graficador y Registrador GRATUITO - <a href="https://www.logicbus.com.mx/prod_tracerdaq2">TracerDAQ&trade; 2.0</a></li>
		    <li>Librerias y ejemplos para C, C++, VB, Delphi, etc </li>
		    <li> VIs y ejemplos para LabVIEW &trade; </li>
		    <li> Software Configurador - InstaCal</li>
	        <li> Requiremientos del Sistema - <a href="pdf/Requerimientos%20para%20MCC.pdf">Descargar PDF</a></li>
		    <li>Completamente soportada por: DASYLab&reg;</li>
		</ul>

</html>


          <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
            <thead>
              <tr>
                <td colspan="2" align="center">
                  <strong>Especificaciones t&eacute;cnicas</strong>
                </td>
              </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Entrada/salida digital</td>
			  </tr>
            </thead>
            <tbody>
              <tr>
                <td class="titulo_espec_lat">Tipo digital</td>
                <td>CMOS</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">N&uacute;mero de E/S</td>
				<td>8 (DIO0 a DIO7)</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Configuraci&oacute;n configurada</td>
				<td>independientemente para entrada o salida.<br>Cambie los voltajes de salida seleccionables: +5 V y +3.3 V</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Condiciones de encendido</td>
				<td>El reinicio de encendido es el modo de entrada, excepto cuando los bits est&aacute;n configurados para funcionar como alarmas.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Configuraci&oacute;n de pull-up/pull-down</td>
				<td>Todos los pines est&aacute;n conectados a resistencias de 47 kOhm que comparten un punto com&uacute;n accesible en el pin 22 del dispositivo (PU/D). Este pin est&aacute; flotando de forma predeterminada y no se puede configurar por medio de una conexi&oacute;n externa. Para el modo pull-up, conecte este pin al pin 21 (+ 5V). Para el modo desplegable, conecte este pin al Pin 48 (GND).</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Velocidad de transferencia de E/S digital (software de ritmo)</td>
				<td>Entrada digital: lecturas de 50 puertos o lecturas de un solo bit por segundo t&iacute;picas.<br>Salida digital - 100 escrituras de puerto o escrituras de un solo bit por segundo t&iacute;pico.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Alto voltaje de entrada (modo de +5 V)</td>
				<td>4 V min, 5,5 V absoluto absoluto.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Alto voltaje de entrada (modo +3.3 V)</td>
				<td>2.64 V min, 5.5 V absoluto m&aacute;x.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Bajo voltaje de entrada (modo de +5 V)</td>
				<td>1 V m&aacute;x., -0.3 V absoluto min.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Bajo voltaje de entrada (modo de +3.3 V)</td>
				<td>0.66 V m&aacute;x., -0.3 V absoluto absoluto.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Baja tensi&oacute;n de salida (LIO = 2,5 mA)</td>
				<td>0,6 V m&aacute;x.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Alto voltaje de salida (IOH = -2.5 mA)</td>
				<td>4.3 V min. (Modo +5 V), 2.7 V (Modo +3.3 V)
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Alarmas de temperatura</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">N&uacute;mero de alarmas</td>
				<td>8 (una por l&iacute;nea de E/S digital)</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Funci&oacute;n de alarma</td>
				<td>Cada alarma controla su l&iacute;nea de E/S digital asociada como salida de alarma. La entrada a cada alarma puede ser cualquiera de los canales de entrada de temperatura anal&oacute;gicos. Cuando se habilita una alarma, su l&iacute;nea de E/S asociada se configura para que salga y se conduzca al estado apropiado determinado por las opciones de alarma y la temperatura de entrada. Las configuraciones de alarma se almacenan en una memoria no vol&aacute;til y se cargan en el encendido.</td>
			  </td>
              <tr>
                <td class="titulo_espec_lat">Modos de entrada de alarma</td>
				<td>Alarma cuando ingresa temperatura> T1<br>Alarma cuando la temperatura de entrada> T1, reinicie la alarma cuando la temperatura de entrada sea inferior a T2<br>Alarma cuando la temperatura de entrada < T1<br>Alarma cuando la temperatura de entrada < T1, reinicie la alarma cuando la temperatura de entrada supera T2<br>Alarma cuando la temperatura de entrada es < T1 o> T2<br>Nota: T1 y T2 pueden configurarse independientemente para cada alarma.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Modos de salida de alarma</td>
				<td>Deshabilitado, la l&iacute;nea de E/S digital puede utilizarse para el funcionamiento normal<br>Activado, salida alta activa (la l&iacute;nea de E/S digital pasa a nivel alto cuando se cumple la condici&oacute;n de alarma)<br>Activado, salida baja activa (la l&iacute;nea de E/S digital se pone baja cuando se cumple la condici&oacute;n de alarma)</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Tasa de actualizaci&oacute;n de alarma</td>
				<td>1 segundo</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Memoria</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">EEPROM</td>
				<td>512 bytes para la configuraci&oacute;n del sensor</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">FLASH</td>
				<td>2 MB para la configuraci&oacute;n del dispositivo y el almacenamiento del sitio web</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Microcontrolador</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Tipo uno microcontrolador</td>
				<td>RISC de alto rendimiento de 8 bits (aislado)</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Un microcontrolador</td>
				<td>RISC de 16 bits de alto rendimiento (no aislado)</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Poder</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Corriente de alimentaci&oacute;n Modo continuo</td>
				<td>440 mA m&aacute;x.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Entrada de alimentaci&oacute;n externa</td>
				<td>+5 VDC &plusmn; 5%<br>(Fuente de alimentaci&oacute;n de +5 VDC incluida)</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Fuente de alimentaci&oacute;n externa (incluida)</td>
				<td>MCC p/n PS-5V2AEPS +5 VDC, 10W, 5% de regulaci&oacute;n</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">L&iacute;mites de supervisi&oacute;n de voltaje</td>
				<td>4.75 V> Vext o Vext> 5.25 V PWR LED = Apagado; (fallo de alimentaci&oacute;n)<br>4.75 V < Vext < 5.25 V PWR LED = Encendido</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Rango de voltaje de salida del usuario</td>
				<td>Disponible a + 5V terminal de tornillo 4.65 V min., 5.25 V max.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Corriente de salida del usuario disponible</td>
				<td>Disponible a + 5V terminal de tornillo 10 mA m&aacute;x.</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Cumplimiento de Ethernet</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Tipo de dispositivo</td>
				<td>IEEE 802.3 Ethernet 10Base-T</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Compatibilidad de dispositivos</td>
				<td>IEEE 802.3-2003 10 Mpbs Media Access Control</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Conexion ethernet</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Ethernet tipo</td>
				<td>10Base-T</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Conector</td>
				<td>RJ-45, 8 posiciones</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Cable</td>
				<td>CAT-5 blindado, par trenzado sin blindaje</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Longitud</td>
				<td>100 metros m&aacute;x.</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Direcci&oacute;n</td>
				<td>MAC 00: 12: 71: Cx: xx: xx, donde xxxxx es el n&uacute;mero de serie del dispositivo</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Ambiente</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Rango de temperatura de funcionamiento</td>
				<td>0 a 55&deg;C</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Rango de temperatura de almacenamiento</td>
				<td>-40 a 85&deg;C</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Humedad</td>
				<td>0 a 90% sin condensaci&oacute;n.</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Mec&aacute;nico</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Dimensiones</td>
				<td>127 mm (L) x 88.9 mm (W) x 35.56 (H)</td>
			  </tr>
              <tr  class="titulo_espec" align="left">
                <td  colspan="2">Terminal de tornillo tipo conector y pin out</td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">Tipo de conector </td>
				<td>erminal de tornillo</td>
			  </tr>
              <tr>
                <td class="titulo_espec_lat">Rango de calibre del cable</td>
				<td>16 AWG a 30 AWG</td>
			  </tr>
            </tbody>
          </table>

      </div> <!-- /col -->
    </div> <!-- /row base -->
  </div> <!-- /container -->
</td> <!--  /main -->

<?
 abajo();
?>
</body>
</html>
