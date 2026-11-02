<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

  <title>Ohm's Law - Simple explanation of the formula of Ohm's law.</title>
  <meta name="description" content="(Ohm's law is a fundamental element for the explanation of certain phenomena related to electricity. This fact was discovered in the year of 1827...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="ohm's law, what is ohm's law, history ohm´s law,form ohm's law, Resistence, Voltage, Volts, Intensity">
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
  <div class="container">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ohm's Law</li>
        </ol>
      </nav>
      <div class="row">
        <h1>Ohm's Law</h1>
        <p>
          Ohm's law is a fundamental element for the explanation of certain phenomena related to electricity. This fact was discovered in the year of 1827 by <b>George Simon Ohm</b>, observed the relation between the applied voltage <b>V</b>, the Intensity <b>I</b> and the resistance <b>R</b>, where it is expressed with the famous Ohm's Law, which is the fundamental equation of the whole science of electricity, this law has been of extraordinary importance in electrical calculations. In its simplest formulation, this law states that the intensity of the current (I) flowing through an electric conductor is directly proportional to the potential difference (V) and, in parallel, inversely proportional to the resistance (R).
        </p>
        <p>
          You have found out that voltage and resistance affect the current flow in a circuit, and that voltage drops across a resistance. The basic relationships of current, voltage and resistance are as follows:
        </p>

        <ol>
          <li>Current in a circuit increases when the voltage is increased for the same resistance. </li>
          <li>Current in a circuit decreases when the resistance is increased for the same resistance.</li>
        </ol>

        <p>
          These two relationships combined are Ohm's Law, the most basic law of electric circuits, usually stated as follows:
        </p>
        <p>
          <center><img src="imagenes/articulo/Ohm-Law.jpg" class="image_productos" width="50%" alt="Ohm's Law" title="Ohm's Law Diagram"><br>
            <h6><b>THE CURRENT FLOWING IN A CIRCUIT CHANGES IN THE SAME DIRECTION THAT THE VOLTAGE CHANGES, AND IN THE OPPOSITE DIRECTION THAT THE RESISTANCE CHANGES.</b></h6>
          </center>
        </p>
        <h2>OHM'S LAW FORMULAS</h2>
        <P>You have seen that if a certain current of electricity flows in a circuit, it flows because a certain electromotive force, or voltage, forces it to flow, and that the amount of current is limited by the resistance of the circuit. In fact, the amount of current depends upon the amount of electrical pressure, or voltage, and the amount of resistance. </P>
        <p>One of the most common ways of expressing Ohm's Law is that <b>THE CURRENT FLOWING IN A CIRCUIT IS DIRECTLY PROPORTIONAL TO THE APPLIED VOLTAGE, AND INVERSELY PROPORTIONAL TO THE RESISTANCE.</b> When you put this word statement into a mathematical relationshipsyou get: </p>
        <p>
          <center><img src="imagenes/articulo/for1.jpg" class="image_productos" width="50%" alt="Ley de Ohm" title="Intensity Form Ohm's Law"><br><br><b>Fig. 2 Intensity Form Ohm's Law</b></center>
        </p>
        <p>Ohm´s Law can also be writter in two other forms:
        <p>
          <center><img src="imagenes/articulo/for2.jpg" class="image_productos" width="50%" alt="Ley de Ohm" title="Voltage Form Ohm's Law"><br><br><b>Fig. 3 Voltage Form Ohm's Law</b></center>
        </p>
        <p>This enables you to find the voltage when you know the current and resistance.</p>

        <p>If you know the voltage and the current, you can find the resistance then by simply applying the following form of Ohm's Law:</p>
        <p>
          <center><img src="imagenes/articulo/for3.jpg" class="image_productos" width="50%" alt="Ley de Ohm" title="Resistance Form Ohm's Law"><br><br><b>Fig. 4 Resistance Form Ohm's Law</b></center>
        </p>

      </div>
    </div>
    <center><span><br><br><br>Don't forget to share it in your social networks</span></center>
  </div>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>