<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Software - DCON - Logicbus S.A de C.V</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="description" content="La utilería DCON Ues un kit de herramientas que ayudan al usuario a buscar la red, configurar fácilmente los módulos E/S y probar el estado de las E/S por medio del puerto serial (RS-232/485) o puerto ethernet (utilizando el puerto com virtual). Soporta no sólo los módulos del protocolo DCON sino también los módulos de E/S serie M (Modbus RTU M-7K,M-87K y soportará Modbus ASCII M-87K).">
  <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oModulo RS-232 (Modbus RTU) con 32 entradas opticamente aisladas (5-30 Vdc). Alimentacion: 9-30Vdc, montaje en riel DIN, compatible con Windows y Linux. Entradas y salidas expandibles hasta 246acute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
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
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
              <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y herramientas de desarrollo</a></li>
              <li class="breadcrumb-item active" aria-current="page">DCON Utility</li>
            </ol>
          </nav>
          <h1><br>DCON Utility</h1>
          <br>
          <center><img src="imagenes/imagenes/icpdas/setup.jpg" alt="DCON Utility" title="DCON Utility" width="50%" class="image_productos"></center>
          <br>
          <p align="justify">La utilería DCON Ues un kit de herramientas que ayudan al usuario a buscar la red, configurar fácilmente los módulos E/S y probar el estado de las E/S por medio del puerto serial (RS-232/485) o puerto ethernet (utilizando el puerto com virtual). Soporta no sólo los módulos del protocolo DCON sino también los módulos de E/S serie M (Modbus RTU M-7K,M-87K y soportará Modbus ASCII M-87K).</p>
          <br><br>
          <center><img src="imagenes/imagenes/icpdas/87054_s.jpg" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
          <br>
          <P>La función principal de la utilería DCON se lista debajo: </P>
          <BR>
          <ul>
            <li>Puerto COM: Configuración para el puerto COM de la PC</li>
            <br>
            <center><img src="imagenes/imagenes/icpdas/comport.gif" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
            <li>Search Network: Muestra los módulos en el bus de datos</li>
            <br>
            <center><img src="imagenes/imagenes/icpdas/multibaud.jpg" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
            <li>Monitoreo: La utilería monitoreará el estado de los módulos E/S de la red cada ciclo</li>
            <br>
            <center><img src="imagenes/imagenes/icpdas/monitor_new.jpg" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
            <li>Registrador de Datos: La utilería usa parámetros personalizados para monitorear los módulos de E/S y hará un archivo de registro para los datos E/S.</li>
            <br>
            <center><img src="imagenes/imagenes/icpdas/log_config.gif" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
            <li>Terminal: Para algunas veces que los usuarios quieran utilizar comandos para probar la funcionalidad del módulo directamente.</li>
            <br>
            <center><img src="imagenes/imagenes/icpdas/commandline.gif" alt="Quicker" title="Quicker" width="50%" class="image_productos"></center>
          </ul>
          <br>
          <strong>Descargar Software: </strong><br>
          <strong><a href="descargas/dcon_utility_v5.1.8.exe" target="_blank">DCON Utility</a></strong><br>
          <p>Ultima actualizaci&oacute;n: 29 de Abril 2010</p>
          <br><br>
          <strong>FAQs</strong><br>
          <a href="pdf/02/Pasos_para_modulos_I-7000.pdf" target="_blank">Pasos para empezar a utilizar m&oacute;dulos I-7000 con el software EZ Data Logger</a><br>
          <strong>Kit de utiler&iacute;a y herramienta de desarrollo</strong><br><br>
          <div align="center">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/diagramas/7000v.gif" alt="DCON_Labview" title="DCON_Labview" width="150" class="img-responsive"></div>
                  </td>
                  <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                    DCON_Labview<br>
                    <ul>
                      <li>Modulos soportados:<br>
                        series I-7000/8000/87K (con protocolo DCON)
                      </li>
                      <li>OS soportado: Windows 98/NT/2000/XP</li>
                    </ul>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/Indusoft.gif" alt="DCON_Indusoft" title="DCON_Indusoft" width="150" class="img-responsive"></div>
                  </td>
                  <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                    DCON_Indusoft<br>
                    <ul>
                      <li>Modulos soportados:<br>
                        series I-7000/8000/87K (con protocolo DCON)
                      </li>
                      <li>OS soportado: Windows 98/NT/2000/XP/CE /VISTA/7</li>
                    </ul>
                    </p><br>
                    <p>Descargar Driver DCON para Indusoft v6.1 y v7.0<br>
                      <a href="descargas/Indusoft_DCON_Driver_v1.42.exe" target="_blank">DCON_driver</a><br>
                      Versi&oacute;n1.42 <br>Actualizado el 30 de Noviembre del 2010
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/dcondll.gif" alt="DCON_DLL" title="DCON_DLL" width="150" class="img-responsive"></div>
                  </td>
                  <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                    <p align="left"><strong>DCON_DLL </strong></p>
                    <ul>
                      <li> librer&iacute;a
                        DLL
                      <li><strong>M&oacute;dulos soportados:</strong> <br>
                        series I-7000/8000/87K (con protocolo DCON)
                      <li><strong>Demo soportado: </strong><br>
                        VB/VC/BCB/Delphi (C&oacute;digo fuente inclu&iacute;do)
                      <li><strong>OS soportado: </strong>Windows 98/NT/2000/XP </li>
                    </ul>
                    Descargar DLLs para VB6, VC y .NET <br>
                    <a href="descargas/DCON_DLL_New.zip" target="_blank">DCON_DLL_NEW</a>&nbsp; <br>
                    Versi&oacute;n: 1.0.0 <br>
                    Fecha de actualizaci&oacute;n: 10 de agosto 2006
                  </td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/7000x.gif" alt="DCON_ActiveX" title="DCON_ActiveX" width="150" class="img-responsive"></div>
                  </td>
                  <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                    <p align="left"><strong>DCON_ActiveX </strong></p>
                    <ul>
                      <li>Componente ActiveX (OCX) </li>
                      <li><strong>M&oacute;dulos soportados:</strong> </li>
                      series I-7000/8000/87K (con protocolo DCON)
                      <li><strong>Demo soportado:</strong></li>
                      VB/VC/BCB/Delphi (C&oacute;digo fuente inclu&iacute;do)
                      <li><strong>OS soportado:</strong> Windows 98/NT/2000/XP </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <tr>
            <td>
              <div align="center"><img src="imagenes/02/linux.gif" alt="DCON_Linux" title="DCON_Linux" width="150" class="img-responsive"></div>
            </td>
            <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
              <p align="left"><strong>DCON_Linux </strong></p>
              <ul>
                <li>Librer&iacute;as para plataforma Linux </li>
                <li><strong>M&oacute;dulos soportados:</strong> </li>
                series I-7000/8000/87K (con protocolo DCON)
                <li><strong>OS soportado:</strong> Linux </li>
              </ul>
            </td>
          </tr>
        </div>
        <tr>
          <td>
            <div align="center"><img src="imagenes/02/dde.gif" alt="DCON_DDE" title="DCON_DDE" width="150" class="img-responsive"></div>
          </td>
          <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
            <p align="left"><strong>DCON_DDE </strong></p>
            <ul>
              <li>servidor DDE </li>
              <li><strong>M&oacute;dulos soportados:</strong> </li>
              series I-7000/8000/87K (con protocolo DCON)
              <li><strong>OS soportado:</strong> Windows 98/NT/2000/XP </li>
            </ul>
          </td>
        </tr>
      </div>
      <tr>
        <td>
          <div align="center"><img src="imagenes/02/opc.gif" alt="Servidor NAPOPC" title="Servidor NAPOPC" width="150" class="img-responsive"></div>
        </td>
        <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
          <p align="left"><strong>Servidor NAPOPC </strong></p>
          <ul>
            <li> Servidor OPC</li>
            <li><strong>M&oacute;dulos/Controladores soportados:</strong></li>
            <li> series I-7000/8000/87K (con protocolo DCON)</li>
            <li>Controlador embebido Modbus</li>
            <li>Controlador embebido ISaGRAF </li>
            <li><strong>OS soportado:</strong> Windows 98/NT/2000/XP </li>
          </ul>
        </td>
      </tr>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>