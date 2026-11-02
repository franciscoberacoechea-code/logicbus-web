<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WoMaster | Soluciones Industriales de Networking y Ciberseguridad para IIoT</title>
    <meta name="description" content="WoMaster es una empresa especializada en soluciones de comunicación industrial, redes Ethernet industriales, ciberseguridad para IIoT y conectividad para automatización.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
        }

        /* Tarjeta de Industria */
        .industry-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            width: 100%;
        }

        .industry-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .industry-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(34, 82, 122, 0.9);
            /* Azul lb-primary con opacidad */
            color: #fff;
            padding: 12px 15px;
            text-align: center;
            font-weight: bold;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            transition: background 0.3s ease;
        }

        @media (hover: hover) {
            .industry-card:hover {
                transform: scale(1.03);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            }

            .industry-card:hover .industry-overlay {
                background: rgba(255, 126, 0, 0.95);
                /* Cambia a naranja lb-accent en hover */
            }
        }

        /* Estilo para el cuadro de texto desplegable */
        .industry-text-box {
            background-color: #f8f9fa;
            font-size: 1rem;
            line-height: 1.6;
            border-top: none;
            border-right: none;
            border-bottom: none;
            border-left: none;
            /* Línea naranja eliminada */
            border-radius: 0 0 12px 12px;
        }

        /* Optimizaciones para móviles */
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.6rem !important;
                padding: 0 10px;
            }

            .btn-navigation .btn-circle {
                margin: 5px 2px !important;
                display: inline-block;
                font-size: 0.9rem;
                padding: 8px 15px;
            }

            .main-title {
                font-size: 1.8rem !important;
            }

            .industry-overlay {
                font-size: 1rem;
                padding: 8px 10px;
            }
        }

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos" class="blue link-orange">Automatización y control de procesos</a></li>
                <li class="breadcrumb-item active" aria-current="page">WoMaster</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%" style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/womaster-mx.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title text-center mb-5 mt-4">
        <span style="color: var(--lb-primary, #22527A); font-size: inherit; line-height: inherit;">Networking y Ciberseguridad para IIoT</span>
        <span style="color: var(--lb-accent, #FF7E00); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">WOMASTER</span>
    </h1>

    <div class="container mb-5">
        <div class="bg-light rounded shadow-sm border p-4 p-md-5">
            <p class="intro-text text-justify" style="font-size: 1.05rem; line-height: 1.7;">
                <strong>WoMaster</strong> es una empresa especializada en soluciones de comunicación industrial, enfocada en redes Ethernet industriales, ciberseguridad para IIoT y conectividad confiable para automatización industrial. Sus productos están diseñados para operar en entornos críticos y exigentes, ofreciendo alta disponibilidad, redundancia de red y protección avanzada contra amenazas cibernéticas.
            </p>
            <p class="intro-text text-justify" style="font-size: 1.05rem; line-height: 1.7;">
                La compañía desarrolla switches Ethernet industriales administrables y no administrables, soluciones PoE, gateways industriales, dispositivos de comunicación inalámbrica y herramientas de administración de red compatibles con estándares industriales como IEC 62443 y G.8032 ERPS. Estas tecnologías permiten una integración segura y eficiente entre equipos, sistemas SCADA, PLCs y plataformas IoT industriales.
            </p>
            <p class="intro-text text-justify" style="font-size: 1.05rem; line-height: 1.7;">
                Una de las principales ventajas de WoMaster es su enfoque en resiliencia y seguridad industrial, incorporando funciones avanzadas como autenticación multicapa, ACLs IPv4/IPv6, DHCP Snooping, Dynamic ARP Inspection (DAI), IP Source Guard y protocolos de recuperación rápida de red con tiempos menores a 50 ms. Sus soluciones son ampliamente utilizadas en automatización industrial, energía, transporte, manufactura, smart cities e infraestructura crítica.
            </p>
        </div>
    </div>

    <nav class="btn-navigation mb-5 text-center">
        <a class="btn-circle mx-2 mb-2" href="https://tienda.logicbus.com.mx/womaster" target="_blank" style="background-color: var(--lb-primary, #22527A); border-color: var(--lb-primary, #22527A); color: #fff;">Ver en Tienda</a>
        <a class="btn-circle mx-2 mb-2" href="#categorias">Categorías</a>
        <a class="btn-circle mx-2 mb-2" href="#industrias">Industrias</a>
        <a class="btn-circle mx-2 mb-2" href="#catalogos">Catálogos</a>
    </nav>

    <div class="container my-5" id="categorias">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Categorías</h2>

        <div class="row align-items-center justify-content-center">

            <div class="col-12 col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <img loading="lazy" src="./images/womaster/industrial-IoT.webp" alt="Smart City & Industrial IoT" class="img-fluid drop-shadow rounded w-100" style="max-width: 400px;">
                        <div class="mt-3">
                            <a href="https://tienda.logicbus.com.mx/search.asp?keyword=womaster" target="_blank" class="btn-circle d-inline-block" style="padding: 6px 22px; font-size: 0.95rem;">Ver más</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="font-weight-bold" style="color: var(--lb-primary, #22527A); font-size: 1.3rem;">Smart City & Industrial IoT</h5>
                        <p class="text-muted small mt-2 mb-0">
                            Soluciones integrales para ciudades inteligentes e Industria 4.0, enfocadas en monitoreo, automatización y conectividad de dispositivos IoT industriales y urbanos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <img loading="lazy" src="./images/womaster/industrial-secured-network.webp" alt="Industrial Secured Network" class="img-fluid drop-shadow rounded w-100" style="max-width: 400px;">
                        <div class="mt-3">
                            <a href="https://tienda.logicbus.com.mx/search.asp?keyword=womaster" target="_blank" class="btn-circle d-inline-block" style="padding: 6px 22px; font-size: 0.95rem;">Ver más</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="font-weight-bold" style="color: var(--lb-primary, #22527A); font-size: 1.3rem;">Industrial Secured Network</h5>
                        <p class="text-muted small mt-2 mb-0">
                            Soluciones de ciberseguridad y protección para redes industriales, incluyendo autenticación avanzada, control de acceso y seguridad para IIoT.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-light py-5" id="industrias">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-4" style="color: var(--lb-primary, #22527A);">Industrias</h2>

            <p class="text-center text-muted mb-5 mx-auto" style="max-width: 900px; font-size: 1.05rem; line-height: 1.7;">
                WoMaster desarrolla soluciones de comunicación industrial y redes seguras para diferentes sectores críticos, ofreciendo infraestructura robusta para automatización, monitoreo remoto, IIoT y Smart Cities. Sus tecnologías integran conectividad Ethernet industrial, redes inalámbricas, routers LTE/5G, switches PoE y plataformas de administración para garantizar operaciones confiables, seguras y continuas en aplicaciones industriales y urbanas.
            </p>

            <div class="row justify-content-center">

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-power" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/power-utility.webp" alt="Energía y Servicios Públicos">
                        <div class="industry-overlay">Energía y Servicios Públicos</div>
                    </div>
                    <div class="collapse" id="text-power">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Soluciones para redes eléctricas inteligentes (Smart Grid), monitoreo remoto de subestaciones, distribución eléctrica y sistemas de energía. WoMaster proporciona redes Ethernet industriales seguras y redundantes para garantizar transmisión de datos confiable y alta disponibilidad en aplicaciones de utilities y energía.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-railway" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/rail-way.webp" alt="Ferrocarriles">
                        <div class="industry-overlay">Ferrocarriles</div>
                    </div>
                    <div class="collapse" id="text-railway">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Tecnologías de comunicación industrial certificadas para aplicaciones ferroviarias y sistemas de transporte. Incluye switches Ethernet EN50155, routers LTE/WiFi y soluciones PoE para videovigilancia, monitoreo y redes embarcadas en trenes y estaciones ferroviarias.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-its" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/its.webp" alt="Sistemas Inteligentes de Transporte">
                        <div class="industry-overlay">Sistemas de Transporte (ITS)</div>
                    </div>
                    <div class="collapse" id="text-its">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Soluciones de conectividad para control de tráfico, videovigilancia urbana y sistemas inteligentes de transporte. WoMaster ofrece switches PoE, redes de fibra óptica y routers industriales para garantizar comunicación segura y estable en infraestructura vial y movilidad inteligente.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-oil" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/oil-and-gas.webp" alt="Petróleo y Gas">
                        <div class="industry-overlay">Petróleo y Gas</div>
                    </div>
                    <div class="collapse" id="text-oil">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Infraestructura de comunicación industrial diseñada para ambientes extremos en la industria petrolera y de gas. Sus soluciones permiten monitoreo remoto, transmisión segura de datos y redes redundantes para plataformas, estaciones de transferencia y sitios de extracción en condiciones críticas.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-security" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/security.webp" alt="Seguridad y Videovigilancia">
                        <div class="industry-overlay">Seguridad y Videovigilancia</div>
                    </div>
                    <div class="collapse" id="text-security">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Soluciones de networking industrial y PoE para sistemas de seguridad y videovigilancia IP en ciudades inteligentes e infraestructura crítica. WoMaster proporciona conectividad segura y confiable para cámaras IP, monitoreo remoto y sistemas de supervisión urbana.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="industry-card" data-toggle="collapse" href="#text-automation" role="button" aria-expanded="false">
                        <img loading="lazy" src="./images/womaster/automation.webp" alt="Automatización Industrial">
                        <div class="industry-overlay">Automatización Industrial</div>
                    </div>
                    <div class="collapse" id="text-automation">
                        <div class="card card-body industry-text-box text-muted shadow-sm mt-2">
                            Soluciones de automatización y control de procesos enfocadas en optimizar producción, monitoreo y comunicación entre dispositivos industriales. WoMaster desarrolla redes industriales robustas para integración de PLCs, SCADA, sensores y sistemas IIoT en plantas industriales y almacenes automatizados.
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <p class="small text-muted"><i class="fa fa-hand-pointer-o"></i> <em>Haz clic sobre cualquier industria para desplegar la información detallada.</em></p>
            </div>
        </div>
    </div>

    <div class="container my-5" id="catalogos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Catálogos</h2>

        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="catalog-wrap m-0">
                    <a href="https://www.logicbus.com.mx/pdf/catalogos/womaster-profile.pdf" target="_blank" class="catalog-item">
                        <span class="pdf-badge">PDF</span>
                        <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/womaster-profile.webp" alt="WoMaster Company Profile">
                        <h4>WoMaster Corporate Profile</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary, #22527A);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white, #fff); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas asesoría en Ciberseguridad Industrial?</h2>
            <span class="paragraph" style="color: var(--lb-white, #fff); font-size: 1.1rem;">
                Nuestro equipo de ingenieros puede apoyarte a diseñar la infraestructura de red perfecta para tu aplicación IIoT con equipos WoMaster.
            </span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>

</body>
<?php echo $var_footer; ?>

</html>