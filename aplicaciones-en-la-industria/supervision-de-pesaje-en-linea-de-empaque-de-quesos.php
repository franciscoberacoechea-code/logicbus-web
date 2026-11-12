<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisión de Pesaje en Línea de Empaque de Quesos | Logicbus</title>
    <meta name="description"
        content="Supervisión automatizada del pesaje en línea durante el empaque de quesos para asegurar el cumplimiento del peso neto, reducir desperdicios, garantizar trazabilidad y cumplir normas como HACCP y NOM.">
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
                <li class="breadcrumb-item active" aria-current="page">
                    Supervisión de Pesaje en Línea de Empaque de Quesos </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Supervisión de Pesaje en Línea de Empaque de Quesos" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Supervisión de Pesaje en Línea de Empaque de Quesos"
            class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Supervisión de Pesaje en Línea de Empaque de Quesos
            </h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/supervision-de-pesaje-en-linea-de-empaque-de-quesosde-dosificacion-de-ingredientes.png"
                    alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../tri-tronics"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../cincoze"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cincoze.webp"
                            alt="cincoze" width="200px"></a>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7">
                <p class="light-black text-justify">Durante el empaque de quesos (enteros, en bloque, rebanados o
                    rallados), es fundamental asegurar que cada unidad cumpla con el peso neto declarado en la etiqueta.
                    Esto no solo garantiza la satisfacción del cliente, sino que también previene sanciones legales por
                    sobrepeso o subpeso. <br><br>
                    Mediante un sistema automatizado de pesaje dinámico, se logra verificar cada unidad en tiempo real y
                    rechazar aquellas que no cumplan con los estándares establecidos, manteniendo la eficiencia y
                    trazabilidad del proceso.

                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Detección de producto en la banda</b> <br>
                        <ul>
                            <li>Un sensor fotoeléctrico de proximidad <a
                                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-de-contraste">SmartEye</a>
                                marca Tri-Tronics detecta la llegada de
                                un bloque de queso a la zona de pesaje.</li>
                            <li>
                                Esta señal activa la medición y sincroniza el sistema para capturar el peso exacto del
                                producto en movimiento.
                            </li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Pesaje en línea mediante celda de carga dinámica</b> <br>
                        <ul>
                            <li>Se utiliza una celda de carga tipo flexión <a
                                    href="https://tienda.logicbus.com.mx/FSH00887_p_7535.html">LBB200</a>, instalada
                                debajo de un tramo de la
                                cinta transportadora especialmente diseñada para pesar en movimiento.</li>
                            <li>La celda está calibrada y programada para registrar el peso en milisegundos, sin detener
                                la banda.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Adquisición y procesamiento de datos</b> <br>
                        <ul>
                            <li>El peso detectado es enviado a un sistema de control PLC FATEK, como el <a
                                    href="https://tienda.logicbus.com.mx/FBS-14MAR2-D24_p_14645.html">FBs-14MAR2-D24</a>
                                con un módulo para celdas de carga <a
                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-2lc">FBs-2LC</a>.
                            </li>
                            <li>El PLC compara el peso leído con los rangos de tolerancia configurados para ese producto
                                (ej. 198–202 g para un queso de 200 g).
                            </li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Rechazo automático de productos fuera de rango</b>
                        <br>
                        <ul>
                            <li>Si el peso está fuera del rango permitido, el sistema activa un cilindro neumático o
                                brazo empujador que retira automáticamente el producto no conforme hacia una bandeja de
                                descarte.</li>
                            <li>Este rechazo ocurre en tiempo sincronizado con la cinta para evitar interrupciones.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Visualización y monitoreo del sistema</b>
                        <br>
                        <ul>
                            <li>Una pantalla HMI P2-070HE de Fatek o un Panel PC <a
                                    href="https://tienda.logicbus.com.mx/CV-112HC-R10_p_23746.html">CV-112H</a> de
                                CINCOZE muestra en tiempo
                                real:</li>
                            <ul>
                                <li>Conteo de productos correctos vs rechazados.</li>
                                <li>Estadísticas por turno/lote.</li>
                                <li>Alertas de desviaciones frecuentes.</li>
                            </ul>
                        </ul>
                    </li>
                    <li class="mb-3">
                        <b>Registro por lote y trazabilidad</b>
                        <ul>
                            <li>Todos los datos se almacenan por lote, hora y operador en un sistema tipo SCADA o base
                                de datos local.</li>
                            <li>Esto permite cumplir con requisitos de trazabilidad (HACCP, NOM, FDA) y facilita
                                auditorías o análisis históricos de rendimiento.</li>
                        </ul>
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas del Sistema</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Precisión y consistencia:</b> Verifica cada unidad con alta velocidad y
                        exactitud sin detener la línea.
                    </li>
                    <li class="mb-3"><b>Ahorro en sobrellenado:</b>Evita dar producto de más, reduciendo el desperdicio
                        de materia prima.
                    </li>
                    <li class="mb-3"><b>Cumplimiento normativo:</b> Garantiza el cumplimiento de etiquetado según normas
                        mexicanas e internacionales.
                    </li>
                    <li class="mb-3"><b>Automatización confiable:</b> Sistema autónomo, sin intervención humana, con
                        rechazo automático.</li>
                    <li class="mb-3"><b>Trazabilidad total:</b> Todos los datos quedan registrados por lote, útil para
                        certificaciones de calidad.
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
                <img src="https://tienda.logicbus.com.mx/assets/images/EZPI-20AF4.jpg" alt="SMARTEYE" width="150px">
                <p class="font-weight-bold mt-2 mb-0">SMARTEYE</p>
                <p>Sensor fotoeléctrico de propósito general</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-de-contraste"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-14MAR2-D24.jpg" alt="FBS-14MAR2-D24"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-14MAR2-D24</p>
                <p>PLC Industrial Básico con 8 entradas digitales/ 6 salidas de relevador/ puerto de comunicación
                    RS-232. Alimentacion de 24VDC y reloj de tiempo real integrado.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-14MAR2-D24_p_14645.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/29/fbs-2lc.jpg" alt="FBS-2LC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-2LC</p>
                <p>Módulo para medición de celdas de carga con dos canales, resolución de 16-bit, para PLCs de la serie
                    FBs
                </p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-2lc"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/cv-112.jpg" alt="CV-112HC-R10" width="150px">
                <p class="font-weight-bold mt-2 mb-0">CV-112HC-R10</p>
                <p>Modulo Display LCD de 12.1", pantalla capacitiva multitactil de 10 puntos, resolucion 1024x768, LED
                    500nits. Superficie plana, proteccion IP65 contra polvo y agua en parte frontal. No funciona por si
                    solo, requiere modulo monitor o modulo PC para Panel PC.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/CV-112HC-R10_p_23746.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/lbb200tl.jpg" alt="FSH00887" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH00887</p>
                <p>LBB200, 0.25 lb, celda de carga de viga flexionada, estándar, material - 17-4 PH S.S., 28 AWg PVC
                    transparente blindado trenzado de 4 conductores, 1 pie de largo
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH00887_p_7535.html"
                    target="_blank">Comprar</a>
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
                        alt="Supervisión de Pesaje en Línea de Empaque de Quesos" width="100%">
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