<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
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

	<title>Control de Movimiento | Motores, Drives y Controladores CNC – Logicbus México</title>
	<meta name="description" content="Soluciones en control de movimiento para automatización industrial: motores paso a paso, servos, drivers y controladores. Precisión y rendimiento con asesoría experta.">

	<meta name="keywords" content="encoders,Servo Motores,Control de movimiento,Motor a Pasos,Controladores para motores a pasos,Drivers para Servo Motores,Encoders,variador de frecuencia,Logicbus,Mexico,Guadalajara,Argentina,Chile,Brasil,LabView,Automatizacion,Seguridad,Consultoria,Integracion,Proyecto,Radio Frecuencia,Cubos,Analisis,Datos,Aguascalientes,Baja California,Baja California Sur,Campeche,Chiapas,Chihuahua,Coahuila,Colima,Distrit Federal,Durango,Guanajuato,Guerrero,Hidalgo,Jalisco,Estado de Mexico,Michoacan,Morelos,Nayarit,Nuevo Leon,Oaxaca,Puebla,Queretaro,Quintana Roo,San Luis Potosi,Sinaloa,Sonora,Tabasco,Tamaulipas,Tlaxcala,Veracruz,Yucatan,Zacatecas,Argentina,Chile,Brasil,USA,control,movimiento,motores,pasos,servo,motores,encoders,variadores,frecuencia">


	<meta name="copyright" content="Logicbus S.A. de C.V.">
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
						<li class="breadcrumb-item"><a href="automatizacion-control-procesos" class="blue link-orange">Automatización y control de procesos</a></li>
						<li class="breadcrumb-item active" aria-current="page">Control de Movimiento</li>
					</ol>
				</nav>
				<div class="">
					<h1><br><img src="images/banner/www/banner-control-movimiento.png" alt="Control de Movimiento" title="Control de Movimiento" width="100%"></h1> <br><br>
					<p>Los motores <b>Servo, el sistema paso a paso y los encoders</b> son equipos que combinan los conocimientos de la alta ingeniería, creando así productos de accionamiento de alta calidad, alta fiabilidad y estabilidad (<strong>Control de movimiento</strong>).</p>
				</div><br>
				<center>
					<nav class="navMenuSuper">
						<ul>
							<li>
								<a href="https://tienda.logicbus.com.mx/Control-de-movimiento_c_2796.html" target="_blank">Ver en Tienda</a>
							</li>
						</ul>
					</nav>
				</center>
			</div>
		</div>
		<div class="divCentrado">
			<center>
				<div class="seccion">
					<div class="col-center">
						<h2><span>Productos</span></h2>
					</div>
				</div>
			</center>
			<div class="container pagina_producto">
				<div class="row">
					<div class="col">

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="encoder">
									<img src="images/categorias/2022/control-movimiento/encoders.jpg" alt="Control de movimiento - Encoders" title="Control de movimiento - Encoders" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="encoder">
									<h2>Encoders</h2>
								</a>
								<p>Los Encoders utilizan diferentes tipos de tecnologías para convertir el movimiento en una señal eléctrica, estos pueden ser mecánicos, magnéticos, resistivo u ópticos, siendo estos últimos los más comunes.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/Encoders_c_3017.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="https://tienda.logicbus.com.mx/StepSERVO_c_4396.html">
									<img src="images/categorias/2022/control-movimiento/stepservo.jpg" alt="Control de movimiento - StepSERVO" title="Control de movimiento - StepSERVO" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="https://tienda.logicbus.com.mx/StepSERVO_c_4396.html" target="_blank">
									<h2>StepSERVO</h2>
								</a>
								<p>Los motores integrados StepSERVO ofrecen las mismas características de alto par a baja velocidad y excelentes características de par de retención de los motores paso a paso de bucle abierto, con las ventajas del verdadero control de bucle cerrado.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/StepSERVO_c_4396.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="motores-a-pasos">
									<img src="images/categorias/2022/control-movimiento/motores-paso-paso.jpg" alt="Control de movimiento - Motores paso a paso" title="Control de movimiento - Motores paso a paso" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="motores-a-pasos">
									<h2>Motores paso a paso</h2>
								</a>
								<p>Los motores de la serie J vienen en tamaños de bastidor de 40, 60 y 80 mm con codificadores de conmutación incrementales de 10,000 cuentas y clasificaciones IP65 en el cuerpo del motor.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/Motores-paso-a-paso_c_4397.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-control-de-movimiento-servomotores">
									<img src="images/categorias/2022/control-movimiento/servomotores.jpg" alt="Control de movimiento - Servomotores" title="Control de movimiento - Servomotores" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-control-de-movimiento-servomotores" target="_blank">
									<h2>Servomotores</h2>
								</a>
								<p>Los servomotores integrados MDX combinan el diseño de alta densidad de par y baja inercia del rotor de los servomotores serie J con la tecnología de servoaccionamiento totalmente digital de los servomotores SV200.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-control-de-movimiento-servomotores" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="https://tienda.logicbus.com.mx/BLDC_c_4399.html">
									<img src="images/categorias/2022/control-movimiento/bldc.jpg" alt="Control de movimiento - BLDC" title="Control de movimiento - BLDC" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="https://tienda.logicbus.com.mx/BLDC_c_4399.html" target="_blank">
									<h2>BLDC</h2>
								</a>
								<p>Estas unidades de DC sin escobillas se basan en tecnología de control avanzada que presenta un excelente rendimiento y facilidad de uso. Los variadores están destinados a aplicaciones que requieren alto rendimiento, estabilidad de alta velocidad, control de velocidad básico, configuración simple y bajo costo en un diseño compacto.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/BLDC_c_4399.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>

						<div class="row row-striped tabla_subcategorias_row">
							<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
								<a href="https://tienda.logicbus.com.mx/Engranaje_c_4400.html">
									<img src="images/categorias/2022/control-movimiento/engranaje.jpg" alt="Control de movimiento - Engranaje" title="Control de movimiento - Engranaje" width="70%">
								</a>
							</div>
							<div class="col-12 col-md-8 col-lg-8" align="left">
								<a href="https://tienda.logicbus.com.mx/Engranaje_c_4400.html" target="_blank">
									<h2>Engranaje</h2>
								</a>
								<p>Gama completa de engranajes planetarios para su uso en aplicaciones de precisión con motores paso a paso y servomotores. Estos cabezales de engranajes presentan altas capacidades de torque, alta eficiencia y baja holgura. Están disponibles con opciones de montaje métrico y NEMA, y vienen en una amplia gama de relaciones de 3:1 a 100:1.</p>
							</div>
							<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
								<a href="https://tienda.logicbus.com.mx/Engranaje_c_4400.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" width="100%"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div><!-------------- MAIN ------------------>
	<!-- PIE DE PAGINA -->
	<?php require("libreria/footer.view.php"); ?>
	<?php echo $bootstrap_js; ?>
	<?php echo $jquery_js; ?>
	<?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>