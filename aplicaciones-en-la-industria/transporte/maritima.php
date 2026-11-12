<?php
require("../../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones Maritimas | Logicbus</title>
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones Maritimas </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="../img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones de Transporte" class="hide-mobile">
        <img src="../img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones de Transporte" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones Maritimas</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está revolucionando la industria marítima, mejorando la eficiencia operativa, la seguridad en navegación y la sostenibilidad en cada fase de las operaciones marítimas. Desde la implementación de buques autónomos y sistemas de navegación asistida hasta la automatización en puertos y logística, estas tecnologías permiten reducir costos, minimizar el consumo de combustible y optimizar la gestión de rutas. Los sistemas avanzados de monitoreo y mantenimiento predictivo, impulsados por inteligencia artificial y el Internet de las Cosas (IoT), garantizan un funcionamiento más seguro y eficiente en el mar.</p>
            <p class="paragraph light-black text-justify">La automatización también permite una supervisión continua de las condiciones de los barcos y una respuesta rápida ante cambios en el entorno, lo cual reduce los tiempos de inactividad y mejora la seguridad para las tripulaciones y las mercancías.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está transformando la industria marítima, haciendo posible un transporte más eficiente, seguro y respetuoso con el medio ambiente.</p>
        </div>
    </section>

    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="../img/barco.png" class="card-img-top" alt="Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga</h5>
                    <a class="button button-circle-orange" href="./tension-de-las-velas-de-un-navio.php">Ver</a>
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

    <?php require("../../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>