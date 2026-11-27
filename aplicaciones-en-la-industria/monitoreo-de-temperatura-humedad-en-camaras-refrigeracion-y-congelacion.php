<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación | Logicbus</title>

    <meta name="description"
        content="Optimización energética en la industria automotriz: monitoreo en tiempo real de consumos, reducción de costos, sostenibilidad e integración con sistemas MES/ERP para una producción más eficiente.">

    <meta name="keywords"
        content="eficiencia energética automotriz, gestión de energía, ahorro de energía en plantas, SENECA S711EROGETH45, LoggerFlex BLXULT, LoggerFlex CLOUD, CONTROLLINO PLC, Modbus TCP/IP, MQTT, ISO 50001, optimización energética, industria automotriz">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />



    <!--- Estilos Necesarios-->

     <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="../libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="../libreria/estilos.css">'; ?>
    <?php echo isset($css_bundle) ? $css_bundle : ''; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>



</head>



<body>

    <?php echo $var_body; ?>

    <?php require("../libreria/header.view.php"); ?>



    <!--RUTAS-->

    <section class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb pl-0">

                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>

                <li class="breadcrumb-item active" aria-current="page">

                    Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Monitoreo de Temperatura y Humedad en Cámaras de
                Refrigeración y Congelación

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/Monitoreo-de-Temperatura-y-Humedad-en-Camaras-de-Refrigeracion-y-Congelacion.png"
                    alt="Diagrama" width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../industrial-shields"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/industrial-shields.webp" alt="industrial-shields"
                            width="200px"></a>

                    <a href="../loggerflex"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/loggerflex.webp" alt="loggerflex" width="200px"></a>

                    <a href="../atop"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/atop.webp" alt="atop" width="200px"></a>

                    <a href="../cincoze"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/cincoze.webp" alt="cincoze" width="200px"></a>

                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> Esta aplicación asegura la monitorización y control en tiempo real
                    de las condiciones de temperatura y humedad en cámaras de refrigeración y congelación utilizadas
                    para el almacenamiento de materiales sensibles como fármacos, vacunas, productos biológicos y
                    alimentos. Al integrar sensores de alta precisión, registradores de datos y plataformas IoT,
                    previene la degradación de productos por desviaciones en las condiciones ambientales.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Instalación de Sensores y Monitoreo Ambiental</b> <br>

                        Sensores digitales como el EDWITR se instalan estratégicamente en cámaras frías y congeladores
                        para medir temperatura y humedad ambiente. Sensores infrarrojos opcionales como el BLTRED
                        monitorean la temperatura de superficies de productos o estanterías.

                    </li>

                    <li><b>Registro de Datos y Almacenamiento Seguro</b> <br>

                        Los sensores envían continuamente datos a la nube LF Cloud, donde se almacenan. Con el punto de
                        acceso AW5601-IC no habrá limitaciones de conexión a Internet. panel PC
                        CV-115R-P1101-N42-4G-500G-GST60 consulta la nube vía la API de LF Cloud y procesa los datos
                        recibidos.


                    </li>

                    <li class="mb-3"><b>Gestión de Alarmas y Alertas en Tiempo Real</b> <br>

                        Si la temperatura o humedad se desvían de los umbrales predefinidos (p. ej., 2–8 °C para
                        refrigeración, -18 °C para congelación), el sistema activa alarmas y notifica automáticamente al
                        personal designado vía correo, SMS o notificaciones push.


                    </li>

                    <li class="mb-3"><b>Interfaz de Usuario y Acceso Remoto</b> <br>

                        Operadores y responsables de calidad acceden a datos ambientales en tiempo real a través del
                        panel PC CV-115R-P1101-N42-4G-500G-GST60 y usando LF Cloud Se generan reportes automáticos
                        exportables para auditorías.


                    </li>

                    <li class="mb-3"><b>Almacenamiento y Seguridad de Datos en la nube</b> <br>

                        Copias de seguridad, respaldo en la nube LF Cloud, información protegida por usuario y

                        contraseña.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Cumplimiento normativo total. </b>

                    </li>

                    <li class="mb-3"><b>Asegura la calidad de productos sensibles a la temperatura.</b>

                    </li>

                    <li class="mb-3"><b>Alertas en tiempo real para respuesta proactiva.</b>

                    </li>

                    <li class="mb-3"><b>Fiable y escalable para múltiples cámaras.</b>

                    </li>

                    <li class="mb-3"><b>Reportes auditables y trazables.</b>

                    </li>

                    <li class="mb-3"><b>Menor intervención manual y reducción de errores.</b>

                    </li>

                </ul>

                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>

            </div>

        </div>

    </section>



    <!--EQUIPOS RECOMENDADOS-->

    <section class="container py-5">

        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>

        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/269/edwitr.jpg" alt="EDWITR"
                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">EDWITR</p>

                <p>

                    EDGE Thermo WiFi – Registrador de Temperatura Ambiental y de Doble Sonda Externa

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/EDWITR_p_38125.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/269/loggerflex-bltred.jpg"
                    alt="BLTRED" width="150px">

                <p class="font-weight-bold mt-2 mb-0">BLTRED</p>

                <p>Sensor de Temperatura Infrarroja con Conectividad Wi-Fi

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/BLTRED_p_36685.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/21/aw5601.jpg" alt="AW5601-IC"
                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">AW5601-IC</p>

                <p>Punto de acceso inalámbrico industrial

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/AW5601-IC_p_37128.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg"
                    alt="0130000Z0001" width="150px">

                <p class="font-weight-bold mt-2 mb-0">0130000Z0001</p>

                <p>PLC basado en ESP-WROOM-32U, escaneo cíclico y actualización inmediatos, MCP23017SS (7 entradas + 1

                    salida relé 5A), ESP32 (2 4-20mA/0-10V/3.3-24VCC + 4 24VCC), Comunicación: Ethernet + RS485(HD) +

                    Wi-Fi 2.5GHz + BLE 2.48MHz.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/0130000Z0001_p_38011.html"
                    target="_blank">Comprar</a>

            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"
                    src="https://tienda.logicbus.com.mx/assets/images/272/cv-115r-p1101-n42-4g-500g-gst60_2.jpg"
                    alt="CV-115R-P1101-N42-4G-500G-GST60" width="150px">

                <p class="font-weight-bold mt-2 mb-0">CV-115R-P1101-N42-4G-500G-GST60</p>

                <p>CONTROLLINO MAXI Power

                </p>

                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/CV-115R-P1101-N42-4G-500G-GST60_p_34471.html"
                    target="_blank">Comprar</a>

            </div>

        </div>

    </section>


