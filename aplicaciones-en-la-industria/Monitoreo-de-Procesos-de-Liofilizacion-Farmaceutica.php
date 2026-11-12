<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Procesos de Liofilización Farmacéutica | Logicbus</title>
    <meta name="description" content="La liofilización (deshidratación por frío) es crítica para estabilizar medicamentos inyectables...">
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
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Procesos de Liofilización Farmacéutica</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de Procesos de Liofilización Farmacéutica</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-Procesos-de-Liofilizacion-Farmaceutica.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../quasi"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/quasi.webp" alt="quasi" width="200px"></a>
                    <a href="../madgetech"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>
                    <a href="../brooks-automation"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/brooks.webp" alt="brooks" width="200px"></a>
                </div>
                
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">La liofilización (deshidratación por frío) es crítica para estabilizar medicamentos inyectables. Es un proceso costoso y largo donde el control de vacío y temperatura es vital. Si falla el proceso, el lote completo se desecha.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Carga Automatizada:</b> Robots y sistemas de manejo <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html">QC2-00001</a> cargan miles de viales con solución líquida en las bandejas del liofilizador, asegurando una distribución uniforme sin contacto humano.</li>
                    <li class="mb-3"><b>Instrumentación del Lote:</b> Se colocan data loggers <a href="https://tienda.logicbus.com.mx/LYOTEMP_p_9027.html">LyoTemp</a> diseñados específicamente para liofilización. Tienen sondas flexibles que se introducen dentro de los viales de muestra y cables planos que permiten sellar la puerta del equipo sin perder el vacío.</li>
                    <li class="mb-3"><b>Ciclo de Secado:</b> Durante días, el equipo baja la temperatura y aplica vacío. Los loggers registran cómo se sublima el hielo, asegurando que el producto no se "derrita" (colapso de la estructura).</li>
                    <li class="mb-3"><b>Descarga de muestras datos y Reporte:</b> Al finalizar, el brazo robótico <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-brooks-robot-colaborativo-pf30-ma-0040x-12">PF30-MA-0040X-12</a> retira las muestras y las coloca en cámara de lioflización. Se descargan los datos de los loggers <a href="https://tienda.logicbus.com.mx/madgetech">MadgeTech</a> en conjunto con la interfaz <a href="https://tienda.logicbus.com.mx/IFC300_p_4306.html">IFC300</a> para generar el reporte de validación del lote que exige la autoridad sanitaria (COFEPRIS/FDA).</li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <li class="mb-3"><b>Calidad del Producto: Asegura la reconstitución perfecta del medicamento al usarse.</b></li>
                <li class="mb-3"><b>Cero Contaminación: La automatización de Brooks elimina la presencia humana (principal fuente de partículas) en la zona crítica.</b></li>
                <li class="mb-3"><b>Datos Precisos: Los loggers de MadgeTech están diseñados para operar en vacío y temperaturas extremas donde otros sensores fallan.</b></li>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/331/model-c2.jpg" alt="QC2-00001" width="150px">
                <p class="font-weight-bold mt-2 mb-0">QC2-00001</p>
                <p>Robot móvil autónomo modelo C2</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank">Comprar</a>
            </div>

            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/LyoTemp-front.jpg" alt="LYOTEMP" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LYOTEMP</p>
                <p>Registrador de datos de temperatura LYOTEMP</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LYOTEMP_p_9027.html" target="_blank">Comprar</a>
            </div>

                        <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/255/PF30-MA-0040X-12.jpg" alt="PF30-MA-0040X-12" width="150px">
                <p class="font-weight-bold mt-2 mb-0">PF30-MA-0040X-12</p>
                <p>Robot Colaborativo Industrial SCARA de 4 ejes</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-brooks-robot-colaborativo-pf30-ma-0040x-12" target="_blank">Comprar</a>
            </div>

                        <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/IFC300.jpg" alt="IFC300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IFC300</p>
                <p>Paquete de cables de interfaz para los registradores de datos de la serie LyoTemp, TransiTemp y Cryo-Temp.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IFC300_p_4306.html" target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/SyFwCW6Qn3M?si=sMau_U2BRmStjA_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/xR4v5kla9qU?si=fiFXCJb8gFZ-l5gV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/NcxKiQ5AWoM?si=MnLJahq6bBzEvVel" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
<section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/monitoreo-de-procesos-de-liofilizacion-farmaceutica-control-total-para-garantizar-la-calidad-del-medicamento/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/12/Monitoreo-de-Procesos-de-Liofilizacion-Farmaceutica-Control-Total-para-Garantizar-la-Calidad-del-Med-2048x1024.webp" alt="Monitoreo de Procesos de Liofilización Farmacéutica: Control Total para Garantizar la Calidad del Medicamento" width="100%">Monitoreo de Procesos de Liofilización Farmacéutica: Control Total para Garantizar la Calidad del Medicamento
                </a></div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/maximizando-la-eficiencia-las-limitaciones-del-amr-modelo-c2-como-guia-para-una-implementacion-impecable/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/12/PartPorter-Muskoka-2.jpg" alt="Comprender las limitaciones conocidas del AMR Modelo C2" width="100%">Comprender las limitaciones conocidas del AMR Modelo C2
                    </a></div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/sensores-temperatura-como-elegir-termopares-rtd-termistores/" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/06/Sensores-de-temperatura-Logicbus.jpg" alt="Sensores de temperatura: Cómo elegir entre termopares, RTD y termistores" width="100%">Sensores de temperatura: Cómo elegir entre termopares, RTD y termistores
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