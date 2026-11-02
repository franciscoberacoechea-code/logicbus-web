<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Davolin | Teclados Industriales | Logicbus</title>
    <meta name="description"
        content="Teclados industriales con IP65 — Nuestros teclados de alto rendimiento garantizan cero interrupciones y elimina los costosos tiempos de inactividad.">

    <?php echo $estilos; ?>
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        #leftBar {
            display: none;
        }

        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
            flex: 1 1 350px;
            max-width: 480px;
        }

        .video-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-container .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .video-container .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 15px 0 15px 26px;
            border-color: transparent transparent transparent white;
        }

        @media (hover: hover) {
            .video-container:hover img {
                opacity: 1;
            }

            .video-container:hover .play-button {
                background-color: var(--lb-accent);
                transform: translate(-50%, -50%) scale(1.1);
            }
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
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PC's
                        y Comunicaciones Industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Davo Lin</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/davo-teclados-industriales.webp" alt="Davo Lin"
            title="Davo Lin">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Teclados Industriales</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DAVO
            LIN</span>
    </h1>

    <p class="intro-text">
        <strong>DAVO LIN</strong>, una empresa especializada en teclados industriales, lleva más de 15 años trabajando
        con la firme convicción de que la calidad es lo primero. En todo este tiempo, ha desarrollado una amplia
        experiencia en el sector, lo que le ha permitido ofrecer a sus clientes los teclados industriales más
        resistentes, duraderos y ergonómicos del mercado.
    </p>
    <p class="intro-text">
        Los teclados de <strong>DAVO LIN</strong> están fabricados con materiales de alta calidad y están diseñados para
        soportar las condiciones más exigentes. Además, cuentan con características ergonómicas que ayudan a prevenir
        lesiones y molestias.
    </p>
    <p class="intro-text">
        Estamos comprometidos con la satisfacción de nuestros clientes, por eso ofrecemos una amplia gama de teclados
        industriales para satisfacer las necesidades de cualquier aplicación.
    </p>

    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/davo-lin" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="https://www.logicbus.com.mx/buscador-teclados">Buscador</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#GuiasyManuales">Documentación</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <div class="container my-5 text-center bg-light p-5 rounded border">
        <h2 class="h3" style="color: var(--lb-primary); font-weight: bold;">¿Estás buscando un teclado único y diseñado
            específicamente para tu proyecto?</h2>
        <p class="text-muted my-4 mx-auto" style="max-width: 800px;">¡Estás en el lugar correcto! Ofrecemos servicios de
            fabricación para OEMs y ODMs. Contáctanos con los detalles de tu requerimiento y te proporcionaremos
            asesoramiento gratuito para encontrar la solución perfecta.</p>
        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
            class="btn-circle d-inline-block mx-auto" target="_blank" style="width: auto; padding: 10px 30px;">Más
            información por WhatsApp</a>
    </div>

    <h2 class="section-title" id="categorias">Categorías</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="assets/images/298/teclados-metalicos.webp" alt="Teclados metálicos">
            <h4>Teclados Metálicos</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Teclados-Met%C3%A1licos-_c_7696.html"
                target="_blank">Ver Productos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="assets/images/298/teclados-silicon.webp" alt="Teclados de Silicón">
            <h4>Teclados de Silicón</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Teclados-de-Silic%C3%B3n_c_7705.html"
                target="_blank">Ver Productos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="assets/images/298/teclados-cristal.webp" alt="Teclados de Cristal">
            <h4>Teclados de Cristal</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Teclados-de-Cristal_c_7707.html"
                target="_blank">Ver Productos</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="assets/images/298/trackball-y-touchpad.webp" alt="Trackball y Touchpad">
            <h4>Trackball y Touchpad</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Trackball-y-Touchpad_c_7709.html"
                target="_blank">Ver Productos</a>
        </div>
    </div>

<div class="container my-5">
    <h2 class="section-title bg-transparent" id="articulos">Artículos</h2>

    <div class="row justify-content-center">
        
        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/como-elegir-un-teclado-industrial/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="images/articulos-portadas/como-elegir-un-teclado-industrial.webp" alt="Como elegir un teclado industrial" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">¿Cómo elegir un teclado industrial?</h5>
                    <p class="card-text text-muted flex-grow-1">Los teclados industriales son una parte esencial de muchas operaciones comerciales y de fabricación. Están diseñados para resistir ambientes adversos y ofrecer un rendimiento confiable a largo plazo.</p>
                    <a href="https://www.logicbus.com.mx/blog/como-elegir-un-teclado-industrial/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/el-dispositivo-apuntador-perfecto-para-tu-teclado-industrial/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="images/articulos-portadas/el-dispositivo-apuntador-perfecto.webp" alt="El dispositivo apuntador perfecto" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">El Dispositivo Apuntador Perfecto para Tu Teclado</h5>
                    <p class="card-text text-muted flex-grow-1">Cuando se trata de teclados industriales, la elección del dispositivo apuntador adecuado puede marcar una gran diferencia en la eficiencia y comodidad de tus operaciones diarias.</p>
                    <a href="https://www.logicbus.com.mx/blog/el-dispositivo-apuntador-perfecto-para-tu-teclado-industrial/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/cuales-son-los-diferentes-tipos-de-instalacion-de-un-teclado-industrial/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="images/articulos-portadas/diferentes-tipos-de-instalacion-teclados.webp" alt="Diferentes tipos de instalación de un teclado industrial" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">Diferentes tipos de instalación de un teclado industrial</h5>
                    <p class="card-text text-muted flex-grow-1">Los teclados industriales son una parte fundamental en muchas aplicaciones y entornos de trabajo. Están hechos para resistir situaciones difíciles, como humedad, polvo, golpes y vibraciones.</p>
                    <a href="https://www.logicbus.com.mx/blog/cuales-son-los-diferentes-tipos-de-instalacion-de-un-teclado-industrial/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <a href="https://www.logicbus.com.mx/blog/teclados-industriales-la-clave-para-la-eficiencia-en-maquinas-industriales/" target="_blank">
                    <img loading="lazy" class="card-img-top" src="images/articulos-portadas/teclados-industriales-eficiencia-en-maquinas.webp" alt="La clave para la eficiencia en máquinas industriales" style="border-bottom: 3px solid var(--lb-accent, #FF7E00); height: 250px; object-fit: cover;">
                </a>
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title font-weight-bold" style="color: var(--lb-primary, #22527A);">La clave para la eficiencia en máquinas industriales</h5>
                    <p class="card-text text-muted flex-grow-1">En el entorno industrial, donde la eficiencia y la productividad son fundamentales, contar con equipos confiables y duraderos es esencial. Una de las piezas clave en las máquinas industriales es el teclado.</p>
                    <a href="https://www.logicbus.com.mx/blog/teclados-industriales-la-clave-para-la-eficiencia-en-maquinas-industriales/" target="_blank" class="btn text-white rounded-pill mt-3" style="background-color: var(--lb-primary, #22527A); align-self: center; padding: 8px 25px;">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>
</div>

    <h2 class="section-title mt-5" id="GuiasyManuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=davo+lin" class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación</span>
        </a>
    </div>

    <h2 class="section-title" id="videos">Videos</h2>
    <div class="products-grid" style="max-width: 1000px; margin: 0 auto;">
        <div class="video-container" data-video-id="JR4H7_-_VuY">
            <img loading="lazy" src="https://img.youtube.com/vi/JR4H7_-_VuY/hqdefault.jpg"
                alt="¿Cómo se fabrican los teclados industriales?">
            <div class="play-button"></div>
        </div>
        <div class="video-container" data-video-id="PP4LAltvYg4">
            <img loading="lazy" src="https://img.youtube.com/vi/PP4LAltvYg4/hqdefault.jpg"
                alt="Teclado industrial impermeable">
            <div class="play-button"></div>
        </div>
        <div class="video-container" data-video-id="lBsQU8yI8mc">
            <img loading="lazy" src="https://img.youtube.com/vi/lBsQU8yI8mc/hqdefault.jpg"
                alt="¿Cómo se fabrican los teclados industriales?">
            <div class="play-button"></div>
        </div>
        <div class="video-container" data-video-id="AUmBJXyw_uo">
            <img loading="lazy" src="https://img.youtube.com/vi/AUmBJXyw_uo/hqdefault.jpg"
                alt="Teclados Industriales en Expo Manufactura">
            <div class="play-button"></div>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">CONOCE MÁS SOBRE DAVO LIN</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a
                encontrar las mejores soluciones de interacción hombre-máquina para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

    <script>
        // JAVASCRIPT PARA CARGAR EL VIDEO DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;

                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                    iframe.setAttribute('allowfullscreen', '');

                    // Reemplaza el contenido del div por el iframe
                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>