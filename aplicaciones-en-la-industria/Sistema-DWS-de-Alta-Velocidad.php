<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema DWS (Dimensioning, Weighing, Scanning) de Alta Velocidad | Logicbus</title>
    <meta name="description"
        content="Esta aplicación es el corazón financiero de los centros de distribución...">
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
                <li class="breadcrumb-item active" aria-current="page">Sistema DWS (Dimensioning, Weighing, Scanning) de Alta Velocidad</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Aplicaciones en la industria" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Aplicaciones en la industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Sistema DWS (Dimensioning, Weighing, Scanning) de Alta Velocidad</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Sistema-DWS-Dimensioning-Weighing-Scanning-de-Alta-Velocidad.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../cincoze"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cincoze.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../ipdisplays"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/ip-displays.webp"
                            alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Esta aplicación es el "corazón financiero" de los centros de distribución. No solo pesa, sino que digitaliza el volumen y el código del paquete para calcular tarifas y optimizar la carga en camiones.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Pesaje Dinámico de Precisión:</b>Debajo de la banda transportadora, se instalan 4 Celdas de Carga <a href="https://tienda.logicbus.com.mx/futek">FUTEK</a> tipo S modelo <a href="https://tienda.logicbus.com.mx/FSH00966_p_6284.html">FSH00966</a> conectadas a 4 dispositivos USB de <a href="https://tienda.logicbus.com.mx/futek">FUTEK</a> modelo <a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html">FSH04720</a>, entregando una señal USB.</li>

                    <li class="mb-3"><b>Activación y Medición:</b>Un sensor fotoeléctrico <a href="https://tienda.logicbus.com.mx/PZICO5_p_11196.html">PZICO5</a> marca <a href="https://tienda.logicbus.com.mx/tri-tronics">Tri-Tronics</a> detecta el final del paquete, un DAQ de la marca <a href="https://tienda.logicbus.com.mx/seneca">SENECA</a> modelo <a href="https://tienda.logicbus.com.mx/Z-D-IN_p_4160.html">Z-D-IN</a>, convierte la señal del sensor a RS485. </li>

                    <li class="mb-3"><b>Cerebro de Procesamiento:</b>Toda la data se centraliza en una PC Industrial <a href="https://tienda.logicbus.com.mx/DV-1000_p_38305.html">DV-1000</a> marca <a href="https://tienda.logicbus.com.mx/cincoze">CINCOZE</a>, con puertos USB y serial RS485. Al no tener ventiladores, esta PC soporta el polvo cartón típico de los almacenes sin sobrecalentarse.</li>

                    <li class="mb-3"><b>Interfaz y Comunicación:</b>El operador visualiza los datos en un monitor industrial <a href="https://tienda.logicbus.com.mx/TM-PC121_p_33676.html">TM-PC121</a> de la marca <a href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a> y mediante conexión Ethernet a un modem, la PC envía la información "Paquete ID + Peso + Volumen" al servidor WMS (Warehouse Management System) para asignar la rampa de salida automática.</li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>FUTEK garantiza que la vibración de la banda no altere la lectura del peso gracias a su alto ancho de banda.</b></li>

                    <li class="mb-3"><b>La PC DV-1000 asegura operación 24/7 sin paros por mantenimiento de hardware.</b></li>

                    <li class="mb-3"><b>Aumenta el throughput al eliminar el cuello de botella del pesaje manual.</b></li>

                    <li class="mb-3"><b>Recuperación de ingresos inmediata al cobrar por peso volumétrico real.</b></li>

                </ul>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/LSB350-S-BEAM-LOAD-CELL-1.jpg" alt="FSH00966" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH00966</p>
                <p>LSB350, 500 lb, celda de carga de tensión y compresión, estándar</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH00966_p_6284.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04720.jpg" alt="FSH04720"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04720</p>
                <p>Kit USB de Alta resolución, USB225, hasta 20 bits de resolución libre de ruido, para celdas de carga de puente completo con salidas de mili voltaje, protección de aluminio</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/PZICO5%20-%201%20-%20copia.jpg" alt="PZICO5" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PZICO5</p>
                <p>General Purpose Photoelectric Sensor EZ Eye, Infrared, Connector Long Range</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PZICO5_p_11196.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/44/z-d-in.jpg" alt="Z-D-IN"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-D-IN</p>
                <p>Módulo de adquisición de datos con 5 entradas digitales</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-D-IN_p_4160.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/dv-1000.jpg" alt="DV-1000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">DV-1000</p>
                <p>Computadora Embebida Robusta de Alto Rendimiento con Procesadores Intel® Core™ 9ª/8ª Generación</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/DV-1000_p_38305.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/290/TM-PC121.jpg" alt="TM-PC121" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TM-PC121</p>
                <p>Monitor industrial mejorado de estabilidad y confiabilidad, Intel i3-7100U 2.4GHz GRACHICS IP65 PANLO IP65 PC</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TM-PC121_p_33676.html"
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
                    <iframe src="https://youtube.com/embed/XaCwfUN8LiA?si=ydAnkCGsldtUHDCs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/dpG28nEyW7s?si=IN-fN123eS06SFjY"
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

            <div class="col-12 col-md-4 text-center mb-3">

                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sistema-dws-de-alta-velocidad-el-nucleo-inteligente-de-los-centros-de-distribucion-modernos/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Sistema-DWS-de-Alta-Velocidad-El-Nucleo-Inteligente-de-los-Centros-de-Distribucion-Modernos.webp"
                        alt="" width="100%">Sistema DWS de Alta Velocidad: El Núcleo Inteligente de los Centros de Distribución Modernos
                </a>
            </div>

            <div class="col-12 col-md-4 text-center mb-3">

                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/computadoras-industriales-cincoze-impulsando-la-logistica-inteligente/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Computadoras-industriales-Cincoze-Impulsando-la-logi%CC%81stica-inteligente.png"
                        alt="" width="100%">Computadoras industriales Cincoze: Impulsando la logística inteligente
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