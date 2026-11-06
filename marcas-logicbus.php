<?php
require("admin/config.php");
include("libreria/libreria.php");

// =======================================================================
// 1. CATEGORÍAS
// =======================================================================
$categorias = [
    'adquisiciond'   => ['id_btn' => 'adquisicion', 'nombre' => 'ADQUISICIÓN Y REGISTRO DE DATOS DAQ', 'img' => 'adquisicion-y-registro-de-datos-daq.svg'],
    'automatizacion' => ['id_btn' => 'automatizacion', 'nombre' => 'AUTOMATIZACIÓN Y CONTROL DE PROCESOS', 'img' => 'automatizacion-y-control-de-procesos.svg'],
    'biotecnologia'  => ['id_btn' => 'biotecnologia', 'nombre' => 'BIOTECNOLOGÍA/HOSPITALES', 'img' => 'biotecnologia.svg'],
    'energia'        => ['id_btn' => 'energia', 'nombre' => 'CONSUMO Y ANÁLISIS DE ENERGÍA', 'img' => 'consumo-y-analisis-de-energia-electrica.svg'],
    'iot'            => ['id_btn' => 'iot', 'nombre' => 'IoT', 'img' => 'iot.svg'],
    'oee'            => ['id_btn' => 'oee', 'nombre' => 'OEE Y PRODUCTIVIDAD', 'img' => 'oee.svg'],
    'computo'        => ['id_btn' => 'computo', 'nombre' => 'PC\'S Y COMUNICACIONES INDUSTRIALES', 'img' => 'pcs-y-comunicaciones-industriales.svg'],
    'pruebasm'       => ['id_btn' => 'prueba', 'nombre' => 'PRUEBA Y MEDICIÓN', 'img' => 'prueba-y-medicion.svg'],
    'robotica'       => ['id_btn' => 'robotica', 'nombre' => 'ROBÓTICA y VISIÓN ARTIFICIAL', 'img' => 'vision-artificial-y-robots.svg'],
    'sensores'       => ['id_btn' => 'sensores', 'nombre' => 'SENSORES Y TRANSDUCTORES', 'img' => 'sensores-y-transductores.svg'],
    'software'       => ['id_btn' => 'software', 'nombre' => 'SOFTWARE Y HERRAMIENTAS DE DESARROLLO', 'img' => 'software-y-herramientas-de-desarrollo.svg'],
];

