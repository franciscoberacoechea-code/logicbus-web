<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control de Temperatura en Cámaras de Refrigeración para Cárnicos | Logicbus</title>

    <meta name="description"

        content="Sistema automatizado para cámaras frías: controla temperatura y humedad en carnes, ahorra energía y cumple normas como HACCP y FDA.">

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

                <li class="breadcrumb-item active" aria-current="page">Control de Temperatura en Cámaras de

                    Refrigeración para Cárnicos

                </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Control de Temperatura en Cámaras de Refrigeración para Cárnicos" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Control de Temperatura en Cámaras de Refrigeración para Cárnicos" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0">Control de Temperatura en Cámaras de Refrigeración para

                Cárnicos</h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/Control-de-Temperatura-en-Camaras-de-Refrigeracion-para-Carnicos.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../controllino"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/controllino.webp" alt="controllino" width="200px"></a>

                    <a href="../loggerflex"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/loggerflex.webp" alt="loggerflex" width="200px"></a>

                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/taicenn.webp" alt="taicenn-equipo-industrial"

                            width="200px"></a>

                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">Las carnes y embutidos son productos muy delicados: si no se

                    almacenan a la temperatura y humedad adecuadas, pueden descomponerse rápidamente, perder calidad o

                    incluso convertirse en un riesgo para la salud. <br>

                    Para evitar esto, muchas plantas de procesamiento o centros de distribución usan cámaras de

                    refrigeración. Pero controlar estas cámaras manualmente es poco eficiente y riesgoso.<br>

                    La solución es un sistema automatizado que mide constantemente la temperatura y humedad, y en base a

                    eso, activa o ajusta los equipos de refrigeración, todo sin intervención humana directa.



                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Medición de temperatura</b> <br>

                        Se instalan sensores industriales como el <a

                            href="https://tienda.logicbus.com.mx/loggerflex">External Temp de LoggerFlex</a> en

                        distintos puntos del

                        cuarto frío (por ejemplo, cerca de la puerta, en el centro y junto a las paredes).

                        La sonda que se integra con este dispositivo está diseñada para ambientes fríos y miden

                        continuamente la temperatura del aire.

                    </li> <br>

                    <li class="mb-3"><b>Adquisición y procesamiento de datos</b> <br>

                        Los valores de temperatura se envían de manera inalámbirca (wifi) y se suben a <b>LF-Cloud</b>

                        la cual

                        es una nube que recolecta y almacena los datos del dispositivo. <br>

                        El PLC <a

                        href="https://tienda.logicbus.com.mx/034001YZ0200_p_38013.html"> 034001YZ0200 </a> consulta los valores de los sensores de temperatura a través solicitudes 
                        
                        http con la API de integración proporcionada por LoggerFlex Luego, los compara con los valores ideales 
                        
                        que se han programado (por ejemplo, entre -2 °C y 2 °C.)

                    </li>

                    <li class="mb-3"><b>Control automático del sistema de refrigeración</b> <br>

                        Si el sistema detecta que la temperatura sube más de lo debido (por ejemplo, porque se abrió la

                        puerta por mucho tiempo), El PLC <a

                        href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-100-00"> Controllino Maxi 100-100-00 </a> activa automáticamente los

                        siguientes equipos:

                        <ul>

                            <li>Compresores de frío (para bajar la temperatura).</li>

                            <li>Ventiladores internos (para distribuir el aire frío si detecta que las puertas se

                                abrieron).</li>

                            <li>Controla el encendido/apagado del ventilador del condensador.</li>

                        </ul>

                        Esto se logra a través de módulos de salida digital que vienen integrados en el PLC que actúan

                        como interruptores automáticos.

                    </li>

                    <li class="mb-3"><b>Visualización para operadores en PC industrial</b>

                        <br>

                        Toda la información se muestra en tiempo real en una PC industrial <a

                            href="https://tienda.logicbus.com.mx/PPC-Z217PW-B62A1_p_31730.html">PPC-Z217PW-B62A1</a>

                        ubicada

                        en el exterior del cuarto frío o en una sala de control. <br>

                        El operador puede ver:

                        <ul>

                            <li>La temperatura actual</li>

                            <li>Alarmas activas (por ejemplo, si una puerta quedó abierta)</li>

                            <li>Gráficas de comportamiento de las últimas horas o días</li>

                            <li>Estado de compresores y ventiladores</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Almacenamiento de datos e informes</b>

                        <br>

                        Además del monitoreo en tiempo real, los datos se guardan automáticamente en <b>LF-Cloud</b>.

                        <br>

                        Esto permite:

                        <ul>

                            <li>Generar reportes automáticos para auditorías o cumplimiento de normativas.</li>

                            <li>Revisar tendencias históricas, como variaciones de temperatura por turno o por estación

                            </li>

                            <li>Enviar alertas por correo o teléfono si ocurre un evento crítico (como un fallo en un

                                compresor)</li>

                        </ul>

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas del Sistema Automatizado</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Protección del producto:</b> Mantiene las condiciones ideales para evitar que

                        las

                        carnes se contaminen o pierdan frescura.</li>

                    <li class="mb-3"><b>Ahorro de energía:</b>El sistema solo enciende los equipos cuando es necesario,

                        lo que reduce el consumo eléctrico.

                    </li>

                    <li class="mb-3"><b>Cumplimiento de normativas:</b> Ayuda a cumplir con estándares de inocuidad

                        alimentaria como HACCP o regulaciones de exportación (FDA, SENASICA, etc.).

                    </li>

                    <li class="mb-3"><b>Alertas inmediatas:</b> Notifica al personal si ocurre un problema, como una

                        puerta abierta o una falla en un sensor, permitiendo actuar rápidamente.</li>

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

                <img src="https://tienda.logicbus.com.mx/assets/images/269/bun%20luminous.jpg"

                    alt="External Temp de LoggerFlex" width="150px">

                <p class="font-weight-bold mt-2 mb-0">External Temp de LoggerFlex</p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/LoggerFlex_bymfg_175-7-2.html" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/265/100-100-00.jpg"

                    alt="Controllino Maxi 100-100-00" width="150px">

                <p class="font-weight-bold mt-2 mb-0">Controllino Maxi 100-100-00</p>

                <p>PLC industrial Controllino Maxi, codigo abierto arduino, Interfaz TTL serial, I2C, SPI, RTC. CPU

                    ATmega2560, Entradas digitales 2x(IN0, IN1 ), Entradas analogicas/digitales 10x (A0-A9), Salidas

                    digitales 12x–2A @12V o 24V (D0-D11),salidas 12x PWM (D0-D11).





                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-100-00"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/PPC-Z217PW-B61A1-1.jpg" alt="PPC-Z217PW-B62A1"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">PPC-Z217PW-B62A1</p>

                <p>21.5" 16:9 (1920 x 1080), 250 nits, Stainless Steel 316 Full IP66/69K Protection, Fanless Panel PC

                    with Intel® Core i3-7100U CPU, Projected Capacitive Touch, 4G RAM, 128G M.2 TLC, 1x IP67 Front

                    USB3.0, 1x USB3.0, 1x M12 for 2x USB2.0, 1x RS-232, 1x RS-232//422/485, 2x GbE, RFID Reader, DC 9~36

                    V, M12 Connector

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/PPC-Z217PW-B62A1_p_31730.html" target="_blank">Comprar</a>

            </div>



        </div>

    </section>



    <!--VIDEOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/j2_IDnYDpkQ?si=JHGasN3zceJ-RooE"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/EN-0RhMm7P8?si=cfuA0DVYt3fTA3d0"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/q0M43g7Dpk0?si=DJGzl5l1ua0EkUi_"

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

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/opc-ua-para-la-transferencia-de-datos-en-tiempo-real-desde-la-planta-de-produccion/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/OPC-UA-para-la-transferencia-de-datos-en-tiempo-real-desde-la-planta-de-produccion-2048x1024.jpg"

                        alt="OPC UA para la transferencia de datos en tiempo real desde la planta de producción"

                        width="100%">

                    OPC UA para la transferencia de datos en tiempo real desde la planta de producción

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/optimizacion-del-rendimiento-del-ahumadero-con-registradores-de-datos/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/Optimizacion-del-rendimiento-del-ahumadero-con-registradores-de-datos.jpg"

                        alt="Aprovechando los registradores de datos para una monitorización eficiente de la refrigeración en la industria alimentaria"

                        width="100%">

                    Optimización del rendimiento del ahumadero con registradores de datos

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/miniatura-precision-y-comunicacion-digital-total/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/%C2%A1Miniatura-Precision-y-Comunicacion-Digital-Total-1024x512.jpg"

                        alt="¡Miniatura, Precisión y Comunicación Digital Total!" width="100%">

                    ¡Miniatura, Precisión y Comunicación Digital Total!

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/automatizacion-de-dosificacion-de-ingredientes/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/Automatizacion-de-Dosificacion-de-Ingredientes-1024x512.jpg"

                        alt="Automatización de Dosificación de Ingredientes" width="100%">

                    Automatización de Dosificación de Ingredientes </a>

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

                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"

                        alt="Control de Temperatura en Cámaras de Refrigeración para Cárnicos" width="100%">

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

        <!-- BEGIN Podio web form -->

        <div class="podio-webform-container"></div>

        <div align="center">

            <script src="https://podio.com/webforms/14800971/993400.js"></script>

            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>

            <noscript>

                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el

                    formulario</a>

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