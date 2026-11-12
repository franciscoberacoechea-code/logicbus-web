<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Tensión de Hilo | Logicbus</title>
    <meta name="description" content="Ya sea para alimentar una máquina de EDM por cable, una desforradora de cables, o para enrollar bobinas de motores eléctricos, la tensión precisa del cable es clave para cumplir con los estándares de alto rendimiento actuales.">
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
                <li class="breadcrumb-item active" aria-current="page">Control de Tensión de Hilo</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Control de Tensión de Hilo" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Control de Tensión de Hilo" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Control de Tensión de Hilo</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/alambre.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Ya sea para alimentar una máquina de <b>EDM por cable</b>, una <b>desforradora de cables</b>, o para enrollar <b>bobinas de motores eléctricos</b>, la <b>tensión precisa del cable</b> es clave para cumplir con los estándares de alto rendimiento actuales. La clave para un control de tensión de cable preciso radica en el monitoreo en vivo de la tensión del cable. Al utilizar una <b>celda de carga</b> en línea con el tensiómetro de cable, se puede desarrollar un sistema versátil de <b>tensionado de cables</b> que se adapta a las condiciones cambiantes del cable y su calidad. Este sistema adaptativo puede mantener una alta calidad y repetibilidad en el enrollado de bobinas, mientras maximiza la eficiencia del proceso al prevenir la ruptura del cable.</p>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Instalación de la Celda de Carga:</b>
                        <ul>
                            <li>Se monta una celda de carga en línea de la serie <b>LCM</b> entre el <b>tensiómetro de cable</b> y un <b>actuador lineal</b> para medir la tensión del cable. La celda de carga registra la fuerza que se ejerce sobre el cable durante el proceso de tensión.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Ajuste del Pistón del Actuador Lineal:</b>
                        <ul>
                            <li>Al ajustar el pistón del actuador lineal, se generan cambios en la tensión del cable, lo que produce una señal en la <b>celda de carga de la serie LCM</b>. Este cambio en la tensión es el que se mide para ajustar el proceso de tensionado de forma dinámica.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Amplificación de Señales:</b>
                        <ul>
                            <li>La señal proveniente de la <b>celda de carga LCM</b> se envía a un <b>amplificador analógico de la serie IAA</b> o al <b>amplificador digitalmente configurable IDA100</b>. Este amplificador aumenta la señal para su procesamiento.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Cierre de Bucle de Control:</b>
                        <ul>
                            <li> señal amplificada se envía a un <b>PLC o controlador de movimiento</b>, el cual controla el actuador lineal, cerrando el bucle de control. Esto permite que el sistema se adapte activamente a las condiciones cambiantes del cable, manteniendo una tensión constante y precisa.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Monitoreo y Ajuste en Tiempo Real:</b>
                        <ul>
                            <li>Con el <b>IDA100</b>, la salida del amplificador puede ser monitoreada y ajustada simultáneamente en una <b>PC con el software SENSIT™ de FUTEK</b>. Esto permite observar el desempeño del sistema en tiempo real mientras se proporciona una salida analógica amplificada de alta velocidad para el control preciso del proceso.</li>
                        </ul>
                    </li>
                    <p class="text-center light-black font-weight-bold">Beneficios del Sistema</p>
                    <ul class="light-black">
                        <li class="mb-3"><b>Precisión en la Tensión del Cable</b>: La celda de carga LCM en línea garantiza una medición precisa de la tensión del cable durante todo el proceso.</li>
                        <li class="mb-3"><b>Adaptabilidad a Condiciones del Cable</b>: El sistema puede ajustarse automáticamente a cambios en la calidad del cable o sus condiciones, asegurando un control de tensión constante.</li>
                        <li class="mb-3"><b>Mejora en la Calidad del Enrollado</b>: Al mantener una tensión constante, se evita la ruptura del cable, lo que mejora la calidad y repetibilidad del enrollado de bobinas.</li>
                        <li class="mb-3"><b>Eficiencia del Proceso</b>: El sistema optimiza la eficiencia al prevenir problemas como la ruptura del cable y al mantener la tensión controlada durante todo el proceso.</li>
                        <li class="mb-3"><b>Monitoreo y Control en Tiempo Real</b>: La capacidad de monitorear y ajustar el sistema en tiempo real utilizando el software SENSIT™ de FUTEK permite una gestión eficiente y precisa del proceso de tensión.</li>
                    </ul>
                </ol>
                <p class="light-black">Este sistema de medición de tensión de cable de <b>FUTEK</b> no solo mejora la calidad del producto final, sino que también optimiza la eficiencia de todo el proceso de fabricación, manteniendo altos estándares de rendimiento.</p>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/in_line.jpg" alt="Serie LCM" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCM</p>
                <p>Celda de carga en línea</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH03912.jpg" alt="IDA100" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IDA100</p>
                <p>Amplificador de galgas extensométricas con salida digital y analógica</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">Comprar</a>
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