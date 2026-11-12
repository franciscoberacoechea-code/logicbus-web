<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso | Logicbus</title>
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
                    Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Automatización del Llenado de Frascos Estériles con
                Control de Volumen y Peso
            </h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/automatizacion-llenado-frascos-esteriles-control.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../tri-tronics"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../waycon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/waycon.webp"
                            alt="waycon" width="200px"></a>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7">
                <p class="light-black text-justify">El sistema automatizado de llenado integra un PLC industrial con
                    sensores de peso en tiempo real, válvulas dosificadoras, sensores de nivel y elementos de seguridad
                    para garantizar un llenado preciso, estéril y trazable. Cada frasco se posiciona automáticamente
                    bajo una boquilla dosificadora, donde se inicia el llenado. A medida que el líquido fluye, una celda
                    de carga monitorea el peso del frasco y ajusta en tiempo real la válvula de dosificación hasta
                    alcanzar el valor objetivo exacto. El sistema está diseñado para adaptarse a diferentes tipos de
                    líquidos y velocidades de producción, cumpliendo con normas de calidad farmacéutica y alimentaria.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Posicionamiento del Frasco y Verificación Inicial</b> <br>
                        Los frascos son transportados mediante una banda con control paso a paso y se posicionan bajo la
                        boquilla de llenado. Sensores fotoeléctricos como el RetroSmart, <a
                            href="https://tienda.logicbus.com.mx/RSRC-1_p_11241.html">RSRC-1</a> de Tri-Tronics
                        detectan
                        la presencia del frasco y verifican que esté correctamente alineado. Sensores láser de distancia
                        como el modelo <a href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html">LAR</a> de Waycon
                        validan que esté a la altura correcta.
                    </li>
                    <li class="mb-3"><b>Iniciación del Llenado con Control Dinámico</b> <br>
                        Al detectar el frasco, el PLC <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a>
                        de Fatek activa la válvula dosificadora. A medida
                        que el líquido fluye, una celda de carga tipo S, modelo LSB201 de Futek mide el peso del frasco
                        en tiempo real. Si el líquido alcanza un peso preestablecido (por ejemplo, 100.00g ± 0.1g), el
                        PLC cierra automáticamente la válvula.
                    </li>
                    <li class="mb-3"><b>Compensación y Corrección</b> <br>
                        El sistema está calibrado para compensar dinámicamente variaciones por densidad del producto,
                        vibraciones o pequeños desfases de válvula. Algoritmos integrados en el PLC <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a>
                        corrigen la dosis durante la marcha, sin detener la producción.
                    </li>
                    <li class="mb-3"><b>Validación de Nivel y Detección de Anomalías</b>
                        <br>
                        Un sensor de nivel capacitivo <b>KA1743</b> de Rechner verifica que no haya rebose. En caso de
                        sobrellenado, se emite una alerta y se retira el frasco mediante un desviador neumático
                        controlado por el PLC <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a>.
                    </li>
                    <li class="mb-3"><b>Registro y Trazabilidad del Llenado</b>
                        <br>
                        Cada frasco queda registrado con un número de lote, peso, hora de llenado y operador
                        responsable. Esta información se almacena en una base de datos local y se sincroniza con el
                        sistema en la nube.
                    </li>
                    <li class="mb-3">
                        <b>Supervisión y Ajustes Manuales</b> <br>
                        Los técnicos pueden realizar ajustes desde la HMI <a
                            href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html">P5070SB</a> de Fatek o desde una
                        estación de
                        supervisión equipada con teclado industrial D-8602 de la marca Davo, apto para zonas estériles.
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Control Preciso de Dosis:</b> Las celdas de carga <a
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s-lsb201">LSB201</a>
                        de Futek permiten
                        llenar cada frasco con precisión miligrámica, reduciendo el desperdicio y cumpliendo normas
                        farmacéuticas.
                    </li>
                    <li class="mb-3"><b>Flexibilidad en Formatos y Volúmenes:</b>El sistema puede ajustarse fácilmente
                        desde la HMI <a href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html">P5070SB</a> de Fatek
                        para diferentes volúmenes y tipos de frascos.
                    </li>
                    <li class="mb-3"><b>Reducción de Errores Humanos:</b> La automatización elimina la variabilidad
                        asociada al llenado manual y reduce riesgos de contaminación.
                    </li>
                    <li class="mb-3"><b>Trazabilidad Total:</b> Cada lote queda registrado, lo que facilita auditorías y
                        garantiza cumplimiento normativo (GMP, FDA).
                    </li>
                    <li class="mb-3"><b>Escalabilidad y Modularidad:</b> Gracias a la arquitectura basada en PLC y
                        sensores modulares, el sistema puede escalarse para líneas múltiples o velocidades superiores.
                    </li>
                    <li class="mb-3"><b>Conectividad Industrial:</b> Soporte para protocolos industriales (Modbus
                        TCP/IP, MQTT) facilita la integración con SCADA, MES o plataformas de análisis predictivo.
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
                <img src="https://tienda.logicbus.com.mx/assets/images/226/RSRC-1.jpg" alt="RSRC-1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RSRC-1</p>
                <p>Sensor retrorreflectante RetroSmart ™ con cable flexible de 6 pulgadas (152 mm) con conector de 5
                    clavijas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RSRC-1_p_11241.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/qsh02028%201.jpg" alt="LSB201" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LSB201</p>
                <p>El LSB201 es uno de los sensores de fuerza en miniatura más solicitados de FUTEK, debido a su tamaño
                    reducido, alto rendimiento y calidad y durabilidad excepcionales.
                </p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-s-lsb201"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070SB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070SB</p>
                <p>Pantalla HMI Avanzada de Fatek Serie P5B 7"TFT LCD Flash 256Mb RAM 128Mb CPU 32bit con RTC
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/P5070SB_p_31659.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/lar-70-5v-1.png" alt="LAR-70-5V" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LAR-70-5V</p>
                <p>Sensor de desplazamiento láser con un rango de medición de 65 a 135 mm, temperatura de trabajo de
                    -10ºC a 45ºC. Salida análoga de 0 a 5 V y 4..20 mA. Salida de control PNP. IP67.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LAR-70-5V_p_25772.html"
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
                    <iframe src="https://www.youtube.com/embed/cvhAs3xziSE?si=LZfR_50Kl2b-z8Cl"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
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

        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/optimiza-la-medicion-de-desplazamiento-lineal-con-el-acondicionador-de-senal-usb520-de-futek/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Optimiza-la-Medicion-de-Desplazamiento-Lineal-con-el-Acondicionador-de-Senal-USB520-de-FUTEK-2.jpg"
                        alt="Optimiza la Medición de Desplazamiento Lineal con el Acondicionador de Señal USB520 de FUTEK"
                        width="100%">
                    Optimiza la Medición de Desplazamiento Lineal con el Acondicionador de Señal USB520 de FUTEK
                </a>

            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/youibot-l1000-automatizacion-robusta-para-la-logistica-industrial-del-futuro/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Youibot-L1000-Automatizacion-Robusta-para-la-Logistica-Industrial-del-Futuro.jpg"
                        alt="Youibot L1000: Automatización Robusta para la Logística Industrial del Futuro"
                        width="100%">
                    Youibot L1000: Automatización Robusta para la Logística Industrial del Futuro
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/habilita-tus-dispositivos-seriales-de-legado-conectandose-a-redes-ethernet-de-forma-segura-y-sencilla/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Habilita-tus-dispositivos-seriales-de-legado-conectandose-a-redes-Ethernet-de-forma-segura-y-sencilla.jpg"
                        alt="Habilita tus dispositivos seriales de legado conectándose a redes Ethernet de forma segura y sencilla"
                        width="100%">
                    Habilita tus dispositivos seriales de legado conectándose a redes Ethernet de forma segura y
                    sencilla
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/logicbus-y-davo-electron-una-alianza-que-destaca-en-el-mercado-internacional-de-teclados-industriales/"
                    target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/06/Logicbus-y-Davo-Electron-una-alianza-que-destaca-en-el-mercado-internacional-de-teclados-industriales.jpg"
                        alt="Logicbus y Davo Electron: una alianza que destaca en el mercado internacional de teclados industriales"
                        width="100%">
                    Logicbus y Davo Electron: una alianza que destaca en el mercado internacional de teclados
                    industriales</a>
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
                        alt="Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso"
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