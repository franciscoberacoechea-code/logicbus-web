<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Agricultura | Logicbus</title>
    <meta name="description"
        content="La agricultura moderna enfrenta grandes desafíos: aumentar la producción para una población en constante crecimiento, optimizar el uso de recursos naturales, y adaptarse a los efectos del cambio climático.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Agricultura</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Agricultura"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Agricultura" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Agricultura</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La agricultura moderna enfrenta grandes desafíos: aumentar la
                producción para una población en constante crecimiento, optimizar el uso de recursos naturales, y
                adaptarse a los efectos del cambio climático. La automatización agrícola surge como una solución
                innovadora que está revolucionando la industria. Desde el uso de drones para monitoreo de cultivos,
                hasta maquinaria autónoma para siembra y recolección, la automatización está transformando cada etapa
                del ciclo agrícola. Esta tecnología no solo mejora la eficiencia operativa, sino que también permite a
                los agricultores tomar decisiones más informadas, reducir costos y minimizar el impacto ambiental.</p>
            <p class="paragraph light-black text-justify">Descubre cómo la automatización está cambiando el futuro de la
                agricultura, haciendo posible una producción más sostenible y rentable.</p>
        </div>
    </section>

    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/penetrometro.png" class="card-img-top" alt="Medición de la Madurez de Frutas y Verduras"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la madurez de frutas y verduras</h5>
                    <a class="button button-circle-orange" href="medicion-de-la-madurez-de-frutas-y-verduras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dosificacion.png" class="card-img-top" alt="Pesaje de dosificación"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pesaje de dosificación</h5>
                    <a class="button button-circle-orange" href="pesaje-de-dosificacion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/flujo-de-masa.png" class="card-img-top"
                    alt="Medición del Flujo de Masa de Partículas Sólidas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición del flujo de masa de partículas sólidas</h5>
                    <a class="button button-circle-orange"
                        href="medicion-del-flujo-de-masa-de-particulas-solidas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dispensador-tanque.png" class="card-img-top" alt="Distribución de Contenidos en Tanques"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Distribución de contenidos en tanques</h5>
                    <a class="button button-circle-orange" href="distribucion-de-contenidos-en-tanques">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/oktoberfest.png" class="card-img-top"
                    alt="Monitoreo de Tanques de Fermentación en Cervecerías" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de tanques de fermentación en cervecerías</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-de-tanques-de-fermentacion-en-cervecerias">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/resorte.png" class="card-img-top" alt="Sistemas de Prueba de Resortes Automatizados"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sistemas de Prueba de Resortes Automatizados</h5>
                    <a class="button button-circle-orange" href="sistema-de-prueba-de-resorte">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/silos.png" class="card-img-top" alt="Medición de silos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de silos</h5>
                    <a class="button button-circle-orange" href="medicion-de-silos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/alimentador.png" class="card-img-top" alt="Alimentador avícola agrícola"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Alimentador avícola agrícola</h5>
                    <a class="button button-circle-orange" href="alimentador-avicola-agricola">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Monitoreo-de-Condiciones-en-Invernaderos.png" class="card-img-top"
                    alt="Monitoreo de Condiciones en Invernaderos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Condiciones en Invernaderos</h5>
                    <a class="button button-circle-orange" href="monitoreo-condiciones-invernaderos">Ver</a>
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