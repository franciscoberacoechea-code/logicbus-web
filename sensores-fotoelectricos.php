<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>Sensores Fotoeléctricos | Sensores de Color y Contraste | Logicbus</title>


  <meta name="description" content="Descubre nuestra amplia gama de sensores fotoeléctricos: desde modelos de proximidad y barrera de luz hasta sensores de color y contraste">



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
  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <!-- RUTA DEL PRODUCTO ENTRE LAS CATEGORIAS -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sensores fotoeléctricos</li>
          </ol>
        </nav>
        <center>
          <h1 class="titulo_producto">Sensores fotoeléctricos</h1>
          <img src="images/banner/www/sensores-fotoelectricos.png" alt="Sensores fotoeléctricos" title="Sensores fotoeléctricos" width="100%">
          <br><br>
        </center>
        <p align="justify"><b>TRI-TRONICS</b> diseña y fabrica sensores fotoeléctricos de alto rendimiento y alta
          calidad, además de
          guías de luz de fibra óptica para una amplia gama de exigentes aplicaciones de automatización industrial. El
          rendimiento de los sensores TRI-TRONICS® en aplicaciones del mundo real los diferencia de la competencia
          (<strong>Sensores fotoeléctricos para elevador</strong>).
        </p>
        <center>
          <nav class="navMenuSuper">
            <ul>
              <li>
                <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos" target="_blank">Ver en Tienda</a>
              </li>
              <li>
                <a href="#equipos" target="_blank">Productos</a>
              </li>
            </ul>
          </nav>
        </center>
      </div>
    </div>
    <div class="divCentrado">
      <center>
        <div class="seccion" id="catalogos">
          <div class="col-center">
            <h2><span>Catálogos</span></h2>
          </div>
        </div>
      </center>
      <div align="center">
        <a href="pdf/catalogos/Sensores-Tri-Tronics-ESP.pdf" target="_blank">
          <img src="pdf/226/guia-de-productos-tri-tronics.png" alt="Guía de productos Tri-tronics" class="imgBorde img250"><br>
          Ver Catálogo Tri-tronics Español <br> Sensores Fotoeléctricos
        </a>
      </div>
      <center>
        <div class="seccion" id="equipos">
          <div class="col-center">
            <h2><span>Productos</span></h2>
          </div>
        </div>
      </center>
      <div class="tabla_subcategorias_grid my-5">
        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-miniatura">
              <img src="imagenes/226/Sensors-Miniature.jpg" alt="Sensores fotoeléctricos - Sensores Miniatura" title="Sensores fotoeléctricos - Sensores Miniatura" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-miniatura">
              <h2>Sensores Miniatura</h2>
            </a>
            <p>Los sensores fotoeléctricos en miniatura son muy pequeños y delgados, ideales para el montaje en
              aplicaciones con espacio de montaje limitado.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-miniatura" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>


        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-herradura-para-etiquetas">
              <img src="imagenes/226/NAV-SlotDetectors_2.jpg" alt="Sensores fotoeléctricos - Sensor Herradura para etiquetas" title="Sensores fotoeléctricos - Sensor Herradura para etiquetas" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-herradura-para-etiquetas">
              <h2>Sensores Herradura para etiquetas</h2>
            </a>
            <p>Los sensores de herradura y etiquetas son un tipo especial de diseño de viga pasante. El transmisor y
              el receptor están alineados mecánicamente para ahorrar tiempo de instalación. Hay dos tipos. Óptico y
              ultrasónico. La óptica detecta objetos interrumpiendo el haz. Se pueden detectar pequeñas diferencias de
              absorción de luz. El ultrasonido detecta las propiedades y la delgadez del material de la absorción del
              ultrasonido. Se puede detectar material transparente en material de respaldo transparente.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensor-herradura-para-etiquetas" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>


        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-para-transparencias">
              <img src="imagenes/226/Nav-Transparent.jpg" alt="Sensores fotoeléctricos - Sensor para transparencias" title="Sensores fotoeléctricos - Sensor para transparencias" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-para-transparencias">
              <h2>Sensores para transparencias</h2>
            </a>
            <p>Los sensores de objetos claros son un sensor de modo retroreflectante especialmente diseñado que
              resuelve pequeñas diferencias de luz para detectar PBT y materiales de vidrio.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensor-para-transferencias" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-de-color">
              <img src="imagenes/226/sensor-colormark_wteststrip.jpg" alt="Sensores fotoeléctricos - Sensores de color" title="Sensores fotoeléctricos - Sensores de color" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-de-color">
              <h2>Sensores de color</h2>
            </a>
            <p>Los sensores de color combinan una capacidad única de percepción del color con una respuesta de muy
              alta velocidad. Se han incorporado muchas características importantes en el diseño para satisfacer la
              creciente demanda de control de registro de precisión en la maquinaria de envasado de mayor velocidad
              actual. Proporciona rangos operativos extendidos, supresión de fondo mejorada y la eliminación de
              problemas de saturación.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-de-color" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-de-contraste">
              <img src="imagenes/226/NAV-RegistrationMark.jpg" alt="Sensores fotoeléctricos - Sensores de contraste" title="Sensores fotoeléctricos - Sensores de contraste" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-de-contraste">
              <h2>Sensores de contraste</h2>
            </a>
            <p>Los sensores de contraste se utilizan para detectar marcas de registro en varios medios. Esto se logra
              seleccionando el color de la fuente de luz para que haya una gran diferencia en el contraste entre el
              color del medio y el color de la marca. La aplicación típica para la detección de contraste es la
              detección de marcas de registro antes de cortar o convertir papel en la industria del embalaje.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-de-contraste" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>


        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-de-luminiscencia-uv">
              <img src="imagenes/226/Nav-UV-Luminescence.jpg" alt="Sensores fotoeléctricos - Sensores de luminiscencia UV" title="Sensores fotoeléctricos - Sensores de luminiscencia UV" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-de-luminiscencia-uv">
              <h2>Sensores de luminiscencia UV</h2>
            </a>
            <p>Los sensores de luminiscencia emiten luz UV y detectan la presencia de propiedades luminiscentes.
              Muchos materiales tienen propiedades luminiscentes como tiza, pinturas, pegamentos, grasas y tintas.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-sensores-de-luminiscencia-uv" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>


        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="sensores-fotoelectricos-para-elevador">
              <img src="imagenes/226/UEER1.jpg" alt="Sensores fotoeléctricos - Sensores para Elevadores" title="Sensores fotoeléctricos - Sensores para Elevadores" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="sensores-fotoelectricos-para-elevador">
              <h2>Sensores para Elevadores</h2>
            </a>
            <p>Con ElevatorEye™ puede seleccionar sistemas de ojo individuales que se adapten a cualquier aplicación
              de puerta para respaldar el borde de seguridad mecánica. Se incluyen los reflectores, los soportes de
              montaje y todo el hardware. Son fáciles de instalar y aún más fáciles de mantener. ElevatorEye™ está
              sellado en una caja de plástico de alto impacto, resistente a la suciedad y la humedad.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-fotoelectricos-elevadores" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

      </div>
    </div>
  </div> <!--  /main -->
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>