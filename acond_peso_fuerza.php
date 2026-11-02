<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acondicionadores de señal para dispositivos de Peso y fuerza │ Logicbus</title>
    
    <meta name="description" content="Los acondicionadores de señal para celdas de carga son dispositivos indispensables en cualquier sistema de pesaje industrial, robótica o medición de fuerza.">
    <meta name="keywords" content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
    <meta name="revisit after" content="14 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--- Estilos Necesarios-->
    <?php echo isset($favicon) ? $favicon : '<link rel="shortcut icon" href="favicon.ico">'; ?>
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

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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
        
        .brand-logo-container {
            text-align: center;
            margin: 50px 0 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        
        .brand-logo-container img {
            max-height: 80px;
            width: auto;
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
                <li class="breadcrumb-item active" aria-current="page">Peso y Fuerza</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES DE</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">PESO Y FUERZA</span>
    </h1>

    <!-- Introducción -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 25px;">
                    Los acondicionadores de señal para celdas de carga son dispositivos indispensables en cualquier sistema de pesaje industrial, robótica o medición de fuerza. Los sensores basados en galgas extensiométricas (puentes de Wheatstone) generan señales eléctricas extremadamente pequeñas, usualmente en el rango de los milivoltios (mV/V), las cuales no pueden ser interpretadas directamente por un PLC o sistema de adquisición de datos.
                </p>
                
                <h3 style="color: var(--lb-primary); font-weight: 700; margin-bottom: 15px;">Funciones Críticas en este tipo de Acondicionadores:</h3>
                
                <ul style="font-size: 1.1rem; color: #555; line-height: 1.8; text-align: justify;">
                    <li><strong>Voltaje de Excitación Ultraestable:</strong> Proporcionan la fuente de tensión constante y regulada necesaria para alimentar el puente de la celda de carga, garantizando que la medición sea estable y sin fluctuaciones.</li>
                    <li><strong>Amplificación de Precisión:</strong> Toman la señal cruda en milivoltios y la amplifican, incrementando la resolución y mejorando dramáticamente la relación señal-ruido.</li>
                    <li><strong>Aislamiento y Filtrado (Antivibración):</strong> Filtran el ruido eléctrico (EMI/RFI) y estabilizan la lectura frente a vibraciones mecánicas del entorno, entregando un dato de peso confiable.</li>
                    <li><strong>Flexibilidad de Salida (Analógica y Digital):</strong> Permiten convertir la lectura de la celda a formatos analógicos estándar (0-10 V, 4-20 mA) o transmitirla directamente a una red industrial mediante protocolos digitales como USB, Modbus RTU (RS485), CANopen, IO-Link o Ethernet.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-light-accent py-5">
        
        <!-- SECCIÓN SENECA -->
        <div class="container">
            <div class="brand-logo-container" style="margin-top: 0;">
                <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 15px;">Acondicionadores de:</h2>
                <a href="seneca" target="_blank">
                    <img src="images/nuestras_marcas/seneca02.jpg" alt="Seneca" title="Seneca">
                </a>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="Z-SG">
                    <img loading="lazy" src="imagenes/44/z-sg-500.jpg" alt="Z-SG" title="Z-SG">
                </a>
                <h4><a href="Z-SG" style="color: inherit; text-decoration: none;">Z-SG/Z-SG2</a></h4>
                <p>Z-SG es un convertidor de galgas extensométricas. La medición, realizada con la técnica de 4 o 6 hilos, está disponible mediante el protocolo serie ModBUS RTU o mediante la salida analógica. La capacidad de configuración de la comunicación se lleva a cabo a través del interruptor DIP o mediante el software mediante la conexión al dispositivo a través del puerto microUSB en el panel frontal. Z-SG está equipado con protección contra descargas ESD de hasta 4 kV.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=z-sg&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/ZC-SG_p_4239.html" target="_blank">
                    <img loading="lazy" src="imagenes/44/z-sg-500.jpg" alt="ZC-SG" title="ZC-SG">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/ZC-SG_p_4239.html" target="_blank" style="color: inherit; text-decoration: none;">ZC-SG</a></h4>
                <p>ZC-SG es un convertidor de señal de galgas extensométricas. Las mediciones tomadas con la técnica de 6 o 4 cables están disponibles a través del protocolo CANopen. Sensibilidad de 1 a 64 mV / V, configurable mediante conmutador DIP para valores enteros, mediante software para valores reales / enteros.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/ZC-SG_p_4239.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>


        <!-- SECCIÓN FUTEK -->
        <div class="container">
            <div class="brand-logo-container">
                <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 15px;">Acondicionadores de:</h2>
                <a href="futek" target="_blank">
                    <img src="images/nuestras_marcas/FUTEK-02.jpg" alt="Futek" title="Futek">
                </a>
            </div>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <a href="FSH03863">
                    <img loading="lazy" src="imagenes/44/IAA100-VOLTAGE-ANALOG-AMPLIFIER-2-FSH03863-500.jpg" alt="IAA100" title="IAA100">
                </a>
                <h4><a href="FSH03863" style="color: inherit; text-decoration: none;">IAA100</a></h4>
                <p>El amplificador de celda de carga analógica IAA100-FSH03863 con salida de voltaje es la nueva solución de amplificador de uso general para la amplificación en línea de cualquier sensor de tipo galga extensométrica de puente completo con salida de rango mV / V. Combina precisión y facilidad de integración con un error total del 0,005%.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/FSH03863_p_11905.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank">
                    <img loading="lazy" src="imagenes/44/IAA100-VOLTAGE-ANALOG-AMPLIFIER-2-FSH03863-500.jpg" alt="IAA200 (FSH03864)" title="IAA200 (FSH03864)">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank" style="color: inherit; text-decoration: none;">IAA200 <span style="font-size: 0.9rem; font-weight: normal; color: #666;">(FSH03864)</span></a></h4>
                <p>El amplificador analógico IAA200-FSH03864 con salida de corriente es la nueva solución de amplificador de uso general para la amplificación en línea de cualquier sensor de tipo galga extensométrica de puente completo con salida de rango mV / V. El nuevo modelo combina precisión y facilidad de integración con un error total del 0,005%.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank">
                    <img loading="lazy" src="imagenes/44/IAA200-CURRENT-ANALONG-AMPLIFIER-1-QSH02025-500.jpg" alt="IAA200 (QSH02025)" title="IAA200 (QSH02025)">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank" style="color: inherit; text-decoration: none;">IAA200 <span style="font-size: 0.9rem; font-weight: normal; color: #666;">(QSH02025)</span></a></h4>
                <p>El amplificador analógico IAA200-QSH02025 con salida de corriente es la nueva solución de amplificador de uso general para la amplificación en línea de cualquier sensor de tipo galga extensométrica de puente completo con salida de rango mV / V. El nuevo modelo combina precisión y facilidad de integración con un error total del 0,005%.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/search.asp?keyword=IAA200&search=" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/FSH03931_p_14423.html" target="_blank">
                    <img loading="lazy" src="imagenes/44/IAA300-DIFFERENTIAL-ANALOG-AMPLIFIER-8-FSH03931-500.jpg" alt="IAA300" title="IAA300">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/FSH03931_p_14423.html" target="_blank" style="color: inherit; text-decoration: none;">IAA300</a></h4>
                <p>El amplificador de galga extensiométrica diferencial IAA300 es la nueva solución de amplificador de uso general para la amplificación en línea de cualquier sensor de puente completo con salida de rango mV / V. Como nuestro amplificador más rápido, el IAA300 presenta un ancho de banda de hasta 50 kHz combinando precisión y facilidad de integración.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/FSH03931_p_14423.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank">
                    <img loading="lazy" src="imagenes/44/IDA100-AMPLIFIER-WITH-DIGITAL-AND-ANALOG-OUTPUT-1-500-500.jpg" alt="IDA100" title="IDA100">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank" style="color: inherit; text-decoration: none;">IDA100</a></h4>
                <p>El IDA100, un amplificador configurable digitalmente con salida USB (amplificador de tensión USB), es un instrumento que ofrece la capacidad única de tener una salida analógica y digital amplificada, adecuada para aplicaciones de celdas de carga digitales. También tiene una salida analógica de ± 5V y ± 10V seleccionable por software.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/FSH03912_p_14231.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador ideal para tu sistema.</span>
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