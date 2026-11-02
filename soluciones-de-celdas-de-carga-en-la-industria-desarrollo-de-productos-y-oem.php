<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->



<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-31533636-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'AW-1007518778');
	</script>

	<title>Desarrollo de productos y OEM - Aplicaciones - Logicbus S.A de C.V</title>

	<meta name="description"
	content="Aplicaciones de celdas de carga en la industria de desarrollo de productos y OEM Logicbus, descripciones de la aplicacion, equipos utilizados y soporte y consultoria en eleccion del equipo.">

	<meta name="keywords" content="aplicaciones de celdas de carga, celdas de carga, celda de carga, sensores de celdas de carga,logicbus,futek,sensores de fuerza,seriede celdas de carga de tipo boton Futek,serie llb,serie iaa, tipos de sensores,pesaje de lotes,medidor de flujo de masa,aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas
	">

	<meta name="revisit after" content="14 days">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
	<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Menu movil - Icono menu - Tabla -->
	<link href="libreria/menu-movil.css" rel="stylesheet">

	<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="libreria/estilos.css">

	<script language="javascript">

		function menu_actual() {
			document.getElementById("productos").className = "dropdown active";
		};
	</script>

</head>

<body onLoad="menu_actual();">

	<?
	arriba();
	?>

	<div id="main" class="container productos_page">
		<?
		seccionSoluciones();
		?>
		<a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en el Desarrollo
		de productos y OEM

		<h1 class="">
			<hr class="hr-text" data-content="Desarrollo de productos y OEM">
		</h1>&nbsp;
		<center>
			<nav class="navMenuSuper">
				<ul>
					<li>
						<a onclick="ocultarSensor(); mostrarCeldas(); mostrarSensor();">Celdas de carga</a>
						<!--<a href="#celdas-cate">Celdas de carga</a>-->
					</li>
					<li>
						<a onclick="ocultarCeldas(); mostrarSensor();">Sensores de torque</a>
						<!--<a href="#sensores-cate">Sensores de torque</a>-->
					</li>
					<li>
						<a onclick="ocultarCeldas(); ocultarSensor();">Instrumentos de medición</a>
					</li>
					<?
					buscadorAppsCS();
					?>
				</ul>
			</nav>
		</center>

		<center id="tCeldas">
			<a id="celdas-cate"></a>
			<h2 class="divider gradient" style="font-weight: bold;">Celdas de carga</h2>
		</center>
		<div class="gridContTres" id="apli-auto">
			<div class="gridCateC-item">
				<center><a href="medicion-de-fuerza-de-impacto"><img
					src="imagenes/36/diagramas/desarrollo-de-productos-y-oem/medicion-de-fuerza-de-impacto-portada.jpg" alt="Medición de la Fuerza de Impacto"
					title="Medición de la Fuerza de Impacto" class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-de-impacto">Medición de la Fuerza de Impacto</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-de-expansion-de-tuberias"><img
					src="imagenes/36/medicion-expansion-de-tuberias.png" alt="Medición de expansión de tuberías"
					title="Medición de expansión de tuberías" class="img-fluid"></a><br><br>
					<b><a href="medicion-de-expansion-de-tuberias">Medición de expansión de tuberías</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-de-fuerza-de-mordedura"><img
					src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/medicion-de-fuerza-de-mordedura-portada.jpg"
					alt="Medición de fuerza de mordedura" title="Medición de fuerza de mordedura"
					class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-de-mordedura">Medición de fuerza de mordedura</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="soporte-de-prueba-oem"><img src="imagenes/36/soporte-de-prueba-oem.png"
					alt="Soporte de prueba OEM" title="Soporte de prueba OEM" class="img-fluid"></a><br><br>
					<b><a href="soporte-de-prueba-oem">Soporte de prueba OEM</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="soporte-de-prueba-de-jeringas"><img
					src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/diagrama-soporte-de-prueba-de-jeringas-portada.jpg"
					alt="Soporte de prueba de jeringas" class="img-fluid"></a><br><br>
					<b><a href="soporte-de-prueba-de-jeringas">Soporte de prueba de jeringas</a></b>
				</center>
			</div>

			<div class="gridCateC-item">
				<center><a href="celda-de-carga-en-robot-humanoide"><img
					src="imagenes/soluciones-en-la-industria/Robotica/Celda-de-carga-en-robot-humanoide-portada.jpg"
					alt="Celda de carga en robot humanoide" title="Celda de carga en robot humanoide"
					class="img-fluid"></a><br><br>
					<b><a href="celda-de-carga-en-robot-humanoide">Celda de carga en robot humanoide</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-del-flujo-correcto-de-fluidos"><img
					src="imagenes/36/medicion-del-flujo-correcto-de-fluidos-futek.png"
					alt="Medición del flujo correcto de fluidos" title="Medición del flujo correcto de fluidos"
					class="img-fluid"></a><br><br>
					<b><a href="medicion-del-flujo-correcto-de-fluidos">Medición del flujo correcto de fluidos</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-de-fuerza-de-compresion-en-pildoras"><img
					src="imagenes/36/medicion-de-fuerza-de-compresion-en-pildoras-futek.png"
					alt="Medición de fuerza de compresión en píldoras" title="Medición de fuerza de compresión en píldoras"
					class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-de-compresion-en-pildoras">Medición de fuerza de compresión en
					píldoras</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-de-fuerza-en-equipo-de-gimnasio"><img
					src="imagenes/36/medicion-de-fuerza-en-equipo-de-gimnasio-portada.jpg"
					alt="Medición de fuerza en equipo de gimnasio" title="Medición de fuerza en equipo de gimnasio"
					class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-en-equipo-de-gimnasio">Medición de fuerza en equipo de gimnasio</a></b>
				</center>
			</div>

			<div class="gridCateC-item">
				<center><a href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte"><img
					src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/celda-de-carga-criogenica-msl-mars-rover-portada.jpg"
					alt="Celda de carga criogénica para su uso en el explorador de Marte"
					title="Celda de carga criogénica para su uso en el explorador de Marte" class="img-fluid"></a><br><br>
					<b><a href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte">Celda de carga criogénica
					para su uso en el explorador de Marte</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="medicion-de-fuerza-en-cateter"><img src="imagenes/36/medicion-de-fuerza-en-cateter.png"
					alt="Medición de fuerza en catéter" title="Medición de fuerza en catéter" class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-en-cateter">Medición de fuerza en catéter</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="fuerza-de-empuje-en-un-eje"><img src="imagenes/36/fuerza-de-empuje-en-un-eje.png"
					alt="Fuerza de empuje en un eje" title="Fuerza de empuje en un eje" class="img-fluid"></a><br><br>
					<b><a href="fuerza-de-empuje-en-un-eje">Fuerza de empuje en un eje</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center><a href="frenos-por-sistema-cableado"><img src="imagenes/36/frenos-por-sistema-cableado-portada.jpg"
					alt="Frenos por sistema cableado" title="Frenos por sistema cableado" class="img-fluid"></a><br><br>
					<b><a href="frenos-por-sistema-cableado">Frenos por sistema cableado</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="medicion-de-fuerza-en-robot-de-soldadura-puntual"><img
					src="imagenes/36/medicion-de-fuerza-en-robot-de-soldadura-puntual.png"
					alt="Medición de fuerza en robot de soldadura puntual"
					title="Medición de fuerza en robot de soldadura puntual" class="img-fluid"></a><br><br>
					<b><a href="medicion-de-fuerza-en-robot-de-soldadura-puntual">Medición de fuerza en robot de soldadura
					puntual</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="tension-de-las-velas-de-un-navio"><img
					src="imagenes/36/tension-de-las-velas-de-un-navio.png" alt="Tensión de las velas de un navío"
					title="Tensión de las velas de un navío" class="img-fluid"></a><br><br>
					<b><a href="tension-de-las-velas-de-un-navio">Tensión de las velas de un navío</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="sensores-de-vuelo-cableado"><img src="imagenes/36/sensores-de-vuelo-cableado.jpg"
					alt="Sensores de vuelo cableado" title="Sensores de vuelo cableado" class="img-fluid"></a><br><br>
					<b><a href="sensores-de-vuelo-cableado">Sensores de vuelo cableado</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="simulador-de-fuerza-con-retroalimentacion"><img
					src="imagenes/36/simulador-de-fuerza-con-retroalimentacion.png"
					alt="Simulador de fuerza con retroalimentación" title="Simulador de fuerza con retroalimentación"
					class="img-fluid"></a><br><br>
					<b><a href="simulador-de-fuerza-con-retroalimentacion">Simulador de fuerza con retroalimentación</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="rehabilitacion-de-guantes-roboticos"><img
					src="imagenes/soluciones-en-la-industria/Robotica/rehabilitacion-de-guantes-roboticos-portada.jpg"
					alt="Rehabilitación de guantes robóticos" title="Rehabilitación de guantes robóticos"
					class="img-fluid"></a><br><br>
					<b><a href="rehabilitacion-de-guantes-roboticos">Rehabilitación de guantes robóticos</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<br>
				<center><a href="control-de-fuerza-en-endoscopia"><img src="imagenes/36/control-de-fuerza-en-endoscopia.png"
					alt="Control de fuerza en endoscopía" title="Control de fuerza en endoscopía"
					class="img-fluid"></a><br><br>
					<b><a href="control-de-fuerza-en-endoscopia">Control de fuerza en endoscopía</a></b>
				</center>
			</div>
			<div class="gridCateC-item">
				<center>
					<a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button"
						class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
					</center>
				</div>
			</div>
			<center id="tTorque">
				<a id="sensores-cate"></a>
				<h2 class="divider gradient" style="font-weight: bold;">Sensores de torque</h2>
			</center>
			<div class="gridContTres" id="apli-autot">
				<div class="gridCateC-item">
					<br>
					<center><a href="pruebas-de-torque-en-valvulas"><img src="imagenes/36/pruebas-de-torque-en-valvulas.png"
						alt="Pruebas de torque en válvulas" title="Pruebas de torque en válvulas" class="img-fluid"></a><br><br>
						<b><a href="pruebas-de-torque-en-valvulas">Pruebas de torque en válvulas</a></b>
					</center>
				</div>
				<div class="gridCateC-item">
					<br>
					<center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"
						alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM"
						class="img-fluid"></a><br><br>
						<b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
					</center>
				</div>
				<div class="gridCateC-item">
					<br>
					<center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"
						alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br>
						<b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
					</center>
				</div>
				<div class="gridCateC-item">
					<br>
					<center><a href="auditoria-de-torque-en-taladro-dental"><img
						src="imagenes/36/auditoria-de-torque-en-taladro-dental.png" alt="Auditoría de torque en taladro dental"
						title="Auditoría de torque en taladro dental" class="img-fluid"></a><br><br>
						<b><a href="auditoria-de-torque-en-taladro-dental">Auditoría de torque en taladro dental</a></b>
					</center>
				</div>
				<div class="gridCateC-item">
					<br>
					<center>
						<a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button"
							class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
						</center>
					</div>
				</div>
				<center>
					<a></a>
					<h2 class="divider gradient" style="font-weight: bold;">Instrumentos de Medición</h2><br>
				</center>
				<div class="gridContTres" id="apli-autoia">
					<div class="gridCateC-item">
						<center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"
							alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM"
							class="img-fluid"></a><br><br>
							<b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
						</center>
					</div>
					<div class="gridCateC-item">
						<center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"
							alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br>
							<b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
						</center>
					</div>
					<div class="gridCateC-item">
						<center><a href="rehabilitacion-de-guantes-roboticos"><img
							src="imagenes/soluciones-en-la-industria/Robotica/rehabilitacion-de-guantes-roboticos-portada.jpg"
							alt="Rehabilitación de guantes robóticos" title="Rehabilitación de guantes robóticos"
							class="img-fluid"></a><br><br>
							<b><a href="rehabilitacion-de-guantes-roboticos">Rehabilitación de guantes robóticos</a></b>
						</center>
					</div>
					<div class="gridCateC-item">
						<br>
						<center>
							<a href="aplicaciones-de-instrumentos-medicion"><button type="button"
								class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
							</center>
						</div>
					</div>

					<!-- BEGIN Odoo web form -->
					<div class="container">
					<div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
					<iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
					style="width:100%; min-height:1200px; border:0;">
					</iframe>
					</div>
					</div>
					<!-- END Odoo web form -->

					<br><br><br>

					<br><br>



				</div>

			</div>

			<?
			abajo();
			?>
			<script type="text/javascript">
				$(function () {
					var Accordion = function (el, multiple) {
						this.el = el || {};
						this.multiple = multiple || false;

						var dropdownlink = this.el.find('.dropdownlink');
						dropdownlink.on('click',
							{ el: this.el, multiple: this.multiple },
							this.dropdown);
					};

					Accordion.prototype.dropdown = function (e) {
						var $el = e.data.el,
						$this = $(this),
						$next = $this.next();

						$next.slideToggle();
						$this.parent().toggleClass('open');

						if (!e.data.multiple) {
							$el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
						}
					}

					var accordion = new Accordion($('.accordion-menu'), false);
				})


			</script>
		</body>

		</html>