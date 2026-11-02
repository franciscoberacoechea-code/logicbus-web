<? include("libreria/libreria.php"); ?> 
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Logicbus, Tu Sitio De Automatización En México/Compañia </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Logicbus">
<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil,  Automatizaci&oacute;n,      Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Misi&oacute;n, Visi&oacute;n, Valores, Historia, Clientes">
<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="description" content="Logicus Tu Sitio De Automatización En México">
<meta name="ROBOTS" content="all">
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

	<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="tabs_min.js" type="text/javascript" charset="utf-8"></script>
	<script src="accordion.js" type="text/javascript" charset="utf-8"></script>
	<script src="hpnormalize.js" type="text/javascript"></script>
	<script type="text/javascript" src="validaciones.js"></script>
</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">

			
		
			<div class="grid9">
			  <ul class="tabs">
			    <li><a href="#buzon"><span>Insertar Comentario Cliente</span></a></li>
				</ul>
			
			
			

<div id="buzon" class="tab_content">
<center>
<h1>Panel Comentarios Clientes </h1>
<p align="left"><br />
</p>
    <p align="center"><br>
    <br></p>
    <table width="95%">
<!-- </div> -->
<tr><td>
	  <form  name="formulario_comentarios" id="formulario_comentarios" action="guarda_comentarios_.php" method="post" >
	  <table width="100%">
	      <tr>
	        <td align="center" colspan="3">&nbsp;</td>
          </tr>
	      <tr>
	        <td align="center" colspan="3"><font class="forma">&nbsp;</font></td>
	      </tr>
		
	    <tr>
	      <td width="32%" align="right"><font class="forma">Nombre:&nbsp;&nbsp;</font></td>
	    <!---->
	    <td width="68%" align="left"><input name="nombrec" type="text" id="nombrec" onKeyPress="return permite_letras()"  size="40" maxlength="40" /></td>
	    </tr>
		<tr>
		  <td height="39" align="right">Puesto : </td>
		  <td align="left"><input name="puesto" type="text" id="puesto" onKeyPress="return permite_letras()" size="40" maxlength="60">
		  &nbsp;</td>
		  </tr>
		<tr>
		  <td height="39" align="right"><font class="forma">Empresa:&nbsp;</font></td>
		  <!----><td align="left"><input name="apellido_pc" type="text" id="apellido_pc" onKeyPress="return permite_letras()" size="40" maxlength="100"></td></tr>
	    <tr>
	      <td align="center"><div align="right">Fecha(dd/mm/aa):</div></td>
	      <td align="center"><div align="left">
	        <select name="dia" id="dia">
	          <option selected="selected">01</option>
	          <option>02</option>
	          <option>03</option>
	          <option>04</option>
	          <option>05</option>
	          <option>06</option>
	          <option>07</option>
	          <option>08</option>
	          <option>09</option>
	          <option>10</option>
	          <option>11</option>
	          <option>12</option>
	          <option>13</option>
	          <option>14</option>
	          <option>15</option>
	          <option>16</option>
	          <option>17</option>
	          <option>18</option>
	          <option>19</option>
	          <option>20</option>
	          <option>21</option>
	          <option>22</option>
	          <option>23</option>
	          <option>24</option>
	          <option>25</option>
	          <option>26</option>
	          <option>27</option>
	          <option>28</option>
	          <option>29</option>
	          <option>30</option>
	          <option>31</option>
	            </select>
	        /
	        <select name="mes" id="mes">
	
	          <option selected="selected">01</option>
	          <option>02</option>
	          <option>03</option>
	          <option>04</option>
	          <option>05</option>
	          <option>06</option>
	          <option>07</option>
	          <option>08</option>
	          <option>09</option>
	          <option>10</option>
	          <option>11</option>
	          <option>12</option>
	          </select>
	      /
	      <select name="año" id="año">
	        <option selected="selected">2001</option>
	        <option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option>2023</option>
			<option>2024</option>
			<option>2025</option>
			<option>2026</option>
			<option>2027</option>
			
	        </select>
	      </div></td>
	      <td align="center">&nbsp;</td>
	    </tr>
	    <tr><!----><td colspan="3" align="center"><div align="center">Comentario
	      </div></td></tr>
		<tr>
		  <td colspan="3" align="center"><textarea name="msgc" cols="80" rows="8" wrap="PHYSICAL" id="msgc" ></textarea></td>
		</tr><br>
		
		
		<tr align="center">
		  <td height="20" colspan="3" align="center"><strong>TEXTO DE SEGURIDAD </strong> </td>
		  </tr>
		<tr align="center">
		  <td colspan="3" align="center"><p align="center">
		    <? 
   require_once('recaptchalib.php');
   if ($_SERVER['SERVER_NAME']== "www.logicbus.com.mx") {
   $publickey = "6LcI3tUSAAAAALLsOuWan6WeDKVrxDg-bARaDz_K"; 
 }
 else
 {
$publickey = "6LcI3tUSAAAAALLsOuWan6WeDKVrxDg-bARaDz_K"; 
 }
  echo recaptcha_get_html($publickey);
  ?>
	  <!-- GENERAR NUEVA IMAGEN PARA EL CAPTCHA -->

</p>
				<p>&nbsp;                </p></td>
		</tr>
		<tr>
		  <td align="center" colspan="3"><input type="submit" name="boton" value="Enviar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		      <input name="reset" type="reset" onClick="de()" value="Cancelar" /></td>
		</tr>
	  </table>
      </form></td></tr>
  </table>

<br><br><br><br>
 	
</center>
	</div>
	</div>
				

<div id="down"></div>

  </div>
			

</div>
<? abajo(); ?><!-- PIE DE PAGINA -->



</div>
</div>
</html>
