<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Contrucción | Logicbus</title>
    <meta name="description" content="La automatización está transformando la industria de la construcción, introduciendo soluciones innovadoras que mejoran la precisión, reducen costos y optimizan los tiempos de entrega en proyectos de todo tipo.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Construcción</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Construcción" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Construcción" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Construcción</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está transformando la industria de la construcción, introduciendo soluciones innovadoras que mejoran la precisión, reducen costos y optimizan los tiempos de entrega en proyectos de todo tipo. Desde maquinaria autónoma para excavación y demolición hasta impresoras 3D que construyen estructuras completas, la automatización permite llevar a cabo procesos complejos de forma más rápida y segura. Estas tecnologías no solo agilizan la construcción, sino que también elevan la calidad, minimizan el desperdicio de materiales y mejoran la seguridad en el lugar de trabajo.</p>
            <p class="paragraph light-black text-justify">Además, la automatización en la construcción facilita la gestión de proyectos y permite la integración de tecnologías avanzadas, como el modelado digital de edificios (BIM) y el monitoreo remoto, que brindan una supervisión continua y optimización en tiempo real.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está moldeando el futuro de la construcción, haciendo posible una industria más eficiente, precisa y sostenible.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dosificacion.png" class="card-img-top" alt="Pesaje de dosificación" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pesaje de dosificación</h5>
                    <a class="button button-circle-orange" href="pesaje-de-dosificacion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/medicion-de-nivel-en-silos-de-cemento-y-clinker.png" class="card-img-top"
                    alt="Medición de Nivel en Silos de Cemento y Clinker" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Nivel en Silos de Cemento y Clinker</h5>
                    <a class="button button-circle-orange"
                        href="./medicion-de-nivel-en-silos-de-cemento-y-clinker.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento.png" class="card-img-top"
                    alt="Automatización del Sistema de Envasado y Ensacado de Cemento"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización del Sistema de Envasado y Ensacado de Cemento</h5>
                    <a class="button button-circle-orange"
                        href="./automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/transporte-autonomo-de-materiales-entre-zonas-clasificadas.png" class="card-img-top"
                    alt="Transporte Autónomo de Materiales entre Zonas Clasificadas"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Transporte Autónomo de Materiales entre Zonas Clasificadas</h5>
                    <a class="button button-circle-orange"
                        href="./transporte-autonomo-de-materiales-entre-zonas-clasificadas.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/flujo-de-masa.png" class="card-img-top" alt="Medición del Flujo de Masa de Partículas Sólidas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición del flujo de masa de partículas sólidas</h5>
                    <a class="button button-circle-orange" href="medicion-del-flujo-de-masa-de-particulas-solidas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/residuos.png" class="card-img-top" alt="Monitoreo de la Capacidad en Contenedores de Residuos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de la capacidad en contenedores de residuos</h5>
                    <a class="button button-circle-orange" href="monitoreo-de-la-capacidad-en-contenedores-de-residuos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dual.png" class="card-img-top" alt="Control de nivel de tanque dual" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de nivel de tanque dual</h5>
                    <a class="button button-circle-orange" href="control-de-nivel-de-tanque-dual">Ver</a>
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