<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones Automotrices | Logicbus</title>
    <meta name="description" content="La automatización ha sido un pilar fundamental en la evolución de la industria automotriz, impulsando mejoras en eficiencia, calidad y seguridad en cada etapa del proceso de producción.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones Automotrices</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones Automotrices" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones Automotrices" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones Automotrices</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización ha sido un pilar fundamental en la evolución de la industria automotriz, impulsando mejoras en eficiencia, calidad y seguridad en cada etapa del proceso de producción. Desde robots industriales que ensamblan vehículos con precisión milimétrica, hasta sistemas avanzados de manufactura inteligente y control de calidad, la automatización está redefiniendo los estándares de la industria. No solo optimiza la fabricación, sino que también permite la personalización en masa y una respuesta más ágil a las demandas del mercado.</p>
            <p class="paragraph light-black text-justify">Además, la automatización juega un rol crucial en el desarrollo de tecnologías emergentes, como los vehículos autónomos y sistemas de asistencia al conductor, haciendo que la conducción sea más segura y eficiente.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está transformando la industria automotriz, impulsando la innovación y garantizando un futuro más dinámico y competitivo.</p>
        </div>
    </section>

    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/_Monitoreo de Temperatura en Procesos de Forja o Termoformado.webp"
                    class="card-img-top" alt="Monitoreo de Temperatura en Procesos de Forja o Termoformado"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Temperatura en Procesos de Forja o Termoformado
                    </h5>
                    <a class="button button-circle-orange"
                        href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-Temperatura-en-Procesos-de-Forja-o-Termoformado.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.png"
                    class="card-img-top" alt="Banco de Pruebas de Fuerza y Fatiga para Control de Calidad"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Banco de Pruebas de Fuerza y Fatiga para Control de Calidad
                    </h5>
                    <a class="button button-circle-orange"
                        href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Automatizacion-del-Ensamble-Automotriz.webp" class="card-img-top" alt="Automatización del Ensamble Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización del Ensamble Automotriz</h5>
                    <a class="button button-circle-orange" href="./transporte/automatizacion-del-ensamble-automotriz.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/optimizacion-eficiencia-energetica-fabricacion-automoviles.png" class="card-img-top"
                    alt="Optimización de Eficiencia Energética en Fabricación de Automóviles"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Optimización de Eficiencia Energética en Fabricación de Automóviles
                    </h5>
                    <a class="button button-circle-orange"
                        href="./optimizacion-eficiencia-energetica-fabricacion-automoviles.php">Ver</a>
                </div>
            </div>
            <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pantalla-tactil.png" class="card-img-top"
                        alt="Mejora en Interfaces de Entretenimiento Automotriz con Celdas de Carga"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Mejora en interfaces de entretenimiento automotriz con celdas de
                            carga</h5>
                            <a class="button button-circle-orange" href="retroalimentacion-de-pantalla-tactil">Ver</a>
                    </div>
                </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/IoT-en-la-Industria-Automotriz.webp" class="card-img-top" alt="IoT en la Industria Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">IoT en la Industria Automotriz</h5>
                    <a class="button button-circle-orange" href="./transporte/iot-en-la-industria-automotriz.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Trazabilidad-Total-en-la-Produccion-Automotriz.webp" class="card-img-top" alt="Trazabilidad Total en la Producción Automotriz" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Trazabilidad Total en la Producción Automotriz</h5>
                    <a class="button button-circle-orange" href="./transporte/trazabilidad-total-en-la-produccion-automotriz.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles-.webp" class="card-img-top" alt="Automatización de Pruebas de Calidad en Automóviles" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Pruebas de Calidad en Automóviles</h5>
                    <a class="button button-circle-orange" href="./transporte/automatizacion-de-pruebas-de-calidad-en-automoviles.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/helicoptero.png" class="card-img-top" alt="Prueba de fuerza del pedal de helicóptero" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fuerza del pedal de helicóptero</h5>
                    <a class="button button-circle-orange" href="prueba-de-fuerza-de-pedal-de-helicoptero">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/asiento.png" class="card-img-top" alt="Pruebas de asientos para automóvil" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de asientos para automóvil</h5>
                    <a class="button button-circle-orange" href="pruebas-de-asientos-para-automovil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/caida-tren.png" class="card-img-top" alt="Pruebas de Fuerza y Fatiga en Trenes de Aterrizaje" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza y fatiga en trenes de aterrizaje</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-y-fatiga-en-trenes-de-aterrizaje">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/orion.png" class="card-img-top" alt="Medición de Fuerza en Despliegue de Paracaídas Aeroespaciales" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de fuerza en despliegue de paracaídas aeroespaciales</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-en-despliegue-de-paracaidas-aeroespaciales">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cohete.png" class="card-img-top" alt="Soporte de empuje de motor del cohete" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Soporte de empuje de motor del cohete</h5>
                    <a class="button button-circle-orange" href="soporte-de-empuje-del-motor-cohete">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/uav.png" class="card-img-top" alt="Fuerza de lanzamiento de UAV" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Fuerza de lanzamiento de UAV</h5>
                    <a class="button button-circle-orange" href="fuerza-de-lanzamiento-de-uav">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/atornillador.png" class="card-img-top" alt="Fuerza de Apriete de Tuercas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Fuerza de apriete de tuercas</h5>
                    <a class="button button-circle-orange" href="fuerza-de-apriete-de-tuercas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/puerta.png" class="card-img-top" alt="Medición de fuerza al cerrar puerta de automóvil" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de fuerza al cerrar puerta de automóvil</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-al-cerrar-puerta-de-automovil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/grua.png" class="card-img-top" alt="Celda de carga para grúa" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Celda de carga para grúa</h5>
                    <a class="button button-circle-orange" href="celda-de-carga-para-grua">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/soldadura.jpg" class="card-img-top" alt="Soldadura por resistencia" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Soldadura por resistencia</h5>
                    <a class="button button-circle-orange" href="soldadura-por-resistencia">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/automovil.png" class="card-img-top" alt="Prueba automática de fuerza en pedal de automóvil" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba automática de fuerza en pedal de automóvil</h5>
                    <a class="button button-circle-orange" href="prueba-automatica-de-fuerza-en-pedal-de-automovil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/perno.png" class="card-img-top" alt="Cierre de perno" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Cierre de perno</h5>
                    <a class="button button-circle-orange" href="cierre-de-perno">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/freno.jpg" class="card-img-top" alt="Frenos por sistema de cableado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Frenos por sistema de cableado</h5>
                    <a class="button button-circle-orange" href="freno-por-sistema-de-cableado">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/sensores-automotrices.jpg" class="card-img-top" alt="Sensores automotrices" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores automotrices</h5>
                    <a class="button button-circle-orange" href="sensores-automotrices">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/rodamiento.png" class="card-img-top" alt="Medición de carga en rodamientos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de carga en rodamientos</h5>
                    <a class="button button-circle-orange" href="medicion-de-carga-en-rodamientos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/resorte.png" class="card-img-top" alt="Sistemas de Prueba de Resortes Automatizados" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sistemas de prueba de resortes automatizados</h5>
                    <a class="button button-circle-orange" href="sistema-de-prueba-de-resorte">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dron.png" class="card-img-top" alt="Medición de Empuje y Torque en Drones" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de empuje y torque en drones</h5>
                    <a class="button button-circle-orange" href="prueba-de-helice-en-dron">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/suspension.png" class="card-img-top" alt="Validación de rendimiento para sistemas de suspensión" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Validación de rendimiento para sistemas de suspensión</h5>
                    <a class="button button-circle-orange" href="validacion-de-rendimiento-para-sistemas-de-suspension">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pantalla-tactil.png" class="card-img-top" alt="Mejora en Interfaces de Entretenimiento Automotriz con Celdas de Carga" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Mejora en interfaces de entretenimiento automotriz con celdas de carga</h5>
                    <a class="button button-circle-orange" href="retroalimentacion-de-pantalla-tactil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/sensores-ciclicos.png" class="card-img-top" alt="Monitoreo de Controles de Vuelo con Celdas de Carga de Cambio de Marchas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de controles de vuelo con celdas de carga de cambio de marchas</h5>
                    <a class="button button-circle-orange" href="sensores-ciclicos-para-helicopteros">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/choque.png" class="card-img-top" alt="Sensores de prueba para choque" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de prueba para choque</h5>
                    <a class="button button-circle-orange" href="sensores-de-prueba-para-choque">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/valvula.png" class="card-img-top" alt="Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas</h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-valvulas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/ensamble.png" class="card-img-top" alt="Medición de herramientas de ensamble" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de herramientas de ensamble</h5>
                    <a class="button button-circle-orange" href="medicion-de-herramientas-de-ensamble">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/banco.jpg" class="card-img-top" alt="Pruebas de fuerza en tornillo de banco" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza en tornillo de banco</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-en-tornillo-de-banco">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/motores.png" class="card-img-top" alt="Banco de pruebas de Torque de Motor" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Banco de pruebas de Torque de Motor</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-de-torque-motor">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/motor-oem.png" class="card-img-top" alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</h5>
                    <a class="button button-circle-orange" href="soporte-de-torque-de-reaccion-para-motores-electricos-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/prueba-motores.png" class="card-img-top" alt="Sensores de Torque de Reacción en Auditoría de Motores" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción en Auditoría de Motores</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-de-motores">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/direccion.png" class="card-img-top" alt="Sensor de torque para dirección" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensor de torque para dirección</h5>
                    <a class="button button-circle-orange" href="sensor-de-torque-para-direccion">Ver</a>
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

    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
</body>
<?php echo $var_footer; ?>

</html>