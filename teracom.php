<?php require("admin/config.php"); ?>

<!DOCTYPE html>


<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Monitoreo Remoto por Ethernet | TERACOM</title>
  <meta name="description"
    content="Todos los dispositivos de Teracom para monitoreo remoto por Ethernet soportan una interfaz gráfica de usuario, basada en un servidor WEB y al menos en un protocolo M2M.">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
</head>


<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
        <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
            class="blue link-orange">Automatización y control de procesos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Teracom</li>
      </ol>
    </nav>
  </div>
  <div class="mb-5">
    <video autoplay="" muted="" loop="" width="100%"
      poster="https://www.logicbus.com.mx/assets/videos/BANNER-TERACOM.webp">
      <source loading="lazy" src="https://www.logicbus.com.mx/assets/videos/BANNER-TERACOM.webm" type="video/webm">
    </video>
  </div>
  <section class="my-5">
    <div class="container my-5">
      <h1 class="blue font-weight-bold text-center mb-5">Monitoreo y Control Remoto</h1>
      <p class="paragraph light black text-justify">Todos los dispositivos de Teracom para el <strong>monitoreo y
          control remoto</strong> admiten una interfaz gráfica de usuario, basada en un servidor WEB y al menos en el
        protocolo M2M. Esto determina las dos alternativas principales para su uso: independiente o como parte del
        sistema SCADA. La interfaz gráfica de usuario (GUI) ayuda al uso independiente. No se necesita software especial
        para trabajar con los dispositivos. Todas las configuraciones y el posterior monitoreo y control remotos se
        llevan a cabo en un navegador estándar: Chrome, Firefox, IE, Opera, etc.</p>
      <p class="paragraph light black text-justify">Teracom puede llamarse pionero en la industria electrónica al
        fundarse en el año de 1993, cuenta con un <strong>equipo</strong> de ingenieros altamente calificados con amplia
        experiencia, <strong>lo cual le brinda la confianza profesional para la implementación de estos equipos en sus
          proyectos.</strong></p>
      <div class="d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/teracom" target="_blank"><button
            class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#aplicaciones"><button class="button button-white">Aplicaciones</button></a>
        <a class="button-text" href="#guias"><button class="button button-white">Guías y Manuales</button></a>
        <a class="button-text" href="#videos"><button class="button button-white">Videos</button></a>
        <a class="button-text" href="#blog"><button class="button button-white">Artículos</button></a>
      </div>
      <div class="row my-5 justify-content-center">
        <div class="col-md-4 text-center my-3">
          <div class="section-blue py-4 py-md-5 px-0 border-blue"><img loading="lazy"
              src="./images/teracom/Controladores-a-traves-de-redes-Ethernet.webp"
              alt="Controladores a través de redes Ethernet" width="100%">
            <h4 class="font-weight-bold white px-3">Controladores a través de redes Ethernet</h4>
          </div><a class="button button-circle-orange button-text"
            href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tecnologia-cloud-iot-monitoreo-y-control-remoto-de-teracom-monitoreo-y-control-remoto-ethernet"
            target="_blank" style="margin-top: -1.6rem;">Ver más</a>
        </div>
        <div class="col-md-4 text-center my-3">
          <div class="section-blue py-4 py-md-5 px-0 border-blue"><img loading="lazy"
              src="./images/teracom/Controladores-para-monitoreo-remoto-a-traves-de-redes-moviles.webp"
              alt="Controladores para monitoreo remoto a través de redes móviles" width="100%">
            <h4 class="font-weight-bold white px-3">Controladores para monitoreo remoto a través de redes móviles
            </h4>
          </div><a class="button button-circle-orange button-text"
            href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tecnologia-cloud-iot-monitoreo-y-control-remoto-de-teracom-monitoreo-y-control-remoto-gsm"
            target="_blank" style="margin-top: -1.6rem;">Ver más</a>
        </div>
        <div class="col-md-4 text-center my-3">
          <div class="section-blue py-4 py-md-5 px-0 border-blue"><img loading="lazy"
              src="./images/teracom/Sensores-detectores-y-transmisores.webp" alt="Sensores, detectores y transmisores"
              width="100%">
            <h4 class="font-weight-bold white px-3">Sensores, detectores y transmisores</h4>
          </div><a class="button button-circle-orange button-text"
            href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-tecnologia-cloud-iot-monitoreo-y-control-remoto-de-teracom-sensores-y-detectores"
            target="_blank" style="margin-top: -1.6rem;">Ver más</a>
        </div>
        <div class="col-md-4 text-center my-3">
          <div class="section-blue py-4 py-md-5 px-0 border-blue"><img loading="lazy"
              src="./images/teracom/Supervision-de-software-aplicaciones-y-herramientas.webp"
              alt="Supervisión de software, aplicaciones y herramientas" width="100%">
            <h4 class="font-weight-bold white px-3">Supervisión de software, aplicaciones y herramientas</h4>
          </div><a class="button button-circle-orange button-text"
            href="https://tienda.logicbus.com.mx/Supervisi%C3%B3n-de-software-aplicaciones-y-herramientas_c_7964.html"
            target="_blank" style="margin-top: -1.6rem;">Ver más</a>
        </div>
        <div class="col-md-4 text-center my-3">
          <div class="section-blue py-4 py-md-5 px-0 border-blue"><img loading="lazy" src="./images/teracom/TCW-CONTROL-Teracom.webp"
              alt="TCW CONTROL Teracom" width="100%">
            <h4 class="font-weight-bold white px-3">TCW CONTROL Teracom</h4>
          </div><a class="button button-circle-orange button-text"
            href="https://play.google.com/store/apps/details?id=cc.teracom.app.android" target="_blank"
            style="margin-top: -1.6rem;">Ver más</a>
        </div>
      </div>
    </div>
  </section>

  <!--Soluciones-->
  <section class="container" id="aplicaciones">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1">APLICACIONES</h2>
    </div>
    <div class="card-columns">
      <div class="card">
        <img loading="lazy" src="./images/teracom/monitoreo-ambiental-remoto.webp" class="card-img-top"
          alt="Monitoreo ambiental remoto">
        <div class="card-body">
          <h3 class="card-title">Monitoreo ambiental remoto</h5>
            <p class="card-text">
            <ol type=”A” style="text-decoration: none;">
              <li>Monitoreo Humedad y temperatura para salas de servidores y centros de datos</li>
              <li>Monitoreo ambiental para invernaderos, bodegas y plantas de hongos</li>
              <li>Monitoreo humedad y temperatura para instalaciones móviles (telecomunicaciones)</li>
              <li>Monitoreo de temperatura para almacenamiento de medicamentos y alimentos.</li>
            </ol>
            </p>
        </div>
      </div>
      <div class="card">
        <img loading="lazy" src="./images/teracom/control-y-adquisicion-de-datos.webp" class="card-img-top"
          alt="Control y Adquisición de datos">
        <div class="card-body">
          <h3 class="card-title">Control y Adquisición de datos</h5>
            <p class="card-text">
            <ol type=”A” style="text-decoration: none;">
              <li>Sistemas de control de supervisión MODBUS TCP / IP</li>
              <li>Sistemas de registro de datos y monitoreo ambiental</li>
              <li>Monitoreo de procesos HACCP para la industria alimenticia</li>
              <li>Sistemas de control y monitoreo de administradores SNMP</li>
              <li>Sistemas SCADA de generación IoT</li>
            </ol>
            </p>
        </div>
      </div>
      <div class="card">
        <img loading="lazy" src="./images/teracom/automatizacion-remota-de-fabricas.webp" class="card-img-top"
          alt="Automatización remota de fábricas">
        <div class="card-body">
          <h3 class="card-title">Automatización remota de fábricas</h5>
            <p class="card-text">
            <ol type=”A” style="text-decoration: none;">
              <li>Monitoreo remoto para sistemas de fabricación de robots</li>
              <li>Control programado del proceso de fabricación</li>
              <li>Monitoreo y control remoto para sistemas de calderas</li>
              <li>Monitoreo de energía y control de potencia de salida para parques solares</li>
            </ol>
            </p>
        </div>
      </div>
      <div class="card">
        <img loading="lazy" src="./images/teracom/automatizacion-y-seguridad-de-edificios.webp" class="card-img-top"
          alt="Automatización y seguridad de edificios">
        <div class="card-body">
          <h3 class="card-title">Automatización y seguridad de edificios</h5>
            <p class="card-text">
            <ol type=”A” style="text-decoration: none;">
              <li>Monitoreo y control de temperatura, humedad y dióxido de carbono (CO2)</li>
              <li>Monitoreo de puertas y ventanas para control de aire acondicionado</li>
              <li>Sistemas de calefacción, ventilación y aire acondicionado (HVAC)</li>
              <li>Monitoreo del consumo de energía</li>
            </ol>
            </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Infografía -->
  <div class="gridContAbajo">
    <div class="griditemContB">
      <section class="container-fluid" id="infografia">
        <div class="container my-5">
          <h2 class="subtitle text-center orange-text py-1">INFOGRAFÍA</h2>
        </div>
        <div align="center" class="divCentrado" style="overflow: auto;">
          <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <div style="max-width: 45%;">
              <img loading="lazy" src="./images/teracom/Infografia_teracom.webp" style="width: 100%; height: 300px; object-fit: cover;"
                alt="Modulo I/O remoto para monitoreo y control ambiental">
              <a href="./images/teracom/Infografia_teracom.webp" style="color: #000000;" target="_blank"><br><strong>Ver
                  Imagen Completa</strong></a>
            </div>
            <div style="max-width: 45%;">
              <img loading="lazy" src="./images/teracom/TERACOM-Solution-for-Temperature-measurement-and-IoT-Monitoring.webp"
                style="width: 100%; height: 300px; object-fit: cover;"
                alt="Solution for temperature measurement and IoT monitoring">
              <a href="./images/teracom/TERACOM-Solution-for-Temperature-measurement-and-IoT-Monitoring.webp"
                style="color: #000000;" target="_blank"><br><strong>Ver Imagen Completa</strong></a>
            </div>
          </div>
        </div>
        <div class="" id="docs">
          <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1">CATÁLOGOS</h2>
          </div>
          <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4 text-center mb-3">
              <a href="pdf/Teracom/teracom-catalogo-mx.pdf" target="_blank"><img loading="lazy" class="imgBorde img250"
                  src="https://www.logicbus.com.mx/pdf/Teracom/catalogo-teracom.webp" alt="Ver archivo pdf"><br>Ver
                Catálogo</a>
            </div>
          </div>
        </div>
    </div>
    <!-- Guía -->
    <div class="griditemContB">
      <section class="container-fluid" id="guias">
        <div class="container my-5">
          <h2 class="subtitle text-center orange-text py-1">GUÍAS</h2>
        </div>
        <div class="d-flex justify-content-center"> <a
            href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=teracom&tagArray%5B%5D=Monitoreo+y+Control+Remoto+de+Teracom">
            <div class="hoverchange">
              <img loading="lazy" src="images/documentacion.svg" width="200px" class="mx-auto d-block" alt="documentacion">
              <button class=" button button-circle-white d-flex "><b> Documentación</b></button>
            </div>
          </a>
        </div>
    </div>
  </div>
  <!-- Videos -->
 <section class="container-fluid" id="videos">
  <div class="container my-5">
    <h2 class="subtitle text-center orange-text py-1">VIDEOS</h2>
  </div>

  <div class="row justify-content-center my-5">
    
    <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
      <div class="griditemContB" style="max-width: 300px;">
        <div class="video-container-youtube" data-video-id="OHfKUHurQxs">
          <img loading="lazy" src="https://img.youtube.com/vi/OHfKUHurQxs/hqdefault.jpg"
               alt="¡Teracom y su sistema de comunicaciones!"
               style="width:100%; border-radius:8px;">
          <div class="play-button"></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
      <div class="griditemContB" style="max-width: 300px;">
        <div class="video-container-youtube" data-video-id="a2rzz5hKWhA">
          <img loading="lazy" src="https://img.youtube.com/vi/a2rzz5hKWhA/hqdefault.jpg"
               alt="Webinario Monitoreo y Control Remoto"
               style="width:100%; border-radius:8px;">
          <div class="play-button"></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
      <div class="griditemContB" style="max-width: 300px;">
        <div class="video-container-youtube" data-video-id="qvqWhGOojmA">
          <img loading="lazy" src="https://img.youtube.com/vi/qvqWhGOojmA/hqdefault.jpg"
               alt="Conoce nuestra marca búlgara – TERACOM 🇧🇬"
               style="width:100%; border-radius:8px;">
          <div class="play-button"></div>
        </div>
      </div>
    </div>

  </div>
