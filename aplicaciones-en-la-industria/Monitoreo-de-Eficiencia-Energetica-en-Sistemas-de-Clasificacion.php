<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo de Eficiencia Energética en Sistemas de Clasificación (Sorters) | Logicbus</title>
    <meta name="description"
        content="Audita y gestiona el consumo eléctrico en tiempo real en sistemas de clasificación (sorters) para reducir la factura de luz y predecir fallas mecánicas.">
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
                <li class="breadcrumb-item active" aria-current="page">Monitoreo de Eficiencia Energética en Sistemas de Clasificación (Sorters)</li>
            </ol>
        </nav>
    </section>

    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo de Eficiencia Energética en Sistemas de Clasificación (Sorters)</h1>
        </div>
    </section>

    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/Monitoreo-de-Eficiencia-Energetica-en-Sistemas-de-Clasificacion.png"
                    alt="Monitoreo de Eficiencia Energética" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../seneca"><img class="m-3 gray-filter"
                            src="../images/nuestras_marcas/webp/seneca.webp" alt="SENECA" width="150px"></a>
                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                            alt="FATEK" width="150px"></a>
                    <a href="../3onedata"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/3onedata.webp"
                            alt="3onedata" width="150px"></a>
                    <a href="../cimon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cimon.webp"
                            alt="CIMON" width="150px"></a>
                </div>

            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black"><b>Reduciendo el Gasto Eléctrico Oculto:</b> Los centros de distribución dependen de kilómetros de bandas transportadoras y motores que operan 24/7. El gasto eléctrico es enorme, pero pocas empresas saben qué sección del almacén consume más o si un motor está gastando el doble de energía porque sus rodamientos están fallando. Esta aplicación permite auditar y gestionar el consumo eléctrico en tiempo real para reducir la factura de luz y predecir fallas mecánicas.
                </p>

                <p class="text-center light-black font-weight-bold">Cómo Funciona</p>

                <ol class="light-black">
                    <li class="mb-3"><b>Sensado de Corriente:</b> En los tableros principales que alimentan las líneas de transportadores, se instalan Donas de Corriente (Transformadores de Corriente) modelo <a href="https://tienda.logicbus.com.mx/T201DCH50-M_p_15739.html" target="_blank" class="blue link-orange font-weight-bold">T201DCH50-M</a> de la marca SENECA S.R.L., abrazando los cables de las fases de los motores más críticos.
                    </li>
                    <li class="mb-3"><b>Medición en Tablero:</b> Las donas se conectan a Pantallas HMI modelo <a href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html" target="_blank" class="blue link-orange font-weight-bold">P5070NB</a> de la marca FATEK. Usando el protocolo Modbus RTU las variables como kWh, Voltaje, Amperaje y Factor de Potencia se pueden visualizar de forma muy compacta.
                    </li>
                    <li class="mb-3"><b>Concentración de Datos:</b> Las HMIs envían la información a través de un Switch Ethernet Industrial modelo <a href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank" class="blue link-orange font-weight-bold">IES2300SL-5GT-2LV</a> de la marca 3onedata Technology hacia la red de la planta.
                    </li>
                    <li class="mb-3"><b>Visualización y Gestión:</b> Toda la información de consumo se consolida en un software SCADA modelo <a href="https://tienda.logicbus.com.mx/UA02-1500DS_p_37789.html" target="_blank" class="blue link-orange font-weight-bold">UA02-1500/DS</a> de la marca CIMON, el cual muestra en pantallas gráficas el costo por hora de operar el sorter y genera alarmas si el consumo se dispara de forma anormal.
                    </li>
                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>
                <ul>
                    <li class="mb-3 light-black">Permite negociar mejores tarifas eléctricas al conocer exactamente los picos de demanda del CEDIS.</li>
                    <li class="mb-3 light-black">Identifica motores ineficientes que están a punto de quemarse por exceso de fricción (Mantenimiento Predictivo).</li>
                    <li class="mb-3 light-black">Los medidores de Riel DIN ahorran espacio valioso en los tableros de control de automatización.</li>
                    <li class="mb-3 light-black">Justifica inversiones en variadores de frecuencia al demostrar el retorno de inversión (ROI) con datos energéticos reales.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/T201DCH50-M.jpg" alt="T201DCH50-M" width="150px">
                <p class="font-weight-bold mt-2 mb-0">T201DCH50-M</p>
                <p>Transformador de Corriente AC/DC, Salida Modbus RTU.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/T201DCH50-M_p_15739.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/P5070SB.jpg" alt="P5070NB"
                    width="150px">
                <p class="font-weight-bold mt-2 mb-0">P5070NB</p>
                <p>Pantalla HMI de alta resolución, ideal para visualización de parámetros eléctricos locales.</p>
                <a class="button button-circle-orange"
                    href="https://tienda.logicbus.com.mx/P5070NB_p_31660.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg" alt="IES2300SL-5GT-2LV" width="150px">
                <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>
                <p>Switch Ethernet Industrial no administrable, montaje en riel DIN, robusto para la red de planta.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html"
                    target="_blank">Comprar</a>
            </div>

            <div
                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/309/ultimate-access-web.jpg" alt="UA02-1500/DS" width="150px">
                <p class="font-weight-bold mt-2 mb-0">UA02-1500/DS</p>
                <p>Software SCADA CIMON Ultimate Access, llave USB para desarrollo y visualización de 1500 tags.</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/UA02-1500DS_p_37789.html"
                    target="_blank">Comprar</a>
            </div>

        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/rCyRbool9Lo?si=ADETYGUQj4XrBe1e"
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
                    href="https://www.logicbus.com.mx/blog/gestion-de-la-eficiencia-energetica-en-sistemas-de-clasificacion-auditoria-y-mantenimiento-predictivo/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Gestion-de-la-Eficiencia-Energetica-en-Sistemas-de-Clasificacion-Auditoria-y-Mantenimiento-Predictivo-2048x1024.webp"
                        alt="Gestión de la Eficiencia Energética en Sistemas de Clasificación"
                        width="100%">Gestión de la Eficiencia Energética en Sistemas de Clasificación: Auditoría y Mantenimiento Predictivo
                </a>
            </div>
            
            <div class="col-12 col-md-5 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/sistemas-de-posicionamiento-absoluto-en-transelevadores-as-rs-precision-milimetrica-en-almacenes-de-gran-altura/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2026/03/Sistemas-de-Posicionamiento-Absoluto-en-Transelevadores-ASRS-Precision-Milimetrica-en-Almacenes-de-Gran-Altura-scaled.webp"
                        alt="Sistemas de Posicionamiento Absoluto en Transelevadores AS/RS"
                        width="100%">Sistemas de Posicionamiento Absoluto en Transelevadores AS/RS: Precisión Milimétrica en Almacenes de Gran Altura
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