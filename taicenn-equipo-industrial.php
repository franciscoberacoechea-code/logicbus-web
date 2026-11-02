<?php require("admin/config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TAICENN - Panel PC Industriales - Marca Logicbus</title>
    <meta name="description"
        content="TAICENN, proveedor líder mundial de Panel PC industriales, pantallas industriales y computadoras embebidas de alto rendimiento.">

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $carrusel_productos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Fuerza a las secciones de título a no flotar y centrarse */
        .seccion {
            float: none !important;
            margin: 0 auto !important;
            text-align: center !important;
            display: block !important;
            width: 100% !important;
        }
        
        /* Centra el contenedor interno del título */
        .col-center {
            float: none !important;
            margin: 0 auto !important;
            display: inline-block !important;
        }

        /* Fuerza a los botones del menú superior a comportarse como elementos en línea */
        .button-text {
            float: none !important;
            display: inline-block !important;
        }

        /* Para el último producto suelto: evita que flote a la izquierda */
        .centrar-producto {
            float: none !important;
            margin: 0 auto !important;
            display: inline-block !important;
        }

        /* Asegura que el contenedor del ícono de documentación esté centrado */
        .doc-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Taicenn</li>
            </ol>
        </nav>
    </div>
    
    <h1 class="sr-only">TAICENN - Panel PC Industriales - Marca Logicbus</h1>
    
    <div class="mb-5">
        <img fetchpriority="high" src="images/banner/www/PorMarca/BANNER-TAICENN-MZ23.webp" 
            alt="Banner oficial de Taicenn - Soluciones de Computación Industrial"
            title="Soluciones Industriales Taicenn" width="100%">
    </div>

    <section>
        <div class="container-fluid my-5 text-center">
            <h2 class="title blue mb-3" style="text-align: center;">Panel PC Industriales</h2>
        </div>
        <div class="container text-justify mb-5">
            <p class="paragraph">TAICENN es un proveedor y fabricante líder a nivel mundial de computadoras
                industriales, Panel PC (Todo-en-Uno) y pantallas industriales. Estos productos están
                diseñados específicamente para sistemas y aplicaciones que requieren un excelente rendimiento, alta
                fiabilidad, estabilidad y un largo período de suministro y soporte.</p>
        </div>
        
        <div class="container text-center my-5" style="text-align: center;">
            <a class="button-text button button-white mx-2 my-1" href="https://tienda.logicbus.com.mx/taicenn" target="_blank">Ver en Tienda</a>
            <a class="button-text button button-white mx-2 my-1" href="#productos">Productos</a>
            <a class="button-text button button-white mx-2 my-1" href="#aplicaciones">Aplicaciones</a>
            <a class="button-text button button-white mx-2 my-1" href="#docs">Catálogos</a>
            <a class="button-text button button-white mx-2 my-1" href="#articulos">Artículos</a>
            <a class="button-text button button-white mx-2 my-1" href="#videos">Videos</a>
        </div>
    </section>

    <div class="seccion">
        <div class="col-center">
            <h2><span>CATEGORÍAS</span></h2>
        </div>
    </div>

    <div class="container-flex px-4 pb-5">
        <div class="pb-3 px-md-5">
            <div class="carousel align-middle"
                data-flickity='{ "lazyLoad": 14, "autoPlay": 4000, "wrapAround": true , "pageDots": false, "Friction": 0.03 }'
                tabindex='0'>
                
                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/panel-pc.webp" class="card-img-top" alt="Panel PC Industrial Taicenn">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">Panel PC</h3>
                            <a href="https://tienda.logicbus.com.mx/Panel-PC-Todo-en-uno_c_5381.html" target="_blank"
                                style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-Serie-TBOX-1.webp" class="card-img-top"
                            alt="Computadora Industrial Serie TBOX-1 ultracompacta">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC Serie TBOX-1<br><br></h3>
                            <a href="https://tienda.logicbus.com.mx/PCs-y-Comunicaciones-Industriales-Computadoras-industriales-TBOX-1-Series--Tamano-ultracompacto"
                                target="_blank" style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-Serie-TBOX-2.webp" class="card-img-top"
                            alt="Computadora Industrial Serie TBOX-2 Rich IOs">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC Serie TBOX-2</h3>
                            <a href="https://tienda.logicbus.com.mx/PCs-y-Comunicaciones-Industriales-Computadoras-industriales-TBOX-2-Series-configuracion-Rich-IOs"
                                target="_blank" style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-Serie-TBOX-3.webp" class="card-img-top"
                            alt="Computadora Industrial Serie TBOX-3 con PoE">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC Serie TBOX-3<br><br></h3>
                            <a href="https://tienda.logicbus.com.mx/PCs-y-Comunicaciones-Industriales-Computadoras-industriales-TBOX-3-Series-Tipo-de-funcion-PoE"
                                target="_blank" style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-Serie-TBOX-3-multi-PoE.webp" class="card-img-top"
                            alt="Computadora Industrial Serie TBOX-3 Multi PoE">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC Serie TBOX-3 multi PoE<br><br></h3>
                            <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank" style="color:white"
                                class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-Serie-TBOX-4.webp" class="card-img-top"
                            alt="Computadora Industrial Serie TBOX-4">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC Serie TBOX-4<br><br></h3>
                            <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank" style="color:white"
                                class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/PC-montaje-en-gabinete.webp" class="card-img-top"
                            alt="PC Industrial de montaje en gabinete">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">PC montaje en gabinete</h3>
                            <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank" style="color:white"
                                class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/Monitores-Industriales-Capacitivos.webp"
                            class="card-img-top" alt="Monitores Industriales Capacitivos Taicenn">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">Monitores Industriales Capacitivos</h3>
                            <a href="https://tienda.logicbus.com.mx/search.asp?keyword=TM-PC&search=https://tienda.logicbus.com.mx/search.asp?keyword=TM-PC&search="
                                target="_blank" style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/Monitores-Industriales-Resistivos.webp"
                            class="card-img-top" alt="Monitores Industriales Resistivos Taicenn">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">Monitores Industriales Resistivos</h3>
                            <a href="https://tienda.logicbus.com.mx/search.asp?keyword=TM-PR&search=" target="_blank"
                                style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px; height: 460px;">
                        <img loading="lazy" src="images/taicenn/Monitores-Industriales-montaje-en-Rack.webp"
                            class="card-img-top" alt="Monitores Industriales para montaje en Rack">
                        <div class="card-body rounded text-center d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-title text-center">Monitores Industriales montaje en Rack</h3>
                            <a href="https://www.logicbus.com/pcs-and-industrial-communications-industrial-monitors-tm-rc-tm-rr-series-rack-mount-touchscreen-monitor"
                                target="_blank" style="color:white" class="comparer btn btn-orange text-center">Ver en tienda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion" id="aplicaciones">
        <div class="col-center">
            <h2><span>APLICACIONES</span></h2>
        </div>
    </div>

    <div class="divCentrado">
        <div class="gridContMitad">
            <div class="griditemContB text-center">
                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                    <img loading="lazy" class="imgBorde" src="images/app/taicenn-panel-pc-aplicacion.webp"
                        alt="Aplicación de All in One Industrial Panel PC en entorno de fábrica">
                </a>
                <br>
            </div>
            <div class="griditemContB">
                <p align="justify">
                    Cuando nos referimos a sistemas informáticos industriales, existen muchas formas diferentes, 
                    incluyendo computadoras tipo Box PC de diseño compacto, diferentes dimensiones y montajes, 
                    Panel PC con pantalla táctil, computadoras de mano con diversas plataformas de CPU, y 
                    computadoras industriales robustas de grado militar. Sin embargo, según nuestra experiencia, 
                    todos comparten características generales.
                    <br><br>
                    Podemos encontrar que todos ellos están compuestos por CPU, memoria RAM, almacenamiento en
                    disco, diferentes tipos de puertos serie (COM), Ethernet, diferentes factores de forma, puertos USB, 
                    y algunos buses industriales específicos como CAN Bus o Modbus. Además, cuentan con opciones de expansión
                    inalámbrica (Wi-Fi, 3G/4G/LTE, GPS, BT), y diferentes entradas y salidas (I/O) según lo solicitado en sitio.
                </p>
                <p align="justify">
                    Combinando diferentes dimensiones, métodos de montaje y paneles táctiles industriales, 
                    resulta muy sencillo integrarlos en una solución completa de Panel PC industrial.
                </p>
            </div>
        </div>
        <div class="gridContMitad">
            <div class="griditemContB text-center">
                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                    <img loading="lazy" class="imgBorde" src="images/app/taicenn-puertos.webp" style="max-width: 500px;"
                        alt="Puertos I/O y componentes de conectividad de las computadoras industriales Taicenn">
                </a>
            </div>
            <div class="griditemContB text-center">
                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                    <img loading="lazy" class="imgBorde" src="images/app/taicenn-panel-pc.webp" style="max-width: 500px;"
                        alt="Despiece y ensamble de componentes de un Panel PC Taicenn">
                </a>
            </div>
        </div>
    </div>

    <div class="seccion" id="videos">
        <div class="col-center">
            <h2><span>VIDEOS</span></h2>
        </div>
    </div>

    <section class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 my-3">
                <div class="griditemContB mx-auto centrar-producto" style="max-width: 300px;">
                    <div class="video-container-youtube" data-video-id="o0Qvlo7fdOE">
                        <img loading="lazy" src="https://img.youtube.com/vi/o0Qvlo7fdOE/hqdefault.jpg"
                            alt="Video Unboxing Panel Industrial - TAICENN" style="width:100%; border-radius:8px;">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="seccion" id="articulos"> 
        <div class="col-center">
            <h2><span>ARTÍCULOS</span></h2>
        </div>
    </div>

    <section class="container-fluid py-5">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/computo-industrial-alimentos-bebidas/" target="_blank"
                    rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Computacion-Industrial-en-la-Sector-de-Alimentos-y-Bebidas - 2048x1024.webp"
                        alt="Computación Industrial en el Sector de Alimentos y Bebidas" width="100%">
                    Computación Industrial en el Sector de Alimentos y Bebidas
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold"
                    href="https://www.logicbus.com.mx/blog/espacio-limitado-dentro-de-tu-gabinete-descubre-la-serie-de-computadoras-industriales-tbox-6xx5-que-ofrecen-alto-rendimiento-para-instalaciones-en-gabinetes-de-control/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/05/LoRaWAN.webp"
                        alt="Computadoras industriales TBOX-6xx5 para gabinetes de control"
                        width="100%">
                    ¿Espacio Limitado dentro de tu gabinete? Descubre la serie de computadoras industriales TBOX-6xx5
                    que ofrecen alto rendimiento. Por Logicbus
                </a>
            </div>
            <div class="col-12 col-md-4 text-center mb-3">
                <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/panel-pc-vs-box-pc/"
                    target="_blank" rel="noopener noreferrer">
                    <img loading="lazy"
                        src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/08/PANEL-PC-O-BOX-PC-2048x1024.webp"
                        alt="Comparativa Panel PC vs Box PC industrial" width="100%">
                    Panel PC vs. Box PC: ¿Cuál es la mejor opción para tu entorno industrial?
                </a>
            </div>
        </div>
    </section>

    <div class="seccion" id="docs"> 
        <div class="col-center">
            <h2><span>GUÍAS Y MANUALES</span></h2>
        </div>
    </div>
    
    <div class="container pb-5 doc-container">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=taicenn" style="text-decoration:none;">
            <div class="hoverchange text-center">
                <img loading="lazy" src="images/documentacion.svg" width="200px" class="mx-auto d-block" alt="Ícono de acceso a documentación técnica">
                <div class="button button-circle-white d-flex justify-content-center align-items-center mt-2 mx-auto" style="width:fit-content;">
                    <b>Documentación</b>
                </div>
            </div>
        </a>
    </div>
    
    <div class="seccion" id="productos">
        <div class="col-center">
            <h2><span>PRODUCTOS DESTACADOS</span></h2>
        </div>
    </div>

    <div class="gridContTres text-center">
        <div class="griditemContB">
            <div class="cardSimple">
                <div class="card-body contenido">
                    <div><h3 class="titulos"><b>PC Industrial TBOX-2810</b></h3></div>
                    <div>
                        <img loading="lazy" class="img250"
                            src="images/categorias/2022/pc-comunicaciones-industriales/tbox-2810.webp"
                            alt="PC Industrial TBOX-2810 Taicenn vista frontal" title="PC Industrial TBOX-2810">
                    </div>
                    <div class="animado">
                        <div class="gridContMitad">
                            <div>
                                <h4 class="titulos"><b>Ver Producto</b></h4>
                                <a href="https://tienda.logicbus.com.mx/TBOX-2810_p_33734.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" alt="Comprar TBOX-2810 en Tienda México" class="imgBorde" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/TBOX-2810_p_30212.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" alt="Comprar TBOX-2810 en Tienda USA" class="imgBorde" style="max-width: 45px;">
                                </a>
                            </div>
                            <div>
                                <h4 class="titulos"><b>Ver más</b></h4>
                                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Ver catálogo Taicenn México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/Taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" alt="Ver catálogo Taicenn USA" style="max-width: 45px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="griditemContB">
            <div class="cardSimple">
                <div class="card-body contenido">
                    <div><h3 class="titulos"><b>Monitor Industrial M-PCA215</b></h3></div>
                    <div>
                        <img loading="lazy" class="img250"
                            src="images/categorias/2022/pc-comunicaciones-industriales/tm-pca215.webp"
                            alt="Monitor Industrial Táctil Capacitivo M-PCA215" title="Monitor Industrial M-PCA215">
                    </div>
                    <div class="animado">
                        <div class="gridContMitad">
                            <div>
                                <h4 class="titulos"><b>Ver Producto</b></h4>
                                <a href="https://tienda.logicbus.com.mx/TM-PCA215_p_34071.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Comprar M-PCA215 en Tienda México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/TM-PCA215_p_30390.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Comprar M-PCA215 en Tienda USA">
                                </a>
                            </div>
                            <div>
                                <h4 class="titulos"><b>Ver más</b></h4>
                                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Ver catálogo Taicenn México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/Taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Ver catálogo Taicenn USA">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="griditemContB">
            <div class="cardSimple">
                <div class="card-body contenido">
                    <div><h3 class="titulos"><b>Monitor Industrial TM-PR170</b></h3></div>
                    <div>
                        <img loading="lazy" class="img250"
                            src="images/categorias/2022/pc-comunicaciones-industriales/TM-PR170.webp"
                            alt="Monitor Industrial Resistivo TM-PR170" title="Monitor Industrial TM-PR170">
                    </div>
                    <div class="animado">
                        <div class="gridContMitad">
                            <div>
                                <h4 class="titulos"><b>Ver Producto</b></h4>
                                <a href="https://tienda.logicbus.com.mx/TM-PR170_p_33919.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Comprar TM-PR170 en Tienda México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/TM-PR170_p_30397.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Comprar TM-PR170 en Tienda USA">
                                </a>
                            </div>
                            <div>
                                <h4 class="titulos"><b>Ver más</b></h4>
                                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Ver catálogo Taicenn México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/Taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Ver catálogo Taicenn USA">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    
    <div class="container text-center" style="text-align:center;">
        <div class="griditemContB centrar-producto">
            <div class="cardSimple">
                <div class="card-body contenido">
                    <div><h3 class="titulos"><b>Monitor Industrial TM-RC170</b></h3></div>
                    <div>
                        <img loading="lazy" class="img250"
                            src="images/categorias/2022/pc-comunicaciones-industriales/TM-RC170.webp"
                            alt="Monitor Industrial Montaje en Rack TM-RC170" title="Monitor Industrial TM-RC170">
                    </div>
                    <div class="animado">
                        <div class="gridContMitad">
                            <div>
                                <h4 class="titulos"><b>Ver Producto</b></h4>
                                <a href="https://tienda.logicbus.com.mx/TM-RC170_p_33925.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Comprar TM-RC170 en Tienda México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/TM-RC170_p_30403.html" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Comprar TM-RC170 en Tienda USA">
                                </a>
                            </div>
                            <div>
                                <h4 class="titulos"><b>Ver más</b></h4>
                                <a href="https://tienda.logicbus.com.mx/taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVMX-60.webp" class="imgBorde" alt="Ver catálogo Taicenn México" style="max-width: 45px;">
                                </a>
                                <a href="https://www.logicbus.com/Taicenn" target="_blank">
                                    <img loading="lazy" src="images/LB-TVUS-60.webp" class="imgBorde" style="max-width: 45px;" alt="Ver catálogo Taicenn USA">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <span class="paragraph white">¡Contáctanos hoy mismo y descubre cómo podemos colaborar en tu próximo
                proyecto!</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;" title="Formulario de contacto Logicbus">
                </iframe>
            </div>
        </div>
        </div>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var videoContainers = document.querySelectorAll('.video-container-youtube');

        videoContainers.forEach(function(container) {
            container.addEventListener('click', function() {
                var videoId = this.dataset.videoId;

                var iframe = document.createElement('iframe');
                iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
                    '?autoplay=1&rel=0');
                iframe.setAttribute('title', 'YouTube video player');
                iframe.setAttribute('allow',
                    'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
                );
                iframe.setAttribute('allowfullscreen', '');
                iframe.style.width = "100%";
                iframe.style.height = "100%";

                this.innerHTML = '';
                this.appendChild(iframe);
            });
        });
    });
    </script>
</body>
<?php echo $var_footer; ?>
</html>