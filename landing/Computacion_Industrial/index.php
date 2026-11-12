<!--libreria de el display de los items -->
<?php
include '../display.php';
$Print = new Basicsdisp();
?>

<!DOCTYPE html>
<html>

<title>DEMO langing cincoze, prueba de muestra en paginas</title>

<?php   //Descripcion de el titulo
$Print->Header("pato el que lo lea");  ?>

<body   data-spy="scroll" data-target="#navbar" data-offset="10">

  <script>
    AOS.init();
  </script>

  
<?php
$Print->cotizacion();
$Seleccion = array(
    "1"=> "INICIO",
    "2"=> "PUBLICACIONES DE INTERES",
    "3" => "PC INDUSTRIAL",
    "8" => "PANEL PC", 
    "13"=> "TABLETS",
    "18"=> "MONITOR INDUSTRIAL",
    "23"=>"CONTACTO"

);
$Print->navbar($Seleccion);

$Print->Head("https://www.logicbus.com.mx/landing/demo/images/banner.png","Equipos de computo industrial Logicbus","conoce nuestros equipos cincoze para aplicaciones en tu Industria, Negocio, Empresa ó proyecto!!! ",1);
$Imagenes = array(
  array(
      "link" => "https://tienda.logicbus.com.mx/",
      "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
  ),
  array(
      "link" => "https://tienda.logicbus.com.mx/",
      "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
  ),
  array(
      "link" => "https://tienda.logicbus.com.mx/",
      "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
  ),
  array(
      "link" => "https://tienda.logicbus.com.mx/",
      "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
  )
);
      //array de imagen, titulo,          ID
$Print->Carrusel($Imagenes,"Te Podria Interesar...",2);


/*
card_button
full card
card_list*/

