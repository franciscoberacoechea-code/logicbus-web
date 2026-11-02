<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Lector de Códigos - Escáner para Quiosco - Checador de Precio - Logicbus</title>
  <meta name="description" content="Lector de Códigos - Escáner para Quiosco - Checador de Precio">

  <meta name="keywords" content="Logicbus,Logicbus Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Radio Frecuencia, Cubos, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, Escáners, Lectores de Códigos, 1D, 2D, GS1, alta velocidad, codigo barras, codigo qr, lector de codigos de barras, Escáner para Quiosco, Checador de Precio, tipos de lectores de codigo">

  <meta name="copyright" content="Logicbus S.A. de C.V.">
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

  <div>
    <div class="container pagina_producto">
      <div class="row">
        <div class="col" align="center">
          <!-- RUTA DE NAVEGACION -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
              <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PC's y Comunicaciones Industriales</a></li>
              <li class="breadcrumb-item"><a href="escaner-lector-de-codigos" class="blue link-orange">Escáner - Lector de Códigos</a></li>
              <li class="breadcrumb-item active" aria-current="page">Escáner para Quiosco - Checador de Precio</li>
            </ol>
          </nav>
          <!-- NOMBRE DE LA CATEGORIA -->
          <h1 class="titulo_producto"> Escáner para Quiosco - Checador de Precio </h1>

          <!-- LINK A TIENDA VIRTUAL -->
          <div class="row">
            <div class="col" align="right">
              <a href="https://tienda.logicbus.com.mx/Esc%C3%A1ner-para-Quiosco--Checador-de-Precio_c_3603.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" border=0></a>
            </div>
          </div>
          <div class="tabla_subcategorias_grid my-5">
            <div class="row row-striped tabla_subcategorias_row">
              <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
                <a href="https://tienda.logicbus.com.mx/SG-15C_p_19506.html" title="Ir a Tienda Logicbus" target="_blank">
                  <img src="imagenes/productos/pc-y-comunicaciones-industriales/escaner-lector-de-codigos/escaner-checador-de-precio/escaner-checador-de-precio-SG-15C.jpg" alt="SG-15C - Escáner de Escritorio" title="SG-15C - Escáner de Escritorio" width="80%">
                </a>
              </div>
              <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
                <a href="https://tienda.logicbus.com.mx/SG-15C_p_19506.html" title="Ir a Tienda Logicbus" target="_blank">
                  <h2>SG-15C</h2>
                </a>
                <p>Escaner para kiosko (checador de precios) SG-15 2D color rojo con conexión WLAN y pantalla revisión V00 ROHS.</p>
                <p>El SG15 Colour es un comprobador de precios de nivel de entrada, pequeño y atractivo, que cuenta con la última tecnología. La interfaz es a través de RF inalámbrico o Ethernet cableada. La pantalla brillante tiene, según el conjunto de fuentes, 3 o 5 líneas y puede mostrar hasta 20 caracteres por línea, y hay una variedad de escáneres de códigos de barras entre el escáner CCD de línea de exploración de nivel de entrada y las 20 líneas de exploración de alto rendimiento escáner láser omnidireccional.</p>
              </div>
              <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                <a href="https://tienda.logicbus.com.mx/SG-15C_p_19506.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
              </div>
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