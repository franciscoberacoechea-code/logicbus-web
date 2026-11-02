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
        <title>Clientes que han adquirido productos con Logicbus</title>
        <meta name="description" content="Te presentamos una lista de clientes que han adquirido productos de automatización y el sector industrial al que pertenecen.">
        <meta name="keywords" content="Logicbus,clientes destacados Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, automatizacion,seguridad,consultoria,integracion,proyectos industriales,radio frecuencia,analisis,datos,aguascalientes,baja California,ampeche,Chiapas,Chihuahua,Coahuila,Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco,Estado de Mexico,Michoacan,Morelos, Nayarit,Nuevo Leon,Oaxaca,Puebla,Queretaro,Quintana Roo,Sinaloa,Sonora,Tabasco,Tamaulipas,Tlaxcala, Veracruz,Yucatan,Zacatecas,Argentina,Chile,Brasil,Measurement,Adquisicion,Control,Modbus,casos de exito">
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
        
        <!-- Garantizar que todos los logos tengan exactamente el mismo tamaño -->
        <style>
            .gridContCuatro2 img {
                width: 90px !important;
                height: 90px !important;
                object-fit: contain;
            }
        </style>
</head>

<body>
        <?php echo $var_body; ?>
        <?php require("libreria/header.view.php"); ?>
        <div class="divCentrado90">
                <div id="">
                        <center>
                                <div class="seccion" id="">
                                        <div class="col-center">
                                                <h1 style="color:white;vertical-align: sub;"><span><strong>Clientes</strong></span></h1>
                                        </div>
                                </div>
                        </center>
                        <div class="div_pc">
                                <center>
                                        <nav class="">
                                                <ul class="pestanaMenu" role="tablist">
                                                        <li id="pes1" class="pesLI"><a onclick="openTab('aeroespacial','pes1')">Aeroespacial</a> </li>
                                                        <li id="pes2" class="pesLI"><a onclick="openTab('alimentos','pes2')">Alimentos/Bebidas</a> </li>
                                                        <li id="pes3" class="pesLI"><a onclick="openTab('automotriz','pes3')">Automotriz</a> </li>
                                                        <li id="pes4" class="pesLI"><a onclick="openTab('construccion','pes4')">Construcción</a> </li>
                                                        <li id="pes5" class="pesLI"><a onclick="openTab('educacion','pes5')">Educación</a> </li>
                                                        <li id="pes6" class="pesLI"><a onclick="openTab('energia','pes6')">Energía</a> </li>
                                                        <li id="pes7" class="pesLI"><a onclick="openTab('entretenimiento','pes7')">Entretenimiento</a> </li>
                                                </ul>
                                        </nav>
                                        <nav class="">
                                                <ul class="pestanaMenu" role="tablist">
                                                        <li id="pes8" class="pesLI"><a onclick="openTab('ferroviaria','pes8')">Ferroviaria</a> </li>
                                                        <li id="pes9" class="pesLI"><a onclick="openTab('metalurgica','pes9')">Metalúrgica</a> </li>
                                                        <li id="pes10" class="pesLI"><a onclick="openTab('quimica','pes10')">Petroquímica</a> </li>
                                                        <li id="pes11" class="pesLI"><a onclick="openTab('salud','pes11')">Salud</a> </li>
                                                        <li id="pes12" class="pesLI"><a onclick="openTab('gobierno','pes12')">Sector público</a> </li>
                                                        <li id="pes13" class="pesLI"><a onclick="openTab('servicio','pes13')">Servicio</a> </li>
                                                        <li id="pes14" class="pesLI"><a onclick="openTab('tecnologias','pes14')">Tecnología</a> </li>
                                                        <li id="pes15" class="pesLI"><a onclick="openTab('textil','pes15')">Textil</a> </li>
                                                </ul>
                                        </nav>
                                </center>
                        </div>
                        <div class="div_mobile">
                                <center>
                                        <nav class="navMenuSuper">
                                                <ul class="" role="tablist">
                                                        <li id="pes1" class="pesLI"><a onclick="openTab('aeroespacial','pes1')">Aeroespacial</a> </li>
                                                        <li id="pes2" class="pesLI"><a onclick="openTab('alimentos','pes2')">Alimentos/Bebidas</a> </li>
                                                        <li id="pes3" class="pesLI"><a onclick="openTab('automotriz','pes3')">Automotriz</a> </li>
                                                        <li id="pes4" class="pesLI"><a onclick="openTab('construccion','pes4')">Construcci&oacute;n</a> </li>
                                                        <li id="pes5" class="pesLI"><a onclick="openTab('educacion','pes5')">Educación</a> </li>
                                                        <li id="pes6" class="pesLI"><a onclick="openTab('energia','pes6')">Energ&iacute;a</a> </li>
                                                        <li id="pes7" class="pesLI"><a onclick="openTab('entretenimiento','pes7')">Entretenimiento</a> </li>
                                                </ul>
                                        </nav>
                                        <nav class="navMenuSuper">
                                                <ul class="" role="tablist">
                                                        <li id="pes8" class="pesLI"><a onclick="openTab('ferroviaria','pes8')">Ferroviaria</a> </li>
                                                        <li id="pes9" class="pesLI"><a onclick="openTab('metalurgica','pes9')">Metal&uacute;rgica</a> </li>
                                                        <li id="pes10" class="pesLI"><a onclick="openTab('quimica','pes10')">Petroquímica</a> </li>
                                                        <li id="pes11" class="pesLI"><a onclick="openTab('salud','pes11')">Salud</a> </li>
                                                        <li id="pes12" class="pesLI"><a onclick="openTab('gobierno','pes12')">Sector público</a> </li>
                                                        <li id="pes13" class="pesLI"><a onclick="openTab('servicio','pes13')">Servicio</a> </li>
                                                        <li id="pes14" class="pesLI"><a onclick="openTab('tecnologias','pes14')">Tecnología</a> </li>
                                                        <li id="pes15" class="pesLI"><a onclick="openTab('textil','pes15')">Textil</a> </li>
                                                </ul>
                                        </nav>
                                </center>
                        </div>
                        <div class="tab-content contenidoPM">
                                <div class="tabP" id="educacion">
                                        <div class="gridContCuatro2">
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/JOHNS-HOPKINS-UNIVERSITY.png" alt="Johns Hopkins University" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/ipn.png" alt="IPN" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/iteso.png" alt="ITESO" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UDG.png" alt="UDG" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/universidad_guanajuato.png" alt="Universidad de Guanajuato" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/universidad_tabasco.png" alt="Universidad de Tabasco" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/universidad_colima.png" alt="Universidad de Colima" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/utm.png" alt="UTM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uabc.png" alt="UABC" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uay.png" alt="UAY" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uac.png" alt="UAC" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/chapingo.png" alt="Chapingo" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/pedeciba.png" alt="Pedeciba" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/tec_monterrey.png" alt="Tecnológico de Monterrey" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/universidad_cameche.png" alt="Universidad de Campeche" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/utj.png" alt="UTJ" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uan.png" alt="UAN" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/itcv.png" alt="ITCV" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/utzmg.png" alt="UTZMG" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uam.png" alt="UAM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/EL%20COLEGIO%20DE%20LA%20FRONTERA%20SUR.png" alt="EL COLEGIO DE LA FRONTERA SUR" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/universidad_panamericana.png" alt="Universidad Panamericana" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UCM.png" alt="UCM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/unam.png" alt="UNAM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/cbtis43.png" alt="CBTIS43" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/itsl.png" alt="ITSL" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UNICACH.png" alt="UNICACH" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/ITM.png" alt="ITM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/escuela_modelo.png" alt="Escuela Modelo" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UMSNH.png" alt="UMSNH" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/apizaco.png" alt="Apizaco" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/ibero.png" alt="IBERO" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/uaem.gif" alt="UAEM" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/upaep.png" alt="UPAEP" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UPZ.png" alt="UPZ" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UTcancun.png" alt="UT Cancún" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/Logo-CORNELL-UNIVERSITY.png" alt="Cornell University" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/university-of-wisconsin-madison.jpg" alt="University of Winsconsin" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/san-diego-state-university.png" alt="San Diego State University" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/UTD-100.png" alt="The university of Texas at Dallas" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Centro de investigación</span></div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/cinvestav.png" alt="Cinvestav" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/cenam.png" alt="CENAM" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ciateq.png" alt="Ciateq" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/cio.png" alt="CIO" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/iie.png" alt="IIE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/imp.png" alt="IMP" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/inaoe.png" alt="INAOE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/imt.png" alt="IMT" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/lapem.png" alt="LAPEM" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/inin.png" alt="ININ" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/cicese.png" alt="CICESE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/imta.png" alt="IMTA" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/cimav.png" alt="CIMAV" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/cidesi.png" alt="CIDESI" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ciatej.png" alt="CIATEJ" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/comimsa.png" alt="COMIMSA" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/pieaes.png" alt="PIEAES" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ICC.png" alt="ICC" width="90"></div>
                                        </div>
                                </div>
                                <div class="tabP" id="energia">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/grupo-dragon.png" width="90" alt="cliente de logicbus: grupo dragon - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/energytec.png" width="90" alt="cliente de logicbus: energytec de mexico - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/serintra.png" width="90" alt="cliente de logicbus: serintra - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/cooper.png" width="90" alt="cliente de logicbus: cooper - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/didsa.png" width="90" alt="cliente de logicbus: grupo didsa - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/remy.png" width="90" alt="cliente de logicbus: remy - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/egsa.png" width="90" alt="cliente de logicbus: EGSA equipos para gas - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/suntec.png" width="90" alt="cliente de logicbus: suntec - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/cecohesa.png" width="90" alt="cliente de logicbus: cecohesa - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/inventive-power.png" width="90" alt="cliente de logicbus: inventive power - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/fronius.png" width="90" alt="cliente de logicbus: fronius shifting the limits - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/TEJAS.png" width="90" alt="cliente de logicbus: tejas gas de toluca - logo"> </div>
                                                <div align="center"><img src="images/logo_clientes/IBERDROLA.png" width="90" alt="cliente de logicbus: IBERDROLA - logo"> </div>
                                        </div>
                                        <!-- /tab -->
                                </div>
                                <div class="tabP" id="entretenimiento">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/disneys-hollywood-studio.jpg" alt="Cliente Logicbus: Disney's Hollywood Studios" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/universal-orlando-resort.jpg" alt="Universal Orlando Resort" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="alimentos">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/imsa.png" alt="IMSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pinsa.png" alt="PINSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/modelo.png" alt="MODELO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/sigma.png" alt="SIGMA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/SalsasCastilloLogo.png" alt="Salsas Castillo" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ingenio_mochis.png" alt="INGENIO MOCHIS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/bafar.png" alt="BAFAR" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/zone_diet.png" alt="ZONE DIET" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/yavaros.png" alt="YAVAROS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/jifkins.png" alt="jifkins" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/corona.png" alt="CORONA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/indumesa.png" alt="INDUMESA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/chisascab.png" alt="CHISASCAB" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/moctezuma.png" alt="MOCTEZUMA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/INDUSTRIAL PECUARIA DE LOS ALTOS.png" alt="INDUSTRIAL PECUARIA DE LOS ALTOS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/santaclara.png" alt="SANTA CLARA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/hershey.png" alt="HERSHEY" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/jalili.png" alt="JALILI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/lactigurt.png" alt="LACTIGURT" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/proteinas.png" alt="PROTEINAS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ZNOVA.png" alt="ZNOVA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ganzo.png" alt="GANZO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/valle_redondo.png" alt="VALLE REDONDO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/nogal.PNG" alt="NOGAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/alesso.png" alt="ALESSO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/alimentos_salsas.png" alt="ALIMENTOS SALSAS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ferrer.png" alt="FERRER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ricap.png" alt="RICAP" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/citrofrut.png" alt="CITROFRUT" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/murmullo.png" alt="MURMULLO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/trouw.png" alt="TROUW" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/previtep.png" alt="PREVITEP" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/delphi.png" alt="DELPHI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/productoscarnicosar.png" alt="PRODUCTOS CARNICOS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/totis.gif" alt="TOTIS" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="automotriz">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/Isuzu-logo.jpg" alt="ISUZU" width="90"> </div>
                                                <div align="center"><img src="images/nuestros_clientes/audi-logo.png" alt="AUDI" name="AUDI" width="90" /> </div>
                                                <div align="center"><img src="images/logo_clientes/walbro.png" alt="WALBRO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ficosa.png" alt="FICOSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/continental.png" alt="CONTINENTAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/bosch.png" alt="BOSCH" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/faurecia.png" alt="FAURECIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/intier.png" alt="INTIER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/trelleborg.png" alt="TRELLEBORG" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/iacna.png" alt="IACNA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/gm.png" alt="GM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/littlefuse.png" alt="LITTLE FUSE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/actia.png" alt="ACTIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/federal_mogul.png" alt="FEDERAL MOGUL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/agp_colombia.png" alt="AGP COLOMBIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/tecno_ingenieria.png" alt="TECNO INGENIERIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/vdo.png" alt="VDO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/mahle.png" alt="MAHLE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/FRITEC.PNG" alt="FRITEC" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/INALFA ROOF SYSTEMS.png" alt="INALFA ROOF SYSTEMS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/minth.png" alt="MINTH" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/gkn.png" alt="GKN" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/magneti.png" alt="MAGNETI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/arnecom.png" alt="ARNECOM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/leoni.png" alt="LEONI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/NOVEM.png" alt="NOVEM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/KAYAKU.png" alt="KAYAKU" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/GROTE.png" alt="GROTE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/inalfa.png" alt="INALFA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/webasto.png" alt="WEBASTO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/sanoh.png" alt="SANOH" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/cummins.jpg" alt="CUMMINS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/Valeo.png" alt="VALEO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/hella.jpg" alt="HELLA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/tesla.png" alt="TESLA" width="90"> </div>
                                                <div align="center">
                                                        <a href="http://www.capsonic.com/CA2/#/" target="_blanck"><img src="images/logo_clientes/CAPSONIC_Logo.png" alt="Capsonic" title="Capsonic" width="90"></a>
                                                </div>
                                                <div align="center"><img src="images/logo_clientes/MOTORES-REYNOSA-SA-DE-CV.jpg" alt="Motores Reynosa" title="Motores Reynosa" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/kia-cliente-logicbus.jpg" alt="KIA" title="KIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/magna-logo.png" alt="MAGNA" title="MAGNA" width="90"> </div>
                                                <div class="gridItemContB" align="center"><img src="images/logo_clientes/rassini-suspensiones.png" alt="Rassini Suspensiones" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Transporte</span></div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/omnibus.png" alt="OMNIBUS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/vallartaplus.png" alt="VALLARTAPLUS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/sur_jalisco.png" alt="JALISCO SUR" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/duncan_cossio.png" alt="Duncan y Cossío" width="90"> </div>
                                        </div>
                                        <!-- /tab -->
                                </div>
                                <div class="tabP" id="quimica">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/aserquim.png" alt="ASERQUIM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/geo_estratos.png" alt="Geo Estratos SA de CV" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/thermotek.png" alt="Thermotek" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/nutek.png" alt="NUTEK" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/halliburton-logo.png" alt="Halliburton" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="construccion">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/nuestros_clientes/toyota-tsusho-logo.png" alt="TOYOTA TSUSHO" name="TOYOTA TSUSHO" width="90" /> </div>
                                                <div align="center"><img src="images/logo_clientes/matco.png" alt="MATCO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/comimsa.png" alt="COMIMSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/panamericana_civil.png" alt="PANAMERICANA CIVIL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/jbconstrucciones.png" width="90" alt="JB Construcciones"> </div>
                                                <div align="center"><img src="images/logo_clientes/jibe.png" alt="JIBE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/truper.png" alt="TRUPER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/tracsa.png" alt="TRACSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/tecmei.png" alt="TECMEI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/raber.png" alt="RABER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/geotest.png" alt="GEOTEST" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/hr.png" alt="HR" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/minorte.png" alt="MINORTE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/COREPACK.png" alt="COREPACK" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/INDUSA.png" alt="INDUSA" width="90"> </div>
                                        </div>
                                        <!-- /tab -->
                                </div>
                                <div class="tabP" id="tecnologias">
                                        <div align="center" class="separadorAG"><span>Electrónica</span></div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/nuestros_clientes/resco-logo.png" alt="resco" name="resco" width="90" /> </div>
                                                <div align="center"><img src="images/logo_clientes/flextronics.png" alt="FLEXTRONICS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/jabil.png" alt="JABIL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/panasonic.png" alt="PANASONIC" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/wesco.png" alt="WESCO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/philips.png" alt="PHILIPS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/Solectron.png" alt="SOLECTRON" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/saturn.png" alt="SATURN" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/sumida.png" alt="SUMIDA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/yamaver.png" alt="YAMAVER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/skyworks.png" alt="SKYWORKS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/texas_instruments.png" alt="TEXAS INSTUMENTS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/united_technologies.png" alt="UNITED TECHNOLOGIES" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/arkles.png" alt="ARKLES" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/epson.png" alt="EPSON" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/methode.png" alt="METHODE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/imi.png" alt="IMI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/inasa.png" alt="INASA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/mecatronix.png" alt="MECATRONIX" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pegasus.png" alt="PEGASUS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/kostal.png" alt="KOSTAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/festo.png" alt="FESTO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/bose.png" alt="BOSE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ThyssenKruppBilsteinofAmericaInc.png" alt="TKBA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/honeywell.jpg" alt="HONEYWELL" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Informática</span></div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/nuestros_clientes/apple-logo.png" alt="APPLE" name="APPLE" width="90" /> </div>
                                                <div align="center"><img src="images/logo_clientes/HP.png" alt="HP" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/highnet.png" alt="HIGHNET" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/inblay.png" alt="INBLAY" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/quarksoft.png" alt="QUARKSOFT" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/invensys.png" alt="INVENSYS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/softcom.png" alt="SOFTCOM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/intel.png" alt="INTEL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/technicolor.png" alt="TECHNICOLOR" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ecodef.png" alt="ECODEF" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/reset.png" alt="RESET" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/grupo-sac.png" alt="GRUPO SAC" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/valentino.png" alt="VALENTINO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/indra.png" alt="INDRA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pounce.PNG" alt="POUNCE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/GEMALTO.png" alt="GEMALTO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/solinco.png" alt="SOLINCO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/TI_TELECOMO_SOLUTIONS_NASOF.png" alt="TI & TELECOMO SOLUTIONS NASOF" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/gic.png" alt="GIC" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/TT.png" alt="TT" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/CASYSTEMS.png" alt="CASYSTEMS" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Telecomunicaciones</span></div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/roadtrack.png" alt="ROADTRACK" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/telconet.png" alt="TELCONET" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/NGN.png" alt="NGN" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ihs.png" alt="IHS" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/logitel.png" alt="LOGITEL" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/once.png" alt="ONCE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/tellabs.png" alt="TELLABS" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/advance.png" alt="ADVANCE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/telefonica.png" alt="TELEFONICA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/intrepid.PNG" alt="INTREPID" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/TELECT.png" alt="TELECT" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/sky.png" alt="SKY" width="90"></div>
                                        </div>
                                </div>
                                <div class="tabP" id="salud">
                                        <div align="center" class="separadorAG"> <span>Farmac&eacute;utica/Laboratorio</span> </div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/bayer.png" alt="BAYER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/merck.png" alt="MERCK" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pfizer.png" alt="PFIZER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/caltechnix.png" alt="CALTECHNIX" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pisa.png" alt="PISA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/novartis.png" alt="NOVARTIS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/alcon.png" alt="ALCON" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/casa_metrologica.png" alt="CASA METROLOGICA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/loreal.png" alt="LOREAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/exova.png" alt="EXOVA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/fresenius-kabi.png" alt="FRESENIUS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pympsa.png" alt="PYMPSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/rimsa.png" alt="RIMSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ACCESOLAB.png" alt="ACCESOLAB" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/LIFERPAL.jpg" alt="LIFERPAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/boston-scientific.jpg" alt="BOSTON SCIENTIFIC" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Médica</span> </div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/nuestros_clientes/microx-logo.png" alt="MICRO-X" name="MICRO-X" width="90" /> </div>
                                                <div align="center"><img src="images/logo_clientes/grupo_sim.png" alt="GRUPO SIM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/innova_medica.png" alt="INNOVA MEDICA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/grifols.png" alt="GRIFOLS" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Óptica</span> </div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/zeiss.png" alt="ZEISS" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="ferroviaria">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/bombardier.png" alt="BOMBARDIER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/ferrosur.png" alt="FERROSUR" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/alstom.png" alt="ALSTOM" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/src.png" alt="SRC" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="gobierno">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/cfe.png" alt="CFE" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/siapa.png" alt="SIAPA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/japama.png" alt="JAPAMA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/CEDICYT.png" alt="CEDICYT" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/comapa.png" alt="COMAPA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/sapal.png" alt="SAPAL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/papagayo.png" alt="PAPAGAYO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/servicios_salud_bcs.png" alt="Instituto de Servicios de Salud de Baja California Sur" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/cardiologia.png" alt="CARDIOLOGIA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/conicet.png" alt="CONICET" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/iner.png" alt="INER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/inifap.png" alt="INIFAP" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/api_chiapas.png" alt="API CHIAPAS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/comapa-altamira.png" alt="COMAPA ALTAMIRA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/INIDETAM.png" alt="INIDETAM" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>No lucrativa</span> </div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/FUNDACION%20BERTHA.png" alt="FUNDACION BERTHA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/FUNDACION%20POLITECNICO.png" alt="FUNDACION POLITECNICO" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="metalurgica">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/camesa.png" alt="CAMESA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/aluminios_uruguay.png" alt="ALUMINIOS URUGUAY" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/procables.png" alt="PROCABLES" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/plating.png" alt="PLATING" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/deacero.png" alt="DEACERO" width="90"> </div>
                                                <div><img src="images/logo_clientes/FIMEX.png" alt="FIMEX" width="90"> </div>
                                        </div>
                                        <div align="center" class="separadorAG"><span>Minería</span> </div>
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/minera_lanegra.png" alt="MINERA LANEGRA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/geotec.png" alt="GEOTEC" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/MINERA_ROSARIO.png" alt="MINERA ROSARIO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/CONSORCIO_MINERO.png" alt="CONSORCIO MINERO" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="servicio">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/ZAPALINAME.png" alt="ZAPALINAME" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/MONTRA.png" alt="MONTRA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/hellman.png" alt="HELLMAN" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/solexvintel.png" alt="SOLEXVINTEL" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/servindliz.png" alt="SERVINDLIZ" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/camsa.png" alt="CAMSA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/impresora_coyoacan.png" alt="IMPRESORA COYOACAN" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/intesys.png" alt="INTESYS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/METROLOGY.png" alt="METROLOGY" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/OMG.png" alt="OMG" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/CODIGO.png" alt="CODIGO" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pointer.png" alt="POINTER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/plexus-logo.jpg" alt="PLEXUS" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/fedex-ground.png" alt="Fedex Ground" width="90"> </div>
                                        </div>
                                </div>
                                <div class="tabP" id="textil">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/coats.png" alt="coats" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ANDREA.png" alt="ANDREA" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/pettenati.jpg" alt="PETTENATI" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/DENIM.png" alt="DENIM" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/crocs.png" alt="CROCS" width="90"></div>
                                        </div>
                                </div>
                                <div class="tabP" id="aeroespacial">
                                        <div class="gridContCuatro2">
                                                <div align="center"><img src="images/logo_clientes/NASA.png" alt="NASA" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/bombardier.png" alt="BOMBARDIER" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/AJW.png" alt="AJW" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ametek.png" alt="AMETEK" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/BUSEK-C-INC.png" alt="BUSEK C INC" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/ge.jpg" alt="GE Aerospace" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/inaoe.png" alt="INAOE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/lockheedmartin.png" alt="LOCKHEEDMARTIN" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/SARGENT-AEROSPACE-&-DEFENSE-ARIZONA.png" alt="SARGENT AEROSPACE & DEFENSE ARIZONA" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/SENEAM.png" alt="SENEAM" width="90"> </div>
                                                <div align="center">
                                                        <a href="http://www.capsonic.com/CA2/#/" target="_blanck"><img src="images/logo_clientes/CAPSONIC_Logo.png" alt="Capsonic" title="Capsonic" width="90"></a>
                                                </div>
                                                <div align="center"><img src="images/logo_clientes/boeing_logo.png" alt="BOEING" width="90"> </div>
                                                <div align="center"><img src="images/logo_clientes/BAI.png" alt="BAI" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/Ballaerospace-logo.png" alt="BALLAEROSPACE" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/michigan-aerospace-corp.jpg" alt="MICHIGAN AEROSPACE CORP" width="90"></div>
                                                <div align="center"><img src="images/logo_clientes/CTCOA.png" alt="CTCOA" width="90"></div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <script>
                document.getElementById('aeroespacial').style.display = "block";
                document.getElementById('pes1').classList.add('activePM');

                function openTab(tabName, pesName) {
                        var pestana = pesName;
                        var i;
                        var x = document.getElementsByClassName("tabP");
                        var y = document.getElementsByClassName("pesLI");
                        for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                        }
                        for (i = 0; i < y.length; i++) {
                                y[i].classList.remove('activePM');
                        }
                        document.getElementById(tabName).style.display = "block";
                        document.getElementById(pestana).classList.add('activePM');
                }
        </script>
        <!-- PIE DE PAGINA -->
        <?php require("libreria/footer.view.php"); ?>
        <?php echo $bootstrap_js; ?>
        <?php echo $jquery_js; ?>
        <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>