$Print->fullcard("https://www.logicbus.com.mx/landing/demo/images/banner.png","Computadoras industriales"," <br> Sin Cables... <br> Sin ventilador... <br>  Resistente a  condiciones ambientales adversas",3);
$Print->card_button_L("Potencia y Resistencia","Computadoras integradas que están diseñadas para ser resistentes, sin ventilador, sin cables y están sujetas a pruebas rigurosas para verificar su idoneidad para funcionar en condiciones ambientales adversas. Son extremadamente fiables y adecuados para una amplia gama de aplicaciones industriales.","pc-horizontal","https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales","https://www.cincoze.com/data/images/202112/1638409331791782168.png",5);
    $card=array(
      array("icono" => "graph-up-arrow", "titulo" => "Potencia eficiente y expandible (serie DE)", "descripcion" => "La PC integrada sin ventilador de la serie DE se integra con el procesador Intel® Atom™ Quad Core. Al ofrecer la excelente potencia de procesamiento de cuatro núcleos con un consumo de energía de solo 10 vatios, la serie DE es definitivamente una solución ideal para el máximo rendimiento informático, eficiencia energética y fiabilidad superior. Al admitir hasta 6x LAN o 4x PoE, y la función de encendido, la serie DE cumple con varias aplicaciones, como vigilancia, en vehículos, automatización de fábrica y automatización de máquinas.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-potencia-eficiente-y-expandible-serie-de"),
      array("icono" => "arrows-angle-contract", "titulo" => "Tamaño compacto y alto rendimiento  (serie DI)	", "descripcion" => 'El nuevo miembro de Cincoze, DI Series, significa "Diamante Inteligente" y es la primera serie diseñada para "alto rendimiento y compacta" dentro de la cartera de productos de Cincoze. El diseño único de la serie DI lo hace ideal para aplicaciones exigentes, de espacio limitado y de rendimiento, como la automatización de fábrica, la visión artificial, la informática en el vehículo y la vigilancia móvil.',"link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-alto-rendimiento-y-tamano-compacto-serie-di"),
      array("icono" => "thermometer-sun", "titulo" => "Rendimiento extremo y tamaño compacto (DX Series)", "descripcion" => 'La primera estación de trabajo integrada resistente de Cincoze, la serie DX, significa "Diamond Extreme" y es una estación de trabajo compacta y de rendimiento extremo con tecnología Intel Xeon y procesadores centrales. Esto puede brindar un rendimiento sobresaliente del sistema para aplicaciones de alta gama y una amplia gama de procesadores para la selección. La serie DX es la estación de trabajo más compacta con un diseño altamente modular, admite expansión de E/S modular flexible, 2 bandejas de disco duro con acceso frontal y combinaciones ilimitadas para requisitos de espacio limitado.',"link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-rendimiento-extremo-y-tamano-compacto-serie-dx"),
      array("icono" => "lightning-charge-fill", "titulo" => "Tamaño eficiente de energía y compacto (Serie DC)", "descripcion" => "La serie Cincoze DC es un sistema de tamaño compacto y eficiente de energía diseñado con un procesador Intel® Quad Core de baja potencia incorporado, E/S enriquecida, una capacidad de expansión única y admite una entrada de alimentación de DC de amplio rango (9 ~ 48V). La serie DC es muy pequeña y eficiente con bajo consumo de energía, por lo que es ideal para aplicaciones integradas donde el espacio es limitado.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-tamano-eficiente-de-energia-y-compacto-serie-dc"),
      array("icono" => "gpu-card", "titulo" => "Alto rendimiento y expandible (serie DS)", "descripcion" => "La serie Cincoze DS es una computadora integrada sin ventilador de alto rendimiento que funciona con la plataforma Intel® Core™ que admite una amplia gama de CPU de escritorio tipo socket y admite dos sockets de memoria de hasta 32 GB, lo que permite a la serie DS cumplir con todo tipo de informática de alta gama requisitos. La serie DS también admite un máximo de 2 ranuras de expansión PCI/PCIe con la combinación diferente de interfaces para expandir todo tipo de tarjetas adicionales de aplicaciones. La serie DS es realmente un sistema informático robusto con características de temperatura de funcionamiento amplia, amplio rango de entrada de alimentación de DC (de 9V a 48V), alta tolerancia a golpes y vibraciones y protecciones industriales de alto estándar.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-alto-rendimiento-y-ampliable-serie-ds"),
      array("icono" => "battery-charging", "titulo" => "Energía eficiente y tamaño de la palma (serie DA)", "descripcion" => "La serie DA es una computadora integrada sin ventilador de tamaño ultracompacto con procesador Intel® Atom™/Celeron®/Pentium®. Esto puede aportar ventajas económicas en el presupuesto y también satisfacer las necesidades de las tareas informáticas industriales. La serie DA admite la interfaz y los módulos de E/S múltiple combinada (CMI) especialmente diseñados para una capacidad de expansión de E/S flexible; Permite a los usuarios extender varias E/S según sus necesidades.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-computadoras-industriales-energia-eficiente-y-tamano-de-la-palma-serie-da"),
    );
$Print->card_list_link($card,"Nuestras Series",7);






