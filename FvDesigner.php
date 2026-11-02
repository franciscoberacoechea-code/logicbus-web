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
	<title>Software: FvDesigner | Logicbus</title>
	<meta name="description" content="Software para programar las HMIs de Fatek que proporciona un potente entorno de software de programación intuitivo">
	<meta name="keywords" content="Software, HMIware, Logicbus, configuración HMI, desarrollo integrado, pantalla HMI">

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
						<li class="breadcrumb-item active" aria-current="page">FvDesigner</li>
					</ol>
				</nav>
				<div class="container">
					<center>
						<h1>FvDesigner</h1>
					</center>
					<div>
						<img src="images/banner/www/fvdesigner-software.jpg" alt="FV Designer software" width="100%"><br><br>
						<strong>Software para programar las HMIs de Fatek</strong>
						<ol class="text-justify">
							<li>Entorno de software de programación intuitivo.</li>
							<li>Software de programación potente e intuitiva, aumenta la eficiencia del desarrollo del programa.
							</li>
						</ol>
						<nav class="navMenuSuper">
							<ul>
								<li>
									<img src="https://www.logicbus.com.mx/imagenes/descarga-software.gif" alt="Download" class="carrito"><a href="https://www.logicbus.com.mx/descargas/Fatek/FvDesigner_V1.6.zip" target="_blank">Descargar FvDesigner V1.6</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<center>
			<div class="seccion" id="aplicaciones">
				<div class="col-center">
					<h2><span>Caracteristicas</span></h2>
				</div>
			</div>
		</center>

		<div class="divCentrado">
			<div class="gridContMitad">
				<div align="center">
					<img src="https://www.logicbus.com.mx/imagenes/29/fvdesigner.png" alt="FvDesigner" width="100%" style="max-width: 500px;">
				</div>
				<div class="gridContTres">
					<div class="" align="center">
						<center><strong>Script<br><br></strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/script-command.png" alt="Script-command" width="100%">
					</div>
					<div class="" align="center">
						<center><strong>Recetas<br><br></strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/recetas.png" alt="Recetas" width="100%">
					</div>
					<div class="" align="center">
						<center><strong>Caja de herramientas</strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/caja-de-herramientas.png" alt="Caja de herramientas" width="100%">
					</div>
					<div class="" align="center">
						<center><strong>Calendario<br><br></strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/calendario.png" alt="Calendario" width="100%">
					</div>
					<div class="" align="center">
						<center><strong>Función de impresión</strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/funcion-de-impresion.png" alt="Función de impresión" width="100%">
					</div>
					<div class="" align="center">
						<center><strong>Bibliotecas de recursos</strong></center>
						<img src="https://www.logicbus.com.mx/imagenes/29/bibliotecas-de-recursos.png" alt="Bibliotecas de recursos" width="100%">
					</div>
				</div>
			</div>
		</div>

		<center>
			<div class="seccion" id="aplicaciones">
				<div class="col-center">
					<h2><span>Aplicaciones</span></h2>
				</div>
			</div>
		</center>

		<div class="divCentrado">
			<div align="center" class="sepGrisA"><span>Control de seguridad y protección</span></div>
			<br>
			<div class="gridContMitad" align="center">
				<div>
					<img src="https://www.logicbus.com.mx/imagenes/29/diagrama-de-seguridad-y-porteccion.png" alt="Diagrama de seguridad y protección" width="100%" style="max-width: 500px;">
				</div>
				<dv>
					<ul class="text-justify">
						<li>Protección de derechos de propiedad intelectual</li>
						<li>Pay by Installments</li>
						<li>Actualizar cuentas de usuario / contraseñas a través de almacenamiento externo</li>
						<li>Retardo encendido-apagado</li>
					</ul>
				</dv>
			</div>
		</div>
		<br>
		<div class="divCentrado">
			<div align="center" class="sepGrisA"><span>Alarma, Tendencia, Registro de datos, Correo electrónico, Cámara</span></div>
			<br>
			<div class="gridContMitad" align="center">
				<div>
					<img src="https://www.logicbus.com.mx/imagenes/29/diagrama-alarma-tendencia-registro.png" alt="Diagrama alarma tendencia registro de datos correo electrónico cámara" width="100%" style="max-width: 500px;">
				</div>
				<dv>
					<ul class="text-justify">
						<li>Establecer el valor de umbral para monitorear el estado del sistema</li>
						<li>Envía mensajes importantes a los destinatarios mediante alarma activada</li>
						<li>Adjunto la información de la alarma y la imagen de la cámara capturada en el sitio</li>
						<li>Los datos se pueden exportar a la ubicación asignada automáticamente</li>
					</ul>
				</dv>
			</div>
		</div>

		<br>
		<div class="divCentrado">
			<div align="center" class="sepGrisA"><span>Transferencia de datos</span></div><br>
			<div class="gridContMitad" align="center">
				<div>
					<img src="https://www.logicbus.com.mx/imagenes/29/diagrama-transferencia-de-datos.png" alt="Diagrama transferencia de datos" width="100%" style="max-width: 500px;">
				</div>
				<dv>
					<ul class="text-justify">
						<li>Multi-Link, se puede acceder al PLC conectado a la HMI maestra mediante la HMI esclava</li>
						<li>Transferencia de datos desde una fuente predefinida a una dirección de destino en condiciones
							definidas por el usuario</li>
						<li>Pasarela Modbus</li>
						<li>Protocolo definido por el usuario</li>
					</ul>
				</dv>
			</div>
		</div>

		<br>
		<div class="divCentrado">
			<div align="center" class="sepGrisA"><span>Monitorización y control remoto</span></div>
			<br>
			<div class="gridContMitad" align="center">
				<div>
					<img src="https://www.logicbus.com.mx/imagenes/29/diagrama-monitorizacion-y-control-remoto.png" alt="Diagrama monitorización y control remoto" width="100%" style="max-width: 500px;">
				</div>
				<dv>
					<ul class="text-justify">
						<li>Paso por el PLC</li>
						<li>VNC</li>
						<li>Servidor FTP</li>
						<li>Configuración remota</li>
					</ul>
				</dv>
			</div>
		</div>

		<center>
			<div class="seccion" id="compatibi">
				<div class="col-center">
					<h2><span>Compatibilidad</span></h2>
				</div>
			</div>
		</center>

		<div class="divCentrado">
			<div align="center" class="sepGrisA"><span>Admite FATEK IoT y Cloud Platform</span></div>
			<br>
			<div align="center">
				<div class=" ">
					<img src="https://www.logicbus.com.mx/imagenes/29/fatek-cloud.png" alt="fatek-cloud" width="100%" style="max-width: 450px;"><br><br>
					<div align="center" class="sepGrisA"><span>Admite el protocolo MQTT, conéctate con las principales plataformas en la nube sin
							problemas</span></div>
				</div>
			</div><br>
			<div class="gridContTres">
				<div class="griditemContB">
					<center><strong>iMonitor</strong></center>
					<img src="https://www.logicbus.com.mx/imagenes/29/imonitor.png" alt="iMonitor" height="150px">
					<center>
						<p>Supervise los datos de sus dispositivos dispersos al alcance de su mano</p>
					</center>
				</div>
				<div class="griditemContB">
					<center><strong>iAccess</strong></center>
					<img src="https://www.logicbus.com.mx/imagenes/29/iaccess.png" alt="iAccess" height="150px">
					<center>
						<p>Acceda y mantenga fácilmente dispositivos remotos desde cualquier lugar</p>
					</center>
				</div>
				<div class="griditemContB">
					<center><strong>iLocation</strong></center>
					<img src="https://www.logicbus.com.mx/imagenes/29/ilocation.png" alt="iLocation" height="150px">
					<center>
						<p>Muestra la ubicación del dispositivo de un vistazo</p>
					</center>
				</div>
			</div>
			<br>
			<div align="center">
				<div align="center" class="sepGrisA"><span>Monitorización y control remoto</span></div>
				<br>
				<img src="https://www.logicbus.com.mx/imagenes/29/monitorizacion-y-control-remoto.png" alt="Monitorización y control remoto" width="100%" style="max-width: 450px;"><br><br>
				<b>Editor / Suscriptor / Corredor</p>
			</div><br>
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