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
    <title>Medición de Variables Eléctricas - S203TA - Logicbus S.A de C.V</title>
    <meta name="description" content="S203TA es un analizador de red trifásico compacto y robusto, ideal para modernizar el monitoreo de calidad de energía en tableros industriales.">
    <meta name="keywords" content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
    
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
        #leftBar {
            display: none;
        }
        body, html {
            overflow-x: hidden;
            max-width: 100%;
        }
        
        /* Estilos para tabla técnica */
        .table-tech thead th {
            background-color: var(--lb-primary, #22527A);
            color: #fff;
            border-color: var(--lb-primary, #22527A);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        .table-tech tbody td:first-child {
            font-weight: 600;
            background-color: #f8f9fa;
            width: 35%;
        }

        /* OPTIMIZACIÓN MÓVIL PARA TÍTULOS Y BOTONES */
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.6rem !important; 
                word-wrap: break-word;
                padding: 0 10px;
            }
            .btn-navigation .btn-circle {
                margin: 5px 2px !important;
                display: inline-block;
                font-size: 0.9rem;
                padding: 8px 15px;
            }
            .main-title {
                font-size: 1.8rem !important;
            }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="transductores_sensores" class="blue link-orange">Sensores y Transductores</a></li>
                <li class="breadcrumb-item"><a href="power_transducers" class="blue link-orange">Potencia Eléctrica</a></li>
                <li class="breadcrumb-item"><a href="power_transducers1" class="blue link-orange">Medición de Variables</a></li>
                <li class="breadcrumb-item active" aria-current="page">S203TA</li>
            </ol>
        </nav>
    </div>

    <div class="container mb-5">
        <div class="row align-items-center bg-white rounded shadow-sm border p-4">
            
            <div class="col-12 col-md-5 text-center mb-4 mb-md-0">
                <img loading="lazy" src="imagenes/44/s203t.jpg" alt="Analizador S203TA" title="S203TA" class="img-fluid" style="max-height: 350px;">
            </div>

            <div class="col-12 col-md-7">
                <h1 class="main-title font-weight-bold" style="color: var(--lb-primary, #22527A); margin-bottom: 15px;">S203TA</h1>

                <p class="text-muted text-justify mb-3" style="font-size: 1.1rem; line-height: 1.7;">
                    Analizador de redes trifásico compacto y robusto, ideal para modernizar el monitoreo de calidad de energía en tableros industriales. Diseñado para un práctico montaje en riel DIN y totalmente compatible con transformadores de corriente estándar de 5A, este equipo mide con alta precisión parámetros críticos como Watts, VARs, voltaje y factor de potencia. Además, garantiza una integración perfecta y segura con cualquier PLC o sistema SCADA al ofrecer de manera simultánea una salida analógica industrial aislada y comunicación digital nativa vía Modbus RTU.
                </p>
                
                <p class="mb-4" style="font-size: 1.05rem;">
                    <em>También disponible con display integrado, el modelo <a href="https://tienda.logicbus.com.mx/S203TA-D_p_7081.html" target="_blank" style="color: var(--lb-accent, #FF7E00); font-weight: bold; text-decoration: underline;">S203TA-D</a>.</em>
                </p>
                
                <h5 style="color: var(--lb-accent, #FF7E00); font-weight: bold;">Especificaciones Rápidas:</h5>
                <ul class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                    <li>Salida de corriente (0..20, 4..20 mA) o voltaje (0..5, 0..10 Vdc).</li>
                    <li>Precisión de medición del 0.5%.</li>
                    <li>Aislamiento galvánico @3.75KV.</li>
                    <li>Alimentación flexible de 10 a 40 Vdc, 19 a 28 Vac.</li>
                </ul>

                <div class="mt-4">
                    <a href="https://tienda.logicbus.com.mx/S203TA_p_13075.html" target="_blank" class="btn text-white rounded-pill shadow-sm" style="background-color: var(--lb-primary, #22527A); padding: 12px 30px; font-size: 1.1rem;">
                        <i class="fa fa-shopping-cart mr-2"></i> Ver Disponibilidad y Comprar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5 text-center">
        <a class="btn-circle mx-2" href="#especificaciones">Especificaciones</a>
        <a class="btn-circle mx-2" href="#diagramas">Diagramas de Conexión</a>
        <a class="btn-circle mx-2" href="#descargas">Ficha Técnica</a>
        <a class="btn-circle mx-2" href="#contacto">Solicitar Cotización</a>
    </nav>

    <div class="container my-5" id="especificaciones">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">ESPECIFICACIONES TÉCNICAS</h2>
        
        <div class="table-responsive shadow-sm rounded border">
            <table class="table table-striped table-bordered table-tech mb-0">
                <thead>
                    <tr>
                        <th colspan="2" class="text-center h5 py-3 m-0">Especificaciones Generales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Alimentación Eléctrica</td><td>10-40 Vdc, 19-28 Vac (50-60 Hz)</td></tr>
                    <tr><td>Consumo de Energía</td><td>2.5 W</td></tr>
                    <tr><td>Aislamiento</td><td>4 kVac entre la medición de entrada y otros circuitos / 1,500 Vac entre la alimentación y comunicación / salida retransmitida</td></tr>
                    <tr><td>Categoría de Instalación</td><td>350 V CAT II</td></tr>
                    <tr><td>Indicadores de Estado</td><td>Alimentación, Falla, Comunicación RS485</td></tr>
                    <tr><td>Error de Retransmisión</td><td>0.1% (rango completo)</td></tr>
                    <tr><td>Ancho de Banda</td><td>7 kHz</td></tr>
                    <tr><td>Clase de Precisión</td><td>0.5%</td></tr>
                    <tr><td>Tipo de Inserción</td><td>Monofásico, trifásico Aron, trifásico de 4 hilos</td></tr>
                    <tr><td>Conexiones</td><td>Sensores Rogowski con salida máx. 200 mV RMS</td></tr>
                    <tr><td>Grado de Protección</td><td>IP20</td></tr>
                    <tr><td>Montaje</td><td>Riel DIN de 35 mm</td></tr>
                    <tr><td>Conexión</td><td>Terminal de tornillo, paso de 5.08 mm</td></tr>
                    <tr><td>Temperatura de Operación</td><td>-10 a +65°C S203RC-D, -20 a +70°C sensor Rogowski</td></tr>
                    <tr><td>Dimensiones [Ancho x Alto x Prof]</td><td>105 x 89 x 60 mm</td></tr>
                    <tr><td>Peso</td><td>200 g</td></tr>
                    <tr><td>Material de Carcasa</td><td>Material plástico UL V0</td></tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th colspan="2" class="text-center h5 py-3 m-0">Comunicación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Interfaz</td><td>RS485, 2 hilos</td></tr>
                    <tr><td>Velocidad</td><td>Tiempo de muestreo 25 ms</td></tr>
                    <tr><td>Protocolo</td><td>Modbus RTU esclavo</td></tr>
                    <tr><td>Distancia</td><td>Hasta 1,200 m</td></tr>
                    <tr><td>Conectividad</td><td>Máx. 32 nodos</td></tr>
                </tbody>
                
                <thead>
                    <tr>
                        <th colspan="2" class="text-center h5 py-3 m-0">Entradas y Salidas (I/O)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Número de Canales</td><td>1 entrada, 2 salidas (Baud Rate máx. 115,200 b/s)</td></tr>
                    <tr><td>Tipo de Entrada</td><td>VOLTAJE hasta 600 Vac (50-60 Hz); CORRIENTE de transductores Rogowski con salida máx. 200 mV</td></tr>
                    <tr><td>Tipo de Salida</td><td>1 salida RS485 Modbus esclavo <br> 1 salida analógica, voltaje/corriente (Voltaje 0..5, 0..10Vdc. Corriente 0..20, 4..20mA) <br> 1 salida digital (pulso para energía producida/consumida)</td></tr>
                </tbody>

                <thead>
                    <tr>
                        <th colspan="2" class="text-center h5 py-3 m-0">Programación y Estándares</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Configuración</td><td>Interruptor DIP o software (EASY SETUP)</td></tr>
                    <tr><td>Certificaciones</td><td>CE</td></tr>
                    <tr><td>Normas</td><td>EN 61000-6-4, EN 61000-6-2, EN 61010-1</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-light py-5" id="diagramas">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">DIAGRAMAS Y DIMENSIONES</h2>
            
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 mb-4 text-center">
                    <div class="bg-white p-3 rounded shadow-sm border h-100 d-flex align-items-center justify-content-center">
                        <img loading="lazy" src="imagenes/44/S203T_e_s.JPG" alt="Conexiones S203TA" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 mb-4 text-center">
                    <div class="bg-white p-3 rounded shadow-sm border h-100 d-flex align-items-center justify-content-center">
                        <img loading="lazy" src="imagenes/44/S203T-AL.JPG" alt="Alimentación S203TA" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="descargas">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">FICHA TÉCNICA</h2>
        
        <div class="text-center pb-4">
            <a href="pdf/44/s203ta.pdf" target="_blank" style="text-decoration: none; display: inline-block; transition: opacity 0.3s ease;" onmouseover="this.style.opacity=0.8" onmouseout="this.style.opacity=1">
                <img loading="lazy" src="imagenes/iconpdf.jpg" alt="Ícono de PDF" style="width: 50px; margin-bottom: 10px; display: block; margin: 0 auto;">
                <span class="font-weight-bold d-block mt-2" style="color: var(--lb-primary, #22527A); font-size: 1.1rem;">Ver archivo PDF</span>
            </a>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary, #22527A);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white, #fff); margin-bottom: 15px; text-transform: uppercase;">¿Tienes dudas sobre la instalación?</h2>
            <span class="paragraph" style="color: var(--lb-white, #fff); font-size: 1.1rem;">
                Nuestro equipo de ingenieros puede apoyarte a resolver dudas de integración, comunicación Modbus y dimensionamiento para tu proyecto.
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

</body>
<?php echo $var_footer; ?>
</html>