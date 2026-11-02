<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CIMON Automation | Automatización industrial y sistemas de control - Logicbus</title>

    <meta name="description"
        content="CIMON ofrece soluciones de automatización industrial con más de 20 años de experiencia. Su portafolio incluye PLC, HMI, IPC y SCADA para fábricas inteligentes, garantizando eficiencia, confiabilidad e innovación en manufactura y control de procesos.">
    <meta name="keywords"
        content="CIMON, automatización industrial, PLC CIMON, HMI CIMON, SCADA CIMON, IPC CIMON, fábricas inteligentes, Industria 4.0, control de procesos, sistemas de supervisión, RTU, software de automatización, control remoto industrial">

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $estilos; ?> <!-- CSS General de la marca -->

    <style>
        /* Ocultar barra lateral antigua para usar full-width */
        #leftBar {
            display: none;
        }

        /* BANNER FULL WIDTH */
        .banner-full {
            width: 100%;
            margin-bottom: 3rem;
        }

        .banner-full img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ESTILIZACIÓN DE LINKS (Apegados a la marca Logicbus) */
        a {
            color: var(--lb-accent);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--lb-primary);
            text-decoration: none;
        }

        /* Ajuste para Artículos */
        .TituloArticulo {
            color: var(--lb-primary);
            transition: color 0.3s;
        }

        .TituloArticulo:hover {
            color: var(--lb-accent);
        }

        /* Contenedores de Video */
        .video-container-youtube {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
        }

        .video-container-youtube img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .video-container-youtube .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .video-container-youtube .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            border-style: solid;
            border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }

        .video-container-youtube:hover img {
            opacity: 1;
        }

        .video-container-youtube:hover .play-button {
            background-color: var(--lb-accent);
            transform: translate(-50%, -50%) scale(1.1);
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>


        <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PC's y Comunicaciones
                        Industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cimon</li>
            </ol>
        </nav>
    </div>

    <!-- Banner 100% Ancho -->
    <div class="banner-full">
        <a href="https://tienda.logicbus.com.mx/CIMON_bymfg_205-7-1.html" target="_blank">
            <img loading="lazy"
                src="https://www.logicbus.com.mx/images/banner/www/PorMarca/banner-cimon-adquisicion-de-datos.webp"
                alt="Cimon Adquisición de datos">
        </a>
    </div>

    <!-- H1 con diseño corporativo -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Automatización industrial
            y</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">SISTEMAS
            DE CONTROL SCADA</span>
    </h1>

    <!-- Texto de introducción -->
    <div class="container mb-5">
        <p class="intro-text text-justify mx-auto" style="max-width: 900px;">
            <b>CIMON</b> es una empresa de automatización industrial con más de 20 años de experiencia en el control de
            procesos y el mercado de manufactura. Desde su fundación en 1999, CIMON ha expandido su presencia de los
            mercados asiáticos a Europa y América del Norte, proporcionando soluciones versátiles que incluyen <b>PLC,
                HMI, IPC, y SCADA</b>.<br><br>
            CIMON se enfoca en el suministro de fábricas inteligentes con software de programación fácil de usar y de
            uso gratuito, ofreciendo una solución total desde la provisión del producto hasta el diseño del sistema.
        </p>
    </div>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/CIMON_bymfg_205-7-1.html" target="_blank">Ver en
            Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
        <a class="btn-circle" href="#caracteristicas">Características</a>
        <a class="btn-circle" href="#doc">Documentación</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <!-- CATEGORÍAS (Usando las clases originales solicitadas) -->
    <div class="bg-light-accent py-5 mt-5" id="categorias">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">CATEGORÍAS DE PRODUCTOS</h2>
            <div class="d-flex flex-wrap justify-content-center mt-4">
                <div class="m-3 p-0 contenedorCPP">
                    <div class="cardPCateP">
                        <div class="contImgCP">
                            <img loading="lazy"
                                src="https://www.logicbus.com.mx/images/categorias/2023/cimon/desarrollo-runtime-cimon.webp"
                                alt="Desarrollo y Runtime">
                        </div>
                        <div class="contTextCP">
                            <h2>Desarrollo y Runtime</h2>
                            <button class="btnEfectoA" role="button"><a
                                    href="https://tienda.logicbus.com.mx/Software-y-herramientas-de-desarrollo-SCADA-Ultimate-Access-de-CIMON-Desarrollo-y-Runtime"
                                    target="_blank" style="color: #ffffff; text-decoration: none;">Ver
                                    Categoría</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-3 p-0 contenedorCPP">
                    <div class="cardPCateP">
                        <div class="contImgCP">
                            <img loading="lazy"
                                src="https://www.logicbus.com.mx/images/categorias/2023/cimon/desarrollo-runtime-cimon.webp"
                                alt="Solo Runtime">
                        </div>
                        <div class="contTextCP">
                            <h2>Solo Runtime</h2>
                            <button class="btnEfectoA" role="button"><a
                                    href="https://tienda.logicbus.com.mx/Software-y-herramientas-de-desarrollo-SCADA-Ultimate-Access-de-CIMON-Solo-Runtime"
                                    target="_blank" style="color: #ffffff; text-decoration: none;">Ver
                                    Categoría</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-3 p-0 contenedorCPP">
                    <div class="cardPCateP">
                        <div class="contImgCP">
                            <img loading="lazy"
                                src="https://www.logicbus.com.mx/images/categorias/2023/cimon/xpanel-cimon.webp"
                                alt="XPANEL CIMON">
                        </div>
                        <div class="contTextCP">
                            <h2>HMI</h2>
                            <button class="btnEfectoA" role="button"><a
                                    href="https://tienda.logicbus.com.mx/Software-y-herramientas-de-desarrollo-XPANEL-CIMON"
                                    target="_blank" style="color: #ffffff; text-decoration: none;">Ver
                                    Categoría</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-3 p-0 contenedorCPP">
                    <div class="cardPCateP">
                        <div class="contImgCP">
                            <img loading="lazy" src="./images/cimon/plc.webp" alt="PLC">
                        </div>
                        <div class="contTextCP">
                            <h2>PLC</h2>
                            <button class="btnEfectoA" role="button"><a
                                    href="https://tienda.logicbus.com.mx/Cimon_c_7894.html" target="_blank"
                                    style="color: #ffffff; text-decoration: none;">Ver Categoría</a></button>
                        </div>
                    </div>
                </div>

                <div class="m-3 p-0 contenedorCPP">
                    <div class="cardPCateP">
                        <div class="contImgCP">
                            <img loading="lazy"
                                src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/categorias/hmi-plc.png"
                                alt="HMI + PLC">
                        </div>
                        <div class="contTextCP">
                            <h2>HMI + PLC</h2>
                            <button class="btnEfectoA" role="button"><a
                                    href="https://tienda.logicbus.com.mx/HMI-PLC-Cimon_c_7898.html" target="_blank"
                                    style="color: #ffffff; text-decoration: none;">Ver Categoría</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- APLICACIONES -->
    <h2 class="section-title mt-5" id="aplicaciones">APLICACIONES Y SOLUCIONES</h2>
    <div class="container mb-5">
        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100 rounded overflow-hidden">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/terminales-remotas.webp"
                        class="card-img-top" alt="Redes y control remoto" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="font-weight-bold" style="color: var(--lb-accent);">Funcionalidades Web y Control
                            Remoto</h4>
                        <p class="text-muted small mt-2">SCADA presenta ODBC habilitado para dispositivos móviles y es
                            programable con SQL para conectar fácilmente cualquier base de datos. Sus gráficos
                            integrados y Visual Basic Script prueban el valor del SCADA.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100 rounded overflow-hidden">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/adquisicion-datos-scada.webp"
                        class="card-img-top" alt="Sistemas SCADA" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="font-weight-bold" style="color: var(--lb-primary);">Supervisión y Adquisición de
                            Datos (SCADA)</h4>
                        <p class="text-muted small mt-2">Sistema fundamental para interactuar con las diferentes partes
                            de una línea de producción, asegurando colaboración mutua y recopilando datos en tiempo real
                            para análisis y mejoras.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100 rounded overflow-hidden">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/sftw-scada.webp"
                        class="card-img-top" alt="RTU y PLC" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="font-weight-bold" style="color: var(--lb-accent);">RTU y Controladores Lógicos (PLC)
                        </h4>
                        <p class="text-muted small mt-2">Permiten la comunicación con sensores, interfaces HMI,
                            dispositivos finales y máquinas. Estas partes envían información al sistema SCADA para
                            procesar y mostrar los datos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PLC CIMON VENTAJAS -->
    <div class="container mb-5">
        <h3 class="text-center font-weight-bold mb-4" style="color: var(--lb-primary);">VENTAJAS DE LOS PLC CIMON</h3>
        <div class="row text-center g-4">
            <div class="col-12 col-md-4">
                <div class="p-3 border rounded shadow-sm bg-white h-100">
                    <img loading="lazy" src="./images/cimon/Versatility-PLC.webp" class="img-fluid mb-3 rounded"
                        alt="Versatilidad">
                    <h5 class="font-weight-bold" style="color: var(--lb-primary);">VERSATILIDAD</h5>
                    <hr style="border-top: 2px solid var(--lb-accent); width: 50px; margin: 10px auto;">
                    <p class="small text-muted">Vienen en una variedad de opciones de rendimiento, escala y E/S para
                        ofrecerle la gama más amplia de soluciones de automatización.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-3 border rounded shadow-sm bg-white h-100">
                    <img loading="lazy" src="./images/cimon/Flexibility-PLC.webp" class="img-fluid mb-3 rounded"
                        alt="Flexibilidad">
                    <h5 class="font-weight-bold" style="color: var(--lb-primary);">FLEXIBILIDAD</h5>
                    <hr style="border-top: 2px solid var(--lb-accent); width: 50px; margin: 10px auto;">
                    <p class="small text-muted">Amplíe la capacidad operativa con Ethernet Modbus, Profibus y otros
                        protocolos. Hasta 16 bases de expansión disponibles.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-3 border rounded shadow-sm bg-white h-100">
                    <img loading="lazy" src="./images/cimon/Precision-PLC.webp" class="img-fluid mb-3 rounded"
                        alt="Precisión">
                    <h5 class="font-weight-bold" style="color: var(--lb-primary);">PRECISIÓN</h5>
                    <hr style="border-top: 2px solid var(--lb-accent); width: 50px; margin: 10px auto;">
                    <p class="small text-muted">Las comunicaciones EtherCAT permiten un control preciso y exacto de la
                        posición del motor o servocontrol para la máxima eficiencia.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CARACTERÍSTICAS / INFOGRAFÍAS -->
    <h2 class="section-title bg-light py-4" id="caracteristicas" style="margin-bottom: 0;">INFOGRAFÍAS TÉCNICAS</h2>
    <div class="bg-light pb-5">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/309/Facil-de-controlar.pdf" target="_blank"
                        class="text-decoration-none">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/309/facilidad-cimon.webp"
                            class="img-fluid rounded shadow-sm border mb-2" alt="Fácil de controlar"
                            style="max-height: 250px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Fácil de controlar
                            (PDF)</span>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/309/Control-poderoso.pdf" target="_blank"
                        class="text-decoration-none">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/309/poder-cimon.webp"
                            class="img-fluid rounded shadow-sm border mb-2" alt="Control poderoso"
                            style="max-height: 250px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Control poderoso
                            (PDF)</span>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="https://www.logicbus.com.mx/pdf/309/control-de-Cimon.pdf" target="_blank"
                        class="text-decoration-none">
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/309/control-cimon.webp"
                            class="img-fluid rounded shadow-sm border mb-2" alt="Sistema de Control"
                            style="max-height: 250px;">
                        <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Sistema de Control
                            Cimon (PDF)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- DOCUMENTACIÓN Y ARTÍCULOS -->
    <div class="container my-5" id="doc">
        <div class="row">
            <!-- Artículos -->
            <div class="col-md-6 mb-4">
                <h3 class="font-weight-bold text-center mb-4" style="color: var(--lb-primary);">Artículos Relacionados
                </h3>
                <div class="card border-0 shadow-sm rounded overflow-hidden">
                    <a href="https://www.logicbus.com.mx/blog/conoce-el-nuevo-software-scada-para-la-gestion-de-la-automatizacion-industrial/"
                        target="_blank">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/CIMON-SCADA.webp"
                            class="card-img-top" alt="Software SCADA">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="font-weight-bold"><a
                                href="https://www.logicbus.com.mx/blog/conoce-el-nuevo-software-scada-para-la-gestion-de-la-automatizacion-industrial/"
                                class="TituloArticulo text-decoration-none">Conoce el nuevo software SCADA para la
                                gestión industrial.</a></h5>
                        <p class="small text-muted">CIMON está liderando la Revolución de la Industria 4.0 con su
                            tecnología de fábrica inteligente a través de soluciones PLC y SCADA.</p>
                        <a href="https://www.logicbus.com.mx/blog/conoce-el-nuevo-software-scada-para-la-gestion-de-la-automatizacion-industrial/"
                            target="_blank" class="btn-circle d-inline-block mt-2">Leer Artículo</a>
                    </div>
                </div>
            </div>

            <!-- Catálogos -->
            <div class="col-md-6 mb-4 d-flex flex-column align-items-center justify-content-center">
                <h3 class="font-weight-bold text-center mb-4" style="color: var(--lb-primary);">Catálogo General</h3>
                <a href="pdf/catalogos/CIMON_Product-Guide.pdf" target="_blank" class="catalog-item text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/CIMON.webp" alt="Catálogo Cimon"
                        class="img-fluid rounded shadow-sm border" style="max-width: 250px;">
                    <h5 class="mt-3 font-weight-bold" style="color: var(--lb-primary);">Descargar Guía de Productos</h5>
                </a>
            </div>
        </div>
    </div>

    <!-- VIDEOS -->
    <h2 class="section-title mt-5" id="videos">VIDEOS</h2>
    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="_W7LP2XxapU">
                    <img loading="lazy" src="https://img.youtube.com/vi/_W7LP2XxapU/hqdefault.jpg"
                        alt="UltimateAccess SCADA">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="Fe11fvmd9gQ">
                    <img loading="lazy" src="https://img.youtube.com/vi/Fe11fvmd9gQ/hqdefault.jpg"
                        alt="Nuevo Producto CIMON PLCs">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="video-container-youtube" data-video-id="BgGu9MScS3s">
                    <img loading="lazy" src="https://img.youtube.com/vi/BgGu9MScS3s/hqdefault.jpg"
                        alt="WEBINAR - SCADA">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto (Odoo Formulario) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS INTEGRAR SISTEMAS CIMON?
            </h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos
                para asesorarte en la arquitectura y selección de equipos SCADA, PLC y HMI.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>

    <!-- Scripts estándar -->
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container-youtube');
            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                    iframe.setAttribute('allowfullscreen', '');
                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>