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

  <title> Medición de la Fuerza de Impacto | Celdas de carga | Logicbus</title>

  <meta name="keywords"
    content="medición de fuerza de impacto, celdas de carga, resistencia al impacto, pruebas de choque automotriz, pruebas de materiales, seguridad en la construcción, pruebas de equipos deportivos, pruebas aeroespaciales y de defensa, industria del embalaje, normas ISO, ASTM, SAE, IEC, FUTEK, LLB500, USB225 Pro Elite, SENSIT, análisis de datos, rendimiento de materiales" />

  <meta name="description"
    content="Descubra cómo se realiza la medición de fuerza de impacto y cómo las celdas de carga desempeñan un papel crucial en diversas aplicaciones, desde pruebas de materiales hasta pruebas de choque automotriz y pruebas aeroespaciales. FUTEK ofrece soluciones de alta calidad, como el botón de carga LLB500 y el acondicionador de señal USB225 Pro Elite, para capturar y analizar con precisión las fuerzas de impacto. Conozca más sobre normas como ISO, ASTM, SAE y IEC en la medición de fuerza de impacto." />

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

    .part1 {
      border-bottom: 2px dotted darkgray;
      text-align: justify;
      overflow: hidden;
      margin-bottom: 5%;
    }

    .part1 img {
      display: block;
      /*para centrar las imágenes*/
      margin: 0 auto;
    }

    .centro {
      text-align: center;
    }

    .seccion-aplicaiones {
      padding: 5px;
    }

    .seccion-aplicaiones2 {
      padding: 10px 5px 10px 5px;
    }

    .margen {
      border-bottom: 6px solid #ff7e00;
      padding-bottom: 25px;
    }
  </style>
</head>

<body onLoad="menu_actual();">

  <?
  arriba();
  seccionSoluciones();
  ?>

  <div id="main" class="container productos_page">
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de
    carga
    <br>

    <?
  menuMovilApp();
  menuPC();
?>
    <h1 class="my-5">
      <center><b class="margen">Medición de la Fuerza de Impacto</b></center>
    </h1>
    <center>
      <h2><b> Medición de la Fuerza de Impacto</b></h2>
    </center><br>

    <div class="part1">
      <article>

        <p>
          La medición de la fuerza de impacto implica capturar las fuerzas dinámicas que se generan durante un evento de
          colisión. Se utiliza con frecuencia en diversas máquinas y entornos de prueba para garantizar la seguridad y
          durabilidad del diseño de una aplicación. Uno de los métodos más confiables para medir la fuerza de impacto es
          mediante el uso de sensores de fuerza de impacto, también conocidos como celdas de carga basadas en galgas
          extensiométricas.
        </p>
        <p>
          Un sistema de medición de fuerza de impacto típicamente consta de una celda de carga de respuesta de alta
          frecuencia, electrónica de acondicionamiento de señales de alta velocidad de muestreo y capacidades de
          adquisición de datos. La celda de carga desempeña un papel crucial al convertir la fuerza mecánica hiperrápida
          que ocurre en milisegundos (el impacto) en una señal eléctrica que se puede medir y analizar.
        </p>

        <img src="imagenes/36/diagramas/desarrollo-de-productos-y-oem/medicion-de-fuerza-de-impacto.jpg"
          alt=" Medición de la Fuerza de Impacto - Aplicaci&oacute;n de Celda de carga" width="45%">
        <br>

        <div>
          <p><b>C&oacute;mo funciona:</b><br></p>
          <ol>
            <li style="color: black;">Instalación de la Celda de Carga: Instale el botón de carga <a
              href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
              target="_blank">LLB500</a> en la ubicación
              deseada, asegurando una alineación y sujeción adecuadas a la estructura o aparato de prueba. Asegúrese de
              que la superficie sea lo suficientemente rígida para evitar enmascarar o amortiguar la fuerza de impacto
              (por ejemplo, superficies de madera versus metálicas).</li>

            <li style="color: black;"> Instalación del Acondicionador de Señal: Conecte la salida de la celda de carga
              al acondicionador de señal
              <a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">USB225</a> Pro Elite de alta tasa de muestreo por USB, que amplifica y acondiciona la señal de salida en mV/V
              del botón de carga.</li>

            <li style="color: black;"> Integración con el Sistema de Adquisición de Datos: Conecte la salida del
              acondicionador de señal al
              puerto USB de su laptop. Los datos recopilados se muestran, registran y grafican a través de nuestro
              software SENSIT™ en una PC.</li>

            <li style="color: black;"> Recopilación y Análisis de Datos: Inicie el sistema de adquisición de datos para
              capturar las mediciones
              de la fuerza de impacto. Recolecte datos durante los eventos de impacto, registrando los valores de fuerza
              a una tasa de muestreo suficientemente alta. Analice los datos utilizando SENSIT para determinar las
              fuerzas máximas y evaluar el rendimiento ante impactos.</li>
          </ol>
        </div><br>
        <p>
          <b>Productos en uso:</b>&nbsp;
          Una celda tipo botón y Módulo USB.
        </p>

      </article>
    </div>

    <section id="equipos-implementados" class="img-fluid container-fluid ">

      <div class="row img-fluid" style="align-items: stretch;" alt="Responsive image">

        <div class="col-3 col-md-3 container img-fluid">
          <center><a
              href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
              target="_blank"><img src="imagenes/36/LLB500.jpg" alt="" width="80%"></a></center>
          <center><a
              href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
              target="_blank">LLB500</a>
          </center>
        </div>

        <div class="col-3 col-md-3 container img-fluid">
          <center><a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank"><img
                src="imagenes/36/fsh04720.jpg" alt="" width="80%"></a></center>
          <center><a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">Modulos
              USB</a></center>
        </div>
      </div>

    </section> <br>

    <!-- BEGIN Podio web form -->
    <script src="https://podio.com/webforms/25497888/1893814.js"></script>
    <script type="text/javascript">
      _podioWebForm.render("1893814")
    </script>
    <noscript>
      <a href="https://podio.com/webforms/25497888/1893814" target="_blank">Por favor, rellena el formulario</a>
    </noscript>
    <!-- END Podio web form -->
  </div>
  </div>


  <br><br>

  </div>

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