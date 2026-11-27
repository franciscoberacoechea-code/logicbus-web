<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Monitoreo de Temperatura en Procesos de Forja o Termoformado</title>
    <meta name="description"
        content="Monitorea la temperatura sin contacto en procesos de forja y termoformado con sensores IR CALEX, módulos SENECA, PLC FATEK y paneles TAICENN.">
    <meta name="keywords"
        content="monitoreo de temperatura, forja, termoformado, extrusión, pirómetro infrarrojo, sensor IR CALEX, módulos SENECA, PLC FATEK, panel PC TAICENN, manufactura, control de temperatura, industria metalúrgica, procesos térmicos, medición sin contacto">
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
                    Monitoreo de Temperatura en Procesos de Forja o Termoformado
 </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0"> Monitoreo de Temperatura en Procesos 
                de Forja o Termoformado
            </h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/_Monitoreo de Temperatura en Procesos de Forja o Termoformado.webp" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../calex"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/calex.webp" alt="tri-tronics" width="200px"></a>
                    <a href="../seneca"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/seneca.webp" alt="fatek" width="200px"></a>
                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/fatek.webp" alt="futek" width="200px"></a>
                    <a href="../cincoze"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/cincoze.webp" alt="rechner-sensors"
                            width="200px"></a>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <p class="light-black text-justify"> Esta aplicación se centra en el monitoreo de temperatura sin contacto en procesos de manufactura que 
                    involucran calor extremo, como la forja de metales, el termoformado de plásticos o la extrusión. Medir la temperatura precisa del producto 
                    (no del aire del horno) es crítico para asegurar la maleabilidad correcta del material, prevenir defectos por sobrecalentamiento y garantizar 
                    la calidad estructural del producto final.


                </p>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Medición Sin Contacto (IR):</b> <br>
                        Un sensor pirómetro infrarrojo (IR) de alta temperatura <a href="https://tienda.logicbus.com.mx/PM22-251-HT-CB_p_9521.html">PM2.2-251-HT-CB</a> de <b>CALEX</b> 
                        se monta a una distancia segura, apuntando directamente al material caliente (ej. el lingote de metal o la lámina de plástico) 
                        mientras se mueve o procesa.

                    </li>
                    <li><b>Acondicionamiento y Transmisión de Señal:</b> <br>
                        El sensor IR emite una señal estándar (ej. 4-20mA). Esta señal se envía a un módulo de entrada analógica al equipo<a href="https://tienda.logicbus.com.mx/Z-4AI_p_4149.html">Z-4AI</a> de <b>SENECA</b> 
                        que convierte la señal en Modbus.
                    </li>
                    <li class="mb-3"><b>Control y Monitoreo de Proceso:</b> <br>
                        Un PLC <a href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html">FBs-10MAR2-AC</a> de <b>FATEK integrado con el modulo</b> <a href="https://tienda.logicbus.com.mx/FBS-CB5_p_3431.html">FBs-CB5</a>
                        y realizando las configuraciones necesarias en el software de desarollo <a href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-ultimate-access-de-cimon-desarrollo-y-runtime-ua01-0075-ds">UA01-0075/DS</a>
                        es posible  recibir la lectura de temperatura en tiempo real. Utiliza esta lectura para regular el tiempo de permanencia en el horno o la velocidad del proceso, asegurando que el material esté siempre en el rango térmico óptimo.
                    </li>
                    <li class="mb-3"><b>Visualización y Registro Histórico:</b> <br>
                        Un Panel PC industrial <a href="https://tienda.logicbus.com.mx/CV-115R-P1101-N42-4G-500G-GST60_p_34471.html">CV-115R-P1101-N42-4G-500G-GST6</a> de <b>CINCOZEN</b> con pantalla táctil muestra la tendencia de temperatura en tiempo real. 
                        Los operadores pueden ver picos o caídas y correlacionarlos con la calidad del producto. Los datos se almacenan para análisis de tendencias.

                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Medición precisa de la temperatura del producto, no del ambiente del horno.</b>
                    </li>
                    <li class="mb-3"><b>Evita el desgaste y la falla de sensores de contacto (termopares) en entornos hostiles.</b>
                    </li>
                    <li class="mb-3"><b>Mejora la calidad y consistencia del producto final (metalurgia, formado).</b>
                    </li>
                    <li class="mb-3"><b>Optimiza el consumo de energía del horno al evitar el sobrecalentamiento.</b>
                    </li>
                    <li class="mb-3"><b>Aislamiento de señal robusto (gracias a <a href="https://tienda.logicbus.com.mx/seneca">SENECA</a>   ) para lecturas fiables.</b>
                    </li>
                </ul>
                <a class="button text-center button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/79/pyromini22_1.jpg" alt="PM2.2-251-HT-CB"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">PM2.2-251-HT-CB</p>
                <p>
                    Sensor de temperatura miniatura infrarrojo serie PyroMini 2.2.  Campo de vista de 25:1, 
                    rango de temperatura de medición de 450°C a 2000°C, salida de 4 a 20 mA, emisividad ajustable, sin pantalla.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PM22-251-HT-CB_p_9521.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/Z-4AI.jpg"
                    alt="Z-4AI" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-4AI</p> 
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-4AI_p_4149.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/fbs-10maj2-ac.jpg"
                    alt="FBS-10MAJ2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-10MAJ2-AC</p>
                <p> PLC Industrial Básico con 6 entradas digitales/ 4 salidas de transistor PNP/ puerto de comunicación RS-232. 
                    Alimentacion de 100~240VAC y reloj de tiempo real integrado.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/fbs-10maj2-ac.jpg"
                    alt="FBs-CB5" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBs-CB5</p>
                <p> Tarjeta de expansión para PLC serie FBs con 1 puerto de comunicación RS-485 (Port 2) con indicadores TX y RX
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/309/SCADA_CIMON.jpg"
                    alt="UA01-0075/DS" width="150px">
                <p class="font-weight-bold mt-2 mb-0">UA01-0075/DS</p>
                <p> Licencia de Desarrollo y Runtime (+ web/thin client + Movil) de Ultimate Access de Cimon de 75tags. Hardkey
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-ultimate-access-de-cimon-desarrollo-y-runtime-ua01-0075-ds"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/272/cv-115r-p1101-n42-4g-500g-gst60_2.jpg"
                    alt="CV-115R-P1101-N42-4G-500G-GST60" width="150px">
                <p class="font-weight-bold mt-2 mb-0">CV-115R-P1101-N42-4G-500G-GST60</p>
                <p> Panel PC, pantalla táctil resistiva de 15", Resolución 1024x768, LED 350nits. Frontal IP65. 
                   
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/CV-115R-P1101-N42-4G-500G-GST60_p_34471.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

   <section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: nowrap;">

                <!-- VIDEO 1 -->
                <div style="width: 320px;">
                    <iframe width="100%" height="180"
                        src="https://www.youtube.com/embed/kdUV3_Eludk?si=T_rleefo1ilkoIuM"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- VIDEO 2 -->
                <div style="width: 320px;">
                    <iframe width="100%" height="180"
                        src="https://www.youtube.com/embed/lV6ge8h0OwQ?si=ADZ7WCbTNzQovKOG"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- VIDEO 3 -->
                <div style="width: 320px;">
                    <iframe width="100%" height="180"
                        src="https://www.youtube.com/embed/Liq60pW6pgI?si=rei39ZSy45H4iROs"
                        frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </section>

  


    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
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
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/madgetech-cloud/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2021/03/MadgeTech-Cloud.png"
                        alt="MadgeTech Cloud ofrece configuración, conveniencia y cumplimiento"
                        width="100%">
                    MadgeTech Cloud ofrece configuración, conveniencia y cumplimiento
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/control-total-en-procesos-termicos-de-alimentos/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/12/control-termico-de-alimentos-1.png"
                        alt="Control total en procesos térmicos de alimentos."
                        width="100%">
                    Control total en procesos térmicos de alimentos.
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
                        alt=" Control de Llenado de Botellas o Contenedores de Líquidos" width="100%">
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