// =======================================================================
// 2. BASE DE DATOS DE MARCAS
// =======================================================================
$marcas = [
    [
        'nombre' => '3ONEDATA',
        'url' => '3onedata',
        'subtitulo' => 'Comunicación Industrial y Gestión de Redes',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => '3ONEDATA.webp',
        'img_logo' => '3ONEDATA.webp',
        'categorias' => ['computo', 'iot'],
        'caracteristicas' => ['Switches industriales', 'Convertidores de interfaz', 'comunicacion inalámbrica', 'Conectividad serial', 'Convertidores de protocolos', 'Softwares para gestión de redes']
    ],
    [
        'nombre' => 'AICSYS',
        'url' => 'aicsys',
        'subtitulo' => 'Computadoras Industriales para Montaje en Rack',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'AICSYS.webp',
        'img_logo' => 'AICSYS.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['IPC para montaje en rack 1U, 2U, 3U y 4U', 'IPC para montaje en pared', 'Chasis industrial con ranuras 5.25”, 3.5” y 2.5”', 'Soporte para tarjetas Mini-ITX y Micro-ATX', 'SBC full-length PICMG o de medio tamaño bus ISA', 'Backplane con slots ISA, PCI y PCIe']
    ],
    [
        'nombre' => 'ALLYBOT',
        'url' => 'https://www.logicbus.com.mx/allybot',
        'subtitulo' => 'Soluciones de Limpieza Autónoma Inteligente',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'allybot.webp',
        'img_logo' => 'allybot.webp',
        'categorias' => ['robotica', 'automatizacion'],
        'caracteristicas' => ['Robots comerciales de limpieza', 'Barrido, aspirado y fregado automatizado', 'Navegación autónoma con IA', 'Operación continua 24/7', 'Monitoreo y gestión remota']
    ],
    [
        'nombre' => 'APPLIED MOTION PRODUCTS',
        'url' => 'applied-motion-products',
        'subtitulo' => 'Soluciónes de Control de Movimiento para la Automatización',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'APPLIED-MOTION.webp',
        'img_logo' => 'APPLIED-MOTION.webp',
        'categorias' => ['automatizacion'],
        'caracteristicas' => ['Motores a paso', 'Servomotores', 'Drivers', 'Motores', 'Controladores', 'Reductores', 'Fuentes de alimentación']
    ],
    [
        'nombre' => 'ARBOR',
        'url' => 'arbor',
        'subtitulo' => 'Computación Embebida y Soluciones IoT',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'ARBOR.webp',
        'img_logo' => 'ARBOR.webp',
        'categorias' => ['computo', 'automatizacion', 'energia'],
        'caracteristicas' => ['Computadoras industriales', 'Sistemas embebidos', 'Soluciones IoT', 'Tablets robustas', 'PDAs industriales', 'Monitores industriales']
    ],
    [
        'nombre' => 'ARESTECH',
        'url' => 'arestech',
        'subtitulo' => 'Monitores y Computadoras Industriales',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'ARESTECH.webp',
        'img_logo' => 'ARESTECH.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Computadoras embebidas', 'Paneles PC industriales', 'Monitor táctil', 'Productos de diseño modular', 'Soporte para Atom, Pentium, Celeron, Core i3, Core i5 y Core i7', 'Opción con ranuras PCI y PCIe y compatibilidad con GPU', 'Monitores y panel PC con protección IP65, IP66 e IP69K', 'Pantallas con tamaño de 10.4" a 24"']
    ],
    [
        'nombre' => 'AUK INDUSTRIES',
        'url' => 'auk-industries',
        'subtitulo' => 'Sistema Digital para el Monitoreo de la Eficiencia General de los Equipos (OEE) Sencillo y Escalable',
        'bandera' => 'singapur.webp',
        'pais' => 'Singapur',
        'img_prod' => 'img-single-asset-deep-dive-desktop.webp',
        'img_logo' => 'AUK-INDUSTRIES.webp',
        'categorias' => ['iot', 'oee', 'software'],
        'caracteristicas' => ['OEE', 'Tiempo de ciclo de las máquinas', 'Utilización', 'Process parameters', 'Relación de productos defectuosos y más']
    ],
    [
        'nombre' => 'AUTOXING',
        'url' => 'https://www.logicbus.com.mx/autoxing-technology',
        'subtitulo' => 'Robótica móvil autónoma para la entrega en entornos comerciales e industriales',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'autoxing-producto.webp',
        'img_logo' => 'autoxing.webp',
        'categorias' => ['robotica', 'automatizacion'],
        'caracteristicas' => ['AMR industriales', 'Robots de Entrega', 'Montacargas inteligente', 'Robots de Desinfección', 'Accesorios y Componentes']
    ],
    [
        'nombre' => 'BRAINCHILD',
        'url' => 'brainchild',
        'subtitulo' => 'Controladores y Registradores de Alta Precisión',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'BRAINCHILD.webp',
        'img_logo' => 'Brainchild.webp',
        'categorias' => ['adquisiciond'],
        'caracteristicas' => ['Registradores de gráfica en pantalla', 'Registradores de pantalla táctil', 'Registradores de datos sin papel', 'Accesorios y componentes']
    ],
    [
        'nombre' => 'CALEX',
        'url' => 'calex',
        'subtitulo' => 'Sensores de Temperatura Infrarrojos',
        'bandera' => 'ukb.webp',
        'pais' => 'Reino Unido',
        'img_prod' => 'CALEX.webp',
        'img_logo' => 'CALEX.webp',
        'categorias' => ['sensores', 'pruebasm'],
        'caracteristicas' => ['Sensores de temperatura infrarrojos', 'Registradores de datos de temperatura por infrarrojos', 'Indicadores de temperatura', 'Controladores PID', 'Calibradores de cuerpo negro', 'Termopares', 'Termómetros de resistencia', 'Convertidores DC/DC']
    ],
    [
        'nombre' => 'CHAINWAY',
        'url' => 'chainway',
        'subtitulo' => 'Tablets y Handhelds',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'CHAINWAY.webp',
        'img_logo' => 'CHAINWAY.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Computadoras móviles', 'Escáneres', 'Lectores RFID', 'Tabletas', 'Lectores biométricos']
    ],
    [
        'nombre' => 'CIMON',
        'url' => 'cimon-software-scada-industrial',
        'subtitulo' => 'Automatización Industrial y Control de Sistemas',
        'bandera' => 'cosb.webp',
        'pais' => 'Corea del Sur',
        'img_prod' => 'CIMON.webp',
        'img_logo' => 'CIMON.webp',
        'categorias' => ['automatizacion', 'software', 'computo'],
        'caracteristicas' => ['Sistema SCADA', 'PLCs modulares', 'HMIs y HMIs hibrídos']
    ],
    [
        'nombre' => 'CINCOZE',
        'url' => 'cincoze',
        'subtitulo' => 'Computadoras, Panel PCs y Monitores Industriales',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'CINCOZE.webp',
        'img_logo' => 'CINCOZE.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Computadoras compactas industriales', 'Paneles PC industriales', 'Monitor táctil', 'Productos de diseño modular', 'Procesadores Atom, Pentium, Celeron, Core i3, Core i5, Core i7, Core i9', 'Opción con ranuras PCI, PCIe y soporte con GPU', 'Monitores y panel PC cpn protección IP65', 'Pantallas con tamaño de 8.4" a 24"']
    ],
    [
        'nombre' => 'CONTROLLINO',
        'url' => 'controllino',
        'subtitulo' => 'PLC\'s de Grado Industrial Compatible 100% con Arduino',
        'bandera' => 'espana.webp',
        'pais' => 'Austria',
        'img_prod' => 'CONTROLLINO.webp',
        'img_logo' => 'CONTROLLINO.webp',
        'categorias' => ['automatizacion'],
        'caracteristicas' => ['Controllino Mini', 'Controllino Maxi', 'Controllino Maxi Power', 'Controllino Maxi Automation', 'Controllino Mega', 'Controllino Neo', 'Training Kit']
    ],
    [
        'nombre' => 'DAVITEQ',
        'url' => 'daviteq',
        'subtitulo' => 'Sensores IoT (Sub-GHz, LoRaWAN, Sigfox, NB-IoT)',
        'bandera' => 'vieb.webp',
        'pais' => 'Vietnam',
        'img_prod' => 'DAVITEQ.webp',
        'img_logo' => 'DAVITEQ.webp',
        'categorias' => ['iot', 'sensores'],
        'caracteristicas' => ['Sensores y actuadores inalámbricos', 'Productos IoT', 'Convertidores IoT', 'Paquetes de soluciones de IoT', 'Sub-GHz', 'LoRaWAN', 'Sigfox', 'NB-IoT']
    ],
    [
        'nombre' => 'DAVO LIN',
        'url' => 'davo-lin',
        'subtitulo' => 'Teclados Industriales, Númericos, Trackball, Touchpad',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'DAVO.webp',
        'img_logo' => 'DAVO-LIN.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Teclados de uso rudo', 'Teclados metalicos', 'Teclados de silicón', 'Teclados con trackball, trackpoint, joystick y con o sin touchpad', 'Teclados con conexión inalámbrica']
    ],
    [
        'nombre' => 'DIGILENT',
        'url' => 'digilent',
        'subtitulo' => 'Dispositivos Electrónicos de Prueba, Medición y Desarrollo',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'DIGILENT.webp',
        'img_logo' => 'DIGILENT.webp',
        'categorias' => ['adquisiciond', 'pruebasm'],
        'caracteristicas' => ['Dispositivos digitales de prueba y medición (analizador y generador de patrones digitales)', 'Dispositivos análogos de prueba y medición (osciloscopio, analizador lógico y fuente de alimentación variable)', 'Placas FPGA', 'Módulos JTAG', 'Software', 'Accesorios']
    ],
    [
        'nombre' => 'DORNA ROBOTICS',
        'url' => 'dorna-robotics',
        'subtitulo' => 'Robots compactos y versátiles para automatización industrial inteligente',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'dorna.webp',
        'img_logo' => 'dorna-robotics.webp',
        'categorias' => ['biotecnologia', 'robotica', 'automatizacion'],
        'caracteristicas' => ['Robots de 5 ejes multipropósito', 'Sistemas de automatización para escritorio', 'Accesorios: pinzas, cámaras, transportadores', 'Controladores abiertos con API y SDK']
    ],
    [
        'nombre' => 'EMDOOR',
        'url' => 'emdoor-laptops-industriales',
        'subtitulo' => 'Tablets, Laptops Industriales y Robustas',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'EMDOO.webp',
        'img_logo' => 'EMDOOR.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Handhelds con display de 4", 5", 6"', 'Tablets robustas con display de 8" 10.1" y 12.1"', 'Laptops industriales con display desde 12" hasta 15.6"', 'Panel PCs con display de 10.1", 15.6" y 21.5"', 'Compatibles con Windows y Android', 'Soporte con WIFI, Bluetooth, GPS, RFID, 4G LTE, lectores de códigos de barra']
    ],
    [
        'nombre' => 'EMS KONTROL',
        'url' => 'https://www.logicbus.com.mx/ems-kontrol',
        'subtitulo' => 'Sensores Industriales para Monitoreo Ambiental y de Procesos',
        'bandera' => 'turb.webp',
        'pais' => 'Turquía',
        'img_prod' => 'ems-kontrol.webp',
        'img_logo' => 'ems-kontrol-logo.webp',
        'categorias' => ['sensores', 'iot'],
        'caracteristicas' => ['Sensores de temperatura y humedad', 'Sensores de dióxido de carbono (CO2)', 'Sensores de presión diferencial', 'Sensores de gases (amoniaco, etileno, SO2, CO, O2)', 'Sensores portátiles con pantalla', 'Dispositivos de control de pared y panel', 'Sistema de rastreo de zonas Or-Tak con app móvil']
    ],
    [
        'nombre' => 'FATEK',
        'url' => 'fatek',
        'subtitulo' => 'PLC\'s Industriales Expandibles y HMI\'s',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'FATEK.webp',
        'img_logo' => 'FATEK.webp',
        'categorias' => ['automatizacion', 'iot', 'software'],
        'caracteristicas' => ['PLC', 'HMI', 'HMI con PLC', 'Plataforma IoT', 'Software SCADA', 'Servidor OPC', 'Fuente de alimentación', 'Servos']
    ],
    [
        'nombre' => 'FUTEK',
        'url' => 'futek',
        'subtitulo' => 'Celdas de Carga y Sensores de Torque',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'FUTEK.webp',
        'img_logo' => 'FUTEK.webp',
        'categorias' => ['sensores', 'pruebasm'],
        'caracteristicas' => ['Celdas de carga y sensores de fuerza', 'Sensores de torque', 'Sensores de presión', 'Sensores multieje', 'Sensores y electrónica personalizados', 'Sensores OEM', 'Sensores nano de fuerza', 'Instrumentos y amplificadores', 'Software', 'Servicios de calibración']
    ],
    [
        'nombre' => 'GRAPHTEC',
        'url' => 'graphtec',
        'subtitulo' => 'Registradores de Datos Portátiles',
        'bandera' => 'japb.webp',
        'pais' => 'Japón',
        'img_prod' => 'GRAPHTEC.webp',
        'img_logo' => 'GRAPHTEC.webp',
        'categorias' => ['adquisiciond', 'pruebasm'],
        'caracteristicas' => ['Registrador de datos autónomo multicanal (hasta 200 entradas)', 'Registrador de datos de alta velocidad/voltaje', 'Plataforma de adquisición de datos', 'Registrador de datos de CO2', 'Registrador de datos de luz/UV', 'Registrador de datos de temperatura/humedad', 'Registrador de datos de vibración/aceleración']
    ],
    [
        'nombre' => 'ICP DAS',
        'url' => 'icp-das',
        'subtitulo' => 'Adquisición y Registro de Datos',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'ICPDAS.webp',
        'img_logo' => 'ICPDAS.webp',
        'categorias' => ['adquisiciond', 'automatizacion', 'iot', 'energia', 'software'],
        'caracteristicas' => ['Controladores M2M e IoT', 'HMI', 'PC industriales y monitores', 'Convertidores de protocolo', 'Módulos de E/S de adquisición de datos remotos', 'Modbus RTU, Modbus TCP, bus CAN, Profibus, Profinet, Ethernet/IP, HART, EtherCAT, DeviceNet, BACnet, Wi-Fi y Zigbee']
    ],
    [
        'nombre' => 'INDUSTRIAL SHIELDS',
        'url' => './industrial-shields',
        'subtitulo' => 'Hardware Industrial Basado en Plataformas de Código Abierto',
        'bandera' => 'espana.webp',
        'pais' => 'España',
        'img_prod' => 'INDUSTRIAL-SHIELDS.webp',
        'img_logo' => 'INDUSTRIAL-SHIELDS.webp',
        'categorias' => ['automatizacion', 'computo', 'iot'],
        'caracteristicas' => ['PLCs basado en Arduino', 'PLCs basado en Raspberry Pi', 'PLCs basado en ESP32', 'Plataformas de entradas y salidas', 'Expandibles', 'Accesorios y complementos']
    ],
    [
        'nombre' => 'IP DISPLAYS',
        'url' => './ipdisplays',
        'subtitulo' => 'Pantallas Inteligentes Industriales para Visualización y Control',
        'bandera' => 'usab.webp',
        'pais' => 'USA',
        'img_prod' => 'ipdisplays-products.webp',
        'img_logo' => 'ip-displays.webp',
        'categorias' => ['automatizacion'],
        'caracteristicas' => ['Pantallas LED para interiores', 'Pantallas LED para exteriores', 'Software', 'Conectividad Ethernet 10/100 integrada']
    ],
    [
        'nombre' => 'KOKOBOTS',
        'url' => 'https://www.logicbus.com.mx/kokobots',
        'subtitulo' => 'Robótica autónoma para limpieza y operación en entornos comerciales e industriales',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'KOKOBOTS.webp',
        'img_logo' => 'KOKOBOTS.webp',
        'categorias' => ['robotica'],
        'caracteristicas' => ['AMR para Limpieza Profesional', 'Navegación inteligente y mapeo (SLAM)', 'Monitoreo y conectividad en la nube', 'Reducción de costos operativos', 'Para hospitales, aeropuertos e industria']
    ],
    [
        'nombre' => 'LOGGERFLEX',
        'url' => 'LoggerFlex',
        'subtitulo' => 'Registradores con Conexion a la Nube por Wi-Fi',
        'bandera' => 'canb.webp',
        'pais' => 'Canada',
        'img_prod' => 'LOGGERFLEX.webp',
        'img_logo' => 'LOGGERFLEX.webp',
        'categorias' => ['adquisiciond', 'iot', 'biotecnologia', 'software'],
        'caracteristicas' => ['Temperatura ambiente y sonda', 'Humedad', 'Dióxido de carbono', 'Intensidad de luz', 'Cualquier salida analógica', 'Marcador automático', 'Presión de aire y tubería', 'Detector de inundaciones y fugas', 'Corriente AC']
    ],
    [
        'nombre' => 'LOGICBUS TECLADOS INDUSTRIALES',
        'url' => 'teclados-indice',
        'subtitulo' => 'Teclados Industriales',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'LOGICBUS-TECLADOS.webp',
        'img_logo' => 'LOGICBUS.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Teclado metálico industrial', 'Teclado numérico metálico', 'Teclado a prueba de explosiones', 'Teclado a prueba de agua', 'Trackball de metal y ratón con panel táctil', 'Teclado de silicón', 'Teclado de membrana']
    ],
    [
        'nombre' => 'LOGICBUS GRAFICADORES',
        'url' => 'registradores-logicbus',
        'subtitulo' => 'Graficadores Digitales Sin Papel',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'LOGICBUS-GRAFICADORES.webp',
        'img_logo' => 'LOGICBUS.webp',
        'categorias' => ['adquisiciond'],
        'caracteristicas' => ['Pantallas de 4.3", 12.1" y 5.6"', 'Hasta 48 entradas analógicas universales', '100 mseg. tasa de muestreo', 'Canales externos (Modbus)', 'Pantallas personalizada', 'FDA 21 CFR parte 11', 'Servidor web']
    ],
    [
        'nombre' => 'MADGETECH',
        'url' => 'madgetech',
        'subtitulo' => 'Registradores de Alta Gama para la Industria con Software de Análisis de Datos',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'MADGETECH.webp',
        'img_logo' => 'MADGETECH.webp',
        'categorias' => ['adquisiciond', 'iot', 'biotecnologia', 'software'],
        'caracteristicas' => ['Temperatura', 'Humedad, presión', 'Pulso / evento / estado', 'Voltaje / corriente', 'Choque / vibración', 'Nivel de agua, viento, pH', 'Galgas / celdas de carga', 'Dióxido de carbono', 'Software gratuito en la nube, transmite datos en tiempo real a la nube']
    ],
    [
        'nombre' => 'MICSIG',
        'url' => 'https://www.logicbus.com.mx/micsig',
        'subtitulo' => 'Osciloscopios y Sondas de Precisión para Diagnóstico Electrónico',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'micsig-products.webp',
        'img_logo' => 'micsig-logo.webp',
        'categorias' => ['pruebasm'],
        'caracteristicas' => ['Osciloscopios de alta resolución de 12 bits', 'Osciloscopios tipo tablet de 8 bits', 'Osciloscopios automotrices', 'Sonda aislada de fibra óptica', 'Sonda diferencial de alto voltaje', 'Sonda de corriente CA/CD', 'Sonda de corriente Rogowski']
    ],
    [
        'nombre' => 'NATIONAL CONTROL DEVICES',
        'url' => 'national-control-devices-ncd',
        'subtitulo' => 'Sensores de Monitoreo y Control IoT',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'NCD.webp',
        'img_logo' => 'NCD.webp',
        'categorias' => ['iot', 'sensores', 'automatizacion'],
        'caracteristicas' => ['Sensores: químicos, gas, ambientales, movimiento, energía', 'Módems: Ethernet, USB, RS-232, RS-485', 'Gateways: AWS, Azure, Losant, MQTT', 'Transmisor y receptor inalámbrico 0-10V/4~20mA']
    ],
    [
        'nombre' => 'PHOTOCRAFT',
        'url' => 'photocraft',
        'subtitulo' => 'Encoders de Rueda, Eje y Absolutos',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'PHOTOCRAFT.webp',
        'img_logo' => 'TRI-TRONICS.webp',
        'categorias' => ['sensores'],
        'caracteristicas' => ['Encoders de eje', 'Eje hueco', 'Encoders de rueda', 'Encoders absolutos', 'Encoders de alta resolución']
    ],
    [
        'nombre' => 'PICO TECHNOLOGY',
        'url' => 'pico-technology',
        'subtitulo' => 'Osciloscopios y Registradores para PC',
        'bandera' => 'ukb.webp',
        'pais' => 'Reino Unido',
        'img_prod' => 'PICOTECH.webp',
        'img_logo' => 'PICO-TECHNOLOGY.webp',
        'categorias' => ['adquisiciond', 'pruebasm'],
        'caracteristicas' => ['Osciloscopios para PC', '5MHz a 30GHz', '1 a 8 Canales', 'Osciloscopios automotrices', 'Analizadores de redes vectoriales pico', 'Sintetizadores de señal', 'Generadores de pulsos', 'Registradores de datos', 'Sondas de osciloscopio', 'Prueba de RF y accesorios de microondas']
    ],
    [
        'nombre' => 'QUASI',
        'url' => 'quasi',
        'subtitulo' => 'Soluciones en Robótica Autónoma Móvil con AI',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'QUASI.webp',
        'img_logo' => 'QUASI.webp',
        'categorias' => ['robotica', 'automatizacion', 'biotecnologia'],
        'caracteristicas' => ['Robot autonomo móvil (AMR)', 'Sistema de control de flotillas']
    ],
    [
        'nombre' => 'RECHNER SENSORS',
        'url' => 'sensores-capacitivos-sensores-de-proximidad-inductivos-magnetorresistivos-y-controladores',
        'subtitulo' => 'Sensores de Proximidad y Nivel para la Industria',
        'bandera' => 'aleb.webp',
        'pais' => 'Alemania',
        'img_prod' => 'RECHNER-SENSOR.webp',
        'img_logo' => 'RECHNER-SENSORS.webp',
        'categorias' => ['sensores'],
        'caracteristicas' => ['Sensores capacitivos', 'Sensores capacitivos con distancia de detección extremadamente larga', 'Sistemas de medida de nivel capacitivos', 'Sensores magnetorresistivos', 'Sensores inductivos', 'Fuentes de alimentación / amplificadores aislados']
    ],
    [
        'nombre' => 'REIGN POWER',
        'url' => 'reign-power',
        'subtitulo' => 'Fuentes de Alimentación Conmutadas',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'REIGNPOWER.webp',
        'img_logo' => 'REIGN-POWER.webp',
        'categorias' => ['automatizacion', 'energia'],
        'caracteristicas' => ['Doble montaje, tornillo o riel DIN', 'Consumo de energía sin carga inferior a 0.3W', 'Pantalla digital inteligente, voltaje, corriente', 'Se puede conectar en serie o en paralelo', 'Voltaje de salida 5V, 12V, 24V, 48V', 'Potencia de 25W a 500W', 'Protección contra cortocircuitos y sobrecargas']
    ],
    [
        'nombre' => 'RFID',
        'url' => 'rfid-inc',
        'subtitulo' => 'Lectores y Etiquetas de Radiofrecuencia',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'RFID.webp',
        'img_logo' => 'RFID.webp',
        'categorias' => ['automatizacion', 'iot'],
        'caracteristicas' => ['Etiquetas RFID', 'Antenas RFID', 'Lectores RFID', 'Lectores RFID OEM', 'Interfaces RFID', 'Programadores RFID', 'Dispositivos de mano RFID']
    ],
    [
        'nombre' => 'RTA',
        'url' => 'rta',
        'subtitulo' => 'Convertidores de Protocolos',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'RTA.webp',
        'img_logo' => 'RTA.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Allen-Bradley PLC', 'ASCII / Escáner de código de barras', 'BACnet/IP & MS/TP', 'DF1 Devices', 'Ethernet TCP/IP', 'EtherNet/IP', 'Modbus RTU / TCP', 'MQTT', 'OPC UA Client', 'Profibus / Profinet', 'Siemens S7 PLC', 'USB', 'Interfaz web / XML']
    ],
    [
        'nombre' => 'SEALEVEL',
        'url' => 'sealevel',
        'subtitulo' => 'Adquisición de Datos, Convertidores e Interfaces Multipuertos',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'SEALEVEL.webp',
        'img_logo' => 'SEALEVEL.webp',
        'categorias' => ['adquisiciond', 'computo', 'automatizacion'],
        'caracteristicas' => ['Adquisición de datos distribuido por RS232M RS485, USB, ethernet y WiFi', 'Entradas y salidas digitales por PCI y PCIe', 'Servidores seriales ethernet a 1, 2, 4, 8 hasta 16 puertos RS232, RS422 o RS485', 'HUBs USB industriales de alta velocidad y robustos con 4 o 7 puertos USB aislados ópticamente']
    ],
    [
        'nombre' => 'SENECA',
        'url' => 'seneca',
        'subtitulo' => 'Adquisición de Datos y Comunicación Industrial',
        'bandera' => 'itab.webp',
        'pais' => 'Italia',
        'img_prod' => 'SENECA.webp',
        'img_logo' => 'SENECA.webp',
        'categorias' => ['adquisiciond', 'automatizacion', 'energia', 'iot', 'computo', 'sensores'],
        'caracteristicas' => ['Automatización / Adquisición de datos (Modbus, CANopen, Ethernet / TCP-IP, OPC UA, IEC 61131 / SoftPLC / Straton, Instrumentos virtuales / Visual studio, SEAL, Z-NET, EASY)', 'Comunicación / Control remoto (GSM / 3G / Wireless, VPN, Redes, Servidor web, Fibra óptica, Convertidores serial)', 'Energía (MID, M-BUS, Rogowski, Efecto Hall, Estándar de eficiencia energética)']
    ],
    [
        'nombre' => 'SIASUN',
        'url' => 'robots-siasun',
        'subtitulo' => 'Robots para Aplicaciones Industriales',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'SIASUN.webp',
        'img_logo' => 'SIASUN-DUCO.webp',
        'categorias' => ['automatizacion', 'robotica'],
        'caracteristicas' => ['Robot colaborativo, carga útil de 1Kg a 20Kg, 6/7 ejes', 'Robots móviles, AMRs', 'Logística inteligente', 'Robot industrial hasta 300Kg de carga útil', 'Robot paralelo', 'Pick and place']
    ],
    [
        'nombre' => 'SIGLENT',
        'url' => 'siglent',
        'subtitulo' => 'Pruebas Electrónicas y Sistemas de Medición',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'SIGLENT.webp',
        'img_logo' => 'SIGLENT.webp',
        'categorias' => ['pruebasm'],
        'caracteristicas' => ['Osciloscopios digitales: 2/4 canales, hasta 2GHz', 'Osciloscopios portatiles: hasta 200MHz', 'Generadores de funciones/formas de onda arbitrarias', 'Generadores RF: hasta 20GHz', 'Fuentes de alimentación DC: hasta 1080W', 'Multímetros digitales: hasta 6 1/2 dígitos', 'Analizadores de espectros: hasta 26.5 GHz']
    ],
    [
        'nombre' => 'SUCO',
        'url' => 'https://www.logicbus.com.mx/suco',
        'subtitulo' => 'Sensores e Interruptores de Presión para Aplicaciones Industriales e Hidráulicas',
        'bandera' => 'aleb.webp',
        'pais' => 'Alemania',
        'img_prod' => 'suco.webp',
        'img_logo' => 'suco.webp',
        'categorias' => ['sensores'],
        'caracteristicas' => ['Interruptores de presión mecánicos', 'Interruptores de presión electrónicos', 'Sensores y transmisores de presión', 'Embragues y frenos industriales']
    ],
    [
        'nombre' => 'TAICENN',
        'url' => 'taicenn-equipo-industrial',
        'subtitulo' => 'Computadoras, Monitores y Paneles PC\'s Industriales',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'TAICENN.webp',
        'img_logo' => 'TAICENN.webp',
        'categorias' => ['computo'],
        'caracteristicas' => ['Computadoras industriales', 'Monitores con touch multitáctil', 'Panel PC\'s y HMIs robustas', 'Procesadores Atom, Celeron, Core i3, Core i5, Core i7', 'Opción con ranuras PCI, PCIe y soporte con GPU', 'Monitores y Panel PC protección IP65 industrial,', 'Panel PC\'s en acero inoxidable completamente sellados', 'Pantallas con tamaño de 10.4" a 21.5"']
    ],
    [
        'nombre' => 'TERACOM',
        'url' => 'teracom',
        'subtitulo' => 'Soluciones de Control Remoto para la Automatización',
        'bandera' => 'bulb.webp',
        'pais' => 'Bulgaria',
        'img_prod' => 'TERACOM.webp',
        'img_logo' => 'TERACOM.webp',
        'categorias' => ['automatizacion', 'iot', 'sensores'],
        'caracteristicas' => ['Monitoreo remoto a través de Ethernet (servidor web, Modbus TCP/IP, SNMP v1 y v2, HTTP via API)', 'Monitoreo remoto sobre redes celulares (GPRS, 3G y 4G LTE, HTTP via API, MQTT y SMS)', 'Sensores, detectores y transmisores (sensores 1-Wire, sensores RS-485 y detectores de temperatura, humedad, corriente, voltaje, transmisores 0-20/4-20mA, presión barométrica, humo, etc.)']
    ],
    [
        'nombre' => 'TRI-TRONICS',
        'url' => 'tri-tronics',
        'subtitulo' => 'Sensores Fotoeléctricos de Alta Calidad',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'TRITRONICS.webp',
        'img_logo' => 'TRI-TRONICS.webp',
        'categorias' => ['sensores'],
        'caracteristicas' => ['Carcasa estándar / miniatura', 'Sensores difusos, retrorreflectantes y emisor / reflector', 'Detección de ranura/etiqueta', 'Sensor de Herradura', 'Objetos transparentes', 'Detección de contraste', 'UV-Luminescencia', 'Fibra óptica, bloques ópticos', 'Cables, soportes de montaje, reflectores']
    ],
    [
        'nombre' => 'VITREK',
        'url' => 'vitrek',
        'subtitulo' => 'Prueba, Medición y Adquisición de Datos',
        'bandera' => 'usab.webp',
        'pais' => 'Estados Unidos',
        'img_prod' => 'VITREK.webp',
        'img_logo' => 'VITREK.webp',
        'categorias' => ['adquisiciond', 'pruebasm', 'energia'],
        'caracteristicas' => ['Probadores de hipot y seguridad eléctrica', 'Analizadores de potencia', 'Medidor de alto voltaje de precisión', 'Sistema de conmutación de alto voltaje', 'Teraohmímetro', 'Probador de resistencia de aislamiento', 'Carga electrónica de DC']
    ],
    [
        'nombre' => 'WAYCON',
        'url' => 'waycon',
        'subtitulo' => 'Sensores de Posición y Distancia Precisos',
        'bandera' => 'aleb.webp',
        'pais' => 'Alemania',
        'img_prod' => 'WAYCON.webp',
        'img_logo' => 'WAYCON.webp',
        'categorias' => ['sensores'],
        'caracteristicas' => ['Sensores de cable', 'Sensores láser', 'Potenciómetro lineal', 'Sensores de cinta magnética', 'Sensores inductivos sin contacto', 'Transmisor de distancia magnetostrictivo', 'Encoder y sensores de ángulo', 'Sensores de ultrasonido', 'Sensores de distancia capacitivos', 'Convertidor de señal', 'Indicadores de posición', 'Sensores de velocidad']
    ],
    [
        'nombre' => 'WOMASTER',
        'url' => 'https://www.logicbus.com.mx/womaster',
        'subtitulo' => 'Comunicación Industrial y Soluciones IIoT',
        'bandera' => 'taib.webp',
        'pais' => 'Taiwan',
        'img_prod' => 'womaster.webp',
        'img_logo' => 'womaster.webp',
        'categorias' => ['computo', 'iot', 'software', 'sensores'],
        'caracteristicas' => ['Redes Ethernet industriales', 'Switches PoE y Layer 2/Layer 3', 'Routers LTE/WLAN industriales', 'Gateways IoT y LPWAN', 'Sensores para Smart Cities', 'Conectividad serial industrial', 'Software para gestión de redes']
    ],
    [
        'nombre' => 'YOUIBOT',
        'url' => 'youibot',
        'subtitulo' => 'AMR\'s Industriales y Soluciones de Control de Flota de AMR\'s',
        'bandera' => 'chib.webp',
        'pais' => 'China',
        'img_prod' => 'YOUIBOT.webp',
        'img_logo' => 'YOUIBOT.webp',
        'categorias' => ['automatizacion', 'robotica'],
        'caracteristicas' => ['Serie de elevación', 'Serie plataforma', 'Serie operación', 'Serie de carros automáticos', 'Carga útil: 100Kg a 1,000Kg']
    ]
];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fabricantes de equipos de automatizacion - Logicbus</title>
    <meta name="description" content="Marcas Logicbus - En Logicbus te ofrecemos una vida libre de estrés y preocupaciones. Somos proveedores de los mejores productos para automatizar, medir y controlar todos los procesos de tu empresa.">
    <meta name="keywords" content="Logicbus,Applied Motion Products,CALEX Sensores de Temperatura,CINCOZE Sistemas informáticos industriales,CONTROLLINO PLC industrial compatible con Arduino,Hardware y software de Adquisición de Datos,dispositivos avanzados DAQ,sensores industriales inalámbricos,EMDOOR,tablets de uso rudo,laptops industriales,FATEK fabricante y desarrollador PLC,FUTEK Advanced Sensor Technology Inc,Instrumentos de adquisición y registro de datos,Graphtec,Adquisición directa de datos del sensor,ICP DAS Adquisición de Datos,Teclados Industriales,LAUMAS Pesaje y dosificación industrial,LoggerFlex proporciona soluciones de adquisición de datos,madgetech soluciones de data logger,registrar datos de presión,MCC,NATIONAL CONTROL DEVICES - NCD,industria de IoT - NCD,equipos de montaje industriales inteligentes,OnRobot brazo de colaboración,PHOTOCRAFT Control de movimiento,Pico Technology osciloscopios de PC y los registradores de datos,Robots Colaborativos Precise Automation,Reign Power Fuentes de poder fijas de montaje en riel DIN,RFID Inc. sistemas de lectura y etiquetas RFID,RTA convertidores de protocolos/gateways,Sealevel soluciones de E/S serie y digitales,SENECA acondicionadores de voltaje,Robots Colaborativos SIASUN,SIGLENT TECHNOLOGIES osciloscopio,sensores 3D,dispositivos de Teracom para el monitoreo remoto de Ethernet,sensores de alta calidad e instrumentos de monitoreo para medir la presión,TRI-TRONICS® diseña y fabrica sensores fotoeléctricos de alto rendimiento,WayCon sensores compactos son rápidos y fáciles de montar,especialmente aplicaciones de LCD,YOUIBOT ROBOTICS, robots móviles (AMR),equipos de automatización y control, equipos de automatizacion industrial, distribuidores de equipos de automatizacion,venta de equipos de automatizacion, proveedores de equipos de automatizacion industrial,automatizacion Mexico,distribuidores de Mexico,utomatización de fábrica y logística en el sitio,Proporcionar soluciones de inspección, mantenimiento, automatización, fundición, comercio e industrias de transporte público,Logicbus mexico">
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">

    <style>
        @media (min-width: 992px) {
            .gridContMitadPC {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                column-gap: 10px;
                row-gap: 20px;
            }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div align="center"> <img src="images/banner/marcas-logicbus-automatizacion-industrial.webp" alt="Nuestras Marcas" title="Nuestras Marcas" width="100%"> </div>

    <h1 class="sr-only">Nuestras marcas</h1>

    <section class="my-3 text-center">
        <div class="gridoOcultarMB">
            <p class="paragraph blue"><b>Buscar por Nombre:</b></p>
            <input type="text" class="inputP" id="inputApp" onclick="buscadorMarcas();" onkeyup="buscadorMarcas();" placeholder="Marca" title="Marcas por nombre">
        </div>

        <div class="">
            <p class="paragraph blue mt-3 "><b>Buscar por Categoría:</b></p>
            <div class="mb-5 filtro-categorias gridoOcultarMB">
                <button id="todas" class="btn btn-blue btn-lg m-1 on" onclick="todas();" type="button">
                    TODAS
                </button>
                <?php foreach ($categorias as $key => $cat): ?>
                    <button id="<?php echo $cat['id_btn']; ?>" class="btn btn-blue btn-lg m-1" onclick="BuscarMarcas('<?php echo $key; ?>','<?php echo $key; ?>');" type="button">
                        <img class="ImgIcon" src="assets/<?php echo $cat['img']; ?>" alt="<?php echo $cat['nombre']; ?>" title="<?php echo $cat['nombre']; ?>" width="30px">
                        <?php echo $cat['nombre']; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="container gridoOcultarPC">
                <select id="filtroMobile" class="selectCM" onchange="categoriasMarcas()">
                    <option value="todas" id="todas" name="todas" selected>TODAS</option>
                    <?php foreach ($categorias as $key => $cat): ?>
                        <option value="<?php echo $key; ?>" id="<?php echo $key; ?>" name="<?php echo $key; ?>"><?php echo $cat['nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </section>

    <!-- ESCRITORIO -->
    <div class="gridoOcultarMB">
        <div class="gridContMitadPC " id="divmarca">
            <?php foreach ($marcas as $marca):
                $clasesCategoria = implode(' ', $marca['categorias']);
            ?>
                <section class="sectionMar <?php echo $clasesCategoria; ?>">
                    <div class="marcaMainM">
                        <div class="marcaProductM ">
                            <div class="marcaProductC">
                                <div class="productoMainM">
                                    <a href="<?php echo $marca['url']; ?>"> <img class="imgMain" src="images/nuestras_marcas/productos-marca/<?php echo $marca['img_prod']; ?>" alt="<?php echo $marca['nombre']; ?>" title="<?php echo $marca['nombre']; ?>"> </a>
                                </div>
                                <br>
                                <div class="" align="center">
                                    <button class="button btn btn-orange px-3" role="button">
                                        <span><a href="<?php echo $marca['url']; ?>">Ver Marca</a></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="marcaInfoM"> <img class="imgBanderaM" src="images/nuestras_marcas/bandera/<?php echo $marca['bandera']; ?>" alt="<?php echo $marca['pais']; ?>">
                            <a href="<?php echo $marca['url']; ?>"> <img class="imgLogoM" src="images/nuestras_marcas/<?php echo $marca['img_logo']; ?>" alt="<?php echo $marca['nombre']; ?>" title="<?php echo $marca['nombre']; ?>"> </a>
                            <div class="tituloMarcaM"> <b style="font-size:1.5em;"><?php echo $marca['nombre']; ?></b> </div>
                            <div class="tituloMarcaM"> <b class=""><?php echo $marca['subtitulo']; ?></b> <br> </div>
                            <div class="">
                                <ul class="marcasCarac">
                                    <?php foreach ($marca['caracteristicas'] as $carac): ?>
                                        <li><?php echo $carac; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="d-flex justify-content-around">
                                    <?php foreach ($marca['categorias'] as $catClave):
                                        if (isset($categorias[$catClave])): $cat = $categorias[$catClave];
                                    ?>
                                            <button id="<?php echo $cat['id_btn']; ?>" class="btn p-0 btnIcon" onclick="BuscarMarcas('<?php echo $catClave; ?>','<?php echo $catClave; ?>');" type="button"><img class="ImgIcon" src="assets/<?php echo $cat['img']; ?>" alt="<?php echo $cat['nombre']; ?>" title="<?php echo $cat['nombre']; ?>" width="40px"></button>
                                    <?php endif;
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- MÓVIL -->
    <div class="gridoOcultarPC">
        <div class="d-flex flex-wrap justify-content-center" id="marcasMobile">
            <?php foreach ($marcas as $marca):
                $clasesCategoria = implode(' ', $marca['categorias']);
            ?>
                <div class="boxMarcaP bblue <?php echo $clasesCategoria; ?>">
                    <center>
                        <a href="<?php echo $marca['url']; ?>"> <img class="" src="images/nuestras_marcas/<?php echo $marca['img_logo']; ?>" alt="<?php echo $marca['nombre']; ?>" title="<?php echo $marca['nombre']; ?>" width="150px"> </a>
                        <img class="imgbandera" src="images/nuestras_marcas/bandera/<?php echo $marca['bandera']; ?>">
                    </center>
                    <br>
                    <p class="pTitulo" style="font-size:1.5em;"><?php echo strtoupper($marca['nombre']); ?></p>
                    <p class="pTitulo"><?php echo $marca['subtitulo']; ?></p>
                    <div class="d-flex justify-content-around pb-3 flex-wrap">
                        <?php foreach ($marca['categorias'] as $catClave):
                            if (isset($categorias[$catClave])): $cat = $categorias[$catClave];
                        ?>
                                <button id="<?php echo $cat['id_btn']; ?>" class="btn p-0 btnIcon" onclick="categoriasMarcas_('<?php echo $catClave; ?>')" type="button"><img class="ImgIcon" src="assets/<?php echo $cat['img']; ?>" alt="<?php echo $cat['nombre']; ?>" title="<?php echo $cat['nombre']; ?>" width="40px"></button>
                        <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div align="center">
        <a href="pdf/catalogos/LINE-CARD-WEB.pdf" download="Linecard MX - Logicbus S.A. de C.V.pdf">
            <img src="https://www.logicbus.com.mx/imagenes/line-card-logicbus-descarga.webp" alt="LineCard" title="LineCard" width="100%">
        </a>
    </div>

    <h2 class="sr-only">Conoce más sobre nosotros</h2>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $own_file_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>

    <script>
        function categoriasMarcas() {
            var hasClase;
            listado = document.getElementById('marcasMobile');
            contenedores = listado.getElementsByClassName('boxMarcaP');
            for (m = 0; m < contenedores.length; m++) {
                if (document.getElementById("filtroMobile").value == "todas") {
                    contenedores[m].style.display = 'block';
                } else if (contenedores[m].classList.contains(document.getElementById("filtroMobile").value)) {
                    contenedores[m].style.display = 'block';
                } else {
                    contenedores[m].style.display = 'none';
                }
            }
        }

        function categoriasMarcas_(valor) {
            var hasClase;
            listado = document.getElementById('marcasMobile');
            contenedores = listado.getElementsByClassName('boxMarcaP');
            for (m = 0; m < contenedores.length; m++) {
                if (valor == "todas") {
                    contenedores[m].style.display = 'block';
                } else if (contenedores[m].classList.contains(valor)) {
                    contenedores[m].style.display = 'block';
                } else {
                    contenedores[m].style.display = 'none';
                }
            }
        }

        function buscadorMarcas() {
            var input, filter, btn, a, e;
            input = document.getElementById("inputApp");
            filter = input.value.toUpperCase();
            btn = document.getElementsByClassName("sectionMar");
            for (e = 0; e < btn.length; e++) {
                a = btn[e].getElementsByTagName("img")[0];
                if (a.alt.toUpperCase().indexOf(filter) > -1) {
                    btn[e].style.display = "block";
                } else {
                    btn[e].style.display = "none";
                }
            }
        }

        function todas() {
            var marcas = document.getElementsByClassName("sectionMar");
            var activada = document.getElementById("todas");
            var categorias = document.getElementsByClassName("btn btn-blue btn-lg m-1");

            for (i = 0; i < marcas.length; i++) {
                marcas[i].style.display = "block";
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('on');
                if (hasClase) {
                    categorias[j].classList.remove("on");
                }
            }
            activada.classList.add('on');
        }

        function BuscarMarcas(categoria, classCategoria) {
            var hasClase;
            var marcas = document.getElementsByClassName("sectionMar");
            var activada = document.getElementById(categoria);
            var categorias = document.getElementsByClassName("btn btn-blue btn-lg m-1");

            for (i = 0; i < marcas.length; i++) {
                hasClase = marcas[i].classList.contains(classCategoria);
                if (hasClase) {
                    marcas[i].style.display = "block";
                } else {
                    marcas[i].style.display = "none";
                }
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('on');
                if (hasClase) {
                    categorias[j].classList.remove("on");
                }
            }
            activada.classList.add('on');
        }

        function BuscarMarcasMobile(categoria, classCategoria) {
            var hasClase;
            var marcas = document.getElementById("marcasMobile");
            var categorias = document.getElementsByClassName("dropdown-item");

            for (i = 0; i < marcas.length; i++) {
                hasClase = marcas[i].classList.contains(classCategoria);
                if (hasClase) {
                    marcas[i].style.display = "block";
                } else {
                    marcas[i].style.display = "none";
                }
            }

            for (j = 0; j < categorias.length; j++) {
                var hasClase = categorias[j].classList.contains('active');
                if (hasClase) {
                    categorias[j].classList.remove("active");
                }
            }
            categoria.classList.add('active');
        }
    </script>
</body>
<?php echo $var_footer; ?>

</html>