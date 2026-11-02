<? include("libreria.php"); 
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
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Logicbus, Tu Sitio De Automatización En México!/ Soporte tecnico </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Logicbus">
<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil,  Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, soporte, tecnico, consultoria">
<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="description" content="Seccion de Soporte tecnico">
<meta name="ROBOTS" content="all">
<meta name="revisit after" content="14 days">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Date: 2008-02-07 -->
	<link rel="stylesheet" href="estilo.css" type="text/css"  />
	
	
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


//defino una serie de varibles Array para cada país
var provincias_1=new Array("","Aguascalientes","Baja California Norte","Baja California Sur","Campeche",
				"Coahuila","Colima","Chiapas","Chihuahua","Distrito Federal","Durango","Guanajuato",
				"Guerrero","Hidalgo","Jalisco","México","Michoacán","Morelos","Nayarit","Nuevo León",
				"Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosí","Sinaloa","Sonora",
				"Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas")
var provincias_2=new Array("","Alabama","Alaska","Arkansas","Arizona","California","Colorado",
				"Connecticut","Dakota del Sur","Delaware","Florida","Georgia","Hawaii","Idaho",
				"Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland",
				"Massachussetts","Michigan","Minnesota","Mississippi","Missouri","Montana",
				"Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York",
				"North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania",
				"Rhode Island","South Carolina","Tennessee","Texas","Utah","Vermont","Virginia",
                "Washington","West Virginia","Wisconsin","Wyoming")
var provincias_3=new Array("Otro")


//función que cambia las provincias del select de provincias en función del país que se haya escogido en el select de país.
function cambia_provincia(){
	//tomo el valor del select del pais elegido
	var pais
	pais = document.formulario.pais[document.formulario.pais.selectedIndex].id

	//miro a ver si el pais está definido
	if (pais == 1 || pais == 2) {
		//si estaba definido, entonces coloco las opciones de la provincia correspondiente.
		//selecciono el array de provincia adecuado
		mis_provincias=eval("provincias_" + pais)
		//calculo el numero de provincias
		num_provincias = mis_provincias.length
		//marco el número de provincias en el select
		document.formulario.edo.length = num_provincias
		//para cada provincia del array, la introduzco en el select
		for(i=0;i<num_provincias;i++){
		   document.formulario.edo.options[i].value=mis_provincias[i]
		   document.formulario.edo.options[i].text=mis_provincias[i]
		}	
document.formulario.estado.disabled=true;
	}else{
		//si no había provincia seleccionada, elimino las provincias del select
		document.formulario.edo.length = 1
		//coloco un guión en la única opción que he dejado
		document.formulario.edo.options[0].value = "Otro"
	    document.formulario.edo.options[0].text = "Otro"
		document.formulario.estado.disabled=false;
		}
	//marco como seleccionada la opción primera de provincia
	document.formulario.edo.options[0].selected = true

}
function valida(){
if(document.formulario.edo.value=="Otro" && document.formulario.estado.value==""){
alert("Escribe tu estado")
document.formulario.estado.focus()
return false
}
else{
return true
}
}

</script>
		
</head>

 
<div id="soporte">
<? arriba(); ?>
<div id="secciones_centro">
<? lado("no",""); ?>
<h3>Soporte t&eacute;cnico</h3>

			
		
			<div id="left_content" class="column first grid9 left">
				<ul class="tabs">
				<li><a href="#int1"><span>Consultor&iacute;a</span></a></li>
				<!--<li><a href="#int2"><span>Foro</span></a></li>-->
				<li><a href="#int3"><span>Chat</span></a></li>
				<li><a href="#int4"><span>Soporte</span></a></li>
				<!--<li><a href="#int5"><span>Especificaciones</span></a></li>
				<li><a href="#int6"><span>FAQs</span></a></li>-->
				</ul>
				
				<div class="cap"></div>
				<div id="int1" class="tab_content">
				
				 
<!--     <tr><td align="center" colspan="2"><h1>C o m p a &ntilde; &iacute; a</h1></td></tr> -->
	
	<h1 align="center">Consultor&iacute;a&nbsp; y Soporte T&eacute;cnico</h1> 
