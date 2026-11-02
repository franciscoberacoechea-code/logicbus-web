<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
  <!-- Google tag (gtag.js) event - delayed navigation helper -->
  <script>
    // Helper function to delay opening a URL until a gtag event is sent.
    // Call it in response to an action that should navigate to a URL.
    function gtagSendEvent(url) {
      var callback = function() {
        if (typeof url === 'string') {
          window.location = url;
        }
      };
      gtag('event', 'conversion_event_contact', {
        'event_callback': callback,
        'event_timeout': 2000,
        // <event_parameters>
      });
      return false;
    }
  </script>
  <title>Contacto - Logicbus</title>
  <meta name="description" content="Contáctanos, brindamos servicios de consultoría gratis y venta de equipos de automatización como: celdas de carga, plc, graficadores y mucho más ">

  <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Seguridad, Consultoría, Integración, Proyecto, Radio Frecuencia, Cubos, Análisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico,  Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, Contacto con Logicbus, Como contactarme con Logicbus Guadalajara?, Empresa distribuidora de equipos de automatización, osciloscopio, automatización, pymes en México,  sensor de temperatura,  solución de monitoreo,  sensores y transductores">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--- Estilos Necesarios-->
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
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>
  <img src="https://www.logicbus.com.mx/images/banner/www/banner-contacto.png" width="100%">

  <!--ATENCIÓN AL CLIENTE-->
  <h1 class="sr-only">Contacto Logicbus </h1>
  <section class="py-5">
    <div class="container-fluid my-5">
      <h2 class="h1 banner-title blue font-weight-bolder">Atención al <b class="banner-title light-orange"> cliente</b></h2>
    </div>
    <div class="d-flex flex-wrap justify-content-around px-5">
      <div class="card border-0 align-items-center shadow text-center px-5 my-3 my-md-0" style="border-radius: 30px; width: 45vh;">
        <img class="mb-3 mt-5" src="./assets/contacto/contacto.png" alt="Horarios de atención" width="100px">
        <p class="blue paragraph m-0">Horario (GMT-5 CDMX)</p>
        <p class="light-orange paragraph m-0 font-weight-bold">Lunes a Viernes</p>
        <p class="blue paragraph mb-5">8:00 a 18:00 Hrs.</p>
        <p class="light-orange paragraph m-0 font-weight-bold">Sábados</p>
        <p class="blue paragraph mb-5">10:00 a 13:00 Hrs.</p>
      </div>
      <div class="card border-0 align-items-center shadow text-center px-5 my-3 my-md-0" style="border-radius: 30px; width: 45vh;">
        <img class="mb-3 mt-5" src="./assets/contacto/msj.png" alt="E-mail" width="100px">
        <p class="light-orange paragraph m-0 font-weight-bold">Ventas:</p>
        <a class="blue paragraph m-0 link-orange" href="mailto:ventas@logicbus.com?Subject=Solicitud%20correo%20Contacto%20de%20pagina%20web">ventas@logicbus.com</a>
        <p class="light-orange paragraph m-0 font-weight-bold">Soportes:</p>
        <a class="blue paragraph m-0 link-orange" href="mailto:soporte@logicbus.com?Subject=Solicitud%20correo%20Contacto%20de%20pagina%20web">soporte@logicbus.com</a>
        <p class="light-orange paragraph m-0 font-weight-bold">Finanzas:</p>
        <a class="blue paragraph mb-5 link-orange" href="mailto:finanzas@logicbus.com?Subject=Solicitud%20correo%20Contacto%20de%20pagina%20web">finanzas@logicbus.com</a>
      </div>
