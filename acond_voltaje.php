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
    <title>Acondicionadores de Voltaje | Logicbus</title>
    
    <meta name="description" content="Acondicionadores de Voltaje, Voltaje, Sensores, Transductores, K109UI, Z109UI2, Z190, Z202-LP, Z113S-D-T, Z-4AI-D, LBSC-VA14, LBMT-VI14, PW-3090, Logicbus">
    <meta name="keywords" content="Acondicionadores de Voltaje, Voltaje, Sensores, Transductores, K109UI, Z109UI2, Z190, Z202-LP, Z113S-D-T, Z-4AI-D, LBSC-VA14, LBMT-VI14, PW-3090, Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, acondicionadores, Voltaje, LBST-VA14, LBSC-VA14, LBMT-VI14, LBC14, K109UI, SG-3071, PW-3090, Z109UI2, Z170, Z202-LP">
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
                <li class="breadcrumb-item active" aria-current="page">Voltaje</li>
            </ol>
        </nav>
    </div>
    
    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES DE</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">VOLTAJE</span>
    </h1>

    <!-- Contenido Superior e Introducción -->
    <div class="container mb-5">
        
        <!-- Sección de Imagen Separada y Centrada -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <img src="imagenes/sensoresPresionImg.png" alt="Acondicionadores de Voltaje" title="Acondicionadores de Voltaje" class="img-fluid rounded" style="max-height: 280px; object-fit: contain;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 30px;">
                    Los acondicionadores de señal de voltaje son equipos esenciales en la industria, ya sea para medir altas tensiones de forma segura y aislada, o para adaptar señales analógicas complejas que los sistemas de control digital (como PLCs, PACs o tarjetas DAQ) no pueden procesar directamente.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 30px;">
                    Su función principal es estandarizar variables físicas y eléctricas de diferentes naturalezas, transformándolas en un rango de voltaje unificado, seguro y fácil de interpretar por los sistemas de control.
                </p>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Salidas Estandarizadas Disponibles</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Contamos con una amplia gama de modelos diseñados para entregar salidas de voltaje de alta precisión, adaptándose a los requerimientos del hardware de adquisición:</p>
                <ul class="custom-list text-justify mb-4">
                    <li>0 a 5 Vdc</li>
                    <li>0 a 10 Vdc</li>
                    <li>1 a 5 Vdc</li>
                    <li>2 a 10 Vdc</li>
                </ul>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Capacidad Multiseñal de Entrada</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Nuestros acondicionadores de voltaje son altamente versátiles y permiten recibir y convertir una gran variedad de señales, tales como:</p>
                <ul class="custom-list text-justify mb-4">
                    <li><strong>Alto Voltaje:</strong> AC (0 a 500 Vac) y DC (0 a 540 Vdc)</li>
                    <li><strong>Bajo Voltaje:</strong> Voltaje (0 a 10 V), Milivoltaje (25 mV)</li>
                </ul>

                <!-- Botón de Tienda Centrado Correctamente -->
                <div class="text-center mt-5">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Voltaje_c_1278.html" target="_blank" style="min-width: 250px;">Ver todos en Tienda</a>
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
            
            <!-- Nuevos Productos -->
            
            <!-- Z170REG-1 -->
            <div class="product-card">
                <a href="Z170REG-1">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1%20(1).jpg" alt="Z170REG-1" title="Z170REG-1">
                </a>
                <h4><a href="Z170REG-1" style="color: inherit; text-decoration: none;">Z170REG-1</a></h4>
                <p>Duplicador y aislador de señales analógicas universales. 1 entrada (V, mA, Ω, TC o RTD), 2 salidas (V o mA activo o pasivo). Aislamiento galvánico 4 vías. Configuración por DIP switches y software. Montaje en riel DIN. Alimentación: 10 a 40 Vdc o 19 a 28 Vac.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z170REG-1_p_13212.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z202 / Z202-H -->
            <div class="product-card">
                <a href="Z202">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/44/z202.jpg" alt="Z202 / Z202-H" title="Z202 / Z202-H">
                </a>
                <h4><a href="Z202" style="color: inherit; text-decoration: none;">Z202 / Z202-H</a></h4>
                <p>El Z202 es un acondicionador con entrada a voltaje de 10~490 Vac y 1 salida a corriente de 0~20 mA o voltaje de 0~10 Vdc. El Z202-H es un convertidor aislador con entrada AC (0~490 Vac) y salida DC (4~20 mA/ 0~10Vdc). Programables mediante DIP switch.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z202&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-H -->
            <div class="product-card">
                <a href="Z109REG2-H">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-h.jpg" alt="Z109REG2-H" title="Z109REG2-H">
                </a>
                <h4><a href="Z109REG2-H" style="color: inherit; text-decoration: none;">Z109REG2-H</a></h4>
                <p>Z109REG2-H es un convertidor universal avanzado capaz de gestionar todas las señales analógicas (mA, V, PT100, Pt1000, Pt500, Ni100, TCs, Ohms) y convertirlo / aislarlo en señales mA / V estándar. Se configura a través de dip-switches, software para PC o dispositivos de mano.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-H_p_13202.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-1 -->
            <div class="product-card">
                <a href="Z109REG2-1">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-1.jpg" alt="Z109REG2-1" title="Z109REG2-1">
                </a>
                <h4><a href="Z109REG2-1" style="color: inherit; text-decoration: none;">Z109REG2-1</a></h4>
                <p>El módulo Z109REG2-1 adquiere una señal de entrada universal, la convierte en formato analógico y la retransmite en una salida universal aislada garantizando alta protección e integridad de datos.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-1_p_13201.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Productos Originales -->

            <!-- K109UI -->
            <div class="product-card">
                <a href="K109UI">
                    <img loading="lazy" src="imagenes/44/k109ui.jpg" alt="K109UI" title="K109UI">
                </a>
                <h4><a href="K109UI" style="color: inherit; text-decoration: none;">K109UI</a></h4>
                <p>Aislador de señales universal, entrada y salida de corriente y voltaje. Diseño ultra delgado para montaje en riel DIN.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=K109UI" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109UI2 -->
            <div class="product-card">
                <a href="Z109UI2">
                    <img loading="lazy" src="imagenes/44/Z109UI2.jpg" alt="Z109UI2" title="Z109UI2">
                </a>
                <h4><a href="Z109UI2" style="color: inherit; text-decoration: none;">Z109UI2</a></h4>
                <p>Convertidor y Aislador galvánico de corriente y voltaje para acondicionamiento preciso de señales en procesos de automatización.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z109UI2" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z190 -->
            <div class="product-card">
                <a href="Z190">
                    <img loading="lazy" src="imagenes/44/Z190.jpg" alt="Z190" title="Z190">
                </a>
                <h4><a href="Z190" style="color: inherit; text-decoration: none;">Z190</a></h4>
                <p>Convertidor y Aislador de corriente y voltaje. Ideal para aislar señales de campo hacia sistemas de adquisición de datos.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z190" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z202-LP -->
            <div class="product-card">
                <a href="Z202-LP">
                    <img loading="lazy" src="imagenes/44/z202lp.jpg" alt="Z202-LP" title="Z202-LP">
                </a>
                <h4><a href="Z202-LP" style="color: inherit; text-decoration: none;">Z202-LP</a></h4>
                <p>Acondicionador de voltaje DC/AC con salida de corriente, diseñado para monitoreo de líneas eléctricas.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z202-LP" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z113S-D-T -->
            <div class="product-card">
                <a href="Z113S-D-T">
                    <img loading="lazy" src="imagenes/44/Z113.jpg" alt="Z113S-D-T" title="Z113S-D-T">
                </a>
                <h4><a href="Z113S-D-T" style="color: inherit; text-decoration: none;">Z113S-D-T</a></h4>
                <p>Módulos de alarma con entrada de corriente/voltaje y 1, 2 o 3 salidas de contacto, proporcionando monitoreo de umbrales.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z113" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z-4AI-D -->
            <div class="product-card">
                <a href="Z-4AI-D">
                    <img loading="lazy" src="imagenes/44/z4aid.jpg" alt="Z-4AI-D" title="Z-4AI-D">
                </a>
                <h4><a href="Z-4AI-D" style="color: inherit; text-decoration: none;">Z-4AI-D</a></h4>
                <p>Convertidor análogo de corriente y voltaje a Salida digital para PLCs, expandiendo las capacidades de tu controlador.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z-4AI" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- LBSC-VA14 -->
            <div class="product-card">
                <a href="LBSC-VA14">
                    <img loading="lazy" src="imagenes/14/LBSC-VA14_10.jpg" alt="LBSC-VA14" title="LBSC-VA14">
                </a>
                <h4><a href="LBSC-VA14" style="color: inherit; text-decoration: none;">LBSC-VA14</a></h4>
                <p>Acondicionador y aislamiento de voltaje y corriente. Equipo industrial para protección y adecuación de señales.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=LBSC" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- LBMT-VI14 -->
            <div class="product-card">
                <a href="LBMT-VI14">
                    <img loading="lazy" src="imagenes/14/LBMT-VI14_ch.jpg" alt="LBMT-VI14" title="LBMT-VI14">
                </a>
                <h4><a href="LBMT-VI14" style="color: inherit; text-decoration: none;">LBMT-VI14</a></h4>
                <p>Acondicionador y aislador de señal de voltaje, con salida de voltaje y corriente.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=LBMT" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- PW-3090 -->
            <div class="product-card">
                <a href="PW-3090">
                    <img loading="lazy" src="imagenes/02/PW-3090.jpg" alt="PW-3090" title="PW-3090">
                </a>
                <h4><a href="PW-3090" style="color: inherit; text-decoration: none;">PW-3090</a></h4>
                <p>Módulo de Potencia con Aislamiento para suministro seguro de energía en tableros de instrumentación.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=PW-3090" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA TÉCNICA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador de voltaje adecuado para tu panel de control.</span>
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