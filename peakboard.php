<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Peakboard | Tableros Digitales en Tiempo Real y Visualización de Datos.</title>
    <meta name="description"
        content="Peakboard ofrece soluciones innovadoras para la visualización de datos en tiempo real y la automatización de procesos industriales...">

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $carrusel_productos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>


<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <h1>Peakboard</h1>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de
                        desarrollo</a></li>
                <li class="breadcrumb-item"><a href="oee-que-es" class="blue link-orange">OEE</a></li>
                <li class="breadcrumb-item active" aria-current="page">Peakboard</li>
            </ol>
        </nav>
    </div>
    <div class="mb-5">
        <video autoplay muted loop playsinline width="100%" poster="https://www.logicbus.com.mx/assets/videos/peakboard.png">
            <source src="https://www.logicbus.com.mx/assets/videos/peakboard.webm" type="video/webm">
            </video>
    </div>
    <section>
        <div class="container-fluid my-5 text-center">
            <p class="title blue mb-3">De fábrica a fábrica inteligente, en poco tiempo</p>
        </div>
        <div class="container text-justify mb-5">
            <p class="paragraph">Peakboard ofrece soluciones innovadoras para la visualización de datos en tiempo real y
                la automatización de procesos industriales. Con Peakboard, las empresas pueden conectar, visualizar y
                optimizar sus datos de producción, logística y gestión en un solo panel de control intuitivo. Su
                tecnología permite integrar diversas fuentes de datos, proporcionando una visión completa y actualizada
                de las operaciones.</p>
        </div>
        <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
            <a class="button-text button button-white" href="https://tienda.logicbus.com.mx/peakboard" target="_blank" rel="noopener noreferrer">Ver en Tienda</a>
            <a class="button-text button button-white" href="#productos">Productos</a>
            <a class="button-text button button-white" href="#videos">Videos</a>
        </div>
    </section>

    <section class="container text-center light-black my-5" id="productos">
        <p class="title mb-5">¿Qué hace Peakboard?</p>
        <p class="paragraph mb-5">Recopile datos de una amplia variedad de fuentes de datos, evalúelos y visualícelos de
            forma rápida y flexible en tiempo real en cualquier lugar y en cualquier pantalla disponible. Así tendrá
            siempre a la vista sus KPI más importantes.</p>
        <img loading="lazy" src="./images/peakboard/peakboard-website-monitor-box-designer-en.webp" alt="¿Qué hace Peakboard?"
            width="100%">
        <div class="container">
            <div class="row my-5 paragraph light-black text-left justify-content-between">
                <div class="col-12 col-md-5 b-top-orange p-0 my-3">
                    <p class="font-weight-bold mt-3 med">Entrada y salida de datos</p>
                    <p>Peakboard no sólo le permite leer, combinar, procesar y visualizar sus datos. También puede
                        volver a escribirlo en el sistema fuente o compartirlo con sus máquinas.</p>
                </div>
                <div class="col-12 col-md-5 b-top-orange p-0 my-3">
                    <p class="font-weight-bold mt-3 med">Pantalla táctil</p>
                    <p>Interactúa con sus datos a través de pantallas táctiles utilizando botones u otros controles
                        interactivos. Así es como Peakboard puede funcionar como HMI para lograr aún más agilidad y
                        flexibilidad en su empresa.</p>
                </div>
                <div class="col-12 col-md-5 b-top-orange p-0 my-3">
                    <p class="font-weight-bold mt-3 med">Reequipamiento</p>
                    <p>¿Sus datos aún no están disponibles digitalmente? Peakboard también te permite digitalizar varios
                        datos analógicos. Por ejemplo, para evitar perder su certificación CE, puede actualizar
                        fácilmente sus máquinas existentes sin modificar el control del sistema.</p>
                </div>
                <div class="col-12 col-md-5 b-top-orange p-0 my-3">
                    <p class="font-weight-bold mt-3 med">Centro de tabla de picos</p>
                    <p>Con la plataforma de comunicación y administración, puede administrar fácilmente sus diversas
                        configuraciones, usuarios, visualizaciones, tiempos de inactividad, utilización, máquinas y
                        actualizaciones de hardware.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-4 paragraph d-flex flex-column justify-content-center shadow p-5">
                <img loading="lazy" src="./images/peakboard/Peakboard-Designer.webp" alt="Diseñador Peakboard" width="100%"
                    class="mx-auto">
                <p class="font-weight-bold">Diseñador Peakboard</p>
                <p>Software low-code para crear tus aplicaciones industriales de forma rápida y sencilla.</p>
                <a href="https://tienda.logicbus.com.mx/Peakboard-Designer_p_37112.html" target="_blank" rel="noopener noreferrer"
                    class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver más</a>
            </div>
            <div class="col-12 col-md-1 light-orange d-flex align-items-center justify-content-center title py-3 m-0">
                <i aria-hidden="true" class="fas fa-plus"></i>
            </div>
            <div class="col-12 col-md-7 d-flex flex-column justify-content-center shadow p-5">
                <img loading="lazy" src="./images/peakboard/Peakboard-Box.webp" alt="Caja de visera" width="300px" class="mx-auto mb-5">
                <div class="row paragraph text-center">
                    <div class="col-12 col-md-5 ">
                        <p class="font-weight-bold text-justify">Caja de visera</p>
                        <p class="text-left">Potente hardware para visualizar sus procesos industriales en un monitor.
                        </p>
                        <a href="https://tienda.logicbus.com.mx/Peakboard-Box_p_37113.html" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver
                            más</a>
                    </div>
                    <div class="col-12 col-md-7 border-left border-dark">
                        <p class="font-weight-bold text-justify">Tabla BYOD</p>
                        <p class="text-left">Con Peakboard BYOD (Bring your own Device) adquieres una licencia para
                            utilizar Peakboard en tu propio dispositivo.</p>
                        <a href="https://tienda.logicbus.com.mx/Peakboard-BYOD_p_37114.html" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 shadow p-5">
            <div class="col-12 col-md-6 paragraph d-flex flex-column justify-content-center">
                <p class="font-weight-bold text-left">Complemento: Peakboard Hub</p>
                <p class="text-left">Plataforma central para la comunicación entre usted y sus cajas Peakboard.</p>
                <a href="https://tienda.logicbus.com.mx/Peakboard-Hub_p_37115.html" target="_blank" rel="noopener noreferrer"
                    class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver más</a>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img loading="lazy" src="./images/peakboard/Add-On_Peakboard-Hub.webp" alt="Complemento: Peakboard Hub" class="mx-auto"
                    width="300px">
            </div>
        </div>
    </section>

    <section class="container">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">VENTAJAS</h2>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row light-black">
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img loading="lazy" src="./assets/ventajas/real-time.svg" alt="Datos en tiempo real" style="width: 15vh;">
                <p class="font-weight-bold">Datos en tiempo real</p>
                <p class="text-center">Muchas fuentes de datos, un panel Peakboard: información en tiempo real sobre el
                    estado del proceso y los datos del sistema de toda su operación.</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img loading="lazy" src="./assets/ventajas/paid-fast.svg" alt="Reciba pagos rápidos" style="width: 15vh;">
                <p class="font-weight-bold">Reciba pagos rápidos</p>
                <p class="text-center">Un día de taller: eso es todo. Con Peakboard puedes optimizar tu eficiencia muy
                    fácilmente y experimentar un ROI del 237%</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img loading="lazy" src="./assets/ventajas/quick-integration.svg" alt="Integración rápida" style="width: 15vh;">
                <p class="font-weight-bold">Integración rápida</p>
                <p class="text-center">Implemente en días, no en meses. ¡No se necesita soporte de TI ni conocimientos
                    de programación gracias al código bajo!</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img loading="lazy" src="./assets/ventajas/it-security.svg" alt="Seguridad informatica" style="width: 15vh;">
                <p class="font-weight-bold">Seguridad informatica</p>
                <p class="text-center">Todos los datos se pueden almacenar en caché localmente, eliminando los riesgos
                    de fuga de datos. El software se actualiza en ciclos de lanzamiento regulares para que usted esté
                    siempre actualizado.</p>
            </div>
        </div>
    </div>

    <section class="container-fluid" id="videos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1">VIDEOS</h2>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <div class="griditemContB" style="max-width: 300px; margin-left: auto; margin-right: auto;">
                        <div class="video-container-youtube" data-video-id="ZxxJMV7oQ2A">
                            <img loading="lazy" src="https://img.youtube.com/vi/ZxxJMV7oQ2A/hqdefault.jpg"
                                alt="Adquisición de datos con precisión por USB"
                                style="width:100%; border-radius:8px;">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">CONOCE MÁS SOBRE PEAKBOARD</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para su
                proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;" loading="lazy">
                </iframe>
            </div>
        </div>
        </div>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var videoContainers = document.querySelectorAll('.video-container-youtube');

        videoContainers.forEach(function (container) {
        container.addEventListener('click', function () {
        var videoId = this.dataset.videoId;

        var iframe = document.createElement('iframe');
        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
        '?autoplay=1&rel=0');
        iframe.setAttribute('title', 'YouTube video player');
        iframe.setAttribute('allow',
        'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        );
        iframe.setAttribute('allowfullscreen', '');

        this.innerHTML = '';
        this.appendChild(iframe);
        });
        });
        });
    </script>


<?php echo $var_footer; ?>

</html>