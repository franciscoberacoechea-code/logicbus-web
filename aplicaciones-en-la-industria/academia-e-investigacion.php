<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Academia e Investigación | Logicbus</title>
    <meta name="description" content="En el ámbito académico y de investigación, la automatización desempeña un papel crucial para mejorar la precisión, eficiencia y consistencia en una amplia variedad de experimentos y pruebas.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Academia e Investigación</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Prueba de Fuerza del Pedal de Helicóptero" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Prueba de Fuerza del Pedal de Helicóptero" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Academia e Investigación</h1>
        </div>
    </section>

    <!--INTRO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">En el ámbito académico y de investigación, la automatización desempeña un papel crucial para mejorar la precisión, eficiencia y consistencia en una amplia variedad de experimentos y pruebas. Desde la ingeniería mecánica hasta las ciencias del comportamiento, las aplicaciones automatizadas permiten a investigadores y académicos realizar mediciones precisas, recolectar datos en tiempo real y obtener resultados más confiables.</p>
        </div>
    </section>

    <!-- Section Aplicaciones-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/resorte.png" class="card-img-top" alt="Sistemas de Prueba de Resortes Automatizados" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sistemas de Prueba de Resortes Automatizados</h5>
                    <a class="button button-circle-orange" href="sistema-de-prueba-de-resorte">Ver</a>
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
                <img src="img/sujeto.jpg" class="card-img-top" alt="Monitoreo conductual de sujetos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo conductual de sujetos</h5>
                    <a class="button button-circle-orange" href="monitoreo-conductual-de-sujetos">Ver</a>
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
                <img src="img/elevador.png" class="card-img-top" alt="Monitorización de peso en equipos de elevación para pacientes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitorización de peso en equipos de elevación para pacientes</h5>
                    <a class="button button-circle-orange" href="monitorizacion-de-peso-en-equipos-de-elevacion-para-pacientes">Ver</a>
                </div>
            </div>
        </div>
    </section>

    <!--CLIENTES-->
    <section class="container my-5">
        <h2 class="subtitle blue text-center my-5">Nuestros Clientes de la Industria</h2>
        <div class="row justify-content-center">
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/CIDESI.webp" alt="CIDESI" title="CIDESI" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/COMMIMSA.webp" alt="COMMIMSA" title="COMMIMSA" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/IPN.webp" alt="IPN" title="IPN" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/iteso.webp" alt="ITESO" title="ITESO" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/TECNOLOGICO-DE-MONTERREY.webp" alt="Tecnológico de Monterrey" title="Tecnológico de Monterrey" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/UNAM.webp" alt="UNAM" title="UNAM" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/university-of-wisconsin.webp" alt="University of Wisconsin" title="University of Wisconsin" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter" src="../images/clientes/UTD.webp" alt="UTD" title="UTD" width="100%">
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