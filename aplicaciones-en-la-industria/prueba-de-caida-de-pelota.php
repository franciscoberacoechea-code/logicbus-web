<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Caída de Pelota | Logicbus</title>
    <meta name="description" content="La Prueba de Caída de Pelota es un procedimiento estandarizado que se utiliza para evaluar la resistencia al impacto y las características de absorción de energía de diversos materiales y productos.">
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
                <li class="breadcrumb-item active" aria-current="page">Prueba de Caída de Pelota</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Prueba de Caída de Pelota" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Prueba de Caída de Pelota" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Prueba de Caída de Pelota</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/bola.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="text-center light-black font-weight-bold">¿Qué es la prueba de caída de pelota?</p>
                <p class="light-black text-justify">La Prueba de Caída de Pelota es un procedimiento estandarizado que se utiliza para evaluar la resistencia al impacto y las características de absorción de energía de diversos materiales y productos. Consiste en dejar caer una bola de un peso y un diámetro específicos desde una altura predeterminada sobre la muestra de prueba. La fuerza de impacto que se genera al entrar en contacto con la muestra se mide para evaluar su capacidad de soportar tensiones relacionadas con el impacto.</p>
                <p class="light-black text-justify">Las pruebas de impacto se emplean ampliamente en diversas industrias. Algunos ejemplos incluyen:</p>
                <ul class="light-black text-justify">
                    <li class="mb-3">Pruebas de equipos deportivos: Las celdas de carga miden las fuerzas de impacto en los equipos deportivos, proporcionando información sobre el rendimiento y la seguridad para el bienestar de los atletas.</li>
                    <li class="mb-3">Pruebas de choque automotrices: Las células de carga miden la fuerza de impacto en pruebas de choque, analizando el rendimiento y la seguridad del vehículo integrándolas en maniquíes o estructuras.</li>
                    <li class="mb-3">Pruebas aeroespaciales y de defensa: las células de carga evalúan la resistencia al impacto, la integridad estructural y la seguridad en las industrias aeroespaciales y de defensa, ayudando en el análisis de colisiones y aterrizajes de emergencia.</li>
                    <li class="mb-3">Industria del embalaje: Las células de carga evalúan las fuerzas de impacto durante el transporte y la manipulación, protegiendo productos frágiles o sensibles con una medición precisa y una evaluación del material de embalaje.</li>
                </ul>
                <p class="light-black text-justify">Algunas normas relevantes relacionadas con la medición de la fuerza de impacto son:</p>
                <ul class="light-black text-justify">
                    <li class="mb-3">Métodos de prueba estándar ASTM E23 para pruebas de impacto de barras con entalla de materiales metálicos.</li>
                    <li class="mb-3">ISO 6487:2015 - Técnicas de medición en ensayos de impacto.</li>
                    <li class="mb-3">SAE J211: Instrumentación para pruebas de impacto.</li>
                    <li class="mb-3">ISO 2248:1985 Embalaje. Embalajes de transporte completos y llenos. Ensayo de impacto vertical por caída.</li>
                </ul>
                <p class="text-center light-black font-weight-bold">¿Cómo se utilizan las células de carga en los equipos de Prueba de Caída de Pelota?</p>
                <p class="light-black text-justify">Las celdas de carga que se utilizan en los probadores de caída de bola están diseñadas específicamente para soportar fuerzas de alto impacto y proporcionar mediciones confiables y repetibles. Al seleccionar cuidadosamente un sensor de fuerza de Prueba de Caída de Pelota con especificaciones apropiadas, como alta respuesta de frecuencia natural y sensibilidad, los ingenieros pueden medir las fuerzas de prueba de caída en una amplia gama de aplicaciones. Es importante destacar que la amortiguación del aparato de medición y la fijación puede afectar en gran medida los resultados en el sistema total.</p>
                <p class="light-black text-justify">Además, la presencia de masa adicional en el equipo de prueba puede afectar la precisión de la medición de la fuerza de impacto. Se debe tener cuidado para minimizar cualquier masa extraña que pueda interferir con la medición precisa de las fuerzas ejercidas durante la Prueba de Caída de Pelota. Dicho esto, es fundamental ensamblar una configuración de prueba que minimice los efectos de amortiguación en la fuerza ejercida para que el sensor de la celda de carga pueda capturar con precisión la fuerza de impacto exacta.</p>
            </div>
            <div class="container text-center">
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3">Se instala un sensor de par de microreacción QTA141 en línea con el motor de la pieza de mano y su soporte.</li>
                    <li class="mb-3">La señal generada por el QTA141 se transmite a la pantalla digital portátil IHH500 para su visualización.</li>
                    <li class="mb-3">La señal también se puede enviar a la solución USB de alta resolución USB220 para visualizar y registrar datos en una PC que ejecute nuestro software SENSIT.</li>
                    <li class="mb-3">Además, el registro de datos también se puede realizar con un IHH500 conectado a una PC que ejecute SENSIT.</li>
                    <li class="mb-3">Por último, con el controlador digital IDC305 con SPI, USB y salida analógica, la salida del sensor se puede capturar a través de SPI en un microcontrolador, USB y una PC con SENSIT, o a través de salida analógica en un PLC o DAQ.</li>
                    <li class="mb-3">Por último, con el controlador digital IDC305 con SPI, USB y salida analógica, la salida del sensor se puede capturar a través de SPI en un microcontrolador, USB y una PC con SENSIT, o a través de salida analógica en un PLC o DAQ.</li>
                </ol>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LLB500.jpg" alt="LLB500" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LLB500</p>
                <p>Celda de carga de tipo botón de alta capacidad</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04720.jpg" alt="USB520" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Módulo USB</p>
                <p>USB de alta resolución</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank">Comprar</a>
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