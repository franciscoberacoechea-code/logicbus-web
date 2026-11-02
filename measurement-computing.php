<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Adquisición de datos (DAQ) | MCC | Measurement Computing</title>
    <meta name="description" content="Los analizadores de señales dinámicas USB y Ethernet proporcionan mediciones precisas para el sonido portátil, la vibración y la respuesta a la fuerza.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, USB-1208HS, MiniLab 1008, USB-1208FS, USB-201-OEM, USB-7204, USB-201, USB-1602HS, USB-1604HS, AI-EXP48, USB-1408FS, USB-1408FS-PLUS-OEM, USB-1608G, USB-1608HS, USB-2404-10, USB-2416, hardware y software de adquisición de datos, registro de datos, aplicaciones de prueba, entradas analógicas, canales de entradas analógicas, multifunción de 12 bit, 14 bits, 16 bts, resolucion, ultra alta velocidad, Tarjeta DAQ, USB de adquisición de datos, detectores de cuadratura, analógica para módulos, Módulo USB de adquisición de datos, multifunción de 14 bit, Measurement Computing México, mcc, MCC México, mcc guadalajara">

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
        #leftBar {
            display: none;
        }
        body, html {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Contenedor de Videos de YouTube */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
        }
        .video-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        .video-container .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .video-container .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }
        @media (hover: hover) {
            .video-container:hover img { opacity: 1; }
            .video-container:hover .play-button {
                background-color: var(--lb-accent, #FF7E00);
                transform: translate(-50%, -50%) scale(1.1);
            }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Measurement Computing</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5 text-center">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-MCC-MZ23.webp" alt="MEASUREMENT COMPUTING" title="MEASUREMENT COMPUTING" style="width: 100%;">
    </div>

    <h1 class="main-title text-center mb-5">
        <span style="color: var(--lb-primary, #22527A); font-size: inherit; line-height: inherit;">Hardware y Software DAQ</span>
        <span style="color: var(--lb-accent, #FF7E00); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">MEASUREMENT COMPUTING</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    <strong>MCC (Measurement Computing)</strong> ofrece una gran variedad de productos de adquisición, análisis y registro de datos con software y hardware de alta calidad a un precio excelente. MCC proporcionará un producto de adquisición de datos que es fácil de usar, fácil de integrar y fácil de respaldar.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Nos comprometemos a desarrollar los productos DAQ que usted desea, en la forma y con las interfaces que necesita. Siempre estamos trabajando en nuevos y mejores productos, y agradecemos sus comentarios y solicitudes de soluciones personalizadas. Nuestro objetivo es la satisfacción total del cliente.
                </p>
                <div class="text-center text-lg-left mt-4">
                    <a href="https://tienda.logicbus.com.mx/Temperatura_c_1393.html" target="_blank">
                        <img loading="lazy" src="images/app/soluciones-de-temperatura.webp" class="img-fluid rounded shadow-sm border" alt="Soluciones de medición de temperatura MCC" style="max-width: 400px;">
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="bg-light p-4 rounded shadow-sm border h-100 d-flex flex-column justify-content-center">
                    <h4 style="color: var(--lb-primary, #22527A); font-weight: bold; margin-bottom: 20px;">Misión y Beneficios</h4>
                    <p class="text-muted small text-justify">La misión de Measurement Computing Corporation es proporcionar hardware y software de adquisición de datos basados en PC que ahorren tiempo y dinero. Perseguimos esta misión ofreciendo:</p>
                    <ul class="text-muted text-left mb-0 pl-3 mt-3" style="line-height: 1.6; font-size: 0.95rem;">
                        <li><strong>Calidad:</strong> Productos confiables respaldados por un año de garantía.</li>
                        <li><strong>Facilidad:</strong> Soluciones de software para usuarios de todos los niveles, programadores y no programadores.</li>
                        <li><strong>Valor:</strong> La más alta calidad al precio justo.</li>
                        <li><strong>Rapidez:</strong> Configuraciones simples que acortan el tiempo entre la instalación inicial y la primera medición.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5 text-center">
        <a class="btn-circle mx-2 mb-2" href="https://tienda.logicbus.com.mx/Measurement-Computing_bymfg_5-7-5.html" target="_blank">Ver en Tienda</a>
        <a class="btn-circle mx-2 mb-2" href="#submarcas">Sub Marcas</a>
        <a class="btn-circle mx-2 mb-2" href="#productos">Productos</a>
        <a class="btn-circle mx-2 mb-2" href="#catalogos">Catálogos y Guías</a>
        <a class="btn-circle mx-2 mb-2" href="#articulos">Artículos</a>
        <a class="btn-circle mx-2 mb-2" href="#videos">Videos</a>
    </nav>

    <div class="bg-light py-5 mb-5" id="submarcas">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">MCC además cuenta con las marcas:</h2>
            <div class="row justify-content-center">
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <a href="iotech" target="_blank">
                            <img loading="lazy" src="images/nuestras_marcas/IOtech-Logo.webp" alt="IO TECH" class="img-fluid mb-3" style="max-height: 60px; object-fit: contain;">
                        </a>
                        <p class="small text-muted text-justify flex-grow-1">Sumando a su catálogo DAQs con entradas de alta velocidad enfocadas a aplicaciones OEM y sistemas embebidos.</p>
                        <a href="iotech" target="_blank" class="btn-circle mt-3 mx-auto">Ver Marca</a>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <a href="data-translation" target="_blank">
                            <img loading="lazy" src="images/nuestras_marcas/data-translation.webp" alt="DATA TRANSLATION" class="img-fluid mb-3" style="max-height: 60px; object-fit: contain;">
                        </a>
                        <p class="small text-muted text-justify flex-grow-1">Tarjetas DAQ especializadas en sonido, vibración, galgas extensiométricas, medición de sensores basados en puente como fuerza, carga y torsión.</p>
                        <a href="data-translation" target="_blank" class="btn-circle mt-3 mx-auto">Ver Marca</a>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <a href="digilent" target="_blank">
                            <img loading="lazy" src="images/nuestras_marcas/digilent.webp" alt="DIGILENT" class="img-fluid mb-3" style="max-height: 60px; object-fit: contain;">
                        </a>
                        <p class="small text-muted text-justify flex-grow-1">En 2022, MCC comenzó a fusionarse con esta otra empresa de NI llamada Digilent. Proporcionando mejores capacidades de fabricación e inventario.</p>
                        <a href="digilent" target="_blank" class="btn-circle mt-3 mx-auto">Ver Marca</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-5" id="productos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Productos de Adquisición de Datos</h2>

        <h4 class="text-center font-weight-bold mb-4 mt-5" style="color: var(--lb-accent, #FF7E00);">E/S Analógicas - 12 bits</h4>
        <div class="products-grid mb-5">
            <div class="product-card">
                <a href="USB-1208HS"><img loading="lazy" src="imagenes/01/usb-1208hs-ch.webp" alt="USB-1208HS"></a>
                <h4>USB-1208HS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ de alta velocidad con 8 entradas analógicas referenciadas a tierra o 4 diferenciales de 13 bits, 1 MS/s, 16 DIO, 2 contadores y 1 salida PWM.</p>
                <a class="btn-circle" href="USB-1208HS">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="prod_device_minilab1008"><img loading="lazy" src="imagenes/01/minilab2_ch.webp" alt="MiniLab 1008"></a>
                <h4>MiniLab 1008</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Dispositivo USB DAQ con 8 entradas analógicas de 12 bits, 2 salidas analógicas y 28 líneas digitales E/S.</p>
                <a class="btn-circle" href="prod_device_minilab1008">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="prod_device_1208fs"><img loading="lazy" src="imagenes/01/USB-1408FS_ch.webp" alt="USB-1208FS"></a>
                <h4>USB-1208FS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ con 8 canales de entradas analógicas de 12-bit con hasta 50 kS/s, dos salidas D/A y 16 bits DIO.</p>
                <a class="btn-circle" href="prod_device_1208fs">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-201-OEM"><img loading="lazy" src="imagenes/01/USB-1208FS-PLUS-OEM.webp" alt="USB-201-OEM"></a>
                <h4>USB-201-OEM</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Tarjeta DAQ OEM multifunción de 12 bit, 8 entradas análogas, 8 E/S digitales, 100 kS/s.</p>
                <a class="btn-circle" href="USB-201-OEM">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB_7204"><img loading="lazy" src="imagenes/01/USB-2020.webp" alt="USB-7204"></a>
                <h4>USB-7204</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Tarjeta DAQ de ultra alta velocidad con 8 entradas analógicas de 12 bits, 20 MS/s por cada canal.</p>
                <a class="btn-circle" href="USB_7204">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-201"><img loading="lazy" src="imagenes/01/USB-200.webp" alt="USB-201"></a>
                <h4>USB-201</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Dispositivo USB DAQ con 8 entradas análogas referenciadas a tierra, resolución de 12-bit, 100 kS/s, 8 E/S digitales.</p>
                <a class="btn-circle" href="USB-201">Ver modelo</a>
            </div>
        </div>

        <h4 class="text-center font-weight-bold mb-4 mt-5" style="color: var(--lb-accent, #FF7E00);">14 y 16 bits de resolución</h4>
        <div class="products-grid mb-5">
            <div class="product-card">
                <a href="USB-1602HS"><img loading="lazy" src="imagenes/01/usb-1602hs_ch.webp" alt="USB-1602HS"></a>
                <h4>USB-1602HS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ de alta velocidad con 2 entradas de 16-bit BNC, 2 MS/s, 32 DIO, 2 contadores, PWM y 3 detectores cuadratura.</p>
                <a class="btn-circle" href="USB-1602HS">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-1604HS"><img loading="lazy" src="imagenes/01/usb-1604hs_ch.webp" alt="USB-1604HS"></a>
                <h4>USB-1604HS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ multifunción de alta velocidad con 2 entradas de 16-bit BNC, hasta 2 MS/s, 32 DIO y detectores de cuadratura.</p>
                <a class="btn-circle" href="USB-1604HS">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="AI-EXP48"><img loading="lazy" src="imagenes/01/ai-exp48sm_ch.webp" alt="AI-EXP48"></a>
                <h4>AI-EXP48</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo de expansión con entrada analógica para módulos de la serie USB-1616HS.</p>
                <a class="btn-circle" href="AI-EXP48">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-1408FS"><img loading="lazy" src="imagenes/01/USB-1408FS_ch.webp" alt="USB-1408FS"></a>
                <h4>USB-1408FS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo USB con 8 canales de entrada analógica de 14 bits, 48 kS/s, dos salidas D/A y 16 bits DIO.</p>
                <a class="btn-circle" href="USB-1408FS">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-1408FS-PLUS-OEM"><img loading="lazy" src="imagenes/01/USB-1208FS-PLUS-OEM.webp" alt="USB-1408FS-PLUS-OEM"></a>
                <h4>USB-1408FS-PLUS-OEM</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Tarjeta DAQ OEM multifunción de 14 bit, 8 entradas análogas, 16 E/S digitales, 2 salidas análogas, 48 kS/s.</p>
                <a class="btn-circle" href="USB-1408FS-PLUS-OEM">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-1608G"><img loading="lazy" src="imagenes/01/USB-1608G.webp" alt="USB-1608G"></a>
                <h4>USB-1608G</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ de alta velocidad con 16 canales, 250 kS/s de dispositivos multifunción DAQ.</p>
                <a class="btn-circle" href="USB-1608G">Ver modelo</a>
            </div>
            <div class="product-card">
                <a href="USB-1608HS"><img loading="lazy" src="imagenes/01/USB-1608HS.webp" alt="USB-1608HS"></a>
                <h4>USB-1608HS</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo DAQ de alta velocidad con 8 canales, 16 bits, muestreo simultáneo, Módulo USB basado en entradas análogas y digitales.</p>
                <a class="btn-circle" href="USB-1608HS">Ver modelo</a>
            </div>
        </div>

        <h4 class="text-center font-weight-bold mb-4 mt-5" style="color: var(--lb-accent, #FF7E00);">24 bits de resolución</h4>
        <div class="products-grid mb-5">
            <div class="product-card" style="max-width: 350px;">
                <a href="USB-2404-10"><img loading="lazy" src="imagenes/01/usb-2404-10-ch.webp" alt="USB-2404-10"></a>
                <h4>USB-2404-10</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Tarjeta DAQ USB con 4 entradas analógicas para muestreo simultáneo de 50 kS/s por canal, rango de entrada ±10 V a 24 bits.</p>
                <a class="btn-circle" href="USB-2404-10">Ver modelo</a>
            </div>
            <div class="product-card" style="max-width: 350px;">
                <a href="USB-2416"><img loading="lazy" src="imagenes/01/usb-2416-ch.webp" alt="USB-2416"></a>
                <h4>USB-2416</h4>
                <p class="small text-muted mb-3 text-justify flex-grow-1">Módulo multifuncional de adquisición de datos con 4 entradas analógicas para muestreo de 50 kS/s por canal, rango ±10 V a 24 bits.</p>
                <a class="btn-circle" href="USB-2416">Ver modelo</a>
            </div>
        </div>
    </div>

    <div class="bg-light py-5" id="catalogos">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Catálogos y Guías</h2>
            
            <div class="row justify-content-center align-items-center text-center mb-5">
                <div class="col-12 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="catalog-wrap m-0">
                        <a href="pdf/catalogos/Catalogo-MCC-Adquisicion-de-Datos-ESP.pdf" target="_blank" class="catalog-item">
                            <span class="pdf-badge">PDF ES</span>
                            <img loading="lazy" src="pdf/catalogos/Catalogo-MCC-Adquisicion-de-Datos-ESP.webp" alt="Catálogo MCC ESP">
                            <h4>Catálogo Measurement Computing (Español)</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="catalog-wrap m-0">
                        <a href="pdf/catalogos/USA/Catalog-MCC-acquisition-of-Data-ENG.pdf" target="_blank" class="catalog-item">
                            <span class="pdf-badge">PDF EN</span>
                            <img loading="lazy" src="pdf/catalogos/Catalog-MCC-acquisition-of-Data-ENG.webp" alt="Catálogo MCC ENG">
                            <h4>Catálogo Measurement Computing (Inglés)</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center pb-4" id="GuiasyManuales">
                <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=mcc&tagArray%5B%5D=Hardware+MCC&tagArray%5B%5D=Software+MCC" target="_blank" class="ghost-manual-box" style="text-decoration: none; border: 2px dashed var(--lb-accent); padding: 15px 30px; border-radius: 15px; display: inline-block; background-color: #fff; transition: all 0.3s ease;">
                    <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación" style="width: 50px; margin-right: 15px; vertical-align: middle;">
                    <span class="font-weight-bold" style="color: var(--lb-primary); font-size: 1.1rem; vertical-align: middle;">Ver Documentación de Hardware y Software MCC</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title bg-transparent text-center mb-5" id="articulos" style="color: var(--lb-primary, #22527A);">Artículos</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/medicion-de-termopares-con-raspberry-pi-y-el-mcc-134/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/rasperry-mcc.webp" alt="Raspberry Pi y el MCC 134" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Medición de termopares con Raspberry Pi® y el MCC 134</h5>
                        <p class="card-text text-muted flex-grow-1">¿Sabes cómo funciona un termopar? Funciona al convertir los gradientes térmicos en diferencia de potencial eléctrico, un fenómeno conocido como el efecto Seebeck.</p>
                        <a href="https://www.logicbus.com.mx/blog/medicion-de-termopares-con-raspberry-pi-y-el-mcc-134/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="https://www.logicbus.com.mx/blog/que-es-un-termopar-y-dispositivos-para-registro-de-temperatura/" target="_blank">
                        <img class="card-img-top" src="images/articulos-portadas/termopar-mcc.webp" alt="Termopar MCC" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">¿Qué es un termopar? y dispositivos para registro de temperatura</h5>
                        <p class="card-text text-muted flex-grow-1">Los termopares son una forma popular y económica de medir la temperatura. El termopar es un dispositivo simple: dos cables de diferentes metales soldados en un extremo.</p>
                        <a href="https://www.logicbus.com.mx/blog/que-es-un-termopar-y-dispositivos-para-registro-de-temperatura/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="videos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Videos Destacados</h2>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="BnA4RG1FVfQ">
                    <img loading="lazy" src="https://img.youtube.com/vi/BnA4RG1FVfQ/hqdefault.jpg" alt="Video MCC 1">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="Rca2FadmTkk">
                    <img loading="lazy" src="https://img.youtube.com/vi/Rca2FadmTkk/hqdefault.jpg" alt="Como medir peso con tarjeta USB MCC">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="DQxY2kKBBdA">
                    <img loading="lazy" src="https://img.youtube.com/vi/DQxY2kKBBdA/hqdefault.jpg" alt="Video MCC DAQ">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="video-container" data-video-id="QzZEXylu-ys">
                    <img loading="lazy" src="https://img.youtube.com/vi/QzZEXylu-ys/hqdefault.jpg" alt="Adquisición de datos">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="btn text-white rounded-pill" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NeKb2cYTNHaQT8Z8pH3Cna" target="_blank" style="background-color: #dc3545; padding: 10px 30px;"><i class="fa fa-youtube-play"></i> Ver todos los videos en YouTube</a>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary, #22527A);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white, #fff); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas ayuda técnica?</h2>
            <span class="paragraph" style="color: var(--lb-white, #fff); font-size: 1.1rem;">
                Nuestros ingenieros de soporte están listos para ayudarte a elegir el dispositivo de adquisición de datos perfecto para tu proyecto.
            </span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>
    
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    if(videoId) {
                        var iframe = document.createElement('iframe');
                        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                        iframe.setAttribute('title', 'YouTube video player');
                        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                        iframe.setAttribute('allowfullscreen', '');

                        this.innerHTML = '';
                        this.appendChild(iframe);
                    }
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>
</html>