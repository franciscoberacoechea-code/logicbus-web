<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Fuerza en Endoscopía | Logicbus</title>
    <meta name="description" content="Los endoscopios permiten a los médicos ver dentro del paciente para encontrar anomalías durante procedimientos de diagnóstico, laparoscópicos o exploratorios.">
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
                <li class="breadcrumb-item active" aria-current="page">Control de Fuerza en Endoscopía</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Control de Fuerza en Endoscopía" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Control de Fuerza en Endoscopía" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Control de Fuerza en Endoscopía</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/endoscopia.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="text-center light-black font-weight-bold">El desafío: medir las fuerzas de movimiento del endoscopio</p>
                <p class="light-black text-justify">Los endoscopios permiten a los médicos ver dentro del paciente para encontrar anomalías durante procedimientos de diagnóstico, laparoscópicos o exploratorios. El movimiento de estos dispositivos se acciona mediante cables y proporciona poca o ninguna retroalimentación háptica. Esto requiere una formación exhaustiva para que el operador pueda aprender a juzgar visualmente la fuerza aplicada. Para que los controles sean más intuitivos y mejoren la fidelidad del operador, se necesita un sistema de medición de fuerza que pueda sobrevivir a los procesos de esterilización. Esto implica células de carga en línea esterilizables en autoclave instaladas en línea con los cables de control para crear un sistema de control de retroalimentación háptica para el endoscopio.</p>
                <p class="text-center light-black font-weight-bold">Biocompatibilidad, esterilización y autoclavabilidad: el sensor debe resistir altas temperaturas y presiones</p>
                <p class="light-black text-justify">El sensor integrado debe seguir la esterilización estándar utilizada para instrumentos quirúrgicos. El protocolo de esterilización en un autoclave determina 121 °C y 205 kPa de vapor durante 4 a 15 minutos. Los agentes de unión, los componentes microelectrónicos, los medidores de tensión y los conductores eléctricos deben poder soportar estas temperaturas y presiones.</p>
                <p class="light-black text-justify">Los sistemas quirúrgicos robóticos disponibles comercialmente que tienen un diseño modular permiten ser reutilizados aproximadamente de 12 a 20 veces. La hermeticidad de los elementos de detección de carga subminiatura de alta precisión es igualmente desafiante. El enfoque convencional para sellar componentes electrónicos es la adopción de recubrimientos conformados, que no son adecuados para soluciones médicas, reutilizables y esterilizables de alta confiabilidad. Una alternativa es soldar una interfaz de cabezal al sensor. Nuevamente, la soldadura enfrenta obstáculos en sensores miniaturizados debido a sus limitaciones de tamaño. En general, un enfoque novedoso y robusto es un sensor monolítico que utiliza tecnología de aislador fusionado de alta temperatura, químicamente neutro, adaptado a Ct y formulado a medida que se utiliza para alimentar conductores eléctricos a través de las paredes del elemento sensor activo herméticamente sellado. La tecnología de aislador fusionado ha demostrado confiabilidad en cientos a miles de ciclos de autoclave. Por qué los nanosensores FUTEK están a la altura del desafío El diseño y la fabricación de un sensor de fuerza para endoscopios robóticos implican dos desafíos distintos pero complementarios: superar los obstáculos técnicos del diseño de un sensor médico miniaturizado (miniaturización, biocompatibilidad, esterilizabilidad en autoclave y alta reutilización) manteniendo al mismo tiempo la especificación mínima requerida de una solución de medición de fuerza de alto grado (no linealidad, histéresis, repetibilidad, diafonía, ancho de banda y resolución sin ruido). El nanosensor de FUTEK se diseñó teniendo en cuenta todas estas limitaciones de diseño, así como el enfoque de diseño para fabricación (DFM).</p>
                <p class="light-black text-justify">El sensor de fuerza nano QLA414 es la solución de medición de fuerza de tensión y compresión más pequeña de su tipo (celda de carga en línea microminiatura). El sensor de fuerza nano de 4 mm x 5 mm abre un mundo de posibilidades para industrias como la automatización avanzada, los semiconductores, el ensamblaje de dispositivos electrónicos, la medición de fuerza de agarre de robots y la cirugía robótica, donde el tamaño del sensor de fuerza es fundamental. El sensor de fuerza nano QLA414 cuenta con disposiciones de montaje de doble cara con rosca M1 y un diseño único de orificio pasante que permite opciones flexibles de integración por deslizamiento, soldadura sobre el tubo, el cable o el eje. La instrumentación de puente completo de 1000 ohmios con compensación de carga lateral y elementos múltiples de Nano Sensors está revestida con una construcción soldada por láser con un empaque de interconexión no activa pendiente de patente que brinda protección ambiental. Permite una alta precisión en capacidades de 5 lb y 10 lb con una deflexión ultrabaja y una alta respuesta de frecuencia natural de hasta 98 KHz.</p>
                <p class="light-black text-justify">Además, también hay sensores de fuerza de tan solo 3 mm x 4 mm con capacidades de medición de fuerza de hasta 50 lb disponibles para aplicaciones OEM, incluidos sensores IP67 y esterilizables en autoclave para la industria médica. Al ser la celda de carga en miniatura ideal para robótica quirúrgica y pinza laparoscópica con percepción de fuerza , el transductor de fuerza NANO es ideal para retroalimentación de fuerza háptica y celda de carga ultraminiatura para catéteres.</p>
                <p class="text-center light-black font-weight-bold">Características del QLA414</p>
                <ul class="light-black text-justify">
                    <li>Disposiciones de montaje de doble cara con rosca M1.</li>
                    <li>Instrumentación compensada de carga lateral de puente completo de 1000 ohmios (fuera del eje o cargas extrañas).</li>
                    <li>Construcción soldada por láser.</li>
                    <li>Interconexión no activa.</li>
                    <li>Protección ambiental</li>
                    <li>±0,5 % de no linealidad de la salida nominal (RO) en capacidades de 5 lb y 10 lb: aplicaciones de medición de fuerza de alta precisión.</li>
                    <li>Sobrecarga segura de hasta un 200%.</li>
                    <li>Sensor de fuerza de tensión y compresión.</li>
                    <li>Deflexión ultrabaja (0,0002” [0,005 mm]).</li>
                    <li>Alta respuesta de frecuencia natural.</li>
                </ul>
            </div>
            <div class="container text-center">
            <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3">Se instalan dos sensores de fuerza nanométricos en línea con los cables que controlan el movimiento del endoscopio o, alternativamente, se montan roscados con el eje de accionamiento.</li>
                    <li class="mb-3">A medida que se mueve el endoscopio, las celdas de carga miden la fuerza necesaria para mover el tubo de inserción y el extremo distal (es decir, la cabeza).</li>
                    <li class="mb-3">La señal de medición de fuerza es leída por el QIA128, un acondicionador de señal digital en miniatura de potencia ultrabaja con salida SPI, que puede utilizarse para la integración del sistema. Permite una retroalimentación de fuerza adecuada en los controles manuales del cirujano.</li>
                    <li class="mb-3">Las celdas de carga están diseñadas para sobrevivir a los entornos de esterilización de alta presión, temperatura y pH necesarios para cumplir con los estándares ISO/TC 198 y la clasificación IP69K.</li>
                    <li class="mb-3">Los datos de las celdas de carga capturados por la instrumentación pueden luego reutilizarse para refinar aún más los controles y usarse para requisitos de trazabilidad.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCM100.jpg" alt="LCM100" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LCM100</p>
                <p>Celda de carga en línea</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea-lcm100" target="_blank">Comprar</a>
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