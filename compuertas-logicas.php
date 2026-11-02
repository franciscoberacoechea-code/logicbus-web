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
    <title>Las Compuertas Lógicas y sus Operaciones Lógicas
    </title>

    <meta property="og:title" content="Las Compuertas Lógicas y sus Operaciones Lógicas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.logicbus.com.mx/compuertas-logicas.php" />
    <meta property="og:image" content="https://www.logicbus.com.mx/imagenes/articulo/compuert_log.png" />
    <meta property="og:description" content="Las Compuertas Lógicas son circuitos electrónicos conformados internamente por transistores que se encuentran con arreglos especiales...">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Logicbus">
    <meta name="twitter:title" content="Las Compuertas Lógicas y sus Operaciones Lógicas">
    <meta name="twitter:description" content="Las Compuertas Lógicas son circuitos electrónicos conformados internamente por transistores que se encuentran con arreglos especiales...">
    <meta name="twitter:image" content="https://www.logicbus.com.mx/imagenes/articulo/compuert_log.png">
    <meta name="description" content="Las Compuertas Lógicas son circuitos electrónicos conformados internamente por transistores que se encuentran con arreglos especiales...">
    <meta name="keywords" content="Logicbus,compuertas,compuertas logicas,compuerta and,que son las compuertas logicas,funcion de las compuertas lógicas,ompuerta logica,operadores logicos,compuerta logica and,AND, OR, NOT,NAND, NOR, XOR, XNOR,que es una compuerta logica, equipos industriales que utilizan compuertas logicas, and compuerta,Compuerta NAND, Compuerta NOT, Compuerta XNOR, compuertas lógicas en la programación de los PLC, tablas de verdad, tablas de verdad y compuertas logicas, proyectos de compuertas locgicas, equipos industriales y compuertas logicas, Mexico,Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche,}Chiapas,Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacán, Morelos, Nayarit, Nuevo León, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Tabasco,Tamaulipas, Tlaxcala, Veracruz, Yucatán, Zacatecas, Arduino, PLC, FATEK , cobots,industria 4.0,aplicación de cobots, cobots en Mexico">
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

    <link rel="stylesheet" type="text/css" href="libreria/css/compuertas.css">
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div itemscope itemtype="https://schema.org/TechArticle">
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
                <a class="div_pc" href="https://tienda.logicbus.com.mx/"><img src="https://www.logicbus.com.mx/images/compuertas-logicas-logicbus.png" class="mt-5" alt="Visitar Tienda" title="Visitar Tienda" style="width: 83%; margin-left: 10%;"></a>
            </div>
            <div class="griditemContA paragraph text-justify">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Compuertas Lógicas</li>
                    </ol>
                </nav>
                <div align="center">
                </div>

                <h1 itemprop="headline" class="title blue">Compuertas Lógicas</h1>
                <br>

                <div class="">
                    <img src="https://www.logicbus.com.mx/images/banner/www/COMPUERTAS-LOGICAS.png" alt="Compuertas Lógicas" title="Compuertas Lógicas Logicbus" width="100%">
                </div>
                <br>
                <div class="text-center">
                    <p class="text-justify" itemprop="abstract"><b>Las Compuertas Lógicas</b> son circuitos electrónicos conformados internamente por transistores que se encuentran con arreglos especiales con los que otorgan señales de voltaje como resultado o una salida de forma booleana, están obtenidos por operaciones lógicas binarias (suma, multiplicación). También niegan, afirman, incluyen o excluyen según sus propiedades lógicas. Estas compuertas se pueden aplicar en otras áreas de la ciencia como <a href="https://tienda.logicbus.com.mx/Sensores-de-Posici%C3%B3n-y-Distancia_c_4576.html" itemprop="url" target="_blank" style="font-weight: bold;color: #F57622;">mecánica</a>, <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores" itemprop="url" target="_blank" style="font-weight: bold;color: #F57622;">hidráulica</a> o <a href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo-scada" itemprop="url" target="_blank" style="font-weight: bold;color: #F57622;">neumática</a>.</p>
                    <p class="text-justify" itemprop="text">Existen diferentes tipos de compuertas y algunas de estas son más complejas, con la posibilidad de ser simuladas por compuertas más sencillas. Todas estas tienen tablas de verdad que explican los comportamientos en los resultados que otorga, dependiendo del valor booleano que tenga en cada una de sus entradas.</p>

                    <a href="#aplicaciones-en-la-industria" itemprop="url"><button type="button" class="btn btn-blue">Ver ejemplos de aplicación en equipos industriales</button></a><br><br>

                </div>

                <table border="0" width="100%" align="center">
                    <tr>
                        <td>
                            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/compuert-log.webp" class="image_productos" width="236" height="160" alt="Compuertas Lógicas" title="Compuertas Lógicas">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td><b>
                                <center>Fig. 1 Compuertas Lógicas</center>
                            </b></td>
                    </tr>
                </table>
                <br>
                <p class="text-justify" itemprop="text">Trabajan en dos estado, "1" o "0", los cuales pueden asignarse a la lógica positiva o lógica negativa. El estado 1 tiene un valor de 5v como máximo y el estado 0 tiene un valor de 0v como mínimo y existiendo un umbral entre estos dos estados donde el resultado puede variar sin saber con exactitud la salida que nos entregara. Las lógicas se explican a continuación:</p>

                <ul align="justify">
                    <li>La lógica positiva es aquella que con una señal en alto se acciona, representando un 1 binario y con una señal en bajo se desactiva. representado un 0 binario.</li>
                    <li>La lógica negativa proporciona los resultados inversamente, una señal en alto se representa con un 0 binario y una señal en bajo se representa con un 1 binario.</li>
                </ul>

                <p class="text-justify"> A continuación vamos a analizar las diferentes operaciones lógicas una por una comenzando por la más simple:</p>


                <ul>
                    <li class="subtitle blue">Compuerta AND</li>
                </ul>

                <p class="text-justify" itemprop="text">Esta compuerta es representada por una multiplicación en el Algebra de Boole. Indica que es necesario que en todas sus entradas se tenga un estado binario 1 para que la salida otorgue un 1 binario. En caso contrario de que falte alguna de sus entradas con este estado o no tenga si quiera una accionada, la salida no podrá cambiar de estado y permanecerá en 0. Esta puede ser simbolizada por dos o más interruptores en serie de los cuales todos deben estar activos para que esta permita el flujo de la corriente.<br></p>

                <div class="row justify-content-center py-4">
                    <div class="col-lg-6 table-container">
                        <table id="Tand" class="Tabla-V">
                            <thead>
                                <tr>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>SALIDA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #FD6F1D">
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6 container-Left bg-and" id="cmp2">
                        <div class="ButtonA " id="S1" data-out="0">
                            <label class="switch">
                                <input type="checkbox" id="SO" onclick="switchTW('cmp2','S1');FNC_AND('cmp2');">
                                <span class="SWslider round"></span>
                            </label>
                        </div>
                        <div class="ButtonB" id="S2" data-out="0">
                            <label class="switch">
                                <input type="checkbox" id="SO" onclick="switchTW('cmp2','S2');FNC_AND('cmp2');">
                                <span class="SWslider round"></span>
                            </label>
                        </div>
                        <div class="none"></div>
                        <div class="led off" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado AND" class="diodo" /> </div>
                    </div>
                </div>
                <br><br>
                <div align="center">
                    <img src="https://www.logicbus.com.mx/imagenes/articulo/form1.webp" width="230" height="104" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica AND">

                    <br><b>Fig. 2 Tabla, Representación y Fórmula Compuerta AND</b>
                </div>
                <br><br>
            </div>
        </div>
        <div class="container paragraph text-justify">
            <ul>
                <li class="subtitle blue">Compuerta OR</li>
            </ul>
            <p class="text-justify" itemprop="text">En el Algebra de Boole esta es una suma. Esta compuerta permite que con cualquiera de sus entradas que este en estado binario 1, su salida pasara a un estado 1 también. No es necesario que todas sus entradas estén accionadas para conseguir un estado 1 a la salida pero tampoco causa algún inconveniente. Para lograr un estado 0 a la salida, todas sus entradas deben estar en el mismo valor de 0. Se puede interpretar como dos interruptores en paralelo, que sin importar cual se accione, será posible el paso de la corriente.
            </p>


            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Tor" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 container-Left bg-or" id="cmp1">
                    <div class="ButtonA " id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp1','S1');FNC_OR('cmp1');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="ButtonB" id="S2" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp1','S2');FNC_OR('cmp1');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led off" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado OR" class="diodo" /> </div>
                </div>
            </div>
            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form2.webp" width="230" height="75" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica OR">
                <br><b>Fig. 3 Tabla, Representación y Fórmula Compuerta OR</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta NOT</li>
            </ul>
            <p class="text-justify" itemprop="text">En este caso esta compuerta solo tiene una entrada y una salida y esta actúa como un inversor. Para esta situación en la entrada se colocara un 1 y en la salida otorgara un 0 y en el caso contrario esta recibirá un 0 y mostrara un 1. Por lo cual todo lo que llegue a su entrada, será inverso en su salida.
            </p>


            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Tnot" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>

                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                            <tr>

                        </tbody>
                        </tr>
                    </table>
                </div>


                <div class="col-lg-6 container-Left bg-not" id="cmp3">
                    <div class="ButtonB" id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp3','S1');FNC_NOT('cmp3');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led on" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado NOT" class="diodo" /> </div>
                </div>
            </div>

            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form3.webp" width="230" height="83" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica NOT">
                <br><b>Fig. 4 Tabla, Representación y Fórmula Compuerta NOT</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta NAND</li>
            </ul>
            <p class="text-justify" itemprop="text">También denominada como AND negada, esta compuerta trabaja al contrario de una AND ya que al no tener entradas en 1 o solamente alguna de ellas, esta concede un 1 en su salida, pero si esta tiene todas sus entradas en 1 la salida se presenta con un 0.</p>

            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Tnand" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                        </tr>
                    </table>
                </div>


                <div class="col-lg-6 container-Left bg-nand" id="cmp5">
                    <div class="ButtonA " id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp5','S1');FNC_NAND('cmp5');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="ButtonB" id="S2" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp5','S2');FNC_NAND('cmp5');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led on" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado NAND" class="diodo" /> </div>
                </div>
            </div>
            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form4.webp" width="230" height="80" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica NAND">
                <br><b>Fig. 5 Tabla, Representación y Fórmula Compuerta NAND</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta NOR</li>
            </ul>
            <p class="text-justify" itemprop="text">Así como vimos anteriormente, la compuerta OR también tiene su versión inversa. Esta compuerta cuando tiene sus entradas en estado 0 su salida estará en 1, pero si alguna de sus entradas pasa a un estado 1 sin importar en qué posición, su salida será un estado 0.</p>

            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Tnor" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                        </tr>
                    </table>
                </div>

                <div class="col-lg-6 container-Left bg-nor" id="cmp4">
                    <div class="ButtonA " id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp4','S1');FNC_NOR('cmp4');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="ButtonB" id="S2" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp4','S2');FNC_NOR('cmp4');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led on" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado NOR" class="diodo" /> </div>
                </div>
            </div>
            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form5.webp" width="230" height="78" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica NOR">
                <br><b>Fig. 6 Tabla, Representación y Fórmula Compuerta NOR</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta XOR</li>
            </ul>
            <p class="text-justify" itemprop="text">También llamada OR exclusiva, esta actúa como una suma binaria de un digito cada uno y el resultado de la suma seria la salida. Otra manera de verlo es que con valores de entrada igual el estado de salida es 0 y con valores de entrada diferente, la salida será 1.
            </p>

            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Txor" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                        </tr>
                    </table>
                </div>


                <div class="col-lg-6 container-Left bg-xor" id="cmp6">
                    <div class="ButtonA " id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp6','S1');FNC_XOR('cmp6');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="ButtonB" id="S2" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp6','S2');FNC_XOR('cmp6');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led off" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado XOR" class="diodo" /> </div>
                </div>
            </div>
            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form6.webp" width="230" height="64" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica XOR">
                <br><b>Fig. 7 Tabla, Representación y Fórmula Compuerta XOR</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta XNOR</li>
            </ul>
            <p class="text-justify" itemprop="text">Esta es todo lo contrario a la compuerta XOR, ya que cuando las entradas sean iguales se presentara una salida en estado 1 y si son diferentes la salida será un estado 0.</p>

            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Txnor" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                        </tr>
                    </table>
                </div>


                <div class="col-lg-6 container-Left bg-xnor" id="cmp7">
                    <div class="ButtonA " id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp7','S1');FNC_XNOR('cmp7');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="ButtonB" id="S2" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp7','S2');FNC_XNOR('cmp7');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led on" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado XNOR" class="diodo" /> </div>
                </div>
            </div>
            <br><br>
            <div align=center>
                <img src="images/compuertas/form7.webp" width="230" height="72" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica XNOR">
                <br><b>Fig. 8 Tabla, Representación y Fórmula Compuerta XNOR</b>
            </div>
            <br><br>
            <ul>
                <li class="subtitle blue">Compuerta IF</li>
            </ul>
            <p class="text-justify" itemprop="text">Esta compuerta no es una muy utilizada o reconocida ya que su funcionamiento en estados lógicos es parecido a si solo hubiera un cable conectado porque exactamente lo que se le coloque en la entrada, se encontrara en la salida. Pero también es conocido como un buffer, en la práctica se utiliza como amplificador de corriente o como seguidor de tensión para adaptar impedancias.</p>

            <div class="row justify-content-center py-4">
                <div class="col-lg-6 table-container">
                    <table id="Tif" class="Tabla-V">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #FD6F1D">
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>

                        </tbody>
                        </tr>
                    </table>
                </div>



                <div class="col-lg-6 container-Left bg-if" id="cmp8">
                    <div class="ButtonB" id="S1" data-out="0">
                        <label class="switch">
                            <input type="checkbox" id="SO" onclick="switchTW('cmp8','S1');FNC_IF('cmp8');">
                            <span class="SWslider round"></span>
                        </label>
                    </div>
                    <div class="none"></div>
                    <div class="led off" id="out1"><img src="images/compuertas/diodo-led.svg" alt="indicador de estado IF" class="diodo" /> </div>
                </div>
            </div>

            <br><br>
            <div align=center>
                <img src="https://www.logicbus.com.mx/imagenes/articulo/form8.webp" width="230" height="84" class="image_productos" alt="compuert_log" title="Fórmula Compuerta Lógica IF">
                <br><b>Fig. 9 Tabla, Representación y Fórmula Compuerta IF</b>
                <a name="aplicaciones-en-la-industria" id="a"></a>
            </div>
            </ul>

            <br>
            <a name="aplicaciones-en-la-industria" id="a"></a>
            <div class="griditemContB" id="id3">
                <center>
                    <div class="seccion" id="catalogos">
                        <div class="col-center">
                            <h2><span>Aplicaciones y Equipos Industriales</span></h2>
                        </div>
                    </div>
                </center>
            </div>
            <br>
            <div>
                <h2 class="med blue"><a class="link-orange" href="robots-colaborativos">Robot colaborativos(Cobots)</a></h2>
                <p class="text-justify" itemprop="text">
                    Conoce nuestros robots colaborativos o Robots presente en México y se parte de la industria 4.0. Esta generación de la robótica se integra con los humanos en el entorno de fabricación, permitiendo trabajar de una manera estrecha al personal y con el apoyo de estos robots sin restricciones de seguridad requeridas en aplicaciones típicas de la robótica industrial.<br> Conoce al <a class="link-orange" href="https://tienda.logicbus.com.mx/SCR5_p_17460.html">Cobot-SCR5</a>, el primer robot antropomórfico de 7 grados de libertad con configuración rápida, enseñanza de tracción(mueva el brazo del robot guiando con las manos para simular y grabar el patrón de movimiento), guía visual y detección de colisiones. Es particularmente adecuado para líneas de producción flexibles con diseño compacto y alta precisión para llevar a cabo un montaje de precisión, envasado de productos, pulido, pruebas, carga y descarga de máquinas, entre otras operaciones industriales. Contamos también con grippers, AGVs(Vehículos de Guiado Automático) y robots cartesianos. <a class="link-orange" href="robots-colaborativos">Ver Cobots</a></p>
            </div>
            <br>
            <div>
                <h2 class="med blue"><a class="link-orange" href="aplicaciones-de-celdas-de-carga">Aplicaciones de sensores de celdas de carga</a></h2>
                <p class="text-justify" itemprop="text">
                    Nuestras celdas de carga, sensores de par y sensores de ejes múltiples están fabricados con una de las tecnologías más avanzadas en la industria de los sensores: la tecnología de galgas extensométricas de lámina metálica. Apoyan las tecnologías emergentes, innovan las establecidas, salvan la vida de las personas e incluso ayudan a leer sus mentes.<br> Explore estas aplicaciones de medición de fuerza de múltiples industrias para ayudarlo a seleccionar el mejor producto para su proyecto. Encontrará muchas aplicaciones interesantes de celdas de carga de galgas extensométricas, así como aplicaciones innovadoras de medición de par para diferentes tipos de sensores de par. <a class="link-orange" href="aplicaciones-de-celdas-de-carga">Ver las aplicaciones</a></p>
            </div>
            <center>
                <div>
                    <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><img src="https://www.logicbus.com.mx/images/banner/www/COMPUERTAS-LOGICAS-CELDA-DE-CARGA.jpg" alt="Compuertas lógicas celda de carga" width="100%" class="imgBorde"></a>
                </div>
            </center>
            <br>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <script src="libreria/js/compuertas.js"></script>
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>