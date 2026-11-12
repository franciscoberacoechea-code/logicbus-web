<style>
:root {
    --primary: #ff7e00;
    --dark-blue: #2D5680;
    --bg-gradient: linear-gradient(135deg, #eef2f7, #cbd5e1);
    --accent-red: #e63946;
}

/* ⚠️ NO romper layout */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
}

/* MODAL */
.overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    z-index: 100;
}

.modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    max-width: 500px;
    max-height: 85vh;
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    z-index: 101;
}

.modal-header {
    background-image: url("<?= RUTA ?>libreria/banner_whats.png");
    background-size: cover;
    background-position: center;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}



.modal-content {
    padding: 45px 30px 30px;
    overflow-y: auto;
    max-height: calc(85vh - 120px);
}

.grid-inputs {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.full-width {
    grid-column: span 2;
}

input,
select {
    width: 100%;
    padding: 10px 5px;
    border: none;
    border-bottom: 2px solid #e2e8f0;
    background: transparent;
}

input:focus,
select:focus {
    border-bottom-color: var(--primary);
}

.dropdown {
    position: relative;
}

.dropdown-list {
    position: absolute;
    width: 100%;
    max-height: 150px;
    overflow-y: auto;
    background: white;
    display: none;
    z-index: 10;
}

.dropdown-list div {
    padding: 10px;
    cursor: pointer;
}

.dropdown-list div:hover {
    background: var(--primary);
    color: white;
}

.btn-enviar {
    width: 100%;
    background: var(--accent-red);
    color: white;
    padding: 14px;
    border-radius: 50px;
    border: none;
    margin-top: 20px;
    cursor: pointer;
}

.btn-cerrar {
    width: 100%;
    background: none;
    border: none;
    margin-top: 10px;
    cursor: pointer;
}
</style>

<footer>
    <div class="container container-footer">
        <div class="justify-content-around gridContCinco">
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Navegación</p>
                <ul>
                    <li><a href="<?= RUTA ?>">Inicio</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>productos">Productos</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>empresa">Empresa</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>servicios">Servicios</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>eventos">Eventos</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>contacto">Contacto</a> <span>|</span></li>
                    <li><a href="https://www.logicbus.com.mx/blog/">Blog</a></li>
                </ul>
            </div>
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Enlaces</p>
                <ul>
                    <li><a href="https://tienda.logicbus.com.mx/" target="_blank">Tienda en México</a><span>|</span>
                    </li>
                    <li><a href="https://www.logicbus.com/" target="_blank">Tienda en USA</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>soporte#faqs">¿Cómo Comprar?</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>bolsa-de-trabajo/">Bolsa de Trabajo</a>
                    <li><a href="<?= RUTA ?>distribuidores-integradores">Integradores</a><span>|</span></li>
                    <li><a href="<?= RUTA ?>marcas-logicbus">Marcas</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>clientes-logicbus">Clientes</a> <span>|</span></li>
                    </li>
                </ul>
            </div>
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Información</p>
                <ul>
                    <li><a href="https://www.logicbus.com.mx/pdf/catalogos/LINE-CARD-WEB.pdf" target="_blank">Line
                            Card</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>Glosario">Glosario</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>documentos">Documentación</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>boletines">Boletín</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>videos">Videos</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>seccion-informativa">Sección Informativa</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>soporte">Soporte</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>soporte#faqs">Preguntas Frecuentres</a> <span>|</span></li>
                    <li><a href="<?= RUTA ?>catalogos">Catálogos</a> <span>|</span></li>
                </ul>
            </div>
            <div class="contacto_footer seccion_links">
                <div class="">
                    <div class="dir_mx">
                        <p class="footer-text">Oficina en México</p> <br>
                        Logicbus S.A. De C.V. ©<br>
                        Av. Miguel Hidalgo y Costilla 1443. Piso 6<br>
                        Col. Americana (Torre Iclar)<br>
                        C.P. 44160, Guadalajara Jal. México<br><br>
                        <p class="footer-text">México</p><br>
                        <i class="fas fa-phone"></i> Tel / Fax: +52 33 3854 5975<br>
                        <i class="fas fa-phone"></i> Tel: +52 (33)-3823-4349 <br>
                        Whatsapp Ventas:<br><i class="fab fa-whatsapp"></i><a
                            href="https://api.whatsapp.com/send?phone=525554316718&amp;text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
                            target="_blank"> +52 55 5431 6718</a><br>
                        <i class="fab fa-whatsapp"></i><a
                            href="https://api.whatsapp.com/send?phone=523334438556&amp;text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
                            target="_blank"> +52 33 3443 8556</a>
                    </div>
                </div>
            </div>
            <div class="contacto_footer seccion_links">
                <div class="dir_usa">
                    <p class="footer-text">Oficina en USA</p> <br>
                    Logicbus INC ©<br>
                    863 Bowsprit Road, Chula Vista,<br>
                    CA 91914 Logicbus Inc.<br><br>
                    <p class="footer-text">USA</p><br>
                    <i class="fas fa-phone"></i> +1 (619)-616-7350<br>
                    <a href="https://api.whatsapp.com/send?phone=16196001015&text=Hello Logicbus, I would like to request information"
                        title="Escribenos por Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i> +1 619 600
                        1015</a>
                </div>
            </div>
        </div>
        <div class="justify-content-around mb-4 mt-4 gridContCuatro">
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Métodos de pago</p>
                <div class="container-icons">
                    <img class="methods-size mb-3" src="<?= RUTA ?>assets/pay-methods-color.webp" alt="Métodos de pago">
                </div>
                <p class="footer-text">Transferencias electrónicas</p>
            </div>
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Métodos de envío</p>
                <div class="container-icons">
                    <img class="methods-size mb-3" src="<?= RUTA ?>assets/shipping-methods.webp" alt="Métodos de envío">
                </div>
                <p class="footer-text">Envíos a todo el mundo</p>
            </div>
            <div class="seccion_links">
                <p class="paragraph blue font-weight-bold">Marketplaces</p>
                <div class="container-icons">
                    <a href="https://listado.mercadolibre.com.mx/logicbus#D[A:logicbus]" title="Mercado Libre"
                        target="_blank"><img class="market-size" src="<?= RUTA ?>assets/mercado-libre.webp"
                            alt="Mercado Libre"></a>
                    <a href="https://www.amazon.com/sp?marketplaceID=ATVPDKIKX0DER&amp;seller=AMYXT1XUON8CJ&amp;ref_=dp_merchant_link&amp;asin=B01610IAHC"
                        title="Amazon" target="_blank"><img class="market-size" src="<?= RUTA ?>assets/amazon.webp"
                            alt="Amazon"></a>
                    <a href="https://www.ebay.com/usr/logicbus_inc" title="Ebay" target="_blank"><img
                            class="market-size" src="<?= RUTA ?>assets/ebay.webp" alt="Ebay"></a>
                </div>
            </div>
            <div class="seccion_links">
                <p class="footer-text">Siguenos en nuestras redes en español:</p><br>
                <div class="container-icons">
                    <a href="https://www.facebook.com/logicbus/" title="Siguenos en Facebook" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/logicbus_sa/" title="Siguenos en Instagram" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://www.youtube.com/channel/UCGYjB-qzlDGvtd9BCrGTOJQ?sub_confirmation=1"
                        title="Suscríbete a nuestro canal" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/youtube.svg" alt="Youtube">
                    </a>
                    <a href="https://www.tiktok.com/@logicbus" title="Siguenos en Tiktok" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/tiktok.svg" alt="Tiktok">
                    </a>
                    <a href="https://www.pinterest.com.mx/logicbusMX/" title="Siguenos en Pinterest" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/pinterest.svg" alt="Pinterest">
                    </a>
                    <a href="javascript:void(0);" onclick="abrir()">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/whatsapp.svg">
                    </a>
                    <a href="https://www.linkedin.com/company/logicbus" title="Siguenos en Linkedin" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/linkedin.svg" alt="Linkedin">
                    </a>
                    <a href="https://twitter.com/Logicbus" title="Siguenos en X" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/twitter.svg" alt="X">
                    </a>
                    <a href="https://www.logicbus.com.mx/blog/" title="Visita nuestro blog" target="_blank">
                        <img class="icon-size" src="https://www.logicbus.com.mx/assets/blog.svg" alt="Blog">
                    </a>
                </div>
                <p class="footer-text">Siguenos en nuestras redes en inglés:</p><br>
                <div class="container-icons">
                    <a href="https://www.facebook.com/LogicbusINC" title="Follow us on Facebook" target="_blank"><img
                            class="icon-size" src="https://www.logicbus.com.mx/assets/facebook.svg" alt="Facebook"></a>
                    <a href="https://www.instagram.com/logicbus_inc/" title="Follow us on Instagram"
                        target="_blank"><img class="icon-size" src="https://www.logicbus.com.mx/assets/instagram.svg"
                            alt="Instagram"></a>
                    <a href="https://www.youtube.com/@logicbusinc2138" title="Subscribe our Channel on Youtube"
                        target="_blank"><img class="icon-size" src="https://www.logicbus.com.mx/assets/youtube.svg"
                            alt="Youtube"></a>
                    <a href="https://www.linkedin.com/company/logicbus-inc/" title="Follow us on Linkedin"
                        target="_blank"><img class="icon-size" src="https://www.logicbus.com.mx/assets/linkedin.svg"
                            alt="Linkedin"></a>
                    <a href="https://blog.logicbus.com/" title="Visit our Blog" target="_blank"><img class="icon-size"
                            src="https://www.logicbus.com.mx/assets/blog.svg" alt="Blog"></a>
                </div>
                <div class="mt-4">
                    <a href="https://tienda.logicbus.mx/en/inscribete-a-nuestros-boletines-1" class="btn-newsletter">
                        <b>Inscríbete nuestro boletín</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="divCentrado" align="center">
            <div class="justify-content-center seccion_links">
                <p class="footer-text">
                    <a href="https://www.logicbus.com.mx/aviso-privacidad">Aviso de Privacidad</a> |
                    <a href="https://www.logicbus.com.mx/Terminos-y-Condiciones-ep-2-1">Términos y Condiciones</a>
                </p>
            </div>
            <div class="justify-content-center footer-copy">
                <span>Derechos de Autor
                    <script type="text/javascript" language="javascript">
                    var date = new Date();
                    document.write(date.getFullYear())
                    </script>
                    Logicbus. Todos los Derechos Reservados.
                </span>
            </div>
        </div>
    </div>



</footer>


<div class="overlay" id="overlay" onclick="cerrar()"></div>

<div class="modal" id="modal">
    <div class="modal-header">
        <div class="user-avatar"></div>
    </div>

    <div class="modal-content">
        <h2>Nueva Cotización</h2>

        <div class="grid-inputs">
            <input id="nombre" placeholder="Nombre completo">
            <input id="empresa" placeholder="Empresa">
            <input id="telefono" placeholder="Teléfono" maxlength="10" oninput="soloNumeros(this)">

            <input id="puesto" class="full-width" placeholder="¿Cuál es tu rol?">

            <select id="tipo" class="full-width">
                <option value="">Tipo de cliente</option>
                <option>Primera compra</option>
                <option>Cliente recurrente</option>
            </select>

            <input id="necesidad" class="full-width" placeholder="¿Qué solución buscas?">

            <div class="dropdown full-width">
                <input id="marca" placeholder="Marca..." onkeyup="filtrarMarca()">
                <div class="dropdown-list" id="listaMarcas"></div>
            </div>

            <input id="parte" class="full-width" placeholder="Número de parte" style="display:none;">

            <div class="dropdown full-width">
                <input id="categoria" placeholder="Categoría..." onkeyup="filtrarCategoria()">
                <div class="dropdown-list" id="listaCategorias"></div>
            </div>

            <input id="aplicacion" class="full-width" placeholder="Aplicación">

            <select id="industria">
                <option value="">Industria</option>
                <option>Manufactura general</option>
                <option>Automotriz</option>
                <option>Alimentos y bebidas</option>
                <option>Energía</option>
                <option>Logística y almacenes</option>
                <option>Farmacéutica</option>
                <option>Hospitalaria / sector salud</option>
                <option>Integrador / ingeniería</option>
                <option>Otra</option>
            </select>

            <input id="ubicacion" placeholder="Ubicación">

            <select id="urgencia" class="full-width">
                <option value="">Plazo</option>
                <option>Inmediato</option>
                <option>1-3 meses</option>
                <option>3 - 6 meses</option>
                <option>6 meses - 1 año</option>
                <option>Más de 1 año</option>
            </select>

            <select id="presupuesto">
                <option value="">Nivel</option>
                <option>Componente específico (ej: sensor, PLC, HMI)</option>
                <option>Solución con varios equipos</option>
                <option>Automatización de proceso</option>
                <option>Proyecto integral / llave en mano</option>
            </select>

            <select id="asesoria">
                <option value="">¿Requieres asesoría técnica?</option>
                <option>Sí, necesito orientación</option>
                <option>No, ya tengo definido lo que necesito</option>
            </select>

            <select id="fuente">
                <option value="">¿Cómo nos encontraste?</option>
                <option>Video (YouTube, TikTok, etc.)</option>
                <option>Publicación en redes</option>
                <option>Búsqueda en Google</option>
                <option>Recomendación</option>
                <option>Cliente actual</option>
                <option>Otro</option>
            </select>
        </div>

        <button class="btn-enviar" onclick="enviar()">Enviar</button>
        <button class="btn-cerrar" onclick="cerrar()">Cancelar</button>
    </div>
</div>

<!-- btn Whatsapp -->
<a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
    class="btn-wsp" target="_blank">
    <i class="fa fa-whatsapp icono"></i>
</a>
<!-- end btn whatsapp -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = "https://embed.tawk.to/5ca674ff1de11b6e3b06f73d/default";
    s1.charset = "UTF-8";
    s1.setAttribute("crossorigin", "*");
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
// El Script permanece igual al tuyo, solo he adaptado las funciones abrir/cerrar para que coincidan con los IDs.
// (Categorías, Marcas y Funciones de filtrado aquí...)
const categorias = [
    "Automatización y control de procesos",
    "Adquisición de datos (DAQ)",
    "Consumo y análisis de energía",
    "PCs y comunicaciones industriales",
    "Prueba y medición",
    "Sensores y transductores",
    "Robótica industrial",
    "Robots colaborativos (Cobots)",
    "AMR (Robots móviles autónomos)",
    "Visión artificial",
    "IIoT / Industria 4.0",
    "Instrumentación industrial",
    "Software y herramientas de desarrollo",
    "Biotecnología / Hospitales",
    "OEE y productividad"
];
const marcas = [
    "3Onedata", "Aicsys", "Applied Motion", "Arbor", "Arestech", "Auk Industries", "Autoxing",
    "Blyott", "Brainchild", "Brooks", "Calex", "Chainway", "Cimon", "Cincoze", "Controllino",
    "Darveen", "Daviteq", "Davo Lin", "Digilent", "Dorna Robotics", "Emdoor", "Fatek", "Futek",
    "Graphtec", "ICP DAS", "Industrial Shields", "IP Displays", "Kokobots", "Loggerflex",
    "Logicbus Teclados", "Logicbus Graficadores", "Madgetech", "Measurement Computing",
    "Multiway", "National Control Devices", "Neovero", "Photocraft", "Pico Technology",
    "Qualcomm", "RFID Inc", "RTA", "Sealevel", "Seneca", "Siasun", "Siglent", "Taicenn",
    "Teracom", "Tri-Tronics", "Vitrek", "Waycon", "Youibot"
];
const relacionMarca = {
    "3onedata": "PCs y comunicaciones industriales",
    "aicsys": "PCs y comunicaciones industriales",
    "applied motion": "Automatización y control de procesos",
    "arbor": "PCs y comunicaciones industriales",
    "arestech": "PCs y comunicaciones industriales",
    "auk industries": "OEE y productividad",
    "autoxing": "AMR (Robots móviles autónomos)",
    "blyott": "Biotecnología / Hospitales",
    "brainchild": "Adquisición de datos (DAQ)",
    "brooks": "Robots colaborativos (Cobots)",
    "calex": "Sensores y transductores",
    "chainway": "PCs y comunicaciones industriales",
    "cimon": "Automatización y control de procesos",
    "cincoze": "PCs y comunicaciones industriales",
    "controllino": "Automatización y control de procesos",
    "darveen": "PCs y comunicaciones industriales",
    "daviteq": "IIoT / Industria 4.0",
    "davo lin": "PCs y comunicaciones industriales",
    "digilent": "Prueba y medición",
    "dorna robotics": "Robótica industrial",
    "emdoor": "PCs y comunicaciones industriales",
    "fatek": "Automatización y control de procesos",
    "futek": "Sensores y transductores",
    "graphtec": "Adquisición de datos (DAQ)",
    "icp das": "Adquisición de datos (DAQ)",
    "industrial shields": "Automatización y control de procesos",
    "ip displays": "Automatización y control de procesos",
    "kokobots": "AMR (Robots móviles autónomos)",
    "loggerflex": "IIoT / Industria 4.0",
    "logicbus teclados": "PCs y comunicaciones industriales",
    "logicbus graficadores": "Adquisición de datos (DAQ)",
    "madgetech": "Adquisición de datos (DAQ)",
    "measurement computing": "Adquisición de datos (DAQ)",
    "multiway": "AMR (Robots móviles autónomos)",
    "national control devices": "IIoT / Industria 4.0",
    "neovero": "Software y herramientas de desarrollo",
    "photocraft": "Sensores y transductores",
    "pico technology": "Prueba y medición",
    "qualcomm": "IIoT / Industria 4.0",
    "rfid inc": "IIoT / Industria 4.0",
    "rta": "PCs y comunicaciones industriales",
    "sealevel": "Adquisición de datos (DAQ)",
    "seneca": "Instrumentación industrial",
    "siasun": "Robótica industrial",
    "siglent": "Prueba y medición",
    "taicenn": "PCs y comunicaciones industriales",
    "teracom": "IIoT / Industria 4.0",
    "tri-tronics": "Sensores y transductores",
    "vitrek": "Prueba y medición",
    "waycon": "Sensores y transductores",
    "youibot": "AMR (Robots móviles autónomos)"
};

function abrir() {
    document.getElementById("modal").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function cerrar() {
    document.getElementById("modal").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function soloNumeros(input) {
    input.value = input.value.replace(/\D/g, ''); // elimina todo lo que no sea número
}

function filtrarMarca(){
    let inputMarca = document.getElementById("marca");
    let lista = document.getElementById("listaMarcas");
    let inputCategoria = document.getElementById("categoria");
    let inputParte = document.getElementById("parte");

    let v = inputMarca.value.toLowerCase();

    lista.innerHTML = "";
    lista.style.display = v ? "block" : "none";

    marcas
      .filter(m => m.toLowerCase().includes(v))
      .forEach(item => {
        let d = document.createElement("div");
        d.textContent = item;

        d.onclick = () => {
            inputMarca.value = item;
            lista.style.display = "none";

            inputParte.style.display = "block";

            let cat = relacionMarca[item.toLowerCase()];
            if(cat){
                inputCategoria.value = cat;
            }
        };

        lista.appendChild(d);
      });
}
function filtrarCategoria(){
    let inputCategoria = document.getElementById("categoria");
    let lista = document.getElementById("listaCategorias");

    let v = inputCategoria.value.toLowerCase();

    lista.innerHTML = "";
    lista.style.display = v ? "block" : "none";

    categorias
      .filter(c => c.toLowerCase().includes(v))
      .forEach(item => {
        let d = document.createElement("div");
        d.textContent = item;

        d.onclick = () => {
            inputCategoria.value = item;
            lista.style.display = "none";
        };

        lista.appendChild(d);
      });
}

function enviar() {

    // ===== OBTENER ELEMENTOS =====
    let nombre = document.getElementById("nombre");
    let empresa = document.getElementById("empresa");
    let telefono = document.getElementById("telefono");
    let puesto = document.getElementById("puesto");
    let necesidad = document.getElementById("necesidad");
    let aplicacion = document.getElementById("aplicacion");
    let industria = document.getElementById("industria");
    let ubicacion = document.getElementById("ubicacion");
    let marca = document.getElementById("marca");
    let parte = document.getElementById("parte");
    let categoria = document.getElementById("categoria");
    let tipo = document.getElementById("tipo");
    let urgencia = document.getElementById("urgencia"); // plazo
    let presupuesto = document.getElementById("presupuesto"); // nivel solución
    let asesoria = document.getElementById("asesoria");
    let fuente = document.getElementById("fuente");

    // ===== VALIDACIÓN =====
    let campos = [{
            el: nombre,
            nombre: "Nombre"
        },
        {
            el: empresa,
            nombre: "Empresa"
        },
        {
            el: telefono,
            nombre: "Teléfono"
        },
        {
            el: categoria,
            nombre: "Categoría"
        }
    ];

    for (let campo of campos) {
        if (!campo.el.value.trim()) {
            alert("Por favor completa el campo: " + campo.nombre);
            campo.el.focus();
            return;
        }
    }

    // validar teléfono
    if (telefono.value.length < 10) {
        alert("El teléfono debe tener 10 dígitos");
        telefono.focus();
        return;
    }

    // ===== FUNCIÓN PARA OMITIR VACÍOS =====
    function campo(label, valor) {
        return valor ? `${label}: ${valor}\n` : "";
    }

    // ===== MENSAJE =====

    let m = `Hola, quiero una cotización:
 DATOS DE CONTACTO:
${campo("Nombre", nombre.value)}
${campo("Empresa", empresa.value)}
${campo("Teléfono", telefono.value)}
${campo("Puesto", puesto.value)}

 INFORMACIÓN DEL PROYECTO:
${campo("Solución buscada", necesidad.value)}
${campo("Aplicación", aplicacion.value)}
${campo("Industria", industria.value)}
${campo("Ubicación del proyecto", ubicacion.value)}

 ESPECIFICACIONES TÉCNICAS:
${campo("Marca", marca.value)}
${campo("Número de parte", parte.value)}
${campo("Categoría", categoria.value)}

 DETALLES COMERCIALES:
${campo("Tipo de cliente", tipo.value)}
${campo("Plazo de implementación", urgencia.value)}
${campo("Nivel de solución", presupuesto.value)}
${campo("Requiere asesoría técnica", asesoria.value || "Por definir")}

 ORIGEN DEL CONTACTO:
${campo("Cómo nos encontraste", fuente.value)}`;

    let url = "https://wa.me/525554316718?text=" + encodeURIComponent(m);
    window.open(url);
}

document.addEventListener("keydown", function(e) {
    if (e.key === "Escape") {
        cerrar();
    }
});
</script>