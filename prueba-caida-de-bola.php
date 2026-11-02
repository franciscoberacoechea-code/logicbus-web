<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->



<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>

    <title>Soporte de prueba OEM | Celdas de carga | Logicbus</title>

    <meta name="description"
        content="Descubre cómo la Prueba de Caída de Bola evalúa la resistencia al impacto y la absorción de energía en materiales y productos. Aprende sobre el uso de celdas de carga en ensayos deportivos, pruebas de choque automotriz, pruebas aeroespaciales y de defensa, así como en la industria del embalaje.">

    <meta name="keywords"
        content="Prueba de Caída de Bola, Resistencia al Impacto, Absorción de Energía, Celda de Carga, Normas de Impacto, Ensayos Deportivos, Pruebas de Choque Automotriz, Pruebas Aeroespaciales y de Defensa, Industria del Embalaje, Fuerza de Impacto, Sensores de Fuerza, ASTM E23, ISO 6487, SAE J211, ISO 2248, Equipo de Prueba">

    <meta name="revisit after" content="14 days">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Menu movil - Icono menu - Tabla -->
    <link href="libreria/menu-movil.css" rel="stylesheet">
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">

    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

        function menu_actual() {
            document.getElementById("productos").className = "dropdown active";
        };

    </script>

    <style>
        h1 {
            text-align: center;
        }

        table td {
            text-align: center;
        }

        .img-aplicaiones {
            padding: 5px 5px 0px 5px;
        }

        .part1 {
            border-bottom: 2px dotted darkgray;
            text-align: justify;
            overflow: hidden;
            margin-bottom: 5%;
        }

        .part1 img {
            display: block;
            /*para centrar las imágenes*/
            margin: 0 auto;
        }

        .centro {
            text-align: center;
        }

        .seccion-aplicaiones {
            padding: 5px;
        }

        .seccion-aplicaiones2 {
            padding: 10px 5px 10px 5px;
        }

        .margen {
            border-bottom: 6px solid #ff7e00;
            padding-bottom: 25px;
        }
    </style>
</head>

<body onLoad="menu_actual();">

    <?
  arriba();
  seccionSoluciones();
  ?>

    <div id="main" class="container productos_page">
        <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de
        carga
        <br>

        <?
  menuMovilApp();
  menuPC();
?>
        <h1 class="my-5">
            <center><b class="margen">Soporte de prueba OEM</b></center>
        </h1>
        <center>
            <h2><b>Prueba de Caída de Bola</b></h2>
        </center><br>

        <div class="part1">
            <article>

                <p>
                    La prueba de caída de bola es un procedimiento estandarizado utilizado para evaluar la resistencia
                    al impacto y las características de absorción de energía de varios materiales y productos. Implica
                    dejar caer una bola de peso y diámetro especificados desde una altura predeterminada sobre el
                    espécimen de prueba. La fuerza de impacto generada al entrar en contacto con el espécimen se mide
                    para evaluar su capacidad para resistir tensiones relacionadas con el impacto.
                </p>

                <img src="imagenes/36/diagramas/prueba-de-caida-de-bola.jpg"
                    alt="Prueba de Caída de Bola - Aplicaci&oacute;n de Celda de carga" width="45%">
                <br>

                <div>
                    <p><b>C&oacute;mo funciona:</b><br></p>
                    <ol>
                        <li style="color: black;">Celda de Carga: FUTEK ofrece una variedad de sensores de fuerza de
                            impacto de alta calidad que cumplen con las demandas incluso de los escenarios más
                            desafiantes. FUTEK recomienda encarecidamente el Botón de Carga <a
                                href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
                                target="_blank">LLB500</a>, que proporciona una
                            precisión excepcional con una alta respuesta de frecuencia natural de hasta ~20 kHz.</li>

                        <li style="color: black;"> Condicionamiento de Señal: Para procesar y amplificar la señal de
                            salida de la celda de carga en mV/V, se utiliza un acondicionador de señal USB digital. El
                            <a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">USB225</a>
                            Pro Elite de
                            FUTEK es una opción ideal para las pruebas de caída de bola, ya que ofrece muestreo de señal
                            de alta velocidad (hasta 38,400 SPS) y capacidades avanzadas de filtrado. Esto garantiza la
                            captura precisa de las fuerzas máximas e impactantes, permitiendo un análisis detallado del
                            comportamiento del material bajo condiciones de impacto.
                        </li>

                        <li style="color: black;"> Registro y Análisis de Datos: Para registrar y analizar los datos de
                            la fuerza de impacto, es esencial contar con un software de registro de datos confiable. El
                            software de registro
                            de datos SENSIT de FUTEK combinado con la celda de carga y el acondicionador de señal
                            proporciona una solución integral para capturar, condicionar, visualizar e interpretar los
                            datos de fuerza de impacto obtenidos de las pruebas de caída de bola. Permite a los
                            ingenieros identificar parámetros críticos de fuerza, evaluar el rendimiento del material y
                            tomar decisiones basadas en datos.</li>
                    </ol>
                </div><br>
                <p>
                    <b>Productos en uso:</b>&nbsp;
                    Una celda tipo botón y Módulo USB.
                </p>

            </article>
        </div>

        <section id="equipos-implementados" class="img-fluid container-fluid ">

            <div class="row img-fluid" style="align-items: stretch;" alt="Responsive image">

                <div class="col-3 col-md-3 container img-fluid">
                    <center><a
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
                            target="_blank"><img src="imagenes/36/LLB500.jpg" alt="" width="80%"></a></center>
                    <center><a
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-boton-llb500"
                            target="_blank">LLB500</a>
                    </center>
                </div>

                <div class="col-3 col-md-3 container img-fluid">
                    <center><a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank"><img
                                src="imagenes/36/fsh04720.jpg" alt="" width="80%"></a></center>
                    <center><a href="https://tienda.logicbus.com.mx/FSH04720_p_34149.html" target="_blank">Modulos
                            USB</a></center>
                </div>
            </div>

        </section> <br>

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
    </div>


    <br><br>

    </div>

    </div><!--  /main -->

    <?
 abajo();
?>
    <script type="text/javascript">
        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                // more then one submenu open?
                this.multiple = multiple || false;

                var dropdownlink = this.el.find('.dropdownlink');
                dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
            };

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el,
                    $this = $(this),
                    //this is the ul.submenuItems
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    //show only one menu at the same time
                    $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
                }
            }

            var accordion = new Accordion($('.accordion-menu'), false);
        })
    </script>

</body>

</html>