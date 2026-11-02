<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lectores RFID UHF y Handhelds | Chainway - Logicbus</title>

    <meta name="description" content="Chainway ofrece tablets y handhelds industriales resistentes con Android, escáner de códigos de barras, RFID, NFC y opciones avanzadas de captura de datos. Ideales para logística, transporte, retail, salud, energía y manufactura.">
    <meta name="keywords" content="Chainway, tablets industriales, handhelds industriales, PDA industrial, lectores RFID, lectores código de barras, dispositivos robustos Android, movilidad industrial, logística, transporte, retail, salud, manufactura">
    <link rel="canonical" href="https://www.logicbus.com.mx/chainway">

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $estilos; ?> <!-- CSS General de la marca -->

    <style>
        /* Ocultar barra lateral antigua para usar full-width */
        #leftBar { display: none; }

        /* BANNER FULL WIDTH */
        .banner-full {
            width: 100%;
            margin-bottom: 3rem;
        }
        .banner-full img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* ESTILIZACIÓN DE LINKS (Apegados a la marca Logicbus) */
        a { 
            color: var(--lb-accent); /* Naranja Logicbus */
            text-decoration: none; 
            transition: color 0.3s ease; 
        }
        a:hover { 
            color: var(--lb-primary); /* Azul Logicbus */
            text-decoration: none; 
        }
        
        /* Links en títulos de tarjetas */
        .product-card h4 a {
            color: var(--lb-primary) !important;
        }
        .product-card h4 a:hover {
            color: var(--lb-accent) !important;
        }
        
        /* Imágenes de productos ajustadas */
        .product-card img {
            max-height: 200px;
            object-fit: contain;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chainway</li>
            </ol>
        </nav>
    </div>

    <!-- Banner 100% Ancho -->
    <div class="banner-full">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-CHAINWAY-MZ23.webp" alt="CHAINWAY Tablets y Handhelds Industriales" title="CHAINWAY Tablets y Handhelds Industriales">
    </div>

    <!-- H1 con diseño corporativo -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Lectores RFID, Tablets y</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">HANDHELDS INDUSTRIALES</span>
    </h1>

    <!-- Texto de introducción -->
    <div class="container">
        <p class="intro-text text-justify mx-auto" style="max-width: 900px;">
            <b>Chainway</b> es un proveedor profesional líder de productos y soluciones tecnológicas de <b>RFID y códigos de barras</b>. Especialistas en sectores como logística, transporte, atención médica, finanzas, retail, energía, ganadería, almacén y fabricación.<br><br>
            Chainway se dedica a proporcionar dispositivos industriales más convenientes, confiables y resistentes. Sus principales líneas de sistemas abarcan computadoras industriales móviles y computadoras industriales montables en vehículos, diseñadas para los entornos más exigentes.
        </p>
    </div>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/CHAINWAY_bymfg_204-7-1.html" target="_blank">Ver todos en Tienda</a>
        <a class="btn-circle" href="#productos">Equipos Destacados</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
        <a class="btn-circle" href="#contacto">Contacto</a>
    </nav>

    <!-- Sección Productos (Grid de Tarjetas) -->
    <h2 class="section-title" id="productos">EQUIPOS DESTACADOS</h2>
    <div class="container mb-5">
        <div class="products-grid">
            
            <!-- P80 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/P80_p_32974.html" target="_blank">
                    <img loading="lazy" src="images/categorias/p80-chainway.webp" alt="P80">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/P80_p_32974.html" target="_blank">Tablet Industrial P80</a></h4>
                <p class="small text-muted text-justify">
                    Tableta resistente con Android 9. CPU Qualcomm, pantalla de alta definición de 8", batería de 8000 mAh. Opciones completas de captura de datos: UHF RFID (chip Impinj R2000), escáner de códigos de barras, HF RFID / NFC.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/P80_p_32974.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C66 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/C66_p_32975.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c66-chainway.webp" alt="C66">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/C66_p_32975.html" target="_blank">Handheld C66</a></h4>
                <p class="small text-muted text-justify">
                    Handheld amplia y robusta. Procesador Qualcomm octa-core, Android 9/11. Incluye escaneo de código de barras, NFC, Wi-Fi 6, carga rápida y medición de volumen. Opción de huella dactilar y módulo UHF integrado.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/C66_p_32975.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C61 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/C61_p_32976.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c61-chainway.webp" alt="C61">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/C61_p_32976.html" target="_blank">Handheld C61</a></h4>
                <p class="small text-muted text-justify">
                    Rendimiento sólido con <b>teclado físico numérico/QWERTY</b>. Android 9.0/11.0, procesador Qualcomm Octa-Core. Batería extraíble y soporte para mango de gatillo. Escáner opcional, RFID y NFC. Ideal para almacenes.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/C61_p_32976.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C60 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/C60_p_32977.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c60-chainway.webp" alt="C60">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/C60_p_32977.html" target="_blank">Handheld C60</a></h4>
                <p class="small text-muted text-justify">
                    Handheld ligera y compacta pero resistente. Android 10/11, procesador Qualcomm. Batería extraíble de gran capacidad. Funcionalidad rica para escaneo de códigos de barras, RFID, NFC y cámaras duales.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/C60_p_32977.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C71 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/C71_p_32978.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c71-chainway.webp" alt="C71">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/C71_p_32978.html" target="_blank">Handheld C71</a></h4>
                <p class="small text-muted text-justify">
                    Dispositivo de grado industrial con alta extensibilidad. Android 8.1, Octa-Core. Soporta lectura de códigos, NFC, HF, UHF, reconocimiento de iris/huella digital, infrarrojos y ranuras PSAM para máxima seguridad.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/C71_p_32978.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C75 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/c75.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c75-chainway.webp" alt="C75">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/c75.html" target="_blank">Handheld C75 (con Impresora)</a></h4>
                <p class="small text-muted text-justify">
                    Handheld "dos en uno" diseñada para la recopilación de datos en tiempo real y la <b>impresión de recibos</b> térmicos integrados. Cuenta con ranuras duales PSAM para encriptación de datos segura.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/c75.html" target="_blank">Ver Detalles</a>
            </div>

            <!-- C6000 -->
            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/C6000_p_32981.html" target="_blank">
                    <img loading="lazy" src="images/categorias/c6000-chainway.webp" alt="C6000">
                </a>
                <h4><a href="https://tienda.logicbus.com.mx/C6000_p_32981.html" target="_blank">Handheld C6000</a></h4>
                <p class="small text-muted text-justify">
                    Diseño ergonómico y alto rendimiento. Android 10.0, red 4G, motor destacado de escaneo 1D/2D, lectura/escritura NFC. Cámara de 8MP, ranura PSAM y diseño robusto a prueba de golpes, polvo y agua.
                </p>
                <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/C6000_p_32981.html" target="_blank">Ver Detalles</a>
            </div>
        </div>
    </div>

    <!-- Guías y Manuales (Estilo Integrado) -->
    <div class="bg-light-accent py-5" id="GuiasyManuales">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">GUÍAS Y MANUALES</h2>
            <p class="text-muted mb-4">Accede a fichas técnicas, manuales de usuario y recursos de integración para equipos Chainway.</p>
            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=chainway" class="ghost-manual-box mx-auto d-inline-block p-4">
                <img loading="lazy" src="images/documentacion.svg" alt="Base de conocimientos" style="width: 100px; margin-bottom: 15px;">
                <span class="d-block font-weight-bold" style="color: var(--lb-primary);">Ver Base de Documentación</span>
            </a>
        </div>
    </div>

    <!-- Contacto (Odoo Formulario) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿REQUIERES ASESORÍA PARA TU PROYECTO?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de expertos en movilidad y captura de datos está listo para ayudarte a elegir el equipo ideal para tu operación.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    
    <!-- Scripts estándar -->
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>
</html>