<?php
require("../../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones Ferroviarias | Logicbus</title>
    <meta name="description" content="La automatización está revolucionando la industria marítima, mejorando la eficiencia operativa, la seguridad en navegación y la sostenibilidad en cada fase de las operaciones marítimas.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones Ferroviarias </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/ferroviaria.png" alt="Banner" alt="Aplicaciones Ferroviarias">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones Ferroviarias</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está impulsando la modernización de la industria ferroviaria, mejorando la seguridad, eficiencia y capacidad operativa de los sistemas ferroviarios. Desde trenes autónomos y sistemas de control de tráfico avanzados hasta tecnologías de monitoreo en tiempo real para mantenimiento predictivo, la automatización permite una operación más rápida, segura y rentable. Estos avances optimizan el uso de la infraestructura existente, reducen los tiempos de viaje y aumentan la frecuencia y puntualidad de los servicios ferroviarios.</p>
            <p class="paragraph light-black text-justify">Además, la automatización en la industria ferroviaria contribuye a la sostenibilidad, al mejorar la eficiencia energética y reducir las emisiones. Tecnologías como el Internet de las Cosas (IoT) y la inteligencia artificial permiten una gestión de flotas y rutas en tiempo real, adaptándose rápidamente a cambios en la demanda y en el entorno operativo.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está redefiniendo el futuro de la industria ferroviaria, ofreciendo un transporte más confiable, seguro y sostenible para el mundo en movimiento.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
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
        </div>
    </section>

    <!--CLIENTES-->
    <section class="container my-5">
        <h2 class="subtitle blue text-center my-5">Nuestros Clientes de la Industria</h2>
        <div class="row justify-content-center">
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../../images/clientes/ALSTOM.webp" alt="ALSTOM" title="ALSTOM" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../../images/clientes/BOMBARDIER.webp" alt="BOMBARDIER" title="BOMBARDIER" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../../images/clientes/FERRO-SUR.webp" alt="Ferro Sur" title="Ferro Sur" width="100%">
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

    <?php require("../../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>