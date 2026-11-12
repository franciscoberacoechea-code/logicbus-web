

function leerCookie(nombre) {
    var nombreEQ = nombre + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nombreEQ) == 0) return c.substring(nombreEQ.length,c.length);
    }
    return null;
}


            window.onload = function() {
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName('close')[0];
    valorDeLaCookie= leerCookie('suscript');
    
    if (valorDeLaCookie==null) {
    modal.style.display = 'block';

    }

    span.onclick = function() {
    modal.style.display = 'none';
}

}


$(document).ready(function() {
    $('#field-add-another').hide();
});




  // Selecciona el elemento div
var i=0;
var div = document.querySelector('.modal-content');


  // Crea una nueva instancia de ResizeObserver   273
var resizeObserver = new ResizeObserver(function(entries) {

      // Para cada entrada
    for (let entry of entries) {
          // Imprime las nuevas dimensiones del elemento
        if( entry.contentRect.height<280 &&  entry.contentRect.height != 0){
        var date = new Date();
          //date.setTime(date.getTime() + (180*24*60*60*1000)); // Establece la fecha de expiración a 180 días en el futuro
        date.setTime(date.getTime() + (180*24*60*60*1000));
        var expires = "expires="+ date.toUTCString();
        document.cookie = "suscript=1;" + expires + ";path=/";
        }
        }

});

  // Observa los cambios en el tamaño del div
resizeObserver.observe(div);
