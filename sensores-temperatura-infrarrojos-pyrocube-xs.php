<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROCUBE XS</title>
  <meta name="description" content="PYROCUBE XS - Sensor de temperatura infrarrojo con óptica enfocada para medir objetivos extremadamente pequeños.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROCUBE XS, sensor, temperatura infrarrojo, óptica, medir objetivos, extremadamente pequeños">
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
            <li class="breadcrumb-item active" aria-current="page">PyroCube XS</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroCube XS</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/pyrocube_xs.jpg" alt="PyroCube XS" title="PyroCube XS" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-sx"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo con óptica enfocada para medir objetivos extremadamente pequeños</h2>
        <p class="paragraph text-justify font-weight-bold">Características</p>
        <ul class="container paragraph marker-orange">
          <li>La temperatura oscila entre 50 °C y 500 °C.</li>
          <li>Punto medido tan pequeño como 0.7 mm.</li>
          <li>Tiempo de respuesta tan rápido como 10 ms.</li>
          <li>La observación continua del LED muestra la posición y el tamaño del punto medido mientras se toman las lecturas.</li>
          <li>Interfaz de pantalla táctil multilingüe (opcional).</li>
        </ul>
      </div>
  </section>

  <section class="container mt-3">
    <p class="container text-justify paragraph">Los pirómetros PyroCube XS miden la temperatura de áreas extremadamente pequeñas, a temperaturas de 50 °C a 500° C.</p>
    <p class="container text-justify paragraph">Todos los modelos tienen un tamaño de punto medido extremadamente pequeño. Las aplicaciones incluyen la medición de la temperatura de los componentes electrónicos individuales en las placas de circuitos, el pulido a la llama de la camisa de aislamiento en el cable eléctrico y la soldadura de plástico donde la costura es muy estrecha.</p>
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
            <td class="align-middle">Rango de temperatura</td>
            <td class="align-middle">Modelos XSA: 50 °C a 500 °C<br>
              Modelos XSB: 100 °C a 500 °C<br>
              Las mediciones a temperaturas más bajas son posibles con estabilidad reducida</td>
          </tr>
          <tr>
            <td class="align-middle">Escala de salida analógica</td>
            <td class="align-middle">Factory set: <br>
              4 mA = 0°C<br>
              20 mA = 500°C<br>
              Ajustable mediante módulo de pantalla táctil opcional o RS232</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta (95%)</td>
            <td class="align-middle">Modelos XSA: 10 ms.<br>
              Modelos XSB: 50 ms.<br>
              Ajustable hasta 5s mediante función de promediado.</td>
          </tr>
          <tr>
            <td class="align-middle">Diámetro de punto de medición</td>
            <td class="align-middle">A partir de 0,7 mm según el modelo y la distancia de medición (consulte los diagramas de campo de visión a continuación)</td>
          </tr>
          <tr>
            <td class="align-middle">Avistamiento de blancos</td>
            <td class="align-middle">El LED rojo incorporado de serie en todos los modelos, muestra la posición y el tamaño del área de medición. Encendido / apagado conmutable.</td>
          </tr>
          <tr>
            <td class="align-middle">Exactitud de la medida</td>
            <td class="align-middle">Modelos XSA: ± 3° C o 1%, el que sea mayor<br>
              Modelos XSB: ± 5° C</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">Modelos XSA: ± 1 °C<br>
              Modelos XSB: ± 2 °C</td>
          </tr>
          <tr>
            <td class="align-middle">Resolución de temperatura</td>
            <td class="align-middle">Modelos XSA: 0.5 °C<br>
              Modelos XSB: 1.5° C</td>
          </tr>
          <tr>
            <td class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable de 0,3 a 1,0 a través de RS232C o interfaz de pantalla táctil opcional</td>
          </tr>
          <tr>
            <td class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones eléctricas</td>
          </tr>
          <tr>
            <td class="align-middle">Salidas</td>
            <td class="align-middle">1 salida analógica y 1 salida de alarma</td>
          </tr>
          <tr>
            <td class="align-middle">Salida analógica</td>
            <td class="align-middle">4-20 mA (establecido de forma predeterminada), 0-20 mA, mV / °C o voltaje, seleccionable a través de la interfaz de pantalla táctil opcional PM030</td>
          </tr>
          <tr>
            <td class="align-middle">Salida de alarma</td>
            <td class="align-middle">1 salida de alarma de drenaje abierto, 27 VDC, 0.2 A</td>
          </tr>
          <tr>
            <td class="align-middle">Voltaje de alimentación</td>
            <td class="align-middle">5 to 27 V DC, 100 mA máx.</td>
          </tr>
          <tr>
            <td class="align-middle">Comunicaciones digitales</td>
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
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Measured spot diameter 1 mm at distance 100 mm" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/sensor-temperatura-infrarrojo-diagrama_02.png" alt="Measured spot diameter 0.7 mm at distance 40 mm" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/pyrocube-xs-order.png" alt="PyroCube XS Series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="5" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Punto de medición</td>
            <td bgcolor="#CCCCCC" class="align-middle">Largo del cable</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida</td>
            <td bgcolor="#CCCCCC" class="align-middle">Comprar</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td>PCU-XSA0.7-2M-1V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>2 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-2M-1V_p_38072.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-2M-5V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>2 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-2M-5V_p_38073.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-2M-10V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>2 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-2M-10V_p_38074.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-5M-1V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>5 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-5M-1V_p_38075.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-5M-5V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>5 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-5M-5V_p_38076.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-5M-10V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>5 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-5M-10V_p_38077.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-10M-1V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>10 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-10M-1V_p_38078.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-10M-5V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>10 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-10M-5V_p_38079.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSA0.7-10M-10V</td>
            <td>0.7 mm a una distancia de 40 mm</td>
            <td>10 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSA07-10M-10V_p_38080.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-2M-1V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>2 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-2M-1V_p_38081.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-2M-5V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>2 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-2M-5V_p_38082.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-2M-10V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>2 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-2M-10V_p_38083.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-5M-1V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>5 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-5M-1V_p_38084.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-5M-5V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>5 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-5M-5V_p_38085.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-5M-10V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>5 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-5M-10V_p_38086.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-10M-1V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>10 mts</td>
            <td>0 a 1VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-10M-1V_p_38087.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-10M-5V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>10 mts</td>
            <td>0 a 5VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-10M-5V_p_38088.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>PCU-XSB1.0-10M-10V</td>
            <td>1.0 mm a una distancia de 100 mm</td>
            <td>10 mts</td>
            <td>0 a 10VDC</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCU-XSB10-10M-10V_p_38089.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
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