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
    <title>Acondicionadores de Señal para Temperatura | Logicbus</title>
    
    <meta name="description" content="Acondicionadores de Temperatura que permite admitir una señal de entrada y realizar una amplificación de alta precisión.">
    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, Temperatura, K109PT, K109PT1000, K109PT-HPC, K109TC, K120RTD, K121, LBSC-TC14, LBSC-TR14, LBTTX14, T120, T121, SG-3011, SG-3013, Z109TC, Z109PT2, Z-4TC, S117P">
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
        
        .custom-list strong {
            color: var(--lb-primary);
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
                <li class="breadcrumb-item active" aria-current="page">Temperatura</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES DE SEÑAL</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">PARA TEMPERATURA</span>
    </h1>

    <!-- Contenido Superior e Introducción -->
    <div class="container mb-5">

        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 25px; font-size: 1.1rem;">
                    Los acondicionadores de señal para temperatura permiten recibir lecturas directas de sensores como termopares o termorresistencias RTD/PT100 y transformarlas en señales estandarizadas, precisas y libres de ruido. Al realizar una amplificación de alta precisión con derivas térmicas despreciables, estos equipos garantizan que los sistema de control adquiera datos totalmente confiables.
                </p>
                <p style="font-size: 1.05rem; color: #555; text-align: justify;">
                    Dependiendo de los requerimientos específicos del proyecto industrial, nuestros acondicionadores pueden integrar las siguientes funciones clave:
                </p>

                <ul class="custom-list text-justify mb-4">
                    <li><strong>Amplificación y Atenuación:</strong> Ajustan los milivoltios del sensor a rangos estándar (como 4-20 mA o 0-10 V) para que el PLC o tarjeta DAQ puedan interpretarlos.</li>
                    <li><strong>Compensación de Unión Fría (CJC):</strong> Función indispensable para calcular con precisión la temperatura real cuando se utilizan termopares, estabilizando la medición.</li>
                    <li><strong>Excitación:</strong> Proveen la corriente o voltaje exacto necesario para energizar y leer sensores pasivos, como los RTD.</li>
                    <li><strong>Filtrado:</strong> Eliminan el ruido eléctrico, armónicos y las interferencias electromagnéticas (EMI) comunes en el piso de producción.</li>
                    <li><strong>Aislamiento Galvánico:</strong> Separan eléctricamente la entrada de la salida para proteger los equipos de control contra picos de voltaje y eliminar los bucles de tierra.</li>
                    <li><strong>Multiplexado:</strong> Permiten concentrar y procesar múltiples canales de medición de temperatura, optimizando el espacio en el tablero y reduciendo costos de hardware.</li>
                </ul>

                <!-- Botón de Tienda Centrado -->
                <div class="text-center mt-2">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/acondicionadores-de-senal.html" target="_blank" style="min-width: 250px;">Ver catálogo en Tienda</a>
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
            <!-- T120 -->
            <div class="product-card">
                <a href="T120">
                    <img loading="lazy" src="imagenes/t120_lr-500.jpg" alt="T120" title="T120">
                </a>
                <h4><a href="T120" style="color: inherit; text-decoration: none;">T120</a></h4>
                <p>T120 es un transmisor de temperatura de alta precisión para montaje en cabezal y está diseñado para uso universal en máquinas, plantas, instalaciones y en la industria de procesos para facilitar el tiempo, los costos de medición, la puesta en servicio y el mantenimiento.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/T120_p_4129.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- T121 -->
            <div class="product-card">
                <a href="T121">
                    <img loading="lazy" src="imagenes/t120_lr-500.jpg" alt="T121" title="T121">
                </a>
                <h4><a href="T121" style="color: inherit; text-decoration: none;">T121</a></h4>
                <p>T121 es un transmisor de temperatura de alta precisión para montaje en cabezal y está diseñado para uso universal en máquinas, plantas, instalaciones y en la industria de procesos para facilitar el tiempo, los costos de medición, la puesta en servicio y el mantenimiento.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/T121_p_4131.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109PT -->
            <div class="product-card">
                <a href="K109PT">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K109PT" title="K109PT">
                </a>
                <h4><a href="K109PT" style="color: inherit; text-decoration: none;">K109PT</a></h4>
                <p>K109PT es un convertidor para Termorresistencia PT100 con 2,3,4 hilos y proporciona una señal de salida estándar mA / V. Es completamente configurable a través de interruptores DIP. Un aislamiento galvánico de 3 vías entre los circuitos de alimentación // entrada // salida asegura la integridad de sus datos.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109PT_p_3937.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109PT1000 -->
            <div class="product-card">
                <a href="K109PT1000">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K109PT1000" title="K109PT1000">
                </a>
                <h4><a href="K109PT1000" style="color: inherit; text-decoration: none;">K109PT1000</a></h4>
                <p>El instrumento K109PT1000 convierte una señal de temperatura leída por una sonda PT1000 con conexión de 2, 3 o 4 cables en una señal normalizada de voltaje o corriente. K109PT1000 realiza la conversión de la medición de 14 bits.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109PT1000_p_3939.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109PT-HPC -->
            <div class="product-card">
                <a href="K109PT-HPC">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K109PT-HPC" title="K109PT-HPC">
                </a>
                <h4><a href="K109PT-HPC" style="color: inherit; text-decoration: none;">K109PT-HPC</a></h4>
                <p>El instrumento K109PT-HPC convierte una señal de temperatura leída por una sonda PT100 (EN 60751) con conexión de 2, 3 o 4 cables en una señal normalizada de voltaje o corriente. K109PT realiza una conversión de medición de 14 bits.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109PT-HPC_p_3938.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K109TC -->
            <div class="product-card">
                <a href="K109TC">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K109TC" title="K109TC">
                </a>
                <h4><a href="K109TC" style="color: inherit; text-decoration: none;">K109TC</a></h4>
                <p>El instrumento K109TC es un aislador galvánico de cuatro puntos. Convierte una señal de temperatura leída por un termopar en una señal normalizada de voltaje o corriente. K109TC cuenta además con una salida pasiva que se conmuta cuando se excede un umbral.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K109TC_p_3941.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K120RTD -->
            <div class="product-card">
                <a href="K120RTD">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K120RTD" title="K120RTD">
                </a>
                <h4><a href="K120RTD" style="color: inherit; text-decoration: none;">K120RTD</a></h4>
                <p>El instrumento K120RTD convierte una señal de temperatura leída por sondas PT100 (EN 60751) o NI100 con conexión de 2, 3 o 4 cables en una señal de corriente normalizada para bucle de 4 - 20 mA (tecnología de 2 cables).</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K120RTD_p_3946.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- K121 -->
            <div class="product-card">
                <a href="K121">
                    <img loading="lazy" src="imagenes/k109pt-500.jpg" alt="K121" title="K121">
                </a>
                <h4><a href="K121" style="color: inherit; text-decoration: none;">K121</a></h4>
                <p>K121 es un convertidor universal de alto rendimiento capaz de gestionar todas las señales analógicas (mA, mV, V, PT100, Pt1000, Pt500, Ni100, TC, Ohm) y convertirlo / aislarlo en una señal alimentada por bucle de 4.20 mA.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/K121_p_3948.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z-4TC -->
            <div class="product-card">
                <a href="Z-4TC">
                    <img loading="lazy" src="imagenes/z-4tc-500.jpg" alt="Z-4TC" title="Z-4TC">
                </a>
                <h4><a href="Z-4TC" style="color: inherit; text-decoration: none;">Z-4TC</a></h4>
                <p>Z-4TC es un módulo de entrada Modbus con posibilidad de adquirir hasta 4 entradas para medir termopares J, K, E, N, S, R, B, T o hasta 4 entradas para medir tensiones en mV.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z-4TC_p_4152.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z-4TC-D -->
            <div class="product-card">
                <a href="Z-4TC-D">
                    <img loading="lazy" src="imagenes/z-4tc-500.jpg" alt="Z-4TC-D" title="Z-4TC-D">
                </a>
                <h4><a href="Z-4TC-D" style="color: inherit; text-decoration: none;">Z-4TC-D</a></h4>
                <p>Z-4TC-D permite adquirir hasta 4 sensores de termopar a través de un PLC con solo entrada / salida digital. La interfaz del PLC se basa en tres señales de tipo PNP adecuadas para la conexión a la mayoría de los PLC.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z-4TC-D_p_9941.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- LBSC-TC14 -->
            <div class="product-card">
                <a href="lbsc-tc14">
                    <img loading="lazy" src="imagenes/14/LBSC-VA14_10.jpg" alt="LBSC-TC14" title="LBSC-TC14">
                </a>
                <h4><a href="lbsc-tc14" style="color: inherit; text-decoration: none;">LBSC-TC14</a></h4>
                <p>Acondicionador y aislamiento para termopares con salida estandarizada de voltaje y corriente. Ideal para ambientes industriales.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Temperatura_c_3032-1-7.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- SG-3011 -->
            <div class="product-card">
                <a href="SG-3011">
                    <img loading="lazy" src="imagenes/02/sg-3011.jpg" alt="SG-3011" title="SG-3011">
                </a>
                <h4><a href="SG-3011" style="color: inherit; text-decoration: none;">SG-3011</a></h4>
                <p>Módulo de Entrada de Termopar con Aislamiento Galvánico. Proporciona protección robusta y precisión para sistemas de adquisición de datos.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Temperatura_c_1279.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z170REG-1 (Nuevo) -->
            <div class="product-card">
                <a href="Z170REG-1">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1%20(1).jpg" alt="Z170REG-1" title="Z170REG-1">
                </a>
                <h4><a href="Z170REG-1" style="color: inherit; text-decoration: none;">Z170REG-1</a></h4>
                <p>Duplicador y aislador de señales analógicas universales. 1 entrada (V, mA, Ω, TC o RTD), 2 salidas (V o mA activo o pasivo). Aislamiento galvánico 4 vías. Configuración por DIP switches y software. Montaje en riel DIN.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z170REG-1_p_13212.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-H (Nuevo) -->
            <div class="product-card">
                <a href="Z109REG2-H">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-h.jpg" alt="Z109REG2-H" title="Z109REG2-H">
                </a>
                <h4><a href="Z109REG2-H" style="color: inherit; text-decoration: none;">Z109REG2-H</a></h4>
                <p>Z109REG2-H es un convertidor universal avanzado capaz de gestionar todas las señales analógicas (mA, V, PT100, Pt1000, Pt500, Ni100, TCs, Ohms) y convertirlo / aislarlo en señales mA / V estándar.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-H_p_13202.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2 (Nuevo) -->
            <div class="product-card">
                <a href="Z109REG2">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2.jpg" alt="Z109REG2" title="Z109REG2">
                </a>
                <h4><a href="Z109REG2" style="color: inherit; text-decoration: none;">Z109REG2</a></h4>
                <p>Es un convertidor universal avanzado capaz de gestionar todas las señales analógicas (mA, V, PT100, Pt1000, Pt500, Ni100, TCs, Ohms) y convertirlo/aislarlo en señales mA/V estándar.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2_p_4206.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>

            <!-- Z109REG2-1 (Nuevo) -->
            <div class="product-card">
                <a href="Z109REG2-1">
                    <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/44/z109reg2-1.jpg" alt="Z109REG2-1" title="Z109REG2-1">
                </a>
                <h4><a href="Z109REG2-1" style="color: inherit; text-decoration: none;">Z109REG2-1</a></h4>
                <p>El módulo Z109REG2-1 adquiere una señal de entrada universal, la convierte en formato analógico y la retransmite en una salida universal aislada garantizando alta protección.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/Z109REG2-1_p_13201.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>

        <!-- Accesorios -->
        <div class="container text-center mt-5 mb-4">
            <h2 class="section-title" style="margin-top: 0 !important;">Accesorios</h2>
        </div>
        <div class="products-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 350px)); justify-content: center;">
            <!-- S117P1 -->
            <div class="product-card">
                <a href="S117P">
                    <img loading="lazy" src="imagenes/44/S117_ch.jpg" alt="S117P1" title="S117P1">
                </a>
                <h4><a href="S117P" style="color: inherit; text-decoration: none;">S117P1</a></h4>
                <p>Kit de Programación para acondicionadores como T120, T121, K121 y K120RTD (Acondicionador Serial USB TTL-RS232-RS485). Facilita la configuración por software.</p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/S117P1_p_4032.html" target="_blank" style="width: 100%;">Ver en Tienda</a>
            </div>
        </div>
    </div>

    <!-- Infografía -->
    <div class="py-5">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Diagrama de Aplicación</h2>
            <img class="img-fluid rounded shadow-sm border mt-3" src="images/app/seneca-infografia-t121.png" alt="Diagrama transmisor universal de temperatura con aislamiento" style="max-width: 100%; border: 1px solid #dee2e6;">
        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA TÉCNICA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador de temperatura adecuado para tu proceso.</span>
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