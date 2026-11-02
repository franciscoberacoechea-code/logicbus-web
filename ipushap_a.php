

<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Productos/Software/Remote Equipment</title>
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

<table width="93%">

	<tr><td colspan="2"><div align="center"><h2>Remote Equipment Probing and Monitoring</h2></div></td></tr>
	<tr><td colspan="2"><div align="justify">
		Remote equipment probing and monitoring is the base of remote control and/or e-diagnosis. In many cases, the equipments that need to be probed are widely scattered in many places, usually several miles away from the control center. 
	</div></td></tr>
	
	<tr>
		<td colspan="2"><div align="left">&nbsp;</div></td></tr>
		
		<tr><td colspan="2"><div align="justify">
		<strong>   The conventional ways  </strong><br>
		<br><strong>For off-site equipment with self-testing features: </strong>
     		<ul>
					<li>Scheduled self-testing, real-time data transmission to database at control center, scheduled result monitoring at control center. </li>
					<li>Scheduled self-testing, real-time data transmission to database at field, scheduled result monitoring at control center.</li> 

			</ul>		
		<strong>For off-site equipment without self-testing features:</strong>   
	     <ul>
			<li>Staff needs to bring testing equipment to testing sites for regular check rounds. </li>
			<li>Control center needs to run testing programs periodically to check off-site plant status. </li>
		</ul>	
	</td></tr>
		<tr><td><div align="center"><img src="imagenes/02/ipushap_a1.gif"><br>Figure 1. Remote Equipment Probing and Monitoring in conventional ways </div></td></tr>
	<tr>
		<td colspan="2"><div align="left"><strong>These conventional ways have several serious defects: </strong></div></td></tr>
	<tr>
		<td colspan="2"><div align="left">
		<ul>
		<li>Delay in result collection, limited space in Field database and high level of weather resistance is required. </li>
		<li>Massive waste in bandwidth and run time. The more check points are, the worse the delay is. </li>
		</ul>
		</div></td></tr>
	<tr>
		<td colspan="2"><div align="left">
		<strong>
		The iPush® Embedded ways  <br><br>  
  		For off-site equipment with self-testing features: </strong>
		<ul>
			<li>Equipments self-test periodically and transmitting result through iPushR Embedded back to the control center in real-time, and store it into database at the same time. </li>
		</ul>

		<strong>For off-site equipment without self-testing features:</strong>
		<ul>
				<li>Install testing program into WinCon-8000 for scheduled testing and send real-time result back to control center. </li>
		</ul>
		</div></td></tr>
	<tr>
		<td colspan="2"><div align="center"><img src="imagenes/02/ipushap_a2.gif"><br>Figure 2. Remote Equipment Probing and Monitoring in iPush&reg; Embedded ways with scheduled testing</div></td></tr>
		<tr>
				<td colspan="2"><div align="justify"><p>Otherwise, staff can also run the testing program on WinCon-8000 to get real-time result and send the data back to control center through iPushR Embedded. </p></div></td></tr>
		<tr>
		  <td height="76" colspan="2"><div align="center"><img src="imagenes/02/ipushap_a3.gif"><br>Figure 3. Remote Equipment Probing and Monitoring in iPush&reg; Embedded ways under control center's command</div></td></tr>
		<tr>
				<td colspan="2"><div align="left">
		<strong>  Benefits with iPushR Embedded in WinCon-8000 </strong><br>
				<ol>
			<li>When abnormal results occur, real-time alarm notification prevents further damage. </li>
			<li>Control center receive real-time test result. </li>
			<li>Does not have to repeat handshaking and transmitting, so it will saves huge amount of bandwidth and time.</li>
				</ol>
			<strong>Examples</strong>
			<ol>

			<li>Civil Defense: Air-alert broadcasting network equipments monitoring. </li>
			<li>Hydraulic engineering: Dam sluicing alert broadcasting network equipments monitoring. </li>
			<li>Telecom: Scattered unmanned facilities monitoring system.</li>
			<li>Water, gas pipelines: Urban pipelines instruments and/or control equipments monitoring. </li>
			<li>Manufacturing: Manufacturing equipments monitoring. </li>
			<li>Power industry: High-voltage power equipments (e.g. power line, connector, transformer, substation, !Ketc.). </li>

			</ol>
				</div></td></tr>
 </table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>


