<?php
require("admin/config.php");
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
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
    <title>Acondicionador de Voltaje - K109LV │ Logicbus</title>
    <meta name="description" content="Acondicionador de mV a mA o V. Entrada desde +/- 25mV hasta +/- 2000mV, ideal para shunts. Aislamiento galvánico de 3 vias (alimentación, entrada y salida). Montaje en riel DIN.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

    <style>
        #leftBar { display: none; }
        body, html { overflow-x: hidden; max-width: 100%; }

        /* Estilos de botones */
        .btn-circle {
            background-color: var(--lb-accent, #FF7E00);
            color: #fff !important;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            border: 2px solid var(--lb-accent, #FF7E00);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-circle:hover {
            background-color: var(--lb-primary, #22527A);
            border-color: var(--lb-primary, #22527A);
            transform: scale(1.05);
            text-decoration: none;
            box-shadow: 0 6px 10px rgba(0,0,0,0.15);
        }

        .btn-outline-primary {
            background-color: transparent;
            color: var(--lb-primary, #22527A) !important;
            border-color: var(--lb-primary, #22527A);
        }
        .btn-outline-primary:hover {
            background-color: var(--lb-primary, #22527A);
            color: #fff !important;
        }

        /* Imagen principal del producto */
        .product-main-img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }
        .product-main-img:hover {
            transform: scale(1.05);
        }

        /* Lista de características con iconos */
        .feature-list {
            list-style: none;
            padding-left: 0;
            font-size: 1.05rem;
            line-height: 1.8;
            color: #555;
        }
        .feature-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 8px;
        }
        .feature-list li i {
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--lb-accent, #FF7E00);
            font-size: 1.1rem;
        }

        /* Títulos de sección */
        .title-with-line {
            color: var(--lb-primary, #22527A);
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 35px;
            display: inline-block;
        }
        .title-with-line::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: var(--lb-accent, #FF7E00);
            border-radius: 2px;
        }

        /* Diseño de tabla de especificaciones */
        .table-specs th {
            background-color: var(--lb-primary, #22527A);
            color: #fff;
            text-align: center;
            font-size: 1.05rem;
            text-transform: uppercase;
            padding: 12px;
        }
        .table-specs .sub-header {
            background-color: #f1f5f9;
            color: var(--lb-primary, #22527A);
            font-weight: bold;
            text-align: center;
            font-size: 1rem;
        }
        .table-specs td {
            vertical-align: middle;
            color: #555;
        }
        .table-specs tr:nth-child(even) td {
            background-color: #fafafa;
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php if(function_exists('arriba')) arriba(); ?>

    <div class="container mt-4 mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="productos" style="color: var(--lb-primary, #22527A);">Productos</a></li>
                <li class="breadcrumb-item"><a href="transductores_sensores" style="color: var(--lb-primary, #22527A);">Transductores / Sensores</a></li>
                <li class="breadcrumb-item"><a href="acond_voltaje" style="color: var(--lb-primary, #22527A);">Acondicionadores de Voltaje</a></li>
                <li class="breadcrumb-item active" aria-current="page">K109LV</li>
            </ol>
        </nav>
    </div>

    <div class="container mb-5">
        <div class="row bg-white p-4 p-md-5 rounded shadow-sm border align-items-center">
            
            <div class="col-12 col-md-5 text-center mb-5 mb-md-0">
                <div class="p-3 border rounded bg-light d-inline-block shadow-sm">
                    <a href="pdf/44/k109lv.pdf" target="_blank">
                        <img src="imagenes/44/k109lv.jpg" alt="K109LV SENECA" class="product-main-img" style="max-width: 320px;">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-7 pl-md-5">
                <h1 style="color: var(--lb-primary, #22527A); font-weight: 800; font-size: 2.8rem; margin-bottom: 10px;">K109LV</h1>
                
                <p class="mb-3" style="font-size: 1.1rem; color: #333;">
                    <strong>Acondicionador de mV a mA o V. Entrada desde +/- 25mV hasta +/- 2000mV, ideal para shunts. Aislamiento galvánico de 3 vias (alimentación, entrada y salida). Montaje en riel DIN. Alimentación de 19 a 30 Vdc directo en acondicionador o con accesorio <a href="https://tienda.logicbus.com.mx/K-BUS_p_3931.html" target="_blank" style="color: var(--lb-accent, #FF7E00); text-decoration: underline;">K-BUS</a>.</strong>
                </p>

                <p class="text-muted mb-4" style="font-size: 1.05rem; line-height: 1.6;">
                    El K109LV permite una conversión de señales de ± 25 mV ~ ± 2000 mV a señales estándar de mA / V. Es útil para el monitoreo de corriente mediante shunts. La conexión de tipo pinza del dispositivo permite una fácil integración a cualquier sistema de cableado. Cuenta con aislamiento galvánico de 3 vías lo que lo hace un dispositivo seguro para cualquier aplicación.
                </p>

                <ul class="feature-list mb-4">
                    <li><i class="fa fa-check-circle"></i> Alimentación de 19.2~30 Vdc.</li>
                    <li><i class="fa fa-check-circle"></i> Entrada: Rango configurable por Dip-switches desde ±25 mV hasta ±2000 mV.</li>
                    <li><i class="fa fa-check-circle"></i> Salida: Corriente 0/4~20, 20~4/0 mA o voltaje 0~5/10 Vdc.</li>
                    <li><i class="fa fa-check-circle"></i> Consumo máximo de corriente: 22mA.</li>
                    <li><i class="fa fa-check-circle"></i> Aislamiento galvánico 3 vías: 1500 Vac.</li>
                    <li><i class="fa fa-check-circle"></i> Precisión del 0.1% y Resolución a 14 bits.</li>
                    <li><i class="fa fa-check-circle"></i> Montaje en riel DIN.</li>
                </ul>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="https://tienda.logicbus.com.mx/K109LV_p_3936.html" target="_blank" class="btn-circle mr-3 mb-2">
                        <i class="fa fa-shopping-cart mr-2"></i> Comprar en Tienda
                    </a>
                    <a href="pdf/44/k109lv.pdf" target="_blank" class="btn-circle mr-3 mb-2">
                        <i class="fa fa-file-pdf-o mr-2"></i> Descargar Ficha Técnica
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 text-center">
        <img loading="lazy" src="https://www.seneca.it/media/1631/k109lv.png" alt="Seneca K109LV Detalles" class="img-fluid rounded border shadow-sm" style="max-width: 800px; width: 100%;">
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h3 class="title-with-line text-center">Especificaciones Técnicas</h3>
        </div>
        
        <div class="table-responsive shadow-sm rounded">
            <table class="table table-bordered table-hover table-specs mb-0 bg-white">
                <thead>
                    <tr>
                        <th colspan="2">Datos Generales (General Data)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="35%"><strong>Alimentación</strong></td>
                        <td width="65%">19.2...30 Vdc</td>
                    </tr>
                    <tr>
                        <td><strong>Consumo de Energía</strong></td>
                        <td>500 mW</td>
                    </tr>
                    <tr>
                        <td><strong>Aislamiento Galvánico</strong></td>
                        <td>1500 Vac (3 vías)</td>
                    </tr>
                    <tr>
                        <td><strong>Alimentación para transductores</strong></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><strong>Precisión</strong></td>
                        <td>0.1%</td>
                    </tr>
                    <tr>
                        <td><strong>Tiempo de Respuesta</strong></td>
                        <td>25 ms</td>
                    </tr>
                    <tr>
                        <td><strong>Indicadores de Estado</strong></td>
                        <td>Alimentación, error</td>
                    </tr>
                    <tr>
                        <td><strong>Configuración</strong></td>
                        <td>DIP Switches</td>
                    </tr>
                    <tr>
                        <td><strong>Montaje</strong></td>
                        <td>Guía riel DIN 35 mm</td>
                    </tr>
                    <tr>
                        <td><strong>Grado de Protección</strong></td>
                        <td>IP20</td>
                    </tr>
                    <tr>
                        <td><strong>Temperatura de Operación</strong></td>
                        <td>-20..+65 °C</td>
                    </tr>
                    <tr>
                        <td><strong>Dimensiones (An x Al x Pr)</strong></td>
                        <td>6.2 x 93 x 102.5 mm</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" class="sub-header">ENTRADA (INPUT)</td>
                    </tr>
                    <tr>
                        <td><strong>Número de Canales</strong></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><strong>Voltaje (mV)</strong></td>
                        <td>Rango: ±25, 50, 60, 75, 80, 100, 120, 150, 200, 250, 300, 400, 500, 1000, 2000 mV (vía DIP switches)</td>
                    </tr>

                    <tr>
                        <td colspan="2" class="sub-header">SALIDA (OUTPUT)</td>
                    </tr>
                    <tr>
                        <td><strong>Número de Canales</strong></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><strong>Voltaje</strong></td>
                        <td>Rango: 0..10 / 10..0 / 0..5 / 1..5 V<br>Resistencia de carga mínima: 2 kOhm</td>
                    </tr>
                    <tr>
                        <td><strong>Corriente</strong></td>
                        <td>Rango: 4..20 / 20..4 / 0..20 / 20..0 mA<br>Resistencia de carga máxima: 500 Ohm<br>Protección: 25 mA</td>
                    </tr>

                    <tr>
                        <td colspan="2" class="sub-header">ESTÁNDARES (STANDARD)</td>
                    </tr>
                    <tr>
                        <td><strong>Aprobación</strong></td>
                        <td>CE</td>
                    </tr>
                    <tr>
                        <td><strong>Normas</strong></td>
                        <td>EN 50081-2; EN 55011; EN 50082-2; EN 61000-2-2/4; EN 50140/141; EN 61010-1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h3 class="title-with-line text-center">Diagrama de Conexión</h3>
        </div>
        <div class="text-center">
            <img loading="lazy" src="imagenes/44/K109LV_e_s.JPG" alt="Esquema de alimentación entrada y salida K109LV" class="img-fluid rounded border shadow-sm" style="max-width: 800px; width: 100%;">
        </div>
    </div>

    <?php if(function_exists('abajo')) abajo(); ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
</body>
</html>