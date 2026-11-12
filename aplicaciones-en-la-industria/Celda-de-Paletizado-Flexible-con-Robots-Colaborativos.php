<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celda de Paletizado Flexible con Robots Colaborativos (Cobots) | Logicbus</title>
    <meta name="description"
        content="Rompiendo las jaulas de seguridad en el fin de línea. Esta aplicación utiliza cobots que pueden trabajar codo a codo con los humanos, integrando visión artificial para manejar cajas de diferentes tamaños.">
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
                <li class="breadcrumb-item active" aria-current="page">Celda de Paletizado Flexible con Robots Colaborativos (Cobots)</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Celda de Paletizado Flexible con Robots Colaborativos (Cobots)</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Celda-de-Paletizado-Flexible-con-Robots-Colaborativos.png" alt="Celda de Paletizado" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../robots-siasun"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/siasun.webp"
                            alt="Siasun" width="150px"></a>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                            alt="Futek" width="150px"></a>
                    <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"
                            alt="Taicenn" width="150px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>Rompiendo las Jaulas de Seguridad en el Fin de Línea:</b> El paletizado de cajas es el trabajo más pesado y repetitivo. Los robots industriales tradicionales requieren grandes jaulas de seguridad que ocupan espacio valioso. Esta aplicación utiliza cobots que pueden trabajar codo a codo con los humanos, integrando visión artificial para manejar cajas de diferentes tamaños (Mix-SKU).
                </p>

                <p class="text-center light-black font-weight-bold">Cómo Funciona</p>

                <ol class="light-black">
                    <li class="mb-3"><b>El Brazo Robótico:</b> Se instala un Robot Colaborativo modelo <a href="https://tienda.logicbus.com.mx/GCR25-1800_p_36091.html" target="_blank" class="blue link-orange font-weight-bold">GCR25-1800</a> de la marca Siasun al final de la línea transportadora. Sus articulaciones están diseñadas para detenerse de forma segura si hacen contacto con un trabajador.
                    </li>
                    <li class="mb-3"><b>Sensibilidad de Agarre:</b> En la herramienta del brazo (Gripper) se instala una Celda de carga tipo pancake modelo <a href="https://tienda.logicbus.com.mx/FSH04341_p_36071.html" target="_blank" class="blue link-orange font-weight-bold">FSH04341</a> de la marca Futek, que permite al robot aplicar solo la fuerza necesaria para levantar la caja sin aplastarla, vital si el empaque es frágil.
                    </li>
                    <li class="mb-3"><b>Identificación Inteligente:</b> Un lector de códigos se monta sobre la banda. Cuando llega una caja, el escáner <a href="https://tienda.logicbus.com.mx/IG820_p_19494.html" target="_blank" class="blue link-orange font-weight-bold">IG820</a> lee su tamaño y código de barras, diciéndole al Cobot en qué pallet específico (ej. "Pallet A" o "Pallet B") debe estibarla.
                    </li>
                    <li class="mb-3"><b>Interfaz de Operador:</b> El jefe de línea sabrá en tiempo real la cantidad de cajas listas y podrá hacer cambios de modelo y cambios de estiba (mosaicos) de forma intuitiva desde un Monitor táctil modelo <a href="https://tienda.logicbus.com.mx/TPC-DCS121A1_p_33962.html" target="_blank" class="blue link-orange font-weight-bold">TPC-DCS121A1</a> de la marca Taicenn, sin necesidad de saber programar código complejo.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul>
                    <li class="mb-3 light-black">Permite ahorrar un 30% del espacio en el suelo al no necesitar cercas perimetrales, gracias al Robot Colaborativo.</li>
                    <li class="mb-3 light-black">El uso de escáner flexibiliza la línea, permitiendo que lleguen cajas mezcladas y el sistema las clasifique sin equivocarse.</li>
                    <li class="mb-3 light-black">Rápido retorno de inversión al reasignar a los operarios de trabajos ergonómicamente peligrosos a tareas de mayor valor.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/254/gcr25-1800.png" alt="GCR25-1800" width="150px">
                <p class="font-weight-bold mt-2 mb-0">GCR25-1800</p>
                <p>Robot Colaborativo Siasun con alcance de 1800mm y carga de 25kg, ideal para tareas de paletizado.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/GCR25-1800_p_36091.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04341.jpg" alt="FSH04341" width="150px">
                <p class="font-weight-bold mt-2 mb-0">FSH04341</p>
                <p>Celda de carga tipo pancake Futek para garantizar la sensibilidad del agarre del cobot.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04341_p_36071.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/264/IG820.jpg" alt="IG820" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IG820</p>
                <p>Escáner de código de barras para identificación inteligente en la banda transportadora.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IG820_p_19494.html"
                    target="_blank">Comprar</a>
            </div>
            
            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/290/tpc-dcs121a1.jpg" alt="TPC-DCS121A1" width="150px">
                <p class="font-weight-bold mt-2 mb-0">TPC-DCS121A1</p>
                <p>Monitor táctil industrial Taicenn para control e interfaz de operador a pie de línea.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TPC-DCS121A1_p_33962.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/xR4v5kla9qU?si=4eoscFfsARv4Q31S"
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
            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/robots-industriales-vs-colaborativos/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2019/04/Robot-colaborativo-siasun-5-1.jpg"
                        alt="Robots Industriales vs Colaborativos" width="100%">Robots Industriales vs Colaborativos: ¿Cuál es la mejor opción para tu línea?
                </a>
            </div>

            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/robots-colaborativos-la-revolucion-de-la-industria-4-0/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/12/Robots-Colaborativos-La-Revolucion-de-la-Industria-4.0.png"
                        alt="Robots Colaborativos: La Revolución de la Industria 4.0" width="100%">Robots Colaborativos: La Revolución de la Industria 4.0
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

    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
        </div>
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el
                    formulario</a>
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