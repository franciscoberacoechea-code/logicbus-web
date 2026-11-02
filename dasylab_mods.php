<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<?
 include("libreria/libreria.php");
?>



<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-31533636-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-1007518778');
</script>

<title>DASYLab Módulos de funciones | Logicbus</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="DASYLab, Function, Modules, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas">
  <meta name="description" content="DASYLab-Function Modules">
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

<a href="productos">Productos</a>-&gt;<a href="software">Software y herramientas de desarrollo</a>-&gt <a href="dasylab">DASYLab</a> -&gt;DASYLab - Módulos de funciones

<table width="100%">
		<tr><td colspan="4"><div align="center">
		  <h1>DASYLab- M&oacute;dulos de Funciones</h1>
		</div></td></tr>
	<tr><td colspan="4"><div align="justify">DASYLab es una aplicaci&oacute;n GUI que te permite desarrollar rapidamente aplicaciones DAQ personalizadas sin necesidad de programar. Si no se tiene el tiempo o las habilidades para programar para escribir un programa DAQ, se necesitara el DASYLab!. Usando &eacute;sta intuitiva hoja de trabajo, m&oacute;dulos y funciones de cableado, s&oacute;lo estar&aacute;s a unos clicks de una aplicaci&oacute;n completa.</div></td></tr>
 <tr>
		<td colspan="4">&nbsp;</td>

	</tr>
	<tr>
	  <td colspan="4"><strong>Categor&iacute;as de los M&oacute;dulos</strong></td>
	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
<tr><td colspan="4"><table width="61%" height="90" cellpadding="0" cellspacing="0">
  <tr>
    <td width="43%" ><p><a href="#inout">Entradas/Salidas </a></p></td>
    <td width="35%" ><p><a href="#display">Display </a></p></td>
    <td width="22%" ><p><a href="#math">Matem&aacute;ticas </a></p></td>
  </tr>
  <tr>
    <td width="43%" ><p><a href="#signal">Procesamiento de Se&ntilde;ales</a></p></td>
    <td width="35%" ><p><a href="#files">Archivos</a></p></td>
    <td width="22%" ><p><a href="#stats">Estad&iacute;sticas </a></p></td>
  </tr>
  <tr>
    <td width="43%" ><p><a href="#trigger">Trigger </a></p></td>
    <td width="35%" ><p><a href="#datared">Reducci&oacute;n de Datos </a></p></td>
    <td width="22%" ><p><a href="#network">Red</a></p></td>
  </tr>
  <tr>
    <td width="43%" ><p><a href="#control">Control </a></p></td>
    <td width="35%" ><p><a href="#special">M&oacute;dulos Especiales</a></p></td> 
    <td width="22%" ></td>
  </tr>
