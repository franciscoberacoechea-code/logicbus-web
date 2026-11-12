<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Robótica | Logicbus</title>
    <meta name="description" content="La industria de la robótica es, por naturaleza, un espacio donde la automatización impulsa la innovación y expansión de capacidades.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Robótica</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Robótica" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Robótica" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Robótica</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La industria de la robótica es, por naturaleza, un espacio donde la automatización impulsa la innovación y expansión de capacidades. Desde la fabricación de componentes robóticos de precisión hasta el desarrollo de sistemas autónomos que pueden operar de manera independiente, la automatización permite a los fabricantes de robots aumentar la eficiencia y reducir el margen de error en cada etapa del proceso. Tecnologías avanzadas, como la inteligencia artificial, el aprendizaje automático y la simulación en tiempo real, están integrándose en el diseño y ensamblaje de robots, dando lugar a dispositivos cada vez más inteligentes, flexibles y seguros.</p>
            <p class="paragraph light-black text-justify">Gracias a la automatización, los procesos de producción se vuelven más rápidos y eficientes, permitiendo el desarrollo de robots más sofisticados para una amplia gama de aplicaciones, desde la manufactura y la medicina, hasta la exploración espacial y el hogar.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está impulsando el futuro de la industria de la robótica, abriendo paso a soluciones que transforman industrias y mejoran la calidad de vida.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/brazo.png" class="card-img-top" alt="Brazo robótico automatizado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Brazo robótico automatizado</h5>
                    <a class="button button-circle-orange" href="brazo-robotico-automatizado">Ver</a>
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
                <img src="img/guantes.png" class="card-img-top" alt="Rehabilitación con guantes robóticos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Rehabilitación con guantes robóticos</h5>
                    <a class="button button-circle-orange" href="rehabilitacion-con-guantes-roboticos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/mano.jpg" class="card-img-top" alt="Detección táctil robótica" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Detección táctil robótica</h5>
                    <a class="button button-circle-orange" href="deteccion-tactil-robotica">Ver</a>
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