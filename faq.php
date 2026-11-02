<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LogicBus/F A Q</title>
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
  <table width="100%" style="text-align:left">
    <tr><td align="center" colspan="2"><h1><font color="#FFFFFF">F A Q </font></h1></td></tr>
	<tr><td><div align="center"><img src="images/title_faqk.gif" width="425" height="100" title="Bienvenido a la sección de F.A.Q."></div></td></tr>
    <tr><td>
	<ul>
	  <li><a href="http://www.measurementcomputing.com/tech.html"><strong>Measurement computing </strong></a></li>
	</ul>
	<ul><ul><li><a href="http://www.measurementcomputing.com/faq.asp" class="nav">Tech F.A.Q.</a> </li>
	    </ul>
	</ul>
	<!---->
    <ul>
      <li><span class="Estilo1"><a href="http://tek.com/Measurement/cgi-bin/framed.pl?Document=/Measurement/Service/&FrameSet=service">Tektronix</a></span></li>
      </ul>
	<ul>
	  <ul>
          <li><a href="http://tek.com/cgi-bin/wtx.cgi?wt=247&amp;link=http://www2.tek.com/cmswpt/tifinder.lotr" target="_top">Technical Information</a></li>
          <li><a href="http://tek.com/cgi-bin/wtx.cgi?wt=247&amp;link=http://www2.tek.com/cmswpt/faqfinder.lotr" target="_top">Frequently Asked Questions</a></li>
          </ul>
	  </ul>
	<!---->
	 <ul>
	  <li><a href="compras"><strong>Pasos para realizar una compra en LogicBus</strong></a></li>
	  </ul>
	</td></tr>
    <tr>
      <td>S&iacute; sus dudas no han sido resueltas en esta secci&oacute;n, puede <a href="contacto.php#comentarios">contactarnos</a> para resolver sus dudas o escribirnos a la direcci&oacute;n <span class="Estilo2">info<img src="imagenes/arroba2.gif" border="0" align="bottom">logicbus.com.mx</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>