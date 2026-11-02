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
    <title>Celdas de carga y transductores - Logicbus</title>
    <meta name="description" content="Las Celdas de Carga (Load Cell) son un tipo de transductor de fuerza que convierte una fuerza mecánica de entrada en una señal de salida eléctrica.">
    <meta name="keywords" content="Load cell,celdas de carga,celdas de carga Mexico, celdas de carga Guadalajara,celda de carga tipo s,celdas de carga industriales,celdas de carga para basculas,celda de carga de compresion,celda de carga s,celda de carga extensiometrica,celda de carga precio,celda de carga tipo viga,venta de celdas de carga,sensor celda de carga,celda de carga funcionamiento,calibracion de celdas de carga,celdas de carga mexico,celdas de carga guadalajara, cotizar celdas de carga,Chihuahua,Nuevo Leon,Quretaro,Baja California,Guanajuato,tipos de celdas de carga,que es una celda de carga,aplicaciones de celdas de carga,sensores de celdas de carga,diagrama de conexion de celdas de carga">
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
        #leftBar { display: none; }
        body, html { overflow-x: hidden; max-width: 100%; }

        /* Tarjetas de Producto Visuales */
        .product-card {
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            background: #fff;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .product-card:hover {
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-color: var(--lb-accent, #FF7E00);
            transform: translateY(-5px);
        }
        .product-img {
            height: 120px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        .product-title {
            color: var(--lb-primary, #22527A);
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .product-title:hover { color: var(--lb-accent, #FF7E00); text-decoration: none; }

        /* Contenedor de Videos de YouTube */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
        }
        .video-container img {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover; border: none; opacity: 0.8; transition: opacity 0.3s ease;
        }
        .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }
        .video-container .play-button {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            width: 70px; height: 70px; background-color: rgba(0, 0, 0, 0.6); border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .video-container .play-button::after {
            content: ''; position: absolute; top: 50%; left: 54%; transform: translate(-50%, -50%);
            width: 0; height: 0; border-style: solid; border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }
        @media (hover: hover) {
            .video-container:hover img { opacity: 1; }
            .video-container:hover .play-button { background-color: var(--lb-accent, #FF7E00); transform: translate(-50%, -50%) scale(1.1); }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0 bg-transparent">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Celdas de carga</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-4">
        <video autoplay muted loop playsinline width="100%" poster="https://www.logicbus.com.mx/images/banner/www/PorMarca/banner-celdas-carga.PNG" style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/BANNER-CELDAS-DE-CARGA.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container text-center mb-5">
        <a href="https://www.logicbus.com.mx/futek" target="_blank">
            <img src="images/nuestras_marcas/FUTEK-02.jpg" alt="Futek Logo" class="img-fluid mb-4" style="max-width: 250px;">
        </a>
        
        <nav class="btn-navigation">
            <a class="btn-circle mx-1 mb-2" href="#queson">¿Qué son?</a>
            <a class="btn-circle mx-1 mb-2" href="#celdas">Catálogo de Celdas</a>
            <a class="btn-circle mx-1 mb-2" href="buscador-celdas" style="background-color: var(--lb-accent, #FF7E00); color:#fff; border-color: var(--lb-accent, #FF7E00);">Buscador de Celdas</a>
            <a class="btn-circle mx-1 mb-2" href="#articulos">Artículos</a>
            <a class="btn-circle mx-1 mb-2" href="#diagramas">Esquemas</a>
            <a class="btn-circle mx-1 mb-2" href="#videos">Videos</a>
        </nav>
    </div>

    <div class="container mb-5" id="queson">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">¿Conoces nuestras Celdas de Carga?</h2>
        
        <div class="row align-items-center bg-light rounded shadow-sm border p-4 p-md-5">
            <div class="col-12 col-lg-5 text-center mb-4 mb-lg-0">
                <img loading="lazy" class="img-fluid mb-3" src="https://www.logicbus.com.mx/imagenes/36/celda-de-carga.gif" alt="Diagrama de balanza" style="max-width: 250px;">
                <img loading="lazy" class="img-fluid mt-2" src="https://www.logicbus.com.mx/imagenes/36/celdas-carga-descripcion.png" alt="Tabla descriptiva">
            </div>
            <div class="col-12 col-lg-7">
                <p class="text-justify text-muted" style="font-size: 1.1rem; line-height: 1.7;">
                    Si todavía no las conoces esto es lo que debes saber de ellas:
                </p>
                <p class="text-justify text-muted" style="font-size: 1.1rem; line-height: 1.7;">
                    Las Celdas de Carga (Load Cell) <strong>son un tipo de transductor de fuerza que convierte una fuerza mecánica de entrada, como carga, peso, tensión o compresión, en una señal de salida eléctrica</strong> que se puede medir, convertir y estandarizar. A medida que aumenta la fuerza aplicada, la señal eléctrica cambia proporcionalmente.
                </p>
                <p class="text-justify text-muted" style="font-size: 1.1rem; line-height: 1.7;">
                    Es muy importante que tomes en cuenta que sean fabricadas con <strong>Galgas Extensiométricas</strong>. Estos son sensores cuya resistencia varía con la fuerza aplicada, convirtiendo la presión, tensión o peso en un cambio en la resistencia eléctrica que luego se puede medir con alta precisión.
                </p>
                <div class="alert mt-4 text-center" style="background-color: #e9ecef; border-left: 4px solid var(--lb-primary, #22527A);">
                    <strong style="color: var(--lb-primary, #22527A); font-size: 1.1rem;">Contamos con una amplia gama de celdas de carga que utilizan galgas extensiométricas, formando parte de la tecnología más avanzada en la industria de los sensores.</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center mb-4 mb-lg-0">
                <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga" target="_blank">
                    <img loading="lazy" class="img-fluid rounded shadow-sm border" src="imagenes/36/aplicaciones-de-celdas-carga.jpg" alt="Aplicaciones de celdas de carga" style="max-width: 100%;">
                </a>
            </div>
            <div class="col-12 col-lg-6">
                <p class="text-justify text-muted mb-3">
                    Las Celdas de Carga se han convertido en un elemento esencial tanto en la industria automotriz como en fabricaciones de alta precisión, aeroespacial y defensa, automatización industrial, medicina, farmacéutica y robótica; donde la medición de carga confiable es primordial. Un ejemplo reciente son los avances en <strong>Robots Colaborativos (Cobots) y Robótica Quirúrgica</strong>.
                </p>
                <p class="text-justify text-muted mb-4">
                    Nuestros sensores de fuerza se utilizan desde aplicaciones submarinas hasta proyectos en Marte. Apoyan a las tecnologías emergentes, salvan la vida de las personas e incluso ayudan a controlar prótesis robóticas.
                </p>
                
                <div class="text-center mt-4 mb-3">
                    <a href="aplicaciones-de-celdas-de-carga" class="btn text-white rounded-pill shadow-lg d-block d-md-inline-block" style="background-color: var(--lb-accent, #FF7E00); padding: 18px 40px; font-size: 1.3rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        <i class="fa fa-cogs mr-2"></i> Ver Aplicaciones de Celdas de Carga
                    </a>
                </div>
                
                <div class="text-center mt-3">
                    <a href="https://tienda.logicbus.com.mx/Futek_c_3677.html" target="_blank" class="btn-circle d-inline-block" style="border-color: #6c757d; color: #6c757d;">Ver en Tienda Online</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5" id="celdas">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Nuestro Catálogo de Celdas</h2>
            
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_barra"><img src="images/categorias/2022/celdas-de-carga/celda-barra.jpg" alt="Celda Barra" class="product-img"></a>
                        <a href="celdas_barra" class="product-title">Celda de Carga Barra</a>
                        <p class="small text-muted flex-grow-1">Diseñada para actuadores o jacks hidráulicos. Ideal para tensión y compresión con alta precisión.</p>
                        <a href="https://tienda.logicbus.com.mx/Barra_c_1834.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_columna"><img src="images/categorias/2022/celdas-de-carga/celda-columna.jpg" alt="Celda Columna" class="product-img"></a>
                        <a href="celdas_columna" class="product-title">Celda de Carga Columna</a>
                        <p class="small text-muted flex-grow-1">Basada en columnas comprimidas por fuerza externa, midiendo variación axial y transversal.</p>
                        <a href="https://tienda.logicbus.com.mx/Tipo-columna_c_1823.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_tipos"><img src="images/categorias/2022/celdas-de-carga/celda-s.jpg" alt="Celda Tipo S" class="product-img"></a>
                        <a href="celdas_tipos" class="product-title">Celda de Carga Tipo S</a>
                        <p class="small text-muted flex-grow-1">Ampliamente utilizada para el pesaje de bolsas médicas y control de retroalimentación en línea.</p>
                        <a href="https://tienda.logicbus.com.mx/Tipo-S_c_1597.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_dona"><img src="images/categorias/2022/celdas-de-carga/celda-dona.jpg" alt="Celda Dona" class="product-img"></a>
                        <a href="celdas_dona" class="product-title">Celda de Carga Dona</a>
                        <p class="small text-muted flex-grow-1">Ideal para pruebas de materiales, verificación y calibración de fuerza en prensas y máquinas universales.</p>
                        <a href="https://tienda.logicbus.com.mx/Tipo-dona_c_1625.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_inline"><img src="images/categorias/2022/celdas-de-carga/celda-linea.jpg" alt="Celda En Línea" class="product-img"></a>
                        <a href="celdas_inline" class="product-title">Celda En Línea</a>
                        <p class="small text-muted flex-grow-1">Ofrece alta precisión en tensión/compresión con capacidades desde 25 hasta 50,000 libras.</p>
                        <a href="https://tienda.logicbus.com.mx/En-lnea_c_1632.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_low"><img src="images/categorias/2022/celdas-de-carga/celda-low.jpg" alt="Low Profile" class="product-img"></a>
                        <a href="celdas_low" class="product-title">Low Profile</a>
                        <p class="small text-muted flex-grow-1">Diseño compacto de aluminio o acero inoxidable. Capacidades de 10 a 1000 libras.</p>
                        <a href="https://tienda.logicbus.com.mx/Low-profile-Tensin-Compresin_c_1897.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_pancake_low"><img src="images/categorias/2022/celdas-de-carga/celda-low-pancake.jpg" alt="Pancake Low Profile" class="product-img"></a>
                        <a href="celdas_pancake_low" class="product-title">Low Profile Pancake</a>
                        <p class="small text-muted flex-grow-1">Mediciones exactas para tensión y compresión con bajo perfil, hechas de materiales robustos.</p>
                        <a href="https://tienda.logicbus.com.mx/Low-profile-pancake_c_1854.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_medical"><img src="images/categorias/2022/celdas-de-carga/celda-medical.jpg" alt="Medical" class="product-img"></a>
                        <a href="celdas_medical" class="product-title">Medical Load Cell</a>
                        <p class="small text-muted flex-grow-1">Para la industria médica y automotriz. Diseño delgado, basado en galgas extensiométricas.</p>
                        <a href="https://tienda.logicbus.com.mx/Aplicaciones-mdicas_c_1899.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_panel"><img src="images/categorias/2022/celdas-de-carga/celda-panel.jpg" alt="Montaje en Panel" class="product-img"></a>
                        <a href="celdas_panel" class="product-title">Montaje en Panel</a>
                        <p class="small text-muted flex-grow-1">Tamaño miniatura. Ideal para medición de tensión de fibras. De 10 gramos a 5 libras.</p>
                        <a href="https://tienda.logicbus.com.mx/FSH03395_p_7937.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_miniatura"><img src="images/categorias/2022/celdas-de-carga/celda-boton.jpg" alt="Botón Miniatura" class="product-img"></a>
                        <a href="celdas_miniatura" class="product-title">Botón Miniatura</a>
                        <p class="small text-muted flex-grow-1">Acero inoxidable. Diseñadas para uso sobre superficie plana, recibiendo la carga directamente en el botón.</p>
                        <a href="https://tienda.logicbus.com.mx/Tipo-botn_c_1606.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_beam"><img src="images/categorias/2022/celdas-de-carga/celda-mini-beam.png" alt="Mini-Beam" class="product-img"></a>
                        <a href="celdas_beam" class="product-title">Celda Mini-Beam</a>
                        <p class="small text-muted flex-grow-1">Diseño liviano de fácil montaje lateral. Ideal para espacios ajustados y aplicaciones OEM.</p>
                        <a href="https://tienda.logicbus.com.mx/Montaje-lateral_c_1631.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_viga"><img src="images/categorias/2022/celdas-de-carga/celda-viga.jpg" alt="Celda Viga" class="product-img"></a>
                        <a href="celdas_viga" class="product-title">Celda Viga</a>
                        <p class="small text-muted flex-grow-1">Celda de flexión de diseño delgado, útil para medir fuerza, presión y desplazamiento OEM.</p>
                        <a href="https://tienda.logicbus.com.mx/Viga-de-Flexin_c_1822.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_pancake"><img src="images/categorias/2022/celdas-de-carga/celda-pancake.jpg" alt="Celda Pancake" class="product-img"></a>
                        <a href="celdas_pancake" class="product-title">Celda Pancake</a>
                        <p class="small text-muted flex-grow-1">Alta precisión. Su diseño redondo dirige el movimiento de la carga hacia el centro limitando errores.</p>
                        <a href="https://tienda.logicbus.com.mx/Pancake_c_1840.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="celdas_paralelogramo"><img src="images/categorias/2022/celdas-de-carga/celda-paralelogramo.jpg" alt="Paralelogramo" class="product-img"></a>
                        <a href="celdas_paralelogramo" class="product-title">Paralelogramo</a>
                        <p class="small text-muted flex-grow-1">Para tensión y compresión con diseño liviano y compacto, perfecto para espacios ajustados.</p>
                        <a href="https://tienda.logicbus.com.mx/LSM300_c_1645.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="Paneles"><img src="images/categorias/2022/celdas-de-carga/paneles.jpg" alt="Paneles" class="product-img"></a>
                        <a href="Paneles" class="product-title">Paneles Medidores</a>
                        <p class="small text-muted flex-grow-1">Fácil integración en tablero para trabajar con celdas de carga, torque y presión.</p>
                        <a href="https://tienda.logicbus.com.mx/Paneles_c_1663.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="Display"><img src="images/categorias/2022/celdas-de-carga/panel-display.jpg" alt="Display Portátil" class="product-img"></a>
                        <a href="Display" class="product-title">Display Portátil</a>
                        <p class="small text-muted flex-grow-1">Unidad IHH500 portátil para lectura en campo de sensores de fuerza y torque.</p>
                        <a href="https://tienda.logicbus.com.mx/Display-porttil_c_1664.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="acondicionadores"><img src="images/categorias/2022/celdas-de-carga/acondicionador-senal.jpg" alt="Acondicionador" class="product-img"></a>
                        <a href="acondicionadores" class="product-title">Acondicionador de Señal</a>
                        <p class="small text-muted flex-grow-1">Amplificador para puente completo, transforma salidas mV/V a señales estandarizadas.</p>
                        <a href="https://tienda.logicbus.com.mx/Acondicionador-de-seal_c_1665.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="https://tienda.logicbus.com.mx/M%C3%B3dulos-USB_c_1662.html"><img src="images/categorias/2022/celdas-de-carga/instrumentos-usb.jpg" alt="Módulos USB" class="product-img"></a>
                        <a href="https://tienda.logicbus.com.mx/M%C3%B3dulos-USB_c_1662.html" class="product-title">Módulos USB</a>
                        <p class="small text-muted flex-grow-1">Permite al sensor comunicarse directamente con una PC vía conexión USB Plug & Play.</p>
                        <a href="https://tienda.logicbus.com.mx/Mdulos-USB_c_1662.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product-card">
                        <a href="acc_celdas"><img src="images/categorias/2022/celdas-de-carga/accesorios.jpg" alt="Accesorios" class="product-img"></a>
                        <a href="acc_celdas" class="product-title">Accesorios</a>
                        <p class="small text-muted flex-grow-1">Todo tipo de cables, conectores y herrajes de montaje para la instalación de las celdas FUTEK.</p>
                        <a href="https://tienda.logicbus.com.mx/Accesorios_c_1596.html" target="_blank"><img src="images/shopping_cart.png" alt="Comprar" style="width: 40px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="articulos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Artículos e Infografías</h2>
        
        <div class="row align-items-center justify-content-center">
            
            <div class="col-12 col-md-4 mb-4">
                <a href="https://www.logicbus.com.mx/blog/normas-para-soldaduras-con-celda-de-carga/" target="_blank">
                    <img loading="lazy" src="imagenes/36/celdas-descargas.png" class="img-fluid rounded shadow-sm border" alt="Instalación de Celdas de Carga" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
            
            <div class="col-12 col-md-4 mb-4">
                <a href="https://www.logicbus.com.mx/blog/conecte-celda-de-carga-conector-cable/" target="_blank">
                    <img loading="lazy" src="imagenes/36/celdas-cable.jpg" class="img-fluid rounded shadow-sm border" alt="Conexión con cable" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <a href="https://www.logicbus.com.mx/blog/que-es-una-celda-de-carga-cuales-son-los-diferentes-tipos-de-sensores-de-fuerza-y-como-funcionan-en-la-medicion-de-fuerza/" target="_blank">
                    <img loading="lazy" src="imagenes/36/celdas-tipos.jpg" class="img-fluid rounded shadow-sm border" alt="Tipos de sensores" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <a href="https://www.logicbus.com.mx/blog/modelos-celdas-carga-oem-alto-volumen/" target="_blank">
                    <img loading="lazy" src="imagenes/36/modelos-oem-alto-volumen.jpg" class="img-fluid rounded shadow-sm border" alt="Modelos OEM" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <a href="https://tienda.logicbus.com.mx/sensores.html" target="_blank">
                    <img loading="lazy" src="imagenes/36/celdas-futek.jpg" class="img-fluid rounded shadow-sm border" alt="Celdas FUTEK" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <a href="imagenes/36/infografia-futek.jpg" target="_blank">
                    <img loading="lazy" src="imagenes/36/infografia-futek.jpg" class="img-fluid rounded shadow-sm border" alt="Infografía FUTEK" style="transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>

        </div>
        
        <div class="text-center mt-4">
            <a href="imagenes/36/infografia-celdas.png" target="_blank">
                <img loading="lazy" src="imagenes/36/infografia-celdas.png" class="img-fluid rounded shadow-sm border" alt="Infografía General Celdas" style="max-width: 800px; width: 100%;">
            </a>
        </div>
    </div>

    <div class="bg-light py-5" id="diagramas">
        <div class="container">
            <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Esquemas de Conexión</h2>
            
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md-6 mb-4 text-center">
                    <a href="imagenes/Esquema_FBs-celdasdecarga.html" target="_blank">
                        <img loading="lazy" src="imagenes/Esquema_FBs-celdasdecarga_ch.jpg" alt="Conexión PLC" class="img-fluid border rounded shadow-sm">
                    </a>
                </div>
                <div class="col-12 col-md-6 mb-4 text-center">
                    <a href="imagenes/Esquema_celda_carga.html" target="_blank">
                        <img loading="lazy" src="imagenes/Esquema_celda_carga_ch.jpg" alt="Conexión USB" class="img-fluid border rounded shadow-sm">
                    </a>
                    <p class="text-muted mt-2 small">Selecciona el diagrama para verlo completo</p>
                </div>
            </div>

            <div class="table-responsive shadow-lg rounded bg-white" style="border: 2px solid #ccc;">
                <table class="tablaDGC mx-auto" style="background: url('imagenes/diagramas/Celdas/esquema-celdas-in.png') no-repeat center center; background-size: cover; min-width: 800px;">
                    <tr style="height: 120px;">
                        <td></td>
                    </tr>
                    <tr>
                        <td width="15%" class="text-center">
                            <a href="https://www.logicbus.com.mx/celdas-de-carga" target="_blank">
                                <img src="imagenes/diagramas/Celdas/LCF800.png" class="imgp" width="60%" alt="LCF800">
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="https://tienda.logicbus.com.mx/I-7016P_p_1646.html" target="_blank">
                                <img src="imagenes/diagramas/Celdas/i-7019P.png" class="imgp" width="40%" alt="i-7019P">
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="https://www.logicbus.com.mx/wireless_convertidores" target="_blank">
                                <img src="imagenes/diagramas/Celdas/ZB-2550P.png" class="imgp" width="90%" alt="ZB-2550P">
                            </a>
                        </td>
                        <td style="width: 60px;"></td>
                        <td class="text-center">
                            <a href="https://www.logicbus.com.mx/wireless_convertidores" target="_blank">
                                <img src="imagenes/diagramas/Celdas/ZB-2550P-2.png" class="imgp" width="90%" alt="ZB-2550P-2">
                            </a>
                        </td>
                        <td style="width: 40px;"></td>
                        <td class="text-center">
                            <a href="https://tienda.logicbus.com.mx/I-7561_p_1495.html" target="_blank">
                                <img src="imagenes/diagramas/Celdas/i-7561.png" class="imgp" width="95%" alt="i-7561">
                            </a>
                        </td>
                        <td style="width: 100px;"></td>
                    </tr>
                    <tr>
                        <td class="text-center pt-4">
                            <img id="myflecha" src="imagenes/diagramas/DAQ/flecha-vertical.png" alt="Flecha Vertical" class="punteroD" width="40%"><br>
                            <img src="imagenes/diagramas/DAQ/texto.png" alt="Texto" class="textoD" width="150%"><br><br><br>
                            <img class="dedo" src="imagenes/diagramas/DAQ/dedo-izquierda.png" alt="Dedo Izquierda" width="30%">
                        </td>
                        <td class="text-center">
                            <a href="https://www.logicbus.com.mx/power_supply_din_rails" target="_blank">
                                <img src="imagenes/diagramas/Celdas/LP1020D-05S.png" class="imgp" width="90%" alt="LP1020D-05S">
                            </a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="vertical-align: middle;" class="text-center">
                            <a href="https://www.logicbus.com.mx/FvDesigner" target="_blank">
                                <img src="imagenes/diagramas/Celdas/laptop-industrial.png" class="imgp" width="110%" alt="PC y Software">
                            </a>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container my-5" id="videos">
        <h2 class="section-title bg-transparent text-center mb-5" style="color: var(--lb-primary, #22527A);">Videos Explicativos</h2>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5 mb-4">
                <div class="video-container" data-video-id="jfGv9MHzLyE">
                    <img loading="lazy" src="https://img.youtube.com/vi/jfGv9MHzLyE/hqdefault.jpg" alt="Video FUTEK 1">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 mb-4">
                <div class="video-container" data-video-id="_hMDBZWc960">
                    <img loading="lazy" src="https://img.youtube.com/vi/_hMDBZWc960/hqdefault.jpg" alt="Video FUTEK 2">
                    <div class="play-button"></div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="btn text-white rounded-pill" href="https://www.youtube.com/watch?v=V6sDG5STaeo&list=PL9EhLTarrD6N9kCnzJzP9Xtg-DeDujrvv&index=25" target="_blank" style="background-color: #dc3545; padding: 12px 30px; font-weight: bold;">
                <i class="fa fa-youtube-play"></i> Ver todos los videos en YouTube
            </a>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary, #22527A);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white, #fff); margin-bottom: 15px; text-transform: uppercase;">¿Buscas una celda de carga específica?</h2>
            <span class="paragraph" style="color: var(--lb-white, #fff); font-size: 1.1rem;">
                Nuestro equipo de ingenieros puede ayudarte a seleccionar la capacidad, el formato y el acondicionador de señal ideal para tu máquina.
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

    <script>
        // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    if(videoId) {
                        var iframe = document.createElement('iframe');
                        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                        iframe.setAttribute('title', 'YouTube video player');
                        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                        iframe.setAttribute('allowfullscreen', '');

                        this.innerHTML = '';
                        this.appendChild(iframe);
                    }
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>
</html>