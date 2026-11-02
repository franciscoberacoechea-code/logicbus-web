<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Internet de las cosas dentro de la Medicina - Logicbus S.A de C.V</title>
  <meta name="description" content="El internet de las cosas es uno de los temas que ha vuelto recurrente en los artículos de tecnología y en los esquemas de solución tecnológica de los fabricantes. ....">
  <!-- Descripcion delo tema -->
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="El internet de las cosas es uno de los temas que ha vuelto recurrente en los artículos de tecnología y en los esquemas de solución tecnológica de los fabricantes,MEDICINA, RELLENO, kinco, logicbus">
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
    <div class="griditemContA">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Protocolo de Comunicación Modbus</li>
        </ol>
      </nav>
      <div class="griditemContA">
        <h1 class="title blue">Internet de las cosas dentro de la Medicina</h1>

        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Internet-de-las-cosas-Medicina.png" class="image_productos" width="60%" alt="Internet de las cosas dentro de la Medicina" title="Internet de las cosas dentro de la Medicina"></center>

        <p class="paragraph text-justify mt-5">El internet de las cosas es uno de los temas que ha vuelto recurrente en los artículos de tecnología y en los esquemas de solución tecnológica de los fabricantes. Con la versatilidad y la funcionalidad que le son implícitas a la inclusión de más elementos en una actividad cotidiana a nuestro trabajo o dentro de la vida cotidiana, también aparecen nuevos riesgos en la seguridad de estos dispositivos, de igual manera que en la información que se transporta entre ellos.</p>
      </div>
    </div>
  </div>
  <div class="container my-5 text-justify paragraph">
    <p class="paragraph text-justify">El internet de las cosas ha llegado a la medicina, la cual está dispuesta a revolucionar una mejora de tratamiento a los pacientes y dentro de la elaboración de medicamentos.</p>
    <p class="paragraph text-justify">En este artículo mencionaremos acerca de estos puntos importantes para que el Internet de las cosas influencie y de un buen futuro dentro de la medicina.</p>

    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/medicina1.jpg" class="image_productos" width="40%" alt="FIGURA 1. IOT Y LA MEDICINA" title="FIGURA 1. IOT Y LA MEDICINA"></a>
    </center>
    <p>
      <center><b>FIGURA 1. IOT Y LA MEDICINA</b>
    </p>
    </center><br>

    <div align="center">
      <h2 class="subtitle blue">IoT en la Medicina</a></h2>
    </div><br>
    <p align="justify">Dentro del mundo cotidiano, el Iot tiene la habilidad para asignar cargas para equipos de médicos, ya que con eso puede reducir las listas de esperas en centros diagnósticos. El flujo de que se puede mostrar datos provee una imagen completa de la enfermedad del paciente, permitiéndoles a los doctores responder a cualquier cambio de manera oportuna. Dispositivos especiales miden datos biométricos importantes del paciente y los pasan a la nube para procesamiento y almacenamiento. De esta manera, las enfermeras pueden visitar las salas de los pacientes que estén en necesidad en ese momento en particular.</p>


    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/medicina2.jpg" class="image_productos" width="40%" alt="FIGURA 2. LA HABILIDAD DE USAR IOT PARA ASIGNAR CARGAS PARA EQUIPOS MÉDICOS" title="FIGURA 2. LA HABILIDAD DE USAR IOT PARA ASIGNAR CARGAS PARA EQUIPOS MÉDICOS"></a>
    </center>
    <p>
      <center><b>FIGURA 2. LA HABILIDAD DE USAR IOT PARA ASIGNAR CARGAS PARA EQUIPOS MÉDICOS</b>
    </p>
    </center><br>

    <p align="justify">En el uso del Internet de las cosas en nuestras vidas es más que evidente. Tal vez se han dado cuenta de cuantos aparatos conectados a la red usamos todos los días. En ese aspecto, la medicina es uno de los sectores que ha recibido un mayor impacto a causa de IoT, una industria en la que la aparición de objetos conectados es algo más frecuente.<br><br> Llegando a este punto, es impensable saber una evolución en medicina separada con el Internet de las Cosas. La tendencia muestra que vamos camino a una sociedad en la que los dispositivos serán tan fáciles de utilizar que pronto pasarán a formar parte del día a día de los pacientes, mejorando de una manera impresionante su estilo de vida.</p><br>

    <div align="center">
      <h2 class="subtitle blue">EJEMPLO DEL IOT: RELLENO DE MEDICAMENTOS</a></h2>
    </div><br>
    <p align="justify">La máquina de llenado de medicamentos se utiliza para llenar el medicamento en las botellas para el líquido oral. En esta aplicación utilizamos el servo de serie Kinco ED y <a href="https://tienda.logicbus.com.mx/LBMT504523T_p_4693.html">HMI</a> para lograr un llenado de alta precisión.</p>

    <div align="center">
      <h2 class="subtitle blue">PROCESO:</a></h2>
    </div><br>
    <ul class="paragraph text-justify">
      <li>Cuando el sensor detectó la llegada de los frascos de medicamentos, los chorros se insertarán en los frascos y el servomotor seguirá la velocidad del motor de alimentación. Al mismo tiempo, el motor de llenado seguirá al servo de chorro para llenar el medicamento en los frascos. .</li>
      <li>Aproveche la ventaja de la siguiente función del servo ED. Conecte el codificador del motor de alimentación a la interfaz del “codificador maestro” del servomotor de chorro, luego el servo seguirá la velocidad del codificador del motor de alimentación. Con el mismo principio, conecte
      <li>la interfaz de "Salida de codificador" a la interfaz de "Codificador maestro" del controlador servo de llenado. </li>
      <li>Utilice el método homing del servo ED para hacer que las bombas de émbolo estén a la misma altitud. </li>
      <li>Utilice la señal de detección de botellas para activar la secuencia del servo ED para iniciar la siguiente función. </li>
      <li>Utilice Kinco <a href="https://tienda.logicbus.com.mx/LBMT504523T_p_4693.html">HMI</a> para comunicarse con <a href="https://tienda.logicbus.com.mx/Unidad-Principal_c_2849.html">PLC</a> y ED SERVO. Luego podemos modificar los parámetros de ED servo y controlar servo y PLC.</li>
    </ul><br>

    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/medicina3.jpg" class="image_productos" width="40%" alt="FIGURA 3. PROCESO DE RELLENO DE MEDICAMENTOS" title="FIGURA 3. PROCESO DE RELLENO DE MEDICAMENTOS"></a>
    </center>
    <p>
      <center><b>FIGURA 3. PROCESO DE RELLENO DE MEDICAMENTOS</b>
    </p>
    </center><br>

    <div align="center">
      <h2 class="subtitle blue">RESUMEN</a></h2>
    </div><br>
    <ol>
      <li>Excelente función de seguimiento de ED Servo.ED Servo Support hasta 2MHz Frecuencia de respuesta. </li>
      <li>Función de secuencia interna del servo ED. Puede programar la curva de movimiento en la secuencia interna del servo ED. Y luego el PLC solo necesita usar algunas salidas digitales para llamar a la secuencia. </li>
      <li><a href="https://tienda.logicbus.com.mx/LBMT504523T_p_4693.html">HMI</a> se comunica con ED Servo directamente. Puede controlar ED Servo, establecer los parámetros y monitorear el estado del servo.</li>
    </ol><br>

    <div align="center">
      <h2 class="subtitle blue">CONCLUSIONES</a></h2>
    </div><br>
    <p align="justify">El internet de las cosas se refiere a que en un futuro todos los objetos que se encuentran a nuestro alrededor tendrán la capacidad de conectarse a la red, siendo capaces de recoger información, procesarla y compartirla. Este internet de las cosas ofrecerá todo un mundo lleno de posibilidades ya que habrá más cosas en internet que personas usando internet. El Internet de las cosas permitirá una mejor calidad de vida, ya que tiene la capacidad de recopilar, analizar dichos datos que reunidos entre sí se puedan convertir en información importante y conocimiento.
    </p>

    <p class="text-center blue"><a class="link-orange" href="https://www.logicbus.com.mx/pdf/articulos/internet-de-las-cosas-medicina.pdf" target="_blank" title="Energía inalambrica" alt="Energía inalambrica">Leer Artículo Completo</a></p>

  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>