<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminales Embarcadas y Escaneo Móvil para Operadores de Montacargas | Logicbus</title>
    <meta name="description"
        content="Equipar a los montacarguistas con tablets comerciales es un error costoso. Esta aplicación profesionaliza la captura de datos a bordo del vehículo con equipos robustos.">
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
                <li class="breadcrumb-item active" aria-current="page">Terminales Embarcadas y Escaneo Móvil para
                    Operadores de Montacargas</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Terminales Embarcadas y Escaneo Móvil para Operadores
                de Montacargas</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../darveen"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/darveen.webp"
                            alt="Darveen" width="200px"></a>
                    <a href="../davo-lin"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/davo-lin.webp"
                            alt="DAVO" width="200px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>Llevando el ERP al Volante:</b> Equipar a los montacarguistas con tablets
                    comerciales de consumo masivo es un error costoso; las pantallas se rompen con las vibraciones, las
                    baterías fallan con el frío del almacén y el Wi-Fi se desconecta en los pasillos metálicos. Esta
                    aplicación profesionaliza la captura de datos a bordo del vehículo.
                </p>

                <p class="text-center light-black font-weight-bold">Cómo Funciona</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Cómputo en Cabina:</b> Se instala una Tablet robusta modelo <a href="https://tienda.logicbus.com.mx/VT-862A_p_38206.html" target="_blank" class="blue link-orange font-weight-bold">VT-862A</a> de la marca
                        Darveen directamente en la cabina del montacargas usando anclajes antivibración. Su pantalla de
                        alto brillo permite leer los pedidos incluso en el patio de maniobras bajo el sol.
                    </li>
                    <li class="mb-3"><b>Lectura de Mercancía:</b> El operador utiliza un Lector de RFID inalámbrico
                        modelo <a href="https://tienda.logicbus.com.mx/C72-UHF_p_38420.html" target="_blank" class="blue link-orange font-weight-bold">C72</a> para leer las etiquetas RFID de los pallets a varios metros de distancia sin tener
                        que bajar del vehículo.
                    </li>
                    <li class="mb-3"><b>Interacción Rápida:</b> La tablet se complementa con un Teclado Industrial
                        lavable modelo <a href="https://tienda.logicbus.com.mx/D-87C-BG_p_36761.html" target="_blank" class="blue link-orange font-weight-bold">D-87C-BG</a> de la marca DAVO en caso de que el operador deba ingresar lotes o
                        comentarios con guantes de seguridad puestos.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul>
                    <li class="mb-3 light-black"><b>Optimización de tiempos:</b> Elimina los tiempos muertos de los
                        operadores yendo a una computadora fija a imprimir listas de "picking".</li>
                    <li class="mb-3 light-black"><b>Resistencia extrema:</b> La Tablet PC Resistente soporta caídas,
                        derrames de líquidos y fluctuaciones extremas de temperatura (ideal para cámaras frigoríficas).
                    </li>
                    <li class="mb-3 light-black"><b>Precisión de inventario:</b> Evita errores de captura manual gracias
                        al escaneo directo del código de barras y lectura RFID.</li>
                </ul>

                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMENDADOS</h2>
        <div class="row justify-content-center">

            <div
                class="col-12 col-md-4 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/345/vt-862a.jpg" alt="VT-862A" width="150px">
                <p class="font-weight-bold mt-2 mb-0">VT-862A</p>
                <p>Tablet robusta Darveen para montaje en montacargas, con anclajes antivibración y pantalla de alto
                    brillo.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/VT-862A_p_38206.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-12 col-md-4 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/302/c72-uhf.jpg" alt="C72" width="150px">
                <p class="font-weight-bold mt-2 mb-0">C72</p>
                <p>Lector de RFID y código de barras inalámbrico de largo alcance para escaneo sin bajar del vehículo.
                </p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/C72-UHF_p_38420.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-12 col-md-4 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/lbd-29887c-2.jpg" alt="D-87C-BG" width="150px">
                <p class="font-weight-bold mt-2 mb-0">D-87C-BG</p>
                <p>Teclado Industrial lavable DAVO, ideal para interacción rápida incluso con guantes de seguridad
                    puestos.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-87C-BG_p_36761.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/lBsQU8yI8mc?si=6q6_3hE7G3D35TzO"
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
                    href="https://www.logicbus.com.mx/blog/integracion-del-erp-en-la-gestion-de-flotas-optimizacion-de-la-captura-de-datos-mediante-terminales-embarcadas/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Integracion-del-ERP-en-la-Gestion-de-Flotas-Optimizacion-de-la-Captura-de-Datos-mediante-Terminales-Embarcadas-2048x1024.jpg"
                        alt="Integración del ERP en la Gestión de Flotas" width="100%">Integración del ERP en la Gestión
                    de Flotas: Optimización de la Captura de Datos mediante Terminales Embarcadas
                </a>
            </div>

            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/optimizacion-del-manejo-de-gruas-en-plantas-de-acero-con-computadoras-industriales-darveen-vt-979/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Optimizacion-del-manejo-de-gruas-en-plantas-de-acero-con-computadoras-industriales-Darveen-VT-979.jpg"
                        alt="Optimización del manejo de grúas en plantas de acero" width="100%">Optimización del manejo
                    de grúas en plantas de acero con computadoras industriales Darveen VT-979
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