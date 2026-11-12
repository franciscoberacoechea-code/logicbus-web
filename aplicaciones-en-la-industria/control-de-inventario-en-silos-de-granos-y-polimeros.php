<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Inventario en Silos de Granos y Polímeros | Logicbus</title>
    <meta name="description"
        content="En centros logísticos que manejan materias primas a granel, como granos o polímeros, conocer con precisión el nivel de inventario en los silos es crítico para la planificación del transporte y la continuidad operativa.">
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
                <li class="breadcrumb-item active" aria-current="page">Control de Inventario en Silos de Granos y
                    Polímeros</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Control de Inventario en Silos de Granos y Polímeros
            </h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/control-de-inventario-en-silos-de-granos-y-polimeros.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="futek" width="200px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="fatek" width="200px"></a>
                    <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp"
                            alt="seneca" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">En centros logísticos que manejan materias primas a granel, como granos o
                    polímeros, conocer con precisión el nivel de inventario en los silos es crítico para la
                    planificación del transporte y la continuidad operativa.
                </p>
                <p class="light-black">Esta aplicación permite conocer el inventario real en tiempo casi real, sin
                    depender de estimaciones o mediciones manuales.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo Funciona la Aplicación?</p>

                <ol class="light-black">
                    <li class="mb-3"><b>1. Pesaje Estructural del Silo</b> En lugar de utilizar sensores de nivel
                        convencionales, se instalan celdas de carga tipo pancake de la serie <a
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake">LCF</a>
                        de la marca <a href="https://www.logicbus.com.mx/futek">FUTEK</a> en
                        las patas de la estructura del silo. Asimismo, se integra la caja de conexiones modelo <a
                            href="https://tienda.logicbus.com.mx/FSH02126_p_10162.html">FSH02126</a>,
                        la cual permite realizar la ecualización y suma de las señales de las celdas de carga.
                        Estas celdas miden directamente el peso total del silo, lo que permite calcular con alta
                        precisión la cantidad de material almacenado, independientemente de la densidad o forma del
                        producto.
                    </li>
                    <li class="mb-3"><b>2. Acondicionamiento y Digitalización de la Señal</b>La señal proveniente de la
                        caja sumadora se conecta al módulo <a
                            href="https://tienda.logicbus.com.mx/Z-4AI_p_4149.html">Z-4AI</a> de la marca <a
                            href="https://www.logicbus.com.mx/seneca">SENECA</a>.
                        Este equipo acondiciona la señal y la convierte a un protocolo industrial estándar, como Modbus
                        RTU sobre RS485, facilitando su integración con sistemas de control.
                    </li>
                    <li class="mb-3"><b>3. Transmisión Remota de Datos</b>El transmisor se enlaza a un gateway modelo
                        <a href="https://tienda.logicbus.com.mx/R-KEY-LT_p_17438.html">R-KEY-LT</a> de la marca <a
                            href="https://www.logicbus.com.mx/seneca">SENECA</a>, que permite enviar la información del
                        peso a través de Ethernet
                        hacia la sala de control o el sistema central de supervisión.
                    </li>
                    <li class="mb-3"><b>4. Visualización y Control Operativo</b> El operador visualiza el nivel de
                        llenado del silo en tiempo real desde una HMI modelo <a
                            href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi-pantallas-hmi-con-plc-p5070n">P5070N</a>
                        de la marca <a href="https://www.logicbus.com.mx/fatek">FATEK</a>, donde puede
                        consultar inventarios, alarmas de nivel mínimo/máximo y estados del sistema.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3">El pesaje estructural con FUTEK es el método más preciso y confiable para medir
                    inventario en aplicaciones a granel.</li>
                <li class="mb-3">El transmisor SENECA ofrece alta estabilidad, fácil calibración y excelente
                    repetibilidad en el tiempo.</li>
                <li class="mb-3">Permite programar automáticamente el reabastecimiento o despacho de material,
                    optimizando la logística de camiones.</li>
                <li class="mb-3">Elimina el riesgo operativo asociado a que personal suba al silo para realizar
                    mediciones manuales.</li>

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
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH02126.jpg" alt="FSH02126" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH02126</p>
                <p>Caja de conexiones no amplificada, 1-4 canales, clasificación Nema 4, material: poliuretano, estándar
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH02126_p_10162.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/Z-4AI.jpg" alt="Z-4AI" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Z-4AI</p>
                <p></p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z-4AI_p_4149.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/r-key-lt.jpg" alt="R-KEY-LT" width="150px">
                <p class="font-weight-bold mt-2 mb-0">R-KEY-LT</p>
                <p>Gateway compacto de Modbus RTU/ASCII a Modbus TCP/IP. Fuente de alimentación: 10~40VDC; 19~28VAC. 1x
                    Puerto Ethernet, 1x puerto serie RS232/RS485 seleccionable. Función de modo Puente: De Modbus TCP-IP
                    a Modbus RTU/ASCII o viceversa.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/R-KEY-LT_p_17438.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/p5070n.jpg" alt="P5070N" width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070N</p>
                <p>Pantalla HMI Avanzada de Fatek Serie P5 7"TFT LCD Flash 256Mb RAM 128Mb CPU 32bit con RTC, Serial
                    1(RS-232) 2(Iso RS-422/485,RS-485) Ethernet(10M/100M) USB 2.0 Mini USB PLC port, Alimentacion
                    24Vdc(9.3W), carcasa plastica, soporta Fatek IoT</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-pantallas-hmi-pantallas-hmi-con-plc-p5070n"
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
                    <iframe src="https://www.youtube.com/embed/D8HDUJcoNOI?si=-1Cv3VGyorp015vn"
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
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/optimizacion-de-inventarios-a-granel-precision-mediante-pesaje-estructural-en-silos/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/02/Optimizacion-de-Inventarios-a-Granel-Precision-mediante-Pesaje-Estructural-en-Silos-2048x1024.webp"
                        alt="Optimización de Inventarios a Granel: Precisión mediante Pesaje Estructural en Silos"
                        width="100%">Optimización de Inventarios a Granel: Precisión mediante Pesaje Estructural en
                    Silos
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