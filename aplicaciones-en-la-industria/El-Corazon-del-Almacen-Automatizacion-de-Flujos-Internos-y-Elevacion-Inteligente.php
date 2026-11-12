<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatización de Flujos Internos y Elevación Inteligente (AMR) | Logicbus</title>
    <meta name="description"
        content="Optimiza el flujo interno de tu almacén con robots de elevación inteligente y montacargas autónomos. Conecta líneas de producción y almacén automáticamente.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
    <?php require("../libreria/header.view.php"); ?>

    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Automatización de Flujos Internos y Elevación
                    Inteligente</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">El Corazón del Almacén: Automatización de Flujos
                Internos y Elevación Inteligente</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/El-Corazon-del-Almacen-Automatizacion-de-Flujos-Internos-y-Elevacion-Inteligente.png"
                    alt="El Corazón del Almacén: Automatización de Flujos Internos y Elevación Inteligente"
                    width="100%">

                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../autoxing-technology"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/autoxing.webp" alt="Autoxing" width="150px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>El verdadero reto no es solo mover, es fluir.</b> En la logística moderna, el
                    cuello de botella suele estar en el movimiento interno: ese tráfico constante entre las líneas de
                    producción y el almacén. La verdadera eficiencia hoy se logra conectando automáticamente cada etapa
                    de la planta. Para ello, hemos rediseñado nuestra estrategia de flujo utilizando dos fuerzas
                    complementarias: la potencia de elevación de horquillas y la versatilidad de los robots de elevación
                    de estantes.
                </p>

                <p class="text-center light-black font-weight-bold">Detalle Técnico de la Solución</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Navegación de Precisión y Percepción del Entorno:</b> Para operar donde conviven
                        humanos y máquinas, el robot no depende de rutas fijas. Equipos como la <a
                            href="https://tienda.logicbus.com.mx/FT2000_p_38385.html" target="_blank"><b>serie
                                FT2000</b></a> o la
                        <a href="https://tienda.logicbus.com.mx/L600-AX8113_p_38397.html" target="_blank"><b>Serie
                                L</b></a> utilizan fusión de sensores para una conciencia espacial total:
                        <ul class="mt-2">
                            <li><b>Visión Profunda:</b> Cámaras de profundidad y múltiples LiDARs para detectar
                                obstáculos en 3D.</li>
                            <li><b>Precisión Milimétrica:</b> Posicionamiento de ±5 mm a ±10 mm para interacciones
                                perfectas.</li>
                            <li><b>Agilidad:</b> Operación en pasillos estrechos (70cm - 80cm de ancho mínimo).</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Versatilidad en la Carga y Manejo de Materiales:</b> La solución elimina la
                        carga manual intermedia:
                        <ul class="mt-2">
                            <li><b>Elevación de Estantes (Serie L):</b> Modelos como el L-150 o L-600 identifican,
                                elevan y transportan estantes autónomamente (Just-in-Time).</li>
                            <li><b>Transporte de Carga Pesada (Serie FT):</b> El <a
                                    href="https://tienda.logicbus.com.mx/FT2000_p_38385.html"
                                    target="_blank"><b>FT2000</b></a> maneja pallets estándar con
                                capacidad de 2000 kg y operación continua de +5 horas.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>Conectividad Total:</b> Gracias a su API abierta, estos equipos se integran sin
                        costuras con sistemas WMS, MES y RCS, permitiendo una gestión digitalizada y trazable.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Impacto en la Industria</p>

                <p class="light-black">Esta arquitectura de robots de elevación y transporte está transformando la
                    eficiencia en sectores de manufactura, retail y logística médica. Al automatizar el flujo interno,
                    las empresas logran:</p>
                <ul class="light-black">
                    <li class="mb-3">Reducción drástica de incidentes laborales.</li>
                    <li class="mb-3">Respuesta rápida ante cambios en las órdenes de producción.</li>
                    <li class="mb-3">Optimización del uso de cada metro cuadrado del almacén.</li>
                </ul>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMENDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/350/ft2000.jpg" alt="FT2000" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FT2000 (Serie FT)</p>
                <p>Montacargas autónomo para transporte de pallets estándar. Capacidad de carga de 2000 kg.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FT2000_p_38385.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/350/l-600.jpg" alt="L-600" width="150px">
                <p class="font-weight-bold mt-2 mb-0">L-600 (Serie L)</p>
                <p>Robot de elevación inteligente para estantes pesados. Navegación SLAM y alta precisión.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/L600-AX8113_p_38397.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/350/l-150.jpg" alt="L-150" width="150px">
                <p class="font-weight-bold mt-2 mb-0">L-300</p>
                <p>Robots de elevación ágiles para pasillos estrechos (70-80cm). Ideal para paquetería ligera.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/assets/images/350/l-150.jpg"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/350/l-150.jpg" alt="Integración WMS"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">L150</p>
                <p>El modelo L-150 está diseñado para la manipulación automatizada de materiales mediante funciones de
                    elevación inteligente.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/L150_p_38394.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/1UQAs9LiZYo?si=d2DpS1if2wJKGlFt"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/el-corazon-del-almacen-automatizacion-de-flujos-internos-y-elevacion-inteligente/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/El-Corazon-del-Almacen-Automatizacion-de-Flujos-Internos-y-Elevacion-Inteligente.webp"
                        alt="Artículo relacionado" width="100%">
                    El Corazón del Almacén: Automatización de Flujos Internos y Elevación Inteligente
                </a>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="retail"> <img src="img/industrias/agricultura.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Retail y Logística">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Retail y Logística</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="oem">
                        <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="ensayos-de-materiales">
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

            <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
    </div>
    
    <!-- BEGIN Odoo web form -->
    <div class="container">
        <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
            <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                style="width:100%; min-height:1200px; border:0;">
            </iframe>
        </div>
    </div>
    <!-- END Odoo web form -->
</div>

    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>