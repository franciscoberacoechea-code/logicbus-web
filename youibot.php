<?php require("admin/config.php"); ?>
<?php include("libreria/libreria.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Youibot es una empresa innovadora de robots industriales con algoritmos centrales para robots móviles autónomos">
    <meta name="keywords" content="Logicbus, Youibot Robotics, AMR, Automatización industrial">
    <title>Robots Móviles Autónomos y Soluciones de Automatización | Youibot</title>

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $aos_css; ?>

    <link rel="preload" as="image" href="https://www.logicbus.com.mx/assets/videos/youibot.webp" fetchpriority="high">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>

    <style>
        /* =============================================
           LAYOUT GENERAL
        ============================================= */
        #leftBar { display: none; }
        body, html { overflow-x: hidden; max-width: 100%; }

        .img-box {
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            padding: 15px;
            background: #fff;
        }
        .img-box img {
            max-height: 100%;
            width: auto;
            object-fit: contain;
        }
        .thumb-wrapper {
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            background: #fff;
            margin-bottom: 20px;
        }

        img[alt="Logicbus SA de CV"], #logomovil {
            height: auto !important;
            max-width: 100%;
            object-fit: contain;
        }
        .btnVerMas, .button-circle-white, .btn-wsp {
            min-width: 48px;
            min-height: 48px;
            margin-bottom: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
        }
        .hoverchange { padding: 15px; }

        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background-color: #000;
            width: 100%;
        }
        .video-container img {
            position: absolute; top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover; opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        .video-container iframe {
            position: absolute; top: 0; left: 0;
            width: 100%; height: 100%; border: none;
        }
        .video-container .play-button {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 80px; height: 80px;
            background-color: rgba(0,0,0,0.6);
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .video-container .play-button::after {
            content: '';
            position: absolute;
            top: 50%; left: 54%;
            transform: translate(-50%, -50%);
            width: 0; height: 0;
            border-style: solid;
            border-width: 15px 0 15px 26px;
            border-color: transparent transparent transparent white;
        }
        @media (hover: hover) {
            .video-container:hover img { opacity: 1; }
            .video-container:hover .play-button {
                background-color: var(--lb-accent);
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        .col1-youibot, .col2-youibot, .col3-youibot,
        .col4-youibot, .col5-youibot, .col6-youibot { display: none; }
        .col-hidden { display: none !important; }
        .mostrar-columna { display: table-cell !important; }
        
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
                <li class="breadcrumb-item active" aria-current="page">Youibot</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/youibot.webp"
            style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/youibot.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title text-center">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Soluciones integrales de logística robótica</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">YOUIBOT</span>
    </h1>

    <div class="container mb-5">
        <p class="intro-text text-justify">
            Los AMR´s, conocidos como robots móviles autónomos (Autonomous Mobile Robots en inglés), son dispositivos que transportan objetos de manera autónoma, prescindiendo de la intervención humana requerida con elementos convencionales como patines hidráulicos, montacargas manuales, racks de ruedas, etc. Estos equipos permiten la automatización progresiva de procesos, simplificando la transición entre etapas.
        </p>
        <p class="intro-text text-justify">
            Estos dispositivos se desplazan dentro de entornos muy variados como almacenes, plantas de producción, museos, restaurantes, etc., siguiendo rutas predefinidas mediante software para llegar a su destino sin colisiones con otros vehículos, materiales o personal cercano.
        </p>
        <p class="intro-text text-justify">
            <a href="https://tienda.logicbus.com.mx/youibot" target="_blank" style="color: var(--lb-accent); font-weight: bold;">YOUIBOT</a> es un proveedor líder mundial de soluciones de robots móviles. Nos enorgullecemos de nuestros robots móviles de navegación fusión de LiDAR-SLAM y nuestros productos de software intuitivos para sectores como automotriz, bienes de consumo masivo, electrónica de consumo, semiconductores y almacenamiento.
        </p>
        <div class="mt-4 text-center">
            <video width="100%" style="max-width: 800px; border-radius: 12px;" loop muted autoplay playsinline class="shadow-sm border">
                <source src="https://www.logicbus.com.mx/imagenes/281/robot-agv.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/youibot" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#comparativa">Tabla Comparativa</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#manuales">Manuales</a>
    </nav>

    <h2 class="section-title" id="productos">Productos</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide mt-0" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/lbl1000-281.webp" class="img-fluid" alt="L1000" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">L1000</h3>
                                            <p class="item-price text-muted">Robot AGV, multiproposito y adaptable, Carga util 1000Kg</p>
                                            <a href="https://tienda.logicbus.com.mx/L1000_p_25134.html" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/l300.webp" class="img-fluid" alt="L300" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">L300</h3>
                                            <p class="item-price text-muted">Robot Móvil Autónomo diseñado para mejorar el transporte interno.</p>
                                            <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbl300-281" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/b300pro.webp" class="img-fluid" alt="B300Pro" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">B300Pro</h3>
                                            <p class="item-price text-muted">Navegación láser SLAM/Láser & QR Híbrido, Carga útil: 300 kg.</p>
                                            <a href="https://tienda.logicbus.com.mx/B300Pro_p_36800.html" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/B300-Standard.webp" class="img-fluid" alt="B300 Standard" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">B300 Standard</h3>
                                            <p class="item-price text-muted">Navegación láser SLAM. Carga útil: 300 kg. Capaz de integrarse con racks.</p>
                                            <a href="https://tienda.logicbus.com.mx/B300-Standard_p_36801.html" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/AT100-with-CE-AT100-without-CE.webp" class="img-fluid" alt="AT100 without CE" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">AT100 without CE</h3>
                                            <p class="item-price text-muted">Navegación láser. Carga útil: 100 Kg.</p>
                                            <a href="https://tienda.logicbus.com.mx/AT100-without-CE_p_36803.html" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/AT100-with-CE-AT100-without-CE.webp" class="img-fluid" alt="AT100 with CE" />
                                        </div>
                                        <div class="thumb-content">
                                            <h3 style="color: var(--lb-primary);">AT100 with CE</h3>
                                            <p class="item-price text-muted">Navegación láser. Carga útil: 100 Kg. Certificación de seguridad: CE.</p>
                                            <a href="https://tienda.logicbus.com.mx/AT100-with-CE_p_36804.html" class="btn-circle">Ver Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left text-dark" style="font-size: 2rem;"></i></a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right text-dark" style="font-size: 2rem;"></i></a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="comparativa">Tabla Comparativa de Modelos</h2>
    <div class="container mb-5">
        <div class="ocultar m-2 text-center text-muted mb-4">
            Esta tabla le permite comparar nuestros productos para elegir el que mejor se adapte a sus necesidades.
            Simplemente seleccione dos o más AGV haciendo clic en el botón "Agregar a la Tabla".
        </div>

        <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/lbl1000-281.webp" class="mx-auto mt-2" alt="L1000" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">L1000</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col1-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/l300.webp" class="mx-auto mt-2" alt="L300" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">L300</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col2-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/p200.webp" class="mx-auto mt-2" alt="P200" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">P200</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col3-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/b300pro.webp" class="mx-auto mt-2" alt="B300Pro" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">B300Pro</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col4-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/B300-Standard.webp" class="mx-auto mt-2" alt="B300 Standard" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">B300 Std</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col5-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-3">
                <div class="card h-100 p-2 text-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/AT100-with-CE-AT100-without-CE.webp" class="mx-auto mt-2" alt="AT100 CE" width="80px" />
                    <div class="card-body p-2">
                        <h5 class="card-title" style="color: var(--lb-primary);">AT100 CE</h5>
                        <button class="btn-circle w-100" style="padding: 5px; font-size:0.8rem;" onclick="toggleColumn(this, '.col6-youibot')">Agregar a la tabla</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive mt-3 bg-white shadow-sm border rounded" id="tablaModelos" style="display: none;">
            <table class="table table-bordered table-striped m-0 table-specs">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #f8f9fa; color: var(--lb-primary); text-align: left; font-size: 1.1rem;">Atributos</th>
                        <th class="col1-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/lbl1000-281.webp" alt="L1000" width="80px" /><br>L1000
                        </th>
                        <th class="col2-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/l300.webp" alt="L300" width="80px" /><br>L300
                        </th>
                        <th class="col3-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/p200.webp" alt="P200" width="80px" /><br>P200
                        </th>
                        <th class="col4-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/b300pro.webp" alt="B300Pro" width="80px" /><br>B300Pro
                        </th>
                        <th class="col5-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/B300-Standard.webp" alt="B300" width="80px" /><br>B300 Standard
                        </th>
                        <th class="col6-youibot text-center">
                            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/281/AT100-with-CE-AT100-without-CE.webp" alt="AT100" width="80px" /><br>AT100 with CE
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Carga Útil</strong></td>
                        <td class="col1-youibot text-center">1000kg</td>
                        <td class="col2-youibot text-center">300kg</td>
                        <td class="col3-youibot text-center">200kg</td>
                        <td class="col4-youibot text-center">300kg</td>
                        <td class="col5-youibot text-center">300kg</td>
                        <td class="col6-youibot text-center">100kg</td>
                    </tr>
                    <tr>
                        <td><strong>Carga útil de elevación</strong></td>
                        <td class="col1-youibot text-center">1000 kg</td>
                        <td class="col2-youibot text-center">300 kg</td>
                        <td class="col3-youibot text-center">NA</td>
                        <td class="col4-youibot text-center">NA</td>
                        <td class="col5-youibot text-center">NA</td>
                        <td class="col6-youibot text-center">100 kg</td>
                    </tr>
                    <tr>
                        <td><strong>SLAM/código QR</strong></td>
                        <td class="col1-youibot text-center">Lógica de navegación</td>
                        <td class="col2-youibot text-center">Lógica de navegación</td>
                        <td class="col3-youibot text-center">NA</td>
                        <td class="col4-youibot text-center">NA</td>
                        <td class="col5-youibot text-center">NA</td>
                        <td class="col6-youibot text-center">NA</td>
                    </tr>
                    <tr>
                        <td><strong>Duración de la batería</strong></td>
                        <td class="col1-youibot text-center">8h</td>
                        <td class="col2-youibot text-center">8h</td>
                        <td class="col3-youibot text-center">8h</td>
                        <td class="col4-youibot text-center">8h</td>
                        <td class="col5-youibot text-center">8h</td>
                        <td class="col6-youibot text-center">8h</td>
                    </tr>
                    <tr>
                        <td><strong>Estación de carga</strong></td>
                        <td class="col1-youibot text-center"><a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281" style="color:var(--lb-accent);"><b>Auto Charger L3L1P2</b></a></td>
                        <td class="col2-youibot text-center"><a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281" style="color:var(--lb-accent);"><b>Auto Charger L3L1P2</b></a></td>
                        <td class="col3-youibot text-center"><a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281" style="color:var(--lb-accent);"><b>Auto Charger L3L1P2</b></a></td>
                        <td class="col4-youibot text-center"><a href="https://tienda.logicbus.com.mx/Auto-Charger-Station-B3_p_36799.html" style="color:var(--lb-accent);"><b>Auto Charger B3</b></a></td>
                        <td class="col5-youibot text-center"><a href="https://tienda.logicbus.com.mx/Auto-Charger-Station-B3_p_36799.html" style="color:var(--lb-accent);"><b>Auto Charger B3</b></a></td>
                        <td class="col6-youibot text-center"><a href="https://tienda.logicbus.com.mx/Auto-Charger-Station-AT1_p_36802.html" style="color:var(--lb-accent);"><b>Auto Charger AT1</b></a></td>
                    </tr>
                    <tr>
                        <td><strong>Dimensiones</strong></td>
                        <td class="col1-youibot text-center">1152*770*300mm</td>
                        <td class="col2-youibot text-center">800*619*330mm</td>
                        <td class="col3-youibot text-center">1016*652*290mm</td>
                        <td class="col4-youibot text-center">780*550*290mm</td>
                        <td class="col5-youibot text-center">780*550*290mm</td>
                        <td class="col6-youibot text-center">650*550*1450mm</td>
                    </tr>
                    <tr>
                        <td><strong>Interfaces</strong></td>
                        <td class="col1-youibot text-center">NA</td>
                        <td class="col2-youibot text-center">NA</td>
                        <td class="col3-youibot text-center">E/S, Ethernet, WLAN</td>
                        <td class="col4-youibot text-center">E/S, Ethernet, WLAN</td>
                        <td class="col5-youibot text-center">E/S, Ethernet, WLAN</td>
                        <td class="col6-youibot text-center">NA</td>
                    </tr>
                    <tr>
                        <td><strong>Flotilla máx.</strong></td>
                        <td class="col1-youibot text-center">Hasta 200 unidades</td>
                        <td class="col2-youibot text-center">Hasta 200 unidades</td>
                        <td class="col3-youibot text-center">Hasta 200 unidades</td>
                        <td class="col4-youibot text-center">Hasta 200 unidades</td>
                        <td class="col5-youibot text-center">Hasta 200 unidades</td>
                        <td class="col6-youibot text-center">Hasta 500 unidades</td>
                    </tr>
                    <tr>
                        <td><strong>Link de compra</strong></td>
                        <td class="col1-youibot text-center"><a href="https://tienda.logicbus.com.mx/L1000_p_25134.html" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                        <td class="col2-youibot text-center"><a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbl300-281" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                        <td class="col3-youibot text-center"><a href="https://tienda.logicbus.com.mx/-P200_p_36436.html" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                        <td class="col4-youibot text-center"><a href="https://tienda.logicbus.com.mx/B300Pro_p_36800.html" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                        <td class="col5-youibot text-center"><a href="https://tienda.logicbus.com.mx/B300-Standard_p_36801.html" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                        <td class="col6-youibot text-center"><a href="https://tienda.logicbus.com.mx/AT100-with-CE_p_36804.html" target="_blank" class="btn-circle btn-sm py-1"><i class="fa fa-shopping-cart m-0"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h2 class="section-title">Adquiere nuestras estaciones de carga</h2>
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="row g-0 align-items-center h-100 p-3">
                        <div class="col-md-5 text-center">
                            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/281/auto charger station l3l1p2.jpg" class="img-fluid" alt="L3L1P2">
                        </div>
                        <div class="col-md-7 text-center text-md-left">
                            <h4 class="mt-3 mt-md-0" style="color: var(--lb-primary);">Auto Charger Station L3L1P2</h4>
                            <p class="text-muted small">Estación de carga (manual y automática) para modelos P200, L300 y la familia L1000.</p>
                            <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281" target="_blank" class="btn-circle">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="row g-0 align-items-center h-100 p-3">
                        <div class="col-md-5 text-center">
                            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/thumbnails/Auto Charger Station B3_thumbnail.jpg" class="img-fluid" alt="B3">
                        </div>
                        <div class="col-md-7 text-center text-md-left">
                            <h4 class="mt-3 mt-md-0" style="color: var(--lb-primary);">Auto Charger Station B3</h4>
                            <p class="text-muted small">Estación de carga (manual y automática) para la familia B300 (Standard y Pro).</p>
                            <a href="https://tienda.logicbus.com.mx/Auto-Charger-Station-B3_p_36799.html" target="_blank" class="btn-circle">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mx-auto">
                <div class="card h-100 shadow-sm border-0">
                    <div class="row g-0 align-items-center h-100 p-3">
                        <div class="col-md-5 text-center">
                            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/281/Auto-Charger-Station-AT1.jpg" class="img-fluid" alt="AT1">
                        </div>
                        <div class="col-md-7 text-center text-md-left">
                            <h4 class="mt-3 mt-md-0" style="color: var(--lb-primary);">Auto Charger Station AT1</h4>
                            <p class="text-muted small">Estación diseñada específicamente para la familia de modelos AT100 y AT100-CE.</p>
                            <a href="https://tienda.logicbus.com.mx/Auto-Charger-Station-AT1_p_36802.html" target="_blank" class="btn-circle">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="articulos">Artículos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/agv-para-archivo-de-estanterias-e-inventario/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="images/articulos-portadas/YOUIBOT-AGV.webp" alt="Youibot AGV" style="border-bottom: 3px solid var(--lb-accent);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary);">AGV para archivo de estanterías e inventario</h5>
                        <p class="card-text text-muted flex-grow-1 small">La privacidad de documentos es un factor muy importante a considerar en centros de Archivo, se les hace firmar confidencialidad a las personas...</p>
                        <a href="https://www.logicbus.com.mx/blog/agv-para-archivo-de-estanterias-e-inventario/" target="_blank" class="btn-circle mt-3 mx-auto">Leer artículo</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/como-programar-un-robot-agv/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="images/articulos-portadas/YOUIBOT-Programar-AGV.webp" alt="Programar AGV" style="border-bottom: 3px solid var(--lb-accent);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary);">¿Cómo Programar un Robot AGV?</h5>
                        <p class="card-text text-muted flex-grow-1 small">La manera de como programar un robot AGV, principalmente se requieren de dos herramientas importantes que facilitarán el proceso...</p>
                        <a href="https://www.logicbus.com.mx/blog/como-programar-un-robot-agv/" target="_blank" class="btn-circle mt-3 mx-auto">Leer artículo</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/agvautomatic-guided-vehicle/" target="_blank">
                        <img loading="lazy" class="card-img-top" src="images/articulos-portadas/AGV-Automatic-Guided-Vehicle.webp" alt="AGVs en la Industria" style="border-bottom: 3px solid var(--lb-accent);">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary);">AGV (Automatic Guided Vehicle) en la Industria</h5>
                        <p class="card-text text-muted flex-grow-1 small">Hoy vamos a tratar uno de los sistemas más requeridos en esta nueva era, alusivo a la logística interna de las fábricas. ¿Qué son?, ¿qué aplicaciones realizan?</p>
                        <a href="https://www.logicbus.com.mx/blog/agvautomatic-guided-vehicle/" target="_blank" class="btn-circle mt-3 mx-auto">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="videos">Videos</h2>
    <div class="container mb-5" style="max-width: 1000px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="DIyhXKuuW_s">
                    <img loading="lazy" src="https://img.youtube.com/vi/DIyhXKuuW_s/hqdefault.jpg" alt="Video Youibot">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="fWMWYx5vbcw">
                    <img loading="lazy" src="https://img.youtube.com/vi/fWMWYx5vbcw/hqdefault.jpg" alt="Video Youibot">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="W1mDZmxW4wk">
                    <img loading="lazy" src="https://img.youtube.com/vi/W1mDZmxW4wk/hqdefault.jpg" alt="Video Youibot">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="video-container" data-video-id="2cVMnMN9myY">
                    <img loading="lazy" src="https://img.youtube.com/vi/2cVMnMN9myY/hqdefault.jpg" alt="Video Youibot">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="manuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=youibot" target="_blank" class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Documentación</span>
        </a>
    </div>

    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿Necesitas implementar AMR en tu planta?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">
                Consulta a nuestros ingenieros para dimensionar el robot ideal para tu carga y espacio operativo.
            </span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo str_replace('<script ', '<script defer ', $jquery_js); ?>
    <?php echo str_replace('<script ', '<script defer ', $bootstrap_js); ?>
    <?php echo str_replace('<script ', '<script defer ', $popper_js); ?>
    <?php echo str_replace('<script ', '<script defer ', $own_file_js); ?>
    <?php echo str_replace('<script ', '<script defer ', $flickity_js); ?>
    <?php echo str_replace('<script ', '<script defer ', $aos_js); ?>

    <script>
    $(document).ready(function () {

        // 1. Inicializar AOS
        if (typeof AOS !== 'undefined') { AOS.init({ once: true }); }

        // 2. SEO fix
        $('#logomovil').attr('alt', 'Logicbus SA de CV - Soluciones de Automatización Industrial');

        // 3. Videos YouTube — lazy load con facade
        $('.video-container').each(function () {
            var $container = $(this);
            var videoId = $container.data('video-id');
            $container.on('click', function () {
                var iframe = $('<iframe>', {
                    src: 'https://www.youtube-nocookie.com/embed/' + videoId + '?autoplay=1&rel=0',
                    frameborder: '0',
                    allowfullscreen: '1',
                    allow: 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                });
                $container.find('img, .play-button').hide();
                $container.append(iframe);
            });
        });

    });

    // 4. Tabla comparativa
    function toggleColumn(button, columnClass) {
        var $celdas = $(columnClass);
        var $btn = $(button);

        if ($celdas.css('display') === 'none') {
            $celdas.show().css('display', 'table-cell');
            $btn.text('Quitar de la tabla').css({'background-color': '#dc3545', 'border-color': '#dc3545'});
            $('#tablaModelos').fadeIn();
            $('html, body').animate({ scrollTop: $("#tablaModelos").offset().top - 50 }, 500);
        } else {
            $celdas.hide();
            $btn.text('Agregar a la tabla').css({'background-color': '', 'border-color': ''});
            
            var algunaVisible = false;
            $('.col1-youibot, .col2-youibot, .col3-youibot, .col4-youibot, .col5-youibot, .col6-youibot').each(function() {
                if($(this).css('display') === 'table-cell') algunaVisible = true;
            });
            if(!algunaVisible) { $('#tablaModelos').fadeOut(); }
        }
    }

    // 5. Tawk.to
    window.Tawk_API = window.Tawk_API || {};
    window.Tawk_LoadStart = new Date();
    window.Tawk_API.onLoad = function () { Tawk_API.hideWidget(); };
    </script>

</body>
<?php echo $var_footer; ?>
</html>