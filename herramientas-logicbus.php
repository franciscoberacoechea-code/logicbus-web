<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Herramientas - Logicbus</title>
  <meta name="description"
    content="En Logicbus, hemos diseñado distintas herramientas para facilitar tu proceso de selección y mejorar tus proyectos de automatización industrial...">

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

  <img class="img-fluid mw-100 center" src="images/herramientas/herramientas-logicbus.png" alt="Banner de herramientas"
    width="100%">

  <div class="container my-5">
    <p class="paragraph text-center">
      En el mundo de la automatización industrial, la selección de las soluciones adecuadas va más allá de la
      apariencia; es una decisión basada en múltiples parámetros que definen la experiencia del usuario. En Logicbus,
      hemos diseñado distintas herramientas para facilitar tu proceso de selección y mejorar tus proyectos de
      automatización industrial.
    </p>
  </div>
  <div class="container mb-5 mt-3">
    <div class="row d-flex">
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius:20px; transition: .5s;">
            <img src="images/herramientas/Buscador_de_teclados.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-100 h-100 bg-white border-orange p-4 d-flex flex-column" style="transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Simplifica el proceso de selección del teclado perfecto
              para tu proyecto.</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/buscador-teclados" class="btn btn-orange">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius:20px; transition: .5s;">
            <img src="images/herramientas/Encuentra_la_celda_de_carga.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-100 h-100 bg-white border-orange p-4 d-flex flex-column" style="transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Este buscador permite filtrar por modelos conocidos
              (familia), tipo de celda y tipo de conexión.</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/buscador-celdas" class="btn btn-orange">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius:20px; transition: .5s;">
            <img src="images/herramientas/Calcule_el_OEE.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-100 h-100 bg-white border-orange p-4 d-flex flex-column" style="transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">¡Aumenta la eficiencia de tu fábrica con nuestra
              Calculadora del OEE (Overall Equipment Effectiveness)!</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/oee-que-es" class="btn btn-orange">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative  mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100  overflow-hidden"
            style="border-radius: 20px;transition: .5s;">
            <img src="images/herramientas/Documentacion.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-200 h-200 bg-white border-orange p-3 d-flex flex-column justify-content-between"
            style="width: 200px; height: 200px; transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Accede a una amplia biblioteca de recursos que te ayudarán
              a comprender, configurar y optimizar el funcionamiento de tus equipos. </Strong></p>
            <div class="mt-auto text-center">
              <a href="http://localhost/www/documentos" class="btn btn-orange rounded-xl">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius: 20px;transition: .5s;">
            <img src="images/herramientas/catalogo_computo_industrial.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-200 h-200 bg-white border-orange p-3 d-flex flex-column justify-content-between"
            style="width: 200px; height: 200px; transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Encontrarás una amplia gama de productos y servicios
              diseñados para satisfacer las necesidades de tu empresa en el ámbito industrial</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/computadoras-industriales" class="btn btn-orange rounded-xl">Ver
                más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative  mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius: 20px;transition: .5s;">
            <img src="images/herramientas/preguntas_frecuentes_controllino.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-200 h-200 bg-white border-orange p-4 d-flex flex-column justify-content-between"
            style="width: 200px; height: 200px; transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Aquí encontrarás respuestas a las preguntas más comunes
              sobre nuestros controladores industriales Controllino.</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/preguntas-frecuentes-controllino"
                class="btn btn-orange rounded-xl">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative  mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius: 20px;transition: .5s;">
            <img src="images/herramientas/Tabla_comparativa_amr.png" alt="" class="w-100 h-100">
          </div>
          <div class=" face back w-200 h-200 bg-white border-orange p-4 d-flex flex-column justify-content-between"
            style="width: 200px; height: 200px; transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Compara fácilmente diferentes modelos de vehículos
              autónomos móviles (AMR)</p>
            <div class="mt-auto text-center">
              <a href="https://www.logicbus.com.mx/robots-colaborativos" class="btn btn-orange rounded-xl">Ver
                más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="efecto-tazo position-relative  mx-auto" style="width: 200px; height: 200px;">
          <div class="face front position-absolute w-100 h-100 overflow-hidden"
            style="border-radius: 20px;transition: .5s;">
            <img src="images/herramientas/Encunetra_el_convertidor.png" alt="" class="w-100 h-100">
          </div>
          <div class="face back w-200 h-200 bg-white border-orange p-3 d-flex flex-column justify-content-between"
            style="width: 200px; height: 200px; transition: .5s;">
            <p style="font-size: 12px;" class=" text-center">Compara características clave como precisión, velocidad de
              conversión y opciones de interfaz para tomar la mejor decisión para tu proyecto.</p>
            <div class="mt-auto text-center">
              <a href="https://tienda.logicbus.com.mx/Tabla-de-Z109REG-_ep_212-1.html"
                class="btn btn-orange rounded-xl">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-blue text-center py-5">
    <div class="container mb-5">
      <h2 class="title white">¿NECESITAS MÁS INFORMACIÓN?</h2>
      <span class="paragraph white">
        Si necesitas ayuda personalizada, nuestro equipo de soporte está altamente capacitado para ayudarte a resolver
        tus problemas de forma rápida y eficaz.
      </span>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(".openModal").on("click", function () {
      var celda = $(this).attr("data-celda");
      var ruta = "pdf/36/Manuales/" + celda + ".pdf";
      document.getElementById("exampleModalLabel").innerHTML = "Famila " + celda;
      $('#PDF-celda').prop('src', ruta);
      $('#myModal').modal({
        show: true
      });
    });
  </script>
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>