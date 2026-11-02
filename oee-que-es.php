<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Descubre qué es OEE (Overall Equipment Effectiveness) y cómo esta métrica esencial impulsa la eficiencia y productividad en la industria manufacturera.">
    <meta name="keywords"
        content="oee significado, que significa oee, logicbus, OEE, que es el OEE, ventajas OEE, eficiencia operativa, gestión de operaciones, mantenimiento predictivo, automatización industrial, monitoreo de producción, análisis de datos, mejora continua, productividad, control de calidad">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <title>OEE - ¿Qué es? y ¿Cómo se calcula y por qué es tan importante?</title>

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
    <!-- Banner principal-->
    <section>
        <div class="card-img-banner text-white ">
            <img class="intro" src="https://www.logicbus.com.mx/images/banner/www/que-es-oee-logicbus.png">
            </img>
            <div class="img-overlay">
                <h1 class="card-title banner-title white text-center mb-5 shadow-text">Mejora la eficiencia <br> de tu
                    producción con OEE</h1>
                <a class="button-text" href="#demostracion">
                    <button class="button button-circle-orange">Agendar un demo</button></a>
            </div>
        </div>
    </section>
    <!-- Banner principal Fin-->
    <!-- Que es el oee-->
    <section class="section-blue py-3">
        <div class="display2 text-center p-5 section-blue">
            <h1 class="subtitle white mb-3">¿QUÉ ES EL OEE?</h1>
            <p class="paragraph white">
                OEE (Eficacia general del equipo) es el estándar de oro para medir la productividad de fabricación. En
                pocas palabras: identifica el porcentaje de tiempo de fabricación que es verdaderamente productivo.
            </p>
            <p class="paragraph white">
                Una puntuación OEE del 100 % significa que está fabricando solo piezas buenas, lo más rápido posible y
                sin tiempo de parada. En el lenguaje de OEE, eso significa 100 % de calidad (solo piezas buenas), 100 %
                de rendimiento (lo más rápido posible) y 100 % de disponibilidad (sin tiempo de parada).
            </p>
            <p class="paragraph white">
                La medición de OEE es una de las mejores prácticas de fabricación. Al medir la OEE y las pérdidas
                subyacentes , obtendrá importantes conocimientos sobre cómo mejorar sistemáticamente su proceso de
                fabricación . OEE es la mejor métrica para identificar pérdidas, evaluar el progreso y mejorar la
                productividad de los equipos de fabricación (es decir, eliminar el desperdicio).
            </p>
            <p class="paragraph white">
                Comience aquí su camino hacia el dominio de OEE.
            </p>
        </div>
    </section>
    <!-- Que es el oe FIN-->
    <!-- COMO SE MIDE-->
    <section class="py-5 text-center">
        <h1 class="title blue mb-5">¿CÓMO SE MIDE?</h1>
        <div class="d-flex justify-content-center align-items-center">
            <div class="circle-orange">
                <h2 class="concept white">DISPONIBILIDAD</h2>
                <div class="circle-info circle-text">
                    <p class="headline"><b>DISPONIBILIDAD</b></p>
                    <p class="descripcion">El porcentaje de tiempo que la máquina está en línea cuando está programado
                        para funcionar</p>
                </div>
            </div>
            <h1 class="text-symbol light-black">x</h1>
            <div class="circle-gray">
                <h2 class="concept white">RENDIMIENTO</h2>
                <div class="circle-info circle-text">
                    <p class="headline"><b>RENDIMIENTO</b></p>
                    <p class="descripcion">El rendimiento es el porcentaje de unidades creadas en una máquina en
                        relación con la producción esperada</p>
                </div>
            </div>
            <h1 class="text-symbol light-black">x</h1>
            <div class="circle-blue">
                <h2 class="concept white">CALIDAD</h2>
                <div class="circle-info circle-text">
                    <p class="headline"><b>CALIDAD</b></p>
                    <p class="descripcion">La calidad de una máquina indica el porcentaje de bienes aceptados en
                        garantía de calidad</p>
                </div>
            </div>
            <h1 class="text-symbol light-black">=</h1>
            <div class="circle-red">
                <h2 class="circle-text-red">OEE</h2>
            </div>
        </div>
    </section>
    <!-- COMO SE MIDE FIN-->
    <!--Ventajas-->
    <section class="section-white py-5 text-center">
        <div class="container">
            <h1 class="title blue mb-5">VENTAJAS DEL OEE</h1>
            <p class="paragraph light-black">La correcta implementación de un sistema OEE repercute directamente en el
                rendimiento que se va a obtener del proceso de manufactura. Esto se debe a que se reducen los tiempos en
                los que las máquinas están paradas, se identifican las causas por las que hay pérdidas de rendimiento
                (cuellos de botella y velocidades reducidas), y aumenta el índice de calidad del producto, minimizando
                retrabajos y pérdidas ocasionadas por elaboración de producto defectuoso. No sólo eso, mostrar
                información fiable en tiempo real del proceso aumenta significativamente la eficiencia de los empleados,
                y facilita su trabajo.</p>
            <div class="row justify-content-between my-5">
                <div class="col-6 col-md-2">
                    <img src="https://www.logicbus.com.mx/images/Iconos/mayor-productividad.png"
                        alt="MAYOR PRODUCTIVIDAD" width="150px">
                    <p class="paragraph blue mt-3">MAYOR PRODUCTIVIDAD</p>
                </div>
                <div class="col-6 col-md-2">
                    <img src="https://www.logicbus.com.mx/images/Iconos/reduccion-costos.png" alt="REDUCCIÓN DE COSTOS"
                        width="150px">
                    <p class="paragraph blue mt-3">REDUCCIÓN DE COSTOS</p>
                </div>
                <div class="col-6 col-md-2">
                    <img src="https://www.logicbus.com.mx/images/Iconos/mejoramiento-calidad.png"
                        alt="MEJORAMIENTO DE LA CALIDAD" width="150px">
                    <p class="paragraph blue mt-3">MEJORAMIENTO DE LA CALIDAD</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://www.logicbus.com.mx/images/Iconos/mayor-rentabilidad.png"
                        alt="AUMENTO DE LA RENTABILIDAD" width="150px">
                    <p class="paragraph blue mt-3">AUMENTO DE LA RENTABILIDAD</p>
                </div>
            </div>
        </div>
    </section>


    <!--Ventajas Fin-->
    <!--calculadora -->
    <section class="py-5">
        <center>
            <h1 class="title blue mb-5">CALCULA EL OEE DE TU FÁBRICA</h1>
            <div class="calculator">
                <label for="tDisponible">Ingresa el tiempo disponible (Horas):</label>
                <input type="number" id="tDisponible" placeholder="Ingrese un número de horas" min="1" />
                <label for="tProductivo">Ingresa el tiempo producido (Horas):</label>
                <input type="number" id="tProductivo" placeholder="Ingrese el tiempo programado disponible" min="1" />
                <label for="cProductiva">Capacidad productiva (piezas/hora):</label>
                <input type="number" id="cProductiva" placeholder="Ingrese las piezas de producción programadas"
                    min="1" />
                <label for="produccionEf">Producción efectuada (piezas/hora):</label>
                <input type="number" id="produccionEf" placeholder="Ingrese las piezas que se produjeron" min="1" />
                <label for="piezasM">Piezas defectuosas (piezas/turno)</label>
                <input type="number" id="piezasM" placeholder="Ingrese las piezas consideradas merma durante el turno"
                    min="1" />

                <button class="btn btn-primary mb-3" onclick="calcular()">Calcular</button>
                <div id="planificacion" height="200px">Planificacion:</div>
                <div id="disponibilidad">Disponibilidad:</div>
                <div id="rendimiento">Rendimiento:</div>
                <div id="calidad">Calidad:</div>
                <div id="O">Resultado:</div>

                <!-- Contenedor para la gráfica -->
                <div id="chartContainer">
                    <canvas id="myChart" height="300"></canvas>
                </div>

                <div id="chartContainer2">
                    <canvas id="myChart2" height="300">
                        <h2>OEE</h2>
                    </canvas>
                </div>
            </div>
        </center>
    </section>
    <!--calculadora Fin-->
    <!--conoce auk-->
    <section class="section-blue py-5">
        <div class="container text-center">
            <h1 class="title white mb-5">CONOCE <a href="https://www.logicbus.com.mx/auk-industries"
                    class="white link-orange"><u>AUK INDUSTRIES</u></a></h1>
            <p class="paragraph white">
                <a href="https://www.logicbus.com.mx/auk-industries" class="white link-orange"><u>Auk
                        Industries</u></a>
                ofrece un sistema de fábrica digital escalable que utiliza IoT (Internet de las cosas) y
                opera como un "Fitbit para máquinas". Sus clientes pueden implementarlo en cuestión de días para
                realizar un seguimiento de los pasos, la frecuencia cardíaca y los ciclos de sueño de los equipos de
                fabricación. Miles de flujos de datos similares a los de "Fitbit" se analizan automáticamente con el
                software de <a href="https://www.logicbus.com.mx/auk-industries" class="white link-orange"><u>Auk
                        Industries</u></a>,
                potenciando la excelencia operativa desde el principio.
            </p>
            <p class="paragraph white">
                Mediante el uso de herramientas Lean y análisis avanzados de primera categoría,
                <a href="https://www.logicbus.com.mx/auk-industries" class="white link-orange"><u>Auk
                        Industries</u></a> ayuda a
                establecer el rendimiento base, mapear las principales pérdidas e identificar oportunidades de mejora.
                El sistema está diseñado para el futuro a través de un desarrollo continuo que incluye actualizaciones
                de aprendizaje automático y permite la integración con otros productos en el emocionante ecosistema de
                la Industria 4.0. Por lo general, los clientes de <a
                    href="https://www.logicbus.com.mx/auk-industries" class="white link-orange"><u>Auk
                        Industries</u></a>
                pueden lograr aumentos de productividad, ahorro energético o mejoras en el mantenimiento de entre el 10%
                y el 30%, y obtener un
                retorno de la inversión en tan solo unos meses.
            </p>
        </div>
    </section>
    <section class="py-5">
        <div class="container text-center">
            <div class="row justify-content-between align-items-center my-5">
                <div class="col-6 col-md-4">
                    <img src="https://www.logicbus.com.mx/images/Iconos/plug-and-play.png"
                        alt="Plug-and-Play en minutos. Sin integraciones complejas" width="150px">
                    <p class="paragraph light-black mt-5">Plug-and-Play en minutos. Sin integraciones complejas</p>
                </div>
                <div class="col-6 col-md-4">
                    <img src="https://www.logicbus.com.mx/images/Iconos/mejora.webp"
                        alt="Retorno de la inversión rápido, obtén un aumento del 10-30% en semanas" width="150px">
                    <p class="paragraph light-black mt-5">Retorno de la inversión rápido, obtén un aumento del 10-30% en
                        semanas
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img src="https://www.logicbus.com.mx/images/Iconos/caja.png"
                        alt="Software potente listo para analizar profundamente desde el primer momento" width="150px">
                    <p class="paragraph light-black mt-5">Software potente listo para analizar profundamente desde el
                        primer momento</p>
                </div>
            </div>
        </div>
        <div class="container-fluid table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr class="text-center">
                        <th></th>
                        <th class="paragraph">Por qué tenemos éxito</th>
                        <th class="paragraph">Por qué otros fallan</th>
                    </tr>
                    <tr>
                        <td class="paragraph"><b>Conexión:</b></td>
                        <td>
                            <i class="fas fa-check green" aria-hidden="true"></i> Auk está diseñado para una
                            rápida conexión. Plug-and-Play, se conecta en cuestión de minutos en
                            todo tipo de máquinas.
                        </td>
                        <td>
                            <i class="fas fa-times red" aria-hidden="true"></i> La mayoría de las fábricas
                            requieren costosas actualizaciones de infraestructura (por ejemplo,
                            máquinas anticuadas sin PLC, o PLC´s bloqueados por el OEM).
                        </td>
                    </tr>
                    <tr>
                        <td class="paragraph"><b>Construya</b></td>
                        <td>
                            <i class="fas fa-check green" aria-hidden="true"></i> Auk es un sistema multinivel
                            basado en el flujo de valor (máquina, línea, grupo de procesos,
                            planta, nivel multiplanta).
                        </td>
                        <td>
                            <i class="fas fa-times red" aria-hidden="true"></i> La mayoría de las soluciones se
                            construyen a nivel puntual en máquinas aisladas, lo que dificulta la
                            identificación de los principales impulsores de la línea/planta.
                            Analice
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td class="paragraph">
                            <b>Analice</b>
                        </td>
                        <td>
                            <i class="fas fa-check green" aria-hidden="true"></i> El análisis de Auk se basa en
                            una amplia experiencia en Lean y excelencia operativa en todos los
                            sectores. Y codificados a partir de las mejores prácticas de la
                            industria.
                        </td>
                        <td>
                            <i class="fas fa-times red" aria-hidden="true"></i> La mayoría de las herramientas
                            del mercado proporcionan análisis genéricos de nivel superficial
                            diseñados con escaso conocimiento de la fabricación.
                        </td>
                    </tr>
                    <tr>
                        <td class="paragraph"><b>Gestión de Valor</b></td>
                        <td>
                            <i class="fas fa-check green" aria-hidden="true"></i> Auk es un sistema de gestión
                            del rendimiento de bucle cerrado para la resolución de problemas.
                            Diseñado para garantizar una captura de valor sin fisuras.
                        </td>
                        <td>
                            <i class="fas fa-times red" aria-hidden="true"></i> Las soluciones habituales son
                            incompletas y dependen de otros sistemas o de la intervención humana
                            para ser plenamente eficaces.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <div class="faq-header" style="margin: 5%">
                <h2 class="title blue text-center" id="faq">HARDWARE DE ÚLTIMA GENERACIÓN
                </h2>
            </div>
            <div class="faq-header">
                <h2 class="title blue" id="faq">IIoT Edge Node
                </h2>
            </div>
            <div class="text-center p-5">
                <a href="https://tienda.logicbus.com.mx/assets/PDF/322/FLYER-AUK.PDF">
                    <img class="img-fluid p-5" src="https://tienda.logicbus.com.mx/assets/images/322/nodo.png"
                        alt="Quick setup guide IIoT Edge Node" />
                </a>
            </div>
            <div class="faq-header">
                <h2 class="title blue" id="faq">IIoT Gateway </h2>
            </div>
            <div class="text-center p-5">
                <a href="https://tienda.logicbus.com.mx/assets/PDF/322/FLYER-AUK.PDF">
                    <img class="img-fluid p-5" src="https://tienda.logicbus.com.mx/assets/images/322/gateway.PNG"
                        alt="Quick setup guide IIoT Gateway" />
                </a>

            </div>

        </div>
    </section>
    <!--conoce auk Fin-->
    <!--Aplicaciones destacadas -->
    <section class="section-blue py-5">
        <div class="container text-center">
            <h1 class="title white">CONTENIDO RELACIONADO</h1>
            <p class="paragraph white ">Descubre nuestros videos y artículos para explorar cómo puedes impulsar la
                productividad, el éxito de tu empresa y mejorar tu OEE (Overall Equipment Effectiveness).</p>
            <div class="pb-3">
                <div class="carousel" data-flickity='{ "lazyLoad": 9, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.logicbus.com.mx/evento/" target="_blank"><img
                                class="carousel-cell-image" data-flickity-lazyload="./images/eventos/workshop-auk.png"
                                alt="WorkShop: Alcanzando la excelencia operacional"
                                title="WorkShop: Alcanzando la excelencia operacional" width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtu.be/EbvSL9O6OCs" target="_blank"><img
                                class="carousel-cell-image"
                                data-flickity-lazyload="images/OEE/QUE-ES-EL-OEE-Y-COMO-COMENZAR-A-IMPLEMENTARLO.png"
                                alt="SEMINARIO: ¿QUÉ ES EL OEE Y CÓMO COMENZAR A IMPLEMENTARLO?"
                                title="SEMINARIO: ¿QUÉ ES EL OEE Y CÓMO COMENZAR A IMPLEMENTARLO?" width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtu.be/vQm62oVACzU" target="_blank"><img
                                class="carousel-cell-image"
                                data-flickity-lazyload="images/OEE/CONSIDERACIONES-PARA-MEJORAR-SU-OEE.png"
                                alt="CONSIDERACIONES PARA MEJORAR SU OEE" title="CONSIDERACIONES PARA MEJORAR SU OEE"
                                width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtu.be/cqYcScMFtk4" target="_blank"><img
                                class="carousel-cell-image" data-flickity-lazyload="images/OEE/QUE-ES-EL-OEE-VIDEO.png"
                                alt="¿Qué es el OEE? 🤔" title="¿Qué es el OEE? 🤔" width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/que-es-el-oee-y-como-implementarlo/"
                            target="_blank"><img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/QUE-ES-EL-OEE-Y-COMO-IMPLEMENTARLO.png"
                                alt="¿Qué es el OEE y cómo implementarlo?" title="¿Qué es el OEE y cómo implementarlo?"
                                width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/como-interpretar-correctamente-tus-resultados-del-oee/"
                            target="_blank"><img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Co%CC%81mo-interpretar-correctamente-tus-resultados-del-OEE-1024x512.png"
                                alt="¿Cómo interpretar correctamente tus resultados del OEE?"
                                title="¿Cómo interpretar correctamente tus resultados del OEE?" width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link"
                            href="https://www.logicbus.com.mx/blog/desbloqueando-el-potencial-con-oee-por-que-todos-los-equipos-deben-entenderlo/"
                            target="_blank"><img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/Desbloqueando-el-potencial-con-OEE_-por-que%CC%81-todos-los-equipos-deben-entenderlo.png"
                                alt="Desbloqueando el potencial con OEE: por qué todos los equipos deben entenderlo"
                                title="Desbloqueando el potencial con OEE: por qué todos los equipos deben entenderlo"
                                width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://www.logicbus.com.mx/blog/la-importancia-del-oee/"
                            target="_blank"><img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/12/La-importancia-del-OEE-y-su-impacto-en-la-eficiencia-de-mi-linea-de-produccion-1024x511.png"
                                alt="La importancia del OEE y su impacto en la eficiencia de mi línea de producción"
                                title="La importancia del OEE y su impacto en la eficiencia de mi línea de producción"
                                width="300px" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell" id="demostracion">
                        <a class="carousel-link" href="https://www.logicbus.com.mx/blog/que-es-el-oee/"
                            target="_blank"><img class="carousel-cell-image"
                                data-flickity-lazyload="https://www.logicbus.com.mx/blog/wp-content/uploads/2021/03/QUE-ES-EL-OEE-1200x600.png"
                                alt="¿Qué es el OEE?" title="¿Qué es el OEE?" width="300px" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Aplicaciones destacadas fin -->
    <section class="my-5 text-center">
        <h1 class="title blue">AGENDA UNA DEMOSTRACIÓN</h1>
        <p class="paragraph light-black">
            ¡Empieza a mejorar tu OEE hoy mismo! Agenda una demostración gratuita del software de <a
                href="https://www.logicbus.com.mx/auk-industries" class="light-black link-orange"><u>Auk
                    Industries</u></a> o contacta con nosotros para obtener más información
        </p>
        <div id="atencion" align="center">
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
    <script>
        function calcular() {
            // Obtener los valores de los inputs
            var tDisponible = parseFloat(document.getElementById("tDisponible").value);
            var tProductivo = parseFloat(document.getElementById("tProductivo").value);
            var produccionEf = parseFloat(document.getElementById("produccionEf").value);
            var cProductiva = parseFloat(document.getElementById("cProductiva").value);
            var piezasM = parseFloat(document.getElementById("piezasM").value);

            // Verificar si los valores son numéricos
            if (isNaN(tDisponible) || isNaN(tProductivo) || isNaN(produccionEf) || isNaN(cProductiva)) {
                alert("Ingrese valores numéricos en todos los campos.");
                return;
            }

            // Calcular el resultado
            var disponibilidad = (tProductivo / tDisponible).toFixed(2);
            var rendimiento = (produccionEf / cProductiva).toFixed(2);
            var piezasDia = produccionEf * tProductivo;
            var calidad = 100 - (piezasM / piezasDia) * 100;
            //var calidad = (produccionEf);
            // Mostrar el resultado
            document.getElementById("planificacion").innerHTML = "Planificacion: " + "<br>" + "tiempo disponible: " +
                tDisponible + " horas" + "<br>" + " velocidad de produccion: " + cProductiva + " piezas/hora" + "<br>" +
                "OBJETIVO DE PRODUCCION: " + cProductiva * tDisponible + " piezas/turno";
            document.getElementById("disponibilidad").innerHTML = "Disponibilidad: " + disponibilidad * 100 + "%";
            document.getElementById("rendimiento").innerHTML = "Rendimiento: " + rendimiento * 100 + "%";
            document.getElementById("calidad").innerHTML = "Calidad: " + calidad + "%";
            document.getElementById("O").innerHTML = "OEE: " + (disponibilidad * rendimiento * calidad).toFixed(2) + "%";
            var oee = disponibilidad * rendimiento * calidad;

            // Llamar a la función para dibujar la gráfica
            dibujarGrafica(disponibilidad, rendimiento, calidad, oee);
        }

        function dibujarGrafica(disponibilidad, rendimiento, calidad, oee) {
            var ctx = document.getElementById("myChart").getContext("2d");
            var ctx2 = document.getElementById("myChart2").getContext("2d");
            var vacio = 100 - oee;

            new Chart(ctx, {

                type: "bar",
                data: {

                    labels: ["Disponibilidad", "Rendimiento", "Calidad"],
                    datasets: [{
                        label: "OEE",
                        data: [disponibilidad * 100, rendimiento * 100, calidad],
                        backgroundColor: ["rgb(103,179,203)",
                            "rgb(255,192,95)",
                            "rgb(0,210,195)",
                            "rgb(255,130,28)",
                        ],
                        borderColor: ["rgb(103,179,203)",
                            "rgb(255,192,95)",
                            "rgb(0,210,195)",
                            "rgb(255,130,28)",
                        ],
                        borderWidth: 1,
                    }

                        ,
                    ],
                }

                ,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        }

                        ,
                    }

                    ,
                }

                ,
            });

            new Chart(ctx2, {

                type: "pie",
                data: {

                    labels: ["OEE", "Mejora"],
                    datasets: [{
                        data: [oee, vacio],
                        backgroundColor: [ //RED

                            "rgb(224,0,0)",
                            "rgba(0,0,0,0)",
                        ],
                        borderColor: ["rgb(224,0,0)", "rgba(0,0,0,0)"],
                        borderWidth: 1,
                    }

                        ,
                    ],
                }

                ,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        }

                        ,
                    }

                    ,
                }

                ,
            });
        }
    </script>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

</body>

<?php echo $var_footer; ?>

</html>