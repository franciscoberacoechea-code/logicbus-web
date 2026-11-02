<? header('P3P: CP="CAO PSA OUR"');
session_start();
include("libreria/libreria.php"); //<!-- LIBRERIA QUE VAMOS A UTILIZAR -->

$envia_a = $_POST["enviar_a"];
if ($envia_a=="")
$envia_a = $_POST["envia_a_dist"];

if ($envia_a=="")
$envia_a = $_POST["envia_a_comp"];

if ($envia_a=="")
$envia_a = $_POST["envia_a_enc"];
?> 
<script language="javascript">
function refresca(){
window.location = "soporte.php#int4";
document.location.reload();
}


</script>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Logicbus, Tu Sitio De Automatización En México!/ Soporte tecnico </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Logicbus">
	<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil,  Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, soporte, tecnico, consultoria">
	<meta name="copyright" content="Logicbus S.A. de C.V.">
	<meta name="description" content="Seccion de Soporte tecnico">
	<meta name="ROBOTS" content="nofollow">
	<meta name="revisit after" content="14 days">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Date: 2008-02-07 -->
	<link rel="stylesheet" href="estilo.css" type="text/css"  />
	<!-- Estilos de la TV -->
 
	<link rel="StyleSheet" href="Form_RMA.css" type="text/css" media="screen">
	
	<!-- Estilos de la TV fin -->
    
	<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="tabs_min.js" type="text/javascript" charset="utf-8"></script>
	<script src="accordion.js" type="text/javascript" charset="utf-8"></script>
	<script src="hpnormalize.js" type="text/javascript"></script>
	<script type="text/javascript" src="validaciones.js"></script> 
	
	<script language="javascript">
	<!--
	function new_freecap()
	{
		// loads new freeCap image
		if(document.getElementById)
		{
			// extract image name from image source (i.e. cut off ?randomness)
			thesrc = document.getElementById("freecap").src;
			thesrc = thesrc.substring(0,thesrc.lastIndexOf(".")+4);
			// add ?(random) to prevent browser/isp caching
			document.getElementById("freecap").src = thesrc+"?"+Math.round(Math.random()*100000);
		} else {
			alert("Sorry, cannot autoreload freeCap image\nSubmit the form and a new freeCap will be loaded");
		}
	}
	//-->
	</script>

	<script type="text/javascript" src="http://api.recaptcha.net/js/recaptcha_ajax.js"></script> 

