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

	<title>Cursos - Logicbus S.A de C.V.</title>
	<meta name="description" content="Curso básico de software Indusoft Web Studio, 3 días de duración, curso impartido en español y manual en inglés">

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
			<div class="griditemContA" id="subir">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb pl-0">
						<li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
						<li class="breadcrumb-item active" aria-current="page">Cursos</li>
					</ol>
				</nav>
				<div align="center">
					<h1>Nuestros Cursos</h1>
					<img src="images/banner/www/banner-nuestros-cursos.png" class="image_productos" class="img-responsive" width="100%" alt="Nuestros Cursos" title="Nuestros Cursos">
				</div>
				<center>
					<div class="seccion">
						<div class="col-center">
							<h1 style="color:white;vertical-align: sub;"><span>Cursos</span></h1>
						</div>
					</div>
				</center><br>
				<center>
					<div class="griditemContA">
						<div class="cardH gridContCard">
							<div class="cardH-preview griditemCardA">
								<a href="https://tienda.logicbus.com.mx/PLC-TRN_p_8928.html" title="Ir a Tienda Logicbus" target="_blank">
									<img class="" src="imagenes/cursos/curso-plc-trn.png" width="100%" alt="Curso PLC-TRN">
								</a>
							</div>
							<div class="cardH-info griditemCardA">
								<a href="https://www.logicbus.com.mx/PLC-TRN" title="Ir a Tienda Logicbus" target="_blank">
									<p class="subTitulo">PLC-TRN</p>
								</a>
								<p align="justify">PLC-TRN, curso básico de programación ,con una duración de 2 días intensivos,
									impartido en español y con manual técnicos de hardware y funciones en inglés.
								</p>
								<a href="https://tienda.logicbus.com.mx/PLC-TRN_p_8928.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" width="15%"></a>
							</div>
						</div>
					</div>
					<div class="griditemContA">
						<div class="cardH gridContCard">
							<div class="cardH-preview griditemCardA">
								<a href="https://tienda.logicbus.com.mx/plc-trn-auto.html" title="Ir a Tienda Logicbus" target="_blank">
									<img class="" src="imagenes/cursos/curso-plc-trn-auto.png" width="100%" alt="Curso PLC-TRN AUTO">
								</a>
							</div>
							<div class="cardH-info griditemCardA">
								<a href="https://tienda.logicbus.com.mx/plc-trn-auto.html" title="Ir a Tienda Logicbus" target="_blank">
									<p class="subTitulo">PLC-TRN-AUTO</p>
								</a>
								<p align="justify">
									Curso Básico - Avanzado de PLCs FBs<br>
									¿Cuentas con un PLCs FBs o está pensando en adquirir uno próximamente pero no conoce todas las
									funciones de este PLC que le permiten aprovecharlo al máximo?
								</p>
								<a href="https://tienda.logicbus.com.mx/plc-trn-auto.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" width="15%"></a>
							</div>
						</div>
					</div>
					<div class="griditemContA">
						<div class="cardH gridContCard">
							<div class="cardH-preview griditemCardA">
								<a href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html" title="Ir a Tienda Logicbus" target="_blank">
									<img class="" src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/automatizacion_control_procesos/touchscreen_hmi.jpg" width="100%" alt="Curso HMI-TRN">
								</a>
							</div>
							<div class="cardH-info griditemCardA">
								<a href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html" title="Ir a Tienda Logicbus" target="_blank">
									<p class="subTitulo">HMI-TRN</p>
								</a>
								<p align="justify">
									Curso de programacion HMI<br>
									2 Dias de duracion, impartido en las instalaciones de Logicbus
								</p>
								<a href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" width="15%"></a>
							</div>
						</div>
					</div>
				</center>
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