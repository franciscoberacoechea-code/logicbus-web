<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo PyroMini 2.2</title>
  <meta name="description" content="PyroMini 2.2 - Pirómetro de dos partes para objetivos y metales de alta temperatura">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, GueLeon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcalarrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo , Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, PyroMini 2.2, sensores compactos, miden la temperatura de objetos, materiales inaccesibles, en movimiento, temperatura desde 100°C, hasta 2000°C, precisión, consistencia, tiempo de respuesta de 240 ms, salida de 4~20mA, modbus RS485, IP65">
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
            <li class="breadcrumb-item active" aria-current="page">PyroMini 2.2</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos PyroMini 2.2</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/pyromini22.jpg" alt="PyroMini 2.2" title="PyroMini 2.2" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyromini-2.2"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Pirómetro de dos partes para objetivos y metales de alta temperatura</h2>
        <p class="text-justify paragraph">El PyroMini 2.2 combina la interfaz única y las características de salida del PyroMini con una respuesta espectral de longitud de onda corta. Es ideal para aplicaciones industriales exigentes donde la temperatura objetivo es muy alta, o donde la superficie objetivo tiene una baja emisividad, por ejemplo, muchos tipos de metal. Por ejemplo, las aplicaciones incluyen lo siguiente:</p>
      </div>
  </section>

  <section class="container mt-3">
    <h3 class="paragraph font-weight-bold">Industria metalúrgica</h3>
    <p class="text-justify paragraph">Los sensores de 2,2 μm de longitud de onda corta son más adecuados para medir la temperatura de la superficie del acero que los modelos de uso general de 8 a 14 μm. Póngase en contacto con Logicbus para obtener asesoramiento sobre ubicaciones de medición en líneas de recocido, hornos, laminadores y fabricación de rieles ferroviarios.</p>
    <h3 class="paragraph font-weight-bold">Industria de alimentos</h3>
    <p class="text-justify paragraph">Las superficies calientes de acero inoxidable por encima de 100 °C se pueden medir de forma rápida y precisa con PyroMini 2.2. Las aplicaciones incluyen control de quemadores en hornos de transporte y secadores.</p>
    <h3 class="paragraph font-weight-bold">Papel</h3>
    <p class="text-justify paragraph">Las temperaturas de la superficie del cilindro del secador que superan los 100 ° C (como en la fabricación de paneles de revestimiento) se pueden medir directamente con el PyroMini 2.2. Consulte también el PyroUSB 2.2 para temperaturas por debajo de 100 °C (en la fabricación de tipos de papel más finos).</p>

    <p class="paragraph text-justify font-weight-bold">Características</p>
    <ul class="paragraph marker-orange">
      <li>Medición de longitud de onda corta para objetivos de baja emisividad tales como rodillos de acero y muchas otras superficies metálicas.</li>
      <li>Cabeza de sensado miniatura y módulo electrónico configurable.</li>
      <li>Touchscreen para indicación de temperatura opcional y configuración. La pantalla se torna en color rojo en condición de alarma para máxima visibilidad (solo modelos con terminación CRT y BRT).</li>
      <li>Rangos de temperatura desde 100°C a 2000°C.</li>
      <li>Configuración de emisividad ajustable en todos los modelos.</li>
      <li>Salidas de 4 a 20 mA o modbus RS485.</li>
      <li>Salidas de relevador de alarma sin necesidad de amplificador de viaje independiente.</li>
      <li>Resistente a interferencia desde movimiento del cable de la cabeza de sensado, ideal para montaje en brazos robóticos.</li>
      <li>Lecturas de máximos, mínimos, promedio, picos o compensación de energía reflejada
      <li>Cabeza de sensado sellada con protección IP65.</li>
    </ul>
  </section>

  <section class="container mt-5">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th colspan="4" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Especificaciones de Técnicas</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td colspan="4" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Generales</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Rango de temperatura</td>
            <td colspan="2" class="align-middle">Modelos PT: 100° a 400°C<br>
              Modelos MT: 250° a 1000°C<br>
              Modelos HT: 450° a 2000°C</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Lapso de temperatura máx. (modelos -CRT)</td>
            <td colspan="2" class="align-middle">Rango de temperatura completo (hasta 1550°C)</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Lapso de temperatura min. (modelos -CRT)</td>
            <td colspan="2" class="align-middle">100°C</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Salida</td>
            <td colspan="2" class="align-middle">4 a 20mA o Modbus RS485 (hasta 247 sensores pueden ser instalados en una red única Modbus)</td>
          </tr>
          <tr>
            <td class="align-middle">Campo de vista</td>
            <td class="align-middle">Modelo 151 = 15:1<br>
              Modelo 251 = 25:1<br>
              Modelo 751 = 75:1<br>
              Modelo CF = enfoque cerrado</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Precisión</td>
            <td colspan="2" class="align-middle">+/-2°C o 1% de lectura, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Repetibilidad</td>
            <td colspan="2" class="align-middle">+/-0.5°C o 0.5% de lectura, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Rango de emisividad configurable</td>
            <td colspan="2" class="align-middle">0.10 a 1.00</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Método de emisividad configurable</td>
            <td colspan="2" class="align-middle">Modelos -CB: vía dos interruptores rotatorios en caja electrónica<br>
              Modelos -BB y -BRT: vía RS485<br>
              Modelos -CRT y -BRT: vía pantalla touchscreen</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Tiempo de respuesta, t90</td>
            <td colspan="2" class="align-middle">&gt;= 240 ms (90% de respuesta)</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Rango espectral</td>
            <td colspan="2" class="align-middle">2.0 a 2.6 um</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Suministro de voltaje</td>
            <td colspan="2" class="align-middle">24 VDC +/-5%</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Corriente máxima</td>
            <td colspan="2" class="align-middle">100 mA</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Impedancia lazo máx.</td>
            <td colspan="2" class="align-middle">Modelos -CD y -CRT: 900Ω (salida 4 a 20mA)</td>
          </tr>
          <tr>
            <td colspan="2" class="align-middle">Relevadores de alarma (modelos -CRT y -BRT)</td>
            <td colspan="2" class="align-middle">Dos alarmas con salida a relevador de un polo a 24 VDC@1A, aislamiento de 500 VDC</td>
          </tr>
          <tr>
            <td class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Mecánico</td>
            <td class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Cabeza de sensado</td>
            <td colspan="2" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Módulo electrónico</td>
          </tr>
          <tr>
            <td class="align-middle">Construcción</td>
            <td class="align-middle">Acero inoxidable 316</td>
            <td colspan="2">Fundido de aluminio</td>
          </tr>
          <tr>
            <td class="align-middle">Dimensiones</td>
            <td class="align-middle">18 x 45 mm de diámetro</td>
            <td colspan="2">98 x 64 x 36 mm</td>
          </tr>
          <tr>
            <td class="align-middle">Montaje</td>
            <td class="align-middle">Rosca M16 x 1 mm</td>
            <td colspan="2">Dos hoyos de tornillo M4 para montaje en pared</td>
          </tr>
          <tr>
            <td class="align-middle">Longitud del cable</td>
            <td colspan="3" class="align-middle">1m</td>
          </tr>
          <tr>
            <td class="align-middle">Peso con cable</td>
            <td colspan="3" class="align-middle">390 gr (aproximadamente)</td>
          </tr>
          <tr>
            <td class="align-middle">Conexiones de cable</td>
            <td colspan="3" class="align-middle">Bloque con terminal a tornillos removibles, tamaño del conductor: 28 AWG a 18 AWG</td>
          </tr>
          <tr>
            <td class="align-middle">Cable de salida</td>
            <td colspan="3" class="align-middle">Adecuado para cable de diámetro 3.0 a 6.5 mm</td>
          </tr>
          <tr>
            <td class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Medio ambiente</td>
            <td align="center" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Cabeza de sensado</td>
            <td align="center" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Módulo electrónico (sin pantalla)</td>
            <td align="center" class="paragraph font-weight-bold text-center" bgcolor="#CCCCCC">Módulo electrónico (con pantalla táctil)</td>
          </tr>
          <tr>
            <td class="align-middle">Evaluación ambiental</td>
            <td class="align-middle">IP65 (NEMA 4)</td>
            <td class="align-middle">IP65 (NEMA 4)</td>
            <td class="align-middle">&nbsp;</td>
          </tr>
          <tr>
            <td class="align-middle">Rango de temperatura</td>
            <td class="align-middle">0° a 70°C</td>
            <td class="align-middle">0° a 60°C</td>
            <td class="align-middle">0° a 60°C</td>
          </tr>
          <tr>
            <td class="align-middle">Humedad relativa</td>
            <td class="align-middle">Máximo 95% sin condensación</td>
            <td class="align-middle">Máximo 95% sin condensación</td>
            <td class="align-middle">Máximo 95% sin condensación</td>
          </tr>
          <tr>
            <td class="align-middle">CE</td>
            <td colspan="3" class="align-middle">Si</td>
          </tr>
          <tr>
            <td class="align-middle">RoHS</td>
            <td colspan="3" class="align-middle">Si</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-5 text-center">
      <a class="btn btn-orange" href="https://www.logicbus.com.mx/pdf/79/pyromini22.pdf" target="_blank" rel="noopener noreferrer">Ficha técnica <i class="fa fa-file-pdf-o" style="font-size: 1.5rem;" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close focus optcs" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/sensor-temperatura-infrarrojo-diagrama_02.png" alt="75:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/sensor-temperatura-infrarrojo-diagrama_03.png" alt="25:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/sensor-temperatura-infrarrojo-diagrama_04.png" alt="15:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/pyromini22-order.png" alt="PyroMini 2.2 Series" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
          <tr class="text-center font-weight-bold">
            <td bgcolor="#CCCCCC" class="align-middle">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle">Resolución óptica/Campo de vista</td>
            <td bgcolor="#CCCCCC" class="align-middle">Rango de temperatura</td>
            <td bgcolor="#CCCCCC" class="align-middle">Salida e interfaz</td>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td class="align-middle">PM2.2-151-PT-CB</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">100°C a 400°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-151-PT-CRT</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">100°C a 400°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-151-PT-BB</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">100°C a 400°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-151-PT-BRT</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">100°C a 400°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-MT-CB</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-MT-CRT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-MT-BB</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-MT-BRT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-HT-CB</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-HT-CRT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-HT-BB</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-251-HT-BRT</td>
            <td class="align-middle">25:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-MT-CB</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-MT-CRT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-MT-BB</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-MT-BRT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-HT-CB</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-HT-CRT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-HT-BB</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-751-HT-BRT</td>
            <td class="align-middle">75:1 óptica divergente</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-MT-CB</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-MT-CRT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-MT-BB</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-MT-BRT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">250°C a 1000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-HT-CB</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-HT-CRT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida de 4 a 20 mA y 2 salidas de alarma de relevador, con pantalla táctil</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-HT-BB</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485, sin pantalla</td>
          </tr>
          <tr>
            <td class="align-middle">PM2.2-CF-HT-BRT</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">450°C a 2000°C</td>
            <td class="align-middle">Salida Modbus RS485 y 2 salidas de alarma de relevador, con pantalla táctil</td>
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