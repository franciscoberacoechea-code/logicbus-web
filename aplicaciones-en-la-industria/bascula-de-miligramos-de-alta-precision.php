<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báscula de Miligramos de Alta Precisión | Logicbus</title>
    <meta name="description" content="En la industria farmacéutica, la dosificación precisa es fundamental. Las básculas de miligramos de alta precisión son herramientas de medición esenciales para garantizar que las empresas...">
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
                <li class="breadcrumb-item active" aria-current="page">Báscula de Miligramos de Alta Precisión</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Báscula de Miligramos de Alta Precisión" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Báscula de Miligramos de Alta Precisión" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Báscula de Miligramos de Alta Precisión</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/bascula.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">En la industria farmacéutica, la dosificación precisa es fundamental. Las básculas de miligramos de alta precisión son herramientas de medición esenciales para garantizar que las empresas farmacéuticas logren consistencia en el proceso de fabricación y cumplan con los estrictos requisitos de control de calidad al ofrecer los siguientes beneficios:</p>
                <ul class="light-black">
                    <li class="mb-3"><b>Precisión mejorada:</b> Las básculas de miligramos de alta precisión brindan una precisión superior, debido a una mayor resolución y sensibilidad, lo que permite que las básculas detecten incluso las variaciones más pequeñas en el peso.</li>
                    <li class="mb-3"><b>Cumplimiento de las normas regulatorias:</b> la industria farmacéutica está fuertemente regulada y, como tal, es imperativo cumplir con estrictas pautas de control de calidad. Las básculas de miligramos de alta precisión desempeñan un papel vital en el cumplimiento de estas normas, lo que permite a los fabricantes cumplir con los requisitos regulatorios y mantener el más alto nivel de seguridad y eficacia del producto.</li>
                    <li class="mb-3"><b>Garantía de calidad:</b> los errores de medicación pueden tener consecuencias graves para los pacientes. La escala de miligramos para medicamentos es una herramienta confiable para garantizar la calidad, ya que minimiza el riesgo de errores de cálculo de dosis, contaminación cruzada e inconsistencias en la formulación.</li>
                    <li class="mb-3"><b>Investigación y desarrollo:</b> En los laboratorios de investigación y desarrollo (I+D), donde se desarrollan nuevas formulaciones de medicamentos, es indispensable contar con una escala de mg precisa. Permiten mediciones precisas de los ingredientes farmacéuticos activos (API) y facilitan la formulación de composiciones de medicamentos precisas.</li>
                </ul>
                <p class="text-center light-black font-weight-bold">¿Cómo conseguir una medición de peso con la máxima precisión y resolución?</p>
                <p class="light-black">Para obtener lecturas exactas, las básculas de miligramos avanzadas dependen de celdas de carga de alta precisión. Pero la celda de carga por sí sola es solo la mitad de la solución. Para maximizar la precisión de la salida de los sensores, deben combinarse con acondicionadores de señal de alta resolución, que son fundamentales para el rendimiento del sistema de pesaje. El acondicionador o amplificador de señal lee, filtra y acondiciona la salida de la celda de carga, lo que garantiza que el sistema de adquisición de datos reciba una señal limpia y de alta resolución que proporcione mediciones hasta la escala de miligramos (escala de miligramos para medicamentos).</p>
                <p class="light-black">La FUTEK LRF400 es una celda de carga de alta precisión y baja capacidad. Cuando se combina con el acondicionador de señal digital USB de alta resolución USB225, proporciona todos los fundamentos de medición de carga para cumplir con los requisitos de básculas de miligramos precisas con las siguientes capacidades:</p>
            </div>
            <div class="container text-center">
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Mayor resolución:</b> las celdas de carga de baja capacidad (es decir, LRF400) combinadas con instrumentos de alta resolución (es decir, USB225) permiten que las básculas de miligramos muestren lecturas de peso con mayor resolución (es decir, resolución sin ruido o NFR) y precisión (es decir, no linealidad).</li>
                    <li class="mb-3"><b>Sensibilidad mejorada:</b> la celda de carga de alta precisión LRF400 de FUTEK tiene una mayor sensibilidad en comparación con las celdas de carga estándar, lo que permite la medición de variaciones mínimas de peso. Esta sensibilidad es esencial para lograr las mediciones de alta precisión que se requieren en aplicaciones de medicamentos.</li>
                    <li class="mb-3"><b>Linealidad mejorada:</b> LRF400 exhibe una excelente no linealidad, histéresis y no repetibilidad de ±0,05 % de la salida nominal, lo que significa que la relación entre la carga aplicada y la salida eléctrica es altamente precisa, repetible y predecible.</li>
                    <li class="mb-3"><b>Compensación de temperatura:</b> la medición de medicamentos puede verse afectada por variaciones de temperatura. El LRF400 está equipado con compensación de temperatura avanzada, lo que minimiza la influencia de los cambios de temperatura de 60 a 160 °F [15 a 71 °C].</li>
                    <li class="mb-3">
                        <b>Construcción robusta:</b> La celda de carga de alta precisión LRF400 está construida para soportar un uso riguroso y brindar confiabilidad a largo plazo. Aunque el LRF400 es un sensor de fuerza en miniatura con una altura de solo 2,27” [58 mm], está diseñado con material de aluminio liviano (140 gramos) y protección de sobrecarga segura de hasta 200x para la capacidad de 0,25 lb (consulte la tabla de la hoja de especificaciones).<br>
                        Alternativamente, la QLA399 de FUTEK es una celda de carga de paralelogramo personalizada OEM con un acondicionador de señal incorporado de salida RS232 de alta resolución. Es una báscula OEM digital con una capacidad nominal de 300 gramos (0,66 lb). Cuenta con una placa de carga de 0,955 pulgadas (24,3 mm) de diámetro.
                        Una aplicación común para las celdas de carga de alta precisión es la escala de miligramos para polvos (también conocida como escala de mg para polvos). Dada la resolución, sensibilidad y precisión del LRF400, también se puede integrar en la escala de miligramos para polvos.
                    </li>
                </ul>
                <p class="light-black text-justify">Como alternativa, la QLA399 de FUTEK es una celda de carga OEM personalizada en forma de paralelogramo con un acondicionador de señal incorporado con salida RS232 de alta resolución. Es una báscula OEM digital con una capacidad nominal de 300 gramos (0,66 libras). Cuenta con una placa de carga de 0,955 pulgadas (24,3 mm) de diámetro.</p>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3">Instalación de la celda de carga LRF400: Instale la celda de carga dentro de la báscula de miligramos de alta precisión, asegurando la alineación adecuada y el montaje seguro para permitir una medición precisa del peso de las dosis de medicamentos. Alternativamente, la LRF400 se puede utilizar de forma independiente junto con una placa de carga roscada. Además, el modelo QLA399 es una celda de carga de paralelogramo personalizada OEM con acondicionador de señal incorporado y placa de carga con salida RS232 de alta resolución.</li>
                    <li class="mb-3">Instalación del USB225: Conecte el acondicionador de señal digital USB con la celda de carga para amplificar y acondicionar la señal eléctrica del sensor. Es necesario calibrar todo el sistema de medición de fuerza para garantizar que la celda de carga + cable + amplificador sean precisos como un sistema completo. FUTEK ofrece un laboratorio acreditado por A2LA capaz de realizar calibraciones de baja capacidad.</li>
                    <li class="mb-3">La combinación de cualquiera de los acondicionadores y amplificadores de señal de FUTEK con el software de prueba y medición SENSIT™ de FUTEK permite la recopilación, el registro y el análisis de datos.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LRF400.jpg" alt="LRF400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LRF400</p>
                <p>Celda de carga low profile</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-low-profile-tension-compresion-lrf400" target="_blank">Comprar</a>
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