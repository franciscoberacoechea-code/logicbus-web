<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones Espaciales, Defensa y Aeronáutica | Logicbus</title>
    <meta name="description" content="La automatización es clave en el avance de las industrias espacial, de defensa y aeronáutica, donde la precisión, seguridad y confiabilidad son cruciales.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones Espaciales, Defensa y Aeronáutica</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones Espaciales, Defensa y Aeronáutica" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones Espaciales, Defensa y Aeronáutica" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones Espaciales, Defensa y Aeronáutica</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización es clave en el avance de las industrias espacial, de defensa y aeronáutica, donde la precisión, seguridad y confiabilidad son cruciales. Desde la fabricación de componentes aeroespaciales de alta precisión hasta el control de drones y sistemas autónomos de defensa, la automatización permite optimizar cada proceso, mejorando la eficiencia y minimizando el margen de error. En el ámbito espacial, la automatización impulsa misiones complejas, como el despliegue y monitoreo de satélites, así como la exploración planetaria, haciendo posibles logros que antes parecían inalcanzables.</p>
            <p class="paragraph light-black text-justify">Además, el uso de inteligencia artificial y robots autónomos permite la supervisión en tiempo real y el mantenimiento predictivo de aeronaves y equipos, reduciendo riesgos y maximizando la seguridad.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está redefiniendo el futuro de la industria espacial, de defensa y aeronáutica, permitiendo innovaciones que llevan la seguridad, precisión y capacidad operativa a un nivel sin precedentes.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/marte.png" class="card-img-top" alt="Celda de carga criogénica para su uso en el explorador de Marte" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Celda de carga criogénica para su uso en el explorador de Marte</h5>
                    <a class="button button-circle-orange" href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cohete.png" class="card-img-top" alt="Soporte de empuje de motor del cohete" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Soporte de empuje de motor del cohete</h5>
                    <a class="button button-circle-orange" href="soporte-de-empuje-del-motor-cohete">Ver</a>
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
                <img src="img/nasa.png" class="card-img-top" alt="Celdas de Carga Criogénicas para Satélite Suomi NPP | Monitoreo Ambiental" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Celdas de Carga Criogénicas para Satélite Suomi NPP | Monitoreo Ambiental</h5>
                    <a class="button button-circle-orange" href="celdas-de-carga-de-satelite-de-la-nasa">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/helicoptero.png" class="card-img-top" alt="rueba de fuerza del pedal de helicóptero" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fuerza del pedal de helicóptero</h5>
                    <a class="button button-circle-orange" href="prueba-de-fuerza-de-pedal-de-helicoptero">Ver</a>
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
                <img src="img/uav.png" class="card-img-top" alt="Fuerza de lanzamiento de UAV" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Fuerza de lanzamiento de UAV</h5>
                    <a class="button button-circle-orange" href="fuerza-de-lanzamiento-de-uav">Ver</a>
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
                <img src="img/vuelo.png" class="card-img-top" alt="Sensores de vuelo cableado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de vuelo cableado</h5>
                    <a class="button button-circle-orange" href="sensores-de-vuelo-cableado">Ver</a>
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
                <img src="img/tunel.png" class="card-img-top" alt="Pruebas en túnel de viento" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas en túnel de viento</h5>
                    <a class="button button-circle-orange" href="pruebas-en-tunel-de-viento">Ver</a>
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