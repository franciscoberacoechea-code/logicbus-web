<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PYROMINI</title>
  <meta name="description" content="PYROMINI - Sensor de temperatura infrarrojo fijo con sensor remoto. - Logicbus S.A. de C.V.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PYROMINI, sensores, temperatura, infrarrojos, fijo, sensor remoto">
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
            <li class="breadcrumb-item active" aria-current="page">PyroMini</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroMini</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/pyromini.jpg" alt="PyroMini" title="PyroMini" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyromini"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo fijo con sensor remoto</h2>
        <p class="text-justify paragraph">Las características únicas de PyroMini lo hacen ideal para aplicaciones en una amplia gama de industrias. Por ejemplo, algunos usos típicos incluyen:</p>
        <h2 class="text-center">Aplicaciones Típicas</h2>
      </div>
  </section>

  <section class="container mt-3">
    <h3 class="paragraph font-weight-bold">Alimentos</h3>
    <p class="text-justify paragraph">El procesamiento de retención de picos o valles hace que el PyroMini sea ideal para medir la temperatura de los alimentos en depósitos, donde la maquinaria de agitación interrumpe la vista del sensor de la superficie de los alimentos, y para medir la temperatura de los productos alimenticios en los transportadores para ignorar las lecturas de la temperatura del transportador. El registro de datos en la tarjeta MicroSD significa que PyroMini puede usarse para satisfacer los requisitos de HACCP.</p>
    <h3 class="paragraph font-weight-bold">Papel</h3>
    <p class="text-justify paragraph">Los modelos con cabezal de detección de alta temperatura (hasta 180 ° C ambiente) se pueden usar en ambientes cálidos en la fabricación de cartón ondulado y el secado del papel.</p>
    <h3 class="paragraph font-weight-bold">Plástico</h3>
    <p class="text-justify paragraph">En termoformado, el cabezal sensor de 180 °C es ideal para medir la temperatura de precalentamiento de la lámina plástica donde la temperatura ambiente es alta, sin necesidad de enfriamiento.</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>La temperatura varía de -20 °C a 1000 °C.</li>
      <li>Salidas Modbus 4-20 mA o RS485.</li>
      <li>Cabezal de detección en miniatura y módulo electrónico configurable.</li>
      <li>Interfaz de pantalla táctil (opcional).</li>
      <li>Opción de cabezal sensor de alta temperatura ambiente para usar a una temperatura ambiente de 180 °C sin enfriamiento.</li>
      <li>Registro de datos en la tarjeta MicroSD (opcional).</li>
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
            <td class="align-middle">-20 °C a 1000 °C, varía según el modelo (consulte "Pedidos")</td>
          </tr>
          <tr>
            <td class="align-middle">Campo de visión</td>
            <td class="align-middle">Opción de óptica gran angular o enfocada (consulte los diagramas de campo de visión a continuación)
            </td>
          </tr>
          <tr>
            <td class="align-middle">Salida</td>
            <td class="align-middle">Modbus de 4-20 mA o RS485 (se pueden instalar hasta 247 sensores en una sola red Modbus)</td>
          </tr>
          <tr>
            <td class="align-middle">Precisión</td>
            <td class="align-middle">± 1 °C o 1%, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Repetibilidad</td>
            <td class="align-middle">
              ± 0.5 °C o 0.5%, lo que sea mayor</td>
          </tr>
          <tr>
            <td class="align-middle">Ajuste de emisividad</td>
            <td class="align-middle">Ajustable, 0.20 a 1.00</td>
          </tr>
          <tr>
            <td class="align-middle">Método de ajuste de emisividad</td>
            <td class="align-middle">
              Modelos CB: a través de dos interruptores rotativos en módulo electrónico. <br>
              Modelos BB y -BRT: a través de RS485 Modbus <br>
              Modelos CRT y -BRT: a través de pantalla táctil.</td>
          </tr>
          <tr>
            <td class="align-middle">Tiempo de respuesta</td>
            <td class="align-middle">240 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td class="align-middle">Rango espectral</td>
            <td class="align-middle">8 a 14 μm
            </td>
          </tr>
          <tr>
            <td class="align-middle">Suministro de voltaje</td>
            <td class="align-middle">24 VDC ± 5%</td>
          </tr>
          <tr>
            <td class="align-middle">Corriente máxima</td>
            <td class="align-middle">100 mA</td>
          </tr>
          <tr>
            <td class="align-middle">Impedancia máxima (modelos -CB y -CRT)</td>
            <td class="align-middle">900 Ω (4-20 mA de salida)</td>
          </tr>
          <tr>
            <td class="align-middle">Relés de alarma (modelos -CRT y -BRT)</td>
            <td class="align-middle">2 relés de alarma de cambio de un solo polo, con capacidad de 24 VDC, 1 A, 500 VDC aislados</td>
          </tr>
          <tr>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Mecánicas</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción (cabeza sensora)</td>
            <td class="align-middle">Acero inoxidable 316</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción (módulo electrónico)</td>
            <td class="align-middle">Aluminio fundido</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones mayores (cabeza sensora)</td>
            <td class="align-middle">18 (diámetro) x 45 (l) mm (vea el diagrama en la hoja de datos)</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones mayores (módulo electrónico)</td>
            <td class="align-middle">98 (w) x 64 (h) x 36 (d) mm</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje (cabeza sensora)</td>
            <td class="align-middle">Rosca M16 x 1 mm</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje (módulo electrónico)</td>
            <td class="align-middle">Requiere dos tornillos M4 para montaje en pared (consulte el diagrama en la hoja de datos)</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable (cabezal de detección al módulo electrónico)</td>
            <td class="align-middle">1 m (estándar), hasta 30 m (opcional)</td>
          </tr>
          <tr>
            <td class="align-middle">Peso con cable de 1 m.</td>
            <td class="align-middle">390 g (aprox.)</td>
          </tr>
          <tr>
            <td class="align-middle">Conexiones de cable</td>
            <td class="align-middle">Bloques de terminales de tornillo extraíbles (consulte "Conexiones" en la hoja de datos) Tamaño del conductor: 28 AWG a 18 AWG</td>
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
            <td class="align-middle">0°C a 60°C</td>
          </tr>
          <tr>
            <td class="align-middle">Humedad relativa</td>
            <td class="align-middle">95% max. sin condensación</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-5 text-center">
      <a class="btn btn-orange" href="https://www.logicbus.com.mx/pdf/79/PyroMini-datasheet.pdf" target="_blank" rel="noopener noreferrer">Ficha técnica <i class="fa fa-file-pdf-o" style="font-size: 1.5rem;" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close focus optcs" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/sensor-temperatura-infrarrojo-diagrama_02.png" alt="30:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/sensor-temperatura-infrarrojo-diagrama_03.png" alt="20:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/sensor-temperatura-infrarrojo-diagrama_04.png" alt="15:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/sensor-temperatura-infrarrojo-diagrama_05.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/pyromini-order.png" alt="PyroMini Series" style="max-width: 50vh;">
      <p class="paragraph font-italic"><b>*</b>El PyroMini es un sensor de dos piezas con un cabezal sensor en miniatura y un módulo electrónico separado. Cada número de modelo incluye ambas partes.</p>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura ambiente</td>
            <td bgcolor="#CCCCCC" class="align-middle">Óptica</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida e interfaz</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PM-MA-21-LT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-MT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-HT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-XT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-CT-CRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-CT-BB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-21-CT-BRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-LT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-MT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-HT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-XT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-CT-CRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-CT-BB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-151-CT-BRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-LT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-MT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-HT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-XT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-CT-CRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-CT-BB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-301-CT-BRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-LT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-MT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-HT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-XT-CB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-CT-CRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-CT-BB</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-MA-CF-CT-BRT</td>
            <td class="align-middle">0 °C a 60 °C</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-LT-CB</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-MT-CB</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-HT-CB</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-XT-CB</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-CT-CRT</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-CT-BB</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-JA-201-CT-BRT</td>
            <td class="align-middle">0 °C a 120 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-LT-CB</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">-20 °C a 100 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-MT-CB</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 250 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-HT-CB</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 500 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-XT-CB</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">0 °C a 1000 °C (solo modelos CB)</td>
            <td class="align-middle">Salida de 4-20mA, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-CT-CRT</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salida de 4-20mA y 2 relés de alarma, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-CT-BB</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485, sin pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM-HA-201-CT-BRT</td>
            <td class="align-middle">0 °C a 180 °C (solo modelos 201)</td>
            <td class="align-middle">20:1 óptica divergente (solo modelos JA y HA)</td>
            <td class="align-middle">Configurable dentro de los límites -20°C a 1000°C (solo modelos CRT, BB y BRT)</td>
            <td class="align-middle">Salidas Modbus RS485 y 2 relés de alarma, con pantalla táctil</td>
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