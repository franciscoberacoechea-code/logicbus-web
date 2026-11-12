<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Riego de Precisión | Logicbus</title>
    <meta name="description"
        content="Sistema de riego de precisión con sensores IoT que optimizan el uso del agua, mejoran el rendimiento de cultivos y permiten monitoreo remoto con alertas en tiempo real.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
    <?php require("../libreria/header.view.php"); ?>

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Riego de Precisión</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Monitoreo de Riego de Precisión"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Monitoreo de Riego de Precisión"
            class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de Riego de Precisión</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-Riego-de Precisión.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../industrial-shields"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/industrial-shields.webp" alt="industrial-shields.webp"
                            width="200px"></a>

                    <a href="../LoggerFlex"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/loggerflex.webp" alt="loggerflex" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Los sistemas de riego de precisión utilizan sensores avanzados y
                    dispositivos habilitados con IoT para monitorear los niveles de humedad del suelo y las condiciones
                    ambientales. Este enfoque garantiza un uso óptimo del agua, evitando el riego excesivo o
                    insuficiente, y mejorando la salud y el rendimiento de los cultivos. A continuación, se explica paso
                    a paso cómo funciona el sistema:</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <p class="light-black text-justify">
                    <b>Monitoreo de Humedad del Suelo:</b> <br>
                    Sensores como el <a href="https://tienda.logicbus.com.mx/Agribun_p_23492.html">Agribun</a> se
                    instalan a diferentes profundidades y
                    ubicaciones en el campo. Estos sensores miden los niveles de humedad del suelo y transmiten los
                    datos a un controlador central, proporcionando información en tiempo real (conectado a una red Wi-Fi
                    activa.) para ajustar con precisión los horarios de riego. Diseñado pensando en la comodidad del
                    usuario, el <a href="https://tienda.logicbus.com.mx/Agribun_p_23492.html">Agribun</a> es fácil de
                    instalar y operar. No se requieren conocimientos técnicos avanzados
                    para comenzar a utilizarlo, lo que lo hace accesible para agricultores de todos los niveles de
                    experiencia. Construido para soportar las duras condiciones del campo, el <a
                        href="https://tienda.logicbus.com.mx/Agribun_p_23492.html">Agribun</a> es resistente al
                    agua y a las inclemencias del tiempo, garantizando su funcionamiento continuo incluso en los
                    entornos más desafiantes.
                </p>
                <p class="text-justify light-black"><b>Control Automático de Riego:</b> <br>
                    Con base en los datos procesados, sistemas automáticos de control como el <b>PLC <a
                            href="https://tienda.logicbus.com.mx/034001YZ0100_p_38012.html">034001YZ0100</a> con
                        ESP32 integrado</b> activan o desactivan el equipo de riego para aplicar cantidades precisas de
                    agua
                    justo donde se necesita.
                </p>
                <p class="text-justify light-black">
                    Un client WIFI de largo alcance como el <a
                        href="https://tienda.logicbus.com.mx/AW5601_p_37126.html">AW5601</a> será tu puente de Internet
                    hacia el invernadero,
                    captando la señal Wi-Fi de punto con Internet lejano y transmitiendo dentro del invernadero
                    conectándolo a un router común, para que los sensores y el PLC se conecten a una red Local y tengan
                    conexión estable.
                <p class="text-justify light-black"><b>Monitoreo y Análisis Centralizado:</b>
                    <br>
                    Esto es posible con <a href="https://www.loggerflex.com/lf-cloud/">LoggerFlex Cloud</a> platform
                    central que guarda, procesa y ofrece acceso a los
                    datos mediante API. Compatible con cualquier software o hardware que pueda hacer solicitudes
                    HTTP.
                </p>
                <p class="text-justify light-black">Alertas y Notificaciones:
                    <br>
                    Sistemas de notificación <b>HTTP, Mensajes de texto (SMS), Correos electrónicos, Llamadas
                        telefónicas</b> envían alertas cuando la humedad del suelo cae por debajo de los niveles óptimos
                    o
                    cuando las condiciones externas requieren ajustes inmediatos en el riego. Estas alertas
                    oportunas previenen el desperdicio de agua y protegen los cultivos del estrés.
                </p>
                <p class="light-black text-justify">
                    <b>Ventajas del Sistema</b>
                <ul class="text-justify">
                    <li><b>Eficiencia Hídrica:</b> Asegura el uso preciso del agua, reduciendo el desperdicio y
                        conservando los recursos.</li>
                    <li><b>Mayor Rendimiento de Cultivos:</b>
                        Mantiene condiciones óptimas del suelo, mejorando el crecimiento y la productividad de
                        las plantas.
                    </li>
                    <li><b>Monitoreo Remoto:</b>
                        Permite a los agricultores supervisar y controlar los sistemas de riego desde cualquier
                        lugar.
                    </li>
                    <li><b>Ahorro de Costos:</b>
                        Disminuye las facturas de agua y los costos operativos gracias a una gestión eficiente
                        de los recursos.
                    </li>
                    <li><b>Sostenibilidad:</b>
                        Promueve prácticas agrícolas responsables al minimizar el uso excesivo de agua y el
                        escurrimiento.
                    </li>
                </ul>
                </p>
                <p class="text-center light-black font-weight-bold">
                    Al integrar sensores de última generación, dispositivos IoT y tecnologías de automatización, los
                    sistemas de riego de precisión ofrecen una solución eficiente y sostenible para la agricultura
                    moderna.
                </p>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/269/Agribun.jpg" alt="Agribun" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Agribun</p>
                <p>registra la temperatura y la humedad del suelo en intervalos cortos y carga los registros para su
                    acceso en una aplicación basada en la web. La aplicación web envía notificaciones por correo
                    electrónico y mensajes de texto (SMS) si alguno de los niveles de temperatura o humedad predefinidos
                    excede o cae por debajo de sus límites definidos ajustables.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Agribun_p_23492.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/440/034001yz0100.jpg" alt="034001YZ0100"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">034001YZ0100</p>
                <p>El 034001YZ0100 es un PLC de código abierto de la familia Industrial Shields. Este dispositivo cuenta
                    con 6 entradas y 11 salidas (8 de ellas configuradas como relés de 5 A), lo que lo convierte en una
                    herramienta esencial para aplicaciones de la industria inteligente. </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/034001YZ0100_p_38012.html"
                    target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/q0M43g7Dpk0?si=-Ux6aaV7iZxHQncE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/-YfaqOYb4cI?si=nELGzDutZL6IX3pF"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/gt-yR2UcBsI?si=It05Y3UbVM6jKOrp"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/monitoreo-de-condiciones-en-invernaderos/" target="_blank"
                    rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/05/Monitoreo-de-Condiciones-en-Invernaderos-scaled.jpg"
                        alt="Cómo el Software de MadgeTech Simplifica el Análisis de Datos para Todas las Industrias"
                        width="100%">
                    Monitoreo de Condiciones en Invernaderos
                </a>

            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/aprovechando-los-registradores-de-datos-para-una-monitorizacion-eficiente-de-la-refrigeracion-en-la-industria-alimentaria/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Aprovechando-los-registradores-de-datos-para-una-monitorizacion-eficiente-de-la-refrigeracion-en-la--2048x1024.webp"
                        alt="Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la industria alimentaria"
                        width="100%">
                    Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la
                    industria alimentaria
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-en-motores-y-equipos-industriales/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Mantenimiento-Predictivo-en-Motores-y-Equipos-Industriales-2048x1024.webp"
                        alt="Mantenimiento Predictivo en Motores y Equipos Industriales" width="100%">
                    Mantenimiento Predictivo en Motores y Equipos Industriales
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/dashboards-e-indicadores-para-la-mejora-de-la-eficiencia-en-la-gestion-de-mantenimiento-hospitalario-2/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Dashboards-e-indicadores-para-la-mejora-de-la-eficiencia-en-la-Gestion-de-Mantenimiento-Hospitalario-2048x1024.webp"
                        alt="Dashboards e indicadores para la mejora de la eficiencia en la Gestión de Mantenimiento Hospitalario"
                        width="100%">
                    Dashboards e indicadores para la mejora de la eficiencia en la Gestión de Mantenimiento Hospitalario
                </a>
            </div>

        </div>
    </section>

    <!--INDUSTRIAS-->
    <section class="container">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="oem">
                        <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="ensayos-de-materiales">
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DIAGRAMA -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"
                        alt="Monitoreo de Riego de Precisión" width="100%">
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
        </div>
        <!-- BEGIN Podio web form -->
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el
                    formulario</a>
            </noscript>
        </div>
    </div>
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>