</table></td></tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
<tr>
		<td colspan="4"><a name="inout"><strong>Entradas/Salidas</strong></a></td>

	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
 <tr align="center">
   
	<td valign="middle"><div align="center"><img src="imagenes/01/m_ad_in.gif" alt="ADC Input"></div></td>  	
	 <td><div align="justify"><font size="1"><font size="1"><strong>Analog In-/Output</strong></strong>: up to 32 input modules and up to 512 channels up to 2 output modules and up to 32 channels</font></div></td>
	<td><div align="center"><img src="imagenes/01/m_digi_i.gif" alt="Digital In"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Digital In-/Output</strong></strong>: up to 32 input modules and up to 512 channels up to 2 output modules and up to 32 channels </font></div></td> 
 </tr>  
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_coun_i.gif" alt="Counter"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Counter Input</strong></strong>: up to 2 modules and up to 32 channels </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_freq_o.gif" alt="Freq Out"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Frequency Output</strong></strong>: up to 2 modules and up to 32 channels </font></div></td> 
	</tr>
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ser-i.gif" alt="RS Master"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>RS 232 Input</strong></strong>: extremely expandable with Master/ Slave modules (up to 256 channels with each serial interface) </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ser_o.gif" alt="Serial Out"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>RS 232 Output</strong></strong>: output of data or fixed strings for up to 16 channels </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_icomin.gif" alt="IComMaster"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Icom Input</strong></strong>: Universal serial module to be used with TCP/IP,GPIB and RS232. Master-/ Slave modules with max. 256 channels.</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_icoout.gif" alt="ICom-Out"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Icom Output</strong></strong>: Output of data or Strings via TCP/IP, GPIB or RS232. </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ieee_i.gif" alt="GPIB"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>IEEE 488 In-/Output</strong></strong>: supports Measurement Computing GPIB, National Instruments, INES (Input only), or IOtech hardware </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_dde_i.gif" alt="DDE Input"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>DDE In-/Output</strong></strong>: up to 16 modules and up to 256 channels </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ivisco.gif" alt="M-Scope"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>IVI Modules</strong></strong>: Handles devices with an IVI compatible interface (Oscilloscope, Multimeter, Function Generator). </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_modbus.gif" alt="ModBus Ana"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>MODBUS Modules</strong></strong>: With these modules the MODBUS protocol enables DASYLab to read and write Analog and Digital registers for signed and unsigned integer registers, RS232 only. </font></div></td> 
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
<tr>
		<td colspan="4"><a name="signal"><strong> Procesamiento de Se&ntilde;ales </strong></a></td>

  </tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_filter.gif" alt="Filter"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong> Filter</strong></strong>: Digital IIR filter with definable order and characteristics</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_period.gif" alt="Period"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Correlation</strong></strong>: Compute correlation coefficient, cross-correlation, autocorrelation, spectrum </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_window.gif" alt="Data Window"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Data Window</strong></strong>: Various types of evaluation windows, e.g. rectangle, Gauss, Bartlet and other types </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_fft.gif" alt="FFT"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>FFT</strong></strong>: Calculate and analyse the discrete spectrum of a signal </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_polkar.gif" alt="Polar/Cart"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Polar/Cartesian</strong></strong>: Convert data values between polar and cartesian coordinates </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_electr.gif" alt="Electric"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Electrical Characteritics</strong></strong>: Use the values of Current and Voltage to calculate electric characteristics such as Ueff, cosp etc.. </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_harmon.gif" alt="Harmon"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Harmonic Distortion</strong></strong>: Calculates the amplitude and phase of the fundamental frequency and up to 48 harmonic waves. </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_period.gif"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Period Check</strong></strong>: Calculates the period of a signal by checking its zero crossings.Period Check</strong>: Calculates the period of a signal by checking its zero crossings.</font></div></td> 
	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
<tr>
		<td colspan="4"><a name="trigger"><strong>Trigger</strong></a></td>

	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ss_trg.gif" alt="Data Trigger"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Start/Stop Trigger</strong></strong>: Selectable start and stop conditions </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_pp_trg.gif" alt="Trigger"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Pre/Post Trigger</strong></strong>: Amplitude- and slope-based triggers with hysteresis can be specified</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ko_trg.gif" alt="Combi Trig"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Combi Trigger</strong></strong>: Separate signal segments according to logical conditions</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_sm_trg.gif" alt="Sample Trigger"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>SampleTrigger</strong></strong>: Separate intervals of a signal based on a predetermined number of samples.</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_stei~1.gif" alt="Trigger on"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Trigger on Demand</strong></strong>: Separate samples depending on the dynamic behavior of the signals.</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_relay.gif" alt="Relay"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Relay</strong></strong>: Control up to 15 channels with one input signal</font></div></td> 
	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="control"><strong>Control</strong></a></td>

	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_genera.gif" alt="Generator"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Generator</strong></strong>: Signal generation with frequency and amplitude modulation </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_switch.gif" alt="Switch"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Switch</strong></strong>: On/off or momentary switch for program and data control </font></div></td> 
	</tr>
