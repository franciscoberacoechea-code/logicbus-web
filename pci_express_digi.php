<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PCI Express / E/S Digital - Paralelo - Logicbus</title>

    <meta name="description"
        content="Tarjetas de adquisición de datos PCI Express (PCIe) con E/S digitales y puertos paralelos para control y automatización industrial.">
    <meta name="keywords"
        content="LogicBus, Mexico, Guadalajara, PCI Express, E/S Digital, Paralelo, ,8004EC PCIE-DIO24, PCIe-DIO96H, PEX-D48, PEX-P16R16i, PEX-730, Adquisicion, Control">

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>

    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="pci_express" class="blue link-orange">PCI Express</a></li>
                <li class="breadcrumb-item active" aria-current="page">Digital E/S</li>
            </ol>
        </nav>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">E/S Digitales y Puertos
            Paralelos</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">PCI
            EXPRESS</span>
    </h1>

    <p class="intro-text text-center">
        Ofrecemos una amplia variedad de tarjetas de adquisición de datos por bus <strong>PCI Express (PCIe)</strong>
        con E/S digitales y puertos paralelos, ideales para aplicaciones de control y automatización industrial,
        compatibles con diversos entornos y con opciones de aislamiento óptico y salidas a relevador.
    </p>

    <nav class="btn-navigation">
        <a class="btn-circle" href="#productos">Ver Modelos</a>
        <a class="btn-circle" href="#contacto">Contacto</a>
    </nav>

    <h2 class="section-title" id="productos">Modelos Disponibles</h2>
    <div class="products-grid">

        <div class="product-card">
            <a href="https://tienda.logicbus.com.mx/8004EC_p_38477.html">
                <img loading="lazy" src="imagenes/03/8004EC-3.jpg" alt="8004EC">
            </a>
            <a href="https://tienda.logicbus.com.mx/8004EC_p_38477.html" style="text-decoration: none;">
                <h4>8004EC</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">Tarjeta PCI Express con 16 Entradas Digitales Aisladas y 16 Salidas a Relevador Reed.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/8004EC_p_38477.html" target="_blank">Ver en
                Tienda</a>
        </div>

        <div class="product-card">
            <a href="pcie-dio24">
                <img loading="lazy" src="imagenes/01/pcie-dio24.jpg" alt="PCIE-DIO24">
            </a>
            <a href="pcie-dio24" style="text-decoration: none;">
                <h4>PCIE-DIO24</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">PCI Express (PCIe), Tarjeta de 24 Canales
                Digitales.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PCIE-DIO24_p_1259.html" target="_blank">Ver en
                Tienda</a>
        </div>

        <div class="product-card">
            <a href="pcie-dio96h">
                <img loading="lazy" src="imagenes/01/pcie-dio96h.jpg" alt="PCIe-DIO96H">
            </a>
            <a href="pcie-dio96h" style="text-decoration: none;">
                <h4>PCIe-DIO96H</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">PCI Express (PCIe), 96 Canales, Tarjeta de
                E/S Digitales de Alta Corriente de Salida.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PCIE-DIO96H_p_1260.html" target="_blank">Ver en
                Tienda</a>
        </div>

        <div class="product-card">
            <a href="PEX-D48">
                <img loading="lazy" src="imagenes/02/PEX-D48.jpg" alt="PEX-D48">
            </a>
            <a href="PEX-D48" style="text-decoration: none;">
                <h4>PEX-D48</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">PCI Express, 48 Canales, Tarjeta DIO
                compatible con OPTO-22.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PEX-D48_p_1928.html" target="_blank">Ver en
                Tienda</a>
        </div>

        <div class="product-card">
            <a href="PEX-P16R16i">
                <img loading="lazy" src="imagenes/02/PEX-P16R16i.jpg" alt="PEX-P16R16i">
            </a>
            <a href="PEX-P16R16i" style="text-decoration: none;">
                <h4>PEX-P16R16i</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">PCI Express, Entrada Digital Aislada de 16
                Canales, Salida de Relevador de 16 Canales.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PEX-P16R16i_p_1933.html" target="_blank">Ver en
                Tienda</a>
        </div>

        <div class="product-card">
            <a href="PEX-730">
                <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/02/PEX-730.jpg" alt="PEX-730">
            </a>
            <a href="PEX-730" style="text-decoration: none;">
                <h4>PEX-730</h4>
            </a>
            <p style="margin-bottom: 15px; color: #666; font-size: 0.95rem;">Tarjeta DAQ PCI Express con 32 canales de
                E/S digitales aisladas en conector DB37 y 32 E/S TTL en conectores de 20 pines, aislamiento de 3750
                Vrms, conector CA-4002 incluido.</p>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/PEX-730_p_17819.html" target="_blank">Ver en
                Tienda</a>
        </div>

    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿REQUIERES ASESORÍA TÉCNICA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos
                para ayudarte a seleccionar la tarjeta PCI Express ideal para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
    </div>

    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
        gtag('config', 'AW-1007518778');
    </script>

</body>
<?php echo $var_footer; ?>

</html>