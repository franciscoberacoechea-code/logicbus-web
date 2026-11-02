<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>Medidores de Consumo Eléctrico para Montaje en Riel DIN | Logicbus</title>
  <meta name="description" content="Optimiza tu consumo energético con nuestros medidores de panel y riel DIN, transductores de corriente y voltaje, y accesorios especializados.">

  <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Medidores de consumo eléctrico para montaje en Riel Din, conexion directa, requiere CT, Concentradores de Datos Modbus, Incluye CT">


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

  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <!-- RUTA DE NAVEGACION -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="consumo-y-analisis-de-energia-electrica" class="blue link-orange">Consumo y análisis de energía eléctrica</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medidores de consumo eléctrico para montaje en Riel Din</li>
          </ol>
        </nav>
        <!-- NOMBRE DE LA CATEGORIA -->
        <h1 class="titulo_producto">Medidores de consumo eléctrico para montaje en Riel Din</h1>

        <!-- LINK A TIENDA VIRTUAL -->
        <div class="row">
          <div class="col" align="right">
            <a href="https://tienda.logicbus.com.mx/Transductores-de-Corriente-el%C3%A9ctrica_c_3198.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" border=0 alt="Comprar"></a>
          </div>
        </div>

        <div class="tabla_subcategorias_grid mt-3">

          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Conexi%C3%B3n-Directa_c_3565.html">
                <img src="assets/images/categorias/conconsumo.png" alt="Medidores de consumo eléctrico para montaje en panel" title="Medidores de consumo eléctrico para montaje en panel" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Conexi%C3%B3n-Directa_c_3565.html">
                <h2>Conexión Directa</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Conexi%C3%B3n-Directa_c_3565.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>


          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Incluye-Rogowski_c_3564.html">
                <img src="assets/images/categorias/conrowosky.jpg" alt="Medidores de consumo eléctrico para montaje en panel" title="Medidores de consumo eléctrico para montaje en panel" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Incluye-Rogowski_c_3564.html">
                <h2>Incluye Rogowski</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Incluye-Rogowski_c_3564.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>


          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Requiere-CT_c_3563.html">
                <img src="assets/images/categorias/requiereCT.jpg" alt="Requiere CT" title="Requiere CT" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Requiere-CT_c_3563.html">
                <h2>Requiere CT</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Requiere-CT_c_3563.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>



          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Incluye-CT_c_3566.html">
                <img src="assets/images/categorias/incluyeCT.jpg" alt="Requiere CT" title="Requiere CT" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Incluye-CT_c_3566.html">
                <h2>incluye CT</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Incluye-CT_c_3566.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>



          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Concentradores-de-Datos-Modbus_c_3567.html">
                <img src="assets/images/categorias/Concentradores.jpg" alt="Concentradores de Datos Modbus" title="Concentradores de Datos Modbus" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Concentradores-de-Datos-Modbus_c_3567.html">
                <h2>Concentradores de Datos Modbus</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Concentradores-de-Datos-Modbus_c_3567.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>

          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="https://tienda.logicbus.com.mx/Accesorios_c_3562.html">
                <img src="assets/images/categorias/cables.png" alt="Concentradores de Datos Modbus" title="Concentradores de Datos Modbus" width="80%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8" align="left">
              <a href="https://tienda.logicbus.com.mx/Accesorios_c_3562.html">
                <h2>Accesorios</h2>
              </a>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Accesorios_c_3562.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
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