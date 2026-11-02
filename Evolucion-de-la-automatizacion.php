<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Evolución de la Automatización - Logicbus S.A de C.V</title>
    <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
    <meta name="description"
        content="(En este artículo se hablará en como la automatización junto con el IoT (Internet de las Cosas) fue evolucionando de una manera ...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="Automatización, Internet de las cosas, evolucion, indistrial 4.0, seguridad IoT, Futuro Automatizacion, automatizacion vs IoT,">
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
    <?php require ("libreria/header.view.php"); ?>
    <div>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
        menucategorias();
        ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa"
                                class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Evolución de la Automatización</li>
                    </ol>
                </nav>
                <div class="griditemContA">
                    <img src="https://www.logicbus.com.mx/imagenes/articulo/evolucion-de-la-automatizacion-banner.png"
                        class="image_productos" width="100%" alt="Evolución de la Automatización"
                        title="Evolución de la Automatización">
                    <p class="paragraph text-justify mt-4"><b>Resumen:</b> En este artículo se hablará en como la
                        automatización junto con el IoT (Internet de las Cosas) fue evolucionando de una manera
                        impresionante, por medio de ella, ha dado un impacto a la comunidad cotidiana como a la
                        industrial, hablaremos de su comienzo, como ha surgido el proceso de cambio a través de las
                        nuevas tecnologías realizadas, ejemplos de prototipos automatizados que ha sido una gran ayuda a
                        las diferentes áreas industriales y la seguridad.</p>
                </div>
            </div>
        </div>
        <div class="container paragraph text-justify">
            <h2 class="subtitle blue text-center my-5">Introducción</h2>
            <p>Hoy en día, vivimos en una era donde la tecnología y la innovación avanzan exponencialmente, lo que era
                antes la automatización, podremos mencionar que en la edad media uno de los servicios que se tenían en
                la época eran los molinos de viento, que es simplemente un equipo echo de madera, piedras y mecanismos
                para aprovechar el viento, teniendo aplicaciones en la agricultura y la extracción de minerales.</p>
            <p>Si pensamos lo que esto representaba en esa época, es la comodidad de no ir a traer el agua y regarla en
                el campo. Este principio lo seguimos utilizando en la vida actual, un ejemplo de esto es el sistema de
                riego en los campos, si nos damos cuenta, se perfecciono el molino, integrando más mecanismos y teniendo
                ya un sistema como tal.</p>
            <p>El paradigma de la automatización está cambiando nuevamente a pasos agigantados ya que no nos basta con
                los sistemas que se tienen y requerimos más soluciones, por lo que se están incorporando ecosistemas
                para desarrollar un fin, y es aquí donde nace IoT, abriendo nuevas ideas y formas de hacer las tareas
                cotidianas, nuevamente para el confort y agilizar las tareas.</p>
            <h2 class="subtitle blue text-center my-5">Internet de las Cosas vs Automatización</h2>
            <p class="med blue">A. Internet de las Cosas</p>
            <p>En la actualidad tengamos acceso a medios cada vez más poderosos como Internet con relativa facilidad y
                bajo costo. El uso que le damos a Internet está cambiando en base a las necesidades de la sociedad hoy
                en día, y con el paso del tiempo se conectan más dispositivos desde teléfonos móviles, relojes, gafas;
                mediante el uso de redes como 3G, 4G, entre otras.</p>
            <p>Al evolucionar el internet, la conectividad se extiende a los objetos y este nuevo concepto se conoce
                como Internet of Things (IoT) o Internet de las Cosas (IdC).</p>
            <p>El IoT permitirá la integrar objetos inteligentes con el fin de compartir información que sea útil en la
                tomar decisiones que mejoren nuestra calidad de vida.s</p>
            <p>A continuación explicamos rasgos sobresalientes en las que IoT se presenta:</p>
            <ul>
                <li><b>Hogar:</b> se tiene una presencia significativa ya que controlamos diferentes sistemas mediante
                    nuestros equipos móviles, desde un portón, una alarma, los sistemas de video vigilancia, entre
                    otros.</li>
                <li><b>Ciudades:</b> Tenemos impacto enorme, puesto que en estas se benéfica a más personas, y en si es
                    un bienestar común, como por ejemplo los estacionamientos inteligentes, los semáforos inteligentes.
                </li>
                <li><b>Automotores:</b> los autos en la actualidad ya cuentan con internet integrado, dando la
                    posibilidad de enviar la información del estado de los automóviles. El fin es, el fabricante podrá
                    brindar un mejor servicio a los consumidores, y detectara fallas puntuales de los vehículos sin
                    necesidad de analizarlos después de la falla.</li>
                <li><b>Salud:</b> la medición de los parámetros del estado físico de una persona es vital, con el
                    concepto de IoT se han desarrollado dispositivos para medir este tipo de cuestiones, dando como
                    resultado una detección temprana de condiciones anormales en las personas, estos dispositivos son
                    prendas o ropa, llamada wearables.</li>
                <li><b>Agricultura y Ganadería:</b> El concepto de IoT se puede implementar en invernaderos para
                    optimizar los cultivos, esto es, controlar las condiciones ambientales y registrando los eventos
                    para que se tome decisiones mas acertadas.</li>
                <li><b>Industria y Comercio:</b> El IoT se puede implementar desde la distribución, inventarios, hasta
                    analizar el comportamiento del consumidor.</li>
                <li><b>Medio Ambiente:</b> se pueden generar sistemas para el registro de las condiciones ambientales,
                    para medir las condiciones del aire, suelo y el agua.</li>
                <li><b>Integración de Sistemas:</b> todo lo anterior gana más fuerza cuando se integran los sistemas, o
                    más bien se comunican entre sí, creando un ecosistema.</li>
            </ul>
            <p class="med blue">B. Automatización</p>
            <p>Revisando cada uno de los conceptos que se expusieron en los anteriores párrafos, encontramos que la
                automatización de los equipos electrónicos está presente, y se requiere de varias disciplinas y
                conocimientos específicos para llevar a cabo un proyecto de este tipo.</p>
            <p>Por lo anterior, la automatización ya dejo de jugar un papel simplemente pasivo, sino que se le está
                dando la capacidad de reaccionar dependiendo de los parámetros que sean configurados. Esto es
                simplemente, lo que era un portón, antes del milenio se podría automatizar colocando un sistema mecánico
                para abrir la puerta desde tu carro, mediante ondas de radiofrecuencia, en la actualidad se integró el
                concepto de IoT, revolucionando la automatización, por lo que ahora el sistema puede hacer aún más cosas
                de solo abrir el portón, sino ya podríamos decir que puede controlar el acceso.</p>
            <h2 class="subtitle blue text-center my-5">Seguridad</h2>
            <p>Uno de los aspectos más preocupantes actualmente en el mundo del internet de las cosas es la seguridad.
                La existencia de nuevas tecnologías emergentes, algunas aún inmaduras, y la multitud de puntos
                susceptibles de ser atacados hacen de la seguridad en IoT un problema real.</p>
            <p>Este nivel de despliegue se debe a que la automatización de nuestras casas y negocios serán hecho
                realidad, al igual que la posibilidad de conducir autos inteligentes. Incluso, desde ahora es posible
                notar cómo esta tendencia es la protagonista de una transformación en casi cualquier ámbito:
                electrodomésticos, oficinas, hospitales, manufactureras, estacionamientos o campus universitarios, todo
                se ha vuelto más móvil y conectado que nunca. Sin embargo, esta evolución trae consigo posibles
                amenazas, pues no todas las plataformas, aplicaciones, productos o servicios están desarrollados bajo
                estándares mínimos de seguridad.</p>
            <p>A medida que la IoT transforma sectores enteros y, al hacerlo, genera beneficios enormes y tremendos
                nuevos riesgos, con la llegada del concepto, no era de esperarse que también los sistemas contrafuego
                cambiaran su forma de análisis. Uno de los sistemas es Symantec ya ayuda a proteger más de mil millones
                de dispositivos de IoT. Desde televisores inteligentes hasta infraestructura crítica, ayuda a proteger,
                gestionar de manera segura dispositivos y comunicaciones, proporciona analítica para detectar amenazas
                avanzadas en los sistemas de IoT.</p>
            <h2 class="subtitle blue text-center my-5">¿Qué se espera en el futuro para la automatización?</h2>
            <p>La automatización no se estanca, ya que a medida que pasa el tiempo, se crean nuevas necesidades y
                requerimientos para la sociedad, teniendo nuevos y más complejos proyectos a resolver.</p>
            <p>Un ejemplo de esto es, el futuro se prevé el cambio en la infraestructura que proporciona el internet,
                esto es simplemente el aumento de la velocidad que se requerirá, así como la cantidad de dispositivos
                que habrán conectados, lo anterior nos hace pensar que los protocolos que tenemos son insuficientes para
                esto, por lo que el IPV6 deberá dar el resultado esperado.</p>
            <p>Otro cambio, es la parte de la mentalidad que esto trae en los procesos, la educación y los nuevos
                trabajos que se desarrollaran. Esto es que a medida que pasa el tiempo, las empresas requerirán nueva
                fuerza de trabajo, y actualmente no existen escuelas que enseñen sobre estos paradigmas ya que estamos
                en la brecha del cambio, por lo que se están apoyando de los veteranos con esa experiencia para poder
                desarrollar los nuevos empleados del futuro.</p>
            <h2 class="subtitle blue text-center my-5">Conclusión</h2>
            <p>Como hemos visto al pasar del tiempo, tenemos que la automatización es requerida por la sociedad para
                mejorar la calidad de vida, por lo que está en constante evolución, y a medida que pasa el tiempo da
                saltos cada vez más rápido.</p>
            <p>En este artículo hicimos una comparación con la tendencia de IoT, observando que se están automatizando
                varios sistemas que ya estaban automatizados, esto es, que se está utilizando la reingeniería para
                mejorar y unificar sistemas, y otros sistemas que eran pasivos se pudieran volver dinámicos para
                producir un resultado en común.</p>
            <p>Hemos observado que hay inseguridad en este proceso, pero a medida que avanzan las soluciones, nos
                estamos preparando para dar ese brinco tecnológico y estar listos para el cambio.</p>
            <p class="paragraph blue text-center"><a class="link-orange"
                    href="https://www.logicbus.com.mx/pdf/articulos/evolucion-de-la-automatizacion.pdf"
                    target="_blank">Leer
                    Artículo Completo</a></p>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require ("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>