<center>
	<table width="97%">

    <tr>
      <td height="218"><div align="center"><img src="imagenes/servicio/servicio2.gif" alt="Logicsus/Consultoria" width="180" align="top" /></div></td>
      <td width="69%" align="center"><div align="justify"><strong>Consultor&iacute;a</strong> <br />
            <br />
          Este es el servicio m&aacute;s b&aacute;sico que se ofrece y gratuito, pero el m&aacute;s importante, ya que en una buena selecci&oacute;n de equipo, herramientas y software, radicar&aacute; el &eacute;xito o fracaso de su proyecto de automatizaci&oacute;n y pruebas. <br>
          <br>
  Los especialistas de Logicbus en el ramo est&aacute;n en espera de la informaci&oacute;n sobre su proyecto para en conjunto con usted ayudarlo a seleccionar los equipos m&aacute;s adecuados y que se encuentren dentro de su presupuesto. </div></td>
    </tr>
    <tr>
      <td colspan="2">    <div align="justify">Favor de enviar o comunicar todos los detalles de su proyecto para hacer la selecci&oacute;n adecuada de sus equipos, en muchas ocasiones tenemos varias soluciones, esto se lo haremos saber para que usted al final pueda decidir que es lo que mejor se adapta a su necesidad. <br>
                <br>
                <br>
                <strong>Soporte T&eacute;cnico </strong><br>
                <br>
              Despu&eacute;s de realizar una compra es com&uacute;n tener dudas sobre la instalaci&oacute;n, programaci&oacute;n o funcionamiento de los equipos. Con Logicbus usted cuenta con un grupo de asesores que estar&aacute;n esperando sus preguntas para apoyarlo de la mejor manera posible hasta que se logre el objetivo que es dejar su equipo listo y funcionando.&nbsp;<a href="contacto">Ll&aacute;menos</a>  o llene el siguiente <a href="javascript:refresca()">formato</a>  para que su duda sea resuelta lo antes posible. <br> 
              <br>
                <br>
  
              <strong>Integraci&oacute;n de Proyectos </strong><br>
                <br>
    Si su empresa desea un proyecto llave en mano; es decir donde usted brinda todos los requerimientos y se le entrega un equipo 100% funcional, tambi&eacute;n cont&aacute;ctenos para recomendarle uno de nuestros <a href="dist_int">integradores</a> certificados que le podr&aacute;n cotizar el proyecto que usted desea.</div></td>
        </tr></table>
</center>
		<br><br><br><br><br><br><br><br><br><br>
</div>

							
				
				
	<!--<div id="int2" class="tab_content">
									
			<h2 align="center">Foro de Logicbus</h2>
			<br>

  <br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br /><br><br /><br><br /><br><br /><br><br /><br />
	 </div>  --> 
	 <div id="int3" class="tab_content">
				<center>					
			<h1>Chat</h1>

  <table width="99%"  border="0">
	<tr>
	  <td align="center"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td align="center"><div id="craftysyntax">
<script type="text/javascript" src="/support/livehelp_js.php?eo=1&relative=Y&amp;department=2&amp;serversession=1&amp;pingtimes=15"></script>
</div>
<!-- copyright 2003 - 2008 by Eric Gerdes --> </td>
    </tr>
    <tr align="right">
      <td align="center"><div align="center"> </div></td>
    </tr>
    <tr align="right">
      <td align="center"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td align="center"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td align="center"><div align="center"></div></td>
    </tr>
  </table>
 
</center>
   <br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br /><br><br /><br><br /><br><br /><br>
	 </div> 
	 <div id="int4" class="tab_content">
									
			<a name="comentarios"><h1 align="center">Soporte</h1></a>
			<div align="center"><br>
            
Si tienes alguna duda, por favor llena el siguiente formulario y a la brevedad te contestaremos.<br />
<br />

	



	        </div>
			
			<table width="95%"><tr><td>
	  <form  name="formulario" id="formulario" action="confirma_email.php" method="post" onSubmit="return no_nulos(this)" onReset="return limpiar(this)">
	  <table width="100%">
	    <tr>
		    <td colspan="3" align="center"><div align="center"><font class="format"><strong>Selecciona una opci&oacute;n de destino:</strong> </font></div></td>
		  </tr>
	      <tr>
	        <td align="center" colspan="3"><table width="73%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="19%"><font class="format">
                  <input  name="opcion1" type="radio" value="1" <? if ($envia_a=='ventas' || $envia_a=='admin' || $envia_a=='ordenes' || $envia_a=='info' || $envia_a=='') echo 'checked' ?> />