</section>

  <!--ARTICULOS-->
  <section class="container-fluid py-5" id="blog">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1">ARTÍCULOS</h2>
    </div>
    <div class="row justify-content-center my-5">
      <div class="col-12 col-md-3 text-center mb-3">
        <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/monitoreo-ambiental-remoto/"
          target="_blank" rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/08/monitoreo-ambiental-remoto.webp"
            alt="Monitoreo ambiental remoto" width="100%">
          Monitoreo ambiental remoto
        </a>
      </div>
      <div class="col-12 col-md-3 text-center mb-3">
        <a class="blue link-orange font-weight-bold"
          href="https://www.logicbus.com.mx/blog/como-probar-el-sensor-modbus-rtu-tsh300-tst300/" target="_blank"
          rel="noopener noreferrer">
          <img loading="lazy"
            src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/08/%C2%BFCo%CC%81mo-probar-el-sensor-MODBUS-RTU-TSH300TST300.webp"
            alt="¿Cómo probar el sensor MODBUS RTU TSH300/TST300?" width="100%">
          ¿Cómo probar el sensor MODBUS RTU TSH300/TST300?
        </a>
      </div>
      <div class="col-12 col-md-3 text-center mb-3">
        <a class="blue link-orange font-weight-bold"
          href="https://www.logicbus.com.mx/blog/principios-de-geolocalizacion-gsm-y-como-funciona/" target="_blank"
          rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/04/Banner-portada-BLOGteracom2b.webp"
            alt="Principios de geolocalización GSM y ¿Cómo funciona?" width="100%">
          Principios de geolocalización GSM y ¿Cómo funciona?
        </a>
      </div>
      <div class="col-12 col-md-3 text-center mb-3">
        <a class="blue link-orange font-weight-bold"
          href="https://www.logicbus.com.mx/blog/posibles-soluciones-de-envio-de-correo-electronico-para-modulos-remotos-para-tcw122b-cm-y-modulo-digital-de-ethernet-tcw181b-cm/"
          target="_blank" rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2022/04/Banner-portada-BLOG-teracom2-1.webp"
            alt="Envío de correo electrónico para módulos remotos para TCW122B-CM y módulo digital de ethernet TCW181B-CM"
            width="100%">
          Envío de correo electrónico para módulos remotos para TCW122B-CM y módulo digital de ethernet TCW181B-CM
        </a>
      </div>
    </div>
  </section>


  <!--Contacto-->
  <div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
      <h2 class="title white">¿NECESITAS MÁS INFORMACIÓN SOBRE TERACOM?</h2>
      <span class="paragraph white">¡Dejanos ayudarte, estamos aquí para ayudarte a encontrar las mejores soluciones
        para su proyecto!</span>
    </div>
    <!-- BEGIN Odoo web form -->
    <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
          style="width:100%; min-height:1200px; border:0;">
        </iframe>
      </div>
    </div>
    <!-- END Odoo web form -->
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function () {
var videoContainers = document.querySelectorAll('.video-container-youtube');

videoContainers.forEach(function (container) {
container.addEventListener('click', function () {
var videoId = this.dataset.videoId;

var iframe = document.createElement('iframe');
iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
'?autoplay=1&rel=0');
iframe.setAttribute('title', 'YouTube video player');
iframe.setAttribute('allow',
'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
);
iframe.setAttribute('allowfullscreen', '');

this.innerHTML = '';
this.appendChild(iframe);
});
});
});
</script>


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