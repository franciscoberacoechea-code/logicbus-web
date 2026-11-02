<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DATALOGGER SOFWTWARE -->
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<html>

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

    <title>Data Logger Software - Logicbus</title>
    <meta name="description"
        content="Software de facil uso y basado para plataformas Windows 95/98/NT/2000/XP/Vista, te permite recolectar, mostrar y analizar datos muy facilmente.">

    <meta name="keywords"
        content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/diagramas.css" rel="stylesheet">
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <!--------------->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

        function menu_actual() {
            document.getElementById("productos").className = "dropdown active";
        };
    </script>

    <style>
        * a {
            cursor: pointer;
        }

        p {
            text-align: justify;
            text-justify: inter-word;
        }

        h1 {
            text-align: center;
        }

        ul {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>

</head>

<body onLoad="menu_actual();">
    <?
    arriba();
    ?>
    <div id="main">
        <div class="gridContArriba">
            <div class="griditemContA">
                <?
    menucategorias();
        ?>
            </div>
            <div class="griditemContA">

                <a href="productos">Productos</a>-&gt;<a href="software">Software</a> -&gt;Data Logger Software

                <h1>Data Logger Software</h1>
                <br>
                <div align="center">
                    <img src="imagenes/09/Dataloggersoftware.png" class="image-productos" alt="Data Logger Software"
                        width="100%"><br><br>
                </div>
                <p>Software de f&aacute;cil uso y basado para plataformas Windows 95/98/NT/2000/XP/Vista, te permite
                    recolectar, mostrar y analizar datos muy f&aacute;cilmente. Con una variedad de herramientas muy
                    poderosas que permiten al usuario examinar, exportar e imprimir con una vista
                    profesional.
                </p>
                <br>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="https://tienda.logicbus.com.mx/Software-para-registro-de-datos_c_574.html"
                                target="_blank">Ver en
                                Tienda</a>
                        </li>
                        <li>
                            <a href="#aplicaciones">Aplicaciones</a>
                        </li>
                        <li>
                            <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
                <br>
                <center>
                    <div class="seccion" id="">
                        <div class="col-center">
                            <h2><span>Software de configuraci&oacute;n y descarga de datos para
                                    Registradores</span></h2>
                        </div>
                    </div>
                </center>
                <p>
                    Nuestro software de ultima generaci&oacute;n esta dise&ntilde;ado para monitoreo continuo y
                    alarmas para todos nuestros Data Loggers. El software puede descargar y mostrar datos de
                    cualquiera de nuestros registradores en tiempo real, esto es posible conectando el equipo a la
                    computadora directamente con su interfaz USB para monitoreo local o remoto utilizando nuestros
                    trasmisores inal&aacute;mbricos.</p>
                <ul>
                    <li>Notificaci&oacute;n de alarma en tiempo real.</li>
                    <li>M&uacute;ltiples datos en una grafica.</li>
                    <li>Registro en tiempo real.</li>
                    <li>Exportar datos.</li>
                    <li>C&aacute;lculos de estad&iacute;sticas.</li>
                    <li>Cursor gr&aacute;fico.</li>
                    <li>Calibraci&oacute;n digital.</li>
                    <li>Sincronizaci&oacute;n de tiempo autom&aacute;tica.</li>
                    <li>Anotaciones.</li>
                </ul>




                <center>
                    <div class="seccion" id="">
                        <div class="col-center">
                            <h2><span>Notificaci&oacute;n de alarma en tiempo real</span></h2>
                        </div>
                    </div>
                </center>
                <p>Este software ofrece una funci&oacute;n de notificaci&oacute;n de alarma en tiempo real que
                    permite
                    al
                    usuario monitorear sus l&iacute;mites de alarma establecidos.
                    Tambi&eacute;n es ideal para aplicaciones donde la se requiere notificaci&oacute;n cuando los
                    rangos
                    est&aacute;n fuera de su l&iacute;mite. Los mensajes de alarma se pueden enviar a tu computadora
                    localmente o remota enviando un correo electr&oacute;nico en tiempo real.
                    Ofrece una herramienta amigable que provee un sistema completo de monitoreo y registro de datos
                    para
                    todas tus necesidades.
                </p>
                <br>
                <center>
                    <img src="imagenes/09/Software_01.jpg" class="image-productos" alt="Data Logger Software"
                        width="200" border="0">
                </center>
                <br>
                <center>
                    <div class="seccion" id="">
                        <div class="col-center">
                            <h2><span>Caracter&iacute;sticas del software</span></h2>
                        </div>
                    </div>
                </center>
                <ul>
                    <li><strong>Notificaci&oacute;n de alarma:</strong><br>
                        Este software ofrece una funci&oacute;n de notificaci&oacute;n de alarma en tiempo real que
                        permite
                        al usuario monitorear los l&iacute;mites de alarmas definidas. Los mensajes de alarma pueden
                        enviarse en tiempo real a tu computadora o remotamente a tu correo electr&oacute;nico.</li>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_01_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Gr&aacute;ficos m&uacute;ltiples:</strong><br>
                        Se puede analizar muchos datos simult&aacute;neamente de diferentes equipos. Te permite
                        hacer el
                        cambio de visualizaci&oacute;n para cada equipo muy f&aacute;cilmente.</li><br>
                    <li><strong>Sincronizaci&oacute;n de tiempo autom&aacute;tico:</strong><br>
                        Los datos de m&uacute;ltiples registradores son alineados y sincronizados en una sola
                        grafica.
                    </li><br>
                    <li><strong>Exporta a Excel:</strong><br>
                        El bot&oacute;n de Excel en la barra de herramientas te permite con un simple clic del
                        mouse,
                        exportar datos a Microsoft Excel. Este comando sincronizara autom&aacute;ticamente en
                        tiempo,
                        los
                        datos de m&uacute;ltiples registradores y los guardara en una hoja de calculo de Excel.</li>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_02_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Exporta datos:</strong><br>
                        Los datos se pueden exportar con los siguientes formatos:<br>
                        <ul>
                            <li><strong>*</strong>.dat: Este es nuestro formato interno en c&oacute;digo ASCII que
                                hace
                                posible ver los datos en cualquier editor de texto.</li>
                            <li><strong>*</strong>.txt: Los datos guardados en este formato, est&aacute;n
                                delimitados
                                por
                                espacios y pueden ser vistos en cualquier programa de hoja de calculo o
                                procesador de
                                palabras.</li>
                            <li><strong>*</strong>.csv: Los datos guardados en este formato, est&aacute;n separados
                                por
                                comas y pueden serle&iacute;dos directamente por Excel y muchos otros programas
                                de
                                hoja
                                de calculo.</li>
                        </ul>
                    </li>
                    <br>
                    <li><strong>Registro en tiempo real:</strong><br>
                        Descarga y muestra datos en tiempo real cuando el registrador esta en modo de registro.</li>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_03_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Estad&iacute;sticos:</strong><br>
                        Calcula autom&aacute;ticamente promedios, m&iacute;nimos, m&aacute;ximos, desviaci&oacute;n
                        est&aacute;ndar y la media de la temperatura cin&eacute;tica.</li><br>
                    <li><strong>Resumen:</strong><br>
                        Visualizaci&oacute;n de estad&iacute;sticas y alarma en formato de reporte simplificado.
                    </li><br>
                    <li><strong>Tabla de datos:</strong><br>
                        Acceso instant&aacute;neo para visualizar detalladamente fechas, tiempos, valores y
                        anotaciones.
                    </li><br>
                    <li><strong>Zoom:</strong><br>
                        Ve los datos registrados con un acercamiento muy poderoso. Soporta m&uacute;ltiples
                        acercamientos y
                        alejamientos (Zoom in &amp; Zoom out). Sus caracter&iacute;sticas var&iacute;an de zoom en
                        forma
                        de
                        caja, vertical, horizontal y al clic del mouse.</li>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_04_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Opciones de formato:</strong><br>
                        Cambio de colores, estilos de l&iacute;nea, opciones de muestreo y encender/apagar canales
                        instant&aacute;neamente.</li><br>
                    <li><strong>Opciones de escalas:</strong><br>
                        La funci&oacute;n de auto escala acomoda los datos en la pantalla o permite al usuario,
                        introducir
                        sus propios valores.</li><br>
                    <li><strong>Accesibilidad:</strong><br>
                        Con el clic derecho de l mouse en la grafica, puedes accesar f&aacute;cilmente a todos los
                        formatos,
                        unidades de medici&oacute;n y herramientas de grafico.</li>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_05_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Anotaciones:</strong><br>
                        Puedes anotar f&aacute;cilmente puntos de datos espec&iacute;ficos en la grafica.</li><br>
                    <li><strong>Cursor grafico:</strong><br>
                        Con solo un clic del mouse puedes mostrar las lecturas por tiempo, valor, par&aacute;metro o
                        numero
                        de muestra.</li><br>
                    <li><strong>Impresi&oacute;n:</strong><br>
                        Imprime los gr&aacute;ficos o los datos en texto.</li><br>
                    <li><strong>Comunicaci&oacute;n:</strong><br>
                        Se configura autom&aacute;ticamente el puerto de comunicaci&oacute;n o el usuario puede
                        configurarla.</li><br>
                    <br>
                    <center>
                        <img src="imagenes/09/Soft_06_chica.jpg" class="image-productos" alt="Data Logger Software"
                            width="200" border="0">
                    </center>
                    <br>
                    <li><strong>Configuraci&oacute;n:</strong><br>
                        F&aacute;cil inicio y configuraci&oacute;n de registradores de datos con inicio inmediato o
                        con
                        alg&uacute;n retraso en el tiempo. Puedes elegir que intervalos de muestreo registrar y
                        nombre
                        de
                        dispositivo.</li><br>
                    <li><strong>Calibraci&oacute;n:</strong><br>
                        La funci&oacute;n de calibraci&oacute;n digital se guarda autom&aacute;ticamente en el
                        dispositivo.
                        Este software provee un asistente para calibrar tu registrador de una manera f&aacute;cil y
                        r&aacute;pida.</li><br>
                    <li><strong>Registro ininterrumpido:</strong><br>
                        Los datos pueden ser descargados del dispositivo sin interrumpir el registro de datos que
                        se este
                        llevando en ese momento.</li><br>
                </ul>
                <br>
                <div align="center">
                    <a href="pdf/MT4_Secure_Software_DS.pdf" target="_blank"><img src="imagenes/iconpdf.jpg"
                            class="image-productos" width="30" height="30" border="0"><br>Ver Secure Software</a>
                </div>
                <br><br>
                <a href="https://www.logicbus.com.mx/descargas/09/MadgeTech_4.2.11.1.zip">Descargar Data Logger
                    Software
                    V4.2.11.1</a><br>
                <a href="descargas/datalogger_softwareV2_02_5.zip">Descargar Data Logger Software V2.02</a>
                <br><br>
                <p>Favor de solicitar su contraseña temporal por medio de nuestro chat en linea.</p>


            </div>

        </div><!--  /main -->
        <?
     abajo();
    ?>
</body>

</html>