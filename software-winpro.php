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
	<title>Software: WinProladder | Logicbus</title>
	<meta name="description" content="Aplicación basada en Windows con un ambiente amigable de fácil aprendizaje y operación para usuarios principiantes o avanzados.">

	<meta name="keywords" content="WinProladder, Logicbus, Software, programa orientado a proyectos, Programación en escalera, monitorear, controlar">

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
						<li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de desarrollo</a></li>
						<li class="breadcrumb-item active" aria-current="page">WinProladder</li>
					</ol>
				</nav>
				<h1>WinProladder</h1>

				<div align="center">
					<img src="images/banner/www/FATEK-SOFTWARE-WINPROLOADER.jpg" alt="Software: WinProladder" title="Software: WinProladder" class="image_productos" width="100%">
				</div><br>

				<div align="right">
					<nav class="navMenuSuper">
						<ul>
							<li>
								<img src="https://www.logicbus.com.mx/imagenes/descarga-software.gif" alt="Download" class="carrito"><a href="https://www.logicbus.com.mx/descargas/29/WProlad330-24518-EN.zip" target="_blank">Descargar WinProladder</a></a>
							</li>
						</ul>
					</nav>
				</div>
				<strong>Caracter&iacute;sticas:</strong>
				<ul>
					<li>Aplicaci&oacute;n basada en Windows con un ambiente amigable de f&aacute;cil aprendizaje y operaci&oacute;n para usuarios principiantes o avanzados.</li>
					<li>Edici&oacute;n de programa en tiempo real</li>
					<li>Documentaci&oacute;n de programa</li>
					<li>Programa orientado a proyectos</li>
					<li>Programaci&oacute;n en escalera</li>
					<li>Para monitorear y controlar</li>
					<li>Simulador incluido </li>
				</ul>

				<div align="center">
					<img src="imagenes/29/Nueva%20carpeta/WinPro.png" alt="Software WinProladder" title="Software WinProladder" border="0" align="texttop" width="70%">
				</div>

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