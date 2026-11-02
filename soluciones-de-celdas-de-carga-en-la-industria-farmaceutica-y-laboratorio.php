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

  <title>Aplicaciones en Farmacéutica y laboratorio - Logicbus S.A de C.V</title>

  <meta name="description"
    content="Aplicaciones de celdas de cargas en la industria farmaceutica y laboratorio, descripcion de la aplicacion, equipos de automatizacion utilizados y diagramas de conexion ">

  <meta name="keywords"
    content="Load cell, celdas de carga, celda de carga tipo boton, celda de carga tipo barra, celda de carga tipo columna, celda de carga tipo dona, celda de carga en linea, celda de carga low profile, celda de carga low profile pancake, celda de carga tipo medical, celda de carga mini-beam, celda de carga montaje en panel, celda de carga pancake, celda de carga paralelogramo, celda de carga tipo S, celda de carga viga, paneles, display portatil, acondicionador de señal, modulos USB, transductores, Logicbus, Futek, celdas de carga Mexico, Equipos y asesorias industriales, Guadalajara, Argentina, Chile, Brasil, Automatizacion, aplicaciones de celdas de carga en la industria farmaceutica y laboratorio, soluciones de celdas de carga, como puedo aplicar una celda de carga en la industria farmaceutica, tipos de aplicaciones de celdas de carga, Que son las celdas de carga, como utilizar una celda de carga">

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

  <style>
    h1 {
      text-align: center;
    }

    table td {
      text-align: center;
    }

    .img-aplicaiones {
      padding: 5px 5px 0px 5px;
    }

    .btnVermas {
      padding: 5px 5px 10px 5px;
    }

    .text-aplicaciones {
      padding: 10px 5px 10px 5px;
    }

    .seccion-aplicaiones {
      padding: 5px;
    }

    .seccion-aplicaiones2 {
      padding: 10px 5px 10px 5px;
    }

    .margen {
      border-bottom: 6px solid #ff7e00;

    }
  </style>

</head>

