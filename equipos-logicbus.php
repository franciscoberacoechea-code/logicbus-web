<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
?>


<meta charset="utf-8">
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
    <title>Equipos Logicbus - Logicbus </title>
    <meta name="description" content="Teclados Industriales, Graficadores y Switches.">
    <meta name="keywords"
        content="Logicbus,Mexico, Guadalajara,Logicbus Latinoamerica, Argentina, Chile, Brasil,Automatizacion,Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato,registradores, gateways">
    <meta name="revisit after" content="14 days">
    <meta http-equiv="Content-Type" content="text/html">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">
        function menu_actual() {
            document.getElementById("productos").className = "active";
            document.getElementById("collapseOne").className = "collapse";
            document.getElementById("collapseTwo").className = "show";
            document.getElementById("measurement_computing").className = "list-group-item list-group-item-action active";
        };
    </script>
    <style>
        .linkN {
            text-decoration: none;
            display: inline-block;
            border: 5px solid transparent;
        }

        .linkAzul {
            text-decoration: none;
            display: inline-block;
            border: 5px solid transparent;
        }

        .linkAzul:hover {
            border-color: #2d5680 !important;
        }

        .linkN:hover {
            border-color: #ff7e00 !important;
        }

        @media screen and (min-width: 1080px) {

            .imgFadeA,
            .imgFadeI,
            .imgFadeD {
                width: 80%;
            }
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
            <div class="griditemContA" id="subir">
                <a href="productos">Productos</a> -&gt;<a href="equipos-logicbus">Equipos Logicbus</a>
                <br>
                <div class="" align="center">
                    <h1><span class="margen">Equipos Logicbus</span></h1><br>
                    <a class="linkN" href="teclados_indice">
                        <img class="imgFadeA" src="images/nuestras_marcas/Teclados-logicbus.png" alt="Teclados Logicbus"
                            width="250px" title="Teclados marca Logicbus">
                    </a>
                </div><br>
                <div class="gridContMitad">
                    <div class="" align="center">
                        <a class="linkAzul" href="registradores-logicbus">
                            <img class="imgFadeI" src="images/nuestras_marcas/Graficadores-logicbus.png"
                                alt="Graficadores Logicbus" width="250px" title="Graficadores marca Logicbus">
                        </a>
                    </div>
                    <div class="" align="center">
                        <a class="linkAzul" href="switches-industriales-ethernet-logicbus">
                            <img class="imgFadeD" src="images/nuestras_marcas/Switches-logicbus.png"
                                alt="Switches Logicbus" width="250px" title="Switches marca Logicbus">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?
  abajo();
  ?>
</body>

</html>