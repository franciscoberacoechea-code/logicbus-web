<?php
require("admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <title>Dispositivos de Adquisicion de datos de tipo Wifi | Logicbus</title>
    <meta name="description" content="Los productos de adquisición de datos Wi-Fi proporcionan una manera fácil de incorporar conectividad inalámbrica en los sistemas de monitoreo y control.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://www.logicbus.com.mx/adquisicion-de-datos-wifi.php">
    
    <!--- Estilos Necesarios (No modificar) -->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>
<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos.php" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="adquisicion-de-datos.php" class="blue link-orange">Adquisición de datos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wi-fi</li>
            </ol>
        </nav>
    </div>

    <!-- Titulo -->
    <div class="container-fluid my-5">
        <h1 class="banner-title blue font-weight-bolder mb-5">Dispositivos de Adquisicion de datos <b class="banner-title light-orange">de tipo Wifi</b></h1>
        <p class="light-black paragraph text-justify px-md-5 px-1">Con la popularidad de la infraestructura de red 802.11 y el Internet de las cosas (IoT) que enlaza todos los dispositivos conectados vía Wi-fi.<br><br>Los productos de adquisición de datos Wi-Fi proporcionan una manera fácil de incorporar conectividad inalámbrica en los sistemas de monitoreo y control. Los módulos Wi-Fi admiten una distancia de comunicación de hasta 100 metros (328 pies).</p>
    </div>

    <!-- Botones -->
    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/Wi-fi_c_2112.html" target="_blank"><button class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
        <a class="button-text" href="#contacto"><button class="button button-white">Contacto</button></a>
    </div>

    <!-- Productos -->
    <section class="container-fluid" id="productos">
        <style>
            .tabla-especificaciones {
                width: 100%;
                max-width: 650px;
                margin: 0 auto;
                border: 1px solid black;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
                font-size: 14px;
            }

            .tabla-especificaciones th,
            .tabla-especificaciones td {
                border: 1px solid black;
                padding: 8px;
                vertical-align: middle;
                text-align: left;
            }

            .encabezado-principal {
                background-color: #FF7E00;
                font-weight: bold;
                color: black;
                font-size: 16px;
                text-transform: uppercase;
                text-align: center !important;
            }

            .subtitulo {
                background-color: #5499C7;
                font-weight: bold;
                color: black;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                text-align: center;
            }

            .subtitulo a {
                color: black;
                text-decoration: none;
            }

            .subtitulo a:hover {
                text-decoration: underline;
            }

            .titulo-fila {
                background-color: #CCCCCC;
                font-weight: bold;
                width: 40%;
            }

            .contenido {
                background-color: #FFFFFF;
                line-height: 1.4;
            }

            .table-responsive {
                overflow-x: auto;
                display: flex;
                justify-content: center;
                margin-bottom: 3rem;
            }

            @media (max-width: 768px) {
                .tabla-especificaciones {
                    width: 100%;
                }

                .titulo-fila {
                    width: 45%;
                }
            }
        </style>

        <div class="table-responsive">
            <table class="tabla-especificaciones">
                <thead>
                    <tr>
                        <th colspan="2" class="encabezado-principal">Wi-Fi Modbus TCP Data Acquisition</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- WF-2015 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2015_p_17925.html" target="_blank">WF-2015</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (6-channel RTD Input)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">6 RTD</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">Pt100, Pt1000, Ni120, Cu100, Cu1000</td>
                    </tr>

                    <!-- WF-2017 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2017_p_13925.html" target="_blank">WF-2017</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (8-channel Differential/16-channel Single-Ended Analog Input)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">8/16</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">AI +/-150 mV, +/-500 mV, +/-1 V, +/-5 V, +/-10 V, 0 ~ +20 mA, +4 ~ +20 mA, +/-20 mA (Jumper Selectable)</td>
                    </tr>

                    <!-- WF-2019 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2017_p_13925.html" target="_blank">WF-2019</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (10-channel Universal Analog Input)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">10AI</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">+/-150 mV, +/-500 mV, +/-1 V, +/-5 V, +/-10 V, 0 ~ +20 mA, +4 ~ +20 mA, +/-20 mA (Jumper Selectable), Thermocouple: J, K, T, E, R, S, B, N, C</td>
                    </tr>

                    <!-- WF-2026 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2026_p_10444.html" target="_blank">WF-2026</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (5-channel Analog Input, 2-channel Analog Output, 2-channel Digital Input and 3-channel Digital Output)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">2AI, 2DI</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">+/-150 mV, +/-500 mV, +/-1 V, +/-5 V, +/-10 V, 0 ~ +20 mA, +4 ~ +20 mA, +/-20 mA (Jumper Selectable)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Channel</td>
                        <td class="contenido">2AO, 3DO</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Type</td>
                        <td class="contenido">0-5 VDC, +0 ~ +10 VDC, +/-5 VDC, +/-10 VDC, +0 ~ +20 mA, +4 ~ +20 mA (Jumper Selectable)</td>
                    </tr>

                    <!-- WF-2042 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2042_p_17926.html" target="_blank">WF-2042</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (16DO)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Channel</td>
                        <td class="contenido">16DO, Sink(NPN)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Type</td>
                        <td class="contenido">+3.5 ~ +50 V</td>
                    </tr>

                    <!-- WF-2051 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2051_p_17927.html" target="_blank">WF-2051</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (16DI)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">16DI</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">Dry Contact: Source, Wet Contact: Sink / Source</td>
                    </tr>

                    <!-- WF-2055 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2055_p_8778.html" target="_blank">WF-2055</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (8DI / 8DO)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">8DI with counter</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">Dry Contact: Source, Wet Contact: Sink / Source</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Channel</td>
                        <td class="contenido">8DO, Sink(NPN)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Type</td>
                        <td class="contenido">+3.5 ~ +50 V</td>
                    </tr>

                    <!-- WF-2060 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WF-2060_p_5950.html" target="_blank">WF-2060</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module (6 DI / 6 Relay)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Channel</td>
                        <td class="contenido">6DI with counter</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Input Type</td>
                        <td class="contenido">Dry Contact: Source, Wet Contact: Sink / Source</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Channel</td>
                        <td class="contenido">6DO</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Type</td>
                        <td class="contenido">RELAY, Form A (SPST-NO)</td>
                    </tr>

                    <!-- WFM-R14 -->
                    <tr>
                        <td colspan="2" class="subtitulo"><a href="https://tienda.logicbus.com.mx/WFM-R14_p_17928.html" target="_blank">WFM-R14</a></td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Description</td>
                        <td class="contenido">Wi-Fi I/O Module with Metal Case(14 Relay)</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Channel</td>
                        <td class="contenido">14DO</td>
                    </tr>
                    <tr>
                        <td class="titulo-fila">Output Type</td>
                        <td class="contenido">2 Form A Power Relays, 12 Form C Power Relays</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Contacto -->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white text-uppercase">¿NECESITAS ASESORÍA CON TU PROYECTO WI-FI?</h2>
            <span class="paragraph white">Nuestro equipo de ingenieros está listo para ayudarte a seleccionar el equipo ideal.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>
</html>