<section class="gridoOcultarMB">
    <div class="gridContTres">
        <div class="griditemContB" align="left" style="margin-left:15%">
            <br>
            <div class="contenedortienda">
                <a href="https://tienda.logicbus.com.mx" style="color: transparent;">
                    <div class="circulo">
                        <img loading="lazy" src="<?= RUTA ?>images/icono-mx.webp" alt="MX" title="tienda MX"
                            width="90%">
                    </div>
                </a>
                <a href="https://www.logicbus.com">
                    <div class="circulo">
                        <img loading="lazy" src="<?= RUTA ?>images/icono-usa.webp" alt="USA" title="tienda USA"
                            width="90%"> <br>
                    </div>
                </a>
            </div>
            <p style="color: #24537B;"><b>Comprar ahora</b></p>
            <div id="google_translate_element"></div>


        </div>
        <div class="griditemContB" align="center" value="" onclick="setCookie(this.value);">
            <a href="<?= RUTA ?>index"><img src="<?= RUTA ?>imagenes/logicbus.webp" alt="Logicbus SA de CV"
                    title="Logicbus SA de CV" alt="Logicbus SA de CV" width="80%"></a>
        </div>
        <div class="griditemContB" align="right" style="margin-right:15%">
            <div style="width: 80%;">
                <p style="color: #24537B; padding-right: 20px; font-weight: 800;">Buscar productos</p>
                <script async src="https://cse.google.com/cse.js?cx=d229a39b05f064d88"></script>
                <div class="gcse-search"></div>
            </div>
        </div>
    </div>
</section>

<ul id="menuPrin" class="ulNavbar">
    <li class="liNavbar" id="home"><a class="accessurl" style="font-size: 1.5rem;" href="<?= RUTA ?>"><i
                class="fas fa-home" aria-hidden="true"></i></a></li>
    <li class="liNavbar" id="productosmenu">
        <button id="encabezadoMP" value="Productos" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'productos.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?>
        " onmouseover="mostrarSubmenuP()" onmouseout="ocultarSubmenuP()"
            onclick="window.location.href='<?= RUTA ?>productos';">Productos <i class="fa fa-chevron-down orange"
                aria-hidden="true"></i>
        </button>
    </li>
    <li class="liNavbar" id="marcasmenu">
        <button value="Marcas" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'marcas-logicbus.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        }
        ?>
        " onclick="window.location.href='<?= RUTA ?>marcas-logicbus';">Marcas</button>
    </li>
    <li class="liNavbar" id="solucionesmenu">
        <button value="Aplicaciones" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'aplicaciones-en-la-industria.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        }
        ?>
    " onclick="window.location.href='<?= RUTA ?>aplicaciones-en-la-industria';">Aplicaciones</button>
    </li>
    <li class="liNavbar" id="nosotrosmenu">
        <button value="Nosotros" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'empresa.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?> " onclick="window.location.href='<?= RUTA ?>empresa';">Sobre Nosotros</button>
    </li>
    <li class="liNavbar" id="sitiosmenu">
        <button value="Sitios" id="sitios" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'nuestros-sitios-logicbus.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?> " onmouseover="mostrarSubmenuS()" onmouseout="ocultarSubmenuS()"
            onclick="window.location.href='<?= RUTA ?>nuestros-sitios-logicbus';">Nuestros Sitios <i
                class="fa fa-chevron-down orange" aria-hidden="true"></i>
        </button>
    </li>


    <li class="liNavbar">
        <button value="" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'infografias.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?>
        " onclick="window.location.href='<?= RUTA ?>infografias';">Infografías</button>
    </li>

    <li class="liNavbar" id="blogmenu">
        <button value="" class="accessurl" onclick="window.location.href='<?= RUTA ?>blog/';">Blog</button>
    </li>

    <li class="liNavbar" id="atencionmenu">
        <button id="encabezadoMP" value="contacto" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'contacto.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?>
        " onmouseover="mostrarSubmenuA()" onmouseout="ocultarSubmenuA()"
            onclick="window.location.href='<?= RUTA ?>contacto';">Atención al Cliente <i
                class="fa fa-chevron-down orange" aria-hidden="true"></i>
        </button>
    </li>

</ul>

