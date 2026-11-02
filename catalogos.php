<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
  <title>Catálogos - Logicbus</title>
  <meta name="description" content="Catálogos de interes sobre los productos de nuestras marcas: DAQ, computadoras industriales, control de movimiento, PAC, convertidores de protocolos, fuentes...">
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
  <link href="libreria/celda-table/dataTables.bootstrap5.min.css">
  <link href="libreria/celda-table/fixedHeader.dataTables.min.css">
  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>

</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <div class="container my-5">
    <h1 class="title blue">Catálogos de Logicbus</h1>
    <div class="accordion my-5" id="accordionExample">
      <div>
        <div class="card-header p-0" id="headingOne">
          <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h2 class="subtitle blue text-left link-orange">Catálogos en Español</h2>
          </button>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body" align="justify">
            <div class="table-responsive">
              <table id="tabla_lb" class="table tabla_lb table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Descarga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = file_get_contents("documentos.json");
                  $products = json_decode($data, true);
                  $productos = $products['activos'];
                  $cnt = 1;
                  if (count($products['activos']) > 0) {
                    foreach ($productos as $product) {
                  ?>
                      <tr>
                        <td><?php echo htmlentities($cnt); ?></td>
                        <td><a class="blue link-orange" href="<?php echo htmlentities($product['link']); ?>"><?php echo htmlentities($product['titulo']); ?></a></td>
                        <td><?php echo $product['descripcion']; ?></td>
                        <td align="center"><a href="<?php echo htmlentities($product['link']); ?>" target="_blank"> <img src="https://www.logicbus.com.mx/<?php echo htmlentities($product['img']); ?>" alt="" width="50"> </a> </td>
                      </tr>
                  <?php $cnt = $cnt + 1;
                    }
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="">
        <div class="card-header p-0" id="headingOne">
          <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <h2 class="blue subtitle text-left link-orange">English Catalogs</h2>
          </button>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body" align="justify">
            <div class="table-responsive">
              <table id="tabla_lb" class="table tabla_lb table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titles</th>
                    <th>Description</th>
                    <th>Download</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = file_get_contents("documentos_ingles.json");
                  $products = json_decode($data, true);
                  $productos = $products['activos'];
                  $cnt = 1;
                  if (count($products['activos']) > 0) {
                    foreach ($productos as $product) {
                  ?>
                      <tr>
                        <td><?php echo htmlentities($cnt); ?></td>
                        <td><a class="blue link-orange" href="<?php echo htmlentities($product['link']); ?>"><?php echo htmlentities($product['titulo']); ?></a></td>
                        <td><?php echo $product['descripcion']; ?></td>
                        <td align="center"><a href="<?php echo htmlentities($product['link']); ?>" target="_blank"> <img src="https://www.logicbus.com.mx/<?php echo htmlentities($product['img']); ?>" alt="" width="50"> </a> </td>
                      </tr>
                  <?php $cnt = $cnt + 1;
                    }
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $popper_js; ?>

  <script src="libreria/celda-table/jquery.dataTables.min.js"></script>
  <script src="libreria/celda-table/dataTables.bootstrap5.min.js"></script>
  <script src="libreria/celda-table/dataTables.fixedHeader.min.js"></script>
</body>
<?php echo $var_footer; ?>

</html>