<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auk Industries - Sistema OEE | Logicbus</title>
    
    <meta name="description" content="Auk Industries ofrece un sistema de fábrica digital escalable que utiliza IoT (Internet de las cosas) y opera como un Fitbit para máquinas...">
    <meta name="keywords" content="sistema oee, auk insdustries, sistema de fábrica digital escalable, escalable, iot, internet de las cosas, sistema">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?> <!-- Sistema de Diseño General -->
    
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
    <style>
        /* Ocultar barra lateral */
        #leftBar { display: none; }
        
        /* Estilos para la calculadora OEE */
        .calculator-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .result-box {
            background: var(--lb-white);
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid var(--lb-primary);
            margin-bottom: 15px;
            font-weight: 600;
        }
        .result-box span { color: var(--lb-primary); }
        .chart-wrapper {
            background: var(--lb-white);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-top: 20px;
        }

        /* Rejilla para artículos */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Auk Industries</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Video 100% -->
    <div class="banner-container mb-5">
        <video autoplay muted loop width="100%" poster="images/banner/BANNER_AUK.webp" style="border-radius: 15px; overflow: hidden;">
            <source src="https://www.logicbus.com.mx/assets/videos/auk-banner.mp4" type="video/mp4">
        </video>
    </div>

    <!-- H1 y Textos de Introducción -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sistema de Fábrica Digital</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">AUK INDUSTRIES</span>
    </h1>

    <div class="container mb-5">
        <p class="intro-text">
            <strong>Auk Industries</strong> ofrece un sistema de fábrica digital escalable que utiliza IoT (Internet de las cosas) y opera como un "Fitbit para máquinas". Sus clientes pueden implementarlo en cuestión de días para realizar un seguimiento de los pasos, la frecuencia cardíaca y los ciclos de sueño de los equipos de fabricación. Miles de flujos de datos se analizan automáticamente potenciando la excelencia operativa desde el principio.
        </p>
        <p class="intro-text">
            Mediante el uso de herramientas Lean y análisis avanzados, Auk Industries ayuda a establecer el rendimiento base, mapear las principales pérdidas e identificar oportunidades de mejora. Por lo general, los clientes logran aumentos de productividad, ahorro energético o mejoras en el mantenimiento de entre el 10% y el 30%, obteniendo un retorno de la inversión en tan solo unos meses.
        </p>
    </div>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/auk-industries" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#GuiasyManuales">Manuales</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#calculadora" style="background-color: var(--lb-accent); border-color: var(--lb-accent);">Calculadora OEE</a>
    </nav>

    <!-- Ventaja Auk (Sección Video Texto) -->
    <section class="py-5 bg-light mt-5">
        <div class="container">
            <h2 class="section-title">Obtenga la ventaja de Auk</h2>
            <div class="row align-items-center mt-4">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <h3 class="mb-4" style="color: var(--lb-primary); font-weight: bold;">Inmersión profunda en datos</h3>
                    <p class="text-justify text-muted"><strong>Nuestros procesadores de borde IoT</strong> capturan 10.000 lecturas/segundo de los sensores conectados, rastreando microparadas y pérdidas de velocidad. Los datos se agregan de forma inteligente en el borde, proporcionando condiciones reales en todo momento.</p>
                    <p class="text-justify text-muted"><strong>Determinación de la verdadera línea de base:</strong> Algoritmos avanzados analizan flujos en tiempo real con millones de puntos de datos, estableciendo tiempos de ciclo estándar. Se realiza un seguimiento continuo del rendimiento del taller.</p>
                    <p class="text-justify text-muted"><strong>Análisis macro y micro:</strong> Analizamos los activos tanto a nivel de sistema como individual para identificar problemas. Así se obtiene el máximo rendimiento de la planta y se resuelven los problemas más críticos.</p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <video src="https://www.logicbus.com.mx/assets/videos/Img-Hero-Home-Video-Desktop.mp4" width="100%" autoplay loop muted playsinline style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);"></video>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabla de Éxito -->
    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead style="background-color: var(--lb-primary); color: white;">
                    <tr class="text-center">
                        <th width="20%">Característica</th>
                        <th width="40%">Por qué tenemos éxito (Auk)</th>
                        <th width="40%">Por qué otros fallan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Conexión</b></td>
                        <td><i class="fas fa-check text-success mr-2"></i> Auk está diseñado para una rápida conexión. Plug-and-Play, se conecta en minutos en todo tipo de máquinas.</td>
                        <td><i class="fas fa-times text-danger mr-2"></i> Requieren costosas actualizaciones de infraestructura (máquinas sin PLC o PLC's bloqueados).</td>
                    </tr>
                    <tr>
                        <td><b>Construcción</b></td>
                        <td><i class="fas fa-check text-success mr-2"></i> Sistema multinivel basado en el flujo de valor (máquina, línea, planta, multiplanta).</td>
                        <td><i class="fas fa-times text-danger mr-2"></i> Se construyen a nivel puntual en máquinas aisladas, dificultando ver los impulsores de planta.</td>
                    </tr>
                    <tr>
                        <td><b>Análisis</b></td>
                        <td><i class="fas fa-check text-success mr-2"></i> Análisis basado en experiencia Lean y excelencia operativa codificado de mejores prácticas.</td>
                        <td><i class="fas fa-times text-danger mr-2"></i> Proporcionan análisis genéricos de nivel superficial con escaso conocimiento de fabricación.</td>
                    </tr>
                    <tr>
                        <td><b>Gestión de Valor</b></td>
                        <td><i class="fas fa-check text-success mr-2"></i> Sistema de gestión de rendimiento de bucle cerrado diseñado para captura de valor sin fisuras.</td>
                        <td><i class="fas fa-times text-danger mr-2"></i> Soluciones incompletas que dependen de otros sistemas o intervención humana masiva.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Imágenes Nodos -->
    <div class="container mb-5">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/322/nodos.webp" alt="Ejemplo Nodos" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-12 col-md-6 text-center">
                <img loading="lazy" src="https://www.logicbus.com.mx/imagenes/322/nodos2.webp" alt="Segundo ejemplo Nodos" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>

    <!-- PREGUNTAS FRECUENTES -->
    <div class="container my-5">
        <h2 class="section-title text-center mb-5" style="color: var(--lb-accent);">Preguntas Frecuentes</h2>
        
        <!-- Accordion General -->
        <h3 class="mb-3" style="color: var(--lb-primary);">General</h3>
        <div class="accordion mb-5" id="accordionGeneral">
            <div class="card">
                <div class="card-header bg-white" id="faqUno">
                    <a class="d-flex justify-content-between text-decoration-none" data-toggle="collapse" href="#collapseUno" style="color: var(--lb-text); font-weight: 600;">
                        ¿Qué problema aborda Auk Industries? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseUno" class="collapse show" data-parent="#accordionGeneral">
                    <div class="card-body text-muted">Auk Industries aborda desafíos críticos de fabricación, como la escasez de mano de obra, las interrupciones de la cadena de suministro, la inflación y la necesidad de aumentar la productividad. Nuestra tecnología ofrece visibilidad en tiempo real.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="faqDos">
                    <a class="d-flex justify-content-between text-decoration-none collapsed" data-toggle="collapse" href="#collapseDos" style="color: var(--lb-text); font-weight: 600;">
                        ¿Cuáles son los casos de uso empresarial? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseDos" class="collapse" data-parent="#accordionGeneral">
                    <div class="card-body text-muted">Optimiza la eficiencia y el rendimiento en tiempo real, optimización de la eficiencia de los activos, planificación de la calidad, mantenimiento predictivo y mejora de la productividad laboral.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="faqTres">
                    <a class="d-flex justify-content-between text-decoration-none collapsed" data-toggle="collapse" href="#collapseTres" style="color: var(--lb-text); font-weight: 600;">
                        ¿Auk es software o también hardware? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseTres" class="collapse" data-parent="#accordionGeneral">
                    <div class="card-body text-muted">Somos principalmente software, pero ofrecemos un dispositivo Edge IIoT. También podemos obtener datos a través de protocolos como OPC UA, haciendo el hardware de Auk opcional.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="faqCinco">
                    <a class="d-flex justify-content-between text-decoration-none collapsed" data-toggle="collapse" href="#collapseCinco" style="color: var(--lb-text); font-weight: 600;">
                        ¿Cuánto tiempo lleva configurar el sistema Auk? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseCinco" class="collapse" data-parent="#accordionGeneral">
                    <div class="card-body text-muted">La instalación de 20 a 30 máquinas suele tardar entre 2 y 4 días. El acceso a la plataforma es posible en un plazo de 2 a 4 días con configuración mínima.</div>
                </div>
            </div>
        </div>

        <!-- Accordion Industrias -->
        <h3 class="mb-3" style="color: var(--lb-primary);">Industrias Atendidas y Compatibilidad</h3>
        <div class="accordion" id="accordionIndustrias">
            <div class="card">
                <div class="card-header bg-white" id="faqIndDos">
                    <a class="d-flex justify-content-between text-decoration-none collapsed" data-toggle="collapse" href="#collapseIndDos" style="color: var(--lb-text); font-weight: 600;">
                        ¿Con qué tipos de máquinas es compatible? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseIndDos" class="collapse" data-parent="#accordionIndustrias">
                    <div class="card-body text-muted">La tecnología de Auk es versátil y compatible con una amplia gama de máquinas, tanto antiguas como modernas, de diversos fabricantes.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="faqIndTres">
                    <a class="d-flex justify-content-between text-decoration-none collapsed" data-toggle="collapse" href="#collapseIndTres" style="color: var(--lb-text); font-weight: 600;">
                        ¿Qué datos se recopilan ("Fitbit para máquinas")? <i class="fa fa-caret-down mt-1"></i>
                    </a>
                </div>
                <div id="collapseIndTres" class="collapse" data-parent="#accordionIndustrias">
                    <div class="card-body text-muted">
                        <ul>
                            <li class="mb-2"><strong>Producción (Pasos):</strong> Seguimiento de la cantidad de ciclos o productos.</li>
                            <li class="mb-2"><strong>Salud (Frecuencia cardíaca):</strong> Rastrear parámetros como presión, rpm, temperatura, vibración y corriente.</li>
                            <li><strong>Ciclo de Sueño:</strong> Métricas como tiempo de actividad, inactividad, espera y cambio.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALCULADORA OEE -->
    <section class="py-5" id="calculadora" style="background-color: #f1f5f9;">
        <div class="container">
            <h2 class="section-title text-center mb-5">Calcula el OEE de tu Fábrica</h2>
            
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="calculator-card">
                        <h4 class="mb-4" style="color: var(--lb-primary);">Ingresa tus datos</h4>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tiempo disponible (Horas):</label>
                            <input type="number" id="tDisponible" class="form-control" placeholder="Ej. 8" min="1">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tiempo productivo (Horas):</label>
                            <input type="number" id="tProductivo" class="form-control" placeholder="Ej. 7.5" min="1">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Capacidad teórica (piezas/hora):</label>
                            <input type="number" id="cProductiva" class="form-control" placeholder="Ej. 100" min="1">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Producción real (piezas/hora):</label>
                            <input type="number" id="produccionEf" class="form-control" placeholder="Ej. 90" min="1">
                        </div>
                        <div class="form-group mb-4">
                            <label class="font-weight-bold">Piezas defectuosas (Total turno):</label>
                            <input type="number" id="piezasM" class="form-control" placeholder="Ej. 15" min="0">
                        </div>
                        <button class="btn btn-circle w-100" onclick="calcular()" style="border-radius: 5px;">Generar Reporte OEE</button>
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Resultados de texto -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="result-box" id="planificacion">Planificación: Esperando datos...</div>
                        </div>
                        <div class="col-md-6">
                            <div class="result-box" id="O" style="border-color: var(--lb-accent); font-size: 1.2rem;">OEE Global: --%</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><div class="result-box" id="disponibilidad">Disponibilidad: --%</div></div>
                        <div class="col-md-4"><div class="result-box" id="rendimiento">Rendimiento: --%</div></div>
                        <div class="col-md-4"><div class="result-box" id="calidad">Calidad: --%</div></div>
                    </div>

                    <!-- Gráficos -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="chart-wrapper">
                                <canvas id="myChart" height="250"></canvas>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="chart-wrapper">
                                <canvas id="myChart2" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATÁLOGOS -->
    <div class="container my-5" id="catalogos">
        <h2 class="section-title text-center">Catálogos y Folletos</h2>
        <div class="products-grid justify-content-center">
            <div class="product-card text-center" style="max-width: 300px; margin: 0 auto;">
                <a href="https://www.logicbus.com.mx/pdf/322/brochure-auk-industries.pdf" target="_blank" class="text-decoration-none">
                    <img loading="lazy" class="img-fluid mb-3 shadow-sm rounded" src="https://www.logicbus.com.mx/pdf/322/AUK-el-software-mas-poderoso.webp" alt="Brochure Auk">
                    <h5 style="color: var(--lb-primary); font-weight: bold;">Auk: El software más poderoso</h5>
                    <span class="btn-circle mt-3 d-inline-block">Descargar PDF</span>
                </a>
            </div>
            <div class="product-card text-center" style="max-width: 300px; margin: 0 auto;">
                <a href="https://tienda.logicbus.com.mx/assets/PDF/[PACK%20Expo%20Vegas%202023]%20Auk%20Industries%20-%20IoT-powered%20Ops%20Analytics.pdf" target="_blank" class="text-decoration-none">
                    <img loading="lazy" class="img-fluid mb-3 shadow-sm rounded" src="https://www.logicbus.com.mx/pdf/322/AUK-INDUSTRIES.webp" alt="Auk Pack Expo">
                    <h5 style="color: var(--lb-primary); font-weight: bold;">Presentación Pack Expo</h5>
                    <span class="btn-circle mt-3 d-inline-block">Descargar PDF</span>
                </a>
            </div>
        </div>
    </div>

    <!-- GUIAS Y MANUALES -->
    <div class="container text-center my-5 pb-4" id="GuiasyManuales">
        <h2 class="section-title">Guías y Manuales</h2>
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=auk+industries" class="ghost-manual-box d-inline-flex mt-3">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación Técnica</span>
        </a>
    </div>

    <!-- ARTÍCULOS -->
    <div class="container my-5" id="articulos">
        <h2 class="section-title text-center">Artículos de Interés</h2>
        <div class="content-grid">
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/blog/como-interpretar-correctamente-tus-resultados-del-oee/" target="_blank"><img loading="lazy" class="img-fluid rounded mb-3" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Co%CC%81mo-interpretar-correctamente-tus-resultados-del-OEE.png"></a>
                <h5 style="color: var(--lb-primary); font-weight: bold;">Cómo interpretar tus resultados del OEE</h5>
                <p class="text-muted" style="font-size: 0.9rem;">El OEE es una métrica fundamental para evaluar la eficiencia de tus equipos...</p>
                <a href="https://www.logicbus.com.mx/blog/como-interpretar-correctamente-tus-resultados-del-oee/" target="_blank" class="btn-circle w-100 text-center mt-auto" style="padding: 8px;">Leer Artículo</a>
            </div>
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/blog/que-es-el-oee-y-como-implementarlo/" target="_blank"><img loading="lazy" class="img-fluid rounded mb-3" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/QUE-ES-EL-OEE-Y-COMO-IMPLEMENTARLO.png"></a>
                <h5 style="color: var(--lb-primary); font-weight: bold;">¿Qué es el OEE y cómo implementarlo?</h5>
                <p class="text-muted" style="font-size: 0.9rem;">En las empresas de producción uno de los factores más importantes a considerar...</p>
                <a href="https://www.logicbus.com.mx/blog/que-es-el-oee-y-como-implementarlo/" target="_blank" class="btn-circle w-100 text-center mt-auto" style="padding: 8px;">Leer Artículo</a>
            </div>
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/blog/la-importancia-del-oee/" target="_blank"><img loading="lazy" class="img-fluid rounded mb-3" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/12/La-importancia-del-OEE-y-su-impacto-en-la-eficiencia-de-mi-linea-de-produccion.png"></a>
                <h5 style="color: var(--lb-primary); font-weight: bold;">Importancia y su impacto en la línea</h5>
                <p class="text-muted" style="font-size: 0.9rem;">¿Qué es el OEE? Es una métrica de manufactura clave que considera diferentes componentes...</p>
                <a href="https://www.logicbus.com.mx/blog/la-importancia-del-oee/" target="_blank" class="btn-circle w-100 text-center mt-auto" style="padding: 8px;">Leer Artículo</a>
            </div>
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/blog/que-es-el-oee/" target="_blank"><img loading="lazy" class="img-fluid rounded mb-3" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2021/03/QUE-ES-EL-OEE.png"></a>
                <h5 style="color: var(--lb-primary); font-weight: bold;">Conceptos Básicos: ¿Qué es el OEE?</h5>
                <p class="text-muted" style="font-size: 0.9rem;">La eficacia global del equipo es un método para medir tres indicadores clave (KPI)...</p>
                <a href="https://www.logicbus.com.mx/blog/que-es-el-oee/" target="_blank" class="btn-circle w-100 text-center mt-auto" style="padding: 8px;">Leer Artículo</a>
            </div>
        </div>
    </div>

    <!-- Contacto (Diseño Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">IMPLEMENTA AUK INDUSTRIES EN TU PLANTA</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de ingenieros está listo para ayudarte a evaluar y conectar el sistema OEE a tus máquinas.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    
    <!-- SCRIPTS CORE: Orden corregido para que el botón WhatsApp no falle -->
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    
    <!-- Scripts para OEE -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script> 
    
    <script>
        // Lógica de la calculadora OEE
        let chartBar = null;
        let chartPie = null;

        function calcular() {
            var tDisponible = parseFloat(document.getElementById("tDisponible").value);
            var tProductivo = parseFloat(document.getElementById("tProductivo").value);
            var cProductiva = parseFloat(document.getElementById("cProductiva").value);
            var produccionEf = parseFloat(document.getElementById("produccionEf").value);
            var piezasM = parseFloat(document.getElementById("piezasM").value);

            if (isNaN(tDisponible) || isNaN(tProductivo) || isNaN(produccionEf) || isNaN(cProductiva) || isNaN(piezasM)) {
                alert("Por favor, ingresa valores numéricos en todos los campos para generar el reporte.");
                return;
            }

            var disponibilidad = (tProductivo / tDisponible).toFixed(2);
            var rendimiento = (produccionEf / cProductiva).toFixed(2);
            var piezasDia = produccionEf * tProductivo;
            var calidad = (1 - (piezasM / piezasDia)).toFixed(2);
            var oee = (disponibilidad * rendimiento * calidad * 100).toFixed(2);

            document.getElementById("planificacion").innerHTML = `
                <span>Planificación:</span><br>
                Tiempo disponible: ${tDisponible} Horas<br>
                Velocidad teórica: ${cProductiva} Pzs/hr<br>
                Meta de turno: ${cProductiva * tDisponible} Pzs
            `;
            
            document.getElementById("disponibilidad").innerHTML = `Disponibilidad:<br> <span>${(disponibilidad * 100).toFixed(1)}%</span>`;
            document.getElementById("rendimiento").innerHTML = `Rendimiento:<br> <span>${(rendimiento * 100).toFixed(1)}%</span>`;
            document.getElementById("calidad").innerHTML = `Calidad:<br> <span>${(calidad * 100).toFixed(1)}%</span>`;
            document.getElementById("O").innerHTML = `OEE Global:<br> <span>${oee}%</span>`;

            dibujarGrafica(disponibilidad, rendimiento, calidad, oee);
        }

        function dibujarGrafica(disponibilidad, rendimiento, calidad, oee) {
            var ctx = document.getElementById("myChart").getContext("2d");
            var ctx2 = document.getElementById("myChart2").getContext("2d");
            var vacio = 100 - oee;

            if (chartBar) chartBar.destroy();
            if (chartPie) chartPie.destroy();

            chartBar = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Disponibilidad", "Rendimiento", "Calidad"],
                    datasets: [{
                        label: "Métricas %",
                        data: [disponibilidad * 100, rendimiento * 100, calidad * 100],
                        backgroundColor: ["#0056b3", "#f8981d", "#28a745"],
                        borderRadius: 5
                    }]
                },
                options: { scales: { y: { beginAtZero: true, max: 100 } } }
            });

            chartPie = new Chart(ctx2, {
                type: "doughnut",
                data: {
                    labels: ["OEE Efectivo", "Pérdida (Mejora)"],
                    datasets: [{
                        data: [oee, vacio],
                        backgroundColor: ["#28a745", "#dc3545"],
                        borderWidth: 0
                    }]
                },
                options: { cutout: '70%' }
            });
        }
    </script>
</body>
<?php echo $var_footer; ?>
</html>