
document.addEventListener("DOMContentLoaded", function() {
    // Inserta lang="es" dentro de <html>
    document.documentElement.lang = "es";

    // Crea un nuevo elemento <link>
    var link = document.createElement("link");

    // Define los atributos del elemento <link>
    link.href = "https://www.logicbus.com.mx/"; 
    link.rel = "alternate";
    link.hreflang="es-MX";
    // Inserta el elemento <link> en <head>
    document.head.appendChild(link);

    var link2 = document.createElement("link");

    link2.href = "https://www.logicbus.com.mx/"; 
    link2.rel = "alternate";
    link2.hreflang="es-US";
    document.head.appendChild(link2);
});