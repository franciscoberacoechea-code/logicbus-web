<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang = "es">
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
    <title>E/S Digitales y Análogas/ Familia Compacta Distribuida(ET-7000)
    </title>
    <meta name="description" content="Familia de modulos de control y adquisicion de datos ET-7000 - Logicbus S.A. de C.V.">

    <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, Ethernet, Modbus TCP, ET-7000, M&oacute;dulo, Ethernet, familia, internet, E/S, I/O, digital, analoga">

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
    <!--------------->
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
              <td colspan="2" ><a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a href="sub_data1">I-7000</a>-&gt;MODULOS DIGITALES </td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr align="right">
              <td><div align="center">
                  <table width="730" border="0" align="center">
                    <tr>
                      <td><div align="center"><h1><span class="Estilo11">I-7000 M&oacute;dulos de adquisici&oacute;n de datos digitales </span></h1></div></td>
                    </tr>
                    <tr>
                      <td width="730"><span class="Estilo10"><strong><a name="EntradaDigitalAC" id="EntradaDigitalAC"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td colspan="10" valign="top"  bgcolor="#FFAD33" class="Estilo9"><div align="center"><strong>Entrada Digital de AC</strong> </div></td>
                          </tr>
                          <tr>
                            <td width="68" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>M&oacute;dulo</strong></div></td>
                            <td width="81" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales de entrada digital </strong></div></td>
                            <td colspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de </strong></div></td>
                            <td width="55" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Entrada de voltaje máx. </strong></div></td>
                            <td width="76" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Frecuencia AC </strong></div></td>
                            <td width="76" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de aislamiento</strong></div></td>
                            <td width="81" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Impedancia de entrada </strong></div></td>
                            <td width="71" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Consumo de energía </strong></div></td>
                            <td width="61" rowspan="2" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <tr>
                            <td width="79" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Encendido </strong></div></td>
                            <td width="60" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Apagado</strong></div></td>
                          </tr>
                          <tr>
                            <td width="68" bgcolor="#CCCCCC" valign="middle" class="Estilo9"><div align="center"><a href="https://www.logicbus.com.mx/I-7058_I-7058D"><img src="imagenes/02/i-7058.gif" alt="i-7058" width="68" height="80" border="0" /></a> <strong> <a href="https://www.logicbus.com.mx/I-7058_I-7058D" target="_blank">I-7058</a> </strong> </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8 diferencial<br><span class="Estilo12">*</span></div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">80&nbsp; a 250 VAC.</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0 a 30 VAC</div></td>
                            <td width="55" rowspan="2" class="Estilo9"><div align="center">250 VAC</div></td>
                            <td width="76" rowspan="2" class="Estilo9"><div align="center">50/60 Hz</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5000Vrms</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">68K &Omega;&nbsp;<br />
                                1W</div></td>
                            <td class="Estilo9"><div align="center">0,3 W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="68" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7058_I-7058D"><img src="imagenes/02/I-7058D GIF.gif" alt="i-7058D" width="68" height="80" border="0" /></a> <a href="https://www.logicbus.com.mx/I-7058_I-7058D" target="_blank">I-7058D</a> </strong> </div></td>
                            <td class="Estilo9"><div align="center">0.7W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="68" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7059_I-7059D"><img src="imagenes/02/i-7059.gif" alt="i-7059" width="68" height="80" border="0" /></a> <a href="https://www.logicbus.com.mx/I-7059_I-7059D" target="_blank">I-7059</a> </strong> </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8 diferencial<br>
                                <span class="Estilo12">*</span></div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">&gt;10 VAC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">&lt;3VAC</div></td>
                            <td width="55" rowspan="2" class="Estilo9"><div align="center">80 VAC</div></td>
                            <td width="76" rowspan="2" class="Estilo9"><div align="center">47/400 Hz</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5000Vrms</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">10K &Omega;&nbsp;<br />
                                1W</div></td>
                            <td class="Estilo9"><div align="center">0,3 W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="68" bgcolor="#CCCCCC"  class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7059_I-7059D"><img src="imagenes/02/i-7059d.gif" alt="i-7059D" width="68" height="80" border="0" /></a> <strong> <a href="https://www.logicbus.com.mx/I-7059_I-7059D" target="_blank">I-7059D</a> </strong> </strong></div>
                            <td class="Estilo9"><div align="center">0.7W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td height="16" colspan="10" valign="top" class="Estilo14">* El canal DI puede ser utilizado como DI o de baja velocidad (100 Hz). </td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="EntradaDigitaldeDC" id="EntradaDigitaldeDC"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="9" valign="top" bgcolor="#FFAD33" class="Estilo9"><div align="center"><strong>Entrada de DC</strong> </div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Modelo</strong></div></td>
                            <td width="127" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales de entrada</strong><br />
                                <span class="Estilo18">(Nota 1)</span></div></td>
                            <td width="83" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Tipo de entrada</strong></div></td>
                            <td width="69" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de encendido</strong></div></td>
                            <td width="56" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje apagado</strong></div></td>
                            <td width="77" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de Aislamiento</strong></div></td>
                            <td width="81" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Impedancia de Entrada</strong></div></td>
                            <td width="67" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Consumo de energ&iacute;a</strong></div></td>
                            <td width="63" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center">                    <a href="https://www.logicbus.com.mx/I-7041_I-7041D"><img src="imagenes/02/i-7041.gif" alt="i-7041" width="70" height="80" border="0"></a><strong>   <a href="https://www.logicbus.com.mx/I-7041_I-7041D" target="_blank"> I-7041</a> </strong>  
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">14<br />
                                <span class="Estilo12">(Disipador) </span></div></td>
                            <td width="83" rowspan="2" class="Estilo9"><div align="center">Fuente com&uacute;n</div></td>
                            <td width="69" rowspan="2" class="Estilo9"><div align="center">4 a 30 VDC</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V M&aacute;x.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">3750Vrms</div></td>
                            <td width="81" rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td width="67" class="Estilo9"><div align="center">0,2 W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center">
                                <strong><a href="https://www.logicbus.com.mx/I-7041_I-7041D"><img src="imagenes/02/i-7041d.gif" alt="i-7041d" width="70" height="80" border="0" /></a>    <a href="https://www.logicbus.com.mx/I-7041_I-7041D" target="_blank">I-7041D</a> </strong>
                              </div></td>
                            <td width="67" class="Estilo9"><div align="center">0.9W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center">                    <a href="https://www.logicbus.com.mx/I-7041P_I-7041PD"><img src="imagenes/02/I-7041P.gif" alt="i-7041p" width="70" height="80" border="0"></a> <strong>  <a href="https://www.logicbus.com.mx/I-7041P_I-7041PD"  target="_blank">I-7041P</a></strong> 
                                <td rowspan="2" class="Estilo9"><div align="center">14<br />
                                    <span class="Estilo12">(Disipador)</span> </div></td>
                                <td width="83" rowspan="2" class="Estilo9"><div align="center">Fuente com&uacute;n</div></td>
                                <td width="69" rowspan="2" class="Estilo9"><div align="center">19 a 30 VDC</div></td>
                                <td width="56" rowspan="2" class="Estilo9"><div align="center">1 VDC M&aacute;x.</div></td>
                                <td width="77" rowspan="2" class="Estilo9"><div align="center">3750 Vrms</div></td>
                                <td width="81" rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                                <td width="67" class="Estilo9"><div align="center">0,2 W</div></td>
                                <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center">
                                <strong><a href="https://www.logicbus.com.mx/I-7041P_I-7041PD"><img src="imagenes/02/I-7041PD.gif" alt="i-7041pd" width="70" height="80" border="0" /></a></strong>
                                <strong>  <a href="https://www.logicbus.com.mx/I-7041P_I-7041PD" target="_blank">I-7041PD</a> </strong> </div></td>
                            <td width="67" class="Estilo9"><div align="center">0,9 W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7051_I-7051D"><img src="imagenes/02/i-7051.gif" alt="i-7051" width="70" height="80" border="0"></a> <a href="https://www.logicbus.com.mx/I-7051_I-7051D" target="_blank">I-7051</a> </strong>
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">16 <br />
                                <span class="Estilo12">(Disipador / Fuente)</span> </div></td>
                            <td width="83" rowspan="2" class="Estilo9"><div align="center">Fuente com&uacute;n o Tierra com&uacute;n</div></td>
                            <td width="69" rowspan="2" class="Estilo9"><div align="center">10 a 50 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">4 V M&aacute;x.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">3750Vrms</div></td>
                            <td width="81" rowspan="2" class="Estilo9"><div align="center">10K &Omega;</div></td>
                            <td width="67" class="Estilo9"><div align="center">0,3 W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center">   <strong>       <a href="https://www.logicbus.com.mx/I-7051_I-7051D"><img src="imagenes/02/i-7051d.gif" alt="i7051d" width="70" height="80" border="0" /></a>     <a href="https://www.logicbus.com.mx/I-7051_I-7051D" target="_blank">I-7051D</a> </strong>
                              </div></td>
                            <td width="67" class="Estilo9"><div align="center">1.1W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7052_I-7052D"><img src="imagenes/02/i-7052.gif" alt="i-7052" width="70" height="80" border="0"></a>   <a href="https://www.logicbus.com.mx/I-7052_I-7052D" target="_blank">I-7052</a> </strong>  
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8 <br />
                                <span class="Estilo12">(Disipador)</span> </div></td>
                            <td width="83" rowspan="2" class="Estilo9"><div align="center">6 Diferencial y 2 Tierra Com&uacute;n</div></td>
                            <td width="69" rowspan="2" class="Estilo9"><div align="center">4 a 30 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V M&aacute;x.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">5000Vrms</div></td>
                            <td width="81" rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td width="67" class="Estilo9"><div align="center">0,2 W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>     <a href="https://www.logicbus.com.mx/I-7052_I-7052D"><img src="imagenes/02/i-7052d.gif" alt="i-7052d" width="70" height="80" border="0" /></a>     <a href="https://www.logicbus.com.mx/I-7052_I-7052D" target="_blank">I-7052D</a> </strong>         </div></td>
                            <td width="67" class="Estilo9"><div align="center">0.6W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7053_FG_I-7053_DFG"><img src="imagenes/02/i-7053_fg.gif" alt="i-7053_fg" width="70" height="80" border="0"></a>   <strong>   <a href="https://www.logicbus.com.mx/I-7053_FG_I-7053_DFG" target="_blank">  I-7053_FG</a> </strong> 
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">16<br />
                                <span class="Estilo12">(Disipador)</span> </div></td>
                            <td width="83" rowspan="2" class="Estilo9"><div align="center">Contacto Seco</div></td>
                            <td width="69" rowspan="2" class="Estilo9"><div align="center">4 a 30 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V M&aacute;x.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">-</div></td>
                            <td width="81" rowspan="2" class="Estilo9"><div align="center">820 &Omega;</div></td>
                            <td width="67" class="Estilo9"><div align="center">0.6W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7053_FG_I-7053_DFG"><img src="imagenes/02/i-7053d_fg.gif" alt="i-7053d_fg" width="70" height="80" border="0" /></a>       <a href="https://www.logicbus.com.mx/I-7053_FG_I-7053_DFG" target="_blank">  I-7053D_FG</a> </strong>     
                              </div></td>
                            <td width="67" class="Estilo9"><div align="center">1.4W</div></td>
                            <td width="63" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td height="16" colspan="9" valign="top" class="Estilo14">Nota 1: Puede ser utilizado como DI o de baja velocidad (50 Hz).</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="SalidadeDC" id="SalidadeDC"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="9" valign="top" bgcolor="#FFAD00" class="Estilo16"><div align="center">Salida de DC </div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#7598FF" class="Estilo16"><div align="center">Modelo </div></td>
                            <td width="74" bgcolor="#7598FF" class="Estilo16"><div align="center">Canales de salida </div></td>
                            <td width="114" bgcolor="#7598FF" class="Estilo16"><div align="center">Tipo de salida </div></td>
                            <td width="62" bgcolor="#7598FF" class="Estilo16"><div align="center">Voltaje de carga </div></td>
                            <td width="68" bgcolor="#7598FF" class="Estilo16"><div align="center">Corriente de carga m&aacute;x.</div></td>
                            <td width="90" bgcolor="#7598FF" class="Estilo16"><div align="center">Protecci&oacute;n contra cortocircuitos</div></td>
                            <td width="78" bgcolor="#7598FF" class="Estilo16"><div align="center">Voltaje de Aislamiento</div></td>
                            <td width="96" bgcolor="#7598FF" class="Estilo16"><div align="center">Consumo de energ&iacute;a </div></td>
                            <td width="60" bgcolor="#7598FF" class="Estilo16"><div align="center">RoHS</div></td>
                          </tr>

                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"> <div align="center">  <a href="https://www.logicbus.com.mx/I-7045_I-7045D"><img src="imagenes/02/i-7045.gif" alt="i-7045" width="70" height="80" border="0"></a> <strong> <a href="https://www.logicbus.com.mx/I-7045_I-7045D" target="_blank">  I-7045  </a>   </strong>                     
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">16 <br />
                                    <span class="Estilo12">(Fuente)</span> </div></td>
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">C&oacute;digo Abierto&nbsp;<br />
                                    (N-MOSFET)</div></td>
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">10 a 40 V</div></td>
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">650mA</div></td>
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">S&iacute;</div></td>
                                <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">3750Vrms</div></td>
                                <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">1.0W</div></td>
                                <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7045_I-7045D"><img src="imagenes/02/i-7045d.gif" alt="i-7045d" width="70" height="80" border="0" /></a>     <strong> <a href="https://www.logicbus.com.mx/I-7045_I-7045D" target="_blank">  I-7045D  </a>   </strong>                                   
                                </strong></div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">1,8 W</div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td width="70" height="107" bgcolor="#CCCCCC" class="Estilo9">                      <div align="center"><strong><a href="https://www.logicbus.com.mx/I-7045-NPN_I-7045D-NPN"><img src="imagenes/02/I-7045-NPN.gif" alt="i-7045npd" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7045-NPN_I-7045D-NPN" target="_blank">   I-7045-NPN  </a>   </strong>                                         
                                </strong></div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">16 <br />
                                <span class="Estilo12">(Fuente)</span> </div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">C&oacute;digo abierto&nbsp;<br />
                                (NPN)</div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">10 a 40 V</div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">650mA</div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">S&iacute;</div></td>
                            <td rowspan="2" bgcolor="#FFFFFF" class="Estilo9"><div align="center">3750Vrms</div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">0.4W</div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7045-NPN_I-7045D-NPN"><img src="imagenes/02/I-7045D-NPN.gif" alt="i7045-dnpd" width="70" height="80" border="0" /></a>    <strong> <a href="https://www.logicbus.com.mx/I-7045-NPN_I-7045D-NPN" target="_blank">   I-7045D-NPN  </a>   </strong>          
                                </strong></div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">1,2 W</div></td>
                            <td bgcolor="#FFFFFF" class="Estilo9"><div align="center">-</div></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="Salidaderelevador" id="Salidaderelevador"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="10" valign="top" bgcolor="#FFAD00" class="Estilo9">
                              <div align="center"><strong>Salida de relevador</strong> </div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Modelo</strong></div></td>
                            <td width="71" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales De Salida Digital</strong> </div></td>
                            <td width="85" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Los canales de entrada digital</strong></div></td>
                            <td width="71" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Rango de operaci&oacute;n de contacto</strong></div></td>
                            <td width="72" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Aumento de la fuerza</strong> </div></td>
                            <td width="69" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Tiempo de operaci&oacute;n</strong> </div></td>
                            <td width="51" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Nivel Digital</strong></div></td>
                            <td width="81" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Impedancia de entrada</strong></div></td>
                            <td width="87" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Consumo de energ&iacute;a</strong></div></td>
                            <td width="60" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong> </div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9">
                              <div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7060_I-7060D"><img src="imagenes/02/i-7060.gif" alt="i-7060" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7060_I-7060D" target="_blank">    I-7060   </a>   </strong>              
                                </strong></div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">RL1, RL2:&nbsp;<br />
                                De A x4&nbsp;<br />
                                RL3, RL4:&nbsp;<br />
                                Forma CX4</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4&nbsp;<br />
                                Aislamiento con fuente com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0.6A @ 125VAC&nbsp;<br />
                                2A @ 30VDC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">500V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3 ms</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">1.3W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9">
                              <div align="center"><strong>                        <a href="https://www.logicbus.com.mx/I-7060_I-7060D"><img src="imagenes/02/i-7060d.gif" alt="i-7060d" width="70" height="80" border="0" /></a>   <strong> <a href="https://www.logicbus.com.mx/I-7060_I-7060D" target="_blank">    I-7060D   </a>   </strong>                          
                                </strong></div></td>
                            <td class="Estilo9"><div align="center">1.9W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7061_I-7061D"><img src="imagenes/02/I-7061.gif" alt="i-7061" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7061_I-7061D" target="_blank">     I-7061 </a>
                                  </strong></div></td>
                            <td class="Estilo9"><div align="center">12 rel&eacute; de potencia, forma A</div></td>
                            <td class="Estilo9"><div align="center">-</div></td>
                            <td class="Estilo9"><div align="center">250 VAC @ 5A&nbsp;<br />
                                30 VDCA5A</div></td>
                            <td class="Estilo9"><div align="center">&plusmn; 3 kV de potencia de entrada.</div></td>
                            <td class="Estilo9"><div align="center">6 ms</div></td>
                            <td class="Estilo9"><div align="center"></div></td>
                            <td class="Estilo9"><div align="center"></div></td>
                            <td class="Estilo9"><div align="center">1,7 W (m&aacute;x.) (I-7061) / 2,3 W (m&aacute;x.) (I-7061D)</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7063_I-7063D"><img src="imagenes/02/i-7063.gif" alt="I-7063" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7063_I-7063D" target="_blank">  I-7063 </A> </strong>
                                </strong></div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">Forma Ax3</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5A @ 250VAC&nbsp;<br />
                                5A @ 30VDC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4000V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">6 ms máx.</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">1.0W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7063_I-7063D"><img src="imagenes/02/i-7063d.gif" alt="I-7063D" width="70" height="80" border="0" /></a>  <strong> <a href="https://www.logicbus.com.mx/I-7063_I-7063D" target="_blank">  I-7063D </A> </strong>
                                </strong></div></td>

                            <td class="Estilo9"><div align="center">1.5W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7065_I-7065D"><img src="imagenes/02/i-7065.gif" alt="I-7065" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7065_I-7065D" target="_blank">  I-7065 </a>

                                  </strong></div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">Forma AX5</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4&nbsp;<br />
                                Aislamiento con fuente com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5A @ 250VAC&nbsp;<br />
                                5A @ 30VDC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4000V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">6 ms máx.</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">1.3W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7065_I-7065D"><img src="imagenes/02/i-7065d.gif" alt="I-7065D" width="70" height="80" border="0" /></a>    <strong> <a href="https://www.logicbus.com.mx/I-7065_I-7065D" target="_blank">  I-7065D </A> </strong>
                                </strong></div></td>

                            <td class="Estilo9"><div align="center">2.2W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7067_I-7067D"><img src="imagenes/02/i-7067.gif" alt="I-7067" width="70" height="80" border="0"></a>   <strong> <a href="https://www.logicbus.com.mx/I-7067_I-7067D" target="_blank">  I-7067 </A> </strong>
                                </strong></div></td>

                            <td rowspan="2" class="Estilo9"><div align="center">Forma AX7</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">Sin entrada</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0.5A @ 120VAC&nbsp;<br />
                                1.0A @ 24VDC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1500V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5ms máx.</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">Sin entrada</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">Sin entrada</div></td>
                            <td class="Estilo9"><div align="center">1.5W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7067_I-7067D"><img src="imagenes/02/i-7067d.gif" alt="I-7067D" width="70" height="80" border="0" /></a>  <strong> <a href="https://www.logicbus.com.mx/I-7067_I-7067D" target="_blank">  I-7067D </A> </strong>
                                </strong></div></td>

                            <td class="Estilo9"><div align="center">2.2W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="SalidadeRelevadordeestados&oacute;lido" id="SalidadeRelevadordeestados&oacute;lido"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="9" bgcolor="#FFAD33" class="Estilo9">
                              <div align="center"><strong>Salida de Relevador de estado s&oacute;lido &nbsp;</strong> </div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Modelo</strong> </div></td>
                            <td width="106" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>&nbsp;<strong>Canales de salida Digital</strong></strong></div></td>
                            <td width="125" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales </strong><br />
                                <strong>Entrada Digital&nbsp;<br />
                                </strong></div></td>
                            <td width="65" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Rango de voltaje de carga</strong> </div></td>
                            <td width="66" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Corriente de carga m&aacute;x.</strong> </div></td>
                            <td width="50" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Nivel Digital</strong> </div></td>
                            <td width="82" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Impedancia de entrada</strong> </div></td>
                            <td width="83" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Consumo de energ&iacute;a</strong> </div></td>
                            <td width="60" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7063A_I-7063AD"><img src="imagenes/02/i-7063a.gif" alt="I-7063A" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7063A_I-7063AD" target="_blank">  I-7063A </A> </strong>

                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3 AC-SSR,&nbsp;<br />
                                Normalmente Abierto&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8 Aislamiento w / Fuente Com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">24 a 265 Vrms</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1.0 Armas</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">0.7W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>               <a href="https://www.logicbus.com.mx/I-7063A_I-7063AD"><img src="imagenes/02/i-7063ad.gif" alt="I-7063AD" width="70" height="80" border="0" /></a>      <a href="https://www.logicbus.com.mx/I-7063A_I-7063AD" target="_blank">  I-7063AD </A>


                                </strong></div></td>
                            <td class="Estilo9"><div align="center">1.5W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7063B_I-7063BD"><img src="imagenes/02/i-7063b.gif" alt="I-7063B" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7063B_I-7063BD" target="_blank">  I-7063B </A> </strong>


                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3 DC-SSR,&nbsp;<br />
                                Normalmente Abierto&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">8 Aislamiento w / Fuente Com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">De 3 a 30 Vcc</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1.0A</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">0.6W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7063B_I-7063BD"><img src="imagenes/02/i-7063bd.gif" alt="I-7063BD" width="70" height="80" border="0" /></a>     <a href="https://www.logicbus.com.mx/I-7063B_I-7063BD" target="_blank">  I-7063BD </A> </strong                
                                ></div></td>
                            <td class="Estilo9"><div align="center">1.4W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7065A_I-7065AD"><img src="imagenes/02/i-7065a.gif" alt="I-7065A" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7065A_I-7065AD" target="_blank">  I-7065A </A> </strong>         

                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5 AC-SSR,&nbsp;<br />
                                Normalmente Abierto&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4 Aislamiento w / Fuente Com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">24 a 265 Vrms</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1.0 Armas</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">0,8 W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7065A_I-7065AD"><img src="imagenes/02/i-7065ad.gif" alt="I-7065AD" width="70" height="80" border="0" /></a>   <a href="https://www.logicbus.com.mx/I-7065A_I-7065AD" target="_blank">  I-7065AD </A> </strong>         
                              </div></td>
                            <td class="Estilo9"><div align="center">1.6W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7065B_I-7065BD"><img src="imagenes/02/I-7065B.gif" alt="I-7065B" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7065B_I-7065BD" target="_blank">  I-7065B </A> </strong>       
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5 DC-SSR,&nbsp;<br />
                                Normalmente Abierto&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">4 Aislamiento w / Fuente Com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">De 3 a 30 Vcc</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1.0A</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">1 V máx.&nbsp;<br />
                                4 a 30 V</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">3K &Omega;</div></td>
                            <td class="Estilo9"><div align="center">0.7W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>   <a href="https://www.logicbus.com.mx/I-7065B_I-7065BD"><img src="imagenes/02/I-7065BD.gif" alt="I-7065BD" width="70" height="80" border="0" /></a>    <a href="https://www.logicbus.com.mx/I-7065B_I-7065BD" target="_blank">  I-7065BD </A> </strong>       

                              </div></td>
                            <td class="Estilo9"><div align="center">1.5W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="SalidaRelevadorPhotoMOS" id="SalidaRelevadorPhotoMOS"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="9" bgcolor="#FFAD33" class="Estilo9">
                              <div align="center"><strong>Salida Relevador PhotoMOS </strong></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Modelo</strong> </div></td>
                            <td width="71" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales de salida</strong> </div></td>
                            <td width="76" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Corriente de carga</strong></div></td>
                            <td width="70" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de carga</strong> </div></td>
                            <td width="79" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de aislamiento</strong></div></td>
                            <td width="75" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Tiempo de liberaci&oacute;n</strong></div></td>
                            <td width="75" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Tiempo de operaci&oacute;n</strong></div></td>
                            <td width="131" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Consumo de energ&iacute;a</strong> </div></td>
                            <td width="60" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <tr>
                            <td width="63" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7066_I-7066D"><img src="imagenes/02/i-7066.gif" alt="I-7066" width="70" height="80" border="0"></a>     <a href="https://www.logicbus.com.mx/I-7066_I-7066D" target="_blank">  I-7066 </A> </strong>       
                              </div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">7</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0,13A</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">350V máx.</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">5000VAC</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0.7mS t&iacute;pico</div></td>
                            <td rowspan="2" class="Estilo9"><div align="center">0,05 ms typ</div></td>
                            <td class="Estilo9"><div align="center">0,5 W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td width="63" bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7066_I-7066D"><img src="imagenes/02/i-7066d.gif" alt="I-7066D" width="70" height="80" border="0" /></a>   <a href="https://www.logicbus.com.mx/I-7066_I-7066D" target="_blank">  I-7066D </A> </strong>       
                              </div></td>
                            <td class="Estilo9"><div align="center">0,8 W</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="SalidaContadorDigital" id="SalidaContadorDigital"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="9" valign="top" bgcolor="#FFAD00" class="Estilo9">
                              <div align="center"><strong>Salida Contador / Digital </strong></div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Modelo</strong> </div></td>
                            <td width="67" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales de entrada</strong> </div></td>
                            <td width="111" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Frecuencia de entrada</strong> </div></td>
                            <td width="150" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Voltaje de aislamiento</strong> </div></td>
                            <td width="63" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Entrada del contador</strong> </div></td>
                            <td width="56" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>Canales de salida digital</strong> </div></td>
                            <td width="52" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>La salida de tensi&oacute;n</strong> </div></td>
                            <td width="68" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>La salida de corriente</strong> </div></td>
                            <td width="63" bgcolor="#7598FF" class="Estilo9"><div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7080_I-7080B"><img src="imagenes/02/i-7080.gif" alt="I-7080" width="70" height="80" border="0"></a>   <a href="https://www.logicbus.com.mx/I-7080_I-7080B" target="_blank"> I-7080 </A> </strong>       
                              </div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">2&nbsp;<span class="Estilo12">*</span> </div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">1 Hz a 100 KHz</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">3750Vrms</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">De 32 bits</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">2</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">30V máx.</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">30 mA m&aacute;ximo</div></td>
                            <td valign="top" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7080_I-7080B"><img src="imagenes/02/i-7080.gif" alt="I-7080B" width="70" height="80" border="0"></a>      <a href="https://www.logicbus.com.mx/I-7080B_I-7080BD" target="_blank"> I-7080B </A> </strong>           
                              </div></td>
                            <td class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7080D_I-7080BD"><img src="imagenes/02/i-7080.gif" alt="I-7080BD" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7080D_I-7080BD" target="_blank"> I-7080BD </A> </strong>           
                              </div></td>
                            <td class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7080D_I-7080BD"><img src="imagenes/02/i-7080d.gif" alt="I-7080D" width="70" height="80" border="0"></a>     <a href="https://www.logicbus.com.mx/I-7080D_I-7080BD" target="_blank"> I-7080D </A> </strong>           
                              </div></td>
                            <td valign="top" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td></td> 
                            <td rowspan="4" class="Estilo9"><div align="center">3&nbsp;<span class="Estilo12">**</span> </div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">1 Hz a 1 MHz</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">Nivel de entrada 5V, 12V de entrada externa con resistencia de 1K &Omega;, entrada de 24 V con resistencia externa 2K &Omega;</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">De 32 bits</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">-</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">-</div></td>
                            <td rowspan="4" class="Estilo9"><div align="center">-</div></td>

                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7083B_I-7083BD"><img src="imagenes/02/i-7083b.gif" alt="I-7083B" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7083B_I-7083BD" target="_blank"> I-7083B </A> </strong>   
                              </div></td>
                            <td valign="top" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7083B_I-7083BD"><img src="imagenes/02/i-7083bd.gif" alt="I-7083BD" width="70" height="80" border="0"></a>     <a href="https://www.logicbus.com.mx/I-7083B_I-7083BD" target="_blank"> I-7083BD </A> </strong>   

                              </div></td>
                            <td valign="top" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <img src="imagenes/02/I-7088.gif" width="70" height="80" alt="I-7088">    <a href="https://www.logicbus.com.mx/I-7088_I-7088D" target="_blank"> I-7088 </A> </strong>   
                              </div></td>
                            <td class="Estilo9"><div align="center">8 PWM</div></td>
                            <td class="Estilo9"><div align="center">máx. 1MHz</div></td>
                            <td class="Estilo9"><div align="center">2500 VDC</div></td>
                            <td class="Estilo9"><div align="center">De 32 bits</div></td>
                            <td class="Estilo9"><div align="center">8</div></td>
                            <td class="Estilo9"><div align="center">-</div></td>
                            <td class="Estilo9"><div align="center">-</div></td>
                            <td class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td height="30" colspan="9" class="Estilo14">* Aislados o no aislados&nbsp;<br />
                              ** Aislados</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><span class="Estilo10"><strong><a name="EntradasalidaDC" id="EntradasalidaDC"></a></strong></span></td>
                    </tr>
                    <tr>
                      <td><table width="730" border="1" align="center" cellpadding="0" cellspacing="1">
                          <tr>
                            <td colspan="10" valign="top" bgcolor="#FFAD00" class="Estilo9">
                              <div align="center"><strong>Entrada / salida DC</strong> </div></td>
                          </tr>
                          <tr>
                            <td width="70" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Modelo</strong> </div></td>
                            <td width="102" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Canales <br>
                                  de <br>
                                  salida <br>
                                  digital </strong></div></td>
                            <td width="54" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Voltaje de carga</strong> </div></td>
                            <td width="66" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Corriente de carga m&aacute;x.</strong></div></td>
                            <td width="78" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Canales de entrada</strong></div></td>
                            <td width="67" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Voltaje de encendido</strong></div></td>
                            <td width="56" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Voltaje de apagado</strong></div></td>
                            <td width="77" bgcolor="#7598FF" class="Estilo9">
                              <div align="center" class="Estilo13">Impedancia<br>
                                de <br>
                                Entrada</div></td>
                            <td width="65" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>Consumo de energ&iacute;a</strong> </div></td>
                            <td width="62" align="center" valign="middle" bgcolor="#7598FF" class="Estilo9">
                              <div align="center"><strong>RoHS</strong></div></td>
                          </tr>
                          <? /*************************  INICIO **********************************************/ ?>                
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="I-7042_I-7042D"><img src="imagenes/02/i-7042.gif" alt="I-7042" width="70" height="80" border="0"></a>   <a href="I-7042_I-7042D" target="_blank"> I-7042 </A> </strong>   
                              </div></td>
                            <td width="102"  class="Estilo9"><div align="center">
                                <div align="center">&nbsp;13<br>
                                  <span class="Estilo12">(Disipador)</span> <br>
                                  de colector <br>
                                  abierto <br>
                                  (NPN)<br>
                                  (3750Vrms)<br />
                                </div>
                            </td>
                            <td width="54" class="Estilo9"><div align="center">10 a 30 V</div></td>
                            <td width="66"  class="Estilo9"><div align="center">100mA</div></td>
                            <td width="78"  class="Estilo9"><div align="center">-</td>
                            <td width="67"  class="Estilo9"><div align="center">-</div></td>
                            <td width="56"  class="Estilo9"><div align="center">-</div></td>
                            <td width="77"  class="Estilo9"><div align="center">-</div></td>
                            <td width="65" class="Estilo9"><div align="center">1W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <? /*************************  FIN **********************************************/ ?>                                
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7044_I-7044D"><img src="imagenes/02/i-7044.gif" alt="I-7044" width="70" height="80" border="0"></a>   <a href="https://www.logicbus.com.mx/I-7044_I-7044D" target="_blank"> I-7044 </A> </strong>   
                              </div></td>
                            <td width="102" rowspan="2" class="Estilo9"><div align="center">&nbsp;8<br>
                                <span class="Estilo12">(Disipador)</span> <br>
                                de colector <br>
                                abierto <br>
                                (NPN)<br>
                                (3750Vrms)<br />
                              </div></td>
                            <td width="54" rowspan="2" class="Estilo9"><div align="center">10 a 30 V</div></td>
                            <td width="66" rowspan="2" class="Estilo9"><div align="center">375mA</div></td>
                            <td width="78" rowspan="2" class="Estilo9"><div align="center">4&nbsp;<span class="Estilo12">*</span>&nbsp;<br />
                                <span class="Estilo12">(Disipador / Fuente)</span><br />
                                Aislamiento con fuente com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td width="67" rowspan="2" class="Estilo9"><div align="center">4 a 30 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V máx.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">3k</div></td>
                            <td width="65" class="Estilo9"><div align="center">0.6W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7044_I-7044D"><img src="imagenes/02/i-7044d.gif" alt="I-7044D" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7044_I-7044D" target="_blank"> I-7044D </A> </strong>    
                              </div></td>
                            <td width="65" class="Estilo9"><div align="center">1,2 W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong> <a href="https://www.logicbus.com.mx/I-7050_I-7050D"><img src="imagenes/02/i-7050.gif" alt="I-7050" width="70" height="80" border="0"></a>   <a href="https://www.logicbus.com.mx/I-7050_I-7050D" target="_blank"> I-7050 </A> </strong>   
                              </div></td>
                            <td width="102" rowspan="2" class="Estilo9"><div align="center">&nbsp;8 <br>
                                <span class="Estilo12">(Disipador)</span> <br>
                                de colector <br>
                                abierto <br>
                                (NPN)<br>
                                (3750Vrms)<br />
                              </div></td>
                            <td width="54" rowspan="2" class="Estilo9"><div align="center">10 a 30 V</div></td>
                            <td width="66" rowspan="2" class="Estilo9"><div align="center">30mA</div></td>
                            <td width="78" rowspan="2" class="Estilo9"><div align="center">7&nbsp;<span class="Estilo12">*</span>&nbsp;<br />
                                <span class="Estilo12">(Disipador) </span><br />
                                (sin aislamiento)</div></td>
                            <td width="67" rowspan="2" class="Estilo9"><div align="center">4 a 30 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V máx.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">-</div></td>
                            <td width="65" class="Estilo9"><div align="center">0.4W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7050_I-7050D"><img src="imagenes/02/i-7050d.gif" alt="I-7050D" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7050_I-7050D" target="_blank"> I-7050D </A> </strong>  
                              </div></td>
                            <td width="65" class="Estilo9"><div align="center">1,2 W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7050A_I-7050AD"><img src="imagenes/02/i-7050a.gif" alt="I-7050A" width="70" height="80" border="0"></a>      <a href="https://www.logicbus.com.mx/I-7050A_I-7050AD" target="_blank"> I-7050A </A> </strong>                    </div></td>
                            <td width="102" rowspan="2" class="Estilo9"><div align="center">&nbsp;8 <br>
                                <span class="Estilo12">(Fuente)</span> <br>
                                de colector<br>
                                abierto <br>
                                (NPN)&nbsp;<br>
                                (3750Vrms)<br />
                              </div></td>
                            <td width="54" rowspan="2" class="Estilo9"><div align="center">10 a 30 V</div></td>
                            <td width="66" rowspan="2" class="Estilo9"><div align="center">50mA</div></td>
                            <td width="78" rowspan="2" class="Estilo9"><div align="center">7&nbsp;<span class="Estilo12">*</span>&nbsp;<br />
                                <span class="Estilo12">(Fuente)</span><br />
                                (sin aislamiento)</div></td>
                            <td width="67" rowspan="2" class="Estilo9"><div align="center">4 a 40 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">1 V máx.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">-</div></td>
                            <td width="65" class="Estilo9"><div align="center">1.0W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7050A_I-7050AD"><img src="imagenes/02/i-7050ad.gif" alt="I-7050AD" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7050A_I-7050AD" target="_blank"> I-7050AD </A> </strong> 
                              </div></td>
                            <td width="65" class="Estilo9"><div align="center">1,8 W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>                    <a href="https://www.logicbus.com.mx/I-7055_I-7055D"><img src="imagenes/02/i-7055.gif" alt="I-7055" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7055_I-7055D" target="_blank"> I-7055</A></strong>
                              </div></td>
                            <td width="102" rowspan="2" class="Estilo9"><div align="center">&nbsp;8 <br>
                                <span class="Estilo12">(Fuente)</span> <br>
                                de c&oacute;digo <br>
                                abierto <br>
                                (N-MOSFET)<br>
                                (3750Vrms)<br />
                              </div></td>
                            <td width="54" rowspan="2" class="Estilo9"><div align="center">10 a 40 V</div></td>
                            <td width="66" rowspan="2" class="Estilo9"><div align="center">650mA</div></td>
                            <td width="78" rowspan="2" class="Estilo9"><div align="center">8&nbsp;<span class="Estilo12">*</span>&nbsp;<br />
                                <span class="Estilo12">(Disipador / Fuente)</span><br />
                                Aislamiento con fuente com&uacute;n&nbsp;<br />
                                (3750Vrms)</div></td>
                            <td width="67" rowspan="2" class="Estilo9"><div align="center">10 a 50 V</div></td>
                            <td width="56" rowspan="2" class="Estilo9"><div align="center">4 V máx.</div></td>
                            <td width="77" rowspan="2" class="Estilo9"><div align="center">10k</div></td>
                            <td width="65" class="Estilo9"><div align="center">0,8 W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong>
                                  <a href="https://www.logicbus.com.mx/I-7055_I-7055D"><img src="imagenes/02/i-7055d.gif" alt="I-7055D" width="70" height="80" border="0"></a>    <a href="https://www.logicbus.com.mx/I-7055_I-7055D" target="_blank"> I-7055D</A></strong>
                              </div></td>
                            <td width="65" class="Estilo9"><div align="center">1.6W</div></td>
                            <td width="62" class="Estilo9"><div align="center"><img src="imagenes/02/RoHS.gif" width="60" height="40"  alt="Este artículo tiene el sello RoHS, libre de sustancias peligrosas"/></div></td>
                          </tr>
                          <tr>
                            <td bgcolor="#CCCCCC" class="Estilo9"><div align="center"><strong><a href="https://www.logicbus.com.mx/I-7055-NPN_I-7055D-NPN"><img src="imagenes/02/i-7055.gif" alt="I-7055D-NPN" width="70" height="80" border="0"></a>   <a href="https://www.logicbus.com.mx/I-7055-NPN_I-7055D-NPN" target="_blank"> I-7055NPN</A></strong> </div></td>
                            <td width="102" class="Estilo9"><div align="center">8&nbsp;<br>
                                <span class="Estilo12">(contacto <br>
                                  seco:<br>
                                  Origen, <br>
                                  Contacto<br>
                                  mojado: <br>
                                  Disipador/ <br>
                                  Fuente)</span> </div></td>
                            <td width="54" class="Estilo9"><div align="center">3,5 ~ 50 V</div></td>
                            <td width="66" class="Estilo9"><div align="center">700mA</div></td>
                            <td width="78" class="Estilo9"><div align="center">8<br />
                                <span class="Estilo12">(Disipador, NPN) </span></div></td>
                            <td width="67" class="Estilo9"><div align="center">10 V ~<br>
                                50 V</div></td>
                            <td width="56" class="Estilo9"><div align="center">4 V máx.</div></td>
                            <td width="77" class="Estilo9"><div align="center">10k</div></td>
                            <td width="65" class="Estilo9"><div align="center">1,2 W</div></td>
                            <td width="62" align="center" valign="middle" class="Estilo9"><div align="center">-</div></td>
                          </tr>
                          <tr>
                            <td height="16" colspan="10" class="Estilo14">* El canal DI puede ser utilizado como DI de baja velocidad (100 Hz).</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr align="right">

              <td>&nbsp;
              </td>
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