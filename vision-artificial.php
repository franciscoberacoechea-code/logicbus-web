<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
  <title>Visión Artificial Industrial | Cámaras, Iluminación y Software – Logicbus México</title>
  <meta name="description"
    content="Soluciones en visión artificial para inspección, calidad y automatización. Cámaras industriales, iluminación, lentes y software de análisis. ">

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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
        <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
            class="blue link-orange">Automatización y control de procesos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Vision Artificial</li>
      </ol>
    </nav>
  </div>

  <div class="mb-5">
    <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/vision-artificial.png">
      <source src="https://www.logicbus.com.mx/assets/videos/vision-artificial.mp4" type="video/mp4">
    </video>
  </div>

  <div class="container my-5">
    <h1 class="banner-title blue font-weight-bolder mb-5">Visión Artificial</h1>
    <p class="light-black paragraph text-justify font-weight-bold">¿Qué es la Visión Artificial?</p>
    <p class="light-black paragraph text-justify">Transforma tu industria con nuestras soluciones de vanguardia. La
      categoría de Vision Artificial en Logicbus abarca una amplia gama de soluciones tecnológicas diseñadas para
      optimizar y mejorar la eficiencia en entornos industriales. Estas soluciones incluyen sistemas avanzados que
      permiten la integración y automatización de tareas, facilitando la monitorización, el control y la gestión de
      procesos industriales de manera precisa y eficiente. Con tecnologías como robots colaborativos, visión artificial,
      controladores lógicos programables (PLC), pantallas HMI, y más, buscamos transformar la manera en que las
      industrias operan, incrementando la productividad, reduciendo costos y garantizando la seguridad y calidad en cada
      operación.</p>
  </div>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill text-uppercase">¿Cómo funciona la visión artificial?
      </h2>
      <p class="light-black paragraph text-justify mt-5">La visión artificial combina varias tecnologías y técnicas:</p>
      <ul class="light-black paragraph text-justify">
        <li class="mb-1">Captura de Imágenes: Utiliza cámaras para capturar imágenes o video en tiempo real.</li>
        <li class="mb-1">Procesamiento de Imágenes: Transforma y mejora las imágenes para hacer más clara la información
          visual relevante.</li>
        <li class="mb-1">Algoritmos de Reconocimiento y Clasificación: Utiliza modelos de inteligencia artificial para
          identificar y clasificar objetos en las imágenes.</li>
        <li class="mb-1">Toma de Decisiones Automatizada: Una vez interpretada la imagen, el sistema puede activar una
          acción, enviar una alerta o generar un reporte.</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">APLICACIONES DE LA VISIÓN ARTIFICIAL EN LA
        INDUSTRIA</h2>
      <p class="mt-5 light-black paragraph text-justify">La visión artificial se ha convertido en una herramienta clave
        para muchas industrias, mejorando la precisión, reduciendo errores y optimizando la eficiencia en diversos
        procesos.</p>
      <p class="light-black paragraph text-justify mt-3">Principales Aplicaciones</p>
      <ol class="light-black paragraph text-justify">
        <li class="mb-3">Control de Calidad en la Manufactura:
          <ul>
            <li>Descripción: La visión artificial es ampliamente utilizada en líneas de producción para inspeccionar
              productos en busca de defectos, irregularidades o errores en el ensamblaje.</li>
            <li>Beneficios: Aumenta la precisión y la consistencia en el control de calidad, detectando fallos
              invisibles al ojo humano.</li>
          </ul>
        </li>
        <li class="mb-3">Automatización de Procesos Logísticos:
          <ul>
            <li>Descripción: En los almacenes y centros de distribución, la visión artificial ayuda a clasificar, ubicar
              y verificar la correcta carga de los productos.</li>
            <li>Beneficios: Acelera el manejo y reduce errores en la distribución de mercancías.</li>
          </ul>
        </li>
        <li class="mb-3">Agricultura de Precisión:
          <ul>
            <li>Descripción: Los sistemas de visión artificial monitorizan el crecimiento de los cultivos, identifican
              plagas y miden la salud de las plantas.</li>
            <li>Beneficios: Optimiza el uso de agua, fertilizantes y pesticidas, incrementando el rendimiento y la
              sostenibilidad.</li>
          </ul>
        </li>
        <li class="mb-3">Automóviles Autónomos:
          <ul>
            <li>Descripción: Los vehículos autónomos dependen de sistemas de visión artificial para interpretar el
              entorno, detectar peatones, leer señales y evitar obstáculos.</li>
            <li>Beneficios: Aumenta la seguridad vial y mejora la eficiencia del transporte.</li>
          </ul>
        </li>
        <li class="mb-3">Sector Salud:
          <ul>
            <li> Descripción: Se aplica en diagnósticos médicos, como el análisis de radiografías y resonancias
              magnéticas, para detectar condiciones como tumores o fracturas.</li>
            <li>Beneficios: Mejora la precisión de los diagnósticos, permite la detección temprana de enfermedades y
              ayuda a los médicos en la toma de decisiones.</li>
          </ul>
        </li>
      </ol>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill text-uppercase">Industrias que Utilizan Visión
        Artificial</h2>
      <p class="light-black paragraph text-justify mt-5">La visión artificial tiene un impacto positivo en una amplia
        variedad de industrias, entre ellas:</p>
      <div class="row text-center justify-content-center">
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/manufactura.svg" alt="Manufactura" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Manufactura</p>
        </div>
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/logistica.svg" alt="Logística y Distribución" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Logística y Distribución</p>
        </div>
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/agricultura.svg" alt="Agricultura" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Agricultura</p>
        </div>
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/automotriz.svg" alt="Automotriz" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Automotriz</p>
        </div>
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/salud.svg" alt="Salud" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Salud</p>
        </div>
        <div class="col-4 col-md-3 mt-5">
          <img src="./assets/vision-artificial/retail.svg" alt="Retail" style="width: 15vh;">
          <p class="light-black paragraph mt-3">Retail</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill text-uppercase">Ventajas de Implementar Visión
        Artificial en la Industria</h2>
      <ul class="mt-5 light-black paragraph text-justify">
        <li class="mb-3">Mayor Eficiencia: Los sistemas de visión artificial pueden procesar miles de imágenes en
          segundos, lo cual mejora la velocidad de producción.</li>
        <li class="mb-3">Reducción de Errores: Al automatizar la inspección y clasificación, se reducen los errores
          humanos y se mejora la consistencia de los productos.</li>
        <li class="mb-3">Costos Reducidos: La detección temprana de defectos y el monitoreo constante permiten reducir
          los costos asociados con desperdicios y retrabajos.</li>
        <li class="mb-3">Incremento de la Seguridad: En sectores como la conducción autónoma y la salud, la visión
          artificial reduce riesgos y mejora la seguridad tanto para los usuarios como para los trabajadores.</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill text-uppercase">Desafíos de la Visión Artificial
      </h2>
      <p class="mt-5 light-black paragraph text-justify">A pesar de sus beneficios, la visión artificial también
        enfrenta ciertos desafíos:</p>
      <ul class="light-black paragraph text-justify">
        <li class="mb-3">Costos de Implementación: Los sistemas de visión artificial pueden ser costosos, especialmente
          en industrias que requieren infraestructura avanzada y personal especializado.</li>
        <li class="mb-3">Privacidad y Ética: En aplicaciones como el reconocimiento facial, la privacidad de las
          personas es una preocupación.</li>
        <li class="mb-3">Limitaciones Técnicas: La precisión de los algoritmos puede verse afectada por condiciones de
          luz, ángulos de visión o interferencias ambientales, por lo que los sistemas requieren calibración y
          mantenimiento constantes.</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill text-uppercase">Futuro de la Visión Artificial</h2>
      <p class="mt-5 light-black paragraph text-justify">El avance de la visión artificial sigue a un ritmo acelerado
        gracias al desarrollo de nuevas tecnologías como la inteligencia artificial y el Internet de las Cosas (IoT).
        Las innovaciones futuras apuntan a:</p>
      <ul class="light-black paragraph text-justify">
        <li class="mb-3">Mayor integración con IoT y Big Data: La visión artificial conectada a redes de sensores y
          bases de datos permitirá tomar decisiones aún más precisas en tiempo real.</li>
        <li class="mb-3">Expansión en el sector salud: Los diagnósticos automáticos y la detección temprana de
          enfermedades serán más accesibles.</li>
        <li class="mb-3">Automatización avanzada en la industria: Con la llegada de la Industria 4.0, la visión
          artificial será clave para la creación de fábricas inteligentes.</li>
      </ul>
    </div>
  </section>

  <!--Contacto-->
  <div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
      <h2 class="title white text-uppercase">conoce más sobre NUESTRAS SOLUCIONES</h2>
      <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su
        proyecto.</span>
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
</body>
<?php echo $var_footer; ?>

</html>