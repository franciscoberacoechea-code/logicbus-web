
// medida.js

// Función para obtener la medida desde el iframe
function getIframe(iframeId) {
    const iframe = document.getElementById(iframeId);
    if (iframe) {
        const altura = iframe.contentWindow.document.documentElement.scrollHeight;
        return `${altura}px`;
    } else {
        return "800px";
    }
}
