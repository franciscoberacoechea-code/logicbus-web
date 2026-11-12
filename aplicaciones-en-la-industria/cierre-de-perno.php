<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de Perno | Logicbus</title>
    <meta name="description" content="La fuerza de sujeción de pernos se refiere a la fuerza que se ejerce sobre un perno o sujetador para mantener unidos dos o más objetos.">
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
                <li class="breadcrumb-item active" aria-current="page">Cierre de Perno</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Cierre de Perno" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Cierre de Perno" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Cierre de Perno</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/perno.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black">La fuerza de sujeción de pernos se refiere a la fuerza que se ejerce sobre un perno o sujetador para mantener unidos dos o más objetos. Esta fuerza es la carga de compresión sobre los elementos de unión que resulta de la fuerza de tracción desarrollada en un perno apretado. En términos simples, la fuerza de sujeción de pernos es lo que mantiene unida una unión atornillada, evitando que se separen. Esta fuerza es fundamental para la seguridad y estabilidad de muchas estructuras y máquinas, incluidos puentes, edificios y vehículos.</p>

                <p class="light-black font-weight-bold">¿Por qué es importante medir la fuerza de sujeción de pernos?</p>
                <p class="light-black">Al medir la fuerza de sujeción, uno puede estar seguro de que se ejercieron fuerzas de precarga adecuadas sobre la unión atornillada para que pueda soportar mejor las cargas de servicio variables. Una fuerza de sujeción imprecisa o insuficiente puede provocar fallas estructurales, lo que puede tener consecuencias catastróficas. Por ejemplo, si un perno de un puente o edificio no se aprieta lo suficiente, la estructura puede colapsar, causando daños graves y pérdida de vidas.</p>

                <p class="light-black">Medir la fuerza de sujeción de un perno también permite realizar un mantenimiento y una reparación adecuados de máquinas y estructuras. Con el tiempo, los pernos pueden aflojarse o estirarse, lo que hace que la fuerza de sujeción disminuya. Las mediciones regulares de la fuerza de sujeción del perno pueden alertar a los ingenieros y al personal de mantenimiento sobre posibles problemas y ayudar a prevenir fallas.</p>
                <p class="light-black font-weight-bold">¿Cómo se pueden utilizar las celdas de carga en esta aplicación?</p>
                <p class="light-black">Hay varios factores a considerar al aplicar sensores de celdas de carga para medir la fuerza de sujeción de un perno . Primero, la celda de carga debe estar correctamente ensamblada en los elementos de fijación para garantizar mediciones precisas. La celda de carga debe montarse de una manera que garantice que no esté sujeta a fuerzas externas o vibraciones que puedan afectar la medición de la carga del perno. Esto requiere una especificación de geometría de celda de carga adecuada que coincida con los requisitos mecánicos del perno y la tuerca. Además, la celda de carga debe montarse para permitir un fácil acceso al perno o sujetador que se está midiendo para mantenimiento y reemplazo futuros.</p>
                <p class="light-black">En segundo lugar, la celda de carga debe calibrarse correctamente para garantizar mediciones precisas. La calibración generalmente se realiza utilizando un peso o fuerza conocidos, y la salida de la celda de carga se ajusta para que coincida con el valor conocido. FUTEK ofrece un laboratorio de calibración de carga y torque A2LA acreditado para garantizar que nuestros productos se envíen con la calibración adecuada.</p>
                <p class="light-black">Por último, pero no por ello menos importante, es importante tener en cuenta los efectos de la fricción de la rosca y la fricción debajo de la cabeza cuando se utilizan celdas de carga para medir la fuerza de sujeción de un perno. Estas fuerzas de fricción pueden afectar significativamente la precisión de la medición de la carga del perno y deben tenerse en cuenta adecuadamente al interpretar los resultados de la celda de carga.</p>
            </div>
            <div class="container text-justify">
                <p class="light-black">Las celdas de carga tipo donut/de orificio pasante de FUTEK son fundamentales para medir el apriete de la carga directamente. Nuestra serie tipo donut/de orificio pasante (LTH) ofrece una variedad de capacidades y tamaños de diámetro interno, lo que la hace ideal para aplicaciones de fijación de pernos.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3">La serie LTH de FUTEK ofrece varias celdas de carga en miniatura adecuadas para esta forma de medición y prueba de fuerza.</li>
                    <li class="mb-3">En la aplicación anterior, la celda de carga de la serie LTH de FUTEK se instala entre la cabeza del perno y la tuerca, donde puede medir la carga a medida que se aplica el par de torsión. Este es uno de los mejores métodos para medir la fuerza de sujeción.</li>
                    <li class="mb-3">Nuestros ingenieros recomiendan incluir una arandela endurecida entre la celda de carga y la tuerca para evitar una alta fricción y mantener la planitud en el orificio pasante durante el apriete y aflojamiento.</li>
                    <li class="mb-3">A medida que el operador comienza a apretar el perno, la celda de carga medirá la fuerza de sujeción del perno aplicada (medición de carga del perno).</li>
                    <li class="mb-3">Estos datos se pueden monitorear durante las pruebas a través de la pantalla de montaje en panel IPM650 o la pantalla digital portátil inteligente IHH500 de FUTEK; o se pueden transmitir a una computadora a través de las soluciones USB de FUTEK.</li>
                    <li class="mb-3">Los operadores e ingenieros pueden luego revisar estos datos para verificar si han alcanzado o no la tensión o fuerza de sujeción deseada en el sujetador, perno o perno a través del software de prueba y medición SENSIT™.</li>
                    <li class="mb-3">FUTEK creó una calculadora de torque de pernos en línea para ayudarlo mejor.</li>
                    <li class="mb-3">En general, los beneficios de instalar celdas de carga de tipo Thru Hole en su proceso de ensamblaje incluyen: evitar daños en las superficies de apoyo, disminución de problemas de apriete de pernos grandes, facilidad para aflojar y mejoras simultáneas en el apriete. ¿Aún tiene curiosidad sobre cómo medir la fuerza de sujeción de los pernos? Puede leer más en nuestro informe técnico sobre auditoría de precarga de pernos.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LTH300.jpg" alt="Serie LTH" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LTH</p>
                <p>Celda de carga de tipo dona</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-dona" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04720.jpg" alt="USB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">USB</p>
                <p>Módulo USB</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04453.jpg" alt="IAA105" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IAA105</p>
                <p>Amplificador de voltaje analógico configurable digitalmente</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04453_p_36735.html" target="_blank">Comprar</a>
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