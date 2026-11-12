<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pesaje Dinámico de Camiones (Weigh-In-Motion) con Reconocimiento de Matrículas | Logicbus</title>
    <meta name="description"
        content="Evita filas en el proceso de pesaje. En los grandes CEDIS, el proceso de pesar camiones en una báscula estática es un cuello de botella enorme.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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

    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sistema de Pesaje Dinámico de Camiones
                    (Weigh-In-Motion)</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Sistema de Pesaje Dinámico de Camiones
                (Weigh-In-Motion) con Reconocimiento de Matrículas</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Sistema-de-Pesaje-Dinamico-de-Camiones-con-Reconocimiento-de-Matriculas.png"
                    alt="Diagrama Pesaje Dinámico" width="100%">

                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="Futek" width="150px"></a>
                    <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp"
                            alt="Seneca" width="150px"></a>
                    <a href="../cincoze"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cincoze.webp"
                            alt="Cincoze" width="150px"></a>
                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"
                            alt="Taicenn" width="150px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>Evita filas en el proceso de pesaje.</b> En los grandes CEDIS, el proceso de
                    pesar camiones en una báscula estática es un cuello de botella enorme: el camión debe detenerse, el
                    chofer bajar, pesar, y volver a subir. Esto crea filas kilométricas. Esta aplicación permite pesar
                    el camión mientras está en movimiento (a 10-15 km/h) al ingresar al patio, digitalizando el peso y
                    la identidad del vehículo en milisegundos.
                </p>

                <p class="text-center light-black font-weight-bold">Cómo Funciona</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Sensores en Pavimento:</b> Se instalan celdas de carga modelo <a
                            href="https://tienda.logicbus.com.mx/FSH04536_p_34391.html" target="_blank"><b>FSH04536
                                Futek</b></a> debajo de una placa metálica que se incrusta en el carril de entrada. Para
                        concentrar las señales de las celdas de carga se añade la caja sumadora <a
                            href="https://tienda.logicbus.com.mx/FSH02126_p_10162.html" target="_blank"><b>IAC200
                                Futek</b></a> que
                        proporciona una señal de salida estándar de 4 a 20 mA.
                    </li>
                    <li class="mb-3"><b>Cerebro de Procesamiento (Compute):</b> La caja sumadora IAC200 Futek envía los
                        datos crudos a un registrador, modelo <a
                            href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank"><b>Z-LTE-WW de
                                Seneca</b></a>. Este a su vez estará conectado
                        a la computadora Industrial modelo <a href="https://tienda.logicbus.com.mx/DS-1500_p_38310.html"
                            target="_blank"><b>DS-1500 de Cincoze</b></a>, ubicada en la caseta de
                        vigilancia. Esta computadora realizará lo siguiente:
                        <ul class="mt-2">
                            <li>Ejecutar el software <a href="https://tienda.logicbus.com.mx/DS-1500_p_38310.html"
                                    target="_blank"><b>SeAL de Seneca</b></a> para configurar y programar el registrador
                                Z-LTE-WW.</li>
                            <li>Visualizar datos en tiempo real utilizando el servidor web del dispositivo registrador.
                            </li>
                            <li>Gestionar la conexión con la nube.</li>
                            <li>Procesar la imagen de una cámara IP para leer la matrícula del camión (OCR/ANPR)
                                simultáneamente.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Visualización de datos:</b> La computadora mostrará los datos consolidados en el
                        monitor industrial touch de 21.5 pulgadas modelo <a
                            href="https://tienda.logicbus.com.mx/TM-PC215_p_33911.html" target="_blank"><b>TM-PC215 de
                                la marca Taicenn</b></a>.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black">
                    <li class="mb-3"><b>Fluidez Operativa:</b> Aumenta el flujo de camiones por hora al eliminar el alto
                        total.</li>
                    <li class="mb-3"><b>Potencia de Cómputo:</b> La computadora Industrial modelo <a
                            href="https://tienda.logicbus.com.mx/DS-1500_p_38310.html" target="_blank"><b>DS-1500 de
                                Cincoze</b></a> es necesaria
                        porque el procesamiento de imágenes (matrículas) y señales analógicas rápidas (peso) saturaría a
                        un controlador estándar.</li>
                    <li class="mb-3"><b>Seguridad:</b> Detecta fraudes o robos de mercancía comparando el peso de
                        entrada vs. salida automáticamente.</li>
                </ul>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMENDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04536.jpg" alt="FSH04536" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04536 (Futek)</p>
                <p>Celdas de carga para instalación en pavimento (incrustadas bajo placa metálica).</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04536_p_34391.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH02126.jpg" alt="IAC200" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IAC200 (Futek)</p>
                <p>Caja sumadora para concentrar señales de celdas de carga. Salida estándar 4-20 mA.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH02126_p_10162.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/44/z-lte-ww.jpg" alt="Z-LTE-WW" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-LTE-WW (Seneca)</p>
                <p>Registrador de datos (Datalogger) con servidor web integrado y capacidades de configuración mediante
                    software SeAL.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/ds-1500.jpg" alt="DS-1500" width="150px">
                <p class="font-weight-bold mt-2 mb-0">DS-1500 (Cincoze)</p>
                <p>Computadora Industrial Rugerizada de alto rendimiento para procesamiento de imágenes y señales
                    analógicas rápidas.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/DS-1500_p_38310.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/290/TM-PC215.jpg" alt="TM-PC215" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TM-PC215 (Taicenn)</p>
                <p>Monitor industrial touch de 21.5 pulgadas para visualización de datos en caseta.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TM-PC215_p_33911.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/yJoajvt26Ek?si=0wsUU_JK2v12j-ZD"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/sistema-de-pesaje-dinamico-de-camiones-weigh-in-motion-con-reconocimiento-de-matriculas/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Sistema-de-Pesaje-Dinamico-de-Camiones-Weigh-In-Motion-con-Reconocimiento-de-Matriculas.webp"
                        alt="Sistema de pesaje dinámico de camiones (weigh-in-motion) con reconocimiento de matrículas"
                        width="100%">
                    Sistema de pesaje dinámico de camiones (weigh-in-motion) con reconocimiento de matrículas
                </a>
            </div>
        </div>
    </section>

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