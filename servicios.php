<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Servicios que ofrece Logicbus</title>
    <meta name="description" content="Servicios que ofrece Logicbus: Consultoría, Start Up Asistence, Calibraciones, Garantías Extendidas, Integraciones, Soporte Técnico">
    <meta name="keywords" content="LogicBus, México, Measurement, Adquisición, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--- Estilos Necesarios -->
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
        .servicios-grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .tarjeta-servicio-limpia {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            border: 1px solid #e0e0e0;
        }

        .tarjeta-servicio-limpia img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 20px;
            display: block;
        }

        .tarjeta-servicio-limpia h2 {
            color: #FF7E00;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
            width: 100%;
        }

        .tarjeta-servicio-limpia p {
            color: #333333;
            font-size: 15px;
            line-height: 1.6;
            text-align: justify;
            margin: 0;
            flex-grow: 1; 
        }
    </style>
</head>

<body>
    <h1 class="sr-only"> Nuestros Servicios</h1>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Banner -->
    <div align="center">
        <img src="images/banner/nuestros-servicios.png" width="100%" alt="Nuestros Servicios" title="Nuestros Servicios">
    </div>

    <!-- Introduccion -->
    <section class="section-white py-5">
        <div class="container text-justify">
            <p class="paragraph light-black">En Logicbus, nos enorgullece ofrecer una amplia gama de servicios diseñados
                para satisfacer las necesidades de nuestros clientes y brindarles soluciones completas e integrales en el
                ámbito de la automatización y la tecnología. Con décadas de experiencia en el sector, estamos comprometidos a
                proporcionar servicios de alta calidad que impulsen el éxito de tu empresa.</p>
        </div>
    </section>

    <!-- Tarjetas -->
    <section class="section-gray py-5">
        <div class="servicios-grid-container">

            <!-- Card 1 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Consulting.svg" alt="Consultoría">
                <h2>Consultoría</h2>
                <p>Nuestro equipo de expertos en automatización está aquí para asesorarte en cada paso del camino. Desde la planificación inicial hasta la implementación y optimización, te ofrecemos consultoría personalizada para garantizar que tus proyectos cumplan con tus objetivos y requisitos específicos.</p>
            </div>

            <!-- Card 2 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Star-Up.svg" alt="Start Up Assistance">
                <h2>Start Up Assistance</h2>
                <p>¿Estás listo para poner en marcha un nuevo proyecto? Con nuestra asistencia en el inicio, te proporcionaremos el apoyo necesario para asegurar una transición sin problemas desde la fase de diseño hasta la operación completa. Nos aseguraremos de que todo esté configurado y funcionando correctamente para que puedas comenzar a trabajar de inmediato.</p>
            </div>

            <!-- Card 3 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Calibrations.svg" alt="Calibraciones">
                <h2>Calibraciones</h2>
                <p>La precisión es fundamental en cualquier sistema de automatización. Nuestro servicio de calibración garantiza que tus equipos y dispositivos estén siempre funcionando con la máxima precisión y fiabilidad. Confía en nosotros para mantener tus sistemas en óptimas condiciones de funcionamiento.</p>
            </div>

            <!-- Card 4 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Warranties.svg" alt="Garantías Extendidas">
                <h2>Garantías Extendidas</h2>
                <p>En Logicbus, nos comprometemos a brindar productos y servicios de la más alta calidad. Nuestras garantías extendidas ofrecen una tranquilidad adicional, asegurando que tu inversión esté protegida durante más tiempo. Con nosotros, puedes estar seguro de que recibirás el soporte que necesitas, incluso después de la compra.</p>
            </div>

            <!-- Card 5 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Integrations.svg" alt="Integraciones">
                <h2>Integraciones</h2>
                <p>¿Necesitas integrar diferentes sistemas o tecnologías en tu proceso de producción? Nuestro equipo de expertos en integración puede ayudarte a diseñar e implementar soluciones personalizadas que optimicen la eficiencia y mejoren el rendimiento de tu planta.</p>
            </div>

            <!-- Card 6 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/Technical-support.svg" alt="Soporte Técnico">
                <h2>Soporte Técnico</h2>
                <p>En Logicbus, estamos comprometidos a brindar un excelente servicio al cliente. Nuestro equipo de soporte técnico está disponible para ayudarte con cualquier pregunta o problema que puedas tener. Ya sea que necesites asistencia técnica remota o in situ, estamos aquí para ayudarte a resolver cualquier problema de manera rápida y eficiente.</p>
            </div>

            <!-- Card 7 -->
            <div class="tarjeta-servicio-limpia">
                <img src="./images/seccion-empresa/oem-odm.svg" alt="OEM y ODM">
                <h2>OEM y ODM</h2>
                <p>Desde la personalización de productos existentes hasta el desarrollo completo de soluciones a medida, nuestro equipo altamente capacitado trabaja en estrecha colaboración con usted para brindarle productos y soluciones adaptados a sus requisitos únicos.</p>
            </div>

        </div>
    </section>

    <!-- Contacto -->
    <section class="section-blue py-5">
        <div class="container">
            <h2 class="title white h1">¿NECESITAS MÁS INFORMACIÓN?</h2>
            <p class="paragraph white">Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a resolver tus problemas de forma rápida y eficaz.</p>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </section>

    <!-- Footer -->
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php require("libreria/footer.view.php"); ?>
</body>
<?php echo $var_footer; ?>
</html>