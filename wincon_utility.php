

<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Productos/Software/WinCon Utility Overview</title>
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

	<tr><td colspan="2"><div align="center"><h2>WinCon Utility Overview </h2></div></td></tr>
	<tr><td colspan="2"><div align="justify">
		The WinCon Utility provides many tools to save/view the system information registry and setup the HTTP/FTP path and update non-volatile internal memory within Wincon-8000 embedded controller. This handy utility (WinCon Utility 1.exe located in the /Compact Flash/icpdas/Tools directory) should be located in the computer's Programs group. Therefore, you can launch it on the computer Start  Programs  WinCon Utility menu. The WinCon Utility provides many functions in five tabs group as follows:  
	</div></td></tr>
	<tr><td><div align="justify"><br><br><strong>Save Registry Tab</strong>
		<br><br>
		This tab provides functions to save/view the registry of system information and setup the HTTP/FTP directory path. It is very important to save registry when you change any system information. And then you need to click the "Save and Reboot" button to renew the system configuration. If you do not save the current configuration into the registry, you will loss your setting information when you reboot the Wincon-8000.
			</div> </td>
		<td><div align="center"><img src="imagenes/02/utility01.gif"></div></td></tr>
		<tr><td><div align="justify"><strong>System Config Tab</strong>
		<br><br>
		In System Config tab, it provides the view information of the Wincon-8000 embedded controller system and the function for seting up the MAC address.
			</div> </td>
		<td><div align="center"><img src="imagenes/02/utility02.gif"></div></td></tr>
		<tr><td><div align="justify"><strong>Auto-execute Tab</strong>
		<br><br>
		In Auto-execute tab, it provides ten execute files, which can be run after WinCE system is launched on WinCon-8000 system. You can set ten execute files by the Browse button on the tab of WinCon Utility, as shown in the below figure. Note that they are executed in order by program 1, program 2, ...
			</div> </td>
		<td><div align="center"><img src="imagenes/02/utility03.gif"></div></td></tr>
		<tr><td><div align="justify"><strong>Version Update Tab </strong>
		<br><br>
		This Version Update tab provides function to update new vision of the operation system. You can choose the new OS image file name and directory path by the Browse button. Click the "Write to flash now" button to update the current OS version. It will take ten or more minutes to update your OS to Flash memory, and reboot your system.
			</div> </td>
		<td><div align="center"><img src="imagenes/02/utility04.gif"></div></td></tr>

	
	
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>