<section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <!-- FILA FLEX DE 3 VIDEOS -->
        <div style="display:flex;justify-content:center;gap:20px;flex-wrap:wrap;align-items:flex-start;margin:2rem 0;">

            <!-- VIDEO 1 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/KbzLqpWYMDs?si=_xKtB9d54vS6FMWY"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

            <!-- VIDEO 2 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/MvQt1wrHta4?si=sHkZrhWs-Oobdzpj"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

            <!-- VIDEO 3 -->
            <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/207J4XAp1iw?si=0YZzB3bidG4n4dIq"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                    style="width:100% !important;
                        height:180px !important;
                        min-height:180px !important;
                        max-height:180px !important;
                        display:block !important;">
                </iframe>
            </div>

        </div>
    </section>

    



    <!--ARTICULOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/la-automatizacion-no-es-competencia-es-un-aliado-como-la-aplicas/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/La-automatizacion-no-es-competencia-es-un-aliado.-%C2%BFComo-la-aplicas-scaled.jpg"
                        alt="La automatización no es competencia, es un aliado. ¿Cómo la aplicas?" width="100%">

                    La automatización no es competencia, es un aliado. ¿Cómo la aplicas?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/que-es-la-vibracion-industrial-y-por-que-debemos-medirla/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/%C2%BFQue-es-la-vibracion-industrial-y-por-que-debemos-medirla-scaled.jpg"
                        alt="¿Qué es la vibración industrial y por qué debemos medirla?" width="100%">

                    ¿Qué es la vibración industrial y por qué debemos medirla?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/switches-industriales-en-tuneles-y-metro-por-que-no-basta-con-un-switch-comercial/"
                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Switches-industriales-en-tuneles-y-metro-%C2%BFpor-que-no-basta-con-un-switch-comercial-2048x1024.jpg"
                        alt="Switches industriales en túneles y metro: ¿por qué no basta con un switch comercial?"
                        width="100%">

                    Switches industriales en túneles y metro: ¿por qué no basta con un switch comercial?

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

                        <img loading="lazy" src="img/industrias/academia.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Academia e Investigación">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Academia e Investigación</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="agricultura">

                        <img loading="lazy" src="img/industrias/agricultura.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Agricultura">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Agricultura</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="alimentos-y-bebidas">

                        <img loading="lazy" src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="automotriz">

                        <img loading="lazy" src="img/industrias/automotriz.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Automotriz">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Automotriz</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="construccion">

                        <img loading="lazy" src="img/industrias/construccion.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Construcción">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Construcción</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="oem">

                        <img loading="lazy" src="img/industrias/oem.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="OEM">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">OEM</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="ensayos-de-materiales">

                        <img loading="lazy" src="img/industrias/materiales.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Ensayos de Materiales">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="farmaceutica-y-laboratorio">

                        <img loading="lazy" src="img/industrias/farmaceutica.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="robotica">

                        <img loading="lazy" src="img/industrias/robots.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Robótica">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Robótica</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="">

                        <img loading="lazy" src="img/industrias/transporte.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Transporte">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Transporte</h5>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- MODAL DIAGRAMA -->

    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"
                        alt=" Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación"
                        width="100%">

                </div>

                <div class="modal-footer">

                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->

                </div>

            </div>

        </div>

    </div>



    <!--Contacto-->

    <div class="section-blue text-center py-5" id="contacto">

        <div class="container mb-5">

            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>

            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu

                proyecto.</span>

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