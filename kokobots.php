<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kokobots | Robots autónomos de limpieza para la industria</title>

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

</head>

<style>
    /* Ocultar barra lateral en esta página */
    #leftBar {
        display: none;
    }

    /* Cuadrícula de Productos */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        justify-content: center;
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto 50px;
        padding: 0 15px;
    }

    .product-card {
        background-color: var(--lb-white);
        border: 1px solid #eaeaea;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card img {
        width: 100%;
        max-width: 220px;
        height: auto;
        object-fit: cover;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    .product-card h4 {
        font-size: 1.4rem;
        color: var(--lb-text);
        margin: 0 0 20px 0;
        font-weight: bold;
    }

    @media (hover: hover) {
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
    }

    /* Cuadrícula de Aplicaciones */
    .apps-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto 50px;
        padding: 0 15px;
    }

    .app-card {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        aspect-ratio: 4 / 3;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #000;
        transition: transform 0.3s ease;
    }

    .app-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0.9;
        transition: opacity 0.3s ease;
    }

    .app-text-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 30px 20px 20px 20px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 100%);
        color: var(--lb-white);
    }

    .app-text-overlay h3 {
        font-size: 1.3rem;
        margin-top: 0;
        margin-bottom: 8px;
        color: var(--lb-white);
    }

    .app-text-overlay p {
        font-size: 0.95rem;
        color: #e0e0e0;
        margin: 0;
        line-height: 1.4;
    }

    @media (hover: hover) {
        .app-card:hover {
            transform: translateY(-5px);
        }

        .app-card:hover img {
            opacity: 1;
        }
    }

    /* Cuadrícula de Tecnología Clave */
    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto 50px;
        padding: 0 15px;
    }

    .tech-item {
        display: flex;
        align-items: center;
        background: var(--lb-white);
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        border: 1px solid #f0f0f0;
        transition: box-shadow 0.3s ease;
    }

    .tech-img-wrapper {
        width: 100px;
        height: 100px;
        flex-shrink: 0;
        border-radius: 12px;
        overflow: hidden;
    }

    .tech-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .tech-text-content {
        padding-left: 20px;
    }

    .tech-text-content h3 {
        font-size: 1.1rem;
        color: var(--lb-text);
        margin-top: 0;
        margin-bottom: 5px;
        line-height: 1.2;
    }

    .tech-text-content p {
        font-size: 0.9rem;
        color: #666;
        margin: 0;
        line-height: 1.4;
    }

    @media (hover: hover) {
        .tech-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    }
