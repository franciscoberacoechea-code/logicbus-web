<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROCUBE M</title>
  <meta name="description" content="PYROCUBE M - Pirómetro con respuesta rápida y pequeño punto de medición, para metales a baja temperatura.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROCUBE M, pirómetro, pirometro, respuesta rápida, pequeño punto de medición, para metales, baja temperatura">
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
            <li class="breadcrumb-item active" aria-current="page">PyroCube M</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroCube M</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-pyrocube-m-metal.png" alt="PyroCube M" title="PyroCube M" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-m"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Pirómetro con respuesta rápida y pequeño punto de medición, para metales a baja temperatura.</h2>
        <p class="paragraph text-justify font-weight-bold">Características</p>
        <ul class="container paragraph marker-orange">
          <li>Mide objetivos metálicos pequeños y reflectantes a bajas temperaturas.</li>
          <li>La temperatura oscila entre 100 ° C y 600 ° C.</li>
          <li>Punto medido tan pequeño como 1 mm.</li>
          <li>Tiempo de respuesta 1 ms.</li>
          <li>La luz de orientación LED continua muestra la posición y el tamaño del punto medido.</li>
          <li>Interfaz de pantalla táctil multilingüe (opcional).</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="container">
    <p class="container text-justify paragraph">El PyroCube es un pirómetro infrarrojo con un tiempo de respuesta extremadamente rápido y un tamaño de área de medición muy pequeño. Está disponible con o sin la interfaz de pantalla táctil PM030.</p>
    <p class="container text-justify paragraph">El PyroCube M mide la temperatura de objetivos metálicos pequeños y reflectantes de 100 ° C a 600 ° C con un tiempo de respuesta de 1 milisegundo.</p>
    <p class="container text-justify paragraph">Los modelos MA pueden medir áreas tan pequeñas como 1 mm. Una opción de la óptica está disponible.</p>
    <p class="container text-justify paragraph">El modelo MB más pequeño y de menor costo mide un punto de 11 mm.</p>
    <p class="container text-justify paragraph">Todos los modelos pueden medir a través de ventanas de vidrio o cuarzo.</p>
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
              100°C a 600°C <br>
              Con una emisividad mayor a 0.3, las mediciones por debajo de 100 ° C son posibles con una estabilidad reducida.
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Escala de salida analógica</td>
            <td class="align-middle">
              Factory set: <br>
              4 mA = 50°C <br>
              20 mA = 600°C <br>
              Ajustable mediante módulo de pantalla táctil opcional o RS232
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Tiempo de respuesta (95%)</td>
            <td class="align-middle">
              1 ms <br>
              Ajustable mediante función de promediado.
            </td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Diámetro de punto de medición</td>
            <td class="align-middle">Desde 1,0 mm dependiendo de la distancia de medición y la elección de la óptica (consulte los diagramas de campo de visión a continuación)</td>
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
            <td class="align-middle">±(0.2% + 2°C)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Resolución de temperatura</td>
            <td class="align-middle">
              <0.5°C< /td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable a través de RS232C o interfaz de pantalla táctil opcional 0.05 a 1.0</td>
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
            <td class="align-middle">5 a 27 V DC, 100 mA máx.</td>
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
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocubem/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Measured pot diameter 3.5 mm at distance 200mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocubem/sensor-temperatura-infrarrojo-diagrama_02.png" alt="Measured spot diameter 2.0 mm at distance 100 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocubem/sensor-temperatura-infrarrojo-diagrama_03.png" alt="Measured spot diameter 1.0 mm at distance 50 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocubem/sensor-temperatura-infrarrojo-diagrama_04.png" alt="Measured spot diameter 11 mm at distance 200 mm" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocubem/pyrocube-m-order.png" alt="PM030" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Punto de medicion</td>
            <td bgcolor="#CCCCCC" class="align-middle">Largo del cable</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PCU-MA1.0-2M-1V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-2M-5V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-2M-10V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-5M-1V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-5M-5V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-5M-10V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-10M-1V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-10M-5V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA1.0-10M-10V</td>
            <td class="align-middle">1.0 mm a una distancia de 50 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-2M-1V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-2M-5V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-2M-10V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-5M-1V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-5M-5V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-5M-10V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-10M-1V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-10M-5V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-10M-10V</td>
            <td class="align-middle">2.0 mm a una distancia de 100 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-2M-1V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-2M-5V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-2M-10V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-5M-1V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-5M-5V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-5M-10V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-10M-1V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-P120-2M-10V_p_16110.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA3.5-10M-5V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MA2.0-10M-10V</td>
            <td class="align-middle">3.5 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-2M-1V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-2M-5V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-2M-10V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">2 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-5M-1V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-5M-5V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-5M-10V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">5 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-10M-1V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 1VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-10M-5V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 5VDC</td>
            <td class="align-middle"></td>
          </tr>
          <tr>
            <td class="align-middle">PCU-MB11.0-10M-10V</td>
            <td class="align-middle">11.0 mm a una distancia de 200 mm</td>
            <td class="align-middle">10 mts</td>
            <td class="align-middle">0 a 10VDC</td>
            <td class="align-middle"></td>
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