<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html> 


<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>RFID, Inc.: Etiquetas y Lectores RFID - UHF, Pasivas, HF</title>
  <meta name="description" content="RFID, Inc. es una empresa de ingeniería especializada en RFID y fabricante de lectores y etiquetas RFID">
  <meta name="keywords" content="Logicbus, RFID,Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco,etiqueta RFID, lector de etiquetas, ondas de radio, seguimiento del inventario y la emisión de boletos, protocolos de comunicación , RFID Inc. handhel, antena, radio frecuencia, identificacion de radio frecuencia,radio frecuencia rfid">
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
    <h1 class="sr-only">RFID</h1>
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
            <li class="breadcrumb-item active" aria-current="page">RFID Inc</li>
          </ol>
        </nav>
        <div class="">
          <img class="img-fluid" src="imagenes/rfid/RFID-equipos-de-radiofrecuencia.webp" alt="Identificación por radiofrecuencia - RFID - Logicbus" title="Identificación por radiofrecuencia - RFID - Logicbus" width="100%">
        </div><br>
        <p class="text-justify"><b>RFID</b>, Inc. es una empresa de ingeniería especializada en el desarrollo personalizado de RFID, así como en la fabricación de sistemas de lectura y etiquetas RFID. Es de propiedad y operación estadounidense, el 99% de los productos se fabrican en EE. UU. </p>
        <h2><b>¿Qué es RFID?</b></h2>
        <p class="text-justify">La identificación por radiofrecuencia (RFID) es un pequeño chip, o etiqueta RFID, unida a algún objeto que un lector de etiquetas puede leer a corto alcance a través de ondas de radio. Estos artículos pueden estar cerca o separados y se utilizan en diversas aplicaciones, desde tarjetas de crédito, emisión de boletos y hasta el seguimiento del inventario.</p>
      </div>
    </div>
    <div class="divCentrado">
      <div class="gridContAbajo">
        <div class="griditemContB">

          <h2><b>Componentes del RFID</b></h2>
          <p class="text-justify">Pueden desglosarse como una etiqueta (transpondedor), un lector, una antena y a veces una interfaz. En ocasiones el lector y la antena están integrados dentro del mismo equipo, o pueden ser 2 componentes separados. En algunos casos se agrega a esta arquitectura una interfaz que puede traducir datos a otros protocolos de comunicación y/o administrar una red de muchos lectores.</p>
          <h2><b>Frecuencia</b></h2>
          <p class="text-justify">Varias líneas de productos de frecuencia incluyen 13,56 MHz, 125 KHz, 148 KHz y 433,92 (UHF). La amplia gama de frecuencias permite rangos de lectura de 1 mm a 2,000 pies para servir a cualquier industria y aplicación.</p>
          <div class="text-center">
            <nav class="navMenuSuper">
              <ul>
                <li>
                  <a href="https://tienda.logicbus.com.mx/rfid" target="_blank">Ver en Tienda</a>
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
              </ul>
            </nav>
          </div>
        </div>
        <div class="griditemContB" class="text-center">>
          <a href="pdf/RFID-guia-productos.pdf"><img class="imgBorde img250" src="pdf/RFID-guia-productos.webp" alt="Guía de productos RFID"><br><b>Guía de Productos</b></a>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="seccion" id="">
        <div class="col-center">
          <h2><span>Productos</span></h2>
        </div>
      </div>
    </div>
    <div class="divCentrado">
      <div class="tabla_subcategorias_grid my-5 textoJus">
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/UHF-A99V_p_34404.html">
              <img src="images/categorias/2023/rfid/uhf-a99v.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/UHF-A99V_p_34404.html">
              <h3>UHF-A99V</h3>
            </a>
            <p class="text-justify">>Modelo UHF-A99V Antena UHF de 915 MHz, 9,75x8,5x2,5", ABS, polarización vertical, 9dBi, conector N</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/UHF-A99V_p_34404.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" class="text-center">
            <a href="https://tienda.logicbus.com.mx/A7628M-HT_p_34470.html">
              <img src="images/categorias/2023/rfid/a7628m-ht.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto"  class="text-left">
            <a href="https://tienda.logicbus.com.mx/A7628M-HT_p_34470.html">
              <h3>A7628M-HT</h3>
            </a>
            <p class="text-justify">Modelo A7628M-HT ABS/Nylon Etiqueta de alta temperatura 300C, montaje de metal, carbón, 76x28x17 mm, UHF 902-928 MHz RFID pasivo</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/A7628M-HT_p_34470.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" class="text-center">
            <a href="https://tienda.logicbus.com.mx/3048E-BAT_p_34511.html">
              <img src="images/categorias/2023/rfid/3048E-BAT.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" class="text-left">
            <a href="https://tienda.logicbus.com.mx/3048E-BAT_p_34511.html">
              <h3>3048E-BAT</h3>
            </a>
            <p class="text-justify"">Batería de iones de litio de repuesto para el lector RFID UHF portátil modelo 3048E</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/3048E-BAT_p_34511.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/3048E-MNT_p_34513.html">
              <img src="images/categorias/2023/rfid/3048E-MNT.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/3048E-MNT_p_34513.html">
              <h3>3048E-MNT</h3>
            </a>
            <p align="justify">El soporte para el lector RFID UHF portátil modelo 3048E se engancha fácilmente y asegura Android o iPhone en su lugar</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/3048E-MNT_p_34513.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/SPRA18-8080-12C_p_35075.html">
              <img src="images/categorias/2023/rfid/spra18-8080-12c.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/SPRA18-8080-12C_p_35075.html">
              <h3>SPR/A18-8080-12C</h3>
            </a>
            <p class="text-justify">Modelo SPR/A18-8080-12C Combinación de antena/lector RFID UHF de 915 MHz de una sola pieza, 18" cuadradas, Modbus TCP/USB/Serial, 12dBi, polarización circular</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/SPRA18-8080-12C_p_35075.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
        <div class="row row-striped divColor">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html">
              <img src="images/categorias/2023/rfid/s4-8050-04.webp" alt="" title="" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html">
              <h3>S4-8050-04</h3>
            </a>
            <p class="text-justify">Modelo S4-8050-04 Lector RFID UHF de 915 MHz, TCPIP Ethernet/USB/Serie, 24 V CC, 4 puertos de antena</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/S4-8050-04_p_35113.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.webp" alt="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="seccion" id="articulos">
        <div class="col-center">
          <h2><span>Articulos</span></h2>
        </div>
      </div>
    </div>
    <div class="gridContCuatro">
      <div class="griditemContC" class="text-center">
        <div class="cardArticulos borange">
          <div class="text-center"><a href="https://www.logicbus.com.mx/blog/guia-de-etiquetas-de-rfid/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/RFID-Guia-etiquetas.webp" width="100%" alt="Guía de etiquetas de RFID"></a>
          </div>
          <div class="">
            <a href="https://www.logicbus.com.mx/blog/guia-de-etiquetas-de-rfid/">
              <h3 class="TituloArticulo">Guía de etiquetas de RFID</h3>
            </a>
            <p class="DesArticulo" class="text-justify">>
              La identificación por radiofrecuencia (RFID) es un pequeño chip, o etiqueta RFID, unida a algún objeto que un lector de etiquetas puede leer a corto alcance a través de ondas de radio.<br>
              <div class="text-center">
                <button class="btnVerMas"><a class="aSinLinea" href="https://www.logicbus.com.mx/blog/guia-de-etiquetas-de-rfid/" target="_blank"><span>Ver más</span></a></button>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="griditemContC" class="text-justify">>
        <div class="cardArticulos borange">
          <div class="text-center">
            <a href="https://www.logicbus.com.mx/blog/etiquetas-rfid-para-vehiculos/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/RFID-ETIQUETAS-VEHICULOS.webp" width="100%" alt="Etiquetas RFID para vehículos">
            </a>
          </div>
          <div class="">
            <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/etiquetas-rfid-para-vehiculos/" target="_blank">ETIQUETAS RFID PARA VEHÍCULOS</a></h3>
            <p class="DesArticulo" class="text-justify">
              La tecnología RFID y sus etiquetas ha venido a facilitar nuestras aplicaciones de control sobre nuestros productos, inventarios, vehículos, etc.<br>
              <div class="text-center">
                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/etiquetas-rfid-para-vehiculos/" target="_blank"><span>Ver más</span></a></button>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="griditemContC" class="text-justify">
        <div class="cardArticulos borange">
          <div class="text-center">
            <a href="https://www.logicbus.com.mx/blog/control-de-acceso-de-personas-con-rfid/" target="_blank">
              <img class="imgBorde" src="images/articulos-portadas/RFID-acceso-personas.webp" width="100%" alt="Control de acceso de personas inalámbrico">
            </a>
          </div>
          <div class="">
            <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/control-de-acceso-de-personas-con-rfid/" target="_blank">Control de acceso de personas con RFID</a></h3>
            <p class="DesArticulo" class="text-justify">
              El control de acceso de personas permite administrar y asegurar el acceso a edificios y sitios mediante la detección de credenciales de empleados en tiempo real y sin contacto.<br>
              <div class="text-center">
                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/control-de-acceso-de-personas-con-rfid/" target="_blank"><span>Ver más</span></a></button>
              </div>
            </p>
          </div>
        </div>
      </div>
      <div class="griditemContC" class="text-center">
        <div class="cardArticulos borange">
          <div class="text-center"><a href="https://www.logicbus.com.mx/blog/rfid-y-sus-aplicaciones-industriales/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/RFID-aplicaciones-industriales.webp" width="100%" alt="RFID y sus aplicaciones industriales"></a>
          </div>
          <div class="">
            <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/rfid-y-sus-aplicaciones-industriales/" target="_blank">RFID y sus aplicaciones industriales</a></h3>
            <p class="DesArticulo" class="text-justify">
              ¿Qué es RFID? La identificación por radiofrecuencia (RFID) es un pequeño chip, o etiqueta.
              <br>Pueden desglosarse como una etiqueta (transpondedor), un lector, una antena y a veces una interfaz. <br>
              <div class="text-center">
                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/rfid-y-sus-aplicaciones-industriales/" target="_blank"><span>Ver más</span></a></button>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="seccion" id="videos">
        <div class="col-center">
          <h2><span>Videos</span></h2>
        </div>
      </div>
    </div>
    <div class="gridContTres" id="id5">
      <div class="griditemContB" style="max-width: 300px;" align="center">
          <div class="video-container-youtube" data-video-id="ECHnjLc0VmY">
              <img loading="lazy" src="https://img.youtube.com/vi/ECHnjLc0VmY/hqdefault.jpg"
                  alt="Tecnología de punta RFID Handheld"
                  style="width:100%; border-radius:8px;">
              <div class="play-button"></div>
          </div>
      </div>
      <div class="griditemContB" style="max-width: 300px;" align="center">
        <div class="video-container-youtube" data-video-id="ECHnjLc0VmY">
            <img loading="lazy" src="https://img.youtube.com/vi/gHbP5S3bgq0/hqdefault.jpg"
                 alt="HANDHELD RFIDd"
                 style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div> 
    </div>
         <div class="griditemContB" style="max-width: 300px;" align="center">
        <div class="video-container-youtube" data-video-id="6068HfJ4FQw">
            <img loading="lazy" src="https://img.youtube.com/vi/6068HfJ4FQw/hqdefault.jpg"
                 alt="Optimización de tiempo con RFID - TRANSPORTE DE CARGA"
                 style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>  
      
  </div><br>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

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


</html>