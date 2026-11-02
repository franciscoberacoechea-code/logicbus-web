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
	<title>Software: MadgeTech 4 Standard | Logicbus</title>
	<meta name="description" content="Paquete de Validación de Software Seguro MT4. Incluye libro de Validación IQ / OQ / PQ, Software Seguro y licencia de usuarios ilimitados (una PC).">

	<meta name="keywords" content="Paquete de Validación, Software Seguro MT4, Validación IQ/OQ/PQ, Software Seguro, licencia de usuarios ilimitados, MadgeTech 4 Secure, software, Logicbus">
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
						<li class="breadcrumb-item active" aria-current="page">MadgeTech 4 Standard</li>
					</ol>
				</nav>
				<h1><br>MadgeTech 4 Standard</h1>

				<div align="center">
					<img src="imagenes/software/MadgeTech.png" class="image_productos" alt="MadgeTech 4 Standard" title="MadgeTech 4 Standard" width="300" border="0"><br>
				</div>

				<center><b>Software de configuraci&oacute;n y descarga de datos para Registradores.</b></center>

				<nav class="navMenuSuper">
					<ul>
						<li>
							<a href="https://www.logicbus.com.mx/descargas/09/MadgeTech_4.2.11.1.zip" target="_blank">Ver en Tienda</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="divCentrado"><br>
			<p>El software MadgeTech 4 Data Logger está diseñado para agilizar el proceso de descarga de datos y revisarlos de una manera fácil de usar y eficiente en tiempo. El software ofrece muchas características y opciones personalizables, incluida la capacidad de cambiar unidades de ingeniería (dependiendo de modelos específicos de registrador de datos), de acuerdo con las necesidades del usuario.<br>
				Todos los registradores de datos MadgeTech operan de manera similar y son simples y fáciles de usar. Cada clase de registrador tiene un tipo de dispositivo único y se identifica automáticamente en el software MadgeTech en la computadora host.</p>

			<div align="center">
				<img src="imagenes/software/software.jpg" class="image_productos" alt="MadgeTech 4 Standard" title="MadgeTech 4 Standard" style="max-width: 500px;">
			</div>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag1.jpg" class="image_productos" alt="Flujos de trabajo" title="Flujos de trabajo" width="300" align="right"><br>
			<p>Flujos de trabajo</p>
			<p>Configure las tareas de registro de datos de rutina para ejecutar mientras tiene la libertad de hacer otras cosas. La función Workflows permite la automatización de tareas tales como la creación de informes, la descarga de datos, el inicio y la detención de dispositivos o incluso el envío de notificaciones por correo electrónico.</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag2.jpg" class="image_productos" alt="Marcadores de tiempo" title="Marcadores de tiempo" width="300" align="right"><br>
			<p>Marcadores de tiempo</p>
			<p>Marque fácilmente un punto deseado en el tiempo en cualquier informe usando marcadores de tiempo. Los marcadores de tiempo aparecen como una línea vertical en un gráfico o una fila coloreada en una tabla de datos, los marcadores de tiempo pueden ayudar a organizar diferentes etapas o ciclos dentro de su proceso o cualquier punto de referencia crítico para interpretar sus datos como lo desee.</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag3.jpg" class="image_productos" alt="Líneas de valor" title="Líneas de valor" width="300" align="right"><br>
			<p>Líneas de valor</p>
			<p>Agregue de manera rápida y fácil una línea de valor a cualquier informe de gráfico para representar visualmente un valor específico dentro de los datos. Elija entre un valor calculado como mínimo, máximo, promedio o MKT para cualquier parámetro o indique cualquier posición fija dentro del informe según sea necesario.</p>
			<br><br>

			<img style="margin-top: 25px; margin-left: 25px;" src="imagenes/software/Mag4.jpg" class="image_productos" alt="Establecer independientemente unidades de escala" title="Establecer independientemente unidades de escala" width="300" align="right"><br>
			<p>Establecer independientemente unidades de escala</p>
			<p>Para informes de gráficos de parámetros múltiples, los usuarios ahora pueden elegir escalar cada canal de forma independiente para controlar cómo se comparan y visualizan los datos.
				Esto facilita la presentación de información compleja y se puede ajustar con un simple clic del mouse</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag5.jpg" class="image_productos" alt="Estadísticas avanzadas" title="Estadísticas avanzadas" width="300" align="right"><br>
			<p>Estadísticas avanzadas</p>
			<p>MadgeTech 4 se ha expandido para ofrecer más opciones y estadísticas disponibles para el análisis de datos.
			<ul>
				<li>Tiempo hasta estadísticas de umbral.</li>
				<li>Datos de esterilización (F0 y A0).</li>
				<li>Configuraciones estadísticas predeterminadas.</li>
			</ul>
			</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag6.jpg" class="image_productos" alt="Copiar a Excel" title="Copiar a Excel" width="300" align="right"><br>
			<p>Copiar a Excel</p>
			<p>Para ver los datos del informe en una hoja de cálculo, los usuarios pueden exportar informes a Microsoft Excel®. Ahora está equipado para manejar millones de lecturas.</p>
			<br><br><br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag7.jpg" class="image_productos" alt="Banderas de enfriamiento" title="Banderas de enfriamiento" width="300" align="right"><br>
			<p>Banderas de enfriamiento</p>
			<p>Los indicadores de enfriamiento son anotaciones de lectura automáticas que especifican cuándo se cumplen ciertos umbrales de temperatura. Los usuarios pueden establecer los indicadores de enfriamiento predeterminados, así como administrar los indicadores de enfriamiento que ya se han creado.</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag8.jpg" class="image_productos" alt="Vista de gráfico" title="Vista de gráfico" width="300" align="right"><br>
			<p>Vista de gráfico</p>
			<p>Utilice la infinita flexibilidad de gráficos combinando canales y conjuntos de datos según lo desee. Todos los gráficos hacen uso de hardware de gráficos acelerados para la actualización en tiempo real y visuales de alto rendimiento.</p>
			<br><br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag9.jpg" class="image_productos" alt="Informes de tabla de datos" title="Informes de tabla de datos" width="300" align="right"><br>
			<p>Informes de tabla de datos</p>
			<p>El uso de un informe de tabla de datos permite al usuario ver los datos y canales del gráfico actual o el informe de estadísticas en un formato de tabla de datos.
				Además, los informes de la tabla de datos también se pueden exportar a Microsoft Excel®.</p>
			<br><br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag10.jpg" class="image_productos" alt="Anotaciones" title="Anotaciones" width="300" align="right"><br>
			<p>Anotaciones</p>
			<p>Agregue una anotación a la información adicional proporcionada sobre un gráfico o lectura. Las anotaciones pueden contener información general sobre el gráfico
				o información sobre una lectura específica.
			<ul>
				<li>Superposición de múltiples gráficos.</li>
				<li>Ampliar reducir.</li>
				<li>Porción de tiempo.</li>
				<li>Ecuaciones de letalidad (F0, PU).</li>
			</ul>
			</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag11.jpg" class="image_productos" alt="Unidades de ingeniería" title="Unidades de ingeniería" width="300" align="right"><br>
			<p>Unidades de ingeniería</p>
			<p>Las unidades de ingeniería personalizables permiten a los usuarios admitir y programar dispositivos con muchos tipos de unidades diferentes, así como la posibilidad de mostrarlos como una unidad alternativa si así lo desean.
			<ul>
				<li>Temperatura cinética media.</li>
				<li>Soporte de zona horaria completa.</li>
				<li>Anotación de datos.</li>
				<li>Gestión de archivos fácil de usar.</li>
			</ul>
			</p>
			<br><br>

			<img style="margin-top: 25px;margin-left: 25px;" src="imagenes/software/Mag12.jpg" class="image_productos" alt="Comunicación de registrador múltiple" title="Comunicación de registrador múltiple" width="300" align="right"><br>
			<p>Comunicación de registrador múltiple</p>
			<p>El software MadgeTech 4.0 puede comunicarse con múltiples registradores a través de múltiples cables de interfaz. Capaz de iniciar, detener y descargar de forma simultánea más de 100 dispositivos, este software sirve como su centro de comando virtual para instalaciones de gran escala y pequeñas.
			<ul>
				<li>Min. / Max. / Líneas promedio.</li>
				<li>Generación automática de informes.</li>
				<li>Vista de resumen.</li>
			</ul>
			</p>
			<br>

			<div align="center">
				<a href="https://www.logicbus.com.mx/descargas/09/MadgeTech_4.2.11.1.zip" target="_blank">MadgeTech 4 Standard Version: 4.2.11.1</a><br>
				Favor de solicitar su contraseña temporal por medio de nuestro chat en línea.
			</div>
			<br><br>

		</div>
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