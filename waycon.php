<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8">
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
  <title>Tecnología de medición para la industria y la investigación - WayCon</title>
  <meta name="description" content="WayCon es un fabricante de sensores de desplazamiento de precisión y sensores profesionales para la industria y la investigación.">
  <meta name="keywords" content="Logicbus, sensores, tipos de sensores, ¿Que es un sensor?, proteccion anticorrosiva, Hartcoat, WayCon,  Automatizacion, Proyecto">
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
    <h1 class="visually-hidden">Waycon</h1>
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA" id="subir">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">WayCon</li>
          </ol>
        </nav>
        <div class="">
          <img fetchpriority="high" src="images/banner/www/PorMarca/banner-waycon.webp" alt="WayCon" title="WayCon" width="100%">
        </div><br>
        <center>
          <nav class="navMenuSuper">
            <ul>
              <li>
                <a href="https://tienda.logicbus.com.mx/WayCon_bymfg_180-0-1.html">Ver en Tienda</a>
              </li>
              <li>
                <a href="#productos">Productos</a>
              </li>
              <li>
                <a href="#catalogos">Catálogos</a>
              </li>
              <li>
                <a href="#articulos">Artículos</a>
              </li>
              <li>
                <a href="#videos">Videos</a>
              </li>
              <li>
                <a href="#GuiasyManuales">Guias y Manuales</a>
              </li>
            </ul>
          </nav>
        </center>
        <p .text-justify">
          Desde 1999 Waycon desarrolla y produce sensores de alta precisión para la medición de distancias y posiciones. Ubicada en Munich y Brühl ofrece productos a nivel mundial que ahora se acercan a Latinoamérica y el resto del mundo con Logicbus.
        </p>
        <p .text-justify">
          Waycon ofrece la solución más adecuada en el ámbito de las técnicas de medición, aplicándose en numerosos sectores de la industria y la investigación. Los productos fabricados en Taufkirchen son sometidos a estrictos controles de calidad y distribuidos a nuestros clientes sin excepciones con un certificado de calibración.
        </p>
      </div>
    </div>
    <div class="griditemContB">
      <div class="gridContMitad">
        <div class="griditemContB"><br>
          <p>Los sensores compactos son rápidos y fáciles de montar. Gracias a su alta confiabilidad, durabilidad y precisión, los sensores de alambre de extracción WayCon se utilizan en todas las áreas de investigación e industria.</p>
          <ul>
            <li>Robusta carcasa de aluminio, cable de medición de acero inoxidable</li>
            <li>Velocidad de desplazamiento hasta 10 m/s</li>
            <li>Versiones especiales para cilindros hidráulicos, aplicaciones marítimas.</li>
            <li>Principio de medición redundante por medio de potenciómetros dobles posibles.</li>
            <li>Opcional con protección anticorrosiva Hartcoat® y cable de tracción de coramida.</li>
            <li>Diseños específicos del cliente.</li>
            <li>Alternativamente mecanismo de extracción de alambre puro.</li>
          </ul>
        </div>
        <div class="griditemContB">
          <center>
            <div class="seccion" id="catalogos">
              <div class="col-center">
                <h2><span>Catálogos</span></h2>
              </div>
            </div>
            <div class="gridContMitad">
              <div class="griditemContB">
                <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Product-Overview-WayCon.pdf" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" class="imgBorde img250" src="imagenes/catalogos/portada-waycon.webp"  style="border: solid;" alt="Portada Waycon Product Overview"></a>
              </div>
              <div class="griditemContB">
                <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Presentation-Waycon.pdf" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" class="imgBorde img250" src="imagenes/catalogos/portada-presentacion-waycon.webp" style="border: solid;" alt="Portada presentación Waycon"></a>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
    <!--guias y manuales -->
<center>
  <div class="seccion" id="GuiasyManuales">
    <div class="col-center">
      <h2><span>Guias y Manuales</span></h2>
    </div>
  </div>
