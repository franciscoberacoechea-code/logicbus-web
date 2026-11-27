<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diagnóstico Electrónico de Vehículos para Calidad en Planta | Logicbus</title>

    <meta name="description"

        content="Sistema de diagnóstico electrónico automatizado para plantas automotrices. Verifica en segundos motor, frenos ABS, bolsas de aire, sensores de emisiones, climatización e infoentretenimiento, asegurando calidad y cumplimiento normativo internacional.">

    <meta name="keywords"

        content="diagnóstico electrónico automotriz, OBD-II, CAN Bus, GW-7433D, CAN-Logger100, PLC FATEK, validación de vehículos, pruebas electrónicas automotrices, control de calidad automotriz, sistemas electrónicos vehículos">

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

                    Diagnóstico Electrónico de Vehículos para Calidad en Planta </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Diagnóstico Electrónico de Vehículos para Calidad en Planta" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Diagnóstico Electrónico de Vehículos para Calidad en Planta" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Diagnóstico Electrónico de Vehículos para Calidad en

                Planta

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/diagnostico-electronico-de-vehiculos-para-calidad-en-planta.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                    <a href="../icp-das"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/icpdas.webp" alt="ICP-DAS" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> En las plantas automotrices, antes de liberar un vehículo terminado

                    al área de distribución, es esencial validar el correcto funcionamiento de sus sistemas

                    electrónicos: motor, frenos ABS, bolsas de aire, sensores de emisiones, climatización y sistemas de

                    infoentretenimiento. Un sistema de <b>diagnóstico electrónico automatizado</b> permite verificar en

                    segundos cientos de parámetros, detectar fallos ocultos y asegurar que cada vehículo cumpla con

                    estándares de calidad y normativas internacionales.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Conexión Automática al Puerto de Diagnóstico (OBD-II o CAN Bus)</b> <br>

                        <ul>

                            <li>Al final de la línea de producción, el vehículo se conecta a una estación de diagnóstico

                                equipada con interfaces de comunicación <a

                                    href="https://tienda.logicbus.com.mx/GW-7433D_p_1502.html">GW-7433D</a> <b>CAN

                                    Bus/OBD-II</b>.</li>

                            <li>Un <b>módulo de adquisición de datos</b> <a

                                    href="https://tienda.logicbus.com.mx/GW-7433D_p_1502.html">GW-7433D_</a> establece

                                la comunicación con la ECU

                                (Unidad

                                de Control Electrónico) del vehículo.</li>

                        </ul>

                    </li>

                    <li><b>Lectura de Parámetros Críticos en Tiempo Real</b> <br>

                        <ul>

                            <li>El sistema consulta y registra valores clave como:

                                <ul>

                                    <li>RPM del motor</li>

                                    <li>Presión de aceite</li>

                                    <li>Temperatura del refrigerante</li>

                                    <li>Estado de frenos ABS y bolsas de aire</li>

                                    <li>Señales de sensores de oxígeno y emisiones</li>

                                    <li>Comunicación entre módulos electrónicos</li>

                                </ul>

                            </li>

                            <li>Los <b>módulos de entradas/salidas</b> <a

                                    href="https://tienda.logicbus.com.mx/CAN-Logger100_p_17662.html">CAN-Logger100</a>

                                convierten y

                                acondicionan

                                señales

                                analógicas o digitales externas (ej. sensores adicionales de temperatura o vibración).

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Validación Automática contra Especificaciones</b> <br>

                        <ul>

                            <li>Un <b>PLC industrial</b> <a

                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek">FATEK</a>

                                procesa la información recibida.</li>

                            <li>Los parámetros se comparan automáticamente con rangos de tolerancia definidos por el

                                fabricante (ejemplo: temperatura del refrigerante debe estar dentro de 85–95 °C).</li>

                            <li>Si hay una desviación, el sistema marca el vehículo como “pendiente de revisión” antes

                                de que salga de la planta.</li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Pruebas Funcionales Dinámicas</b> <br>

                        <ul>

                            <li>Además de la lectura estática, el sistema puede activar componentes específicos:

                                <ul>

                                    <li>Encendido de luces exteriores/interiores</li>

                                    <li>Activación de limpiaparabrisas</li>

                                    <li>Verificación del climatizador y ventiladores</li>

                                    <li>Comprobación de actuadores electrónicos</li>

                                </ul>

                            </li>

                            <li>

                                Los resultados se registran y se cruzan con las lecturas de los sensores.

                            </li>

                        </ul>

                    </li>

                    <li class="mb-3"><b>Alertas y Diagnóstico Predictivo</b>

                        <br>

                        <ul>

                            <li>Si el sistema detecta patrones anormales (ejemplo: aumento recurrente de fallos en

                                sensores de emisiones en un lote), genera alertas preventivas para corregir el problema

                                en el proceso de producción antes de que se extienda a más vehículos.

                            </li>

                        </ul>

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>100% de vehículos validados electrónicamente </b>antes de salir de la planta.

                    </li>

                    <li class="mb-3"><b>Reducción de garantías y devoluciones,</b> gracias a la detección temprana de

                        fallos.

                    </li>

                    <li class="mb-3"><b>Cumplimiento normativo internacional </b>(emisiones, seguridad activa y pasiva).

                    </li>

                    <li class="mb-3"><b>Optimización de tiempos de prueba, </b>pasando de horas de verificación manual a

                        minutos de prueba automatizada.

                    </li>

                    <li class="mb-3"><b>Mejora continua, </b>ya que los reportes de fallos recurrentes retroalimentan al

                        área de ingeniería de calidad.

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/FBS-10MAJ2-AC.jpg"

                    alt="FBS-10MAJ2-AC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-10MAJ2-AC</p>

                <p>

                    PLC Industrial Básico con 6 entradas digitales/ 4 salidas de transistor PNP/ puerto de comunicación

                    RS-232. Alimentacion de 100~240VAC y reloj de tiempo real integrado.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/02/CAN-Logger100.jpg"

                    alt="CAN-Logger100" width="150px">

                <p class="font-weight-bold mt-2 mb-0">CAN-Logger100</p>

                <p>1 puerto CAN Bus Data Logger</p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/CAN-Logger100_p_17662.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/02/GW-7433D.jpg" alt="GW-7433D"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">GW-7433D</p>

                <p>El GW-7433D es una solución que proporciona una transformación de comunicación entre protocolo

                    CANopen y protocolo Modbus/TCP.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/GW-7433D_p_1502.html"

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
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/HT_T7dQ3TLM?si=BrseeRfOY74kxzsq"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/_5lwQPXLkIs?si=XsmyDIhU-3fDYYiT"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div style="width:300px;">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/o99PB80JVrA?si=y7T_4DazsxTfoSNj"
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

                    href="https://www.logicbus.com.mx/blog/solucion-de-validacion-de-rendimiento-para-componentes-automotrices/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Solucion-de-Validacion-de-Rendimiento-para-Componentes-Automotrices.jpg"

                        alt="Diagnóstico Electrónico de Vehículos para Calidad en Planta" width="100%">

                    Diagnóstico Electrónico de Vehículos para Calidad en Planta

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

                    href="https://www.logicbus.com.mx/blog/automatizacion-logistica-para-lineas-de-ensamblaje-automotriz/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Automatizacion-Logistica-para-Lineas-de-Ensamblaje-Automotriz-2048x1024.jpg"

                        alt="Automatización Logística para Líneas de Ensamblaje Automotriz" width="100%">

                    Automatización Logística para Líneas de Ensamblaje Automotriz</a>

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

                        alt="Diagnóstico Electrónico de Vehículos para Calidad en Planta" width="100%">

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