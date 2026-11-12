<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores de Prueba para Choque | Logicbus</title>
    <meta name="description" content="Un maniquí de pruebas de choque, comúnmente conocido como maniquí de pruebas antropomórfico (ATD, por sus siglas en inglés)... ">
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
                <li class="breadcrumb-item active" aria-current="page">Sensores de Prueba para Choque</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Sensores de Prueba para Choque" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Sensores de Prueba para Choque" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Sensores de Prueba para Choque</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/choque.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black font-weight-bold">¿Cómo se utilizan los sensores de fuerza y par en los maniquíes de pruebas de choque?</p>
                <p class="light-black">Un maniquí de pruebas de choque, comúnmente conocido como maniquí de pruebas antropomórfico (ATD, por sus siglas en inglés), es un dispositivo de prueba automotriz de alta precisión que se utiliza para medir el potencial de lesiones humanas en choques de vehículos simulados. Simula las dimensiones, las proporciones de peso y las articulaciones de las articulaciones y las extremidades de un cuerpo humano durante una colisión de tráfico.</p>

                <p class="light-black">Los ATD están instrumentados con sensores de maniquí de pruebas de choque montados en las articulaciones y las extremidades del cuerpo principal. También están equipados con un sistema de adquisición de datos capaz de registrar la velocidad del impacto, el desplazamiento del pecho, las tasas de desaceleración y las fuerzas de alta frecuencia ejercidas sobre el maniquí de pruebas en varias instancias. Por ejemplo, el sensor en el torso de un maniquí de pruebas de choque registra la magnitud y la dirección de la fuerza neta que actúa sobre el maniquí. Los datos recopilados luego son utilizados por investigadores e ingenieros de pruebas para predecir lesiones en un choque y desarrollar vehículos más seguros y ergonómicos.</p>

                <p class="light-black">Antes del desarrollo de los maniquíes de pruebas de choque, se utilizaban cadáveres, animales y humanos vivos para probar las características de seguridad. A medida que los ingenieros aprendieron a equipar maniquíes con transductores para medir fuerza, aceleración, impacto y desplazamiento, comprendieron cómo podían predecir lesiones como fracturas de costillas, compresiones torácicas, conmociones cerebrales, huesos rotos, lesiones en músculos y tejidos blandos.</p>

                <p class="light-black">Un maniquí de pruebas de choque moderno tiene más de 200 sensores de fuerza, torsión y aceleración montados por todo el cuerpo.</p>


                <p class="light-black font-weight-bold">¿Qué tipo de sensores se utilizan en los maniquíes de pruebas de choque?
                <p class="light-black">Se emplean células de carga y sensores de fuerza y torsión multiaxiales en todo el cuerpo del maniquí de pruebas de choque. Están ubicados en la parte inferior del cuello, la espalda, los hombros, el abdomen, los nudillos de las manos, el pubis, la zona lumbar y el fémur.</p>

                <p class="light-black">Los sensores multiaxiales de fuerza y torsión miden simultáneamente la magnitud y la dirección de las fuerzas y las torsión en hasta 6 grados de libertad (DoF): tres fuerzas axiales perpendiculares (Fx, Fy, Fz) y torsión alrededor de estos mismos ejes (Mx, My, Mz). Los sensores multiaxiales convierten la fuerza y la torsión en diferentes partes del cuerpo durante un choque en señales eléctricas mensurables.</p>

                <p class="light-black">FUTEK ofrece una amplia selección de sensores de fuerza-torque listos para usar que son muy adecuados para aplicaciones de pruebas de choque. Los equipos de ingeniería multidisciplinarios internos de FUTEK también desarrollan sensores personalizados de vanguardia con geometrías, capacidades de rendimiento y salidas únicas para adaptarse a los requisitos de su aplicación. Los sensores de prueba de choque de fuerza-torque de FUTEK cumplen con los procedimientos de prueba de choque y requisitos de seguridad FMVSS 208 de la NHTSA.</p>
            </div>
            <div class="container text-justify">
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3">Cuello inferior: transductor de fuerza de 3 grados de libertad de la serie QMA</li>
                    <li class="mb-3">Parte posterior: Transductor de fuerza de 3 grados de libertad de la serie QMA</li>
                    <li class="mb-3">Hombro: Transductor de fuerza de 3 DoF de la serie QMA</li>
                    <li class="mb-3">Abdomen: Célula de carga de la serie QLA</li>
                    <li class="mb-3">Nudillos: sensor de fuerza nano QLA414</li>
                    <li class="mb-3">Pubis: Célula de carga de la serie QLA</li>
                    <li class="mb-3">Lumbar: Transductor de fuerza de 3 grados de libertad de la serie QMA</li>
                    <li class="mb-3">Fémur: Transductor de fuerza DoF QMA Serie 6</li>
                </ol>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://www.logicbus.com.mx/imagenes/36/qma-series-futek.jpg" alt="Serie MAU300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Celdas de carga</p>
                <p>Celdas de carga personalizadas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-celdas-de-carga-personalizadas" target="_blank">Comprar</a>
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