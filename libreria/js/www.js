// 1. Funciones de UI
function cambiarColor(e) { 
    e.classList.add("clicked");
    setTimeout(function () { e.classList.remove("clicked") }, 700);
} 

function mostrarSubmenuP() { document.getElementById("mega-submenup").style.display = "block" } 
function ocultarSubmenuP() { document.getElementById("mega-submenup").style.display = "none" } 
function mostrarSubmenuS() { document.getElementById("mega-submenuns").style.display = "block" } 
function ocultarSubmenuS() { document.getElementById("mega-submenuns").style.display = "none" } 
function mostrarSubmenuA() { document.getElementById("mega-submenuna").style.display = "block" } 
function ocultarSubmenuA() { document.getElementById("mega-submenuna").style.display = "none" } 

function setCookie(e) { document.cookie = "tag=" + encodeURIComponent(e) + ";max-age=1800;path=/" } 

// 2. Modal y PDF
$(".openModal").on("click", function () { 
    var e = $(this).attr("data-celda"); 
    var label = document.getElementById("exampleModalLabel");
    if(label) label.innerHTML = "Famila " + e;
    $("#PDF-celda").prop("src", "pdf/36/Manuales/" + e + ".pdf"); 
    $("#myModal").modal({ show: !0 });
}); 

// 3. Contador de años (CORREGIDO)
var ano = new Date().getFullYear(), years = ano - 2001, yearElement = document.getElementById("year"); 
if (yearElement) {
    yearElement.setAttribute("data-count", years); 
}

$(".counter").each(function () { 
    var e = $(this), t = e.attr("data-count"); 
    $({ countNum: e.text() }).animate({ countNum: t }, { 
        duration: 8000, 
        easing: "linear", 
        step: function () { e.text(Math.floor(this.countNum)) }, 
        complete: function () { e.text(this.countNum) } 
    });
}); 

// 4. Navegación Circular (CORREGIDO)
(function () { 
    var e = document.getElementById("cn-button"), t = document.getElementById("cn-wrapper"), n = !1; 
    if (e && t) {
        e.addEventListener("click", function (event) { 
            if (n) {
                this.innerHTML = "Abrir";
                if(window.classie) classie.remove(t, "opened-nav");
            } else {
                this.innerHTML = "Cerrar";
                if(window.classie) classie.add(t, "opened-nav");
            } 
            n = !n;
        }, !1);
    }
})();

// 5. Librería Classie
(function (e) { 
    "use strict"; 
    function t(e) { return RegExp("(^|\\s+)" + e + "(\\s+|$)") } 
    var a, o, s;
    if ("classList" in document.documentElement) {
        a = function (e, t) { return e.classList.contains(t) };
        o = function (e, t) { e.classList.add(t) };
        s = function (e, t) { e.classList.remove(t) };
    } else {
        a = function (e, n) { return t(n).test(e.className) };
        o = function (e, t) { if (!a(e, t)) e.className = e.className + " " + t };
        s = function (e, n) { e.className = e.className.replace(t(n), " ") };
    }
    var l = { hasClass: a, addClass: o, removeClass: s, toggleClass: function(e, t){ (a(e, t) ? s : o)(e, t) } };
    if ("function" == typeof define && define.amd) define(l); else e.classie = l; 
})(window);