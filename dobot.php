<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>DOBOT - Logicbus</title>

<meta name="description" content="Logicbus presenta: DOBOT, es un proveedor líder mundial de soluciones robóticas inteligentes totalmente perceptivas, que se centra en el desarrollo de brazos robóticos inteligentes que integran percepción e interacción.">

<meta name="keywords" content="DOBOT, Logicbus">

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

        <div class="ruta_productos">
          <a href="productos">Productos</a> -&gt;<a href="dobot">DOBOT</a>
        </div>
        <h1>DOBOT</h1> 

        <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
        <div class="row mb-3">
          <div class="col" align="center" >
            <img class="img-fluid" src="images/nuestras_marcas/Dobot-Mexico.jpg"  alt="ikey" title="ikey">
          </div>
        </div>

        <p>Logicbus presenta: DOBOT, es un proveedor líder mundial de soluciones robóticas inteligentes totalmente perceptivas, que se centra en el desarrollo de brazos robóticos inteligentes que integran percepción e interacción. Al poseer tecnologías centrales independientes, componentes clave y productos robóticos líderes, DOBOT ofrece soluciones que cubren la educación, la industria y los negocios, con el objetivo de preparar talentos de IA en la nueva era y satisfacer los requisitos de automatización en diferentes industrias.
        </p>

      <div class="col" align="right">
            <a href="https://tienda.logicbus.com.mx/robotics-solution-dobot.html" alt="Ir a tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" border="0"></a>        
      </div>
      
      <br>
      <div align="center">
       <a href="pdf/catalogos/DOBOT-mexico.pdf" target="_blank"><img src="https://tienda.logicbus.com.mx/assets/PDF/catalogos/CRx%20Brochure.JPG" width="30%" alt="Ver archivo pdf"><br>Ver Catalogo de DOBOT</a>
     </div>

     <br>
      <div align="center">
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/uTpmSrJO8r4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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