<div class="card border-0 align-items-center shadow text-center px-3 my-3 my-md-0" style="border-radius: 30px; width: 45vh;">
  <img class="mb-3 mt-5" src="./assets/contacto/telefono.png" alt="Líneas telefónicas" width="100px">
  
  <p class="light-orange paragraph m-0 font-weight-bold">Español (México y LATAM)</p>
  <a href="tel:+523338545975" class="blue paragraph m-0 link-orange">+52 (33)-3854-5975</a>
  <a href="tel:+525589953820" class="blue paragraph m-0 link-orange">+52 (55)-8995-3820</a>
  <a href="tel:+523338234349" class="blue paragraph mb-5 link-orange">+52 (33)-3823-4349</a>

  <p class="light-orange paragraph m-0 font-weight-bold">USA and Canada</p>
  <a href="tel:+16196167350" class="blue paragraph mb-5 link-orange">+1 (619)-616-7350</a>
</div>


      <div class="card border-0 align-items-center shadow text-center px-5 my-3 my-md-0" style="border-radius: 30px; width: 45vh;">
        <img class="mb-3 mt-5" src="./assets/contacto/whatsapp.png" alt="WhatsApp" width="100px">
        <p class="light-orange paragraph m-0 font-weight-bold">Ventas MX:</p>
        <a class="blue paragraph m-0 link-orange" href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" target="_blank">+52 55 5431 6718</a>
        <a class="blue paragraph m-0 link-orange" href="https://api.whatsapp.com/send?phone=523334438556&text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" target="_blank">+52 33 3443 8556</a>
        <p class="light-orange paragraph mt-5 font-weight-bold">USA:</p>
        <a class="blue paragraph mb-5 link-orange" href="https://api.whatsapp.com/send?phone=16196001015&text=Hello Logicbus, I would like to request information" target="_blank">+1 619 600 1015</a>
      </div>
    </div>
  </section>

  <!--INTEGRADORES-->
  <section class="py-5">
    <div class="wrap-integradores py-3">
      <div class="container-fluid">
        <div class="row justify-content-around align-items-center">
          <div class="col-12 col-md-6 text-center">
            <h2 class="h5 blue">Envíos a todo el mundo</h2>
            <p class="h1 banner-title blue font-weight-bolder">Integradores <b class="banner-title light-orange"> regionales</b></p>
            <h2 class="h4 dark-gray font-weight-bold mt-3">¿Buscas un integrador cerca de tu localidad?</h2>
            <a class="button button-circle-orange button-text mt-3 mt-md-5" href="distribuidores-integradores">Más Información</a>
          </div>
          <div class="col-6 col-md-3">
            <img src="./assets/contacto/mx.png" alt="México" width="80%">
          </div>
        </div>
      </div>
      <p class="h5 container blue text-center">Envía un correo a <a class="blue m-0 link-orange" href="mailto:ventas@logicbus.com?Subject=Solicitud%20correo%20Contacto%20de%20pagina%20web">ventas@logicbus.com</a> o llena el siguiente formulario desde nuestra página y nosotros te pondremos en contacto con el integrador más cercano a ti.</p>
    </div>
  </section>

  <section class="section-blue text-center p-3 my-5">
    <h3 class="white">¿Tienes dudas? ¡Consulta nuestras Preguntas Frecuentes! <a class="button-text" href="soporte#faqs"><button class="button button-circle-orange"> Ir a FAQ's</button></a></h3>
  </section>

  <section class="container-fluid text-center">
  <p class="h5 blue">Da click para desplegar alguno de los formularios</p>
  <div class="container">
    <a class="button button-circle-whiteb button-text toggle-btn subrayado" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Atención a Clientes</a>
    <a class="button button-circle-whiteb button-text toggle-btn" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Buzón de Gerencia</a>
    <a class="button button-circle-whiteb button-text toggle-btn" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Agendar una Visita</a>
  </div>
  <div class="row my-5">
    <div class="col-12 col-md-6">
      
      <div class="collapse multi-collapse show" id="multiCollapseExample1">
        <div class="odoo-webform-container" style="width: 100%;">
          <iframe 
            src="https://tienda.logicbus.mx/en/atencion-a-clientes" 
            width="100%" 
            height="750px" 
            frameborder="0" 
            style="border:0; min-height: 550px;" 
            allowfullscreen>
            <p>Tu navegador no soporta iframes. Por favor, visita el formulario en <a href="https://tienda.logicbus.mx/en/atencion-a-clientes" target="_blank">este enlace</a>.</p>
          </iframe>
        </div>
        </div>
      
      <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="odoo-webform-container" style="width: 100%;">
          <iframe 
            src="https://tienda.logicbus.mx/en/contacta-a-gerencia" 
            width="100%" 
            height="750px" 
            frameborder="0" 
            style="border:0; min-height: 550px;" 
            allowfullscreen>
            <p>Tu navegador no soporta iframes. Por favor, visita el formulario en <a href="https://tienda.logicbus.mx/en/contacta-a-gerencia" target="_blank">este enlace</a>.</p>
          </iframe>
        </div>
        </div>
      
      <div class="collapse multi-collapse" id="multiCollapseExample3">
        <div class="odoo-webform-container" style="width: 100%;">
          <iframe 
            src="https://tienda.logicbus.mx/en/solicitud-de-visita" 
            width="100%" 
            height="850px" 
            frameborder="0" 
            style="border:0; min-height: 600px;" 
            allowfullscreen>
            <p>Tu navegador no soporta iframes. Por favor, visita el formulario en <a href="https://tienda.logicbus.mx/en/solicitud-de-visita" target="_blank">este enlace</a>.</p>
          </iframe>
        </div>
        </div>
      
    </div>
    
    <div class="col-12 col-md-6">
      <h2 class="h1 blue title">Ubicación</h2>
      <h3 class="h2 subtitle light-orange">México</h3>
      <p class="paragraph blue m-0">Av. Miguel Hidalgo y Costilla 1443 Piso 6</p>
      <p class="paragraph blue m-0">Col. Americana (Torre Iclar)</p>
      <p class="paragraph blue m-0 mb-3">C.P. 44160, Guadalajara Jal. México</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59725.18760592962!2d-103.368263!3d20.676729000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae1adb32e17d%3A0xfd4e8a7857bfb263!2sTorre%20Iclar!5e0!3m2!1ses!2smx!4v1720714022338!5m2!1ses!2smx" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      <h3 class="h2 subtitle light-orange mt-5">USA</h3>
      <p class="paragraph blue m-0 mb-3">863 Bowsprit Road, Chula Vista, CA 91914</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13436.675189234847!2d-116.959145!3d32.654952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d94515b0e1792d%3A0x51fd7d9c38c71319!2s863%20Bowsprit%20Rd%2C%20Chula%20Vista%2C%20CA%2091914%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1720714286376!5m2!1ses!2smx" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      <h3 class="h2 subtitle light-orange mt-5">USA Almacén</h3>
      <p class="paragraph blue m-0">8268 Clairemont Mesa Blvd, Suite 302</p>
      <p class="paragraph blue m-0 mb-3">San Diego, CA. 92111</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13409.615143720448!2d-117.14620300000001!3d32.834559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbffa317a4e147%3A0xb9d1b9819c980002!2s8268%20Clairemont%20Mesa%20Blvd%20%23302%2C%20San%20Diego%2C%20CA%2092111%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1720714368109!5m2!1ses!2smx" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>

  <script>
    $(document).ready(function() {
      $('.toggle-btn').on('click', function() {
        var target = $(this).attr('data-target') || $(this).attr('href');
        $('.collapse').not(target).collapse('hide');
        $(this).addClass('subrayado');
      });

      $('.collapse').on('show.bs.collapse', function() {
        $('.collapse').not(this).collapse('hide');
      });

      $('.collapse').on('hide.bs.collapse', function() {
        var target = $(this).attr('id');
        $('a[data-target="#' + target + '"], a[href="#' + target + '"]').removeClass('subrayado');
      });
    });
  </script>
</body>
<?php echo $var_footer; ?>

</html>