</head>
	<table align="center" margin="50" id="baseMarquesina">
	<tr>
	<td>
	<p align="justify"><font class="forma">El número RMA debe obtenerse antes de enviar el producto(s) a Logicbus. Para evitar demoras en el procesamiento de su solicitud, por favor asegúrese de incluir todos los datos del siguiente formulario. El número RMA también debe estar claramente indicado en el exterior de la caja de transporte. Los paquetes que sean recibidos sin un número de RMA serán rechazados.</font></p> <br /><br />
	<div>
		<h2 align="center"><strong>Formulario para solicitar RMA (Retorno de Mercanc&iacute;a, Autorizaci&oacute;n)</strong></h2>
		<div align="center"> </div>
	</div>
		<form  name="formulario" id="formulario" action="confirma_email_RMA.php" method="post" onSubmit="return no_nulos_RMA(this)" onReset="return limpiar(this)">
		<table width="95%" align="center" border="0" class="alternative" cellpadding="5" cellspacing="6">
			<tr>
				<td align="center" colspan="3"><font class="forma"><strong>Los campos marcados con * son obligatorios.</strong></font></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item">No. de cliente:&nbsp;&nbsp;</td>
				<td align="left"><input name="cliente" type="text" onKeyPress="return permite_numeros()"  size="40" maxlength="11" class="txtBoxStyle" /></td>
	        </tr>
			<tr>
				<td style="width: 80px" class="item"><font class="forma">Nombre:&nbsp;&nbsp;</font></td>
				<td width="68%" align="left"><input name="nombre" type="text" onKeyPress="return permite_letras()"  size="40" maxlength="50" class="txtBoxStyle" /></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item"><font class="forma">Apellido:&nbsp;&nbsp;</font></td>
				<td align="left"><input type="text" size="40" name="apellido" maxlength="50" onKeyPress="return permite_letras()" class="txtBoxStyle" /></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item"><font class="forma">E-Mail:&nbsp;&nbsp;</font></td>
				<td nowrap="nowrap"><input type="text" name="email" size="40" maxlength="100" onKeyPress="return email(this)" class="txtBoxStyle" /><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12"> </td>
			</tr>
			<tr>
				<td style="width: 80px" class="item"><font class="forma">Empresa:&nbsp;&nbsp;</font></td>
				<td align="left"><input type="text" size="40" name="empresa" maxlength="100" class="txtBoxStyle" /></td>
			</tr>    
			<tr>
				<td style="width: 80px" class="item""><font class="forma">Lada:&nbsp;&nbsp;</font></td>
				<td width="68%" align="left"><input type="text" size="3" name="lada" maxlength="3" onKeyPress="return soloNumeros(event);" class="txtBoxStyle"/><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12" /> &nbsp;&nbsp;&nbsp;Tel:
					<input type="text" size="8" name="tel" maxlength="8" onKeyPress="return soloNumeros(event);" class="txtBoxStyle" /><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12">
				</td>
			</tr>
			<tr>
				<td style="width: 80px" class="item">No. de parte:&nbsp;&nbsp;</td>
				<td align="left"><input type="text" size="40" name="parte" maxlength="100" class="txtBoxStyle" /><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12"></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item">No. de serie:&nbsp;&nbsp;</td>
				<td align="left"><input type="text" size="40" name="serie" maxlength="100" class="txtBoxStyle" /><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12"></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item">No. de factura:&nbsp;&nbsp;</td>
				<td align="left"><input type="text" size="40" name="factura" maxlength="11" class="txtBoxStyle" /></td>
			</tr>
			<tr>
				<td style="width: 80px" class="item">Fecha de adquisici&oacute;n:&nbsp;&nbsp;</td>
				<td align="left"><input type="date" name="adquisicion" class="txtBoxStyle"/></td>
			</tr>
			<tr align="center">
				<td colspan="2" align="center" nowrap="nowrap">&nbsp;</td>   
	  	  </tr>
            <tr align="center">
				<td colspan="2" align="center" nowrap="nowrap"><font class="format">Favor de redactar la falla del equipo:</font>
                </td>   
		  	</tr>
            <tr>
				<td align="center" colspan ="2">
					<textarea name="falla" cols="45" rows="8" wrap="VIRTUAL" class="txtBoxStyle" ></textarea><img src="http://logicbus.3dcartstores.com/assets/templates/common/images/error2.gif" width="12" height="12">  
				</td>
            </tr>
		  <tr align="center">
			</tr>
			<tr align="center">
				<td valign="middle" class="item">Escribe la palabra de la imagen:</td>
				<td colspan="3" align="left">
					<p><!-- ESTAS 3 LINEAS DE CODIGO SON PARA EL CAPTCHA DE SECURIMAGE" -->
						<img src="securimage/securimage_show.php" alt="CAPTCHA Image" name="captcha" id="captcha" /> <!-- IMAGEN DEL CAPTCHA -->
						<br /> <br />
						<input type="text" name="captcha_code" size="10" maxlength="6" class="txtBoxStyle" /> <!-- CUADRO DE TEXTO PARA ESCRIBIR LO QUE DICE LA IMAGEN DEL CAPTCHA -->
						<a href="#" onClick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Refrescar imagen ]</a>  <!-- GENERAR NUEVA IMAGEN PARA EL CAPTCHA -->
					</p>		    
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" colspan="3"><input type="submit" value="Enviar solicitud" class="btn" onMouseOver="this.className='btn_over'" onMouseOut="this.className='btn'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		      <input name="reset" type="reset" onClick="de()" value="Limpiar" class="btn" onMouseOver="this.className='btn_over'" onMouseOut="this.className='btn'"/></td>
			</tr>
        
		</table>
		</form>
	
	</td>
	</tr>
	</table>
</html>
