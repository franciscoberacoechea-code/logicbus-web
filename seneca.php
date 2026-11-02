<?php
require("admin/config.php");
include("libreria/libreria.php");

/**
 * DATOS ESTRUCTURADOS (ARRAYS)
 */

// 1. Iconos Superiores
$iconosSuperiores = [
    ['img' => 'ADQUISICION-DE-DATOS-DE-SISTEMAS-Y-AUTOMATIZACION.webp', 'alt' => 'Adquisición de datos de sistemas y automatización'],
    ['img' => 'COMUNICACION-INDUSTRIAL-Y-TELECONTROL.webp', 'alt' => 'Comunicación industrial y telecontrol'],
    ['img' => 'MONITORIZACION-Y-MEDIDAS-ELECTRICAS.webp', 'alt' => 'Monitorización de potencia y medición eléctrica'],
    ['img' => 'INSTRUMENTACION-PARA-PANEL.webp', 'alt' => 'Instrumentación del panel de control']
];

// 2. Productos Principales
$productos = [
    [
        'img'   => 'z-sg.webp',
        'link'  => 'https://tienda.logicbus.com.mx/Familia-Z_c_1380.html',
        'titulo'=> 'Adquisición de datos de sistemas y automatización',
        'desc'  => '<b>La línea de productos de adquisición de datos y sistemas de automatización</b> incluye E/S ModBUS, CANopen, Ethernet, tecnología LED y OLED HMI, controladores lógicos IEC 61131 para gestión de energía, IEC 60870-5-101, IEC 60870-5-104, controladores de proceso IEC 61850 y equipos de flujo. Los sistemas SENECA están concebidos para favorecer integradores de sistemas, estudios de proyección e ingeniería.',
    ],
    [
        'img'   => 'z-lte.webp',
        'link'  => 'https://tienda.logicbus.com.mx/Registradores_c_4286.html',
        'titulo'=> 'Comunicación industrial y telecontrol',
        'desc'  => '<b>La línea de productos de Comunicaciones Industriales y Telecontrol </b> incluye módems y puertas de enlace industriales, enrutadores VPN, radios UHF/VHF, interfaces de comunicaciones en serie y fibra óptica. <br><br> Los aparatos de comunicación SENECA permiten ampliar la extensión de las redes y consienten el paso de los datos de proceso entre distintos niveles de la estructura de comunicación IT e industrial.',
    ],
    [
        'img'   => 's711_rog_lr.webp',
        'link'  => 'https://tienda.logicbus.com.mx/consumo-y-analisis-de-energia-electrica.html',
        'titulo'=> 'Monitorización de potencia y medición eléctrica',
        'desc'  => '<b>La línea de productos de Monitoreo de Energía y Medición Eléctrica</b> incluye sistemas para monitorear el consumo, tales como medidores de energía con servidor web multifunción ModBUS, análisis de armónicos, bobinas de Rogowski. <br><br> La fiabilidad y la amplia gama de esta instrumentación permite alcanzar objetivos fundamentales de los cableados y ahorro energético.',
    ],
    [
        'img'   => 's311a.webp',
        'link'  => 'https://tienda.logicbus.com.mx/Indicadores-de-panel_c_2837.html',
        'titulo'=> 'Instrumentación del panel de control',
        'desc'  => '<b>La línea de productos de instrumentos de medición y panel de control</b> incluye convertidores de señal, indicadores digitales, totalizadores, ajustes previos, protección contra sobretensiones. <br><br> Los productos para el acondicionamiento de las señales se pueden utilizar en aplicaciones universales también en combinación con otros productos SENECA.',
    ]
];

