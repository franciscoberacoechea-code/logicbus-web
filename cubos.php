<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LogicBus/Servicios</title>
<meta name="author" content="Héctor Gerardo">
 <meta name="description" content="LogicBus ofrece una extensa gama de Servicios como capacitaci&oacute;n, consultor&iacute;a, desarrollo de software">
 <meta name="keywords" content="labview, Consultoria, Capacitaci&oacute;n, Capacitacion, Desarrollo de Software, Desarrollo, Software, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, RF">
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
  <table width="100%">
    <tr><td align="center"><h1>S e r v i c i o s</h1></td></tr>
	<tr><td align="center"><hr color="#0066FF" align="center"><a name="ad"></a></td></tr>
	<tr><td align="center"><h2>Cubos De An&aacute;lisis De Datos</h2></td></tr>
	<tr><td align="center">La era de los reportes quedo atr&aacute;s para dar entrada a esta nueva y vers&aacute;til herramienta de trabajo. Las Aplicaciones de <i>Cubos De Datos</i> son una herramienta que le ayuda a ver toda la informaci&oacute;n que usted necesita tanto de manera anal&iacute;tica como auxiliar si as&iacute; lo desea.</td></tr>
	<tr><td align="center"><br>Esto es posible gracias a su diseño tipo explorador como lo puede ver en la figura que se encuentra a continuaci&oacute;n:</td></tr>
	<tr><td align="center" valign="middle"><br><img width="511" src="imagenes/servicio/cubo.jpg" alt="LogicBus/Cubos De Datos"></td></tr>
	<tr><td align="center"><br>Como puede ver en este ejemplo de inventario, a medida que usted da clic sobre los iconos con el recuadro <font style="border:1px; border-color:#FFFFFF; border-style:solid; border-bottom-color:#000000; border-right-color:#000000; background-color:#CCCCCC"><b>+</b></font>, estos se abren hacia abajo y hacia la derecha para mostrar todos sus elementos. Este ejemplo solo contiene informaci&oacute;n de un inventario, pero es posible aplicarlo a todo tipo de datos ya sea ventas, cartera, contabilidad, n&oacute;mina, estados financieros, etc. Todo lo que este almacenado en una Base De Datos y como lo quiera visualizar.</td></tr>
	<tr><td align="center"><br>En la columna que est&aacute; hasta la izquierda se muestran todos los almacenes: Asociaci&oacute;n, Mochis, etc. Cuando se abren, muestran los totales por cada almac&eacute;n, si usted quisiera saber como se compone ese total por almac&eacute;n puede hacerlo dando clic sobre el bot&oacute;n <font style="border:1px; border-color:#FFFFFF; border-style:solid; border-bottom-color:#000000; border-right-color:#000000; background-color:#CCCCCC"><b>+</b></font> apareciendo los totales por bodega, si desea ir mas a fondo puede hacerlo de la misma forma dando clic sobre el icono <font style="border:1px; border-color:#FFFFFF; border-style:solid; border-bottom-color:#000000; border-right-color:#000000; background-color:#CCCCCC"><b>+</b></font> de manera que dentro de la bodega existen clientes, y dentro de los clientes existen movimientos de inventario y dentro de los movimientos de inventario existen la cantidad por cada producto, etc.</td></tr>
	<tr><td align="center"><br>Esto es solo una parte de toda la funcionalidad de los cubos, mediante el men&uacute; Operaciones usted puede hacer lo siguiente:<br><br></td></tr>
	<tr><td align="left">
	  <ul><li>Agregar f&oacute;rmulas o columnas con operaciones aritm&eacute;ticas.</li>
	  <li>Marcar datos con otro color(por ejemplo los negativos).</li>
	  <li>Enviar datos a Excel.</li>
	  <li>Enviar datos a un archivo</li>
	  <li>Imprimir el cubo</li>
	  <li>Copiar los datos al clipboard para pegarlos a otra aplicaci&oacute;n</li></ul>
	</td></tr>
	<tr><td align="center">Y eso no es todo, una de las cosas m&aacute;s fabulosas es que todos los recuadros grises que usted ve en la parte de arriba, act&uacute;an como filtro de datos solo tiene que dar clic en el bot&oacute;n del triangulo que se encuentra a la derecha de cada cuadro gris, por ejemplo si usted quisiera ver las operaciones de un mes espec&iacute;fico, un año, un tipo de cliente, un almac&eacute;n, un tipo de movimiento, etc.</td></tr>
	<tr><td align="center"><br>Otra cualidad impresionante es que usted puede arrastrar los recuadros grises para ver la informaci&oacute;n como a usted le plazca, por ejemplo puede arrastrar los clientes hasta la columna de la izquierda y los datos se acomodan para ver la informaci&oacute;n como usted la orden&oacute;. Es posible arrastrar los recuadros de distintas formas siguientes:<br><br></td></tr>
	<tr><td align="left">
 	 <ul><li>Arrastrar los recuadros desde la parte de arriba a la parte de los renglones o viceversa.</li>
     <li>Arrastrar los recuadros desde la parte de arriba a la parte de las columnas o viceversa</li>
     <li>Arrastrar los recuadros desde la parte de columnas a la parte de los renglones o viceversa</li></ul>
    </td></tr>
	<tr><td align="center">Por &uacute;ltimo existen algunas opciones dando el clic derecho:<br><br></td></tr>
	<tr><td align="left">
	 <ul><li>Cerrar o abrir los &aacute;rboles de datos.</li>
	 <li>Seleccionar Datos.</li>
	 <li>Copiar.</li>
	 <li>Cambiar formato.</li>
	 <li>Activar o desactivar columnas.</li></ul></td></tr>
	<tr><td align="left"><b>NOTA:</b><br><center>Si usted ya cuenta con un sistema de informaci&oacute;n en una Base De Datos en <i>ORACLE, SQL o ACCESS</i> esta aplicaci&oacute;n puede correr sin ning&uacute;n problema, los datos no tienen que se capturados ya que los lee de su sistema autom&aacute;ticamente. En caso de no contar con un sistema con alguno de estos tipos de Base De Datos, es posible realizar un proceso de preparaci&oacute;n de datos.</center></td></tr>
	<tr><td align="center"><br>	  Informes: <span class="Estilo1">info<img src="imagenes/arroba.gif" width="12" height="10" border="0">logicbus.com.mx</span></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td width="100%" align="right" valign="top" bgcolor="rgb(33,33,33)" colspan="2"><font color="#FFFFFF" size="1">Derechos Reservados © - LogicBus S.A. de C.V. - 2001</font></td></tr>
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
