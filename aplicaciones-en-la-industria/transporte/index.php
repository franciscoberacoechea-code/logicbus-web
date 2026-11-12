<?php
require("../../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones de Transporte | Logicbus</title>
    <meta name="description" content="La automatización está revolucionando la industria del transporte, optimizando cada aspecto de cómo nos movemos y cómo se gestionan bienes y servicios a nivel global.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones de Transporte</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones de Transporte" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones de Transporte" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones de Transporte</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está revolucionando la industria del transporte, optimizando cada aspecto de cómo nos movemos y cómo se gestionan bienes y servicios a nivel global. Desde la implementación de sistemas autónomos en vehículos y trenes, hasta el uso de algoritmos avanzados para la gestión de flotas y rutas logísticas, la automatización ofrece soluciones que mejoran la eficiencia, reducen costos y aumentan la seguridad en el sector.</p>
            <p class="paragraph light-black text-justify">Estas tecnologías también están haciendo posible un transporte más sostenible y conectado, con sistemas inteligentes de tráfico y vehículos eléctricos autónomos que reducen el impacto ambiental y transforman la movilidad urbana.</p>
            <p class="paragraph light-black text-justify">Descubre cómo la automatización está dando forma al futuro del transporte, proporcionando una mayor precisión, confiabilidad y un mundo cada vez más accesible.</p>
        </div>
    </section>

    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="../img/industrias/automotriz.webp" class="card-img" alt="Automotriz" style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, .6);">
                        <a href="../automotriz" class="white text-center link-orange">
                            <h5 class="font-weight-bold">Automotriz</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="../img/industrias/ferroviario.webp" class="card-img" alt="Ferroviario" style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, .6);">
                        <a href="ferroviaria" class="white text-center link-orange">
                            <h5 class="font-weight-bold">Ferroviaria</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="../img/industrias/aeronautica.webp" class="card-img" alt="Aeronautica" style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, .6);">
                        <a href="../espacial-defensa-y-aeronautica" class="white text-center link-orange">
                            <h5 class="font-weight-bold">Aeronautica</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="../img/industrias/maritimo.webp" class="card-img" alt="Maritimo" style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, .6);">
                        <a href="maritima" class="white text-center link-orange">
                            <h5 class="font-weight-bold">Maritima</h5>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Automatizacion-del-Ensamble-Automotriz.webp" class="card-img-top" alt="Automatización del Ensamble Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización del Ensamble Automotriz</h5>
                    <a class="button button-circle-orange" href="./automatizacion-del-ensamble-automotriz.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/IoT-en-la-Industria-Automotriz.webp" class="card-img-top" alt="IoT en la Industria Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">IoT en la Industria Automotriz</h5>
                    <a class="button button-circle-orange" href="iot-en-la-industria-automotriz">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Trazabilidad-Total-en-la-Produccion-Automotriz.webp" class="card-img-top" alt="Trazabilidad Total en la Producción Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Trazabilidad Total en la Producción Automotriz</h5>
                    <a class="button button-circle-orange" href="trazabilidad-total-en-la-produccion-automotriz">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles-.webp" class="card-img-top" alt="Automatización de Pruebas de Calidad en Automóviles" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Pruebas de Calidad en Automóviles</h5>
                    <a class="button button-circle-orange" href="./automatizacion-de-pruebas-de-calidad-en-automoviles.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Sistema-de-Gestion-de-Energia-y-Control-de-Consumo-en-Trenes.webp" class="card-img-top" alt="Sistema de Gestión de Energía y Control de Consumo en Trenes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sistema de Gestión de Energía y Control de Consumo en Trenes</h5>
                    <a class="button button-circle-orange" href="./sistema-de-gestion-de-energia-y-control-de-consumo-en-trenes.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Integración-de-IoT-y-Sistemas-de-Comunicación-en-Trenes-y-Vías.webp" class="card-img-top" alt="Integración de IoT y Sistemas de Comunicación en Trenes y Vías" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Integración de IoT y Sistemas de Comunicación en Trenes y Vías</h5>
                    <a class="button button-circle-orange" href="./integracion-de-iot-y-sistemas-de-comunicacion-en-trenes-y-vias.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria.webp" class="card-img-top" alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria</h5>
                    <a class="button button-circle-orange" href="sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png" class="card-img-top" alt="Mantenimiento predictivo en infraestructura ferroviaria" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Mantenimiento predictivo en infraestructura ferroviaria</h5>
                    <a class="button button-circle-orange" href="./mantenimiento-predictivo-en-infraestructura-ferroviaria.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/helicoptero.png" class="card-img-top" alt="rueba de fuerza del pedal de helicóptero" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fuerza del pedal de helicóptero</h5>
                    <a class="button button-circle-orange" href="prueba-de-fuerza-de-pedal-de-helicoptero">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/caida-tren.png" class="card-img-top" alt="Pruebas de Fuerza y Fatiga en Trenes de Aterrizaje" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza y fatiga en trenes de aterrizaje</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-y-fatiga-en-trenes-de-aterrizaje">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/grua.png" class="card-img-top" alt="Celda de carga para grúa" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Celda de carga para grúa</h5>
                    <a class="button button-circle-orange" href="celda-de-carga-para-grua">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/barco.png" class="card-img-top" alt="Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga</h5>
                    <a class="button button-circle-orange" href="tension-de-las-velas-de-un-navio">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/vuelo.png" class="card-img-top" alt="Sensores de vuelo cableado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de vuelo cableado</h5>
                    <a class="button button-circle-orange" href="sensores-de-vuelo-cableado">Ver</a>
                </div>
            </div>
        </div>
    </section>

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