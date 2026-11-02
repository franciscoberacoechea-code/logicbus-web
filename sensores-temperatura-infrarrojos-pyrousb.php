<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROUSB</title>
  <meta name="description" content="PYROUSB - Sensores de temperatura infrarrojos configurables para PC con salida de 4-20 mA.">

  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROUSB, sensores, temperatura, infrarrojos, configurables, para PC, salida de 4-20 mA">
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
            <li class="breadcrumb-item active" aria-current="page">PyroUSB</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroUSB</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/pyrousb.jpg" alt="PyroUSB" title="PyroUSB" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrousb-version-nueva"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="paragraph text-center">Sensores de temperatura infrarrojos configurables para PC con salida de 4-20 mA.</h2>
        <h2 class="text-center mt-5">Aplicaciones Típicas</h2>
        <h3 class="paragraph font-weight-bold">Acero</h3>
        <p class="text-justify paragraph">El PUA2 de longitud de onda corta proporciona una lectura más precisa en superficies metálicas reflectantes, como hierro y acero, que los sensores de longitud de onda más larga. Las aplicaciones incluyen mediciones generales de temperatura de la banda de acero a bajas temperaturas, medición de la temperatura del acero antes del horno de recalentamiento y temperatura en el bobinador en el laminador en caliente.</p>
      </div>
  </section>

  <section class="container mt-3">
    <h3 class="paragraph font-weight-bold">Energía eólica</h3>
    <p class="text-justify paragraph">Los modelos PUA2 pueden monitorear la temperatura de la superficie del disco de freno en turbinas eólicas, para ayudar a prevenir el sobrecalentamiento y optimizar los ciclos de enfriamiento. Los modelos PUA8 miden partes no reflectantes de la turbina, como cajas de engranajes y carcasas de cojinetes. Los sensores infrarrojos sin contacto pueden controlar la temperatura de las partes vibrantes mientras están aislados completamente de la vibración.</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>La temperatura varía de -40 °C a 2000 °C.</li>
      <li>Modelos de longitud de onda corta para una mejor precisión en objetivos de alta temperatura y metales.</li>
      <li>Modelos de 5 µm para medir la temperatura de la superficie del vidrio.</li>
      <li>Modelos de propósito general para la mayoría de las otras aplicaciones.</li>
      <li>Salida de 4-20 mA escalable.</li>
      <li>Totalmente configurable a través de la interfaz USB (cable y software de Windows incluidos).</li>
      <li>Utilice la salida USB o analógica solamente, o ambas juntas.</li>
    </ul>

    <p class="paragraph text-justify font-weight-bold">Funciones de software</p>
    <ul class="paragraph marker-orange">
      <li>Configuración del sensor.</li>
      <li>Visualización de la temperatura medida.</li>
      <li>Tabla de temperatura de desplazamiento.</li>
      <li>Alarmas en pantalla.</li>
      <li>Adquisición de datos a un archivo compatible con Excel.</li>
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
            <td class="align-middle">Modelos PUA2: <br>
              LT: 45 °C * a 300 °C <br>
              PT: 100 °C a 400 °C <br>
              MT: 250 °C a 1000 °C <br>
              HT: 450 °C a 2000 °C <br><br>
              Modelos PUA5: <br>
              GLT: 50 °C a 1000 °C <br>
              GHT: 200 °C a 1650 °C <br><br>
              Modelos PUA8: <br>
              -40 °C a 1000 °C
            </td>
          </tr>
          <tr>
            <td class="align-middle">Campo de visión</td>
            <td class="align-middle">Modelos PUA2: <br>
              15: 1 (con rango de temperatura LT o PT) <br>
              25: 1 (con rango de temperatura MT o HT) <br>
              75: 1 (con rango de temperatura MT o HT) <br>
              Enfoque cercano ø7.5mm @ 500mm (con rango de temperatura MT o HT) <br><br>

              Modelos PUA5: 25: 1 <br>
              Modelos PUA8: 30: 1 o Close Focus ø 5 mm a 100 mm
            </td>
          </tr>
          <tr>
            <td class="align-middle">Salida</td>
            <td class="align-middle">2 hilos de 4 a 20 mA (lineal con temperatura)</td>
          </tr>
          <tr>
            <td class="align-middle">Configuración</td>
            <td class="align-middle">A través del puerto de PC conforme a USB 2.0</td>
          </tr>
          <tr>
            <td class="align-middle">Precisión</td>
            <td class="align-middle">
              Modelos PUA2: ± 1% de lectura o ± 2 °C, lo que sea mayor <br>
              Modelos PUA5 y PUA8: ± 1 °C o 1% de lectura, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">
              ± 0.5% de lectura o ± 0.5 °C, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Emisividad</td>
            <td class="align-middle">Ajustable de 0.1 a 1.0 a través del software</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">200 ms</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">
              PUA2: 2.0 a 2.6 µm <br>
              PUA5: 5 µm <br>
              PUA8: 8 a 14 µm</td>
          </tr>
          <tr>
            <td class="align-middle">Suministro de voltaje</td>
            <td class="align-middle">24 VDC (28 VDC max)</td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje del sensor</td>
            <td class="align-middle">6 VDC min</td>
          </tr>
          <tr>
            <td class="align-middle">Impedancia máxima</td>
            <td class="align-middle">900 Ω @ 24 VDC</td>
          </tr>
          <tr>
            <td class="align-middle">Span máximo (salida analógica)</td>
            <td class="align-middle">Rango de temperatura completo</td>
          </tr>
          <tr>
            <td class="align-middle">Span mínimo (salida analógica)</td>
            <td class="align-middle">100°C</td>
          </tr>
          <tr>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Mecánicas</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción</td>
            <td class="align-middle">Acero inoxidable</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones</td>
            <td class="align-middle">Ø 27.6 x longitud 61 mm incluyendo prensaestopas</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje de la rosca</td>
            <td class="align-middle">M20 x 1 mm, longitud 15 mm</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable</td>
            <td class="align-middle">1 m (cable más largo disponible a pedido)</td>
          </tr>
          <tr>
            <td class="align-middle">Peso incluyendo el cable</td>
            <td class="align-middle">155 gr</td>
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
            <td class="align-middle">0°C a 70°C</td>
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
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_01.png" alt="75:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_02.png" alt="Close focus optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_03.png" alt="25:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_04.png" alt="15:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_05.png" alt="CF Close focus optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/sensor-temperatura-infrarrojo-diagrama_06.png" alt="30:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/pyrousb-order.png" alt="PyroUSB Series" style="max-width: 50vh;">
    </div>
    <p class="paragraph font-weight-bold">Respuesta espectral</p>
    <p class="paragraph text-justify">[PUA2] Longitud de onda corta, 2,2 µm, para medir metales reflectantes y objetos a alta temperatura.</p>
    <p class="paragraph text-justify">[PUA5] 5 µm, para medir la temperatura de la superficie del vidrio.</p>
    <p class="paragraph text-justify">[PUA8] Propósito general, 8 a 14 µm, para la mayoría de las otras aplicaciones.</p>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Óptica</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura	</td>
            <td bgcolor="#CCCCCC" class="align-middle">Accesorio de enfriamiento</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PUA2-151-LT</td>
            <td class="align-middle">Ópticas divergentes 15: 1 (solo modelos LT y PT)</td>
            <td class="align-middle">45 °C a 300 °C (151 modelos solamente)</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-151-LT-WJ</td>
            <td class="align-middle">15:1 óptica divergente (solo modelos LT y PT)</td>
            <td class="align-middle">45 °C a 300 °C (151 modelos solamente)</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-151-PT</td>
            <td class="align-middle">Ópticas divergentes 15: 1 (solo modelos LT y PT)</td>
            <td class="align-middle">100 °C a 400 °C (151 modelos solamente)</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-151-PT-WJ</td>
            <td class="align-middle">15:1 óptica divergente (solo modelos LT y PT)</td>
            <td class="align-middle">100 °C a 400 °C (151 modelos solamente)</td>
            <td class="align-middle">Si</td>
          </tr>

          <tr>
            <td class="align-middle">PUA2-251-MT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-251-MT-WJ</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-251-HT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-251-HT-WJ</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">Si</td>
          </tr>


          <tr>
            <td class="align-middle">PUA2-751-MT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-751-MT-WJ</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-751-HT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-751-HT-WJ</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">Si</td>
          </tr>


          <tr>
            <td class="align-middle">PUA2-CF-MT</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño de punto focal 7.5 mm a 500 mm de distancia)</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-CF-MT-WJ</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño de punto focal 7.5 mm a 500 mm de distancia)</td>
            <td class="align-middle">250 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-CF-HT</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño de punto focal 7.5 mm a 500 mm de distancia)</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA2-CF-HT-WJ</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño de punto focal 7.5 mm a 500 mm de distancia)</td>
            <td class="align-middle">450 °C a 2000 °C</td>
            <td class="align-middle">Si</td>
          </tr>


          <tr>
            <td class="align-middle">PUA5-251-GLT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">50 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA5-251-GLT-WJ</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">50 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA5-251-GHT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">200 °C a 1650 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA5-251-GHT-WJ</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">200 °C a 1650 °C</td>
            <td class="align-middle">Si</td>
          </tr>


          <tr>
            <td class="align-middle">PUA8-301</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-40 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA8-301-WJ</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-40 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">PUA8-CF</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño del punto focal 5 mm a 100 mm de distancia)</td>
            <td class="align-middle">-40 °C a 1000 °C</td>
            <td class="align-middle">No</td>
          </tr>
          <tr>
            <td class="align-middle">PUA8-CF-WJ</td>
            <td class="align-middle">Óptica de enfoque cercano (tamaño del punto focal 5 mm a 100 mm de distancia)</td>
            <td class="align-middle">-40 °C a 1000 °C</td>
            <td class="align-middle">Si</td>
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