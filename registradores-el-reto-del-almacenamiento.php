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

  <script>
    gtag('config', 'AW-1007518778/wX-hCOLx9YQDELqItuAD', {

      'phone_conversion_number': '33-3854-5975'

    });
  </script>
  <title>Registradores, el reto del almacenamiento - Logicbus S.A de C.V.</title>
  <meta name="description" content="(En la actualidad requerimos medir y controlar condiciones tales como la temperatura, la humedad, presión, voltaje, entre otros, llegando a utilizar registradores específicos para tales fines. ...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Registradores, Datalogger, NoSQL, Base de Datos, sensores, DynamoDB, Clave-Valor, Event101A, DL-302, manejadores de base de datos.">
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
            <li class="breadcrumb-item active" aria-current="page">Registradores, el reto del almacenamiento</li>
          </ol>
        </nav>
        <div class="griditemContA paragraph text-justify">
          <h1 class="title blue">Registradores, el reto del almacenamiento</h1>
          <center><img src="https://www.logicbus.com.mx/imagenes/articulo/dataloger.jpg" class="image_productos" width="40%" alt="Registradores, el reto del almacenamiento" title="Registradores, el reto del almacenamiento"></center>
          <p class="mt-5"><b>Resumen:</b> Dada la necesidad de registrar cada evento ocurrido para posteriormente analizar los datos para producir información útil, el almacenamiento se convierte en un punto focal, aunado al acceso a la información para poder contestar simples preguntas en tiempos mínimos, es de vital importancia, en este artículo abordaremos de algunos registradores, como se puede acceder a la información y las bases de datos más usuales para estos.</p>
        </div>
      </div>
    </div>
    <div class="container text-justify paragraph">
      <h2 class="subtitle blue text-center my-5">Introducción</h2>
      <p>En la actualidad requerimos medir y controlar condiciones tales como la temperatura, la humedad, presión, voltaje, entre otros, llegando a utilizar registradores específicos para tales fines. Actualmente se nos presenta el reto del almacenamiento de los datos obtenidos, debido a la cantidad de registros captados por algún dispositivo diseñado para tal fin, ejemplo: el Registrador modelo Event101A, que captura eventos y ofrece hasta una frecuencia de lectura de 4 Hz, esto es simplemente la lectura de 4 registros por segundo.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Event101A.jpg" class="image_productos" width="300px" alt="" title="EVENT101A"></center>
      <p style="text-align: center; font-size: 12px" align="right"><b>Fig. 1. Registrador de eventos modelo Event101A.</b></p><br>

      <p>En un minuto tendríamos 240 registros, en una hora tendríamos 14,400 registros, teniendo 345,600 registros al día. Si consideramos que cada registro que nos proporción solamente cuenta con 3 campos, ID, Fecha y Valor, se tendrá una capacidad de 42 bytes (8 bytes para id, 26 bytes para la fecha y 8 bytes para el valor), traduciéndolo en un día de trabajo son 14,515,200 bytes, esto equivale a 14.5 MB. Para 30 días 435 MB, este tipo de operaciones, aun lo puede gestionar una base de datos relacional.</p>
      <p> A lo anterior, si empezamos colocar más variables de medición, como por ejemplo temperatura, humedad, los registros van aumentando, como por ejemplo DL-302, puede almacenar registros de CO, CO2, temperatura, humedad y almacenando fecha y hora.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/DL-302a.jpg" class="image_productos" width="300px" alt="" title="EVENT101A"></center>
      <p style="text-align: center; font-size: 12px" align="right"><b>Fig. 2. Fotografia de un Registrador de datos de CO2, temperatura y humedad con pantalla táctil modelo DL-302.</b></p>
      <p>
        Dando como resultado, un incremento de tres veces el espacio asignado para el almacenamiento, dando como resultado 1.305 GB de espacio asignado en disco duro para los registros de un mes, para un manejador de bases de datos convencionales ya no es recomendable, optando por manejadores del Tipo NoSQL.
      </p>
      <h2 class="subtitle blue text-center my-5">NoSQL</h2>
      <p>Primeramente, debemos conocer el concepto del NoSQL, son base de datos no relacionados mejoradas para los modelos de datos sin necesidad de esquema y de desempeño escalable. Esta base de datos cuenta con una variedad de modelos de datos, como por ejemplo los almacenes de valor, gráficos, documentos y de columnas. Por otra parte, son mejoradas para requerir inmensa cantidad de datos.</p>
      <p>Las aplicaciones de hoy en día usan y pueden generar datos complejos y que pueden cambiar constantemente, ya que con las bases de datos relacionales no fueron diseñadas para administrar este tipo de adquisición y recuperación de datos. Una de las ventajas del NoSQL, no vienen sin ningún costo.</p>
      <p>Hoy en día, la base de datos NoSQL cuenta con aproximadamente 150 sistemas de base de datos, útiles para una buena necesidad de adquisición de datos, elegir de tantos sistemas puede ser difícil para el usuario, pero existen 4 manejadores de base de datos que son las más usadas en la actualidad: orientada a documentos, orientada a columnas, de clave-valor (recomendable), y en grafo, así que explicaremos en que consiste cada uno de estos sistemas, para que el usuario pueda elegir cual es mejor adaptable a sus necesidades:</p>
      <p class="med">A. Orientado a documentos</p>
      <p>Los sistemas orientados a documentos son aquellos que administran los datos semi-estructurados, es decir documentos. Los datos son llenados en algún formato específico, como por ejemplo XML, JSON, o BSON.</p>
      <p>Este tipo de base de datos es más adaptables. Se pueden utilizar en gran cantidad de proyectos, incluyendo muchos que tradicionalmente funcionarían sobre bases de datos relacionales.</p>
      <p>Dentro de esta categoría podemos encontrar:</p>
      <ul>
        <li>MongoDB</li>
        <li>CouchDB</li>
      </ul>
      <p class="med">B. Orientado a columnas</p>
      <p>Este tipo de bases de datos está consideradas para realizar consultas y agregaciones para grandes cantidades de datos. Funcionan de forma parecida a las bases de datos relacionales, pero almacenando columnas de datos en lugar de registros.</p>
      <p>Dentro de esta categoría podemos encontrar:</p>
      <ul>
        <li>Cassandra</li>
        <li>HBase</li>
      </ul>
      <p class="med">C. De clave-valor</p>
      <p>Este tipo de base de datos son las más sencillas de entender. Simplemente guardan tuplas que contienen una clave y su valor. Cuándo se quiere recuperar un dato, simplemente se busca por su clave y se recupera el valor.</p>
      <p>En su categoría se encuentra lo siguiente:</p>
      <ul>
        <li>DynamoDB</li>
        <li>Redis</li>
      </ul>
      <p class="med">D. En grafo</p>
      <p>Basadas en la teoría de grafos utilizan nodos y aristas para representar los datos almacenados. Son muy útiles para guardar información en modelos con muchas relaciones, como redes y conexiones sociales.</p>
      <p>En su categoría se encuentran:</p>
      <ul>
        <li>Infinite Graph</li>
        <li>Neo4j</li>
      </ul>
      <p>Estos manejadores de base de datos, son muy útiles y fácil su uso para la adquisición de datos, para almacenar los datos de temperatura de un datalogger, hay un sistema en especial que es recomendable para dichos registros, ya que por medio de ella, se almacena la medición y horafecha, y estamos hablando del sistema de base de datos NoSQL de Clave-valor.</p>
      <p>Un ejemplo: producciones y almacenamiento de alimentos, pues dentro de ese sector se requiere un control exacto para las temperaturas, ya que si no cuidan ese factor alimenticio, es probable que inicie su proceso natural de descomposición. Por el uso de la base de datos NoSQL utilizando la categoría DynamoDB, valores-clave que pueda almacenar grandes cantidades de datos de manera confiable, no hay muchas opciones mejores, con el cual se almacena la información del datalogger solo usando el valor de la temperatura que se registra diariamente y una clave para identificar o también con hora-fecha y es muy flexible su uso, ya que con esta base de datos almacena todo los datos del datalogger.</p>
      <h2 class="subtitle blue text-center my-5">Conclusiones</h2>
      <p>En un mundo de constantes cambios a nivel de sistemas, es necesario volver a pensar acerca de los paradigmas que manejan la industria. Necesitamos ajustar nuestras herramientas a las necesidades reales que tenemos hoy en día con el fin de tener sistemas a la altura de nuestros requerimientos.</p>
      <p>NoSQL hace referencia al conjunto de tecnologías en bases de datos que buscan alternativas al sistema de bases de datos relacional, en un contexto donde priman la velocidad, el manejo de grandes volúmenes de datos y la posibilidad de tener un sistema distribuido.</p>
      <p>Los registradores están cambiando más rápidamente que nunca antes, la capacidad de memoria de los mismos aumenta considerablemente, además los dispositivos están cambiando hacia complejos sistemas con alarmas, comunicación inalámbrica, reporte automático de eventos vía correo electrónico ó por celular, descarga automática de los resultados diarios a las bases de datos o a los usuarios directos.</p>
      <p class="text-center blue"><a class="link-orange" href="pdf/articulos/Registradores-el-reto-del-almacenamiento.pdf" target="_blank" title="Registradores, el reto del almacenamiento" alt="Registradores, el reto del almacenamiento">Leer Artículo Completo</a></p>
      <h2 class="subtitle blue text-center my-5">Productos relacionados</h2>
      <div class="card-deck text-center justify-content-center flex-wrap">
        <div class="card bg-light" style="max-width: 40vh;">
          <img src="https://www.logicbus.com.mx/imagenes/articulo/Event101A.jpg" class="card-img-top" alt="Event101A">
          <div class="card-body">
            <h5 class="card-title med">Event101A</h5>
            <p class="card-text text-justify">Registrador de datos de eventos con batería de 10 años de periodo de vida, rango de entrada de 0~30 VDC, velocidad de lectura de 4 Hz, capacidad de almacenamiento de 406,323 eventos.</p>
            <a href="https://tienda.logicbus.com.mx/EVENT101A_p_4287.html" target="_blank" class="btn btn-orange">Ver producto</a>
          </div>
        </div>

        <div class="card bg-light" style="max-width: 40vh;">
          <img src="https://www.logicbus.com.mx/imagenes/articulo/DL-302a.jpg" class="card-img-top" alt="DL-302">
          <div class="card-body">
            <h5 class="card-title med">DL-302</h5>
            <p class="card-text text-justify">Registrador de datos de CO2, temperatura y humedad con pantalla táctil.</p>
            <a href="https://tienda.logicbus.com.mx/DL-302_p_13836.html" target="_blank" class="btn btn-orange">Ver producto</a>
          </div>
        </div>
      </div>
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