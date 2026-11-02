<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title> [CATEGORIA] </title>
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
          document.getElementById("ID_MENU_LATERAL").className = "activo";
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
      <div class="col" align="center">
        <!-- RUTA DEL PRODUCTO ENTRE LAS CATEGORIAS -->
        <div class="ruta_productos">
          <a href="productos">Productos</a> -&gt;<a href="Serial_IO_Modules">Categoria</a>
        </div>
        <!-- NOMBRE DEL PRODUCTO YA SEA NUMERO DE PARTE -->
        <h1 class="titulo_producto"> [CATEGORIA] </h1>

        <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
        <img src="imagenes/articulo/SIN_IMAGEN.png" width="50%" alt="[CATEGORIA ]" title="[CATEGORIA ]">

        <!-- TODOS LOS PARAFOS PONERLOS DENTRO DE LA ETIQUETA <P> Y ASEGURARSE DE CERRARLA </P> -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consectetur doloribus expedita iste modi perferendis, cupiditate nemo provident, nisi consequuntur ut. Iure repudiandae mollitia maxime vel et nam doloremque, sint! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam officiis culpa nesciunt ipsum sequi velit nostrum non cumque alias hic quaerat totam molestias, mollitia dicta ipsa</p>

      </div> <!-- /col -->
    </div> <!-- /row base -->




    <div class="tabla_subcategorias_grid">

      <div class="row row-striped tabla_subcategorias_row" >
        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
          <a href="#">
            <img src="imagenes/articulo/SIN_IMAGEN.png" width="100%" alt="[CATEGORIA ]" title="[CATEGORIA ]">
          </a>
        </div>
        <div class="col-12 col-md-8 col-lg-8" align="left">
          <h2>SUBCATEGORIA</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquam provident molestias cum esse ipsum maxime, nesciunt vitae, beatae nam, fugiat. Minus quo, distinctio provident accusantium voluptatum quos repudiandae illum.</p>
        </div>
        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
          <a href="https://tienda.logicbus.com.mx/Serie-Nexto_c_3526.html" title="Ir a Tienda" target="_blank"><img src="https://tienda.logicbus.com.mx/assets/images/buy.gif" alt="Ir a Tienda" width="100%"></a>
        </div>
      </div>

      <div class="row row-striped tabla_subcategorias_row" >
        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
          <a href="#">
            <img src="imagenes/articulo/SIN_IMAGEN.png" width="100%" alt="[CATEGORIA ]" title="[CATEGORIA ]">
          </a>
        </div>
        <div class="col-12 col-md-8 col-lg-8" align="left">
          <h2>SUBCATEGORIA</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquam provident molestias cum esse ipsum maxime, nesciunt vitae, beatae nam, fugiat. Minus quo, distinctio provident accusantium voluptatum quos repudiandae illum.</p>
        </div>
        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
          <a href="https://tienda.logicbus.com.mx/Serie-Nexto_c_3526.html" title="Ir a Tienda" target="_blank"><img src="https://tienda.logicbus.com.mx/assets/images/buy.gif" alt="Ir a Tienda" width="100%"></a>
        </div>
      </div>

      <div class="row row-striped tabla_subcategorias_row" >
        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
          <a href="#">
            <img src="imagenes/articulo/SIN_IMAGEN.png" width="100%" alt="[CATEGORIA ]" title="[CATEGORIA ]">
          </a>
        </div>
        <div class="col-12 col-md-8 col-lg-8" align="left">
          <h2>SUBCATEGORIA</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquam provident molestias cum esse ipsum maxime, nesciunt vitae, beatae nam, fugiat. Minus quo, distinctio provident accusantium voluptatum quos repudiandae illum.</p>
        </div>
        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
          <a href="https://tienda.logicbus.com.mx/Serie-Nexto_c_3526.html" title="Ir a Tienda" target="_blank"><img src="https://tienda.logicbus.com.mx/assets/images/buy.gif" alt="Ir a Tienda" width="100%"></a>
        </div>
      </div>

      <div class="row row-striped tabla_subcategorias_row" >
        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
          <a href="#">
            <img src="imagenes/articulo/SIN_IMAGEN.png" width="100%" alt="[CATEGORIA ]" title="[CATEGORIA ]">
          </a>
        </div>
        <div class="col-12 col-md-8 col-lg-8" align="left">
          <h2>SUBCATEGORIA</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquam provident molestias cum esse ipsum maxime, nesciunt vitae, beatae nam, fugiat. Minus quo, distinctio provident accusantium voluptatum quos repudiandae illum.</p>
        </div>
        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
          <a href="https://tienda.logicbus.com.mx/Serie-Nexto_c_3526.html" title="Ir a Tienda" target="_blank"><img src="https://tienda.logicbus.com.mx/assets/images/buy.gif" alt="Ir a Tienda" width="100%"></a>
        </div>
      </div>



    </div>


  </div> <!-- /container -->
</div>  <!--  /main -->
<?
 abajo();
?>
</body>
</html>

