<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
include("libreria/libreria.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AICYS – Computadoras Industriales Para Montaje en Rack - Logicbus</title>
    
    <meta name="description" content="Computadoras Industriales Para Montaje en Rack. Fabricación de chasis industriales para computadoras de montaje en Rack y SBC (Single Board Computers)">
    <meta name="keywords" content="IPC para montaje en rack 1U, 2U, 3U y 4U IPC para montaje en pared Chasis industrial con ranuras 5.25”, 3.5” y 2.5” Soporte para tarjetas Mini-ITX y Micro-ATX SBC full-length PICMG o de medio tamaño bus ISA Backplane con slots ISA, PCI y PCIe Line Card Ingles Rack mount and SBC industrial Computers Manufacturing of Industrial Chassis and Specialized Single Board Computers 1U, 2U, 3U & 4U rack mount IPC Wall mount chasis for mini-ITX and Micro-ATX IPC Industrial chasis industrial with 5.25”, 3.5” y 2.5” slots IPC with SBC full-length PICMG or half-length ISA-bus form factor Backplane with ISA, PCI and PCIe slots">

    <?php echo $favicon; ?>
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $estilos; ?> 
    <?php echo $flickity_css; ?> 

    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
        }

        .simple-carousel {
            margin-bottom: 40px;
            padding-bottom: 30px;
        }
        .carousel-cell {
            width: 100%;
            padding: 0 15px;
        }
        @media (min-width: 768px) {
            .carousel-cell { width: 50%; } 
        }
        @media (min-width: 992px) {
            .carousel-cell { width: 33.33%; } 
        } /* <-- Llave corregida aquí */
        @media (min-width: 1200px) {
            .carousel-cell { width: 25%; } 
        }
        
        .carousel-cell .product-card {
            height: 100%;
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
                <li class="breadcrumb-item active" aria-current="page">AICSYS</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/AICSYS-industrial-computers.webp" alt="AICSYS industrial computers" title="AICSYS">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Computadoras Industriales</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">AICSYS</span>
    </h1>

    <p class="intro-text">
        Durante casi dos décadas, <strong>AICSYS</strong> ha sido un destacado fabricante de chasis industriales y computadoras de placa única, abasteciendo a líderes en Europa, Asia y América del Norte. Recientemente, ha lanzado una línea de productos con su nombre, centrándose en chasis robustos y computadoras especializadas.
    </p>
    <p class="intro-text">
        Las capacidades de fabricación de AICSYS, ubicadas en New Taipei City, Taiwán, incluyen amplios espacios y maquinaria avanzada. Aunque los chasis industriales y sistemas siguen siendo fundamentales, los proyectos OEM/ODM permiten destacar al equipo de I+D. AICSYS se compromete a producir productos de alta calidad, sin comprometer la integridad y realizando pruebas rigurosas antes del lanzamiento.
    </p>
    <p class="intro-text">
        Descubre cómo la experiencia de <strong>AICSYS</strong> puede beneficiar tu próximo proyecto con la elección global de productos informáticos industriales de primera calidad.
    </p>

    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/aicsys" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#productos">Equipos Destacados</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
    </nav>

    <div class="container my-5 text-center" style="max-width: 800px; background-color: var(--lb-bg-light); padding: 40px; border-radius: 15px;">
        <h2 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 15px;">¿No encuentras el modelo de computadora que necesitas?</h2>
        <p style="color: var(--lb-text); font-size: 1.1rem; margin-bottom: 25px;">¡Nosotros podemos fabricarla a medida para ti! Ofrecemos servicios ODM y OEM para adaptarnos a las necesidades específicas de tu proyecto.</p>
        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" class="btn-circle" target="_blank">Escríbenos por WhatsApp</a>
    </div>

    <h2 class="section-title" id="categorias">Categorías</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/Single-Board-Computers-s.webp" alt="Computadoras de Placa Única">
            <h4>Placa Única (SBC)</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/RCK-103BR2.webp" alt="Chasis Industriales">
            <h4>Chasis Industriales</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/Power-Supplies2.webp" alt="Fuentes de Alimentación">
            <h4>Fuentes de Poder</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/Wallmount-Systems.webp" alt="Servidores y Sistemas">
            <h4>Servidores y Sistemas</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/PICMG3.webp" alt="Backplanes">
            <h4>Passive Backplanes</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/1U-KVM-LCD1.webp" alt="LCD y KVM">
            <h4>Productos LCD y KVM</h4>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/MR-A25331.webp" alt="Accesorios">
            <h4>Accesorios</h4>
        </div>
    </div>

    <h2 class="section-title" id="productos">Equipos Destacados</h2>
    <div class="container-fluid" style="max-width: 1400px;">
        <div class="simple-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "autoPlay": 3000, "pageDots": true, "groupCells": true }'>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/CYCLOPS-M.webp" alt="CYCLOPS-M">
                    <h4>CYCLOPS-M</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Cajón con diseño de riel único para teclado/LCD de 1U de 17"/19" con pantalla LCD de alto brillo.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/CYCLOPS-M-series_p_36790.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/KD-100R.webp" alt="KD-100R">
                    <h4>KD-100R</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Cajón para teclado resistente de 1U con panel táctil para aplicación en gabinete rack de 19".</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/KD-100R-USB-BLK_p_36791.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/BPE-1306PE.webp" alt="BPE-1306PE">
                    <h4>BPE-1306PE</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Plano posterior PICMG 1.3 de 13 ranuras con (7) PCI, (1) PCIe x16 y (5) PCIe x4 para SHB Express.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/BPE-1306PE_p_36789.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/BPE-1308AC2.webp" alt="BPE-1308AC2">
                    <h4>BPE-1308AC2</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Plano posterior PICMG 1.3 de 13 ranuras con (8) PCI, (3) PCIe x1 y (1) PCIe x16 para SHB Express.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/BPE-1308AC2_p_36788.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/BPE-1106PE.webp" alt="BPE-1106PE">
                    <h4>BPE-1106PE</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Plano posterior PICMG 1.3 de 13 ranuras con (7) PCI, (1) PCIe x16 y (5) PCIe x4 para SHB Express.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/BPE-1106PE_p_36787.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/2U-Backplanes.webp" alt="2U Backplanes">
                    <h4>2U Backplanes</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Backplane pasivo PICMG 1.3 de 2U y 6 ranuras con ranura para SHB Express, compatible con ATX 24P.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/2U-Backplanes_p_36785.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/WMC-704M-RF-BLK.webp" alt="WMC-704M-RF-BLK">
                    <h4>WMC-704M-RF-BLK</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis de montaje en pared de 7 ranuras para placa base ATX, admite fuente de alimentación PS/2.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/WMC-704M-RF-BLK_p_36784.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/WMC-603B-RF-BLK.webp" alt="WMC-603B-RF-BLK">
                    <h4>WMC-603B-RF-BLK</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis de montaje en pared de 6 ranuras para SBC de tamaño completo, con plano posterior.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/WMC-603B-RF-BLK_p_36783.html" target="_blank">Comprar</a>
                </div>
            </div>
            
            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/WMC-403M-BLK.webp" alt="WMC-403M-BLK">
                    <h4>WMC-403M-BLK</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis de montaje en pared de 4 ranuras para placa base Micro-ATX, admite fuente de alimentación PS/2.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/WMC-403M-BLK_p_36782.html" target="_blank">Comprar</a>
                </div>
            </div>

            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/WMC-402M-BLK.webp" alt="WMC-402M-BLK">
                    <h4>WMC-402M-BLK</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis DVR de 4 ranuras para placa base Micro-ATX, con ventilador de 8 CFM y alimentación Micro-ATX.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/WMC-402M-BLK_p_36781.html" target="_blank">Comprar</a>
                </div>
            </div>

            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/rck-405m2b2.webp" alt="RCK-405M2/B2">
                    <h4>RCK-405M2/B2</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis de montaje en rack de 4U para placa base o backplane ATX. Fuente de alimentación PS/2 ATX.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/RCK-405M2B2_p_36780.html" target="_blank">Comprar</a>
                </div>
            </div>

            <div class="carousel-cell">
                <div class="product-card">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/37/RCK-103BR2.webp" alt="RCK-103BR2">
                    <h4>RCK-103BR2</h4>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Chasis de montaje en rack de 1U para placa SBC con 3 bahías para unidades, admite PSU de hasta 520 W.</p>
                    <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/RCK-103BR2_p_36773.html" target="_blank">Comprar</a>
                </div>
            </div>

        </div>
    </div>
    
    <div class="text-center mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/aicsys" target="_blank" style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important;">Ver catálogo completo en tienda</a>
    </div>

    <h2 class="section-title" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap">
        <a href="https://www.logicbus.com.mx/pdf/catalogos/Catalogue-2023.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/CATALOGO-AICSYS.webp" alt="Catálogo AICSYS">
            <h4>Catálogo de Productos AICSYS</h4>
        </a>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">COTIZA TUS EQUIPOS AICSYS</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de ingenieros está listo para ayudarte a seleccionar o diseñar el chasis ideal para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
        </div>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?> 

</body>
<?php echo $var_footer; ?>
</html>