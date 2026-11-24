<?php

if (!defined('RUTA')) {
    define('RUTA', 'https://www.logicbus.com.mx/');
}


$favicon = '<link rel="shortcut icon" href="' . RUTA . 'images/favicon.ico">';

#CSS
$boostrap_css = '<link rel="stylesheet" href="' . RUTA . 'libreria/bootstrap/dist/css/bootstrap.min.css">';
$estilos = '<link rel="stylesheet" href="' . RUTA . 'libreria/estilos.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';/*Este último es para los iconos */
$menu = '<link rel="stylesheet" href="' . RUTA . 'libreria/menus-2023.css">';
$subcategorias = '<link rel="stylesheet" href="' . RUTA . 'libreria/subcategorias.css">';
$footer_css = '<link rel="stylesheet" href="' . RUTA . 'libreria/footer.css">';
$flickity_css = '<link rel="stylesheet" href="' . RUTA . 'libreria/flickity.css">';
$aos_css = '<link rel="stylesheet" href="' . RUTA . 'libreria/AOS.css">';
$carrusel_productos = '<link rel="stylesheet" href="' . RUTA . 'libreria/css/carrusel-productos.css">';
$css_bundle = '<link rel="preload" href="' . RUTA . 'libreria/main.bundle.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
<noscript><link rel="stylesheet" href="' . RUTA . 'libreria/main.bundle.min.css"></noscript>';

#JS
$jquery_js = '<script src="' . RUTA . 'libreria/js/jquery.min.js"></script>';
$bootstrap_js = '<script src="' . RUTA . 'libreria/bootstrap/dist/js/bootstrap.min.js"></script>';
$popper_js = '<script src="' . RUTA . 'libreria/bootstrap/dist/js/popper.min.js"></script>';
$flickity_js = '<script src="' . RUTA . 'libreria/flickity.pkgd.min.js"></script>';
$aos_js = '<script src="' . RUTA . 'libreria/AOS.js"></script>';

#Own 
#	js
$own_file_js = '<script src="' . RUTA . 'libreria/js/www.js"></script>';
#	css
$own_file_css = '<link rel="stylesheet" href="' . RUTA . 'libreria/www.css">';

# google Analitycs

$google_analytics = '<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag("js", new Date());
    gtag("config", "G-LSWNC6HBRN", { anonymize_ip: true }); // ← Añade esto
</script>
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-LSWNC6HBRN"></script>';

$var_headers = "
	<!-- Google Tag Manager 13/03/2024-->

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KZXFP42G');</script>
	<!-- End Google Tag Manager -->

	<!-- Hotjar Tracking Code for https://www.logicbus.com.mx/ -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:5032825,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	
	<!-- Rastrear clics en enlaces a archivos PDF con Google Analytics-->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll(\"a[href$='.pdf']\").forEach(function (link) {
        link.addEventListener('click', function () {
            gtag('event', 'descarga_pdf', { 'file_name': link.href });
        });
    });
});
</script>
";

$var_body = '
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZXFP42G" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) 13/03/2024-->
';

$var_footer = '<!-- After Body Close-->
<script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"d04de4adfd717d1043530855a83ed733"})});</script>';