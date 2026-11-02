<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Accesorios para sensores de temperatura infrarrojo LCT</title>
  <meta name="description" content="LCT - Herramienta de configuración de lazo (adaptador USB), para uso sobre el lado seguro del aislador, y software de configuración del sensor de...">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, LCT, herramienta, adaptador, USB, aislador, software, sensor, ExTemp, lazo, 4~20mA, mini gancho">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />

  <!--- Estilos Necesarios-->
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

  <section class="container-fluid">
    <div class="row">
      <div class="col-3 hide-mobile">
        <?php menucategorias(); ?>
      </div>
      <div class="col-12 col-md-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="./productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="./transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item"><a href="./sensores-temperatura" class="blue link-orange">Sensores de Temperatura</a></li>
            <li class="breadcrumb-item"><a href="./infrarrojos" class="blue link-orange">Infrarrojos</a></li>
            <li class="breadcrumb-item"><a href="./acc-infrarrojos" class="blue link-orange">Accesorios</a></li>
            <li class="breadcrumb-item active" aria-current="page">LCT</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Accesorios para sensores de temperatura infrarrojos
        LCT</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/lct_small.png" alt="LCT" title="LCT" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/LCT_p_9592.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <p class="text-justify paragraph font-weight-bold">Herramienta de configuración de lazo (adaptador USB), para uso sobre el lado seguro del aislador, y software de configuración del sensor de la serie ExTemp. Se une al lazo 4~20mA vía conectores tipo mini gancho.</p>
        <h2 class="text-justify paragraph font-weight-bold">Descripción:</h2>
        <p class="text-justify paragraph">Todos los modelos ExTemp son completamente configurables vía el adaptador USB opcional (para ser usado en el área segura). El software compatible con Windows incluido permite al usuario rescalar la salida de 4~20mA, ajustar la emisividad, y configurar promediando, el procesamiento y compensación de la energía reflejada. El adaptador es conectado al lazo de medición vía conectores de mini gancho.</p>
        <h2 class="text-justify paragraph font-weight-bold">Para usarse con:</h2>
        <p class="text-justify paragraph">Sensor infrarrojo <a class="blue link-orange" href="./sensores-temperatura-infrarrojos-extemp" target="_blank" rel="noopener noreferrer">ExTemp</a>.</p>
      </div>
  </section>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>