// 3. Industrias
$industrias = [
    ['icon' => 'ICONO-5.webp', 'alt' => 'Agrícola', 'text' => '&bull; Agricultura y agroindustria<br> &bull; Ambiente'],
    ['icon' => 'ICONO-3.webp', 'alt' => 'Quimica y farmaceutica', 'text' => '&bull; Quimica y farmaceutica<br>&bull; Laboratorio'],
    ['icon' => 'ICONO-2.webp', 'alt' => 'Tratamiento de aguas', 'text' => '&bull; Tratamiento de aguas<br>&bull; Energía<br>&bull; Energía renovables'],
    ['icon' => 'ICONO-9.webp', 'alt' => 'Industria de hierro', 'text' => '&bull; Industria de hierro y procesamiento de metales'],
    ['icon' => 'ICONO-1.webp', 'alt' => 'Agrícola', 'text' => '&bull; Adquisición de datos'],
    ['icon' => 'alimenticia.webp', 'alt' => 'Bebida y Alimentos', 'text' => '&bull; Bebida<br>&bull; Alimenticia']
];

// 4. Videos (YouTube IDs)
$videos = ['DQxY2kKBBdA', 'CpRi1H4vaI0', 'TlhDpMggsOc'];

// 5. Artículos del Blog
$articulos = [
    [
        'img'   => 'SENECA-alejarse-del-3G.webp',
        'link'  => 'https://www.logicbus.com.mx/blog/listo-para-alejarse-del-3g/',
        'titulo'=> '¿Listo para alejarse del 3G?',
        'desc'  => 'La creciente expansión de las tecnologías 4G y el surgimiento de las primeras redes 5G están creando las condiciones óptimas para el abandono de 3G.'
    ],
    [
        'img'   => 'Seneca-transductor.webp',
        'link'  => 'https://www.logicbus.com.mx/blog/como-escoger-el-transductor-adecuado-para-tu-proyecto/',
        'titulo'=> '¿Cómo escoger el transductor adecuado para tu proyecto?',
        'desc'  => 'Los transductores de corriente, también conocidos comercialmente como CT, son componentes esenciales para el monitoreo de energía.'
    ],
    [
        'img'   => 'seneca-redes-electricas.webp',
        'link'  => 'https://www.logicbus.com.mx/blog/flexibilidad-e-innovacion-para-las-redes-electricas-del-futuro-el-caso-de-lombarda-motori/',
        'titulo'=> 'Flexibilidad e innovación para las redes eléctricas: Lombarda Motori',
        'desc'  => 'El futuro de las redes eléctricas está vinculado a un importante factor de innovación llevado a cabo por SENECA y socios: la flexibilidad eléctrica.'
    ],
    [
        'img'   => 'seneca-Control-remoto.webp',
        'link'  => 'https://www.logicbus.com.mx/blog/control-remoto-de-redes-hidraulicas-y-sostenibilidad/',
        'titulo'=> 'Control remoto de redes hidráulicas y sostenibilidad',
        'desc'  => 'Los puntos de fragilidad del sector del agua principalmente en algunos países de Latinoamérica son numerosos y Europa no se salva de esta situación.'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SENECA | Interfaces de Automatización | Adquisición de Datos</title>
    
    <meta name="description" content="Descubra nuestras líneas de productos: Adquisición de Datos y Automatización, Sistemas de Adquisición de Datos y Automatización, Comunicación Industrial y Control Remoto.">
    <meta name="keywords" content="Logicbus, México, Seneca, Seneca México, acondicionadores, indicadores, adquisicion de datos, comunicación industrial">
    <meta name="copyright" content="Logicbus S.A. de C.V.">

    <link rel="dns-prefetch" href="https://img.youtube.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">

    <style>
        .center-text { text-align: center; }
        img { max-width: 100%; height: auto; }
    </style>

    <?php 
        echo $favicon;
        echo $boostrap_css;
        echo $own_file_css;
        echo $subcategorias;
        echo $menu;
        echo $estilos;
        echo $footer_css;
        echo $flickity_css;
        echo $google_analytics; // Idealmente, este script también debería tener 'async'
        echo $var_headers;
    ?>
</head>

<body>
    
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <main id="main">
        <section>
            <div class="text-center">
                <h1 class="sr-only"><b>SENECA</b></h1>
            </div>
            <div class="gridContArriba">
                <div class="griditemContA">
                    <?php menucategorias(); ?>
                </div>
                
                <div class="griditemContA" id="subir">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Seneca</li>
                        </ol>
                    </nav>
                    
                    <figure class="m-0">
                        <img src="images/banner/www/PorMarca/Banner-Seneca.webp" class="img-fluid" alt="SENECA Banner" title="SENECA" width="100%" height="auto">
                    </figure>
                    <br>
                    
                    <p class="texto-justificado">
                        <b>SÉNECA</b> ha alcanzado una posición preeminente en el mercado italiano de instrumentación electrónica haciendo de la innovación, la fiabilidad y la asistencia cualificada sus puntos de fuerza. Las líneas de producto, ideadas y realizadas en su totalidad en los establecimientos SÉNECA, son compatibles y están abiertas en relación con las normas tecnológicas más difundidas.
                    </p>
                    
                    <div class="row m-0">
                        <?php foreach($iconosSuperiores as $icono): ?>
                        <div class="col-12 col-md-3 seccion-productos">
                            <img loading="lazy" decoding="async" src="imagenes/44/<?php echo $icono['img']; ?>" class="img-fluid" alt="<?php echo $icono['alt']; ?>" title="<?php echo $icono['alt']; ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="text-center mt-3">
                        <nav class="navMenuSuper">
                            <ul>
                                <li><a href="https://tienda.logicbus.com.mx/SENECA_bymfg_11-7-1.html" target="_blank" rel="noopener">Ver en Tienda</a></li>
                                <li><a href="#productos">Productos</a></li>
                                <li><a href="#catalogos">Catálogos</a></li>
                                <li><a href="#industrias">Industrias</a></li>
                                <li><a href="#videos">Videos</a></li>
                                <li><a href="#articulos">Artículos</a></li>
                                <li><a href="#GuiasyManuales">Guias y Manuales</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gridContMitad">
                <div class="griditemContB">
                    <div class="text-center">
                        <a href="https://tienda.logicbus.com.mx/T201_p_4133.html" target="_blank" rel="noopener">
                            <img loading="lazy" decoding="async" class="imgBorde" src="imagenes/44/Post-Seneca-sku-T201.webp" width="100%" alt="Post-Seneca-sku-T201">
                        </a>
                    </div>
                </div>
                <div class="griditemContB">
                    <p class="texto-justificado">
                        SÉNECA pretende confirmar y expandir su oferta de excelencia a través de una amplia gama de productos. Gracias a la sinergia de dos business unit (interfaz para la automatización, Instalaciones & Servicios industriales) organizadas de acuerdo con los criterios de calidad, SÉNECA propone una oferta completa de soluciones de automatización.
                    </p>
                    <p class="texto-justificado">
                        Los acondicionadores de voltaje SÉNECA son eficientes cuando se trata de medir altas tensiones o señales analógicas que los sistemas digitales no pueden aceptar o medir en sus entradas.
                    </p>
                    <p>Así mismo, estos permiten diferentes entradas tales como:</p>
                    <div class="text-center">
                        <img loading="lazy" decoding="async" src="imagenes/44/SENECA-CUADRO-MX.webp" width="100%" alt="Entradas Seneca">
                    </div>
                </div>
            </div>
        </section>

        <section id="productos">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Productos</span></h2>
                    </div>
                </div>
            </div>
            <div class="divCentrado">
                <div class="tabla_subcategorias_grid my-5 textoJus">
                    <?php foreach ($productos as $prod): ?>
                    <article class="row row-striped divColor">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                            <img loading="lazy" decoding="async" src="imagenes/44/<?php echo $prod['img']; ?>" class="img-fluid" alt="<?php echo $prod['titulo']; ?>" title="<?php echo $prod['titulo']; ?>">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                            <a href="<?php echo $prod['link']; ?>">
                                <h3><?php echo $prod['titulo']; ?></h3>
                            </a>
                            <p class="texto-justificado"><?php echo $prod['desc']; ?></p>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                            <a href="<?php echo $prod['link']; ?>" title="Ir a Tienda Logicbus" target="_blank" rel="noopener">
                                <img loading="lazy" decoding="async" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="catalogos">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Catálogos</span></h2>
                    </div>
                </div>
            </div>
            <div class="divCentrado">
                <div class="gridContMitad">
                    <div class="griditemContB text-center">
                        <a href="pdf/catalogos/seneca_en_1810en_r2.pdf" title="Ver catálogo general" target="_blank" rel="noopener">
                            <img loading="lazy" decoding="async" class="imgBorde img250" src="pdf/catalogos/seneca_en_1810en_r2.webp" alt="Catálogo General PDF">
                        </a>
                    </div>
                    <div class="griditemContB text-center">
                        <a href="pdf/catalogos/catalog-of-references-remote-control-and-remote-assist-eng.pdf" title="Ver catálogo control remoto" target="_blank" rel="noopener">
                            <img loading="lazy" decoding="async" class="imgBorde img250" src="pdf/catalogos/catalog-of-references-remote-control-and-remote-assist-eng.webp" alt="Catálogo Control Remoto PDF">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="GuiasyManuales">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Guías y Manuales</span></h2>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pb-4">
                <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=seneca+s.r.l.">
                    <div class="hoverchange">
                        <img loading="lazy" decoding="async" src="images/documentacion.svg" width="200px" class="mx-auto d-block" alt="Documentación Icono">
                        <button class="button button-circle-white d-flex"><b>Documentación</b></button>
                    </div>
                </a>
            </div>
        </section>

        <section id="industrias">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Industrias</span></h2>
                    </div>
                </div>
            </div>

            <div class="divCentrado">
                <div class="gridContTres">
                    <?php foreach ($industrias as $ind): ?>
                    <div>
                        <nav class="navMenuSuper">
                            <ul>
                                <li style="width: 250px;">
                                    <img loading="lazy" decoding="async" style="max-width: 104px;" src="images/nuestras_marcas/futek/Iconos/<?php echo $ind['icon']; ?>" alt="<?php echo $ind['alt']; ?>" title="<?php echo $ind['alt']; ?>">
                                    <div class="mt-2"><?php echo $ind['text']; ?></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="videos">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Videos</span></h2>
                    </div>
                </div>
            </div>

            <div class="gridContTres">
                <?php foreach ($videos as $videoId): ?>
                <div class="griditemContB text-center" style="max-width: 300px;">
                    <div class="video-container-youtube" data-video-id="<?php echo $videoId; ?>">
                        <img loading="lazy" decoding="async" src="https://img.youtube.com/vi/<?php echo $videoId; ?>/hqdefault.jpg" alt="Video Youtube Seneca" style="width:100%; border-radius:8px;">
                        <div class="play-button"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="articulos">
            <div class="divCentrado d-flex justify-content-center">
                <div class="seccion">
                    <div class="col-center text-center">
                        <h2><span>Artículos</span></h2>
                    </div>
                </div>
            </div>

            <div class="gridContCuatro">
                <?php foreach ($articulos as $art): ?>
                <article class="griditemContC text-center">
                    <div class="cardArticulos borange">
                        <div class="text-center">
                            <a href="<?php echo $art['link']; ?>" target="_blank" rel="noopener">
                                <img loading="lazy" decoding="async" class="imgBorde" src="images/articulos-portadas/<?php echo $art['img']; ?>" width="100%" alt="<?php echo $art['titulo']; ?>">
                            </a>
                        </div>
                        <div>
                            <a href="<?php echo $art['link']; ?>">
                                <h3 class="TituloArticulo"><?php echo $art['titulo']; ?></h3>
                            </a>
                            <p class="DesArticulo text-justify">
                                <?php echo $art['desc']; ?>
                                <br>
                            </p>
                            <div class="text-center">
                                <button class="btnVerMas">
                                    <a class="aSinLinea" href="<?php echo $art['link']; ?>" target="_blank" rel="noopener"><span>Ver más</span></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php require("libreria/footer.view.php"); ?>
    
    <?php 
        echo $bootstrap_js;
        echo $jquery_js;
        echo $own_file_js;
    ?>

    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            var videoContainers = document.querySelectorAll('.video-container-youtube');
            videoContainers.forEach(function(container) {
                container.addEventListener('click', function() {
                    var videoId = this.dataset.videoId;
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                    iframe.setAttribute('allowfullscreen', '');
                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>

</body>
<?php echo $var_footer; ?>
</html>