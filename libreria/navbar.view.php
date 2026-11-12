<ul id="menuPrin" class="ulNavbar">
    <li class="liNavbar" id="home"><a class="accessurl" style="font-size: 1.5rem;" href="./"><i class="fas fa-home" aria-hidden="true"></i></a></li>
    <li class="liNavbar" id="productosmenu">
        <button id="encabezadoMP" value="Productos" class="<?php if (basename($_SERVER['PHP_SELF']) == 'productos.php') {
                                                                echo 'accessurl-active';
                                                            } else {
                                                                echo 'accessurl';
                                                            } ?>" onmouseover="mostrarSubmenuP()" onmouseout="ocultarSubmenuP()" onclick="window.location.href='productos';">Productos
            <img src="images/app/flecha-abajo-blanca.svg" alt="fd">
        </button>
    </li>
    <li class="liNavbar" id="marcasmenu">
        <button value="Marcas" class="<?php if (basename($_SERVER['PHP_SELF']) == 'marcas-logicbus.php') {
                                            echo 'accessurl-active';
                                        } else {
                                            echo 'accessurl';
                                        } ?>" onclick="window.location.href='marcas-logicbus';">Marcas</button>
    </li>
    <li class="liNavbar" id="solucionesmenu">
        <button value="Aplicaciones" class="<?php if (basename($_SERVER['PHP_SELF']) == 'soluciones-en-la-industria-logicbus.php') {
                                                echo 'accessurl-active';
                                            } else {
                                                echo 'accessurl';
                                            } ?>" onclick="window.location.href='soluciones-en-la-industria-logicbus';">Aplicaciones</button>
    </li>
    <li class="liNavbar" id="nosotrosmenu">
        <button value="Nosotros" class="<?php if (basename($_SERVER['PHP_SELF']) == 'empresa.php') {
                                            echo 'accessurl-active';
                                        } else {
                                            echo 'accessurl';
                                        } ?>" onclick="window.location.href='empresa';">Sobre
            Nosotros</button>
    </li>
    <li class="liNavbar" id="sitiosmenu">
        <button value="Sitios" id="sitios" class="accessurl" onmouseover="mostrarSubmenuS()" onmouseout="ocultarSubmenuS()" onclick="window.location.href='nuestros-sitios-logicbus';">Nuestros
            Sitios
            <img src="images/app/flecha-abajo-blanca.svg" alt="fd">
        </button>
    </li>

    <li class="liNavbar" id="contactomenu">
        <button value="Contactanos" class="<?php if (basename($_SERVER['PHP_SELF']) == 'contacto.php') {
                                                echo 'accessurl-active';
                                            } else {
                                                echo 'accessurl';
                                            } ?>" onclick="window.location.href='contacto';">Contáctanos</button>
    </li>
    <li class="liNavbar" id="contactomenu">
        <button value="Contactanos" class="
        <?php if (basename($_SERVER['PHP_SELF']) == 'soporte.php') {
            echo 'accessurl-active';
        } else {
            echo 'accessurl';
        } ?>
        " onclick="window.location.href='soporte';">Soporte</button>
    </li>
    <li class="liNavbar" id="blogmenu">
        <button value="" class="accessurl specialNav" onclick="window.location.href='https://www.logicbus.com.mx/blog/';">Blog</button>
    </li>
</ul>





