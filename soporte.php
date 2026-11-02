<?php
require("admin/config.php");
if (file_exists("libreria/libreria.php")) {
    include("libreria/libreria.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Soporte Logicbus | Distribuidor de equipos de Automatización</title>

    <meta name="description" content="En Logicbus, nos comprometemos a brindar un servicio de atención al cliente excepcional con recursos de soporte, RMA, tutoriales y documentación.">
    <meta name="keywords" content="Soporte Logicbus, RMA Logicbus, tutoriales automatizacion, contactar logicbus, ayuda tecnica industrial, automatizacion industrial mexico">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <!-- Estilos de Allybot + Ajustes corregidos para Botones y Carruseles -->
    <style>
        #leftBar {
            display: none;
        }

        html { scroll-behavior: smooth; }

        /* Botones estilo Allybot / Logicbus (Corregidos contra pérdida de contraste en hover) */
        .btn-circle {
            text-transform: none !important;
            border: 1px solid var(--lb-primary, #22527A);
            color: var(--lb-primary, #22527A) !important;
            background: transparent;
            padding: 10px 30px;
            border-radius: 30px;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        .btn-circle:hover {
            background: var(--lb-primary, #22527A) !important;
            color: #fff !important;
            text-decoration: none;
        }

        /* Botones Naranja con hover corregido */
        .btn-circle-orange {
            background-color: var(--lb-accent, #FF7E00) !important;
            border-color: var(--lb-accent, #FF7E00) !important;
            color: white !important;
        }
        .btn-circle-orange:hover {
            background-color: #e06d00 !important;
            border-color: #e06d00 !important;
            opacity: 1;
            transform: scale(1.05);
            color: white !important;
        }

        /* Estilos de Insignias y Tarjetas Allybot */
        .area-badge { background-color: #f1f5f9; color: var(--lb-primary, #22527A); padding: 5px 15px; border-radius: 20px; font-size: 0.85rem; font-weight: bold; margin-bottom: 15px; display: inline-block; }
        .tags-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 6px; margin-bottom: 15px; }
        .tag-badge { border: 1px solid #ddd; color: #666; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; }
        .product-card p { color: #666; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px; flex-grow: 1; }

        /* Ajustes específicos para los carruseles (Documentación, Tutoriales, Blog) */
        .carousel-cell {
            width: 320px;
            margin-right: 20px;
        }
        .card-flickity {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .card-flickity:hover {
            transform: translateY(-5px);
        }
        .card-flickity img {
            border-radius: 10px;
            margin-bottom: 15px;
            max-width: 100%;
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="/" class="blue link-orange">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Soporte</li>
            </ol>
        </nav>
    </div>

    <!-- Banner -->
    <div class="card-img-banner text-white mb-5" style="position: relative;">
        <img class="intro w-100" src="assets/soporte.webp" alt="Soporte Logicbus" style="object-fit: cover; max-height: 350px;">
        <div class="img-overlay" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
            <h1 class="main-title text-center text-white" style="font-weight: 800; text-shadow: 2px 2px 5px rgba(0,0,0,0.7); margin: 0;">SOPORTE</h1>
        </div>
    </div>

    <!-- Introducción y Navegación (Estilo Allybot) -->
    <div class="container mb-5">
        <p class="intro-text text-center">
            En Logicbus, nos comprometemos a brindar un servicio de atención al cliente excepcional. Creemos que la mejor manera de hacerlo es ofrecer una amplia gama de recursos de soporte que sean fáciles de usar y que te ayuden a encontrar las respuestas que necesitas.
        </p>

        <!-- Navegación interna -->
        <nav class="btn-navigation d-flex justify-content-center flex-wrap mt-4" style="gap: 15px;">
            <a class="btn-circle btn-circle-orange" href="#rma">RMA</a>
            <a class="btn-circle btn-circle-orange" href="#faqs">FAQS</a>
            <a class="btn-circle btn-circle-orange" href="#documentacion">Documentación</a>
        </nav>
    </div>

    <!-- Documentación -->
    <div class="section-white py-5" id="documentacion">
        <h2 class="section-title text-center">DOCUMENTACIÓN</h2>
        <p class="intro-text text-center" style="max-width: 800px; margin: 0 auto 30px;">
            Explora nuestra documentación y descubre todas las posibilidades que te ofrece Logicbus
        </p>
        
        <section class="py-4 margin-carrousel">
            <div class="pb-3 container-fluid">
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true, "cellAlign": "center" }' tabindex='0'>
                    <!-- Ítems del Carrusel de Documentación -->
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://tienda.logicbus.com.mx/assets/PDF/[PACK%20Expo%20Vegas%202023]%20Auk%20Industries%20-%20IoT-powered%20Ops%20Analytics.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/CATALOGO AUK LOGICBUS.png" alt="CATALOGO AUK LOGICBUS" title="CATALOGO AUK LOGICBUS" />
                                <b style="color: var(--lb-primary);">CATALOGO AUK</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/catalogos/Cincoze_Product%20Selection%20Guide.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/CATALOGO CINCOZE LOGICBUS.png" alt="CATALOGO CINCOZE LOGICBUS" title="CATALOGO CINCOZE LOGICBUS" />
                                <b style="color: var(--lb-primary);">CATALOGO CINCOZE</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/313/2023-CATALOG-MASTER-June20231.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/CATALOGO DIGILENT LOGICBUS.png" alt="CATALOGO DIGILENT LOGICBUS" title="CATALOGO DIGILENT LOGICBUS" />
                                <b style="color: var(--lb-primary);">CATALOGO DIGILENT</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/catalogos/catalogo-logicbus-teclados-industriales.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/CATALOGO TECLADOS INDUSTRIALES LOGICBUS.png" alt="CATALOGO TECLADOS INDUSTRIALES LOGICBUS" title="CATALOGO TECLADOS INDUSTRIALES LOGICBUS" />
                                <b style="color: var(--lb-primary);">CATALOGO TECLADOS INDUSTRIALES</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/265/CONTROLLINO-ES.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/CONTROLLINO CATALOGO LOGICBUS.png" alt="CONTROLLINO CATALOGO LOGICBUS" title="CONTROLLINO CATALOGO LOGICBUS" />
                                <b style="color: var(--lb-primary);">CONTROLLINO CATALOGO</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/catalogos/Catalogo-sensores-Tri-tronics.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/GUIA DE PRODUCTOS TRITRONICS LOGICBUS.png" alt="GUIA DE PRODUCTOS TRITRONICS LOGICBUS" title="GUIA DE PRODUCTOS TRITRONICS LOGICBUS" />
                                <b style="color: var(--lb-primary);">GUIA DE PRODUCTOS TRITRONICS</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/36/FUTEK-APLICACIONES.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/GUIA DE SOLUCIONES FUTEK LOGICBUS.png" alt="GUIA DE SOLUCIONES FUTEK LOGICBUS" title="GUIA DE SOLUCIONES FUTEK LOGICBUS" />
                                <b style="color: var(--lb-primary);">GUIA DE SOLUCIONES FUTEK</b>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link paragraph text-decoration-none" href="https://www.logicbus.com.mx/pdf/catalogos/Productos-MCC.pdf" target="_blank">
                            <div class="card-flickity">
                                <img class="carousel-cell-image item-carrousel-lettrer" data-flickity-lazyload="pdf/MCC LOGICBUS CATALOGO.png" alt="MCC LOGICBUS CATALOGO" title="MCC LOGICBUS CATALOGO" />
                                <b style="color: var(--lb-primary);">MCC CATALOGO</b>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center mt-3">
            <a href="https://www.logicbus.com.mx/documentos" class="btn-circle btn-circle-orange">Ver más</a>
        </div>
    </div>

    <!-- RMA -->
    <section class="section-gray py-5" id="rma" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="section-title text-center">RMA</h2>
            <div class="row text-justify py-4 align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <img src="./images/rma.png" width="100%" alt="RMA Logicbus" title="Sección RMA logicbus" class="rounded shadow-sm">
                </div>
                <div class="col-12 col-md-6 text-center" id="accordionRMA">
                    <p class="intro-text text-justify mt-3">En Logicbus, nos esforzamos por garantizar la satisfacción
                        del cliente en cada interacción. Entendemos que, en ocasiones, pueden surgir circunstancias
                        que requieran la devolución de un producto adquirido. Por favor, complete el siguiente
                        formulario con la información requerida para iniciar el proceso de autorización de
                        devolución.</p>
                    <div class="mt-4" id="headingRMA">
                        <button class="btn-circle btn-circle-orange" data-toggle="collapse" data-target="#collapseRMA" aria-expanded="false" aria-controls="collapseRMA" style="cursor: pointer;">Solicitar RMA</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="collapseRMA" class="collapse container mt-4" aria-labelledby="headingRMA" data-parent="#accordionRMA">
            <div class="card shadow-lg border-0 mb-5" style="border-radius: 20px; overflow: hidden;">
                <iframe class="embed-responsive-item" src="https://tienda.logicbus.mx/rma" frameborder="0" allowfullscreen style="width:100%; min-height:2000px; border:0;"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQs (Estructura de Acordeón Allybot) -->
    <section class="container py-5" id="faqs">
        <h2 class="section-title">PREGUNTAS FRECUENTES</h2>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <div class="accordion" id="accordionGeneral">

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqCero">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseCero" role="button" aria-expanded="false" aria-controls="collapseCero">
                                ¿Cómo comprar en la tienda virtual?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseCero" class="collapse" aria-labelledby="faqCero" data-parent="#accordionGeneral">
                            <div class="card-body text-center">
                                <div class="embed-responsive embed-responsive-16by9 mx-auto" style="max-width: 600px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ExZxN1tdsEw?si=Ly9KpasNmUzqwKQy" title="YouTube video player" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqUno">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseUno" role="button" aria-expanded="false" aria-controls="collapseUno">
                                ¿Quiénes somos?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseUno" class="collapse" aria-labelledby="faqUno" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">Somos una empresa líder en la venta y distribución de productos y soluciones de automatización industrial. Desde nuestra fundación en 2001, hemos proporcionado soluciones innovadoras de alta calidad a nuestros clientes en diversos sectores, incluyendo manufactura, alimentos y bebidas, automotriz, petroquímica y farmacéutica, entre otros.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqDos">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseDos" role="button" aria-expanded="false" aria-controls="collapseDos">
                                ¿Hacen envíos a todo México?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseDos" class="collapse" aria-labelledby="faqDos" data-parent="#accordionGeneral">
                            <div class="card-body text-muted">Sí, realizamos envíos a todo México. Puedes consultar nuestras condiciones de envío para más detalles.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqTres">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseTres" role="button" aria-expanded="false" aria-controls="collapseTres">
                                ¿Solamente manejan los productos o marcas publicados en la tienda en línea?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseTres" class="collapse" aria-labelledby="faqTres" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">Aunque no encuentres el modelo o marca que buscas, nuestros especialistas te asesoran en algún producto o marca alternativa que cumpla con los requerimientos técnicos de tu aplicación o bien, el modelo original.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqCuatro">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseCuatro" role="button" aria-expanded="false" aria-controls="collapseCuatro">
                                ¿Cuál es el horario de atención?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseCuatro" class="collapse" aria-labelledby="faqCuatro" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">En Logicbus, nuestro horario de atención es de lunes a viernes de 8:00 a.m. a 6:00 p.m., y los sábados de 10:00 a.m. a 1:00 p.m. Durante este tiempo, nuestro equipo está disponible para brindarte soporte técnico, asesoría en productos y atención a cualquier duda o consulta que puedas tener.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqCinco">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseCinco" role="button" aria-expanded="false" aria-controls="collapseCinco">
                                ¿Dónde están ubicados?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseCinco" class="collapse" aria-labelledby="faqCinco" data-parent="#accordionGeneral">
                            <div class="card-body text-muted">Nuestras oficinas se encuentran ubicadas en Av. Miguel Hidalgo y Costilla 1443. Piso 6 Col. Americana (Torre Iclar) C.P. 44160, Guadalajara Jal. México.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqSeis">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseSeis" role="button" aria-expanded="false" aria-controls="collapseSeis">
                                ¿Cómo puedo saber el precio de un artículo que no está mostrado?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseSeis" class="collapse" aria-labelledby="faqSeis" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">
                                Si un artículo muestra la leyenda <b>"Por favor, solicite el precio en el chat"</b>, sería necesario ponerse en contacto con nuestro equipo de soporte para obtener más información sobre la disponibilidad y el precio del artículo. Este contacto podría ser a través de nuestro chat emergente, por correo electrónico o llamando a nuestras líneas telefónicas.
                                <br><br>
                                <ul>
                                    <li>Soporte Técnico: <a style="color: var(--lb-accent);" href="tel:+523334438556">+52 33 3443 8556</a></li>
                                    <li>Ventas: <a style="color: var(--lb-accent);" href="tel:+525554316718">+52 55 5431 6718</a></li>
                                </ul>
                                <br>
                                Para todos los demás artículos, los precios mostrados se aplican únicamente en pedidos prepagados.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqSiete">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseSiete" role="button" aria-expanded="false" aria-controls="collapseSiete">
                                ¿Todos los precios incluyen el costo de envío?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseSiete" class="collapse" aria-labelledby="faqSiete" data-parent="#accordionGeneral">
                            <div class="card-body text-muted">Todos nuestros precios mostrados no incluyen el costo de envío, a menos que se indique lo contrario.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqOcho">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseOcho" role="button" aria-expanded="false" aria-controls="collapseOcho">
                                ¿Cómo puedo calcular el costo de envío de mi pedido?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseOcho" class="collapse" aria-labelledby="faqOcho" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">
                                Ciertamente, nuestro sistema calcula el costo de envío en la mayoría de los pedidos; de lo contrario, puede contactarnos por correo electrónico o llamando a nuestras líneas telefónicas para solicitar el cálculo, y luego recibirá la información correspondiente en su correo electrónico.
                                <br><br>
                                <ul>
                                    <li>Soporte Técnico: <a style="color: var(--lb-accent);" href="tel:+523334438556">+52 33 3443 8556</a></li>
                                    <li>Ventas: <a style="color: var(--lb-accent);" href="tel:+525554316718">+52 55 5431 6718</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqNueve">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseNueve" role="button" aria-expanded="false" aria-controls="collapseNueve">
                                ¿Qué métodos de pago puedo usar para realizar mi pedido?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseNueve" class="collapse" aria-labelledby="faqNueve" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">Todos nuestros clientes pueden pagar por sus artículos utilizando métodos de pago como los siguientes, cuya disponibilidad puede variar: ciertas tarjetas de crédito o débito (VISA, MasterCard, American Express), PayPal o transferencia bancaria.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqDiez">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseDiez" role="button" aria-expanded="false" aria-controls="collapseDiez">
                                ¿Cómo puedo utilizar mi tarjeta de crédito para pagar mi pedido?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseDiez" class="collapse" aria-labelledby="faqDiez" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">
                                Para el proceso de compra utilizando una tarjeta de crédito como método de pago, nuestros clientes pueden usarla a través de nuestro sitio web después de seleccionar los artículos, elegir la cantidad a adquirir y seleccionar <b>"Agregar al carrito"</b>, completando todos los campos correspondientes con su información de contacto y la información de envío en caso de que desee pagar el costo de envío o si desea utilizar su propia cuenta de envío. Luego puede proceder con el proceso de pago completando su información de tarjeta de crédito en los campos correspondientes.
                                <br><br>
                                En el caso de que haya enviado previamente un pedido a través de correo electrónico, nuestro departamento de ventas creará un artículo especial para su pedido, y luego le proporcionará un enlace a nuestro sitio web para que pueda proceder con el pago allí, siguiendo los pasos previamente explicados.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqOnce">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseOnce" role="button" aria-expanded="false" aria-controls="collapseOnce">
                                ¿Puedo solicitar factura de mis compras?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseOnce" class="collapse" aria-labelledby="faqOnce" data-parent="#accordionGeneral">
                            <div class="card-body text-muted">Sí, todas tus compras son totalmente facturables. Nuestros precios mostrados en la plataforma no incluyen el IVA.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqDoce">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseDoce" role="button" aria-expanded="false" aria-controls="collapseDoce">
                                ¿Cuánto tiempo tarda en llegar la entrega de mi pedido?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseDoce" class="collapse" aria-labelledby="faqDoce" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">El tiempo de entrega comienza después de recibir la confirmación del pedido, y todos nuestros plazos de entrega dependerán de la disponibilidad del artículo que está adquiriendo.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqTrece">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseTrece" role="button" aria-expanded="false" aria-controls="collapseTrece">
                                Ya compré el producto, ¿Qué pasa si requiero soporte o asesoría en la instalación o configuración?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseTrece" class="collapse" aria-labelledby="faqTrece" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">En Logicbus contamos con un equipo de ingenieros especializados que están listos para brindarte asistencia en la instalación y configuración de nuestros productos. Si necesitas soporte técnico, puedes contactarnos para recibir orientación profesional y asegurarte de que tu equipo funcione correctamente desde el principio. Nuestro compromiso es garantizar que obtengas el máximo rendimiento de tu compra, ofreciéndote un servicio personalizado y acompañándote en cada paso del proceso.</div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqCatorce">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseCatorce" role="button" aria-expanded="false" aria-controls="collapseCatorce">
                                ¿Cómo y por qué tener a Logicbus en tu lista segura de correos?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseCatorce" class="collapse" aria-labelledby="faqCatorce" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">
                                <p class="paragraph">Para poder estar al tanto de las ofertas, noticias y novedades que Logicbus tiene para ti, es importante evitar todos y cada uno de los obstáculos que los filtros de correo representan para la recepción de nuestros correos electrónicos y boletines. Es por eso que Logicbus pone a tu disposición una guía técnica de como agregar nuestro dominio a tu lista segura de correos.</p>
                                <p class="paragraph"><b>A continuación te compartimos el tutorial para Outlook y Gmail:</b></p>
                                <div class="embed-responsive embed-responsive-16by9 mx-auto" style="max-width: 600px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nrkqzXXpjdU?si=cinsu4Q3Q9t8tXgD" title="YouTube video player" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 border-0 shadow-sm">
                        <div class="card-header bg-white" id="faqQuince">
                            <a class="paragraph blue d-flex justify-content-between text-decoration-none collapsed" style="color: var(--lb-primary); font-weight: bold;" data-toggle="collapse" href="#collapseQuince" role="button" aria-expanded="false" aria-controls="collapseQuince">
                                ¿Qué es la Garantía Logicbus?
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="collapseQuince" class="collapse" aria-labelledby="faqQuince" data-parent="#accordionGeneral">
                            <div class="card-body text-muted text-justify">
                                <p class="paragraph">Logicbus transfiere de manera directa al cliente cualquier garantía que Logicbus recibe por parte de los fabricantes de los productos vendidos al cliente. Logicbus no tiene otra garantía respecto a los productos. La garantía solo aplicará a los productos adquiridos con Logicbus, además de que Logicbus no se hace responsable por algún daño ocasionado a terceros al utilizar dicho producto. La garantía no aplica en los consumibles que incluye el equipo (tinta, papel de impresión, baterías, etc.).</p>
                                <p class="paragraph" style="color: #d9534f;"><b>NO APLICARÁ GARANTÍA SI EL PRODUCTO HA RECIBIDO UN MAL USO, DESCARGA ESTÁTICA, NEGLIGENCIA, ACCIDENTE, MODIFICACIÓN O HA SIDO SOLDADO O ALTERADO DE ALGUNA MANERA.</b></p>
                                <br>
                                <h5 class="subtitle blue"><a class="text-decoration-none" style="color: var(--lb-accent);" href="https://www.logicbus.com.mx/Terminos-y-Condiciones-ep-2-1">Limitaciones de Responsabilidad</a></h5>
                                <p class="paragraph mt-2">EN NINGUNA CIRCUNSTANCIA LOGICBUS SERÁ RESPONSABLE DE DAÑOS ESPECIALES, ACCIDENTALES O DE CONSECUENCIA DE NINGUNA NATURALEZA, incluyendo y no limitado a, daños por pérdida de utilidad o ganancia, costos de reparación, ajustes por interrupciones de servicio o tiempo muerto, pruebas, gastos de instalación o desinstalación, costo de producto substituto, daños en propiedad, daños personales, muerte o gastos legales.</p>
                                <p class="paragraph">EL CLIENTE ES RESPONSABLE DEL USO QUE SE LE DA AL PRODUCTO Y DEJA FUERA DE TODA RESPONSABILIDAD A LOGICBUS.</p>
                                <br>
                                <h5 class="subtitle blue">Trámite para Garantías/Devoluciones</h5>
                                <p class="paragraph mt-2">Deberá de contactar a su agente de venta vía telefónica o correo electrónico con la situación ocurrida. El mismo le solicitará los detalles para tramitar la garantía o devolución. Una vez que hayamos recibido su documentación y haya sido autorizada la garantía por nuestro equipo de soporte técnico, le asignaremos un número de retorno. Para ahorrarle tiempo cuando hable, tenga a la mano toda la información pertinente.</p>
                                <p class="paragraph blue"><b>Después de recibir el número RMA, siga estos pasos:</b></p>
                                <ol class="paragraph pl-4">
                                    <li>Preferentemente regrese el equipo en su empaque original.</li>
                                    <li>Indique fuera del empaque en atención a su agente de venta y No. asignado de RMA.</li>
                                    <li>Envíenos toda la documentación, cables y demás componentes incluidos con las partes originales.</li>
                                    <li>Use empaque apropiado para evitar daños al equipo durante el envío.</li>
                                    <li>No haga envíos parciales, debe de estar completo de acuerdo al RMA.</li>
                                    <li>Asegúrese de regresar el equipo a la dirección pactada.</li>
                                </ol>
                                <p class="paragraph">Si sigue este procedimiento, su crédito, reemplazo o cambio no serán demorados. Envíos que no sigan el procedimiento serán regresados al remitente y/o se incurrirán en gastos de realmacenamiento.</p>
                                <p class="paragraph blue"><b>Datos de Envío</b></p>
                                <ul class="paragraph pl-4">
                                    <li>RMA#</li>
                                    <li>Logicbus SA de CV</li>
                                    <li>Av. Miguel Hidalgo y Costilla 1443. Piso 6 Col. Americana (Torre Iclar)</li>
                                    <li>C.P 44160 Guadalajara, Jalisco Mexico</li>
                                </ul>
                                <p class="paragraph d-flex align-items-center mt-4">
                                    Si tienes alguna duda comunícate a nuestro chat localizado abajo a la derecha 
                                    <img class="px-2" src="https://www.logicbus.com.mx/imagenes/chat-icono.PNG" alt="Icono de chat" height="30"> o a los teléfonos:
                                </p>
                                <p class="paragraph mb-1"><b>México:</b> <a style="color: var(--lb-accent);" href="tel:+523338545975">(33)-3854-5975</a> | <a style="color: var(--lb-accent);" href="tel:+523338234349">(33)-3823-4349</a></p>
                                <p class="paragraph"><b>USA:</b> <a style="color: var(--lb-accent);" href="tel:+16196167350">(619)-616-7350</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Tutoriales -->
    <section class="section-gray py-5" style="background-color: #f8f9fa;">
        <h2 class="section-title text-center">TUTORIALES</h2>
        <p class="intro-text text-center" style="max-width: 800px; margin: 0 auto 30px;">
            Accede a una biblioteca completa de tutoriales que te ayudarán a resolver problemas comunes y aprender a usar nuestros productos de forma eficaz
        </p>

        <section class="py-4 margin-carrousel">
            <div class="pb-3 container-fluid">
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true, "cellAlign": "center" }'>
                    <!-- Ítems del Carrusel de Tutoriales -->
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=gjQ7gCU4ceo&list=PL9EhLTarrD6ODkU7Pa_d5H9Iqm1n07Pgk&index=13" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/gjQ7gCU4ceo/mqdefault.jpg" alt="Vuelve Inalámbrico tu PLC FATEK vía Wi Fi" title="Vuelve Inalámbrico tu PLC FATEK vía Wi Fi" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=YGD5Z5lKNdc&list=PL9EhLTarrD6ODkU7Pa_d5H9Iqm1n07Pgk&index=22" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/YGD5Z5lKNdc/mqdefault.jpg" alt="CONECTANDO UNA CELDA DE CARGA A CAJA SUMADORA" title="CONECTANDO UNA CELDA DE CARGA A CAJA SUMADORA" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=8ICoh1cnOHE" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/8ICoh1cnOHE/mqdefault.jpg" alt="MODULO DE IGNICIÓN PARA COMPUTADORAS CINCOZE" title="MODULO DE IGNICIÓN PARA COMPUTADORAS CINCOZE" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=j5yf6HRaWSQ" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/j5yf6HRaWSQ/mqdefault.jpg" alt="COMO PROBAR UNA CELDA DE CARGA" title="COMO PROBAR UNA CELDA DE CARGA" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=2_SqdfrMuwk" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/2_SqdfrMuwk/mqdefault.jpg" alt="Bloqueo y reasignacion de funciones de teclas en windows de teclados" title="Bloqueo y reasignacion de funciones de teclas en windows de teclados" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=NpFL_R9wdbk" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/NpFL_R9wdbk/mqdefault.jpg" alt="CONOCE LOS PRINCIPALES MODELOS DE CONTROLLINO" title="CONOCE LOS PRINCIPALES MODELOS DE CONTROLLINO" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=l_xa-4KupwQ" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/l_xa-4KupwQ/mqdefault.jpg" alt="Arma tramas Modbus con codigo ASCII" title="Arma tramas Modbus con codigo ASCII" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link" href="https://www.youtube.com/watch?v=HAvcTczZ_ps" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image item-carrousel-16_9 mb-0 w-100" data-flickity-lazyload="http://i3.ytimg.com/vi/HAvcTczZ_ps/mqdefault.jpg" alt="Conoce los códigos de detección de errores CRC y Checksum" title="Conoce los códigos de detección de errores CRC y Checksum" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="text-center mt-3">
            <a href="videos" class="btn-circle btn-circle-orange">Ver más tutoriales</a>
        </div>
    </section>

    <!-- Sección Informativa -->
    <section class="section-white py-5">
        <div class="container">
            <div class="row text-center px-lg-5 align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h2 class="section-title text-left mb-3">SECCIÓN INFORMATIVA</h2>
                    <p class="intro-text text-left">
                        ¡Sumérgete en nuestro mundo de automatización industrial y empodérate con el conocimiento
                        necesario para impulsar el éxito de tu empresa!
                    </p>
                    <div class="mt-4 text-left">
                        <a href="https://www.logicbus.com.mx/seccion-informativa" class="btn-circle btn-circle-orange">Ver más</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="assets/informativo.webp" alt="Informativo Logicbus" title="Sección informativa logicbus" width="100%" class="rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section-gray py-5" style="background-color: #f8f9fa;">
        <h2 class="section-title text-center">BLOG</h2>
        <p class="intro-text text-center" style="max-width: 800px; margin: 0 auto 30px;">
            Logicbus Blog ofrece información detallada sobre el control de procesos, sus tipos, elementos e importancia.
        </p>

        <section class="py-4 margin-carrousel">
            <div class="pb-3 container-fluid">
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true, "cellAlign": "center" }'>
                    <!-- Ítems del Carrusel de Blog -->
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/explorando-la-versatilidad-de-los-sensores-fotoelectricos-mini-eye/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Explorando-la-Versatilidad-de-los-Sensores-Fotoelectricos-MINI-EYE-scaled.jpg" alt="Explorando la Versatilidad de los Sensores Fotoeléctricos MINI-EYE" title="Explorando la Versatilidad de los Sensores Fotoeléctricos MINI-EYE" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/descubriendo-los-diferentes-tipos-de-agvs-una-guia-completa/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Descubriendo-los-Diferentes-Tipos-de-AGVs-scaled.jpg" alt="Descubriendo los Diferentes Tipos de AGVs: Una Guía Completa" title="Descubriendo los Diferentes Tipos de AGVs: Una Guía Completa" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/ventajas-de-las-soluciones-de-oee-basadas-en-la-nube/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Ventajas-de-las-soluciones-de-OEE-basadas-en-la-nube-1-scaled.jpg" alt="Ventajas de las soluciones de OEE basadas en la nube" title="Ventajas de las soluciones de OEE basadas en la nube" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/celdas-de-carga-en-aplicaciones-medicas/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/celda-de-carga-en-aplicaciones-medicas--scaled.jpg" alt="Celdas de carga en aplicaciones médicas" title="Celdas de carga en aplicaciones médicas" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/la-transicion-a-la-industria-5-0/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/La-transicion-a-la-industria-5.0-scaled.jpg" alt="La transición a la industria 5.0" title="La transición a la industria 5.0" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/descubre-el-controllino-io-bean-integracion-perfecta-de-e-s-en-tu-proyecto/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/%C2%BFPor-que-es-importante-calibrar-una-celda-de-carga-scaled.jpg" alt="¿Por qué es importante calibrar las celdas de carga?" title="¿Por qué es importante calibrar las celdas de carga?" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/por-que-es-importante-calibrar-las-celdas-de-carga-y-los-sensores-de-torque/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Descubre-el-Controllino-IO-BEAN-Integracion-Perfecta-de-ES-en-tu-Proyecto-scaled.jpg" alt="Descubre el Controllino IO-BEAN" title="Descubre el Controllino IO-BEAN" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                    <div class="carousel-cell">
                        <a class="carousel-link text-decoration-none" href="https://www.logicbus.com.mx/blog/simplifica-la-integracion-de-datos-ascii-en-tus-plc-allen-bradley/" target="_blank">
                            <div class="card-flickity p-0 overflow-hidden">
                                <img class="carousel-cell-image mb-0 w-100" data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Simplifica-la-Integracion-de-Datos-ASCII-en-tus-PLC-Allen-Bradley--scaled.jpg" alt="Simplifica la Integración de Datos ASCII" title="Simplifica la Integración de Datos ASCII" height="170" style="object-fit: cover;" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center mt-3">
            <a href="https://www.logicbus.com.mx/blog/" class="btn-circle btn-circle-orange">Ver más artículos</a>
        </div>
    </section>

    <!-- Eventos y Cursos -->
    <section class="section-white py-5">
        <div class="container">
            <div class="row text-center px-lg-5 align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <img src="assets/eventos.webp" width="100%" alt="Eventos Logicbus" title="Sección eventos logicbus" class="rounded shadow-sm">
                </div>
                <div class="col-12 col-md-6 text-left">
                    <h2 class="section-title mb-3">EVENTOS Y CURSOS</h2>
                    <p class="intro-text text-justify">
                        ¿Te apasiona la automatización industrial? ¿Quieres estar al día con las últimas tendencias
                        y tecnologías? Entonces estás en el lugar indicado. En esta sección encontrarás una completa
                        agenda de eventos, cursos y seminarios.
                    </p>
                    <div class="mt-4">
                        <a href="https://www.logicbus.com.mx/eventos" class="btn-circle btn-circle-orange">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto (Estilo Allybot) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a resolver tus problemas de forma rápida y eficaz.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer (Estilo Allybot) -->
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <!-- 1. jQuery -->
    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>

    <!-- 2. Bootstrap -->
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>

    <!-- 3. Propios -->
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    
    <?php echo isset($flickity_js) ? $flickity_js : ''; ?>
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>