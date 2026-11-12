<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Activos Hospitalarios | Logicbus</title>
    <meta name="description" content="Los equipos médicos son fundamentales en la atención de los pacientes, y su disponibilidad y correcto mantenimiento son esenciales para un servicio de calidad.">
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
                <li class="breadcrumb-item"><a href="./farmaceutica-y-laboratorio.php" class="blue link-orange">Farmacéutica y Laboratorio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gestión de Activos Hospitalarios</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Gestión de Activos Hospitalarios" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Gestión de Activos Hospitalarios" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Gestión de Activos Hospitalarios</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="img/Gestion-de-Activos-Hospitalarios.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../blyott.php"><img class="gray-filter mx-3" src="../images/nuestras_marcas/webp/blyott.webp" alt="Blyott" width="200px"></a>
                    <a href="../neovero.php"><img class="gray-filter mx-3" src="../images/nuestras_marcas/webp/neovero.webp" alt="Neovero" width="200px"></a>
                    <a href="../national-control-devices-ncd.php"><img class="gray-filter mx-3" src="../images/nuestras_marcas/webp/ncd.webp" alt="National Control Devices" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">Los equipos médicos son fundamentales en la atención de los pacientes, y su disponibilidad y correcto mantenimiento son esenciales para un servicio de calidad. Esta solución permite gestionar activos, programar mantenimientos preventivos y monitorizar el estado operativo de dispositivos en tiempo real, optimizando su uso y minimizando tiempos de inactividad.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Inventario y Registro de Activos</b>:
                        Cada equipo médico, desde ventiladores hasta máquinas de resonancia magnética, se etiqueta con identificadores únicos mediante <b>tags <a class="link-orange blue font-weight-bold" href="https://tienda.logicbus.com.mx/BT-T1_p_37985.html" target="_blank" rel="noopener noreferrer">BT-T1</a> de Blyott</b>, las cuales se conectaran a las antenas <a class="link-orange blue font-weight-bold" href="https://tienda.logicbus.com.mx/BT-L1_p_37986.html" target="_blank" rel="noopener noreferrer">BT-L1</a> <b>de Blyott</b> compatibles con la plataforma <a class="link-orange blue" href="../neovero.php">Neovero</a>, creando un inventario detallado y actualizado en tiempo real.</li>
                    <li><b>Monitoreo en Tiempo Real</b>:
                        Los dispositivos críticos son integrados en un sistema de adquisición de datos con un Gateway como el <a class="link-orange blue font-weight-bold" href="https://tienda.logicbus.com.mx/NCD-Edge-CR_p_36101.html" target="_blank" rel="noopener noreferrer">NCD-Edge-CR</a> <b>de National Control Devices (NCD)</b>, que recopilan parámetros de funcionamiento, como consumo energético y tiempo de operación obtenidos de los sensores como el <a class="link-orange blue font-weight-bold" href="https://tienda.logicbus.com.mx/PR55-87A_p_38008.html" target="_blank" rel="noopener noreferrer">PR55-87A</a> de <b>NCD</b>. Finalmente mediante una interfaz REST API integramos toda la información dentro de la plataforma de <a class="link-orange blue" href="../neovero.php">Neovero</a>.</li>
                    <li><b>Planificación de Mantenimiento Preventivo</b>:
                        La plataforma Neovero utiliza algoritmos para analizar el uso y las condiciones de los equipos, generando alertas de mantenimiento antes de que ocurran fallas, basándose en criterios como horas de uso o indicadores de desgaste.</li>
                    <li><b>Alertas y Notificaciones</b>:
                        Ante cualquier anomalía detectada, Neovero notifica automáticamente al personal técnico, permitiendo tomar medidas correctivas antes de que el problema afecte las operaciones clínicas.</li>
                    <li><b>Reportes Detallados</b>:
                        El sistema genera informes sobre el estado, uso y mantenimiento de cada equipo, facilitando la toma de decisiones y el cumplimiento de normativas hospitalarias.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas</p>
                <ul class="light-black text-justify">
                    <li>Prolonga la vida útil de los equipos médicos mediante mantenimiento proactivo.</li>
                    <li>Reduce costos de reparación al prevenir fallos inesperados.</li>
                    <li>Mejora la eficiencia operativa con una gestión integral de activos.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/339/BT-T1.jpg" alt="BT-T1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">BT-T1</p>
                <p>Es el sensor ideal para seguimiento de activos</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/BT-T1_p_37985.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/339/BT-L1.jpg" alt="BT-L1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">BT-L1</p>
                <p>Localizador BLE confiable y seguro</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/BT-L1_p_37986.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/ncd-edge-cr.jpg" alt="NCD-Edge-CR" width="150px">
                <p class="font-weight-bold mt-2 mb-0">NCD-Edge-CR</p>
                <p>Gateway Empresarial IIoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/NCD-Edge-CR_p_36101.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-87a.jpg" alt="PR55-87A" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-87A</p>
                <p>Sensor inalámbrico IoT, largo alcance, para monitoreo de máquinas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-87A_p_38008.html" target="_blank">Comprar</a>
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
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-del-Ensamble-Automotriz-Transformando-la-Produccion-con-Tecnologia-Avanzada-1024x512.png" alt="Gestión de Activos Hospitalarios: Transformando la Producción con Tecnología Avanzada" width="100%">
                    Gestión de Activos Hospitalarios: Transformando la Producción con Tecnología Avanzada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/transformando-la-produccion-automotriz-con-tecnologia-avanzada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/IoT-en-la-Industria-Automotriz-Transformando-la-Produccion-con-Tecnologia-Avanzada.png" alt="Gestión de Activos Hospitalarios: Transformando la Producción con Tecnología Avanzada" width="100%">
                    IoT en la Industria Automotriz: Transformando la Producción con Tecnología Avanzada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-de-pruebas-de-calidad-en-automoviles/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles.png" alt="Gestión de Activos Hospitalarios: Innovación para una Industria Más Segura y Eficiente" width="100%">
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
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Gestión de Activos Hospitalarios" width="100%">
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
                </div>
            </div>
        </div>
    </div>

            <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
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
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>