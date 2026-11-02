<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logicbus / Teclados Industriales a prueba de Golpes</title>
    <meta name="description" content="Los teclados industriales que ofrece Logicbus son perfectos para ambientes de uso rudo o en los que se necesita seguridad, ya que soportan golpes, son antivandalismo y tienen sistema contra el derrame de liquidos. Estos teclados robustos también son perfectos para uso en exteriores, como kioskos u hoteles.">
    <meta name="keywords" content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, teclado, teclados, metalicos, metalico, uso rudo, industrial, ambiente, exterior, intemperie, acero, inoxidable, inalámbrico, perifericos">
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

    <style>
        /* Ocultar barra lateral heredada */
        #leftBar {
            display: none;
        }
        /* Prevenir scroll horizontal */
        body, html {
            overflow-x: hidden;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PC's y Comunicaciones Industriales</a></li>
                <li class="breadcrumb-item"><a href="teclados-indice" class="blue link-orange">Teclados Industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teclados Industriales Metálicos</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/banner-teclados-industriales-metalicos.png" alt="Teclados Industriales Metálicos" title="Teclados Industriales Metálicos" style="width: 100%;">
    </div>

    <h1 class="main-title text-center mb-5">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Uso Rudo y Antivandalismo</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">TECLADOS METÁLICOS</span>
    </h1>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Los teclados industriales que ofrece Logicbus son perfectos para ambientes de uso rudo o en los que se necesita seguridad, ya que <strong>soportan golpes, son antivandalismo y tienen sistema contra el derrame de líquidos</strong>. Estos teclados robustos también son perfectos para uso en exteriores, como kioskos u hoteles.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Su durabilidad, sellado y resistencia a la corrosión los hacen ideales para aplicaciones en fábricas, plantas de producción, entornos marinos y otros lugares donde se requiere una entrada de datos fiable y duradera.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Estos teclados suelen tener teclas de tamaño completo y pueden personalizarse para satisfacer las necesidades específicas del usuario, convirtiéndolos en una excelente elección para entornos industriales y comerciales que demandan confiabilidad absoluta.
                </p>
            </div>

            <div class="col-12 col-lg-5">
                <div class="bg-light p-4 rounded shadow-sm border h-100 d-flex flex-column justify-content-center">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Aplicaciones Ideales:</h4>
                    <ul class="text-muted mt-3 mb-0 pl-3" style="line-height: 1.8; font-size: 1.05rem;">
                        <li>Kioskos de información y autoservicio.</li>
                        <li>Entornos marinos y exposición a la intemperie.</li>
                        <li>Fábricas y líneas de producción pesada.</li>
                        <li>Control de acceso en áreas públicas u hoteles.</li>
                        <li>Entornos con riesgo de derrames químicos o agua.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-teclados-industriales-layout-es-teclados-metalicos" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#contacto">Contacto</a>
    </nav>

    <h2 class="section-title" id="productos">Línea de Productos</h2>
    <div class="products-grid">
        
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/teclados/LBD-2988607-1.jpg" alt="Teclados metálicos con Touchpad">
            <h4 style="min-height: 48px;">Metálicos con Touchpad <br><small>(Layout Español)</small></h4>
            <a class="btn-circle" href="teclados-metalicos-con-touchpad-espanol">Ver Modelos</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="assets/images/LBD-2988601-1.jpg" alt="Teclados metálicos sin mouse">
            <h4 style="min-height: 48px;">Metálicos sin Mouse <br><small>(Layout Español)</small></h4>
            <a class="btn-circle" href="teclados-metalicos-sin-mouse-espanol">Ver Modelos</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/teclados/LBD-2988606G-1.jpg" alt="Teclados metálicos con Trackball">
            <h4 style="min-height: 48px;">Metálicos con Trackball <br><small>(Layout Español)</small></h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/Teclados-Met%C3%A1licos-con-Trackball_c_6412.html" target="_blank">Ver Modelos</a>
        </div>

        <div class="product-card">
            <img loading="lazy" src="images/categorias/2023/teclados/LBKB35008-US.jpg" alt="Teclados metálicos Layout Inglés">
            <h4 style="min-height: 48px;">Teclados Metálicos <br><small>(Layout Inglés)</small></h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-teclados-industriales-layout-us-teclados-metalicos" target="_blank">Ver Modelos</a>
        </div>

    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas integrar un teclado metálico?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">
                Nuestros asesores técnicos están listos para ayudarte a elegir el formato, la distribución y el nivel de protección IP adecuados para tu maquinaria o kiosko.
            </span>
        </div>
        
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        </div>

    <?php require("libreria/footer.view.php"); ?>
    
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>
</html>