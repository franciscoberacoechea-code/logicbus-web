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
    <title>SENECA Acondicionadores de señal: K109UI │ Logicbus</title>
    <meta name="description" content="Convertidor analogico de voltaje/corriente con una entrada y salida de 0-10Vdc / 4-20mA, Aislamiento galvanico 1,5 kVac, 3 vias, montaje en carril DIN, alimentación de 24 Vdc, conectividad K-BUS opcional.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        /* Video Contenedor */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background-color: #000;
            width: 100%;
        }
        .video-container img {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover; border: none; opacity: 0.85; transition: opacity 0.3s ease;
        }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }
        .video-container .play-button {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            width: 70px; height: 70px; background-color: rgba(0, 0, 0, 0.7); border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .video-container .play-button::after {
            content: ''; position: absolute; top: 50%; left: 54%; transform: translate(-50%, -50%);
            width: 0; height: 0; border-style: solid; border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }
        @media (hover: hover) {
            .video-container:hover img { opacity: 1; }
            .video-container:hover .play-button { background-color: var(--lb-accent, #FF7E00); transform: translate(-50%, -50%) scale(1.1); }
        }
    </style>
</head>

<body onLoad="menu_actual();">
    <?php arriba(); ?>

    <div class="container mt-4 mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="transductores_sensores" class="blue link-orange">Transductores / Sensores</a></li>
                <li class="breadcrumb-item"><a href="acond_corriente" class="blue link-orange">Acondicionadores de Corriente</a></li>
                <li class="breadcrumb-item active" aria-current="page">K109UI</li>
            </ol>
        </nav>
    </div>

    <div class="container mb-5">
        <div class="row bg-white p-4 p-md-5 rounded shadow-sm border align-items-center">
            
            <div class="col-12 col-md-5 text-center mb-5 mb-md-0">
                <div class="p-3 border rounded bg-light d-inline-block shadow-sm">
                    <a href="https://tienda.logicbus.com.mx/assets/PDF/44/K109UI_Datasheet.pdf" target="_blank">
                        <img src="/assets/images/K109UI2.jpg" alt="K109UI SENECA" class="product-main-img" style="max-width: 320px;">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-7 pl-md-5">
                <h1 style="color: var(--lb-primary, #22527A); font-weight: 800; font-size: 2.8rem; margin-bottom: 10px;">K109UI</h1>
                <p class="text-muted mb-4" style="font-size: 1.2rem; line-height: 1.6;">
                    Convertidor/aislador con entrada y salida a corriente o voltaje configurable por DIP switch.
                </p>

                <ul class="feature-list mb-4">
                    <li><i class="fa fa-check-circle"></i> Un canal de entrada de corriente (0/4~20 mA) o Voltaje (0/1~5V, 0/2~10V, 0~15/30 Vdc).</li>
                    <li><i class="fa fa-check-circle"></i> Un canal de salida de corriente o Voltaje configurable.</li>
                    <li><i class="fa fa-check-circle"></i> Aislamiento galvánico 3 vías para máxima protección.</li>
                    <li><i class="fa fa-check-circle"></i> Conexión al sistema <a href="https://tienda.logicbus.com.mx/K-BUS_p_3931.html" target="_blank" style="color: var(--lb-accent, #FF7E00); text-decoration: underline;">K-BUS</a> en riel DIN.</li>
                    <li><i class="fa fa-check-circle"></i> Diseño ultracompacto y precisión superior del 0.1%.</li>
                </ul>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="https://tienda.logicbus.com.mx/K109UI_p_3942.html" target="_blank" class="btn-circle mr-3 mb-2">
                        <i class="fa fa-shopping-cart mr-2"></i> Comprar en Tienda
                    </a>
                    <a href="https://tienda.logicbus.com.mx/assets/PDF/44/K109UI_Datasheet.pdf" target="_blank" class="btn-circle mr-3 mb-2">
                        <i class="fa fa-file-pdf-o mr-2"></i> Descargar Ficha Técnica
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h3 class="title-with-line text-center">Especificaciones Técnicas</h3>
        </div>
        
        <div class="table-responsive shadow-sm rounded">
            <table class="table table-bordered table-hover table-specs mb-0 bg-white">
                <thead>
                    <tr>
                        <th colspan="2">Características Generales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="35%"><strong>Alimentación</strong></td>
                        <td width="65%">19.2 ~ 30 Vdc</td>
                    </tr>
                    <tr>
                        <td><strong>Precisión</strong></td>
                        <td>0.08% del valor f.s. por mA o 5V de salida<br>0.07% del valor f.s. por 10V de salida</td>
                    </tr>
                    <tr>
                        <td><strong>Indicadores</strong></td>
                        <td>Entrada o salida fuera de rango<br>Saturación de entrada<br>Falla interna</td>
                    </tr>
                    <tr>
                        <td><strong>Aislamiento galvánico</strong></td>
                        <td>Alimentación / Entrada / Salida a 1500 Vac, Digital</td>
                    </tr>
                    <tr>
                        <td><strong>Configuración</strong></td>
                        <td>DIP Switch (señal de entrada y señal de salida)</td>
                    </tr>
                    <tr>
                        <td><strong>Dimensiones y Peso</strong></td>
                        <td>6.2 x 93.1 x 102.5 mm / 50 g</td>
                    </tr>
                    <tr>
                        <td><strong>Temperatura de operación</strong></td>
                        <td>-20°C a +65°C</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" class="sub-header">ENTRADA</td>
                    </tr>
                    <tr>
                        <td><strong>Rangos de Voltaje</strong></td>
                        <td>0 a 15 V, 0 a 30 V, 0 a 10 V, 2 a 10 V, 0 a 5 V, 1 a 5 V</td>
                    </tr>
                    <tr>
                        <td><strong>Rangos de Corriente</strong></td>
                        <td>0 a 20 mA, 4 a 20 mA</td>
                    </tr>

                    <tr>
                        <td colspan="2" class="sub-header">SALIDA</td>
                    </tr>
                    <tr>
                        <td><strong>Rangos de Voltaje</strong></td>
                        <td>0 a 5 Vdc, 1 a 5 Vdc, 0 a 10 Vdc y 2 a 10 Vdc (Carga &lt; 2 KOhm)</td>
                    </tr>
                    <tr>
                        <td><strong>Rangos de Corriente</strong></td>
                        <td>0 a 20 mA, 4 a 20 mA, 20 a 0 mA y 20 a 4 mA (Carga &gt; 500 Ohm)</td>
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
            <img loading="lazy" src="https://www.logicbus.com.mx/assets/images/k109ui.png" alt="Diagrama K109UI" class="img-fluid rounded border shadow-sm" style="max-width: 800px; width: 100%;">
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center">
            <h3 class="title-with-line text-center">Video de Funcionamiento</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="video-container" data-video-id="BKUyk0KUf54">
                    <img loading="lazy" src="https://img.youtube.com/vi/BKUyk0KUf54/hqdefault.jpg" alt="Video Funcionamiento K109UI">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>
    </div>

    <?php abajo(); ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>

    <script>
        // Cargar video de YouTube dinámicamente al hacer clic
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
</html>