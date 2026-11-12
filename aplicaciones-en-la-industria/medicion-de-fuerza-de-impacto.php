<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medición de la Fuerza de Impacto | Logicbus</title>
    <meta name="description" content="La medición de la fuerza de impacto implica capturar las fuerzas dinámicas que se generan durante un evento de colisión.">
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
                <li class="breadcrumb-item active" aria-current="page">Medición de la Fuerza de Impacto</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Medición de la Fuerza de Impacto" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Medición de la Fuerza de Impacto" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Medición de la Fuerza de Impacto</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/impacto.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="text-center light-black font-weight-bold">¿Cómo medir la fuerza de impacto?</p>
                <p class="light-black">La medición de la fuerza de impacto implica capturar las fuerzas dinámicas que se generan durante un evento de colisión. Se utiliza a menudo en diversas máquinas y entornos de prueba para garantizar la seguridad y la durabilidad del diseño de una aplicación. Uno de los métodos más confiables para medir la fuerza de impacto es mediante el uso de sensores de fuerza de impacto, que también se conocen como celdas de carga basadas en galgas extensométricas.</p>

                <p class="light-black">Un sistema de medición de fuerza de impacto generalmente consta de una celda de carga de respuesta de alta frecuencia, electrónica de acondicionamiento de señal de alta frecuencia de muestreo y capacidades de adquisición de datos. La celda de carga desempeña un papel crucial en la conversión de la fuerza mecánica hiperrápida que se produce en milisegundos (el impacto) en una señal eléctrica que se puede medir y analizar.</p>

                <p class="light-black">Las aplicaciones comunes en las que se pueden utilizar células de carga en la medición de fuerza de impacto son:</p>
                <ul>
                    <li class="mb-3"><b>Pruebas de materiales:</b> Las celdas de carga miden la resistencia al impacto y la fuerza de los materiales, lo que garantiza el cumplimiento de las normas de seguridad en la construcción y otras industrias.</li>
                    <li class="mb-3"><b>Pruebas de choque automotrices:</b> Las células de carga miden la fuerza de impacto en pruebas de choque, analizando el rendimiento y la seguridad del vehículo integrándolas en maniquíes o estructuras.</li>
                    <li class="mb-3"><b>Pruebas de equipos deportivos:</b> las celdas de carga miden las fuerzas de impacto en los equipos deportivos, lo que proporciona información sobre el rendimiento y la seguridad para el bienestar de los atletas.</li>
                    <li class="mb-3"><b>Pruebas aeroespaciales y de defensa:</b> las células de carga evalúan la resistencia al impacto, la integridad estructural y la seguridad en las industrias aeroespaciales y de defensa, ayudando en el análisis de colisiones y aterrizajes de emergencia.</li>
                    <li class="mb-3"><b>Industria del embalaje:</b> Las células de carga evalúan las fuerzas de impacto durante el transporte y la manipulación, protegiendo productos frágiles o sensibles con una medición precisa y una evaluación del material de embalaje.</li>
                </ul>
            </div>
            <div class="container text-justify">
                <p class="light-black">Algunas normas relevantes relacionadas con la medición de la fuerza de impacto en diversas industrias:</p>
                <ul>
                    <li class="mb-3">ISO 6487:2015 - Técnicas de medición en ensayos de impacto.</li>
                    <li class="mb-3">Métodos de prueba estándar ASTM E23 para pruebas de impacto de barras con entalla de materiales metálicos.</li>
                    <li class="mb-3">SAE J211: Instrumentación para pruebas de impacto.</li>
                    <li class="mb-3">Prueba de martillo ambiental IEC 60068-2-75.</li>
                </ul>

                <p class="text-center light-black font-weight-bold">¿Cómo se utilizan las células de carga en los dispositivos de medición de fuerza de impacto?</p>

                <p class="light-black">Las celdas de carga de galgas extensométricas se utilizan comúnmente en la medición de fuerza de impacto debido a su alta precisión, confiabilidad y versatilidad. Los dispositivos de medición de fuerza de impacto incorporan celdas de carga para capturar y cuantificar las fuerzas de impacto con precisión. Al seleccionar cuidadosamente un sensor de fuerza de impacto con especificaciones apropiadas, como alta respuesta de frecuencia natural y sensibilidad, los ingenieros pueden medir fuerzas de impacto en una amplia gama de aplicaciones. Es importante destacar que la amortiguación del aparato de medición y los accesorios, y el sistema total, pueden afectar en gran medida los resultados. Dicho esto, es fundamental ensamblar una configuración de prueba que minimice los efectos de amortiguación en la fuerza ejercida para que el sensor pueda capturar con precisión la fuerza de impacto exacta en el sistema.</p>

                <p class="light-black">En cuanto a la selección de la solución adecuada para la medición de la fuerza de impacto, FUTEK ofrece una gama de sensores de fuerza de impacto de alta calidad que satisfacen las demandas incluso de los escenarios más desafiantes. Una solución altamente recomendada es el botón de carga LLB500, que proporciona un rendimiento excepcional con una respuesta de frecuencia de hasta ~20 kHz. Combinado con el USB225 Pro Elite, un acondicionador de señal digital USB capaz de muestrear señales de hasta 38.400 SPS, y el software de registro de datos SENSIT, se pueden capturar y analizar las fuerzas de pico y de impacto para lograr una precisión óptima.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3">Instalación de la celda de carga: Instale el botón de carga LLB500 en la ubicación deseada, asegurándose de que esté correctamente alineado y fijado a la estructura o al aparato de prueba. Asegúrese de que la superficie sea lo suficientemente rígida para evitar enmascarar o amortiguar la fuerza de impacto (es decir, superficies de madera en lugar de superficies metálicas).</li>
                    <li class="mb-3">Instalación del acondicionador de señal: Conecte la salida de la celda de carga al acondicionador de señal USB de alta frecuencia de muestreo USB225 Pro Elite, que amplifica y acondiciona la señal de salida mV/V del botón de carga.</li>
                    <li class="mb-3">Integración con el sistema de adquisición de datos: Conecte la salida del acondicionador de señal al puerto USB de su computadora portátil. Los datos recopilados se muestran, registran y grafican a través de nuestro software SENSIT™ en una computadora.</li>
                    <li class="mb-3">Recopilación y análisis de datos: inicie el sistema de adquisición de datos para capturar las mediciones de fuerza de impacto. Recopile datos durante los eventos de impacto y registre los valores de fuerza a una frecuencia de muestreo suficientemente alta. Analice los datos utilizando SENSIT para determinar las fuerzas máximas y evaluar el rendimiento del impacto.</li>
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