<div id="submenus">
    <!--Sub menú Nuestro Sitios-->
    <div class="mega-submenu" id="mega-submenuns" value="Sitios" onmouseover="mostrarSubmenuS()"
        onmouseout="ocultarSubmenuS()" style="overflow: auto; width: 70%; right: 0;">
        <div class="gridContMitad">
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="https://tienda.logicbus.com.mx">Tienda Virtual México</a></p>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com">Tienda Virtual Internacional</a></p>
                <p class="tSubmenu"><a class="" href="https://www.pc-industrial.logicbus.com.mx"> Computadoras
                        Industriales </a></p>
                <p class="tSubmenu"><a class="" href="https://tablet-industrial.logicbus.com.mx"> Tablets Industriales
                    </a></p>
                <p class="tSubmenu"><a class="" href="https://monitor-industrial.logicbus.com.mx"> Pantallas
                        Industriales </a></p>
            </div>
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>celda-de-carga/">Celdas de carga</a></p>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>herramientas-logicbus">Herramientas Logicbus</a>
                </p>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>preguntas-frecuentes-controllino">PLC
                        Controllino</a></p>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>nuestros-sitios-logicbus">Todos Nuestros Sitios</a>
                </p>
            </div>
        </div>
    </div>

    <!--Sub menú Atención al Cliente-->
    <div class="mega-submenu" id="mega-submenuna" value="Atencion" onmouseover="mostrarSubmenuA()"
        onmouseout="ocultarSubmenuA()" style="overflow: auto; width: 45%; right: -10%;">
        <div class="gridContMitad">
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com.mx/contacto">Contáctanos</a></p>
            </div>
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com.mx/servicios">Servicios</a></p>
            </div>
            <div>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com.mx/soporte">Soporte</a></p>
            </div>
        </div>
    </div>

    <!--Sub menú Productos-->
    <div class="mega-submenu" id="mega-submenup" value="Productos" onmouseover="mostrarSubmenuP()"
        onmouseout="ocultarSubmenuP()" style="height: 500px; overflow: auto;  ">
        <div class="gridContMitad">
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>automatizacion-control-procesos"> Automatización y
                        Control de Procesos </a></p><!-- automatizacion --->
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>robots-colaborativos">Robots Colaborativos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>robots-moviles-autonomos-amr-agv">Robots Móviles Autónomos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>vision-artificial">Vision Artificial</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>plc">PLC (Controlador Lógico Programable)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>hmi-con-touchscreen">Pantallas HMI</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>programmable-automation">Controladores Autónomos Programables
                        (PAC)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>industrial-touchscreens">Pantallas Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>control-movimiento">Control de Movimiento</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>control-via-celular-industrial">Control Vía Celular (GSM)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>instrumentos-panel">Instrumentos para Panel</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>fuentes-de-poder">Fuentes de Poder</a>
                </div>
                <br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>tecnologia-cloud-iot">IoT</a></p>
            </div>
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>adquisicion-y-registro-de-datos-daq">Adquisición de
                        Datos DAQ</a></p><!-- aquisicion-->
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>adquisicion-de-datos">Adquisición de Datos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>multivariables-logger">Graficadores</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>datalogger">Registradores</a>
                </div><br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>biotecnologia-y-hospitales"> Biotecnología y
                        Hospitales </a></p><br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>consumo-y-analisis-de-energia-electrica"> Consumo y
                        Análisis de Energía <br>Eléctrica </a></p>
                <!--consumo-->
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>transductores-de-corriente-electrica">Transductores de Corriente
                        Eléctrica</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>Donas-de-corriente">Donas de Corriente</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>medidores-consumo-electrico-montaje-Riel-Din">Medidores de Consumo
                        Eléctrico para Montaje en Riel Din</a>
                </div>
            </div>
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>cursos"> Cursos </a></p>

                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>PLC-TRN">Curso Básico de Programación PLCs</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html">Curso de Programación HMI</a>
                </div><br>
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>instrumentos-medicion"> Prueba y Medición </a></p>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>stand-osciloscopios">Osciloscopios</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>fuentes-programables">Fuentes de Alimentación de CC <br>
                        Programables</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>generadores-de-funciones">Osciloscopios con un Canal <br>Generador
                        de Funciones</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>academia-prod">Equipos Académicos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>multimetros">Multímetros</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>pc-y-comunicaciones-industriales"> PCs y
                        Comunicaciones Industriales </a></p>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>computadoras-industriales">Computadoras Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>computadoras-para-panel">Panel PC - Todo en Uno</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>tablet-pc-resistentes">Tablets PC- Resistentes</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>pantallas-industriales">Pantallas y Monitores Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>teclados-indice">Teclados Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>control-via-celular-industrial">Control Vía Celular (GSM)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>touchpad-trackball-industriales">Apuntadores y Mouse
                        Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>escaner-lector-de-codigos">Escáner - Lector de Códigos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>convertidores-protocolos">Convertidores de Protocolos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>hub-usb-industrial">Hub USB Industrial</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>switch-ethernet-industrial">Switches Ethernet Industriales</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>transductores-sensores"> Sensores y Transductores
                    </a></p>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>celdas-de-carga">Celdas de Carga</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>torque-sensor">Sensores de Torque</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>sensores-fotoelectricos">Sensores Fotoeléctricos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>waycon">Sensores de Distancia</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>sensores-temperatura">Sensores de Temperatura</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>encoder">Encoders</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>power-transducers">Potencia Eléctrica</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>transductores-sensores">Transductores</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>acondicionador-de-senal">Acondicionadores</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="<?= RUTA ?>software"> Software y Herramientas de Desarrollo
                    </a></p>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>scada">SCADA</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>FvDesigner">FvRT</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>dasylab">DASYLab</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>universal-library">Universal Library</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>DAQFlex">DAQFlex</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>software-winpro">WinProladder</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>madgetech-4-standard">MadgeTech 4 Standard</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>madgetech-4-secure">MadgeTech 4 Secure</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="<?= RUTA ?>madgetech-cloud-services">MadgeTech Cloud Services</a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="menuTop" class="navbarMME">
    <div class="logo">
        <br>
        <a href="<?= RUTA ?>"><img id="logomovil" src="<?= RUTA ?>imagenes/logicbus.webp" width=70%></a>
    </div>
    <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="labelm"><br>
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="menuME">
            <div class="gridContMitadMovil">
                <div>
                    <li id="productosMM"><a class="aM" href="<?= RUTA ?>productos">Productos</a></li>
                    <li id="solucionesMM"><a class="aM" href="<?= RUTA ?>aplicaciones-en-la-industria">Aplicaciones</a>
                    </li>
                    <li id="sitiosMM"><a class="aM" href="<?= RUTA ?>nuestros-sitios-logicbus">Nuestros Sitios</a>
                    </li>
                    <li id="blogMM"><a class="aM" href="<?= RUTA ?>blog/">Blog</a></li>

                </div>
                <div>
                    <li id="marcasMM"><a class="aM" href="<?= RUTA ?>marcas-logicbus">Marcas</a></li>
                    <li id="empresaMM"><a class="aM" href="<?= RUTA ?>empresa">Sobre Nosotros</a></li>
                    <li id="empresaMM"><a class="aM" href="<?= RUTA ?>infografias">Infografías</a></li>
                    <li id="contactoMM"><a class="aM" href="<?= RUTA ?>contacto" class="">Contacto&nbsp;<i
                                class="fas fa-phone"></i></a></li>
                </div>
            </div>
            <div align="center">
            </div>
        </div>
    </ul>
    <script defer type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: "es",
                includedLanguages: "es,fr,en,pt",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, "google_translate_element");
        }
    </script>
    <script async type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</nav>

<!-- SCRIPT PARA EVITAR QUE EL MENÚ DESAPAREZCA  -->
<script>

    var timerP, timerS, timerA;

    // Productos
    window.mostrarSubmenuP = function () {
        clearTimeout(timerP);
        document.getElementById("mega-submenup").style.display = "block";
    };
    window.ocultarSubmenuP = function () {
        timerP = setTimeout(function () {
            document.getElementById("mega-submenup").style.display = "none";
        }, 500); 
    };

    // Sitios
    window.mostrarSubmenuS = function () {
        clearTimeout(timerS);
        document.getElementById("mega-submenuns").style.display = "block";
    };
    window.ocultarSubmenuS = function () {
        timerS = setTimeout(function () {
            document.getElementById("mega-submenuns").style.display = "none";
        }, 250);
    };

    // Atención
    window.mostrarSubmenuA = function () {
        clearTimeout(timerA);
        document.getElementById("mega-submenuna").style.display = "block";
    };
    window.ocultarSubmenuA = function () {
        timerA = setTimeout(function () {
            document.getElementById("mega-submenuna").style.display = "none";
        }, 250);
    };
</script>