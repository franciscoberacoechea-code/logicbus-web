<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LG CLOi CarryBots - Logicbus</title>
    <meta name="description" content="CLOi CarryBots son Robots Móviles Autónomos (AMR) utilizados en la automatización de la gestión de almacenes...">

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
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos" class="blue link-orange">Automatización y Control de Procesos</a></li>
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv" class="blue link-orange">Robots Móviles Autónomos</a></li>
                <li class="breadcrumb-item"><a href="robots-autonomos-lg" class="blue link-orange">LG</a></li>
                <li class="breadcrumb-item active" aria-current="page">CLOi CarryBot</li>
            </ol>
        </nav>
    </div>
    <div>
        <img width="100%" src="https://www.logicbus.com.mx/imagenes/327/lg_familia_carrybots.png" alt="CLOi CarryBots">
        <nav class="navMenuSuper my-5">
            <ul>
                <li><a href="https://tienda.logicbus.com.mx/CLOi-CarryBot_c_7858.html" target="_blank">Ver en Tienda</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#video">Videos</a></li>
                <li><a href="#catalogos">Catálogos</a></li>
            </ul>
        </nav>
    </div>

    <p class="container paragraph text-justify">CLOi CarryBots son Robots Móviles Autónomos (AMR) utilizados en la automatización de la gestión de almacenes. Este AMR viene en dos modelos: tipo de montaje y tipo rolltainer. Estos robots apoyan la operación eficiente del almacén utilizando un algoritmo de conducción con el Sistema de Gestión de Flotas (FMS) que permite al AMR establecer la ruta más rápida hacia el destino. Los CarryBots también cuentan con un Sistema de Control de Materiales (MCS) que optimiza la distribución de pedidos y la programación, y un Sistema de Gestión de Robots (RMS) que proporciona información sobre los robots.</p>

    <div class="gridContAbajo">
        <div class="griditemContB">
            <center>
                <div class="seccion" id="productos">
                    <div class="col-center">
                        <h2><span>Productos</span></h2>
                    </div>
                </div>
            </center>
            <h2 align="center"><b>Cloi CarryBots</b></h2>
            <div class="tabla_subcategorias_grid my-5">
                <div class="container mt-5">
                    <div class="row row-striped tabla_subcategorias_row shadow p-4 mb-5 bg-body rounded">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                            <a href="cloi-carrybot-ldlaxbt10">
                                <img src="https://www.logicbus.com.mx/imagenes/327/ldlaxbt10-bg.png" alt="LDLAXBT10" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto">
                            <a href="cloi-carrybot-ldlaxbt10" class="blue link-orange">
                                <h2 class="text-center"><strong>CLOi CarryBot (LDLAXBT10)</strong></h2>
                            </a>
                            <p><strong>El LG CLOi CarryBot (LDLAXBT10) </strong>es un robot diseñado para aumentar la eficiencia en el trabajo. Con una operación continua de 24 horas, este robot puede trabajar sin interrupciones, lo que lo convierte en una herramienta valiosa para cualquier entorno de trabajo.</p>
                            <center>
                                <a href="#" class="btn btn-orange toggle-info">Ver características</a>
                            </center>
                            <div class="card-details" style="display:none;">
                                <div class="container mt-5">
                                    <div class="card shadow p-4 mb-5 bg-body rounded">
                                        <div class="card-header text-center">
                                            <h2>Especificaciones del LG CLOi CarryBot (LDLAXBT10)</h2>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Capacidad de carga</th>
                                                        <td>30 kg (60 lb)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del AMR (An x Pr x Al)</th>
                                                        <td>510 x 510 x 1,480 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del Estante / Rolltainer</th>
                                                        <td>760 x 417 x 657 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pantalla</th>
                                                        <td>Touch LCD (9.2”)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Batería</th>
                                                        <td>25 Ah x 2</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Velocidad (máx.)</th>
                                                        <td>1.2 m/s</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sensores</th>
                                                        <td>ToF / LiDAR / Cámara RGBD</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Carga</th>
                                                        <td>6 hrs / Carga Automática</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Operación Continua</th>
                                                        <td>Mín: 18 hrs / Típ: 18.5 hrs</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Conectividad</th>
                                                        <td>Wi-Fi (11 a/b/g/n)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda text-center btnIcon">
                            <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXBT10_p_37070.html" target="_blank">
                                <img src="https://www.logicbus.com.mx/images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" class="img-fluid ImgIcon">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="container mt-5">
                    <div class="row row-striped tabla_subcategorias_row shadow p-4 mb-5 bg-body rounded">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                            <a href="cloi-carrybot-ldlaxwt10">
                                <img src="https://www.logicbus.com.mx/imagenes/327/ldlaxwt10-bg.png" alt="LDLAXWT10" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto">
                            <a href="cloi-carrybot-ldlaxwt10" class="blue link-orange">
                                <h2 class="text-center"><strong>CLOi CarryBot (LDLAXWT10)</strong></h2>
                            </a>
                            <p> <strong>El CLOi CarryBot (LDLAXWT10) </strong>de LG es un socio confiable que aumenta la eficiencia de trabajo en almacenes. Este robot autónomo móvil (AMR) tiene un diseño de hardware fácil de usar que mejora la comodidad y productividad del operador.</p>
                            <center>
                                <a href="#" class="btn btn-orange toggle-info">Ver características</a>
                            </center>
                            <div class="card-details" style="display:none;">
                                <div class="container mt-5">
                                    <div class="card shadow p-4 mb-5 bg-body rounded">
                                        <div class="card-header text-center">
                                            <h2>Especificaciones del LG CLOi CarryBot (LDLAXWT10)</h2>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Capacidad de carga</th>
                                                        <td>30 kg (60 lb)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del AMR (An x Pr x Al)</th>
                                                        <td>510 x 510 x 1,480 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del Estante / Rolltainer</th>
                                                        <td>760 x 417 x 657 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pantalla</th>
                                                        <td>Touch LCD (9.2”)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Batería</th>
                                                        <td>25 Ah x 2</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Velocidad (máx.)</th>
                                                        <td>1.2 m/s</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sensores</th>
                                                        <td>ToF / LiDAR / Cámara RGBD</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Carga</th>
                                                        <td>6 hrs / Carga Automática</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Operación Continua</th>
                                                        <td>Mín: 18 hrs / Típ: 18.5 hrs</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Conectividad</th>
                                                        <td>Wi-Fi (11 a/b/g/n)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda text-center btnIcon">
                            <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXWT10_p_37071.html" target="_blank">
                                <img src="https://www.logicbus.com.mx/images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" class="img-fluid ImgIcon">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row row-striped tabla_subcategorias_row shadow p-4 mb-5 bg-body rounded">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                            <a href="cloi-carrybot-ldlaxro10">
                                <img src="https://www.logicbus.com.mx/imagenes/327/ldlaxro10-bg.png" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto">
                            <a href="cloi-carrybot-ldlaxro10" class="blue link-orange">
                                <h2 class="text-center"><strong>CLOi CarryBot (LDLAXRO10)</strong></h2>
                            </a>
                            <p><strong>El CLOi CarryBot (LDLAXRO10)</strong> de LG es un socio confiable que aumenta la eficiencia de trabajo en almacenes. Este robot autónomo móvil (AMR) es capaz de establecer la ruta más rápida hacia el destino gracias al algoritmo de conducción de LG.</p>
                            <center>
                                <a href="#" class="btn btn-orange toggle-info">Ver características</a>
                            </center>
                            <div class="card-details" style="display:none;">
                                <div class="container mt-5">
                                    <div class="card shadow p-4 mb-5 bg-body rounded">
                                        <div class="card-header text-center">
                                            <h2>Especificaciones del LG CLOi CarryBot (LDLAXRO10)</h2>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Capacidad de carga</th>
                                                        <td>65 kg (143 lb)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del AMR (An x Pr x Al)</th>
                                                        <td>510 x 510 x 1,340 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del Estante / Rolltainer</th>
                                                        <td>760 x 500 x 1,050 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pantalla</th>
                                                        <td>Touch LCD (9.2”)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Batería</th>
                                                        <td>25 Ah x 2</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Velocidad (máx.)</th>
                                                        <td>1.2 m/s</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sensores</th>
                                                        <td>ToF / LiDAR / Cámara RGBD</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Carga</th>
                                                        <td>6 hrs / Carga Automática</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Operación Continua</th>
                                                        <td>Mín: 18 hrs / Típ: 18.5 hrs</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Conectividad</th>
                                                        <td>Wi-Fi (11 a/b/g/n)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda text-center btnIcon">
                            <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXRO10_p_37072.html" target="_blank">
                                <img src="https://www.logicbus.com.mx/images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" class="img-fluid ImgIcon">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row row-striped tabla_subcategorias_row shadow p-4 mb-5 bg-body rounded">
                        <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                            <a href="cloi-carrybot-ldlaxvt10">
                                <img src="https://www.logicbus.com.mx/imagenes/327/ldlaxvt10-bg.png" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 my-auto">
                            <a href="cloi-carrybot-ldlaxvt10" class="blue link-orange">
                                <h2 class="text-center"><strong>CLOi CarryBot (LDLAXVT10)</strong></h2>
                            </a>
                            <p><strong>El CLOi CarryBot (LDLAXVT10)</strong> de LG es un socio confiable que mejora la eficiencia del trabajo en almacenes. Este robot autónomo móvil (AMR) puede establecer la ruta más rápida hacia el destino gracias al algoritmo de conducción de LG.</p>
                            <center>
                                <a href="#" class="btn btn-orange toggle-info">Ver características</a>
                            </center>
                            <div class="card-details" style="display:none;">
                                <div class="container mt-5">
                                    <div class="card shadow p-4 mb-5 bg-body rounded">
                                        <div class="card-header text-center">
                                            <h2>Especificaciones del LG CLOi CarryBot (LDLAXVT10)</h2>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Capacidad de carga</th>
                                                        <td>30 kg (66 lb)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del AMR (An x Pr x Al)</th>
                                                        <td>510 x 510 x 1,480 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dimensiones del Estante / Rolltainer</th>
                                                        <td>760 x 417 x 657 mm</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pantalla</th>
                                                        <td>Touch LCD (9.2”)</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Batería</th>
                                                        <td>25 Ah x 2</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Velocidad (máx.)</th>
                                                        <td>1.2 m/s</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sensores</th>
                                                        <td>ToF / LiDAR / Cámara RGBD</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Carga</th>
                                                        <td>6 hrs / Carga Automática</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tiempo de Operación Continua</th>
                                                        <td>Mín: 18 hrs / Típ: 18.5 hrs</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Conectividad</th>
                                                        <td>Wi-Fi (11 a/b/g/n)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda text-center btnIcon">
                            <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXVT10_p_37073.html" target="_blank">
                                <img src="https://www.logicbus.com.mx/images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" class="img-fluid ImgIcon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="griditemContB">
            <center>
                <div class="seccion" id="video">
                    <div class="col-center">
                        <h2><span>Videos</span></h2>
                    </div>
                </div>
            </center>
            <div class="griditemContB" align="center">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/0I8eypa6lA8?si=U-8mubTiRC__MQt9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <center>
                <div class="seccion" id="catalogos">
                    <div class="col-center">
                        <h2><span>Catálogos</span></h2>
                    </div>
                </div>
            </center>
            <div class="griditemContB" align="center">
                <a class="blue link-orange" href="https://www.logicbus.com.mx/imagenes/327/CLOi_CarryBot.pdf" target="_blank" alt="Ver archivo pdf" title="Ver archivo pdf"><img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/catalogos/LG-CLOI-CARRYBOT.png" class="img250" alt="Ver archivo pdf" title="Ver archivo pdf"><br>Catálogo CarryBot</a>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <script>
        $(document).ready(function() {
            $('.toggle-info').click(function(e) {
                e.preventDefault();
                var card = $(this).closest('.card');
                card.toggleClass('show');
                card.find('.card-details').slideToggle();
            });
        });

        $(".openModal").on("click", function() {
            var celda = $(this).attr("data-celda");
            var ruta = "pdf/36/Manuales/" + celda + ".pdf";
            document.getElementById("exampleModalLabel").innerHTML = "Famila " + celda;
            $('#PDF-celda').prop('src', ruta);
            $('#myModal').modal({
                show: true
            });
        });

        $(document).ready(function() {
            $(".toggle-info").click(function(e) {
                e.preventDefault();
                $(this).closest(".row").find(".card-details").slideToggle();
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>