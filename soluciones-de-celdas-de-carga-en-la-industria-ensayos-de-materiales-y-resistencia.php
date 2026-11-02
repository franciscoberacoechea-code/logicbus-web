<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->



<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>

  <title>Ensayos de materiales y resistencia - Soluciones en la industria Logicbus</title>

  <meta name="description" content="Aplicaciones de celdas de carga en la industria de ensayos de materiales y resistencia Logicbus, descripciones de la aplicacion, equipos utilizados y soporte y consultoria en eleccion del equipo.">

  <meta name="keywords" content="aplicaciones de celdas de carga, celdas de carga, celda de carga, sensores de celdas de carga,logicbus,futek,sensores de fuerza,seriede celdas de carga de tipo boton Futek,serie llb,serie iaa, tipos de sensores,pesaje de lotes,medidor de flujo de masa,aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas
  ">

  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Menu movil - Icono menu - Tabla -->
  <link href="libreria/menu-movil.css" rel="stylesheet">

  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">

  <script src="libreria/ie-emulation-modes-warning.js"></script>
  <script language="javascript">

    function menu_actual() {
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

</head>

<body onLoad="menu_actual();">

  <?
  arriba();
  seccionSoluciones();
  ?>

  <div id="main" class="container productos_page">
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Ensayos de materiales y
    resistencia

    <h1 class="">
      <hr class="hr-text" data-content="Ensayos de materiales y resistencia">
    </h1>
    <center>
      <nav class="navMenuSuper">
        <ul>
          <li>
            <a onclick="ocultarSensor(); mostrarCeldas(); mostrarSensor();">Celdas de carga</a>
            <!--<a href="#celdas-cate">Celdas de carga</a>-->
          </li>
          <li>
            <a onclick="ocultarCeldas(); mostrarSensor();">Sensores de torque</a>
            <!--<a href="#sensores-cate">Sensores de torque</a>-->
          </li>
          <li>
            <a onclick="ocultarCeldas(); ocultarSensor();">Instrumentos de medición</a>
          </li>
          <li>
            <?
            buscadorAppsCS();
            ?>
          </li>
        </ul>
      </nav>
    </center>
    <center id="tCeldas">
      <a id="celdas-cate"></a>
      <h2 class="divider gradient" style="font-weight: bold;">Celdas de carga</h2>
    </center>
    <div class="gridContTres" id="apli-auto">
      <div class="gridCateC-item">
        <center><a href="medicion-de-fuerza-de-impacto"><img
          src="imagenes/36/diagramas/desarrollo-de-productos-y-oem/medicion-de-fuerza-de-impacto-portada.jpg" alt="Medición de la Fuerza de Impacto"
          title="Medición de la Fuerza de Impacto" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-fuerza-de-impacto">Medición de la Fuerza de Impacto</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-caida-de-bola"><img
          src="imagenes\36\diagramas\ensayo-materiales-resistencia\prueba-de-caida-de-bola-portada.jpg"
          alt="Prueba de Caída de Bola" title="Prueba de Caída de Bola"
          class="img-fluid"></a><br><br>
          <b><a href="prueba-caida-de-bola">Prueba de Caída de Bola</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-fuerza-de-mordedura"><img
          src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/medicion-de-fuerza-de-mordedura-portada.jpg"
          alt="Medición de fuerza de mordedura" title="Medición de fuerza de mordedura"
          class="img-fluid"></a><br><br>
          <b><a href="medicion-de-fuerza-de-mordedura">Medición de fuerza de mordedura</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="soporte-de-prueba-oem"><img src="imagenes/36/soporte-de-prueba-oem.png"
          alt="Soporte de prueba OEM" title="Soporte de prueba OEM" class="img-fluid"></a><br><br>
          <b><a href="soporte-de-prueba-oem">Soporte de prueba OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="soporte-de-prueba-de-jeringas"><img
          src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/diagrama-soporte-de-prueba-de-jeringas-portada.jpg"
          alt="Soporte de prueba de jeringas" class="img-fluid"></a><br><br>
          <b><a href="soporte-de-prueba-de-jeringas">Soporte de prueba de jeringas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-expansion-de-tuberias"><img
          src="imagenes/36/medicion-expansion-de-tuberias.png" alt="Medición de expansión de tuberías"
          title="Medición de expansión de tuberías" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-expansion-de-tuberias">Medición de expansión de tuberías</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-fuerza-en-cateter"><img src="imagenes/36/medicion-de-fuerza-en-cateter.png"
          alt="Medición de fuerza en catéter" title="Medición de fuerza en catéter" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-fuerza-en-cateter">Medición de fuerza en catéter</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="pruebas-de-fuerza-en-prensa-hidraulica"><img
          src="imagenes/36/pruebas-de-fuerza-en-prensa-hidraulica.png" alt="Pruebas de fuerza en prensa hidráulica"
          title="Pruebas de fuerza en prensa hidráulica" class="img-fluid"></a><br><br>
          <b><a href="pruebas-de-fuerza-en-prensa-hidraulica">Pruebas de fuerza en prensa hidráulica</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="calibracion-de-herramientas-laparoscopicas"><img
          src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/Calibracion-De-Herramientas-Laparoscopicas-portada.jpg"
          alt="Calibración de herramientas laparoscópicas" title="Calibración de herramientas laparoscópicas"
          class="img-fluid"></a><br><br>
          <b><a href="calibracion-de-herramientas-laparoscopicas">Calibración de herramientas laparoscópicas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="sintesis-de-adn"><img src="imagenes/36/sintesis-de-adn-futek.png" alt="Síntesis de ADN"
          title="Síntesis de ADN" class="img-fluid"></a><br><br>
          <b><a href="sintesis-de-adn">Síntesis de ADN</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="pesaje-en-grua-portatil"><img src="imagenes/36/pesaje-en-grua-portatil.png"
          alt="Pesaje en grúa “portátil”" title="Pesaje en grúa “portátil”" class="img-fluid"></a><br><br>
          <b><a href="pesaje-en-grua-portatil">Pesaje en grúa “portátil”</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="elevador-medico-de-pacientes"><img
          src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/elevador-medico-de-pacientes-portada.jpg"
          alt="Elevador médico de pacientes" title="Elevador médico de pacientes" class="img-fluid"></a><br><br>
          <b><a href="elevador-medico-de-pacientes">Elevador médico de pacientes</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="pruebas-de-union-de-cable"><img src="imagenes/36/pruebas-de-union-de-cable.png"
          alt="Pruebas de unión de cable" title="Pruebas de unión de cable" class="img-fluid"></a><br><br>
          <b><a href="pruebas-de-union-de-cable">Pruebas de unión de cable</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="cierre-de-perno"><img
          src="imagenes/soluciones-en-la-industria/aeroespacial/cierre-de-perno-portada.jpg" alt="Cierre de perno"
          title="Cierre de perno" class="img-fluid"></a><br><br>
          <b><a href="cierre-de-perno">Cierre de perno</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-de-fuerza-del-pedal-de-helicoptero"><img
          src="imagenes/soluciones-en-la-industria/aeroespacial/prueba-de-fuerza-del-pedal-de-helicoptero-portada.jpg"
          alt="Prueba de fuerza del pedal de helicóptero" title="Prueba de fuerza del pedal de helicóptero"
          class="img-fluid"></a><br><br>
          <b><a href="prueba-de-fuerza-del-pedal-de-helicoptero">Prueba de fuerza del pedal de helicóptero</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-automatica-de-fuerza-en-pedal"><img
          src="imagenes/36/prueba-automatica-de-fuerza-en-pedal.png" alt="Prueba automática de fuerza en pedal"
          title="Prueba automática de fuerza en pedal" class="img-fluid"></a><br><br>
          <b><a href="prueba-automatica-de-fuerza-en-pedal">Prueba automática de fuerza en pedal</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-de-zapatos-para-nieve"><img
          src="imagenes/soluciones-en-la-industria/Robotica/prueba-de-zapatos-para-nieve.png"
          alt="Prueba de zapatos para nieve" title="Prueba de zapatos para nieve" class="img-fluid"></a><br><br>
          <b><a href="prueba-de-zapatos-para-nieve">Prueba de zapatos para nieve</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-tension-para-cable-industrial"><img
          src="imagenes/36/medicion-de-tension-para-cable-industrial.png"
          alt="Medición de tensión para cable industrial" title="Medición de tensión para cable industrial"
          class="img-fluid"></a><br><br>
          <b><a href="medicion-de-tension-para-cable-industrial">Medición de tensión para cable industrial</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-de-caida-de-paquete"><img src="imagenes/36/prueba-de-caida-de-paquete.png"
          alt="Prueba de caída de paquete" title="Prueba de caída de paquete" class="img-fluid"></a><br><br>
          <b><a href="prueba-de-caida-de-paquete">Prueba de caída de paquete</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-de-fatiga-en-prostetico-de-cintura"><img
          src="imagenes/36/prueba-de-fatiga-en-prostetico-de-cintura.png"
          alt="Prueba de fatiga en prostético de cintura" title="Prueba de fatiga en prostético de cintura"
          class="img-fluid"></a><br><br>
          <b><a href="prueba-de-fatiga-en-prostetico-de-cintura">Prueba de fatiga en prostético de cintura</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="tensionador-preciso-para-cable"><img src="imagenes/36/tensionador-preciso-para-cable.png"
          alt="Tensionador preciso para cable" title="Tensionador preciso para cable" class="img-fluid"></a><br><br>
          <b><a href="tensionador-preciso-para-cable">Tensionador preciso para cable</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="fuerza-de-mordaza-en-soldadura-ultrasonica"><img
          src="imagenes/36/fuerza-de-mordaza-en-soldadura-ultrasonica.png"
          alt="Fuerza de mordaza en Soldadura ultrasónica" title="Fuerza de mordaza en Soldadura ultrasónica"
          class="img-fluid"></a><br><br>
          <b><a href="fuerza-de-mordaza-en-soldadura-ultrasonica">Fuerza de mordaza en Soldadura ultrasónica</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-carga-en-rodamientos"><img
          src="imagenes/36/medicion-de-carga-en-rodamientos.jpg" alt="Medición de carga en rodamientos"
          title="Medición de carga en rodamientos" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-carga-en-rodamientos">Medición de carga en rodamientos</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="celda-de-carga-para-escalas-de-tolva"><img
          src="imagenes/36/diagramas/agricultura/medicion-de-silos-portada.jpg"
          alt="Celda de carga para escalas de tolva" title="Celda de carga para escalas de tolva"
          class="img-fluid"></a><br><br>
          <b><a href="celda-de-carga-para-escalas-de-tolva">Celda de carga para escalas de tolva</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-torque-con-celdas-de-carga"><img
          src="imagenes/36/medicion-de-torque-con-celdas-de-carga.png" alt="Medición de torque con celdas de carga"
          title="Medición de torque con celdas de carga" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-torque-con-celdas-de-carga">Medición de torque con celdas de carga</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-carga-en-manejo-de-desperdicios"><img
          src="imagenes/36/diagramas/agricultura/medicion-de-la-carga-de-gestion-de-residuos-portada.jpg"
          alt="Medición de carga en manejo de desperdicios" title="Medición de carga en manejo de desperdicios"
          class="img-fluid"></a><br><br>
          <b><a href="medicion-de-carga-en-manejo-de-desperdicios">Medición de carga en manejo de
          desperdicios</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="despliegue-de-paracaidas-para-jet"><img
          src="imagenes/36/despliegue-de-paracaidas-para-jet.png" alt="Despliegue de paracaídas para jet"
          title="Despliegue de paracaídas para jet" class="img-fluid"></a><br><br>
          <b><a href="despliegue-de-paracaidas-para-jet">Despliegue de paracaídas para jet</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="soldadura-por-resistencia"><img src="imagenes/36/soldadura-por-resistencia.png"
          alt="Soldadura por resistencia" title="Soldadura por resistencia" class="img-fluid"></a><br><br>
          <b><a href="soldadura-por-resistencia">Soldadura por resistencia</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensores-automotrices"><img src="imagenes/36/sensores-automotrices.png"
          alt="Sensores automotrices" title="Sensores automotrices" class="img-fluid"></a><br><br>
          <b><a href="sensores-automotrices">Sensores automotrices</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-en-tunel-de-viento"><img src="imagenes/36/pruebas-en-tunel-de-viento.png"
          alt="Pruebas en túnel de viento" title="Pruebas en túnel de viento" class="img-fluid"></a><br><br>
          <b><a href="pruebas-en-tunel-de-viento">Pruebas en túnel de viento</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-de-propela-en-dron"><img src="imagenes/36/prueba-de-propela-en-dron.png"
          alt="Prueba de propela en dron" title="Prueba de propela en dron" class="img-fluid"></a><br><br>
          <b><a href="prueba-de-propela-en-dron">Prueba de propela en dron</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="tribometro-de-disco"><img src="imagenes/36/tribometro-de-disco.png"
          alt="Tribómetro de disco" title="Tribómetro de disco" class="img-fluid"></a><br><br>
          <b><a href="tribometro-de-disco">Tribómetro de disco</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="cable-guia-para-procesos-quirurgicos"><img
          src="imagenes/36/cable-guia-para-procesos-quirurgicos.png" alt="Cable guía para procesos quirúrgicos"
          title="Cable guía para procesos quirúrgicos" class="img-fluid"></a><br><br>
          <b><a href="cable-guia-para-procesos-quirurgicos">Cable guía para procesos quirúrgicos</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="durabilidad-de-valvula-para-cateter"><img
          src="imagenes/36/durabilidad-de-valvula-para-cateter.png" alt="Durabilidad de válvula para catéter"
          title="Durabilidad de válvula para catéter" class="img-fluid"></a><br><br>
          <b><a href="durabilidad-de-valvula-para-cateter">Durabilidad de válvula para catéter</a></b>
        </center>
      </div>
      <div class="gridCateC-item"><br>
        <br>
        <center>
          <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button"
            class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
          </center>
        </div>
      </div>
      <center id="tTorque">
        <a id="sensores-cate"></a>
        <h2 class="divider gradient" style="font-weight: bold;">Sensores de torque</h2>
      </center>
      <div class="gridContTres" id="apli-autot">
        <div class="gridCateC-item">
          <center><a href="banco-de-pruebas-para-motor-con-sensor-de-torque"><img
            src="imagenes/36/banco-de-pruebas-para-motor-sensor-torque.png"
            alt="Banco de pruebas para motor con sensor de torque"
            title="Banco de pruebas para motor con sensor de torque" class="img-fluid"></a><br><br>
            <b><a href="banco-de-pruebas-para-motor-con-sensor-de-torque">Banco de pruebas para motor con sensor de
            torque</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="control-del-torque-en-un-servomotor"><img
            src="imagenes/36/control-del-torque-en-un-servomotor.jpg" alt="Control del torque en un servomotor"
            title="Control del torque en un servomotor" class="img-fluid"></a><br><br>
            <b><a href="control-del-torque-en-un-servomotor">Control del torque en un servomotor</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="medicion-de-torque-con-celdas-de-carga"><img
            src="imagenes/36/medicion-de-torque-con-celdas-de-carga.png" alt="Medición de torque con celdas de carga"
            title="Medición de torque con celdas de carga" class="img-fluid"></a><br>
            <b><a href="medicion-de-torque-con-celdas-de-carga">Medición de torque con celdas de carga</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="pruebas-de-fuerza-en-tornillo-de-banco"><img
            src="imagenes/36/pruebas-de-fuerza-en-tornillo-de-banco-portada.jpg"
            alt="Pruebas de fuerza en tornillo de banco" title="Pruebas de fuerza en tornillo de banco"
            class="img-fluid"></a><br><br>
            <b><a href="pruebas-de-fuerza-en-tornillo-de-banco">Pruebas de fuerza en tornillo de banco</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="automatizacion-industrial-robotica"><img
            src="imagenes/36/automatizacion-industrial-robotica.png" alt="Automatización industrial robótica"
            title="Automatización industrial robótica" class="img-fluid"></a><br><br>
            <b><a href="automatizacion-industrial-robotica">Automatización industrial robótica</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="prensa-de-tapas-automatica" name="Prensa de tapas automática"><img
            src="imagenes/36/prensa-de-tapas-automatica.png" alt="" title="Prensa de tapas automática"
            class="img-fluid"></a><br><br>
            <b><a href="prensa-de-tapas-automatica">Prensa de tapas automática</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="fuerza-de-empuje-torque-en-el-proceso-de-taladrado"><img
            src="imagenes/36/fuerza-de-empuje-torque-en-el-proceso-de-taladrado-portada.jpg"
            alt="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?"
            title="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?" class="img-fluid"></a><br><br>
            <b><a href="fuerza-de-empuje-torque-en-el-proceso-de-taladrado">¿Qué es la fuerza de empuje y torque en el
            proceso de taladrado?</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="carro-con-dinamometro-solar-de-stanford"><img
            src="imagenes/36/carro-con-dinamometro-solar-de-stanford.png"
            alt="Carro con dinamómetro solar de Stanford" title="Carro con dinamómetro solar de Stanford"
            class="img-fluid"></a><br><br>
            <b><a href="carro-con-dinamometro-solar-de-stanford">Carro con dinamómetro solar de Stanford</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="verificacion-y-calibracion-de-torque"><img
            src="imagenes/36/verificacion-de-torque-calibracion-de-sensor.png"
            alt="Verificación de torque en Herramienta/Calibración de sensor"
            title="Verificación de torque en Herramienta/Calibración de sensor" class="img-fluid"></a><br><br>
            <b><a href="verificacion-y-calibracion-de-torque">Verificación de torque en Herramienta/Calibración de
            sensor</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="pruebas-de-torque-en-valvulas"><img src="imagenes/36/pruebas-de-torque-en-valvulas.png"
            alt="Pruebas de torque en válvulas" title="Pruebas de torque en válvulas" class="img-fluid"></a><br><br>
            <b><a href="pruebas-de-torque-en-valvulas">Pruebas de torque en válvulas</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"
            alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM"
            class="img-fluid"></a><br><br>
            <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"
            alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br>
            <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center><a href="medicion-de-torque-a-reometro"><img src="imagenes/36/medicion-de-torque-a-reometro.png"
            alt="Medición de torque a Reómetro" title="Medición de torque a Reómetro" class="img-fluid"></a><br><br>
            <b><a href="medicion-de-torque-a-reometro">Medición de torque a Reómetro</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="torque-de-un-desarmador-en-miniatura"><img
            src="imagenes/36/torque-de-un-desarmador-en-miniatura.png" alt="Torque de un desarmador en miniatura"
            title="Torque de un desarmador en miniatura" class="img-fluid"></a><br><br>
            <b><a href="torque-de-un-desarmador-en-miniatura">Torque de un desarmador en miniatura</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <center><a href="sensor-de-torque-tipo-desarmador-electrico"><img
            src="imagenes/36/sensor-de-torque-tipo-desarmador-electrico.png"
            alt="Sensor de torque tipo desarmador eléctrico" title="Sensor de torque tipo desarmador eléctrico"
            class="img-fluid"></a><br><br>
            <b><a href="sensor-de-torque-tipo-desarmador-electrico">Sensor de torque tipo desarmador eléctrico</a></b>
          </center>
        </div>
        <div class="gridCateC-item">
          <br>
          <center>
            <a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button"
              class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
            </center>
          </div>
        </div>
        <center>
          <a></a>
          <h2 class="divider gradient" style="font-weight: bold;">Instrumentos de Medición</h2><br>
        </center>
        <div class="gridContTres" id="apli-autoia">
          <div class="gridCateC-item">
            <center><a href="pruebas-de-fuerza-en-tornillo-de-banco"><img
              src="imagenes/36/pruebas-de-fuerza-en-tornillo-de-banco-portada.jpg"
              alt="Pruebas de fuerza en tornillo de banco" title="Pruebas de fuerza en tornillo de banco"
              class="img-fluid"></a><br><br>
              <b><a href="pruebas-de-fuerza-en-tornillo-de-banco">Pruebas de fuerza en tornillo de banco</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"
              alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM"
              class="img-fluid"></a><br><br>
              <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"
              alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br>
              <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="soldadura-por-resistencia"><img src="imagenes/36/soldadura-por-resistencia.png"
              alt="Soldadura por resistencia" title="Soldadura por resistencia" class="img-fluid"></a><br><br>
              <b><a href="soldadura-por-resistencia">Soldadura por resistencia</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="medicion-de-fuerza-para-mordida-de-tiburon"><img
              src="imagenes/36/medicion-de-fuerza-para-mordida-de-tiburon.png"
              alt="Medición de fuerza para mordida de tiburón" title="Medición de fuerza para mordida de tiburón"
              class="img-fluid"></a><br><br>
              <b><a href="medicion-de-fuerza-para-mordida-de-tiburon">Medición de fuerza para mordida de tiburón</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="medicion-de-torque-a-reometro"><img src="imagenes/36/medicion-de-torque-a-reometro.png"
              alt="Medición de torque a Reómetro" title="Medición de torque a Reómetro" class="img-fluid"></a><br><br>
              <b><a href="medicion-de-torque-a-reometro">Medición de torque a Reómetro</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <center><a href="prueba-de-propela-en-dron"><img src="imagenes/36/prueba-de-propela-en-dron.png"
              alt="Prueba de propela en dron" title="Prueba de propela en dron" class="img-fluid"></a><br><br>
              <b><a href="prueba-de-propela-en-dron">Prueba de propela en dron</a></b>
            </center>
          </div>
          <div class="gridCateC-item">
            <br>
            <center>
              <a href="aplicaciones-de-instrumentos-medicion"><button type="button"
                class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
              </center>
            </div>
          </div>
    <!--
    <div class="col-6 col-md-3 container-fluid">
      <center><a href="medicion-de-una-herramienta-de-ensamble"><img src="imagenes/36/medicion-de-una-herramienta-de-ensamble-portada.png" alt="Medición de torque de ensamble" title="Medición de torque de ensamble" class="img-fluid"></a><br><br> 
      <b><a href="medicion-de-una-herramienta-de-ensamble">Medición de torque de ensamble</a></b></center>
    </div>-->
    <script src="https://podio.com/webforms/25497888/1893814.js"></script>
    <script type="text/javascript">
      _podioWebForm.render("1893814")
    </script>
    <noscript>
      <a href="https://podio.com/webforms/25497888/1893814" target="_blank">Por favor, rellena el formulario</a>
    </noscript>

    <br><br>

  </div>

  <?
  abajo();
  ?>
  <script type="text/javascript">
    $(function () {
      var Accordion = function (el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.dropdownlink');
        dropdownlink.on('click',
          { el: this.el, multiple: this.multiple },
          this.dropdown);
      };

      Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el,
        $this = $(this),
          //this is the ul.submenuItems
          $next = $this.next();

          $next.slideToggle();
          $this.parent().toggleClass('open');

          if (!e.data.multiple) {
          //show only one menu at the same time
          $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
        }
      }

      var accordion = new Accordion($('.accordion-menu'), false);
    })


  </script>
</body>

</html>