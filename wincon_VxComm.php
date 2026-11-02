

<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus/Productos/Software/VxComm Overview</title>
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

	<tr><td colspan="2"><div align="center"><h2>VxComm Overview</h2></div></td></tr>
	<tr><td colspan="2"><div align="justify">
		�VxComm�stands for �Virtual Communications Ports�.<br>
		VxComm Driver package includes driver, utility and online help files. 
	</div></td></tr>
	<tr><td colspan="2"><div align="justify"><br><br>
		<strong>Architecture</strong><br><br>
		Due to WinCE inheriting limitation, WinCon's COM ports can only be expanded up to 10 ports (with additional I8112/I8114/I8142/I8144 modules in slots). But with ICPDAS VxComm technology and 7188E/8000E controllers (as a VxComm server), WinCon can expand more RS-232 / 422/485 COM ports for versatile requirements. 
   		<br><br>ICPDAS implements VxComm mechanism on WinCon by adding VxComm DLL. The VxComm DLL creates COM port(s) and maps them to the TCP port(s) of the 7188E/8000E . By assigning command port !�M!? (default value M =10000) in VxComm server, these TCP ports are used to access the Ethernet/Internet ports M+1~M+N of the 7188E/8000E . Another TCP port number (9999) is designed for the virtual I/O only. Client programs can go through this TCP port (9999) to access the embedded I/O expansion board with A/D and D/A. 
	</div></td></tr>
	
	
		
		<tr><td colspan="2"><div align="justify"><br><br>
		<strong>Client setting</strong><br><br>
     		Command Port=M (M=10000 (default setting) which can be modified in autoexec.bat in VxComm server (7188/I8000E))	<br><br>	
			</div> </td></tr>
<tr>
		<td colspan="2"><div align="left">
		  <table cellspacing="0" cellpadding="3" border="1" bordercolor="#CCCCCC">
            <tr bgcolor="#999999">
              <td colspan="2" ><p align="center">WinCon </p></td>
              <td colspan="2"><p align="center">7188E/8000E </p></td>
            </tr>
            <tr>
              <td width="25%"><p align="center">COM Port </p></td>
              <td width="24%"><p align="center">VxComm DLL </p></td>
              <td width="26%"><p align="center">VxComm Server </p></td>
              <td width="25%"><p align="center">COM Port </p></td>
            </tr>
            <tr>
              <td><p align="center">Not Used </p></td>
              <td><p align="center">Reserved <br>
        (Command port) </p></td>
              <td><p align="center">M </p></td>
              <td><p align="center">Reserved <br>
        (Command port) </p></td>
            </tr>
            <tr>
              <td><p align="center">Assigned by user </p></td>
              <td><p align="center">Port 1 </p></td>
              <td><p align="center">M+1 </p></td>
              <td><p align="center">COM 1 </p></td>
            </tr>
            <tr>
              <td><p align="center">Assigned by user </p></td>
              <td><p align="center">Port 2 </p></td>
              <td><p align="center">M+2 </p></td>
              <td><p align="center">COM 2 </p></td>
            </tr>
           
            <tr>
              <td><p align="center">Assigned by user </p></td>
              <td><p align="center">Port I/O </p></td>
              <td><p align="center">9999 </p></td>
              <td><p align="center">I/O </p></td>
            </tr>
          </table>
		</div></td></tr>
	<tr><td colspan="2"><div align="justify"><br><br>
	By VxComm mechanism, user's RS-232 /RS-485/RS-422 client programs (WinCon side) only need to change to the different COM port to get the access of serial devices that are allocated in the 7188E/8000E via Internet or Intranet. 
	<br><br></div></td></tr>
<tr>
		<td colspan="2"><div align="left"><img src="imagenes/02/VxComm.gif"></div></td></tr>
		
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>

