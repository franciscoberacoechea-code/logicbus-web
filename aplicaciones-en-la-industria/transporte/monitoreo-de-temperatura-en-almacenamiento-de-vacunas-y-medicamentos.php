<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos | Logicbus</title>
    <meta name="description" content="La correcta conservación de medicamentos sensibles, como vacunas y productos biológicos, requiere condiciones específicas de temperatura para mantener su efectividad.">
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
    <?php require("../../libreria/header.view.php"); ?>

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="../" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Transporte</a></li>
                <li class="breadcrumb-item"><a href="./maritima.php" class="blue link-orange">Maritima</a></li>
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Monitoreo-de-Temperatura-en-Almacenamiento-de-Vacunas-y-Medicamentos.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../madgetech.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/madgetech.webp" alt="MadgeTech" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">La correcta conservación de medicamentos sensibles, como vacunas y productos biológicos, requiere condiciones específicas de temperatura para mantener su efectividad. Esta solución asegura un monitoreo continuo y en tiempo real, cumpliendo con normativas regulatorias y minimizando el riesgo de pérdida de productos por variaciones térmicas.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Medición de Temperatura:</b>
                        Sensores de alta precisión junto con el <b>registrador</b> de temperatura integrados en el paquete <a class="blue font-weight-bold link orange" href="https://tienda.logicbus.com.mx/VTMS_p_4591.html" target="_blank" rel="noopener noreferrer">VTMS</a> de <a class="blue font-weight-bold link orange" href="../../madgetech.php" target="_blank" rel="noopener noreferrer">Madgetech</a>, se colocan estratégicamente en los refrigeradores y cámaras de almacenamiento. Estos dispositivos registran continuamente las temperaturas con una precisión suficiente para detectar incluso pequeñas fluctuaciones que podrían afectar la calidad de los medicamentos.</li>
                    <li><b>Adquisición y Centralización de Datos:</b>
                        Los datos recolectados se envían al módulo <a class="blue font-weight-bold link orange" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html" target="_blank" rel="noopener noreferrer">RFC1000</a> de <a class="blue font-weight-bold link orange" href="../../madgetech.php" target="_blank" rel="noopener noreferrer">Madgetech</a>, que actúa como un concentrador y repetidor para las señales de los sensores. Este módulo facilita la integración de múltiples puntos de monitoreo en un sistema centralizado.</li>
                    <li><b>Supervisión en Tiempo Real:</b>
                        La información recopilada se transmite a una computadora industrial, que, mediante el software <a class="blue font-weight-bold link orange" href="https://tienda.logicbus.com.mx/SVP-Secure-System_p_4504.html" target="_blank" rel="noopener noreferrer">Madgetech 4 Secure Software</a>, permite a los operadores visualizar gráficas, tendencias y parámetros críticos desde una interfaz accesible y segura.</li>
                    <li><b>Alertas Proactivas:</b>
                        En caso de desviaciones de los rangos permitidos, un sistema de alertas con el software <a class="blue font-weight-bold link orange" href="https://tienda.logicbus.com.mx/SVP-Secure-System_p_4504.html" target="_blank" rel="noopener noreferrer">Madgetech 4 Secure Software</a> de <a class="blue font-weight-bold link orange" href="../../madgetech.php" target="_blank" rel="noopener noreferrer">Madgetech</a> notifica automáticamente al personal responsable a través de alarmas locales y notificaciones remotas por medio de correo electronico, permitiendo acciones correctivas inmediatas.</li>
                    <li><b>Generación de Reportes y Auditorías:</b>
                        Con el software <a class="blue font-weight-bold link orange" href="https://tienda.logicbus.com.mx/SVP-Secure-System_p_4504.html" target="_blank" rel="noopener noreferrer">Madgetech 4 Secure Software</a>, se generan reportes detallados para auditorías regulatorias, asegurando la trazabilidad completa de los registros de temperatura y garantizando el cumplimiento de las normativas farmacéuticas.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li>Garantiza el cumplimiento normativo en el almacenamiento de productos farmacéuticos.</li>
                    <li>Evita pérdidas de medicamentos sensibles por condiciones inapropiadas.</li>
                    <li>Proporciona alertas inmediatas para respuestas rápidas y efectivas.</li>
                    <li>Facilita la trazabilidad y documentación para auditorías y controles regulatorios.</li>
                </ul>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/VTMS-01.jpg" alt="VTMS" width="150px">
                <p class="font-weight-bold mt-2 mb-0">VTMS</p>
                <p>Registrador de datos</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/VTMS_p_4591.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/SVP-SECURE-SYSTEM.PNG" alt="Madgetech 4 Secure Software" width="150px">
                <p class="font-weight-bold mt-2 mb-0">SVP- Secure System</p>
                <p>Madgetech 4 Secure Software</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/SVP-Secure-System_p_4504.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/rfc1000_1.jpg" alt="RFC1000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFC1000</p>
                <p>Transceptor inalámbrico para las series RFOT y RF2000A</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/aisX7PO1X18?si=hzzl0XzQlY3Wmgrp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oODYfSQy058?si=FvMAz2IZ0dMGVI0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oIDCmSgTINc?si=-QnbZVriJlCl1cYQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-del-ensamble-automotriz/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-del-Ensamble-Automotriz-Transformando-la-Produccion-con-Tecnologia-Avanzada-1024x512.png" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos: Transformando la Producción con Tecnología Avanzada" width="100%">
                    Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos: Transformando la Producción con Tecnología Avanzada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/transformando-la-produccion-automotriz-con-tecnologia-avanzada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/IoT-en-la-Industria-Automotriz-Transformando-la-Produccion-con-Tecnologia-Avanzada.png" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos: Transformando la Producción con Tecnología Avanzada" width="100%">
                    IoT en la Industria Automotriz: Transformando la Producción con Tecnología Avanzada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-de-pruebas-de-calidad-en-automoviles/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles.png" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos: Innovación para una Industria Más Segura y Eficiente" width="100%">
                    Automatización de Pruebas de Calidad en Automóviles: Innovación para una Industria Más Segura y Eficiente
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/optimizacion-energetica-en-trenes-la-clave-para-un-futuro-sostenible/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Optimizacion-Energetica-en-Trenes-La-Clave-para-un-Futuro-Sostenible.png" alt="Optimización Energética en Trenes: La Clave para un Futuro Sostenible" width="100%">
                    Optimización Energética en Trenes: La Clave para un Futuro Sostenible
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/iot-y-comunicacion-en-los-nuevos-trenes-de-mexico-la-conectividad-del-futuro/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/IoT-y-Comunicacion-en-los-Nuevos-Trenes-de-Mexico-La-Conectividad-del-Futuro.png" alt="IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro" width="100%">
                    IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria-proteccion-monitoreo-y-automatizacion-centralizada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria-Proteccion-Monitoreo-y-Automatizacion-Centralizada.png" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada" width="100%">
                    Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/mantenimiento-predictivo-y-monitoreo-en-tiempo-real-en-la-industria-ferroviaria/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" alt="Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria" width="100%">
                    Mantenimiento Predictivo y Monitoreo en Tiempo Real en la Industria Ferroviaria
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
                    <a class="text-white" href="../academia-e-investigacion">
                        <img src="../img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../agricultura">
                        <img src="../img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../alimentos-y-bebidas">
                        <img src="../img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../automotriz">
                        <img src="../img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../construccion">
                        <img src="../img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../oem">
                        <img src="../img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../ensayos-de-materiales">
                        <img src="../img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../manufactura">
                        <img src="../img/industrias/manufactura.webp" class="card-img" style="filter: brightness(0.5);" alt="Manufactura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Manufactura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../farmaceutica-y-laboratorio">
                        <img src="../img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../robotica.php">
                        <img src="../img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./">
                        <img src="../img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="../espacial-defensa-y-aeronautica.php">
                        <img src="../img/industrias/aeronautica.webp" class="card-img" style="filter: brightness(0.5);" alt="Aeronautica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Aeronautica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./ferroviaria.php">
                        <img src="../img/industrias/ferroviario.webp" class="card-img" style="filter: brightness(0.5);" alt="Ferroviaria">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ferroviaria</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="./maritima.php">
                        <img src="../img/industrias/maritimo.webp" class="card-img" style="filter: brightness(0.5);" alt="Maritima">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Maritima</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DIAGRAMA -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos" width="100%">
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
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
        </div>
        <!-- BEGIN Podio web form -->
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el formulario</a>
            </noscript>
        </div>
    </div>
    <?php require("../../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>