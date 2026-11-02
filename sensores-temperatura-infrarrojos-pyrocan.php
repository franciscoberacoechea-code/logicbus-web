<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROCAN</title>
  <meta name="description" content="PYROCAN - Pirómetro con interfaz digital CAN.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROCAN, sensores, temperatura, infrarrojos, fijo, sensor remoto, pirómetro, interfaz digital, CAN, interfaz CAN">
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
            <li class="breadcrumb-item active" aria-current="page">PyroCAN</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroCAN</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/pyrocan.jpg" alt="PyroCAN" title="PyroCAN" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocan"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Pirómetro con interfaz digital CAN.</h2>
        <p class="container text-justify paragraph">El PyroCAN mide la temperatura de una superficie y la transmite a través del bus CAN utilizando el protocolo CAN sin procesar.</p>
        <p class="container text-justify paragraph">El sensor se puede conectar a una red con más sensores PyroCAN y otros tipos de dispositivos CAN. Un CAN ID configurable le permite conectarse fácilmente a una red existente.</p>
      </div>
    </div>
  </section>

  <section class="container mt-3">
    <p class="container text-justify paragraph">La emisividad ajustable permite medir una variedad de materiales con alta precisión y repetibilidad. Para obtener ayuda para obtener resultados precisos en su solicitud, comuníquese con Logicbus.</p>
    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="container paragraph marker-orange">
      <li>Sensor de temperatura infrarrojo sin contacto con interfaz CAN Bus.</li>
      <li>Rango de temperatura: -20 °C a 1000 °C.</li>
      <li>Protocolo CAN sin procesar.</li>
      <li>CAN ID configurable y ajuste de emisividad ajustable.</li>
    </ul>
  </section>

  <section class="container mt-5">
    <div class="table-responsive">
      <table class="table table-bordered text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones de medición</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura</td>
            <td class="align-middle">-20 °C a 1000 °C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Interfaz</td>
            <td class="align-middle">Raw CAN</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Precisión</td>
            <td class="align-middle">± 1% de lectura o ± 1°C lo que sea mayor</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Repetibilidad</td>
            <td class="align-middle">± 0.5% de lectura o ± 0.5 °C, lo que sea mayor</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable vía CAN, 0.2 a 1.0</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">200 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 μm</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Voltaje de alimentación</td>
            <td class="align-middle">12 a 24 VDC</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Corriente de alimentación</td>
            <td class="align-middle">50 mA max.</td>
          </tr>
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones del protocolo CAN</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Baud Rate</td>
            <td class="align-middle">250 kbps</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Formato de datos</td>
            <td class="align-middle">
              8 bytes en total:<br>
              Bytes 1-4: temperatura del objeto como punto flotante<br>
              Bytes 5-8: Temperatura ambiente como punto flotante.
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Intervalo de transmisión</td>
            <td class="align-middle">200 ms</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de ID CAN</td>
            <td class="align-middle">La ID se puede establecer entre 0 y 255 como un entero sin signo de 4 bytes</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Emisividad</td>
            <td class="align-middle">Ajustable de 0.2 a 1.0 como punto flotante de 4 bytes</td>
          </tr>
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones Mecánicas</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Construcción</td>
            <td class="align-middle">Acero inoxidable</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Dimensiones</td>
            <td class="align-middle">18 mm de diámetro x 103 mm de largo</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Montaje de rosca</td>
            <td class="align-middle">Rosca M16 x 1 mm</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Longitud del cable</td>
            <td class="align-middle">1m (longitudes más largas disponibles para ordenar)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Peso con cable de 1 m</td>
            <td class="align-middle">95 g</td>
          </tr>
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones Medio Ambiente</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Clasificación ambiental</td>
            <td class="align-middle">IP65</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura de ambiente</td>
            <td class="align-middle">0°C a 90°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Humedad relativa</td>
            <td class="align-middle">95% max. sin condensación</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/sensor-temperatura-infrarrojo-diagrama_01.png" alt="20:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/sensor-temperatura-infrarrojo-diagrama_02.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/pyrocan-order.png" alt="PyroCAN Series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Campo o vista</td>
            <td bgcolor="#CCCCCC" class="align-middle">Accesorios de enfriamiento</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td class="align-middle">PCAN21</td>
            <td class="align-middle">2:1 óptica divergente gran angular</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCAN21_p_38065.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCAN21WJ</td>
            <td class="align-middle">2:1 óptica divergente gran angular</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCAN21WJ_p_38066.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCAN201</td>
            <td class="align-middle">20:1 óptica divergente propósito general</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCAN201_p_38067.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCAN201WJ</td>
            <td class="align-middle">20:1 óptica divergente propósito general</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCAN201WJ_p_38068.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
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