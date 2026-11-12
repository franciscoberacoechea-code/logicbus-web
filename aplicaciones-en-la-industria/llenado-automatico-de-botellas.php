<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Llenado automático de botellas y líquidos | Logicbus</title>
  <meta name="description" content="Uno de los mayores retos en la automatización industrial es garantizar que el llenado de botellas y el envasado en bolsas cumplan con el peso exacto especificado.">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />

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
        <li class="breadcrumb-item active" aria-current="page">Llenado Automático de Botellas y Líquidos</li>
      </ol>
    </nav>
  </section>

  <!--BANNER-->
  <section class="card text-white" style="border: none; border-radius: 0;">
    <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Llenado Automático de Botellas y Líquidos" class="hide-mobile">
    <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Llenado Automático de Botellas y Líquidos" class="hide-desktop">
    <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
      <h1 class="banner-title white font-weight-bold mb-0">Llenado Automático de Botellas y Líquidos</h1>
    </div>
  </section>

  <!--CONTENIDO-->
  <section class="container-fluid py-5">
    <div class="row justify-content-around">
      <div class="col-12 col-md-4">
        <img src="./img/botellas.png" alt="Diagrama" width="100%">
        <div class="text-center mt-5">
          <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
          <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
        </div>
      </div>

      <div class="col-12 col-md-7 text-justify">
        <p class="light-black">Uno de los principales retos en la ingeniería de automatización dentro de las industrias de alimentos, bebidas, farmacéutica y química es asegurar que el proceso de llenado de botellas y envasado en bolsas cumpla con el peso exacto especificado. Esto no solo reduce el desperdicio, sino que también garantiza el cumplimiento de normativas y estándares de calidad.</p>

        <p class="light-black">En el caso de los fabricantes de bebidas, por ejemplo, el llenado excesivo de botellas puede generar pérdidas significativas en la producción. Reducir el exceso de llenado en tan solo un gramo o mililitro por botella puede representar ahorros de miles de dólares al año por cada línea de producción. Por ello, los ingenieros y gerentes de producción buscan soluciones de sensores precisas que permitan medir con exactitud el peso y la carga, optimizando los sistemas de control de llenado en máquinas automáticas de alta velocidad.</p>

        <p class="light-black">Aunque existen varios métodos para verificar los niveles de llenado, el peso físico es la variable más confiable en comparación con la masa, densidad, nivel o volumen. Al pesar cada botella, el sistema de control está, en esencia, "contando moléculas", ya que cada átomo tiene un peso específico.</p>

        <p class="light-black">Además, la medición del peso no se ve afectada por variaciones en la densidad del líquido, su temperatura, viscosidad o aireación, factores que sí podrían influir en otros métodos. Ninguna de estas variables altera el peso final del producto.</p>

        <p class="light-black">Por otro lado, las máquinas llenadoras automáticas volumétricas (o máquinas llenadoras de líquidos) controlan el flujo en función del volumen, pero este método puede generar inconsistencias en el peso debido a las condiciones del material. Así, cambiar a un sistema de llenado basado en pesaje tiene un sentido económico claro, proporcionando una mayor precisión independientemente del tipo de material o sus características fisicoquímicas.</p>
        <p class="light-black">La solución: Celdas de carga de alta precisión
        </p>
        <p class="light-black">Para máquinas de llenado de botellas, recomendamos el uso de sensores de celdas de carga de alta precisión, como las de la serie LSM, diseñadas específicamente para aplicaciones de llenado automatizado.
        </p>
        <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
        <ol class="light-black">
          <li class="mb-3">Montaje de la celda de carga: Una celda de carga de la serie LSM se instala debajo de la plataforma que sostiene el contenedor en proceso de llenado.</li>
          <li class="mb-3">Medición del peso: A medida que el contenedor se llena, el sensor LSM mide el peso del fluido dispensado.</li>
          <li class="mb-3">Procesamiento de la señal: La señal de peso del sensor se envía a un controlador digital IDC305 (señal SPI), a una pantalla digital IPM650 (señal analógica amplificada), o a un amplificador analógico de la serie IAA. Estos dispositivos convierten la señal para que sea leída por un PLC o microcontrolador compatible.</li>
          <li class="mb-3">Control de llenado: El PLC o microcontrolador interpreta la señal y detiene el dispensador cuando se ha alcanzado el peso exacto.</li>
          Además de una baja no linealidad y no repetibilidad, el sensor de la serie LSM presenta un deslizamiento mínimo y tiene protección contra sobrecarga incorporada para proteger al sensor de accidentes imprevistos.

          <li class="mb-3">El deslizamiento es la desviación de la salida de una celda de carga cuando se aplica una carga fija. Esto significa que el sensor de la serie LSM se ve mínimamente afectado por los pesos de la plataforma y del contenedor, lo que maximiza la precisión.</li>

          <li class="mb-3">Por último, FUTEK ofrece soluciones OEM para las celdas de carga de la serie LSM que ofrecen salidas de señal I2C, RS232 y UART.</li>

          <li class="mb-3">Este nivel de precisión también es clave en los procesos de preparación de compuestos de aplicaciones químicas y farmacéuticas, donde es crucial monitorear la tasa de dosificación de los diversos componentes para mantener una proporción química precisa.</li>
        </ol>
      </div>
    </div>
    <div class="container text-justify">
      <p class="light-black">La serie LSM también cuenta con baja no linealidad, alta repetibilidad y protección contra sobrecargas, garantizando un rendimiento óptimo incluso en situaciones inesperadas. Además, su mínimo deslizamiento asegura que el peso de la plataforma y el contenedor no afecten la precisión de la medición.</p>
      <p class="light-black">Soluciones OEM para mayor flexibilidad</p>
      <p class="light-black">FUTEK ofrece soluciones OEM para las celdas de carga de la serie LSM, con opciones de salida de señales I2C, RS232 y UART, proporcionando una integración sencilla y eficaz en cualquier sistema de automatización.</p>
      <p class="light-black">Este nivel de precisión es igualmente crucial en la dosificación de componentes en industrias químicas y farmacéuticas, donde se requiere un control exacto de las proporciones químicas para garantizar la consistencia y calidad del producto final.</p>
      <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
    </div>
  </section>

  <!--EQUIPOS RECOMENDADOS-->
  <section class="container py-5">
    <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/36/QSH01916.jpg" alt="IDC305" width="150px">
        <p class="font-weight-bold mt-2 mb-0">IDC305</p>
        <p>Controlador digital con salida SPI, USB y analógica</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QSH01916_p_37882.html" target="_blank">Comprar</a>
      </div>
      <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/fsh03633.jpg" alt="IPM650" width="150px">
        <p class="font-weight-bold mt-2 mb-0">IPM650</p>
        <p>Pantalla de montaje en panel</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH03633_p_6809.html" target="_blank">Comprar</a>
      </div>
      <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/36/fsh04453.jpg" alt="IAA105" width="150px">
        <p class="font-weight-bold mt-2 mb-0">IAA105</p>
        <p>Amplificador de voltaje analógico configurable digitalmente</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/FSH04453_p_36735.html" target="_blank">Comprar</a>
      </div>
      <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
        <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH03978.jpg" alt="LSM300" width="150px">
        <p class="font-weight-bold mt-2 mb-0">LSM300</p>
        <p>Celda de carga</p>
        <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-montaje-lateral-lsm300" target="_blank">Comprar</a>
      </div>
    </div>
  </section>

  <!--VIDEOS-->
  <section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
    <div class="row justify-content-center my-5">
      <div class="col-12 col-md-4">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/j5yf6HRaWSQ?si=ba9OFrOv8JUmgxz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/oET32jL106c?si=hr5bgIqBnyezNooq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/cp9xINRLz1U?si=_gHVv5Qmb0DX2FLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!--ARTICULOS-->
  <section class="container-fluid py-5">
    <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
    <div class="row justify-content-center my-5">
      <div class="col-12 col-md-4">
        <a href="https://www.logicbus.com.mx/blog/celdas-de-carga-en-el-control-de-procesos/" target="_blank" rel="noopener noreferrer">
          <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/CELDAS-DE-CARGA-EN-EL-CONTROL-DE-PROCESOS.png" alt="" width="100%">
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
            <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Academia e Investigación</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="agricultura">
            <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Agricultura</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="alimentos-y-bebidas">
            <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="automotriz">
            <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Automotriz</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="construccion">
            <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
            <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Ensayos de Materiales</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="farmaceutica-y-laboratorio">
            <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="robotica">
            <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h5 class="card-title link-orange">Robótica</h5>
            </div>
          </a>
        </div>
        <div class="card card-industry">
          <a class="text-white" href="">
            <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
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