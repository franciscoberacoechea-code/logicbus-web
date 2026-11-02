<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="preconnect" href="https://www.googletagmanager.com">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-31533636-1');
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-1007518778');
  </script>
  <title>Sealevel México soluciones de E/S serie y digitales Logicbus</title>
  <meta name="description" content="Sealevel ofrece soluciones de E/S serie y digitales incluyendo RS-232, RS-422 y RS-485 PCI, PCI de bajo perfil/bus universal, PC/104, PCMCIA, USB">
  <meta name="keywords" content="Logicbus,Mexico,Guadalajara,Argentina,Chile,Brasil,Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Sealevel, Sealevel México, Sealevel guadalajara, USB, E/S Digitales, 8111, 8112, 8115, 8203, 8205, 8206, 8208, 8221, 8224, 8232, Modbus RTU, 410U, 430U, 450U, 462U, entradas digitales, salidas digitales, entradas seriales, salidas seriales, e/s serial, e/s digital">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
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
    <h1 class="sr-only">Sealevel</h1>
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
            <li class="breadcrumb-item active" aria-current="page">Sealevel</li>
          </ol>
        </nav>
        <div class="">
          <img src="images/banner/www/PorMarca/BANNER-SEALEVEL-MZ23.webp" alt="Banner Sealevel México: Soluciones de E/S serie y digitales Logicbus" title="Sealevel" width="1200" height="250" style="width:100%; height:auto;">
        </div><br>
        <p style="text-align: justify;"><b>Sealevel</b> ofrece productos de software como <strong><a href="software-seamax" target="_blank" rel="noopener"> SeaMax</a></strong> y productos de hardware confiables e innovadores para permitir la conectividad y el control de las computadoras. Fabricamos más de 300 productos de E/S estándar con registro ISO 9001: 2015. Para satisfacer las necesidades en constante evolución de nuestros clientes, estamos desarrollando constantemente nuevos productos que aprovechan la tecnología emergente. Somos obsesivos y apasionados por lo que hacemos, desde el servicio al cliente hasta el diseño intuitivo y el soporte técnico. Hacemos nuestro trabajo lo mejor que podemos, porque entendemos que los productos que creamos ayudan a nuestros clientes a hacer que el mundo sea más fuerte, más seguro y mejor.
        </p>
        <p style="text-align: justify;"><b>Sealevel</b> ofrece soluciones de E/S serie y digitales incluyendo RS-232, RS-422 y RS-485 PCI, PCI de bajo perfil/bus universal, PC/104, PCMCIA, USB
        </p>
        <div class="text-center">
          <nav class="navMenuSuper">
            <ul>
              <li>
                <a href="https://tienda.logicbus.com.mx/SEALEVEL_bymfg_82-0-1.html" target="_blank" rel="noopener">Ver en Tienda</a>
              </li>
              <li>
                <a href="#productos">Productos</a>
              </li>
              <li>
              <a href="#GuiasyManuales">Guias y Manuales</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="divCentrado">
      <div class="text-center">
        <div class="seccion" id="catalogos">
          <div class="col-center">
            <h2><span>Catalogos</span></h2>
          </div>
        </div>
      </div>
      <div class="gridContMitad">
        <div class="griditemContB text-center">
          <a href="pdf/catalogos/SeaLevel-Catalogo-ESP.pdf" title="Ver Catálogo de Sealevel en Español (PDF)" target="_blank" rel="noopener">
            <img src="pdf/catalogos/SeaLevel-Catalogo-ESP.webp" class="imgBorde img250" alt="Portada del Catálogo Sealevel en español: Soluciones de E/S y Seriales" title="Catálogo de Sealevel en Español" loading="lazy" width="250" height="350">
            <br>Ver Catálogo de Sealevel ESP
          </a>
        </div>
        <div class="griditemContB text-center">
          <a href="pdf/catalogos/SeaLevel-Catalogo-ENG.pdf" title="Ver Catálogo de Sealevel en Inglés (PDF)" target="_blank" rel="noopener">
            <img src="pdf/catalogos/SeaLevel-Catalogo-ENG.webp" class="imgBorde img250" alt="Portada del Catálogo Sealevel en inglés: Soluciones de E/S y Seriales" title="Catálogo de Sealevel en Inglés" loading="lazy" width="250" height="350">
            <br>Ver Catálogo de Sealevel ENG
          </a>
        </div>
      </div>
      <div class="text-center">
        <div class="seccion" id="GuiasyManuales">
          <div class="col-center">
            <h2><span>Guias y Manuales</span></h2>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center"> 
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=sealevel">
          <div class="hoverchange">
            <img  src="images/documentacion.svg" width="200" height="200" class="mx-auto d-block"  alt="Icono de Documentación Técnica y Manuales de Sealevel" loading="lazy">
            <button class=" button button-circle-white d-flex "><b> Documentación</b></button>
          </div>  
        </a>
      </div>
      <div class="text-center">
        <div class="seccion" id="productos">
          <div class="col-center">
            <h2><span>Productos</span></h2>
          </div>
        </div>
      </div>
      <div class="tabla_subcategorias_grid">
        <h3 class="text-center"><b>USB - E/S Digitales</b></h3>
        <?php 
          // Array de productos con datos de imagen y link (se asume que las imágenes son 150x150)
          $productos_usb_dio = [
            ['id' => '8111', 'desc' => 'Módulo USB SeaDAC Lite DIO-8, con 4 entradas digitales opticamente aisladas y 4 salidas de relevador de estado solido (maximo 60V 500mA).', 'img' => 'imagenes/03/8111.webp', 'alt' => '8111 - Módulo USB SeaDAC Lite DIO-8, con 4 entradas digitales opticamente aisladas y 4 salidas de relevador de estado solido (maximo 60V 500mA).', 'tienda_link' => 'https://tienda.logicbus.com.mx/8111_p_5269.html'],
            ['id' => '8112', 'desc' => 'Módulo USB SeaDAC Lite con 4 entradas aisladas ópticamente, 4 salidas de relé en forma C Adaptador de interfaz digital.', 'img' => 'imagenes/03/8111.webp', 'alt' => '8112 - Módulo USB SeaDAC Lite con 4 entradas aisladas ópticamente, 4 salidas de relé en forma C Adaptador de interfaz digital - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8112_p_5271.html'],
            ['id' => '8115', 'desc' => 'Módulo USB SeaDAC Lite con 4 relevadores tipo Reed de contacto seco, voltaje max. 60Vdc, corriente max. 500mA. Incluye cable USB con conector SeaLATCH.', 'img' => 'imagenes/03/8111.webp', 'alt' => '8115 - Módulo USB SeaDAC Lite con 4 relevadores tipo Reed de contacto seco, voltaje max. 60Vdc, corriente max. 500mA. Incluye cable USB con conector SeaLATCH - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8115_p_5277.html'],
            ['id' => '8203', 'desc' => 'USB al adaptador de canal 48 TTL Interfaz Digital.', 'img' => 'imagenes/03/8203.webp', 'alt' => '8203 - USB al adaptador de canal 48 TTL Interfaz Digital - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8203_p_5281.html', 'estado' => ' DESCONTINUADO'],
            ['id' => '8205', 'desc' => 'USB al adaptador de canal 96 TTL Interfaz Digital.', 'img' => 'imagenes/03/8203.webp', 'alt' => '8205 - USB al adaptador de canal 96 TTL Interfaz Digital - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8205_p_5285.html', 'estado' => ' DESCONTINUADO'],
            ['id' => '8206', 'desc' => 'USB de 8 Entradas con Aislamiento Óptico/8 salidas de relé de forma C adaptador de interfaz digital.', 'img' => 'imagenes/03/8208.webp', 'alt' => '8206 - USB de 8 Entradas con Aislamiento Óptico/8 salidas de relé de forma C adaptador de interfaz digital - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8206_p_5289.html', 'estado' => ' DESCONTINUADO'],
            ['id' => '8208', 'desc' => 'USB a 16 salidas relé Reed adaptador de interfaz digital.', 'img' => 'imagenes/03/8208.webp', 'alt' => '8208 - USB a 16 salidas relé Reed adaptador de interfaz digital - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8208_p_5291.html', 'estado' => ' DESCONTINUADO'],
            ['id' => '8221', 'desc' => 'Adaptador digital USB de 16 entradas aisladas y 16 salidas de relevador tipo Reed.', 'img' => 'imagenes/03/8221.webp', 'alt' => '8221 - Adaptador digital USB de 16 entradas aisladas y 16 salidas de relevador tipo Reed - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8221_p_5294.html'],
            ['id' => '8224', 'desc' => 'Adaptador digital USB de 32 salidas de relevador tipo Reed.', 'img' => 'imagenes/03/8221.webp', 'alt' => '8224 - Adaptador digital USB de 32 salidas de relevador tipo Reed - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8224_p_5297.html'],
            ['id' => '8232', 'desc' => 'Adaptador digital USB con 8 entradas y 8 salidas de relevador alta corriente tipo C.', 'img' => 'imagenes/03/8221.webp', 'alt' => '8232 - Adaptador digital USB con 8 entradas y 8 salidas de relevador alta corriente tipo C - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/8232_p_5300.html']
          ];

          $productos_usb_modbus = [
            ['id' => '410U', 'desc' => 'Módulo USB (Modbus RTU) con 16 entradas aisladas (5-30Vdc) y 16 salidas a relevador Reed (60Vdc @ 500mA). Alimentacion: 9-30Vdc, compatible con Windows y Linux. E/S expandibles hasta 246, Incluye cable USB de 6´ tipo A a USB tipo B (CA356).', 'img' => 'imagenes/03/410U.webp', 'alt' => '410U - Módulo USB de 16 entradas con aislamiento/16 salidas de relé Reed - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/410U_p_5124.html'],
            ['id' => '430U', 'desc' => 'Módulo USB con 32 entradas ópticamente aisladas por medio de la conexión USB con la interfaz del 430U. Las entradas pueden extenderse desde 5-30VDC y proporcionar aislamiento externo de 300V.', 'img' => 'imagenes/03/410U.webp', 'alt' => '430U - Módulo USB con 32 entradas ópticamente aisladas por medio de la conexión USB con la interfaz del 430U. Las entradas pueden extenderse desde 5-30VDC y proporcionar aislamiento externo de 300V - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/430U_p_5143.html'],
            ['id' => '450U', 'desc' => 'Modulo USB (Modbus RTU) con 16 salidas a rele tipo C ( 60VDC @ 2A). Alimentacion: 9-30Vdc, montaje en riel DIN, compatible con Windows y Linux. Entradas y salidas expandibles hasta 246, Incluye cable USB de 6´ tipo A a USB tipo B (CA356).', 'img' => 'imagenes/03/410U.webp', 'alt' => '450U - Modulo USB (Modbus RTU) con 16 salidas a rele tipo C ( 60VDC @ 2A). Alimentacion: 9-30Vdc, montaje en riel DIN, compatible con Windows y Linux. Entradas y salidas expandibles hasta 246, Incluye cable USB de 6´ tipo A a USB tipo B (CA356) - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/450U_p_5158.html'],
            ['id' => '462U', 'desc' => 'Modulo USB (Modbus RTU) con 96 canales TTL mediante 2 conectores hembra DB78, conexion mediante cable CA237 (opcional), Alimentacion: 9-30Vdc, Soporta Windows y Linux. E/S expandibles hasta 246, Incluye cable USB de 6´ tipo A a USB tipo B (CA356).', 'img' => 'imagenes/03/462U.webp', 'alt' => '462U - Modulo USB (Modbus RTU) con 96 canales TTL mediante 2 conectores hembra DB78, conexion mediante cable CA237 (opcional), Alimentacion: 9-30Vdc, Soporta Windows y Linux. E/S expandibles hasta 246, Incluye cable USB de 6´ tipo A a USB tipo B (CA356) - Sealevel México', 'tienda_link' => 'https://tienda.logicbus.com.mx/462U_p_5164.html']
          ];

          // Función para renderizar filas de productos (se podría incluir en libreria.php)
          function render_product_rows($productos) {
            foreach ($productos as $producto) {
              $id = $producto['id'];
              $desc = $producto['desc'];
              $img = $producto['img'];
              $alt = $producto['alt'];
              $tienda_link = $producto['tienda_link'];
              $estado = $producto['estado'] ?? '';
              
              // Se aplica 'loading="lazy"', 'width' y 'height' a las imágenes
              // Se añade 'rel="noopener"' a los enlaces externos
              // Se asume 150x150 como tamaño visible de los productos
              echo '<div class="row row-striped tabla_subcategorias_row">';
              echo '<div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">';
              echo '<a href="' . $id . '">';
              echo '<img src="' . $img . '" alt="' . htmlspecialchars($alt) . '" title="' . htmlspecialchars($alt) . '" loading="lazy" width="150" height="150" style="width: 60%; height: auto;">';
              echo '</a>';
              echo '</div>';
              echo '<div class="col-12 col-md-8 col-lg-8">';
              echo '<a href="' . $id . '">';
              echo '<h4>' . $id . $estado . '</h4>';
              echo '</a>';
              echo '<p>' . $desc . '</p>';
              echo '</div>';
              echo '<div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">';
              echo '<a href="' . $tienda_link . '" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank" rel="noopener">';
              // Se ajusta el icono del carrito a 30x30
              echo '<img src="images/shopping_cart.webp" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" loading="lazy" width="30" height="30" style="width: 100%; height: auto;">';
              echo '</a>';
              echo '</div>';
              echo '</div>';
            }
          }
        ?>

        <?php render_product_rows($productos_usb_dio); ?>
        
        <h3 class="text-center"><b>USB (Modbus RTU): E/S Digitales</b></h3>
        
        <?php render_product_rows($productos_usb_modbus); ?>

      </div>
    </div>
  </div>
  <?php require("libreria/footer.view.php"); ?>
  
  <script src="<?php echo $bootstrap_js; ?>" defer></script>
  <script src="<?php echo $jquery_js; ?>" defer></script>
  <script src="<?php echo $own_file_js; ?>" defer></script>
</body>
<?php echo $var_footer; ?>

</html>