</style>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos.php" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv.php"
                        class="blue link-orange">Robots móviles autónomos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kokobots</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container">
        <video autoplay muted loop playsinline disablepictureinpicture width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/.png">
            <source src="https://www.logicbus.com.mx/assets/videos/Kokobot.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Robots autónomos de limpieza
            para</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">LA
            INDUSTRIA</span>
    </h1>

    <p class="intro-text">
        Kokobots desarrolla <strong>robots móviles autónomos (AMR)</strong> especializados en <strong>limpieza
            profesional</strong>, diseñados para <strong>automatizar procesos</strong> en entornos industriales y
        comerciales de alto tráfico. Sus soluciones integran <strong>navegación inteligente</strong> basada en sensores
        avanzados, <strong>mapeo en tiempo real (SLAM)</strong> y conectividad en la nube para monitoreo, control y
        optimización operativa.
    </p>

    <p class="intro-text">
        Los robots Kokobots permiten <strong>mejorar la eficiencia</strong>, <strong>reducir costos operativos</strong>
        y garantizar <strong>estándares constantes de limpieza</strong> en instalaciones como aeropuertos, hospitales,
        centros logísticos, retail y manufactura, impulsando la transformación hacia <strong>operaciones inteligentes y
            automatizadas</strong>.
    </p>

    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/kokobots" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
        <a class="btn-circle" href="#tecnologia-clave">Tecnología Clave</a>
    </nav>

    <h2 class="section-title" id="productos">Productos</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S7.webp" alt="S7">
            <h4>S7</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S7_p_38414.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S95.webp" alt="S95">
            <h4>S95</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S95_p_38415.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S79.webp" alt="S79">
            <h4>S79</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S79_p_38416.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S977.webp" alt="S977">
            <h4>S977</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S977_p_38417.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S76.webp" alt="S76">
            <h4>S76</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S76_p_38418.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./images/kokobots/S9.webp" alt="S9">
            <h4>S9</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/S9_p_38419.html" target="_blank"
                rel="noopener noreferrer">Ver más</a>
        </div>
    </div>

    <h2 class="section-title" id="aplicaciones">Aplicaciones</h2>
    <div class="apps-grid">
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/gaotie.webp" alt="Estación de tren">
            <div class="app-text-overlay">
                <h3>Estaciones de Tren</h3>
                <p>Limpieza inteligente las 24 horas para áreas de espera amplias y de alto tráfico.</p>
            </div>
        </div>
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/houjishi.webp" alt="Sala de embarque">
            <div class="app-text-overlay">
                <h3>Salas de Embarque</h3>
                <p>Navegación autónoma y planificación inteligente de rutas que garantizan una experiencia limpia.</p>
            </div>
        </div>
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/park.webp" alt="Estacionamiento">
            <div class="app-text-overlay">
                <h3>Estacionamientos</h3>
                <p>Cobertura de limpieza perfecta para estacionamientos subterráneos y garajes multinivel.</p>
            </div>
        </div>
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/community.webp" alt="Zonas residenciales">
            <div class="app-text-overlay">
                <h3>Zonas Residenciales</h3>
                <p>Ideal para comunidades residenciales y parques empresariales, manteniendo la higiene.</p>
            </div>
        </div>
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/hotel.webp" alt="Hotel">
            <div class="app-text-overlay">
                <h3>Hoteles</h3>
                <p>Limpieza automatizada eficiente para grandes áreas interiores, asegurando un ambiente impecable.</p>
            </div>
        </div>
        <div class="app-card">
            <img loading="lazy" src="./images/kokobots/market.webp" alt="Supermercado">
            <div class="app-text-overlay">
                <h3>Supermercados</h3>
                <p>Limpieza constante y evasión avanzada de obstáculos en espacios comerciales concurridos.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="tecnologia-clave">Tecnología Clave</h2>
    <div class="tech-grid">
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Sistema-Operativo-IA-Kokobots.jpg"
                    alt="Sistema Operativo IA">
            </div>
            <div class="tech-text-content">
                <h3>Sistema Operativo IA</h3>
                <p>Sistema Operativo Autónomo Kokobots - algoritmo de inteligencia artificial.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Algoritmo-UniHPP.jpg" alt="Algoritmo UniHPP">
            </div>
            <div class="tech-text-content">
                <h3>Algoritmo UniHPP</h3>
                <p>Algoritmo de posicionamiento y navegación de alta precisión.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Controlador-EVS-HDC.jpg" alt="Controlador EVS-HDC">
            </div>
            <div class="tech-text-content">
                <h3>Controlador EVS-HDC</h3>
                <p>Controlador autónomo de nivel industrial.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Posicionamiento-a-nivel-de-cm.jpg" alt="Posicionamiento cm">
            </div>
            <div class="tech-text-content">
                <h3>Posicionamiento cm</h3>
                <p>Posicionamiento a nivel de centímetros para navegación interior y exterior.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Fusion-de-Multiples-Sensores.jpg" alt="Fusión de Sensores">
            </div>
            <div class="tech-text-content">
                <h3>Fusión de Sensores</h3>
                <p>Algoritmo de percepción avanzado de Deep Learning y fusión de múltiples sensores.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Deep-Learning.jpg" alt="Deep Learning">
            </div>
            <div class="tech-text-content">
                <h3>Deep Learning</h3>
                <p>Red neuronal convolucional, aprendizaje profundo, forma semántica de descripción de contexto.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Plataforma-Robot-NextRobot.jpg" alt="Plataforma NextRobot">
            </div>
            <div class="tech-text-content">
                <h3>Plataforma NextRobot</h3>
                <p>Colaboración, programación de tareas y control de nuestros robots.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Deteccion-Inteligente.jpg" alt="Detección Inteligente">
            </div>
            <div class="tech-text-content">
                <h3>Detección Inteligente</h3>
                <p>Detección y seguimiento inteligente, carreteras, semáforos, vehículos, etc.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Mapa-Integrado.jpg" alt="Mapa Integrado">
            </div>
            <div class="tech-text-content">
                <h3>Mapa Integrado</h3>
                <p>Mapa HD integrado de acuerdo con diferentes escenarios de aplicación.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Sistema-de-Barrido-Inteligente.jpg"
                    alt="Barrido Inteligente">
            </div>
            <div class="tech-text-content">
                <h3>Barrido Inteligente</h3>
                <p>El sistema de barrido inteligente facilita la limpieza de todo tipo de basura.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Algoritmo-de-Limite-Desconocido.jpg"
                    alt="Límite Desconocido">
            </div>
            <div class="tech-text-content">
                <h3>Límite Desconocido</h3>
                <p>Algoritmo SioESlam, algoritmo de navegación y mapeo de exploración de límites desconocidos.</p>
            </div>
        </div>
        <div class="tech-item">
            <div class="tech-img-wrapper">
                <img loading="lazy" src="./images/kokobots/Fuente-de-Alimentacion-Distribuida.jpg"
                    alt="Fuente de Alimentación">
            </div>
            <div class="tech-text-content">
                <h3>Fuente de Alimentación</h3>
                <p>El sistema de fuente de alimentación inteligente proporciona 12 horas de trabajo antes de necesitar
                    recarga.</p>
            </div>
        </div>
    </div>

    <div class="section-blue text-center py-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE KOKOBOTS</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a
                encontrar las mejores soluciones de limpieza automatizada para tu proyecto.</span>
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

</body>

</html>