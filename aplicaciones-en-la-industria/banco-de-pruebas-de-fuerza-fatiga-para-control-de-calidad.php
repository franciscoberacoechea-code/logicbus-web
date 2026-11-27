<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Banco de Pruebas de Fuerza y Fatiga para Control de Calidad | Logicbus</title>

    <meta name="description"

        content="Banco de Pruebas de Fuerza y Fatiga automatizado para control de calidad. Mide fuerza, resistencia y durabilidad de componentes como botones o resortes. Sistema con PLC FATEK, celda de carga FUTEK y HMI industrial TAICENN para asegurar la fiabilidad del producto.">

    <meta name="keywords"

        content="banco de pruebas de fuerza, pruebas de fatiga, control de calidad, medición de fuerza, PLC FATEK, celda de carga FUTEK, automatización industrial, pruebas de resistencia, ensayo de materiales, validación de producto, HMI TAICENN, laboratorio de pruebas industriales">



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

                    Banco de Pruebas de Fuerza y Fatiga para Control de Calidad </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Banco de Pruebas de Fuerza y Fatiga para Control de Calidad" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Banco de Pruebas de Fuerza y Fatiga para Control de Calidad" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Banco de Pruebas de Fuerza y Fatiga para Control de

                Calidad

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../taicenn"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/taicenn.webp" alt="taicenn" width="200px"></a>

                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>

                    <a href="../futek"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/futek.webp" alt="futek" width="200px"></a>

                    <a href="../davo-lin"><img loading="lazy" class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/davo-lin.webp" alt="davo-lin" width="200px"></a>

                </div>

            </div>

            <div class="col-12 col-md-7">

                <p class="light-black text-justify"> Esta aplicación describe un banco de pruebas automatizado diseñado

                    para aplicar fuerza controlada a componentes manufacturados (como botones, interruptores, resortes o

                    ensambles) y medir su respuesta. Es fundamental para el control de calidad, permitiendo validar la

                    fuerza de actuación, la resistencia a la rotura o realizar pruebas de fatiga (ciclos repetidos) para

                    garantizar la vida útil y la fiabilidad del producto.

                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Medición de Fuerza Precisa: </b> <br>

                        Una celda de carga miniatura tipo dona o S de la serie <a href="https://tienda.logicbus.com.mx/search.asp?keyword=lth350&search=buscar">LTH350</a> marca FUTEK se instala debajo del

                        actuador, para medir la fuerza aplicada en tiempo real con precisión de gramos o Newtons.

                    </li>

                    <li><b>Control de Secuencia:</b> <br>

                        Un PLC compacto <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a> de FATEK controla todo el ciclo de prueba. Programa la velocidad

                        de avance del actuador, el punto de fuerza objetivo o el número de ciclos para la prueba de

                        fatiga.

                    </li>

                    <li class="mb-3"><b>Adquisición y Visualización de Datos:</b> <br>

                        La señal de la celda de carga (mV/V) es interpretada por un amplificador de voltaje <a href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html">FSH03863</a> de

                        FUTEK y leída pro el módulo de expansión de entradas análogas FBS-4A2D de FATEK.

                    </li>

                    <li class="mb-3"><b>Interfaz de Operador y Análisis:</b> <br>

                        Un Panel PC "fanless" (sin ventilador) <a href="https://tienda.logicbus.com.mx/TPC-PC156HA_p_33653.html">TPC-PC156HA</a> de TAICENN actúa como HMI. Mostrando en

                        tiempo real el peso aplicado sobre la pieza, el desplazamiento realizado por el actuador

                        neumático, así como el número de ciclos realizados para la prueba de fatiga.

                    </li>

                    <li class="mb-3"><b>Entrada de Datos Robusta:</b> <br>

                        Para la selección de recetas o el ingreso de ID de lote en el Panel PC, se utiliza un teclado

                        industrial robusto <a href="https://tienda.logicbus.com.mx/D-8605T_p_31787.html">D-8605T</a> de DAVO Electronics, resistente al polvo y al desgaste del entorno de

                        producción.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Garantiza el 100% de cumplimiento de las especificaciones de fuerza del

                            producto.</b>

                    </li>

                    <li class="mb-3"><b>Automatiza las pruebas de fatiga que son imposibles de hacer manualmente.</b>

                    </li>

                    <li class="mb-3"><b>Genera reportes de calidad auditables para cada lote de producción.</b>

                    </li>

                    <li class="mb-3"><b>Reduce los costos de garantía al detectar fallas de diseño o materiales.</b>

                    </li>

                    <li class="mb-3"><b>Sistema robusto diseñado para operar 24/7 en el piso de planta.</b>

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

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/FSH04182.jpg" alt="FSH04182"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH04182</p>

                <p>

                    LTH350 , 3000 lb , Through Hole Donut Load Cell , RoHS Compliant, Material - 17-4 PH S.S. , 3/8"

                    [9.53 mm] ID , 24 Awg 4 Conductor Braided Shielded Teflon Cable , 10 ft Long.



                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/search.asp?keyword=lth350&search=buscar"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg"

                    alt="FBS-20MCR2-AC" width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-20MCR2-AC</p>

                <p>PLC Industrial con 12 entradas digitales de 24Vdc con velocidad alta (200KHz) y medio alta (20KHz y

                    5KHz), 8 salidas de relevador/ puerto de comunicación RS-232. Alimentacion de 100~240VAC y reloj de

                    tiempo real integrado.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/36/fsh03863.jpg" alt="FSH03863"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FSH03863</p>

                <p>IAA100, Amplificador de voltaje de acondicionamiento de señal de galga extensométrica de puente

                    completo, +/- 5 VCC, +/- 10 VCC de salida, Interruptor DIP de compensación de 5 VCC, Ancho de banda

                    de hasta 25 kHz, Conectores de terminales de tornillo desmontables, Caja metálica, Clip DIN de 35 mm

                    integrado

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/29/fbs-4a2d.png" alt="FBS-4A2D"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">FBS-4A2D</p>

                <p>Modulo de expansion de entradas/salidas analogicas para PLC serie FBs con 4 entradas analogicas de 14

                    bits y 2 salidas analogicas de 14 bits (-10V~0V~+10V or -20mA~0mA~+20mA), configuracion por medio de

                    jumpers para proporcionar variedades de salida

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-4A2D_p_3352.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/290/TPC-PC156HA.jpg"

                    alt="TPC-PC156HA" width="150px">

                <p class="font-weight-bold mt-2 mb-0">TPC-PC156HA</p>

                <p>Baja consumo de potencia, diseñado sin ventilador, estabilidad mejorada y confiabilidad industrial de

                    15.6 pulgadas PC de panel táctil, PC de panel plano en un entorno resistente, panel de aluminio de

                    magnesio, estructura de la caja de lámina, pantalla panorámica de 15.6 "TFT LCD , LED

                    retroiluminado, Full HD 1920*1080, Intel Apollo Lake Quad-Core J3455, 1.5GHz, Procesador de 2.3GHz,

                    diseño plano verdadero, IP65 frontal con clasificación

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TPC-PC156HA_p_33653.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/LBD-2988605T-1.jpg" alt="D-8605T"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">D-8605T</p>

                <p>Teclado industrial en español con 106 teclas, incluye tecla "ñ", teclas de funciones y trackball.

                    Interfaz USB. Acero inoxidable 304, proteccion IP65 panel frontal. Montaje en panel trasero. Dim.

                    478 x 135 mm.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-8605T_p_31787.html"

                    target="_blank">Comprar</a>

            </div>

        </div>

    </section>


        <section class="container-fluid py-5">
            <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

            <!-- Contenedor principal: flex, centra y permite wrap en pantallas pequeñas -->
            <div style="display:flex;justify-content:center;gap:16px;flex-wrap:wrap;align-items:flex-start;margin:2rem 0;">

                <!-- VIDEO 1 -->
                <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/kdUV3_Eludk?si=GpWYGhwIeZBzhxGa"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    style="width:100% !important; height:180px !important; min-height:180px !important; max-height:180px !important; display:block !important;">
                </iframe>
                </div>

                <!-- VIDEO 2 -->
                <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/lV6ge8h0OwQ?si=Pm3SoCnMH_zBccRd"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    style="width:100% !important; height:180px !important; min-height:180px !important; max-height:180px !important; display:block !important;">
                </iframe>
                </div>

                <!-- VIDEO 3 -->
                <div style="flex:0 0 320px;max-width:320px;">
                <iframe loading="lazy"
                    src="https://www.youtube.com/embed/Liq60pW6pgI?si=1A3hehK3_E8QEEq0"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    style="width:100% !important; height:180px !important; min-height:180px !important; max-height:180px !important; display:block !important;">
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

                    href="https://www.logicbus.com.mx/blog/los-3-niveles-de-redundancia-de-red-que-salvaran-tu-proceso-stp-rstp-y-redundancia-en-anillo/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Los-3-Niveles-de-Redundancia-de-Red-que-Salvaran-tu-Proceso-STP-RSTP-y-Redundancia-en-Anillo-scaled.jpg"

                        alt="Los 3 Niveles de Redundancia de Red que Salvarán tu Proceso (STP, RSTP y Redundancia en Anillo)"

                        width="100%">

                    Los 3 Niveles de Redundancia de Red que Salvarán tu Proceso (STP, RSTP y Redundancia en Anillo)

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/control-de-llenado-de-botellas-o-contenedores-de-liquidos/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Control-de-Llenado-de-Botellas-o-Contenedores-de-Liquidos-scaled.jpg"

                        alt="Control de Llenado de Botellas o Contenedores de Líquidos" width="100%">

                    Control de Llenado de Botellas o Contenedores de Líquidos

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/"

                    target="_blank" rel="noopener noreferrer">

                    <img loading="lazy"

                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg"

                        alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" width="100%">

                    Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción

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

                        alt=" Banco de Pruebas de Fuerza y Fatiga para Control de Calidad" width="100%">

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