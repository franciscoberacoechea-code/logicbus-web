<?php
require("../../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trazabilidad Total en la Producción Automotriz | Logicbus</title>
    <meta name="description" content="La trazabilidad total en la producción automotriz asegura un monitoreo continuo de los componentes durante todo el ciclo de producción, desde el ensamblaje hasta el producto terminado.">
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
                <li class="breadcrumb-item active" aria-current="page">Trazabilidad Total en la Producción Automotriz</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="Trazabilidad Total en la Producción Automotriz" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="Trazabilidad Total en la Producción Automotriz" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="title white font-weight-bold mb-0">Trazabilidad Total en la Producción Automotriz</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="../img/Trazabilidad-Total-en-la-Produccion-Automotriz.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../../rfid-inc.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/rfid.webp" alt="RFID Inc." width="200px"></a>
                    <a href="../../cimon-software-scada-industrial.php"><img class="m-3 gray-filter" src="../../images/nuestras_marcas/webp/cimon.webp" alt="Cimon" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="light-black text-justify">La trazabilidad total en la producción automotriz asegura un monitoreo continuo de los componentes durante todo el ciclo de producción, desde el ensamblaje hasta el producto terminado. A continuación, se describe cómo funciona el sistema paso a paso:</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Identificación de Componentes</b>: A la entrada de materiales a ensamblar en principio se almacenan en pallets los cuales se identifican por medio de tags RFID como la <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/F11009_p_37989.html" target="_blank" rel="noopener noreferrer">F11009</a> para montaje en pallet para su pronta identificación, de igual forma piezas metálicas y plásticas en la línea de producción se etiquetan con tags RFID como la <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/807-0020-ML6535_p_25927.html" target="_blank" rel="noopener noreferrer">ML6535</a>, que serán identificados utilizando dispositivos como la serie de lectores S4 UHF (Ultra High Frequency) <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html" target="_blank" rel="noopener noreferrer">S4-8050-04</a> equipo con conexión por medio de protocolo TCP/IP para la lectura de etiquetas RFID. Estas etiquetas contienen un identificador clave, que en un sistema identifica características como el número de serie, especificaciones y fecha de fabricación. Este paso garantiza que cada componente pueda ser identificado y rastreado desde su introducción al proceso de ensamblaje.</li>
                    <li><b>Monitoreo en Tiempo Real</b>: En puntos estratégicos de la línea de producción, se colocan antenas RFID como la <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/719-0708-07V_p_25943.html" target="_blank" rel="noopener noreferrer">UHF-A78V</a> que detectan las IDs de las etiquetas, a medida que las piezas avanzan por el sistema. Las IDs recopiladas se transmiten al lector <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html" target="_blank" rel="noopener noreferrer">S4 UHF</a> central de cada sección para posteriormente comunicarse por medio del protocolo de comunicación TCP/IP con anterioridad a nuestro sistema SCADA, permitiendo la supervisión en tiempo real del progreso de los componentes.</li>
                    <li><b>Integración con Software SCADA</b>: Toda la información recopilada de los sensores, lectores y cámaras se integra en un sistema SCADA como el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank" rel="noopener noreferrer">Ultimate Access Web de CIMON</a>. Este software proporciona una interfaz gráfica para visualizar el estado de cada componente, monitorear la línea de producción y generar informes en tiempo real. Además, permite configurar alarmas personalizadas para discrepancias en el proceso.</li>
                    <li><b>Rastreo de Productos Terminados</b>: Al concluir el ensamblaje, los vehículos completos se escanean nuevamente utilizando lectores RFID de largo alcance como el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/818-8030-10-9V_p_26191.html" target="_blank" rel="noopener noreferrer">SPR/A10-8030-9V</a>, equipo que no requiere lector ya que este se encuentra integrado en la antena. Esto registra información sobre los componentes utilizados, asociándose con un identificador único del producto terminado. Este registro asegura que cualquier problema detectado en el futuro pueda rastrearse hasta su origen.</li>
                    <li><b>Almacenamiento y Análisis de Datos</b>: Todos los datos recopilados durante el ciclo de producción se almacenan en una base de datos centralizada, utilizando sistemas como el <a class="blue link-orange font-weight-bold" href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank" rel="noopener noreferrer">Ultimate Access Web de CIMON</a>.</li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li><b>Transparencia Total</b>: Proporciona una visión completa del ciclo de producción, asegurando que cada componente sea rastreable.</li>
                    <li><b>Calidad Mejorada</b>: Permite detectar y corregir problemas en tiempo real, reduciendo los defectos.</li>
                    <li><b>Eficiencia Operativa</b>: Optimiza los procesos de fabricación al automatizar el monitoreo y el control.</li>
                    <li><b>Cumplimiento Normativo</b>: Facilita la documentación y el cumplimiento de estándares de calidad y seguridad.</li>
                    <li><b>Respaldo en Casos de Garantía</b>: Asegura un registro completo que permite rastrear defectos hasta su origen.</li>
                </ul>
                <p class="light-black text-justify">Con la integración de tecnologías avanzadas como RFID y sistemas SCADA, la trazabilidad total transforma la producción automotriz al ofrecer un control y supervisión sin precedentes.</p>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/292/f11009.jpg" alt="F11009" width="150px">
                <p class="font-weight-bold mt-2 mb-0">F11009</p>
                <p>Tags RFID</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/F11009_p_37989.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/292/807-0020-ML6535.jpg" alt="807-0020-ML6535" width="150px">
                <p class="font-weight-bold mt-2 mb-0">807-0020-ML6535</p>
                <p>Etiqueta de montaje de metal en rollo</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/807-0020-ML6535_p_25927.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/292/s4-8050-04.jpg" alt="S4-8050-04" width="150px">
                <p class="font-weight-bold mt-2 mb-0">S4-8050-04</p>
                <p>Lector S4 UHF (Ultra High Frequency)</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/292/719-0708-07V.jpg" alt="719-0708-07V" width="150px">
                <p class="font-weight-bold mt-2 mb-0">719-0708-07V</p>
                <p>Antena UHF</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/719-0708-07V_p_25943.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/309/ultimate-access-web.jpg" alt="Ultimate Access Web" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Ultimate Access Web</p>
                <p>Software SCADA</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/292/818-8030-10-9V.jpg" alt="818-8030-10-9V" width="150px">
                <p class="font-weight-bold mt-2 mb-0">818-8030-10-9V</p>
                <p>Lector RFID de largo alcance</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/818-8030-10-9V_p_26191.html" target="_blank">Comprar</a>
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
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/automatizacion-de-pruebas-de-calidad-en-automoviles/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles.png" alt="Trazabilidad Total en la Producción Automotriz: Innovación para una Industria Más Segura y Eficiente" width="100%">
                    Trazabilidad Total en la Producción Automotriz: Innovación para una Industria Más Segura y Eficiente
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/optimizacion-energetica-en-trenes-la-clave-para-un-futuro-sostenible/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Optimizacion-Energetica-en-Trenes-La-Clave-para-un-Futuro-Sostenible.png" alt="Optimización Energética en Trenes: La Clave para un Futuro Sostenible" width="100%">
                    Optimización Energética en Trenes: La Clave para un Futuro Sostenible
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/iot-y-comunicacion-en-los-nuevos-trenes-de-mexico-la-conectividad-del-futuro/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/IoT-y-Comunicacion-en-los-Nuevos-Trenes-de-Mexico-La-Conectividad-del-Futuro.png" alt="IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro" width="100%">
                    IoT y Comunicación en los Nuevos Trenes de México: La Conectividad del Futuro
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria-proteccion-monitoreo-y-automatizacion-centralizada/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/11/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria-Proteccion-Monitoreo-y-Automatizacion-Centralizada.png" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada" width="100%">
                    Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria: Protección, Monitoreo y Automatización Centralizada
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
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
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Trazabilidad Total en la Producción Automotriz" width="100%">
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