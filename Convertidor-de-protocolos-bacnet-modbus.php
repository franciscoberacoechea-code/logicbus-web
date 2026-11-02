<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Convertidor de protocolos - BACnet a Modbus- Logicbus S.A de C.V.</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="description"
    content="En las últimas décadas, las necesidades en los edificios ya sean corporativas, industriales, comerciales o de las viviendas, han llegado a elaborar diversos tipos de sistemas de automatización que con el tiempo van creando edificaciones cada vez más inteligentes ...">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords"
    content="protocolo de comunicacion, Modbus, BACnet, HVAC, aire acondicionado, mundo industrial, PLC, convertidor de datos, RTA 460MMBS-N34-D, PLC FBS-20MCR2-AC, ">
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
  <?php require ("libreria/header.view.php"); ?>
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
            <li class="breadcrumb-item active" aria-current="page">Convertidor de protocolos BACnet a Modbus
            </li>
          </ol>
        </nav>
        <div class="griditemContA">
          <img src="https://www.logicbus.com.mx/imagenes/articulo/banner-bacnet-modbus.png" class="img-fluid"
            alt="Convertidor de protocolos - BACnet a Modbus" title="Convertidor de protocolos - BACnet a Modbus">
          <p class="paragraph mt-4 text-justify"><b>Resumen</b> El presente artículo se expondrá acerca de la
            comunicación entre los aires acondicionados y los PLC, exponiendo un ejemplo de cuando se
            existen protocolos de comunicación diferentes en cada dispositivos y como se soluciona.</p>
        </div>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <h2 class="subtitle blue text-center my-5">Introducción</h2>
      <p>En las últimas décadas, las necesidades en los edificios ya sean corporativas, industriales, comerciales
        o de las viviendas, han llegado a elaborar diversos tipos de sistemas de automatización que con el
        tiempo van creando edificaciones cada vez más inteligentes. Los constructores se enfocan al confort, la
        eficiencia energética y a la seguridad que tendrá cada edificio.</p>
      <p>Dentro del mercado de la automatización, sigue en constante incremento de comunicación, las soluciones y
        productos permiten un mejor estilo de vida para los usuarios. Las innovaciones han hecho un caso posible
        que ahora puedes controlar la casa desde un Smartphone o cualquier dispositivo móvil que tenga acceso a
        internet, a esto incluye la iluminación, sistemas de aire acondicionado y de seguridad, entre otras
        cosas.</p>
      <p>El objetivo de controlar los sistemas de aire acondicionado es ofrecer un ambiente interno agradable, por
        medio de control de temperatura, humedad, limpieza del mismo y movimiento de aire, teniendo en cuenta
        que todas las características estarán centralizadas, sin disminuir el confort ni minimizar sus
        funciones.</p>
      <p>Para que los sistemas puedan ofrecer un potencial de ahorro de energía, es indispensable el buen control
        y al mismo tiempo, que sean capaces de comunicarse con otros sistemas para tomar decisiones en conjunto,
        con esto se podrá obtener un mejor desempeño y un mejor confort en el edificio, lo cual es el principal
        objetivo de un sistema de aire acondicionado.</p>
      <h2 class="subtitle blue text-center my-5">BACnet</h2>
      <p>Dentro del mundo industrial, un protocolo llegó sin un nombre, fue dentro de los años de su creación
        cuando se dio el nombre de protocolo “ASHRAE, después “ASHnet” y “BACtalk”, pero al final se tomó la
        decisión de nombrarlo que hasta hoy en día se conoce mundialmente como BACnet.</p>
      <p>BACnet es uno de los protocolos de comunicación de datos más utilizados dentro de la automatización de
        edificios y control de redes. Lo que le hace especial a este protocolo es que estas reglas son acopladas
        especialmente en la automatización de los edificios, donde se puede dar mención de como preguntar el
        valor de una temperatura o definir una operación de ventilación o activar alarmas, entre otras
        actividades.</p>
      <p>A paso de los años una gran lista de referencias convierte a BACnet en un protocolo mundial capaz de
        agregar equipos de un amplio abanico de fabricantes en un único sistema e incluso de integrar
        dispositivos y conectar otros protocolos como puede ser por ejemplo Modbus. Una de estas finalidades de
        este protocolo es que puede definir todos los servicios y protocolos de comunicación de datos para todos
        los dispositivos informáticos, que son utilizados en la automatización y control de servicios tales como
        sistemas de calefacción, ventilación, aires acondicionados, iluminación o accesos. También permite la
        realización de presentaciones abstractas y orientadas a objetos de la información comunicada entre
        distintos equipos, facilitando así la aplicación y el control de las tecnologías digitales en edificios.
      </p>
      <p>Dentro de este protocolo, BACnet nos proporciona un grupo completo de mensajes, ya que esto puede
        transportar datos binarios, analógicos y alfanuméricos codificados entre los dispositivos, incluyendo,
        valores de entrada y salida de hardware, valores de entrada y salida analógicos, valores binarios y
        analógicos de software, valores de cadenas de texto, información de los horarios, información de las
        alarmas y eventos, entre muchos.</p>
      <p>Este protocolo cuenta con 2 objetos importantes que tienen varias propiedades en común, ya que los
        objetos cuentan con nombre, un identificador una descripción un tipo y un valor, los objetos son los
        siguientes:</p>
      <p class="med">A. Analog Input</p>
      <p>Este objeto de entrada analógica se define como un objeto estandarizado, donde las propiedades simbolizan
        las características externamente visibles de una entrada analógica.</p>
      <p class="med">B. Analog Output</p>
      <p>Este objeto de salida analógica se define como un objeto estandarizado donde las propiedades simbolizan
        las características externas invisibles de una salida analógica.</p>
      <h2 class="subtitle blue text-center my-5">Modbus</h2>
      <p>Modbus es un protocolo que se encuentra ubicado en el nivel 7 del modelo OSI (Interconexión de sistema
        abierto), basado en la arquitectura cliente/servidor, en el que el servidor cada vez que envía una
        solicitud es tratado de una forma independiente por el cliente. Esto le facilita a proveer transacciones
        de datos resistentes a rupturas, requiriendo la mínima información de recuperación para poder mantener
        una de las transacciones de manera firme en cualquiera de las dos terminales.</p>
      <p>Modbus especifica el procedimiento que el controlador y el cliente utilizan para intercambiar datos, el
        formato de estos datos, y como se tratan los errores. No especifica estrictamente el tipo de red de
        comunicaciones a utilizar, por lo que se puede implementar sobre redes basadas en Ethernet, RS-485,
        RS-232, etc.</p>
      <p>Dentro del protocolo, Modbus cuenta con los modos de transmisión, donde definen como se envía el paquete
        de datos entre Cliente/Servidor, y a continuación son definidos de la siguiente manera:</p>
      <p class="med">A. Modbus RTU</p>
      <p>Es un protocolo abierto, derivado de la arquitectura Cliente/Servidor, es un formato de transmisión en
        serie de datos utilizando extensamente en las comunicaciones de los PLC's pero fácilmente adaptable a
        otros tipos de instrumentación gracias a su particular estructura de mensajes, es un protocolo
        ampliamente aceptable dentro del ambiente industrial, debido a su facilidad de uso y fiabilidad.</p>
      <p class="med">B. Modbus ASCII</p>
      <p>Este protocolo es parte de la familia Modbus que opera en la capa de red en serie. Con la ayuda de un
        cliente, podemos configurar y recuperar los datos ASCII de Modbus desde su dispositivo y ponerlos a
        disposición de otros dispositivos, o podemos emular un Servidor Modbus y enviar datos a su dispositivo
        Modbus desde otros dispositivos que no sean Modbus.</p>
      <p>Estos protocolos son utilizados en una gran variedad de equipos, llegando a estandarizarse el manejo del
        mismo en el ámbito industrial. El uso ya sea de Modbus RTU o Modbus ASCII depende principalmente en
        función de la robustez, capacidad, características de los equipos involucrados, etc.</p>
      <h2 class="subtitle blue text-center my-5">Ejemplo convertidor de BACnet a Modbus (HVAC)</h2>
      <p>La automatización del sistema HVAC (Calefacción, ventilación y control de aire acondicionado) hace
        referencia al conjunto de técnicas para la realización de tratamiento del aire proveniente del ambiente
        y ser procesado para poder obtener: calefacción, refrigeración, control de temperatura, ahorro de
        energía entre otros. Con el control de la climatización, se ha logrado mantener los parámetros de
        humedad, temperatura y calidad del aire, dentro de los márgenes adecuado según lo que se requiera del
        cliente.</p>
      <p>Se puede definir que un sistema de aire acondicionado es una agrupación de equipos y elementos que su
        objetivo es suministrar condiciones de conforten un determinado lugar, en el caso industrial. Al
        automatizar el sistema de aire acondicionado (AC) se puede disminuir los gastos de mantenimiento y
        ahorro de energía.</p>
      <p>Generalmente el sistema de aire acondicionado se encuentra conformado por control de humedad, control de
        temperatura y climatización.</p>
      <p>Cuando se conecta un convertidor para aplicaciones HVAC (calefacción, ventilación y control de aire
        acondicionado) a un dispositivo de otro fabricante, normalmente se utiliza pasarelas para traducir el
        protocolo y poder transferir mensajes entre ambos.</p>
      <p>Para poder controlar un equipo de AC requerimos utilizar un PLC, y es sencillo cuando contamos con el
        mismo protocolo de comunicación, es decir, tanto el equipo AC y el PLC hablan el mismo idioma, la
        variante es establecer la comunicación entre dos dispositivos que manejen diferentes protocolos de
        comunicación.</p>
      <p>Un ejemplo que podríamos mencionar es un dispositivo de AC que maneja un protocolo BACnet y un PLC que
        maneja Modbus, como realizar la comunicación.</p>
      <p>BACnet es una tecnología abierta, lo que significa que cualquier fabricante puede utilizar este protocolo
        para poder transferir los datos. Uno de los equipos que pueda establecer la comunicación entre el AC y
        el PLC es el convertidor de protocolos de la marca RTA 460MMBS-N34-D que se cuenta en Logicbus, este
        producto proviene de la familia de convertidores series 460MMBS, el 460MMBS mueve datos entre 2 hasta 32
        clientes mediante el protocolo de comunicación Modbus RTU y los transfiere mediante el protocolo de
        comunicación BACnet / IP y viceversa. Es la herramienta perfecta que le permite usar el exceso de
        dispositivos Modbus RTU disponibles en sus sistemas de automatización de edificios que utiliza el
        protocolo de comunicación BACnet / IP.</p>
      <p>Los equipos de HVAC incluyen sensores de temperatura, medidores de potencia, controladores de aire,
        unidades, medidores de flujo, entre otros. Ya que por medio de este convertidor hace la transferencia de
        los datos del aire acondicionado hacia un PLC como por ejemplo, se puede conectar a un PLC FBS-20MCR2-AC
        que se encuentra en distribución por parte de Logicbus y es de la familia series PLC FBS, teniendo la
        tarea del control, medición y automatización de las acciones del aire acondicionado.</p>
      <h2 class="subtitle blue text-center my-5">Conclusiónes</h2>
      <p>BACnet es el protocolo de comunicación más completo y potente en la automatización de edificios.</p>
      <p>Ha sido desarrollado para su uso en todos los niveles de la automatización de edificios y para todos los
        sistemas, ya sea climatización, iluminación o seguridad.</p>
      <p>El futuro de la automatización de edificios se encuentra en la capacidad y voluntad de los fabricantes
        para ofrecer soluciones abiertas, totalmente integradas y unificadoras.</p>
      <p>En las zonas de los edificios existe la necesidad de dispositivos y sistemas que estén equipados a nivel
        de campo con diferentes interfaces de comunicación. Los protocolos habituales que han favorecido en la
        pasarela de datos entre ellos se encuentran el protocolo Modbus, por medio de ella usando un convertidor
        lleva el control de transmisión de datos de un equipo.</p>
      <p>BACnet es el protocolo más utilizado para conectar equipos HVAC (aire acondicionado), ya que esta
        arquitectura permite elegir los sistemas preferidos y BACnet permite la integración de los sistemas sin
        desarrollar o instalar convertidores personalizados.</p>
      <p>Aunado a esto, podemos conectar equipos que sean desarrollados en determinado protocolo y se requiera
        controlar mediante otro protocolo diferente, esto brinda la facilidad de no detener o invertir demasiado
        en un proyecto de integración, así como el economizar soluciones.</p>
      <p class="text-center blue"><a class="link-orange"
          href="pdf/articulos/Convertidor-de-protocolos-de-bacnet-a-Modbus.pdf" target="_blank"
          title="Convertidor-de-protocolos-de-bacnet-a-Modbus" alt="Convertidor-de-protocolos-de-bacnet-a-Modbus">Leer
          Artículo Completo</a></p>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require ("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>