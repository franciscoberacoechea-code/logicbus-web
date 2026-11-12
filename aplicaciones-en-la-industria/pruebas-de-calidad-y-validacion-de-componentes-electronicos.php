<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de Calidad y Validación de Componentes Electrónicos | Logicbus</title>
    <meta name="description" content="Esta aplicación asegura que los componentes electrónicos cumplan con los estándares de calidad necesarios antes de integrarse en productos finales.">
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
                <li class="breadcrumb-item active" aria-current="page">Pruebas de Calidad y Validación de Componentes Electrónicos</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Pruebas de Calidad y Validación de Componentes Electrónicos" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Pruebas de Calidad y Validación de Componentes Electrónicos" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Pruebas de Calidad y Validación de Componentes Electrónicos</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Pruebas-de-Calidad-y-Validacion-de-Componentes-Electronicos.webp" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../brooks-automation.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/brooks.webp" alt="Brooks Automation" width="200px"></a>
                    <a href="../futek.php"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Tri-tronics" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Esta aplicación asegura que los componentes electrónicos cumplan con los estándares de calidad necesarios antes de integrarse en productos finales. A través de pruebas mecánicas, eléctricas y funcionales, es posible identificar defectos o irregularidades que puedan comprometer la fiabilidad del producto.</p>

                <h2 class="paragraph text-center light-black font-weight-bold">¿Cómo funciona?</h2>
                <ol class="light-black">
                    <li><b>Preparación de los Componentes para Pruebas</b>: Los componentes electrónicos son posicionados con precisión en dispositivos de medición utilizando un <a class="link-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-precise-automation-robot-colaborativo" target="_blank" rel="noopener noreferrer">brazo colaborativo Precise Flex 400</a> de la marca Brooks, es ideal en aplicaciones en las cuales se requiere de gran precisión y exactitud, con una capacidad máxima de carga de 0.5 Kg, este robot colaborativo asegura consistencia y precisión en las pruebas.</li>
                    <li><b>Medición de Propiedades Mecánicas</b>: Se emplean celdas de carga FUTEK de tipo compresión, como las celdas de carga de dona <a class="link-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona" target="_blank" rel="noopener noreferrer">LTH300</a> para evaluar la resistencia mecánica en conectores de tornillo y terminales. Asimismo, se utilizan módulos de monitoreo de potencia como el Display Portátil <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH03571_p_6818.html" target="_blank" rel="noopener noreferrer">IHH500</a> de Futek para medir la fuerza aplicada en los componentes activos.</li>
                    <li><b>Adquisición y Centralización de Datos</b>: Los datos recolectados se concentran en el Display de Panel de Futek <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank" rel="noopener noreferrer">IPM650</a>, un dispositivo montable que unifica las señales para facilitar el análisis integral de las mediciones adquiridas en su integración con celdas de carga.</li>
                    <li><b>Supervisión y Control</b>: Un Panel PC permite monitorear en tiempo real las mediciones y alertas, mientras que ajustes manuales pueden realizarse con un <a class="link-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-teclados-industriales-layout-us-teclados-metalicos" target="_blank" rel="noopener noreferrer">teclado industrial de Davo</a>, diseñado para entornos de laboratorio.</li>
                    <li><b>Generación de Reportes y Evaluación</b>: El software <a class="link-orange" href="https://tienda.logicbus.com.mx/FSH04877_p_36733.html" target="_blank" rel="noopener noreferrer">SENSIT</a> de Futek adquiere, analiza y almacena los datos recibidos lo cual facilita la evaluación del cumplimiento de estándares de calidad mediante el desarrollo. Esto se logra mediante la generación de cálculos, gráficas y configuración de eventos y alarmas.</li>
                </ol>
                <h2 class="paragraph text-center light-black font-weight-bold">Ventajas de la Aplicación:</h2>
                <ul class="light-black">
                    <li>Incrementa la fiabilidad del producto final al detectar defectos en etapas tempranas.</li>
                    <li>Mejora la precisión y consistencia en las pruebas al automatizar los procesos.</li>
                    <li>Facilita la documentación y trazabilidad de resultados para auditorías de calidad.</li>
                </ul>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/255/PF30-MA-0040X-4.jpg" alt="Robots Colaborativos" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Robots Colaborativos</p>
                <p>Brazo colaborativo Precise Flex 400</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-precise-automation-robot-colaborativo" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LTH300.jpg" alt="LTH350" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LTH350</p>
                <p>Celda de carga de orificio pasante o tipo dona</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/fsh03571.jpg" alt="IHH500" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IHH500</p>
                <p>Pantalla digital portátil</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03571_p_6818.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/fsh03633.jpg" alt="IPM650" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IPM650</p>
                <p>Pantalla de montaje en panel</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04877.jpg" alt="FSH04877" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04877</p>
                <p>Software de prueba y medición SENSIT®.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04877_p_36733.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/LBD-2988603-1.jpg" alt="D-87PB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Teclado Metálico</p>
                <p>Teclado industrial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-teclados-industriales-layout-us-teclados-metalicos" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/rc1uvanTcTg?si=0mNtqdQ30PEnAWY1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/qjQcF59wlqM?si=0aBJueMeAPtQeERP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/al6aXxsQzFs?si=MKVADN2YN5itlm4R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/uS1SJ9ujjx0?si=g7YSvIVPJwABw0MJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5 text-center">
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/automatizacion-en-lineas-de-ensamblaje-electronico/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/02/Automatizacion-en-Lineas-de-Ensamblaje-Electronico.png" alt="Pruebas de Calidad y Validación de Componentes Electrónicos" width="100%">Pruebas de Calidad y Validación de Componentes Electrónicos
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/nanotemp125-la-nueva-frontera-en-registro-de-temperatura-compacto/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/NanoTemp125-La-Nueva-Frontera-en-Registro-de-Temperatura-Compacto.png" alt="NanoTemp125: La Nueva Frontera en Registro de Temperatura Compacto" width="100%">NanoTemp125: La Nueva Frontera en Registro de Temperatura Compacto
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/light101a-de-madgetech-revolucionando-el-monitoreo-de-fotoperiodos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/Light101A-de-MadgeTech-Revolucionando-el-Monitoreo-de-Fotoperiodos.png" alt="Light101A de MadgeTech: Revolucionando el Monitoreo de Fotoperíodos" width="100%">Light101A de MadgeTech: Revolucionando el Monitoreo de Fotoperíodos
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a class="blue link-orange paragraph" href="https://www.logicbus.com.mx/blog/deteccion-de-fallos-en-equipos-medicos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/01/Deteccion-de-Fallos-en-Equipos-Medicos-Garantizando-la-Continuidad-Operativa-scaled.png" alt="Detección de Fallos en Equipos Médicos" width="100%">Detección de Fallos en Equipos Médicos
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