Ventas  </font></td>
                <td width="28%"><font class="format">
<input type="radio" name="opcion1" value="0" <? if ($envia_a=='cotizaciones' || $envia_a=='info') echo 'checked' ?> />
     Cotizaciones  </font></td>
                <td width="25%"><font class="format">
                  <input name="opcion1" type="radio" value="2" <? if ($envia_a=='soporte' || $envia_a=='info') echo 'checked' ?> />
      Soporte </font></td>
                <td width="28%"><font class="format">
                  <input type="radio" name="opcion1"  value="3" <? if ($envia_a=='webmaster') echo 'checked' ?>/>
      Webmaster </font></td>
              </tr>
            </table></td>
	        </tr>
	      <tr>
	        <td align="center" colspan="3">&nbsp;</td>
	        </tr>
	      <tr>
	        <td align="center" colspan="3"><font class="forma"><strong>Los campos marcados con * son obligatorios.</strong></font></td>
	      </tr>
		
	    <tr>
	      <td width="32%" align="right"><font class="forma">*Nombre:&nbsp;&nbsp;</font></td>
	    <!---->
	    <td width="68%" align="left"><input name="nombre" type="text" onkeypress="return permite_letras()"  size="40" maxlength="25" /></td>
	    </tr>
		<tr>
		  <td align="right"><font class="forma">*Apellido Paterno:&nbsp;&nbsp;</font></td>
		  <!----><td align="left"><input type="text" size="40" name="apellido_p" maxlength="25" onKeyPress="return permite_letras()"></td></tr>
<tr>    <td align="right"><font class="forma">*Apellido Materno:&nbsp;&nbsp;</font></td>
  <!----><td align="left"><input type="text" size="40" name="apellido_m" maxlength="25" onKeyPress="return permite_letras()"></td></tr>
	    <tr>
	      <td align="right"><font class="forma">*E-Mail:&nbsp;&nbsp;</font></td>
	      <!----><td align="left"><input type="text" size="40" name="mail" maxlength="40" onKeyPress="return email(this)"></td></tr>
	    <tr>
	      <td align="right"><font class="forma">*Empresa:&nbsp;&nbsp;</font></td>
	      <!----><td align="left"><input type="text" size="40" name="empresa" maxlength="50"></td></tr>
	    <tr bordercolor="#999999">
	      <td colspan="2" align="center">
          <table cellpadding="0" cellspacing="0" style="border:1px solid; frame:box; border-color:#999999" width="420">
  <tr>
   <td colspan="2" align="center">Direcci&oacute;n</td>
  </tr>
  <tr>
    <td align="right" width="80">&nbsp;&nbsp;*Calle:&nbsp;&nbsp;</td>
	      <!----><td align="left" ><input type="text" size="40" name="dir" maxlength="50"></td></tr>
<tr bordercolor="#999999">
  <td align="right"><font class="forma">*No.Externo:&nbsp;&nbsp;</font></td>
  <!----><td align="left"><input type="text" size="6" name="int" maxlength="6" onkeypress="return soloNumeros(event);"></td></tr>