<tr> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_poscha.gif" alt="Multi"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Coded Switch</strong></strong>: Select from preset values by positioning a rotating switch or clicking on buttons. </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_slider.gif" alt="Slider"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Slider</strong></strong>: Definable signal range; signal level to be modified during measurement </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_pid.gif" alt="PID Control"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>PID Control</strong></strong>: Proportional, integral and derivative components can be specified freely; new auto-tuning function</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_zwpt.gif" alt="Two-point"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Two Point Control</strong></strong>: Up to 8 control circuits. Selectable set values are compared with actual values </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_delay.gif" alt="Delay"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Time Delay</strong></strong>: Data output after a specified period of time</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_hold.gif" alt="Latch"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Latch</strong></strong>: Constantly outputs the input value received last </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_timer.gif" alt="TTL Pulse"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>TTL Pulse Generator</strong></strong>: generates TTL signals with specified duration and switch conditions</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_varwri.gif" alt="Yar Write"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Read Variable</strong></strong>: Read Global Variable to generate a data channel to be used in the worksheet </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_varrea.gif" alt="Yar Read"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Save Variable</strong></strong>: Save data channel to a Global Variable to be used in module parameters and computations</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_router.gif" alt="Router"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Router</strong></strong>: Route data channel based on control input (amplitude or edge) or based on time (blocks, time, or action controlled)</font> </div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_blockt.gif" alt="Block Time"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Block Time</strong></strong>: Extracts the time information of a block and puts time and date into global variables</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_stop.gif" alt="Stop"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Stop</strong></strong>: stops or interrupts measurement according to specified conditions</font></div></td> 
	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="display"><strong>Display</strong></a></td>

	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_y-t.gif" alt="Y/ Chart"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Y/t Chart</strong></strong>: High-speed scope display for fast data with a wide range of display options</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_x-y.gif" alt="X/Y Chart"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>X/Y Chart</strong></strong>: Display data blocks of two dependent signals as an X/Y plot, including a Polar plot view. </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_polarplt.gif" alt="Polar Plot"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Polar Plot Chart</strong></strong>: Display data blocks of two dependent signals (X/Y or polar data) in polar coordinates with a third data as flags.</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_analog.gif" alt="Analog Meter"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Analog Meter</strong></strong>: Provides several shapes of instruments and offers peak hold and trend indicator options </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_digitl.gif" alt="Digital Meter"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Digital Meter</strong></strong>: Display the value, with trend display and lower/upper marks. Formats include decimal, hex, octal, binary, ASCII & Clock</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_bargrf.gif" alt="Bar Graph"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Bar Graph</strong></strong>: Bar (horizontal/vertical), thermometer, LED or triangle style; trend and range display options </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_record.gif" alt="Recorder"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Chart Recorder</strong></strong>: Chart display for slow data, wide display area and a wide range of display options. </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_list.gif" alt="List"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>List</strong></strong>: Show data values displayed in list form; several formatting options </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_status.gif" alt="Status Lamp"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Status Lamp</strong></strong>: TTL or Digital Signal status displayed as text and/or images.</font></div></td> 
		
	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="files"><strong>Archivos</strong></a></td>

	</tr>
<tr>
		<td height="26" colspan="4">&nbsp;</td>

  </tr>
<tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_read.gif" alt="Read"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>Read Data</strong></strong>: Read data from floppy/hard disk files; supports DASYLab, IEEE-32-bit, ASCII format</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_read.gif" alt="Read"></div></td> 
	<td><div align="justify"><font size="1"><font size="1"><strong>Write Data</strong></strong>: Write data to floppy/hard disk files; supports DASYLab, IEEE-32-bit, ASCII, Diadem and other formats </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/M_ODBC.gif" alt="ODBC"></div></td> 
		<td><div align="justify"><font size="1"><font size="1"><strong>ODBC Input/Output</strong></strong>: Exchange data between DASYLab and ODBC data bases.</font></div></td> 
		
	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="datared"><strong> Reducci&oacute;n de Datos </strong></a></td>

  </tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_averge.gif" alt="Average"></div></td> 
		<td><div align="justify"><font size="1"><strong>Average</strong>: Reduce data using running or summation averages</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_bavreg.gif" alt="Block Aver"></div></td> 
	<td><div align="justify"><font size="1"><strong>Block Average/Peak Hold</strong>: Reduce data across data blocks using running or summation average, or using Peak Hold (Minima or Maxima) </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_separt.gif" alt="Separate"></div></td> 
		<td><div align="justify"><font size="1"><strong>Separate</strong>: Reduce data by skipping defined number of samples (or blocks) only; outputs one, then repeats </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_merge.gif" alt="Merge"></div></td> 
	<td><div align="justify"><font size="1"><strong>Merge/Expand</strong>: Merge data from several channels or distribute signals from one channel to others </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_cut.gif" alt="Cut Out"></div></td> 
		<td><div align="justify"><font size="1"><strong>Cut Out Block</strong>: Output specified samples of a block </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_weiche.gif" alt="Time Slice"></div></td> 
	<td><div align="justify"><font size="1"><strong>Time Slice</strong>: Output data from different channels according to specified switch conditions</font> </div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_regist.gif" alt="Shiftregis"></div></td> 
		<td><div align="justify"><font size="1"><strong>Shift Register</strong>: Stores data, one point at a time, into a temporary register, and outputs the block repeatedly </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_ringsp.gif" alt="Cyclic Mem"></div></td> 
	<td><div align="justify"><font size="1"><strong>Circular Buffer</strong>: Save an interval of the data stream and send it to the modules output via event driven action</font></div></td> 
	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="special"><strong>M&oacute;dulos Especiales </strong></a></td>

  </tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_blackb.gif" alt="Black-Box"></div></td> 
		<td><div align="justify"><font size="1"><strong>Black Box</strong>: Sub-worksheet unit containing worksheet sections; use for common functions or to manage complexity </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_im-ex.gif" alt="Import"></div></td> 
	<td><div align="justify"><font size="1"><strong>Import/Export (Black Box)</strong>: Data interface between worksheet levels (main worksheet and Black Boxes)</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_action.gif" alt="Action"></div></td> 
		<td><div align="justify"><font size="1"><strong>Action</strong>: Trigger various actions on the occurence of specified events</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_messag.gif" alt="Message"></div></td> 
	<td><div align="justify"><font size="1"><strong>Message</strong>: Display or print an operator message; play a wave/AVI file; send DDE message; log messages to dedicated printer </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_tmbase.gif" alt="Time Base"></div></td> 
		<td><div align="justify"><font size="1"><strong>Time base</strong>: Extract and output the time or frequency information of a signal </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_adapt.gif" alt="Adaption"></div></td> 
	<td><div align="justify"><font size="1"><strong>Signal Adaptation</strong>: Synchronize signal flows of differing characteristics</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_e-mail.gif" alt="E-Mail"></div></td> 
		<td><div align="justify"><font size="1"><strong>Send e-Mail</strong>: Use Windows E-Mail to send messages to any address including attachments and custom messages/alarms</font></div></td> 
		
	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="math"><strong>Matem&aacute;ticas</strong></a></td>

  </tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_formel.gif" alt="Formula"></div></td> 
		<td><div align="justify"><font size="1"><strong>Formula Interpreter</strong>: Link data from several channels according to mathematical functions entered as formulas </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_arith.gif" alt="Arithmetic"></div></td> 
	<td><div align="justify"><font size="1"><strong>Arithmetic</strong>: Basic arithmetic operations; various operands and exponential functions </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_trigo.gif" alt="Trigonomet"></div></td> 
		<td><div align="justify"><font size="1"><strong>Trigonometry</strong>: Sine, tangent, arc- and hyperbolic functions</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_integr.gif" alt="Differencial"></div></td> 
	<td><div align="justify"><font size="1"><strong>Differentiation/Integration</strong>: Integration of signal values or slopes in the signal flow </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_scale.gif" alt="Scaling"></div></td> 
		<td><div align="justify"><font size="1"><strong>Scaling</strong>: Linear scaling, interpolation tables, RTD linearization, thermocouple linearization, offset adjust, linear conversion factors for a large number of measurement systems </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_max_s.gif" alt="Max Slope"></div></td> 
	<td><div align="justify"><font size="1"><strong>Slope Limitation</strong>: Limit the difference between values </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_soll_e.gif" alt="Ref. Curve"></div></td> 
		<td><div align="justify"><font size="1"><strong>Reference Curve</strong>: Calculates a reference Curve using one or more test runs </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_bit_l.gif" alt="Logic"></div></td> 
	<td><div align="justify"><font size="1"><strong>Logical Operations</strong>: Evaluate TTL data from input channels; operators AND, OR, XOR, NAND, NOT </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_bitm~1.gif" alt="Bit-Logic"></div></td> 
		<td><div align="justify"><font size="1"><strong>Bit Operations</strong>: Perform logical operations (bit by bit) with the received data words, combine, extract, mask and shift operations</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_fliflo.gif" alt="FlipFlop"></div></td> 
	<td><div align="justify"><font size="1"><strong>Flip-Flop</strong>: Use bistable trigger elements for intermediate data storage (FlipFlop and MonoFlop) </font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_gray.gif" alt="Graycode"></div></td> 
		<td><div align="justify"><font size="1"><strong>Gray-Code</strong>: Decodes signals generated by position encoders </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_compa.gif" alt="Comparator"></div></td> 
	<td><div align="justify"><font size="1"><strong>Channel Comparator</strong>: Compares channels and a constant or to corresponding channels.</font></div></td> 
	</tr>
