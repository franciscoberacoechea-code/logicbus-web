<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYRONFC</title>
  <meta name="description" content="PYRONFC - Sensor de temperatura infrarrojo pequeño y de bajo costo con configuración de teléfono inteligente via NFC.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYRONFC, sensores, temperatura, infrarrojos, fijo, sensor remoto, infrarrojo pequeño, bajo costo, configuración, teléfono inteligente, NFC">
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
            <li class="breadcrumb-item active" aria-current="page">PyroNFC</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroNFC</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyronfc/pyronfc.jpg" alt="PyroNFC" title="PyroNFC" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyronfc"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="paragraph text-center">Sensor de temperatura infrarrojo pequeño y de bajo costo con configuración de teléfono inteligente.</h2>
        <p class="text-justify paragraph">El PyroNFC es un sensor de temperatura infrarrojo de uso general. Mide los no metales no reflectantes directamente de la caja con la configuración predeterminada.</p>
        <p class="text-justify paragraph">La temperatura de la superficie de los materiales, incluidos el papel, los plásticos gruesos, la madera y el tablero manufacturado, las superficies pintadas, el asfalto, los materiales a granel, los alimentos, los productos farmacéuticos y los materiales orgánicos se mide de forma precisa y sencilla.</p>
      </div>
  </section>

  <section class="container mt-3">
    <p class="text-justify paragraph">El sensor es totalmente configurable en emisividad, promedio, procesamiento de retención de pico o valle, compensación de energía reflejada, alarma y más, a través de NFC (Near Field Communications) con la aplicación gratuita PyroNFC para Android.</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>Sensor de temperatura industrial pequeño sin contacto y de bajo costo.</li>
      <li>Cable de entrada lateral: ideal para el montaje en espacios reducidos.</li>
      <li>Elección de salidas analógicas: tensión o termopar tipo K.</li>
      <li>Rango de temperatura de 0 °C a 1000 °C.</li>
      <li>Totalmente configurable para promediar, retener el procesamiento, la emisividad, la escala de salida, etc. a través de la aplicación de teléfono inteligente para Android
      <li>Salida de alarma de serie en todos los modelos.</li>
      <li>Carcasa de perfil bajo para aplicaciones con espacio limitado, por ej. Pruebas de frenos, rodillos de silicona, máquinas textiles, etc.</li>
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
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Generales</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura</td>
            <td class="align-middle">0 °C a 1000 °C</td>
          </tr>
          <tr>
            <td class="align-middle">Salida de temperatura</td>
            <td class="align-middle">
              Elección de 2 opciones (ver información de pedido): <br>
              Voltaje: salida de 0-5 VDC o 0-10 VDC, lineal con temperatura medida, escalable, configurable a través de NFC
              <br>
              o
              <br>
              Salida de termopar tipo K
            </td>
          </tr>
          <tr>
            <td class="align-middle">Salida de alarma</td>
            <td class="align-middle">Salida de alarma de colector abierto con umbral de temperatura e histéresis, configurable a través de NFC <br>
              Nota: Las salidas de alarma y temperatura pueden ser usadas simultáneamente.</td>
          </tr>
          <tr>
            <td class="align-middle">Campo de visión</td>
            <td class="align-middle">15:1 (ver diagrama del campo de visión)
            </td>
          </tr>
          <tr>
            <td class="align-middle">Precisión</td>
            <td class="align-middle">± 1.5% de lectura o ± 1.5 °C, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">
              ± 0.5% de lectura o ± 0.5 °C, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">125 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td class="align-middle">Configuración</td>
            <td class="align-middle">
              A través de la aplicación Android usando un dispositivo equipado con NFC (por ejemplo, un teléfono inteligente o una tableta)</td>
          </tr>
          <tr>
            <td class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable a través de la aplicación</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de ajuste de emisividad</td>
            <td class="align-middle">0.2 a 1.0</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura máxima (salida de voltaje)</td>
            <td class="align-middle">1000°C</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura mínima (salida de voltaje)</td>
            <td class="align-middle">100°C</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 μm
            </td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje de alimentación máximo</td>
            <td class="align-middle">28 VDC</td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje de alimentación mínima (en el sensor)</td>
            <td class="align-middle">
              12 VDC (para salida de 10 V) <br>
              6 VDC (para salida de 5 V)</td>
          </tr>
          <tr>
            <td class="align-middle">Corriente máxima</td>
            <td class="align-middle">6 mA</td>
          </tr>
          <tr>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Mecánicas</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción </td>
            <td class="align-middle">Aluminio anodizado negro y ABS.</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable</td>
            <td class="align-middle">1 metro estándar (longitudes más largas disponibles para ordenar)</td>
          </tr>
          <tr>
            <td class="align-middle">Peso con cable de 1 m.</td>
            <td class="align-middle">65 g (modelos con salida de tensión) <br>
              100 g (modelos con salida de termopar)</td>
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
            <td class="align-middle">0°C a 80°C</td>
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
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyronfc/sensor-temperatura-infrarrojo-diagrama_01.png" alt="15:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyronfc/pyronfc-order.png" alt="Series pyroNfC" style="max-width: 500px;">
    </div>
    <p class="paragraph font-weight-bold">Hay dos modelos disponibles:</p>
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Óptica</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PN151</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Salida lineal de 0-5 o 0-10 VCC para la temperatura medida, configurable a través de la aplicación y salida de alarma de colector abierto</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PN151_p_4631.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PN151-K</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Salida de termopar tipo K para la temperatura medida y salida de alarma de colector abierto</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PN151-K_p_26245.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
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