<?php
require("admin/config.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Soluciones para Hospitales y Biotecnología | Logicbus</title>
    <meta name="description" content="Descubre equipos y tecnologías para hospitales y biotecnología en Logicbus. Automatiza procesos, gestiona recursos médicos con nuestras soluciones innovadoras.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <style>
        .btn-wsp {
            box-sizing: border-box !important;
            width: 60px !important;
            height: 60px !important;
            padding: 0 !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .btn-wsp i,
        .btn-wsp::before {
            line-height: 1 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Biotecnología y Hospitales</li>
            </ol>
        </nav>
    </div>

    <div class="mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/banner-biotecnologia-y-hospitales.png">
            <source src="https://www.logicbus.com.mx/assets/videos/banner-biotecnologia-y-hospitales.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container-fluid my-5">
        <h1 class="banner-title blue font-weight-bolder mb-5">
            BIOTECNOLOGÍA <b class="banner-title light-orange">Y HOSPITALES</b>
        </h1>
        <p class="light-black paragraph text-justify px-md-5 px-1">
            <strong>Biotecnología y Hospitales en Logicbus</strong> integra tecnologías avanzadas para optimizar la gestión en instituciones de salud.
            Ofrece soluciones como <strong>Machine Learning</strong> para mantenimiento predictivo, <strong>IoT</strong> para monitoreo en tiempo real,
            y herramientas para la <strong>administración eficiente de recursos y costos</strong>.
            Estas soluciones aseguran el cumplimiento con <strong>normativas de seguridad y calidad</strong>, mejorando la eficiencia y seguridad en el entorno hospitalario.
        </p>
    </div>

    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="#marcas">
            <button class="button button-white">Marcas</button>
        </a>
        <a class="button-text" href="#articulos">
            <button class="button button-white">Artículos</button>
        </a>
        <a class="button-text" href="#doc">
            <button class="button button-white">Catálogos</button>
        </a>
        <a class="button-text" href="#video">
            <button class="button button-white">Videos</button>
        </a>
    </div>

    <section id="marcas">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">MARCAS</h2>
        </div>
        <div class="container-fluid my-5">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="autoxing">
                    <img class="m-3 gray-filter" src="images/nuestras_marcas/webp/autoxing.webp" alt="autoxing" width="200px">
                </a>
                <a href="davo-lin">
                    <img class="m-3 gray-filter" src="images/nuestras_marcas/webp/davo-lin.webp" alt="davo-lin" width="200px">
                </a>
                <a href="madgetech">
                    <img class="m-3 gray-filter" src="images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px">
                </a>
                <a href="quasi">
                    <img class="m-3 gray-filter" src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/quasi.png" alt="quasi" width="200px">
                </a>
                <a href="rfid-inc">
                    <img class="m-3 gray-filter" src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/rfid.png" alt="rfid" width="200px">
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="productos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
        </div>
        <div class="row justify-content-center m-3">
            <div class="col-12 col-md-6 col-lg-4 mb-4 px-2">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center mx-0" style="height: 100%;">
                    <div class="col-6 col-md-4">
                        <img src="images/autoxing-technology/robot-inteligente.webp" alt="Robots Colaborativos" width="100%">
                    </div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Robots Móviles Autónomos</h3>
                        <p class="light-black">Los Robots Móviles Autónomos (AMR) automatizan tareas clave en hospitales, como el transporte de suministros médicos, muestras biológicas y alimentos. Mejoran la eficiencia, reducen errores y permiten a los profesionales de la salud centrarse en la atención al paciente.</p>
                        <div class="text-center">
                            <a class="m-2" href="https://www.logicbus.com.mx/robots-moviles-autonomos-amr-agv">
                                <button class="section-blue white med ico"><i class="fas fa-info" aria-hidden="true"></i></button>
                            </a>
                            <a class="m-2" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-moviles-autonomos" target="_blank">
                                <button class="section-orange white med ico"><i class="fas fa-shopping-cart" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 px-2">
                <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center mx-0" style="height: 100%;">
                    <div class="col-6 col-md-4">
                        <img src="images/productos/etiquetas-rfid.webp" alt="Etiquetas RFID" width="100%">
                    </div>
                    <div class="col-12 col-md-8">
                        <h3 class="blue font-weight-bold text-center">Etiquetas RFID</h3>
                        <p class="light-black">Las Etiquetas RFID permiten la identificación y seguimiento en tiempo real de equipos médicos, muestras biológicas y suministros. Optimizan la gestión de inventarios, mejoran la trazabilidad y aumentan la seguridad en hospitales y laboratorios de biotecnología.</p>
                        <div class="text-center">
                            <a class="m-2" href="https://www.logicbus.com.mx/rfid-inc">
                                <button class="section-blue white med ico"><i class="fas fa-info" aria-hidden="true"></i></button>
                            </a>
                            <a class="m-2" href="https://tienda.logicbus.com.mx/rfid" target="_blank">
                                <button class="section-orange white med ico"><i class="fas fa-shopping-cart" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5" id="video">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center my-5">



            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/SyFwCW6Qn3M?si=S-GEiVr7Ly97vxPr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid" id="articulos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">ARTICULOS</h2>
        </div>
        <div class="text-center">
            <div class="d-flex justify-content-center flex-wrap">

                <div class="m-3">
                    <a href="https://www.logicbus.com.mx/blog/monitoreo-de-temperatura-en-hospitales/" target="_blank">
                        <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/10/Monitoreo-de-temperatura-en-hospitales-Sensores-que-salvan-vidas-scaled.png" alt="Monitoreo de temperatura en hospitales: Sensores que salvan vidas" width="350px" height="190px" class="imgBorde">
                    </a>
                </div>
            </div>
            <a class="button button-circle-whiteb button-text my-3" href="https://www.logicbus.com.mx/blog/category/biotecnologia-y-hospitales/" target="_blank">Ver todos</a>
        </div>
    </section>

    <section id="doc" class="mb-5">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">CATÁLOGOS</h2>
        </div>
        <div class="d-flex flex-wrap justify-content-center text-center">
            <div class="m-2">
                <a class="blue link-orange" href="pdf/catalogos/Robots-colaborativos.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/catalogos/Robots-colaborativos.jpg" alt="Ver archivo pdf" class="imgBorde" width="175px" height="228px"><br>
                </a>
            </div>
            <div class="m-2">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.png" alt="Ver archivo pdf" class="imgBorde" width="175px" height="228px"><br>
                </a>
            </div>
            <div class="m-2">
                <a class="blue link-orange" href="pdf/RFID-guia-productos.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/RFID-guia-productos.jpg" alt="Ver archivo pdf" class="imgBorde" width="175px" height="228px"><br>
                </a>
            </div>
            <div class="m-2">
                <a class="blue link-orange" href="pdf/Logicbus-Medical-&-Pharmaceutical-Brochure.pdf" target="_blank">
                    <img src="https://www.logicbus.com.mx/pdf/Logicbus-Medical-&-Pharmaceutical-Brochure.jpg" alt="Ver archivo pdf" class="imgBorde" width="175px" height="228px"><br>
                </a>
            </div>
        </div>
    </section>

    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white text-uppercase">conoce más sobre NUESTRAS SOLUCIONES DE Biotecnología y Hospitales</h2>
            <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su proyecto</span>
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