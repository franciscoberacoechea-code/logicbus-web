<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Alimentos y Bebidas | Logicbus</title>
    <meta name="description"
        content="En la industria de Alimentos y bebidas es importante tener en cuenta una serie de aspectos para encontrar tu producto ideal, en esta página te orientamos en base a la solución de tu empresa o proyecto.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Alimentos y Bebidas</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/alimentos-y-bebidas.png" alt="Banner" alt="Aplicaciones en Agricultura" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Agricultura" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Alimentos y Bebidas</h1>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">En la industria de Alimentos y bebidas es importante tener en
                cuenta una serie de aspectos para encontrar tu producto ideal, en esta página te orientamos en base a la
                solución de tu empresa o proyecto.</p>
            <p class="paragraph light-black text-justify">Además, la mayoría de nuestros productos cumplen con las
                normas de la industria alimenticia de 21 CFR (Parte 11), FDA para trabajar en la protección a los
                consumidores de productos alimenticios y HACCP: de inspección sanitaria.</p>
            <p class="paragraph light-black text-justify">Mantén contentos a los auditores, a los clientes saludables y
                haz crecer el negocio, FSIS tiene pautas de cumplimiento estándar, que se basan en los requisitos de
                tiempo / temperatura que el FSIS ha considerado seguros para la distribución de alimentos.</p>
        </div>

        <div class="container my-5">
            <h2 class="subtitle blue text-center my-5">Aspectos a considerar de la industria</h2>
            <div class="row justify-content-center" style="background-color: none;">
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-between pl-md-5">
                    <ul class="container-fluid">
                        <li class="my-3 btnIcon link-orange orange"
                            onclick="changeBackground('https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-productividad.jpg',this)">
                            <p class="paragraph font-weight-bold">Productividad</p>
                        </li>
                        <li class="my-3 btnIcon  link-orange blue"
                            onclick="changeBackground('https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-calidad.jpg',this)">
                            <p class="paragraph font-weight-bold">Calidad</p>
                        </li>
                        <li class="my-3 btnIcon  link-orange blue"
                            onclick="changeBackground('https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-eficiencia.jpg',this)">
                            <p class="paragraph font-weight-bold">Eficiencia</p>
                        </li>
                        <li class="my-3 btnIcon  link-orange blue"
                            onclick="changeBackground('https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-seguridad.jpg',this)">
                            <p class="paragraph font-weight-bold">Seguridad</p>
                        </li>
                        <li class="my-3 btnIcon  link-orange blue"
                            onclick="changeBackground('https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-monitoreo.jpg',this)">
                            <p class="paragraph font-weight-bold">Monitoreo</p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-7 p-0">
                    <img src="https://www.logicbus.com.mx/food&beverage/banner/aspectos-a-considerar/banner-productividad.jpg"
                        style="transition: opacity 0.5s ease-in-out; opacity: 1;" class="card-img" alt="Aspectos"
                        width="100%" id="img-change">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Monitoreo-de-Temperatura-y-Humedad-en-Camaras-de-Refrigeracion-y-Congelacion.png" class="card-img-top"
                    alt="aplicaciones-en-la-industria/monitoreo-de-temperatura-humedad-en-camaras-refrigeracion-y-congelacion"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y Congelación</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-de-temperatura-humedad-en-camaras-refrigeracion-y-congelacion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/deteccion-fallas-o-picos-electricos-en-sistemas-automatizados.png" class="card-img-top"
                    alt="aplicaciones-en-la-industria/deteccion-fallas-o-picos-electricos-en-sistemas-automatizados"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Detección de Fallas o Picos Eléctricos en Sistemas Automatizados</h5>
                    <a class="button button-circle-orange"
                        href="deteccion-fallas-o-picos-electricos-en-sistemas-automatizados">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                    <img src="img/control-de-cintas-transportadoras-y-tolvas-de-alimentacion.png" class="card-img-top"
                        alt="Control de Cintas Transportadoras y Tolvas de Alimentación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de Cintas Transportadoras y Tolvas de Alimentación</h5>
                        <a class="button button-circle-orange"
                            href="./control-de-cintas-transportadoras-y-tolvas-de-alimentacion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/monitoreo-de-temperatura-en-hornos-de-calcinacion.png" class="card-img-top"
                        alt="Monitoreo de Temperatura en Hornos de Calcinación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Temperatura en Hornos de Calcinación</h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-de-temperatura-en-hornos-de-calcinacion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto.png"
                        class="card-img-top" alt=" Sincronización de Máquinas Dosificadoras en Procesos Multiproducto"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5"> Sincronización de Máquinas Dosificadoras en Procesos Multiproducto
                        </h5>
                        <a class="button button-circle-orange"
                            href="./sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto.php">Ver</a>
                    </div>
                </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion.webp" class="card-img-top"
                    alt="aplicaciones-en-la-industria/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo Remoto de Procesos de Fermentación, Pasteurización o Cocción</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/control-de-llenado-de-botellas-o-contenedores-de-liquidos.png" class="card-img-top"
                    alt="aplicaciones-en-la-industria/control-de-llenado-de-botellas-o-contenedores-de-liquidos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de Llenado de Botellas o Contenedores de Líquidos</h5>
                    <a class="button button-circle-orange"
                        href="control-de-llenado-de-botellas-o-contenedores-de-liquidos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/automatizacion-llenado-frascos-esteriles-control.png" class="card-img-top"
                    alt="Automatización del Llenado de Frascos Estériles con Control de Volumen y Peso"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización del Llenado de Frascos Estériles con Control de Volumen y
                        Peso</h5>
                    <a class="button button-circle-orange"
                        href="automatizacion-llenado-frascos-esteriles-control">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bascula-multipesaje.png" class="card-img-top" alt="Automatización de Líneas de Producción"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Líneas de Producción</h5>
                    <a class="button button-circle-orange" href="bascula-de-pesaje-multiple">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/botellas.png" class="card-img-top" alt="Llenado automático de botellas y líquidos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Llenado automático de botellas y líquidos</h5>
                    <a class="button button-circle-orange" href="llenado-automatico-de-botellas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/penetrometro.png" class="card-img-top" alt="Medición de la Madurez de Frutas y Verduras"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la madurez de frutas y verduras</h5>
                    <a class="button button-circle-orange" href="medicion-de-la-madurez-de-frutas-y-verduras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dosificacion.png" class="card-img-top" alt="Pesaje de dosificación"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pesaje de dosificación</h5>
                    <a class="button button-circle-orange" href="pesaje-de-dosificacion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/flujo-de-masa.png" class="card-img-top"
                    alt="Medición del Flujo de Masa de Partículas Sólidas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición del flujo de masa de partículas sólidas</h5>
                    <a class="button button-circle-orange"
                        href="medicion-del-flujo-de-masa-de-particulas-solidas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/oktoberfest.png" class="card-img-top"
                    alt="Monitoreo de Tanques de Fermentación en Cervecerías" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de tanques de fermentación en cervecerías</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-de-tanques-de-fermentacion-en-cervecerias">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/alimentador.png" class="card-img-top" alt="Alimentador avícola agrícola"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Alimentador avícola agrícola</h5>
                    <a class="button button-circle-orange" href="alimentador-avicola-agricola">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/residuos.png" class="card-img-top"
                    alt="Monitoreo de la Capacidad en Contenedores de Residuos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de la capacidad en contenedores de residuos</h5>
                    <a class="button button-circle-orange"
                        href="monitoreo-de-la-capacidad-en-contenedores-de-residuos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tapas.png" class="card-img-top" alt="Prensa de tapas automática"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prensa de tapas automática</h5>
                    <a class="button button-circle-orange" href="prensa-de-tapas-automatica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Automatizacion-de-Dosificacion-de-Ingredientes.png" class="card-img-top"
                    alt="Automatización de Dosificación de Ingredientes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Automatización de Dosificación de Ingredientes</h5>
                    <a class="button button-circle-orange" href="automatizacion-de-dosificacion-de-ingredientes">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Control-de-Temperatura-en-Camaras-de-Refrigeracion-para-Carnicos.png" class="card-img-top"
                    alt="Control de Temperatura en Cámaras de Refrigeración para Cárnicos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de Temperatura en Cámaras de Refrigeración para Cárnicos</h5>
                    <a class="button button-circle-orange"
                        href="control-de-temperatura-en-camaras-de-refrigeracion-para-carnicos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/supervision-de-pesaje-en-linea-de-empaque-de-quesosde-dosificacion-de-ingredientes.png"
                    class="card-img-top" alt="Supervisión de Pesaje en Línea de Empaque de Quesos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Supervisión de Pesaje en Línea de Empaque de Quesos</h5>
                    <a class="button button-circle-orange"
                        href="aplicaciones-en-la-industria/supervision-de-pesaje-en-linea-de-empaque-de-quesos">Ver</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="subtitle blue text-center my-5">Nuestros Clientes de la Industria</h2>
        <div class="row justify-content-center">
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/cocacola-logo.png"
                    alt="Coca Cola" title="Coca Cola" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/josecuervo-logo.png"
                    alt="Jose Cuervo" title="Jose Cuervo" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3 ">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/lala-logo.png"
                    alt="Lala" title="Lala" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/hersheys-logo.png"
                    alt="Hersheys" title="Hersheys" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/corona-logo.png"
                    alt="Corona" title="Corona" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/canels-logo.png"
                    alt="Canels" title="Canels" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/verdevalle-logo.png"
                    alt="Verde Valle" title="Verde Valle" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/valleredondo-logo.png"
                    alt="Valle Redondo" title="Valle Redondo" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/pescaazteca-logo.png"
                    alt="Pesca Azteca" title="Pesca Azteca" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/lacostena-logo.png"
                    alt="La Costeña" title="La Costeña" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/gam-logo.png"
                    alt="Gam" title="Gam" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/nutrilite-logo.png"
                    alt="Nutrilite" title="Nutrilite" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/monteblanco-logo.png"
                    alt="Monte Blanco" title="Monte Blanco" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/pimsa-logo.png"
                    alt="Pimsa" title="Pimsa" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/grupo-michelle-logo.png"
                    alt="Grupo Michelle" title="Grupo Michelle" width="100%">
            </div>
            <div class="col-3 col-md-2 my-3">
                <img class="gray-filter"
                    src="https://www.logicbus.com.mx/food&amp;beverage/aplicaciones-en-la-industria/imsa-logo.png"
                    alt="Imsa" title="Imsa" width="100%">
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
    <script>
    function changeBackground(selectedClass, element) {
        // Si el elemento ya tiene la clase "orange", no hacer nada
        if ($(element).hasClass("orange")) {
            return;
        } else {
            // Reducir la opacidad a 0 para que la imagen actual desaparezca suavemente
            $("#img-change").css("opacity", "0");

            // Esperar a que la imagen se desvanezca completamente (500ms)
            setTimeout(function() {
                // Crear una nueva imagen para cargarla en segundo plano
                var img = new Image();
                img.src = selectedClass;

                // Una vez que la nueva imagen esté completamente cargada
                img.onload = function() {
                    // Cambiar el src de la imagen visible
                    $("#img-change").attr("src", selectedClass);

                    // Aumentar la opacidad para que la nueva imagen aparezca suavemente
                    $("#img-change").css("opacity", "1");
                };
            }, 500); // El tiempo coincide con la duración de la transición

            // Manejo de clases
            $(".btnIcon").removeClass("orange").addClass("blue");
            $(element).removeClass("blue").addClass("orange");
        }
    }
    </script>
</body>

<?php echo $var_footer; ?>

</html>