<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Winmate- Marca Exclusiva Logicbus</title>

<meta name="description" content="Winmate Inc. fabrica pantallas industriales y pantallas táctiles, señalización digital, PC con panel integrado y dispositivos de mano para industrias que van desde el transporte y la logística, a la marina y militar, ferroviaria, petrolera y de gas, médica, inteligente red, asistencia sanitaria y servicio de campo.">

<meta name="keywords" content="Logicbus, pantallas industriales, pantallas táctiles, señalización digital, PC con panel integrado, Tablet PC resistente, Solución de pantallas industriales, Solución para PC móvil, Panel PC y PC Embebido, Pantalla resistente y panel de PC, Soluciones de pantalla y PC de grado marino/militar, Solución de convertidor SDI">

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

 function menu_actual(){
     document.getElementById("marcas").className = "active";
     document.getElementById("collapseOne").className = "collapse";
     document.getElementById("collapseTwo").className = "show";
     document.getElementById("altus").className = "list-group-item list-group-item-action active";
  };
</script>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>
  
  <div id="main">
  <div class="container pagina_producto">
    <div class="row">
      <div class="col" align="">
        <!-- RUTA DEL PRODUCTO ENTRE LAS CATEGORIAS -->
        <div class="ruta_productos">
          <a href="productos">Productos</a> -&gt;<a href="Winmate">Winmate</a>
        </div>
        <!-- NOMBRE DEL PRODUCTO YA SEA NUMERO DE PARTE -->
       <h1>Winmate</h1> 

        <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
        <div class="row mb-3">
          <div class="col" align="center" >
            <img src="images/nuestras_marcas/Logo-Winmate.jpg"  alt="Winmate" title="Winmate" width="30%">
          </div>
        </div>

        <p>Winmate Inc. fabrica pantallas industriales y pantallas táctiles, señalización digital, PC con panel integrado y dispositivos de mano para industrias que van desde el transporte y la logística, a la marina y militar, ferroviaria, petrolera y de gas, médica, inteligente red, asistencia sanitaria y servicio de campo.

        Winmate crea sistemas inteligentes que promueven el Internet de todo (IOE) y las comunicaciones en toda la empresa en todo el mundo. Winmate no solo suministra una gama muy amplia y profunda de productos estándar, sino que también ofrece servicios profesionales en la personalización de productos y gestión de proyectos para satisfacer todos los requisitos del cliente. Los principales productos de Winmate incluyen:

        <ul>
        <li>Tablet PC / Tablet industrial resistente</li>
        <li>Solución de pantallas industriales</li>
        <li>Solución para PC móvil</li>
        <li>Panel PC y PC Embebido</li>
        <li>Pantalla resistente y panel de PC</li>
        <li>Soluciones de pantalla y PC de grado marino/militar</li>
        <li>Solución de convertidor de corriente continua</li>
        <li>Solución de convertidor SDI</li>
        </ul>
        </p>


        <div align="center">
        <table>
          <tr>
            <td align="center">
              <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Logicbus%20-%20Panel%20PC.pdf" target="_blank">
              <img src="pdf/catalogos/Prtada-Winmate.PNG" width="55%"></a>
            </td>
            <td align="center">
              <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Logicbus%20-%20Embedded%20Computing.pdf" target="_blank">
              <img src="pdf/catalogos/Portada-Embedded-Computing.PNG" width="55%"></a>
            </td>
          </tr>
        </table>
        </div>

      </div> <!-- /col -->
    </div> <!-- /row base -->
  </div> <!-- /container -->
</div> <!--  /main -->

<?
 abajo();
?>
</body>
</html>