<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sensor de temperatura infrarrojo EXTEMP</title>
  <meta name="description" content="EXTEMP - Sensor de temperatura infrarrojo intrínsecamente seguro, certificado ATEX e IECEx util para monitoreo de aplicaciones petroquimica.">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, EXTEMP, monitoreo, aplicaciones petroquimica, llenado de cilindros, certificado ATEX, certificado IECEx">

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
            <li class="breadcrumb-item active" aria-current="page">ExTemp</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Sensores de temperatura infrarrojos ExTemp</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/extemp.jpg" alt="ExTemp" title="ExTemp" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-extemp"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <h2 class="text-center">Sensor de temperatura infrarrojo intrínsecamente seguro, certificado ATEX e IECEx.</h2>
        <p class="paragraph text-justify">Sensor de temperatura infrarrojo intrínsecamente seguro ExTemp con 2 cables de salida 4~20mA, rango de temperatura desde -20°C hasta 1000°C. Longitud del cable de 5m, 10m o 25m.</p>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="d-flex flex-wrap justify-content-center">
      <div class="m-5" style="max-width: 500px;">
        <p class="container paragraph text-justify font-weight-bold">Características:</p>
        <ul class="container paragraph marker-orange">
          <li>Rango de temperatura de -20°C a 1000°C</li>
          <li>Certificado ATEX y IECEx hasta Zona 0 (gas) y Zona 20 (polvo)</li>
          <li>Salida de 4~20mA, dos hilos, alimentado por lazo</li>
          <li>Suministrado con hasta 25m de cable</li>
          <li>Carcasa de acero inoxidable</li>
          <li>Emisividad ajustable vía adaptador USB (opcional)</li>
          <li>Tiempo de respuesta rápido y alta estabilidad</li>
          <li>Sellado IP65</li>
        </ul>
      </div>
      <div class="m-5" style="max-width: 500px;">
        <p class="container text-justify paragraph font-weight-bold">Aplicaciones:</p>
        <ul class="container paragraph marker-orange">
          <li>Monitoreo de aplicaciones petroquímicas</li>
          <li>Papel</li>
          <li>Transportadores de carbón</li>
          <li>Llenado de cilindros de gas</li>
          <li>Pintura automotriz</li>
          <li>Plataformas en alta mar</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="container mt-5">
    <div class="table-responsive">
      <table class="table table-bordered text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones técnicas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td bgcolor="#CCCCCC" colspan="2" class="align-middle font-weight-bold text-center">Clasificación de áreas peligrosas</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Clasificación ATEX</td>
            <td class="align-middle">Ex II 1GD</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Clasificación IECEx (Gas)</td>
            <td class="align-middle">Ex ia IIC T4 Ga</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Clasificación IECEx (Polvo)</td>
            <td class="align-middle">Ex ia IIIC T135°C IP65 Da</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Temperatura ambiente</td>
            <td class="align-middle">-20°C <= Ta <=70°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Voltaje de entrada DC máx.</td>
            <td class="align-middle">Ui = 28V</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Corriente de entrada máx.</td>
            <td class="align-middle">Ii = 93mA</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Potencia de entrada máx.</td>
            <td class="align-middle">Pi = 650 mW</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Capacitancia interna máx.</td>
            <td class="align-middle">Ci = 8 nF</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Inductancia interna máx.</td>
            <td class="align-middle">Li = 0 mH</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Número de certificado ATEX</td>
            <td class="align-middle">CML 14ATEX2079</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Número de certificado IECEx</td>
            <td class="align-middle">IECEx CML 14.0032</td>
          </tr>
          <tr>
            <td class="font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones generales</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Rango de temperatura</td>
            <td class="align-middle">Configurable desde -20°C a 1000°C vía adaptador USB (opcional); preconfigurado de acuerdo a la configuración seleccionada</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Límite de temperatura máx.</td>
            <td class="align-middle">1000°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Límite de temperatura min. </td>
            <td class="align-middle">100°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Salida</td>
            <td class="align-middle">4~20 mA</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Precisión</td>
            <td class="align-middle">+/-1°C o 1%, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Repetibilidad</td>
            <td class="align-middle">+/-0.5°C o 0.5%, cualquiera que sea más grande</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Rango de configuración de emisividad</td>
            <td class="align-middle">0.20 a 1.00 (preconfigurado a 0.95)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Método de configuración de emisividad</td>
            <td class="align-middle">Configurable por usuario vía interfaz USB</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Tiempo de respuesta</td>
            <td class="align-middle">240ms (respuesta al 90%)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Rango espectral</td>
            <td class="align-middle">8 a 14 um</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Suministro de voltaje</td>
            <td class="align-middle">12 a 24 VDC +/-5%</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Corriente máx.</td>
            <td class="align-middle">25 mA</td>
          </tr>
          <tr>
            <td class="font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones mecánicas</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Construcción</td>
            <td class="align-middle">Acero inoxidable</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Dimensiones principales</td>
            <td class="align-middle">20mm dia x 150mm largo</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Montaje</td>
            <td class="align-middle">Rosca de M20 x 1.5mm, longitud de 46mm, incluye dos tuercas para montaje</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Longitud del cable</td>
            <td class="align-middle">5m, 10m o 25m</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Peso con cable de 5 m</td>
            <td class="align-middle">475 gr</td>
          </tr>
          <tr>
            <td class="font-weight-bold text-center" colspan="2" bgcolor="#CCCCCC">Especificaciones ambientales</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Clasificación ambiental</td>
            <td class="align-middle">IP65 (NEMA 4)</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Rango de temperatura ambiente</td>
            <td class="align-middle">0°C a 70°C</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Humedad relativa</td>
            <td class="align-middle">Máx. 95% sin condensación</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">CE</td>
            <td class="align-middle">Si</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">RoHS</td>
            <td class="align-middle">Si</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Diagramas de campo de visión</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/sensor-temperatura-infrarrojo-diagrama_01.png" alt="Close focus optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/sensor-temperatura-infrarrojo-diagrama_02.png" alt="30:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/sensor-temperatura-infrarrojo-diagrama_03.png" alt="15:1 divergent optics" style="max-width: 500px;">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/sensor-temperatura-infrarrojo-diagrama_04.png" alt="2:1 divergent optics" style="max-width: 500px;">
    </div>
  </section>

  <section class="container text-center mt-5">
    <h2 class="blue">Información sobre pedidos</h2>
    <div class="d-flex justify-content-center flex-wrap">
      <img class="m-3" src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/extemp-order.png" alt="EX-151-MT-C-5" style="max-width: 50vh;">
    </div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover text-justify">
        <thead class="thead-dark">
          <tr>
            <th class="paragraph font-weight-bold text-center" colspan="6" bgcolor="#CCCCCC">Información de orden</th>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Modelo</td>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Resolución óptica/Campo de vista</td>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Rango de temperatura</td>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Configurable por el usuario</td>
            <td bgcolor="#CCCCCC" class="align-middle font-weight-bold text-center">Longitud del cable</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-LT-C-5</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-LT-C-10</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-LT-C-25</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-MT-C-5</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-MT-C-10</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-MT-C-25</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-HT-C-5</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-HT-C-10</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-HT-C-25</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-XT-C-5</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-XT-C-10</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-XT-C-25</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-ST-C-5</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-ST-C-10</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-21-ST-C-25</td>
            <td class="align-middle">2:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-LT-C-5</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-LT-C-10</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-LT-C-25</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-MT-C-5</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-MT-C-10</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-MT-C-25</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-HT-C-5</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-HT-C-10</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-HT-C-25</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-XT-C-5</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-XT-C-10</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-XT-C-25</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-ST-C-5</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-ST-C-10</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-151-ST-C-25</td>
            <td class="align-middle">15:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-LT-C-5</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-LT-C-10</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-LT-C-25</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-MT-C-5</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-MT-C-10</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-MT-C-25</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-HT-C-5</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-HT-C-10</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-HT-C-25</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-XT-C-5</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-XT-C-10</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-XT-C-25</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-ST-C-5</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-ST-C-10</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-301-ST-C-25</td>
            <td class="align-middle">30:1 óptica divergente</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-LT-C-5</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-LT-C-10</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-LT-C-25</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">-20°C a 100°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-MT-C-5</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-MT-C-10</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-MT-C-25</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 250°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-HT-C-5</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-HT-C-10</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-HT-C-25</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 500°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-XT-C-5</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-XT-C-10</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-XT-C-25</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">0°C a 1000°C</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-ST-C-5</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">5 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-ST-C-10</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">10 metros</td>
          </tr>
          <tr>
            <td class="align-middle">EX-CF-ST-C-25</td>
            <td class="align-middle">Óptica de enfoque cercano</td>
            <td class="align-middle">Rango de temperatura especial</td>
            <td class="align-middle">Si</td>
            <td class="align-middle">25 metros</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2 class="subtitle">Accesorios</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <div>
        <img src="https://www.logicbus.com.mx/imagenes/lct_small.png" alt="Accesorios"><br>
        <a class="blue font-weight-bold link-orange" href="./lct">LCT - Adaptador USB</a>
      </div>
    </div>
    <a class="button button-circle-orange" target="_blank" href="https://www.logicbus.com.mx/pdf/79/ExTemp.pdf">Ver PDF <i class="fa fa-file-pdf-o" style="font-size: 2rem;" aria-hidden="true"></i></a>
  </section>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>