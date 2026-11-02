<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title> [TITULO ARTICULO] </title>
<meta name="description" content=" [DESCRIPCION] ">
<meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, [KEYWORDS] ">


<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">


<!-- Bootstrap core CSS -->
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="libreria/estilos.css" rel="stylesheet" >

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="libreria/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]color azul#184797-->




      <script language="javascript">
        function menu_actual(){
          document.getElementById("productos").className = "dropdown active";
        };
      </script>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>
<div id="main" >
 <div class="container articulos">

  <div class="row"> <!-- FILA -->
    <div class="col" align="center"> <!-- COLUMNA -->
  
      <!-- NOMBRE DEL ARTICULO YA SEA NUMERO DE PARTE -->
      <h1 class="titulo_articulo"> [TITULO ARTICULO] </h1>

      <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
      <img src="imagenes/articulo/SIN_IMAGEN.png" width="50%" alt="[TITULO ARTICULO ]" title="[TITULO ARTICULO ]">


      <!-- TODOS LOS PARAFOS PONERLOS DENTRO DE LA ETIQUETA <P> Y ASEGURARSE DE CERRARLA </P> -->
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur doloribus expedita iste modi perferendis, cupiditate nemo provident, nisi consequuntur ut. Iure repudiandae mollitia maxime vel et nam doloremque, sint! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis culpa nesciunt ipsum sequi velit nostrum non cumque alias hic quaerat totam molestias, mollitia dicta ipsa</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur doloribus expedita iste modi perferendis, cupiditate nemo provident, nisi consequuntur ut. Iure repudiandae mollitia maxime vel et nam doloremque, sint! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis culpa nesciunt ipsum sequi velit nostrum non cumque alias hic quaerat totam molestias, mollitia dicta ipsa</p>

    </div>
  </div>

  <div class="row my-3">
    <div class="col-12 col-lg-3">
      <img src="imagenes/articulo/SIN_IMAGEN.png" width="50%" alt="[TITULO ARTICULO ]" title="[TITULO ARTICULO ]">
    </div>
    <div class="col-12 col-lg-9">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus sequi debitis similique odit quia molestias minima quaerat quas veniam qui dignissimos, iure provident voluptatibus, perferendis voluptatum at id, nobis.
    </div>
  </div>

  <div class="row my-3">
    <div class="col-12 col-lg-9 order-2 order-md-1">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus sequi debitis similique odit quia molestias minima quaerat quas veniam qui dignissimos, iure provident voluptatibus, perferendis voluptatum at id, nobis.
    </div>
    <div class="col-12 col-lg-3 order-1 order-md-2">
      <img src="imagenes/articulo/SIN_IMAGEN.png" width="50%" alt="[TITULO ARTICULO ]" title="[TITULO ARTICULO ]">
    </div>
  </div>

  <div class="row">
    <div class="col">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod quaerat voluptatum repellat non, facilis minus earum vero! Architecto, voluptate voluptatibus amet quibusdam animi cupiditate dicta, cum ullam, quo est soluta.
    </div>
  </div>

</div>
</div>

<?
 abajo();
?>
</body>
</html>