<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de cadena de suministro en frío | Logicbus</title>
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
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de cadena de suministro en frío</li>
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
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de cadena de suministro en frío</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-cadena-de-suministro-en-frio.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../loggerflex"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/loggerflex.webp"
                            alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Esta aplicación permite la monitorización continua y en tiempo real de las condiciones ambientales durante el transporte y almacenamiento de productos sensibles a la temperatura, como vacunas, fármacos, biológicos y otros insumos médicos. Mediante el uso de registradores de datos inteligentes, conectividad IoT y una plataforma en la nube, se asegura la integridad del producto a lo largo de toda la cadena de suministro, reduciendo riesgos de pérdida, mermas y no conformidades regulatorias.</p>
                <p class="light-black">El sistema registra y transmite variables críticas como temperatura y humedad, garantizando trazabilidad completa y cumplimiento con normativas internacionales gracias a su certificación rastreable a NIST.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <p class="light-black font-weight-bold">Medición de Variables Críticas</p>

                <p class="light-black">El registrador <a href="https://tienda.logicbus.com.mx/EDWIPH_p_38127.html">Edge Pharma</a> se instala dentro del contenedor, vehículo refrigerado o área de transporte. Este dispositivo mide de forma continua variables como:</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Temperatura</b></li>

                    <li class="mb-3"><b>Humedad relativa</b></li>

                </ul>

                <p class="light-black">Las mediciones se realizan con sensores de alta precisión, ideales para aplicaciones farmacéuticas y de salud.</p>

                <p class="light-black font-weight-bold">Transmisión de Datos a la Nube</p>

                <p class="light-black">El dispositivo envía los datos automáticamente a la nube de LoggerFlex (LF Cloud) mediante dos opciones de conectividad:</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Conexión WiFi,</b>a través de un router o módem.</li>

                    <li class="mb-3"><b>Conexión celular</b>utilizando redes móviles y antenas terrestres.</li>

                </ul>

                <p class="light-black">El equipo puede configurarse para usar ambas conexiones, priorizando WiFi y cambiando automáticamente a señal celular en caso de pérdida de conectividad, asegurando la transmisión ininterrumpida de la información.</p>

                <p class="light-black font-weight-bold">Sincronización y Almacenamiento de Información</p>

                <p class="light-black">Los datos se sincronizan con la nube en intervalos previamente configurados, donde se almacenan de forma segura. Toda la información queda respaldada en LF Cloud, protegida mediante credenciales de acceso y con trazabilidad completa de los registros.</p>


                <p class="light-black font-weight-bold">Visualización Remota y Acceso Multiplataforma</p>

                <p class="light-black">Los usuarios pueden consultar la información en tiempo real o histórica desde cualquier lugar, utilizando:</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Computadora (PC)</b></li>

                    <li class="mb-3"><b>Teléfono celular</b></li>

                </ul>

                <p class="light-black">A través de la interfaz web de LoggerFlex, es posible visualizar gráficas, estados del equipo y registros detallados de cada envío o unidad monitoreada.</p>

                <p class="light-black font-weight-bold">Gestión de Alarmas y Notificaciones</p>

                <p class="light-black">El sistema cuenta con múltiples tipos de alarmas configurables, entre ellas:</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Alarmas por alta o baja temperatura</b></li>

                    <li class="mb-3"><b>Alarmas por alta o baja humedad</b></li>

                    <li class="mb-3"><b>Alarmas por pérdida de conectividad</b></li>

                    <li class="mb-3"><b>Alarmas por batería baja</b></li>

                    <li class="mb-3"><b>Alarmas por apertura de puertas (según configuración)</b></li>

                </ul>

                <p class="light-black">Cuando una variable supera los umbrales definidos, el sistema genera <b>alertas automáticas</b> que notifican de inmediato al personal responsable a través de múltiples medios, tales como <b>correo electrónico, mensajes de texto (SMS) y llamadas telefónicas</b>, asegurando una respuesta oportuna ante cualquier desviación en la cadena de frío.</p>
                <p class="light-black">Adicionalmente, el equipo cuenta con <b>alertas locales</b>, incluyendo <b>indicadores visuales en pantalla y avisos sonoros mediante buzzer</b>, lo que permite identificar rápidamente cualquier condición fuera de rango directamente en el punto de operación, incluso sin acceso a la plataforma en la nube.</p>

                <p class="light-black font-weight-bold">Cumplimiento Normativo y Certificación</p>

                <p class="light-black">El equipo cuenta con certificado de calibración rastreable a <b>NIST (National Institute of Standards and Technology)</b>, lo que garantiza la confiabilidad de las mediciones y facilita el cumplimiento de normativas y auditorías en la industria farmacéutica y de salud.</p>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3">Monitoreo continuo de la cadena de frío durante transporte y almacenamiento.</li>

                    <li class="mb-3">Protección de vacunas, fármacos y productos sensibles.</li>

                    <li class="mb-3">Conectividad redundante (WiFi y celular) para mayor confiabilidad.</li>

                    <li class="mb-3">Alarmas en tiempo real para acción preventiva.</li>

                    <li class="mb-3">Acceso remoto desde PC o celular.</li>

                    <li class="mb-3">Datos seguros, trazables y auditables en la nube.</li>

                    <li class="mb-3">Certificación rastreable a NIST para cumplimiento regulatorio.</li>

                    <li class="mb-3">Reducción de pérdidas, rechazos y riesgos operativos.</li>

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
                <img src="https://tienda.logicbus.com.mx/assets/images/269/edwiph.jpg" alt="EDWIPH" width="150px">
                <p class="font-weight-bold mt-2 mb-0">EDWIPH</p>
                <p>LSB350, 500 lb, celda de carga de tensión y compresión, estándar</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH00966_p_6284.html"
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
                    <iframe src="https://youtube.com/embed/VlkUsJywb3w?si=eiQqmN3A_k-6QNbk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://youtube.com/embed/skO1Plr1DDs?si=CI1CkwHQV-pRelK5"
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

                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/panorama-de-la-automatizacion-industrial-en-mexico-2026/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Panorama-de-la-Automatizacion-Industrial-en-Mexico-2026.webp"
                        alt="" width="100%">Panorama de la Automatización Industrial en México 2026
                </a>
            </div>

            <div class="col-12 col-md-4 text-center mb-3">

                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/tendencias-2026-en-automatizacion-logistica-arquitectura-autonomia-y-control-en-sistemas-inteligentes/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/01/Tendencias-2026-en-automatizacion-logistica-arquitectura_-autonomia-y-control-en-sistemas-inteligent.webp"
                        alt="" width="100%">Tendencias 2026 en automatización logística: arquitectura, autonomía y control en sistemas inteligentes
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