</table>	    
<tr>
	      <td align="right"><font class="forma">Lada Int:&nbsp;&nbsp;</font></td>
	      <!----><td width="68%" align="left"><input type="text" size="3" name="lada_int" maxlength="3" onkeypress="return soloNumeros(event);" >
	      Lada Nac:<input type="text" size="3" name="lada_nac" maxlength="3" onkeypress="return soloNumeros(event);" > *
	      Tel:
	        <input type="text" size="8" name="tel" maxlength="8" onkeypress="return soloNumeros(event);" >
	        Ext: <input type="text" size="5" name="ext" maxlength="5" onkeypress="return soloNumeros(event);" ></td>
	    </tr>

		<tr>
		  <td align="right"><font class="forma">*&nbsp;Pa&iacute;s:&nbsp;&nbsp;</font></td>
		  <td align="left">            <select name="pais" id="pais" onchange="cambia_provincia()">
            <option  value="" id="" ></option>
            <option value="Afganistán" id="3">Afganistán</option>
            <option value="Albania" id="3">Albania</option>
            <option value="Alemania" id="3">Alemania</option>
            <option value="Andorra" id="3">Andorra</option>
            <option value="Angola" id="3">Angola</option>
            <option value="Antigua y Barbuda" id="3">Antigua y Barbuda</option>
            <option value="Antillas Holandesas" id="3">Antillas Holandesas</option>
            <option value="Arabia Saudí" id="3">Arabia Saudí</option>
            <option value="Argelia" id="3">Argelia</option>
            <option value="Argentina" id="3">Argentina</option>
            <option value="Armenia" id="3">Armenia</option>
            <option value="Aruba" id="3">Aruba</option>
            <option value="Australia" id="3">Australia</option>
            <option value="Austria" id="3">Austria</option>
            <option value="Azerbaiyán" id="3">Azerbaiyán</option>
            <option value="Bahamas" id="3">Bahamas</option>
            <option value="Bahrein" id="3">Bahrein</option>
            <option value="Bangladesh" id="3">Bangladesh</option>
            <option value="Barbados" id="3">Barbados</option>
            <option value="Bélgica" id="3">Bélgica</option>
            <option value="Belice" id="3">Belice</option>
            <option value="Benín" id="3">Benín</option>
            <option value="Bermudas" id="3">Bermudas</option>
            <option value="Bielorrusia" id="3">Bielorrusia</option>
            <option value="Bolivia" id="3">Bolivia</option>
            <option value="Botswana" id="3">Botswana</option>
            <option value="Bosnia" id="3">Bosnia</option>
            <option value="Brasil" id="3">Brasil</option>
            <option value="Brunei" id="3">Brunei</option>
            <option value="Bulgaria" id="3">Bulgaria</option>
            <option value="Burkina Faso" id="3">Burkina Faso</option>
            <option value="Burundi" id="3">Burundi</option>
            <option value="Bután" id="3">Bután</option>
            <option value="Cabo Verde" id="3">Cabo Verde</option>
            <option value="Camboya" id="3">Camboya</option>
            <option value="Camerún" id="3">Camerún</option>
            <option value="Canadá" id="3">Canadá</option>
            <option value="Chad" id="3">Chad</option>
            <option value="Chile" id="3">Chile</option>
            <option value="China" id="3">China</option>
            <option value="Chipre" id="3">Chipre</option>
            <option value="Colombia" id="3">Colombia</option>
            <option value="Comoras" id="3">Comoras</option>
            <option value="Congo" id="3">Congo</option>
            <option value="Corea del Norte" id="3">Corea del Norte</option>
            <option value="Corea del Sur" id="3">Corea del Sur</option>
            <option value="Costa de Marfil" id="3">Costa de Marfil</option>
            <option value="Costa Rica" id="3">Costa Rica</option>
            <option value="Croacia" id="3">Croacia</option>
            <option value="Cuba" id="3">Cuba</option>
            <option value="Dinamarca" id="3">Dinamarca</option>
            <option value="Dominica" id="3">Dominica</option>
            <option value="Dubai" id="3">Dubai</option>
            <option value="Ecuador" id="3">Ecuador</option>
            <option value="Egipto" id="3">Egipto</option>
            <option value="El Salvador" id="3">El Salvador</option>
            <option value="Emiratos Árabes Unidos" id="3">Emiratos Árabes Unidos</option>
            <option value="Eritrea" id="3">Eritrea</option>
            <option value="Eslovaquia" id="3">Eslovaquia</option>
            <option value="Eslovenia" id="3">Eslovenia</option>
            <option value="España" id="3">España</option>
            <option value="Estados Unidos de América" id="2">Estados Unidos de América</option>
            <option value="Estonia" id="3">Estonia</option>
            <option value="Etiopía" id="3">Etiopía</option>
            <option value="Fiyi" id="3">Fiyi</option>
            <option value="Filipinas" id="3">Filipinas</option>
            <option value="Finlandia" id="3">Finlandia</option>
            <option value="Francia" id="3">Francia</option>
            <option value="Gabón" id="3">Gabón</option>
            <option value="Gambia" id="3">Gambia</option>
            <option value="Georgia" id="3">Georgia</option>
            <option value="Ghana" id="3">Ghana</option>
            <option value="Grecia" id="3">Grecia</option>
            <option value="Guam" id="3">Guam</option>
            <option value="Guatemala" id="3">Guatemala</option>
            <option value="Guayana Francesa" id="3">Guayana Francesa</option>
            <option value="Guinea-Bissau" id="3">Guinea-Bissau</option>
            <option value="Guinea Ecuatorial" id="3">Guinea Ecuatorial</option>
            <option value="Guinea" id="3">Guinea</option>
            <option value="Guyana" id="3">Guyana</option>
            <option value="Granada" id="3">Granada</option>
            <option value="Haití" id="3">Haití</option>
            <option value="Honduras" id="3">Honduras</option>
            <option value="Hong Kong" id="3">Hong Kong</option>
            <option value="Hungría" id="3">Hungría</option>
            <option value="Holanda" id="3">Holanda</option>
            <option value="India" id="3">India</option>
            <option value="Indonesia" id="3">Indonesia</option>
            <option value="Irak" id="3">Irak</option>
            <option value="Irán" id="3">Irán</option>
            <option value="Irlanda" id="3">Irlanda</option>
            <option value="Islandia" id="3">Islandia</option>
            <option value="Islas Caimán" id="3">Islas Caimán</option>
            <option value="Islas Marshall" id="3">Islas Marshall</option>
            <option value="Islas Pitcairn" id="3">Islas Pitcairn</option>
            <option value="Islas Salomón" id="3">Islas Salomón</option>
            <option value="Israel" id="3">Israel</option>
            <option value="Italia" id="3">Italia</option>
            <option value="Jamaica" id="3">Jamaica</option>
            <option value="Japón" id="3">Japón</option>
            <option value="Jordania" id="3">Jordania</option>
            <option value="Kazajstán" id="3">Kazajstán</option>
            <option value="Kenia" id="3">Kenia</option>
            <option value="Kirguistán" id="3">Kirguistán</option>
            <option value="Kiribati" id="3">Kiribati</option>
            <option value="Kósovo" id="3">Kósovo</option>
            <option value="Kuwait" id="3">Kuwait</option>
            <option value="Laos" id="3">Laos</option>
            <option value="Lesotho" id="3">Lesotho</option>
            <option value="Letonia" id="3">Letonia</option>
            <option value="Líbano" id="3">Líbano</option>
            <option value="Liberia" id="3">Liberia</option>
            <option value="Libia" id="3">Libia</option>
            <option value="Liechtenstein" id="3">Liechtenstein</option>
            <option value="Lituania" id="3">Lituania</option>
            <option value="Luxemburgo" id="3">Luxemburgo</option>
            <option value="Macedonia" id="3">Macedonia</option>
            <option value="Madagascar" id="3">Madagascar</option>
            <option value="Malasia" id="3">Malasia</option>
            <option value="Malawi" id="3">Malawi</option>
            <option value="Maldivas" id="3">Maldivas</option>
            <option value="Malí" id="3">Malí</option>
            <option value="Malta" id="3">Malta</option>
            <option value="Marianas del Norte" id="3">Marianas del Norte</option>
            <option value="Marruecos" id="3">Marruecos</option>
            <option value="Mauricio" id="3">Mauricio</option>
            <option value="Mauritania" id="3">Mauritania</option>
            <option value="México" id="1">México</option>
            <option value="Micronesia" id="3">Micronesia</option>
            <option value="Mónaco" id="3">Mónaco</option>
            <option value="Moldavia" id="3">Moldavia</option>
            <option value="Mongolia" id="3">Mongolia</option>
            <option value="Montenegro" id="3">Montenegro</option>
            <option value="Mozambique" id="3">Mozambique</option>
            <option value="Myanmar (antes Birmania)" id="3">Myanmar (antes Birmania)</option>
            <option value="Namibia" id="3">Namibia</option>
            <option value="Nauru" id="3">Nauru</option>
            <option value="Nepal" id="3">Nepal</option>
            <option value="Nicaragua" id="3">Nicaragua</option>
            <option value="Níger" id="3">Níger</option>
            <option value="Nigeria" id="3">Nigeria</option>
            <option value="Noruega" id="3">Noruega</option>
            <option value="Nueva Zelanda" id="3">Nueva Zelanda</option>
            <option value="Omán" id="3">Omán</option>
            <option value="Orden de Malta" id="3">Orden de Malta</option>
            <option value="Países Bajos" id="3">Países Bajos</option>
            <option value="Pakistán" id="3">Pakistán</option>
            <option value="Palestina" id="3">Palestina</option>
            <option value="Palau" id="3">Palau</option>
            <option value="Panamá" id="3">Panamá</option>
            <option value="Papúa Nueva Guinea" id="3">Papúa Nueva Guinea</option>
            <option value="Paraguay" id="3">Paraguay</option>
            <option value="Perú" id="3">Perú</option>
            <option value="Polonia" id="3">Polonia</option>
            <option value="Portugal" id="3">Portugal</option>
            <option value="Puerto Rico" id="3">Puerto Rico</option>
            <option value="Qatar" id="3">Qatar</option>
            <option value="Reino Unido" id="3">Reino Unido</option>
            <option value="República Centroafricana" id="3">República Centroafricana</option>
            <option value="República Checa" id="3">República Checa</option>
            <option value="República del Congo" id="3">República del Congo</option>
            <option value="República Democrática del Congo" id="3">República Democrática del Congo</option>
            <option value="República Dominicana" id="3">República Dominicana</option>
            <option value="Ruanda" id="3">Ruanda</option>
            <option value="Rumania" id="3">Rumania</option>
            <option value="Rusia" id="3">Rusia</option>
            <option value="Sáhara Occidental" id="3">Sáhara Occidental</option>
            <option value="Saint Kitts-Nevis" id="3">Saint Kitts-Nevis</option>
            <option value="Samoa Americana" id="3">Samoa Americana</option>
            <option value="Samoa" id="3">Samoa</option>
            <option value="San Marino" id="3">San Marino</option>
            <option value="Santa Lucía" id="3">Santa Lucía</option>
            <option value="Santo Tomé y Príncipe" id="3">Santo Tomé y Príncipe</option>
            <option value="San Vicente y las Granadinas" id="3">San Vicente y las Granadinas</option>
            <option value="Senegal" id="3">Senegal</option>
            <option value="Serbia" id="3">Serbia</option>
            <option value="Seychelles" id="3">Seychelles</option>
            <option value="Sierra Leona" id="3">Sierra Leona</option>
            <option value="Singapur" id="3">Singapur</option>
            <option value="Siria" id="3">Siria</option>
            <option value="Somalia" id="3">Somalia</option>
            <option value="Sri Lanka (antes Ceilán)" id="3">Sri Lanka (antes Ceilán)</option>
            <option value="Sudáfrica" id="3">Sudáfrica</option>
            <option value="Sudán" id="3">Sudán</option>
            <option value="Suecia" id="3">Suecia</option>
            <option value="Suecia" id="3">Suiza</option>
            <option value="Suazilandia" id="3">Suazilandia</option>
            <option value="Tailandia" id="3">Tailandia</option>
            <option value="Taiwán o Formosa" id="3">Taiwán o Formosa</option>
            <option value="Tanzania" id="3">Tanzania</option>
            <option value="Tayikistán"id="3">Tayikistán</option>
            <option value="Tíbet (actualmente bajo soberanía China)" id="3">Tíbet (actualmente bajo soberanía China)</option>
            <option value="Timor Oriental" id="3">Timor Oriental</option>
            <option value="Togo" id="3">Togo</option>
            <option value="Tonga" id="3">Tonga</option>
            <option value="Trinidad y Tobago" id="3">Trinidad y Tobago</option>
            <option value="Túnez" id="3">Túnez</option>
            <option value="Turkmenistán" id="3">Turkmenistán</option>
            <option value="Turquía" id="3">Turquía</option>
            <option value="Tuvalu" id="3">Tuvalu</option>
            <option value="Ucrania" id="3">Ucrania</option>
            <option value="Uganda" id="3">Uganda</option>
            <option value="Uruguay" id="3">Uruguay</option>
            <option value="Uzbequistán" id="3">Uzbequistán</option>
            <option value="Vanuatu" id="3">Vanuatu</option>
            <option value="Vaticano" id="3">Vaticano</option>
            <option value="Venezuela" id="3">Venezuela</option>
            <option value="Vietnam" id="3">Vietnam</option>
            <option value="Wallis y Futuna" id="3">Wallis y Futuna</option>
            <option value="Yemen" id="3">Yemen</option>
            <option value="Yibuti" id="3">Yibuti</option>
            <option value="Zambia" id="3">Zambia</option>
            <option value="Zaire" id="3">Zaire</option>
            <option value="Zimbabue" id="3">Zimbabue</option>
          </select> </td>
		  </tr>
		<tr>
		  <td align="right"><font class="forma">*&nbsp;Estado:&nbsp;&nbsp;</font></td>
		  <td align="left">
