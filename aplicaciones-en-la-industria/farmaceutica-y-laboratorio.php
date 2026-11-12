<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Farmacéutica y Laboratorio | Logicbus</title>
    <meta name="description" content="La automatización está revolucionando la industria farmacéutica y los laboratorios al optimizar procesos críticos como el desarrollo de medicamentos, el análisis de muestras y el control de calidad.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Farmacéutica y Laboratorio</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Farmacéutica y Laboratorio" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Farmacéutica y Laboratorio" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Farmacéutica y Laboratorio</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está revolucionando la industria farmacéutica y los laboratorios al optimizar procesos críticos como el desarrollo de medicamentos, el análisis de muestras y el control de calidad. Desde sistemas robóticos para el manejo preciso de compuestos químicos hasta plataformas automatizadas que realizan pruebas y análisis de forma continua, la automatización permite acelerar la investigación y mejorar la precisión en cada etapa del proceso. Esto es especialmente importante en el desarrollo de nuevos tratamientos, donde la velocidad y precisión pueden marcar la diferencia en la vida de millones de personas.</p>
            <p class="paragraph light-black text-justify">Además, la integración de sistemas de inteligencia artificial y monitoreo en tiempo real permite una gestión de datos avanzada, facilitando la toma de decisiones informadas y garantizando la seguridad y calidad de los productos farmacéuticos.</p>
            <p class="paragraph light-black text-justify">Descubre cómo la automatización está transformando la industria farmacéutica y de laboratorio, asegurando mayor eficiencia, seguridad y avances innovadores en la ciencia y la salud.</p>
        </div>
    </section>

    <!--APLICACIONES-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
        <div class="card m-3" style="width: 18rem;">
                <img src="img/Gestion-de-Activos-Hospitalarios.webp" class="card-img-top" alt="Gestión de Activos Hospitalarios" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Gestión de Activos Hospitalarios</h5>
                    <a class="button button-circle-orange" href="./gestion-de-activos-hospitalarios.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/monitoreo-continuo-de-temperatura-en-almacenes-gxp.png" class="card-img-top"
                    alt="Monitoreo Continuo de Temperatura en Almacenes GxP"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo Continuo de Temperatura en Almacenes GxP</h5>
                    <a class="button button-circle-orange"
                        href="./monitoreo-continuo-de-temperatura-en-almacenes-gxp.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Monitoreo-de-Temperatura-en-Almacenamiento-de-Vacunas-y-Medicamentos.webp" class="card-img-top" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos</h5>
                    <a class="button button-circle-orange" href="./monitoreo-de-temperatura-en-almacenamiento-de-vacunas-y-medicamentos.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/no-magnetico.jpg" class="card-img-top" alt="Sensores en Ambientes de Campos Magnéticos Fuertes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores en Ambientes de Campos Magnéticos Fuertes</h5>
                    <a class="button button-circle-orange" href="soluciones-con-sensores-no-magneticos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/guantes.png" class="card-img-top" alt="Rehabilitación con guantes robóticos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Rehabilitación con guantes robóticos</h5>
                    <a class="button button-circle-orange" href="rehabilitacion-con-guantes-roboticos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bascula.jpg" class="card-img-top" alt="Báscula de miligramos de alta precisión" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Báscula de miligramos de alta precisión</h5>
                    <a class="button button-circle-orange" href="bascula-de-miligramos-de-alta-precision">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/mordedura.png" class="card-img-top" alt="Medición de la Fuerza de Mordida en Pacientes con Demencia" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la Fuerza de Mordida en Pacientes con Demencia</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-mordedura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/adn.png" class="card-img-top" alt="Síntesis de ADN" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Síntesis de ADN</h5>
                    <a class="button button-circle-orange" href="sintesis-de-adn">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bolsas.png" class="card-img-top" alt="Pesaje de bolsas médicas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pesaje de bolsas médicas</h5>
                    <a class="button button-circle-orange" href="pesaje-de-bolsas-medicas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/piernas.png" class="card-img-top" alt="Medición de Fuerzas de Tensión en Exoesqueletos de Rehabilitación para la Marcha" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Fuerzas de Tensión en Exoesqueletos de Rehabilitación para la Marcha</h5>
                    <a class="button button-circle-orange" href="dispositivo-robotico-de-rehabilitacion-de-piernas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/guia-medica.png" class="card-img-top" alt="Cable guía para procesos quirúrgicos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Cable guía para procesos quirúrgicos</h5>
                    <a class="button button-circle-orange" href="prueba-de-cable-guia-para-procesos-quirurgicos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tavar.png" class="card-img-top" alt="Durabilidad de válvula para catéter" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Durabilidad de válvula para catéter</h5>
                    <a class="button button-circle-orange" href="durabilidad-de-valvula-para-cateter">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/laparoscopia.jpg" class="card-img-top" alt="Calibración de herramientas laparoscópicas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Calibración de herramientas laparoscópicas</h5>
                    <a class="button button-circle-orange" href="calibracion-de-herramientas-laparoscopicas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/elevador.png" class="card-img-top" alt="Monitorización de peso en equipos de elevación para pacientes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitorización de peso en equipos de elevación para pacientes</h5>
                    <a class="button button-circle-orange" href="monitorizacion-de-peso-en-equipos-de-elevacion-para-pacientes">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/biomedica.png" class="card-img-top" alt="Pruebas de Biomateriales" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de Biomateriales</h5>
                    <a class="button button-circle-orange" href="investigacion-biomedica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bascula-multipesaje.png" class="card-img-top" alt="Automatización de Líneas de Producción" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Líneas de Producción</h5>
                    <a class="button button-circle-orange" href="bascula-de-pesaje-multiple">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/botellas.png" class="card-img-top" alt="Llenado automático de botellas y líquidos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Llenado automático de botellas y líquidos</h5>
                    <a class="button button-circle-orange" href="llenado-automatico-de-botellas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/jeringa.png" class="card-img-top" alt="Pruebas de jeringas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de jeringas</h5>
                    <a class="button button-circle-orange" href="pruebas-de-jeringas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/fluidos.png" class="card-img-top" alt="Medición del caudal de fluidos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición del caudal de fluidos</h5>
                    <a class="button button-circle-orange" href="medicion-del-caudal-de-fluidos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pastillas.png" class="card-img-top" alt="Medición de fuerza de compresión en píldoras" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de fuerza de compresión en píldoras</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-compresion-en-pildoras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cateter.jpg" class="card-img-top" alt="Medición de fuerza en catéter" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de fuerza en catéter</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-en-cateter">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/endoscopia.jpg" class="card-img-top" alt="Control de fuerza en endoscopía" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de fuerza en endoscopía</h5>
                    <a class="button button-circle-orange" href="control-de-fuerza-en-endoscopia">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tapas.png" class="card-img-top" alt="Prensa de tapas automática" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prensa de tapas automática</h5>
                    <a class="button button-circle-orange" href="prensa-de-tapas-automatica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/seguimiento-cateter.png" class="card-img-top" alt="Prueba de fuerza de seguimiento del catéter" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fuerza de seguimiento del catéter</h5>
                    <a class="button button-circle-orange" href="prueba-de-fuerza-de-seguimiento-del-cateter">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tuberias.png" class="card-img-top" alt="Medición de expansión de tubos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de expansión de tubos</h5>
                    <a class="button button-circle-orange" href="medicion-de-expansion-de-tubos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dual.png" class="card-img-top" alt="Control de nivel de tanque dual" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de nivel de tanque dual</h5>
                    <a class="button button-circle-orange" href="control-de-nivel-de-tanque-dual">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pruebas-oem.png" class="card-img-top" alt="Banco de pruebas OEM" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Banco de pruebas OEM</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-oem">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/prostetico.png" class="card-img-top" alt="Análisis de Marcha en Prótesis Robóticas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Simulador de pie prostético</h5>
                    <a class="button button-circle-orange" href="simulador-de-pie-prostetico">Ver</a>
                </div>
            </div>
        </div>
    </section>

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
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>