$Print->fullcard("https://www.logicbus.com.mx/landing/demo/images/banner.png","Panel PC","Con un amplia gama de resoluciones retro iluminadas y táctiles",8);
$Print->card_button_R("pc-display","Lo Mejor de Dos mundos","Disponibles en una amplia selección de tamaño de pantalla, brillo de retroiluminación, tipo táctil y rendimiento de la computadora. Nuestros monitores están diseñados con tecnologías innovadoras, el más alto estándar industrial y amplias funcionalidades que satisfacen las necesidades de una amplia gama de aplicaciones. <br> La tecnología patentada CDS (Convertible Display System), el mantenimiento en el sitio y la capacidad de actualización futura son más fáciles que nunca mediante la implementación de nuestros monitores.","https://tienda.logicbus.com.mx/panel-pc-todo-en-uno","https://www.cincoze.com/data/images/202112/1638409331791782168.png",10);
    $card=array(
      array("icono" => "puzzle-fill", "titulo" =>  "modular de alto rendimiento" , "descripcion"=> 'La serie Cincoze CV-100/P2000 es una PC de panel táctil resistente sin ventilador y sin puente de alto rendimiento alimentada por el procesador Intel® Core ™ serie U, que ofrece más potencia informática, procesamiento de datos más rápido y rendimiento gráfico mejorado, mientras consume solo 15W de potencia. Hay disponible una amplia selección de tamaños de pantalla de 12.1 "a 24" con un aspecto de formato de 4:3 y 16:9. <br>La serie CV-100/P2000 admite la tecnología CFM (Módulo de función de control), la interfaz definida por Cincoze con señal de control y aumento de potencia integrada que le permite ampliar las funciones de detección de ignición y PoE con placas CFM adicionales.',"link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-panel-pc-todo-en-uno-pc-de-panel-modular-de-alto-rendimiento"),
      array("icono" => "battery-charging", "titulo" =>  "consumo eficiente.", "descripcion" => 'La PC Panel Cincoze Convertible incluye dispositivos todo en uno que integran una pantalla de alta resolución, una pantalla táctil y una computadora. Hay disponible una amplia selección de tamaños de pantalla de 8.4" a 24" con un aspecto de formato de 4:3 y 16:9, y un rendimiento de computadora seleccionado.',"link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-panel-pc-todo-en-uno-panel-pc-modular-de-consumo-eficiente-de-energia"),
      array("icono" => "lightning-charge-fill", "titulo" =>  "legile a la luz solar", "descripcion" => 'Esta serie de PC todo en uno Sunlight Readable Panel PC está disponible desde pantallas de 12" ~ 19", pantalla táctil capacitiva proyectada, alimentada por el procesador Intel® Core™ serie U con un consumo de energía de solo 15 vatios. Es una solución de PC de panel resistente y confiable con un brillo de hasta 1600 nits dedicada a aplicaciones industriales de luz solar.',"link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-panel-pc-todo-en-uno-panel-pc-de-alto-rendimiento-legible-por-luz-solar"),
      array("icono" => "shield-fill-check", "titulo" =>  "proteccion IP65", "descripcion" => "Los monitores están disponibles en una amplia selección de tamaño de pantalla, brillo de retroiluminación, tipo táctil y rendimiento de la computadora. Nuestros monitores están diseñados con tecnologías innovadoras, el más alto estándar industrial y amplias funcionalidades que satisfacen las necesidades de una amplia gama de aplicaciones.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-panel-pc-todo-en-uno-panel-pc"),
    );
$Print->card_list_link($card,"Segun a Tu Necesidad",12);





