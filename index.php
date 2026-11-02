<?php
require("admin/config.php");
include("libreria/libreria.php");
include("libreria/prueba_de_pestana.php");

$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html lang="es">


<head>
    <!-- Verificaciones de dominio -->
    <meta name="facebook-domain-verification" content="p0bs4hxk57vu0ibuucu19hkeajego6" />
    <meta name="google-site-verification" content="Pvh8y-gY8RPubUqZAwbv6bFr-l8eZpf69lT9_fEg2To" />
    <meta name="p:domain_verify" content="05c2b45981d1188bc541a10a7ab43817" /> <!-- Pinterest -->

    <!-- Global site tag (gtag.js) - WooRank -->
    <script type="text/javascript">
        window.woorankAssistantOptions = window.woorankAssistantOptions || {};
        window.woorankAssistantOptions.url = 'logicbus.com.mx';
        window.woorankAssistantOptions.assistantPublicKey = '21370538c6be6c20207e5badf795fc7d';
        (function () {
            var wl = document.createElement('script'); wl.type = 'text/javascript'; wl.async = true;
            wl.src = 'https://assistant.woorank.com/hydra/assistantLoader.latest.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wl, s);
        })();
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K22WJ6N');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logicbus: Tu Sitio De Automatizacion</title>

    <!-- Open Graph (Facebook/LinkedIn) -->
    <meta property="og:sitename" content="logicbus.com.mx" />
    <meta property="og:url" content="https://www.logicbus.com.mx">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Logicbus:Be think Technology" />
    <meta property="og:image" content="https://www.logicbus.com.mx/imagenes/logo-Logicbus.png" />
    <meta property="og:description"
        content="Logicbus líder en soluciones innovadoras de automatización, medición, pruebas y control industrial. AMRs, Cobots, PLC, sensores, registradores, comunicación" />
    <meta property="og:image:alt" content="Logicbus: Tu Sitio De Automatizacion" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Logicbus">
    <meta name="twitter:creator" content="@Logicbus">
    <meta name="twitter:title" content="Logicbus">
    <meta name="twitter:description"
        content="Logicbus líder en soluciones innovadoras de automatización, medición, pruebas y control industrial. AMRs, Cobots, PLC, sensores, registradores, comunicación">
    <meta name="twitter:image" content="https://www.logicbus.com.mx/imagenes/logicbus.webp">

    <!-- Zoho PageSense -->
    <script async src="https://cdn.pagesense.io/js/logicbus/60e9e81428e24e84a52b5a363a9448b7.js"></script>
    <script async src="https://cdn.pagesense.io/js/logicbus/30623fec7b844086b737e3d7d93e50b3.js"></script>

    <!-- Fuentes / Iconos -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Facebook Pixel Code -->
    <script async>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1017843358591197');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;"
            src="https://www.facebook.com/tr?id=1017843358591197&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Datos Estructurados (Schema.org) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Organization",
                "name": "Logicbus",
                "url": "https://www.logicbus.com.mx",
                "sameAs": [
                    "https://www.facebook.com/logicbus/",
                    "https://www.youtube.com/channel/UCGYjB-qzlDGvtd9BCrGTOJQ?sub_confirmation=1",
                    "https://www.linkedin.com/company/logicbus",
                    "https://x.com/Logicbus", 
                    "https://www.instagram.com/logicbus_sa/"
                ],
                "logo": "https://logicbus.com.mx/imagenes/logicbus.webp",
                "image": "https://logicbus.com.mx/imagenes/logicbus.webp",
                "description": "Logicbus líder en soluciones innovadoras de automatización, medición, pruebas y control industrial. AMRs, Cobots, PLC, sensores, registradores, comunicación",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Av. Miguel Hidalgo y Costilla 1443 Piso 6 Col. Americana (Torre Iclar)", 
                    "addressLocality": "Guadalajara",
                    "addressRegion": "Jalisco",
                    "postalCode": "44160",
                    "addressCountry": "México"
                },
                "contactPoint": [
                    {
                        "@type": "ContactPoint",
                        "telephone": "+52-33-3854-5975",
                        "contactType": "Customer Service",
                        "availableLanguage": ["Spanish", "English"]
                    },
                    {
                        "@type": "ContactPoint",
                        "url": "https://logicbus.com.mx/contacto",
                        "contactType": "Sales"
                    },
                    {
                        "@type": "ContactPoint",
                        "telephone": "+1-619-616-7350",
                        "contactType": "Customer Service",
                        "availableLanguage": "English"
                    }
                ]
            },
            {
                "@type": "WebSite",
                "name": "Logicbus",
                "alternateName": "Logicbus: Tu Sitio De Automatizacion",
                "url": "https://www.logicbus.com.mx"
            }
        ]
    }
    </script>

    <!-- SEO Básico -->
    <meta name="keywords"
        content="Logicbus, asesoria en equipos industriales,celdas de carga,acondicionadores de señal, adquisicion de datos, BACnet, controllino, conectores, computadoras industriales, comunicacion celular, control de movimiento, controladores autónomos programables, PLCs, convertidores de protocolos , ethernet, fuentes de poder, GPIB, IEEE-488, GPS, HART, inalambricos, instrumentos de medición, laboratorio academico, PLC, profibus, registradores, sensores, software, transductores, robots, cobots, automatizacion industrial, Indusoft, Futek, Laumas, Logicbus SA de CV,venta de equipos de automatizacion Guadalajara,equipos industriales,equipos industriales MexicoAutomatización, Consultoría, Estados Unidos, venta, distribucion,equipos industriales,sensores par" />
    <meta name="description"
        content="Logicbus líder en soluciones innovadoras de automatización, medición, pruebas y control industrial. AMRs, Cobots, PLC, sensores, registradores, comunicación" />
    <meta name="ROBOTS" content="all">
    <meta name="revisit-after" content="14 days">
    <meta name="author" content="Logicbus S.A. de C.V.">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <link rel="canonical" href="https://www.logicbus.com.mx">

    <!-- Archivos CSS y variables PHP -->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>

    <link rel="stylesheet" href="libreria/css/style.css">
    <link rel="stylesheet" href="libreria/fonts/font-awesome.min.css">

    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>


