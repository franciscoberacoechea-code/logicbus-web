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
  <title>Instrumentos de Medición Profesional para Automatización Industrial | Logicbus</title>
  <meta name="description"
    content="Descubre nuestra amplia gama de instrumentos de medición: multímetros, osciloscopios, generadores de funciones y más. Soluciones precisas y confiables para tus proyectos industriales y académicos.">

  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Instrumentos de medición, analizadores de espectro, Osciloscopios, de entorno, Fuentes de poder de banco, Generadores de funciones, Laboratorio Academico, Multimetros, Tacometros, Mediciones específicas de AC, Siglent, Seneca, Pico Technology">
  <link href="libreria/multimetro.css" rel="stylesheet">
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



<style>
  .griditemContA {
    max-width: 100%;

    min-width: 100%;
  }
</style>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>


  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
        <!--editar-->

        <li class="breadcrumb-item active" aria-current="page">Prueba y medición</li>
      </ol>
    </nav>
  </div>

  <div class="mb-5">
    <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/prueba-y-medicion.png">
      <source src="https://www.logicbus.com.mx/assets/videos/prueba-y-medicion.mp4" type="video/mp4">
    </video>
  </div>
  <!--editar-->

  <div class="container my-5">
    <h1 class="banner-title blue font-weight-bolder mb-5"> PRUEBA y <b class="banner-title light-orange"> MEDICIÓN</b>
    </h1>
    <p class="light-black paragraph text-justify px-md-5 px-1">
      La prueba y medición en la automatización industrial desempeña un papel fundamental en la garantía de la calidad,
      eficiencia y seguridad de los procesos y productos. Mediante el uso de tecnologías avanzadas, equipos de medición
      de precisión y sistemas automatizados, se logra un control exhaustivo sobre las variables críticas en la
      producción industrial. Desde la verificación de parámetros clave hasta la detección temprana de posibles fallos,
      la prueba y medición proporciona datos confiables que permiten optimizar la operación, minimizar tiempos de
      inactividad y maximizar la calidad del producto final. Nuestro compromiso es brindar soluciones de prueba y
      medición a la medida de tus necesidades, impulsando así el rendimiento y la competitividad de tu entorno
      industrial.
    </p>
  </div>

  <!-- BOTONES -->
  <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
    <a class="button-text" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos"
      target="_blank"><button class="button button-white">Ver en Tienda</button></a>
    <a class="button-text" href="#marcas"><button class="button button-white">Marcas</button></a>

    <a class="button-text" href="#magnitudes"><button class="button button-white">Instrumentos de medición</button></a>
    <a class="button-text" href="#formas-de-medicion"><button class="button button-white">formas de
        medición</button></a>
    <a class="button-text" href="#articulos"><button class="button button-white">Artículos</button></a>
    <a class="button-text" href="#doc"><button class="button button-white">Catálogos</button></a>
    <a class="button-text" href="#video"><button class="button button-white">Videos</button></a>
  </div>

  <!-- MARCAS -->
  <section id="marcas">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">MARCAS</h2>
    </div>
    <div class="container-fluid my-5">
      <div class="d-flex flex-wrap justify-content-center">
        <a href="https://www.logicbus.com.mx/digilent"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/digilent.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/siglent"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/siglent.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/futek"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/futek.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/reign_power"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/reignpower.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/pico-technology"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/pico-tech.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/vitrek"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/vitrek.png" alt="" width="200px"></a>
        <a href="https://www.logicbus.com.mx/graphtec"><img class="m-3 gray-filter"
            src="https://www.logicbus.com.mx/imagenes/logo-fabricantes/graphtec.png" alt="" width="200px"></a>
      </div>
    </div>
  </section>

  <section id="magnitudes">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">Instrumentos de mediciones eléctricas</h2>
    </div>
    <div class="container">
      <h3><b> Magnitudes eléctricas</b> </h3>
      <p>
        hablaremos de las magnitudes eléctricas más conocidas y que utilizamos con más frecuencia, para ver su unidad y
        su método de medición. Dependiendo del instrumento podremos hacer la medición de forma directa o de forma
        indirecta, realizando algún cálculo sencillo.
      </p><br><br>

      <table class="table py-5">
        <thead class="thead-dark">
          <tr>
            <th>Magnitud</th>
            <th>Unidad de medida</th>
            <th>Instrumento de medición</th>
          </tr>
          <thead>
            <tr>
              <td>Tensión o Voltaje</td>
              <td>Volt (V)</td>
              <td>Voltímetro</td>
            </tr>
            <tr>
              <td>Intensidad de corriente</td>
              <td>Amper (A)</td>
              <td>Amperímetro o pinza amperométrica</td>
            </tr>
            <tr>
              <td>Resistencia</td>
              <td>Ohm (Ω)</td>
              <td>Óhmetro</td>
            </tr>
            <tr>
              <td>Capacidad</td>
              <td>Faradio (F)</td>
              <td>Multímetro</td>
            </tr>
            <tr>
              <td>Inductancia</td>
              <td>Henrio (H)</td>
              <td>Multímetro</td>
            </tr>
            <tr>
              <td>Potencia activa</td>
              <td>Watts (W)</td>
              <td>Vatímetros</td>
            </tr>
            <tr>
              <td>Potencia reactiva</td>
              <td>Volt Amper Reactivo (VAR)</td>
              <td>Multimedidor o medición indirecta</td>
            </tr>
            <tr>
              <td>Potencia aparente</td>
              <td>Volt Amper (VA)</td>
              <td>Multimedidor o medición indirecta</td>
            </tr>
            <tr>
              <td>Frecuencia</td>
              <td>Hertz (Hz)</td>
              <td>Multímetro o frecuencímetro</td>
            </tr>
      </table>


    </div><br>
    <div class="container">
      <h3><b>Tipo de corrientes</b> </h3>
      <div class="container">
        <div class="row">
          <div class="col-5 mt-3">
            <p>
              Antes de realizar cualquier tipo de medición con los instrumentos, hay que cerciorarse el tipo de
              corriente a medir:<b> Alterna o Continua </b>. En los instrumentos, se podrá visualizar dicha selección
              mediante los siguientes símbolos:
            </p>
          </div>
          <div class="col-sm-7">
            <div style="text-align: center;">
              <img src="imagenes/productos/corriente-alterna-continua.png" class="image_productos" width="300px"
                alt="corrientes alterna y corriente continua" title="corrientes alterna y corriente continua">
            </div>

          </div>
        </div>
        <div class="row my-5">
          <div class="col-sm-4">
            <div style="text-align: center;">
              <img src="imagenes/productos/corriente-alterna-continua.png" class="image_productos" width="300px"
                alt="corrientes alterna y corriente continua" title="corrientes alterna y corriente continua">
            </div>
          </div>
          <div class="col-8">
            <p>
              La Corriente Alterna (CA) oscila a frecuencias estándar de 50 Hz o 60 Hz según la región (50 Hz en Europa
              y Asia, 60 Hz en América del Norte). Los sistemas residenciales típicamente operan a voltajes de 110-120V
              o 220-240V, variando según el país. Además, la CA puede ser multifásica, comúnmente en sistemas
              trifásicos, donde tres voltajes de CA sincronizados y desfasados 120 grados entre sí proporcionan una
              entrega de energía más constante y eficiente, esencial para la distribución de energía y maquinaria
              industrial.
              <br>
              Por otro lado, la Corriente Continua (CC) fluye en una sola dirección sin frecuencia de oscilación. Sus
              voltajes operacionales varían ampliamente según el uso: desde 1.5V en baterías comunes hasta cientos de
              voltios en instalaciones solares más grandes. La CC proporciona un flujo constante de electricidad,
              crucial para dispositivos electrónicos sensibles.
            </p>
          </div>

        </div>

      </div>


    </div><br><br>
    <div class="container">
      <h3><b> Prefijos del Sistema Internacional</b> </h3>
      <p> Se utilizan para abreviar los valores de ciertas magnitudes y agilizar la escritura. las cuales estan basadas
        en exponentes de base 10. Un ejemplo seria la unidad kilo (K) esta basado en la base 10 exponente 3 o sea 1,000
        el cual es multiplicador en la unidad indicada. por otra parte las unidades pequeñas como el mili (m) es un
        exponente de -3 el cual equivale a 0.001 estas unidades mas pequeñas son muy utilies para indicar valores
        pequeños que facilitan su interpretacion resumiendo de una manera excelente los decimales.
      </p><br><br>
      <div style="text-align: center;">
        <table class="table py-5">
          <thead class="thead-dark">
            <tr>
              <th>Prefijo</th>
              <th>Símbolo</th>
              <th>Valor</th>
              <th>Unidades</th>
            </tr>
          </thead>

          <tr>
            <td>exa</td>
            <td>E</td>
            <td>10^18</td>
            <td>1,000,000,000,000,000,000</td>
          </tr>
          <tr>
            <td>peta</td>
            <td>P</td>
            <td>10^15</td>
            <td>1,000,000,000,000,000</td>
          </tr>
          <tr>
            <td>tera</td>
            <td>T</td>
            <td>10^12</td>
            <td>1,000,000,000,000</td>
          </tr>
          <tr>
            <td>giga</td>
            <td>G</td>
            <td>10^9</td>
            <td>1,000,000,000</td>
          </tr>
          <tr>
            <td>mega</td>
            <td>M</td>
            <td>10^6</td>
            <td>1,000,000</td>
          </tr>
          <tr>
            <td>kilo</td>
            <td>k</td>
            <td>10^3</td>
            <td>1,000</td>
          </tr>
          <tr>
            <td>hecto</td>
            <td>h</td>
            <td>10^2</td>
            <td>100</td>
          </tr>
          <tr>
            <td>deca</td>
            <td>da</td>
            <td>10^1</td>
            <td>10</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>10^0</td>
            <td>1</td>
          </tr>
          <tr>
            <td>deci</td>
            <td>d</td>
            <td>10^-1</td>
            <td>0.1</td>
          </tr>
          <tr>
            <td>centi</td>
            <td>c</td>
            <td>10^-2</td>
            <td>0.01</td>
          </tr>
          <tr>
            <td>milli</td>
            <td>m</td>
            <td>10^-3</td>
            <td>0.001</td>
          </tr>
          <tr>
            <td>micro</td>
            <td>μ</td>
            <td>10^-6</td>
            <td>0.000001</td>
          </tr>
          <tr>
            <td>nano</td>
            <td>n</td>
            <td>10^-9</td>
            <td>0.000000001</td>
          </tr>
          <tr>
            <td>pico</td>
            <td>p</td>
            <td>10^-12</td>
            <td>0.000000000001</td>
          </tr>
          <tr>
            <td>femto</td>
            <td>f</td>
            <td>10^-15</td>
            <td>0.000000000000001</td>
          </tr>
          <tr>
            <td>atto</td>
            <td>a</td>
            <td>10^-18</td>
            <td>0.000000000000000001</td>
          </tr>

        </table>



      </div>
    </div>
  </section>



  <section id="formas-de-medicion">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">Instrumentos y formas de medición</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3  container-fluid">
          <div class="sticky-top" id="nextcategoria">
            <div class="globe-message">
              <center>
                <p><b>¡Clickeame!</b></p>
              </center>
            </div>
            <div class="image-container">
              <a class="button-text" href="#formas-de-medicion">
                <img src="images/multimetro/multimetro.svg" alt="Imagen estática" class="static-image">
                <img src="images/multimetro/perilla.svg" alt="Imagen girando" class="rotating-image" id="rotatingImage">
            </div> </a>
          </div>

        </div>
        <div class="col-9 container-fluid">
          <div style="position: relative; 
            box-sizing: border-box;
            ">
            <div class="slideClicker-container">
              <div class="slideClicker active">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Tensión</span></h2>
                    </div>
                  </div>
                </center>

                <p>
                  Para la medición de tensión se debe colocar el instrumento de forma <strong>PARALELA</strong> a
                  la carga o a la
                  fuente (tomacorriente, barra, etc.), es decir, si se mide tensión en un circuito monofásico
                  (220V) se debe colocar las puntas del instrumento una sobre la fase y la restante sobre el
                  neutro. Para la medición de tensión en un circuito trifásico (380V entre fases), se deben
                  colocar las puntas sobre cada una de las fases o entre el neutro y cualquiera de las 3 fases.
                </p>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/medicion-de-tension.png"
                    class="image_productos" width="500px" alt="Medicion de tension" title="Medicion de tension">
                </div><br>
                <p>
                  <strong>Aclaración:</strong> recordar que los instrumentos de uso más común poseen una
                  limitación
                  en los valores
                  de tensiones que son capaces de soportar. En general se pueden realizar mediciones de hasta
                  1000VCC (corriente continua) y 750VCA (en corriente alterna).
                </p>

              </div>




              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Intensidad de corriente</span></h2>
                    </div>
                  </div>
                </center>

                <p>
                  Medición de intensidad de corriente – “I” La corriente se mide colocando el instrumento sobre la
                  línea (fase) a la cual se desea medir. El método de conexión utilizada es en SERIE con la carga,
                  es decir, se conecta el instrumento sobre el
                  mismo cable. Para medir corriente se utiliza un AMPERÍMETRO, el cual puede ser analógico o
                  digital.
                </p><br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/unidad-de-medicion-a-amper.png"
                    class="image_productos" width="500px" alt="Unidad de medición a amper"
                    title="Unidad de medición a amper">
                </div><br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/medicion-de-tension.png"
                    class="image_productos" width="500px" alt="Medicion de tension" title="Medicion de tension">
                </div><br>
                <p>
                  Aclaración: se debe procurar tener una idea de la magnitud de la corriente a medir para
                  seleccionar la escala en el instrumento. Recordar que los instrumentos poseen protecciones
                  internas que limitan el paso de la corriente (fusibles).
                </p>
                <h3><strong>Medición de corriente con pinza amperométrica.
                  </strong></h3>
                <p>
                  Otro método de medición de corriente utilizado es con el uso de <strong>PINZA
                    AMPEROMETRICA</strong>, que
                  mediante la medición del campo magnético generado por la corriente, es traducida a valor de
                  corriente en Ampers. Permite medición en <strong>CORRIENTE CONTINUA y CORRIENTE
                    ALTERNA</strong>.
                </p>
                <h3><strong><i>IMPORTANTE:</i></strong></h3>
                <p>
                  Se debe tener especial cuidado a la hora de medir corriente mediante la pinza, ya que se debe
                  hacer de a un cable a la vez para evitar interferencias de los restantes o anulación de la
                  medición.
                </p>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/uso-correcto-medicion.png"
                    class="image_productos" width="500px" alt="Uso correcto de medicion"
                    title="Uso correcto de medicion">
                </div>
              </div>
              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Potencia</span></h2>
                    </div>
                  </div>
                </center>

                <p>
                  Se determinan 3 potencias asociadas a cargas con impedancias en corriente alterna: <br>
                </p>
                <b style="color: gray;">POTENCIA APARENTE</b><br>
                “S”: unidad VOLT-AMPER [VA] SUMA DE POTENCIAS<br><br>
                <b style="color: gray;">POTENCIA ACTIVA</b><br>
                “P”: unidad WATT [W] POTENCIA UTIL<br><br>
                <b style="color: gray;">POTENCIA REACTIVA</b><br>
                “Q”: unidad VOLT-AMPER REACTIVO [VAr] POTENCIA DE
                PÉRDIDA
                <br><br>
                <p>
                  <strong>Potencia Aparente:</strong> mediante la medición de la corriente y la tensión, se puede
                  determinar realizando el producto: <strong>S=V.I [VA]</strong>
                  Potencia Activa: dicha potencia puede ser obtenida directamente de la medición utilizando como
                  instrumento un <strong>VATIMETRO</strong>, que indica de forma directa el valor de potencia.
                  P=V.I.cos Ø [W]
                  Otra manera es conociendo de antemano el valor del cos(phi) y con la tensión y corriente medida
                  se determina.
                  Potencia Reactiva: esta potencia puede ser determinada con la tensión y corriente y tomando el
                  seno del ángulo Ø.
                  <strong>
                    Q=V.I.Ø [VAR]
                  </strong>
                </p>
                <br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/vatimetro.png" class="image_productos"
                    width="350px" alt="vatimetro" title="vatimetro">
                </div>
                <br>
                <p>
                  Para determinar todas las potencias, basta con realizar las siguientes mediciones
                  de: <strong>tensión, corriente y potencia activa.</strong>
                </p>
                <br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/medicion-de-potenicas.png"
                    class="image_productos" width="500px" alt="Medición de potencias" title="Medición de potencias">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/potencia-activa.png" class="image_productos"
                    width="500px" alt="potencia activa" title="potencia activa">
                </div>
              </div>





              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Factor de potencia (coseno de Ø)</span></h2>
                    </div>
                  </div>
                </center>

                <p>
                  El cofímetro o fasímetro es un instrumento para medir el factor de potencia (cosφ) de forma
                  directa.<br>
                  Para obtener el cos(φ), necesita obtener el desfasaje entre tensión y corriente, por lo que
                  posee 2 bobinas, una para corriente conectada en serie y otra para tensión conectada en paralelo
                  a la carga. La
                  conexión es similar al vatímetro.
                </p>
                <br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/cofimetro.png" class="image_productos"
                    width="350px" alt="cofimetro" title="cofimetro">
                </div>
                <p>
                  El coseno de Fi “cos(φ)” es la relación entre la potencia aparente y la potencia activa, es
                  decir, la potencia total absorbida y la potencia útil.
                </p>
                <br>
                <h3>Pinza cofimétrica</h3>
                <p>
                  Es un instrumento similar a la pinza amperométrica, pero con la prestación especial de poder
                  determinar el valor de coseno de Fi en cada fase, además de medición de potencias.
                  Para realizar la medición con la pinza, monofásico o trifásico, es necesario además de tomar la
                  medición de corriente, medir tensión para que internamente pueda verificar el desfasaje entre
                  estas variables.
                </p>
                <br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/pinza-cofimetrica.png"
                    class="image_productos" width="500px" alt="pinza cofimetrica" title="pinza cofimetrica">
                </div><br>
                <p>
                  instrumento similar a la pinza amperométrica, pero con la prestación especial de poder
                  determinar el valor de coseno de Fi en cada fase, además de medición de potencias.
                </p><br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/mediciones-con-pinza-cofimetrica.png"
                    class="image_productos" width="500px" alt="mediciones con pinza cofimetrica"
                    title="mediciones con pinza cofimetrica">
                </div><br>

              </div>


              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Frecuencia</span></h2>
                    </div>
                  </div>
                  <p>
                </center>

                La frecuencia de la CA es el número de ciclos por segundo de una onda sinusoidal de corriente
                alterna (CA). Dicho de otra forma, <strong>la frecuencia es la velocidad a la que la corriente
                  cambia de
                  sentido por segundo</strong>. Se mide en hercios (Hz), una unidad internacional de medida
                donde 1 hercio
                es igual a 1 ciclo por segundo. Frecuencia de línea de alimentación (normalmente de 50 Hz o 60
                Hz).
                <strong>Frecuencímetro de tablero</strong>. Utilizado de forma fija en tableros eléctricos, para
                sectores que
                requieren su medición constantemente.
                Medidor de variables eléctricas para tableros - SISTEMAS MONOFÁSICOS
                Instrumento de medición de Baja Tensión para tableros eléctricos, con montaje en riel din. Para
                bajos valores de corriente, (ejemplo: 100A), se instala de forma directa en la línea; para
                valores de corriente más elevados, se requiere la utilización de Transformadores de Corriente
                (TI) que reducen la corriente circulante por el instrumento, evitando su destrucción.
                </p>

              </div>


              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Multimedidores de variables eléctricas para tableros</span></h2>
                    </div>
                  </div>
                </center>

                <p>
                  Estos instrumentos son de uso fijo en tableros eléctricos de baja tensión, para el control de
                  distintas variables eléctricas. Los hay de distintas marcas y modelos, pero su instalación y
                  funcionamiento resultan similares. Como son instalados en
                  sectores de elevados consumos, generalmente son acompañados de Transformadores de Corriente
                  (TI).
                </p>
                <div style="text-align: center;">
                  <img
                    src="https://www.logicbus.com.mx/imagenes/productos/multimedidores-de-variables-para-tableros.png"
                    class="image_productos" width="500px" alt="multimedidores de variables para tableros"
                    title="multimedidores de variables para tableros">
                </div>
                <p>
                  Equipamiento para la medición de variables eléctricas. Tensión, corriente, potencia, frecuencia,
                  factor de potencia, etc.
                  Elección de lectura de las variables, mediante selección en pantalla; en cada una de las fases o
                  en su conjunto.
                </p>
                <h3><strong>
                    Transformador de corriente (TI):
                  </strong></h3>
                <p>
                  Generalmente en los tableros eléctricos se manejan valores de corriente de varias decenas y
                  centenas. Por tal motivo se
                  utilizan estos transformadores que toman una muestra de la corriente que circula por los
                  circuitos principales, evitando hacer circular dicha corriente por los instrumentos de
                  multivariables.
                </p>
                <h3><strong>Aplicaciones:</strong></h3>
                <p>
                  Paneles de control, Tableros eléctricos de BT., Monitor para generadores de energía, Manejo y
                  administración de la energía
                  Análisis de la calidad de la energía.
                </p>
                <h3><strong>Conexión de los medidores multiparámetros:</strong></h3>
                <p>
                  En baja tensión, para realizar las mediciones se necesita tomar muestras de tensión y corriente.
                  En el caso de la corriente se utilizan transformadores de corriente (TI) que toman una muestra
                  de la corriente total que circula por las fases y que en el instrumento se corrige al verdadero
                  valor. En el caso de la tensión se toma de forma directa (en BT); mientras que para uso en MT
                  (media tensión) se utilizan los transformadores de tensión que reducen dichos valores desde MT a
                  BT.
                </p>
                <br>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/conexion-trifasica.png"
                    class="image_productos" width="500px" alt="conexion trifasica" title="conexion trifasica">
                </div>

              </div>


              <div class="slideClicker">
                <center>
                  <div class="seccion" style="background: var(--blueS);">
                    <div class="col-center">
                      <h2><span>Partes de los instrumentos de medicion de uso comun</span></h2>
                    </div>
                  </div>
                </center>
                <div style="text-align: center;">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/instrumento-de-medicion-2.jpg"
                    class="image_productos" width="500px" alt="instrumento de medicion" title="instrumento de medicion">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/instrumento-de-medicion-1.jpg"
                    class="image_productos" width="500px" alt="instrumento de medicion" title="instrumento de medicion">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/amperometrica.jpg" class="image_productos"
                    width="500px" alt="amperometrica" title="amperometrica">
                  <img src="https://www.logicbus.com.mx/imagenes/productos/medicion-amperometrica.png"
                    class="image_productos" width="500px" alt="medicion amperometrica" title="medicion amperometrica">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>



  <!-- PRODUCTOS -->
  <section class="container-fluid" id="productos">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
    </div>
    <div class="row justify-content-center m-3">

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img src="https://www.logicbus.com.mx/imagenes/238/SDS1000DL-Series.png"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Osciloscopios</h3>
            <p class="light-black">Un osciloscopio es un instrumento de medición eléctrico en el cual se representa
              gráficamente la magnitud de una señal eléctrica con respecto al tiempo.</p>
            <div class="text-center">
              <a class="m-3" href="stand-osciloscopios"><button class="section-blue white med ico"><i
                    class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/prueba-y-medicion-osciloscopios"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/generador-funcinoes.jpg"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Generadores de funciones</h3>
            <p class="light-black">Un generador de señales, de funciones o de formas de onda es un dispositivo
              electrónico que genera patrones de señales periódicas o no periódicas, tanto analógicas como
              digitales.</p>
            <div class="text-center">
              <a class="m-3" href="generadores-de-funciones"><button class="section-blue white med ico"><i
                    class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/Generador-de-funciones_c_2939.html"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/analizadores-espectro.jpg"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Analizadores de espectro</h3>
            <p class="light-black">Los analizadores de espectro de Siglent incluyen el software EasySpectrum, que
              proporciona una interfaz de control remoto para los analizadores de espectro de la serie
              SIGLENT SSA3000. Se puede utilizar para facilitar la recopilación de datos, la
              supervisión remota y la secuencia de pruebas de conformidad previa.</p>
            <div class="text-center">
              <a class="m-3" href="analizador-espectro"><button class="section-blue white med ico"><i
                    class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/prueba-y-medicion-analizadores-de-espectro"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/fuentes-poder-banco.jpg"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Fuentes de poder de banco</h3>
            <p class="light-black">Las Fuentes de poder de banco permiten la selección del voltaje/corriente de salida
              por
              medio de un selector digital o comunicación serial/USB.</p>
            <div class="text-center">
              <a class="m-3" href="fuentes_programables"><button class="section-blue white med ico"><i
                    class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/Fuentes-de-poder-de-banco_c_2940.html"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/laboratorio-academico.png"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Laboratorio académico</h3>
            <p class="light-black">Son sistemas diseñados para realizar experimentos analógicos e incorpora fuente de
              poder
              CD, generador de funciones, voltímetro, amperímetro, interruptores de deslizamiento,
              potenciómetro, parlantes, protoboard y varios accesorios.</p>
            <div class="text-center">
              <a class="m-3" href="fuentes_programables"><button class="section-blue white med ico"><i
                    class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/Laboratorio-acadeacutemico_c_1364.html"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/mediciones-especificas-ac.jpg"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Mediciones específicas de AC</h3>
            <p class="light-black">Instrumentos de medicioón para mediciones específicas de AC.</p>
            <div class="text-center">
              <a class="m-3"
                href="https://tienda.logicbus.com.mx/Consumo-y-an%C3%A1lisis-de-energ%C3%ADa-el%C3%A9ctrica_c_3194.html"><button
                  class="section-blue white med ico"><i class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3"
                href="https://tienda.logicbus.com.mx/Consumo-y-an%C3%A1lisis-de-energ%C3%ADa-el%C3%A9ctrica_c_3194.html"
                target="_blank"><button class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/multimetro.png"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Multímetros</h3>
            <p class="light-black">Los multímetros son instrumentos que agrupan varios equipos de medición tales como
              voltímetros, amperímetros, óhmetros, capacitómetros, inductómetros, frecuencímetros,
              etc.</p>
            <div class="text-center">
              <a class="m-3" href="multimetros"><button class="section-blue white med ico"><i class="fas fa-info"
                    aria-hidden="true"></i></button></a>
              <a class="m-3" href="multimetros" target="_blank"><button class="section-orange white med ico"><i
                    class="fas fa-shopping-cart" aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-5 m-3">
        <div class="row section-white border-blue px-1 py-3 align-items-center justify-content-center"
          style="height: 100%;">
          <div class="col-6 col-md-4"><img
              src="https://www.logicbus.com.mx/images/categorias/2022/prueba-medicion/tacometro.png"
              alt="Robots Colaborativos" width="100%"></div>
          <div class="col-12 col-md-8">
            <h3 class="blue font-weight-bold text-center">Tacómetros</h3>
            <p class="light-black">Tacómetros de prueba de velocidad, digital de contacto o no contacto.</p>
            <div class="text-center">
              <a class="m-3" href="https://tienda.logicbus.com.mx/Tac%C3%B3metros_c_2943.html"><button
                  class="section-blue white med ico"><i class="fas fa-info" aria-hidden="true"></i></button></a>
              <a class="m-3" href="https://tienda.logicbus.com.mx/Tac%C3%B3metros_c_2943.html" target="_blank"><button
                  class="section-orange white med ico"><i class="fas fa-shopping-cart"
                    aria-hidden="true"></i></button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- CATALOGOS -->
  <section id="doc" class="mb-5 ">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">CATÁLOGOS</h2>
    </div>

    <div class="d-flex flex-wrap justify-content-center text-center">

      <div class="m-3">
        <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/313/2023-CATALOG-MASTER-June20231.pdf"
          target="_blank">
          <img src="https://logicbus.com.mx/pdf/313/digilent-catalogo-2023.jpg" alt="Ver archivo pdf" class="imgBorde"
            width="250px" height="325px"><br>

        </a>
      </div>
      <div class="m-3">
        <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/02/icp-das-Line-Card%202023-SPANISH.pdf"
          target="_blank">
          <img src="https://www.logicbus.com.mx/pdf/02/linecard-icp-das-2023.PNG" alt="Ver archivo pdf" class="imgBorde"
            width="250px" height="325px"><br>

        </a>
      </div>
      <div class="m-3">
        <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/USA/Picotech-catalogo.pdf"
          target="_blank">
          <img src="https://logicbus.com.mx/pdf/catalogos/Picotech-catalogo.JPG" alt="Ver archivo pdf" class="imgBorde"
            width="250px" height="325px"><br>

        </a>
      </div>
      <div class="m-3">
        <a class="blue link-orange"
          href="https://www.logicbus.com.mx/pdf/catalogos/Siglent-Guia-de-Instrumentos-ESP.pdf" target="_blank">
          <img src="https://logicbus.com.mx/pdf/catalogos/Catalog-Siglent.JPG" alt="Ver archivo pdf" class="imgBorde"
            width="250px" height="325px"><br>

        </a>
      </div>
      <div class="m-3">
        <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/vitrek-catalogo.pdf"
          target="_blank">
          <img src="https://logicbus.com.mx/pdf/catalogos/portada-catalogo-vitrek.jpg" alt="Ver archivo pdf"
            class="imgBorde" width="250px" height="325px"><br>

        </a>
      </div>
    </div>
  </section>

  <!-- ARTICULOS -->
  <section class="container-fluid" id="articulos">
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">ARTICULOS</h2>
    </div>
    <div class="text-center">
      <div class="d-flex justify-content-center flex-wrap">
        <div class="m-3">
          <a href="https://www.logicbus.com.mx/blog/errores-comunes-al-usar-un-osciloscopio-y-como-evitarlos/"
            target="_blank"><img
              src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/10/Errores-comunes-al-usar-un-osciloscopio-y-como-evitarlos-1024x512.png"
              alt="Descubre las Innovadoras Opciones de Interfaz para Teclados Metálicos: Desde USB hasta CAN y más"
              width="350px" height="190px" class="imgBorde"></a>
        </div>
        <div class="m-3">
          <a href="https://www.logicbus.com.mx/blog/como-los-analizadores-de-espectro-de-siglent-facilitan-el-diseno-de-circuitos-de-rf/"
            target="_blank"><img
              src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/06/Como-los-Analizadores-de-Espectro-de-SIGLENT-Facilitan-el-Diseno-de-Circuitos-de-RF-1024x512.jpg"
              alt="Errores comunes al usar un osciloscopio y cómo evitarlos" width="350px" height="190px"
              class="imgBorde"></a>
        </div>
        <div class="m-3">
          <a href="https://www.logicbus.com.mx/blog/cuando-se-utilizan-medidores-de-calidad-de-energia/"
            target="_blank"><img
              src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/Cuando-se-utilizan-Medidores-de-Calidad-de-Energia-1024x512.png"
              alt="Cuando se utilizan Medidores de Calidad de Energía" width="350px" height="190px"
              class="imgBorde"></a>
        </div>
      </div>
      <a class="button button-circle-whiteb button-text my-3"
        href="https://www.logicbus.com.mx/blog/category/prueba-y-medicion/" target="_blank">Ver todos</a>
    </div>
  </section>


  <!-- VIDEOS -->
  <div class="container my-5" id="video">
    <h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
  </div>
  <div class="container">
    <div class="row justify-content-center my-5">
      <div class=" col-md-4 my-3">
        <div class="embed-container">
          <iframe width="auto" src="https://www.youtube.com/embed/iwvTwOwwojE?si=sCj2Bb7JA8Y0rgGP"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-md-4 my-3">
        <div class="embed-container">
          <iframe width="auto" src="https://www.youtube.com/embed/bydYy0cPL6Y?si=3Ev1_R3QBqGgQS1p"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-md-4 my-3">
        <div class="embed-container">
          <iframe width="auto" src="https://www.youtube.com/embed/f74-BpeOoCk?si=Q0bRAcT4Uc71D7rT"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>






  <!--Contacto-->
  <div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
      <h2 class="title white text-uppercase">conoce más sobre NUESTRAS SOLUCIONES DE PRUEBA Y MEDICIÓN</h2>
      <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su proyecto.
      </span>
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


  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>

  <script src="libreria/multimetro.js"></script>


</body>
<?php echo $var_footer; ?>

</html>