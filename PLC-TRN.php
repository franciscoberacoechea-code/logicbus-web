<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-31533636-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-1007518778');
	</script>
	<title>Curso PLC - LOGICBUS S.A DE C.V.</title>
	<meta name="description" content="Curso básico de programación PLCs Fatek, 2 días de duración, curso impartido en español y manuales técnicos de hardware y funciones en inglés.">

	<meta name="keywords" content="Convertidores, protocolo, Serial, Asíncrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, alámbrico, inalámbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--- Estilos Necesarios-->
	<?php echo $favicon; ?>
	<?php echo $boostrap_css; ?>
	<?php echo $own_file_css; ?>
	<?php echo $subcategorias; ?>
	<?php echo $menu; ?>
	<?php echo $estilos; ?>
	<?php echo $footer_css; ?>
	<?php echo $flickity_css; ?>

	<?php echo $google_analytics; ?>
	<?php echo $var_headers; ?>

</head>

<body>
	<?php echo $var_body; ?>
	<?php require("libreria/header.view.php"); ?>

	<div id="main">
		<div class="gridContArriba">
			<div class="griditemContA">
				<?php
				menucategorias();
				?>
			</div>
			<div class="griditemContA">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb pl-0">
						<li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
						<li class="breadcrumb-item"><a href="cursos" class="blue link-orange">Cursos</a></li>
						<li class="breadcrumb-item active" aria-current="page">PLC-TRN</li>
					</ol>
				</nav>

				<h1>PLC-TRN</h1>
				<img src="imagenes/29/BANNER-CURSO-PLC.png" alt="CURSO PLC-TRN" title="CURSO PLC-TRN" width="100%">
				<div align="center">
					<br>
					<strong>Curso básico de programación PLCs Fatek, 2 días de duración, curso impartido en español y manuales técnicos de hardware y funciones en inglés.</strong>
				</div>
				<nav class="navMenuSuper">
					<ul>
						<li>
							<a href="https://tienda.logicbus.com.mx/PLC-TRN_p_8928.html" target="_blank">Ver en Tienda</a>
						</li>
					</ul>
				</nav>
				<br>
				<p align="justify">Al finalizar este curso, usted podrá entender las características básicas y funcionalidades de los PLC de la serie FBs, y será capaz de desarrollar aplicaciones usando estos equipos.<br>El curso de programación de PLCs consiste en los siguientes módulos:</p>

				<strong>Cursos</strong>
				<ul>
					<li>Introducción</li>
					<li>Familias</li>
					<li>Hardware</li>
					<li>Conexiones de entradas/salidas</li>
					<li>Arquitectura</li>
					<li>Funciones e Instrucciones</li>
					<li>Software</li>
					<li>Ejemplos prácticos</li>
				</ul>
				<br><br>

				<p>El curso incluye 1 PLC <a href="FBS-20MC">FBS-20MCR2-AC</a> (12 DI/8 DO, expandible) y 1 cable <a href="https://tienda.logicbus.com.mx/FBS-U2C-MD-180_p_3460.html">FBS-U2C-MD-180</a> (mini din RS232 a USB).</p>

				<br><br>

			</div>
		</div>
	</div>
	<!-- PIE DE PAGINA -->
	<?php require("libreria/footer.view.php"); ?>
	<?php echo $bootstrap_js; ?>
	<?php echo $jquery_js; ?>
	<?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>