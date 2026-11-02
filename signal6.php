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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Relevadores, Contactores y Acondicionamiento Digital | Logicbus</title>
    
    <meta name="description" content="Aislamiento Digitales, Digitales, Relevadores de estado sólido, Relevadores Electromecánicos, Relevadores y contactores electromagnéticos, Logicbus.">
    <meta name="keywords" content="Aislamiento Digitales, Digitales, Relevadores de estado sólido, Relevadores Electromecánicos, Relevadores y contactores electromagnéticos, Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
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
        }

        /* Cuadrícula de productos - ACTUALIZADA PARA CENTRAR */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 350px));
            justify-content: center;
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
            max-height: 160px;
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
        
        .category-header {
            text-align: center;
            margin: 50px 0 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        
        .category-header h2 {
            font-size: 1.8rem;
            color: var(--lb-primary, #0056b3);
            font-weight: bold;
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
                <li class="breadcrumb-item active" aria-current="page">Acondicionamiento de señal</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES DIGITALES</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">Y RELEVADORES DE POTENCIA</span>
    </h1>

    <!-- Introducción -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 25px;">
                    Los acondicionadores de señal digital (discreta) y los módulos de relevadores son dispositivos fundamentales para interconectar de forma segura sistemas de control (como PLCs, PACs o microcontroladores) con los actuadores y sensores en el piso de producción. A diferencia de las señales analógicas, estos equipos procesan señales de estado discreto (encendido/apagado, pulsos de alta velocidad o niveles lógicos). Su función principal es proteger la lógica de control, adaptar diferencias de voltaje y proporcionar la potencia necesaria para accionar maquinaria.
                </p>
                
                <h3 style="color: var(--lb-primary); font-weight: 700; margin-bottom: 15px;">Principales Funciones de Acondicionamiento Digital:</h3>
                
                <ul style="font-size: 1.1rem; color: #555; line-height: 1.8; text-align: justify; margin-bottom: 30px;">
                    <li><strong>Aislamiento Galvánico:</strong> Protege los puertos de entrada/salida de tu PLC contra cortocircuitos, picos de voltaje y ruido eléctrico proveniente de motores o fuentes externas.</li>
                    <li><strong>Conversión de Niveles de Voltaje:</strong> Permite que un sistema de 5V o 24Vdc lea señales de campo que operan a 120 Vac o 240 Vac de manera totalmente segura y viceversa.</li>
                    <li><strong>Amplificación y Repetición de Pulsos:</strong> Acondiciona señales de alta frecuencia (como las de un encoder o un sensor Namur/Fotoeléctrico) para que no pierdan su forma de onda en largas distancias.</li>
                    <li><strong>Conmutación de Potencia:</strong> Permite que una pequeña señal de control active cargas de alto amperaje mediante relevadores de estado sólido (SSR), electromecánicos o contactores magnéticos.</li>
                </ul>

                <div class="text-center">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Digitales_c_3009.html" target="_blank" style="min-width: 250px;">Ver todos en Tienda</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light-accent py-5">
        
        <!-- SECCIÓN: AISLAMIENTO DIGITAL -->
        <div class="container">
            <div class="category-header" style="margin-top: 0;">
                <h2>Aislamientos Digitales</h2>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="K111">
                    <img loading="lazy" src="assets/images/44/k111.jpg" alt="K111" title="K111">
                </a>
                <h4><a href="K111" style="color: inherit; text-decoration: none;">K111</a></h4>
                <p>Amplificador/Convertidor con una entrada de pulso (Contacto IEC 1131.1, Namur, PNP/NPN, reed, photocell) y 2 salidas (PNP, BJT, Mosfet) de 60 mA/24Vdc. Frecuencia máx: 20KHz. Montaje en riel DIN. Alimentación de 19 a 30Vdc.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K111_p_3943.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="K112">
                    <img loading="lazy" src="imagenes/44/k112.jpg" alt="K112" title="K112">
                </a>
                <h4><a href="K112" style="color: inherit; text-decoration: none;">K112</a></h4>
                <p>Acondicionador/aislador digital universal, una entrada de pulso (Contacto IEC 1131.1, Namur, PNP/NPN, reed, photocell) y 2 salidas simultaneas (NPN, PNP) de 30Vdc. Frecuencia máx: 400Hz. Montaje en riel DIN. Alimentación de 19~30Vdc.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K112_p_3945.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z112A">
                    <img loading="lazy" src="imagenes/44/Z112A.jpg" alt="Z112A" title="Z112A">
                </a>
                <h4><a href="Z112A" style="color: inherit; text-decoration: none;">Z112A</a></h4>
                <p>Amplificador de contacto digital / 1 canal. Entrada: contacto libre, npn / pnp 2-3 hilos, 24 Vdc, namur, fotoeléctrico, sensor Hall, reluctancia variable. Salida: 1 relé SPDT (5 A, 250 Vca).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z112A_p_4217.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z112D">
                    <img loading="lazy" src="imagenes/44/z112d.jpg" alt="Z112D" title="Z112D">
                </a>
                <h4><a href="Z112D" style="color: inherit; text-decoration: none;">Z112D</a></h4>
                <p>Amplificador de contacto digital robusto para 2 canales independientes. Ideal para aislamiento y accionamiento de cargas en tableros de control industrial.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z112D_p_4218.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>

        <!-- SECCIÓN: RELEVADORES DE ESTADO SÓLIDO -->
        <div class="container">
            <div class="category-header">
                <h2>Relevadores de Estado Sólido (SSR)</h2>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="DR-IAC5">
                    <img loading="lazy" src="imagenes/01/DIN-Modules.jpg" alt="DR-IAC5" title="DR-IAC5">
                </a>
                <h4><a href="DR-IAC5" style="color: inherit; text-decoration: none;">DR-IAC5</a></h4>
                <p>Módulo de entrada aislada de 120 voltios AC / DC. Montaje en carril DIN / Niveles lógicos de 5 V.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/DR-IAC5_p_990.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="DN-SSR4">
                    <img loading="lazy" src="imagenes/02/dn-pr4.jpg" alt="DN-SSR4" title="DN-SSR4">
                </a>
                <h4><a href="DN-SSR4" style="color: inherit; text-decoration: none;">DN-SSR4</a></h4>
                <p>Módulo de relé de estado sólido de 4 canales / 1 forma as. Conmutación rápida y silenciosa sin desgaste mecánico para aplicaciones de alta frecuencia.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/DN-SSR4_p_2463.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>

        <!-- SECCIÓN: RELEVADORES ELECTROMECÁNICOS -->
        <div class="container">
            <div class="category-header">
                <h2>Relevadores Electromecánicos</h2>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/RM-4861_p_13629.html" target="_blank">
                    <img loading="lazy" src="imagenes/RM-48.61.jpg" alt="RM-48.61" title="RM-48.61">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/RM-4861_p_13629.html" target="_blank" style="color: inherit; text-decoration: none;">RM-48.61</a></h4>
                <p>Modulo con 1 relevador (1 polo) DPDT / 16 A. Ideal para conmutación de cargas robustas. Se incluyen 4 piezas.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/RM-4861_p_13629.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/RM-4862_p_13630.html" target="_blank">
                    <img loading="lazy" src="imagenes/RM-38.61.png" alt="RM-48.62" title="RM-48.62">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/RM-4862_p_13630.html" target="_blank" style="color: inherit; text-decoration: none;">RM-48.62</a></h4>
                <p>Modulo con 1 relevador (2 polos) DPDT / 10A. Conmutación versátil para sistemas de control. Se incluyen 4 piezas.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/RM-4862_p_13630.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="DN-PR4">
                    <img loading="lazy" src="imagenes/02/dn-pr4.jpg" alt="DN-PR4" title="DN-PR4">
                </a>
                <h4><a href="DN-PR4" style="color: inherit; text-decoration: none;">DN-PR4</a></h4>
                <p>Tarjeta con 4 relevadores forma C (SPDT) con capacidad de 5A a 250VAC / 30VDC. Montaje en riel para integración en tableros.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/DN-PR4_p_2461.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/DN-PR4_p_2461.html" target="_blank">
                    <img loading="lazy" src="imagenes/rm_series.jpg" alt="RM-104/108/116" title="RM-104/108/116">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/DN-PR4_p_2461.html" target="_blank" style="color: inherit; text-decoration: none;">RM-104 / 108 / 116</a></h4>
                <p>Modulo con 4, 8 ó 16 relevadores “Form C”, 16 Amp / 250Vac (1 contacto NC y 1 contacto NO por cada relevador).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/DN-PR4_p_2461.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/search.asp?keyword=rm-20&search=" target="_blank">
                    <img loading="lazy" src="imagenes/rm_series.jpg" alt="RM-204/208/216" title="RM-204/208/216">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/search.asp?keyword=rm-20&search=" target="_blank" style="color: inherit; text-decoration: none;">RM-204 / 208 / 216</a></h4>
                <p>Modulo con 4, 8 ó 16 relevadores “Form C”, 8 Amp / 250Vac (2 contactos NC y 2 contactos NO por cada relevador).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=rm-20&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>

        <!-- SECCIÓN: CONTACTORES ELECTROMAGNÉTICOS -->
        <div class="container">
            <div class="category-header">
                <h2>Contactores Electromagnéticos</h2>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="LBCM-5420">
                    <img loading="lazy" src="imagenes/54/LBCM-5420.jpg" alt="LBCM-5420/43130204-110VAC" title="LBCM-5420/43130204-110VAC">
                </a>
                <h4><a href="LBCM-5420" style="color: inherit; text-decoration: none;">LBCM-5420 (110VAC)</a></h4>
                <p>Contactor Magnético con 4 polos con capacidad de 20A, voltaje de la bobina 110VAC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/LBCM-542043130204-110VAC_p_7416.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="LBMY54212250111-24VDC">
                    <img loading="lazy" src="imagenes/54/LBMY54212250111-24VDC.PNG" alt="LBMY54212250111-24VDC" title="LBMY54212250111-24VDC">
                </a>
                <h4><a href="LBMY54212250111-24VDC" style="color: inherit; text-decoration: none;">LBMY54212250111-24VDC</a></h4>
                <p>Contactor magnético de propósito general para conmutación de cargas. Configuración robusta para automatización.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/RM-4861_p_13629.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="LBCM-5440">
                    <img loading="lazy" src="imagenes/54/LBCM-5440.jpg" alt="LBCM-5440/43134004-110VAC" title="LBCM-5440/43134004-110VAC">
                </a>
                <h4><a href="LBCM-5440" style="color: inherit; text-decoration: none;">LBCM-5440 (110VAC)</a></h4>
                <p>Contactor Magnético con 4 polos con capacidad de 40A, voltaje de la bobina 110VAC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/LBCM-544043134004-110VAC_p_7380.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="LBLY54212250103-24VDC">
                    <img loading="lazy" src="imagenes/54/LBLY54212250103-24VDC.jpg" alt="LBLY54212250103-24VDC" title="LBLY54212250103-24VDC">
                </a>
                <h4><a href="LBLY54212250103-24VDC" style="color: inherit; text-decoration: none;">LBLY54212250103-24VDC</a></h4>
                <p>Relevador de propósito general. Configuración de pines 2Z. Capacidad del contacto 10A. Voltaje de la bobina 24VDC. Requiere base LBPTF5408A165081.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/LBLY54212250103-24VDC_p_7379.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>

    </div>

    <!-- Banner de Contacto (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador o relevador ideal para tu sistema.</span>
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