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
  <title>Los Robots y los Sensores de Torque - Logicbus S.A de C.V.</title>
  <meta name="description" content="El uso de robots hoy en día se hace más popular y en muy distintos ámbitos, teniendo tal impacto que actualmente sus aplicaciones se encuentran desde el campo de entrenamiento hasta los grandes proyectos de investigación a nivel mundial...">
  <meta name="keywords" content="sensores, torque, robots colaborativos, sensores de torque, futek, logicbus">

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
  <div>
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Los Robots y los Sensores de Torque</li>
          </ol>
        </nav>

        <h1 class="title blue">Los Robots y los Sensores de Torque</h1>

        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/sensores-torque.png" class="image_productos" width="60%" alt="Los Robots y los Sensores de Torque" title="Los Robots y los Sensores de Torque"></center>

        <p class="paragraph text-justify">El uso de robots hoy en día se hace más popular y en muy distintos ámbitos, teniendo tal impacto que actualmente sus aplicaciones se encuentran desde el campo de entrenamiento hasta los grandes proyectos de investigación a nivel mundial. En otras palabras acerca de los robots, para las actividades que para cualquier humano puede ser de lo más trivial, resulta no serlo para un robot.</p>

      </div>
    </div>
  </div>
  <div class="container text-justify mt-5">
    <p class="paragraph">¿Alguna vez ha intentado estar durante un largo tiempo en una misma posición, como por ejemplo de cuclillas, y al intentar levantarte has sentido las piernas entumecidas? De ser así, estando en ese estado es muy complicado caminar antes de que pase el entumecimiento. Debido a la incapacidad de sentir cuando el pie hace contacto con el piso o calcular la fuerza que debe aplicarse para no caer. Normalmente, se debe esperar por un momento hasta sentir por completamente el pie y la información que este brinda al cerebro. Es entonces cuando recién se puede dar pasos de forma normal. Por medio de este ejemplo sucede con los robots que caminan.</p>
    <div align="center">
      <h2 class="subtitle blue">SENSORES DE TORQUE EN FUNCIÓN EN <a class="link-orange" href="https://www.logicbus.com.mx/robots-siasun"> LOS ROBOTS</a></h2>
    </div><br>
    <p class="paragraph">Un robot bípedo capaz de caminar necesita sentir el contacto con el piso para poder realizar su tarea. Más aún, necesita saber exactamente cuánta fuerza está siendo aplicada al piso para poder mantener su balance. Esto se relaciona con una condición denominada el Centro de Presión (CdP), que es la resultante de las fuerzas de contacto: mientras el CdP esté dentro de un pie o dentro del polígono que forman ambos pies, el robot será dinámicamente estable; es decir, no caerá. Y es en la medición de dicha condición donde se requieren los sensores de fuerza y torque. Estos sensores permiten conocer con precisión las fuerzas en el contacto, y por tanto le permiten a un robot poder caminar adecuadamente, en la medida que su algoritmo de control así lo prevea.
    </p>

    <div align="center">
      <h2 class="subtitle blue">EJEMPLO DE APLICACIÓN CON SENSORES DE TORQUE</h2>
    </div><br>
    <p class="paragraph">Debido a las normas de seguridad y las normas de fabricación del consumidor, los fabricantes de equipos deportivos a menudo utilizan sensores de par o torque giratorio para pruebas de productos comerciales. En este ejemplo se explicará cual es la función que contrae él sensor de torque y otros elementos de la marca FUTEK, para darle función a un robot deportivo de JOCKEY:
    </p><br>

    <div align="center">
      <table width="80%" align="center" style="border: 1px solid black;" cellpadding="0" cellspacing="0">

        <tbody>
          <tr>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><img src="assets/images/36/trs300TR.jpg" class="image_productos" width="80px" alt="SERIE TRS" title="SERIE TRS"></td>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><a href="https://tienda.logicbus.com.mx/FSH01987_p_6866.html">SERIE TRS</a><br>Sensores de par de giro - eje a eje</td>
          </tr>
          <tr>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><img src="imagenes/36/FSH03944.jpg" class="image_productos" width="80px" alt="USB520" title="USB520">
            </td>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><a href="https://tienda.logicbus.com.mx/FSH03944_p_14271.html">USB520</a><br>Kit USB externo (mV / V, amplificado y entrada de codificador)</td>
          </tr>
          <tr>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><img src="assets/images/36/FSH03571_2.jpg" class="image_productos" width="80px" alt="IHH500" title="IHH500"></td>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><a href="https://tienda.logicbus.com.mx/FSH03571_p_6818.html">IHH500</a><br>Pantalla digital de mano inteligente
            </td>
          </tr>
          <tr>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><img src="imagenes/36/FSH03833.jpg" class="image_productos" width="80px" alt="IPM650" title="IPM650">
            </td>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><a href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html">IPM650</a><br>Pantalla de montaje en panel
            </td>
          </tr>
          <tr>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><img src="assets/images/36/sensit01.jpg" class="image_productos" width="80px" alt="SOFTWARE" title="SOFTWARE"></td>
            <td colspan="1" align="center" style="border: 1px solid black;" valign="middle" bgcolor="#ffffff"><a href="https://tienda.logicbus.com.mx/FSH03189_p_8987.html">SOFTWARE</a><br>SENSIT ™ Prueba y Medición
            </td>
          </tr>
        </tbody>
        <caption class="text-center"><strong>Tabla 1. Tabla de productos útiles para la aplicación</strong></caption>
      </table>
    </div><br>

    <br>
    <div>
      <center>
        <a href="https://www.logicbus.com.mx/imagenes/articulo/torque1.png"><img src="https://www.logicbus.com.mx/imagenes/articulo/torque1.png" class="image_productos" width="350px" alt="Figura 1.  Aplicación pruebas comercial para palos de hockey de nivel profesional." title="Figura 1.  Aplicación pruebas comercial para palos de hockey de nivel profesional."></a>
      </center>
      <p>
        <center><b>Figura 1. Aplicación pruebas comercial para palos de hockey de nivel profesional.</b>
      </p>
      </center>
    </div>

    <div align="center">
      <h2 class="subtitle blue">FUNCIÓN</h2>
      <br>
      <OL style="text-align:left;">
        <LI>La aplicación anterior ilustra un banco de pruebas comercial para palos de hockey de nivel profesional.
        </LI>
        <LI>Al utilizar un sensor de par giratorio dentro del ensamblaje de esta máquina de automatización robótica, los ingenieros pueden medir el punto de ruptura (fuerza de rotación) de cada disparo de bofetada.</LI>
        <LI>Ya sea a vientos robóticos de brazo a 180 grados o/a una rotación completa de 360 grados, el sensor de par giratorio instalado medirá el par exacto que se ejerce cuando el palo de hockey golpea el disco.
        </LI>
        <LI>Estos datos se pueden ver en una pantalla digital, como la pantalla de mano digital inteligente IHH500 de FUTEK o la pantalla de montaje en panel IPM650, o transmitirse directamente a una PC a través de USB520.
        </LI>
        <LI>El USB520 es la solución de intercambio de datos ideal para sistemas que requieren la traducción de las lecturas del codificador de par rotativo, como el ángulo y la velocidad. Su diseño compacto y robusto también hace que el accesorio USB520 para este tipo de aplicación industrial.</LI>
        <LI>Si los ingenieros de prueba desean recopilar, graficar e interpretar estos resultados, pueden aplicar el software de prueba y medición SENSIT ™ de FUTEK.</LI>
      </OL>
    </div>
    <div align="center">
      <h2 class="subtitle blue">CONCLUSIONES</h2>
    </div><br>
    <p class="paragraph">Los sensores de fuerza y torque no solamente son útiles para caminar, sino también para manipular objetos, sea con garras o con dedos. En tareas de manipulación permiten al robot saber, de alguna forma, cuánta fuerza está siendo aplicada sobre el objeto manipulado, de tal modo que pueda agarrarlo sin soltarlo ni apretarlo demasiado. Igualmente, cuando dos o más robots agarran un mismo objeto por distintos lados, a lo que se llama robótica cooperativa, se debe limitar y controlar las fuerzas que son intercambiadas, para evitar dañar a cada robot y aplicar demasiada fuerza sobre el objeto. Más aún, estos sensores son cruciales para los llamados robots colaborativos, aquellos que trabajan con humanos, ya que al sentir un contacto no previsto, como una persona que repentinamente se “atravesó”, pueden reaccionar adecuadamente. Dicha reacción podría ser simplemente detenerse, o buscar una forma alternativa de movimiento, pero en ambos casos sin causar daño a la persona.<br><br> En general, los sensores de fuerza y torque permiten conocer de manera cuantitativa cómo se realizan las interacciones con el entorno y su uso es fundamental para el desarrollo de robots con capacidades similares a las de un humano, mucho más allá de la clásica aplicación de manufactura industrial repetitiva.
    </p>

    <p class="paragraph blue text-center"><a class="link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Los-robots-y-los-sensores-de-Torque.pdf" target="_blank" title="Energía inalambrica" alt="Energía inalambrica">Leer Artículo Completo</a></p>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>