<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PeakBoard - Logicbus</title>
    <meta name="description"
        content="Peakboard ofrece soluciones innovadoras para la visualización de datos en tiempo real y la automatización de procesos industriales...">

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
    .icon:hover {
        color: var(--orange);
        fill: var(--orange);
    }

    a.icon {
        color: black;
    }

    .star-icon {
        width: 20px;
        height: 20px;
    }

    .card-body {
        min-height: 350px;
    }

    .form-label {
        color: #ffffff;
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
                <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de
                        desarrollo</a></li>
                <li class="breadcrumb-item"><a href="peakboard" class="blue link-orange">Peakboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Peakboard Designer</li>
            </ol>
        </nav>
    </div>
    <div class="mb-5">
        <img src="https://www.logicbus.com.mx/imagenes/332/Peakboard-designer.png" alt="Peakboard Designer"
            width="100%">
    </div>

    <section>
        <div class="container-fluid mb-5  text-center">
            <h2 class="title blue mb-3">Conecta datos y
                crea tus propias aplicaciones</h2>
        </div>
        <div class="container text-justify mb-5">
            <p class="paragraph">Desde la visualización de sus datos de producción hasta el control y monitoreo de
                máquinas y sistemas de gestión del taller: no hay límites para lo que puede hacer cuando instala redes y
                tecnología digital en su fábrica con Peakboard.
            </p>
        </div>
        <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
            <a class="button-text" href="https://tienda.logicbus.com.mx/peakboard" target="_blank"><button
                    class="button button-white">Ver en Tienda</button></a>
            <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
            <a class="button-text" href="#descarga"><button class="button button-white">Software</button></a>
            <a class="button-text" href="#videos"><button class="button button-white">Videos</button></a>
        </div>
    </section>

    <!-- Producto -->
    <section class="container text-center light-black my-5">
        <h1 class="title mb-5">Prueba Peakboard Designer ahora </h1>
        <p class="paragraph mb-5">Capture, procese y visualice sus datos de pedidos, por ejemplo, de SAP con los datos
            de producción de su máquina, en tiempo real y sin grandes esfuerzos de programación. <br>
            Simplemente descargue el software de forma gratuita, instálelo en su PC y comience.</p>
        <div class="row">
            <div class="col-6 col-md-4">
                <a href="#logicas" class="text-decoration-none icon">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Icons_contour" viewBox="0 0 256 256" width="100px"
                        height="100px">
                        <circle cx="215.92" cy="67.33" r="4.55"></circle>
                        <circle cx="201.92" cy="67.33" r="4.55"></circle>
                        <circle cx="187.8" cy="67.33" r="4.55"></circle>
                        <path
                            d="m233.94,51.88H22.06c-2.21,0-4,1.79-4,4v144.25c0,2.21,1.79,4,4,4h132.98v-8H26.06v-113.13h36.19v42c0,2.21,1.79,4,4,4h41.29c.02,2.69.9,5.4,2.67,7.66l21.87,32.25c.06.09.13.18.19.26,6,7.46,14.93,11.73,24.5,11.73h24.1c7.18,0,13.93-2.8,19-7.88,5.08-5.09,7.86-11.84,7.84-19.05l-.22-27.84c0-11.08-6.03-18.03-15.78-18.24-.16-3.72-1.99-7.46-4.85-9.87-2.62-2.19-5.86-3.13-9.18-2.6h0c-1.76.24-3.39.84-4.84,1.7-.67-1.37-1.55-2.61-2.59-3.65v-10.47h59.68v113.13h-26.27v8h30.27c2.21,0,4-1.79,4-4V55.88c0-2.21-1.79-4-4-4Zm-123.58,69.12h-40.1v-45.74h92v14.86c-.63,0-1.28.05-1.92.15-.07,0-.14.02-.21.04h-.02s-.05.01-.07.01c-2.12.36-4.06,1.21-5.69,2.44-2.02-2.63-5.03-4.49-8.5-4.99h-.03c-3.84-.32-7.38.8-9.96,3.16-2.63,2.41-4.07,5.92-4.07,9.89v22.65l-1.96-2.42c-4.32-5.38-12.23-6.23-17.65-1.88-.68.56-1.29,1.17-1.82,1.83Zm46.69-21.74v.18c0-.06,0-.12-.02-.18h.02Zm17.33,25.74v-16.54c0-2.56,1.91-4.77,4.44-5.13h0c1.07-.18,2.03.08,2.91.82,1.2,1.01,2.01,2.74,2,4.31v22.17h8v-14.74c5.15.2,7.77,3.64,7.77,10.27l.22,27.86c0,5.04-1.94,9.78-5.5,13.35-3.56,3.57-8.3,5.53-13.34,5.53h-24.1c-7.08,0-13.69-3.14-18.16-8.62l-21.86-32.24c-.07-.09-.13-.19-.21-.27-1.57-1.94-1.27-4.81.66-6.38,1.96-1.57,4.83-1.27,6.39.68l9.04,11.2c.76.94,1.94,1.49,3.15,1.49,2.21,0,4-1.8,4-4v-33.94c0-1.72.51-3.1,1.48-3.99.89-.81,2.15-1.2,3.68-1.1,2.11.41,3.75,2.12,4.1,4.22v21.05h8v-17.92c.11-2.46,1.97-4.55,4.42-4.9h0c1.09-.19,2.01.02,2.81.66,1.19.94,1.99,2.69,2.1,4.58v21.58h8Zm55.56-50h-59.68v-3.74c0-2.21-1.79-4-4-4h-100c-2.21,0-4,1.79-4,4v3.74H26.06v-15.12h203.87v15.12Z">
                        </path>
                        <path d="m145.85,87.77h-.03s.02-.01.03,0Z"></path>
                        <path d="m149.04,102.7v.61h0c0-.2,0-.41,0-.61Z"></path>
                        <path d="m157.04,99.26v.18c0-.06,0-.12-.02-.18h.02Z"></path>
                        <path d="m160.33,90.26h0c-.07.02-.14.03-.21.05.07-.02.14-.04.21-.05Z"></path>
                        <rect x="91.63" y="157.62" width="10" height="8"></rect>
                        <rect x="67.63" y="157.62" width="12" height="8"></rect>
                        <path d="m55.63,165.62h-10c-2.21,0-4-1.79-4-4v-10h8v6h6v8Z"></path>
                        <rect x="41.63" y="129.12" width="8" height="11.25"></rect>
                        <path d="m49.63,117.88h-8v-10c0-2.21,1.79-4,4-4h9.25v8h-5.25v6Z"></path>
                        <path d="m157.04,99.26v.18c0-.06,0-.12-.02-.18h.02Z"></path>
                    </svg>
                    <p class="font-weight-bold">
                        Cree lógicas complejas con facilidad
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" id="uuid-72bda2be-de84-49a3-a5fb-9634d282fa30"
                        viewBox="0 0 95.5 93.2" width="50px" height="50px">
                        <path
                            d="m47.8,49c-.8,0-1.6-.3-2.1-.9L13.1,15.5c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                        <path
                            d="m47.8,82.9c-.8,0-1.6-.3-2.1-.9L13.1,49.4c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="#analisis" class="text-decoration-none icon">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Icons_contour" viewBox="0 0 256 256" width="100px"
                        height="100px">
                        <path d="m138.39,145.74c-.88-.26-1.74-.57-2.58-.92l2.58.92Z"></path>
                        <path d="m138.39,167.99v.53s-.05,0-.07,0c.05-.18.07-.35.07-.52Z"></path>
                        <path d="m138.32,168.52s.04.02.07,0v-.53c0,.17-.02.34-.07.52Z"></path>
                        <path
                            d="m228.08,182.77l-28.19-28.19c-1.77-1.78-4.66-1.78-6.44,0l-.5.5-5.97-5.97c6.47-8.51,10.32-19.13,10.32-30.63,0-27.97-22.76-50.73-50.73-50.73-19.19,0-35.93,10.72-44.54,26.48-5.27-.48-10.71-.72-16.14-.72-30.07,0-60.51,7.39-60.51,21.51v79.1c0,14.12,30.44,21.51,60.51,21.51s60.5-7.39,60.5-21.51v-24.92h.18c11.23,0,21.62-3.67,30.03-9.87l6.05,6.05-.25.25c-1.77,1.77-1.77,4.66,0,6.44l28.19,28.19c2.34,2.33,5.45,3.62,8.75,3.62s6.41-1.29,8.74-3.62c4.83-4.82,4.83-12.67,0-17.49ZM85.89,101.51c4.52,0,8.77.16,12.73.44-1.8,5.18-2.77,10.74-2.77,16.53,0,3.33.32,6.58.94,9.73-3.44.21-7.07.32-10.9.32-33.97,0-52.51-8.93-52.51-13.51s18.54-13.51,52.51-13.51Zm-52.51,24.77c11.01,6.76,31.85,10.25,52.51,10.25,4.39,0,8.79-.16,13.1-.47,2.39,6.44,6.05,12.27,10.68,17.18-6.79,1.02-14.74,1.65-23.78,1.65-33.97,0-52.51-8.92-52.51-13.51v-15.1Zm0,26.36c11.01,6.77,31.85,10.25,52.51,10.25,10.97,0,21.98-.98,31.55-2.91,6.11,4.3,13.2,7.28,20.87,8.54-1.3,4.7-19.7,12.98-52.42,12.98s-52.51-8.92-52.51-13.5v-15.36Zm105.01,41.48c0,4.58-18.53,13.51-52.5,13.51s-52.51-8.93-52.51-13.51v-14.87c11.01,6.77,31.85,10.25,52.51,10.25s41.49-3.48,52.5-10.25v14.87Zm8.18-32.92h-.18c-2.74-.01-5.41-.28-8-.79-3.51-.68-6.87-1.79-10.02-3.29-3.25-1.53-6.28-3.47-9.02-5.74-5.2-4.31-9.37-9.83-12.07-16.13-1.06-2.46-1.89-5.05-2.46-7.73-.64-2.91-.97-5.94-.97-9.04,0-5.54,1.06-10.85,3-15.71,1.04-2.64,2.35-5.16,3.88-7.51,7.62-11.74,20.84-19.51,35.84-19.51,23.56,0,42.73,19.17,42.73,42.73s-19.17,42.72-42.73,42.72Zm75.86,33.4c-.83.83-1.92,1.28-3.09,1.28s-2.26-.45-3.09-1.28l-25.75-25.75,6.17-6.18,25.76,25.75c.85.85,1.28,1.97,1.28,3.09s-.43,2.24-1.28,3.09Z">
                        </path>
                        <path
                            d="m146.57,82.01c-11.84,0-22.37,5.67-29.04,14.43-1.71,2.24-3.16,4.69-4.31,7.3-2.01,4.51-3.12,9.5-3.12,14.74,0,2.82.32,5.56.93,8.19.61,2.67,1.52,5.22,2.68,7.63,2.95,6.09,7.54,11.25,13.2,14.89,3,1.92,6.3,3.42,9.82,4.41.55.16,1.1.3,1.66.42,2.57.6,5.25.92,8,.93h.18c20.12,0,36.48-16.36,36.48-36.47s-16.36-36.47-36.48-36.47Zm0,64.94h-.18c-.57,0-1.13-.02-1.68-.07-2.18-.13-4.3-.52-6.32-1.13-.88-.26-1.74-.57-2.58-.92-5.89-2.41-10.8-6.74-13.93-12.21-1.34-2.31-2.36-4.83-2.99-7.49-.52-2.13-.79-4.36-.79-6.65,0-4.68,1.13-9.09,3.15-12.99,1.3-2.54,2.98-4.87,4.97-6.89,5.17-5.3,12.38-8.59,20.35-8.59,15.71,0,28.48,12.77,28.48,28.47s-12.77,28.47-28.48,28.47Z">
                        </path>
                        <path
                            d="m216.12,40.38h-74.92c-3.57,0-6.47,2.89-6.47,6.44v16.06h8v-14.5h65.08v15.08c0,3.55,2.91,6.43,6.48,6.43h14.94v98.62h8V61.49l-21.11-21.12Zm-.31,21.51v-10.5l10.5,10.5h-10.5Z">
                        </path>
                    </svg>
                    <p class="font-weight-bold">Análisis exhaustivo de datos</p>
                    <svg xmlns="http://www.w3.org/2000/svg" id="uuid-72bda2be-de84-49a3-a5fb-9634d282fa30"
                        viewBox="0 0 95.5 93.2" width="50px" height="50px">
                        <path
                            d="m47.8,49c-.8,0-1.6-.3-2.1-.9L13.1,15.5c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                        <path
                            d="m47.8,82.9c-.8,0-1.6-.3-2.1-.9L13.1,49.4c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="#interactividad" class="text-decoration-none icon">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Icons_vector" viewBox="0 0 256 256" width="100px"
                        height="100px">
                        <path
                            d="m140.75,211.99l-7.99.02h0s-.16-53.01-.16-53.01c0-6.16-4.57-11.51-10.64-12.45l-27.98-4.44c-.17-.03-.27-.04-.38-.04l-.36-.03c-2.05-.19-3.63-1.92-3.63-3.99v-38.81c0-2.51-2.03-4.54-4.53-4.54s-4.54,2.03-4.54,4.54v59.76c0,.19.02.42.06.69.03.19.04.38.04.57v19.69c0,1.69-1.07,3.2-2.67,3.77-1.6.56-3.37.06-4.44-1.26l-9.17-11.33c-1.57-1.95-4.43-2.25-6.39-.68-1.93,1.57-2.24,4.44-.66,6.38l28.29,35.17h-10.27l-24.25-30.15c-4.33-5.35-3.51-13.26,1.86-17.62,5.42-4.35,13.33-3.5,17.65,1.88l2.05,2.53v-8.11c-.07-.53-.1-1.05-.1-1.53v-59.76c0-6.92,5.63-12.54,12.54-12.54s12.53,5.62,12.53,12.54v35.34l25.6,4.06c10.07,1.58,17.39,10.13,17.39,20.35l.16,53Zm-8,.01h0s0,.01,0,.01h0s0-.01,0-.01Zm89.01-104.38c0,9.24-7.52,16.76-16.76,16.76s-16.74-7.52-16.74-16.76c0-.96.08-1.9.24-2.82l-15.99-5.22c-3.02,7.5-10.37,12.8-18.94,12.8s-16.31-5.58-19.19-13.39l-15.31,4.13c-.15,9.59-4.33,18.72-11.55,25.09l-4.93-5.58c5.75-5.08,9.05-12.39,9.05-20.05,0-14.76-12.01-26.76-26.76-26.76s-26.76,12-26.76,26.76c0,7.69,3.32,15.01,9.1,20.1l-4.92,5.59c-2.68-2.36-4.95-5.1-6.75-8.11l-19.79,6.89-2.51-7.6,19.01-6.62c-1.04-3.28-1.58-6.73-1.58-10.25,0-18.86,15.34-34.2,34.2-34.2,16.28,0,29.93,11.43,33.36,26.68l14.92-4.03c.47-10.85,9.45-19.53,20.41-19.53s20.27,9.01,20.42,20.15l17.73,5.79c3.06-3.99,7.88-6.56,13.28-6.56,9.24,0,16.76,7.51,16.76,16.74Zm-55.76-15.68c0-6.86-5.57-12.44-12.43-12.44s-12.44,5.58-12.44,12.44,5.58,12.44,12.44,12.44,12.43-5.58,12.43-12.44Zm47.76,15.68c0-4.82-3.93-8.74-8.76-8.74s-8.74,3.92-8.74,8.74,3.92,8.76,8.74,8.76,8.76-3.93,8.76-8.76Zm24.18,92.51V55.88c0-2.21-1.79-4-4-4H22.07c-2.21,0-4,1.79-4,4v144.25c0,2.21,1.79,4,4,4h32.68v-8h-28.68V59.88h203.87v136.25h-83.06v8h87.06c2.21,0,4-1.79,4-4Z">
                        </path>
                    </svg>
                    <p class="font-weight-bold">
                        Crear interactivdad
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" id="uuid-72bda2be-de84-49a3-a5fb-9634d282fa30"
                        viewBox="0 0 95.5 93.2" width="50px" height="50px">
                        <path
                            d="m47.8,49c-.8,0-1.6-.3-2.1-.9L13.1,15.5c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                        <path
                            d="m47.8,82.9c-.8,0-1.6-.3-2.1-.9L13.1,49.4c-1.2-1.2-1.2-3.1,0-4.2,1.2-1.2,3.1-1.2,4.2,0l30.4,30.4,30.4-30.4c1.2-1.2,3.1-1.2,4.2,0,1.2,1.2,1.2,3.1,0,4.2l-32.6,32.6c-.6.6-1.3.9-2.1.9Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="container mt-5">
            <div class="carousel"
                data-flickity='{ "wrapAround": true, "autoPlay": 3000, "pageDots": true, "contain": true }'>

                <!-- Reseña 1 -->
                <div class="carousel-cell">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="stars mb-3">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p>"Solución muy flexible y sencilla con amplias posibilidades de aplicación. Se utiliza
                                    en diversas áreas de producción y logística junto con datos SAP y no ERP. Se integra
                                    completamente con muchas interfaces estándar y ofrece una gran flexibilidad de
                                    desarrollo. Alto grado de libertad en la presentación de visualizaciones."</p>
                                <footer class="blockquote-footer mt-2">Martin L.<br> Director de TI para EMEA</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Reseña 2 -->
                <div class="carousel-cell">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="stars mb-3">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p>"Nuestro departamento necesita datos de diferentes sistemas. Con Peakboard, todas las
                                    fuentes de datos se pueden reunir en una sola vista general. El ahorro de tiempo es
                                    enorme, ya que los datos de los sistemas anteriores se sincronizan automáticamente
                                    y, sobre todo, en tiempo real. Ahora podemos tomar medidas en función de los datos
                                    en tiempo real sin perder tiempo. Diseño sencillo de paneles de control
                                    significativos sobre los KPI que son importantes para nosotros. Forma de trabajar
                                    intuitiva."</p>
                                <footer class="blockquote-footer mt-2">Anela B.<br> Rev. Acc., Servicios Ambientales
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Reseña 3 -->
                <div class="carousel-cell">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="stars mb-3">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p>"Puedes profundizar en la representación gráfica de datos sencillos. Si te gusta que
                                    sea un poco más bonito, también puedes utilizar las innumerables plantillas y
                                    personalizarlas fácilmente. Si necesitas ayuda, es totalmente precisa y te interesa
                                    mucho. Solíamos implementar paneles de pared con la ayuda de viejos portátiles con
                                    Windows. Me emocionó que hubiera una solución tan excelente para que esto se pudiera
                                    gestionar de forma más profesional".</p>
                                <footer class="blockquote-footer mt-2">Benjamin S.<br> Administrador de TI</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Reseña 4 -->
                <div class="carousel-cell">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="stars mb-3">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p>"La visualización da una impresión muy profesional. Antes se utilizaba Flipchart para
                                    las presentaciones, pero ahora Peakboard es el sistema más adecuado. Es actual y
                                    práctico. En general, es un sistema muy bueno para visualizar datos de procesos."
                                </p>
                                <footer class="blockquote-footer mt-2">Christo<br> BL en Alemania</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <!-- Reseña 5 -->
                <div class="carousel-cell">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <div class="stars mb-3">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                                <img src="https://www.logicbus.com.mx/imagenes/332/estrella.png" alt="estrella"
                                    class="star-icon d-inline">
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p>"Un software muy claro y ordenado. La administración se realiza con bastante rapidez
                                    tras unos pocos clics y el software es fácil y rápido de configurar y administrar".
                                </p>
                                <footer class="blockquote-footer mt-2">Sven<br> Desarrollador de software en Alemania
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="logicas" class="container text-center light-black my-5">
        <h1 class="title mb-5">Cree lógicas complejas con facilidad</h1>
        <video src="https://www.logicbus.com.mx/imagenes/332/01_BuildingBlocks_EN.webm" width="100%" autoplay muted loop
            playsinline preload="auto" loading="lazy" class="mb-4"></video>

        <div class="row m-4">
            <div class="col-12 col-md-6 mb-4">
                <p class="paragraph ">
                    Peakboard Designer es un software de código reducido que puede utilizar para crear aplicaciones
                    complejas sin conocimientos de programación extensos. Gracias a nuestra interfaz fácil de usar,
                    puede crear sus cuadros de mando de forma rápida y sencilla. Esto le permite ahorrar recursos de TI,
                    ya que el propio departamento conecta las fuentes de datos deseadas y procesa los datos mediante
                    flujos de datos.
                </p>
            </div>
            <div class="col-12 col-md-6 p-4" style="border: 2px solid; color: var(--light-orange);">
                <div class="p-2"
                    style="background-color:var(--light-orange); width:200px; position:absolute; top:-20px; left:-10px">
                    <svg class="d-inline" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                        fill="none">
                        <g clip-path="url(#clip0_2678_2163)">
                            <path d="M12.6875 27.1875H16.3125" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M21.75 14.4999C21.7548 13.1429 21.3787 11.8117 20.6643 10.6578C19.95 9.50391 18.9261 8.5737 17.7092 7.97298C16.4923 7.37225 15.1313 7.12514 13.7809 7.25976C12.4305 7.39437 11.1449 7.9053 10.0706 8.73443C8.99622 9.56355 8.17613 10.6776 7.70363 11.9498C7.23113 13.2219 7.12518 14.6012 7.39784 15.9306C7.67049 17.26 8.31081 18.4862 9.24594 19.4697C10.1811 20.4532 11.3735 21.1545 12.6875 21.4938V23.5624H16.3125V21.4938C17.8659 21.0957 19.2429 20.1927 20.2272 18.9267C21.2115 17.6607 21.7471 16.1035 21.75 14.4999Z"
                                stroke="white" stroke-width="1.8125" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M14.5 3.625V1.8125" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M25.375 12.6875H27.1875" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1.8125 14.5H3.625" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M22.1914 21.2836L23.4734 22.5656" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 4.62183L6.80939 5.90387" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M22.1914 5.90387L23.4734 4.62183" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 22.5656L6.80939 21.2836" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2678_2163">
                                <rect width="29" height="29" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="d-inline white p-2  font-weight-bold">Características</p>
                </div>
                <p class="paragraph m-2" style="color:black;">
                    <b>Building Blocks</b>
                    es el editor de código visual de Peakboard Designer. Te permite usar lógicas y
                    procesos complejos mediante la creación de instrucciones, bucles y opciones de entrada interactivas,
                    por ejemplo, sin tener que escribir una línea de código.
                </p>
            </div>
        </div>
    </div>
    <div id="analisis" class="container text-center light-black my-5">
        <h1 class="title mb-5">Análisis de datos completos </h1>
        <video src="https://www.logicbus.com.mx/imagenes/332/03_Dataflow_EN.webm" width="100%" autoplay muted loop
            playsinline preload="auto" loading="lazy" class="mb-4"></video>

        <div class="row m-4">
            <div class="col-12 col-md-6 mb-4">
                <p class="paragraph">
                    Peakboard Designer se comunica con una gran cantidad de fuentes de datos muy diferentes. Sin
                    importar qué sistemas utilice en su empresa, ya sea Excel, JSON, bases de datos, MES o sistemas ERP,
                    puede combinar fácilmente todas sus fuentes de datos en un solo panel en Peakboard Designer.
                    <br><br>
                    Peakboard también le permite introducir o extraer la información que necesita a través de
                    dispositivos externos, como interruptores, lectores de códigos de barras y luces de señalización.
                    Esto también le permite utilizar datos de proceso relevantes que aún no se han recopilado o que
                    están disponibles digitalmente.
                </p>
            </div>
            <div class="col-12 col-md-6 p-4" style="border: 2px solid; color: var(--light-orange); height: 200px;;">
                <div class="p-2"
                    style="background-color:var(--light-orange); width:200px; position:absolute; top:-20px; left:-10px">
                    <svg class="d-inline" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                        fill="none">
                        <g clip-path="url(#clip0_2678_2163)">
                            <path d="M12.6875 27.1875H16.3125" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M21.75 14.4999C21.7548 13.1429 21.3787 11.8117 20.6643 10.6578C19.95 9.50391 18.9261 8.5737 17.7092 7.97298C16.4923 7.37225 15.1313 7.12514 13.7809 7.25976C12.4305 7.39437 11.1449 7.9053 10.0706 8.73443C8.99622 9.56355 8.17613 10.6776 7.70363 11.9498C7.23113 13.2219 7.12518 14.6012 7.39784 15.9306C7.67049 17.26 8.31081 18.4862 9.24594 19.4697C10.1811 20.4532 11.3735 21.1545 12.6875 21.4938V23.5624H16.3125V21.4938C17.8659 21.0957 19.2429 20.1927 20.2272 18.9267C21.2115 17.6607 21.7471 16.1035 21.75 14.4999Z"
                                stroke="white" stroke-width="1.8125" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M14.5 3.625V1.8125" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M25.375 12.6875H27.1875" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1.8125 14.5H3.625" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M22.1914 21.2836L23.4734 22.5656" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 4.62183L6.80939 5.90387" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M22.1914 5.90387L23.4734 4.62183" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 22.5656L6.80939 21.2836" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2678_2163">
                                <rect width="29" height="29" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="d-inline white p-2  font-weight-bold">Características</p>
                </div>
                <p class="paragraph m-2" style="color:black;">
                    Al configurar <b>flujos de datos prácticos,</b> puede procesar, limpiar, interconectar y agregar
                    fácilmente
                    sus datos. De esta manera, puede crear nuevos datos relevantes para tomar decisiones bien
                    fundamentadas.
                </p>
            </div>
        </div>
    </div>
    <div id="interactividad" class="container text-center light-black my-5">
        <h1 class="title mb-5">Cree interactividad con Peakboard como HMI </h1>
        <video src="https://www.logicbus.com.mx/imagenes/332/02_ConditionalFormatting_EN.webm" width="100%" autoplay
            muted loop playsinline preload="auto" loading="lazy" class="mb-4"></video>

        <div class="row m-4">
            <div class="col-12 col-md-6 mb-4">
                <p class="paragraph">
                    ¡Haga más con su panel de control! Puede interactuar con su panel de control y escribir datos en él
                    mediante botones u otros controles interactivos en la pantalla táctil o con un mouse. De esta
                    manera, Peakboard se convierte en una HMI que puede usar para comunicarse fácilmente con sus
                    máquinas.
                </p>
            </div>
            <div class="col-12 col-md-6 p-4" style="border: 2px solid; color: var(--light-orange); height: 200px;;">
                <div class="p-2"
                    style="background-color:var(--light-orange); width:200px; position:absolute; top:-20px; left:-10px">
                    <svg class="d-inline" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"
                        fill="none">
                        <g clip-path="url(#clip0_2678_2163)">
                            <path d="M12.6875 27.1875H16.3125" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M21.75 14.4999C21.7548 13.1429 21.3787 11.8117 20.6643 10.6578C19.95 9.50391 18.9261 8.5737 17.7092 7.97298C16.4923 7.37225 15.1313 7.12514 13.7809 7.25976C12.4305 7.39437 11.1449 7.9053 10.0706 8.73443C8.99622 9.56355 8.17613 10.6776 7.70363 11.9498C7.23113 13.2219 7.12518 14.6012 7.39784 15.9306C7.67049 17.26 8.31081 18.4862 9.24594 19.4697C10.1811 20.4532 11.3735 21.1545 12.6875 21.4938V23.5624H16.3125V21.4938C17.8659 21.0957 19.2429 20.1927 20.2272 18.9267C21.2115 17.6607 21.7471 16.1035 21.75 14.4999Z"
                                stroke="white" stroke-width="1.8125" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M14.5 3.625V1.8125" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M25.375 12.6875H27.1875" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1.8125 14.5H3.625" stroke="white" stroke-width="1.8125" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M22.1914 21.2836L23.4734 22.5656" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 4.62183L6.80939 5.90387" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M22.1914 5.90387L23.4734 4.62183" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.52734 22.5656L6.80939 21.2836" stroke="white" stroke-width="1.8125"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2678_2163">
                                <rect width="29" height="29" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="d-inline white p-2  font-weight-bold">Características</p>
                </div>
                <p class="paragraph m-2" style="color:black;">
                    Al utilizar <b>el formato condicional,</b> puede especificar que varios estados y señales que
                    defina
                    garantizarán que ciertos elementos de su tablero se puedan resaltar o cambiar en tiempo real, por
                    ejemplo.
                </p>
            </div>
        </div>
    </div>
    <!-- PRODUCTOS -->
    <section class="container" id="productos">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1  rounded-pill">PRODUCTOS</h2>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-4 paragraph d-flex flex-column justify-content-center shadow p-5">
                <img src="./images/peakboard/Peakboard-Designer.png" alt="Diseñador Peakboard" width="100%"
                    class="mx-auto">
                <p class="font-weight-bold">Peakboard Designer</p>
                <p>Software low-code para crear tus aplicaciones industriales de forma rápida y sencilla.</p>
            </div>
            <div class="col-12 col-md-1 light-orange d-flex align-items-center justify-content-center title py-3 m-0">
                <i aria-hidden="true" class="fas fa-plus"></i>
            </div>
            <div class="col-12 col-md-7 d-flex flex-column justify-content-center shadow p-5">
                <img src="./images/peakboard/Peakboard-Box.png" alt="Peakboard Box" width="300px" class="mx-auto mb-5">
                <div class="row paragraph text-center">
                    <div class="col-12 col-md-5 ">
                        <p class="font-weight-bold text-justify">Peakboard Box</p>
                        <p class="text-left">Potente hardware para visualizar sus procesos industriales en un monitor.
                        </p>
                        <a href="https://tienda.logicbus.com.mx/Peakboard-Box_p_37113.html" target="_blank"
                            class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver
                            más</a>
                    </div>
                    <div class="col-12 col-md-7 border-left border-dark">
                        <p class="font-weight-bold text-justify">Tabla BYOD</p>
                        <p class="text-left">Con Peakboard BYOD (Bring your own Device) adquieres una licencia para
                            utilizar Peakboard en tu propio dispositivo.</p>
                        <a href="https://tienda.logicbus.com.mx/Peakboard-BYOD_p_37114.html" target="_blank"
                            class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 shadow p-5">
            <div class="col-12 col-md-6 paragraph d-flex flex-column justify-content-center">
                <p class="font-weight-bold text-left">Complemento: Peakboard Hub</p>
                <p class="text-left">Plataforma central para la comunicación entre usted y sus cajas Peakboard.</p>
                <a href="https://tienda.logicbus.com.mx/Peakboard-Hub_p_37115.html" target="_blank"
                    class="btn btn-outline-warning btn-lg my-5 font-weight-bold link-orange-to-white">Ver más</a>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="./images/peakboard/Add-On_Peakboard-Hub.png" alt="Complemento: Peakboard Hub" class="mx-auto"
                    width="300px">
            </div>
        </div>
    </section>

    <!-- VENTAJAS -->
    <section class="container">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1  rounded-pill">VENTAJAS</h2>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row light-black">
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img src="./assets/ventajas/real-time.svg" alt="Datos en tiempo real" style="width: 15vh;">
                <p class="font-weight-bold">Datos en tiempo real</p>
                <p class="text-center">Muchas fuentes de datos, un panel Peakboard: información en tiempo real sobre el
                    estado del proceso y los datos del sistema de toda su operación.</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img src="./assets/ventajas/paid-fast.svg" alt="Reciba pagos rápidos" style="width: 15vh;">
                <p class="font-weight-bold">Reciba pagos rápidos</p>
                <p class="text-center">Un día de taller: eso es todo. Con Peakboard puedes optimizar tu eficiencia muy
                    fácilmente y experimentar un ROI del 237%</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img src="./assets/ventajas/quick-integration.svg" alt="Integración rápida" style="width: 15vh;">
                <p class="font-weight-bold">Integración rápida</p>
                <p class="text-center">Implemente en días, no en meses. ¡No se necesita soporte de TI ni conocimientos
                    de programación gracias al código bajo!</p>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-items-center p-3 p-md-5">
                <img src="./assets/ventajas/it-security.svg" alt="Seguridad informatica" style="width: 15vh;">
                <p class="font-weight-bold">Seguridad informatica</p>
                <p class="text-center">Todos los datos se pueden almacenar en caché localmente, eliminando los riesgos
                    de fuga de datos. El software se actualiza en ciclos de lanzamiento regulares para que usted esté
                    siempre actualizado.</p>
            </div>
        </div>
    </div>

    <!-- Videos -->
    <section class="container-fluid" id="videos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1">VIDEOS</h2>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 my-3">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/ZxxJMV7oQ2A?si=Wf16i-1UOb5wHNfz"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
    </section>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="descarga">
        <div class="ml-4">
            <h2 class="title white">DESCARGA PEAKBOARD DESIGNER</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para su
                proyecto.</span>
        </div>
        <div class="container mt-5">
            <form method="POST" action="" id="contact-form">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="nombre" class="form-label">Nombre *</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="telefono" class="form-label">Número de teléfono *</label>
                    </div>
                    <div class="col-md-10">
                        <input type="tel" id="telefono" name="telefono" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="email" class="form-label">Correo electrónico *</label>
                    </div>
                    <div class="col-md-10">
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="empresa" class="form-label">Empresa *</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" id="empresa" name="empresa" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="interes" class="form-label">Por qué está interesado en descargar Peakboard?
                            *</label>
                    </div>
                    <div class="col-md-10">
                        <textarea id="interes" name="interes" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" name="enviar" class="button button-circle-orange">Obtener el enlace de
                        descarga</button>
                </div>
            </form>
            <p class="paragraph">
                <a class="link-white-to-orange" href="https://www.logicbus.com.mx/aviso-privacidad">Aviso de
                    privacidad</a>
            </p>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $empresa = $_POST['empresa'];
            $interes = $_POST['interes'];

            $asunto = "Nueva oportunidad de Peakboard";
            $mensaje = "Nombre: $nombre\n";
            $mensaje .= "Teléfono: $telefono\n";
            $mensaje .= "Correo Electrónico: $email\n";
            $mensaje .= "Empresa: $empresa\n";
            $mensaje .= "Interés en Peakboard: $interes\n";

            $destinatario = "ventas@logicbus.com";
            $headers = "Content-type: text/plain; charset=UTF-8\r\n";

            if (mail($destinatario, $asunto, $mensaje, $headers)) {
                mail('it@logicbus.com', $asunto, $mensaje, $headers);
                echo "<script type='text/javascript'>
                window.location.href = 'https://drive.usercontent.google.com/download?id=1UrNpYgjN5SZGSlnh91LUxVHnzbm4Kq_A&export=download';
              </script>";
                exit();
            } else {
                echo "<p>Lo siento, hubo un problema al enviar su mensaje. Inténtelo de nuevo más tarde.</p>";
            }
        }
        ?>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>

<?php echo $var_footer; ?>

</html>