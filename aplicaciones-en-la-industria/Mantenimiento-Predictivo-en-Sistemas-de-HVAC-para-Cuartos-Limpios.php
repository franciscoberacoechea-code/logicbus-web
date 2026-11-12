<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento Predictivo en Sistemas de HVAC para Cuartos Limpios | Logicbus</title>
    <meta name="description" content="La liofilización (deshidratación por frío) es crítica para estabilizar medicamentos inyectables...">
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
                <li class="breadcrumb-item active" aria-current="page">Mantenimiento Predictivo en Sistemas de HVAC para Cuartos Limpios</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Mantenimiento Predictivo en Sistemas de HVAC para Cuartos Limpios</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Mantenimiento-Predictivo-en-Sistemas-de-HVAC-para-Cuartos-Limpios.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../icp-das"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/icpdas.webp" alt="icpdas" width="200px"></a>
                    <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp" alt="seneca" width="200px"></a>
                    <a href="../national-control-devices-ncd"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/ncd.webp" alt="NCD" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">El aire proveniente del exterior o recirculado, transporta varios contaminantes biológicos, químicos y físicos. Muchos de estos son dañinos tanto para productos o personas que se ubican en áreas donde los contaminantes necesitan ser removidos por razones médicas, sociales, industriales, legales, etc.</p>
                <p class="light-black">Los cuartos limpios son estrictamente construidos en ambientes controlados donde los contaminantes se mantienen dentro de los límites especificados. En la industria son utilizados en los siguientes sectores: </p>
                <ul class="light-black">
                    <li class="mb-3">Tecnología y Electrónica</li>
                    <li class="mb-3">Ciencias de la salud y Farmacias</li>
                    <li class="mb-3">Industria Aeroespacial y Automotriz</li>
                    <li class="mb-3">Industria Alimentaria y Cosmética</li>
                </ul>
                <p class="light-black">Existen reglas fundamentales para el diseño de cuartos limpios, estas son definidas por la norma industrial 209 e ISO 14644-1.</p>
                <p class="light-black">El Sistema HVAC – La integridad del entorno de la sala limpia se crea mediante el diferencial de presión en comparación con las áreas adyacentes a través del sistema de calefacción, ventilación y aire acondicionado. Los requisitos del sistema HVAC incluyen:</p>
                <ul class="light-black">
                    <li class="mb-3">Suministrar un flujo de aire en volumen y limpieza suficientes para mantener la clasificación de limpieza de la sala.</li>
                    <li class="mb-3">Introducir el aire de manera que se eviten zonas de estancamiento donde las partículas podrían acumularse.</li>
                    <li class="mb-3">Filtrar el aire exterior y el recirculado a través de filtros de aire de alta eficiencia para partículas (HEPA).</li>
                    <li class="mb-3">Acondicionar el aire para cumplir con los requisitos de temperatura y humedad de la sala limpia.</li>
                    <li class="mb-3">Garantizar suficiente aire de reposición (makeup air) acondicionado para mantener la presurización positiva especificada.</li>
                </ul>
                <ul class="light-black">
                    <li class="mb-3">Los contaminantes provenientes del exterior, no deben introducirse al ambiente controlado. Por ello, con el dispositivo <a href="https://tienda.logicbus.com.mx/DLW-1023_p_38371.html">DLW-1023</a> podrá monitorear el ambiente de donde proviene el aire que ingresará al cuarto limpio, detectando partículas suspendidas (PM1, PM2.5, PM10), velocidad del viento, dirección del viento, presión, iluminancia, nivel del mar, humedad relativa, temperatura, CO/CO2, registrar los datos, enviar información mediante protocolos de comunicación como Modbus RTU/TCP, MQTT. </li>
                </ul>
                <p class="light-black">A su vez se utilizan pre filtros HEPA (0.3 micrones) y ultra filtros ULPA (0.001 micrones).</p>
                <ul class="light-black">
                    <li class="mb-3">Los aparatos o equipos dentro del ambiente controlado no deben generar o producir contaminantes, por ejemplo el resultado de fricción, reacciones químicas, o procesos biológicos. No se debe permitir que los contaminantes se acumulen en el ambiente controlado. Los contaminantes existentes deben eliminarse en la mayor medida posible y tan rápido como sea posible. Por tal motivo se utiliza el registrador de datos de temperatura, humedad, CO, CO2, partículas (0.3μm, 0.5μm, 1μm, 2.5μm, 5μm, 10μm), modelo <a href="https://tienda.logicbus.com.mx/DL-1023_p_38372.html">DL-1023</a> con el que se pueden obtener mediciones, registros, envío de datos mediante protocolos de comunicación como Modbus RTU/TCP, MQTT, Ethernet, iOS APP y Android App para monitoreo desde cualquier lugar en cualquier momento. </li>
                </ul>
                <p class="light-black">Sistemas de Monitoreo – Los sistemas de monitoreo incluyen los medios para indicar que la sala limpia está funcionando correctamente. Las variables monitoreadas son el diferencial de presión entre el ambiente exterior y la sala limpia, la temperatura, la humedad y, en algunos casos, el ruido y las vibraciones. Los datos de control deben registrarse de forma rutinaria.</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Análisis de Vibración y Corriente:</b> Se instalan sensores de vibración inalámbricos, con protocolo abierto de comunicación, como el  <a href="https://tienda.logicbus.com.mx/PR55-67A_p_35804.html">PR55-67A</a> en los motores del sistema HVAC.  También se utilizan analizadores de energía que se instalan en el suministro de energía del sistema HVAC como el <a href="https://tienda.logicbus.com.mx/S711B6MOD_p_13173.html">S711B6MOD</a> que cuenta con protocolo de comunicación Modbus TCP/RTU para analizar armónicos y calidad de energía.</li>
                    <li class="mb-3"><b>Gestión del Mantenimiento:</b> Si el <a href="https://tienda.logicbus.com.mx/PR55-67A_p_35804.html">PR55-67A</a> detecta vibración y temperatura del motor excesivo, los datos se envían mediante el protocolo de comunicación Modbus al sistema de monitoreo de su elección, donde se podrá visualizar la información que conlleve a la toma de decisiones.</li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b>Continuidad de Negocio: Gestiona el mantenimiento preventivo, evita fallas en el sistema HVAC, reduce riesgo de pérdidas.</b></li>
                <li class="mb-3"><b>Cumplimiento ISO: Mantiene los parámetros de presión diferencial y cambios de aire por hora exigidos por la norma ISO 14644.</b></li>
                <li class="mb-3"><b>Vida Útil del Equipo: Detectar vibraciones a tiempo, extiende la vida útil del sistema HVAC. </b></li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/02/dlw-1023-1.jpg" alt="DLW-1023" width="150px">
                <p class="font-weight-bold mt-2 mb-0">DLW-1023</p>
                <p>Sensores miniaturizados de contaminación por gases y partículas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/DLW-1023_p_38371.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/02/dl-1023.jpg" alt="DL-1023" width="150px">
                <p class="font-weight-bold mt-2 mb-0">DL-1023</p>
                <p>Registrador de datos DL-1000 para calidad del aire y detección de gases</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/DL-1023_p_38372.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/286/pr55-67a.jpg" alt="PR55-67A" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PR55-67A</p>
                <p>Sensor Inteligente Inalámbrico de Vibración y Temperatura IoT Industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/PR55-67A_p_35804.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/44/s711_lr.jpg" alt="S711B6MOD" width="150px">
                <p class="font-weight-bold mt-2 mb-0">S711B6MOD</p>
                <p>LCD 96x96 BASIC Medidor de energía, TA1 / 5A-RS485 Modbus, 1MB mem. Log., 1 DI 2 DO</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/S711B6MOD_p_13173.html" target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/ukPZcVyS9xk?si=txmoYH6JLHKjmKAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/MLlp2ufcbDs?si=bc7hs9vD9rnpHe2u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/monitoreo-de-procesos-de-liofilizacion-farmaceutica-control-total-para-garantizar-la-calidad-del-medicamento/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/12/Monitoreo-de-Procesos-de-Liofilizacion-Farmaceutica-Control-Total-para-Garantizar-la-Calidad-del-Med-2048x1024.webp" alt="Monitoreo de Procesos de Liofilización Farmacéutica: Control Total para Garantizar la Calidad del Medicamento" width="100%">Monitoreo de Procesos de Liofilización Farmacéutica: Control Total para Garantizar la Calidad del Medicamento
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg" alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" width="100%">Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción
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
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
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