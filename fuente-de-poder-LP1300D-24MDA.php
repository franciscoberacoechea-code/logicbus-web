<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Fuente de poder fija de 24V montaje en riel DIN LP1300D-24MDA</title>
  <meta name="description" content="LP1300D-24MDA - Fuente de poder de AC -> DC, 24V, 12.5A 300w. Montaje en riel Din. Display indicador del voltaje de salida.">
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
  <div>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
          <li class="breadcrumb-item"><a href="automatizacion-control-procesos" class="blue link-orange">Automatización y Control de Procesos</a></li>
          <li class="breadcrumb-item"><a href="fuentes-de-poder" class="blue link-orange">Fuentes de Poder</a></li>
          <li class="breadcrumb-item"><a href="fuentes-de-poder-montaje-en-riel-din" class="blue link-orange">Fuentes de Poder con Montaje en Riel DIN</a></li>
          <li class="breadcrumb-item active" aria-current="page">LP1300D-24MDA</li>
        </ol>
      </nav>
    </div>

    <div class="gridContArriba">
      <div class="griditemContA">
        <?php menucategorias(); ?>
      </div>
      <div class="griditemContA">
        <p class="subtitle light-black">Fuente de poder fija de montaje en riel DIN LP1300D-24MDA</p>
        <div class="row justify-content-center">
          <div class="col-12 d-flex justify-content-center">
            <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/240/LP1300D-24MDA(FRONTAL).jpg" alt="" width="50%">
          </div>
          <div class="col-12">
            <p class="text-center font-weight-bold gray">Fuente de poder de AC -> DC, 24V, 12.5A 300w. Montaje en riel Din. Display indicador del voltaje de salida.</p>
          </div>
        </div>
        <div class="row">
          <div class="col" align="center">
            <a href="https://tienda.logicbus.com.mx/LP1300D-24MDA_p_13268.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="https://www.logicbus.com.mx/images/shopping_cart.png" border="0" alt="Comprar"></a>
          </div>
        </div>
        <p class="paragraph light-black font-weight-bold">Características</p>
        <ul>
          <li>Montaje en riel estándar / Din de doble propósito.</li>
          <li>Montaje fácil (instalación en un solo paso).</li>
          <li>El consumo de carga CN es inferior a 1.5W.</li>
          <li>Cumplir con alta eficiencia de alimentación 80PLUS Criterio.</li>
          <li>Cumplir con 2010. Energy Conservation Power Erp Regulation.</li>
          <li>Pantalla "Monitor de voltaje de salida.</li>
          <li>Refrigeración por convección de alta fiabilidad.</li>
        </ul>
      </div>
    </div>

    <div class="container my-5" id="video">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 my-3">
          <div class="embed-container">
            <iframe src="https://www.youtube.com/embed/buETCMm6sFU?si=L84cDKz-tX1_rdKS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-12 col-md-4 my-3">
          <div class="embed-container">
            <iframe src="https://www.youtube.com/embed/gtO0JeHzgJs?si=XZMZfpLXBla9ppQ7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>