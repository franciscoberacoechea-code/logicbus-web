<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción</title>
    <meta name="description"
        content="Monitoreo remoto de procesos de fermentación, cocción y pasteurización con sensores precisos, trazabilidad ISO 17025 y comunicación inalámbrica mediante Madgetech Cloud. Garantiza inocuidad alimentaria, control de temperatura y cumplimiento normativo en tiempo real.">
    <meta name="keywords"
        content="monitoreo remoto, fermentación, pasteurización, cocción, control de temperatura, Madgetech Cloud, RFC1000 Cloud Relay, RFOT, registradores de datos, trazabilidad ISO 17025, monitoreo inalámbrico, control de procesos alimentarios, validación térmica, seguridad alimentaria, destrucción de microorganismos, cumplimiento normativo, control de acceso, análisis de datos, reportes de temperatura, sensores industriales, trazabilidad por lote, industria alimentaria, procesos térmicos, monitoreo de calidad">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- Estilos Necesarios-->
    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="../libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="../libreria/estilos.css">'; ?>
    <?php echo isset($css_bundle) ? $css_bundle : ''; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("../libreria/header.view.php"); ?>

    <!--RUTAS-->
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0"> Monitoreo Remoto de Procesos de Fermentación,
                Pasteurización o Cocción
            </h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion.webp" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../tri-tronics"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/tri-tronics.webp" alt="tri-tronics" width="200px"></a>
                    <a href="../fatek"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/fatek.webp" alt="fatek" width="200px"></a>
                    <a href="../futek"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/futek.webp" alt="futek" width="200px"></a>
                    <a href="../rechner-sensors"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/rechner-sensors.webp" alt="rechner-sensors"
                            width="200px"></a>
                    <a href="../3onedata"><img loading="lazy" class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <p class="light-black text-justify"> En aplicaciones de procesamiento de alimentos como cocción, 
                    pasteurización o esterilización, es esencial garantizar que el calor penetre correctamente hasta 
                    el núcleo del producto. Para validar que se alcancen y mantengan las temperaturas objetivo durante 
                    el tiempo requerido, las mediciones internas precisas y estables son críticas. Estas mediciones 
                    aseguran la inocuidad alimentaria al confirmar la destrucción de microorganismos dañinos y prevenir 
                    subprocesos que podrían causar contaminación. Además, el monitoreo preciso de temperatura ayuda a 
                    preservar la calidad del producto, evitando sobreprocesamiento que afecte textura, sabor o contenido nutricional.

                </p>
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black text-justify">
                    <li><b>Configuración de Intervalos de Muestreo y Condiciones de Inicio</b> <br>
                        El usuario define la frecuencia de registro de datos del <a href="https://tienda.logicbus.com.mx/RFOT-12_p_19416.html">RFOT</a>
                        y las condiciones de inicio (hora específica o evento determinado). Se asignan identificadores de lote para organizar cada conjunto 
                        de datos, garantizando trazabilidad. Todo se configura mediante <a href="https://cloud.madgetech.com/login">Madgetech Cloud</a>, 
                        que asegura control de acceso y cumplimiento normativo.
                    </li>
                    <li><b>Inserción y Monitoreo de Producto</b> <br>
                        El registrador se coloca en el producto o ambiente a monitorear. La ubicación correcta del sensor garantiza captura consistente
                        reflejando las condiciones reales del proceso.
                    </li>
                    <li class="mb-3"><b>Procesos de Cocción, Fermentación o Pasteurización</b> <br>
                        Durante la operación, <a href="https://tienda.logicbus.com.mx/RFC1000-Cloud-Relay_p_19399.html">RFC1000</a> Cloud Relay gestiona 
                        la comunicación inalámbrica, recibiendo datos en tiempo real a través de rangos significativos, sin interferir con la producción.
                    </li>
                    <li class="mb-3"><b>Registros con trazabilidad</b> <br>
                        Todos los registradores tienen certificación ISO 17025 de calibración, garantizando trazabilidad y confiabilidad.
                    </li>
                </ol>
                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul class="light-black text-justify">
                    <li class="mb-3"><b>Supervisión inalámbrica sin interferir con el proceso.</b>
                    </li>
                    <li class="mb-3"><b>Lecturas precisas en puntos críticos.</b>
                    </li>
                    <li class="mb-3"><b>Cumplimiento normativo y trazabilidad completa.</b>
                    </li>
                    <li class="mb-3"><b>Control centralizado con gestión segura de usuarios y auditoría.</b>
                    </li>
                </ul>
                <a class="button text-center button-circle-orange" href="#contacto">Contáctanos</a>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
            <div class="row justify-content-center">
                <div
                    class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/09/RFC1000CloudRelay.jpg" alt="RFC1000 Cloud Relay"
                        width="150px">
                    <p class="font-weight-bold mt-2 mb-0">RFC1000 Cloud Relay</p>
                    <p>
                        El RFC1000 Cloud Relay es un dispositivo compacto y versátil que conecta los registradores 
                        inalámbricos MadgeTech directamente a la nube, eliminando la necesidad de una PC central.
                    </p>
                    <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFC1000-Cloud-Relay_p_19399.html"
                        target="_blank">Comprar</a>
                </div>
                <div
                    class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                    <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/09/RFOT-12.jpg"
                        alt="RFOT-12" width="150px">
                    <p class="font-weight-bold mt-2 mb-0">RFOT-12</p>
                    <p> FOT es el estándar de la industria para los procesadores de carne. Este registrador inalámbrico de datos de temperatura 
                        de la carne brinda a los usuarios monitoreo en tiempo real • RFOT-12: sonda de 304 mm (12,0 pulg.)
                    </p>
                    <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFOT-12_p_19416.html"
                        target="_blank">Comprar</a>
                </div>

            </div>
        </section>

        <section class="container-fluid py-5">
            <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

            <div class="my-5"
                style="display: flex; justify-content: center; gap: 20px; flex-wrap: nowrap;">

                <!-- VIDEO 1 -->
                <div style="width: 300px; height: 170px; overflow: hidden;">
                    <iframe 
                        src="https://www.youtube.com/embed/o99PB80JVrA?si=P5Bh3hC0qVrE7qR-"
                        style="width: 100%; height: 100%;"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- VIDEO 2 -->
                <div style="width: 300px; height: 170px; overflow: hidden;">
                    <iframe 
                        src="https://www.youtube.com/embed/FYkMHDGHXQE?si=k5Y3m-QesIIGlsSP"
                        style="width: 100%; height: 100%;"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- VIDEO 3 -->
                <div style="width: 300px; height: 170px; overflow: hidden;">
                    <iframe 
                        src="https://www.youtube.com/embed/lV6ge8h0OwQ?si=wMIDBFaBQWmSlaN3"
                        style="width: 100%; height: 100%;"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/10/Monitoreo-Remoto-de-Procesos-de-Fermentacion-Pasteurizacion-o-Coccion-scaled.jpg"
                        alt="Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción" width="100%">
                    Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/madgetech-cloud/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2021/03/MadgeTech-Cloud.png"
                        alt="MadgeTech Cloud ofrece configuración, conveniencia y cumplimiento"
                        width="100%">
                    MadgeTech Cloud ofrece configuración, conveniencia y cumplimiento
                </a>
            </div>
            <div class="col-12 col-md-3 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/control-total-en-procesos-termicos-de-alimentos/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/12/control-termico-de-alimentos-1.png"
                        alt="Control total en procesos térmicos de alimentos."
                        width="100%">
                    Control total en procesos térmicos de alimentos.
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
                        <img loading="lazy" src="img/industrias/academia.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img loading="lazy" src="img/industrias/agricultura.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img loading="lazy" src="img/industrias/alimentosybebidas.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img loading="lazy" src="img/industrias/automotriz.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img loading="lazy" src="img/industrias/construccion.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Construcción">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Construcción</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="oem">
                        <img loading="lazy" src="img/industrias/oem.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="OEM">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">OEM</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="ensayos-de-materiales">
                        <img loading="lazy" src="img/industrias/materiales.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img loading="lazy" src="img/industrias/farmaceutica.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img loading="lazy" src="img/industrias/robots.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img loading="lazy" src="img/industrias/transporte.webp" class="card-img"
                            style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DIAGRAMA -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"
                        alt=" Control de Llenado de Botellas o Contenedores de Líquidos" width="100%">
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
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
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