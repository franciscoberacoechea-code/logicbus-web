<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Perfiles Térmicos en Hornos de Curado y Secado | Logicbus</title>
    <meta name="description"
        content="Esta aplicación valida que los productos (ej. piezas pintadas, resinas compuestas, PCBs) pasen por el perfil de temperatura correcto (rampa, sostenimiento, enfriamiento) dentro de un horno de curado o secado...">
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
                <li class="breadcrumb-item active" aria-current="page">Validación de Perfiles Térmicos en Hornos de
                    Curado y Secado</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
            alt="Validación de Perfiles Térmicos en Hornos de Curado y Secado" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile"
            alt="Validación de Perfiles Térmicos en Hornos de Curado y Secado" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Validación de Perfiles Térmicos en Hornos de Curado y
                Secado</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Validacion-de-Perfiles-Termicos-en-Hornos-de-Curado-y-Secado.png" alt="Diagrama"
                    width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../madgetech"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/madgetech.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"
                            alt="Futek" width="200px"></a>

                    <a href="../calex"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/calex.webp"
                            alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">Esta aplicación valida que los productos (ej. piezas pintadas, resinas
                    compuestas, PCBs) pasen por el perfil de temperatura correcto (rampa, sostenimiento, enfriamiento)
                    dentro de un horno de curado o secado. Esto es crítico para asegurar la adhesión de la pintura, la
                    integridad estructural del material o el correcto soldado de componentes.
                </p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Registro de Datos "Dentro del Proceso":</b> Un registrador de datos (data
                        logger) de
                        alta temperatura <a href="https://tienda.logicbus.com.mx/TCTempX4_p_25318.html">TCTempX4</a> de
                        <a href="https://tienda.logicbus.com.mx/madgetech">MADGETECH</a> se coloca dentro de una barrera
                        térmica <a href="https://tienda.logicbus.com.mx/ThermoVaultX4_p_25778.html">ThermoVaultX</a> de
                        <a href="https://tienda.logicbus.com.mx/madgetech">MADGETECH</a> diseñada para soportar las
                        condiciones extremas del horno.
                    </li>

                    <li class="mb-3"><b>Medición del Producto:</b> Múltiples sondas de termopar tipo K conectadas al
                        logger se
                        colocan en diferentes puntos del producto (superficie, núcleo, bordes) para medir el perfil
                        térmico real que experimenta la pieza.<br>Para una medición sin contacto directo el sensor
                        C151HT-0 de la familia PyroCouple de Calex es una opción ideal.
                    </li>

                    <li class="mb-3"><b>Recorrido del Proceso:</b> El conjunto completo (producto, logger, barrera)
                        viaja a
                        través del horno en la banda transportadora, registrando la temperatura cada segundo.</li>

                    <li class="mb-3"><b>Análisis y Reporte:</b> Al salir del horno, con la interfaz <a
                            href="https://tienda.logicbus.com.mx/IFC400_p_4307.html">IFC400</a> el logger se conecta
                        a un PC industrial robusto (Box PC) <a
                            href="https://tienda.logicbus.com.mx/TBOX-2T15_p_35176.html">TBOX-2T15</a> de <a
                            href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a>. El
                        software <a href="https://www.logicbus.com.mx/madgetech-4-standard">MadgeTech 4</a> descarga los
                        datos y genera un reporte detallado con gráficas, validando si el perfil cumplió con las
                        especificaciones.<br>El Pyro Couple se conecta al PLC <a
                            href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html">FBS-10MAJ2-AC</a> que puede
                        leer la señal de
                        salida 4-20 mAal integrar el tablero de expansión <a
                            href="https://tienda.logicbus.com.mx/FBS-B2A1D_p_3423.html">FBs-B2A1D</a>
                    </li>

                    <li class="mb-3">Interfaz de Operador: El PC <a
                            href="https://tienda.logicbus.com.mx/taicenn">TAICENN</a> (que puede ser "fanless") está
                        en el piso de
                        planta, permitiendo al ingeniero de calidad realizar la descarga y el análisis inmediatamente
                        después de la prueba.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Valida lo que el producto realmente experimentó, no solo la temperatura del aire
                            del horno.</b>

                    </li>

                    <li class="mb-3"><b>Asegura la calidad y previene fallas de curado, delaminación o pintura
                            defectuosa.
                        </b>

                    </li>

                    <li class="mb-3"><b>Sistema robusto (MADGETECH) diseñado para sobrevivir a procesos térmicos
                            extremos.
                        </b>

                    </li>

                    <li class="mb-3"><b>Genera reportes de cumplimiento y validación para auditorías de calidad
                            (ISO).</b>

                    </li>

                    <li class="mb-3"><b>Permite optimizar los ciclos del horno para ahorrar energía, basado en datos
                            reales.</b>

                    </li>

                </ul>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/09/TCTempX4PN.jpg" alt="TCTempX4" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TCTempX4</p>
                <p>Registrador de datos de termopar de 4 canales, cable USB-A a micro USB, adaptador de corriente
                    universal</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TCTempX4_p_25318.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/ThermoVaultX4.jpg" alt="ThermoVaultX4"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">ThermoVaultX4</p>
                <p>Registrador de temperatura del horno de 4 canales, termopares tipo K de 72 pulgadas, cable USB-A a
                    micro USB, adaptador de corriente universal. Capaz de soportar temperaturas extremas de hasta 350 ºC
                    por hasta 25 minutos cuando está debidamente sellado.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ThermoVaultX4_p_25778.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/09/ifc400.jpg" alt="IFC400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IFC400</p>
                <p>Paquete de cable interfaz para el registrador HitTemp140</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IFC400_p_4307.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/290/tbox-2t15-2.jpg" alt="TBOX-2T15"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">TBOX-2T15</p>
                <p>TAICENN TBOX-2T15 Rugged Box PC cuenta con la tecnología del procesador Intel de 11.ª generación
                    Tiger Lake UP3 Core i3-1115G4 de doble núcleo, que tiene una relación costo-rendimiento muy alta
                    para aplicaciones de automatización industrial. </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TBOX-2T15_p_35176.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBS-10MAJ2-AC.jpg" alt="FBS-10MAJ2-AC" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-10MAJ2-AC</p>
                <p>PLC Industrial Básico con 6 entradas digitales/ 4 salidas de transistor PNP/ puerto de comunicación
                    RS-232. Alimentacion de 100~240VAC y reloj de tiempo real integrado.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-10MAJ2-AC_p_14628.html"
                    target="_blank">Comprar</a>
            </div>
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/FBS-10MAJ2-AC.jpg" alt="FBS-B2A1D" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FBS-B2A1D</p>
                <p>Tarjeta de Expansión de Entradas y Salidas Analógicas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FBS-B2A1D_p_3423.html"
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
                    <iframe src="https://www.youtube.com/embed/1DbOf8rhyhU?si=cfYC97PoNpPUWeel"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/k5UtW1x4IhA?si=ehC1JkvX7FY-FYja"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/8P2krBsMr0Y?si=Qq632kC0U3yeMtzZ"
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

            <div class="col-12 col-md-4 text-center mb-3" >

                <a class="blue link-orange font-weight-bold"href="https://www.logicbus.com.mx/blog/validacion-precisa-de-perfiles-termicos-en-hornos-de-curado-y-secado/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/Validacion-Precisa-de-Perfiles-Termicos-en-Hornos-de-Curado-y-Secado-scaled.jpg"
                        alt="" width="100%">Validación Precisa de Perfiles Térmicos en Hornos de Curado y Secado
                </a>
            </div>

            <div class="col-12 col-md-4 text-center mb-3">

                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-madgetech-hitemp140/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Asegurando-la-cadena-de-frio-en-logistica-alimentaria-con-dataloggers-MadgeTech-HiTemp140-scaled.jpg"
                        alt="" width="100%">Asegurando la cadena de frío en logística alimentaria con dataloggers MadgeTech HiTemp140
                </a>
            </div>

            <div class="col-12 col-md-4 text-center mb-3">

                <a class="blue link-orange font-weight-bold"href="https://www.logicbus.com.mx/blog/el-cerebro-de-la-vision-artificial-requerimientos-clave-de-un-box-pc-para-multiples-camaras/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/El-Cerebro-de-la-Vision-Artificial-Requerimientos-Clave-de-un-Box-PC-para-Multiples-Camaras-scaled.jpg"
                        alt="" width="100%">El Cerebro de la Visión Artificial: Requerimientos Clave de un Box PC para Múltiples Cámaras
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