$Print->fullcard("https://www.logicbus.com.mx/landing/demo/images/banner.png","Tablet Industrial","Inalambrico, Portable y Autonomo",13);
$Print->card_button_L("Portabilidad y Resistencia","Las tabletas robustas Logicbus tienen un tamaño total, que abarca de 7 a 12 pulgadas y son compatibles con diferentes sistemas como Android o Windows, o Linux para satisfacer sus solicitudes específicas.<br>El soporte completo de la red de comunicación se adapta a las situaciones inalámbricas.<br>Pantalla más grande, equipo portador para informatización industrial y batería reemplazable, mayor duración de la batería.<br>Se utilizan principalmente en la inspección de automóviles, vehículos, fábricas de productos químicos inteligentes y otras industrias.","tablet-fill","https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-tablet-pc-tablet-industrial-resistente-tablets-industriales","https://www.cincoze.com/data/images/202112/1638409331791782168.png",15);
    $card=array(
      array("icono" => "phone-fill", "titulo" => "celular resistente", "descripcion" => "¡La movilidad es la nueva tendencia para las aplicaciones industriales! Con la última tecnología de movilidad y gestión de baterías desarrollada.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-tablet-pc-tablet-industrial-resistente-rugged-mobile-computer"),
      array("icono" => "car-front-fill", "titulo" => "Con Montaje vehicular", "descripcion" => "En el entorno del almacén, es esencial la capacidad de montar dispositivos móviles y computadoras en carretillas elevadoras, camiones, etiquetadoras y recolectores de inventario. Desde la gestión de inventario hasta el cumplimiento de pedidos, el seguimiento de activos y el envío y recepción, el piso del almacén es un ecosistema complejo que requiere tecnología de alta eficiencia para que funcione sin problemas. La línea completa de computadoras robustas para montaje en vehículos de Winmate, diseñadas para encajar perfectamente en carretillas elevadoras y otros vehículos de almacén, ayudará a minimizar los errores, agilizará los pedidos y la gestión de inventario, y mejorará la eficiencia operativa.","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-tablet-pc-tablet-industrial-resistente-vehicle-mounted-computer"),
      array("icono" => "hammer", "titulo" => "Tablet Ultrarresistente", "descripcion" => "Las tabletas ultrarresistentes son dispositivos de factor de forma ultra robustos y sin ventilador con potentes CPU Intel Core i5 disponibles en opciones de 8.4, 10.4 y 13.3 pulgadas. Para resistir los entornos más duros y las caídas frecuentes, especialmente en plantas de fabricación de automóviles polvorientas y talleres de diagnóstico de vehículos","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-table-pc-tablet-industrial-resistente-ultra-rugged-tablet"),
      array("icono" => "thermometer-high", "titulo" => "Resistente a Temperatura", "descripcion" => "Las tabletas robustas Logicbus tienen un tamaño total, que abarca de 7 a 12 pulgadas y son compatibles con diferentes sistemas como Android o Windows, o Linux para satisfacer sus solicitudes específicas. El soporte completo de la red de comunicación se adapta a las situaciones inalámbricas.","link"=>"https://tienda.logicbus.com.mx/Rugged-Tablet_c_4579.html"),
    );
$Print->card_list_link($card,"",17);





$Print->fullcard("https://www.logicbus.com.mx/landing/demo/images/banner.png","Pantalla Industrial","Monitores Táctiles Para Facil acceso",18);
$Print->card_button_R("hand-index","Intuitivo","Disponible en una amplia selección de tamaño de pantalla, brillo de retroiluminación, tipo táctil y rendimiento de la computadora. Nuestros monitores están diseñados con tecnologías innovadoras, el más alto estándar industrial y amplias funcionalidades que satisfacen las necesidades de una amplia gama de aplicaciones. <br> La tecnología patentada CDS (Convertible Display System), el mantenimiento en el sitio y la capacidad de actualización futura son más fáciles que nunca mediante la implementación de nuestros monitores.","https://tienda.logicbus.com.mx/pantallas-industriales.html","https://www.cincoze.com/data/images/202112/1638409331791782168.png",20);
    $card=array(
      array("icono" => "tv-fill", "titulo" => "Montaje en Panel ", "descripcion" => "","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-pantallas-industriales-pantallas-para-montaje-en-panel"),
      array("icono" => "tv-fill", "titulo" => "Montaje Universal", "descripcion" => "","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-pantallas-industriales-pantallas-para-montaje-universal"),
      array("icono" => "tv-fill", "titulo" => "Monitor de marco abierto", "descripcion" => "","link"=>"https://tienda.logicbus.com.mx/pcs-y-comunicaciones-industriales-pantallas-industriales-monitor-de-marco-abierto-open-frame"),
        );
$Print->card_list_link($card,"Para Distintos Tipos de Montajes",22);


$Print->footer("23");


?>


<!--scripts-->
    <!-- jQuery and Bootstrap -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/jquery-3.2.1.min.js"></script>
    <script src="https://www.logicbus.com.mx/landing/demo/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/script.js"></script>
</body>


</html>