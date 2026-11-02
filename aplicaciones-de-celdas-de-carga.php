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
  <title>Aplicaciones de celdas de carga - Logicbus</title>
  <meta name="Nuestras celdas de carga, sensores de par y sensores de ejes múltiples están fabricados con una de las tecnologías más avanzadas en la industria.">

  <meta name="keywords" content="Logicbus,sensores de celdas de carga,tipos de celdasd de carga,celdas de carga para medir fuerza,celda de carga industrial,venta de celdas de carga,tipos de aplicaciones de celdas de carga,celdas de carga,celda de carga,sensores de celdas de carga,loadcell,load cell,futek,aplicaciones de celdas de carga,industria automotriz,Industria de agricultura,futek,aplicaciones de celdas de carga,Pesaje de Lotes,Medidor de flujo de masa,Medición De Silos,Dispensación De Tanque,Controlador De Nivel De Tanque Dual,Medición De La Carga De Gestión De Residuos,Sistema De Prueba De Resorte,Medición Del Tanque De Fermentación Del Oktoberfest,¿Como implementar una celda de carga en la industria?,celdas de carga Mexico,celdas de carga Guadalajara,celdas de carga Puebla,celdas de carga Sonora,celdas de carga Baja California,celdas de carga Monterrey,celdas de carga Chihuahua">
  <meta name="description" content="Nuestras celdas de carga, sensores de par y sensores de ejes múltiples están fabricados con una de las tecnologías más avanzadas en la industria.">


  <meta charset=" UTF-8">
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
            <li class="breadcrumb-item"><a href="soluciones-en-la-industria-logicbus" class="blue link-orange">Aplicaciones en la industria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Aplicaciones de celdas de carga</li>
          </ol>
        </nav>
        <div class="div_pc">
          <br>
          <h1>Aplicaciones de celdas de carga</h1>
          <br>
          <p align="justify">
            Nuestras celdas de carga, sensores de par y sensores de ejes múltiples están fabricados con una de las tecnologías más avanzadas en la industria de los sensores: la tecnología de galgas extensométricas de lámina metálica. Apoyan las tecnologías emergentes, innovan las establecidas, salvan la vida de las personas e incluso ayudan a leer sus mentes.
            <a class="ver-mas-contacto" href="#contacto-celdas"><span style="color: white;">Contactar</span></a>
          </p>
          <br>
          <div align="center">
            <div class="contenedor_img">
                <iframe width="560" height="315"
                    src="https://youtube.com/embed/Z0WJje1Qog8?si=ovQ5OCKl5Q3Q9P0H" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                </iframe>
            </div>
        </div>
<br>        
          <p align="justify">
            Explore estas aplicaciones de medición de fuerza de múltiples industrias para ayudarlo a seleccionar el mejor producto para su proyecto. Encontrará muchas aplicaciones interesantes de celdas de carga de galgas extensométricas, así como aplicaciones innovadoras de medición de par para diferentes tipos de sensores de par.
          </p>
        </div>
        <?php
        menuMovilApp();
        ?>
        <!-- Termina Menu Movil -->
        <div class="table-responsive">
          <table id="tabla_lb" class="table tabla_lb table-bordered" style="width:100%;">
            <thead>
              <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Imagen</th>
              </tr>
            </thead>

            <tbody>
              <?

              $data = file_get_contents("celdas-carga-app-futek.json");
              $products = json_decode($data, true);
              $productos = $products['activos'];
              $cnt = 1;
              if (count($products['activos']) > 0) {
                foreach ($productos as $product) {
              ?>
                  <tr>
                    <td width="25%"><a href="<?php echo htmlentities($product['link']); ?>"><?php echo htmlentities($product['titulo']); ?></a></td>
                    <td width="50%"><?php echo htmlentities($product['descripcion']); ?></a></td>
                    <td width="" align="center"><a href="<?php echo htmlentities($product['link']); ?>" target="_blank"> <img src="<?php echo htmlentities($product['img']); ?>" alt=""> </a> </td>
                  </tr>
              <?php $cnt = $cnt + 1;
                }
              } ?>
            </tbody>
          </table> <br><a href="#contacto-celdas" id="contacto-celdas"></a><br>
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


        <br><br>


        <script type="text/javascript">
          window.woorankAssistantOptions = window.woorankAssistantOptions || {};
          window.woorankAssistantOptions.url = 'logicbus.com.mx';
          window.woorankAssistantOptions.assistantPublicKey = '21370538c6be6c20207e5badf795fc7d';
          window.woorankAssistantOptions.collectWebVitals = true;
          (function() {
            var wl = document.createElement('script');
            wl.type = 'text/javascript';
            wl.async = true;
            wl.src = 'https://assistant.woorank.com/hydra/assistantLoader.latest.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wl, s);
          })();
        </script>
      </div>

    </div><!--  /main -->
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <?php echo $own_file_js; ?>
  <script>
    $(document).ready(function() {
      jQuery.fn.DataTable.ext.type.search.string = function(data) {
        return !data ?
          '' :
          typeof data === 'string' ?
          data
          .replace(/έ/g, 'ε')
          .replace(/ύ/g, 'υ')
          .replace(/ό/g, 'ο')
          .replace(/ώ/g, 'ω')
          .replace(/ά/g, 'α')
          .replace(/ί/g, 'ι')
          .replace(/ή/g, 'η')
          .replace(/\n/g, ' ')
          .replace(/[áÁ]/g, 'a')
          .replace(/[éÉ]/g, 'e')
          .replace(/[íÍ]/g, 'i')
          .replace(/[óÓ]/g, 'o')
          .replace(/[úÚ]/g, 'u')
          .replace(/ê/g, 'e')
          .replace(/î/g, 'i')
          .replace(/ô/g, 'o')
          .replace(/è/g, 'e')
          .replace(/ï/g, 'i')
          .replace(/ü/g, 'u')
          .replace(/ã/g, 'a')
          .replace(/õ/g, 'o')
          .replace(/ç/g, 'c')
          .replace(/ì/g, 'i') :
          data;
      };
    });

    $(document).ready(function() {
      var table = jQuery('#tabla_lb').DataTable({
        language: {
          processing: "Procesando...",
          search: "Buscar:",
          lengthMenu: "Mostrar _MENU_ Filas",
          info: "Mostrando _START_ a _END_ de _TOTAL_ aplicaciones",
          infoEmpty: "Mostrando 0 a 0 de 0 aplicaciones",
          paginate: {
            first: "Inicio",
            previous: "Anterior",
            next: "Siguiente",
            last: "Último"
          },
          aria: {
            sortAscending: ": Activar para ordenar la columna de manera ascendente",
            ortDescending: ": Activar para ordenar la columna de manera descendente"
          }
        }
      });

      jQuery('#tabla_lb_filter input').keydown(function() {
        table
          .search(
            jQuery.fn.DataTable.ext.type.search.string(this.value)
          )
          .draw();
      });
    });
  </script>

  <script type="text/javascript">
    $(function() {
      var Accordion = function(el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.dropdownlink');
        dropdownlink.on('click', {
            el: this.el,
            multiple: this.multiple
          },
          this.dropdown);
      };

      Accordion.prototype.dropdown = function(e) {
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
<?php echo $var_footer; ?>

</html>