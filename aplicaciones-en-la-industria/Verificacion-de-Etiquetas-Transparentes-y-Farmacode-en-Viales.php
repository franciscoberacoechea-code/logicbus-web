<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Etiquetas Transparentes y Farmacode en Viales | Logicbus</title>
    <meta name="description" content="En la línea de empaquetado farmacéutico, verificar que los viales de vidrio contengan su etiqueta y que esta sea la correcta es un reto...">
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
                <li class="breadcrumb-item active" aria-current="page">Verificación de Etiquetas Transparentes y Farmacode en Viales</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Verificación de Etiquetas Transparentes y Farmacode en Viales</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Verificacion-de-Etiquetas-Transparentes-y-Farmacode-en-Viales.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../tri-tronics"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp" alt="Fatek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">En la línea de empaquetado farmacéutico, verificar que los viales de vidrio contengan su etiqueta y que esta sea la correcta es un reto. Esta aplicación resuelve ese problema a alta velocidad.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Detección de "Lo Invisible":</b> A medida que los viales de vidrio pasan por la banda transportadora, un sensor fotoeléctrico retroreflectivo para objetos transparentes <a href="https://tienda.logicbus.com.mx/RSRC-1_p_11241.html">RSRC-1</a> en conjunto con su reflector <a href="https://tienda.logicbus.com.mx/AR6151_p_10465.html">AR6151</a> detecta la presencia de los viales de vidrio mediante la intervención del haz de luz emitido por el sensor.</li>
                    <li class="mb-3"><b>Verificación de Código:</b> Un segundo sensor de contraste <a href="https://tienda.logicbus.com.mx/SEBF1_p_11372.html">SEBF1</a> con fibra óptica, verifica la presencia del "Farmacode" (código de barras farmacéutico) para verificar que este etiquetado.</li>
                    <li class="mb-3"><b>Rechazo Automático:</b> Si falta un código de barras farmacéutico en alguno de los viales, el sistema envía una señal al PLC <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac">FBs-20MCR2-AC</a> para expulsar el vial defectuoso antes del encartonado final.</li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b>Detección infalible de Farmacode que fallan con sensores fotoeléctricos estándar.</b></li>
                <li class="mb-3"><b>Cumplimiento estricto de normas de etiquetado para evitar "Recalls" (retiros de producto).</b></li>
                <li class="mb-3"><b>Alta velocidad de respuesta apta para líneas de producción masiva.</b></li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/226/RSRC-1.jpg" alt="RSRC-1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">RSRC-1</p>
                <p>Sensor retrorreflectante RetroSmart ™</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RSRC-1_p_11241.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/226/SEBF1.jpg" alt="SEBF1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">SEBF1</p>
                <p>SmartEYE MARK II Sensor fotoelectrico con led emisor azul, bloque optico de fibra optica F1, ajuste por potenciometro, salida NPN y PNP, voltaje de alimentacion 12 a 24VCD, EDR (Enhanced Dynamic Range), tiempo respuesta 50 microsegundos, conector M12</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/SEBF1_p_11372.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBs-20MCR2-AC.jpg" alt="FBS-20MCR2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-20MCR2-AC</p>
                <p>PLC Industrial con 12 entradas digitales de 24Vdc con velocidad alta (200KHz) y medio alta (20KHz y 5KHz), 8 salidas de relevador/ puerto de comunicación RS-232. Alimentacion de 100~240VAC y reloj de tiempo real integrado.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac" target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/5RdXCgt4xLU?si=xc-RJfQlJQm0DF8N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/jfQ67qoCfNY?si=p4mkh-lBRMBsV3bp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/verificacion-de-etiquetas-transparentes-y-farmacode-en-viales/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/12/Verificacion-de-Etiquetas-Transparentes-y-Farmacode-en-Viales-2048x1024.webp" alt="Verificación de Etiquetas Transparentes y Farmacode en Viales" width="100%">Verificación de Etiquetas Transparentes y Farmacode en Viales
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/por-que-elegiria-el-sensor-de-etiquetas-transparentes-en-lugar-del-sensor-de-etiquetas-estandar/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/08/BANNER-77-scaled.png" alt="Por qué elegir el sensor de etiquetas transparentes" width="100%">Por qué elegir el sensor de etiquetas transparentes
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto-2/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Sincronizacion-de-Maquinas-Dosificadoras-en-Procesos-Multiproducto-scaled.jpg" alt="Sincronización de Máquinas Dosificadoras en Procesos Multiproducto" width="100%">Sincronización de Máquinas Dosificadoras en Procesos Multiproducto
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