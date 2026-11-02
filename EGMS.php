<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang="es" >
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link rel = "alternate" href = "https://www.logicbus.com.mx/" hreflang = "es" />
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
    <title>Logicbus/Productos/Data Logger/Temperature/EGMS
    </title>
    <meta name="description" content="El EGMS está especialmente diseñado para medir y registrar la temperatura y humedad de los huevos durante su transportación, almacenaje e incubación.">

    <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Adquisici&oacute;n, Adquisicion, Datos, EGMS, egg, shape, forma,, registrador, forma de huevo, transporte, almacenaje, temperatura, huevo, sistema, monitoreo, cubiertas, sumergible">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/diagramas.css" rel="stylesheet" >
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <!-- -->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

      function menu_actual() {
        document.getElementById("productos").className = "dropdown active";
      }
      ;
    </script>

    <style>
      * a{
        cursor: pointer;
      }
      p{
        text-align: justify;
        text-justify: inter-word;
      }
      h1{
        text-align: center;
      }
      ul{
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

          <table width="100%"  border="0">
            <tr>
              <td colspan="2"><div align="left"><a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a href="temperature_logger">Registradores de Temperatura</a>-&gt;<a href="temperature_autonomos">Temperatura - Aut&oacute;nomos</a>-&gt;EGMS </div></td>
            </tr>
            <tr>
              <td align="center"><h1>EGMS</h1></td>
            </tr>
            <tr>
              <td align="center">
                <img src="imagenes/09/egms.jpg" alt="EGMS: Sistema de monitoreo de temperatura y humedad en forma de huevo" width="200" >        <div align="justify"></div></td>
            </tr>
            <tr>
              <td align="center"><strong>Sistema de monitoreo de temperatura y humedad en forma de huevo</strong> </td>
            </tr>
            <tr>
              <td align="center"><div align="right"><a href="#"><img title="Ir a tienda" src="images/shopping_cart.png" border=0 onClick="atienda()" alt="Comprar"></a> </div></td>
            </tr>
            <tr>
              <td align="center"><div align="left"> <strong>Caracter&iacute;sticas:</strong> </div></td>
            </tr>
            <tr>
              <td align="center"><div align="left">
                  <ul>
                    <li>Reusable</li>
                    <li>Sumergible (solo con la cubierta de temperatura)</li>
                    <li>Monitoreo de temperatura y humedad</li>
                    <li>Tiempo de inicio programable</li>
                    <li>Amigable con el usuario</li>
                    <li>De bajo costo</li>
                    <li>Rango de temperatura de 0 a 60&deg;C y 0 a 95% de humedad </li>
                    <li>Exactitud de &plusmn;0.5&deg;C y &plusmn;3.0% de RH </li>
                    <li>Resoluci&oacute;n de 0.1&deg;C y 0.5%RH </li>
                  </ul>
                </div></td>
            </tr>
            <tr>
              <td align="center"><div align="left"><strong>Aplicaciones:</strong></div></td>
            </tr>
            <tr>
              <td align="center"><div align="left">
                  <ul>
                    <li>Transporte de huevos </li>
                    <li> Almacenamiento de huevos </li>
                    <li> </li>
                  </ul>
                  Incubadoras</div></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><div align="justify"> El  EGMS está especialmente dise&ntilde;ado para medir y registrar la temperatura y humedad de los huevos durante su transportaci&oacute;n, almacenaje e incubaci&oacute;n. El registrador responde termalmente en un ambiente de la misma manera que lo hace un huevo, simulando  la temperatura y humedad experimentadas por el producto actual.</div></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><div align="justify"> El EGMS viene con una cubierta para humedad y temperatura y otra solo para temperatura. La cubierta para temperatura y humedad está ventilada para poder medir la humedad, mientras que la cubierta para solo temperatura no está ventilada permiti&eacute;ndole al producto sumergirse. </div></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><div align="justify"> El EGMS puede medir temperaturas de hasta 60&deg;C. Posee una bater&iacute;a reemplazable por el usuario con una duraci&oacute;n t&iacute;pica de 1 a&ntilde;o. Su memoria no vol&aacute;til puede almacenar hasta 32,767 lecturas y los datos permanecer&aacute;n en esta aun si la bater&iacute;a se descarga.</div></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><div align="justify"> Su software ofrece una f&aacute;cil manera de analizar los datos y pueden ser vistos en grados Celsius o Fahrenheit as&iacute; como en diferentes formatos como en gr&aacute;ficos, res&uacute;menes o en forma de datos. Los datos se pueden exportar a Excel para su an&aacute;lisis posterior </div></td>
            </tr>

            <tr>
              <td align="center"><div align="right"></div> </td>
            </tr><tr>
              <td align="center"><div align="right"></div> </td>
            </tr>
            <tr align="center">
              <td><div align="center"></div>

                <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
                  <thead >
                    <tr>
                      <td colspan="2" align="center">
                        <strong>Especificaciones T&eacute;cnicas</strong>
                      </td>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td ><div align="left">Sensor de temperatura </div></td>
                      <td ><div align="left">Semiconductor</div></td>
                    </tr>
                    <tr>
                      <td >
                        <div align="left">Rango de temperatura </div></td>
                      <td ><div align="left">0 a +60&deg;C</div></td>
                    </tr>
                    <tr>
                      <td  >
                        <div align="left">Resoluci&oacute;n de temperatura </div></td>
                      <td  ><div align="left">0.1&deg;C</div></td>
                    </tr>
                    <tr>
                      <td >
                        <div align="left">
                          <div align="left">Exactitud calibrada </div>
                        </div></td>
                      <td ><div align="left">&plusmn;0.5&deg;C</div></td>
                    </tr>
                    <tr>
                      <td  >
                        <div align="left">Sensor de humedad </div></td>
                      <td  ><div align="left">Semiconductor </div></td>
                    </tr>
                    <tr>
                      <td >Rango de humedad </td>
                      <td >0 a 95%RH </td>
                    </tr>
                    <tr >
                      <td >Resoluci&oacute;n de la humedad </td>
                      <td >0.5%RH</td>
                    </tr>
                    <tr>
                      <td >Exactitud calibrada </td>
                      <td >&plusmn;3.0%RH (&plusmn;2.0%RH t&iacute;pica a 25&deg;C) </td>
                    </tr>
                    <tr >
                      <td >
                        <div align="left">Rango de exactitud especifica </div></td>
                      <td ><div align="left">+10 a +40&deg;C, 10 a 80%RH </div></td>
                    </tr>
                    <tr >
                      <td >Tiempo de respuesta </td>
                      <td >90% cambio en 60 segundos con un flujo de aire lento </td>
                    </tr>
                    <tr>
                      <td  ><div align="left">Calibraci&oacute;n</div></td>
                      <td  ><div align="left">Calibraci&oacute;n digital o por software </div></td>
                    </tr>
                    <tr >
                      <td >
                        <div align="left">Alarma de temperatura </div></td>
                      <td ><div align="left"> L&iacute;mites alto y bajo programables por software, es activada cuando la temperatura alcanza o excede estos l&iacute;mites parpadeando el LED rojo cada 3 segundos </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left">Registro en tiempo real </div></td>
                      <td  ><div align="left">Puede ser usado con una PC o monitor y registrar datos en tiempo real </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left">Memoria</div></td>
                      <td ><div align="left">16,383 lecturas por canal, 32,766 lecturas en total </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left">Frecuencia de lectura </div></td>
                      <td  ><div align="left">1 lectura cada 2 segundos o 1 cada 12 horas </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left">Modos de inicio </div></td>
                      <td ><div align="left">Programable por software, inicio inmediato o retraso de inicio de seis meses en adelante </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left">Formato de datos </div></td>
                      <td  ><div align="left">&deg;C, &deg;F, K, &deg;R, %RH, concentraci&oacute;n de vapor de agua en mg/ml con fecha y hora del registro </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left"> Tipo de bater&iacute;a </div></td>
                      <td ><div align="left"> 2 de 1.55V SR1154W, bater&iacute;as incluidas con el equipo y son reemplazables por el usuario </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left"> Duraci&oacute;n de bater&iacute;as </div></td>
                      <td  ><div align="left"> T&iacute;picamente 1 a&ntilde;o a 25&deg;C y con lecturas a intervalos de 15 minutos </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left">Exactitud del tiempo </div></td>
                      <td ><div align="left">&plusmn;1 minuto/mes a 20&deg;C </div></td>
                    </tr>
                    <tr >
                      <td >Interfaz con la PC </td>
                      <td >PC serial o USB (se requiere de un cable de interfaz) 38,400 baudios </td>
                    </tr>
                    <tr >
                      <td >Software</td>
                      <td >Windows 95/98/ME/NT/2000/XP/Vista </td>
                    </tr>
                    <tr >
                      <td > Ambiente en operaci&oacute;n </td>
                      <td > 0 a 60&deg;C, 0 a 95% de humedad relativa sin condensaci&oacute;n <br>
                        El producto puede sumergirse con la cubierta para temperatura </td>
                    </tr>
                    <tr >
                      <td >Sumergible</td>
                      <td >Hasta 150 pies, IP68 </td>
                    </tr>
                    <tr >
                      <td > Dimensiones </td>
                      <td > 2.25&quot; X 1.68&quot; de di&aacute;metro (57.15mm X 42.67mm de di&aacute;metro) </td>
                    </tr>
                    <tr >
                      <td >Peso</td>
                      <td >2.02 oz (60 g) </td>
                    </tr>
                    <tr >
                      <td >Material</td>
                      <td >Carcasa HDPE Registrador: acero inoxidable 303 </td>
                    </tr>
                    <tr >
                      <td > Aprobaciones </td>
                      <td >CE</td>
                    </tr>
                  </tbody>
                </table>

              </td>
            </tr>
            <tr align="right">
              <td><div align="center"></div></td>
            </tr>
            <tr>
              <td align="center">

                <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
                  <thead >
                    <tr>
                      <td colspan="2" align="center">
                        <strong>Especificaciones del Software</strong>
                      </td>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td ><div align="left"> Graficas m&uacute;ltiples </div></td>
                      <td ><div align="left"> Simult&aacute;neamente analiza los datos de varias unidades; f&aacute;cilmente se puede cambiar a una serie de datos individual</div></td>
                    </tr>
                    <tr>
                      <td >
                        <div align="left">Registro en tiempo real </div></td>
                      <td ><div align="left">Recolecta y muestra los datos en tiempo real mientras continua registrando </div></td>
                    </tr>
                    <tr>
                      <td  >
                        <div align="left">Cursor grafico </div></td>
                      <td  ><div align="left"> Con un clic muestra las lecturas por tiempo, valor, par&aacute;metro o número de muestra </div></td>
                    </tr>
                    <tr>
                      <td >
                        <div align="left" class="Estilo6">
                          <div align="left">Tabla de datos </div>
                        </div></td>
                      <td ><div align="left"> Acceso instant&aacute;neo a la vista con las fechas detalladas, tiempos, valores y anotaciones </div></td>
                    </tr>
                    <tr>
                      <td  >
                        <div align="left">Opciones de escala </div></td>
                      <td  ><div align="left"> La funci&oacute;n de auto escala ajusta los datos a la pantalla o permite a los usuarios ingresar sus propios valores manualmente </div></td>
                    </tr>
                    <tr>
                      <td >
                        <div align="left">Opciones de formato </div></td>
                      <td ><div align="left"> Cambio de colores, estilos de l&iacute;neas, opciones de trazado, muestra u oculta los canales r&aacute;pidamente </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left"> Estad&iacute;sticas </div></td>
                      <td  ><div align="left"> Calcula promedios, m&iacute;nimos, m&aacute;ximos, desviaci&oacute;n est&aacute;ndar y temperatura cin&eacute;tica media con el toque de un bot&oacute;n </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left"> Exportaci&oacute;n de datos </div></td>
                      <td ><div align="left"> Exporta los datos a una variedad de formatos comunes o directamente a Excel con un simple clic </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left"> Calibraci&oacute;n </div></td>
                      <td  ><div align="left"> Calcula autom&aacute;ticamente y almacena par&aacute;metros de calibraci&oacute;n </div></td>
                    </tr>
                    <tr >
                      <td ><div align="left"> Configuraci&oacute;n del registrador </div></td>
                      <td ><div align="left"> F&aacute;cil configuraci&oacute;n y lanzamiento de registradores con inicio inmediato o con retraso, frecuencia de muestreo preferido e identificaci&oacute;n de dispositivo </div></td>
                    </tr>
                    <tr>
                      <td  ><div align="left"> Impresi&oacute;n </div></td>
                      <td  ><div align="left"> Autom&aacute;ticamente imprime graficas o datos tabulares </div></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr align="right">
              <td>&nbsp;</td>
            </tr> 
            <tr><td><span class="Estilo4">Accesorios</span></td>
            </tr>  
            <tr><td align="center"><a href="accesorios#ifc202"><img src="imagenes/09/Accesorios/ifc202.jpg" alt="IFC202 - USB Interface Cable with mini-plug & Software Package" width="200"><br>IFC202</a></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td><span class="Estilo4">Software</span></td>
            </tr> 
            <tr><td align="center"><img src="imagenes/09/Temperatura/sw_egms.jpg" alt="Software EGGTEMP-RH" width="60%"></td></tr> 
            <tr><td>&nbsp;</td></tr>
            <tr><td align="center"><a href="pdf/09/egms.pdf" target="_blank"><img src="imagenes/iconpdf.jpg" width="30" height="30" border="0" alt="Ver archivo pdf"> <br>
                  Ver archivo pdf </a></td></tr>
            <tr align="right">
              <td><p align="center">&nbsp;</p>        
                <div align="center">


                  <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
                    <thead >
                      <tr>
                        <td colspan="2" align="center">
                          <strong>Productos relacionados</strong>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td width="61%" height="87" >
                          <div align="justify">Registrador de temperatura en forma de huevo con memoria para 32,767 registros.</div></td>
                        <td >
                          <div align="center"><a href="https://www.logicbus.com.mx/EGMS"><img src="imagenes/09/eggtemp.jpg" width="58" height="68" border="0" alt="Registrador de temperatura EGGTEMP"/></a> </div>
                          <div align="center"><a href="https://www.logicbus.com.mx/EGMS">EGGTEMP</a> </div>
                          <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td height="80" >
                          <div align="justify">Registrador de temperatura y humedad en forma de huevo. </div></td>
                        <td ><div align="center">
                            <div align="center"><a href="https://www.logicbus.com.mx/EGGTEMP-RH"><img src="imagenes/09/eggtemp-rh.jpg" width="60" height="70" border="0" alt="Registrador de temperatura EGGTEMP-RH"/></a> </div>
                            <div align="center"><a href="https://www.logicbus.com.mx/EGGTEMP-RH">EGGTEMP-RH</a> </div>
                          </div></td>
                      </tr>
                    </tbody>
                  </table>


                </div></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?
    abajo();
    ?>
  </body>
</html>