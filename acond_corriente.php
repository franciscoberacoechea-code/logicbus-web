<?php
require("admin/config.php");
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acondicionadores de Corriente | Logicbus</title>
    
    <meta name="description" content="Acondicionadores de Corriente, Corriente, Sensores, Transductores, K109LV, K109S, K109UI, S109S, Z190, Z109S, Z109UI2, Z113, Z-4AI-D, LBSC-VA14, LBMT-VI14.">
    <meta name="keywords" content="Acondicionadores de Corriente, Corriente, Sensores, Transductores, K109LV, K109S, K109UI, S109S, Z190, Z109S, Z109UI2, Z113, Z-4AI-D, LBSC-VA14, LBMT-VI14, data acquisition, adquisicion de datos, daq, Logicbus, México, Guadalajara, Automatización, Z170REG-1, Z109REG2-H">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--- Estilos Necesarios-->
    <?php echo isset($favicon) ? $favicon : '<link rel="shortcut icon" href="images/favicon.ico">'; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

    <style>
        #leftBar {
            display: none;
        }

        .btn-circle {
            text-transform: none !important;
            transition: all 0.3s ease;
        }

        /* --- CORRECCIÓN DEL HOVER --- */
        .btn-circle:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15) !important;
        }

        /* Cuadrícula de productos */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .product-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            padding: 25px 20px;
            text-align: center;
            border: 1px solid #eee;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
        }

        .product-card img {
            max-height: 180px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            margin: 0 auto 20px;
            transition: transform 0.3s ease;
        }
        
        .product-card:hover img {
            transform: scale(1.05);
        }

        .product-card h4 {
            font-size: 1.25rem;
            color: var(--lb-primary, #0056b3);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .product-card p {
            font-size: 0.95rem;
            color: #555;
            text-align: justify;
            line-height: 1.5;
            flex-grow: 1; 
            margin-bottom: 25px;
        }

        /* Listas personalizadas */
        .custom-list {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.8;
            padding-left: 20px;
        }
        
        .custom-list li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>


    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
                <li class="breadcrumb-item"><a href="acondicionador-de-senal" class="blue link-orange">Acondicionador de señal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Corriente</li>
            </ol>
        </nav>
    </div>


    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES DE</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">CORRIENTE</span>
    </h1>

    <!-- Contenido Superior e Introducción -->
    <div class="container mb-5">
        
        <!-- Sección de Imagen Separada y Centrada -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <img src="imagenes/Iac-dc.png" alt="Acondicionadores de corriente" title="Acondicionadores de corriente" class="img-fluid rounded" style="max-height: 280px; object-fit: contain;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 20px;">
                    Los acondicionadores de señal de corriente son la solución ideal cuando se tiene sensores o transmisores en campo que operan mediante lazos de corriente y se requiere adaptar, aislar o transformar esa señal para un sistema de control.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 30px;">
                    Es muy común que algunos PLC, PAC o tarjetas de adquisición de datos no cuenten con entradas de corriente nativas, o que requieran un formato de señal completamente distinto. Nuestros acondicionadores resuelven este problema aislando galvánicamente el lazo de campo y convirtiendo la señal de corriente al formato exacto que el hardware necesita leer.
                </p>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Entradas de Corriente Soportadas</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Estos equipos están diseñados para recibir señales estándar de la industria:</p>
                <ul class="custom-list text-justify mb-4">
                    <li>Corriente (4~20 mA)</li>
                    <li>Corriente (0~20 mA)</li>
                </ul>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Salidas Versátiles Disponibles</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">La principal ventaja de estos acondicionadores es su capacidad de conversión. Dependiendo del modelo seleccionado, puede transformar esa entrada de corriente hacia una amplia variedad de salidas, tales como:</p>
                <ul class="custom-list text-justify mb-4">
                    <li><strong>Voltaje:</strong> 0~10 V, 0~5 V, etc.</li>
                    <li><strong>Corriente:</strong> 4~20 mA, 0~20 mA (para aislamiento, repetición o división de señal).</li>
                    <li><strong>Milivoltaje:</strong> Para sistemas de instrumentación de baja tensión.</li>
                    <li><strong>Frecuencia (Hz):</strong> Conversión de corriente a pulsos.</li>
                </ul>

                <!-- Botón de Tienda Centrado Correctamente -->
                <div class="text-center mt-5">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Corriente_c_3030.html" target="_blank" style="min-width: 250px;">Ver todos en Tienda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Productos -->
    <div class="bg-light-accent py-5">
        <div class="container text-center mb-5">
            <h2 class="section-title" style="margin-top: 0 !important;">Nuestros Equipos</h2>
        </div>

        <div class="products-grid">
            
            <!-- Nuevos Equipos Universales Compatibles -->
            <!-- Z170REG-1 -->
            <div class="product-card">
                <a href="Z170REG-1">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1%20(1).jpg" alt="Z170REG-1" title="Z170REG-1">
                </a>
                <h4><a href="Z170REG-1" style="color: inherit; text-decoration: none;">Z170REG-1</a></h4>
                <p>Duplicador y aislador de señales analógicas universales. 1 entrada (mA, V, Ω, TC o RTD), 2 salidas independientes (V o mA activo o pasivo). Aislamiento galvánico 4 vías. Montaje en riel DIN.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z170REG-1_p_13212.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-H -->
            <div class="product-card">
                <a href="Z109REG2-H">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-h.jpg" alt="Z109REG2-H" title="Z109REG2-H">
                </a>
                <h4><a href="Z109REG2-H" style="color: inherit; text-decoration: none;">Z109REG2-H</a></h4>
                <p>Convertidor universal avanzado capaz de gestionar todas las señales analógicas incluyendo lazos de corriente (mA) y convertirlo / aislarlo en señales mA / V estándar. Programable vía dip-switches o software.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-H_p_13202.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-1 -->
            <div class="product-card">
                <a href="Z109REG2-1">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-1.jpg" alt="Z109REG2-1" title="Z109REG2-1">
                </a>
                <h4><a href="Z109REG2-1" style="color: inherit; text-decoration: none;">Z109REG2-1</a></h4>
                <p>El módulo Z109REG2-1 adquiere una señal de entrada universal (incluyendo corriente), la convierte en formato analógico y la retransmite en una salida universal con alto nivel de aislamiento.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-1_p_13201.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Equipos Originales Específicos -->
            <!-- K109LV -->
            <div class="product-card">
                <a href="K109LV">
                    <img loading="lazy" src="imagenes/44/k109lv.jpg" alt="K109LV" title="K109LV">
                </a>
                <h4><a href="K109LV" style="color: inherit; text-decoration: none;">K109LV</a></h4>
                <p>El K109LV permite una conversión de señales de ± 25 mV ~ ± 2000 mV a señales estándar de corriente mA / V. Es sumamente útil para el monitoreo de corriente mediante shunts (resistencias de derivación).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109LV_p_3936.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109S -->
            <div class="product-card">
                <a href="K109S">
                    <img loading="lazy" src="imagenes/44/k109s.jpg" alt="K109S" title="K109S">
                </a>
                <h4><a href="K109S" style="color: inherit; text-decoration: none;">K109S</a></h4>
                <p>El K109S es un dispositivo con entrada de voltaje o corriente y salida de voltaje o corriente configurables mediante DIP switch, con un diseño ultradelgado para montaje en riel DIN.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109S_p_3940.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109UI -->
            <div class="product-card">
                <a href="K109UI">
                    <img loading="lazy" src="imagenes/44/k109ui.jpg" alt="K109UI" title="K109UI">
                </a>
                <h4><a href="K109UI" style="color: inherit; text-decoration: none;">K109UI</a></h4>
                <p>Convertidor y aislador de señales con entrada y salida a corriente o voltaje, 100% configurable por DIP switch en campo para una rápida puesta en marcha.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109UI_p_3942.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- S109S -->
            <div class="product-card">
                <a href="S109S">
                    <img loading="lazy" src="imagenes/44/s109s.jpg" alt="S109S" title="S109S">
                </a>
                <h4><a href="S109S" style="color: inherit; text-decoration: none;">S109S</a></h4>
                <p>Aislador de corriente DC diseñado para procesos críticos. Cuenta con un aislamiento galvánico máximo de 4500 Vac entre alimentación, entrada y salida.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/S109S-1-ST_p_13059.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z190 -->
            <div class="product-card">
                <a href="Z190">
                    <img loading="lazy" src="imagenes/44/Z190.jpg" alt="Z190" title="Z190">
                </a>
                <h4><a href="Z190" style="color: inherit; text-decoration: none;">Z190</a></h4>
                <p>Convertidor de señales con 2 canales de entrada (corriente 0/4 a 20 mA o voltaje) y 1 canal de salida a corriente o voltaje. Ideal para aislar señales de campo.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z190_p_4223.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z201 / Z201-H -->
            <div class="product-card">
                <a href="Z201">
                    <img loading="lazy" src="assets/images/44/z201.jpg" alt="Z201 / Z201-H" title="Z201 / Z201-H">
                </a>
                <h4><a href="Z201" style="color: inherit; text-decoration: none;">Z201 / Z201-H</a></h4>
                <p>El Z201 es un acondicionador con 1 entrada de alta corriente (0 ~ 10 A) y salida analógica a miliamperes o voltaje. El Z201-H incluye aislamiento para entradas de hasta 10 A (AC).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=z201&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109S -->
            <div class="product-card">
                <a href="Z109S">
                    <img loading="lazy" src="imagenes/44/Z109S_ch.jpg" alt="Z109S" title="Z109S">
                </a>
                <h4><a href="Z109S" style="color: inherit; text-decoration: none;">Z109S</a></h4>
                <p>Acondicionador y aislador robusto con entrada y salida de corriente (0/4~20 mA). Cuenta con aislamiento galvánico de 3 vías. Montaje en riel DIN de 35mm.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109S_p_4210.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109UI2 -->
            <div class="product-card">
                <a href="Z109UI2">
                    <img loading="lazy" src="imagenes/44/Z109UI2.jpg" alt="Z109UI2" title="Z109UI2">
                </a>
                <h4><a href="Z109UI2" style="color: inherit; text-decoration: none;">Z109UI2</a></h4>
                <p>Convertidor y Aislador de corriente y voltaje. Permite una entrada de corriente bipolar seleccionable de hasta 20 mA o voltaje, proporcionando alta precisión.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109UI2_p_4213.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z113S-D-T -->
            <div class="product-card">
                <a href="Z113S-D-T">
                    <img loading="lazy" src="imagenes/44/Z113.jpg" alt="Z113S-D-T" title="Z113S-D-T">
                </a>
                <h4><a href="Z113S-D-T" style="color: inherit; text-decoration: none;">Z113S-D-T</a></h4>
                <p>Módulos de alarma con entrada de corriente/voltaje y 1, 2 o 3 salidas. Programación de entradas análogas vía DIP-Switch para un rápido ajuste de umbrales.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z113S_p_13210.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z-4AI-D -->
            <div class="product-card">
                <a href="Z-4AI-D">
                    <img loading="lazy" src="imagenes/44/z4aid.jpg" alt="Z-4AI-D" title="Z-4AI-D">
                </a>
                <h4><a href="Z-4AI-D" style="color: inherit; text-decoration: none;">Z-4AI-D</a></h4>
                <p>Permite adquirir hasta 4 entradas analógicas (mA o V) y enviarlas hacia un PLC utilizando una sola entrada/salida digital, expandiendo las capacidades de tu controlador.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z-4AI-D_p_4150.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- LBSC-VA14 -->
            <div class="product-card">
                <a href="LBSC-VA14">
                    <img loading="lazy" src="imagenes/14/LBSC-VA14_10.jpg" alt="LBSC-VA14" title="LBSC-VA14">
                </a>
                <h4><a href="LBSC-VA14" style="color: inherit; text-decoration: none;">LBSC-VA14</a></h4>
                <p>La serie de acondicionadores LBSC-VA14 es ideal para procesos industriales pesados donde se requiere aislar una señal o convertirla de voltaje a corriente o viceversa de forma segura.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/LBSC-VA141-V4-DN-AD_p_5997.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- LBMT-VI14 -->
            <div class="product-card">
                <a href="LBMT-VI14">
                    <img loading="lazy" src="imagenes/14/LBMT-VI14_ch.jpg" alt="LBMT-VI14" title="LBMT-VI14">
                </a>
                <h4><a href="LBMT-VI14" style="color: inherit; text-decoration: none;">LBMT-VI14</a></h4>
                <p>Convertidor y aislador de señal robusto con entrada de hasta 600VDC o corriente, salida de 0~10V / 4-20mA y alimentación integrada de 115VAC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/LBMT-VI141-D-VC-4N-A1_p_5993.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA TÉCNICA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador de corriente adecuado para tu sistema.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer -->
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>
</html>