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
    <title>Calculadora del código de colores de resistencias</title>
    <meta name="description"
        content="Utiliza nuestra calculadora de código de colores de resistencias para identificar rápidamente el valor y la tolerancia de tus resistencias.">

    <meta name="keywords"
        content="calculadora de resisistencias, resistencias, resistor, calculador de resistor, ohm, calculadora de 5 bandas, Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Medidores portatiles, multimetros, medidores de consumo de energia electrica, medidores de consumo electrico para montaje en Riel Din, transductores de corriente,transductores de corriente electrica, transductores de Voltaje, donas de corriente, medidores de consumo electrico para montaje en panel, consumo y analisis de energia electrica, multimetro digital tipo pluma portatil, productos de consumo y analisis de energia electrica, automatizacion, automatizacion industrial Mexico, Latinoameria, USA, Estados Unidos">

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
    <link rel="stylesheet" href="libreria/resistencia.css">
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-categorias">
                <?php
                menucategorias();
                ?>
                <div class="py-4"></div>
                <a class="div_pc" href="https://tienda.logicbus.com.mx/"><img
                        src="https://www.logicbus.com.mx/images/compuertas-logicas-logicbus.png" class="mt-5"
                        alt="Visitar Tienda" title="Visitar Tienda" style="width: 83%; margin-left: 10%;"></a>

            </div>
            <div class="col">
                <h1>Código de colores de resistencias</h1>
                <img src="https://www.logicbus.com.mx/images/resistencia/banner-resistencia.png" class="img-fluid pb-4"
                    alt="Resistencias">
                <h2>Cómo Calcular el Valor de una Resistencia</h2>
                <p class="py-4">
                    Aprenderemos a calcular el valor de una resistencia eléctrica utilizando el código de colores, es
                    decir, las bandas de colores que aparecen en la resistencia.<br><br>
                    Para determinar el valor de una resistencia, primero identificamos las bandas de colores.
                    Generalmente, una resistencia tiene tres bandas de colores seguidas y una cuarta banda más
                    separada.<br><br>
                </p>
                <p>
                    Leyendo las bandas de colores de izquierda a derecha:
                </p>
                <ul class="list pb-3">
                    <li class="list-item"> Las primeras tres bandas nos indican el valor nominal de la resistencia.</li>
                    <li class="list-item">
                        La cuarta banda señala la tolerancia, es decir, el rango de variación en el valor real de la
                        resistencia respecto al valor teórico indicado por las primeras tres bandas.
                    </li>
                </ul>
                <p class="py-4">
                    Por ejemplo, si tenemos una resistencia de 1,000 ohmios (Ω) con una tolerancia del 10%, esto
                    significa que el valor teórico de la resistencia es de 1,000Ω, pero el valor real puede variar en un
                    ±10% de 1,000Ω. Por lo tanto, la resistencia puede tener un valor real entre 900Ω y 1,100Ω.<br><br>
                    Normalmente, al medir resistencias con un multímetro, los valores suelen ser bastante precisos,
                    independientemente de la tolerancia indicada.<br><br>
                    Ahora que entendemos la tolerancia, veamos cómo calcular el valor de la resistencia:
                </p>
                <img src="images\resistencia\examples\width_548.webp" class="rounded mx-auto d-block py-5 img-res"
                    alt="..." width="100%">
                <p>
                    Veamos algunos ejemplos.<br><br>

                    Imaginemos esta resistencia:
                </p>
                <img src="images\resistencia\examples\width_400.webp" class="rounded mx-auto d-block py-5 img-res"
                    alt="..." width="50%">
            </div>
        </div>
        <div class="row">
            <div class="col pt-3">

                <p>
                    El primer color nos dice que tiene un valor de 2, el segundo de 7, es decir 27, y el tercer valor es
                    por 100,000 (o añadirle 5 ceros). La resistencia valdrá 2,700,000 ohmios. ¿Fácil no?.<br><br>
                    ¿Cual será su tolerancia? pues como es color plata es del 10%. Esa resistencia en la realidad podrá
                    tener valores entre 2,700,000Ω +- el 10% de ese valor. Podrá valer 270,000Ω más o menos del valor
                    teórico que es 2,700,000Ω.<br><br>
                    La que viene en la imagen de la tabla de los códigos de colores (arriba) es negra-roja-verde :
                    0200000Ω es decir 200,000Ω tolerancia 10%.<br><br>
                    Una resistencia con los siguientes: colores verde-negro-marrón, el marrón es el color café. Será de
                    50 más un cero del marrón, es decir es de 500Ω.<br><br>
                </p>
                <h2>Calculadora de código de colores de resistencias </h2>
                <p>Esta herramienta se utiliza para descifrar la información de las resistencias con conductores axiales
                    que tienen bandas de colores. Simplemente seleccione el número de bandas y elija sus colores para
                    determinar el valor y la tolerancia de la resistencia.</p>
            </div>
        </div>
        <div class="row pb-5 ">
            <div class="col d-flex  justify-content-center align-items-center">

                <div class="">


                    <canvas id="resistencia"></canvas>
                    <!--overflow:  hidden-->
                    <div class="col d-flex  justify-content-center align-items-center">
                        <div id="line1" class="line l1" style="">
                            <ul class="list-group" style=" list-style-type: none ;">
                                <li class="list-group-color" style="background-color: black;" onclick="colorcalc(0,0)">
                                    <span>0</span>
                                </li>
                                <li class="list-group-color" style="background-color: brown; " onclick="colorcalc(0,1)">
                                    <span>1</span>
                                </li>
                                <li class="list-group-color" style="background-color: red;" onclick="colorcalc(0,2)">
                                    <span>2</span>
                                </li>
                                <li class="list-group-color" style="background-color: orange;" onclick="colorcalc(0,3)">
                                    <span>3</span>
                                </li>
                                <li class="list-group-color" style="background-color: yellow;" onclick="colorcalc(0,4)">
                                    <span style="color: black;">4</span>
                                </li>
                                <li class="list-group-color" style="background-color: green;" onclick="colorcalc(0,5)">
                                    <span>5</span>
                                </li>
                                <li class="list-group-color" style="background-color: blue;" onclick="colorcalc(0,6)">
                                    <span>6</span>
                                </li>
                                <li class="list-group-color" style="background-color: violet;" onclick="colorcalc(0,7)">
                                    <span>7</span>
                                </li>
                                <li class="list-group-color" style="background-color: gray;" onclick="colorcalc(0,8)">
                                    <span>8</span>
                                </li>
                                <li class="list-group-color" style="background-color: white" onclick="colorcalc(0,9)">
                                    <span style="color: black;">9</span>
                                </li>
                            </ul>
                        </div>

                        <div id="line2" class="line l2" style="">
                            <ul class="list-group" style=" list-style-type: none ;">
                                <li class="list-group-color" style="background-color: black;" onclick="colorcalc(1,0)">
                                    <span>0</span>
                                </li>
                                <li class="list-group-color" style="background-color: brown; " onclick="colorcalc(1,1)">
                                    <span>1</span>
                                </li>
                                <li class="list-group-color" style="background-color: red;" onclick="colorcalc(1,2)">
                                    <span>2</span>
                                </li>
                                <li class="list-group-color" style="background-color: orange;" onclick="colorcalc(1,3)">
                                    <span>3</span>
                                </li>
                                <li class="list-group-color" style="background-color: yellow;" onclick="colorcalc(1,4)">
                                    <span style="color: black;">4</span>
                                </li>
                                <li class="list-group-color" style="background-color: green;" onclick="colorcalc(1,5)">
                                    <span>5</span>
                                </li>
                                <li class="list-group-color" style="background-color: blue;" onclick="colorcalc(1,6)">
                                    <span>6</span>
                                </li>
                                <li class="list-group-color" style="background-color: violet;" onclick="colorcalc(1,7)">
                                    <span>7</span>
                                </li>
                                <li class="list-group-color" style="background-color: gray;" onclick="colorcalc(1,8)">
                                    <span>8</span>
                                </li>
                                <li class="list-group-color" style="background-color: white" onclick="colorcalc(1,9)">
                                    <span style="color: black;">9</span>
                                </li>
                            </ul>
                        </div>

                        <div id="line3" class="line l3" style="">
                            <ul class="list-group" style=" list-style-type: none ;">
                                <li class="list-group-color" style="background-color: black;" onclick="colorcalc(2,0)">
                                    <span>0</span>
                                </li>
                                <li class="list-group-color" style="background-color: brown; " onclick="colorcalc(2,1)">
                                    <span>1</span>
                                </li>
                                <li class="list-group-color" style="background-color: red;" onclick="colorcalc(2,2)">
                                    <span>2</span>
                                </li>
                                <li class="list-group-color" style="background-color: orange;" onclick="colorcalc(2,3)">
                                    <span>3</span>
                                </li>
                                <li class="list-group-color" style="background-color: yellow;" onclick="colorcalc(2,4)">
                                    <span style="color: black;">4</span>
                                </li>
                                <li class="list-group-color" style="background-color: green;" onclick="colorcalc(2,5)">
                                    <span>5</span>
                                </li>
                                <li class="list-group-color" style="background-color: blue;" onclick="colorcalc(2,6)">
                                    <span>6</span>
                                </li>
                                <li class="list-group-color" style="background-color: violet;" onclick="colorcalc(2,7)">
                                    <span>7</span>
                                </li>
                                <li class="list-group-color" style="background-color: gray;" onclick="colorcalc(2,8)">
                                    <span>8</span>
                                </li>
                                <li class="list-group-color" style="background-color: white" onclick="colorcalc(2,9)">
                                    <span style="color: black;">9</span>
                                </li>
                            </ul>
                        </div>

                        <div id="line4" class="line l4" style="">
                            <ul class="list-group" style=" list-style-type: none ;">
                                <li class="list-group-color" style="background-color: black;" onclick="colorcalc(3,0)">
                                    <span>x10<sup>0</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: brown; " onclick="colorcalc(3,1)">
                                    <span>x10<sup>1</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: red;" onclick="colorcalc(3,2)">
                                    <span>x10<sup>2</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: orange;" onclick="colorcalc(3,3)">
                                    <span>x10<sup>3</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: yellow;" onclick="colorcalc(3,4)">
                                    <span style="color: black;">x10<sup>4</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: green;" onclick="colorcalc(3,5)">
                                    <span>x10<sup>5</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: blue;" onclick="colorcalc(3,6)">
                                    <span>x10<sup>6</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: violet;" onclick="colorcalc(3,7)">
                                    <span>x10<sup>7</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: gray;" onclick="colorcalc(3,8)">
                                    <span>x10<sup>8</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: white" onclick="colorcalc(3,9)">
                                    <span style="color: black;">x10<sup>9</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: #e9d30d;"
                                    onclick="colorcalc(3,11)">
                                    <span style="color: black;">x10<sup>-1</sup></span>
                                </li>
                                <li class="list-group-color" style="background-color: #d4cfcf;"
                                    onclick="colorcalc(3,12)">
                                    <span>x10<sup>-2</sup></span>
                                </li>
                            </ul>
                        </div>

                        <div id="line5" class="line l5" style="">
                            <ul class="list-group" style=" list-style-type: none ;">
                                <li class="list-group-color" style="background-color: brown; " onclick="colorcalc(4,1)">
                                    <span>1%</span>
                                </li>
                                <li class="list-group-color" style="background-color: #ff0000;"
                                    onclick="colorcalc(4,2)">
                                    <span>2%</span>
                                </li>
                                <li class="list-group-color" style="background-color: #e9d30d;"
                                    onclick="colorcalc(4,11)">
                                    <span style="color: black;">5%</span>
                                </li>
                                <li class="list-group-color" style="background-color: #d4cfcf;"
                                    onclick="colorcalc(4,12)">
                                    <span>10%</span>
                                </li>
                                <li class="list-group-color" style="background-color: #d8ba7a"
                                    onclick="colorcalc(4,10)">
                                    <span style="color: black;">N/A (20%)</span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  ">
            <div class="col  d-flex flex-row-reverse  pb-5 pr-5">



                <ul class="list-unstyled">
                    <li>
                        <p>
                        <h3>Numero de bandas:</h3>
                        </p>
                    </li>
                    <li>
                        <div class="form-checkr">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                onclick="changeLines(4)">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <b> 4 Bandas</b>
                            </label>
                        </div>
                    <li>
                        <div class="form-checkr">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                onclick="changeLines(5)" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <b> 5 Bandas</b>
                            </label>
                        </div>
            </div>


            <div class="col  d-flex flex-rowt pb-5 pt-3 pl-4">
                <h3 id="value" style="font-weight: 700;">Resultado:<br>&nbsp;0 Ohms <br> &nbsp;±5%</h3>
            </div>
            </li>
            </ul>
        </div>







    </div>
    </div>
    </div>


    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas asesoría para tu proyecto?</h2>
            <span class="paragraph white">
                Estamos aquí para ayudarle a encontrar las mejores soluciones para su proyecto.
            </span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>



    <script src="libreria/resistencia.js"></script>




    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>