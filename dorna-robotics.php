<?php require("admin/config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dorna Robotics | Robots Colaborativos - Logicbus</title>
    <meta name="description"
        content="Automatización compacta y precisa con Dorna Robotics. Robots de sobremesa programables en Python, ideales para industria, educación e investigación">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        #leftBar {
            display: none;
        }

        .icon-feature {
            max-width: 80px;
            height: auto;
            margin-bottom: 20px;
        }

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
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
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Robots Colaborativos</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dorna Robotics</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <video autoplay muted loop playsinline width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/BANNER-DORNA.webp"
            style="object-fit: cover; max-height: 500px; display: block;">
            <source src="https://www.logicbus.com.mx/assets/videos/BANNER-DORNA.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Automatización de Sobremesa de
            Alto Rendimiento</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DORNA
            ROBOTICS</span>
    </h1>

    <p class="intro-text">
        <strong>Dorna Robotics</strong> es una empresa especializada en el desarrollo de soluciones de automatización
        compactas, precisas y accesibles, diseñadas para aplicaciones industriales, educativas y de investigación. Sus
        robots de sobremesa combinan alto desempeño con un diseño compacto, ideal para entornos donde el espacio, la
        flexibilidad y la facilidad de integración son factores clave.
    </p>
    <p class="intro-text">
        La línea de robots de Dorna está pensada para automatizar procesos como ensamblado, pick and place, inspección,
        pruebas de calidad y soldadura, entre otros. Gracias a su estructura robusta y motores de alto torque, los
        sistemas ofrecen movimientos suaves, repetibles y confiables, comparables con los de soluciones industriales de
        mayor escala.
    </p>
    <p class="intro-text">
        Una de las principales ventajas de Dorna es su plataforma de control abierta, que permite a los usuarios
        programar sus robots en Python y personalizar fácilmente la operación de los equipos. Además, su software
        incluye una interfaz gráfica intuitiva, pensada tanto para usuarios técnicos como no técnicos.
    </p>
    <p class="intro-text">
        En <strong>Logicbus</strong>, somos distribuidores de Dorna Robotics para México y Latinoamérica. Acompañamos
        cada proyecto con asesoría técnica especializada, capacitación y soporte, ayudando a nuestros clientes a
        implementar soluciones de automatización de forma eficiente, escalable y segura.
    </p>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/dorna-robotics" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#dorna-software">Software</a>
        <a class="btn-circle" href="#aplicaciones">Aplicaciones</a>
    </nav>

    <h2 class="section-title" id="productos">Línea de Robots</h2>
    <div class="products-grid" style="max-width: 800px; margin: 0 auto;">
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/DSC00006-scaled.webp" alt="Dorna TA">
            <h4>Dorna TA</h4>
            <a class="btn-circle mx-auto" href="https://tienda.logicbus.com.mx/Dorna-TA_p_38151.html">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/dorna-2-thumbnail.webp" alt="Dorna 2">
            <h4>Dorna 2</h4>
            <a class="btn-circle mx-auto" href="https://tienda.logicbus.com.mx/Dorna-2_p_38150.html">Ver producto</a>
        </div>
    </div>

    <h2 class="section-title mt-5" id="dorna-software">Dorna Software</h2>
    <div class="container mb-5">

        <div class="row align-items-center mb-4 bg-white rounded shadow-sm border overflow-hidden">
            <div class="col-md-6 p-4 p-md-5">
                <h3 class="font-weight-bold" style="color: var(--lb-primary);">Basado en la web y multiplataforma</h3>
                <p class="text-muted text-justify">Dorna Lab no requiere ninguna instalación ni dispositivo de
                    programación especial y permite la programación, simulación y monitorización de robots en cualquier
                    dispositivo con un navegador web, como una computadora, tableta o teléfono inteligente.</p>
            </div>
            <div class="col-md-6 p-0 text-center bg-light">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/multi-platform.webp"
                    alt="Multi Platform" class="img-fluid" style="max-height: 350px; object-fit: cover;">
            </div>
        </div>

        <div class="row align-items-center mb-4 bg-dark text-white rounded shadow-sm border overflow-hidden">
            <div class="col-md-6 order-md-2 p-4 p-md-5">
                <h3 class="font-weight-bold text-white">Implementación rápida</h3>
                <p class="text-justify text-light">Programe fácilmente el robot moviéndolo libremente, tocando los
                    puntos objetivo y pidiéndole que repita la misma tarea con precisión, gracias al cuerpo liviano del
                    robot y las articulaciones traseras accionables.</p>
            </div>
            <div class="col-md-6 order-md-1 p-0 text-center bg-black">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/fast-deployment.webp"
                    alt="Fast Deployment" class="img-fluid" style="max-height: 350px; object-fit: cover;">
            </div>
        </div>

        <div class="row align-items-center mb-4 bg-light rounded shadow-sm border overflow-hidden">
            <div class="col-md-6 p-4 p-md-5">
                <h3 class="font-weight-bold" style="color: var(--lb-primary);">Programación en bloques</h3>
                <p class="text-muted text-justify">Dorna Lab ofrece una interfaz gráfica sencilla e intuitiva con
                    Blockly. Arrastre y suelte diferentes bloques de código y lógica más compleja para crear un programa
                    completo para nuestro robot Dorna sin necesidad de formación especializada ni conocimientos de
                    programación.</p>
            </div>
            <div class="col-md-6 p-0 text-center bg-white">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/blockly-programming.webp"
                    alt="Programación en bloques" class="img-fluid" style="max-height: 350px; object-fit: contain;">
            </div>
        </div>

        <div class="row align-items-center mb-4 bg-light rounded shadow-sm border overflow-hidden">
            <div class="col-md-6 order-md-2 p-4 p-md-5">
                <h3 class="font-weight-bold" style="color: var(--lb-primary);">Plataforma Python enriquecida</h3>
                <p class="text-muted text-justify">Dorna Lab está equipado con Python para aplicaciones más avanzadas.
                    Desarrolle, aloje y ejecute su programa Python directamente dentro del controlador del robot y
                    acceda a él a través de Dorna Lab en cualquier navegador web.</p>
            </div>
            <div class="col-md-6 order-md-1 p-0 text-center bg-white">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/python-platform.webp"
                    alt="Python Platform" class="img-fluid" style="max-height: 350px; object-fit: contain;">
            </div>
        </div>

    </div>

    <h2 class="section-title mt-5" id="aplicaciones">Aplicaciones y Ventajas</h2>
    <div class="container mb-5">

        <div class="row align-items-center mb-5">
            <div class="col-md-5 mb-4 mb-md-0 text-center">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/material-handling-banner.webp"
                    alt="Manejo de materiales" class="img-fluid rounded shadow-sm border">
            </div>
            <div class="col-md-7">
                <h3 class="font-weight-bold" style="color: var(--lb-primary);">Manejo de Materiales</h3>
                <p class="text-muted text-justify">Optimiza tareas altamente repetitivas con robots intuitivos y una
                    plataforma fácil de programar. La solución versátil de Dorna permite reinstalar, reprogramar y
                    reubicar el robot en diferentes áreas de tu operación de forma rápida y sencilla.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-7 order-md-1 order-2">
                <h3 class="font-weight-bold" style="color: var(--lb-primary);">Automatización de Laboratorios</h3>
                <p class="text-muted text-justify">El enfoque centrado en el usuario de Dorna para la automatización de
                    laboratorios garantiza una implementación rápida y eficiente en la mesa de trabajo, con
                    oportunidades escalables para el futuro. Los robots de Dorna son ideales para implementarse a gran
                    escala en tareas precisas, repetitivas y de alto rendimiento en áreas como diagnóstico,
                    descubrimiento de fármacos y biotecnología.</p>
            </div>
            <div class="col-md-5 order-md-2 order-1 mb-4 mb-md-0 text-center">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/Dorna-picking-plates_3.webp"
                    alt="Automatización de laboratorios" class="img-fluid rounded shadow-sm border">
            </div>
        </div>

        <h2 class="section-title mt-5">Por qué elegir Dorna</h2>
        <div class="row g-4 justify-content-center text-center mt-4">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm border h-100 d-flex flex-column align-items-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/financial-growth-1.svg"
                        class="icon-feature" alt="Retorno rápido">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Retorno Rápido de Inversión</h4>
                    <p class="small text-muted flex-grow-1">Incluso el usuario más inexperto puede operar y realizar
                        mantenimiento a sus robots, lo que minimiza significativamente el tiempo de inactividad y los
                        costos continuos.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    class="bg-dark p-4 rounded shadow-sm border h-100 d-flex flex-column align-items-center text-white">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/parcel-initiation%20-%20white.svg"
                        class="icon-feature" alt="Implementación rápida">
                    <h4 class="text-white font-weight-bold">Implementación Flexible</h4>
                    <p class="small text-light flex-grow-1">Su diseño ligero y compacto permite múltiples opciones de
                        montaje. Si su flujo de trabajo cambia, implemente el robot en la nueva configuración
                        inmediatamente.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm border h-100 d-flex flex-column align-items-center">
                    <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/343/automation.svg"
                        class="icon-feature" alt="Rendimiento riguroso">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Rendimiento Riguroso</h4>
                    <p class="small text-muted flex-grow-1">Con un diseño mecánico robusto y un controlador de grado
                        industrial, los robots Dorna están construidos para un funcionamiento continuo con un
                        mantenimiento mínimo a altas velocidades.</p>
                </div>
            </div>

        </div>

    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE
                DORNA ROBOTICS?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí
                para encontrar las mejores soluciones de automatización colaborativa para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>