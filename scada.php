<?php
require("admin/config.php");
include("libreria/libreria.php");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistemas SCADA | Supervisión y Control Industrial Eficiente – Logicbus México</title>
  <link rel="canonical" href="https://www.logicbus.com.mx/scada" />
  <meta name="description" content="Implementa sistemas SCADA avanzados para monitoreo y control en tiempo real de procesos industriales. Soluciones personalizadas para optimizar tu producción con Logicbus México.">

  <meta name="keywords" content="Software, SCADA, Programación, Programación en escalera para PLCs y PACs, Software de soporte para DT8837, Software para Registradores, software SCADA, software scada de Fatek, programacion en escalera para PLCs y PACs, software para plc, software para registradores, datalogger ">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--- Estilos Necesarios-->
  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $flickity_css; ?>

  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <section class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <?php menucategorias(); ?>
      </div>
      <div class="col-12 col-md-9">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y Herramientas de Desarrollo</a></li>
            <li class="breadcrumb-item active" aria-current="page">SCADA</li>
          </ol>
        </nav>
        <div class="mb-5">
          <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/scada.png">
            <source src="https://www.logicbus.com.mx/assets/videos/scada.mp4" type="video/mp4">
          </video>
        </div>
        <h1 class="title blue text-center">SCADA</h1>
        <p class="container paragraph light-black text-justify">El término <b>SCADA</b> es un acrónimo que proviene de “Supervisory Control And Data Adquisition”, como su nombre lo indica un software <b>SCADA</b> nos permite monitorear y controlar un proceso industrial en tiempo real, ya que el software obtiene datos directamente de los sistemas en campo y los muestra en una pantalla que nos permitirá monitorear el proceso.</p>
      </div>
    </div>
  </section>
  <div class="container mt-5">
    <p class="paragraph light-black text-justify">Basándonos en esto podemos decir que un sistema <b>SCADA</b> está compuesto con los siguientes elementos:</p>
    <p class="paragraph light-black text-justify"><b>Software:</b> El software nos permitirá programar y ejecutar la solución que se necesite, un programa <b>SCADA</b> robusto, debe de permitir conectarse con varios dispositivos y ser altamente flexible por las distintas soluciones que pueden programarse.</p>
    <p class="paragraph light-black text-justify"><b>Interfaz HMI</b>: Esta interfaz será la encargada de visualizar el programa y a traves de esta podemos controlarlo. Esta interfaz puede tratarse de una computadora o un PLC con Pantalla HMI integrada.</p>
    <p class="paragraph light-black text-justify"><b>Unidades de Terminal Remota:</b> A través de ellas es como se retroalimenta al programa <b>SCADA</b>. Estas terminales pueden ser computadoras, plc's, dispositivos DAQ.</p>
    <p class="paragraph light-black text-justify"><b>Infraestructura de comunicación:</b> Es la forma en la que se comunicarán todos los dispositivos. Esta comunicación regularmente se realiza a través de Ethernet, Wifi, Zigbee o Serial.</p>
  </div>

  <section class="container-fluid my-5">
    <h2 class="subtitle blue text-center">Ejemplos de esquemas de conexión</h2>
    <!-- Button trigger modal -->
    <div class="row my-5 justify-content-center">
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/monitoreo-de-senales-analogicas-remotas-mediante-software-SCADA.webp" alt="Monitoreo de señales analógicas remotas mediante Software SCADA" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama1ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/monitoreo-de-temperatura-y-humedad-via-GPRS-mediante-sofware-SCADA.webp" alt="Monitoreo de Temperatura y Humedad Vía GPRS Mediante Software SCADA" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama2ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/Monitoreo-remoto-de-RTDs-con-PLC-y-displays.webp" alt="Monitoreo Remoto de RTDs con PLC y Displays" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama3ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/Monitoreo-y-Control-a-Distancia-Via-Ethernet.webp" alt="Monitoreo y Control a Distancia Vía Ethernet" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama4ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/monitoreo-de-temperatura-y-humedad-en-camaras-de-refrigeracion.webp" alt="Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama5ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/cuarto-de-control-mediante-una-pc-con-software-de-monitoreo-iot-o-scada.webp" alt="Cuarto de Control Mediante una PC con Software de Monitoreo IoT o SCADA" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama6ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/monitoreo-y-control-a-distancia-via-ethernet-y-rs-485.webp" alt="Monitoreo y Control a Distancia Vía Ethernet y RS485" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama7ModalCenter">
      </div>
      <div class="col-12 col-md-4 mt-3">
        <img src="images/digramas/control-autonomo-de-luminarias.webp" alt="Control Autónomo de Luminarias" width="100%" style="cursor: pointer;" data-toggle="modal" data-target="#Diagrama8ModalCenter">
      </div>
    </div>

    <!-- MODAL DIAGRAMA 1 -->
    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama1ModalCenterTitle">Monitoreo de señales analógicas remotas mediante Software SCADA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Image Map Generated by https://www.fla-shop.com/image-map/ -->
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="images/digramas/monitoreo-de-senales-analogicas-remotas-mediante-software-SCADA.webp" style="width: 1000px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/I-7561_p_1495.html" target="_blank" xlink:title="I-7561">
                <g>
                  <rect x="619.6589826938277" y="212.58982693827744" width="70.92474742880393" height="85.06915575555036" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/I-7561_p_1495.html" target="_blank" xlink:title="I-7561">
                <g>
                  <rect x="106.1104981210046" y="861.0805939474626" width="54.884740407416174" height="57.32406220330131" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="825.7104279071277" y="221.97828342554985" width="119.52676799837297" height="60.983044897129076" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-temperatura-termopares" target="_blank" xlink:title="Termopar">
                <g>
                  <rect x="131.7233769777988" y="369.5572520766022" width="71.95999297861232" height="62.202705795071665" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-temperatura-termopares" target="---" xlink:title="Termopar">
                <g>
                  <rect x="754.970095826458" y="373.21623477042993" width="69.52067118272714" height="59.76338399918649" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/I-7019-R_p_1661.html" target="_blank" xlink:title="I-7019 R">
                <g>
                  <rect x="329.308442444497" y="430.5402969737313" width="63.422366693014226" height="76.83863657038262" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/I-7019-R_p_1661.html" target="_blank" xlink:title="I-7019 R">
                <g>
                  <rect x="548.8474040741617" y="430.5402969737313" width="69.52067118272726" height="73.17965387655488" class="image-mapper-shape" data-index="7"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/I-7019-R_p_1661.html" target="_blank" xlink:title="I-7019 R">
                <g>
                  <rect x="108.54981991688976" y="795.2189054585632" width="50.00609681564583" height="53.66507950947357" class="image-mapper-shape" data-index="8"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FSH03200_p_6926.html" target="_blank" xlink:title="FSH03200">
                <g>
                  <rect x="768.3863657038264" y="482.9857155852623" width="45.12745322387548" height="70.7403320806697" class="image-mapper-shape" data-index="9"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FSH03200_p_6926.html" target="_blank" xlink:title="FSH03200">
                <g>
                  <rect x="159.77557763047818" y="475.6677501976068" width="42.688131427990356" height="71.95999297861238" class="image-mapper-shape" data-index="10"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FSH03200_p_6926.html" target="_blank" xlink:title="FSH03200">
                <g>
                  <rect x="112.2088026107175" y="662.2758675828218" width="37.80948783622003" height="57.32406220330131" class="image-mapper-shape" data-index="11"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1050D-12SDA_p_13266.html" target="_blank" xlink:title="LP1050D-12SDA">
                <g>
                  <rect x="414.68470530047773" y="659.8365457869367" width="91.47456734569363" height="82.93694106009548" class="image-mapper-shape" data-index="12"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1050D-12SDA_p_13266.html" target="_blank" xlink:title="LP1050D-12SDA">
                <g>
                  <rect x="104.89083722306201" y="730.5768778676063" width="53.665079509473586" height="53.665079509473685" class="image-mapper-shape" data-index="13"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 2 -->
    <div class="modal fade" id="Diagrama2ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama2ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama2ModalCenterTitle">Monitoreo de Temperatura y Humedad Vía GPRS Mediante Software SCADA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Image Map Generated by https://www.fla-shop.com/image-map/ -->
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="images/digramas/monitoreo-de-temperatura-y-humedad-via-GPRS-mediante-sofware-SCADA.webp" style="width: 1000px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-34_p_25726.html" target="_blank" xlink:title="PR55-34">
                <g>
                  <rect x="113" y="688" width="50" height="49" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-34_p_25726.html" target="_blank" xlink:title="PR55-34">
                <g>
                  <circle cx="513" cy="491" r="32.55764119219941" class="image-mapper-shape" data-index="3"></circle>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" xlink:title="Z-LTE-WW">
                <g>
                  <rect x="121" y="749" width="25" height="41" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-LTE-WW_p_31004.html" target="_blank" xlink:title="Z-LTE-WW">
                <g>
                  <rect x="424" y="384" width="31" height="54" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="111" y="806" width="46" height="45" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <circle cx="561" cy="407" r="25.298221281347036" class="image-mapper-shape" data-index="7"></circle>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <circle cx="618" cy="433" r="25.553864678361276" class="image-mapper-shape" data-index="8"></circle>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <circle cx="612" cy="497" r="25" class="image-mapper-shape" data-index="9"></circle>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="760" y="787" width="119" height="61" class="image-mapper-shape" data-index="10"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="114" y="865" width="48" height="24" class="image-mapper-shape" data-index="11"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 3 -->
    <div class="modal fade" id="Diagrama3ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama3ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama3ModalCenterTitle">Monitoreo Remoto de RTDs con PLC y Displays</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Image Map Generated by https://www.fla-shop.com/image-map/ -->
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 1500">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/Monitoreo-remoto-de-RTDs-con-PLC-y-displays.webp" style="width: 1500px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="Software SCADA">
                <g>
                  <rect x="32.763532763532766" y="286.3247863247863" width="235.04273504273502" height="155.27065527065525" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="143.87464387464388" y="967.2364672364672" width="336.1823361823362" height="51.28205128205127" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="316.2393162393162" y="574.074074074074" width="89.74358974358978" height="85.47008547008556" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1025D-24S_p_13269.html" target="_blank" xlink:title="LP1025D-24S">
                <g>
                  <rect x="139.6011396011396" y="1027.065527065527" width="356.1253561253561" height="65.52706552706559" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1025D-24S_p_13269.html" target="_blank" xlink:title="LP1025D-24S">
                <g>
                  <rect x="304.84330484330485" y="737.8917378917379" width="99.71509971509977" height="109.6866096866097" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-40MCT2-AC_p_13316.html" target="_blank" xlink:title="FBS-40MCT2-AC">
                <g>
                  <rect x="139.6011396011396" y="1099.7150997150998" width="386.039886039886" height="61.2535612535612" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-40MCT2-AC_p_13316.html" target="_blank" xlink:title="FBS-40MCT2-AC">
                <g>
                  <rect x="488.6039886039886" y="574.074074074074" width="92.59259259259255" height="86.89458689458695" class="image-mapper-shape" data-index="7"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-16YR_p_14704.html" target="_blank" xlink:title="FBs-16YR">
                <g>
                  <rect x="142.45014245014244" y="1169.5156695156695" width="300.5698005698006" height="71.22507122507113" class="image-mapper-shape" data-index="8"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-16YR_p_14704.html" target="_blank" xlink:title="FBs-16YR">
                <g>
                  <rect x="502.84900284900283" y="739.3162393162393" width="81.19658119658123" height="103.98860398860404" class="image-mapper-shape" data-index="9"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-16rtd" target="_blank" xlink:title="FBS-16RTD">
                <g>
                  <rect x="142.45014245014244" y="1242.1652421652423" width="301.994301994302" height="59.829059829059815" class="image-mapper-shape" data-index="10"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-16rtd" target="_blank" xlink:title="FBS-16RTD">
                <g>
                  <rect x="663.8176638176639" y="572.6495726495726" width="91.16809116809111" height="86.89458689458695" class="image-mapper-shape" data-index="11"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PT100-100_p_14125.html" target="_blank" xlink:title="PT100-100">
                <g>
                  <rect x="686.6096866096866" y="746.4387464387464" width="48.433048433048384" height="98.29059829059827" class="image-mapper-shape" data-index="12"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PT100-100_p_14125.html" target="_blank" xlink:title="PT100-100">
                <g>
                  <rect x="165.2421652421652" y="1313.3903133903134" width="273.50427350427367" height="55.55555555555566" class="image-mapper-shape" data-index="13"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/DB8-8R_p_3073.html" target="_blank" xlink:title="DB.8-8R">
                <g>
                  <rect x="537.037037037037" y="970.0854700854701" width="170.94017094017113" height="47.008547008547" class="image-mapper-shape" data-index="14"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/DB8-8R_p_3073.html" target="_blank" xlink:title="DB.8-8R">
                <g>
                  <rect x="759.2592592592592" y="246.43874643874645" width="601.1396011396013" height="185.1851851851852" class="image-mapper-shape" data-index="15"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-7SG2_p_3412.html" target="_blank" xlink:title="FBS-7SG2">
                <g>
                  <rect x="556.9800569800569" y="1021.3675213675214" width="256.41025641025647" height="72.64957264957263" class="image-mapper-shape" data-index="16"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-7SG2_p_3412.html" target="_blank" xlink:title="FBS-7SG2">
                <g>
                  <rect x="834.7578347578348" y="566.951566951567" width="64.10256410256409" height="111.11111111111109" class="image-mapper-shape" data-index="17"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-7SG2_p_3412.html" target="_blank" xlink:title="FBS-7SG2">
                <g>
                  <rect x="923.0769230769231" y="566.951566951567" width="62.6780626780627" height="112.53561253561247" class="image-mapper-shape" data-index="18"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-7SG2_p_3412.html" target="_blank" xlink:title="FBS-7SG2">
                <g>
                  <rect x="1188.034188034188" y="569.8005698005697" width="64.1025641025642" height="115.38461538461547" class="image-mapper-shape" data-index="19"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-7SG2_p_3412.html" target="_blank" xlink:title="FBS-7SG2">
                <g>
                  <rect x="1101.1396011396012" y="568.3760683760684" width="62.67806267806259" height="111.11111111111109" class="image-mapper-shape" data-index="20"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-EPW-AC_p_18761.html" target="_blank" xlink:title="FBs-EPW-AC">
                <g>
                  <rect x="556.9800569800569" y="1096.8660968660968" width="235.0427350427351" height="71.22507122507136" class="image-mapper-shape" data-index="21"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-EPW-AC_p_18761.html" target="_blank" xlink:title="FBs-EPW-AC">
                <g>
                  <rect x="1009.9715099715099" y="568.3760683760684" width="71.22507122507136" height="111.11111111111109" class="image-mapper-shape" data-index="22"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-8XYT_p_18299.html" target="_blank" xlink:title="FBS-8XYT">
                <g>
                  <rect x="559.8290598290598" y="1176.6381766381767" width="339.03133903133903" height="62.67806267806259" class="image-mapper-shape" data-index="23"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-8XYT_p_18299.html" target="_blank" xlink:title="FBS-8XYT">
                <g>
                  <rect x="1292.022792022792" y="572.6495726495726" width="62.678062678062815" height="111.11111111111109" class="image-mapper-shape" data-index="24"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-8XYJ_p_18300.html" target="_blank" xlink:title="FBS-8XYJ">
                <g>
                  <rect x="561.2535612535612" y="1242.1652421652423" width="334.75783475783476" height="65.52706552706536" class="image-mapper-shape" data-index="25"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-8XYJ_p_18300.html" target="_blank" xlink:title="FBS-8XYJ">
                <g>
                  <rect x="1391.7378917378917" y="568.3760683760684" width="66.95156695156697" height="112.53561253561259" class="image-mapper-shape" data-index="26"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1100D-24MDA_p_13273.html" target="_blank" xlink:title="LP1100D-24MDA">
                <g>
                  <rect x="556.9800569800569" y="1311.965811965812" width="336.18233618233626" height="62.67806267806259" class="image-mapper-shape" data-index="27"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1100D-24MDA_p_13273.html" target="_blank" xlink:title="LP1100D-24MDA">
                <g>
                  <rect x="888.8888888888889" y="804.8433048433048" width="103.98860398860393" height="125.3561253561254" class="image-mapper-shape" data-index="28"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 4 -->
    <div class="modal fade" id="Diagrama4ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama4ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama4ModalCenterTitle">Monitoreo y Control a Distancia Vía Ethernet</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Image Map Generated by https://www.fla-shop.com/image-map/ -->
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 1500">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/Monitoreo-y-Control-a-Distancia-Via-Ethernet.webp" style="width: 1500px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="108.26210826210826" y="992.8774928774928" width="357.54985754985756" height="101.13960113960115" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="109.68660968660969" y="1096.8660968660968" width="480.05698005698" height="76.92307692307713" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="424.50142450142454" y="522.7920227920227" width="62.678062678062645" height="61.253561253561315" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="301.994301994302" y="475.7834757834758" width="47.008547008547" height="55.555555555555486" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-3_p_27801.html" target="_blank" xlink:title="PR55-3">
                <g>
                  <rect x="106.83760683760684" y="1185.1851851851852" width="514.2450142450143" height="85.47008547008545" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-3_p_27801.html" target="_blank" xlink:title="PR55-3">
                <g>
                  <rect x="304.84330484330485" y="576.9230769230769" width="58.40455840455837" height="45.58404558404561" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="126.78062678062678" y="1289.173789173789" width="329.05982905982904" height="56.98005698005727" class="image-mapper-shape" data-index="7"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="924.5014245014245" y="515.6695156695157" width="79.7720797720799" height="81.19658119658118" class="image-mapper-shape" data-index="8"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-24MCT2-AC_p_18629.html" target="_blank" xlink:title="FBs-24MCT2-AC">
                <g>
                  <rect x="649.5726495726495" y="1017.0940170940171" width="287.74928774928776" height="64.1025641025642" class="image-mapper-shape" data-index="9"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-24MCT2-AC_p_18629.html" target="_blank" xlink:title="FBs-24MCT2-AC">
                <g>
                  <rect x="1022.7920227920227" y="518.5185185185185" width="92.59259259259272" height="79.77207977207979" class="image-mapper-shape" data-index="10"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1050D-24SDA_p_13271.html" target="_blank" xlink:title="LP1050D-24SDA">
                <g>
                  <rect x="648.1481481481482" y="1106.837606837607" width="377.4928774928775" height="66.95156695156697" class="image-mapper-shape" data-index="11"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/LP1050D-24SDA_p_13271.html" target="_blank" xlink:title="LP1050D-24SDA">
                <g>
                  <rect x="961.5384615384615" y="762.1082621082621" width="96.86609686609688" height="88.31908831908834" class="image-mapper-shape" data-index="12"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/IES2300SL-8GT-2LV_p_36583.html" target="_blank" xlink:title="IES2300SL-8GT-2LV">
                <g>
                  <rect x="655.2706552706552" y="1199.4301994301995" width="351.85185185185196" height="65.52706552706536" class="image-mapper-shape" data-index="13"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/IES2300SL-8GT-2LV_p_36583.html" target="_blank" xlink:title="IES2300SL-8GT-2LV">
                <g>
                  <rect x="665.2421652421652" y="495.7264957264957" width="109.6866096866097" height="116.80911680911686" class="image-mapper-shape" data-index="14"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/ET-7050_p_1565.html" target="_blank" xlink:title="Et-7050">
                <g>
                  <rect x="658.1196581196581" y="1290.5982905982905" width="186.6096866096866" height="62.678062678062815" class="image-mapper-shape" data-index="15"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/ET-7050_p_1565.html" target="_blank" xlink:title="ET-7050">
                <g>
                  <rect x="423.0769230769231" y="283.4757834757835" width="54.1310541310541" height="71.22507122507119" class="image-mapper-shape" data-index="16"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="Software SCADA">
                <g>
                  <rect x="927.3504273504274" y="264.95726495726495" width="170.94017094017101" height="113.96011396011397" class="image-mapper-shape" data-index="17"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 5 -->
    <div class="modal fade" id="Diagrama5ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama5ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama5ModalCenterTitle">Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/monitoreo-de-temperatura-y-humedad-en-camaras-de-refrigeracion.webp" style="width: 1200px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="175.4985754985755" y="360.1139601139601" width="207.40740740740742" height="43.3048433048433" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="165.24216524216524" y="442.16524216524215" width="305.4131054131054" height="45.58404558404561" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="#" target="---" xlink:title="">
                <g>
                  <rect x="581.1965811965812" y="142.45014245014244" width="78.63247863247864" height="104.84330484330485" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 6 -->
    <div class="modal fade" id="Diagrama6ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama6ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama6ModalCenterTitle">Cuarto de Control Mediante una PC con Software de Monitoreo IoT o SCADA</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/cuarto-de-control-mediante-una-pc-con-software-de-monitoreo-iot-o-scada.webp" style="width: 1200px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-4A100A_p_34624.html" target="_blank" xlink:title="PR55-4A-100A">
                <g>
                  <rect x="88.88888888888889" y="425.07122507122506" width="306.5527065527066" height="59.259259259259295" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-4A100A_p_34624.html" target="_blank" xlink:title="PR55-4A-100A">
                <g>
                  <rect x="780.6267806267806" y="615.3846153846154" width="100.28490028490035" height="132.19373219373222" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-4A100A_p_34624.html" target="_blank" xlink:title="PR55-4A_100A">
                <g>
                  <rect x="915.0997150997151" y="748.7179487179487" width="109.40170940170935" height="127.6353276353276" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="314.52991452991455" y="520.7977207977208" width="108.26210826210826" height="127.6353276353276" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="315.66951566951565" y="757.8347578347579" width="102.5641025641026" height="141.31054131054134" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="96.86609686609687" y="346.4387464387464" width="254.13105413105416" height="49.00284900284896" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-ultimate-access-de-cimon" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="574.3589743589744" y="182.33618233618233" width="120.79772079772079" height="157.26495726495727" class="image-mapper-shape" data-index="7"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="584.6153846153846" y="356.6951566951567" width="117.37891737891732" height="94.58689458689457" class="image-mapper-shape" data-index="8"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 7 -->
    <div class="modal fade" id="Diagrama7ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama7ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama7ModalCenterTitle">Monitoreo y Control a Distancia Vía Ethernet y RS485</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/monitoreo-y-control-a-distancia-via-ethernet-y-rs-485.webp" style="width: 1200px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="219.94301994301995" y="124.21652421652422" width="94.5868945868946" height="94.58689458689457" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="72.93447293447294" y="878.6324786324785" width="145.86894586894584" height="27.35042735042748" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="520.7977207977208" y="322.5071225071225" width="51.28205128205127" height="56.980056980056986" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="69.51566951566952" y="745.2991452991453" width="157.26495726495727" height="41.02564102564111" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33A_p_25717.html" target="_blank" xlink:title="PR52-33A">
                <g>
                  <rect x="200.56980056980058" y="279.20227920227916" width="49.00284900284899" height="62.6780626780627" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="68.37606837606837" y="789.7435897435897" width="213.1054131054131" height="35.327635327635335" class="image-mapper-shape" data-index="6"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-17B_p_30998.html" target="_blank" xlink:title="PR55-17B">
                <g>
                  <rect x="287.1794871794872" y="363.5327635327635" width="53.56125356125358" height="45.58404558404561" class="image-mapper-shape" data-index="7"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-3_p_27801.html" target="_blank" xlink:title="PR55-3">
                <g>
                  <rect x="67.23646723646723" y="828.4900284900285" width="231.33903133903132" height="41.025641025640994" class="image-mapper-shape" data-index="8"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR55-3_p_27801.html" target="_blank" xlink:title="PR55-3">
                <g>
                  <rect x="205.12820512820514" y="433.048433048433" width="61.53846153846155" height="59.259259259259295" class="image-mapper-shape" data-index="9"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33P_p_27775.html" target="_blank" xlink:title="PR52-33P">
                <g>
                  <rect x="304.2735042735043" y="836.4672364672365" width="196.01139601139602" height="35.327635327635335" class="image-mapper-shape" data-index="10"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/PR52-33P_p_27775.html" target="_blank" xlink:title="PR52-33P">
                <g>
                  <rect x="196.01139601139602" y="354.4159544159544" width="59.25925925925927" height="52.421652421652425" class="image-mapper-shape" data-index="11"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-24MCT2-AC_p_18629.html" target="_blank" xlink:title="FBs-24MCT2-AC">
                <g>
                  <rect x="309.97150997151" y="761.2535612535612" width="125.35612535612535" height="23.931623931624017" class="image-mapper-shape" data-index="12"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-24MCT2-AC_p_18629.html" target="_blank" xlink:title="FBs-24MCT2-AC">
                <g>
                  <rect x="621.0826210826211" y="323.6467236467237" width="71.79487179487171" height="58.119658119658084" class="image-mapper-shape" data-index="13"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/ET-7050_p_1565.html" target="_blank" xlink:title="ET-7050">
                <g>
                  <rect x="316.8091168091168" y="802.2792022792023" width="91.16809116809117" height="26.210826210826212" class="image-mapper-shape" data-index="14"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/ET-7050_p_1565.html" target="_blank" xlink:title="ET-7050">
                <g>
                  <rect x="327.0655270655271" y="572.079772079772" width="41.025641025640994" height="44.44444444444446" class="image-mapper-shape" data-index="15"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-16rtd" target="_blank" xlink:title="FBS-16RTD">
                <g>
                  <rect x="301.994301994302" y="880.911680911681" width="175.49857549857546" height="45.5840455840455" class="image-mapper-shape" data-index="16"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-modulos-de-expansion-a-la-derecha-fbs-16rtd" target="_blank" xlink:title="FBS-16RTD">
                <g>
                  <rect x="634.7578347578348" y="224.5014245014245" width="51.28205128205127" height="58.11965811965811" class="image-mapper-shape" data-index="17"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/IES2300SL-8GT-2LV_p_36583.html" target="_blank" xlink:title="IES2300SL-8GT-2LV">
                <g>
                  <rect x="513.960113960114" y="746.4387464387464" width="164.1025641025641" height="43.3048433048433" class="image-mapper-shape" data-index="18"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/IES2300SL-8GT-2LV_p_36583.html" target="_blank" xlink:title="IES2300SL-8GT-2LV">
                <g>
                  <rect x="390.8831908831909" y="320.2279202279202" width="75.21367521367523" height="52.421652421652425" class="image-mapper-shape" data-index="19"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/promociones-best-seller-fbs-6ad" target="_blank" xlink:title="FBs-6AD">
                <g>
                  <rect x="519.6581196581196" y="792.022792022792" width="198.29059829059827" height="37.606837606837644" class="image-mapper-shape" data-index="20"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/promociones-best-seller-fbs-6ad" target="_blank" xlink:title="FBs-6AD">
                <g>
                  <rect x="641.5954415954416" y="422.7920227920228" width="37.606837606837644" height="61.53846153846155" class="image-mapper-shape" data-index="21"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-CM55_p_3438.html" target="_blank" xlink:title="FBS-CM55">
                <g>
                  <rect x="520.7977207977208" y="839.8860398860398" width="190.3133903133902" height="45.58404558404561" class="image-mapper-shape" data-index="22"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBS-CM55_p_3438.html" target="_blank" xlink:title="FBS-CM55">
                <g>
                  <rect x="737.3219373219373" y="321.36752136752136" width="44.44444444444446" height="67.23646723646726" class="image-mapper-shape" data-index="23"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-transductor-temperatura" target="_blank" xlink:title="RTDS">
                <g>
                  <rect x="524.2165242165242" y="890.0284900284898" width="176.63817663817656" height="37.60683760683776" class="image-mapper-shape" data-index="24"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-transductor-temperatura" target="_blank" xlink:title="RTDS">
                <g>
                  <rect x="591.4529914529915" y="621.0826210826211" width="136.75213675213672" height="93.44729344729342" class="image-mapper-shape" data-index="25"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-4TC_p_4152.html" target="_blank" xlink:title="Z-4TC">
                <g>
                  <rect x="724.7863247863248" y="750.997150997151" width="149.2877492877492" height="38.746438746438685" class="image-mapper-shape" data-index="26"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-4TC_p_4152.html" target="_blank" xlink:title="Z-4TC">
                <g>
                  <rect x="851.2820512820513" y="174.35897435897436" width="31.90883190883187" height="58.11965811965811" class="image-mapper-shape" data-index="27"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-temperatura-termopares" target="_blank" xlink:title="Termopar">
                <g>
                  <rect x="724.7863247863248" y="794.3019943019943" width="165.24216524216524" height="34.18803418803418" class="image-mapper-shape" data-index="28"></rect>
                </g>
              </a>
              <a xlink:href="#" target="---" xlink:title="">
                <g>
                  <rect x="937.8917378917379" y="117.37891737891738" width="60.39886039886039" height="107.12250712250713" class="image-mapper-shape" data-index="29"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-transductor-temperatura" target="_blank" xlink:title="RTDS">
                <g>
                  <rect x="601.7094017094017" y="137.8917378917379" width="119.65811965811963" height="43.3048433048433" class="image-mapper-shape" data-index="30"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/M-7024_p_1749.html" target="_blank" xlink:title="M-7024">
                <g>
                  <rect x="725.925925925926" y="839.8860398860398" width="197.1509971509971" height="27.350427350427367" class="image-mapper-shape" data-index="31"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/M-7024_p_1749.html" target="_blank" xlink:title="M-7024">
                <g>
                  <rect x="847.8632478632478" y="327.0655270655271" width="38.7464387464388" height="63.8176638176638" class="image-mapper-shape" data-index="32"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-transductor-temperatura" target="_blank" xlink:title="TRANSDUCTOR DE TEMPERATURA">
                <g>
                  <rect x="720.2279202279202" y="887.7492877492878" width="185.7549857549858" height="35.327635327635335" class="image-mapper-shape" data-index="33"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/sensores-y-transductores-transductor-temperatura" target="_blank" xlink:title="TRANSDUCTOR DE TEMPERATURA">
                <g>
                  <rect x="956.1253561253561" y="273.5042735042735" width="52.421652421652425" height="54.700854700854734" class="image-mapper-shape" data-index="34"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-SG_p_4195.html" target="_blank" xlink:title="Z-SG">
                <g>
                  <rect x="952.7065527065527" y="747.5783475783476" width="197.15099715099723" height="45.58404558404561" class="image-mapper-shape" data-index="35"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/Z-SG_p_4195.html" target="_blank" xlink:title="Z-SG">
                <g>
                  <rect x="852.4216524216524" y="518.5185185185185" width="34.18803418803418" height="83.19088319088326" class="image-mapper-shape" data-index="36"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FSH03955_p_14424.html" target="_blank" xlink:title="FSH03955">
                <g>
                  <rect x="948.1481481481482" y="805.6980056980057" width="189.17378917378926" height="28.49002849002852" class="image-mapper-shape" data-index="37"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FSH03955_p_14424.html" target="_blank" xlink:title="FSH03955">
                <g>
                  <rect x="933.3333333333334" y="536.7521367521367" width="46.72364672364665" height="42.16524216524215" class="image-mapper-shape" data-index="38"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/EX-151-MT-C-5_p_9597.html" target="_blank" xlink:title="EX-151-MT-C-5">
                <g>
                  <rect x="937.8917378917379" y="850.1424501424501" width="221.08262108262102" height="21.652421652421708" class="image-mapper-shape" data-index="39"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/EX-151-MT-C-5_p_9597.html" target="_blank" xlink:title="EX-151-MT-C-5">
                <g>
                  <rect x="936.7521367521367" y="360.1139601139601" width="72.93447293447298" height="43.3048433048433" class="image-mapper-shape" data-index="40"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/T120_p_4129.html" target="_blank" xlink:title="T120">
                <g>
                  <rect x="945.8689458689458" y="892.3076923076923" width="213.10541310541305" height="35.327635327635335" class="image-mapper-shape" data-index="41"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/T120_p_4129.html" target="_blank" xlink:title="T120">
                <g>
                  <rect x="584.6153846153846" y="545.8689458689458" width="150.42735042735035" height="70.65527065527067" class="image-mapper-shape" data-index="42"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DIAGRAMA 8 -->
    <div class="modal fade" id="Diagrama8ModalCenter" tabindex="-1" role="dialog" aria-labelledby="Diagrama8ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-center blue font-weight-bold" id="Diagrama8ModalCenterTitle">Control Autónomo de Luminarias</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Image Map Generated by https://www.fla-shop.com/image-map/ -->
            <svg style="width:100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 1000">
              <style>
                .image-mapper-shape {
                  fill: rgba(0, 0, 0, 0);
                }

                g:hover .image-mapper-shape {
                  stroke: white;
                  stroke-width: 2px;
                  opacity: 20%;
                }
              </style>

              <image xlink:href="./images/digramas/control-autonomo-de-luminarias.webp" style="width: 1200px;"></image>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac" target="_blank" xlink:title="FBS-20MCR2-AC">
                <g>
                  <rect x="188.03418803418805" y="838.7464387464388" width="131.05413105413106" height="43.3048433048433" class="image-mapper-shape" data-index="1"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-expandibles-serie-fbs-unidad-principal-unidades-principales-avanzadas-fbs-20mcr2-ac" target="_blank" xlink:title="FBS-20MCR2-AC">
                <g>
                  <rect x="699.7150997150998" y="603.988603988604" width="94.58689458689457" height="124.21652421652414" class="image-mapper-shape" data-index="2"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada-ultimate-access-de-cimon" target="_blank" xlink:title="SCADA">
                <g>
                  <rect x="191.45299145299145" y="371.50997150997154" width="172.07977207977206" height="137.89173789173788" class="image-mapper-shape" data-index="3"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="182.33618233618233" y="763.5327635327635" width="128.77492877492875" height="44.44444444444446" class="image-mapper-shape" data-index="4"></rect>
                </g>
              </a>
              <a xlink:href="https://tienda.logicbus.com.mx/FBs-CBEH8_p_36409.html" target="_blank" xlink:title="FBs-CBEH(8)">
                <g>
                  <rect x="505.982905982906" y="626.7806267806268" width="88.88888888888891" height="101.42450142450139" class="image-mapper-shape" data-index="5"></rect>
                </g>
              </a>
            </svg>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require("libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>
</body>
<?php echo $var_footer; ?>

</html>