<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROCOUPLE</title>
  <meta name="description" content="PYROCOUPLE - La serie PyroCouple son sensores compactos de alta calidad y bajo costo los cuales miden la temperatura de...">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROCOUPLE, sensores compactos, miden la temperatura de objetos, materiales inaccesibles, en movimiento, temperatura desde -20°C, hasta 500°C, precisi&oacute;n, consistencia, tiempo de respuesta de 240 ms">
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
            <li class="breadcrumb-item active" aria-current="page">PyroCouple</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroCouple</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/pyrocouple.jpg" alt="PyroCouple" title="PyroCouple" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocouple"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo con salida análoga, rango de temperatura de -20°C hasta 500°C.</h2>
        <p class="container text-justify paragraph">La serie PyroCouple son sensores compactos de alta calidad y bajo costo los cuales miden la temperatura de objetos o materiales inaccesibles o en movimiento. Miden temperaturas desde -20°C hasta 500°C, de manera precisa y consistente, con un tiempo de respuesta sobresaliente de 240 ms.</p>
      </div>
    </div>
  </section>

  <section class="container">
    <p class=" text-justify paragraph">Los sensores PyroCouple están disponibles en unidades de dos hilos o cuatro hilos. Los sensores de dos hilos transmiten la temperatura del objetivo como una salida de 4~20 mA y ofrecen una solución simple para aquellas aplicaciones de medición de temperatura sin contacto.</p>
    <p class=" text-justify paragraph">Los sensores de cuatro hilos transmiten la temperatura del objetivo como una salida de 0~50 mV o termopar (tipo J, K o T) más la temperatura del sensor interno como salida de 4~20 mA. Esta segunda salida puede ser usada para asegurar que el sensor esté operando dentro del ambiente correcto y previene de daños causados por el sobrecalentamiento o sobre enfriamiento. También puede ser usado para dar indicaciones aproximadas de la temperatura del aire que rodea al sensor.</p>
    <p class=" text-justify paragraph">Todos los sensores PyroCouple están diseñados con lentes de germanio para una óptica precisa. El modelo PC21 tiene una óptica de 2:1 haciéndolo ideal para muchas aplicaciones donde el sensor puede estar montado cerca del objetivo. El modelo PC151 está diseñado para objetivos pequeños o distantes y tiene una resolución óptica de 15:1. El modelo PC301 está diseñado para objetivos muy pequeños o distantes y tiene una resolución óptica de 30:1. El modelo PCCF está diseñado para objetivos tan pequeños con un diámetro de 5mm a una distancia de 100mm del sensor.</p>
    <p class=" paragraph text-justify font-weight-bold">Características</p>
    <ul class=" paragraph marker-orange">
      <li>Rango amplio de temperatura desde -20°C hasta 500°C.</li>
      <li>Salida análoga de corriente, voltaje o termopar.</li>
      <li>Emisividad y procesamiento de señal configurable.</li>
      <li>Resolución óptica de 2:1, 15:1, 30:1 o ø5mm @ 100mm.</li>
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
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones de técnicas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura</td>
            <td class="align-middle">-20°C a 500°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Interfaz</td>
            <td class="align-middle">RS485 Modbus RTU</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Precisión</td>
            <td class="align-middle">+/- 1% de lectura o +/- 1°C cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Repetibilidad</td>
            <td class="align-middle">+/- 0.5% de lectura o +/- 0.5°C, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Emisividad</td>
            <td class="align-middle">0.2 a 1.0</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">240 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 μm</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Suministro de voltaje</td>
            <td class="align-middle">12 VDC nominal (6~13 VDC)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Suministro de corriente</td>
            <td class="align-middle">50 mA máx.</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Velocidad de transferencia</td>
            <td class="align-middle">9600 baudios</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Formato</td>
            <td class="align-middle">8 bits de datos, sin paridad, 1 bit de parada</td>
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
            <td bgcolor="#CCCCCC" class="align-middle">Montaje de la rosca</td>
            <td class="align-middle">M16 x 1 mm</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Longitud del cable</td>
            <td class="align-middle">1 m</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Peso incluyendo el cable</td>
            <td class="align-middle">95 gr</td>
          </tr>
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones Ambiente</th>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Clasificación ambiental</td>
            <td class="align-middle">IP65</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura de ambiente</td>
            <td class="align-middle">0°C a 70°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle">Humedad relativa</td>
            <td class="align-middle">95% máx. sin condensación</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-5 text-center">
      <a class="btn btn-orange" href="https://www.logicbus.com.mx/pdf/79/PyroCouple.pdf" target="_blank" rel="noopener noreferrer">Ficha técnica <i class="fa fa-file-pdf-o" style="font-size: 1.5rem;" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close Focus optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/sensor-temperatura-infrarrojo-diagrama_02.png" alt="30:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/sensor-temperatura-infrarrojo-diagrama_03.png" alt="15:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/sensor-temperatura-infrarrojo-diagrama_04.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/pyrocouple-order.png" alt="PyroCouple series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="7" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Resolución óptica/Campo de vista</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida de temperatura del objetivo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida de temperatura del sensor</td>
            <td bgcolor="#CCCCCC" class="align-middle">Accesorio de enfriamiento</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PC21LT-0</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21LT-0_p_8820.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-0WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-1</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21LT-1_p_8821.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-1WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-3</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21LT-3_p_8823.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-3WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-4</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21LT-4_p_8824.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21LT-4WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-0</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21MT-0_p_8933.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-0WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-1</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21MT-1_p_8934.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-1WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-3</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21MT-3_p_8936.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-3WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-4</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC21MT-4_p_8937.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC21MT-4WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-0</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-0WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-1</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-1WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-3</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-3WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-4</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC21HT-4WJ</td>
            <td class="align-middle">2:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-0</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151LT-0_p_8830.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-0WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-1</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151LT-1_p_8832.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-1WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-3</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151LT-3_p_8834.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-3WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-4</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151LT-4_p_8835.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151LT-4WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-0</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151MT-0_p_8938.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-0WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151MT-0WJ_p_8959.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-1</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151MT-1_p_8939.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-1WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-3</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151MT-3_p_8941.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-3WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-4</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151MT-4_p_8942.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151MT-4WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>

          <tr>
            <td class="align-middle">PC151HT-0</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-0_p_8831.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-0WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-0WJ_p_8840.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-1</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-1_p_8836.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-1WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-3</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-3_p_8837.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-3WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-4</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-4_p_8838.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC151HT-4WJ</td>
            <td class="align-middle">15:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC151HT-4WJ_p_8847.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-0</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301LT-0_p_8848.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-0WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-1</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301LT-1_p_8850.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-1WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-3</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301LT-3_p_8852.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-3WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-4</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301LT-4_p_8853.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301LT-4WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-0</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301MT-0_p_8943.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-0WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301MT-0WJ_p_8964.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-1</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301MT-1_p_8944.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-1WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-3</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301MT-3_p_8946.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-3WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-4</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301MT-4_p_8947.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301MT-4WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-0</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301HT-0_p_8849.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-0WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-1</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301HT-1_p_8854.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-1WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-3</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301HT-3_p_8855.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-3WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-4</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301HT-4_p_8856.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PC301HT-4WJ</td>
            <td class="align-middle">30:1</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PC301HT-4WJ_p_8865.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-0</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFLT-0_p_8866.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-0WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-1</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFLT-1_p_8868.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-1WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-3</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFLT-3_p_8870.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-3WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-4</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFLT-4_p_8871.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFLT-4WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-0</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFMT-0_p_8948.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-0WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-1</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFMT-1_p_8949.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-1WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-3</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFMT-3_p_8951.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-3WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-4</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFMT-4_p_8952.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFMT-4WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-0</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFHT-0_p_8867.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-0WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">NA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-1</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFHT-1_p_8872.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-1WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">0~50mV</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-3</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFHT-3_p_8873.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-3WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo J</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">Si</td>
            <td></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-4</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
            <td class="align-middle">No</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCCFHT-4_p_8874.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PCCFHT-4WJ</td>
            <td class="align-middle">ø5mm @ 100mm</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Termopar tipo K</td>
            <td class="align-middle">4~20mA</td>
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