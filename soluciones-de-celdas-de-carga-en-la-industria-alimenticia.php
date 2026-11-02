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
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>

  <title>Aplicaciones en la Alimentación - Soluciones en la industria Logicbus</title>

  <meta name="description" content="Aplicaciones de celdas de carga en la industria alimenticia Logicbus, descripciones de la aplicacion, equipos utilizados y soporte y consultoria en eleccion del equipo. ">

  <meta name="keywords" content="aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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

  <script language="javascript">

    function menu_actual(){
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

  <style>
    h1{
      text-align: center;
    }
    table td{
      text-align: center;
    }


    .img-aplicaiones{
      padding: 5px 5px 0px 5px;
    }

    .btnVermas{
      padding: 5px 5px 10px 5px;
    }
    .text-aplicaciones{
      padding: 10px 5px 10px 5px;
    }
    .seccion-aplicaiones{
      padding: 5px;
    }

    .seccion-aplicaiones2{
      padding: 10px 5px 10px 5px;
    }
    .margen{
      border-bottom: 6px solid #ff7e00; 
      padding-bottom: 15px;
      padding-left: 20px;
      padding-right: 20px; 
    }
    .margen{
      border-bottom: 6px solid #ff7e00; 
      padding-bottom: 15px;
      padding-left: 20px;
      padding-right: 20px; 
    }

  </style>

</head>
<body onLoad="menu_actual();">

  <?
  arriba();
  ?>

  <div id="main" class="container productos_page" >
    <?
    seccionSoluciones();
    ?>
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en la Alimentación
    <?
    menuMovilApp();
    ?>

    <h1 class=""><hr class="hr-text" data-content="Alimenticia"></h1>
    <center>
      <div class="seccion">
        <div class="col-center">
          <h2><span>Celdas de carga</span></h2>
        </div>
      </div>
    </center>
    <div class="row container-fluid seccion-aplicaiones">
      <div class="col-6 col-md-3 container-fluid">
        <a href="penetrometro-de-frutas"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/agricultura/penetrometro-de-frutas-portada.jpg" alt="soluciones en la industria farmaceutica y laboratorio" title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br> 
        <center><b><a href="penetrometro-de-frutas">Penetr&oacute;metro de frutas / verduras</a></b></center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <a href="medidor-de-flujo-de-masa"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/agricultura/medidor-flujo-de-masa-portada.jpg"  alt="soluciones en la industria Alimenticia" title="soluciones en la industria Alimenticia" class="img-fluid"></a><br><br> 
        <center><b><a href="medidor-de-flujo-de-masa">Medidor de flujo de masa</a></b></center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <a href="medicion-del-tanque-de-fermentacion-del-oktoberfest"><img src="https://www.logicbus.com.mx/imagenes/36/diagramas/agricultura/medicion-del-tanque-de-fermentacion-del-oktoberfest-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"></a><br><br> 
        <center><b><a href="medicion-del-tanque-de-fermentacion-del-oktoberfest">Medición del tanque de fermentación del Oktoberfest</a></b></center>
      </div>
      <div class="col-6 col-md-3 container-fluid">
        <a href="medicion-de-la-carga-de-gestion-de-residuos"><img src="https://www.logicbus.com.mx/imagenes/36/diagramas/agricultura/medicion-de-la-carga-de-gestion-de-residuos-portada.jpg" alt="soluciones en la industria farmaceutica y laboratorio" title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br> 
        <center><b><a href="medicion-de-la-carga-de-gestion-de-residuos">Medición de la carga de gestión de residuos</a></b></center>
      </div>
    </div>

    <div class="row container-fluid seccion-aplicaiones">
      <div class="col-6 col-md-3 container-fluid">
        <a href="pesaje-de-dosificacion"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/agricultura/pesaje-de-dosificacion-portada.jpg"  alt="soluciones en la industria Alimenticia" title="soluciones en la industria Alimenticia" class="img-fluid"></a><br><br> 
        <center><b><a href="pesaje-de-dosificacion">Pesaje de dosificación</a></b></center>
      </div>
      <div  class="col-6 col-md-3 container-fluid">
       <br><br>
       <center>
        <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a></center>  
      </div>
    </div>

    <center>
      <div class="seccion">
        <div class="col-center">
          <h2><span>Sensores de torque</span></h2>
        </div>
      </div>
    </center>

    <div class="row container-fluid seccion-aplicaiones">
      <div class="col-6 col-md-3 container-fluid">
        <center><a href="alimentador-avicola-agricola"><img src="imagenes/36/diagramas/agricultura/alimentador-de-aves-agricola-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"></a><br><br> 
          <b><a href="alimentador-avicola-agricola">Alimentador avícola agrícola</a></b>
        </center>
      </div>

      <div  class="col-6 col-md-3 container-fluid">
        <br><br>
        <center><a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas">Ver más <br> aplicaciones</button></a></center>  
      </div>
      <div class="col-6 col-md-3 container-fluid">

      </div>
    </div>

    <br><br>

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


  <?
  abajo();
  ?>
  <script type="text/javascript">
    $(function() {
      var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.dropdownlink');
        dropdownlink.on('click',
          { el: this.el, multiple: this.multiple },
          this.dropdown);
      };

      Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
        $this = $(this),
        $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if(!e.data.multiple) {
          $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
        }
      }

      var accordion = new Accordion($('.accordion-menu'), false);
    })


  </script>
</body>
</html>
