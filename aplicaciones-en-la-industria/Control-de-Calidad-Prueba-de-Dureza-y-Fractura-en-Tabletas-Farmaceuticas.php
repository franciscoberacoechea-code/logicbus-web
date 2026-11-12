<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control de Calidad: Prueba de Dureza y Fractura en Tabletas Farmacéuticas | Logicbus</title>
  <meta name="description"
    content="Esta aplicación valida que los productos (ej. piezas pintadas, resinas compuestas, PCBs) pasen por el perfil de temperatura correcto (rampa, sostenimiento, enfriamiento) dentro de un horno de curado o secado...">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
  <?php require("../libreria/header.view.php"); ?>

  <!--RUTAS-->
  <section class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Control de Calidad: Prueba de Dureza y Fractura en Tabletas Farmacéuticas</li>
      </ol>
    </nav>
  </section>

  <!--BANNER-->
  <section class="card text-white" style="border: none; border-radius: 0;">
    <img src="img/aplicaciones-en-la-industria.png" alt="Banner"
      alt="Validación de Perfiles Térmicos en Hornos de Curado y Secado" class="hide-mobile">
    <img src="img/banner-mobile.webp" alt="Banner-mobile"
      alt="Validación de Perfiles Térmicos en Hornos de Curado y Secado" class="hide-desktop">
    <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
      <h1 class="banner-title white font-weight-bold mb-0">Control de Calidad: Prueba de Dureza y Fractura en Tabletas Farmacéuticas</h1>
    </div>
  </section>

  <!--CONTENIDO-->
  <section class="container-fluid py-5">
    <div class="row justify-content-around">
      <div class="col-12 col-md-4">
        <img src="./img/Control-de-Calidad-Prueba-de-Dureza-y-Fractura-en-Tabletas-Farmaceuticas.png" alt="Diagrama"
          width="100%">
        <div class="text-center mt-5">
          <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
          <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
              alt="Futek" width="200px"></a>

          <a href="../taicenn-equipo-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/taicenn.webp"
              alt="Futek" width="200px"></a>

          <a href="../3onedata"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/3onedata.webp"
              alt="Futek" width="200px"></a>

          <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
              alt="Futek" width="200px"></a>

          <a href="../cimon-software-scada-industrial"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cimon.webp"
              alt="Futek" width="200px"></a>

          <a href="../davo-lin"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/davo-lin.webp"
              alt="Futek" width="200px"></a>
        </div>
      </div>

      <div class="col-12 col-md-7 text-justify">
        <p class="light-black">Esta aplicación automatiza el ensayo de compresión en tabletas y píldoras farmacéuticas. Es un proceso crítico en el laboratorio de calidad para asegurar que el medicamento tenga la dureza suficiente para soportar el envasado y transporte, pero la fragilidad adecuada para disolverse correctamente en el organismo del paciente.
        </p>

        <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
        <ol class="light-black">

          <li class="mb-3"><b>Aplicación de Fuerza de Precisión:</b> Un actuador lineal desciende sobre la tableta colocada en el dispositivo de prueba. Debajo de la muestra, se instala una celda de carga <a href="https://tienda.logicbus.com.mx/FSH04283_p_14588.html">FSH04283</a> de alta precisión, capaz de detectar micro-cambios en la resistencia del material. El actuador es controlado usando un PLC <a href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html">ME1C1-1616T</a>.</li>

          <li class="mb-3"><b>Registro de Perfil de Fractura:</b> La señal de la celda es enviada hacia un módulo <a href="https://tienda.logicbus.com.mx/M02LCR_p_37909.html">M02LCR</a> acoplado al PLC, y posteriormente a un sistema de adquisición SCADA <a href="https://tienda.logicbus.com.mx/Ultimate-Access-Web_c_7912.html">Ultimate Access Web</a>, donde se gráfica la curva de Fuerza vs. Tiempo hasta el punto de ruptura.</li>

          <li class="mb-3">Gestión de Datos en Sala Limpia: El operador registra los resultados del lote (ID, fecha, tipo de fármaco) utilizando una Panel PC de acero inoxidable <a href="https://tienda.logicbus.com.mx/TPC-SC170K_p_33872.html">TPC-SC170K</a> controlada mediante un teclado industrial <a href="https://tienda.logicbus.com.mx/D-87W_p_31821.html">D-87W</a> y mouse lavables <a href="https://tienda.logicbus.com.mx/D-SME20_p_36069.html">D-SME20</a>. Estos periféricos son esenciales en laboratorios farmacéuticos ya que pueden ser rociados con desinfectantes y alcohol isopropílico sin dañarse, garantizando la asepsia; mientras que el material de la Panel PC en acero inoxidable 316 cumple con las condiciones para su uso en ambientes farmacéuticos. El PLC se conecta a la Panel PC para enviar los datos hacia el SCADA usando un switch Ethernet <a href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>. Tanto el PLC como el switch se deben instalar en un gabinete para que su exposición no conlleve riesgo en la compresión de tabletas.</li>

        </ol>

        <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

        <ul class="light-black text-justify">

          <li class="mb-3"><b>Asegura la biodisponibilidad del fármaco validando su correcta disolución mecánica.</b></li>

          <li class="mb-3"><b>Periféricos que cumplen con normativas de higiene para Cuartos Limpios (Cleanrooms).</b></li>

          <li class="mb-3"><b>Alta precisión en rangos bajos de fuerza (gramos-fuerza) gracias a la tecnología de Futek.</b></li>

          <li class="mb-3"><b>Genera reportes de cumplimiento y validación para auditorías de calidad (ISO).</b></li>

          <li class="mb-3"><b>Generación de reportes de auditoría para cumplimiento de normas FDA 21 CFR Parte 11.</b></li>

        </ul>

        <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
      </div>
    </div>
  </section>

  <!--EQUIPOS RECOMENDADOS-->
  <section class="container py-5">
    <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
    <div class="row justify-content-center">
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04283.jpg" alt="FSH04283" width="150px">
        <p class="font-weight-bold mt-2 mb-0">FSH04283</p>
        <p>El modelo LCF505 Pancake universal de perfil bajo con base de tensión es el LCF500 con la opción de base tensora agregada.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04283_p_14588.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/29/ME1C1-1616T.jpg" alt="ME1C1-1616T"
          width="150px">
        <p class="font-weight-bold mt-2 mb-0">ME1C1-1616T</p>
        <p>Unidad principal Fatek serie M, Motion avanzado, 16 entradas digitales y 16 salidas a transistor SINK (NPN) 200KHz, E/S máximas: 1024/128, 11 ejes de control, 1 puerto Ethernet + 2 puertos RS-485 Maestro/Esclavo, 1 puerto USB Type C (2.0), 24 VCD.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/29/M02LCR.jpg" alt="M02LCR" width="150px">
        <p class="font-weight-bold mt-2 mb-0">M02LCR</p>
        <p>Módulo de Expansión de Entradas para celdas de carga Lado Derecho para PLCs de Fatek serie M, módulo de entrada de celda de carga de 2 canales, convertidor A/D utilizado: 24 bits, precisión: ±0,01%?25° C±5° C).</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/M02LCR_p_37909.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/290/TPC-SC170K_1.jpg" alt="TPC-SC170K"
          width="150px">
        <p class="font-weight-bold mt-2 mb-0">TPC-SC170K</p>
        <p>C con panel táctil capacitivo industrial de acero inoxidable de 17.0 pulgadas.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/TPC-SC170K_p_33872.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/LBD-29887W-3.jpg" alt="D-87W" width="150px">
        <p class="font-weight-bold mt-2 mb-0">D-87W</p>
        <p>Teclado industrial y médico de silicon con retroiluminación sellado resistente al agua con proteccion IP68, rígido y lavable, este es un teclado de escritorio móvil compacto y totalmente resistente.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-87W_p_31821.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/298/lbd-298sme20.png" alt="D-SME20" width="150px">
        <p class="font-weight-bold mt-2 mb-0">D-SME20</p>
        <p>Mouse de silicón, resistente e impermeable, grado médico IP68. USB, dimensiones: 115(L) x 65(W) x 42(H) mm, 160gr Disponible en blanco.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/D-SME20_p_36069.html"
          target="_blank">Comprar</a>
      </div>
      <div
        class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg" alt="IES2300SL-5GT-2LV" width="150px">
        <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>
        <p>La serie IES2300SL son conmutadores Ethernet industriales no gestionados Gigabit de 5/8/16 puertos. Esta serie serie ofrece 4 productos y admite puertos Gigabit de cobre. Adoptan el montaje en carril DIN para satisfacer los requisitos de diferentes escenarios de aplicación.</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html"
          target="_blank">Comprar</a>
      </div>
    </div>
  </section>

  <!--VIDEOS-->
  <section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
    <div class="row justify-content-center my-5">
      <div class="col-12 col-md-4">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/oET32jL106c?si=fmga-DuFy7IMHiRR"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/0PC85vWxh-4?si=D_XTuVT_oj7BSzlZ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>


  <!--ARTICULOS-->
  <section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
    <div class="row justify-content-center my-5">

      <div class="col-12 col-md-4 text-center mb-3">

        <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/control-de-calidad-prueba-de-dureza-y-fractura-en-tabletas-farmaceuticas/"
          target="_blank" rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/12/Control-de-Calidad-Prueba-de-Dureza-y-Fractura-en-Tabletas-Farmaceuticas-2048x1024.webp"
            alt="" width="100%">Prueba de Dureza y Fractura en Tabletas Farmacéuticas
        </a>
      </div>

      <div class="col-12 col-md-4 text-center mb-3">

        <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/top-3-ventajas-de-usar-teclados-industriales-en-entornos-hostiles/"
          target="_blank" rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/09/Top-3-ventajas-de-usar-teclados-industriales-en-entornos-hostiles-2048x1024.jpg"
            alt="" width="100%">Top 3 ventajas de usar teclados industriales en entornos hostiles
        </a>
      </div>

      <div class="col-12 col-md-4 text-center mb-3">

        <a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/blog/el-cerebro-de-la-vision-artificial-requerimientos-clave-de-un-box-pc-para-multiples-camaras/"
          target="_blank" rel="noopener noreferrer">
          <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/11/El-Cerebro-de-la-Vision-Artificial-Requerimientos-Clave-de-un-Box-PC-para-Multiples-Camaras-scaled.jpg"
            alt="" width="100%">El Cerebro de la Visión Artificial: Requerimientos Clave de un Box PC para Múltiples Cámaras
        </a>
      </div>

    </div>
  </section>

  <!--INDUSTRIAS-->
  <section class="container">
    <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
    <div class="container my-5">
      <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
        <div class="card card-industry">
          <a class="text-white" href="academia-e-investigacion">
            <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Academia e Investigación">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Academia e Investigación</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="agricultura">
            <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Agricultura">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Agricultura</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="alimentos-y-bebidas">
            <img src="img/industrias/alimentosybebidas.webp" class="card-img"
              style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="automotriz">
            <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Automotriz">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Automotriz</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="construccion">
            <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Construcción">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Construcción</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="oem">
            <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">OEM</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="ensayos-de-materiales">
            <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Ensayos de Materiales">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Ensayos de Materiales</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="farmaceutica-y-laboratorio">
            <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Farmacéutica y Laboratorio">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="robotica">
            <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Robótica">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Robótica</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="">
            <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"
              alt="Transporte">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Transporte</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

          <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
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

  <?php require("../libreria/footer.view.php"); ?>
  <?php echo $jquery_js; ?>
  <?php echo $popper_js; ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $own_file_js; ?>
  <?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>