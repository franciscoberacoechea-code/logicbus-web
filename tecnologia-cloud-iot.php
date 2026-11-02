<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description"
		content="IoT (Internet Of Things o Internet de las cosas) describe la red de objetos físicos que llevan incorporados sensores, software y otras tecnologías con el fin de conectarse e intercambiar datos con otros dispositivos y sistemas a través de Internet.">

	<title>Tecnología Cloud-IoT - Logicbus</title>
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

	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb pl-0">
				<li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tecnología Cloud-IoT</li>
			</ol>
		</nav>
	</div>

	<div class="mb-5">
		<video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/iot.png">
			<source src="https://www.logicbus.com.mx/assets/videos/iot.mp4" type="video/mp4">
		</video>
	</div>

	<div class="container-fluid my-5">
		<h1 class="banner-title blue font-weight-bolder mb-5">Tecnología <b class="banner-title light-orange">
				Cloud-IoT</b></h1>
		<p class="light-black paragraph text-center px-md-5 px-1">IoT ("Internet Of Things" o "Internet de las cosas")
			describe la red de objetos físicos que llevan incorporados sensores, software y otras tecnologías con el fin
			de conectarse e intercambiar datos con otros dispositivos y sistemas a través de Internet, dónde todos ellos
			podrían ser visibles y relacionarse entre sí, las aplicaciones son casi infinitas y cada día surgen más y
			más dispositivos que hacen posible esta tecnología, dicha tecnología asociada al IoT permite recoger datos y
			mandarlos a la red para su análisis o incluso realizar un análisis antes y después mandarlos a la red.</p>
		<p class="light-black paragraph text-center px-md-5 px-1">En Logicbus, ofrecemos una amplia gama de soluciones
			IoT (Internet de las Cosas) diseñadas para satisfacer las necesidades de diversos sectores industriales.
			Colaboramos con marcas líderes en tecnología IoT para garantizar que nuestros clientes reciban productos de
			alta calidad y rendimiento confiable.</p>
	</div>

	<!-- BOTONES -->
	<div class="container-fluid d-flex flex-wrap justify-content-center my-5">
		<a class="button-text"
			href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tecnologia-cloud-iot"
			target="_blank"><button class="button button-white">Ver en Tienda</button></a>
		<a class="button-text" href="#marcas"><button class="button button-white">Marcas</button></a>
		<a class="button-text" href="#articulos"><button class="button button-white">Artículos</button></a>
		<a class="button-text" href="#doc"><button class="button button-white">Catálogos</button></a>
		<a class="button-text" href="#video"><button class="button button-white">Videos</button></a>
	</div>

	<!-- MARCAS -->
	<section id="marcas">
		<div class="container my-5">
			<h2 class="subtitle text-center orange-text py-1 rounded-pill">MARCAS</h2>
		</div>
		<div class="my-5">
			<div class="d-flex flex-wrap justify-content-center">
				<a href="auk-industries"><img class="m-3 gray-filter"
						src="./images/nuestras_marcas/webp/auk-industries.webp" alt="Auk Industries" width="200px"></a>
				<a href="fatek"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/fatek.webp"
						alt="Fatek" width="200px"></a>
				<a href="national-control-devices-ncd"><img class="m-3 gray-filter"
						src="./images/nuestras_marcas/webp/ncd.webp" alt="National Control Devices" width="200px"></a>
				<a href="icp-das"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/icpdas.webp"
						alt="ICP DAS" width="200px"></a>
				<a href="sealevel"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/sealevel.webp"
						alt="Sealevel" width="200px"></a>
				<a href="3onedata"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/3onedata.webp"
						alt="3onedata" width="200px"></a>
				<a href="cimon-software-scada-industrial"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/cimon.webp"
						alt="Cimon" width="200px"></a>
				<a href="daviteq"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/daviteq.webp"
						alt="Daviteq" width="200px"></a>
				<a href="graphtec"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/graphtec.webp"
						alt="Graphtec" width="200px"></a>
				<a href="LoggerFlex"><img class="m-3 gray-filter"
						src="./images/nuestras_marcas/webp/loggerflex.webp" alt="LoggerFlex" width="200px"></a>
				<a href="teracom"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/teracom.webp"
						alt="Teracom" width="200px"></a>
				<a href="seneca"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/seneca.webp"
						alt="Seneca" width="200px"></a>
				<a href="madgetech"><img class="m-3 gray-filter" src="./images/nuestras_marcas/webp/madgetech.webp"
						alt="Madgetech" width="200px"></a>
			</div>
		</div>
	</section>

	<!-- PRODUCTOS -->
	<section class="container-fluid" id="productos">
		<div class="container my-5">
			<h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
		</div>
		<div class="row justify-content-center m-3">
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/assets/images/320/STHM-MBIO-4AI4DI4RL-NR.jpg"
							alt="Módulo de I/O remoto Modbus" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Módulo de I/O remoto Modbus</p>
						<p class="light-black">El STHM-MBIO es un módulo de I/O remoto Modbus RTU que ayuda a los PLC,
							SCADA, BMS y cualquier puerta de enlace IoT a ampliar la cantidad de capacidades de I/O. El
							STHM-MBIO tiene un diseño simple pero potente</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/STHM-MBIO-4AI4DI4RL-NR_p_36142.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/assets/images/320/s_gwlrw_en_1.jpg"
							alt="Gateway LoRaWAN para Exteriores" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Gateway LoRaWAN para Exteriores</p>
						<p class="light-black">El GWLRW es un Gateway LoRaWAN® diseñado para instalaciones exteriores,
							utilizado en proyectos como Fábrica Inteligente, Agricultura Inteligente, Edificio
							Inteligente, Área Residencial Inteligente, Ciudad Inteligente... Soporta simultáneamente 8
							canales de conexión.</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=GWLRW+&search="
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/assets/images/320/WSLRW-AG-01.jpg"
							alt="Sensor de Inclinación LoRaWAN" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Sensor de Inclinación LoRaWAN</p>
						<p class="light-black">El WSLRW-AG es un Sensor de Inclinación LoRaWAN. Un inclinómetro que
							puede utilizarse para medir los ángulos de inclinación X, Y y Z de cualquier objeto, como
							una torre, edificio, árbol, torre eléctrica, torre de telecomunicaciones, puentes, etc.</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=WSLRW-AG&search="
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/assets/images/320/CAP10A1000FULL.jpg"
							alt="Módulo Sensor de Humedad y Temperatura Ambiental" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Módulo Sensor de Humedad y Temperatura Ambiental
						</p>
						<p class="light-black">El Módulo Sensor de Humedad y Temperatura Ambiental ATH utiliza un sensor
							digital que ofrece una medición de alta precisión. Se conecta fácilmente al WS433-M12(-T) a
							través de un conector M12.</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=CAP10A&search="
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://www.logicbus.com.mx/images/categorias/2022/registradores/registradores-inalambricos.jpg"
							alt="Registradores Inalambricos" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Registradores Inalámbricos</p>
						<p class="light-black">Dispositivos electrónicos diseñados para recopilar, almacenar y
							transmitir información de diferentes variables o condiciones ambientales. Estas variables
							pueden incluir temperatura, humedad, presión, nivel de luz, vibración, corriente eléctrica,
							entre otros.</p>
						<div class="text-center">
							<a class="m-3" href="https://www.logicbus.com.mx/wireless_temperatura"><button
									class="section-blue white med ico"><i class="fas fa-info"
										aria-hidden="true"></i></button></a>
							<a class="m-3"
								href="https://tienda.logicbus.com.mx/Registradores-Inal%C3%A1mbricos_c_3419.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://www.logicbus.com.mx/images/categorias/2022/registradores/cloud.jpg"
							alt="MadgeTech Cloud Services" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">MadgeTech Cloud Services</p>
						<p class="light-black">Cumplimiento y análisis mediante funciones personalizadas para
							operaciones de los dispositivos. Servicios de nube para optimizar los datos.</p>
						<div class="text-center">
							<a class="m-3" href="https://www.logicbus.com.mx/madgetech-cloud-services"><button
									class="section-blue white med ico"><i class="fas fa-info"
										aria-hidden="true"></i></button></a>
							<a class="m-3" href="https://tienda.logicbus.com.mx/Servicios-Cloud_c_4295.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img src="https://www.logicbus.com.mx/imagenes/09/rfc1000_web.jpg"
							alt="RFC1000" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">RFC1000</p>
						<p class="light-black">Paquete de Interfaz para las series RFOT y Therm-A- Lert de registradores
							de datos. Permite ser utilizado también como repetidor.</p>
						<div class="text-center">
							<a class="m-3" href="https://www.logicbus.com.mx/accesorios#rfc1000"><button
									class="section-blue white med ico"><i class="fas fa-info"
										aria-hidden="true"></i></button></a>
							<a class="m-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=rfc100&search="
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/322/ai-an-2000.jpg"
							alt="Nodo IoT Auk Industries" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Nodo IoT Auk Industries</p>
						<p class="light-black">Auk Industries ofrece un sistema de fábrica digital escalable que utiliza
							IoT (Internet de las cosas) y opera como un "Fitbit para máquinas".</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/AI-AN-2000_p_36746.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://www.logicbus.com.mx/assets/images/286/pr55-4a_200a.jpg" alt="Sensores IoT PR55"
							width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Sensores IoT PR55</p>
						<p class="light-black">Sensor de monitor de corriente CA 100A inalámbrico IoT industrial de 3
							canales, versión para fuente de alimentación externa.</p>
						<div class="text-center">
							<a class="m-3"
								href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tecnologia-cloud-iot-sensores-inalambricos-de-largo-alcance-iot-accesorios-comunicaciones"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://www.logicbus.com.mx/imagenes/productos/adquisicion-registro-de-datos/adquisicion-de-datos/tecnologia-cloud-IoT/IoT/adquisicion-de-datos-tecnologia-IoT-PR52-3C.jpg"
							alt="Sensores IoT PR52" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Sensores IoT PR52</p>
						<p class="light-black">Dispositivos electrónicos diseñados para recopilar, almacenar y
							transmitir información de diferentes variables o condiciones ambientales. Estas variables
							pueden incluir temperatura, humedad, presión, nivel de luz, vibración, corriente eléctrica,
							entre otros.</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=PR52&search="
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://www.logicbus.com.mx/imagenes/imagenes/fatek/Servicios-IoT.png"
							alt="Servicios IoT" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Servicios IoT</p>
						<p class="light-black">Una cuenta, una contraseña, una plataforma de monitoreo y control
							sencilla e intuitiva que conecta tu proceso contigo a lo largo del mundo.</p>
						<div class="text-center">
							<a class="m-3"
								href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-plataforma-iot-fatek"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/automatizacion_control_procesos/edge_controller.jpg"
							alt="Controlador de Borde" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Controlador de Borde</p>
						<p class="light-black">El controlador de borde WISE IIoT es un controlador PAC inteligente de
							múltiples funciones basado en la web diseñado por ICP DAS que funciona como unidades de
							control para su uso en control lógico remoto y monitoreo en varias aplicaciones
							industriales.</p>
						<div class="text-center">
							<a class="m-3" href="https://tienda.logicbus.com.mx/Controlador-de-Borde_c_6189.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-5 m-3">
				<div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
					style="height: 100%;">
					<div class="col-6 col-md-4"><img
							src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/automatizacion_control_procesos/communication_server.jpg"
							alt="Servidor de Comunicación" width="100%"></div>
					<div class="col-12 col-md-8">
						<p class="blue font-weight-bold text-center">Servidor de Comunicación</p>
						<p class="light-black">La solución en la nube IIoT de ICP DAS proporciona la serie UA de
							servidor de comunicación IIoT para actualizar los dispositivos frontales a la nube, conectar
							TI con OT, vincular aplicaciones web y en la nube e integrar el Internet de las cosas (IoT)
							basado en la nube.</p>
						<div class="text-center">
							<a class="m-3"
								href="https://tienda.logicbus.com.mx/Servidor-de-Comunicaci%C3%B3n_c_6190.html"
								target="_blank"><button class="section-orange white med ico"><i
										class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- VIDEOS -->
	<section class="container" id="video">
		<div class="my-5">
			<h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
		</div>
		<div class="container-fluid">
			<div class="d-flex justify-content-center flex-wrap">
				<div class="m-3">
					<a href="https://www.youtube.com/watch?v=vQm62oVACzU&ab_channel=LogicbusVideos" target="_blank"><img
							src="./images/videos/vid-1.jpg" alt="MEJORA EL OEE DE TU FÁBRICA | LOGICBUS" width="300px"
							height="160px" class="imgBorde"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- CATALOGOS -->
	<section id="doc" class="mb-5">
		<div class="container my-5">
			<h2 class="subtitle text-center orange-text py-1 rounded-pill">CATÁLOGOS</h2>
		</div>
		<div class="d-flex flex-wrap justify-content-center text-center">
			<div class="m-3">
				<a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/322/brochure-auk-industries.pdf"
					target="_blank">
					<img src="https://www.logicbus.com.mx/pdf/322/AUK-el-software-mas-poderoso%20.PNG"
						alt="Ver archivo pdf" class="imgBorde" width="250px" height="325px"><br>
					Auk Industries
				</a>
			</div>
			<div class="m-3">
				<a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/320/Daviteq%20Profile%20ENG.pdf"
					target="_blank">
					<img src="https://www.logicbus.com.mx/pdf/320/catalogo-portada.png" alt="Ver archivo pdf"
						class="imgBorde" width="250px" height="325px"><br>
					Daviteq
				</a>
			</div>
			<div class="m-3">
				<a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/Madgetech-Catalogo.pdf"
					target="_blank">
					<img src="https://www.logicbus.com.mx/pdf/catalogos/Madgetech-Catalogo.png" alt="Ver archivo pdf"
						class="imgBorde" width="250px" height="325px"><br>
					Madgetech
				</a>
			</div>
			<div class="m-3">
				<a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/seneca_en_1810en_r2.pdf"
					target="_blank">
					<img src="https://www.logicbus.com.mx/pdf/catalogos/seneca_en_1810en_r2.jpg" alt="Ver archivo pdf"
						class="imgBorde" width="250px" height="325px"><br>
					Seneca
				</a>
			</div>
		</div>
	</section>

	<!--Contacto-->
	<div class="section-blue text-center py-5" id="contacto">
		<div class="container mb-5">
			<h2 class="title white text-uppercase">Conoce más sobre la tecnología IoT</h2>
			<span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su
				proyecto</span>
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
	</div>

	<!-- PIE DE PAGINA -->
	<?php require("libreria/footer.view.php"); ?>
	<?php echo $jquery_js; ?>
	<?php echo $popper_js; ?>
	<?php echo $bootstrap_js; ?>
	<?php echo $own_file_js; ?>
	<?php echo $flickity_js; ?>
</body>

<?php echo $var_footer; ?>

</html>