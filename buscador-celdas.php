<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>

    <title>Buscardor de Celdas - Logicbus</title>
    <meta name="description" content="Buscador de celdas">

    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Sensores fotoeléctricos, TRI-TRONICS, tri-tronics, tritronics, tri tronics, SmartEye, Label Eye, Sensor de hueco, sensor de ranura, hueco, ranura">
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
    <link href="libreria/celda-table/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="" href="libreria/celda-table/fixedHeader.dataTables.min.css">

    <style>
        .celda-img {
            width: 150px
        }

        .page-item.active .page-link {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .thead-dark {
            background-color: var(--blueM);
            color: white;
            font-weight: bold;
        }

        #celdas_paginate {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 800px) {
            .divCentrado img {
                width: 100%
            }
        }
    </style>
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
                <!-- RUTA DEL PRODUCTO ENTRE LAS CATEGORIAS -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
                        <li class="breadcrumb-item"><a href="celdas-de-carga" class="blue link-orange">Celdas de Carga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Buscador de Celdas de Carga</li>
                    </ol>
                </nav>
                <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
                <div align="center">
                    <h1 class="titulo_producto">Buscador de celdas de carga </h1>
                    <img src="images/banner/www/PorMarca/banner-celdas-de-carga.png" alt="Buscador de celdas de cargas" title="Buscador de celdas de carga" width="100%">
                </div>
                <br>
                <p align="justify">
                    Para la selección de celdas de carga es necesario definir un cúmulo de parámetros que
                    determinarán el modelo a utilizar.</p>
                <p align="justify">
                    Con esto en mente, Logicbus trae para ti este buscador de celdas de carga, una herramienta para
                    ubicar rápidamente el modelo que se mejor se ajusta a las necesidades de su proyecto de fuerza.</p>
                <p align="justify">
                    Este buscador permite filtrar por modelos conocidos (familia), número de parte, capacidad, dirección
                    de la fuerza, tipo de celda y tipo de conexión.</p>



                <!-- TODOS LOS PARAFOS PONERLOS DENTRO DE LA ETIQUETA <P> Y ASEGURARSE DE CERRARLA </P> -->
            </div>
        </div>
        <br>
        <div class="divCentrado table-responsive" style="width: 90%;">
            <center>
                <h1 class="titulo_producto">Buscador de celdas de carga</h1>
            </center><br>
            <table id="celdas" class="table-hover table-bordered rounded rounded-3 overflow-hidden " style="width:100%; ">
                <div id="filtros"></div>
                <thead class="thead-dark">
                    <tr>
                        <td>Familia</td>
                        <td>Imagen</td>
                        <td>Número de parte</td>
                        <td>Capacidad (lb)</td>
                        <td>Dirección de la fuerza</td>
                        <td>Tipo de celda</td>
                        <td>Tipo de conexión</td>
                    </tr>
                    <tr>
                        <td class="filterhead">Familia</td>
                        <td id="img" class="filterhead">Imagen</td>
                        <td id="num" class="filterhead">Número de parte</td>
                        <td class="filterhead">Capacidad (lb)</td>
                        <td class="filterhead">Dirección de la fuerza</td>
                        <td class="filterhead">Tipo de celda</td>
                        <td class="filterhead">Tipo de conexión</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <script src="libreria/celda-table/jquery.dataTables.min.js"></script>
    <script src="libreria/celda-table/dataTables.bootstrap5.min.js"></script>
    <script src="libreria/celda-table/dataTables.fixedHeader.min.js"></script>
    <script src="libreria/script.js"></script>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>