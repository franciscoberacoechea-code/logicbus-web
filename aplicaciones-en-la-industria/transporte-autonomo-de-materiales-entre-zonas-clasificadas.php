<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transporte Autónomo de Materiales entre Zonas Clasificadas | Logicbus</title>

    <meta name="description"

        content="Optimiza el transporte en zonas limpias ISO 7/8 con AMRs certificados: cero contacto humano, trazabilidad total y cumplimiento GMP garantizado.">

    <meta name="keywords"

        content="Transporte Autónomo, Materiales, Zonas Clasificadas, AMRs, ISO 7/8, GMP, Trazabilidad, Automatización, Industria Farmacéutica, Industria Alimentaria">

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

                    Transporte Autónomo de Materiales entre Zonas Clasificadas </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Transporte Autónomo de Materiales entre Zonas Clasificadas" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile"

            alt="Transporte Autónomo de Materiales entre Zonas Clasificadas" class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0">Transporte Autónomo de Materiales entre Zonas

                Clasificadas

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/transporte-autonomo-de-materiales-entre-zonas-clasificadas.png" alt="Diagrama"

                    width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"

                            alt="fatek" width="200px"></a>

                    <a href="../madgetech"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>

                    <a href="../quasi"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/quasi.webp"

                            alt="quasi" width="200px"></a>

                    <a href="../rfid"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/rfid.webp"

                            alt="rfid" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">Esta aplicación utiliza vehículos autónomos móviles (AMRs) diseñados

                    para operar en ambientes regulados como zonas clasificadas ISO 7/8 (GMP), con flujos de aire

                    controlado y restricciones estrictas de contaminación cruzada. El sistema permite transportar

                    materiales —insumos, semielaborados, o productos terminados— entre áreas de producción, pesaje,

                    cuarentena y almacenamiento sin intervención humana directa, garantizando cumplimiento normativo,

                    eficiencia logística y trazabilidad total.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Solicitud de Transporte Automatizado</b> <br>

                        Desde una estación <a

                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi-hmi-de-pantalla-tactil-p2070na">HMI

                            FATEK P2070NA</a>, el operador solicita el transporte de un material (ej.

                        lote de producto en cuarentena) entre dos salas clasificadas. El sistema de gestión de flota

                        asigna el AMR <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a>

                        más cercano con carga disponible.

                    </li>

                    <li><b>Verificación de Condiciones Ambientales y Validación de Ruta</b> <br>

                        Antes de salir de una zona, el AMR <a

                            href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a> valida que

                        las puertas estén cerradas, que los

                        sensores ambientales <a

                            href="https://tienda.logicbus.com.mx/NanoTemp125-1_p_38071.html">Magdetech

                            NanoTemp125-1</a>, estén dentro de parámetros y que no

                        haya

                        obstáculos o personal en la trayectoria.

                    </li>

                    <li class="mb-3"><b>Transporte Autónomo entre Zonas</b> <br>

                        El AMR <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a> navega

                        de forma autónoma usando sensores LIDAR, mapeo SLAM y escáneres de

                        seguridad. Durante el trayecto, cruza múltiples zonas clasificadas.

                    </li>

                    <li class="mb-3"><b>Identificación y Confirmación de Carga</b> <br>

                        Los materiales transportados cuentan con etiquetas <a

                            href="https://tienda.logicbus.com.mx/RS3015_p_26078.html">RFID RS3015</a>, las cuales son

                        escaneadas por

                        lectores <a href="https://tienda.logicbus.com.mx/3048E_p_31369.html">3048E</a> integrados al AMR

                        <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a>. Esto

                        permite asegurar trazabilidad total, con

                        confirmación del código de lote, número de orden y tiempo exacto del movimiento.

                    </li>

                    <li class="mb-3"><b>Entrega y Registro de Evento</b>

                        <br>

                        En el punto de entrega, el AMR <a

                            href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a> se detiene,

                        descarga automáticamente el material

                        (mediante un elevador o sistema neumático), y notifica al sistema de supervisión. Todos los

                        eventos quedan registrados con sello de tiempo en el SCADA, incluyendo condiciones ambientales y

                        autorizaciones.

                    </li>

                    <li><b>Retorno y Autodesinfección (opcional)</b>Algunos AMRs como el <a

                            href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">Quasi Model C2</a> pueden

                        dirigirse

                        a una estación de desinfección automática antes de volver a su base, cumpliendo protocolos de

                        descontaminación en zonas estériles.</li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Cumplimiento con Normas GMP e ISO Cleanroom: </b> Equipos certificados para

                        operar en ambientes controlados, con bajo riesgo de contaminación cruzada.

                    </li>

                    <li class="mb-3"><b>Reducción del Contacto Humano: </b>Minimiza errores, manipulación y riesgos

                        biológicos o químicos en el transporte interno.

                    </li>

                    <li class="mb-3"><b>Trazabilidad y Seguridad: </b> Cada movimiento de material queda registrado con

                        identificadores únicos, condiciones ambientales y responsables del proceso.

                    </li>

                    <li class="mb-3"><b>Automatización Inteligente: </b> AMRs adaptan sus rutas en tiempo real, evitando

                        congestión y gestionando prioridades logísticas.

                    </li>

                    <li class="mb-3"><b>Integración con Sistemas Existentes: </b>Compatible con ERP, MES, SCADA y

                        sistemas de acceso (por ejemplo, control de puertas, salas limpias).

                    </li>

                    <li class="mb-3"><b>Optimización de Recursos: </b>Aumenta la eficiencia de transporte interno sin

                        necesidad de operarios constantes ni vehículos manuales.</li>

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

                <img src="https://tienda.logicbus.com.mx/assets/images/p2070na.jpg" alt="P2070NA" width="150px">

                <p class="font-weight-bold mt-2 mb-0">P2070NA</p>

                <p>Pantalla HMI Basica de la Serie P2 de Fatek 7"TFT LCD Flash 128Mb RAM 128Mb CPU 32bit con RTC, Serial

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi-hmi-de-pantalla-tactil-p2070na"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/331/model-c2.jpg" alt="QC2-00001" width="150px">

                <p class="font-weight-bold mt-2 mb-0">QC2-00001</p>

                <p>Carro de entrega autónomo robot model C2 AMR

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/09/nanotemp125.jpg" alt="NanoTemp125-1"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">NanoTemp125-1</p>

                <p>Registrador de temperatura miniatura para ambientes hostiles, cuerpo de acero inoxidable, sumergible,

                    de alta precisión (±0.1 C), rango temperatura -20 a 125 C. con sonda de 1 pulgada.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/NanoTemp125-1_p_38071.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/292/807-0019-rs3015.jpg" alt="RS3015"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">RS3015</p>

                <p>Etiqueta en rollo 30x15mm, UHF 902-928 MHz RFID pasivo

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RS3015_p_26078.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/806-0068.jpg" alt="3048E" width="150px">

                <p class="font-weight-bold mt-2 mb-0">3048E</p>

                <p>Model 3048E Hand Held 915 MHz UHF RFID Reader accommodates either an Android or iPhone on its

                    mounting accessory but on its own is capable of USB, Bluetooth

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/3048E_p_31369.html"

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

                    <iframe src="https://www.youtube.com/embed/9i3pFE4_rsY?si=h7gOHcagaOQCxbqv"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

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





        </div>

    </section>



    <!--ARTICULOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/panel-pcs-con-procesadores-de-12va-generacion-de-taicenn/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/taicenn-4.png"

                        alt="Panel PCs con procesadores de 12va Generación de TAICENN" width="100%">

                    Panel PCs con procesadores de 12va Generación de TAICENN

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/nuevos-osciloscopios-sds7000a-ap-de-siglent-rendimiento-de-hasta-8-ghz-para-aplicaciones-avanzadas-de-prueba-y-analisis/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Nuevos-osciloscopios-SDS7000AAP-de-SIGLENT-scaled.jpg"

                        alt="Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas de prueba y análisis"

                        width="100%">

                    Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas

                    de prueba y análisis

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/por-que-siglent-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Por-que-SIGLENT-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico-2048x1024.jpg"

                        alt="¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?"

                        width="100%">

                    ¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/davo-lin-teclados-industriales-de-alta-resistencia-distribuidos-por-logicbus/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/DAVO-LIN-Teclados-Industriales-de-Alta-Resistencia-Distribuidos-por-Logicbus-scaled.jpg"

                        alt="DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus"

                        width="100%">

                    DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus</a>

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

                        alt="Transporte Autónomo de Materiales entre Zonas Clasificadas" width="100%">

                </div>

                <div class="modal-footer">

                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->

                </div>

            </div>

        </div>

    </div>



            <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
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