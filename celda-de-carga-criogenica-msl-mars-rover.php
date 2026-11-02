<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
  <title>Celda de carga criogénica MSL Mars Rover</title>

  <meta name="description" content="">

  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" &amp;gt;>

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

    .image1 {
      margin-left: 20px;
      margin-bottom: 10%;
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
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de
    carga
    <br>

    <?
    menuMovilApp();
    menuPC();
    ?>
    <h1 class="my-5"><b class="margen">Celda de carga criog&eacute;nica MSL Mars Rover </b></h1>
    <center>
      <h2><b>Aplicaci&oacute;n de Celda de carga </b></h2>
    </center><br>

    <div class="part1">

      <article>
        <p><b>Resumen de la aplicaci&oacute;n:</b>
          La NASA encarg&oacute; a FUTEK que desarrollara una celda de carga de rosca criog&eacute;nica que opere
          directamente dentro del brazo de perforaci&oacute;n de curiosity. Este sensor es responsable de monitorear las
          fuerzas de la broca cuando perfora el terreno marciano.
        </p>

        <img
          src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/celda-de-carga-criogenica-msl-mars-rover.png"
          alt="Celda de carga criogenica MSL Mars Rover" width="50%">

        <div>
          <p><b>C&oacute;mo funciona:</b><br></p>
          <ol>

            <li style="color: black;">Muchas aplicaciones requieren soluciones personalizadas. Por lo tanto, FUTEK sabe
              que cuando la NASA se acerca a nosotros, un producto est&acute;ndar listo para usar no se ajustaba
              completamente a sus requisitos. Pero dado que FUTEK en el negocio de solucionar problemas, si hay
              voluntad,FUTEK puede dise&ntilde;ar y desarrollar el sensor necesario para el trabajo. Y eso es
              exactamente lo que hicieron.</li>
            <li style="color: black;">Para la misi&oacute;n MSL mars rover curiosity el JPL de la NASA encarg&oacute; a
              FUTEK que desarrollara una celda de carga de agujero pasante de doble puente criog&eacute;nica calificada
              para el espacio y vuelo. Este sensor espec&iacute;fico se encuentra dentro del mecanismo de
              deformaci&oacute;n del m&oacute;vil. Es responsable de medir las fuerzas de la broca con un alto nivel de
              precisi&oacute;n y resoluci&oacute;n que un sistema de accionamiento de motor controlado por corriente no
              puede lograr. La inclusi&oacute;n de un puente doble era una necesidad para determinar las redundancia del
              sistema, lo que reduce el riesgo de que el sistema se vuelva inoperable en condiciones extremas. </li>
            <li style="color: black;">Si tiene una aplicaci&oacute;n personalizada que necesita una soluci&oacute;n de
              sensor, visite nuestra p&aacute;gina de soluciones de sensor personalizada para obtener m&aacute;s
              informaci&oacute;n sobre las capacidades de FUTEK.</li>



          </ol>

        </div>
        <p><b>Productos en uso:</b>&nbsp;
          Celda de carga tipo dona de doble puente criog&eacute;nico calificado por NASA/JPL-SPACE.
      </article>

    </div>





    <section id="equipos-implementados" class="img-fluid container-fluid ">
      <div class="row img-fluid" alt="Responsive image">

      </div>

    </section>
    <br>

  </div>
  <!-- BEGIN Odoo web form -->
  <div class="container">
    <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
      <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
        style="width:100%; min-height:1200px; border:0;">
      </iframe>
    </div>
  </div>
  <!-- END Odoo web form -->

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