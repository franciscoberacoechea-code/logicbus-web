<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROCUBE S y F</title>
  <meta name="description" content="PYROCUBE S y F - Sensor de temperatura infrarrojo con respuesta rápida, pequeño punto de medición y observación LED">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROCUBE S y F, Sensor de temperatura, infrarrojo, respuesta rápida, punto medicion pequeño, observación LED">
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
            <li class="breadcrumb-item active" aria-current="page">PyroCube S y F</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroCube S y F</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-PCU-S55-5M-5V.jpg" alt="PyroCube S y F" title="PyroCube S y F" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-PyroCube S y F"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo con respuesta rápida, pequeño punto de medición y observación LED</h2>
        <p class="paragraph text-justify font-weight-bold">Características</p>
        <ul class="container paragraph marker-orange">
          <li>Tiempo de respuesta tan rápido como 1 ms.</li>
          <li>Punto medido tan pequeño como 1,6 mm.</li>
          <li>La temperatura oscila entre 0 ° C y 500 ° C.</li>
          <li>La observación continua del LED muestra la posición y el tamaño del punto medido mientras se toman las lecturas.</li>
          <li>Interfaz de pantalla táctil multilingüe (opcional).</li>
        </ul>
      </div>
  </section>

  <section class="container mt-3">
    <p class="container text-justify paragraph">El PyroCube es un pirómetro infrarrojo con un tiempo de respuesta extremadamente rápido y un tamaño de área de medición muy pequeño. Está disponible con o sin la interfaz de pantalla táctil PM030.</p>
    <p class="container text-justify paragraph">Es un sensor de temperatura ideal para la medición de preformas de moldeo por soplado, así como para aplicaciones en la industria alimentaria, laboratorios y muchos otros.</p>
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
            <td class="align-middle">
              S models: 0°C to 500°C <br>
              F models: 50°C* to 500°C <br>
              * Las mediciones por debajo de 50 ° C son posibles con estabilidad reducida
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Escala de salida analógica</td>
            <td class="align-middle">
              Factory set: <br>
              4 mA = 0°C <br>
              20 mA = 500°C <br>
              Ajustable mediante módulo de pantalla táctil opcional o RS232
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Tiempo de respuesta (95%)</td>
            <td class="align-middle">
              1 ms (-F models) <br>
              10 ms (-S models) <br>
              Ajustable hasta 5 s mediante función de promediado.
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Diámetro de punto de medición</td>
            <td class="align-middle">A partir de 1,6 mm (ver los diagramas de campo de visión a continuación)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Avistamiento de blancos</td>
            <td class="align-middle">El LED rojo incorporado de serie en todos los modelos, muestra la posición y el tamaño del área de medición. Encendido / apagado conmutable.</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Exactitud de la medida</td>
            <td class="align-middle">± 3°C or 1%, el que sea mayor</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Repetibilidad</td>
            <td class="align-middle">± 0.5°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Resolución de temperatura</td>
            <td class="align-middle">
              <0.5°C< /td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable, 0,3 a 1,0, a través de RS232C o interfaz de pantalla táctil opcional</td>
          </tr>
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones eléctricas</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Salidas</td>
            <td class="align-middle">1 salida analógica y 1 salida de alarma</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Salida analógica</td>
            <td class="align-middle">4-20 mA (establecido de forma predeterminada), 0-20 mA, mV / ° C o voltaje, seleccionable a través de la interfaz de pantalla táctil opcional PM030</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Salida de alarma</td>
            <td class="align-middle">1 salida de alarma de drenaje abierto, 27 VDC, 0.2 A</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Voltaje de alimentación</td>
            <td class="align-middle">5 to 27 V DC, 100 mA máx.</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Comunicaciones digitales</td>
            <td class="align-middle">RS232C Modbus RTU, no aislado</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-5 text-center">
      <a class="btn btn-orange" href="https://www.logicbus.com.mx/pdf/79/pyrocube-datasheet.pdf" target="_blank" rel="noopener noreferrer">Ficha técnica <i class="fa fa-file-pdf-o" style="font-size: 1.5rem;" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Measured spot diameter 7 mm at distance 200 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/sensor-temperatura-infrarrojo-diagrama_02.png" alt="Measured spot diameter 3.5 mm at distance 100 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/sensor-temperatura-infrarrojo-diagrama_03.png" alt="Measured spot diameter 5.5 mm at distance 100 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/sensor-temperatura-infrarrojo-diagrama_04.png" alt="Measured spot diameter 3 mm at distance 70 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/sensor-temperatura-infrarrojo-diagrama_05.png" alt="Measured spot diameter 1.6 mm at distance 35 mm" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_s_f/pyrocube-sf-order.png" alt="PyroCube S y F Series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Tiempo de respuesta</td>
            <td bgcolor="#CCCCCC" class="align-middle">Punto de medición</td>
            <td bgcolor="#CCCCCC" class="align-middle">Largo del cable</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PCU-S1.6-2M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-2M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-2M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-5M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-5M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-5M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-10M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-S16-10M-1V_p_15944.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          <tr>
            <td class="align-middle">PCU-S1.6-10M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S1.6-10M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">1.6 mm a una distancia de 35 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-2M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-2M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-2M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-5M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-5M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-5M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-10M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-10M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S3.0-10M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">3.0 mm a una distancia de 70 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-2M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-2M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-2M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-5M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-5M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-S55-5M-5V_p_17391.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          <tr>
            <td class="align-middle">PCU-S5.5-5M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-10M-1V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-S55-10M-1V_p_16108.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          <tr>
            <td class="align-middle">PCU-S5.5-10M-5V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-S5.5-10M-10V</td>
            <td class="align-middle">10 ms</td>
            <td class="align-middle">5.5 mm a una distancia de 120 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-2M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-2M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-2M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-5M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-5M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-5M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-10M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-F35-10M-1V_p_16109.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          <tr>
            <td class="align-middle">PCU-F3.5-10M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F3.5-10M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">3.5 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-2M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-2M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-2M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-5M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-5M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-5M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-10M-1V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-10M-5V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          <tr>
            <td class="align-middle">PCU-F7.0-10M-10V</td>
            <td class="align-middle">1 ms</td>
            <td class="align-middle">7.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
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