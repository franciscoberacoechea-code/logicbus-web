<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Medición de voltaje DAQ HAT para Raspberry Pi - Logicbus S.A de C.V</title>
  <meta name="description" content="Un instrumento de medición es un aparato que hoy en día es utilizado para comparar las magnitudes físicas mediante un proceso de medición. Como unidades de medida, se utiliza objetos y sucesos previamente establecidos como estándares...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="instrumento de medicion, raspberry, voltaje, medicion, DAQ, HAT MCC 118, MCC, LOGICBUS">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
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

  <div>
    <div class="gridContArriba ">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medición de voltaje DAQ HAT para Raspberry Pi®</li>
          </ol>
        </nav>
        <h1 class="title blue">Medición de voltaje DAQ HAT para Raspberry Pi®</h1>
        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/raspberry.png" class="image_productos" width="60%" alt="Medición de voltaje DAQ HAT para Raspberry Pi®" title="Medición de voltaje DAQ HAT para Raspberry Pi®"></center>
        <p class="text-justify paragraph mt-5">En este artículo nos enfocaremos acerca del instrumento de medición de voltaje analógico para los sistemas de adquisición de datos, principalmente en el registrador de datos basados en Raspberry Pi®. Uno de los productos de la marca MEASUREMENT COMPUTING TM (MCC) que la empresa Logicbus distribuye dentro del mercado industrial, mencionaremos las funciones de cada uno de los elementos, que tipo de unidad eléctrica pueden medir y porque es muy importante su uso en el mundo industrial.</p>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h2 class="subtitle blue text-center mt-5 mb-3">Introducción</h2>

      <p>En aplicaciones reales, las señales del voltaje medido son formas de onda complejas que contienen múltiples componentes de frecuencia. El análisis de sonido y vibración usualmente involucra la identificación y examen de estos componentes de frecuencia. Para hacerlo, debe convertir matemáticamente las señales del dominio de tiempo al dominio de frecuencia por medio de las transformadas de Laplace, Z-, o Fourier. El análisis de Fourier es el más común para esta aplicación ya que se obtiene la magnitud en decibeles (dB) y se puede asociar a la fase ω (grados o radianes) para cada componente de frecuencia en una señal. Los sistemas de medición de gran número de canales deben transferir grandes cantidades de datos a la computadora principal. Este proceso generalmente se utiliza hardware y software DAQ, que es el proceso de medir con una PC un fenómeno eléctrico o físico como voltaje, corriente, temperatura, presión o sonido. Un sistema DAQ consiste de sensores, hardware de medidas DAQ y una PC con software programable. Comparados con los sistemas de medidas tradicionales, los sistemas DAQ basados en PC aprovechan la potencia del procesamiento, la productividad, la visualización y las habilidades de conectividad de las PCs estándares en la industria proporcionando una solución de medidas más potente, flexible y rentable. Teniendo una amplio campo de aplicación.</p>


      <h2 class="subtitle blue text-center mt-5 mb-3">Instrumento de medición</h2>

      <p>Un instrumento de medición es un aparato que hoy en día es utilizado para comparar las magnitudes físicas mediante un proceso de medición. Como unidades de medida, se utiliza objetos y sucesos previamente establecidos como estándares o patrones, y de la medición resulta un número que es la relación entre el objeto de estudio y una unidad de referencia. Con esto contamos que los instrumentos de medición son el medio por el que se hace estas lógicas conversión.</p>
      <p>Se puede entender que un instrumento de medición es la operación de un conjunto de diferentes aparatos conectados a los secundarios de los transformadores de instrumento de corriente y potencia, que pueden medir las diferentes magnitudes eléctricas de las instalaciones de alta y baja tensión.</p>
      <p>Un sistema de adquisición de datos (DAQ) que mide la corriente típicamente lo hace directamente. Sin embargo, los sistemas DAQ que mide la tensión suelen ser más flexibles para el usuario. Esta técnica requiere que la corriente se convierta en tensión para que el sistema de DAQ de tensión pueda ser la señal. Una derivación eléctrica puede realizar esta tarea, pero requiere de un sistema con una alta impedancia de entrada.</p>
      <p>Estos sistemas comúnmente son utilizados en procesos de automatización y control, en donde se requiere hacer uso de un software y hardware de adquisición de datos. Implementaciones que van desde el control de encendido y apagado hasta sistemas complejos por ejemplo, Sistemas de reconocimiento dactilar y reconocimiento facial web cam desarrollado en un lenguaje de alto nivel que requieren de múltiples canales de entrada y salida.</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Instrumento de medición de voltaje</h2>

      <p>Debido a que en el núcleo de todos los sistemas de adquisición de datos se encuentra un convertidor analógico al digital (ADC). Como su nombre lo indica, este chip toma datos del entorno y los convierte en niveles discretos que pueden ser interpretados por un procesador. Además de necesitar de un sistema de un software que controle el proceso, basado en un lenguaje de programación, ofreciendo mayores ventajas al utilizar un lenguaje de alto nivel.</p>
      <p>Estas magnificas propiedades se encuentran en un solo instrumento de medición de voltaje DAQ HAT de la marca MCC que la empresa Logicbus está ofreciendo en el mercado para satisfacer las necesidades dentro de las industrias.</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Medidor de voltaje DAQ HAT para Raspberry Pi®</h2>

      <p>Cuando se miden señales de alto voltaje, determinar si su sistema de adquisición de datos (DAQ) es seguro debe ser su primera consideración. Tomar medidas de alto voltaje puede provocar daños en su equipo, a la unidad bajo prueba e incluso sufrir daños físicos. Para asegurar la seguridad de su sistema de registro de datos, debe emplear dispositivos de medición aislados para que sirvan como una barrera de aislamiento entre usted y los voltajes dañinos.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/hp-MCC-118.png" class="image_productos" width="60%" alt="Figura 1. Medidor de voltaje DAQ HAT para Raspberry Pi®" title="Figura 1. Medidor de voltaje DAQ HAT para Raspberry Pi®"></center>
      <p class="text-center"><b>Figura 1. Medidor de voltaje DAQ HAT para Raspberry Pi®</b></p>

      <p>La empresa Logicbus presenta el producto DAQ HAT MCC 118, es un medidor de voltaje DAQ HAT para Raspberry Pi® proporciona ocho canales de medición de voltaje analógico para los sistemas de adquisición de datos. La velocidad de datos máxima de MCC 118 es de 100 kS/s por placa para tomar medidas de voltaje de punto único o de onda. Se pueden apilar hasta ocho dispositivos MCC 118, que proporcionan hasta 64 canales de datos y un rendimiento máximo de 320 kS / s.</p>
      <p>Todos los DAQ HAT de MCC proporcionan bibliotecas y ejemplos de código abierto C / C ++ ® y Python ™ fáciles de usar que le permiten tomar medidas confiables y de calidad rápidamente.</p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Conclusiones</h2>
      <p>Es de gran relevancia tener el conocimiento acerca de instrumentos de medición de voltaje para DAQ HAT que hoy en día existen en el mercado industrial, debido a que ello nos permiten medir las diferentes entradas y salidas de voltaje dentro del sistemas industriales, en donde se requiere de medir la tensión para seguir manteniendo su buen funcionamiento.</p>
      <p>Además el tener y mantener el buen control sobre la medición correcta de voltaje DAQ HAT para los sistemas de registro de datos, la seguridad sobre la precisión de lectura se refleja en el cumplimiento de objetivos predefinidos del sistema, para lo cual es necesario un instrumento que ofrezca diversos canales de medición de voltaje analógico.</p>

      <p class="text-center"><a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Instrumento-de-medicion-de-voltaje.pdf" target="_blank" title="Instrumento de medición de voltaje DAQ HAT para Raspberry Pi®" alt="Instrumento de medición de voltaje DAQ HAT para Raspberry Pi®">Leer Artículo Completo</a></p>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>