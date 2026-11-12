<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Bolsa de Trabajo - Logicbus S.A de C.V.</title>
    <meta name="description" content="Nos complace ofrecer oportunidades laborales para aquellos que buscan formar parte de una empresa líder en tecnología y automatización industrial...">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
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
    <?php require("../libreria/header.view.php"); ?>
    <section class="pb-5">
        <div>
            <img src="../images/banner/banner-vacante.webp" alt="Bolsa de trabajo - Logicbus" title="Bolsa de trabajo - Logicbus" width="100%">
        </div>
        <div class="container my-5">
            <h1 class="title blue">¡Bienvenido a la página bolsa de trabajo de Logicbus!</h1>
            <p class="paragraph text-justify mt-5">Nos complace ofrecer oportunidades laborales para aquellos que buscan formar parte de una empresa líder en tecnología y automatización industrial. Nuestra empresa ha estado en el mercado por más de 20 años, ofreciendo soluciones de automatización y equipos de control a clientes en toda América Latina. Si estás buscando una empresa innovadora y en constante crecimiento, ¡sigue leyendo y descubre las vacantes que tenemos disponibles en Logicbus!</p>
            <p class="paragraph text-justify">Actualmente, estamos buscando candidatos talentosos y apasionados para unirse a nuestro equipo en las siguientes áreas:</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-5 shadow" style="width: 18rem;">
                <img src="../images/vacantes/administrativo.webp" class="card-img-top" alt="Vacantes en área administrativa">
                <div class="card-body text-center">
                    <a href="#admin" class="btn btn-orange">Ver vacantes</a>
                </div>
            </div>
            <div class="card m-5 shadow" style="width: 18rem;">
                <img src="../images/vacantes/ventas.webp" class="card-img-top" alt="Vacantes en área de ventas">
                <div class="card-body text-center">
                    <a href="#ventas" class="btn btn-orange">Ver vacantes</a>
                </div>
            </div>
            <div class="card m-5 shadow" style="width: 18rem;">
                <img src="../images/vacantes/logistica.webp" class="card-img-top" alt="Vacantes en área de logística">
                <div class="card-body text-center">
                    <a href="#logistica" class="btn btn-orange">Ver vacantes</a>
                </div>
            </div>
            <div class="card m-5 shadow" style="width: 18rem;">
                <img src="../images/vacantes/ingenieria.webp" class="card-img-top" alt="Vacantes en área de ingeniería">
                <div class="card-body text-center">
                    <a href="#ing" class="btn btn-orange">Ver vacantes</a>
                </div>
            </div>
        </div>
    </section>
    <!-- VACANTES EN AREA ADMINISTRATIVA -->
    <section class="py-5" id="admin">
        <div class="container">
            <img src="../images/vacantes/banner-administrativo.webp" alt="Bolsa de trabajo área administrativa - Logicbus" title="Bolsa de trabajo área administrativa - Logicbus" width="100%">
        </div>
        <div class="container py-5">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Gerente Administrativo</p>
                <a href="gerencia-administrativa" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Contador</p>
                <a href="contador" class="btn btn-blue">Aplicar</a>
            </div>
        </div>
    </section>
    <!-- VACANTES EN AREA DE VENTAS -->
    <section class="py-5" id="ventas">
        <div class="container">
            <img src="../images/vacantes/banner-ventas.webp" alt="Bolsa de trabajo área de ventas - Logicbus" title="Bolsa de trabajo área de ventas - Logicbus" width="100%">
        </div>
        <div class="container py-5">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Ingeniero de Ventas Técnicas</p>
                <a href="ingeniero-ventas-tecnicas" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Responsable de Market places (eBay, Amazon, Mercado Libre)</p>
                <a href="responsable-market-places" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Project Manager</p>
                <a href="project-manager" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Gerente Operativo</p>
                <a href="gerente-operativo" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Becario o practicante</p>
                <a href="becario-practicante" class="btn btn-blue">Aplicar</a>
            </div>
        </div>
    </section>
    <!-- VACANTES EN AREA DE LOGISTICA -->
    <section class="py-5" id="logistica">
        <div class="container">
            <img src="../images/vacantes/banner-logistica.webp" alt="Bolsa de trabajo área de logistíca - Logicbus" title="Bolsa de trabajo área de logistíca - Logicbus" width="100%">
        </div>
        <div class="container py-5">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Becario o practicante</p>
                <a href="becario-practicante" class="btn btn-blue">Aplicar</a>
            </div>
        </div>
    </section>
    <!-- VACANTES EN AREA DE INGENIERIA -->
    <section class="py-5" id="ing">
        <div class="container">
            <img src="../images/vacantes/banner-ingenieria.webp" alt="Bolsa de trabajo área de ingeniería - Logicbus" title="Bolsa de trabajo área de ingeniería - Logicbus" width="100%">
        </div>
        <div class="container py-5">
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Ingeniero de Ventas Técnicas</p>
                <a href="ingeniero-ventas-tecnicas" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Ingeniero de Soporte Técnico</p>
                <a href="ingeniero-soporte" class="btn btn-blue">Aplicar</a>
            </div>
            <div class="card d-flex flex-row justify-content-between align-items-center p-3 shadow my-3">
                <p class="paragraph m-0">Becario o practicante</p>
                <a href="becario-practicante" class="btn btn-blue">Aplicar</a>
            </div>
        </div>
    </section>
</body>
<!-- PIE DE PAGINA -->
<?php require("../libreria/footer.view.php"); ?>
<?php echo $bootstrap_js; ?>
<?php echo $jquery_js; ?>
<?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>