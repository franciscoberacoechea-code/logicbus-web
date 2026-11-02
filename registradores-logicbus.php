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
    <title>Registradores de datos industriales - Logicbus</title>

    <meta name="description" content="Los registradores de datos industriales se utilizan ampliamente para registrar y monitorear los valores de temperatura durante un período de tiempo definido.">
    <meta name="keywords" content="registradores,Logicbus, registradores Logicbus, graficadores,recorders,temperature controllers,digital temperature controller,human machine interface module,paperless recorder,operator panels,the recorder,human machine interface control module,protocolos Modbus,registradores gráficos,impresión a papel estilo matriz de puntos,automatizar tus procesos en la industria,norma CFR 21 parte 11, registradores sin papel, Mexico City, Jalisco, Veracruz, Nuevo Leon, Guanajuato, Baja California, Chihuahua, Puebla, Tamaulipas">
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
                <li class="breadcrumb-item active" aria-current="page">Graficadores Logicbus</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-graficadores-registrador-sin-papel" target="_blank">
            <img loading="lazy" src="images/banner/PorMarca/registradores-logicbus.jpg" alt="Registradores Logicbus" title="Registradores Logicbus" style="width: 100%;">
        </a>
    </div>

    <h1 class="main-title text-center mb-5">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Adquisición y Registro de Datos</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">GRAFICADORES LOGICBUS</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Nuestros graficadores de datos sin papel son una excelente opción si lo que quieres es automatizar tus procesos en la industria. Son totalmente seguros para sustituir problemas de registradores que utilizan papel ya que <strong>cumplen con la norma CFR 21 parte 11</strong>, con la ventaja de no requerir consumibles. Contamos con graficadores desde registradores sin papel hasta registradores gráficos de alta calidad y confiabilidad.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Los registradores cuentan con una memoria interna de 256 MB, expandible hasta 2TB, con opciones desde 3 hasta 48 entradas análogas y comunicación ethernet, RS232 o RS485, permitiendo <strong>protocolos Modbus tanto maestros como esclavos</strong> para registrar también canales virtuales.
                </p>
                <p class="intro-text text-justify" style="font-size: 1.1rem; line-height: 1.7;">
                    Por su parte, los registradores gráficos cuentan con impresión a papel estilo matriz de puntos con 6 canales de entrada, interfaz RS-232 y RS-485 (Modbus RTU opcional). Además, son resistentes al polvo y al agua.
                </p>
            </div>

            <div class="col-12 col-lg-5 text-center">
                <div class="bg-light p-4 rounded shadow-sm border h-100 d-flex flex-column justify-content-center">
                    <h4 style="color: var(--lb-primary); font-weight: bold; margin-bottom: 20px;">Formatos Disponibles</h4>
                    <img loading="lazy" src="images/categorias/diagramas-banners/registradores-sin-papel.jpg" alt="registradores-logicbus" class="img-fluid rounded mb-3 mx-auto" style="max-height: 180px;">
                    <ul class="text-muted text-left mx-auto mb-0" style="line-height: 1.8; font-size: 1.05rem; display: inline-block;">
                        <li><strong>3 a 6 canales</strong>, Display de 4.3"</li>
                        <li><strong>3 a 24 Canales</strong>, Display de 5.6"</li>
                        <li><strong>6 a 48 Canales</strong>, Display de 12.1"</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-graficadores-registrador-sin-papel" target="_blank" style="background-color: var(--lb-primary); border-color: var(--lb-primary); color: #fff;">Ver en Tienda</a>
        <a class="btn-circle" href="#video">Video Demostrativo</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#contacto">Contacto</a>
    </nav>

    <div class="bg-light py-5" id="video">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary);">Conoce Nuestros Equipos</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="shadow-lg rounded overflow-hidden" style="position: relative; padding-top: 56.25%; background-color: #000;">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/videoseries?list=PL9EhLTarrD6NyD5vDKj0bXly70eShdpf1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="GuiasyManuales">
        <h2 class="section-title text-center mb-5" style="color: var(--lb-primary);">Guías y Manuales</h2>
        <div class="text-center mb-5">
            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=graficadores+logicbus" target="_blank" class="ghost-manual-box" style="text-decoration: none; border: 2px dashed var(--lb-accent); padding: 30px; border-radius: 15px; display: inline-block; background-color: #fcfcfc; transition: all 0.3s ease;">
                <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación" style="width: 80px; margin-bottom: 15px;">
                <span class="d-block font-weight-bold" style="color: var(--lb-primary); font-size: 1.2rem;">Acceder a Documentación Técnica</span>
            </a>
        </div>
    </div>

    <h2 class="section-title mt-5" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="pdf/catalogos/registradores-de-datos-logicbus.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/graficadores-de-datos.jpg" alt="Catálogo Graficadores">
            <h4>Catálogo de registradores Logicbus</h4>
        </a>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px; text-transform: uppercase;">¿Necesitas asesoría para tu proceso?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">
                Nuestros ingenieros de soporte están listos para ayudarte a elegir el registrador o graficador adecuado para tu proyecto.
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