</center>
<div class="d-flex justify-content-center"> <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=waycon">
<div class="hoverchange">
<img loading="lazy"  src="images/documentacion.svg" width="200px" class="mx-auto d-block"  alt="img docs" >
<button class=" button button-circle-white d-flex "><b> Documentación</b></button></div>  </a>
</div>
<!--fin manuales -->

    <center>
      <div class="seccion" id="productos">
        <div class="col-center">
          <h2><span>Productos</span></h2>
        </div>
      </div>
    </center>
    <div class="gridContCuatro">
      <div align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-ultrasonicos" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Sensores Ultrasonicos</a></b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/ultrasonido-removebg-preview.webp" alt="Sensores Ultrasonicos WAYCON" title="Sensores Ultrasonicos WAYCON">
            </div>
            <div align="center">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-ultrasonicos" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-laser" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Sensores láser</a></b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/laser-removebg-preview.webp" alt="Sensores láser WAYCON" title="Sensores láser WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-laser" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Potenciometro-lineal" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Potenciometro Lineal</a></b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/lineal-removebg-preview.webp" alt="Potenciometro Lineal WAYCON" title="Potenciometro Lineal WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Potenciometro-lineal" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Accesorios" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Accesorios</a></b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/K4P2M-S-M12-removebg-preview.webp" alt="Accesorios WAYCON" title="Accesorios WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Accesorios" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gridContTres" align="center">
      <div class="" align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-inductivos-sin-contacto" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Sensores Inductivos sin Contacto</a> </b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/inductivo-removebg-preview.webp" alt="Sensores Inductivos sin Contacto WAYCON" title="Sensores Inductivos sin Contacto WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensores-inductivos-sin-contacto" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="" align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h3 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensor-de-posicion-por-cable" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Sensor de posición por cable</a><br><br></b></h3>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="assets/images/282/transparent/cable-removebg-preview.webp" alt="Sensor de posición por cable WAYCON" title="Sensor de posición por cable WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Sensor-de-posicion-por-cable" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="" align="center">
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h2 class="titulos"><b><a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Codificadores-y-transductores-rotativos" title="Ir a Tienda Logicbus" rel="noopener noreferrer">Codificadores y Transductores Rotativos</a> </b></h2>
            </div>
            <div align="center">
              <img loading="lazy" class="img250" src="images/categorias/2022/pc-comunicaciones-industriales/AW5500C.webp" alt="Codificadores y Transductores Rotativos WAYCON" title="Codificadores y Transductores Rotativos WAYCON">
            </div>
            <div align="center" class="">
              <center>
                <a href="https://tienda.logicbus.com.mx/Sensores-y-Transductores-Sensores-Sensores-de-Posicion-y-Distancia-Codificadores-y-transductores-rotativos" title="Ir a Tienda Logicbus" rel="noopener noreferrer"><img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" style="max-width: 50px;"></a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <center>
      <div class="seccion" id="articulos">
        <div class="col-center">
          <h2><span>Artículos</span></h2>
        </div>
      </div>
    </center>
    <div class="gridContTres">
      <div class="griditemContC" align="center">
        <div class="cardArticulos borange">
          <center>
            <a href="https://www.logicbus.com.mx/blog/que-son-los-sensores-de-posicion-o-sensores-de-cable/" rel="noopener noreferrer">
              <img loading="lazy" class="imgBorde" src="imagenes/282/waycon-sensores-posicion.webp" width="100%" alt="¿Qué son los sensores de posición?">
            </a>
          </center>
          <div class="">
            <a href="https://www.logicbus.com.mx/blog/que-son-los-sensores-de-posicion-o-sensores-de-cable/">
              <h3 class="TituloArticulo">¿Qué son los sensores de posición o sensores de cable?</h3>
            </a>
            <p class="DesArticulo" .text-justify">
              Los sensores de cable o sensores de distancia por cable son productos rentables y compactos que miden la posición exacta o los cambios de lugar de objetos.<br>
              <center>
                <button class="btnVerMas"><a class="aSinLinea" href="https://www.logicbus.com.mx/blog/que-son-los-sensores-de-posicion-o-sensores-de-cable/" rel="noopener noreferrer"><span>Ver más</span></a></button>
              </center>
            </p>
          </div>
        </div>
      </div>
      <div class="griditemContC" align="center">
        <div class="cardArticulos borange">
          <center>
            <a href="https://www.logicbus.com.mx/blog/sensores-de-cable-en-la-gestion-de-residuos/" rel="noopener noreferrer">
              <img loading="lazy" class="imgBorde" src="imagenes/282/waycon-sensores-cable.webp" width="100%" alt="Sensores de cable en la gestión de residuos">
            </a>
          </center>
          <div class="">
            <a href="https://www.logicbus.com.mx/blog/sensores-de-cable-en-la-gestion-de-residuos/">
              <h3 class="TituloArticulo">El papel que desempeñan los sensores de cable en la gestión de residuos</h3>
            </a>
            <p class="DesArticulo" .text-justify">
              Los sensores de cable estirado de WayCon continúan brindando resultados de medición después de más de 10 años en condiciones extremas.<br>
              <center>
                <button class="btnVerMas"><a class="aSinLinea" href="https://www.logicbus.com.mx/blog/sensores-de-cable-en-la-gestion-de-residuos/" rel="noopener noreferrer"><span>Ver más</span></a></button>
              </center>
            </p>
          </div>
        </div>
      </div>
      <div class="griditemContC" align="center">
        <div class="cardArticulos borange">
          <center>
            <a href="https://www.logicbus.com.mx/blog/medicion-fiable-de-distancia-laser-sensor-de-laser-ldi/" rel="noopener noreferrer">
              <img loading="lazy" class="imgBorde" src="imagenes/282/waycon-distancia-laser.webp" width="100%" alt="Medición fiable de distancia laser">
            </a>
          </center>
          <div class="">
            <a href="https://www.logicbus.com.mx/blog/medicion-fiable-de-distancia-laser-sensor-de-laser-ldi/">
              <h3 class="TituloArticulo">¡Medición fiable de distancia láser!: Sensor de Láser LDI</h3>
            </a>
            <p class="DesArticulo" .text-justify">
              La serie de sensores de distancia láser LDI mide de forma rápida y fiable largas distancias de hasta 150 m, incluso en condiciones difíciles, con la máxima precisión de hasta ±1 mm.<br>
              <center>
                <button class="btnVerMas"><a class="aSinLinea" href="https://www.logicbus.com.mx/blog/medicion-fiable-de-distancia-laser-sensor-de-laser-ldi/" rel="noopener noreferrer"><span>Ver más</span></a></button>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="gridContMitad">
      <div class="griditemContB" align="center">
        <a href="">
          <img loading="lazy" src="imagenes/282/infografia-waycon.webp" class="imgBorde" width="100%" style="max-width: 600px;" alt="¿A que se dedica la compañia Waycon?">
        </a>
      </div>
      <div class="griditemContB">
        <center>
          <div class="seccion" id="videos">
            <div class="col-center">
              <h2><span>Videos</span></h2>
            </div>
          </div>
          <div class="">
            <div class="griditemContB" style="max-width: 300px;" align="center">
        <div class="video-container-youtube" data-video-id="devmg1a9Orc">
            <img loading="lazy" src="https://img.youtube.com/vi/devmg1a9Orc/hqdefault.jpg"
                 alt="Adquisición de datos con precisión por USB"
                 style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>
