<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>PCI / ISA Relay modules</title>
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
          <li class="breadcrumb-item"><a href="pci_boards" class="blue link-orange">PCI</a></li>
          <li class="breadcrumb-item"><a href="sub_data6" class="blue link-orange">Tarjetas PCI/ISA</a></li>
          <li class="breadcrumb-item active" aria-current="page">PCI / ISA Relay modules</li>
        </ol>
      </nav>

      <div>

        <center>
          <table width="100%" border="0">
            <tr>
              <td align="center">
                <h2> PCI / ISA Relay modules</h2>
              </td>
            </tr>



            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><a href="DN-PR4"><strong>DN-PR4</strong></a></td>

            </tr>
            <tr>
              <td>4-channel power relay module ,1 form C</td>

            </tr>
            <tr>
              <td>&nbsp;</td>

            </tr>
            <tr>
              <td><a href="DN-SSR4"><strong>DN-SSR4</strong></a></td>

            </tr>
            <tr>
              <td>4-channel solid state relay module ,1 form A <a href="/dn_ssr4.html"></a></td>

            </tr>
          </table>
        </center>
      </div>
    </div>
  </div>
  <?php echo $jquery_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
</body>
<?php echo $var_footer; ?>

</html>