<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td colspan="4"><a name="stats"><strong>Estad&iacute;sticas </strong></a></td>

	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_statis.gif" alt="Statistics"></div></td> 
		<td><div align="justify"><font size="1"><strong>Statistical Values</strong>: Compute max/min, average, effective values, variance and standard deviation </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_selec.gif" alt="Select"></div></td> 
	<td><div align="justify"><font size="1"><strong>Position in Signal</strong>: Extract the value position as defined by sample number, date/time or frequency</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_histo.gif" alt="Histogram"></div></td> 
		<td><div align="justify"><font size="1"><strong>Histogram</strong>: Classify data according to specific intervals and numbers of classes </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_regr~1.gif" alt="Regression"></div></td> 
	<td><div align="justify"><font size="1"><strong>Regression</strong>: Calculate constant, linear or polynomial regression curves up to an order of 20</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_count.gif" alt="Counter"></div></td> 
		<td><div align="justify"><font size="1"><strong>Counter</strong>: Count blocks, edges, samples, maxima/minima, zero/level crossings and duration</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_minmax.gif" alt="Min/Max"></div></td> 
	<td><div align="justify"><font size="1"><strong>Minimum/Maximum</strong>: Determine extreme values in the signal flow </font></div></td> 
	</tr>
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_soll_c.gif" alt="Check Ref"></div></td> 
		<td><div align="justify"><font size="1"><strong>Check Reference Curve</strong>: Compare the signal with a previously saved reference curve and signal deviations.</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_pwm.gif" alt="Plus.Analyse"></div></td> 
	<td><div align="justify"><font size="1"><strong>Pulse Width Analysis</strong>: Calculates the frequency, length of pulses, pauses and pulse/pause ratio in a TTL pulsed signal.</font></div></td> 
	</tr>

	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_sort.gif" alt="Sort"></div></td> 
		<td><div align="justify"><font size="1"><strong>Channel Sort</strong>: Rearranges the input channels based on their values</font></div></td> 
		
	</tr>
	<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
	<tr>
		<td colspan="4"><a name="network"><strong>Red</strong></a></td>

	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_net_i.gif" alt="Net In"></div></td> 
		<td><div align="justify"><font size="1"><strong>Net Input/Output</strong>: Receive or send data to one or more DASYLab Net via a TCP/IPnetwork.</font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_mess_i.gif" alt="Message In"></div></td> 
	<td><div align="justify"><font size="1"><strong>Message Input/Output</strong>: Receives or Sends messages from or to other DASYLab Net via a TCP/IP network.</font></div></td> 
	</tr>

	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_dataso.gif" alt="DataSocket"></div></td> 
		<td><div align="justify"><font size="1"><strong>DataSocket Import/Export</strong>: Exchange data with OPC server via network.</font></div></td> 
		
	</tr>
	<tr>
		<td height="25" colspan="4">&nbsp;</td>

  </tr>
	
	<tr>
		<td colspan="4"><strong>Add-On de An&aacute;lisis(opcional)</strong></td>

	</tr>
