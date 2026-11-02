<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROMINIBUS</title>
  <meta name="description" content="PYROMINIBUS - Sistema de monitoreo de temperatura por infrarrojos multicanal, RS485 Modbus.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROMINIBUS, Sistema monitoreo de temperatura, infrarrojos, multicanal, RS485, Modbus">
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
            <li class="breadcrumb-item active" aria-current="page">PyroMiniBus</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroMiniBus</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/pyrominibus.jpg" alt="PyroMiniBus" title="PyroMiniBus" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrobus"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sistema de monitoreo de temperatura por infrarrojos multicanal, RS485 Modbus</h2>
        <p class="container text-justify paragraph">El PyroMiniBus puede instalarse como un nuevo sistema de monitoreo de temperatura o integrarse en una red Modbus existente.</p>
        <p class="container text-justify paragraph">Con dos interfaces Modbus, el PM180 hace una pantalla local ideal para un grupo de sensores como parte de un sistema más grande.</p>
      </div>
    </div>
  </section>

  <section class="container mt-3">
    <p class="text-justify paragraph">La caja de conexiones PMBHUB facilita la conexión del sistema.</p>
    <p class="text-justify paragraph">Nunca te pierdas un evento crítico de temperatura. En las aplicaciones de monitoreo de condición, el sistema PyroMiniBus es una solución siempre activa que puede reemplazar los controles manuales con un termómetro de mano o una cámara termográfica costosa.</p>
    <p class="text-justify paragraph">Por ejemplo, algunos usos típicos incluyen:</p>

    <h3 class="paragraph font-weight-bold">Hornos de curado</h3>
    <p class="text-justify paragraph">La fibra de vidrio impregnada con epoxi se cura en un horno para aumentar la resistencia. Los sensores PyroMiniBus se colocan dentro del horno a una temperatura de hasta 120 °C, para acumular un perfil de temperatura en muchos puntos en toda la superficie de la pieza, y para comunicar la temperatura medida al sistema de calefacción que controla los sopladores de aire caliente en el horno. Las industrias incluyen la construcción de barcos y la industria aeroespacial, así como muchas otras.</p>

    <h3 class="paragraph font-weight-bold">Panadería industrial</h3>
    <p class="text-justify paragraph">Verifique el perfil de temperatura de los productos de panadería en múltiples puntos a lo largo de un horno transportador.</p>

    <h3 class="paragraph font-weight-bold">Fabricación de cartón corrugado</h3>
    <p class="text-justify paragraph">Monitorea la temperatura de la banda a lo largo de un corrugador completo, con pantallas locales para cada sección de la línea de producción y monitoreo centralizado en la sala de control. Los sensores resisten 120 °C y se pueden usar en áreas de alta temperatura, como los revestimientos simples sin enfriamiento</p>

    <h3 class="paragraph font-weight-bold">Automotriz</h3>
    <p class="text-justify paragraph">Un gran sistema de sensores PyroMiniBus puede monitorear el proceso de curado de pintura en varios puntos.</p>
    <p class="text-justify paragraph">Monitorear las temperaturas alrededor de todo el vehículo en cámaras de pruebas ambientales.</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="container paragraph marker-orange">
      <li>Sensor de temperatura sin contacto en miniatura.</li>
      <li>Interfaz Modbus RS485.</li>
      <li>Mide temperaturas desde -20 °C hasta 1000 °C.</li>
      <li>Resiste temperaturas ambiente de 120 °C sin enfriamiento.</li>
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
            <td class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Generales</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura</td>
            <td class="align-middle">-20°C a 1000°C</td>
          </tr>
          <tr>
            <td class="align-middle">Interfaz</td>
            <td class="align-middle">RS485 Modbus RTU</td>
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
            <td class="align-middle">0.2 a 1.0</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">125 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 μm</td>
          </tr>
          <tr>
            <td class="align-middle">Suministro de voltaje</td>
            <td class="align-middle">6 a 28 VDC</td>
          </tr>
          <tr>
            <td class="align-middle">Suministro de corriente</td>
            <td class="align-middle">50 mA max</td>
          </tr>
          <tr>
            <td class="align-middle">Velocidad de transferencia</td>
            <td class="align-middle">9600 baudios (otras configuraciones disponibles a pedido)</td>
          </tr>
          <tr>
            <td class="align-middle">Formato de datos Modbus</td>
            <td class="align-middle">8 bits de datos, sin paridad, 1 bit de parada (otras configuraciones disponibles bajo pedido)</td>
          </tr>
          <tr>
            <td class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Mecánicas</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción</td>
            <td class="align-middle">Acero inoxidable</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones</td>
            <td class="align-middle">18 mm de diámetro x 45 mm de largo</td>
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
            <td class="align-middle">85 gr</td>
          </tr>
          <tr>
            <td <td class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Medio ambiente</td>
          </tr>
          <tr>
            <td class="align-middle">Clasificación ambiental</td>
            <td class="align-middle">IP65</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura de ambiente</td>
            <td class="align-middle">0 °C a 120 °C, incluido el cable</td>
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
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close focus optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/sensor-temperatura-infrarrojo-diagrama_02.png" alt="20:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/sensor-temperatura-infrarrojo-diagrama_03.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información de orden</h2>
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
        <tbody class="text-center">
          <tr>
            <td class="align-middle">PCAN21</td>
            <td class="align-middle">Óptica divergente 2: 1 (gran angular)</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PCAN21_p_38065.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PMB201</td>
            <td class="align-middle">Óptica divergente 20: 1 (uso general)</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PMB201_p_16104.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td class="align-middle">PMBXCF</td>
            <td class="align-middle">Óptica de enfoque cercano (diámetro de punto de 3.5 mm a 50 mm de distancia)</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PMBXCF_p_18278.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Accesorios</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="3" bgcolor="#CCCCCC">Accesorios</th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
            <td class="paragraph font-weight-bold text-center" colspan="3" bgcolor="#CCCCCC">Módulo de interfaz de pantalla táctil (opcional)</td>
          </tr>
          <tr>
            <td>PM180</td>
            <td>Terminal de pantalla táctil de 6 canales con indicador de temperatura, alarmas, configuración del sensor y registro de datos para hasta 6 sensores PyroMiniBus, PyroMini, PyroBus o FibreMini. Interfaces RS485 Modbus Master y Slave separadas.</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PM180_p_10445.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr class="align-middle">
            <td class="paragraph font-weight-bold text-center" colspan="3" bgcolor="#CCCCCC">Caja de conexiones (opcional)</td>
          </tr>
          <tr>
            <td>PMBHUB</td>
            <td>Caja de conexiones IP65 de pared para PyroMiniBus. Permite conectar hasta 6 sensores fácilmente a un PM180 a través de los 8 prensaestopas y los terminales de tornillo extraíbles incluidos.</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/PMBHUB_p_10446.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr class="align-middle">
            <td class="paragraph font-weight-bold text-center" colspan="3" bgcolor="#CCCCCC">Módulos de salida (opcional)</td>
          </tr>
          <tr>
            <td>M-7061-D-G-CR</td>
            <td colspan="2">Módulo de salida de relé para terminal de pantalla táctil PM180, 12 canales, montaje en riel DIN. Cada relé se puede asignar a cualquier alarma a través de la interfaz PM180.</td>
          </tr>
          <tr>
            <td>M-7024-G-CR</td>
            <td colspan="2">Módulo de salida analógica para terminal de pantalla táctil PM180, 4 canales, montaje en riel DIN. Cada salida se puede asignar a cualquier temperatura medida.</td>
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