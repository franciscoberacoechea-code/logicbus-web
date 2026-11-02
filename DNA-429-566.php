<?php
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/ Productos/ Ethernet/ Tarjetas para chassis/ ARINC 429-708-453/ DNA-429-566</title>


 <meta name="description" content="DNA-429-566: ARINC 429 Interface board with 6 TX and 6 RX channels">
 <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, ethernet, DAQ, adquisicion de datos, datos, boards, chassis boards, PowerDNA, PowerDAQ, Racktangle, Flatrack, ARINC 429-708-453, DNA-429-566">
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

<?php
 arriba();
 lado1("no","");
?>

 <div id="main">
 <center>
  <table width="100%"  border="0">
    <tr>
      <td colspan="2" align="center"><div align="left"><a href="productos">Productos</a>-&gt;<a href="ethernet_daq">Ethernet</a>-&gt;<a href="chassis_boards">Tarjetas para chassis</a>-&gt;<a href="arinc_boards">ARINC 429-708-453</a>-&gt;DNA-429-566</div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><h2><strong>DNA-429-566</strong></h2></td>
    </tr>
	<tr>
      <td colspan="2" align="center"><img src="imagenes/211/DNA-429-566.jpg" alt="DNA-429-566" width="250"></td>
    </tr>
	<tr align="center">
	  <td colspan="2"><strong>ARINC 429 Interface board with 6 TX and 6 RX channels</strong></td>
    </tr>
	<tr>
	  <td align="left"><img src="imagenes/211/10years.gif" width="70"></td>
	  <td align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" alt="" onClick="atienda()" border=0></a></td>
    </tr>
	<tr>
	  <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
      <td colspan="2"><div align="justify">The DNA-429-566 is a 12 channel (6 TX, 6 RX) ARINC-429 communication interface. The board is fully compliant with the ARINC 429 spec and supports both high speed (100 kHz) and low speed (12.5 kHz) operation. The channel speed is software selectable in banks of either two channels. Data integrity, even when all channels are set in high speed mode is assured with the use of 256 word FIFOs on all RX and TX channels.<br>
          <br>
          Receive channels include the ability to filter on Labels so that only data from selected channels is captured. The filter may be set to forward data from between one and 255 Labels, or may be disabled so all data is captured, regardless of source. The user may also select on a label by label basis whether all data is forwarded or only data which has changed since the last transmission. Each channel may be set such that data Receive filtering is also supported based on the Source/Destination Identifier (bits 9 &amp; 10). Words that match the desired SDI are forwarded while those that do not are ignored. Each received word may be time stamped with the date and time of reception (10 &micro;s resolution). Parity errors may either be flagged and errant data trapped at the board level, or RX channels may be configured to&nbsp;forward data with an illegal parity bit.<br>
          <br>
          Transmit channels may be set to transmit asynchronously or based upon a hardware controlled scheduler. Each channel supports a transmission table that allows up to 256 unique schedules. Transmission schedule resolution is 100 microsecond. There is also a TX mode where a label is transmitted only upon receipt of data from a preprogrammed label.<br>
          <br>
          Asynchronous (non-scheduled) data may be sent with three priorities. High priority data is sent immediately upon completion of the current transmission, regardless of scheduled messages. Data sent with standard priority is transmitted during times when no scheduled data is being sent. Finally, the lowest priority is data streamed from a 256 word FIFO which is sent when no scheduled, high or standard priority data is being transmitted.<br>
          <br>
      Software for the DNA-429-566 is provided as part of the UEI Framework. The framework provides a comprehensive yet easy to use API that supports all popular Windows programming languages as well as supporting programmers using Linux and most real-time operating systems including QNX, RTX, RT Linux and more. Finally, the framework supplies complete support for those creating applications in LabVIEW, MATLAB/Simulink, DASYLab or any application which supports ActiveX or OPC servers.</div></td>
    </tr>
   
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong>Characteristics:</strong></td>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li>6 ARINC 429 TX channels</li>
        <li>6 ARINC 429 RX channels</li>
        <li>High (100 kHz) or low (12.5 kHz) speed selectable by channel</li>
        <li>Hardware Label filtering</li>
        <li>Hardware TX scheduler (100 &micro;s timing resolution)</li>
        <li>Automatic timestamping of RX data (if desired)</li>
        <li>Powerful API included</li>
      </ul></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><center>
        <table width="80%" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="7" bgcolor="#FFAD33" style="font-weight: bold; text-align: center;">Technical Specifications</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#7598FF" style="font-weight: bold">Channel Configurations</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Number	of	channels</td>
              <td colspan="5">12</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">DNA-429-566</td>
              <td colspan="5">6	TX	and	6	RX</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">DNA-429-512</td>
              <td colspan="5">0	TX	and	12	RX</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">ARINC	Compliance</td>
              <td colspan="5">Fully	compliant	with	ARINC	429</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Digital	outputs</td>
              <td colspan="5">1	current	sinking,	FET	based</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Digital	output	drive</td>
              <td colspan="5">350	mA	max,	(500	mA	resettable	fuse)</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#7598FF" style="font-weight: bold">Receive Specifications</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Data	rate</td>
              <td colspan="5">100	kHz	or	12.5	kHz	selectable	per	port</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">FIFO	size</td>
              <td colspan="5">up	to	256	32-bit	words,	user	selectable</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Receive	filter	size</td>
              <td colspan="5">1	to	255	Labels	or	disabled</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">SDI	filter</td>
              <td colspan="5">enabled	or	disabled</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">New	data	only	filter</td>
              <td colspan="5">enabled	or	disabled	by	label	or	globally</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Parity	checking</td>
              <td colspan="5">enabled	or	disabled</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Date/Time	stamping</td>
              <td colspan="5">enabled	or	disabled	by	label	or	globally</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#7598FF" style="font-weight: bold">Transmit Specifications</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Data	rate</td>
              <td colspan="5">100	kHz	or	12.5	kHz	selectable	per	port</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">FIFO	size</td>
              <td colspan="5">256	words</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Transmit modes</td>
              <td colspan="5">Scheduled	or	asynchronous</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#CCCCCC">Scheduler specifications</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">timing	resolution</td>
              <td colspan="5">100	microseconds</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">table	size</td>
              <td colspan="5">Schedule	up	to	256	labels	per	channel</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#CCCCCC">Asynchronous TX modes</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">High	priority</td>
              <td colspan="5">transmit	immediately	upon	completion	of	current transmission	regardless	of schedule</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Standard	priority</td>
              <td colspan="5">transmit when no scheduled data</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">FIFO	based</td>
              <td colspan="5">transmit	when	no	scheduled,	standard	or	high	priority data	is	being	sent</td>
            </tr>
            <tr>
              <td colspan="7" bgcolor="#7598FF" style="font-weight: bold">General Specifications</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Loop	back	testing</td>
              <td colspan="5">Internal	loop	back	connections	on	the	 DNx-429-566 allow	automatic	self-test</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Operating	temperature</td>
              <td colspan="5">tested	-40	&deg;C	to	+85	&deg;C</td>
            </tr>
            <tr>
              <td rowspan="2" bgcolor="#CCCCCC">Vibration</td>
              <td bgcolor="#CCCCCC">IEC 60068-2-6</td>
              <td colspan="5">5	g,	10-500	Hz,	sinusoidal</td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC">IEC 60068-2-64</td>
              <td colspan="5">5	g	(rms),	10-500	Hz,	broad-band	random</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Shock	 IEC 60068-2-27</td>
              <td colspan="5">50	g,	3	ms	half	sine,	18	shocks	@	6	orientations<br>
                30	g,	11	ms	half	sine,	18	shocks	@	6	orientations</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Humidity</td>
              <td colspan="5">0	to	95%,	non-condensing</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">MTBF</td>
              <td colspan="5">470,000</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#CCCCCC">Power consumption</td>
              <td colspan="5">3.5	Watt,	maximum</td>
            </tr>
          </tbody>
        </table>
        <br>
        </center></td>
    </tr>
    
 </table>
 </center>
</div>

<?php
 abajo();
?>
</body>
</html>

