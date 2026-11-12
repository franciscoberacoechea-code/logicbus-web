<?php 
require("../admin/config.php"); 
include("../libreria/libreria.php"); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paletizado Automático | Logicbus</title>
    <meta name="description" content="Sistema de paletizado automático con robots para armar pallets sin riesgos físicos y con mayor eficiencia.">

    <!-- PHP Headers -->
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

    <script>document.documentElement.classList.add('lg-js');</script>

    <!-- Archivo CSS Base de Logística -->
    <link rel="stylesheet" href="https://www.logicbus.com.mx/libreria/logistica-y-almacenes.css">

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("../libreria/header.view.php"); ?>

    <!-- ===== DECLARACIÓN DE ICONOS SVG (Ocultos en la página) ===== -->
    <svg width="0" height="0" style="position:absolute;overflow:hidden" aria-hidden="true" focusable="false">
        <symbol id="i-speed" viewBox="0 0 24 24">
            <path d="M12 14l4-4" />
            <path d="M3.34 19a10 10 0 1 1 17.32 0" />
        </symbol>
        <symbol id="i-health_and_safety" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <path d="M12 8v6M9 11h6" />
        </symbol>
        <symbol id="i-precision_manufacturing" viewBox="0 0 24 24">
            <path d="M3 21h9" />
            <path d="M7 21v-6" />
            <path d="M7 15l5-6" />
            <path d="M12 9l6 2" />
            <circle cx="7" cy="15" r="1.6" />
            <circle cx="12" cy="9" r="1.6" />
            <path d="M18 11v5" />
            <path d="M16 16h4" />
        </symbol>
        <symbol id="i-layers" viewBox="0 0 24 24">
            <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" />
            <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" />
            <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65" />
        </symbol>
        <symbol id="i-compare_arrows" viewBox="0 0 24 24">
            <path d="M8 3 4 7l4 4" />
            <path d="M4 7h16" />
            <path d="m16 21 4-4-4-4" />
            <path d="M20 17H4" />
        </symbol>
        <symbol id="i-check_circle" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="m9 12 2 2 4-4" />
        </symbol>
        <symbol id="i-hourglass_top" viewBox="0 0 24 24">
            <path d="M5 22h14" />
            <path d="M5 2h14" />
            <path d="M17 22v-4.17a2 2 0 0 0-.59-1.42L12 12l-4.41 4.41A2 2 0 0 0 7 17.83V22" />
            <path d="M7 2v4.17a2 2 0 0 0 .59 1.42L12 12l4.41-4.41A2 2 0 0 0 17 6.17V2" />
        </symbol>
        <symbol id="i-front_hand" viewBox="0 0 24 24">
            <path d="M18 11V6a2 2 0 0 0-4 0" />
            <path d="M14 10V4a2 2 0 0 0-4 0v6" />
            <path d="M10 10.5V6a2 2 0 0 0-4 0v8" />
            <path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15" />
        </symbol>
        <symbol id="i-users" viewBox="0 0 24 24">
            <circle cx="9" cy="8" r="4" />
            <path d="M2 21v-1a6 6 0 0 1 6-6h2a6 6 0 0 1 6 6v1" />
            <path d="M17 4.2a4 4 0 0 1 0 7.6M22 21v-1a6 6 0 0 0-4-5.6" />
        </symbol>
        <symbol id="i-trending_up" viewBox="0 0 24 24">
            <path d="m22 7-8.5 8.5-5-5L2 17" />
            <path d="M16 7h6v6" />
        </symbol>
        <symbol id="i-inventory_2" viewBox="0 0 24 24">
            <path d="M16.5 9.4 7.5 4.21" />
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
            <path d="M3.27 6.96 12 12.01l8.73-5.05" />
            <path d="M12 22.08V12" />
        </symbol>
        <symbol id="i-arrow_forward" viewBox="0 0 24 24">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
        </symbol>
        <symbol id="i-move_to_inbox" viewBox="0 0 24 24">
            <path d="M22 12h-6l-2 3h-4l-2-3H2" />
            <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
        </symbol>
        <symbol id="i-sensors" viewBox="0 0 24 24">
            <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9" />
            <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5" />
            <circle cx="12" cy="12" r="2" />
            <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5" />
            <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19" />
        </symbol>
        <symbol id="i-local_shipping" viewBox="0 0 24 24">
            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
            <path d="M15 18H9" />
            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
            <circle cx="17" cy="18" r="2" />
            <circle cx="7" cy="18" r="2" />
        </symbol>
        <symbol id="i-memory" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="2"/>
            <rect x="9" y="9" width="6" height="6"/>
            <path d="M15 2v2M15 20v2M2 15h2M2 9h2M20 15h2M20 9h2M9 2v2M9 20v2"/>
        </symbol>
        <symbol id="i-warehouse" viewBox="0 0 24 24">
            <path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z"/>
            <path d="M6 18h12"/>
            <path d="M6 14h12"/>
            <rect width="12" height="12" x="6" y="10"/>
        </symbol>
        <symbol id="i-flask" viewBox="0 0 24 24">
            <path d="M10 2v7.5L4 20a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5L14 9.5V2"/>
            <path d="M8.5 2h7"/>
        </symbol>
        <symbol id="i-cart" viewBox="0 0 24 24">
            <circle cx="8" cy="21" r="1"/>
            <circle cx="19" cy="21" r="1"/>
            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
        </symbol>
        <symbol id="i-utensils" viewBox="0 0 24 24">
            <path d="M3 2v7a3 3 0 0 0 3 3v10"/>
            <path d="M9 2v7a3 3 0 0 1-3 3"/>
            <path d="M6 2v20"/>
            <path d="M19 22V2c-3 1-5 4-5 8v4h5"/>
        </symbol>
        <!-- Iconos Nuevos -->
        <symbol id="i-settings" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3"/>
            <circle cx="12" cy="12" r="7"/>
            <path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M5 19l2-2M17 7l2-2"/>
        </symbol>
        <symbol id="i-clipboard" viewBox="0 0 24 24">
            <rect x="8" y="2" width="8" height="4" rx="1"/>
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
            <path d="m9 14 2 2 4-4"/>
        </symbol>
        <symbol id="i-forklift" viewBox="0 0 24 24">
            <path d="M3 16V8h7l2 4v4"/>
            <path d="M15 3v14"/>
            <path d="M15 17h6"/>
            <circle cx="6" cy="18.5" r="1.8"/>
            <circle cx="11.5" cy="18.5" r="1.8"/>
        </symbol>
        <symbol id="i-location_on" viewBox="0 0 24 24">
            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/>
            <circle cx="12" cy="10" r="3"/>
        </symbol>
        <symbol id="i-arrow_back" viewBox="0 0 24 24">
            <path d="M19 12H5"/>
            <path d="m12 19-7-7 7-7"/>
        </symbol>
    </svg>

    <main id="logisticbus-landing">

        <!-- MIGAS DE PAN -->
        <div class="lg-wrap" style="padding-top: 15px; padding-bottom: 5px;">
            <div style="font-size: .85rem;">
                <a href="https://www.logicbus.com.mx/"
                    style="color: #24537B; font-weight: 600; text-decoration: none;">Inicio</a>
                <span style="color: #7b8791; margin: 0 6px;">/</span>
                <a href="https://www.logicbus.com.mx/automatizacion-logistica-almacenes"
                    style="color: #24537B; font-weight: 600; text-decoration: none;">Logística y almacenes</a>
                <span style="color: #7b8791; margin: 0 6px;">/</span>
                <span style="color: #7b8791;">Paletizado automático</span>
            </div>
        </div>

        <!-- 01. HERO -->
        <section class="lg-hero lg-hero-pal">
            <div class="lg-wrap">
                <div class="grid">
                    <div>
                        <span class="lg-kicker">
                            <svg class="lg-i" aria-hidden="true">
                                <use href="#i-precision_manufacturing" />
                            </svg>Paletizado automático
                        </span>
                        <h1>Arma un pallet <span style="display: block; color: var(--lg-orange);">sin riesgos físicos y con mayor eficiencia</span></h1>
                        <p class="sub">Tecnología de paletizado automático: un sistema robotizado que arma pallets estables y uniformes a ritmo constante, para que tu producción llegue al embarque sin cuellos de botella.</p>

                        <div class="lg-perks">
                            <div><svg class="lg-i" aria-hidden="true"><use href="#i-speed" /></svg>Ritmo constante por turno</div>
                            <div><svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg>Estiba uniforme y estable</div>
                            <div><svg class="lg-i" aria-hidden="true"><use href="#i-health_and_safety" /></svg>Menos esfuerzo físico</div>
                            <div><svg class="lg-i" aria-hidden="true"><use href="#i-compare_arrows" /></svg>Cambio de formato rápido</div>
                        </div>

                        <div class="lg-btns">
                            <a class="lg-btn primary" href="#celda">Ver cómo funciona</a>
                            <a class="lg-btn ghost" href="#analiza">Platicar mi aplicación</a>
                        </div>
                    </div>

                    <!-- Celda Animada SVG -->
                    <div class="lg-cellbox" aria-hidden="true">
                        <div class="lg-cellbox-top"><span class="dot"></span>Sistema de paletizado en operación</div>
                        <svg id="cellSvg" viewBox="0 0 640 340" role="img" aria-label="Animación de un robot que toma cajas de un transportador y arma un pallet">
                            <defs>
                                <pattern id="cgrid" width="32" height="32" patternUnits="userSpaceOnUse">
                                    <path d="M32 0H0V32" fill="none" stroke="rgba(255,255,255,.06)" stroke-width="1" />
                                </pattern>
                            </defs>
                            <rect width="640" height="340" fill="url(#cgrid)" />
                            <rect x="0" y="320" width="640" height="20" fill="rgba(255,255,255,.07)" />
                            <rect x="20" y="250" width="250" height="12" rx="3" fill="#47617a" />
                            <rect x="20" y="262" width="250" height="4" fill="#2f4760" />
                            <rect x="40" y="266" width="8" height="54" fill="#3a5470" />
                            <rect x="140" y="266" width="8" height="54" fill="#3a5470" />
                            <rect x="240" y="266" width="8" height="54" fill="#3a5470" />
                            <g stroke="rgba(255,255,255,.28)" stroke-width="2">
                                <line x1="34" y1="256" x2="34" y2="256" />
                            </g>
                            <rect x="308" y="262" width="44" height="58" rx="4" fill="#3a5470" />
                            <rect x="296" y="316" width="68" height="6" rx="2" fill="#2f4760" />
                            <rect x="405" y="306" width="150" height="14" rx="2" fill="#b98a55" />
                            <rect x="415" y="320" width="20" height="0" fill="#b98a55" />
                            <g id="stack"></g>
                            <g id="cbox">
                                <rect x="-20" y="-14" width="40" height="28" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" />
                                <line x1="-20" y1="-4" x2="20" y2="-4" stroke="#b07a3f" stroke-width="2" />
                            </g>
                            <line id="a1" x1="330" y1="262" x2="330" y2="140" stroke="#ef7b10" stroke-width="14" stroke-linecap="round" />
                            <line id="a2" x1="330" y1="140" x2="330" y2="80" stroke="#ffffff" stroke-width="11" stroke-linecap="round" />
                            <circle cx="330" cy="262" r="13" fill="#ef7b10" stroke="#16344f" stroke-width="3" />
                            <circle id="joint" cx="330" cy="140" r="8" fill="#16344f" stroke="#ef7b10" stroke-width="3" />
                            <g id="hand">
                                <rect x="-4" y="0" width="8" height="12" fill="#cfdeeb" />
                                <rect x="-24" y="12" width="48" height="8" rx="2" fill="#cfdeeb" />
                            </g>
                            <g id="carry" style="display:none">
                                <rect x="-20" y="-14" width="40" height="28" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" />
                                <line x1="-20" y1="-4" x2="20" y2="-4" stroke="#b07a3f" stroke-width="2" />
                            </g>
                            <text x="480" y="338" text-anchor="middle" font-size="11" fill="#cfdeeb" font-weight="700" id="cnt">Pallet: 0 de 12 cajas</text>
                        </svg>
                        <div class="lg-cellbox-flash" id="cellFlash">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-check_circle" /></svg>Pallet completo, listo para embarque
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 02. RETOS / SEÑALES -->
        <section class="lg-section alt">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Señales de que toca automatizar</span>
                    <h2>Cuando el fin de la línea de producción frena tu velocidad de crecimiento</h2>
                    <p>El paletizado manual funciona hasta que el volumen, la rotación o los picos de demanda lo rebasan. Estas son las señales más comunes.</p>
                </div>

                <div class="lg-retos">
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-hourglass_top" /></svg></div>
                        <span class="t">La producción se acumula al final de la línea esperando ser paletizada</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-front_hand" /></svg></div>
                        <span class="t">Personal dedicado a una tarea repetitiva y de esfuerzo físico</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg></div>
                        <span class="t">Pallets con estiba irregular, inestables o rechazados en el embarque</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-users" /></svg></div>
                        <span class="t">Rotación y ausentismo que cambian el ritmo de un turno a otro</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-trending_up" /></svg></div>
                        <span class="t">Picos de demanda que no puedes cubrir sin sumar turnos o personal</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-inventory_2" /></svg></div>
                        <span class="t">Daños de producto por estibas mal formadas durante el traslado</span>
                    </div>
                </div>

                <div class="lg-rv" style="text-align:center; margin-top:34px;">
                    <a class="lg-btn outline" href="#beneficio">
                        ¿Te identificas con alguna? Mira qué cambia al automatizar
                        <svg class="lg-i" aria-hidden="true" style="margin-left:8px;">
                            <use href="#i-arrow_forward" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- 03. LO QUE LOGRAS (Gráfica y beneficios) -->
        <section class="lg-section" id="beneficio">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Lo que logras</span>
                    <h2>El ritmo de salida del producto terminado ya no depende del turno</h2>
                    <p>Un sistema de paletizado autónomo mantiene el mismo desempeño durante todo el turno y entre turnos. Tu capacidad deja de variar y se vuelve predecible.</p>
                </div>

                <div class="lg-split lg-bene">
                    <!-- Gráfica -->
                    <div class="lg-chart lg-rv" id="lgChart">
                        <div class="lg-chart-t">Salida de pallets durante un turno <small>Ilustración conceptual</small></div>
                        <svg viewBox="0 0 560 290" role="img" aria-label="Gráfica conceptual comparando salida manual vs autónoma">
                            <g stroke="#e1e8ef" stroke-width="1">
                                <line x1="50" y1="40" x2="530" y2="40" />
                                <line x1="50" y1="100" x2="530" y2="100" />
                                <line x1="50" y1="160" x2="530" y2="160" />
                                <line x1="50" y1="220" x2="530" y2="220" />
                            </g>
                            <line x1="50" y1="250" x2="530" y2="250" stroke="#9fb0c0" stroke-width="2" />
                            <line x1="50" y1="20" x2="50" y2="250" stroke="#9fb0c0" stroke-width="2" />
                            <g font-size="11" fill="#6b7a88" text-anchor="middle">
                                <text x="50" y="268">Inicio</text>
                                <text x="170" y="268">2 h</text>
                                <text x="290" y="268">4 h</text>
                                <text x="410" y="268">6 h</text>
                                <text x="530" y="268">Fin</text>
                            </g>
                            <text x="14" y="140" font-size="11" fill="#6b7a88" transform="rotate(-90 14 140)" text-anchor="middle">Salida por hora</text>

                            <polygon class="lg-gap"
                                points="50,70 190,70 530,70 530,195 495,185 480,235 455,235 440,185 420,178 360,160 300,150 280,205 250,205 230,140 170,125 110,108 50,115"
                                fill="rgba(239,123,16,.16)" />

                            <polyline class="lg-draw" pathLength="1"
                                points="50,115 110,108 170,125 230,140 250,205 280,205 300,150 360,160 420,178 440,185 455,235 480,235 495,185 530,195"
                                fill="none" stroke="#7b8c9c" stroke-width="3.5" stroke-linejoin="round"
                                stroke-linecap="round" />
                            <polyline class="lg-draw d2" pathLength="1"
                                points="50,70 190,70 194,80 198,70 360,70 364,80 368,70 530,70" fill="none"
                                stroke="#ef7b10" stroke-width="4.5" stroke-linejoin="round" stroke-linecap="round" />

                            <g font-size="10.5" fill="#6b7a88" text-anchor="middle">
                                <text x="265" y="228">Descanso</text>
                                <text x="467" y="247">Cambio</text>
                            </g>
                            <text x="300" y="56" font-size="12" fill="#ef7b10" font-weight="800" text-anchor="middle">Sistema autónomo: ritmo constante</text>
                        </svg>
                        <div class="lg-legend">
                            <span><i style="background:#7b8c9c"></i>Proceso manual: varía con fatiga, descansos y rotación</span>
                            <span><i style="background:#ef7b10"></i>Sistema autónomo: ritmo estable</span>
                        </div>
                    </div>

                    <!-- Lista de Beneficios -->
                    <div class="lg-bene-list">
                        <div class="lg-bi lg-rv">
                            <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-speed" /></svg></div>
                            <div>
                                <b>Capacidad predecible</b>
                                <span>Planeas turnos y embarques con un ritmo conocido, no con estimados que cambian cada día.</span>
                            </div>
                        </div>
                        <div class="lg-bi lg-rv">
                            <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg></div>
                            <div>
                                <b>Estiba uniforme</b>
                                <span>Cada caja en su posición y cada pallet con el mismo patrón, listo para emplayar y transportar.</span>
                            </div>
                        </div>
                        <div class="lg-bi lg-rv">
                            <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-health_and_safety" /></svg></div>
                            <div>
                                <b>Personas en tareas de más valor</b>
                                <span>El equipo deja el manejo repetitivo de carga y se enfoca en supervisión, calidad y logística.</span>
                            </div>
                        </div>
                        <div class="lg-bi lg-rv">
                            <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-trending_up" /></svg></div>
                            <div>
                                <b>Escalar sin sumar personal</b>
                                <span>Para crecer en volumen, ajustas el sistema o agregas otro, en lugar de contratar por turno.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 04. CELDA EN PLANTA (Interactivo) -->
        <section class="lg-section lg-caso-sec" id="celda" style="background: linear-gradient(180deg, #16344f, #24537B);">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Cómo funciona</span>
                    <h2 style="color:#fff;">Un sistema de paletizado autónomo, vista en planta</h2>
                    <p style="color:#dbe6f0;">De la banda transportadora al pallet terminado listo para embarque. Haz clic en una etapa para ver qué ocurre y qué resuelve.</p>
                </div>

                <!-- Contenedor del SVG -->
                <div class="lg-plano lg-rv" style="background: transparent; box-shadow: none;">
                    <svg class="plano" id="lgPlano" viewBox="0 0 900 380" role="img" aria-label="Vista en planta de un sistema de paletizado">
                        <defs>
                            <pattern id="pgrid" width="36" height="36" patternUnits="userSpaceOnUse">
                                <path d="M36 0H0V36" fill="none" stroke="rgba(255,255,255,.06)" stroke-width="1" />
                            </pattern>
                            <marker id="parr" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="7" markerHeight="7" orient="auto">
                                <path d="M0 0L10 5L0 10z" fill="#ef7b10" />
                            </marker>
                        </defs>
                        <rect width="900" height="380" fill="url(#pgrid)" />

                        <!-- zona segura -->
                        <rect x="352" y="22" width="352" height="336" rx="18" fill="rgba(239,123,16,.05)" stroke="rgba(239,123,16,.55)" stroke-width="2" stroke-dasharray="9 7" />
                        <text x="528" y="44" text-anchor="middle" font-size="11" fill="#f2a55c" font-weight="800" letter-spacing="1.5">ZONA SEGURA</text>

                        <!-- ZONAS INTERACTIVAS -->
                        <g class="zona st" data-i="0" tabindex="0" role="button">
                            <rect x="14" y="166" width="330" height="40" rx="6" fill="#3a5470" />
                            <g stroke="#2a4259" stroke-width="2">
                                <line x1="50" y1="166" x2="50" y2="206" />
                                <line x1="100" y1="166" x2="100" y2="206" />
                                <line x1="150" y1="166" x2="150" y2="206" />
                                <line x1="200" y1="166" x2="200" y2="206" />
                                <line x1="250" y1="166" x2="250" y2="206" />
                                <line x1="300" y1="166" x2="300" y2="206" />
                            </g>
                            <g class="pbox"><rect x="0" y="172" width="34" height="28" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" /></g>
                            <g class="pbox b2"><rect x="0" y="172" width="34" height="28" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" /></g>
                            <g class="pbox b3"><rect x="0" y="172" width="34" height="28" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" /></g>
                            <text x="30" y="150" font-size="12" fill="#cfdeeb" font-weight="700">Entrada de producto</text>
                            <g class="hs mk" transform="translate(80,230)">
                                <circle cx="0" cy="0" r="16" /><text x="0" y="5" text-anchor="middle">1</text>
                            </g>
                        </g>

                        <g class="zona st" data-i="1" tabindex="0" role="button">
                            <rect x="292" y="120" width="26" height="30" rx="4" fill="#16344f" stroke="#5ab0ff" stroke-width="2" />
                            <circle cx="305" cy="135" r="6" fill="#5ab0ff" />
                            <path d="M305 150 L305 166" stroke="#5ab0ff" stroke-width="2" stroke-dasharray="3 3" />
                            <path d="M290 112 Q305 98 320 112" fill="none" stroke="#5ab0ff" stroke-width="2" />
                            <rect x="326" y="124" width="40" height="18" rx="9" fill="#ef7b10" />
                            <text x="346" y="137" text-anchor="middle" font-size="10" font-weight="800" fill="#fff">RFID</text>
                            <text x="305" y="92" text-anchor="middle" font-size="12" fill="#cfdeeb" font-weight="700">Identificación</text>
                            <g class="hs mk" transform="translate(305,240)">
                                <circle cx="0" cy="0" r="16" /><text x="0" y="5" text-anchor="middle">2</text>
                            </g>
                        </g>

                        <g class="zona st" data-i="2" tabindex="0" role="button">
                            <circle cx="478" cy="186" r="118" fill="rgba(255,255,255,.03)" stroke="rgba(255,255,255,.22)" stroke-dasharray="4 6" />
                            <circle cx="478" cy="186" r="30" fill="#3a5470" stroke="#ef7b10" stroke-width="3" />
                            <circle cx="478" cy="186" r="11" fill="#ef7b10" />
                            <g class="parm">
                                <line x1="478" y1="186" x2="440" y2="140" stroke="#ef7b10" stroke-width="12" stroke-linecap="round" />
                                <line x1="440" y1="140" x2="388" y2="168" stroke="#fff" stroke-width="9" stroke-linecap="round" />
                                <rect x="368" y="158" width="28" height="22" rx="3" fill="#d9a066" stroke="#b07a3f" stroke-width="2" />
                            </g>
                            <text x="478" y="332" text-anchor="middle" font-size="12" fill="#cfdeeb" font-weight="700">Robot de paletizado</text>
                            <g class="hs mk" transform="translate(478,282)">
                                <circle cx="0" cy="0" r="16" /><text x="0" y="5" text-anchor="middle">3</text>
                            </g>
                        </g>

                        <g class="zona st" data-i="3" tabindex="0" role="button">
                            <rect x="590" y="46" width="108" height="92" rx="4" fill="#b98a55" opacity=".9" />
                            <g fill="#d9a066" stroke="#b07a3f" stroke-width="1.5">
                                <rect x="598" y="54" width="28" height="24" />
                                <rect x="630" y="54" width="28" height="24" />
                                <rect x="662" y="54" width="28" height="24" />
                                <rect x="598" y="82" width="28" height="24" />
                                <rect x="630" y="82" width="28" height="24" />
                            </g>
                            <rect x="590" y="236" width="108" height="92" rx="4" fill="#b98a55" opacity=".55" stroke="#ef7b10" stroke-dasharray="5 4" />
                            <text x="644" y="162" text-anchor="middle" font-size="11" fill="#cfdeeb" font-weight="700">A: llenando</text>
                            <text x="644" y="228" text-anchor="middle" font-size="11" fill="#cfdeeb" font-weight="700">B: pallet vacío</text>
                            <g class="hs mk" transform="translate(644,192)">
                                <circle cx="0" cy="0" r="16" /><text x="0" y="5" text-anchor="middle">4</text>
                            </g>
                        </g>

                        <g class="zona st" data-i="4" tabindex="0" role="button">
                            <rect x="730" y="46" width="14" height="282" rx="3" fill="#3a5470" />
                            <path d="M700 92 L810 92 L810 186 L880 186" fill="none" stroke="#ef7b10" stroke-width="3" stroke-dasharray="8 7" marker-end="url(#parr)" class="flow" />
                            <path d="M700 282 L810 282 L810 196" fill="none" stroke="rgba(239,123,16,.5)" stroke-width="3" stroke-dasharray="8 7" class="flow" />
                            <text x="820" y="170" text-anchor="middle" font-size="12" fill="#cfdeeb" font-weight="700">Salida</text>
                            <g class="hs mk" transform="translate(850,280)">
                                <circle cx="0" cy="0" r="16" /><text x="0" y="5" text-anchor="middle">5</text>
                            </g>
                        </g>
                    </svg>
                </div>

                <!-- Tabs -->
                <div class="lg-tabs lg-rv" id="lgTabs">
                    <button type="button" class="lg-tab on" data-i="0"><svg class="lg-i" aria-hidden="true"><use href="#i-move_to_inbox" /></svg>Entrada</button>
                    <button type="button" class="lg-tab" data-i="1"><svg class="lg-i" aria-hidden="true"><use href="#i-sensors" /></svg>Detección</button>
                    <button type="button" class="lg-tab" data-i="2"><svg class="lg-i" aria-hidden="true"><use href="#i-precision_manufacturing" /></svg>Robot</button>
                    <button type="button" class="lg-tab" data-i="3"><svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg>Pallets</button>
                    <button type="button" class="lg-tab" data-i="4"><svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping" /></svg>Salida</button>
                </div>

                <!-- Caja de detalles -->
                <div class="lg-detalle lg-rv" id="lgDetalle" aria-live="polite">
                    <div class="quien">
                        <div class="ico">
                            <svg class="lg-i" aria-hidden="true"><use id="dIco" href="#i-move_to_inbox" /></svg>
                        </div>
                        <div>
                            <small id="dNum">ETAPA 01</small>
                            <h3 id="dTit">Entrada de producto</h3>
                            <div class="techs" id="dTech"></div>
                        </div>
                    </div>
                    <div class="que">
                        <p id="dDesc"></p>
                        <ul id="dList"></ul>
                    </div>
                    <div class="acc">
                        <a class="lg-btn outline" href="#analiza" style="width:100%; text-align:center;">Cotizar esta solución</a>
                    </div>
                </div>

                <p class="lg-plan-note" style="color:#cfdeeb; text-align:center; font-size:.85rem; margin-top:20px;">
                    La zona segura se define con un análisis de riesgos: barreras físicas, escáneres o cortinas de luz.
                </p>
            </div>
        </section>
        
        <!-- 05. TIPOS DE SOLUCION -->
        <section class="lg-section alt" id="tipos">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Tipos de solución</span>
                    <h2>Distintas formas de paletizar, según tu operación</h2>
                    <p>La tecnología correcta depende del peso del producto, la cadencia que necesitas, la variedad de SKUs y el espacio disponible.</p>
                </div>
                <div class="lg-tipos">
                    <!-- Robot paralelo -->
                    <div class="lg-tipo lg-rv">
                        <div class="pic">
                            <svg viewBox="0 0 160 100" aria-hidden="true">
                                <rect x="38" y="8" width="84" height="8" rx="3" fill="#24537B" />
                                <g stroke="#ef7b10" stroke-width="3.5" stroke-linecap="round">
                                    <line x1="52" y1="16" x2="68" y2="56" />
                                    <line x1="80" y1="16" x2="80" y2="56" />
                                    <line x1="108" y1="16" x2="92" y2="56" />
                                </g>
                                <rect x="62" y="56" width="36" height="7" rx="3" fill="#24537B" />
                                <rect x="76" y="63" width="8" height="8" fill="#24537B" />
                                <rect x="66" y="71" width="28" height="5" rx="2" fill="#24537B" />
                                <rect x="68" y="78" width="24" height="15" rx="2" fill="#d9a066" stroke="#b07a3f" stroke-width="1.5" />
                                <rect x="30" y="94" width="100" height="3" fill="#9fb0c0" />
                            </svg>
                        </div>
                        <h3>Robot paralelo de alta velocidad</h3>
                        <p>Para cadencias altas. Mueve desde producto ligero hasta cajas de varias decenas de kilos en versiones de carga pesada.</p>
                        <div class="meters">
                            <div><span>Velocidad</span><i class="m5"></i></div>
                            <div><span>Flexibilidad</span><i class="m3"></i></div>
                            <div><span>Compacidad</span><i class="m4"></i></div>
                        </div>
                        <small>Carga útil de referencia: de 3 a 60 kg</small>
                    </div>

                    <!-- Robot 6 ejes -->
                    <div class="lg-tipo lg-rv">
                        <div class="pic">
                            <svg viewBox="0 0 160 100" aria-hidden="true">
                                <rect x="40" y="82" width="46" height="11" rx="3" fill="#24537B" />
                                <rect x="55" y="66" width="16" height="16" fill="#24537B" />
                                <line x1="63" y1="66" x2="52" y2="36" stroke="#ef7b10" stroke-width="10" stroke-linecap="round" />
                                <circle cx="52" cy="36" r="6" fill="#fff" stroke="#24537B" stroke-width="3" />
                                <line x1="52" y1="36" x2="98" y2="28" stroke="#24537B" stroke-width="8" stroke-linecap="round" />
                                <line x1="98" y1="28" x2="108" y2="46" stroke="#24537B" stroke-width="5" stroke-linecap="round" />
                                <rect x="99" y="46" width="20" height="5" rx="2" fill="#24537B" />
                                <rect x="101" y="53" width="16" height="14" rx="2" fill="#d9a066" stroke="#b07a3f" stroke-width="1.5" />
                                <rect x="26" y="94" width="108" height="3" fill="#9fb0c0" />
                            </svg>
                        </div>
                        <h3>Robot articulado de 6 ejes</h3>
                        <p>Gran flexibilidad de orientación y alcance. Se adapta a distintos formatos con pocos ajustes y soporta ambientes exigentes.</p>
                        <div class="meters">
                            <div><span>Velocidad</span><i class="m3"></i></div>
                            <div><span>Flexibilidad</span><i class="m5"></i></div>
                            <div><span>Compacidad</span><i class="m4"></i></div>
                        </div>
                        <small>Carga útil de referencia: de 3 a 7 kg, protección IP54</small>
                    </div>

                    <!-- Robot SCARA -->
                    <div class="lg-tipo lg-rv">
                        <div class="pic">
                            <svg viewBox="0 0 160 100" aria-hidden="true">
                                <rect x="28" y="90" width="44" height="6" rx="2" fill="#24537B" />
                                <rect x="42" y="30" width="14" height="60" rx="3" fill="#24537B" />
                                <rect x="42" y="24" width="52" height="11" rx="5.5" fill="#ef7b10" />
                                <rect x="84" y="24" width="46" height="11" rx="5.5" fill="#24537B" />
                                <rect x="121" y="35" width="5" height="34" fill="#24537B" />
                                <rect x="113" y="69" width="21" height="5" rx="2" fill="#24537B" />
                                <rect x="115" y="76" width="17" height="14" rx="2" fill="#d9a066" stroke="#b07a3f" stroke-width="1.5" />
                                <rect x="26" y="96" width="108" height="2" fill="#9fb0c0" />
                            </svg>
                        </div>
                        <h3>Robot SCARA</h3>
                        <p>Rápido y compacto para tomar y colocar producto ligero, agrupar y encajar antes del paletizado.</p>
                        <div class="meters">
                            <div><span>Velocidad</span><i class="m4"></i></div>
                            <div><span>Flexibilidad</span><i class="m3"></i></div>
                            <div><span>Compacidad</span><i class="m5"></i></div>
                        </div>
                        <small>Carga útil de referencia: de 0,5 a 10 kg</small>
                    </div>

                    <!-- Robot de paletización -->
                    <div class="lg-tipo lg-rv">
                        <div class="pic">
                            <svg viewBox="0 0 160 100" aria-hidden="true">
                                <rect x="30" y="80" width="46" height="12" rx="3" fill="#24537B" />
                                <rect x="46" y="44" width="14" height="36" fill="#24537B" />
                                <line x1="53" y1="46" x2="88" y2="24" stroke="#ef7b10" stroke-width="9" stroke-linecap="round" />
                                <line x1="88" y1="24" x2="124" y2="38" stroke="#24537B" stroke-width="7" stroke-linecap="round" />
                                <line x1="124" y1="38" x2="124" y2="54" stroke="#24537B" stroke-width="4" />
                                <rect x="110" y="54" width="30" height="5" rx="2" fill="#24537B" />
                                <rect x="112" y="60" width="26" height="18" rx="2" fill="#d9a066" stroke="#b07a3f" stroke-width="1.5" />
                                <rect x="100" y="86" width="52" height="6" rx="2" fill="#b98a55" />
                                <rect x="26" y="93" width="128" height="3" fill="#9fb0c0" />
                            </svg>
                        </div>
                        <h3>Robot de paletización</h3>
                        <p>Pensado para armar el pallet completo, con patrón de estiba por SKU y altura según el tipo de pallet.</p>
                        <div class="meters">
                            <div><span>Velocidad</span><i class="m3"></i></div>
                            <div><span>Flexibilidad</span><i class="m4"></i></div>
                            <div><span>Compacidad</span><i class="m3"></i></div>
                        </div>
                        <small>Capacidad según el producto y la altura de estiba</small>
                    </div>
                </div>

                <p class="lg-plan-note" style="color: black !important; text-align:center; font-size:.85rem; margin-top:20px;">
                    Valores orientativos para comparar enfoques. La selección final depende de tu aplicación y se confirma con un especialista.
                </p>
            </div>
        </section>
        
        <!-- 06. APLICACIONES -->
        <section class="lg-section">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">APLICACIONES</span>
                    <h2>Donde el paletizado automático ya hace la diferencia</h2>
                </div>
                <div class="lg-retos">
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-utensils" /></svg></div>
                        <div class="t">
                            <b>Alimentos y bebidas</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Cajas, charolas y bultos con alta rotación y cambios frecuentes de presentación.</p>
                        </div>
                    </div>
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-health_and_safety" /></svg></div>
                        <div class="t">
                            <b>Farmacéutica y salud</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Estiba consistente y manejo cuidadoso de producto con requisitos de calidad.</p>
                        </div>
                    </div>
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-flask" /></svg></div>
                        <div class="t">
                            <b>Química y consumo</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Cajas y bultos pesados que desgastan al personal en el manejo manual.</p>
                        </div>
                    </div>
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-cart" /></svg></div>
                        <div class="t">
                            <b>CEDIS y e-commerce</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Pallets mixtos por pedido, con muchos SKUs y picos de temporada.</p>
                        </div>
                    </div>
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-memory" /></svg></div>
                        <div class="t">
                            <b>Automotriz y electrónica</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Cajas y contenedores con requisitos de orden, trazabilidad y entrega a tiempo.</p>
                        </div>
                    </div>
                    
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-warehouse" /></svg></div>
                        <div class="t">
                            <b>Manufactura general</b>
                            <p style="margin: 5px 0 0; font-size: 0.9em; line-height: 1.4;">Cualquier planta donde el final de la línea limita lo que se puede entregar.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 07. SOLUCIÓN A LA MEDIDA -->
        <section class="lg-section alt" id="incluye">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Solución a la medida</span>
                    <h2>Qué puede incluir y qué necesitamos para dimensionarlo</h2>
                    <p>Cada solución se diseña de forma personalizada según la necesidad del cliente. Con unos pocos datos, un especialista puede orientarte.</p>
                </div>
                <div class="lg-duo">
                    <div class="lg-box lg-rv">
                        <h3><svg class="lg-i" aria-hidden="true"><use href="#i-settings"/></svg>Qué puede incluir tu sistema</h3>
                        <ul class="lg-checks">
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Robot con herramienta de toma adecuada al producto</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Transportadores y zona de acumulación</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Sensores o visión 2D y 3D para detectar y posicionar</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Estaciones de pallet con reposición continua</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Seguridad perimetral según análisis de riesgos</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Programación de patrones de estiba por SKU</li>
                        </ul>
                    </div>
                    <div class="lg-box dark lg-rv">
                        <h3><svg class="lg-i" aria-hidden="true"><use href="#i-clipboard"/></svg>Datos para dimensionar</h3>
                        <ul class="lg-checks">
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Tipo de producto: caja, bolsa, bulto o charola</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Dimensiones y peso por unidad</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Cajas por minuto o pallets por hora requeridos</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Número de SKUs y patrones de estiba</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Tipo de pallet y altura máxima</li>
                            <li><svg class="lg-i" aria-hidden="true"><use href="#i-check_circle"/></svg>Espacio disponible y siguiente etapa (emplayado, embarque)</li>
                        </ul>
                        <a class="lg-btn primary" href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20quiero%20dimensionar%20un%20sistema%20de%20paletizado%20autom%C3%A1tico" target="_blank" rel="noopener">Enviar mis datos por WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 08. SIGUE EXPLORANDO -->
        <section class="lg-section">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Sigue explorando</span>
                    <h2>Conecta el paletizado con el resto de tu operación</h2>
                </div>
                <div class="lg-rel lg-rv">
                    <a href="https://www.logicbus.com.mx/emplayado-automatico"><svg class="lg-i" aria-hidden="true"><use href="#i-layers"/></svg>Emplayado automático</a>
                    <a href="https://www.logicbus.com.mx/carga-automatizada-de-trailers"><svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping"/></svg>Carga de trailers</a>
                    <a href="https://www.logicbus.com.mx/montacargas-autonomos"><svg class="lg-i" aria-hidden="true"><use href="#i-forklift"/></svg>Montacargas autónomos</a>
                    <a href="https://www.logicbus.com.mx/localizar-activos"><svg class="lg-i" aria-hidden="true"><use href="#i-location_on"/></svg>Trackeo de inventario y activos</a>
                    <a href="https://www.logicbus.com.mx/logistica-y-almacenes/"><svg class="lg-i" aria-hidden="true"><use href="#i-arrow_back"/></svg>Ver todas las soluciones</a>
                </div>
            </div>
        </section>
        
       <!-- 11. FAQ -->
        <section class="lg-section alt">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Preguntas frecuentes</span>
                    <h2>Lo que suelen preguntar los especialistas en logística</h2>
                </div>
                <div class="lg-faq lg-rv">
                    <details open>
                        <summary>¿Qué tipo de robot conviene para mi aplicación?</summary>
                        <p>Los robots paralelos destacan en alta velocidad y, en versiones de carga pesada, mueven cajas de varias decenas de kilos. Los de 6 ejes aportan flexibilidad de orientación y alcance, y los SCARA son rápidos y compactos para producto ligero. La elección depende del peso, la cadencia, el patrón de estiba y el espacio, y un especialista te ayuda a definirla.</p>
                    </details>
                    <details>
                        <summary>¿Puede manejar distintos tamaños de caja, SKUs y tipos de pallet?</summary>
                        <p>Sí. Los patrones de estiba se programan por producto y se cambian por receta, incluso con varios formatos en el mismo sistema. Para pallets mixtos por pedido, la solución considera el orden de llegada y la estabilidad de la carga.</p>
                    </details>
                    <details>
                        <summary>¿Qué pasa cuando cambio de producto o de presentación?</summary>
                        <p>Se selecciona la receta correspondiente: dimensiones, patrón de estiba y altura. Según el producto, la herramienta de toma puede requerir un ajuste o cambio, que se define durante el diseño de la celda.</p>
                    </details>
                    <details>
                        <summary>¿Puede conectarse con mi línea de producción y con la siguiente etapa del proceso?</summary>
                        <p>La solución se diseña de forma personalizada según tu necesidad, considerando cómo recibe el producto y cómo entrega el pallet terminado a la siguiente etapa, como emplayado o embarque. Un especialista te explica los alcances de tu caso.</p>
                    </details>
                    <details>
                        <summary>¿Qué seguridad requiere el sistema?</summary>
                        <p>Se define con un análisis de riesgos de la aplicación. Puede incluir barreras, escáneres de área, cortinas de luz y accesos controlados para reposición de pallets sin detener toda la operación.</p>
                    </details>
                    <details>
                        <summary>¿Qué necesito para empezar?</summary>
                        <p>Con el tipo de producto, sus dimensiones y peso, la producción requerida, el tipo de pallet y el espacio disponible, un especialista de Logicbus puede orientarte sobre el tipo de sistema y los siguientes pasos. Si no tienes todos los datos, también te ayudamos a levantarlos.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- 10. CONVERSION FINAL -->
        <section class="lg-section lg-final" id="analiza">
            <div class="lg-wrap">
                <div class="grid">
                    <div class="lg-rv">
                        <span class="lg-eyebrow">Hablemos</span>
                        <h2>¿Quieres platicar tu <span>proyecto?</span></h2>
                        <p>Si tu operación ya necesita escalar, cuéntanos dónde está hoy el límite y un especialista te ayuda a identificar por dónde empezar.</p>
                        <div class="lg-contact">
                            <!-- 1. WhatsApp de ventas -->
                            <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" target="_blank">
                                <svg class="lg-i" aria-hidden="true"><use href="#i-chat" /></svg>
                                <span>WhatsApp ventas<small>+52 55 5431 6718</small></span>
                            </a>

                            <!-- 2. Agendar cita con un especialista -->
                            <a href="https://logicbus.odoo.com/appointment/7?invite_token=7ec9905e-5627-491d-8b2f-7884e99b5227&filter_appointment_type_ids=%5B7%5D&" target="_blank">
                                <svg class="lg-i" aria-hidden="true"><use href="#i-call" /></svg>
                                <span>Agendar una cita<small>Reserva un espacio con un especialista</small></span>
                            </a>

                            <!-- 3. Habla con un especialista (Teléfono) -->
                            <a href="tel:+523338545975">
                                <svg class="lg-i" aria-hidden="true"><use href="#i-chat" /></svg>
                                <span>Habla con un especialista<small>+52 33 3854 5975</small></span>
                            </a>
                        </div>
                    </div>
                    <div class="lg-form-box lg-rv">
                        <h3>Déjanos tus datos</h3>
                        <div class="fgrid">
                            <input class="lg-input" id="f-nombre" placeholder="Nombre completo">
                            <input class="lg-input" id="f-empresa" placeholder="Empresa">
                            <input class="lg-input" id="f-correo" type="email" placeholder="Correo electrónico">
                            <input class="lg-input" id="f-tel" type="tel" placeholder="Teléfono" maxlength="15">
                            <input class="lg-input" id="f-pais" placeholder="País">
                            <select class="lg-select" id="f-proceso">
                                <option value="">¿Qué quieres automatizar?</option>
                                <option value="Paletizado">Paletizado</option>
                                <option value="Carga_Trailers">Carga y descarga de trailers</option>
                                <option value="AMR_AGV">Transporte interno (AMR / AGV)</option>
                                <option value="Emplayado">Emplayado</option>
                                <option value="Inventario">Inventario</option>
                                <option value="RFID">RFID</option>
                                <option value="RTLS">RTLS</option>
                                <option value="Otro">Otro proceso</option>
                            </select>
                            <textarea class="lg-textarea full" id="f-desc" rows="3" placeholder="Describe brevemente tu aplicación"></textarea>
                        </div>
                        <button class="lg-btn primary lg-submit" style="margin-top:18px;" onclick="lgEnviar('f')">Quiero que me contacten</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- JS de la Landing -->
    <script>
        /* 1. Aparición suave al hacer scroll (.lg-rv) */
        (function () {
            var els = document.querySelectorAll(".lg-rv");
            if (!("IntersectionObserver" in window)) {els.forEach(function (e) {e.classList.add("in");}); return;}
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (en) {if (en.isIntersecting) {en.target.classList.add("in"); io.unobserve(en.target);} });
            }, {threshold: 0.12});
            els.forEach(function (e) {io.observe(e);});
        })();

        /* 2. Motor de animación del Robot en el Hero */
        (function () {
            var svg = document.getElementById("cellSvg");
            if (!svg) {return;}
            var NS = "http://www.w3.org/2000/svg";
            var $ = function (id) {return svg.querySelector("#" + id);};
            var a1 = $("a1"), a2 = $("a2"), joint = $("joint"), hand = $("hand"), carry = $("carry"), cbox = $("cbox"), stack = $("stack"), cnt = $("cnt");
            var flash = document.getElementById("cellFlash");
            var S = {x: 330, y: 262}, L = 125, BW = 40, BH = 28, TOTAL = 12;
            var PICK = {x: 205, y: 234};
            var PX = 480, DECK = 306;
            var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            function slot(k) {
                var layer = Math.floor(k / 3), col = k % 3;
                return {x: PX + (col - 1) * (BW + 4), y: DECK - BH / 2 - layer * BH};
            }

            var placed = [];
            for (var i = 0; i < TOTAL; i++) {
                var r = document.createElementNS(NS, "rect");
                var s = slot(i);
                r.setAttribute("x", s.x - BW / 2); r.setAttribute("y", s.y - BH / 2);
                r.setAttribute("width", BW); r.setAttribute("height", BH); r.setAttribute("rx", 3);
                r.setAttribute("fill", Math.floor(i / 3) % 2 ? "#e0aa6f" : "#d9a066");
                r.setAttribute("stroke", "#b07a3f"); r.setAttribute("stroke-width", 2);
                r.style.display = "none";
                stack.appendChild(r); placed.push(r);
            }

            function setArm(wx, wy) {
                var dx = wx - S.x, dy = wy - S.y, d = Math.max(1, Math.hypot(dx, dy));
                d = Math.min(d, 2 * L - 2);
                var ux = dx / d, uy = dy / d;
                var h = Math.sqrt(Math.max(0, L * L - (d / 2) * (d / 2)));
                var nR = {x: uy, y: -ux}, nL = {x: -uy, y: ux};
                var w = Math.max(0, Math.min(1, (dx + 25) / 50));
                w = w * w * (3 - 2 * w);
                var nx = nL.x * (1 - w) + nR.x * w, ny = nL.y * (1 - w) + nR.y * w;
                var ex = S.x + dx / 2 + nx * h, ey = S.y + dy / 2 + ny * h;
                a1.setAttribute("x2", ex); a1.setAttribute("y2", ey);
                a2.setAttribute("x1", ex); a2.setAttribute("y1", ey); a2.setAttribute("x2", wx); a2.setAttribute("y2", wy);
                joint.setAttribute("cx", ex); joint.setAttribute("cy", ey);
                hand.setAttribute("transform", "translate(" + wx + "," + wy + ")");
                carry.setAttribute("transform", "translate(" + wx + "," + (wy + 12 + 8 + BH / 2) + ")");
            }
            var ease = function (t) {return t * t * (3 - 2 * t);};
            function along(pts, u) {
                u = ease(Math.max(0, Math.min(1, u)));
                var lens = [], tot = 0, i;
                for (i = 1; i < pts.length; i++) {var l = Math.hypot(pts[i].x - pts[i - 1].x, pts[i].y - pts[i - 1].y); lens.push(l); tot += l;}
                var t = u * tot;
                for (i = 0; i < lens.length; i++) {
                    if (t <= lens[i] || i === lens.length - 1) {
                        var f = lens[i] ? Math.min(1, t / lens[i]) : 1;
                        return {x: pts[i].x + (pts[i + 1].x - pts[i].x) * f, y: pts[i].y + (pts[i + 1].y - pts[i].y) * f};
                    }
                    t -= lens[i];
                }
                return pts[pts.length - 1];
            }
            var PW = {x: PICK.x, y: PICK.y - 34};
            var T_GRAB = 0.25, T_CARRY = 1.0, T_REL = 0.2, T_BACK = 0.8, CYCLE = T_GRAB + T_CARRY + T_REL + T_BACK;
            var count = 0, tcycle = 0, last = null, hold = 0;

            function showCount() {cnt.textContent = "Pallet: " + count + " de " + TOTAL + " cajas";}

            function frame(now) {
                if (last === null) {last = now;}
                var dt = Math.min(0.05, (now - last) / 1000); last = now;

                if (hold > 0) {
                    hold -= dt;
                    if (hold <= 0) {
                        flash.classList.remove("on");
                        placed.forEach(function (r) {r.style.display = "none";});
                        count = 0; showCount(); tcycle = 0; cbox.style.display = "";
                    }
                    requestAnimationFrame(frame); return;
                }
                tcycle += dt;
                var tgt = slot(count);
                var up = {x: tgt.x, y: tgt.y - 34 - 46}, place = {x: tgt.x, y: tgt.y - 34};
                var t = tcycle, pos;
                if (t < T_GRAB) {
                    pos = PW; carry.style.display = "none"; cbox.style.display = "";
                    cbox.setAttribute("transform", "translate(" + PICK.x + "," + PICK.y + ")");
                } else if (t < T_GRAB + T_CARRY) {
                    var u = (t - T_GRAB) / T_CARRY;
                    pos = along([PW, {x: 262, y: 120}, up, place], u);
                    carry.style.display = "";
                } else if (t < T_GRAB + T_CARRY + T_REL) {
                    pos = place; carry.style.display = "none";
                    placed[count].style.display = "";
                    if (!placed[count]._on) {placed[count]._on = true;}
                } else {
                    var ub = (t - T_GRAB - T_CARRY - T_REL) / T_BACK;
                    pos = along([place, up, {x: 262, y: 120}, PW], ub);
                    carry.style.display = "none";
                }
                if (t >= T_GRAB && count < TOTAL - 1) {
                    var un = (t - T_GRAB) / (CYCLE - T_GRAB);
                    cbox.style.display = "";
                    cbox.setAttribute("transform", "translate(" + (36 + (PICK.x - 36) * (1 - Math.pow(1 - Math.min(1, un), 2))) + "," + PICK.y + ")");
                } else if (t >= T_GRAB) {cbox.style.display = "none";}

                setArm(pos.x, pos.y);

                if (tcycle >= CYCLE) {
                    placed[count]._on = false;
                    count++; tcycle = 0; showCount();
                    if (count >= TOTAL) {flash.classList.add("on"); hold = 2.2; cbox.style.display = "none";}
                    else {cbox.style.display = "";}
                }
                requestAnimationFrame(frame);
            }
            showCount();
            cbox.setAttribute("transform", "translate(" + PICK.x + "," + PICK.y + ")");
            setArm(PW.x, PW.y);

            if (!reduce) {
                requestAnimationFrame(frame);
            }
        })();

        /* 3. Lógica del Mapa Interactivo (Paletizado) usando el motor de la Landing Base */
        (function () {
            var plano = document.getElementById("lgPlano");
            if (!plano) {return;}

            var ETAPAS = [
                {ico: "move_to_inbox", tit: "Entrada de producto", techs: ["Conveyors", "Sensores"], desc: "El producto llega desde la línea de producción. Se posiciona en un punto de toma constante.", pts: ["Punto de toma repetible", "Absorbe variaciones de línea"]},
                {ico: "sensors", tit: "Detección e identificación", techs: ["Visión", "RFID"], desc: "Sensores confirman que el producto está orientado. La identificación RFID registra el inventario.", pts: ["Menos paros por mala orientación", "Control de inventario de salida"]},
                {ico: "precision_manufacturing", tit: "Toma y colocación", techs: ["Robots", "Grippers"], desc: "El robot toma el producto y lo coloca según el patrón de estiba programado.", pts: ["Estiba perfecta pallet tras pallet", "Ritmo estable en turnos continuos"]},
                {ico: "layers", tit: "Estaciones de pallet", techs: ["Estaciones dobles"], desc: "Mientras una estación se llena, la otra se retira y se repone con un pallet vacío.", pts: ["Operación continua sin paros", "Altura y patrón según receta"]},
                {ico: "local_shipping", tit: "Salida a siguiente etapa", techs: ["Embarque", "AMR"], desc: "El pallet terminado sale por una banda o es recolectado por un AMR.", pts: ["Conexión con emplayado", "Entrega a almacén o andén"]}
            ];

            var zonas = plano.querySelectorAll(".zona"), tabs = document.querySelectorAll(".lg-tab");
            var btn = document.getElementById("lgPlay"), det = document.getElementById("lgDetalle");
            var active = -1, auto = true, dwell = 0, last = null, visible = false;

            function setActive(i) {
                active = i;
                for (var k = 0; k < zonas.length; k++) {
                    zonas[k].classList.toggle("on", k === i);
                    tabs[k].classList.toggle("on", k === i);
                }
                var e = ETAPAS[i];
                document.getElementById("dIco").setAttribute("href", "#i-" + e.ico);
                document.getElementById("dNum").textContent = "ETAPA 0" + (i + 1);
                document.getElementById("dTit").textContent = e.tit;
                document.getElementById("dTech").innerHTML = e.techs.map(function (t) {return "<span>" + t + "</span>";}).join("");
                document.getElementById("dDesc").textContent = e.desc;
                document.getElementById("dList").innerHTML = e.pts.map(function (t) {return "<li><svg class='lg-i'><use href='#i-check_circle'/></svg>" + t + "</li>";}).join("");

                det.classList.remove("cambia"); void det.offsetWidth; det.classList.add("cambia");
            }

            function setAuto(v) {
                auto = v; dwell = 0;
                if (btn) {
                    btn.textContent = v ? "Pausar recorrido" : "Reanudar recorrido";
                    btn.setAttribute("aria-pressed", v ? "true" : "false");
                }
            }

            function go(i) {setActive(i); setAuto(false);}

            zonas.forEach(function (z) {
                z.addEventListener("click", function () {go(+z.getAttribute("data-i"));});
                z.addEventListener("keydown", function (e) {if (e.key === "Enter" || e.key === " ") {e.preventDefault(); go(+z.getAttribute("data-i"));} });
            });

            tabs.forEach(function (t) {
                t.addEventListener("click", function () {go(+t.getAttribute("data-i"));});
                t.addEventListener("keydown", function (e) {if (e.key === "Enter" || e.key === " ") {e.preventDefault(); go(+t.getAttribute("data-i"));} });
            });

            if (btn) {
                btn.addEventListener("click", function () {setAuto(!auto);});
            }

            function frame(t) {
                window.requestAnimationFrame(frame);
                if (last === null) last = t;
                var dt = Math.min(t - last, 50) / 1000; last = t;

                if (!visible || !auto) return;

                dwell += dt;
                if (dwell > 4.5) {
                    dwell = 0;
                    setActive((active + 1) % ETAPAS.length);
                }
            }

            setActive(0);
            if ("IntersectionObserver" in window) {
                new IntersectionObserver(function (en) {visible = en[0].isIntersecting;}, {threshold: 0.3}).observe(plano);
            } else {visible = true;}

            window.requestAnimationFrame(frame);
        })();
    </script>

    <!-- REQUIRES FINALES DE ODOO/PHP (Tu footer nativo) -->
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $var_footer; ?>
</body>

</html>