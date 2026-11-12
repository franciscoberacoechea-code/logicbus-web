<?php

require("../admin/config.php");

?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Automatización Logística para Líneas de Ensamblaje Automotriz | Logicbus</title>

    <meta name="description"

        content="Automatización logística para líneas de ensamblaje automotriz. Integración de transportadores, sensores, PLCs y sistemas RFID para garantizar eficiencia, trazabilidad y sincronización en la producción automotriz.">

    <meta name="keywords"

        content="automatización logística, ensamblaje automotriz, transportadores, sensores fotoeléctricos, PLC FATEK, RFID UHF, HMI P2070SA, control de tolvas, gestión de inventario en tiempo real, ERP MES, trazabilidad de componentes, eficiencia en producción automotriz">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />



    <!--- Estilos Necesarios-->

    <?php echo $css_bundle; ?>



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

                <li class="breadcrumb-item active" aria-current="page">

                    Automatización Logística para Líneas de Ensamblaje Automotriz </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Automatización Logística para Líneas de Ensamblaje Automotriz" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Automatización Logística para Líneas de Ensamblaje Automotriz" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Control de Cintas Transportadoras y Tolvas de

                Alimentación

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/automatizacion-logistica-para-lineas-de-ensamblaje-automotriz.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../rfid"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/rfid.webp" alt="rfid" width="200px"></a>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                    <a href="../tri-tronics"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En una línea de ensamblaje automotriz, la logística de materiales es

                    crítica para evitar cuellos de botella, retrasos y errores en la producción. La automatización

                    logística integra transportadores, sensores de presencia, sistemas de identificación y PLCs para

                    garantizar que cada componente (motores, puertas, tableros, etc.) llegue en el momento y lugar

                    correcto de la línea de producción.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Recepción y Clasificación de Componentes</b> <br>

                        <ul>

                            <li>Al ingresar al área de ensamblaje, los componentes pasan a través de un <b>portal de

                                    lectura automatizado</b>. Este portal está equipado con <b>antenas RFID UHF</b>

                                conectadas

                                a <b>un lector fijo de alto rendimiento</b>. Las antenas energizan y leen el <b>tag para

                                    metal</b>

                                <a href="https://tienda.logicbus.com.mx/F9525_p_31252.html">F9525</a>

                                adherido al contenedor del componente. Inmediatamente, el lector decodifica la

                                información y envía el identificador único del lote y la pieza al PLC para su validación

                                en la línea.

                            </li>

                            <li>Utilizando <b>sensores fotoeléctricos</b> <a

                                    href="https://tienda.logicbus.com.mx/PZRF4_p_11219.html">PZRF4</a> para verificar

                                con

                                precisión la

                                presencia de

                                cada componente sobre la banda transportadora.

                            </li>

                        </ul>

                    </li>

                    <li><b>Transporte Automatizado</b> <br>

                        <ul>

                            <li>Las piezas son movidas por <b>bandas transportadoras controladas por PLCs</b> <a

                                    href="https://tienda.logicbus.com.mx/fatek">FATEK</a>.</li>

                            <li>El PLC sincroniza la velocidad de la banda con el ritmo de la línea de ensamblaje,

                                evitando acumulaciones o espacios vacíos.

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Control de Tolvas y Alimentadores</b> <br>

                        <ul>

                            <li>Los PLCs de <a href="https://tienda.logicbus.com.mx/fatek">FATEK</a> a través de sus

                                salidas de relevador o transistor

                                regulan vibradores y

                                mecanismos de dosificación.</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Sincronización con Estaciones de Ensamblaje</b> <br>

                        <ul>

                            <li>Cada estación recibe las piezas necesarias en el orden exacto.</li>

                            <li>La HMI <a href="https://tienda.logicbus.com.mx/P2070SA_p_31265.html">P2070SA</a> muestra

                                el estado del flujo de materiales en tiempo real, alertando sobre

                                retrasos o bloqueos.</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Gestión de Inventario en Tiempo Real</b>

                        <br>

                        <ul>

                            <li>Los datos de piezas consumidas se registran en una base de datos conectada al sistema

                                ERP/MES.

                            </li>

                            <li>Se generan alertas de reabastecimiento automático cuando un lote de componentes está por

                                agotarse.</li>

                        </ul>

                    </li>

                    <li class="mb-3">

                        <b>Seguridad y Control de Fallos</b>

                        <br>

                        <ul>

                            <li>En caso de atasco en la banda, los sensores de alineación y vibración envían alertas al

                                PLC.</li>

                            <li>El sistema detiene la línea de transporte de forma controlada para evitar daños a los

                                componentes o retrasos mayores.</li>

                        </ul>

                        </br>

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Reducción de Errores Logísticos: </b> Cada pieza llega al lugar correcto, en el

                        momento exacto.

                    </li>

                    <li class="mb-3"><b>Mayor Eficiencia: </b>Elimina tiempos muertos por falta de materiales en

                        estaciones críticas.

                    </li>

                    <li class="mb-3"><b>Trazabilidad de Componentes: </b> Todos los movimientos quedan registrados para

                        auditorías y control de calidad.

                    </li>

                    <li class="mb-3"><b>Integración con ERP/MES: </b>Facilita la planeación de producción y

                        reabastecimiento automático.

                    </li>

                    <li class="mb-3"><b>Flexibilidad: </b>Adaptable a diferentes modelos de vehículos o variaciones en

                        la línea de ensamblaje.

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/F9525.jpg" alt="F9525"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">F9525</p>

                <p>Tag modelo F9525 FR4, montaje en metal, 95 x 25 mm con respaldo despegable y adhesivo, RFID pasivo

                    UHF 902-928 MHz

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/F9525_p_31252.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy"

                    src="https://tienda.logicbus.com.mx/assets/images/TRS600-NON-CONTACT-ROTARY-TORQUE-SENSOR-1.jpg"

                    alt="TRS600" width="150px">

                <p class="font-weight-bold mt-2 mb-0">TRS600</p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-rotatorio-trs600"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/p2070sa.jpg" alt="P2070SA"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">P2070SA</p>

                <p>Pantalla HMI Basica de la Serie P2 de Fatek 7"TFT LCD Flash 128Mb RAM 128Mb CPU 32bit con RTC, Serial

                    1(RS-232,RS-422/485) USB 2.0 Mini USB PLC port, Alimentacion 14-32Vdc (12W a 24Vdc), carcasa

                    plastica, soporta IoT (iMonitor)

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P2070SA_p_31265.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/PZRF4%20-%201%20-%20copia.jpg"

                    alt="PZRF4" width="150px">

                <p class="font-weight-bold mt-2 mb-0">PZRF4</p>

                <p>General Purpose Photoelectric Sensor EZ Eye, Red, Cabled Glass Fiberoptics

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PZRF4_p_11219.html"

                    target="_blank">Comprar</a>

            </div>

        </div>

    </section>

    <!-- VIDEOS -->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">

            <!-- VIDEO 1 -->
            <div style="width:300px;">
                <div style="position:relative; width:100%; padding-top:56.25%; overflow:hidden; border-radius:10px;">
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/rGYSA3xKuQo?si=juPZItKLU4xsjktz"
                        style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div style="width:300px;">
                <div style="position:relative; width:100%; padding-top:56.25%; overflow:hidden; border-radius:10px;">
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/8tKPTOdPsvA?si=z2aCX7Udvf-GgcHU"
                        style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div style="width:300px;">
                <div style="position:relative; width:100%; padding-top:56.25%; overflow:hidden; border-radius:10px;">
                    <iframe loading="lazy"
                        src="https://www.youtube.com/embed/Tclj-_f4pEE?si=C6u3kNbnyvDSRomQ"
                        style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"
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

                    href="https://www.logicbus.com.mx/blog/solucion-de-validacion-de-rendimiento-para-componentes-automotrices/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Solucion-de-Validacion-de-Rendimiento-para-Componentes-Automotrices-scaled.jpg"

                        alt="Automatización Logística para Líneas de Ensamblaje Automotriz" width="100%">

                    Automatización Logística para Líneas de Ensamblaje Automotriz

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/computadoras-industriales-resistentes-para-ambientes-hostiles-la-propuesta-de-cincoze/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Computadoras-industriales-resistentes-para-ambientes-hostiles-la-propuesta-de-CINCOZE.jpg"

                        alt="Computadoras industriales resistentes para ambientes hostiles: la propuesta de CINCOZE"

                        width="100%">

                    Computadoras industriales resistentes para ambientes hostiles: la propuesta de CINCOZE

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/control-de-cintas-transportadoras-y-tolvas-de-alimentacion-en-procesos-industriales/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Control-de-Cintas-Transportadoras-y-Tolvas-de-Alimentacion-en-Procesos-Industriales-2048x1024.jpg"

                        alt="Control de Cintas Transportadoras y Tolvas de Alimentación en Procesos Industriales"

                        width="100%">

                    Control de Cintas Transportadoras y Tolvas de Alimentación en Procesos Industriales

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-madgetech-hitemp140/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-MadgeTech-HiTemp140-scaled.jpg"

                        alt="Asegurando la cadena de frío en logística alimentaria con dataloggers MadgeTech HiTemp140"

                        width="100%">

                    Asegurando la cadena de frío en logística alimentaria con dataloggers MadgeTech HiTemp140</a>

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

                        alt="Automatización Logística para Líneas de Ensamblaje Automotriz" width="100%">

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