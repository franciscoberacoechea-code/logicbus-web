<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medición de Fuerza en Moldeo por Inyección | Logicbus</title>
    <meta name="description" content="La fuerza de sujeción es la fuerza (lbs o kg) necesaria para mantener unido el molde durante la inyección y se aplica mediante la unidad de sujeción de una máquina de moldeo por inyección.">
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
                <li class="breadcrumb-item active" aria-current="page">Medición de Fuerza en Moldeo por Inyección</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Medición de Fuerza en Moldeo por Inyección" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Medición de Fuerza en Moldeo por Inyección" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Medición de Fuerza en Moldeo por Inyección</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/moldeo.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black font-weight-bold">¿Qué es la fuerza de sujeción en el moldeo por inyección?</p>
                <p class="light-black">La fuerza de sujeción es la fuerza (lbs o kg) necesaria para mantener unido el molde durante la inyección y se aplica mediante la unidad de sujeción de una máquina de moldeo por inyección. Es una de las partes más olvidadas del proceso de moldeo por inyección. Si esta presión no se supervisa y controla adecuadamente, el molde se abrirá de forma prematura por la presión de inyección y creará rebabas en la pieza relacionada.</p>
                <p class="light-black">La fuerza de sujeción se refleja en el etiquetado de las máquinas por "tonelaje". El tonelaje es la capacidad máxima de fuerza de sujeción que la máquina puede producir. Normalmente, la capacidad máxima de la máquina se indica en toneladas, por ejemplo, una máquina de 300 toneladas es capaz de generar una fuerza de sujeción máxima equivalente a un total de 300 toneladas de fuerza.</p>
                <p class="light-black">Es aconsejable utilizar una máquina que pueda soportar la presión de sujeción máxima, pero no mucho más. Las máquinas de gran tamaño representan un desperdicio de valiosa capacidad operativa y un consumo de energía adicional. Además, la falta de coincidencia de la presión de sujeción entre la máquina y el molde puede provocar daños en la máquina o el molde.</p>
                <p class="light-black">Por lo tanto, los ingenieros de moldeo diseñan para la máquina más pequeña posible y deben monitorear y controlar constantemente la fuerza de sujeción del moldeo por inyección utilizando sistemas de control de retroalimentación de fuerza.</p>

                <p class="light-black font-weight-bold">¿Cómo se pueden utilizar los sensores de células de carga para medir la presión de sujeción total?</p>
                <p class="light-black">Durante el moldeo por inyección de plástico y la fundición a presión, el molde se sujeta firmemente para resistir la rápida expansión y contracción térmica que provoca el material fundido que llena la cavidad del molde. Se pueden crear piezas defectuosas si el molde no se mantiene correctamente sujeto para resistir la carga térmica durante todo el proceso de moldeo y fundición.</p>
                <p class="light-black">Para mitigar estos efectos térmicos, se colocan celdas de carga Pancake en los puntos de contacto de la abrazadera, lo que permite que la máquina de moldeo por inyección controle la presión de sujeción en el moldeo por inyección y ajuste las fuerzas de sujeción en consecuencia.</p>

                <p class="light-black font-weight-bold">Sensores de presión de cavidad: medición de la presión en el interior del molde</p>
                <p class="light-black">Un enfoque alternativo y más potente para la medición de la presión del moldeo por inyección es la utilización de sensores de presión en la cavidad del molde.</p>
                <p class="light-black">La presión en el interior del molde de inyección es un indicador clave de la calidad de la pieza moldeada. La medición y el control continuos de la presión en la cavidad del molde en las máquinas de inyección aumentan la calidad del producto final, mejoran el rendimiento y reducen los ciclos de producción.</p>
                <p class="light-black">Los sensores de presión de cavidad convierten la presión dentro de la cavidad de moldeo en una señal mV/V medible empleando sensores de presión nanométricos de galgas extensométricas instalados en la placa del molde. Los sensores están instrumentados con circuitos de galgas extensométricas de alta precisión y su salida eléctrica cambia bajo la influencia de la presión o la fuerza. Este cambio, amplificado por un acondicionador de señal, proporciona datos precisos sobre la presión aplicada en toda la cavidad en el proceso de moldeo por inyección.</p>
                <p class="light-black">El sensor de presión de cavidad de molde permite la medición dinámica de las curvas de presión en todas las fases de moldeo (fase de inyección, fase de compresión y fase de presión de mantenimiento). De este modo, se puede realizar un análisis comparativo en diferentes condiciones de proceso y evaluar la repetibilidad del proceso al moldear en las mismas condiciones de proceso.</p>
                <p class="light-black">Además, especialmente en el caso del micromoldeo de piezas con tolerancias ajustadas, como productos médicos, es un método eficaz para calcular el tiempo de llenado de la cavidad, ya que el llenado de las microcavidades se produce en el orden de milisegundos.</p>
            </div>
            <div class="container">
                <p class="light-black font-weight-bold">Medición directa e indirecta de la presión de cavidad</p>
                <p class="light-black">Según la aplicación, existen dos tipos de sensores de presión de cavidad: medición directa e indirecta.</p>
                <p class="light-black">Para la medición directa, el sensor se instala directamente en la cavidad del molde en un conjunto de montaje al ras con la superficie de la cavidad, de modo que el sensor tiene contacto directo con el material plástico bajo presión.</p>
                <p class="light-black">La medición indirecta de la presión de la cavidad se realiza a través de un sensor de fuerza instalado fuera de la cavidad del molde. La presión interna del molde se transmite al sensor de presión a través de un pasador eyector (también conocido como varillas eyectoras).</p>

                <p class="light-black font-weight-bold">Cumplimiento de las normas de la industria del moldeo por inyección</p>
                <p class="light-black">ASTM D3641: Práctica estándar para muestras de prueba de moldeo por inyección de materiales termoplásticos de moldeo y extrusión</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3">En esta aplicación, se coloca un par de botones de carga en miniatura para poder medir la fuerza que ejerce el embalaje sobre las barras calefactoras.</li>
                    <li class="mb-3">A medida que la bolsa se mueve a través de las barras calefactoras para sellar, las barras son forzadas hacia afuera, lo que hace que los botones de la celda de carga midan la fuerza aplicada.</li>
                    <li class="mb-3">El uso de dos celdas de carga garantiza que las barras calefactoras estén separadas de manera uniforme y funcionen mecánicamente de manera correcta.</li>
                    <li class="mb-3">La salida de la celda de carga resultante luego es amplificada por los amplificadores analógicos de la serie IAA para ingresarla al PLC, lo que permite el monitoreo de fallas y la verificación del sellado de la bolsa.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/fsh03571.jpg" alt="IHH500" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IHH500</p>
                <p>Pantalla digital portátil</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03571_p_6818.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/fsh03633.jpg" alt="IPM650" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IPM650</p>
                <p>Pantalla de montaje en panel</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCF300.jpg" alt="Serie LCF" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCF</p>
                <p>Celda de carga</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04453.jpg" alt="IAA105" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie IAA</p>
                <p>Amplificador de voltaje analógico configurable digitalmente</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04453_p_36735.html" target="_blank">Comprar</a>
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