<tr>
		<td colspan="4">&nbsp;</td>

  </tr>
	<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_swg.gif" alt="Sequence"></div></td> 
		<td><div align="justify"><font size="1"><strong>Sequence Generator</strong>: Generate curves and ramps of different types which can be combined in many ways. </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_transf.gif" Alt="Transfer"></div></td> 
	<td><div align="justify"><font size="1"><strong>Transfer Function</strong>: The Transfer and Coherence functions are calculated for up to 8 pairs of values.</font></div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_weight.gif" alt="Weighting"></div></td> 
		<td><div align="justify"><font size="1"><strong>Block Weighting</strong>: Weight each sample in block by a predefined function. </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_falt.gif" alt="Convolution"></div></td> 
	<td><div align="justify"><font size="1"><strong>Convolution</strong>: Up to 16 Input signals are processed (superimposed) with digital filters.</font> </div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_uff_s.gif" alt="Save Univers"></div></td> 
		<td><div align="justify"><font size="1"><strong>Write UFF Format</strong>: Write data in the Universal File Format 58 for use in system analysis.</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_fftfil.gif" alt="FFT-Filter"></div></td> 
	<td><div align="justify"><font size="1"><strong>FFT Filter</strong>: Frequency intervals of up to 16 signals are filtered with defined conditions.</font> </div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_unifil.gif" alt="UnivFilter"></div></td> 
		<td><div align="justify"><font size="1"><strong>Universal Filter</strong>: Create user defined FIR or IRR Filters with a helpful filter wizard for FIR Filters.</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_fft-m.gif" alt="FFT-Max"></div></td> 
	<td><div align="justify"><font size="1"><strong>FFT Maximum</strong>: Calculates the maximum of energy of a FFT spectrum by analysing intervals of the frequency band.</font> </div></td> 
	</tr>
<tr>
		<td valign="middle"><div align="center"><img src="imagenes/01/m_n-ordn.gif" alt="Harmon"></div></td> 
		<td><div align="justify"><font size="1"><strong>n-th Order Harmonic</strong>: Calculates the maximum of the Harmonic up to an order of 20 of FFT data </font></div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_rainfl.gif" alt="Rainflow"></div></td> 
	<td><div align="justify"><font size="1"><strong>Rainflow</strong>: Several counting algorithms classify samples for Time-Stress Analysis</font> </div></td> 
	</tr>
<tr>
	<td height="34" valign="middle"><div align="center"><img src="imagenes/01/m_zweika.gif" alt="Two Channel"></div></td> 
		<td><div align="justify"><font size="1"><strong>Two-channel Classification</strong>: Classifies the values of two diferrent temporal functions to be used for Time-Stress Analysis.</font> </div></td> 
		<td valign="middle"><div align="center"><img src="imagenes/01/m_terz.gif" alt="TO Filter"></div></td> 
	<td><div align="justify"><font size="1"><strong>Octave Analysis: This module is used for One-Third or Octave Analysis of a signal using digital filters optimized to 40KHz</font></div></td> 
  </tr>
 </table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>