<div class="griditemContB" style="max-width: 300px;" align="center">
        <div class="video-container-youtube" data-video-id="clzaMxqw0aA">
            <img loading="lazy"  src="https://img.youtube.com/vi/clzaMxqw0aA/hqdefault.jpg"
                 alt="Adquisición de datos con precisión por USB"
                 style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>
<div class="griditemContB" style="max-width: 300px;" align="center">
        <div class="video-container-youtube" data-video-id="DQxY2kKBBdA">
            <img loading="lazy" src="https://img.youtube.com/vi/DQxY2kKBBdA/hqdefault.jpg"
                 alt="Adquisición de datos con precisión por USB"
                 style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>








        
        </center>
      </div>
    </div>
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function () {
var videoContainers = document.querySelectorAll('.video-container-youtube');

videoContainers.forEach(function (container) {
container.addEventListener('click', function () {
var videoId = this.dataset.videoId;

var iframe = document.createElement('iframe');
iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
'?autoplay=1&rel=0');
iframe.setAttribute('title', 'YouTube video player');
iframe.setAttribute('allow',
'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
);
iframe.setAttribute('allowfullscreen', '');

this.innerHTML = '';
this.appendChild(iframe);
});
});
});
</script>


  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?= $bootstrap_js ?>
  <?= $jquery_js ?>
  <?= $own_file_js ?>
</body>
<?= $var_footer ?>

</html>