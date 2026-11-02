<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROEPSILON</title>
  <meta name="description" content="PYROEPSILON - Sensor de temperatura infrarrojo, con emisividad configurable, salida de 4~20mA, rango de temperatura desde -20°C hasta 500°C.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, GueLeon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcalarrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo , Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROEPSILON, sensores compactos, miden la temperatura de objetos, materiales inaccesibles, en movimiento, temperatura desde -20&deg;C, hasta 500&deg;C, precisi&oacute;n, consistencia, tiempo de respuesta de 240 ms, salida de 4~20mA">
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
            <li class="breadcrumb-item active" aria-current="page">PyroEpsilon</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroEpsilon</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/pyroepsilon.jpg" alt="PyroEpsilon" title="PyroEpsilon" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyroepsilon"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo, con emisividad configurable, salida de 4~20mA, rango de temperatura desde -20°C hasta 500°C</h2>
        <p class="text-justify paragraph">Los sensores de temperatura PyroEpsilon son compactos de alta calidad y bajo costo, los cuales miden la temperatura de objetos y materiales inaccesibles o en movimiento. Miden temperaturas desde -20°C hasta 500°C, de manera precisa y consistentemente, con un tiempo de respuesta sobresaliente de 240 ms.</p>
      </div>
  </section>

  <section class="container mt-3">
    <p class="text-justify paragraph">Los sensores transmiten la temperatura del objetivo como una salida de 4~20mA y ofrecen una solución simple para la mayoría de las aplicaciones de medición de temperatura.</p>
    <p class="text-justify paragraph">El parámetro de emisividad de los sensores puede ser ajustado desde 0.2 a 1.0 para hacer frente a los diferentes materiales de los objetivos y es controlado por una entrada de 4~20mA. Esto da la oportunidad de ajustar el parámetro de emisividad automáticamente desde un controlador de lógica programable (PLC). Alternativamente la emisividad puede ser configurada manualmente usando el módulo opcional PyroTune. Si la entrada de 4~20mA se deja abierta o en cortocircuito, la emisividad por defecto es configurada a 0.95.</p>
    <p class="text-justify paragraph">Todos los sensores PyroEpsilon están equipados con lentes de germanio para la óptica de precisión. El modelo PE21 tiene una óptica de 2:1 lo cual lo hace ideal para la mayoría de las aplicaciones donde el sensor puede estar montado cerca del objetivo. El modelo PE151 está diseñado para objetivos pequeños o distantes y tiene una resolución óptica de 15:1. El modelo PE301 está diseñado para objetivos muy pequeños o distantes y tiene una resolución óptica de 30:1. El modelo PECF está diseñado para objetivos tan pequeños como un diámetro de 5mm a una distancia de 100mm del sensor.</p>
    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>Rango de temperatura: desde -20°C hasta 500°C.</li>
      <li>Salida de 4~20mA proporcional a la temperatura del objetivo.</li>
      <li>Entrada de 4~20mA para control de emisividad.</li>
      <li>Ajustador manual de emisividad PyroTune.</li>
      <li>Campo de vista: 2:1.</li>
      <li>Respuesta rápida con alta estabilidad.</li>
      <li>Carcasa de acero inoxidable, sellado a IP65.</li>
      <li>Instalación fácil y rápida.</li>
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
            <td class="align-middle">Salida</td>
            <td class="align-middle">4~20mA</td>
          </tr>
          <tr>
            <td class="align-middle">Precisión</td>
            <td class="align-middle">+/- 1% de lectura o +/- 1°C cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">+/- 0.5% de lectura o +/- 0.5°C, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td class="align-middle">Emisividad</td>
            <td class="align-middle">0.2 a 1.0 vía entrada de 4~20mA</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">240 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 µm</td>
          </tr>
          <tr>
            <td class="align-middle">Suministro de voltaje</td>
            <td class="align-middle">24 VDC nominal (28 VDC máx.)</td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje del sensor min.</td>
            <td class="align-middle">6 VDC</td>
          </tr>
          <tr>
            <td class="align-middle">Impedancia de lazo máx.</td>
            <td class="align-middle">900Ω (salida de 4~20 mA)</td>
          </tr>
          <tr>
            <td class="align-middle">Impedancia de salida</td>
            <td class="align-middle">56Ω</td>
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
            <td class="align-middle">18 mm de diámetro x 103 mm de largo</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje de la rosca</td>
            <td class="align-middle">M16 x 1 mm</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable</td>
            <td class="align-middle">1 m</td>
          </tr>
          <tr>
            <td class="align-middle">Peso incluyendo el cable</td>
            <td class="align-middle">95 gr</td>
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
            <td class="align-middle">95% máx. sin condensación</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-5 text-center">
      <a class="btn btn-orange" href="https://www.logicbus.com.mx/pdf/79/PyroEpsilon.pdf" target="_blank" rel="noopener noreferrer">Ficha técnica <i class="fa fa-file-pdf-o" style="font-size: 1.5rem;" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close focus optcs" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/sensor-temperatura-infrarrojo-diagrama_02.png" alt="30:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/sensor-temperatura-infrarrojo-diagrama_03.png" alt="15:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/sensor-temperatura-infrarrojo-diagrama_04.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/pyroepsilon-order.png" alt="PyroEpsilon Series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Resolución Óptica/Campo de Vista</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de Temperatura</td>
            <td bgcolor="#CCCCCC" class="align-middle">Accesorio de Enfriamiento</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td class="align-middle">PE21LT</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE21LTWJ</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE21MT</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE21MTWJ</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE151LT</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE151LT_p_8889.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE151LTWJ</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE151MT</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE151MT_p_8890.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE151MTWJ</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE151MTWJ_p_8900.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE151HT</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE151HT_p_8891.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE151HTWJ</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE301LT</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE301LT_p_8892.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE301LTWJ</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE301MT</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE301MT_p_8893.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE301MTWJ</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PE301HT</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PE301HT_p_8894.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PE301HTWJ</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PECFLT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PECFLT_p_8895.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PECFLTWJ</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PECFMT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PECFMT_p_8896.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PECFMTWJ</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PECFHT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PECFHT_p_8897.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PECFHTWJ</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td></td>
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