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
  <title>Software: Universal Library | Logicbus</title>
  <meta name="description" content="Es una librería completa de funciones para simplificar la configuración y operación de tu dispositivo de medición.">

  <meta name="keywords" content="Librerías de programación, Universal Library, software, tarjetas DAQ USB, tarjetas PCI, Visual Studio">
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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de desarrollo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Universal Library</li>
          </ol>
        </nav>
        <h1>Universal Library</h1>

        <div align="center">
          <img src="imagenes/01/UniversalLibrary_265.jpg" alt="Software: Universal Library" title="Software: Universal Library" class="image_productos" width="40%">
        </div>

        <div align="right">
          <a href="https://www.logicbus.com.mx/descargas/01/mccdaqv6.60.exe" title="Download" target="_blank">
            <img src="https://www.logicbus.com.mx/imagenes/descarga-software.gif" alt="Download" class="carrito"><br>
            <b>Descargar Software</b></a>
        </div>

        <p>Librer&iacute;as de programaci&oacute;n para Visual Studio&reg; en Windows&reg;. Es una librer&iacute;a completa de funciones para simplificar la configuraci&oacute;n y operaci&oacute;n de tu dispositivo de medici&oacute;n. Incluye un conjunto &uacute;nico y universal de funciones que opera con la mayor&iacute;a de nuestras tarjetas DAQ USB y PCI, por lo que solo tendr&aacute;s que aprender a utilizar la librer&iacute;a una sola vez. Soportada en Windows&reg;7 y Vista&trade; de 64 bits.</p>

        <strong>Caracter&iacute;sticas:</strong>
        <ul>
          <li>Soporte para Visual Studio&reg; y Visual Studio&reg; .NET&trade;</li>
          <li>Conjunto de funciones dise&ntilde;adas para trabajar con la mayor&iacute;a de las tarjetas DAQ USB y PCI</li>
          <li>Funciones id&eacute;nticas para cada idioma</li>
          <li>Incluye controladores para Windows&reg;7 y Vista&trade; de 64 bits (Soporta USB, WLS; WEB y la mayor&iacute;a de tarjetas PCI y PCIe)</li>
          <li>Incluido en el CD de cada tarjeta DAQ</li>
        </ul>
        <br><br>
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