<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT en la Industria Automotriz | Logicbus</title>
    <meta name="description" content="El Internet de las cosas (IoT) en la industria automotriz permite monitorear maquinaria y procesos en tiempo real, utilizando sensores avanzados y plataformas digitales para optimizar la producción.">
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
                <li class="breadcrumb-item"><a href="../automotriz.php" class="blue link-orange">Automotriz</a></li>
                <li class="breadcrumb-item active" aria-current="page">IoT en la Industria Automotriz</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="IoT en la Industria Automotriz" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="IoT en la Industria Automotriz" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">IoT en la Industria Automotriz</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/IoT-en-la-Industria-Automotriz.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../auk-industries.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/auk-industries.webp" alt="Auk Industries" width="200px"></a>
                    <a href="../../national-control-devices-ncd.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/ncd.webp" alt="NCD Inc." width="200px"></a>
                    <a href="../../fatek.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/fatek.webp" alt="Fatek" width="200px"></a>
                    <a href="../../cimon-software-scada-industrial.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/cimon.webp" alt="Cimon" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">El Internet de las cosas (IoT) en la industria automotriz permite monitorear maquinaria y procesos en tiempo real, utilizando sensores avanzados y plataformas digitales para optimizar la producción. Los datos recopilados son gestionados mediante dashboards y software de análisis predictivo para tomar decisiones informadas y prevenir fallas. A continuación, se explica paso a paso el funcionamiento del sistema:</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Implementación de Sensores IoT</b>: Sensores como el <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html" target="_blank" rel="noopener noreferrer">PR55-61E</a> se instalan en maquinaria clave para monitorear variables como temperatura y vibración. Estos sensores recopilan datos en tiempo real sobre el estado de los equipos y los procesos de producción.</li>
                    <li><b>Adquisición y Transmisión de Datos</b>: Los datos generados por los sensores se envían a un controlador central mediante módulos de comunicación como el <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/AI-AN-2000_p_36746.html" target="_blank" rel="noopener noreferrer">AI-AN-2000</a> (<b>nodo IoT de Auk</b>). Este paso asegura la conectividad continua entre los sensores y la red industrial.</li>
                    <li><b>Gestión de Datos en Tiempo Real</b>: La información recopilada se almacena y gestiona en plataformas IoT como el gateway <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/AI-AG-3003_p_36745.html" target="_blank" rel="noopener noreferrer">AI-AG-3003</a> que sube a la nube los datos con el licenciamiento anual <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/AI-AP-1YP_p_36747.html" target="_blank" rel="noopener noreferrer">AI-AP-1YP</a>, este licenciamiento permite visualizar en tiempo real los datos <a class="blue link-orange" href="../../oee-que-es.php">OEE</a> de las máquinas, las líneas de producción y la planta en general, que permiten visualizar los datos en tiempo real y realizar análisis preliminares. Para conocer ¿qué es OEE y como se calcula?, visita nuestro blog: <a class="blue link-orange" href="../../oee-que-es.php">Mejora la eficiencia de tu producción con OEE</a>.</li>
                    <li><b>Monitoreo mediante Dashboards</b>: Los datos son presentados en dashboards interactivos en cualquier navegador web, desde un <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=handheld&search=" target="_blank" rel="noopener noreferrer">celular</a>, una <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=tablet&search=" target="_blank" rel="noopener noreferrer">tablet</a>, una <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=hmi&search=" target="_blank" rel="noopener noreferrer">HMI</a>, una <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/pantallas-industriales.html" target="_blank" rel="noopener noreferrer">pantalla</a> conectada a una <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales" target="_blank" rel="noopener noreferrer">computadora</a> o un <a class="blue font-weight-bold link-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=panel+pc&search=" target="_blank" rel="noopener noreferrer">Panel PC</a>, donde los operadores pueden visualizar gráficos, tablas y alertas sobre el rendimiento de las máquinas y procesos. Esto facilita la detección temprana de desviaciones.</li>
                    <li><b>Automatización de Respuestas</b>: Cuando se detecten condiciones anormales, los sistemas IoT activan respuestas automáticas, como ajustes en los parámetros de operación o el apagado preventivo de equipos, a través de controladores como los PLCs de <a class="blue link-orange" href="https://www.logicbus.com.mx/blog/por-que-combinar-su-hmi-y-plc-es-la-mejor-opcion/" target="_blank" rel="noopener noreferrer">CIMON</a> o <a class="blue link-orange" href="../../fatek.php" target="_blank" rel="noopener noreferrer">FATEK</a></li>
                    <li><b>Alertas y Notificaciones</b>: En caso de fallas o riesgos inminentes, sistemas como el <a class="blue link-orange" href="../../auk-industries.php" target="_blank" rel="noopener noreferrer">IoT de Auk</a> envían notificaciones inmediatas a los técnicos responsables, ya sea vía correo electrónico o por Whatsapp. Esto garantiza una rápida atención y minimiza el tiempo de inactividad.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li><b>Eficiencia Operativa</b>: Reduce tiempos de inactividad al detectar problemas antes de que ocurran.</li>
                    <li><b>Mantenimiento Predictivo</b>: Optimiza los ciclos de mantenimiento y evita intervenciones innecesarias.</li>
                    <li><b>Transparencia</b>: Proporciona visibilidad total del estado de los equipos y procesos en tiempo real.</li>
                    <li><b>Reducción de Costos</b>: Minimiza los gastos asociados a reparaciones y tiempos muertos.</li>
                    <li><b>Sostenibilidad</b>: Optimiza el uso de recursos al garantizar un funcionamiento eficiente.</li>
                </ul>
                <p class="light-black text-justify">El IoT transforma la industria automotriz al integrar tecnología avanzada para monitorear, analizar y optimizar los procesos de producción, asegurando un rendimiento elevado y una gestión inteligente.</p>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-61e.jpg" alt="PR55-61E" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-61E</p>
                <p>Sensor de temperatura y vibración</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-61E_p_33049.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/322/ai-an-2000.jpg" alt="AI-AN-2000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">AI-AN-2000</p>
                <p>Nodo IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/AI-AN-2000_p_36746.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/322/ai-ag-3003.jpg" alt="AI-AG-3003" width="150px">
                <p class="font-weight-bold mt-2 mb-0">AI-AG-3003</p>
                <p>Gateway IoT</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/AI-AG-3003_p_36745.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/322/ai-ap-1yp.jpg" alt="AI-AP-1YP" width="150px">
                <p class="font-weight-bold mt-2 mb-0">AI-AP-1YP</p>
                <p>12 meses de alojamiento de Ops-Analytics</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/AI-AP-1YP_p_36747.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/EM-I16H-1.jpg" alt="Tablet" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Tablets Industriales</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=tablet&search=" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/C61-1.jpg" alt="handheld" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Handheld</p>
                <p>Celulares/Smartphones industriales</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=handheld&search=" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/1681763382500-image.jpg" alt="HMI" width="150px">
                <p class="font-weight-bold mt-2 mb-0">HMI</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=hmi&search=" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/CS-W121C-3.jpg" alt="Pantallas Industriales" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Pantallas Industriales</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/pantallas-industriales.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/DS-1300.jpg" alt="Computadoras Industriales" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Computadoras Industriales</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/309/iNP510-D_1.jpg" alt="Panel PC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Panel PC</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=panel+pc&search=" target="_blank">Comprar</a>
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
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/transformando-la-produccion-automotriz-con-tecnologia-avanzada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/IoT-en-la-Industria-Automotriz-Transformando-la-Produccion-con-Tecnologia-Avanzada.png" alt="IoT en la Industria Automotriz: Transformando la Producción con Tecnología Avanzada" width="100%">
                    IoT en la Industria Automotriz: Transformando la Producción con Tecnología Avanzada
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-de-pruebas-de-calidad-en-automoviles/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles.png" alt="IoT en la Industria Automotriz: Innovación para una Industria Más Segura y Eficiente" width="100%">
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="IoT en la Industria Automotriz" width="100%">
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
    <?php require("../../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>