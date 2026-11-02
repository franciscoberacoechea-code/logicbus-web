<?php
require __DIR__ . "/admin/config.php";
include __DIR__ . "/libreria/libreria.php";
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pico Technology: Osciloscopios para PC y Registradores de Datos | Logicbus</title>
    <meta name="description"
        content="Pico Technology fabrica osciloscopios de alta precisión basados en PC y registradores de datos. Productos competitivos y documentados en ISO 9001 y 14001.">
    <meta name="keywords"
        content="Pico Technology, osciloscopio, registrador de datos, PicoScope, Logicbus, automatización">
    <meta name="author" content="Logicbus">

    <?php echo $favicon ?? ''; ?>
    <?php echo $boostrap_css ?? ''; ?>
    <?php echo $own_file_css ?? ''; ?>
    <?php echo $subcategorias ?? ''; ?>
    <?php echo $menu ?? ''; ?>
    <?php echo $estilos ?? ''; ?>
    <?php echo $footer_css ?? ''; ?>
    <?php echo $google_analytics ?? ''; ?>
    <?php echo $var_headers ?? ''; ?>
</head>

<body>

<?php echo $var_body ?? ''; ?>
<?php require __DIR__ . "/libreria/header.view.php"; ?>

<main id="main" class="container">

    <h1 class="sr-only">PICO TECHNOLOGY</h1>

    <div class="row my-4">
        <aside class="col-md-3">
            <?php menucategorias(); ?>
        </aside>

        <section class="col-md-9" id="subir">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pico Technology</li>
                </ol>
            </nav>

            <img loading="lazy" src="images/banner/www/PorMarca/BANNER-PICOTECH-ABR23.webp"
                 alt="Banner Pico Technology"
                 class="img-fluid w-100 mb-4">

            <article>
                <p style="text-align: justify;">
                    Pico Technology es una industria internacional establecida en 1991 y pronto se convirtió en un líder en el campo de los osciloscopios de PC y los registradores de datos. Reconocidos por ofrecer alternativas innovadoras y rentables a los equipos de prueba tradicionales y productos de adquisición de datos. Al hacerlo, hemos hecho asequible la instrumentación de alta calidad.
						<br><br>
						Además cuenta con registro ISO 9001 Y 14001. Pico Technology pone un enorme esfuerzo en los sistemas para que podamos ofrecer a nuestros clientes productos bien diseñados y confiables a un precio competitivo. Cada individuo es responsable de la calidad de su contribución y nos esforzamos continuamente para mejorar la calidad de los productos y servicios que suministramos.
                </p>

                <nav class="navMenuSuper text-center mt-3">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://tienda.logicbus.com.mx/picotech" target="_blank">Ver en Tienda</a></li>
                        <li class="list-inline-item"><a href="#productos">Productos</a></li>
                        <li class="list-inline-item"><a href="#catalogos">Catálogos</a></li>
                        <li class="list-inline-item"><a href="#articulos">Artículos</a></li>
                        <li class="list-inline-item"><a href="#videos">Videos</a></li>
                        <li class="list-inline-item"><a href="#GuiasyManuales">Guías y Manuales</a></li>
                    </ul>
                </nav>
            </article>

        </section>
    </div>

    <!-- -------------------- CATÁLOGOS -------------------- -->

    <div class="gridContArriba">
        <div class="griditemContB text-center">

            <div class="seccion" id="catalogos">
				<div class="col-center">
					<h2><span>Catálogos</span></h2>
				</div>
			</div>

            <a href="pdf/catalogos/USA/Picotech-catalogo.pdf" target="_blank">
                <img loading='lazy' src="pdf/catalogos/Picotech-catalogo.webp" alt="Picotech-catalogo" class="imgBorde img250">
                <br><strong>Ver catálogo</strong>
            </a>

            <div class="seccion" id="GuiasyManuales">
                <div class="col-center">
                    <h2><span>Guías y Manuales</span></h2>
                </div>
            </div>

            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=picotech">
                <div class="hoverchange">
                    <img loading='lazy' src="images/documentacion.svg" alt="documentacion" width="200px">
                    <button class="button button-circle-white"><b> Documentación</b></button>
                </div>
            </a>
        </div>

        <!-- -------------------- PRODUCTOS -------------------- -->

        <div class="griditemContB">
            <div class="text-center">
                <div class="seccion" id="productos">
                    <div class="col-center">
                        <h2><span>Productos</span></h2>
                    </div>
                </div>
            </div>

            <section class="row">

                <?php
                function product_card($title, $img, $alt, $link_more, $link_store, $extra_class = '')
                {
                    return "
                    <div class='col-md-6 mb-4 {$extra_class}'>
                        <div class='card cardSimple h-100'>
                            <div class='card-body d-flex flex-column'>
                                <h3 class='titulos text-center'><b>{$title}</b></h3>
                                <div class='text-center my-3'>
                                    <img loading='lazy' src='{$img}' alt='{$alt}' class='zoom-image img-fluid img300'>
                                </div>
                                <div class='mt-auto text-center'>
                                    <a class='ver-mas-contacto zoom-button mr-2' href='{$link_more}'>
                                        <span style='color:white;'>Ver más</span>
                                    </a>
                                    <br><br>
                                    <a class='ver-mas-contacto zoom-button' href='{$link_store}' target='_blank'>
                                        <span style='color:white;'>Ver producto</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>";
                }

                $productos = [
                    ['Osciloscopios para PC', 'images/nuestras_marcas/OP-2.webp', 'Osciloscopio para PC Pico', 'osciloscopios-para-pc', 'https://tienda.logicbus.com.mx/osciloscopios.html'],
                    ['Productos y accesorios de radiofrecuencia', 'images/nuestras_marcas/OP-4.webp', 'RF Pico', 'osciloscopios-de-radiofrecuencia', 'https://tienda.logicbus.com.mx/osciloscopios.html'],
                    ['PICO Data Logger/Rango de adquisición de datos', 'images/nuestras_marcas/OP-3.webp', 'PICO Data Logger', 'registradores-picotech', 'https://tienda.logicbus.com.mx/osciloscopios.html'],
                    ['Osciloscopios de muestreo USB', 'images/nuestras_marcas/OP-1.webp', 'Osciloscopio USB', 'osciloscopios-de-muestreo-usb', 'https://tienda.logicbus.com.mx/osciloscopios.html'],
                    ['Osciloscopios automotrices', 'images/nuestras_marcas/OA.webp', 'Osciloscopios automotrices', 'osciloscopios-automotrices', 'https://tienda.logicbus.com.mx/osciloscopios.html']
                ];

                $total_productos = count($productos);

                foreach ($productos as $index => $producto) {
                    $extra_class = '';
                    if ($total_productos % 2 !== 0 && $index === $total_productos - 1) {
                        $extra_class = 'mx-auto';
                    }
                    echo product_card($producto[0], $producto[1], $producto[2], $producto[3], $producto[4], $extra_class);
                }
                ?>

            </section>
        </div>
    </div>

    <!-- -------------------- ARTÍCULOS -------------------- -->

    <section id="articulos" class="container my-5">

    <?php
    function article_card($title, $excerpt, $img_src, $link_url)
    {
        return "
    <div class='col-md-4 mb-4 d-flex justify-content-center'>
        <div class='cardArticulos borange' style='text-align:center;'>
            <a href='{$link_url}' target='_blank'>
                <img loading='lazy' class='imgBorde img-fluid' src='{$img_src}' alt='{$title}'>
            </a>
            <h3 class='TituloArticulo'>{$title}</h3>
            <p class='DesArticulo'>
                {$excerpt}
            </p>

            <button class='btnVerMas' style='margin:0 auto; display:block;'>
                <a class='aSinLinea' href='{$link_url}' target='_blank'>Ver más</a>
            </button>
        </div>
    </div>";
    }

    $articulos = [
        [
            'title' => 'EL Software4 de PicoScope – Análisis de respuesta de frecuencia',
            'excerpt' => 'Esta aplicación proporciona capacidades de análisis de respuesta de frecuencia (FRA) para los instrumentos PicoScope de Pico Technology.',
            'img' => 'images/articulos-portadas/PICO-PicoScope.webp',
            'link' => 'https://www.logicbus.com.mx/blog/el-software4-de-picoscope-fra/'
        ],
        [
            'title' => 'PicoScope 2204A como osciloscopio de escritorio',
            'excerpt' => 'Puede usar su PicoScope Serie 2000 como un osciloscopio avanzado, analizador de espectro, generador de funciones, generador de forma de onda arbitraria y decodificador de protocolo listo para usar.',
            'img' => 'images/articulos-portadas/PICO-Serie-PicoScope.webp',
            'link' => 'https://www.logicbus.com.mx/blog/picoscope-2204a-como-un-osciloscopio-escritorio/'
        ],
        [
            'title' => 'Osciloscopio de muestreo serie PicoScope 9400',
            'excerpt' => 'Con el paso de los días el avance de la tecnología nos sorprende, observamos cómo las empresas evolucionan junto con la tecnología y así mismo sus productos, ya sea que agregan alguna nueva función, un nuevo diseño, etc.',
            'img' => 'images/articulos-portadas/PICO-Osciloscopio.webp',
            'link' => 'https://www.logicbus.com.mx/blog/osciloscopio-de-muestreo-en-tiempo-real-serie-picoscope-9400/'
        ]
    ];
    ?>

    
        <div class="text-center mb-4">
            <div class="seccion mx-auto" id="articulos"> 
                <div class="col-center">
                    <h2><span>Artículos</span></h2>
                </div>
            </div>
        </div>
  
    <div class="row justify-content-center">

        <?php
        foreach ($articulos as $articulo) {
            echo article_card(
                $articulo['title'],
                $articulo['excerpt'],
                $articulo['img'],
                $articulo['link']
            );
        }
        ?>

    </div>