<div id="submenus">

    <div class="mega-submenu" id="mega-submenuns" value="Sitios" setCookie(this.value); onmouseover="mostrarSubmenuS()" onmouseout="ocultarSubmenuS()" style="overflow: auto;">
        <div class="gridContMitad">
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="https://tienda.logicbus.com.mx">Tienda Virtual México</a></p>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com">Tienda Virtual Internacional</a></p>
                <p class="tSubmenu"><a class="" href="https://www.logicbus.com/blog/">Blog Logicbus</a></p>
                <p class="tSubmenu"><a class="" href="https://www.pc-industrial.logicbus.com.mx"> Computadoras Industriales </a></p>
                <p class="tSubmenu"><a class="" href="https://tablet-industrial.logicbus.com.mx"> Tablets Industriales </a></p>
                <p class="tSubmenu"><a class="" href="https://monitor-industrial.logicbus.com.mx"> Pantallas Industriales </a></p>
            </div>
            <div>
                <br>
                <p class="tSubmenu"><a class="" href="/celda-de-carga/">Celdas de carga</a></p>
                <p class="tSubmenu"><a class="" href="/oee-que-es">OEE</a></p>
                <p class="tSubmenu"><a class="" href="/herramientas-logicbus">Herramientas Logicbus</a></p>
                <p class="tSubmenu"><a class="" href="/preguntas-frecuentes-controllino">PLC Controllino</a></p>
                <p class="tSubmenu"><a class="" href="/nuestros-sitios-logicbus"> Todos Nuestros Sitios</a></p>
            </div>
        </div>
    </div>



    <div class="mega-submenu" id="mega-submenup" value="Productos" onmouseover="mostrarSubmenuP()" onmouseout="ocultarSubmenuP()" style="height: 500px; overflow: auto;  ">
        <div class="gridContMitad">
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="automatizacion-control-procesos"> Automatización y control de procesos </a></p><!-- automatizacion --->
                <div class="subSubmenu">
                    <a class="" href="robots-colaborativos">Robots Colaborativos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="robots-moviles-autonomos-amr-agv">Robots Móviles Autónomos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="vision-artificial">Vision Artificial</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="plc">PLC (Controlador Lógico Programable)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="hmi-con-touchscreen">Pantallas HMI</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="programmable-automation">Controladores Autónomos Programables (PAC)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="industrial-touchscreens">Pantallas Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="control-movimiento">Control de Movimiento</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="control-via-celular-industrial">Control Vía Celular (GSM)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="instrumentos-panel">Instrumentos para Panel</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="fuentes-de-poder">Fuentes de Poder</a>
                </div>
            </div>
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="adquisicion-y-registro-de-datos-daq">Adquisición de Datos DAQ</a></p><!-- aquisicion-->
                <div class="subSubmenu">
                    <a class="" href="adquisicion-de-datos">Adquisición de Datos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="multivariables-logger">Graficadores</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="datalogger">Registradores</a>
                </div><br>
                <p class="tSubmenu"><a class="" href="consumo-y-analisis-de-energia-electrica"> Consumo y Análisis de Energía <br>Eléctrica </a></p>
                <!--consumo-->
                <div class="subSubmenu">
                    <a class="" href="transductores-de-corriente-electrica">Transductores de Corriente Eléctrica</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="Donas-de-corriente">Donas de Corriente</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="medidores-consumo-electrico-montaje-Riel-Din">Medidores de Consumo Eléctrico para Montaje en Riel Din</a>
                </div>
                <br>
                <p class="tSubmenu"><a class="" href="tecnologia-cloud-iot">IoT</a></p>
            </div>
            <div class="">
                <br>
                <p class="tSubmenu"><a class="" href="cursos"> Cursos </a></p>

                <div class="subSubmenu">
                    <a class="" href="PLC-TRN">Curso Básico de Programación PLCs</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="https://tienda.logicbus.com.mx/HMI-TRN_p_11925.html">Curso de Programación HMI</a>
                </div><br>
                <p class="tSubmenu"><a class="" href="instrumentos-medicion"> Prueba y Medición </a></p>
                <div class="subSubmenu">
                    <a class="" href="stand-osciloscopios">Osciloscopios</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="fuentes-programables">Fuentes de Alimentación de CC <br> Programables</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="generadores-de-funciones">Osciloscopios con un Canal <br>Generador de Funciones</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="academia-prod">Equipos Académicos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="multimetros">Multímetros</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="pc-y-comunicaciones-industriales"> PCs y Comunicaciones Industriales </a></p>
                <div class="subSubmenu">
                    <a class="" href="computadoras-industriales">Computadoras Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="computadoras-para-panel">Panel PC - Todo en Uno</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="tablet-pc-resistentes">Tablets PC- Resistentes</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="pantallas-industriales">Pantallas y Monitores Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="teclados_indice">Teclados Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="control-via-celular-industrial">Control Vía Celular (GSM)</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="touchpad-trackball-industriales">Apuntadores y Mouse Industriales</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="escaner-lector-de-codigos">Escáner - Lector de Códigos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="convertidores-protocolos">Convertidores de Protocolos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="hub-usb-industrial">Hub USB Industrial</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="switch-ethernet-industrial">Switches Ethernet Industriales</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="transductores-sensores"> Sensores y Transductores </a></p>
                <div class="subSubmenu">
                    <a class="" href="celdas-de-carga">Celdas de Carga</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="torque-sensor">Sensores de Torque</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="sensores-fotoelectricos">Sensores Fotoeléctricos</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="microstrain-hbk">Sensores de Deteccion Inercial,<br> Inalámbrico y Desplazamiento</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="sensores-temperatura">Sensores de Temperatura</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="encoder">Encoders</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="power_transducers">Potencia Eléctrica</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="transductores_sensores">Transductores</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="acondicionador-de-senal">Acondicionadores</a>
                </div>
            </div>
            <div class="">
                <p class="tSubmenu"><a class="" href="software"> Software y Herramientas de Desarrollo </a></p>
                <div class="subSubmenu">
                    <a class="" href="FvDesigner">FvRT</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="dasylab">DASYLab</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="universal_library">Universal Library</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="DAQFlex">DAQFlex</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="software_winpro">WinProladder</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="MadgeTech_4_Standard">MadgeTech 4 Standard</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="MadgeTech_4_Secure">MadgeTech 4 Secure</a>
                </div>
                <div class="subSubmenu">
                    <a class="" href="MadgeTech_Cloud_Services">MadgeTech Cloud Services</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarColor(elemento) {
        elemento.classList.add('clicked');
        setTimeout(function() {
            elemento.classList.remove('clicked');
        }, 700);
    }

    function setCookie(value) {
        document.cookie = "tag=" + encodeURIComponent(value) + ";max-age=" + (1800) + ";path=/";
    }a
</script>

<script type="text/javascript">
    function mostrarSubmenuP() { //productos
        var submenu = document.getElementById('mega-submenup');
        submenu.style.display = "block";
    }

    function ocultarSubmenuP() {
        var submenu = document.getElementById('mega-submenup');
        submenu.style.display = "none";
    }

    function mostrarSubmenuS() { //sitios
        var submenu = document.getElementById('mega-submenuns');
        submenu.style.display = "block";
    }

    function ocultarSubmenuS() {
        var submenu = document.getElementById('mega-submenuns');
        submenu.style.display = "none";
    }
</script>