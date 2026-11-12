<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Impacto y Vibración en Transporte de Carga Crítica | Logicbus</title>
    <meta name="description"
        content="Validación forense del transporte. Ideal para asegurar que equipos médicos, servidores o vidrios llegaron en perfecto estado y, si no, saber exactamente cuándo y dónde ocurrió el daño.">
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
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Impacto y Vibración en Transporte de
                    Carga Crítica</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de Impacto y Vibración en Transporte de Carga
                Crítica</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../madgetech"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>
                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/taicenn.webp" alt="taicenn" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Validación forense del transporte. Ideal para asegurar que equipos médicos,
                    servidores o vidrios llegaron en perfecto estado y, si no, saber exactamente cuándo y dónde ocurrió
                    el daño.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Registrador de Eventos de Choque:</b>Se atornilla un data logger UltraShock
                        directamente en el pallet o chasis del equipo sensible. Este dispositivo es autónomo (batería
                        propia) y cuenta con acelerómetros triaxiales de alta sensibilidad.
                    </li>
                    <li class="mb-3"><b>Perfil de Viaje Completo:</b>El UltraShock graba tres variables críticas
                        simultáneamente: Temperatura (para ver si se rompió la cadena de frío), Humedad (para detectar
                        condensación) y Choque (Fuerzas G). Configurado para "Trigger", solo graba eventos que superen
                        un umbral (ej. 5G), ahorrando memoria.
                    </li>
                    <li class="mb-3"><b>Auditoría de Ruta y Reclamos:</b> Al llegar a destino, el inspector de calidad
                        conecta el logger a una pc como la CV-115R-P1101-N42-4G-500G-GST60 mediante una interfaz USB
                        tipo C. El software Software Seguro MadgeTech 4 genera un reporte inalterable.</li>
                    <li class="mb-3"><b>Gestión de Activos:</b> Si el equipo sufrió daños, se registra el incidente en
                        el software, vinculando el número de serie del equipo con el reporte del logger para dar de baja
                        el activo o enviarlo a reparación.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b>Evidencia irrefutable para reclamar seguros de transporte.</b></li>
                <li class="mb-3"><b>El datalogger UltraShock soporta condiciones rudas que otros loggers no
                        aguantan.</b></li>
                <li class="mb-3"><b>Permite a los ingenieros de empaque rediseñar las cajas si detectan vibraciones
                        constantes.</b></li>
                <li class="mb-3"><b>Batería de larga duración ideal para envíos marítimos o terrestres largos.</b></li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/UltraShock-3.jpg" alt="UltraShock" width="150px">
                <p class="font-weight-bold mt-2 mb-0">UltraShock</p>
                <p>Registrador de vibración de tres ejes Conexión USB-C. Bateria recargable. Incluye ccertificado NIST.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/UltraShock_p_25293.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/272/cv-115r-p1101-n42-4g-500g-gst60.jpg"
                    alt="CV-115R-P1101-N42-4G-500G-GST60" width="150px">
                <p class="font-weight-bold mt-2 mb-0">CV-115R</p>
                <p>Panel PC, pantalla táctil resistiva de 15", Resolución 1024x768, LED 350nits. Frontal IP65. </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LYOTEMP_p_9027.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/SVP-SECURE-SYSTEM.PNG" alt="SVP-SECURE-SYSTEM"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">SVP-SECURE-SYSTEM</p>
                <p>Paquete de Validación de Software Seguro MT4. Incluye libro de Validación IQ / OQ / PQ, Software
                    Seguro y licencia de usuarios ilimitados (una PC).</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-brooks-robot-colaborativo-pf30-ma-0040x-12"
                    target="_blank">Comprar</a>
            </div>


        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/aNPnNZwto2E?si=I4qaZKOFwnHS6pqY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/todas-las-aplicaciones-donde-podrias-necesitar-ultrashock/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/12/bbnn-24.png"
                        alt="Todas las Aplicaciones donde podrías necesitar UltraShock" width="100%">Todas las
                    Aplicaciones donde podrías necesitar UltraShock
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
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"
                            alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
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