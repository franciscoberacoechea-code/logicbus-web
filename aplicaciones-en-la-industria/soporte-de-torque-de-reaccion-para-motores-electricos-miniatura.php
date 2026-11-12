<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores de Torque de Reacción para Motores Eléctricos Miniatura | Logicbus</title>
    <meta name="description" content="Los sensores de par de reacción se utilizan a menudo como herramientas de auditoría y supervisión.">
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
    <li class="mb-3">
        <?php echo $var_body; ?>
        <?php require("../libreria/header.view.php"); ?>

        <!--RUTAS-->
        <section class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</li>
                </ol>
            </nav>
        </section>

        <!--BANNER-->
        <section class="card text-white" style="border: none; border-radius: 0;">
            <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura" class="hide-mobile">
            <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura" class="hide-desktop">
            <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
                <h1 class="banner-title white font-weight-bold mb-0">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</h1>
            </div>
        </section>

        <!--CONTENIDO-->
        <section class="container-fluid py-5">
            <div class="row justify-content-around">
                <div class="col-12 col-md-4">
                    <img src="./img/motor-oem.png" alt="Diagrama" width="100%">
                    <div class="text-center mt-5">
                        <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                        <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                    </div>
                </div>

                <div class="col-12 col-md-7 text-justify">
                    <p class="light-black">Los sensores de torque de reacción se utilizan frecuentemente como herramientas de auditoría y monitoreo. En esta aplicación, se emplea la Serie TFF de FUTEK (sensores de torque OEM) para medir el torque de reacción generado por un motor eléctrico miniatura de corriente continua (con escobillas/sin escobillas) o de corriente alterna, utilizando un amplificador de sensor de torque.</p>

                    <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                    <ol class="light-black">
                        <li class="mb-3">En esta configuración, un sensor de torque de reacción se monta en el motor eléctrico, permitiendo que el eje del motor pase libremente a través del sensor de torque.</li>
                        <li class="mb-3">Para lograr un rendimiento óptimo del sensor, es necesario fijar el extremo libre del sensor, como se muestra en la ilustración.</li>
                        <li class="mb-3">La Serie TFF mide los momentos de torsión/torque de reacción generados por el motor eléctrico miniatura durante su funcionamiento, actuando como un sensor de torque específico para motores eléctricos.</li>
                        <li class="mb-3">Estas mediciones son luego amplificadas mediante los amplificadores de la Serie IAA o IDA100 para su integración en PLCs y dispositivos de adquisición de datos, o bien, transmitidas directamente a una PC a través de USB con el IDA100.</li>
                        Además, con el IDA100, los operadores pueden visualizar y registrar los datos en tiempo real mediante el software SENSIT™ de FUTEK para Pruebas y Medición, lo que facilita <li class="mb-3">el monitoreo y análisis detallado del rendimiento del motor.</li>
                    </ol>
                    <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
                </div>
            </div>
        </section>

        <!--EQUIPOS RECOMENDADOS-->
        <section class="container py-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                    <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH03912.jpg" alt="IDA100" width="150px">
                    <p class="font-weight-bold mt-2 mb-0">IDA100</p>
                    <p>Amplificador de galgas extensométricas con salida digital y analógica</p>
                    <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">Comprar</a>
                </div>
                <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                    <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/TFF600.jpg" alt="TRD600" width="150px">
                    <p class="font-weight-bold mt-2 mb-0">Serie TFF</p>
                    <p>Sensor de par rotatorio</p>
                    <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion" target="_blank">Comprar</a>
                </div>
                <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                    <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04453.jpg" alt="IAA105" width="150px">
                    <p class="font-weight-bold mt-2 mb-0">Serie IAA</p>
                    <p>Amplificador de voltaje analógico configurable digitalmente</p>
                    <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04453_p_36735.html" target="_blank">Comprar</a>
                </div>
            </div>
        </section>

        <!--VIDEOS-->
        <section class="container-fluid py-5">
            <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
            <div class="row justify-content-center my-5">
                <div class="col-12 col-md-4">
                    <div class="embed-container">
                        <iframe src="https://www.youtube.com/embed/j5yf6HRaWSQ?si=ba9OFrOv8JUmgxz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="embed-container">
                        <iframe src="https://www.youtube.com/embed/oET32jL106c?si=hr5bgIqBnyezNooq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="embed-container">
                        <iframe src="https://www.youtube.com/embed/cp9xINRLz1U?si=_gHVv5Qmb0DX2FLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!--ARTICULOS-->
        <section class="container-fluid py-5">
            <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
            <div class="row justify-content-center my-5">
                <div class="col-12 col-md-4">
                    <a href="http://https://www.logicbus.com.mx/blog/por-que-es-importante-calibrar-las-celdas-de-carga-y-los-sensores-de-torque/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/%C2%BFPor-que-es-importante-calibrar-una-celda-de-carga.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="https://www.logicbus.com.mx/blog/display-exclusivo-para-celdas-de-carga/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Display-exclusivo-para-celdas-de-carga.png" alt="" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="https://www.logicbus.com.mx/blog/celdas-de-carga-en-el-control-de-procesos/" target="_blank" rel="noopener noreferrer">
                        <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/CELDAS-DE-CARGA-EN-EL-CONTROL-DE-PROCESOS.png" alt="" width="100%">
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
                            <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Academia e Investigación</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="agricultura">
                            <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Agricultura</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="alimentos-y-bebidas">
                            <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="automotriz">
                            <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Automotriz</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="construccion">
                            <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                            <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="farmaceutica-y-laboratorio">
                            <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="robotica">
                            <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Robótica</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white" href="">
                            <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title link-orange">Transporte</h5>
                            </div>
                        </a>
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