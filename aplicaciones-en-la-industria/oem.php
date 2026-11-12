<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en OEM | Logicbus</title>
    <meta name="description" content="La automatización está transformando la industria de OEM, permitiendo a las empresas mejorar la eficiencia de producción, asegurar la calidad de los componentes y optimizar la cadena de suministro.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en OEM</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en OEM" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en OEM" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en OEM</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está transformando la industria de Fabricantes de Equipo Original (OEM), permitiendo a las empresas mejorar la eficiencia de producción, asegurar la calidad de los componentes y optimizar la cadena de suministro. Con tecnologías automatizadas, como sistemas de ensamblaje robótico, inspección de calidad asistida por inteligencia artificial y gestión avanzada de inventarios, los fabricantes OEM pueden garantizar que cada pieza cumpla con los estándares más exigentes. Además, la automatización facilita la personalización en masa, permitiendo que las líneas de producción se adapten a las necesidades de diferentes clientes sin sacrificar la productividad.</p>
            <p class="paragraph light-black text-justify">La automatización no solo mejora los tiempos de respuesta, sino que también minimiza el desperdicio de materiales, reduce costos y asegura una fabricación sostenible.</p>
            <p class="paragraph light-black text-justify">Descubre cómo la automatización está redefiniendo la industria OEM, impulsando una fabricación más eficiente y fiable que contribuye al desarrollo de productos de alta calidad en distintos sectores.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/impacto.jpg" class="card-img-top" alt="Medición de la Fuerza de Impacto" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la fuerza de impacto</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-impacto">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                    <img src="img/Pruebas-de-Calidad-y-Validacion-de-Componentes-Electronicos.webp" class="card-img-top"
                        alt="Pruebas de Calidad y Validación de Componentes Electrónicos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de Calidad y Validación de Componentes Electrónicos</h5>
                        <a class="button button-circle-orange"
                            href="./pruebas-de-calidad-y-validacion-de-componentes-electronicos.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Automatizacion-en-Lineas-de-Ensamblaje-Electronico.webp" class="card-img-top"
                        alt="Automatización en Líneas de Ensamblaje Electrónico"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización en Líneas de Ensamblaje Electrónico</h5>
                        <a class="button button-circle-orange"
                            href="./automatizacion-en-lineas-de-ensamblaje-electronico.php">Ver</a>
                    </div>
                </div>
            <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/sensores-ciclicos.png" class="card-img-top"
                        alt="Monitoreo de Controles de Vuelo con Celdas de Carga de Cambio de Marchas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de controles de vuelo con celdas de carga de cambio de
                            marchas</h5>
                            <a class="button button-circle-orange" href="sensores-ciclicos-para-helicopteros">Ver</a>
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
                <img src="img/mordedura.png" class="card-img-top" alt="Medición de la Fuerza de Mordida en Pacientes con Demencia" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la Fuerza de Mordida en Pacientes con Demencia</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-mordedura">Ver</a>
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
                <img src="img/pesas.png" class="card-img-top" alt="Sensores de peso para equipos de entrenamiento de gimnasio" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de peso para equipos de entrenamiento de gimnasio</h5>
                    <a class="button button-circle-orange" href="sensores-de-peso-para-equipos-de-entrenamiendo-de-gimnasio">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/marte.png" class="card-img-top" alt="Celda de carga criogénica para su uso en el explorador de Marte" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Celda de carga criogénica para su uso en el explorador de Marte</h5>
                    <a class="button button-circle-orange" href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte">Ver</a>
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
                <img src="img/freno.jpg" class="card-img-top" alt="Frenos por sistema de cableado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Frenos por sistema de cableado</h5>
                    <a class="button button-circle-orange" href="freno-por-sistema-de-cableado">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/barco.png" class="card-img-top" alt="Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga</h5>
                    <a class="button button-circle-orange" href="./transporte/tension-de-las-velas-de-un-navio.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/simulador.png" class="card-img-top" alt="Simulador de fuerza con retroalimentación" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Simulador de fuerza con retroalimentación</h5>
                    <a class="button button-circle-orange" href="simulador-de-fuerza-con-retroalimentacion">Ver</a>
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
                <img src="img/endoscopia.jpg" class="card-img-top" alt="Control de fuerza en endoscopía" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de fuerza en endoscopía</h5>
                    <a class="button button-circle-orange" href="control-de-fuerza-en-endoscopia">Ver</a>
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
                <img src="img/motor-oem.png" class="card-img-top" alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</h5>
                    <a class="button button-circle-orange" href="soporte-de-torque-de-reaccion-para-motores-electricos-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bisagras.png" class="card-img-top" alt="Medición de Torque en Bisagras de Torsión, Fricción Posición" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Torque en Bisagras de Torsión, Fricción Posición</h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-bisagras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/taladro.png" class="card-img-top" alt="Medición de Torque en Piezas de Mano Dentales Eléctricas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Torque en Piezas de Mano Dentales Eléctricas</h5>
                    <a class="button button-circle-orange" href="medicion-de-torque-en-taladro-dental">Ver</a>
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