</section>

<!-- -------------------- VIDEOS -------------------- -->

<section id="videos" class="container mb-5">

<?php
function video_card($video_id)
{
    return "
    <div class='griditemContB' style='max-width:300px; margin:15px;' align='center'>
        <div class='video-container-youtube' data-video-id='{$video_id}'>
            <img loading='lazy' 
                src='https://img.youtube.com/vi/{$video_id}/hqdefault.jpg'
                alt='Video de YouTube'
                style='width:100%; border-radius:8px;'>
            <div class='play-button'></div>
        </div>
    </div>";
}

$videos = ['-fYMqWJpfls','Alhpszy7pR4','0W8IA7Zoevc','0Nso9EXSuYA'];
?>

<div class="text-center mb-4">
    <div class="seccion mx-auto" id="videos-titulo"> 
        <div class="col-center">
            <h2><span>Videos</span></h2>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center flex-wrap-nowrap" style="gap:20px; overflow-x:auto;">

    <?php
    foreach ($videos as $id) {
        echo video_card($id);
    }
    ?>

</div>

<div class="divCentrado text-center mt-3">
    <a href="https://www.youtube.com/playlist?list=PL9EhLTarrD6MolBYOGqu4XEM8TdGcehrz" target="_blank">Ver todos los videos</a> |
    <a href="#subir">Ir al principio</a>
</div>

</section>

<?php require __DIR__ . "/libreria/footer.view.php"; ?>
<?php echo $var_footer ?? ''; ?>
<?php echo $bootstrap_js ?? ''; ?>
<?php echo $jquery_js ?? ''; ?>
<?php echo $own_file_js ?? ''; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const videoContainers = document.querySelectorAll('.video-container-youtube');
    videoContainers.forEach(container => {
        container.addEventListener('click', function () {
            const videoId = this.dataset.videoId;
            const iframe = document.createElement('iframe');
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            iframe.title = 'YouTube video player';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;

            this.innerHTML = '';
            this.appendChild(iframe);
        });
    });
});
</script>

</body>
</html>
