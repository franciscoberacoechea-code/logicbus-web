<?php
require("admin/config.php");
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logicbus | Ethernet (Modbus TCP) : DIGITAL I/O</title>
    <meta name="description" content="Modbus/TCP es un protocolo de comunicación que permite a PLCs, PC, drivers para motores y otros dispositivos físicos de E/S, comunicarse sobre una red Ethernet.">
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

        /* Estilos de Tarjetas de Producto */
        .product-card {
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            background: #fff;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .product-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-color: var(--lb-accent, #FF7E00);
            transform: translateY(-5px);
        }
        .product-img {
            max-width: 150px;
            margin-bottom: 15px;
        }
        .product-title {
            color: var(--lb-primary, #22527A);
            font-weight: 700;
            font-size: 1.15rem;
            text-decoration: none;
            margin-bottom: 15px;
            display: block;
        }
        .product-title:hover {
            color: var(--lb-accent, #FF7E00);
            text-decoration: none;
        }

        .btn-circle {
            background-color: var(--lb-accent, #FF7E00);
            color: #fff !important;
            border-radius: 30px;
            padding: 8px 25px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            border: 2px solid var(--lb-accent, #FF7E00);
            margin-top: auto; 
        }
        .btn-circle:hover {
            background-color: var(--lb-primary, #22527A);
            border-color: var(--lb-primary, #22527A);
            transform: scale(1.05);
            text-decoration: none;
        }

        /* Optimizaciones para móviles */
        @media (max-width: 768px) {
            .main-title {
                font-size: 1.8rem !important;
            }
        }
    </style>
</head>

<body onLoad="menu_actual();">
    <?php arriba(); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="ethernet_daq" class="blue link-orange">Ethernet</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modbus TCP : E/S Digitales y Análogas</li>
            </ol>
        </nav>
    </div>

    <h1 class="main-title text-center mb-5 mt-4">
        <span style="color: var(--lb-primary, #22527A); font-size: inherit; line-height: inherit;">Ethernet e I/O Digitales</span>
        <span style="color: var(--lb-accent, #FF7E00); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">MODBUS TCP</span>
    </h1>

    <div class="container mb-5">
        <div class="bg-light rounded shadow-sm border p-4 p-md-5 text-center">
            <p class="intro-text text-justify mx-auto" style="font-size: 1.05rem; line-height: 1.7; max-width: 900px;">
                <strong>Modbus/TCP</strong> es un protocolo de comunicación diseñado que permite a equipos industriales tales como PLCs, PC, drivers para motores y otros tipos de dispositivos físicos de entrada/salida, comunicarse sobre una red Ethernet.
            </p>
            <p class="intro-text text-justify mx-auto" style="font-size: 1.05rem; line-height: 1.7; max-width: 900px;">
                Modbus/TCP básicamente encapsula una trama MODBUS dentro de una trama TCP de una manera simple y eficiente.
            </p>
            <div class="mt-4">
                <a href="https://www.logicbus.com.mx/Modbus" target="_blank" class="font-weight-bold" style="color: var(--lb-accent, #FF7E00); text-decoration: underline; font-size: 1.1rem;">
                    Seguir leyendo sobre el protocolo...
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <a href="eI_O_familia"><img src="imagenes/03/120.jpg" alt="Familia Super Compacta" class="product-img"></a>
                    <a href="eI_O_familia" class="product-title">Familia Super Compacta Distribuida Ethernet</a>
                    <a href="https://tienda.logicbus.com.mx/Familia-compacta-distribuida_c_767.html" target="_blank" class="btn-circle">Ver Modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <a href="modulos-tET"><img src="imagenes/02/tET-PD2R1.jpg" alt="Modulos tET" class="product-img"></a>
                    <a href="modulos-tET" class="product-title">Módulos tET</a>
                    <a href="https://tienda.logicbus.com.mx/Familia-tET_c_1515.html" target="_blank" class="btn-circle">Ver Modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <a href="et-7000_familia"><img src="imagenes/02/ET-7053.jpg" alt="Familia Compacta Distribuida" class="product-img"></a>
                    <a href="et-7000_familia" class="product-title">Familia Compacta Distribuida</a>
                    <a href="https://tienda.logicbus.com.mx/Familia-ET_c_1516.html" target="_blank" class="btn-circle">Ver Modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <a href="familia_alta_densidad"><img src="imagenes/03/450E_01.jpg" alt="Familia de Alta Densidad" class="product-img"></a>
                    <a href="familia_alta_densidad" class="product-title">Familia de Alta Densidad</a>
                    <a href="https://tienda.logicbus.com.mx/Familia-de-alta-densidad_c_1294.html" target="_blank" class="btn-circle">Ver Modelos</a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="product-card">
                    <a href="https://tienda.logicbus.com.mx/modulos-de-es-ethernet" target="_blank"><img src="https://www.logicbus.com.mx/imagenes/333/poe.jpg" alt="Módulos de E/S Ethernet" class="product-img"></a>
                    <a href="https://tienda.logicbus.com.mx/modulos-de-es-ethernet" target="_blank" class="product-title">Módulos de E/S Ethernet</a>
                    <a href="https://tienda.logicbus.com.mx/modulos-de-es-ethernet" target="_blank" class="btn-circle">Ver Modelos</a>
                </div>
            </div>

        </div>
    </div>

    <?php abajo(); ?>
</body>
</html>