<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

	<html lang="es">

	<head>
		<title>Glosario - Términos en ingeniería usados por Logicbus</title>
		<link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
		<meta name="description" content="Seccion dedicada a palabras clave y terminos tecnicos en nuestro sector que te ayudaran a comprender la informacion que encontraras en  nuestro sitio web">

		<meta name="keywords" content="PLC, Glosario, Definicion, Ingenieria, Glosary, glosary, Modulos, Expansion, comunicacion, E/S, digitales, relevador, Logicbus, M&eacute;xico, LabView, Automatizaci&oacute;n, Automatizacion, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, unidades, unidades basicas, unidades avanzadas, unidades de posicionamiento, fuentes de poder, modulos de expansión, modulos de comunicacion, ejemplos de programacion plcs, significado, termino">
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
	<div align="center">
		<img src="images/banner/glosario-logicbus.png" alt="Glosario" title="Glosario" width="100%">
	</div>
	<div class="blue my-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-0 col-md-3">
					<?php
					menucategorias();
					?>
				</div>
				<div class="col-12 col-md-9">
					<h1 class="title blue text-center">Glosario</h1>
					<div class="index_abc" align="center" style="font-size: 30px;">
						<a class="link-blue-to-orange" href="#A" data-ancla="A">A</a>
						<a class="link-blue-to-orange" href="#B" data-ancla="B">B</a>
						<a class="link-blue-to-orange" href="#C" data-ancla="C">C</a>
						<a class="not-active" href="#D" data-ancla="D">D</a>
						<a class="link-blue-to-orange" href="#E" data-ancla="E">E</a>
						<a class="not-active" href="#F" data-ancla="F">F</a>
						<a class="link-blue-to-orange" href="#G" data-ancla="G">G</a>
						<a class="link-blue-to-orange" href="#H" data-ancla="H">H</a>
						<a class="link-blue-to-orange" href="#I" data-ancla="I">I</a>
						<a class="not-active" href="#J" data-ancla="J">J</a>
						<a class="link-blue-to-orange" href="#K" data-ancla="K">K</a>
						<a class="link-blue-to-orange" href="#L" data-ancla="L">L</a>
						<a class="link-blue-to-orange" href="#M" data-ancla="M">M</a>
						<a class="link-blue-to-orange" href="#N" data-ancla="N">N</a>
						<a class="link-blue-to-orange" href="#O" data-ancla="O">O</a>
						<a class="link-blue-to-orange" href="#P" data-ancla="P">P</a>
						<a class="not-active" href="#Q" data-ancla="Q">Q</a>
						<a class="link-blue-to-orange" href="#R" data-ancla="R">R</a>
						<a class="link-blue-to-orange" href="#S" data-ancla="S">S</a>
						<a class="link-blue-to-orange" href="#T" data-ancla="T">T</a>
						<a class="not-active" href="#U" data-ancla="U">U</a>
						<a class="link-blue-to-orange" href="#V" data-ancla="V">V</a>
						<a class="link-blue-to-orange" href="#W" data-ancla="W">W</a>
						<a class="not-active" href="#X" data-ancla="X">X</a>
						<a class="not-active" href="#Y" data-ancla="Y">Y</a>
						<a class="not-active" href="#Z" data-ancla="Z">Z</a>
					</div>
					<br><br>
					<A name="A" id="A"></A>
					<h2 id="nr">A</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Acero:</strong><br>
										Metal formado a base de hierro y aleado con carbono en una proporción entre el 0,03% y el 2%. El acero dulce se caracteriza por ser muy maleable (con gran capacidad de deformación) y tener una concentración de carbono inferior al 0,2%. Por encima de esta proporción de carbono, el acero se vuelve más duro , pero más frágil.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Actuadores:</strong><br>
										Se denominan a aquellos elementos que pueden provocar un efecto sobre un proceso automatizado como por ejemplo un motor. Es decir actúa sobre el sistema en respuesta a una señal que lo solicita.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Aleación:</strong><br>
										Sustancia con propiedades metálicas compuesta por dos o más elementos químicos de los cuales al menos uno es un metal.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Alternador:</strong><br>
										Dispositivo accionado por un motor que convierte la energía mecánica en corriente eléctrica alterna. El alternador suministra energía para hacer funcionar todos los componentes eléctricos del vehículo cuando el motor está funcionando, y para la carga del acumulador o batería.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Amperio:</strong><br>
										Unidad de medida de la corriente eléctrica, que debe su nombre al físico francés André Marie Ampere, y representa el número de cargas (coulombs) por segundo que pasan por un punto de un material conductor. (1Amperio = 1 coulomb/segundo).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Arco eléctrico:</strong><br>
										Es una especie de descarga eléctrica de alta intensidad, la cual se forma entre dos electrodos en presencia de un gas a baja presión o al aire libre.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="B" id="B"></A>
					<h2 id="al">B</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Batería:</strong><br>
										Acumulador de energía eléctrica por medio de un proceso químico reversible. Su función es principalmente aportar la energía necesaria para poner el motor en marcha en vehículos o máquinas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Bobina:</strong><br>
										Arrollamiento de un cable conductor alrededor de un cilindro sólido o hueco, con lo cual y debido a la especial geometría obtiene importantes características magnéticas.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="C" id="C"></A>
					<h2 id="nr">C</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Chumacera:</strong><br>
										Un tipo de cojinete deslizante teniendo movimiento ya sea oscilatorio o rotatorio en conjunto con el muñón con el que opera.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Circuitos digitales:</strong><br>
										Circuitos que funcionan con 2 estados , y simulan construcciones de lógica matemática altamente complejas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Circuitos hidráulicos:</strong><br>
										Flujo de fluidos por conductos o canales abiertos y el diseño de bombas y turbinas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Circuitos neumáticos:</strong><br>
										Sistemas que utilizan aire comprimido para transmitir energía o información.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Controladores Lógicos Programables (PLC):</strong><br>
										Dispositivos electrónicos posibles de programar para el control de un proceso determinado.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Corriente Eléctrica Alterna:</strong><br>
										El flujo de corriente en un circuito que varía periódicamente de sentido. Se le denota como corriente A.C. (Altern current) o C.A. (Corriente alterna).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Corriente Eléctrica Continua:</strong><br>
										El flujo de corriente en un circuito producido siempre en una dirección. Se le denota como corriente D.C. (Direct current) o C.C. (Corriente continua).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Corriente Eléctrica:</strong><br>
										Es el flujo de electricidad que pasa por un material conductor; siendo su unidad de medida el amperio. y se representan por la letra I.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Corrosión:</strong><br>
										Ataque químico y electroquímico gradual sobre un metal producido por la atmósfera, la humedad y otros agentes.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="E" id="E"></A>
					<h2 id="al">E</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Efecto Fotoeléctrico:</strong><br>
										Cuando se produce en un material, la liberación de partículas cargadas eléctricamente, debido a la irradiación de luz o de radiación electromagnética. Este fenómeno fue explicado por Albert Einstein en 1905 utilizando el concepto de partícula de luz o fotón.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Electricidad:</strong><br>
										Fenómeno físico resultado de la existencia e interacción de cargas eléctricas. Cuando una carga es estática, esta produce fuerzas sobre objetos en regiones adyacentes y cuando se encuentra en movimiento producirá efectos magnéticos.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Electroimán:</strong><br>
										Es la magnetización de un material, utilizando para ello la electricidad.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Energía solar:</strong><br>
										Es la energía radiante producida en el sol como resultado de reacciones de fusión nuclear; esta energía se propaga a través del espacio por las partículas llamadas fotones.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="G" id="G"></A>
					<h2 id="nr">G</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Generación de Energía:</strong><br>
										Comprende la producción de energía eléctrica a través de la transformación de otro tipo de energía (mecánica, química, potencial, eólica, etc) utilizando para ello las denominadas centrales eléctricas (termoeléctricas, hidroeléctricas, eólicas, nucleares, etc.).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Generador:</strong><br>
										Dispositivo electromecánico utilizado para convertir energía mecánica en energía eléctrica por medio de la inducción electromagnética.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>GPS:</strong><br>
										Sistema de Posicionamiento Global por medio de satélites.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>GSM:</strong><br>
										Sistema global para las comunicaciones móviles. (Por ejemplo FB’s-CMGSM.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="H" id="H"></A>
					<h2 id="al">H</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Hardware:</strong><br>
										Componentes físicos de un computador.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Hertz(Hz):</strong><br>
										Medida de frecuencia, medida en ciclos por segundo.</p>
								</td>
							</tr>
						</tbody>
					</table>
					</p><br>
					<br><br>
					<A name="I" id="I"></A>
					<h2 id="nr">I</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Inducción Electromagnética:</strong><br>
										Es la creación de electricidad en un conductor, debido al movimiento de un campo magnético cerca de este o por el movimiento de él en un campo magnético.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Ingeniería de Control:</strong><br>
										Control Automático de Sistemas a través del conocimiento y manejo de señales de entrada y salida de él que informan de su comportamiento.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Ingeniería de Materiales:</strong><br>
										Control Automático de Sistemas a través del conocimiento y manejo de señales de entrada y salida de él que informan de su comportamiento.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="K" id="K"></A>
					<h2 id="al">K</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Kilovatio:</strong><br>
										Unidad de potencia del sistema internacional equivale a 1000 watios y su abreviatura es KW.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="L" id="L"></A>
					<h2 id="nr">L</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Ley de Faraday:</strong><br>
										"Si un campo magnético variable atraviesa el interior de una espira se obtendrá en esta una corriente eléctrica".</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="M" id="M"></A>
					<h2 id="al">M</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Máquina Hidráulica:</strong><br>
										Máquina que trabaja con fluidos incompresibles, por ejemplo el agua.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Máquina Térmica:</strong><br>
										Aquella que trabaja con fluidos compresibles, como máquinas a vapor o turbina a gas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Máquina:</strong><br>
										Artificio o conjunto de aparatos combinados para recibir cierta forma de energía, transformarla y restituirla en otra más adecuada o para producir un efecto determinado.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Mecánica de Fluidos:</strong><br>
										Estudio del comportamiento de los fluidos tanto en Estática (sin movimiento) como Dinámica (en movimiento).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Mecánica de Sólidos:</strong><br>
										Estudia el comportamiento de los cuerpos sólidos rígidos y deformables ante diferentes tipos de situaciones como la aplicación de cargas o efectos térmicos.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Mecanizado:</strong><br>
										Proceso de fabricación con torno, fresadora u otra máquina herramienta, en el cual se construye una pieza partiendo de un bloque metálico.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Mecatrónico:</strong><br>
										Combinación de distintas ramas de la Ingeniería como la Mecánica de precisión, la Electrónica, la Informática y los Sistemas de Control orientados a analizar y diseñar procesos de manufactura automatizados y el diseño de productos.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Metalmecánica:</strong><br>
										Industria dedicada a la elaboración de productos de metal.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Métodos Numéricos:</strong><br>
										Son técnicas basadas en una secuencia de operaciones aritméticas simples para la solución de problemas matemáticos.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Modelo informático:</strong><br>
										Modelo matemático de un sistema, susceptible de ser programado en un computador, para simular el comportamiento de éste.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Motor eléctrico:</strong><br>
										El motor eléctrico permite la transformación de energía eléctrica en energía mecánica, esto se logra, mediante la rotación de un campo magnético alrededor de una espira o bobinado que toma diferentes formas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Multímetro:</strong><br>
										Un multímetro, también denominado polímetro, es un instrumento eléctrico portátil para medir directamente magnitudes eléctricas activas como corrientes y potenciales (tensiones) o pasivas como resistencias, capacidades y otras.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="N" id="N"></A>
					<h2 id="nr">N</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Neumática:</strong><br>
										Ciencia de la ingeniería perteneciente a la presión de los gases y su flujo.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="O" id="O"></A>
					<h2 id="al">O</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Ohmio:</strong><br>
										Unidad de medida de la Resistencia Eléctrica. Y equivale a la resistencia al paso de electricidad que produce un material por el cual circula un flujo de corriente de un amperio, cuando está sometido a una diferencia de potencial de un voltio.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Oxidación:</strong><br>
										Degeneración por el ataque del oxígeno a un material o lubricante. El proceso es acelerado por calor, luz, catalizadores metálicos y la presencia de agua, ácidos o contaminantes sólidos.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="P" id="P"></A>
					<h2 id="nr">P</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>PLC:</strong><br>
										Es un dispositivo de estado sólido, diseñado para controlar procesos secuenciales (una etapa después de la otra) que se ejecutan en un ambiente industrial. Es decir, que van asociados a la maquinaria que desarrolla procesos de producción y controlan su trabajo.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Potencia:</strong><br>
										Cantidad de trabajo realizada en una unidad de tiempo. La potencia de un motor se mide en caballos de vapor (CV) o en kilovatios (Kw) en el sistema internacional.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Prototipos:</strong><br>
										Los prototipos son los primeros equipos de prueba realizados en los laboratorios de desarrollo.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="R" id="R"></A>
					<h2 id="al">R</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Resistencia Eléctrica:</strong><br>
										Se define como la oposición que ofrece un cuerpo a un flujo de corriente que intente pasar a través de si.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Retroalimentación:</strong><br>
										En el concepto de Sistema, uno o varios productos o salidas se convierten luego en entradas para repetir el ciclo del sistema.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Robótica:</strong><br>
										Técnica que aplica el diseño y empleo de aparatos que, en sustitución de personas, realizan operaciones o trabajos, por lo genera en instalaciones industriales.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="S" id="S"></A>
					<h2 id="nr">S</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Sensores:</strong><br>
										Son dispositivos que detectan manifestaciones de cualidades o de fenómenos físicos, como energía, velocidad, tamaño, cantidad, etc.</p>
								</td>
							</tr>
						</tbody>
					</table>
					<br><br>
					<A name="T" id="T"></A>
					<h2 id="al">T</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Termodinámica:</strong><br>
										Relativo a las relaciones existentes entre los fenómenos dinámicos (movimiento) y los fenómenos caloríficos (calor).</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Termostato:</strong><br>
										Mecanismo empleado en el sistema de refrigeración para controlar el caudal de líquido refrigerante que se desvía hacia el radiador. Está formado por una válvula que se acciona por temperatura.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Tierra:</strong><br>
										Comprende a toda la conexión metálica directa, sin fusibles ni protección alguna, de sección suficiente entre determinados elementos o partes de una instalación y un electrodo o grupo de electrodos enterrados en el suelo, con el objeto de conseguir que en el conjunto de instalaciones no existan diferencias potenciales peligrosas.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Transformador:</strong><br>
										Dispositivo utilizado para elevar o reducir el voltaje. Está formado por dos bobinas acopladas magnéticamente entre sí.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Telemetría:</strong><br>
										Telemetría se puede definir como la operación o actividad de monitorear y/o manipular eventos a distancia. Los equipos que contamos en nuestra tienda es Zigbee, Wifi y GSM.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Transmisión:</strong><br>
										comprende la interconexión, transformación y transporte de grandes bloques de electricidad, hacia los centros urbanos de distribución, a través de las redes eléctricas y en niveles de tensión que van desde 115.000 Volts, hasta 800.000 Volt.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Turbina:</strong><br>
										Máquina rotativa con la capacidad de convertir la energía cinética de un fluido en energía mecánica. Sus elementos básicos son: rotor con paletas, hélices, palas, etc. Está energía mecánica sirve para operar generadores eléctricos u otro tipo de máquinas.</p>
								</td>
							</tr>
						</tbody>
					</table>

					<br><br>
					<A name="V" id="V"></A>
					<h2 id="nr">V</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Válvula:</strong><br>
										Un dispositivo que controla la dirección del fluido o la tasa de flujo.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Voltaje:</strong><br>
										La fuerza (Fuerza electromotora)que mueve electrones por un conductor. Se puede representar como la diferencia en la presion electrica. Un voltio mueve un amperio de corriente a traves de un ohmio de resistencia.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Voltímetro:</strong><br>
										Es un instrumento utilizado para medir la diferencia de voltaje de dos puntos distintos y su conexión dentro de un circuito eléctrico es en paralelo.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Voltio:</strong><br>
										Es la unidad de fuerza que impulsa a las cargas eléctricas a que puedan moverse a través de un conductor. Su nombre, voltio, es en honor al físico italiano, profesor en Pavia, Alejandro Volta quien descubrió que las reacciones químicas originadas en dos placas de zinc y cobre sumergidas en ácido sulfúrico originaban una fuerza suficiente para producir cargas eléctricas.</p>
								</td>
							</tr>
						</tbody>
					</table>

					<br><br>
					<A name="W" id="W"></A>
					<h2 id="al">W</h2>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>
									<p><strong>Watt:</strong><br>
										Es la unidad de potencia de un elemento receptor de energía (por ejemplo una radio, un televisor). Es la energía consumida por un elemento y se obtiene de multiplicar voltaje por corriente.</p>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Wattorimetro:</strong><br>
										Es un instrumento utilizado para medir la potencia de un equipo. Dada a la relación Corriente * Voltaje (I*V).</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a class="button-text mt-5 text-center" href="#"><button class="button button-circle-orange">Subir</button></a>
		</div>
	</div>
	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});

			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();

				$('html, body').animate({
					scrollTop: 0
				}, 300);
			})
		});
	</script>
	<!-- PIE DE PAGINA -->
	<?php require("libreria/footer.view.php"); ?>
	<?php echo $bootstrap_js; ?>
	<?php echo $jquery_js; ?>
	<?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>