<select name="edo" id="edo">
<option value="Otro">Otro</option>
<option value="Otro" >Otro</option>
</select>
<input name="estado" type="text" id="estado" disabled />
</td>
		  </tr>
		<tr>
		  <td align="right"><font class="forma">*&nbsp;Ciudad:&nbsp;&nbsp;</font></td>
		  <!----><td align="left"><input type="text" size="40" name="cd" maxlength="25" onKeyPress="return permite_letras()" onfocus="valida()"></td></tr>
		<tr align="center">
		  <td align="center" colspan="3"><font class="forma">&iquest;Tiene p&aacute;gina Web?</font><br>
		    <input type="radio" name="pweb" value="1" onclick="ac()" />
		    Si&nbsp;&nbsp;&nbsp;
		    <input type="radio" name="pweb" checked value="0" onclick="de()" />
		    No<br>
		    <input type="text" size="40" name="url" disabled maxlength="50" value="http://www." />		<br>    <font class="format">*Comentarios:</font><br>
		    <textarea name="msg" cols="45" rows="8" wrap="VIRTUAL" ></textarea>		    </td>
		</tr>
	    <tr><!----><td colspan="3" align="center"><div align="center">
	      </div></td></tr>
		<tr>
		  <td colspan="3" align="center">&nbsp;</td>
		</tr><br>
		
		<tr><td colspan="3" align="center"><font class="format">Selecciona una de las siguientes opciones </font></td></tr>
		<tr><td align="right"><input type="checkbox" name="dist"></td><!----><td align="left"><font class="format">Quisiera recibir informaci&oacute;n sobre como ser distribuidor</font></td>
		</tr>
		<tr><td align="right"><input type="checkbox" name="prod"></td><!----><td align="left"><font class="format">Quisiera recibir informaci&oacute;n sobre productos</font></td>
		</tr>
		<tr><td align="right"><input type="checkbox" name="mailq"></td><!---->
		<td align="left">
		<font class="format">Quisiera inscribirme al e-mail mensual </font></td>
		</tr>
		<tr align="center">
		  <td height="20" colspan="3" align="center"><strong>TEXTO DE SEGURIDAD </strong></td>
		  </tr>
		<tr align="center">
		  <td colspan="3" align="center"><p>
		      <? 
   require_once('recaptchalib.php');
  $publickey = "6LdtS84SAAAAAC-vDlHtzCV2X19zzlrrA9c7EHBt"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
  ?>
		      </p>		    </td>
		  </tr>
		<tr><td colspan="3">&nbsp;</td></tr>
		<tr>
		  <td align="center" colspan="3"><input type="submit" name="boton" value="Enviar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		      <input name="reset" type="reset" onclick="de()" value="Cancelar" /></td>
		</tr>
	  </table>
      </form></td></tr>
  </table>
	 </div>  
<!--<div id="int5" class="tab_content">
<h2 align="center">Especificaciones</h2>
 <br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br /><br><br /><br><br /><br><br /><br><br /><br /><br />


</div>	 
<div id="int6" class="tab_content">
<h2 align="center">FAQs</h2>
<br>
 <br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br><br /><br /><br><br /><br><br /><br><br /><br><br /><br />


</div>	 
	!-->
  
		

<div id="down"></div>

			</div>
			

</div>
<? abajo(); ?><!-- PIE DE PAGINA -->



</div>
</div>

</html>
