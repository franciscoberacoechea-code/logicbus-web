<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Condiciones en Invernaderos | Logicbus</title>
    <meta name="description"
        content="Optimiza el ambiente de tu invernadero con monitoreo IoT en tiempo real—controla temperatura, humedad y CO2 automáticamente para un cultivo saludable y eficiente.">
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
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Condiciones en Invernaderos</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Monitoreo de Condiciones en Invernaderos"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Monitoreo de Condiciones en Invernaderos"
            class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de Condiciones en Invernaderos</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-Condiciones-en-Invernaderos.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../icp-das"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/icpdas.webp"
                            alt="icp-das" width="200px"></a>
                    <a href="../teracom"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/teracom.webp"
                            alt="Teracom" width="200px"></a>
                    <a href="../arestech"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/arestech.webp" alt="arestech" width="200px"></a>

                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Los sistemas de monitoreo de condiciones en invernaderos garantizan
                    un control ambiental óptimo al medir en tiempo real la temperatura, la humedad y los niveles de CO₂,
                    ajustando automáticamente los sistemas de ventilación y calefacción para mantener condiciones
                    ideales para el crecimiento de los cultivos. A continuación, se describe paso a paso cómo funciona
                    el sistema:</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3"><b>Despliegue de Sensores Ambientales:</b>
                        Sensores como el CL-211-E se instalan estratégicamente en todo el invernadero para
                        monitorear la temperatura, la humedad y las concentraciones de dióxido de carbono. Estos
                        sensores proporcionan datos en tiempo real, fundamentales para comprender y controlar el
                        microclima del invernadero.
                    </li>
                    <li><b>Adquisición y Procesamiento de Datos:</b>
                        Los datos ambientales capturados por los sensores se transmiten a una computadora
                        PPC-Z217PW-B62A1; desde la cual se pueden monitorear los sensores con el módulo TCW242,
                        y además el TCW242 también funciona para control. Este paso asegura que todas las
                        mediciones estén sincronizadas y disponibles para su análisis.
                    </li>
                    <li> <b>Control Automatizado de Ventilación:</b>
                        Los sistemas de ventilación están conectados a ventilas y ventiladores motorizados,
                        controlados por dispositivos como el TCW242. Cuando la temperatura o los niveles de CO2
                        superan los límites predefinidos, el sistema ajusta automáticamente la ventilación para
                        restablecer las condiciones óptimas.
                    </li>
                    <li class="mb-3"><b>Regulación del Sistema de Calefacción:</b>
                        Los sistemas de calefacción, accionados con un módulo habilitado para IoT como el TCW242,
                        aseguran que el invernadero mantenga un calor constante durante los períodos fríos. Estos
                        sistemas activan o desactivan los calefactores según los datos de temperatura en tiempo real,
                        asegurando eficiencia energética y protegiendo a los cultivos del estrés.
                    </li>
                    <li class="mb-3"><b>Comunicación Inalámbrica y Monitoreo Remoto:</b>
                        Módulos inalámbricos como el TCW242 permiten una comunicación fluida entre sensores,
                        controladores y plataformas en la nube. Esta conectividad permite a los encargados del
                        invernadero acceder a los datos de forma remota y monitorear las operaciones en tiempo real.
                    </li>
                    <li class="mb-3"><b>Gestión Centralizada de Datos:</b>
                        Dispositivos como el PPC-Z217PW-B62A1 recopilan, almacenan y envían todos los datos a cualquier
                        plataforma en la nube o base de datos, ofreciendo análisis avanzados y visualización de
                        tendencias. Esto ayuda a optimizar las operaciones del invernadero al identificar patrones y
                        sugerir ajustes para mejorar la eficiencia con base en los datos recopilados.
                    </li>
                    <li class="mb-3"><b>Alertas y Notificaciones:</b>
                        Equipos con sistemas de notificación como el TCW242 envían alertas en tiempo real a los
                        operadores cuando los parámetros críticos salen de los rangos aceptables. Por ejemplo, una
                        alerta puede notificar al responsable sobre niveles elevados de CO2 o caídas repentinas de
                        temperatura, permitiendo una acción correctiva inmediata.
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Crecimiento Óptimo de Cultivos:</b> Mantiene condiciones ambientales
                        consistentes, mejorando la salud y productividad de las plantas.</li>
                    <li class="mb-3"><b>Eficiencia Energética:</b>Reduce el consumo de energía al automatizar
                        calefacción y ventilación.</li>
                    <li class="mb-3"><b>Acceso Remoto:</b> Permite monitoreo y control en tiempo real desde cualquier
                        lugar.</li>
                    <li class="mb-3"><b>Decisiones Basadas en Datos:</b> Brinda información útil a través de análisis
                        centralizados.</li>
                    <li class="mb-3"><b>Reducción del Estrés en Cultivos:</b> Evita fluctuaciones ambientales que puedan
                        afectar negativamente el crecimiento.</li>
                </ul>
                <p class="font-weight-bold mt-2 mb-0">
                    Gracias a la integración de sensores avanzados, sistemas automatizados y tecnologías IoT, el
                    monitoreo de condiciones en invernaderos ofrece una solución sostenible y eficiente para la
                    agricultura moderna.
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
                <img src="https://tienda.logicbus.com.mx/assets/images/CL-211-E.jpg" alt="CL-211-E" width="150px">
                <p class="font-weight-bold mt-2 mb-0">CL-211-E</p>
                <p>Módulo registrador de datos PM2.5 / CO / temperatura / humedad / punto de rocío</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/PPC-Z217PW-B62A1_p_31730.html" target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/PPC-Z217PW-B61A1-1.jpg" alt="PPC-Z217PW-B62A1"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">PPC-Z217PW-B62A1
                </p>
                <p>21.5" 16:9 (1920 x 1080), 250 nits, Stainless Steel 316 Full IP66/69K Protection, Fanless Panel PC
                    with Intel® Core i3-7100U CPU, Projected Capacitive Touch, 4G RAM, 128G M.2 TLC, 1x IP67 Front
                    USB3.0, 1x USB3.0, 1x M12 for 2x USB2.0, 1x RS-232, 1x RS-232//422/485, 2x GbE, RFID Reader, DC 9~36
                    V, M12 Connector
                </p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/PPC-Z217PW-B62A1_p_31730.html" target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/297/tcw242-2.jpg" alt="TCW242" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TCW242</p>
                <p>El módulo Industrial IoT TCW242 es una buena opción para actualizar las operaciones industriales.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TCW242_p_35436.html"
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
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/wAldLaqY7AU?si=QZAu3xWgTqUbT4jv"
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
                    href="https://www.logicbus.com.mx/blog/como-el-software-de-madgetech-simplifica-el-analisis-de-datos-para-todas-las-industrias/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/04/Como-el-Software-de-MadgeTech-Simplifica-el-Analisis-de-Datos-para-Todas-las-Industrias-_1_-2048x1024.webp"
                        alt="Cómo el Software de MadgeTech Simplifica el Análisis de Datos para Todas las Industrias"
                        width="100%">
                    Cómo el Software de MadgeTech Simplifica el Análisis de Datos para Todas las Industrias
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
                        alt="Monitoreo de Condiciones en Invernaderos" width="100%">
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