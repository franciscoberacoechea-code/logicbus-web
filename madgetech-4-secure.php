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
  <title>Software: MadgeTech 4 Secure | Logicbus</title>
  <meta name="description" content="El software MadgeTech Secure contiene firmas electrónicas, códigos de acceso, archivos de datos seguros y un seguimiento de auditoría.">

  <meta name="keywords" content="MadgeTech 4 Standard, Logicbus, Software, firmas electrónicas, códigos de acceso, archivos de datos seguros, seguimiento de auditoría">
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


  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de desarrollo</a></li>
            <li class="breadcrumb-item active" aria-current="page">MadgeTech 4 Secure</li>
          </ol>
        </nav>
        <h1 class="titulo_producto">MadgeTech 4 Secure</h1>

        <div align="center">
          <img src="imagenes/software/MadgeTech.png" alt="MadgeTech 4 Secure" title="MadgeTech 4 Secure" width="20%"><br>
        </div>

        <center><strong>Software de configuraci&oacute;n y descarga de datos para Registradores</strong></center>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/SVP-SECURE-SYSTEM_p_4504.html" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav>
        <p>MadgeTech Secure Software ayuda a los clientes a cumplir con los requisitos de 21 CFR Parte 11. El software garantiza estándares en los que los archivos electrónicos se consideran equivalentes a los registros en papel, ahorrando tiempo y esfuerzo. El software MadgeTech Secure contiene criterios tales como firmas electrónicas, códigos de acceso, archivos de datos seguros y un seguimiento de auditoría que cumple con los requisitos de 21 CFR Parte 11 y ayuda a proporcionar integridad de datos.
        </p>
      </div>
    </div>
    <div class="divCentrado">
      <p><br>
        Los protocolos IQ / OQ / PQ se incluyen con la compra del software MadgeTech 4 Secure para validar que el software se ha instalado y funciona correctamente. soporte en el sitio está disponible para la aplicación IQ / OQ / PQ y formación de software.
        <br><br>
        El diseño del software seguro es similar al software estándar MadgeTech 4, lo que permite a los usuarios aprender fácilmente las funciones adicionales. El software no es compatible con todos los registradores de datos MadgeTech.
        <br><br>
        Lista de registradores de datos MadgeTech no compatibles:
        <br><br>
      </p>
      <div align="center">
        <table width="50%" cellpadding="0" cellspacing="0" style="border: 1px solid black;" valign="middle">
          <tbody>
            <tr>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#7598FF">
                <div align="center">
                  <p class="subt">Nombre del producto</p>
                </div>
              </td>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#7598FF">
                <div align="center">
                  <p class="subt">Descripción</p>
                </div>
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">
                <div align="center">PRTemp101</div>
              </td>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">
                <div align="center">Registrador de temperatura de presión</div>
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">
                <div align="center">SVR101</div>
              </td>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">
                <div align="center">Registrador de vibración y temperatura</div>
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#CCCCCC">
                <div align="center">BTIF1000</div>
              </td>
              <td style="border: 1px solid black;" valign="middle" bgcolor="#FFFFFF">
                <div align="center">Interfaz Bluetooth® para registradores de datos de la serie 1000</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <p>
      <p class="subt">Servicios en Sitio IQ / OQ / PQ</p>
      MadgeTech proporciona servicios de IQ / OQ / PQ en el sitio para ayudar al usuario a validar el sistema de registro de datos. Nuestro personal capacitado está muy bien informado con los protocolos estándar IQ / OQ / PQ del sistema de registro de datos MadgeTech. Este servicio es un medio rentable para ahorrar tiempo y garantizar la implementación adecuada de IQ / OQ / PQ del sistema de registro de datos MadgeTech con una interrupción mínima para el personal y las operaciones. Obtenga más información sobre nuestro servicio en Sitio IQ / OQ / PQ.</p>
      <br>
      <div align="center">
        <img src="imagenes/software/header.jpg" class="image_productos" alt="MadgeTech 4 Secure" title="MadgeTech 4 Secure" width="80%">
      </div>

      <p class="subt">Gestión de usuarios:</p>

      <p>Los usuarios pueden tener dos niveles de acceso, ya sea administrador o usuario. Los administradores tienen acceso a todas las configuraciones de seguridad, mientras que los usuarios solo tienen acceso para comunicarse con los registradores de datos y analizar los datos.</p>

      <p class="subt">Pista de auditoría:</p>

      <p>Un seguimiento de auditoría se guarda automáticamente con información tal como quién inició sesión y quién salió, qué archivos se descargaron, guardaron, imprimieron, etc. Cada registro tiene fecha y hora impresas e incluye la información del usuario.</p>

      <p class="subt">Firmas electrónicas:</p>

      <p>Al hacer clic en el botón Firma electrónica, los usuarios y administradores pueden agregar firmas electrónicas. La firma electrónica contiene el nombre impreso del firmante, la fecha y la hora de la firma y el significado de la firma.</p>

      <p class="subt">Recursos de software:</p>
      <ul>
        <li>Lista de compatibilidad.</li>
        <li>Hoja de especificaciones.</li>
        <li>Lista de requisitos.</li>
        <li>IQ / OQ / PQ Servicio en el sitio.</li>
      </ul>


      <div class="row justify-content-center mt-5">
        <div class="col-8 col-md-4">
          <img src="imagenes/software/Sec1.jpg" class="image_productos" alt="Autodetección de registradores de datos" title="Autodetección de registradores de datos" width="100%">
        </div>
        <div class="col-12 col-md-8">
          <p class="subt">Autodetección de registradores de datos</p>
          <p>MadgeTech Secure Software ayuda a los clientes a cumplir con los requisitos de 21 CFR Parte 11. El software garantiza estándares en los que los archivos electrónicos se consideran equivalentes a los registros en papel, ahorrando tiempo y esfuerzo. El software MadgeTech Secure contiene criterios tales como firmas electrónicas, códigos de acceso, archivos de datos seguros y un seguimiento de auditoría que cumple con los requisitos de 21 CFR Parte 11 y ayuda a proporcionar integridad de datos.</p>
        </div>
      </div>


      <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-8 order-2 order-md-1">
          <p class="subt">Datos Vinculados</p>
          <p>Los gráficos y las cuadrículas de datos ahora se pueden vincular, lo que permite al usuario modificar rápida y fácilmente varias vistas de la misma información. Realice un cambio en la cuadrícula de datos y la información en el gráfico vinculado se sincroniza de forma inmediata y automática.</p>
        </div>
        <div class="col-8 col-md-4 order-1 order-md-2">
          <img src="imagenes/software/Sec2.jpg" class="image_productos" alt="Datos Vinculados" title="Datos Vinculados" width="100%">
        </div>
      </div>


      <div class="row justify-content-center mt-5">
        <div class="col-8 col-md-4">
          <img src="imagenes/software/Sec3.jpg" class="image_productos" alt="Plantillas" title="Plantillas" width="100%">
        </div>
        <div class="col-12 col-md-8">
          <p class="subt">Plantillas</p>
          <p>Nuevo en este software son las plantillas. Las plantillas permiten al usuario crear una copia de la configuración programada en un registrador. Una vez configuradas, las plantillas se pueden aplicar a todos los registradores del mismo tipo, lo que elimina la necesidad de que los usuarios dediquen tiempo a volver a ingresar información para cada registrador. Además, las plantillas ayudan a garantizar que cada usuario ingrese la información correcta cada vez.</p>
          <p>También son nuevas en MadgeTech Data Logger Software 4 las configuraciones memorizadas. Una vez que el usuario organiza las ventanas del software de una manera que le resulte útil, la computadora "memoriza" esa configuración para que la próxima vez que el usuario abra el software, se presente la misma configuración. No más desperdicio de tiempo reorganizando las ventanas, etc.</p>
        </div>
      </div>


      <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-8 order-2 order-md-1">
          <p class="subt">Múltiples conjuntos de datos</p>
          <p>La asignación de datos nunca ha sido tan fácil o rápida. Ahora los datos de múltiples registradores se pueden combinar fácilmente en una sola cuadrícula de datos simplemente arrastrando y soltando conjuntos de datos, creando una comparación de datos paralela para cada registrador.</p>
        </div>
        <div class="col-8 col-md-4 order-1 order-md-2">
          <img src="imagenes/software/Sec4.jpg" class="image_productos" alt="Múltiples conjuntos de datos" title="Múltiples conjuntos de datos" width="100%">
        </div>
      </div>


      <div class="row justify-content-center mt-5">
        <div class="col-8 col-md-4">
          <img src="imagenes/software/Sec5.jpg" class="image_productos" alt="Copia y pega a otros documentos" title="Copia y pega a otros documentos" width="100%">
        </div>
        <div class="col-12 col-md-8">
          <p class="subt">Copia y pega a otros documentos</p>
          <p>No más trabajo a través de una función de exportación de varios pasos. Simplemente copie y pegue datos y otra información en un correo electrónico, bloc de notas, Excel, etc. Superrápido y súper fácil.</p>
        </div>
      </div>

      <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-8 order-2 order-md-1">
          <p class="subt">Canales matemáticos y estadísticas</p>
          <p>Los nuevos canales y estadísticas de matemáticas permiten al usuario realizar rápidamente un análisis en profundidad de conjuntos de datos individuales y múltiples directamente dentro del software. En lugar de tener que exportar a Excel para realizar cálculos, una vez que se ha agregado un canal matemático o una estadística, se traza automáticamente en un gráfico o se puede ver en una cuadrícula de datos. Los usuarios pueden crear informes sofisticados, que pueden guardarse e imprimirse para su posterior revisión, todo en unos pocos y sencillos pasos.</p>
        </div>
        <div class="col-8 col-md-4 order-1 order-md-2">
          <img src="imagenes/software/Sec6.jpg" class="image_productos" alt="Canales matemáticos y estadísticas" title="Canales matemáticos y estadísticas" width="100%">
        </div>
      </div>

      <br>

      <div align="center">
        <a href="https://tienda.logicbus.com.mx/SVP-SECURE-SYSTEM_p_4504.html" style=" font-weight: bold;  font-size: 18px;">Clic aquí para visitar la Tienda para obtener el Software.</a>
      </div>
      <br>
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