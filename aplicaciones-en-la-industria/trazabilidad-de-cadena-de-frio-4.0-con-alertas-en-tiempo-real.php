<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real | Logicbus</title>
    <meta name="description"
        content="Transforma un almacén frigorífico pasivo en un sistema inteligente que avisa antes de que los productos perecederos se dañen.">
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
                <li class="breadcrumb-item active" aria-current="page">Trazabilidad de Cadena de Frío 4.0 con Alertas en
                    Tiempo Real</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Trazabilidad de Cadena de Frío 4.0 con Alertas en
                Tiempo Real</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.webp" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../madgetech"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>
                    <a href="../cincoze"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cincoze.webp"
                            alt="Cincoze" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Transforma un almacén frigorífico pasivo en un sistema inteligente que "avisa"
                    antes de que los productos perecederos se dañen.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Nube de Sensores Inalámbricos:</b>Se distribuyen múltiples data loggers
                        inalámbricos <a
                            href="https://tienda.logicbus.com.mx/RFRHTEMP2000A_p_6664.html">RFRHTemp2000A(Temperatura y
                            Humedad con pantalla LCD)</a> en los racks de las cámaras
                        frigoríficas. Estos eliminan el costo de cableado en zonas aisladas.
                    </li>

                    <li class="mb-3"><b>Transmisión en Vivo:</b> Los loggers envían sus datos vía radiofrecuencia (RF) a
                        un transceptor <a href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html">RFC1000</a>,
                        conectado a una PC central <a
                            href="https://tienda.logicbus.com.mx/CV-115R-P1101-N42-4G-500G-GST60_p_34471.html">CV-115R-P1101-N42-4G-500G-GST60</a>
                    </li>

                    <li class="mb-3"><b>Alarma configurables:</b> Si una cámara sube de -20°C a -10°C, el sistema
                        dispara una alarma visual, por buzzer y alertas configurables por email o texto permitiendo a
                        los usuarios tomar acciones inmediatas.
                    </li>

                    <li class="mb-3"><b>Reportes detallados:</b> Con el software de escritorio <a
                            href="https://www.logicbus.com.mx/madgetech-4-standard">MadgeTech 4</a> puedes generar
                        reportes que te ayudan a verificar cuando hubo un evento, además de que puedes generar
                        gráficas, tablas y mucho más.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b>Los dataloggers <a
                            href="https://tienda.logicbus.com.mx/RFRHTEMP2000A_p_6664.html">RFRHTemp2000A</a> tienen
                        pantalla local para que el operario verifique la temperatura al pasar.</b></li>
                <li class="mb-3"><b>Respuesta inmediata ante puertas abiertas o fallas de energía, salvando el
                        inventario.</b></li>
                <li class="mb-3"><b>Cumplimiento automatizado de normativas (TIF, FDA) sin llenar bitácoras de
                        papel.</b></li>
                <li class="mb-3"><b>Visibilidad remota total del estado del almacén desde cualquier celular.</b></li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/rfrhtemp2000a.jpg" alt="RFRHTemp2000A"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFRHTemp2000A</p>
                <p>Registrador inalámbrico para temperatura (-20 a 60°C) y humedad (0 a 95%) con LCD de dos vías,
                    memoria de 16128 lecturas por canal, distancia de transmisión de 152m, batería con duración de 3
                    años (a una lectura por minuto). Incluye certificado NIST
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFRHTEMP2000A_p_6664.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/cv-115r-p1101-n42-4g-500g-gst60.jpg"
                    alt="CV-115R-P1101-N42-4G-500G-GST60" width="150px">
                <p class="font-weight-bold mt-2 mb-0">CV-115R</p>
                <p>Panel PC, pantalla táctil resistiva de 15", Resolución 1024x768, LED 350nits. Frontal IP65. </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LYOTEMP_p_9027.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/rfc1000_1.jpg" alt="RFC1000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RFC1000</p>
                <p>Transceptor inalámbrico para las series RFOT y RF2000A.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFC1000_p_4446.html"
                    target="_blank">Comprar</a>
            </div>


        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/KHajD90pYLw?si=3iIA_ixTvcKjCRJu"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/trazabilidad-de-cadena-de-frio-4-0-con-alertas-en-tiempo-real/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Trazabilidad-de-Cadena-de-Frio-4.0-con-Alertas-en-Tiempo-Real.webp"
                        alt="Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real" width="100%">Trazabilidad de
                    Cadena de Frío 4.0 con Alertas en Tiempo Real
                </a>
            </div>
        </div>
    </section>
    <!--INDUSTRIAS-->
    <section class="container">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="oem">
                        <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="ensayos-de-materiales">
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
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