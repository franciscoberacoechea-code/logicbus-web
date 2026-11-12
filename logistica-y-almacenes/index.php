<?php 
require("../admin/config.php"); 
include("../libreria/libreria.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Automatización para Logística y Almacenes | Logicbus</title>
    <meta name="description" content="Automatiza tu operación logística para escalar: paletizado, montacargas autónomos, carga de trailers, emplayado y trazabilidad.">

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

    <!-- Archivo CSS -->
    <link rel="stylesheet" href="https://www.logicbus.com.mx/libreria/logistica-y-almacenes.css">
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("../libreria/header.view.php"); ?>

    <!-- Sprites SVG Ocultos -->
    <svg width="0" height="0" style="position:absolute;overflow:hidden" aria-hidden="true" focusable="false">
        <symbol id="i-speed" viewBox="0 0 24 24">
            <path d="M12 14l4-4" />
            <path d="M3.34 19a10 10 0 1 1 17.32 0" />
        </symbol>
        <symbol id="i-health_and_safety" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <path d="M12 8v6M9 11h6" />
        </symbol>
        <symbol id="i-visibility" viewBox="0 0 24 24">
            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z" />
            <circle cx="12" cy="12" r="3" />
        </symbol>
        <symbol id="i-savings" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
            <path d="M12 18V6" />
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
        <symbol id="i-inventory_2" viewBox="0 0 24 24">
            <path d="M16.5 9.4 7.5 4.21" />
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
            <path d="M3.27 6.96 12 12.01l8.73-5.05" />
            <path d="M12 22.08V12" />
        </symbol>
        <symbol id="i-local_shipping" viewBox="0 0 24 24">
            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
            <path d="M15 18H9" />
            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
            <circle cx="17" cy="18" r="2" />
            <circle cx="7" cy="18" r="2" />
        </symbol>
        <symbol id="i-location_searching" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="M22 12h-4M6 12H2M12 6V2M12 22v-4" />
        </symbol>
        <symbol id="i-query_stats" viewBox="0 0 24 24">
            <path d="M3 3v16a2 2 0 0 0 2 2h16" />
            <path d="m19 9-5 5-4-4-3 3" />
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
        <symbol id="i-forklift" viewBox="0 0 24 24">
            <path d="M3 16V8h7l2 4v4" />
            <path d="M15 3v14" />
            <path d="M15 17h6" />
            <circle cx="6" cy="18.5" r="1.8" />
            <circle cx="11.5" cy="18.5" r="1.8" />
        </symbol>
        <symbol id="i-layers" viewBox="0 0 24 24">
            <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" />
            <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" />
            <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65" />
        </symbol>
        <symbol id="i-location_on" viewBox="0 0 24 24">
            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" />
            <circle cx="12" cy="10" r="3" />
        </symbol>
        <symbol id="i-arrow_forward" viewBox="0 0 24 24">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
        </symbol>
        <symbol id="i-arrow_back" viewBox="0 0 24 24">
            <path d="M19 12H5" />
            <path d="m12 19-7-7 7-7" />
        </symbol>
        <symbol id="i-support_agent" viewBox="0 0 24 24">
            <path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3" />
        </symbol>
        <symbol id="i-check_circle" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="m9 12 2 2 4-4" />
        </symbol>
        <symbol id="i-sensors" viewBox="0 0 24 24">
            <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9" />
            <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5" />
            <circle cx="12" cy="12" r="2" />
            <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5" />
            <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19" />
        </symbol>
        <symbol id="i-contactless" viewBox="0 0 24 24">
            <path d="M6 8.5a5 5 0 0 1 0 7" />
            <path d="M10 5.5a9 9 0 0 1 0 13" />
            <path d="M14 2.5a13 13 0 0 1 0 19" />
        </symbol>
        <symbol id="i-settings" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <circle cx="12" cy="12" r="7" />
            <path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M5 19l2-2M17 7l2-2" />
        </symbol>
        <symbol id="i-monitoring" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
        </symbol>
        <symbol id="i-chat" viewBox="0 0 24 24">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
        </symbol>
        <symbol id="i-search" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        </symbol>
        <symbol id="i-compare_arrows" viewBox="0 0 24 24">
            <path d="M8 3 4 7l4 4" />
            <path d="M4 7h16" />
            <path d="m16 21 4-4-4-4" />
            <path d="M20 17H4" />
        </symbol>
        <symbol id="i-memory" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="2" />
            <rect x="9" y="9" width="6" height="6" />
            <path d="M15 2v2M15 20v2M2 15h2M2 9h2M20 15h2M20 9h2M9 2v2M9 20v2" />
        </symbol>
        <symbol id="i-rocket_launch" viewBox="0 0 24 24">
            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" />
            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
        </symbol>
        <symbol id="i-move_to_inbox" viewBox="0 0 24 24">
            <path d="M22 12h-6l-2 3h-4l-2-3H2" />
            <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
        </symbol>
        <symbol id="i-warehouse" viewBox="0 0 24 24">
            <path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z" />
            <path d="M6 18h12" />
            <path d="M6 14h12" />
            <rect width="12" height="12" x="6" y="10" />
        </symbol>
        <symbol id="i-event" viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" />
            <path d="M16 2v4M8 2v4M3 10h18" />
        </symbol>
        <symbol id="i-call" viewBox="0 0 24 24">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" />
        </symbol>
        <symbol id="i-timer" viewBox="0 0 24 24">
            <path d="M10 2h4" />
            <path d="M12 14l3-3" />
            <circle cx="12" cy="14" r="8" />
        </symbol>
        <symbol id="i-engineering" viewBox="0 0 24 24">
            <path d="M2 18a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v2z" />
            <path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5" />
            <path d="M4 15v-3a6 6 0 0 1 6-6" />
            <path d="M14 6a6 6 0 0 1 6 6v3" />
        </symbol>
        <symbol id="i-construction" viewBox="0 0 24 24">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
        </symbol>
        <symbol id="i-thermostat" viewBox="0 0 24 24">
            <path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0z" />
        </symbol>
    </svg>

    <main id="logisticbus-landing">

        <!-- 01. HERO -->
        <section class="lg-hero">
            <div class="lg-wrap">
                <div class="grid">
                    <div>
                        <span class="lg-eyebrow">Logística y almacenes</span>
                        <h1>Tu operación logística <span>necesita automatizar</span> para escalar</h1>
                        <p class="sub">Cuando el volumen crece y el trabajo manual sigue siendo el límite, escalar se vuelve caro y lento. Robótica, automatización y trazabilidad para que tu almacén o centro de distribución mueva más producto con procesos estables y repetibles.</p>
                        <div class="lg-perks">
                            <div>
                                <svg class="lg-i" aria-hidden="true"><use href="#i-speed" /></svg>
                                Más producción por turno
                            </div>
                            <div>
                                <svg class="lg-i" aria-hidden="true"><use href="#i-health_and_safety" /></svg>
                                Procesos estables y seguros
                            </div>
                            <div>
                                <svg class="lg-i" aria-hidden="true"><use href="#i-visibility" /></svg>
                                Visibilidad en tiempo real
                            </div>
                            <div>
                                <svg class="lg-i" aria-hidden="true"><use href="#i-query_stats" /></svg>
                                Capacidad para escalar
                            </div>
                        </div>
                        <div class="lg-btns">
                            <a class="lg-btn primary" href="#caso">Ver cómo se automatiza una operación</a>
                            <a class="lg-btn ghost" href="#soluciones">Explorar soluciones</a>
                        </div>
                    </div>

                    <aside class="lg-hpanel" aria-label="Soluciones para logística y almacenes">
                        <h3>¿Qué necesitas mejorar en tu operación?</h3>
                        <a href="https://www.logicbus.com.mx/logistica-y-almacenes/paletizado-automatico">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-precision_manufacturing" /></svg>
                            <span>
                                <b>Pallets armados a mano o a ritmo irregular</b>
                                <small>Lo que sale de la línea depende del paletizado</small>
                            </span>
                            <svg class="lg-i go" aria-hidden="true"><use href="#i-arrow_forward" /></svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping" /></svg>
                            <span>
                                <b>Carga y descarga de trailers que tarda</b>
                                <small>Camiones esperando y tiempo perdido en andén</small>
                            </span>
                            <svg class="lg-i go" aria-hidden="true"><use href="#i-arrow_forward" /></svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-forklift" /></svg>
                            <span>
                                <b>Traslados internos que frenan la operación</b>
                                <small>Personal y equipo ocupados en mover material</small>
                            </span>
                            <svg class="lg-i go" aria-hidden="true"><use href="#i-arrow_forward" /></svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg>
                            <span>
                                <b>Cargas mal aseguradas o emplayado inconsistente</b>
                                <small>Mermas y daños de producto en el traslado</small>
                            </span>
                            <svg class="lg-i go" aria-hidden="true"><use href="#i-arrow_forward" /></svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="lg-i" aria-hidden="true"><use href="#i-location_on" /></svg>
                            <span>
                                <b>Inventario y activos que no logras ubicar</b>
                                <small>Sin conteo ni ubicación en tiempo real</small>
                            </span>
                            <svg class="lg-i go" aria-hidden="true"><use href="#i-arrow_forward" /></svg>
                        </a>
                    </aside>
                </div>
            </div>
        </section>

        <!-- 02. STATS -->
        <section class="py-5">
            <div class="mx-5 row justify-content-around">
                <a href="/empresa" class="col-12 col-md-3 blue link-orange">
                    <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div class="counter" data-count="24">0</div>&nbsp;años</div>
                    <p class="paragraph text-center">Siendo tu aliado en la automatización</p>
                </a>
                <a href="/clientes-logicbus" class="col-12 col-md-4 blue link-orange">
                    <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div class="counter" data-count="23500">0</div>&nbsp;clientes</div>
                    <p class="paragraph text-center">En México y todo el mundo, satisfechos con nuestros productos y servicios</p>
                </a>
                <a href="/marcas-logicbus" class="col-12 col-md-3 blue link-orange">
                    <div class="title d-flex flex-wrap justify-content-center">+&nbsp;<div class="counter" data-count="56">0</div>&nbsp;marcas</div>
                    <p class="paragraph text-center">Reconocidas en la industria</p>
                </a>
            </div>
        </section>

        <!-- 03. RETOS -->
        <section class="lg-section alt">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Señales de que toca automatizar</span>
                    <h2>¿Tu operación ya llegó a su límite?</h2>
                    <p>Cuando crecer depende de sumar personas, turnos y espacio, el costo de escalar se dispara. Estas son las señales más comunes.</p>
                </div>
                <div class="lg-retos">
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-speed" /></svg></div>
                        <span class="t">El volumen crece, pero el proceso no da más</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-front_hand" /></svg></div>
                        <span class="t">Dependencia del trabajo manual y de la rotación de personal</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-hourglass_top" /></svg></div>
                        <span class="t">Cuellos de botella en paletizado, traslado y embarque</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping" /></svg></div>
                        <span class="t">Cargas y descargas que frenan la salida de producto</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-location_searching" /></svg></div>
                        <span class="t">Inventario y activos sin ubicación en tiempo real</span>
                    </div>
                    <div class="lg-reto lg-rv">
                        <div class="ic"><svg class="lg-i" aria-hidden="true"><use href="#i-query_stats" /></svg></div>
                        <span class="t">Decisiones tomadas sin datos de la operación</span>
                    </div>
                </div>
                <p class="lg-retos-cta lg-rv">¿Te identificas con alguna? <a href="#caso">Mira cómo se automatiza una operación completa →</a></p>
            </div>
        </section>

        <!-- 04. CASO DE APLICACION-->
        <section class="lg-section lg-caso-sec" id="caso">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Caso de aplicación</span>
                    <h2>Una operación, diferentes tecnologías</h2>
                    <p>Así se conecta un centro de distribución cuando cada etapa se automatiza, desde que llega el producto hasta que sale en el trailer. Haz clic en una etapa para ver qué tecnología interviene y qué resuelve.</p>
                </div>

                <div class="lg-plano-top lg-rv">
                    <span>Flujo de material, de recepción a embarque</span>
                    <button type="button" class="lg-play" id="lgPlay" aria-pressed="true">Pausar flujo</button>
                </div>

                <div class="lg-plano lg-rv">
                    <svg class="plano" id="lgPlano" viewBox="0 0 1000 332" role="img" aria-label="Plano de un centro de distribución con seis etapas: recepción, almacén, transporte interno, paletizado, emplayado y embarque">
                        <defs>
                            <pattern id="lgGrid" width="30" height="30" patternUnits="userSpaceOnUse">
                                <path d="M30 0H0V30" fill="none" stroke="rgba(255,255,255,.06)" stroke-width="1" />
                            </pattern>
                        </defs>
                        <rect width="1000" height="332" fill="url(#lgGrid)" />

                        <!-- ZONAS INTERACTIVAS DEL SVG -->
                        <g class="zona" data-i="0" transform="translate(20,20)" tabindex="0" role="button" aria-label="Etapa 1: Recepción">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">1</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">RECEPCIÓN</text>
                            <g class="il">
                                <rect x="12" y="122" width="62" height="34" rx="2" />
                                <path d="M74 134h16l10 10v12H74z" />
                                <circle cx="30" cy="160" r="5" />
                                <circle cx="56" cy="160" r="5" />
                                <circle cx="92" cy="160" r="5" />
                                <path class="or" d="M37.3 110.3A8 8 0 0 1 48.7 110.3" />
                                <path class="or" d="M32.4 105.4A15 15 0 0 1 53.6 105.4" />
                                <path class="or" d="M27.4 100.4A22 22 0 0 1 58.6 100.4" />
                                <circle class="fo" cx="43" cy="117" r="3" />
                            </g>
                            <rect class="pill" x="42.0" y="188" width="56" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">RFID</text>
                        </g>

                        <g class="zona" data-i="1" transform="translate(184,20)" tabindex="0" role="button" aria-label="Etapa 2: Almacén">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">2</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">ALMACÉN</text>
                            <g class="il">
                                <rect x="16" y="84" width="48" height="86" />
                                <rect x="76" y="84" width="48" height="86" />
                                <path d="M16 113h48M16 141h48M76 113h48M76 141h48" />
                                <rect x="22" y="94" width="14" height="14" />
                                <rect x="42" y="94" width="14" height="14" />
                                <rect x="22" y="122" width="14" height="14" />
                                <rect x="82" y="150" width="14" height="14" />
                                <rect x="102" y="150" width="14" height="14" />
                                <rect x="102" y="122" width="14" height="14" />
                                <circle class="fo" cx="49" cy="129" r="3.5" />
                                <circle class="pl or" cx="49" cy="129" r="4" />
                                <circle class="fo" cx="89" cy="101" r="3.5" />
                                <circle class="pl or" cx="89" cy="101" r="4" />
                                <circle class="fo" cx="109" cy="157" r="3.5" />
                                <circle class="pl or" cx="109" cy="157" r="4" />
                            </g>
                            <rect class="pill" x="32.0" y="188" width="76" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">RTLS · IoT</text>
                        </g>

                        <g class="zona" data-i="2" transform="translate(348,20)" tabindex="0" role="button" aria-label="Etapa 3: Transporte">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">3</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">TRANSPORTE</text>
                            <g class="il">
                                <rect x="22" y="128" width="46" height="28" rx="3" />
                                <path d="M68 140h12" />
                                <path d="M80 92v66" />
                                <path d="M80 150h30" />
                                <rect x="86" y="132" width="24" height="16" rx="2" />
                                <circle cx="36" cy="162" r="6" />
                                <circle cx="58" cy="162" r="6" />
                                <circle class="fo" cx="45" cy="122" r="4" />
                                <path class="or" d="M38 115a10 10 0 0 1 14 0" />
                                <path class="or" d="M33 109a17 17 0 0 1 24 0" />
                            </g>
                            <rect class="pill" x="30.0" y="188" width="80" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">AMR / AGV</text>
                        </g>

                        <g class="zona" data-i="3" transform="translate(512,20)" tabindex="0" role="button" aria-label="Etapa 4: Paletizado">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">4</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">PALETIZADO</text>
                            <g class="il">
                                <rect x="18" y="150" width="28" height="10" rx="2" />
                                <path stroke-width="4" d="M32 150L52 108" />
                                <path stroke-width="4" d="M52 108L92 118" />
                                <path d="M92 118v14" />
                                <circle class="fo" cx="32" cy="150" r="5" />
                                <circle class="fo" cx="52" cy="108" r="5" />
                                <circle class="fo" cx="92" cy="118" r="4" />
                                <rect x="84" y="132" width="16" height="12" />
                                <path d="M70 162h58" />
                                <rect x="74" y="148" width="22" height="12" />
                                <rect x="100" y="148" width="22" height="12" />
                            </g>
                            <rect class="pill" x="39.0" y="188" width="62" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">Robótica</text>
                        </g>

                        <g class="zona" data-i="4" transform="translate(676,20)" tabindex="0" role="button" aria-label="Etapa 5: Emplayado">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">5</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">EMPLAYADO</text>
                            <g class="il">
                                <ellipse cx="70" cy="160" rx="42" ry="10" />
                                <rect x="46" y="106" width="48" height="48" rx="2" />
                                <path d="M46 130h48M70 106v48" />
                                <path class="or" d="M46 114l48 14M46 130l48 14M46 146l48 8" />
                            </g>
                            <rect class="pill" x="20.0" y="188" width="100" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">Automatización</text>
                        </g>

                        <g class="zona" data-i="5" transform="translate(840,20)" tabindex="0" role="button" aria-label="Etapa 6: Embarque">
                            <rect class="z" width="140" height="250" rx="14" />
                            <g class="mk">
                                <circle cx="70" cy="28" r="14" />
                                <text class="num" x="70" y="33" text-anchor="middle">6</text>
                            </g>
                            <text class="lbl" x="70" y="62" text-anchor="middle">EMBARQUE</text>
                            <g class="il">
                                <rect x="12" y="104" width="116" height="56" rx="3" />
                                <rect x="22" y="124" width="22" height="26" />
                                <rect x="50" y="124" width="22" height="26" />
                                <path class="or" d="M112 138H90m8-8-8 8 8 8" />
                                <circle cx="40" cy="166" r="5" />
                                <circle cx="100" cy="166" r="5" />
                            </g>
                            <rect class="pill" x="12.0" y="188" width="116" height="22" rx="11" />
                            <text class="pt" x="70" y="203" text-anchor="middle">Carga automatizada</text>
                        </g>

                        <line class="ruta" x1="90" y1="300" x2="910" y2="300" />
                        <circle class="pto" cx="90" cy="300" r="5" />
                        <circle class="pto" cx="254" cy="300" r="5" />
                        <circle class="pto" cx="418" cy="300" r="5" />
                        <circle class="pto" cx="582" cy="300" r="5" />
                        <circle class="pto" cx="746" cy="300" r="5" />
                        <circle class="pto" cx="910" cy="300" r="5" />
                        
                        <g id="lgPallet" transform="translate(90,300)">
                            <rect class="pbase" x="-16" y="-5" width="32" height="6" rx="2" />
                            <rect class="pbox" x="-13" y="-25" width="26" height="20" rx="3" />
                            <path class="pcruz" d="M-13 -15H13M0 -25V-5" />
                        </g>
                    </svg>
                </div>

                <div class="lg-tabs lg-rv" id="lgTabs">
                    <button type="button" class="lg-tab on" data-i="0">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-move_to_inbox" /></svg>Recepción
                    </button>
                    <button type="button" class="lg-tab" data-i="1">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-warehouse" /></svg>Almacenamiento
                    </button>
                    <button type="button" class="lg-tab" data-i="2">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-forklift" /></svg>Transporte interno
                    </button>
                    <button type="button" class="lg-tab" data-i="3">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-precision_manufacturing" /></svg>Paletizado
                    </button>
                    <button type="button" class="lg-tab" data-i="4">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg>Emplayado
                    </button>
                    <button type="button" class="lg-tab" data-i="5">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping" /></svg>Embarque
                    </button>
                </div>

                <div class="lg-detalle lg-rv" id="lgDetalle" aria-live="polite">
                    <div class="quien">
                        <div class="ico">
                            <svg class="lg-i" aria-hidden="true"><use id="dIco" href="#i-move_to_inbox" /></svg>
                        </div>
                        <div>
                            <small id="dNum">ETAPA 01</small>
                            <h3 id="dTit">Recepción</h3>
                            <div class="techs" id="dTech"></div>
                        </div>
                    </div>
                    <div class="que">
                        <p id="dDesc"></p>
                        <ul id="dList"></ul>
                    </div>
                    <div class="acc">
                        <a class="lg-btn primary" id="dLink" href="javascript:void(0)">Ver esta solución</a>
                        <a class="lg-btn outline" href="https://www.logicbus.com.mx/contacto">Hablar con un especialista</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 05. SOLUCIONES -->
        <section class="lg-section" id="soluciones">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Soluciones</span>
                    <h2>¿Qué solución te gustaría implementar?</h2>
                    <p>Cada solución tiene su propia página con el detalle técnico, aplicaciones y marcas. Entra a la que más se parezca a tu proyecto.</p>
                </div>
                <div class="lg-soluciones">
                    <a class="lg-card lg-rv" href="https://www.logicbus.com.mx/logistica-y-almacenes/paletizado-automatico">
                        <div class="pic">
                            <i style="background-image:url('https://www.logicbus.com.mx/images/logistica/paletizado-automatico.webp')"></i>
                            <span class="num">01</span>
                            <span class="badge"><svg class="lg-i" aria-hidden="true"><use href="#i-precision_manufacturing" /></svg></span>
                        </div>
                        <div class="body">
                            <h3>Paletizado automático</h3>
                            <p>Forma y organiza pallets con robots y cobots a un ritmo constante, sin depender del esfuerzo manual.</p>
                            <div class="lg-tags"><span>Cobots</span><span>Visión artificial</span><span>Sensores</span></div>
                            <span class="go">Conocer solución <svg class="lg-i" aria-hidden="true"><use href="#i-arrow_forward" /></svg></span>
                        </div>
                    </a>
                    <a class="lg-card lg-rv" href="javascript:void(0)">
                        <div class="pic">
                            <i style="background-image:url('https://www.logicbus.com.mx/images/logistica/carga-trailers.webp')"></i>
                            <span class="num">02</span>
                            <span class="badge"><svg class="lg-i" aria-hidden="true"><use href="#i-local_shipping" /></svg></span>
                        </div>
                        <div class="body">
                            <h3>Carga automatizada de trailers</h3>
                            <p>Reduce el tiempo de carga y descarga y libera tus andenes más rápido.</p>
                            <div class="lg-tags"><span>Conveyors</span><span>Transferencia de pallets</span><span>Staging</span></div>
                            <span class="go">Conocer solución <svg class="lg-i" aria-hidden="true"><use href="#i-arrow_forward" /></svg></span>
                        </div>
                    </a>
                    <a class="lg-card lg-rv" href="javascript:void(0)">
                        <div class="pic">
                            <i style="background-image:url('https://www.logicbus.com.mx/images/logistica/montacargas-autonomos.webp')"></i>
                            <span class="num">03</span>
                            <span class="badge"><svg class="lg-i" aria-hidden="true"><use href="#i-forklift" /></svg></span>
                        </div>
                        <div class="body">
                            <h3>Montacargas autónomos</h3>
                            <p>Mueve pallets y materiales entre áreas de forma autónoma, sin detener la operación.</p>
                            <div class="lg-tags"><span>AMR</span><span>AGV</span><span>Control de flota</span></div>
                            <span class="go">Conocer solución <svg class="lg-i" aria-hidden="true"><use href="#i-arrow_forward" /></svg></span>
                        </div>
                    </a>
                    <a class="lg-card lg-rv" href="javascript:void(0)">
                        <div class="pic">
                            <i style="background-image:url('https://www.logicbus.com.mx/images/logistica/emplayado-automatico.webp')"></i>
                            <span class="num">04</span>
                            <span class="badge"><svg class="lg-i" aria-hidden="true"><use href="#i-layers" /></svg></span>
                        </div>
                        <div class="body">
                            <h3>Emplayado automático</h3>
                            <p>Asegura cada carga de forma uniforme y repetible antes de que salga.</p>
                            <div class="lg-tags"><span>Control</span><span>Sensores</span><span>Automatización</span></div>
                            <span class="go">Conocer solución <svg class="lg-i" aria-hidden="true"><use href="#i-arrow_forward" /></svg></span>
                        </div>
                    </a>
                    <a class="lg-card lg-rv" href="javascript:void(0)">
                        <div class="pic">
                            <i style="background-image:url('https://www.logicbus.com.mx/images/logistica/trackeo-inventario.webp')"></i>
                            <span class="num">05</span>
                            <span class="badge"><svg class="lg-i" aria-hidden="true"><use href="#i-location_on" /></svg></span>
                        </div>
                        <div class="body">
                            <h3>Trackeo de inventario y activos</h3>
                            <p>Ubica pallets, activos, materiales y equipos en tiempo real con RFID, RTLS e IoT.</p>
                            <div class="lg-tags"><span>RFID</span><span>RTLS</span><span>IoT</span></div>
                            <span class="go">Conocer solución <svg class="lg-i" aria-hidden="true"><use href="#i-arrow_forward" /></svg></span>
                        </div>
                    </a>
                    <a class="lg-card cta lg-rv" href="#analiza">
                        <div class="body">
                            <svg class="lg-i big" aria-hidden="true"><use href="#i-support_agent" /></svg>
                            <h3>¿Otro proceso?</h3>
                            <p>Cuéntanos qué cuello de botella quieres quitar y buscamos la tecnología.</p>
                            <span class="lg-btn primary" style="margin-top:10px;">Platicar mi proyecto</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- 06. TECNOLOGIAS -->
        <section class="lg-section alt">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Tecnologías</span>
                    <h2>Combinamos tecnologías para construir tu solución</h2>
                    <p>Trabajamos con fabricantes especializados para desarrollar soluciones adaptadas a cada aplicación.</p>
                </div>
                <div class="lg-tech">
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-precision_manufacturing" /></svg>
                        Robótica<small>AMR / AGV / Cobots</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-contactless" /></svg>
                        RFID<small>Identificación</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-location_on" /></svg>
                        RTLS<small>Localización</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-sensors" /></svg>
                        IoT<small>Monitoreo</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-visibility" /></svg>
                        Visión artificial<small>Inspección</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-settings" /></svg>
                        Control industrial<small>Automatización</small>
                    </a>
                    <a class="lg-chip lg-rv" href="javascript:void(0)">
                        <svg class="lg-i" aria-hidden="true"><use href="#i-monitoring" /></svg>
                        Software<small>Gestión de datos</small>
                    </a>
                </div>
            </div>
        </section>

        <!-- 07. MARCAS -->
        <section class="lg-section">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Fabricantes</span>
                    <h2>Trabajamos con tecnología de fabricantes especializados</h2>
                </div>
            </div>
            <div class="lg-marcas-wrap">
                <div class="lg-marcas-track" id="lgMarcas">
                    <a class="lg-marca" href="https://www.logicbus.com.mx/youibot" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/youibot.webp" alt="Youibot">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/autoxing-technology" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/autoxing.webp" alt="Autoxing">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/quasi" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/quasi.webp" alt="Quasi">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/robots-siasun" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/siasun.webp" alt="Siasun">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/futek" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/futek.webp" alt="Brooks">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/rfid-inc" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/rfid.webp" alt="RFID Inc">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/davo-lin" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/davo-lin.webp" alt="Blyott">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/madgetech" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/madgetech.webp" alt="Qualcomm">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/chainway" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/chainway.webp" alt="Chainway">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/daviteq" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/daviteq.webp" alt="Daviteq">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/teracom" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/teracom.webp" alt="Teracom">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/seneca" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/seneca.webp" alt="Seneca">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/industrial-shields" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/industrial-shields.webp" alt="Industrial Shields">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/cincoze" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/cincoze.webp" alt="Cincoze">
                    </a>
                    <a class="lg-marca" href="https://www.logicbus.com.mx/tri-tronics" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/images/nuestras_marcas/webp/tri-tronics.webp" alt="Tri-Tronics">
                    </a>
                </div>
            </div>
            <div class="lg-wrap">
                <div class="lg-marcas-help lg-rv">
                    <p>¿No sabes qué tecnología necesitas? Nosotros te ayudamos a identificarla.</p>
                    <div class="lg-btns-wrap">
                        <a class="lg-btn primary" href="https://www.logicbus.com.mx/contacto">Hablar con un especialista</a>
                        <a class="lg-btn outline" href="https://www.logicbus.com.mx/marcas-logicbus">Ver todas las marcas</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 08. PROCESO + CASO -->
        <section class="lg-section alt">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Cómo trabajamos</span>
                    <h2>No necesitas saber qué tecnología necesitas. Empezamos por tu proceso.</h2>
                </div>
                <div class="lg-proceso">
                    <div class="lg-paso lg-rv">
                        <div class="num"><svg class="lg-i" aria-hidden="true"><use href="#i-chat" /></svg></div>
                        <b>PASO 01</b>
                        <p>Cuéntanos tu proceso</p>
                    </div>
                    <div class="lg-paso lg-rv">
                        <div class="num"><svg class="lg-i" aria-hidden="true"><use href="#i-search" /></svg></div>
                        <b>PASO 02</b>
                        <p>Identificamos el reto</p>
                    </div>
                    <div class="lg-paso lg-rv">
                        <div class="num"><svg class="lg-i" aria-hidden="true"><use href="#i-compare_arrows" /></svg></div>
                        <b>PASO 03</b>
                        <p>Analizamos las alternativas</p>
                    </div>
                    <div class="lg-paso lg-rv">
                        <div class="num"><svg class="lg-i" aria-hidden="true"><use href="#i-memory" /></svg></div>
                        <b>PASO 04</b>
                        <p>Seleccionamos la tecnología</p>
                    </div>
                    <div class="lg-paso lg-rv">
                        <div class="num"><svg class="lg-i" aria-hidden="true"><use href="#i-rocket_launch" /></svg></div>
                        <b>PASO 05</b>
                        <p>Implementamos tu solución</p>
                    </div>
                </div>
            </div>
        </section>

       <!-- 09. FAQ -->
        <section class="lg-section">
            <div class="lg-wrap">
                <div class="lg-head lg-rv">
                    <span class="lg-eyebrow">Preguntas frecuentes</span>
                    <h2>Resolvemos tus dudas antes de empezar</h2>
                </div>
                <div class="lg-faq lg-rv">
                    <details>
                        <summary>¿Cuándo es momento de automatizar una operación logística?</summary>
                        <p>Cuando el crecimiento del volumen ya no se puede atender sumando personas o turnos, cuando hay cuellos de botella en paletizado, traslado, emplayado o embarque, o cuando faltan datos en tiempo real para decidir. Un especialista de Logicbus revisa tu caso para priorizar por dónde empezar.</p>
                    </details>
                    <details>
                        <summary>¿Qué proceso conviene automatizar primero en un almacén?</summary>
                        <p>Normalmente el que concentra más trabajo manual repetitivo, más tiempo perdido o más errores, por ejemplo el paletizado, el transporte interno de pallets o la carga y descarga de trailers. Un especialista de Logicbus analiza tu operación para priorizar.</p>
                    </details>
                    <details>
                        <summary>¿Cuál es la diferencia entre un AMR y un AGV?</summary>
                        <p>Un AGV sigue rutas fijas definidas con guías físicas o virtuales. Un AMR navega de forma autónoma, mapea el entorno y puede rodear obstáculos, por lo que se adapta mejor a operaciones cambiantes.</p>
                    </details>
                    <details>
                        <summary>¿Puedo combinar varias tecnologías en una misma solución?</summary>
                        <p>Sí. Una operación completa suele combinar robótica, RFID o RTLS, sensores, visión artificial y software para integrar la información.</p>
                    </details>
                    <details>
                        <summary>¿Necesito saber qué tecnología necesito antes de contactarlos?</summary>
                        <p>No. Basta con que nos cuentes qué proceso quieres mejorar. Nuestros ingenieros te ayudan a identificar el reto, analizar alternativas y seleccionar la tecnología adecuada.</p>
                    </details>
                    <details>
                        <summary>¿Logicbus atiende proyectos en México y Estados Unidos?</summary>
                        <p>Sí. Logicbus cuenta con oficinas en Guadalajara, México, y en Chula Vista, California, y atiende clientes nacionales e internacionales.</p>
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

    <!-- SCRIPTS DE LA LANDING -->
    <script>
        /* Enviar formulario por WhatsApp */
        function lgEnviar(p) {
            var g = function (id) {var e = document.getElementById(p + "-" + id); return e ? e.value.trim() : "";};
            var obligatorios = [["nombre", "Nombre"], ["tel", "Teléfono"], ["proceso", "Proceso a automatizar"]];
            for (var i = 0; i < obligatorios.length; i++) {
                if (!g(obligatorios[i][0])) {
                    alert("Por favor completa el campo: " + obligatorios[i][1]);
                    document.getElementById(p + "-" + obligatorios[i][0]).focus();
                    return;
                }
            }
            var m = "Hola Logicbus, quiero analizar una aplicación de logística:\n" +
                "Nombre: " + g("nombre") + "\n" +
                "Empresa: " + g("empresa") + "\n" +
                "Teléfono: " + g("tel") + "\n" +
                (g("correo") ? "Correo: " + g("correo") + "\n" : "") +
                (g("pais") ? "País: " + g("pais") + "\n" : "") +
                "Proceso: " + g("proceso") + "\n" +
                (g("desc") ? "Descripción: " + g("desc") : "");
            window.open("https://wa.me/525554316718?text=" + encodeURIComponent(m));
        }

        /* Animaciones y Carrusel de Marcas */
        (function () {
            var els = document.querySelectorAll(".lg-rv");
            if (!("IntersectionObserver" in window)) {els.forEach(function (e) {e.classList.add("in");}); return;}
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (en) {if (en.isIntersecting) {en.target.classList.add("in"); io.unobserve(en.target);} });
            }, {threshold: 0.12});
            els.forEach(function (e) {io.observe(e);});

            var t = document.getElementById("lgMarcas");
            if (t) {t.innerHTML += t.innerHTML;}
        })();

        /* Lógica del Mapa Interactivo */
        (function () {
            var plano = document.getElementById("lgPlano");
            if (!plano) {return;}
            var ETAPAS = [
                {ico: "move_to_inbox", tit: "Recepción", techs: ["RFID"], desc: "Cada pallet se identifica automáticamente al llegar.", pts: ["Identificación automática de pallets", "Menos errores", "Inventario actualizado"], url: "javascript:void(0)", cta: "Ver trazabilidad"},
                {ico: "warehouse", tit: "Almacenamiento", techs: ["RTLS", "IoT"], desc: "Sabes dónde está cada pallet y cada activo en tiempo real.", pts: ["Ubicación en tiempo real", "Menos tiempo buscando", "Info. para decisiones"], url: "javascript:void(0)", cta: "Ver localización"},
                {ico: "forklift", tit: "Transporte interno", techs: ["AMR", "AGV"], desc: "Robots autónomos mueven pallets entre áreas sin detener la operación.", pts: ["Traslados sin operador", "Rutas repetibles", "Integración operativa"], url: "javascript:void(0)", cta: "Ver montacargas"},
                {ico: "precision_manufacturing", tit: "Paletizado", techs: ["Robots", "Cobots", "Visión"], desc: "Robots organizan los pallets a ritmo constante.", pts: ["Patrones repetibles", "Menos esfuerzo físico", "Proceso constante"], url: "javascript:void(0)", cta: "Ver paletizado"},
                {ico: "layers", tit: "Emplayado", techs: ["Automatización", "Control"], desc: "El pallet se asegura con una envoltura uniforme.", pts: ["Carga estable", "Estandarizado", "Menos mano de obra"], url: "javascript:void(0)", cta: "Ver emplayado"},
                {ico: "local_shipping", tit: "Embarque", techs: ["Carga automatizada"], desc: "Carga del trailer más rápida.", pts: ["Menos tiempo", "Menos esfuerzo", "Salida con trazabilidad"], url: "javascript:void(0)", cta: "Ver carga de trailers"}
            ];
            var XS = [90, 254, 418, 582, 746, 910], Y = 300;
            var zonas = plano.querySelectorAll(".zona"), tabs = document.querySelectorAll(".lg-tab");
            var pallet = document.getElementById("lgPallet"), btn = document.getElementById("lgPlay"), det = document.getElementById("lgDetalle");
            var active = -1, target = 0, x = XS[0], auto = true, dwell = 0, last = null, visible = false, fast = false;

            function setActive(i) {
                active = i;
                for (var k = 0; k < zonas.length; k++) {zonas[k].classList.toggle("on", k === i); tabs[k].classList.toggle("on", k === i);}
                var e = ETAPAS[i];
                document.getElementById("dIco").setAttribute("href", "#i-" + e.ico); document.getElementById("dNum").textContent = "ETAPA 0" + (i + 1);
                document.getElementById("dTit").textContent = e.tit; document.getElementById("dTech").innerHTML = e.techs.map(function (t) {return "<span>" + t + "</span>";}).join("");
                document.getElementById("dDesc").textContent = e.desc; document.getElementById("dList").innerHTML = e.pts.map(function (t) {return "<li><svg class='lg-i'><use href='#i-check_circle'/></svg>" + t + "</li>";}).join("");
                document.getElementById("dLink").setAttribute("href", e.url); document.getElementById("dLink").textContent = e.cta;
                det.classList.remove("cambia"); void det.offsetWidth; det.classList.add("cambia");
            }
            function draw() {pallet.setAttribute("transform", "translate(" + x + "," + Y + ")");}
            function setAuto(v) {auto = v; dwell = 0; btn.textContent = v ? "Pausar flujo" : "Reanudar flujo"; btn.setAttribute("aria-pressed", v ? "true" : "false");}
            function go(i) {target = i; fast = true; setAuto(false);}

            zonas.forEach(function (z) {
                z.addEventListener("click", function () {go(+z.getAttribute("data-i"));});
                z.addEventListener("keydown", function (e) { 
                    if(e.key === "Enter" || e.key === " ") { 
                        e.preventDefault(); 
                        go(+z.getAttribute("data-i")); 
                    } 
                });
            });

            tabs.forEach(function (t) {
                t.addEventListener("click", function () {go(+t.getAttribute("data-i"));});
                t.addEventListener("keydown", function (e) { 
                    if(e.key === "Enter" || e.key === " ") { 
                        e.preventDefault(); 
                        go(+t.getAttribute("data-i")); 
                    } 
                });
            });
            
            btn.addEventListener("click", function () {if (auto) {setAuto(false);} else {fast = false; setAuto(true); if (x === XS[target]) dwell = 3;} });

            function frame(t) {
                window.requestAnimationFrame(frame);
                if (last === null) last = t;
                var dt = Math.min(t - last, 50) / 1000; last = t;
                if (!visible) return;
                var tx = XS[target];
                if (Math.abs(tx - x) > 0.5) {
                    var sp = fast ? 700 : 130;
                    x += (tx > x ? 1 : -1) * Math.min(sp * dt, Math.abs(tx - x));
                } else {
                    x = tx; if (active !== target) setActive(target);
                    if (auto) {dwell += dt; if (dwell > 7.0) {dwell = 0; target = (target + 1) % XS.length; if (target === 0) x = XS[0];} }
                }
                draw();
            }
            setActive(0); draw();
            if ("IntersectionObserver" in window) {new IntersectionObserver(function (en) {visible = en[0].isIntersecting;}, {threshold: 0.3}).observe(plano);} else {visible = true;}
            window.requestAnimationFrame(frame);
        })();
    </script>

   <!-- REQUIRES FINALES (Footer general de tu sitio en Odoo/PHP) -->
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $var_footer; ?>
</body>
</html>