<body>

    <div class="agenda-trigger" onclick="openSecureAgenda()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
        </svg>
        <span>Agendar cita</span>
    </div>

    <div class="agenda-overlay" id="loaderOverlay">
        <div style="text-align: center;">
            <div class="premium-loader"></div>
            <div style="letter-spacing: 3px; font-size: 12px; font-weight: 300;">CONECTANDO CON ODOO...</div>
        </div>
    </div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K22WJ6N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2">
    </script>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <!-- marqueee-->
    <div class="marquee">
        <div class="track">
            <div class="d-flex">
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/automatizacion-control-procesos"
                    class="link-white-to-orange">Automatización industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/transductores-sensores"
                    class="link-white-to-orange">Sensores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/programmable-automation"
                    class="link-white-to-orange">Controladores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/instrumentos-medicion"
                    class="link-white-to-orange">Equipos de medición</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/torque-sensor"
                    class="link-white-to-orange">Sensores de torque</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/robots-colaborativos"
                    class="link-white-to-orange">Robots colaborativos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/celdas-de-carga"
                    class="link-white-to-orange">Celdas de carga</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/plc"
                    class="link-white-to-orange">PLC</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/transductores-sensores"
                    class="link-white-to-orange">Transductores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/daviteq"
                    class="link-white-to-orange">Sensores LoraWan</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/fuentes-de-poder"
                    class="link-white-to-orange">Fuentes de poder</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/rfid-inc"
                    class="link-white-to-orange">Radiofrecuencia</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/sensores-temperatura"
                    class="link-white-to-orange">Sensores de temperatura</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/hmi-con-touchscreen"
                    class="link-white-to-orange">HMI</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/pantallas-industriales"
                    class="link-white-to-orange">Pantallas y monitores industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/sensores-fotoelectricos"
                    class="link-white-to-orange">Sensores fotoeléctricos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/encoder"
                    class="link-white-to-orange">Encoders</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/teclados-indice"
                    class="link-white-to-orange">Teclados industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/convertidores-protocolos"
                    class="link-white-to-orange">Convertidores de protocolo</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/control-movimiento"
                    class="link-white-to-orange">Control de movimiento</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/stand-osciloscopios"
                    class="link-white-to-orange">Osciloscopios</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/datalogger"
                    class="link-white-to-orange">Registradores de datos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/computadoras-para-panel"
                    class="link-white-to-orange">Panel PC</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/youibot"
                    class="link-white-to-orange">AMR</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/cimon-software-scada-industrial"
                    class="link-white-to-orange">SCADA</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/oee-que-es"
                    class="link-white-to-orange">OEE</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/vision-artificial"
                    class="link-white-to-orange">Control de procesos</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/pc-y-comunicaciones-industriales"
                    class="link-white-to-orange">Comunicación industrial</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/adquisicion-y-registro-de-datos-daq"
                    class="link-white-to-orange">Adquisición de datos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/instrumentos-medicion"
                    class="link-white-to-orange">Equipos de prueba y medición</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/robots-colaborativos"
                    class="link-white-to-orange">Robótica industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/vision-artificial"
                    class="link-white-to-orange">Sistemas de visión artificial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/computadoras-industriales"
                    class="link-white-to-orange">Computadoras industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/teracom"
                    class="link-white-to-orange">Monitoreo remoto</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/tecnologia-cloud-iot"
                    class="link-white-to-orange">Soluciones de IoT industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/control-via-celular-industrial"
                    class="link-white-to-orange">Control Vía Celular (GSM)</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/multimetros"
                    class="link-white-to-orange">Multímetros</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/consumo-y-analisis-de-energia-electrica"
                    class="link-white-to-orange">Consumo y análisis de energía eléctrica</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/Donas-de-corriente"
                    class="link-white-to-orange">Donas de Corriente</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/multivariables-logger"
                    class="link-white-to-orange">Graficadores Multicanales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/acondicionador-de-senal"
                    class="link-white-to-orange">Acondicionador de señal</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/hub-usb-industrial"
                    class="link-white-to-orange">Hub USB Industrial</a>
                <!--Se repiten para que aparezcan todos-->
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/automatizacion-control-procesos"
                    class="link-white-to-orange">Automatización industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/transductores-sensores"
                    class="link-white-to-orange">Sensores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/programmable-automation"
                    class="link-white-to-orange">Controladores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/instrumentos-medicion"
                    class="link-white-to-orange">Equipos de medición</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/torque-sensor"
                    class="link-white-to-orange">Sensores de torque</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/robots-colaborativos"
                    class="link-white-to-orange">Robots Móviles Autónomos (AMR)</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/celdas-de-carga"
                    class="link-white-to-orange">Celdas de carga</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/plc"
                    class="link-white-to-orange">PLC</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/transductores-sensores"
                    class="link-white-to-orange">Transductores</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/daviteq"
                    class="link-white-to-orange">Sensores LoraWan</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/fuentes-de-poder"
                    class="link-white-to-orange">Fuentes de poder</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/rfid-inc"
                    class="link-white-to-orange">Radiofrecuencia</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/sensores-temperatura"
                    class="link-white-to-orange">Sensores de temperatura</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/hmi-con-touchscreen"
                    class="link-white-to-orange">HMI</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/pantallas-industriales"
                    class="link-white-to-orange">Pantallas y monitores industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/sensores-fotoelectricos"
                    class="link-white-to-orange">Sensores fotoeléctricos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/encoder"
                    class="link-white-to-orange">Encoders</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/teclados-indice"
                    class="link-white-to-orange">Teclados industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/convertidores-protocolos"
                    class="link-white-to-orange">Convertidores de protocolo</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/control-movimiento"
                    class="link-white-to-orange">Control de movimiento</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/stand-osciloscopios"
                    class="link-white-to-orange">Osciloscopios</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/datalogger"
                    class="link-white-to-orange">Registradores de datos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/computadoras-para-panel"
                    class="link-white-to-orange">Panel PC</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/youibot"
                    class="link-white-to-orange">AMR</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/cimon-software-scada-industrial"
                    class="link-white-to-orange">SCADA</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/oee-que-es"
                    class="link-white-to-orange">OEE</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/vision-artificial"
                    class="link-white-to-orange">Control de procesos</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/pc-y-comunicaciones-industriales"
                    class="link-white-to-orange">Comunicación industrial</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/adquisicion-y-registro-de-datos-daq"
                    class="link-white-to-orange">Adquisición de datos</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/instrumentos-medicion"
                    class="link-white-to-orange">Equipos de prueba y medición</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/robots-colaborativos"
                    class="link-white-to-orange">Robótica industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/vision-artificial"
                    class="link-white-to-orange">Sistemas de visión artificial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/computadoras-industriales"
                    class="link-white-to-orange">Computadoras industriales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/teracom"
                    class="link-white-to-orange">Monitoreo remoto</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/tecnologia-cloud-iot"
                    class="link-white-to-orange">Soluciones de IoT industrial</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/control-via-celular-industrial"
                    class="link-white-to-orange">Control Vía Celular (GSM)</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/multimetros"
                    class="link-white-to-orange">Multímetros</a>
                <div class="sm-orange-circle"></div><a
                    href="https://www.logicbus.com.mx/consumo-y-analisis-de-energia-electrica"
                    class="link-white-to-orange">Consumo y análisis de energía eléctrica</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/Donas-de-corriente"
                    class="link-white-to-orange">Donas de Corriente</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/multivariables-logger"
                    class="link-white-to-orange">Graficadores Multicanales</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/acondicionador-de-senal"
                    class="link-white-to-orange">Acondicionador de señal</a>
                <div class="sm-orange-circle"></div><a href="https://www.logicbus.com.mx/hub-usb-industrial"
                    class="link-white-to-orange">Hub USB Industrial</a>
            </div>
        </div>
    </div>
    <!--marqueee fin-->
    <!-- VIDEO BANNER-->

    <div class="card-video text-white">
        <video autoplay muted loop class="video" poster="./assets/videos/poster.webp">
            <source src="assets/equipos-para-automatizacion-control-pruebas-logicbus.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="video-overlay">
            <h1 class="banner-title white font-weight-bold mb-0">Equipos para automatización, <p
                    class="banner-title white font-weight-bold mb-0"> control y pruebas</p>
            </h1>
            <a class="button-text mt-5" href="https://www.logicbus.com.mx/contacto"><button
                    class="button button-circle-orange">Cotiza ahora</button></a>
        </div>
    </div>

    <!-- VIDEO BANNER -->

    <section class="py-5">
        <div class="mx-5 row justify-content-around">
            <a href="empresa" class="col-12 col-md-3 blue link-orange ">
                <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div id="year" class="counter"
                        data-count="24">0&nbsp;</div>&nbsp;años</div>
                <p class="paragraph text-center">Siendo tu aliado en la automatización</p>
            </a>
            <a href="clientes-logicbus" class="col-12 col-md-4 blue link-orange">
                <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div class="counter"
                        data-count="23500">
                        0&nbsp;</div>&nbsp;clientes</div>
                <p class="paragraph text-center">En México y todo el mundo, satisfechos con nuestros productos y
                    servicios</p>
            </a>
            <a href="marcas-logicbus" class="col-12 col-md-3 blue link-orange">
                <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div class="counter" data-count="56">
                        0&nbsp;</div>&nbsp;marcas</div>
                <p class="paragraph text-center">Reconocidas en la industria</p>
            </a>
        </div>
    </section>

    <section class="section-blue text-center p-3">
        <h2 class="white">¿Tienes dudas? ¡Consulta nuestras Preguntas Frecuentes! <a
                class="button-text button button-circle-orange" href="soporte#faqs">Ir a FAQ's</a></h2>
    </section>

    <!-- Carrusel CATEGORIAS -->
    <section class="pb-5">
        <div class="container pt-5 pb-3">
            <h2 class="title blue">CATEGORIAS</h2>
            <p class="paragraph blue" align="center">Te acompañamos en la selección correcta de los equipos de
                automatización, control y pruebas, tenemos soluciones para cada industria, para cada categoría.</p>
        </div>
        <div class="pt-5 pb-3">
            <div class="">
                <div class="carousel"
                    data-flickity='{ "lazyLoad": 8, "autoPlay": 1500, "wrapAround": true, "pageDots": false, "prevNextButtons": false }'>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="automatizacion-control-procesos"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/automatizacion-y-control-de-procesos.svg"
                                alt="Automatización y control de procesos"
                                title="Automatización y control de procesos" />
                            <br>Automatización y control de procesos</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="adquisicion-y-registro-de-datos-daq"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/adquisicion-y-registro-de-datos-daq.svg"
                                alt="Adquisición y registro de datos DAQ" title="Adquisición y registro de datos DAQ" />
                            <br>Adquisición y registro de datos DAQ</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="pc-y-comunicaciones-industriales"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/pcs-y-comunicaciones-industriales.svg"
                                alt="PC's y comunicaciones industriales" title="PC's y comunicaciones industriales" />
                            <br>PC's y comunicaciones industriales</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="robots-colaborativos"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/vision-artificial-y-robots.svg" alt="Robótica"
                                title="Robótica" /><br>Robótica</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="consumo-y-analisis-de-energia-electrica"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/consumo-y-analisis-de-energia-electrica.svg"
                                alt="Consumo y análisis de energía" title="Consumo y análisis de energía">
                            <br>Consumo y análisis de energía</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="transductores-sensores"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/sensores-y-transductores.svg"
                                alt="Sensores y transductores" title="Sensores y transductores">
                            <br>Sensores y transductores</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="software"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/software-y-herramientas-de-desarrollo.svg"
                                alt="Software y herramientas de desarrollo"
                                title="Software y herramientas de desarrollo">
                            <br>Software y herramientas de desarrollo</a>
                    </div>
                    <div class="carousel-cell categoria-carousel-cell">
                        <a class="categoria-carousel-link med blue" href="instrumentos-medicion"><img
                                class="carousel-cell-image categoria-carousel-cell-image"
                                data-flickity-lazyload="assets/prueba-y-medicion.svg" alt="Prueba y medición"
                                title="Prueba y medición"><br>Prueba y medición</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-3">
            <h3 class="subtitle blue mb-3">También te podria interesar:</h3>
            <div class="list-group list-group-horizontal">
                <a href="https://www.logicbus.com.mx/control-via-celular-industrial"
                    class="list-group-item list-group-item-action paragraph">Comunicación Celular</a>
                <a href="https://www.logicbus.com.mx/control-movimiento"
                    class="list-group-item list-group-item-action paragraph">Control de Movimiento</a>
                <a href="https://www.logicbus.com.mx/programmable-automation"
                    class="list-group-item list-group-item-action paragraph">Controladores Autónomos Programables
                    (PAC)</a>
                <a href="https://www.logicbus.com.mx/ethernet-daq"
                    class="list-group-item list-group-item-action paragraph">Ethernet</a>
            </div>
            <div class="list-group list-group-horizontal">
                <a href="https://www.logicbus.com.mx/power-supply"
                    class="list-group-item list-group-item-action paragraph">Fuentes de Poder</a>
                <a href="https://www.logicbus.com.mx/hart"
                    class="list-group-item list-group-item-action paragraph">HART</a>
                <a href="https://www.logicbus.com.mx/oee-que-es"
                    class="list-group-item list-group-item-action paragraph">OEE</a>
                <a href="https://www.logicbus.com.mx/industrial-wireless"
                    class="list-group-item list-group-item-action paragraph">Inalámbricos</a>
                <a href="https://www.logicbus.com.mx/instrumentos-medicion"
                    class="list-group-item list-group-item-action paragraph">Instrumentos de Medición</a>
            </div>
            <div class="list-group list-group-horizontal">
                <a href="https://www.logicbus.com.mx/instrumentos-panel"
                    class="list-group-item list-group-item-action paragraph">Instrumentos para Panel</a>
                <a href="https://www.logicbus.com.mx/academia-prod"
                    class="list-group-item list-group-item-action paragraph">Laboratorio Académico</a>
                <a href="https://www.logicbus.com.mx/medicion-potencia"
                    class="list-group-item list-group-item-action paragraph">Medición de Potencia</a>
                <a href="https://www.logicbus.com.mx/pci"
                    class="list-group-item list-group-item-action paragraph">PCI</a>
            </div>
            <div class="list-group list-group-horizontal">
                <a href="https://www.logicbus.com.mx/external-signal"
                    class="list-group-item list-group-item-action paragraph">PCI Acondicionamiento de Señal</a>
                <a href="https://www.logicbus.com.mx/pci-express"
                    class="list-group-item list-group-item-action paragraph">PCI Express</a>
                <a href="https://www.logicbus.com.mx/plc"
                    class="list-group-item list-group-item-action paragraph">PLC</a>
                <a href="https://www.logicbus.com.mx/profibus"
                    class="list-group-item list-group-item-action paragraph">Profibus</a>
            </div>
            <div class="list-group list-group-horizontal">
                <a href="https://www.logicbus.com.mx/datalogger"
                    class="list-group-item list-group-item-action paragraph">Registradores</a>
                <a href="https://www.logicbus.com.mx/robots-colaborativos"
                    class="list-group-item list-group-item-action paragraph">Robots Colaborativos</a>
                <a href="https://www.logicbus.com.mx/Serial-IO-Modules"
                    class="list-group-item list-group-item-action paragraph">Serial</a>
                <a href="https://www.logicbus.com.mx/switch-ethernet-industrial"
                    class="list-group-item list-group-item-action paragraph">Switch Ethernet</a>
                <a href="https://www.logicbus.com.mx/transductores-sensores"
                    class="list-group-item list-group-item-action paragraph">Trasductores</a>
                <a href="https://www.logicbus.com.mx/usb-categorias"
                    class="list-group-item list-group-item-action paragraph">USB</a>
            </div>
        </div>
    </section>
    <!-- Fin Carrusel CATEGORIAS -->

    <!-- Section Industrias-->
    <section class="my-5 pb-5">
        <h2 class="title blue my-0">Industrias</h2>
        <!-- <div class="container">
            <div class="component">
                 Start Nav Structure 
                <button class="cn-button" id="cn-button">Ver</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li alt="Aeronáutica" title="Aeronáutica"><a href="#"><img class="icon-ind" src="./assets/industrias/aeronautica.svg"></a></li>
                        <li alt="Agricultura" title="Agricultura"><a href="#"><img class="icon-ind" src="./assets/industrias/agricultura.svg"></a></li>
                        <li alt="Alimentos y Bebidas" title="Alimentos y Bebidas"><a href="soluciones-en-la-industria-logicbus"><img class="icon-ind" src="./assets/industrias/alimentos-bebidas.svg"></a></li>
                        <li alt="Automotriz" title="Automotriz"><a href="#"><img class="icon-ind" src="./assets/industrias/automotriz.svg"></a></li>
                        <li alt="Construcción" title="Construcción"><a href="#"><img class="icon-ind" src="./assets/industrias/construccion.svg"></a></li>
                        <li alt="Electrónica" title="Electrónica"><a href="#"><img class="icon-ind" src="./assets/industrias/electrica.svg"></a></li>
                        <li alt="Energética" title="Energética"><a href="#"><img class="icon-ind" src="./assets/industrias/energetica.svg"></a></li>
                        <li alt="Farmacéutica y Laboratorio" title="Farmacéutica y Laboratorio"><a href="#"><img class="icon-ind" src="./assets/industrias/farmaceutica.svg"></a></li>
                        <li alt="Academia e investigación" title="Academia e investigación"><a href="#"><img class="icon-ind" src="./assets/industrias/investigacion.svg"></a></li>
                        <li alt="Transporte" title="Transporte"><a href="#"><img class="icon-ind" src="./assets/industrias/transporte.svg"></a></li>
                    </ul>
                </div>
                 End of Nav Structure 
            </div>
        </div>-->

        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/aeronautica.webp" class="card-img" alt="Aeronáutica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Aeronáutica</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/agricultura.webp" class="card-img" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Agricultura</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/alimentos-y-bebidas.webp" class="card-img"
                            alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Alimentos y Bebidas</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/automotriz.webp" class="card-img" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Automotriz</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/construccion.webp" class="card-img" alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Construcción</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/industria-electronica.webp" class="card-img" alt="Electrónica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Electrónica</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/industria-energetica.webp" class="card-img" alt="Energética">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Energética</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/farmaceutica.webp" class="card-img"
                            alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Farmacéutica y Laboratorio</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/investigacion.webp" class="card-img"
                            alt="Academia e investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Academia e investigación</p>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white disabled" href="">
                        <img src="./assets/industrias/industria-transporte.webp" class="card-img" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <p class="card-title">Transporte</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--  Fin Section Industrias-->

    <section class="section-blue">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="images/catalogo-logicbus-automatizacion-industrial.webp" alt="line-card" class="line-card"
                        width="100%">
                </div>
                <div class="col-12 col-md-6 py-5">
                    <p class="paragraph white" align="center">Conoce nuestra variedad de marcas y equipos para
                        automatización, control y pruebas, te ayudamos a seleccionar el equipo ideal para tu proyecto o
                        necesidad</p>
                    <div class="flex-center">
                        <button class="button button-circle-orange" data-toggle="modal" data-target="#myModal"
                            data-backdrop="false" data-bs-backdrop="false">Ver</button>
                        <a class="button-text" href="pdf/catalogos/CATALOGO-MEXICO-2026.pdf"><button
                                class="button button-circle-orange">Descargar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="background: rgba(0, 0, 0, 0.6); z-index: 99999; overflow-y: auto;">

        <div class="modal-dialog modal-dialog-centered" role="document"
            style="max-width: 92% !important; width: 92% !important; margin: 1.75rem auto;">
            <div class="modal-content" style="width: 100%;">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Catálogo - Logicbus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="opacity: 1; font-size: 1.8rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0; overflow: hidden;">
                    <iframe src="pdf/catalogos/CATALOGO-MEXICO-2026.pdf"
                        style="width: 100%; height: 75vh; border: none; display: block;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Servicios-->
    <section class="py-5">
        <div class="container">
            <h2 class="title blue text-center">TU PROVEEDOR EN EQUIPOS DE AUTOMATIZACIÓN, CONTROL Y PRUEBAS</h2>
            <p class="paragraph light-black text-justify">Somos una empresa con más de 22 años de experiencia. Contamos
                con un equipo de ingenieros altamente capacitados para recomendarte las mejores soluciones para tus
                proyectos industriales. Buscamos facilitar a las empresas nacionales e internacionales la mejora de sus
                procesos y sistemas de calidad con nuestros equipos especializados en automatización, control y pruebas,
                otorgando un excelente servicio de consultoria, soporte técnico y capacacitación.</p>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="card card-service-tam border-0 text-white">
                    <img src="https://www.logicbus.com.mx/images/seccion-quienes-somos/equipos.webp" class="card-img"
                        alt="Equipos">
                    <a href="https://www.logicbus.com.mx/productos" class="">
                        <div class="card-img-overlay card-service">
                            <h3 class="card-title text-center subtitle white">Equipos</h3>
                            <p class="card-text paragraph white text-center">Logicbus te brinda la más actual y mejor
                                tecnología en productos industriales.</p>
                        </div>
                    </a>
                </div>
                <div class="card card-service-tam border-0 text-white">
                    <img src="https://www.logicbus.com.mx/images/seccion-quienes-somos/cursos.webp" class="card-img"
                        alt="Cursos">
                    <a href="https://www.logicbus.com.mx/cursos" class="">
                        <div class="card-img-overlay card-service">
                            <h3 class="card-title text-center subtitle white">Cursos</h3>
                            <p class="card-text paragraph white text-center">Ingenieros especialistas en distintas áreas
                                y con cursos de calidad.</p>
                        </div>
                </div>
                <div class="card card-service-tam border-0 text-white">
                    <img src="https://www.logicbus.com.mx/images/seccion-quienes-somos/consultoria.webp"
                        class="card-img" alt="Consultoria">
                    <a href="https://www.logicbus.com.mx/contacto" class="">
                        <div class="card-img-overlay card-service">
                            <h3 class="card-title text-center subtitle white">Consultoria</h3>
                            <p class="card-text paragraph white text-center">Logicbus brinda la mejor consultoría para
                                tu aplicación industrial.</p>
                        </div>
                    </a>
                </div>
                <div class="card card-service-tam border-0 text-white">
                    <img src="https://www.logicbus.com.mx/images/seccion-quienes-somos/integracion.webp"
                        class="card-img" alt="Integración de proyectos">
                    <a href="https://www.logicbus.com.mx/contacto" class="">
                        <div class="card-img-overlay card-service">
                            <h3 class="card-title text-center subtitle white">Integración de proyectos</h3>
                            <p class="card-text paragraph white text-center">Nuestros ingenieros están capacitados para
                                integrar tu proyecto con los mejores equipos.</p>
                        </div>
                    </a>
                </div>
                <div class="card card-service-tam border-0 text-white">
                    <img src="https://www.logicbus.com.mx/images/seccion-quienes-somos/soporte.webp" class="card-img"
                        alt="Soporte">
                    <a href="https://www.logicbus.com.mx/contacto" class="">
                        <div class="card-img-overlay card-service">
                            <h3 class="card-title text-center subtitle white">Soporte</h3>
                            <p class="card-text paragraph white text-center">Tenemos un equipo de especialistas
                                preparados para brindarte el mejor soporte técnico.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- Servicios Fin-->

    <!-- Section Tiendas-->
    <section class="">
        <div class="container py-5">
            <h2 class="title blue">VISITA NUESTRAS TIENDAS VIRTUALES</h2>
            <p class="paragraph blue" align="center">Encuentra la solución en automatización a tu proyecto, con más de
                20,000 equipos para la industria, disponibles en nuestras tiendas en línea, con envíos nacionales e
                internacionales.</p>
            <div class="row justify-content-center mt-5">
                <div class="col-6 col-md-3">
                    <img src="images/logicbus-automatizacion-industrial-tienda-mexico.webp" class="line-card mb-3"
                        alt="Tienda MX" title="Tienda MX" width="100%">
                    <a class="button-text" href="https://tienda.logicbus.com.mx/"><button
                            class="button button-circle-orange">Ir a tienda</button></a>
                </div>
                <div class="col-6 col-md-3">
                    <img src="images/logicbus-industrial-automation-store-usa.webp" class="line-card mb-3"
                        alt="Tienda USA" title="Tienda MX" width="100%">
                    <a class="button-text" href="http://logicbus.com/"><button class="button button-circle-orange">Go to
                            store</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Tiendas-->

    <!-- Section Integradores-->
    <section>
        <div class="wrap">
            <div class="wrap-text">
                <h2 class="title white shadow-text" align="center">BUSCAMOS INTEGRADORES, DISTRIBUIDORES Y OEMs</h2>
                <p class="paragraph white">En Logicbus buscamos formar alianzas a nivel nacional e
                    internacional,
                    ofrecemos descuentos, capacitaciones, soporte técnico y grandes beneficios para ellos.</p>
                <p class="paragraph white">Contamos con una red importante de contactos en diferentes
                    sectores
                    industriales y nos preocupamos por ser partícipes de su crecimiento.</p>
                <a class="button-text" href="distribuidores-integradores"><button class="button button-circle-blue">Más
                        información</button></a>
            </div>
        </div>

    </section>
    <!-- Section Integradores-->

    <!-- Section Clientes-->
    <section id="nuestros_clientes">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col" align="center">
                    <h2 class="title blue">NUESTROS CLIENTES</h2>
                    <div class="my-5">
                        <div class="sliderCli">
                            <div class="slide-trackCli">
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/hp-c.png" alt="HP"
                                        name="HP" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/nasa-c.png"
                                        alt="NASA" name="NASA" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/modelo-c.png"
                                        alt="MODELO" name="MODELO" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/iteso-c.png"
                                        alt="ITESO" name="ITESO" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/bayer-c.png"
                                        alt="BAYER" name="BAYER" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/continental-c.png"
                                        alt="Continental" name="Continental" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/kia-logo.png"
                                        alt="KIA" name="KIA" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/apple-logo.png"
                                        alt="APPLE" name="APPLE" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/audi-logo.png"
                                        alt="AUDI" name="AUDI" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/resco-logo.png"
                                        alt="resco" name="resco" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/toyota-tsusho-logo.png"
                                        alt="TOYOTA TSUSHO" name="TOYOTA TSUSHO" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/microx-logo.png"
                                        alt="MICRO-X" name="MICRO-X" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/logo_clientes/SalsasCastilloLogo.png"
                                        alt="Salsas Castillo" width="100%">
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/hp-c.png" alt="HP"
                                        name="HP" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/nasa-c.png"
                                        alt="NASA" name="NASA" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/modelo-c.png"
                                        alt="MODELO" name="MODELO" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/iteso-c.png"
                                        alt="ITESO" name="ITESO" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/bayer-c.png"
                                        alt="BAYER" name="BAYER" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/continental-c.png"
                                        alt="Continental" name="Continental" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/kia-logo.png"
                                        alt="Continental" name="Continental" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/apple-logo.png"
                                        alt="Continental" name="Continental" width="80%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/audi-logo.png"
                                        alt="AUDI" name="AUDI" width="95%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/resco-logo.png"
                                        alt="resco" name="resco" width="95%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/toyota-tsusho-logo.png"
                                        alt="TOYOTA TSUSHO" name="TOYOTA TSUSHO" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/nuestros_clientes/microx-logo.png"
                                        alt="MICRO-X" name="MICRO-X" width="90%" />
                                </div>
                                <div class="slideCli">
                                    <img src="https://www.logicbus.com.mx/images/logo_clientes/SalsasCastilloLogo.png"
                                        alt="Salsas Castillo" width="100%">
                                </div>
                            </div>
                            <br>
                            <a class="button-text" href="clientes-logicbus"><button
                                    class="button button-circle-blue">Conoce más</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Eventos-->
    <section class="section-blue py-5">
        <div class="container">
            <h2 class="title"><a class="link-orange white" href="eventos">PRÓXIMOS EVENTOS</a></h2>
            <p class="paragraph white text-center">Explora nuestra agenda de eventos futuros y únete a la comunidad
                de
                Logicbus en emocionantes oportunidades de aprendizaje, interacción y descubrimiento.</p>
        </div>
        <div class="pb-3">
            <div class="container carousel"
                data-flickity='{ "cellAlign": "left", "lazyLoad": 6, "autoPlay": true, "wrapAround": true, "prevNextButtons": false }'>

                <!-- EVENTOS ORIGINALES -->
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://smarttechnologyexpo.mx/" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/eventos/smart-technology-expo-2026.webp"
                            alt="Smart Technology 2026" title="Smart Technology 2026" />
                    </a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://expo.thelogisticsworld.com/" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/eventos/the-logistics-world-2027.webp"
                            alt="The Logistics World 2027" title="The Logistics World 2027" />
                    </a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.expopackguadalajara.com.mx/" target="_blank">
                        <img class="carousel-cell-image" data-flickity-lazyload="./images/eventos/expo-pack-2027.webp"
                            alt="Expo Pack Guadalajara 2027" title="Expo Pack Guadalajara 2027" />
                    </a>
                </div>

                <!-- EVENTOS DUPLICADOs -->
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://smarttechnologyexpo.mx/" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/eventos/smart-technology-expo-2026.webp"
                            alt="Smart Technology 2026" title="Smart Technology 2026" />
                    </a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://expo.thelogisticsworld.com/" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/eventos/the-logistics-world-2027.webp"
                            alt="The Logistics World 2027" title="The Logistics World 2027" />
                    </a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.expopackguadalajara.com.mx/" target="_blank">
                        <img class="carousel-cell-image" data-flickity-lazyload="./images/eventos/expo-pack-2027.webp"
                            alt="Expo Pack Guadalajara 2027" title="Expo Pack Guadalajara 2027" />
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Mision y Vision-->
    <section>
        <div class="py-5">
            <h2 class="title blue">NUESTRA MISIÓN Y VISIÓN </h2>
            <div class="vision-mision">
                <div class="col-12 col-md-6 mision pt-5 pb-3 text-center">
                    <h3 class="subtitle white">Misión</h3>
                    <span class="material-symbols-outlined" id="mision-icono"> emoji_objects </span>
                    <p class="paragraph white parrafo-mision" align="justify">
                        Buscamos facilitar a las empresas nacionales e internacionales la
                        mejora de sus procesos y sistemas de calidad con nuestros equipos
                        especializados en automatización, control y pruebas, otorgando un
                        excelente servicio de consultoria, soporte técnico y capacacitación.
                    </p>
                </div>
                <div class="col-12 col-md-6 vision pt-5 pb-3 text-center">
                    <h3 class="subtitle white">Visión</h3>
                    <span class="material-symbols-outlined" id="vision-icono"> rocket_launch </span>
                    <p class="paragraph white parrafo-vision" align="justify">
                        Posicionarnos como el principal proveedor en Norte, Centro y
                        Sudamérica de equipos de automatización, control y pruebas, ofreciendo
                        la tecnología más avanzada acompañada de un magnifico servicio al
                        cliente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Marcas-->
    <style>
        .marca-carousel-cell {
            width: 45%;
            margin-right: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120px;
        }

        .marca-carousel-cell-image {
            max-width: 100%;
            max-height: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        @media (min-width: 768px) {
            .marca-carousel-cell {
                width: 20%;
            }
        }
    </style>
    <section>
        <div class="py-5" align="center">
            <h2 class="title blue">NUESTRAS MARCAS</h2>
            <div class="">
                <div class="carousel"
                    data-flickity='{ "cellAlign": "left", "lazyLoad": 12, "imagesLoaded": true, "autoPlay": 1500, "wrapAround": true, "pageDots": false, "prevNextButtons": false }'>

                    <!-- BLOQUE 1 -->
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="futek"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/futek.png" alt="FUTEK" title="FUTEK" /></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="controllino"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/controllino.png" alt="Controllino"
                                title="Controllino" /></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="digilent">
                            <img class="carousel-cell-image marca-carousel-cell-image" style="transform: scale(1.2);"
                                data-flickity-lazyload="images/digilent.png" alt="Digilent" title="Digilent" />
                        </a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="rta"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/rta.png" alt="RTA" title="RTA"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="fatek"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/fatek.png" alt="FATEK" title="FATEK"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="siglent"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/siglent.png" alt="SIGLENT" title="SIGLENT"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="seneca"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/seneca.png" alt="SENECA" title="SENECA"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="MadgeTech"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/madgetech.png" alt="Madgetech" title="Madgetech"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="icp-das"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/icp-das.png" alt="icp-das" title="icp-das"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="sealevel"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/sealevel.png" alt="Sealevel" title="Sealevel"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="tri-tronics"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/tritronics.png" alt="Tritronics" title="Tritronics"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="applied-motion-products"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/applied-motion-products.png" alt="Aplied-motions"
                                title="Aplied-motions"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="graphtec"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/graphtec.png" alt="Graphtec" title="Graphtec"></a>
                    </div>

                    <!-- BLOQUE 2 -->
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="futek"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/futek.png" alt="FUTEK" title="FUTEK" /></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="controllino"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/controllino.png" alt="Controllino"
                                title="Controllino" /></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="digilent">
                            <img class="carousel-cell-image marca-carousel-cell-image" style="transform: scale(1.2);"
                                data-flickity-lazyload="images/digilent.png" alt="Digilent" title="Digilent" />
                        </a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="rta"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/rta.png" alt="RTA" title="RTA"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="fatek"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/fatek.png" alt="FATEK" title="FATEK"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="siglent"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/siglent.png" alt="SIGLENT" title="SIGLENT"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="seneca"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/seneca.png" alt="SENECA" title="SENECA"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="MadgeTech"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/madgetech.png" alt="Madgetech" title="Madgetech"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="icp-das"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/icp-das.png" alt="icp-das" title="icp-das"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="sealevel"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/sealevel.png" alt="Sealevel" title="Sealevel"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="tri-tronics"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/tritronics.png" alt="Tritronics" title="Tritronics"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="applied-motion-products"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/applied-motion-products.png" alt="Aplied-motions"
                                title="Aplied-motions"></a>
                    </div>
                    <div class="carousel-cell marca-carousel-cell ">
                        <a class="marca-carousel-link  subtitle blue" href="graphtec"><img
                                class="carousel-cell-image marca-carousel-cell-image"
                                data-flickity-lazyload="images/graphtec.png" alt="Graphtec" title="Graphtec"></a>
                    </div>
                </div>
            </div>
            <br>
            <a class="button-text" href="marcas-logicbus"><button class="button button-circle-blue">Todas las
                    marcas</button></a>
        </div>
    </section>

    <!-- Section Novedades-->
    <style>
        .noticia-custom-cell,
        .novedades-carousel-cell {
            position: relative;
            width: 85%;
            max-width: 300px;
            height: 170px;
            margin-right: 15px;
            overflow: hidden;
            border-radius: 4px;
        }

        .noticia-custom-cell .carousel-link,
        .novedades-carousel-cell .carousel-link {
            display: block;
            width: 100%;
            height: 100%;
        }

        .noticia-custom-cell .carousel-cell-image,
        .novedades-carousel-cell .carousel-cell-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .noticia-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;

            background: linear-gradient(to top, rgba(36, 83, 123, 1) 0%, rgba(36, 83, 123, 0.6) 50%, rgba(36, 83, 123, 0) 100%);

            color: #ffffff;
            padding: 10px 15px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            font-size: 13px;
            font-weight: 500;
            text-align: center;
            line-height: 1.3;
        }
    </style>

    <section class="section-blue py-5">
        <div class="container">
            <h2 class="title white">CONOCE NUESTRAS NOVEDADES</h2>
            <p class="paragraph white text-center">Sigue las noticias más relevantes de Logicbus, cursos, talleres,
                seminarios, exposiciones, promociones, articulos y más</p>
        </div>
        <div class="pb-3">
            <div class="carousel"
                data-flickity='{ "cellAlign": "left", "lazyLoad": 12, "autoPlay": true, "wrapAround": true, "prevNextButtons": false }'>

                <!-- NOVEDADES (ORIGINALES) -->
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/lV6ge8h0OwQ" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/La-comunicacion-industrial-en-la-era-5G.webp"
                            alt="La comunicación industrial en la era 5G"
                            title="La comunicación industrial en la era 5G" />
                        <div class="noticia-overlay">La comunicación industrial en la era 5G</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/Liq60pW6pgI" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/aniversario-logicbus.webp"
                            alt="Logicbus: Proveedor líder en automatización industrial"
                            title="Logicbus: Proveedor líder en automatización industrial" />
                        <div class="noticia-overlay">Proveedor líder en automatización</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/FYkMHDGHXQE" target="_blank">
                        <img class="carousel-cell-image" data-flickity-lazyload="./images/novedades/youibot-amr.webp"
                            alt="Producto Youibot | L1000 - Movimiento con confianza"
                            title="Producto Youibot | L1000 - Movimiento con confianza" />
                        <div class="noticia-overlay">Youibot L1000: Movimiento con confianza</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/GNwgVbvprs4" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/control-de-calidad-osciloscopio.webp"
                            alt="Aplicaciones de un osciloscopio en el control de calidad"
                            title="Aplicaciones de un osciloscopio en el control de calidad" />
                        <div class="noticia-overlay">Osciloscopios en control de calidad</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/control-de-llenado-de-botellas-o-contenedores-de-liquidos/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Control-de-Llenado-de-Botellas-o-Contenedores-de-Liquidos-scaled.jpg"
                            alt="Control de Llenado de Botellas o Contenedores de Líquidos"
                            title="Control de Llenado de Botellas o Contenedores de Líquidos" />
                        <div class="noticia-overlay">Control de llenado de líquidos</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg"
                            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción"
                            title="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" />
                        <div class="noticia-overlay">Monitoreo remoto de pasteurización</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/comparacion-entre-sensores-de-fuga-de-agua-puntuales-y-de-cuerda-cual-es-el-ideal-para-tu-aplicacion/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Comparacion-entre-Sensores-de-Fuga-de-Agua-Puntuales-y-de-Cuerda-%C2%BFCual-es-el-Ideal-para-tu-Aplicacion-1-scaled.jpg"
                            alt="Sensores de Fuga de Agua Puntuales y de Cuerda"
                            title="Sensores de Fuga de Agua Puntuales y de Cuerda" />
                        <div class="noticia-overlay">Sensores de Fuga: ¿Cuál es ideal?</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/deteccion-de-fallas-y-picos-electricos-en-sistemas-automatizados-prevencion-inteligente-para-la-continuidad-operativa/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Deteccion-de-Fallas-y-Picos-Electricos-en-Sistemas-Automatizados-scaled.jpg"
                            alt="Detección de Fallas y Picos Eléctricos en Sistemas Automatizados"
                            title="Detección de Fallas y Picos Eléctricos en Sistemas Automatizados" />
                        <div class="noticia-overlay">Detección inteligente de fallas</div>
                    </a>
                </div>

                <!-- NOVEDADES DUPLICADAS -->
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/lV6ge8h0OwQ" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/La-comunicacion-industrial-en-la-era-5G.webp"
                            alt="La comunicación industrial en la era 5G"
                            title="La comunicación industrial en la era 5G" />
                        <div class="noticia-overlay">La comunicación industrial en la era 5G</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/Liq60pW6pgI" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/aniversario-logicbus.webp"
                            alt="Logicbus: Proveedor líder en automatización industrial"
                            title="Logicbus: Proveedor líder en automatización industrial" />
                        <div class="noticia-overlay">Proveedor líder en automatización</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/FYkMHDGHXQE" target="_blank">
                        <img class="carousel-cell-image" data-flickity-lazyload="./images/novedades/youibot-amr.webp"
                            alt="Producto Youibot | L1000 - Movimiento con confianza"
                            title="Producto Youibot | L1000 - Movimiento con confianza" />
                        <div class="noticia-overlay">Youibot L1000: Movimiento con confianza</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link" href="https://youtu.be/GNwgVbvprs4" target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="./images/novedades/control-de-calidad-osciloscopio.webp"
                            alt="Aplicaciones de un osciloscopio en el control de calidad"
                            title="Aplicaciones de un osciloscopio en el control de calidad" />
                        <div class="noticia-overlay">Osciloscopios en control de calidad</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/control-de-llenado-de-botellas-o-contenedores-de-liquidos/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Control-de-Llenado-de-Botellas-o-Contenedores-de-Liquidos-scaled.jpg"
                            alt="Control de Llenado de Botellas o Contenedores de Líquidos"
                            title="Control de Llenado de Botellas o Contenedores de Líquidos" />
                        <div class="noticia-overlay">Control de llenado de líquidos</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg"
                            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción"
                            title="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" />
                        <div class="noticia-overlay">Monitoreo remoto de pasteurización</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/comparacion-entre-sensores-de-fuga-de-agua-puntuales-y-de-cuerda-cual-es-el-ideal-para-tu-aplicacion/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Comparacion-entre-Sensores-de-Fuga-de-Agua-Puntuales-y-de-Cuerda-%C2%BFCual-es-el-Ideal-para-tu-Aplicacion-1-scaled.jpg"
                            alt="Sensores de Fuga de Agua Puntuales y de Cuerda"
                            title="Sensores de Fuga de Agua Puntuales y de Cuerda" />
                        <div class="noticia-overlay">Sensores de Fuga: ¿Cuál es ideal?</div>
                    </a>
                </div>
                <div class="carousel-cell noticia-custom-cell">
                    <a class="carousel-link"
                        href="https://www.logicbus.com.mx/blog/deteccion-de-fallas-y-picos-electricos-en-sistemas-automatizados-prevencion-inteligente-para-la-continuidad-operativa/"
                        target="_blank">
                        <img class="carousel-cell-image"
                            data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Deteccion-de-Fallas-y-Picos-Electricos-en-Sistemas-Automatizados-scaled.jpg"
                            alt="Detección de Fallas y Picos Eléctricos en Sistemas Automatizados"
                            title="Detección de Fallas y Picos Eléctricos en Sistemas Automatizados" />
                        <div class="noticia-overlay">Detección inteligente de fallas</div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Section Novedades Fin -->

    <!-- Section Reseñas-->
    <style>
        .resenas-section {
            background-color: #f8f9fa;
        }

        .resenas-carousel .carousel-cell-review {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        @media (min-width: 768px) {
            .resenas-carousel .carousel-cell-review {
                width: 33.33%;
            }
        }

        .review-card {
            width: 90%;
            max-width: 320px;
            background: #ffffff;
            border-radius: 8px;
            padding: 30px 25px;
            margin: 20px auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #ef7b10;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .review-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #24537B;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .review-name {
            font-size: 16px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 5px;
        }

        .review-stars {
            color: #FABB05;
            font-size: 14px;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .review-text {
            font-size: 14px;
            color: #666666;
            line-height: 1.6;
            font-style: italic;
        }

        .resenas-carousel .flickity-page-dots {
            bottom: -30px;
        }

        .resenas-carousel .flickity-page-dots .dot {
            width: 10px;
            height: 10px;
            opacity: 0.25;
            background: #24537B;
        }

        .resenas-carousel .flickity-page-dots .dot.is-selected {
            opacity: 1;
        }
    </style>

    <section class="resenas-section py-5" align="center">
        <h2 class="title blue">LOS CLIENTES NOS RESPALDAN</h2>
        <div class="container pb-3">
            <h3 class="subtitle" style="margin-bottom: 5px;">Logicbus S.A. de C.V.</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 40px;">
                <span style="color: #FABB05; font-weight: bold; font-size: 16px;">4.7 ★</span> (61) Opiniones de
                clientes
            </p>

            <!-- Carrusel de Reseñas -->
            <div class="carousel resenas-carousel"
                data-flickity='{ "cellAlign": "center", "autoPlay": 3000, "wrapAround": true, "prevNextButtons": false }'>

                <!-- Reseña 1 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar">S</div>
                        <div class="review-name">SIAPASF SIAPASF</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Buen atención a clientes, tienen variedad de equipos y Excelete
                            calidad, su soporte es de otro nivel"</div>
                    </div>
                </div>

                <!-- Reseña 2 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar" style="background-color: #ef7b10;">B</div>
                        <div class="review-name">Blanca Hernandez</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Excelente atención y respuesta rápida, información técnica completa,
                            productos de alta calidad."</div>
                    </div>
                </div>

                <!-- Reseña 3 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar" style="background-color: #28a745;">M</div>
                        <div class="review-name">MAQUINADOS SEMASA</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Gran
                            proveedor, excelente servicio al
                            cliente así como calidad en
                            el material adquirido (enfocado a la
                            industria) todo en tiempo y forma.
                            Ampliamente
                            recomendado."</div>
                    </div>
                </div>

                <!-- Reseña 4 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar" style="background-color: #17a2b8;">R</div>
                        <div class="review-name">Ricardo Burgos</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Excelente servicio y atención post-venta."</div>
                    </div>
                </div>

                <!-- Reseña 5 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar" style="background-color: #ef7b10;">G</div>
                        <div class="review-name">Grecia Granillo Marín</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Adquirimos teclados industriales y la atención fue excelente.
                            Cumplieron en tiempo y forma con la entrega"</div>
                    </div>
                </div>

                <!-- Reseña 6 -->
                <div class="carousel-cell carousel-cell-review">
                    <div class="review-card">
                        <div class="review-avatar" style="background-color: #28a745;">O</div>
                        <div class="review-name">Oscar Rojas</div>
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">"Muy buen servicio, hemos encontrado materiales y equipos
                            especializados para la industria, muy robustos y de buena calidad. Los recomendamos
                            ampliamente."</div>
                    </div>
                </div>

            </div>
        </div>

        <br><br>
        <!-- Botón para escribir reseña -->
        <a class="button-text" href="https://g.page/r/CWsYALxB1B_VEB0/review" target="_blank">
            <button class="button button-circle-orange" style="margin-top: 10px;">Escribe una reseña</button>
        </a>
    </section>
    <!-- Section Reseñas Fin-->

    <!-- POPUP Avisos-->
    <div class="overlay pop-hide-desktop"></div>
    <div class="main-popup pop-hide-desktop">
        <div class="popup-header">
            <div id="popup-close-button"><a href="#"></a></div>
        </div>
        <!--.popup-header-->
        <div class="popup-content">
            <a href="#" target="_blank" class=""><img src="images/popup/Aviso.png" height="100%" alt="Aviso"
                    title="Aviso"></a>
        </div>
        <!--.popup-content-->
    </div>
    <!--.main-popup-->
    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <!-- POPUP Avisos-->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.dropdown-menu').forEach(function (element) {
                element.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            })
            if (window.innerWidth < 992) {
                document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        this.querySelectorAll('.submenu').forEach(function (everysubmenu) {everysubmenu.style.display = 'none';});
                    })
                }); document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
                    element.addEventListener('click',
                        function (e) {
                            let nextEl = this.nextElementSibling; if (nextEl && nextEl.classList.contains('submenu')) {
                                e.preventDefault(); console.log(nextEl); if (nextEl.style.display == 'block') {nextEl.style.display = 'none';}
                                else {nextEl.style.display = 'block';}
                            }
                        });
                })
            }
        }); </script>
    <script>
        document.querySelectorAll('.avatar').forEach(avatar => {
            const randomColor = `hsl(${Math.floor(Math.random() * 360)}, 70%, 50%)`;
            avatar.style.backgroundColor = randomColor;
        });
    </script>

    <script>
        /*POPUP INDEX*/
        $(function () {
            //defining all needed variables
            var $overlay = $('.overlay');
            var $mainPopUp = $('.main-popup')
            var aux = false;
            //defining function to change underline depending on which li is active
            function changeUnderline(el) {
                $('.underline').css({
                    "width": el.width(),
                    "left": el.position().left,
                    "top": el.position().top + el.outerHeight(true) + 'px'
                });
            } //note: have not called the function...don't want it called immediately

            /*$('button').on('click', function() {
                $overlay.addClass('visible');$mainPopUp.addClass('visible');
            });*/
            window.onscroll = function () {
                // Obtenemos la posicion del scroll en pantall
                var scroll = document.documentElement.scrollTop || document.body.scrollTop;

                // Realizamos alguna accion cuando el scroll este entre la posicion 300 y 400
                /*if (scroll > 10 && !aux) {
                    $overlay.addClass('visible');$mainPopUp.addClass('visible');
                     aux = true;
                }*/
            }

            $overlay.on('click', function () {
                $(this).removeClass('visible'); $mainPopUp.removeClass('visible');
            });
            $('#popup-close-button a').on('click', function (e) {
                e.preventDefault();
                $overlay.removeClass('visible'); $mainPopUp.removeClass('visible');
            });
        });
    </script>

    <!-- btn Whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
        class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono"></i>
    </a>
    <!-- end btn whatsapp -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        gtag('event', 'conversion', {
            'send_to': 'AW-1007518778/bqtvCI_7rv0CELqItuAD'
        });
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ca674ff1de11b6e3b06f73d/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
    <script type="text/javascript" src="libreria/marcas_carousel/scripts.js"></script>
</body>
<?php echo $var_footer; ?>

</html>