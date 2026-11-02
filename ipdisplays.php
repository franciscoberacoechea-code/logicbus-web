<?php require("admin/config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IP Displays | Pantallas Inteligentes Industriales | Logicbus</title>
    <meta name="description"
        content="IP Displays es una empresa especializada en el desarrollo de pantallas industriales inteligentes diseñadas para aplicaciones de automatización, IoT y HMI.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>

    <link rel="stylesheet" href="css/estilos-tabs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Barra */
        #leftBar {
            display: none;
        }

        /* Scroll */
        body,
        html {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Carrusel */
        .carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 20px 0;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            align-items: center;
        }

        .carousel-track img {
            width: 100%;
            max-width: 250px;
            flex-shrink: 0;
            object-fit: contain;
            padding: 0 15px;
        }

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
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
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
                        class="blue link-orange">Automatización y control de procesos</a></li>
                <li class="breadcrumb-item active" aria-current="page">IP Displays</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/BANNER-IPDISPLAYS.png"
            style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/BANNER-IPDISPLAYS.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Pantallas Inteligentes
            Industriales</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">IP
            DISPLAYS</span>
    </h1>

    <div class="container mb-5">
        <p class="intro-text text-justify">
            <strong>IP Displays</strong> es una empresa especializada en el desarrollo de pantallas industriales
            inteligentes diseñadas para aplicaciones de automatización, IoT, HMI y visualización de datos en entornos
            industriales y comerciales. Sus soluciones combinan hardware robusto con software flexible, permitiendo una
            comunicación eficiente entre sistemas, operadores y procesos.
        </p>
        <p class="intro-text text-justify">
            La gama de productos incluye pantallas TFT, módulos gráficos, HMI inteligentes y displays con conectividad
            Ethernet, RS-485 y protocolos industriales, ideales para mostrar información crítica como variables de
            proceso, estados de máquina, alarmas y datos en tiempo real. Están diseñados para operar de forma confiable
            en ambientes exigentes, ofreciendo alta durabilidad y excelente legibilidad.
        </p>
        <p class="intro-text text-justify">
            Una de las principales ventajas de IP Displays es su arquitectura abierta y facilidad de integración, lo que
            permite incorporar las pantallas en sistemas nuevos o existentes sin complejidad. Sus soluciones son
            ampliamente utilizadas en automatización industrial, control de procesos, equipos OEM y sistemas IoT.
        </p>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/ipdisplays" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#industrias">Industrias</a>
        <a class="btn-circle" href="#caracteristicas">Características</a>
    </nav>

    <h2 class="section-title mt-5" id="categorias">Categorías</h2>
    <div class="container mb-5">
        <div class="products-grid">

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/LED-para-interiores_c_8026.html" target="_blank">
                    <img loading="lazy" src="./images/ipdisplays/LED-para-interiores.webp" alt="LED para interiores">
                </a>
                <h4 class="mt-3">LED para interiores</h4>
                <p class="small text-muted text-justify flex-grow-1">Los displays LED de Interior son más brillantes y
                    claros, ideales para naves industriales y oficinas.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/LED-para-interiores_c_8026.html" target="_blank">Ver
                    modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/LED-para-exteriores_c_8027.html" target="_blank">
                    <img loading="lazy" src="./images/ipdisplays/LED-para-exteriores.webp" alt="LED para exteriores">
                </a>
                <h4 class="mt-3">LED para exteriores</h4>
                <p class="small text-muted text-justify flex-grow-1">Transmite información en entornos ambientales
                    exigentes, con alta protección y luminosidad.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/LED-para-exteriores_c_8027.html" target="_blank">Ver
                    modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Software_c_8035.html" target="_blank">
                    <img loading="lazy" src="./images/ipdisplays/Software.webp" alt="Software">
                </a>
                <h4 class="mt-3">Software y API</h4>
                <p class="small text-muted text-justify flex-grow-1">API flexible y herramientas de software integradas
                    para controlar o distribuir información fácilmente.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Software_c_8035.html"
                    target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Productos-LCD_c_8036.html" target="_blank">
                    <img loading="lazy" src="./images/ipdisplays/Productos-LCD.webp" alt="Productos LCD">
                </a>
                <h4 class="mt-3">Productos LCD</h4>
                <p class="small text-muted text-justify flex-grow-1">Pantallas de alta resolución para la visualización
                    cercana en entornos como vestíbulos y salas de control.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Productos-LCD_c_8036.html"
                    target="_blank">Ver modelos</a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="industrias">Soluciones</h2>
    <div class="container mb-5">
        <div class="tabs-component-orange mt-4">
            <div class="tabs-navigation">
                <div class="icon-item active" onclick="openTab(0)"><i class="fa fa-car"></i></div>
                <div class="icon-item" onclick="openTab(1)"><i class="fa fa-cog"></i></div>
                <div class="icon-item" onclick="openTab(2)"><i class="fa fa-dropbox"></i></div>
                <div class="icon-item" onclick="openTab(3)"><i class="fa fa-clock-o"></i></div>
                <div class="icon-item" onclick="openTab(4)"><i class="fa fa-truck"></i></div>
                <div class="icon-item" onclick="openTab(5)"><i class="fa fa-headphones"></i></div>
                <div class="icon-item" onclick="openTab(6)"><i class="fa fa-comments"></i></div>
                <div class="icon-item" onclick="openTab(7)"><i class="fa fa-map-marker"></i></div>
            </div>
            <div class="tabs-content shadow-sm border">
                <div class="panel active">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">ESTACIONAMIENTOS</h3>
                    <p class="text-muted mt-2">Las pantallas pueden recibir datos en tiempo real sobre la disponibilidad
                        de espacios, actualizándose al segundo.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">LEAN MANUFACTURING</h3>
                    <p class="text-muted mt-2">Herramienta Andon para concentrar recursos y energías en la generación de
                        valor diferencial.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">CADENA DE SUMINISTRO</h3>
                    <p class="text-muted mt-2">Gestione información de pedidos y métricas operativas críticas de manera
                        visual.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">MANUFACTURA</h3>
                    <p class="text-muted mt-2">Visualice información vital de maquinaria y cuotas de producción
                        directamente a los operadores.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">ALMACENES (WMS)</h3>
                    <p class="text-muted mt-2">Procesamiento de datos mediante umbrales integrados y lógica flexible
                        para el control de stock.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">CALL CENTERS</h3>
                    <p class="text-muted mt-2">Elimine servidores costosos visualizando métricas directamente desde la
                        red.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">COMUNICACIÓN</h3>
                    <p class="text-muted mt-2">Maximice la eficiencia operativa mediante una comunicación interna eficaz
                        y llamativa.</p>
                </div>
                <div class="panel">
                    <h3 style="color: var(--lb-primary); font-weight: bold;">LOGÍSTICA</h3>
                    <p class="text-muted mt-2">Visualización de tiempos de llegada y estados de ruta en tiempo real para
                        centros de distribución.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="caracteristicas">¿Por qué elegir IP Displays?</h2>
    <div class="container mb-5">
        <p class="text-center text-muted mb-5 px-3" style="font-size: 1.1rem;">
            Los productos de visualización de IP Displays están basados en datos, no en mensajes ni en protocolos
            propietarios. Esta es su principal diferencia: aprovechar la velocidad y simplicidad del entorno IP.
        </p>

        <div class="row text-center mt-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Conexión Ethernet Integrada</h4>
                    <p class="text-muted mt-3">Sin necesidad de cajas adicionales. Las pantallas aprovechan al máximo la
                        conexión IP 10/100 existente.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Servidor Web Integrado</h4>
                    <p class="text-muted mt-3">Configuración a través de un navegador web, permitiendo definir diseños y
                        lógica de forma sencilla.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Zonas y Diseños Dinámicos</h4>
                    <p class="text-muted mt-3">Permite integrar gráficos y dividir la pantalla en múltiples celdas para
                        información dinámica y flexible.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Umbrales Automáticos</h4>
                    <p class="text-muted mt-3">Los valores cambian de color automáticamente conforme se actualizan los
                        datos (lógica 1:a:Muchos).</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="carousel-container border-top border-bottom" id="carrusel-ip">
            <div class="carousel-track">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-1.webp" alt="IP Displays 1">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-2.webp" alt="IP Displays 2">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-3.webp" alt="IP Displays 3">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-4.webp" alt="IP Displays 4">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-5.webp" alt="IP Displays 5">
                <img loading="lazy" src="./images/ipdisplays/ip-displays-6.webp" alt="IP Displays 6">
            </div>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE IP DISPLAYS</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí
                para encontrar las mejores soluciones de visualización para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0"
                    allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>

    <script>
        // Industrias
        function openTab(index) {
            const industriesSection = document.querySelector('#industrias + .container .tabs-component-orange');

            if (industriesSection) {
                const icons = industriesSection.querySelectorAll('.icon-item');
                const panels = industriesSection.querySelectorAll('.panel');

                icons.forEach(i => i.classList.remove('active'));
                panels.forEach(p => p.classList.remove('active'));

                if (icons[index]) icons[index].classList.add('active');
                if (panels[index]) panels[index].classList.add('active');
            }
        }

        // Carrusel
        const track = document.querySelector('.carousel-track');
        let carouselIndex = 0;

        function moveCarousel() {
            if (!track) return;

            const itemsVisible = window.innerWidth > 768 ? 4 : (window.innerWidth > 480 ? 2 : 1);
            const totalItems = document.querySelectorAll('.carousel-track img').length;
            const maxIndex = totalItems - itemsVisible;

            carouselIndex++;
            if (carouselIndex > maxIndex) carouselIndex = 0;

            const amountToMove = carouselIndex * (100 / itemsVisible);
            track.style.transform = `translateX(-${amountToMove}%)`;
        }

        setInterval(moveCarousel, 3000);
    </script>
</body>

</html>