<body onLoad="menu_actual();">
  <?
  arriba();
  seccionSoluciones();
  ?>

  <div id="main" class="container productos_page">
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en Farmacéutica
    y laboratorio

    <?
    menuMovilApp();
    menuPC();
    ?>
    <h1 class="my-5">
      <hr class="hr-text" data-content="Farmacéutica y laboratorio">
    </h1>
    <center>
      <h2 class="divider gradient" style="font-weight: bold;">Celdas de carga</h2>
      <!--<?/*
    buscadorAppsCS();*/
    ?> -->
    </center>
    <div class="row container-fluid seccion-aplicaiones" id="apli-auto">
      <div class="col-6 col-md-3 container-fluid">
        <a href="bascula-de-precision-de-miligramos-para-la-industria-farmaceutica">
          <img
            src="imagenes/36/diagramas/farmaceutica-laboratorio/bascula-precision-miligramos-industria-farmaceutica.jpg"
            alt="Báscula de Precisión de Miligramos para la Industria Farmacéutica"
            title="Báscula de Precisión de Miligramos para la Industria Farmacéutica" class="img-fluid">
        </a><br><br>
        <center><b><a href="bascula-de-precision-de-miligramos-para-la-industria-farmaceutica">Báscula de Precisión de Miligramos</a></b></center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <a href="medicion-de-fuerza-de-mordedura">
          <img
            src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/medicion-de-fuerza-de-mordedura-portada.jpg"
            alt="soluciones en la industria farmaceutica y laboratorio"
            title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid">
        </a><br><br>
        <center><b><a href="medicion-de-fuerza-de-mordedura">Medición de fuerza de mordedura</a></b></center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="soporte-de-prueba-de-jeringas">
            <img
              src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/diagrama-soporte-de-prueba-de-jeringas-portada.jpg"
              alt="soluciones en la industria Alimenticia" title="soluciones en la industria Alimenticia"
              class="img-fluid"></a><br><br>
          <b><a href="soporte-de-prueba-de-jeringas">Soporte de prueba de jeringas</a></b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="dispositivo-robotico-de-rehabilitacion-de-piernas"><img
              src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/Dispositivo-Robotico-De-Rehabilitacion-De-Piernas-portada.jpg"
              alt="soluciones en la industria academia e investigacion"
              title="soluciones en la industria academia e investigacion" class="img-fluid"></a><br><br>
          <b><a href="dispositivo-robotico-de-rehabilitacion-de-piernas">Dispositivo robótico de rehabilitación de
              piernas</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center>
          <a href="calibracion-de-herramientas-laparoscopicas">
            <img
              src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/Calibracion-De-Herramientas-Laparoscopicas-portada.jpg"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid">
          </a>
          <br><br>
          <b>
            <a href="calibracion-de-herramientas-laparoscopicas">Calibración de herramientas laparoscópicas</a>
          </b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="elevador-medico-de-pacientes"><img
              src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/elevador-medico-de-pacientes-portada.jpg"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="elevador-medico-de-pacientes">Elevador médico de pacientes</a></b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="sintesis-de-adn"><img src="imagenes/36/sintesis-de-adn-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="sintesis-de-adn">Síntesis de ADN</a></b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center>
          <a href="pesaje-de-bolsas-medicas">
            <img src="imagenes/36/pesaje-de-bolsas-medicas-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid">
          </a>
          <br><br>
          <b>
            <a href="pesaje-de-bolsas-medicas">Pesaje de Bolsas Médicas</a>
          </b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="bascula-de-presaje-multiple"><img src="imagenes/36/bascula-de-presaje-multiple-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="bascula-de-presaje-multiple">Báscula de presaje múltiple</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="medicion-del-flujo-correcto-de-fluidos"><img
              src="imagenes/36/medicion-del-flujo-correcto-de-fluidos-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="medicion-del-flujo-correcto-de-fluidos">Medición del flujo correcto de fluidos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="medicion-de-fuerza-de-compresion-en-pildoras"><img
              src="imagenes/36/medicion-de-fuerza-de-compresion-en-pildoras-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="medicion-de-fuerza-de-compresion-en-pildoras">Medición de fuerza de compresión en
              píldoras</a></b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="pruebas-de-medicion-de-fuerza-en-un-cateter"><img
              src="imagenes/36/pruebas-de-medicion-de-fuerza-en-un-cateter-futek.png"
              alt="soluciones en la industria farmaceutica y laboratorio"
              title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br>
          <b><a href="pruebas-de-medicion-de-fuerza-en-un-cateter">Pruebas de medici&oacute;n de fuerza en un
              cat&eacute;ter</a></b>
        </center>
      </div>

      <div class="col-6 col-md-3 container-fluid">
        <center><a href="medicion-de-expansion-de-tuberias" name="Medicón de expansión de tuberías"><img
              src="imagenes/36/medicion-expansion-de-tuberias.png" alt="" title="prueba-de-asientos-automotrices"
              class="img-fluid"></a><br><br>
          <b><a href="medicion-de-expansion-de-tuberias">Medición de expansión de tuberías</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="control-de-nivel-en-tanque-dual" name="Control de nivel en tanque dual"><img
              src="imagenes/36/control-de-nivel-en-tanque-dual.png" alt="" title="Control de nivel en tanque dual"
              class="img-fluid"></a><br><br>
          <b><a href="control-de-nivel-en-tanque-dual">Control de nivel en tanque dual</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="soporte-de-prueba-oem" name="Soporte de prueba OEM"><img
              src="imagenes/36/soporte-de-prueba-oem.png" alt="" title="Soporte de prueba OEM"
              class="img-fluid"></a><br><br>
          <b><a href="soporte-de-prueba-oem">Soporte de prueba OEM</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="soluciones-con-sensores-no-magneticos" name="Soluciones con sensores no magnéticos"><img
              src="imagenes/36/soluciones-con-sensores-no-magneticos.png" alt=""
              title="Soluciones con sensores no magnéticos" class="img-fluid"></a><br><br>
          <b><a href="soluciones-con-sensores-no-magneticos">Soluciones con sensores no magnéticos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="investigacion-biomedica" name="Investigación biomédica"><img
              src="imagenes/36/investigacion-biomedica.png" alt="" title="Investigación biomédica"
              class="img-fluid"></a><br><br>
          <b><a href="investigacion-biomedica">Investigación biomédica</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="cable-guia-para-procesos-quirurgicos"><img
              src="imagenes/36/cable-guia-para-procesos-quirurgicos.png" alt="Cable guía para procesos quirúrgicos"
              title="Cable guía para procesos quirúrgicos" class="img-fluid"></a><br><br>
          <b><a href="cable-guia-para-procesos-quirurgicos">Cable guía para procesos quirúrgicos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="durabilidad-de-valvula-para-cateter"><img
              src="imagenes/36/durabilidad-de-valvula-para-cateter.png" alt="Durabilidad de válvula para catéter"
              title="Durabilidad de válvula para catéter" class="img-fluid"></a><br><br>
          <b><a href="durabilidad-de-valvula-para-cateter">Durabilidad de válvula para catéter</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="rehabilitacion-de-guantes-roboticos"><img
              src="imagenes/soluciones-en-la-industria/Robotica/rehabilitacion-de-guantes-roboticos-portada.jpg"
              alt="Rehabilitación de guantes robóticos" title="Rehabilitación de guantes robóticos"
              class="img-fluid"></a><br><br>
          <b><a href="rehabilitacion-de-guantes-roboticos">Rehabilitación de guantes robóticos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br>
        <center><a href="control-de-fuerza-en-endoscopia"><img src="imagenes/36/control-de-fuerza-en-endoscopia.png"
              alt="Control de fuerza en endoscopía" title="Control de fuerza en endoscopía"
              class="img-fluid"></a><br><br>
          <b><a href="control-de-fuerza-en-endoscopia">Control de fuerza en endoscopía</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br>
        <center><a href="simulador-de-pie-prostetico"><img src="imagenes/36/simulador-de-pie-prostetico.png"
              alt="Simulador de pie prostético" title="Simulador de pie prostético" class="img-fluid"></a><br><br>
          <b><a href="simulador-de-pie-prostetico">Simulador de pie prostético</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br>
        <center><a href="exoesqueleto-para-paraplejicos"><img src="imagenes/36/exoesqueleto-para-paraplejicos.png"
              alt="Exoesqueleto para parapléjicos" title="Exoesqueleto para parapléjicos" class="img-fluid"></a><br><br>
          <b><a href="exoesqueleto-para-paraplejicos">Exoesqueleto para parapléjicos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br><br>
        <center>
          <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button"
              class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
    <center>
      <h2 class="divider gradient" style="font-weight: bold;">Sensores de Torque</h2>
    </center>
    <div class="row container-fluid seccion-aplicaiones" id="apli-auto">
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="prueba-de-torque-en-cateter"><img src="imagenes/36/prueba-de-torque-en-cateter.png"
              alt="Prueba de torque en catéter" title="Prueba de torque en catéter" class="img-fluid"></a><br><br>
          <b><a href="prueba-de-torque-en-cateter">Prueba de torque en catéter</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="auditoria-de-torque-en-taladro-dental"><img
              src="imagenes/36/auditoria-de-torque-en-taladro-dental.png" alt="Auditoría de torque en taladro dental"
              title="Auditoría de torque en taladro dental" class="img-fluid"></a><br><br>
          <b><a href="auditoria-de-torque-en-taladro-dental">Auditoría de torque en taladro dental</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="prensa-de-tapas-automatica" name="Prensa de tapas automática"><img
              src="imagenes/36/prensa-de-tapas-automatica.png" alt="" title="Prensa de tapas automática"
              class="img-fluid"></a><br><br>
          <b><a href="prensa-de-tapas-automatica">Prensa de tapas automática</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="torque-de-un-desarmador-en-miniatura"><img
              src="imagenes/36/torque-de-un-desarmador-en-miniatura.png" alt="Torque de un desarmador en miniatura"
              title="Torque de un desarmador en miniatura" class="img-fluid"></a><br><br>
          <b><a href="torque-de-un-desarmador-en-miniatura">Torque de un desarmador en miniatura</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="sensor-de-torque-tipo-desarmador-electrico"><img
              src="imagenes/36/sensor-de-torque-tipo-desarmador-electrico.png"
              alt="Sensor de torque tipo desarmador eléctrico" title="Sensor de torque tipo desarmador eléctrico"
              class="img-fluid"></a><br><br>
          <b><a href="sensor-de-torque-tipo-desarmador-electrico">Sensor de torque tipo desarmador eléctrico</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br>
        <center><a href="exoesqueleto-para-paraplejicos"><img src="imagenes/36/exoesqueleto-para-paraplejicos.png"
              alt="Exoesqueleto para parapléjicos" title="Exoesqueleto para parapléjicos" class="img-fluid"></a><br><br>
          <b><a href="exoesqueleto-para-paraplejicos">Exoesqueleto para parapléjicos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br><br>
        <center>
          <a href="aplicaciones-de-sensores-de-torque"><button type="button"
              class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
    <center>
      <a></a>
      <h2 class="divider gradient" style="font-weight: bold;">Instrumentos de Medición</h2><br>
    </center>
    <div class="row container-fluid seccion-aplicaiones" id="apli-autoia">
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="rehabilitacion-de-guantes-roboticos"><img
              src="imagenes/soluciones-en-la-industria/Robotica/rehabilitacion-de-guantes-roboticos-portada.jpg"
              alt="Rehabilitación de guantes robóticos" title="Rehabilitación de guantes robóticos"
              class="img-fluid"></a><br><br>
          <b><a href="rehabilitacion-de-guantes-roboticos">Rehabilitación de guantes robóticos</a></b>
        </center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <br>
        <center>
          <a href="aplicaciones-de-instrumentos-medicion"><button type="button"
              class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
  </div><br>

  <!-- BEGIN Odoo web form -->
  <div class="container">
  <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
  <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
  style="width:100%; min-height:1200px; border:0;">
  </iframe>
  </div>
  </div>
  <!-- END Odoo web form -->

  <br>

  <!--<center><h2><b>Sensores de torque</b></h2></center><br>
<div class="row container-fluid seccion-aplicaiones">
    <div class="col-4 col-md-3 container-fluid">
               <img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/fuerza-de-lanzamiento-de-uav-portada.jpg"  alt="soluciones en la industria acade investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"><br><br> 
              <center><b><a href="https://www.logicbus.com.mx/alimentador-de-aves-de-corral-agricola">Fuerza de lanzamiento de UAV</a></b></center>
  </div>
    <div  class="col-4 col-md-3 container-fluid">
      <br><br>
      <center><a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas">Ver más <br> aplicaciones</button></a></center>  
    </div>
</div>-->

  <br><br>

  </div><!--  /main -->

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