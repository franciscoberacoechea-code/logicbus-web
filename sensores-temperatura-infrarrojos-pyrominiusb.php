<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROMINIUSB</title>
  <meta name="description" content="PYROMINIUSB - Sensor de temperatura infrarrojo USB para mesa de trabajo, laboratorio y educación.">

  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROMINIUSB, sensores, temperatura, infrarrojos, fijo, sensor remoto, infrarrojo pequeño, sensor USB, mesa de trabajo, laboratorio, educación">

  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
            <li class="breadcrumb-item active" aria-current="page">PyroMiniUSB</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroMiniUSB</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominiusb/pyrominiusb.jpg" alt="PyroMiniUSB" title="PyroMiniUSB" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrominiusb"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="paragraph text-center">Sensor de temperatura infrarrojo USB para mesa de trabajo, laboratorio y educación.</h2>
        <p class="text-justify paragraph">Con la precisión y la robustez de nuestros pirómetros industriales, y la conveniencia de conectar y usar USB, el PyroMiniUSB es el sensor de temperatura de mesa ideal para pruebas y experimentación.</p>
      </div>
  </section>

  <section class="container mt-3">
    <p class="text-justify paragraph">Es ideal para enseñar conceptos científicos tales como emisividad, reflectividad, conductividad térmica, transferencia de energía, aislamiento y energía interna.</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>Sensor de temperatura en miniatura sin contacto con comunicaciones USB.</li>
      <li>Mide temperaturas desde -20 °C hasta 1000 °C.</li>
      <li>Cable USB incluido.</li>
      <li>Software gratuito para registro y configuración de datos.</li>
      <li>Protocolo Modbus: use su propio software para comunicarse con el sensor.</li>
    </ul>
  </section>

  <section class="container mt-5">
    <div class="table-responsive">
      <table class="table table-bordered text-justify">
        <thead class="thead-dark">
          <tr>
            <th colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Especificaciones de Técnicas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="align-middle">Rango de temperatura</td>
            <td class="align-middle">-20 °C a 1000 °C</td>
          </tr>
          <tr>
            <td class="align-middle">Interfaz</td>
            <td class="align-middle">USB</td>
          </tr>
          <tr>
            <td class="align-middle">Precisión</td>
            <td class="align-middle">± 1% de lectura o ± 1°C lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">
              ± 0.5% de lectura o ± 0.5 °C, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Emisividad</td>
            <td class="align-middle">
              0.2 a 1.0</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">125 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">
              8 a 14 μm</td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje de alimentación</td>
            <td class="align-middle">5 VDC</td>
          </tr>
          <tr>
            <td class="align-middle">Corriente de alimentación</td>
            <td class="align-middle">50 mA max.</td>
          </tr>
          <tr>
            <td class="align-middle">Tasa de baudios</td>
            <td class="align-middle">9600 baudios (otras configuraciones disponibles a pedido)</td>
          </tr>
          <tr>
            <td class="align-middle">Formato de datos Modbus</td>
            <td class="align-middle">8 bits de datos, sin paridad, 1 bit de parada (otras configuraciones disponibles bajo pedido)</td>
          </tr>
          <tr>
            <td class="align-middle">Protocolo</td>
            <td class="align-middle">Modbus sobre Serial Line</td>
          </tr>
          <tr>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Mecánicas</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción </td>
            <td class="align-middle">Acero inoxidable</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones</td>
            <td class="align-middle">18 mm de diámetro x 45 mm de largo (excluyendo prensaestopas)</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje de rosca</td>
            <td class="align-middle">M16 x 1 mm de paso</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable USB</td>
            <td class="align-middle">1.5 m</td>
          </tr>
          <tr>
            <td class="align-middle">Peso con cable</td>
            <td class="align-middle">85 g</td>
          </tr>
          <tr>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Medio ambiente</td>
          </tr>
          <tr>
            <td class="align-middle">Clasificación ambiental</td>
            <td class="align-middle">IP65</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura de ambiente</td>
            <td class="align-middle">0°C a 75°C</td>
          </tr>
          <tr>
            <td class="align-middle">Humedad relativa</td>
            <td class="align-middle">95% max. sin condensación</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominiusb/sensor-temperatura-infrarrojo-diagrama_01.png" alt="20:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominiusb/sensor-temperatura-infrarrojo-diagrama_02.png" alt="2:1 focus optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <p class="paragraph font-weight-bold">Hay dos modelos disponibles:</p>
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Descripción</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PMU21</td>
            <td class="align-middle">PyroMiniUSB con óptica 2:1 - para objetivos grandes o de primer plano</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PMU21_p_10202.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PMU201</td>
            <td class="align-middle">PyroMiniUSB con óptica 20:1 - para objetivos pequeños o más distantes</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PMU201_p_10203.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
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