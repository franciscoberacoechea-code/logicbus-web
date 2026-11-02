<?php
require "admin/config.php";
include "libreria/libreria.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SENECA | Interfaces de Automatización | Adquisición de Datos</title>
  <meta name="description"
    content="Descubra nuestras líneas de productos: Adquisición de Datos y Automatización, Sistemas de Adquisición de Datos y Automatización, Comunicación Industrial y Control Remoto.">
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo,Estado de Mexico,Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Seneca, Seneca México, Seneca guadalajara, acondicionadores, indicadores, adquisicion de datos con modbus, controladores GSM, medición y instrumentacion del panel de control, monitorizacion de potencia y medición eléctrica, comunicación industrial y telecontrol">
  <meta name="copyright" content="Logicbus S.A. de C.V.">

  <!-- Estilos necesarios -->
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
    * {
      box-sizing: border-box;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    .mi-boton:hover {
      background-color: #043a6dff;
    }
  </style>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require "libreria/header.view.php"; ?>

  <div id="main">
    <center>
      <h1 class="sr-only"><b>SENECA</b></h1>
    </center>

    <div class="gridContArriba">
      <div class="griditemContA">
        <?php menucategorias(); ?>
      </div>
      <div class="griditemContA" id="subir">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Seneca</li>
          </ol>
        </nav>

        <div>
          <img src="images/banner/www/PorMarca/Banner-Seneca.webp" class="img-fluid" alt="SENECA" title="SENECA">
        </div><br>

        <p class="texto-justificado"><b>SÉNECA</b> ha alcanzado una posición preeminente en el mercado italiano de instrumentación
          electrónica haciendo de la innovación, la fiabilidad y la asistencia cualificada sus puntos de fuerza. Las
          líneas de producto, ideadas y realizadas en su totalidad en los establecimientos SÉNECA, son compatibles y
          están abiertas en relación con las normas tecnológicas más difundidas.</p>

        <div class="row" style="margin: 0;">
          <div class="col-12 col-md-3 seccion-productos">
            <img src="imagenes/44/ADQUISICION-DE-DATOS-DE-SISTEMAS-Y-AUTOMATIZACION.webp" class="img-fluid" alt="Adquisición de datos de sistemas y automatización"
              title="Adquisición de datos de sistemas y automatización" height="40">
          </div>
          <div class="col-12 col-md-3 seccion-productos">
            <img src="imagenes/44/COMUNICACION-INDUSTRIAL-Y-TELECONTROL.webp" class="img-fluid" alt="Comunicación industrial y telecontrol"
              title="Comunicación industrial y telecontrol">
          </div>
          <div class="col-12 col-md-3 seccion-productos">
            <img src="imagenes/44/MONITORIZACION-Y-MEDIDAS-ELECTRICAS.webp" class="img-fluid"
              alt="Monitorización de potencia y medición eléctrica"
              title="Monitorización de potencia y medición eléctrica">
          </div>
          <div class="col-12 col-md-3 seccion-productos">
            <img src="imagenes/44/INSTRUMENTACION-PARA-PANEL.webp" class="img-fluid" alt="Instrumentación del panel de control"
              title="Instrumentación del panel de control">
          </div>
        </div>

        <center>
          <nav class="navMenuSuper">
            <ul>
              <li><a href="https://tienda.logicbus.com.mx/SENECA_bymfg_11-7-1.html" target="_blank">Ver en Tienda</a></li>
              <li><a href="#productos">Productos</a></li>
              <li><a href="#catalogos">Catálogos</a></li>
              <li><a href="#industrias">Industrias</a></li>
              <li><a href="#videos">Videos</a></li>
              <li><a href="#articulos">Artículos</a></li>
              <li><a href="#GuiasyManuales">Guias y Manuales</a></li>
            </ul>
          </nav>
        </center>
      </div>
    </div>

    <!-- Sección descriptiva y cuadros -->
    <div class="gridContMitad">
      <div class="griditemContB">
        <center>
          <a href="https://tienda.logicbus.com.mx/T201_p_4133.html" target="_blank">
            <img loading="lazy" class="imgBorde" src="imagenes/44/Post-Seneca-sku-T201.webp" width="100%" alt="Post-Seneca-sku-T201">
          </a>
        </center>
      </div>
      <div class="griditemContB">
        <p class="texto-justificado">SÉNECA pretende confirmar y expandir su oferta de excelencia a través de una amplia gama de
          productos. Gracias a la sinergia de dos business unit (interfaz para la automatización, Instalaciones &
          Servicios industriales) organizadas de acuerdo con los criterios de calidad, SÉNECA propone una oferta
          completa de soluciones de automatización: desde el componente individual al equipo llave en mano para
          satisfacer cualquier exigencia.</p>

        <p class="texto-justificado">Los acondicionadores de voltaje SÉNECA son eficientes cuando se trata de medir altas
          tensiones o señales analógicas que los sistemas digitales no pueden aceptar o medir en sus entradas. Un
          acondicionador de señal principalmente nos ayuda a estandarizar a un mismo rango de voltaje señales físicas de
          diferentes índoles.</p>

        <p>Así mismo, estos permiten diferentes entradas tales como:</p>
        <div align="center"><img loading="lazy" src="imagenes/44/SENECA-CUADRO-MX.webp" width="100%" alt=""></div>
      </div>
    </div>

    <!-- Productos -->
    <center>
      <div class="seccion" id="productos">
        <div class="col-center">
          <h2><span>Productos</span></h2>
        </div>
      </div>
    </center>

    <div class="divCentrado">
      <div class="tabla_subcategorias_grid my-5 textoJus">
        <!-- Productos listados aquí -->
        <?php echo mostrar_productos_seneca(); ?>
      </div>
    </div>

    <!-- Catálogos -->
    <center>
      <div class="seccion" id="catalogos">
        <div class="col-center">
          <h2><span>Catálogos</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="row text-center">
        <?php echo mostrar_catalogos_seneca(); ?>
      </div>
    </div>

    <!-- Industrias -->
    <center>
      <div class="seccion" id="industrias">
        <div class="col-center">
          <h2><span>Industrias</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="row text-center">
        <?php echo mostrar_industrias_seneca(); ?>
      </div>
    </div>

    <!-- Videos -->
    <center>
      <div class="seccion" id="videos">
        <div class="col-center">
          <h2><span>Videos</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="row text-center">
        <?php echo mostrar_videos_seneca(); ?>
      </div>
    </div>

    <!-- Artículos -->
    <center>
      <div class="seccion" id="articulos">
        <div class="col-center">
          <h2><span>Artículos</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="row text-center">
        <?php echo mostrar_articulos_seneca(); ?>
      </div>
    </div>

    <!-- Guias y manuales -->
    <center>
      <div class="seccion" id="GuiasyManuales">
        <div class="col-center">
          <h2><span>Guias y Manuales</span></h2>
        </div>
      </div>
    </center>
    <div class="divCentrado">
      <div class="row text-center">
        <?php echo mostrar_guias_seneca(); ?>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <?php require "libreria/footer.view.php"; ?>
  <?php echo $var_footer; ?>

  <!-- Scripts -->
  <?php echo $jquery_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
</body>

</html>
