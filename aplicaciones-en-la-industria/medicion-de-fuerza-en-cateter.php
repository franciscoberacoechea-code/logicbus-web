<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medición de Fuerza en Catéter | Logicbus</title>
    <meta name="description" content="La medición precisa de la fuerza durante la inserción del catéter es crucial en varios procedimientos intravasculares para garantizar tanto la seguridad como la precisión.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- Estilos Necesarios-->
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

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medición de Fuerza en Catéter</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Medición de Fuerza en Catéter" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Medición de Fuerza en Catéter" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Medición de Fuerza en Catéter</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/cateter.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center">
                <p class="text-center light-black font-weight-bold">Medición de las fuerzas de contacto durante la inserción del catéter en procedimientos intravasculares</p>
                <p class="light-black text-justify">La medición precisa de la fuerza durante la inserción del catéter es crucial en varios procedimientos intravasculares para garantizar tanto la seguridad como la precisión. Controlar las fuerzas aplicadas ayuda a reducir las complicaciones y mejora la eficacia general del procedimiento. Sin embargo, la medición de estas fuerzas plantea desafíos, en particular en cirugías remotas o asistidas por robot, donde la falta de retroalimentación táctil directa dificulta que los cirujanos calculen las fuerzas de contacto entre el catéter y el tejido. Una fuerza excesiva puede provocar daños en el tejido, mientras que una fuerza insuficiente puede dar lugar a una inserción ineficaz, lo que podría comprometer el procedimiento. A medida que los sistemas médicos se vuelven más complejos y dependen de un control robótico preciso, la celda de carga digital en miniatura LSB206 de FUTEK ofrece una solución de alta precisión para los sistemas de inserción de catéteres, que proporciona retroalimentación en tiempo real y garantiza un control de fuerza confiable.</p>

                <p class="text-center light-black font-weight-bold">Células de carga de precisión: cómo afrontar el desafío</p>
                <p class="light-black text-justify">La celda de carga digital en miniatura LSB206 de FUTEK aborda estos desafíos al proporcionar mediciones de fuerza altamente precisas y sensibles en tiempo real. Esta celda de carga en miniatura es ideal para la integración en sistemas de inserción de catéteres y ofrece una variedad de beneficios, entre los que se incluyen:</p>

                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Acondicionador de señal digital integrado</b>: el LSB206 ofrece salida SPI y/o UART, lo que garantiza una comunicación digital perfecta con el sistema de control del catéter.</li>
                    <li class="mb-3"><b>Alta velocidad de muestreo y resolución</b>: con hasta 1300 muestras por segundo y 15 bits de resolución sin ruido (NFR), la celda de carga captura incluso las variaciones de fuerza más pequeñas.</li>
                    <li class="mb-3"><b>Bajo consumo de energía</b>: con un funcionamiento de solo 78 mW, el LSB206 es energéticamente eficiente, lo que lo hace ideal para su uso en dispositivos médicos alimentados por batería.</li>
                    <li class="mb-3"><b>Medición de tensión y compresión</b>: con no linealidad e histéresis de ±0,1 % de la salida nominal, la celda de carga ofrece un rendimiento confiable para fuerzas de tensión y compresión.</li>
                    <li class="mb-3"><b>Compacto y liviano</b>: con un peso de solo 14 gramos y unas medidas de 0,75 pulgadas de alto y 0,38 pulgadas de ancho, el LSB206 está diseñado para integrarse fácilmente en sistemas pequeños y con limitaciones de espacio.</li>
                    <li class="mb-3"><b>Protección contra sobrecarga integrada</b>: la celda de carga está diseñada con protección contra sobrecarga de hasta el 1000 % de su salida nominal.</li>
                </ul>
            </div>
            <div class="container text-center">
                <p class="text-center light-black font-weight-bold">Beneficios de la medición de fuerza de precisión</p>
                <p class="light-black text-justify">La incorporación de células de carga de precisión como la LSB206 en los sistemas de inserción de catéteres proporciona varias ventajas clave:</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Control de fuerza optimizado</b>: las celdas de carga de precisión garantizan que la fuerza aplicada durante la inserción del catéter se controle y ajuste cuidadosamente, lo que mejora la precisión del procedimiento.</li>
                    <li class="mb-3"><b>Riesgo reducido de daño tisular</b>: la medición de fuerza en tiempo real ayuda a prevenir la fuerza excesiva, lo que reduce el riesgo de daño a los tejidos delicados.</li>
                    <li class="mb-3"><b>Retroalimentación mejorada en sistemas robóticos</b>: para los procedimientos asistidos por robot, las celdas de carga de precisión proporcionan datos de fuerza críticos que mejoran el control y la capacidad de respuesta del sistema, compensando la falta de retroalimentación táctil directa.</li>
                </ul>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li class="mb-3">Los procedimientos con catéter exigen la máxima precisión y dejan poco margen de error.</li>
                    <li class="mb-3">La retroalimentación proporcionada por el LSB206 proporciona a los médicos las mediciones de fuerza necesarias para navegar el catéter de manera segura.</li>
                    <li class="mb-3">En la aplicación anterior, una celda de carga en forma de S en miniatura Jr. (LSB206) se ubica en el alambre guía que se extiende desde el brazo robótico. La celda de carga digital LSB206 mide la tensión en el alambre y esta información se utiliza para controlar la dirección y el movimiento del catéter.</li>
                </ol>
                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/lsb206_connector.jpg" alt="LSB206" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LSB206</p>
                <p>Celda de carga digital S-Beam Jr 3.0</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LSB206_c_7915.html" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/j5yf6HRaWSQ?si=ba9OFrOv8JUmgxz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oET32jL106c?si=hr5bgIqBnyezNooq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/cp9xINRLz1U?si=_gHVv5Qmb0DX2FLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <a href="http://https://www.logicbus.com.mx/blog/por-que-es-importante-calibrar-las-celdas-de-carga-y-los-sensores-de-torque/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/%C2%BFPor-que-es-importante-calibrar-una-celda-de-carga.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.logicbus.com.mx/blog/display-exclusivo-para-celdas-de-carga/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Display-exclusivo-para-celdas-de-carga.png" alt="" width="100%">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.logicbus.com.mx/blog/celdas-de-carga-en-el-control-de-procesos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/CELDAS-DE-CARGA-EN-EL-CONTROL-DE-PROCESOS.png" alt="" width="100%">
                </a>
            </div>
        </div>
    </section>

    <!--INDUSTRIAS-->
    <section class="container">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
        <div class="container my-5">
            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                <div class="card card-industry">
                    <a class="text-white" href="academia-e-investigacion">
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DIAGRAMA -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg" alt="Medición de Fuerza en Catéter" width="100%">
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
        </div>
        <!-- BEGIN Podio web form -->
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el formulario</a>
            </noscript>
        </div>
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