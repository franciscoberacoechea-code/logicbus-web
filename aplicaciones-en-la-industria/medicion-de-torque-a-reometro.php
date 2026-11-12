<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medición de Viscosidad y Propiedades Reológicas de Fluidos | Logicbus</title>
    <meta name="description" content="Determinar la viscosidad y las propiedades reológicas de fluidos como pinturas, aceites y adhesivos es esencial para muchas industrias.">
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
                <li class="breadcrumb-item active" aria-current="page">Medición de Viscosidad y Propiedades Reológicas de Fluidos </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Medición de Viscosidad y Propiedades Reológicas de Fluidos" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Medición de Viscosidad y Propiedades Reológicas de Fluidos" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Medición de Viscosidad y Propiedades Reológicas de Fluidos</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/reometro.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Determinar la viscosidad y las propiedades reológicas de fluidos como pinturas, aceites y adhesivos es esencial para muchas industrias. Para realizar estas pruebas, se utiliza un reómetro con un cilindro rotatorio que permite medir el esfuerzo de corte del material a diversas velocidades de rotación. Un sensor de torque es fundamental para evaluar el torque generado cuando el fluido es sometido a estas rotaciones.</p>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Montaje del Sensor de Torque</b>:
                        <ul>
                            <li>Un <b>TFF425 Flange-to-Flange Reaction Torque Sensor</b> se coloca bajo el cilindro que contiene el fluido en análisis.</li>
                            <li>Este cilindro está conectado a un <b>viscosímetro</b> y se sumerge un husillo acoplado a un motor dentro del fluido.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Medición del Torque</b>:
                        <ul>
                            <li>El husillo se acelera a una velocidad específica para generar el esfuerzo de corte en el fluido.</li>
                            <li>La torsión ejercida por el fluido en rotación sobre el cilindro se mide a través del TFF425, permitiendo obtener datos de torque precisos en tiempo real.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Procesamiento de Señales y Conexión con el Sistema</b>:
                        <ul>
                            <li>La señal del TFF425 se envía al <b>Amplificador IDA100 con Salida Digital y Analógica</b> para amplificación y transmisión a un PLC.</li>
                            <li>Si se requiere una conexión directa a un microprocesador, el <b>Controlador Digital IDC305</b> puede enviar los datos del sensor de torque a través de SPI, habilitando el control en lazo cerrado.</li>
                            <li>Alternativamente, el TFF425 se puede conectar al <b>USB220</b> o al <b>USB520</b> para capturar la señal y registrarla mediante el software <b>SENSIT™</b> en una PC.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Cumplimiento de Normativas y Análisis</b>:
                        <ul>
                            <li>Los datos recolectados pueden usarse para cumplir con normativas como <b>ASTM D562, ASTM D1084-16</b> e <b>ISO 3448</b>, garantizando que las propiedades reológicas del fluido estén dentro de los estándares de calidad establecidos.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Medición en el Eje del Husillo</b>:
                        <ul>
                            <li>Para pruebas adicionales directamente sobre el eje de rotación, se pueden utilizar los sensores de torque <b>TRS Series Shaft-to-Shaft</b>, permitiendo una evaluación directa del esfuerzo de corte en diferentes condiciones de rotación.</li>
                        </ul>
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Beneficios del Sistema de Prueba</p>
                <ul class="light-black">
                    <li class="mb-3"><b>Alta Precisión en Medición de Viscosidad</b>: El TFF425, junto con el amplificador y las soluciones de USB de alta resolución, permiten capturar y analizar con precisión la viscosidad y el esfuerzo de corte del fluido en diversas aplicaciones.</li>
                    <li class="mb-3"><b>Adaptabilidad para Cumplimiento Normativo</b>: La capacidad de registrar y analizar datos en tiempo real facilita cumplir con normativas y estándares de calidad.</li>
                    <li class="mb-3"><b>Opciones de Conectividad Avanzadas</b>: Las múltiples opciones de transmisión de datos, ya sea a través de un PLC, microprocesador o PC, permiten una integración flexible en distintos entornos de control.</li>
                </ul>
                <p class="light-black">Este sistema es una solución robusta y precisa para analizar las propiedades reológicas de fluidos, brindando datos críticos para asegurar la calidad y el rendimiento de productos industriales.</p>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/TFF425.jpg" alt="TFF425" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TFF425</p>
                <p>Sensor de par de reacción entre bridas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion-tff425" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH03912.jpg" alt="IDA100" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IDA100</p>
                <p>Amplificador de galgas extensométricas con salida digital y analógica</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/qsh01916.jpg" alt="IDC305" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IDC305</p>
                <p>Cotrolador digital con salida SPI, USB y analógica</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QSH01916_p_37882.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04720.jpg" alt="USB520" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Módulo USB</p>
                <p>USB de alta resolución</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FSH03944.jpg" alt="USB520" width="150px">
                <p class="font-weight-bold mt-2 mb-0">USB520</p>
                <p>USB de alta resolución</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html" target="_blank">Comprar</a>
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