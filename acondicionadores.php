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
    <title>Logicbus | Acondicionador de Señal Universal | Sensores</title>
    
    <meta name="description" content="Acondicionador de Señal Universal: Los acondicionadores de señal universales entregan un gran desempeño máximo en un solo dispositivo.">
    <meta name="keywords" content="Sensores, Acondicionador de Señal Universal, Transductores y Acondicionadores, Logicbus, data acquisition, adquisicion de datos, daq, DAQ, tarjetas, tarjeta DAQ, DAQ Wireless, daq wireless, tarjetas de adquisicion de datos, adquisicion de datos usb, Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, instruNet, Programación Simulink, Serial, USB, Ethernet, PCI, Express, PCI Express, Expres, Bluetooth, ZigBee, PXI, ISA, PC104">
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

        /* Listas personalizadas para la introducción */
        .custom-list {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 25px;
            padding-left: 20px;
        }
        
        .custom-list li {
            margin-bottom: 8px;
        }
        
        .custom-list strong {
            color: #333;
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
                <li class="breadcrumb-item active" aria-current="page">Universal</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADOR DE</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">SEÑAL UNIVERSAL</span>
    </h1>

    <!-- Contenido Superior e Introducción -->

        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 30px;">
                    Los acondicionadores de señal universales ofrecen el máximo desempeño, flexibilidad y protección en un solo dispositivo. Diseñados para simplificar la integración en cualquier tablero de control industrial, estos módulos permiten estandarizar señales complejas del piso de producción para que sean interpretadas de manera segura en PLCs o sistema SCADA.
                </p>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Flexibilidad de Configuración</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Para adaptarse a las necesidades de cada proyecto en campo o en laboratorio, nuestros acondicionadores universales ofrecen uno o múltiples métodos de programación como los siguientes:</p>
                <ul class="custom-list text-justify">
                    <li><strong>Interruptores DIP (DIP Switches):</strong> Para una configuración manual rápida y en sitio.</li>
                    <li><strong>Software desde PC:</strong> Para programaciones detalladas y gestión de proyectos.</li>
                    <li><strong>App para Smartphone (Android):</strong> Configuración intuitiva y portátil a través del puerto Micro-USB integrado en el panel frontal de algunos modelos.</li>
                </ul>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Soluciones Integrales</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Estos dispositivos proporcionan una solución robusta y confiable en temas críticos de automatización:</p>
                <ul class="custom-list text-justify">
                    <li>Aislamiento galvánico de alta protección (hasta 4 vías).</li>
                    <li>Duplicación de señales para múltiples sistemas de monitoreo.</li>
                    <li>Eliminación de ruido eléctrico y bucles de tierra (Ground Loops).</li>
                    <li>Conversión precisa hacia salidas estandarizadas de Corriente (mA) o Voltaje (V).</li>
                </ul>

                <h3 style="color: var(--lb-primary); font-weight: 700; font-size: 1.3rem; margin-bottom: 15px;">Amplio Rango de Señales de Entrada</h3>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">Los acondicionadores universales son capaces de recibir, procesar y convertir una extensa variedad de variables físicas y eléctricas, incluyendo:</p>
                <ul class="custom-list text-justify" style="columns: 2; -webkit-columns: 2; -moz-columns: 2;">
                    <li><strong>Termopar:</strong> Tipos J, K, E, N, S, R, B, T</li>
                    <li><strong>Termorresistencias (RTD):</strong> Pt100, Pt1000, Ni 100</li>
                    <li><strong>Alto Voltaje de AC:</strong> 0 a 500 Vac</li>
                    <li><strong>Alto Voltaje de DC:</strong> 0 a 540 Vdc</li>
                    <li><strong>Corriente Estándar:</strong> 4 a 20 mA</li>
                    <li><strong>Voltaje Estándar:</strong> 0 a 10 V</li>
                    <li><strong>Milivoltaje:</strong> 25 mV</li>
                    <li><strong>Señales de Peso/Fuerza:</strong> Celdas de Carga</li>
                    <li><strong>Resistencia:</strong> Potenciómetros</li>
                    <li><strong>Pulsos:</strong> Frecuencia</li>
                </ul>

                <!-- Botón de Tienda Centrado -->
                <div class="text-center mt-4">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Universal_c_3034.html" target="_blank" style="min-width: 250px;">Ver todos en Tienda</a>
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
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/Z170REG-1">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1%20(1).jpg" alt="Z170REG-1" title="Z170REG-1">
                </a>
                <h4><a href="https://www.logicbus.com.mx/Z170REG-1" style="color: inherit; text-decoration: none;">Z170REG-1</a></h4>
                <p>Duplicador y aislador de señales analógicas universales. 1 entrada (V, mA, Ω, TC o RTD), 2 salidas (V o mA activo o pasivo). Aislamiento galvánico 4 vías. Configuración por DIP switches y software. Montaje en riel DIN. Alimentación: 10 a 40 Vdc o 19 a 28 Vac.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z170REG-1_p_13212.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z109REG2-H">
                    <img loading="lazy" src="assets/images/44/z109reg2-h.jpg" alt="Z109REG2-H" title="Z109REG2-H">
                </a>
                <h4><a href="Z109REG2-H" style="color: inherit; text-decoration: none;">Z109REG2-H</a></h4>
                <p>Convertidor universal avanzado capaz de gestionar todas las señales analógicas (mA, V, PT100, Pt1000, Pt500, Ni100, TCs, Ohms) y convertirlo / aislarlo en señales mA / V estándar. Se configura a través de dip-switches, software para PC o smartphone.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-H_p_13202.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z109REG2">
                    <img loading="lazy" src="assets/images/44/z109reg2.jpg" alt="Z109REG2" title="Z109REG2">
                </a>
                <h4><a href="Z109REG2" style="color: inherit; text-decoration: none;">Z109REG2</a></h4>
                <p>Es un convertidor universal avanzado capaz de gestionar todas las señales analógicas y convertirlo/aislarlo en señales mA/V estándar. El dispositivo se puede configurar a través de dip-switches, software para PC o dispositivos de mano.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2_p_4206.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z109REG2-1">
                    <img loading="lazy" src="assets/images/44/z109reg2-1.jpg" alt="Z109REG2-1" title="Z109REG2-1">
                </a>
                <h4><a href="Z109REG2-1" style="color: inherit; text-decoration: none;">Z109REG2-1</a></h4>
                <p>El módulo Z109REG2 adquiere una señal de entrada universal, la convierte en formato analógico y la retransmite en una salida universal aislada con gran estabilidad y precisión.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-1_p_13201.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="Z109S-DI">
                    <img loading="lazy" src="assets/images/44/z109s-di.jpg" alt="Z109S-DI" title="Z109S-DI">
                </a>
                <h4><a href="Z109S-DI" style="color: inherit; text-decoration: none;">Z109S-DI</a></h4>
                <p>Convertidor y aislador con una entrada de corriente (0~20mA/ 4~20mA) y una salida de corriente, aislamiento galvánico 3,5 kVac, Montaje en riel DIN. Puede alimentar un sensor de 2 hilos, Alimentación: 10 a 40 Vdc o 19 a 28 Vac.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109S-DI_p_13203.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="K112">
                    <img loading="lazy" src="assets/images/44/k112.jpg" alt="K112" title="K112">
                </a>
                <h4><a href="K112" style="color: inherit; text-decoration: none;">K112</a></h4>
                <p>Acondicionador/aislador digital universal, una entrada de pulso (Contacto, Namur, PNP/NPN, reed, photocell) y 2 salidas simultaneas (NPN, PNP) de 30Vdc. Frecuencia máx: 400Hz. Montaje en riel DIN. Alimentación de 19~30Vdc.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K112_p_3945.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>
    </div>

    <!-- Infografía -->
    <div class="py-5">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Infografía</h2>
            <img class="img-fluid rounded shadow-sm border mt-3" src="https://tienda.logicbus.com.mx/assets/images/44/Infografia_SENECA_Mesa_de_trabajo.jpg" alt="Infografía Seneca Acondicionadores Universales" style="max-width: 100%; border: 1px solid #dee2e6;">
        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a elegir el acondicionador de señal universal ideal para tu proyecto.</span>
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