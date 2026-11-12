$(function() {
    $('.bxslider').bxSlider({ auto: true, pause: 7000, speed: 1000 });
    $(".owl-carousel").owlCarousel({
        itemsCustom: [
            [300, 3],
            [400, 4],
            [550, 6],
            [750, 8],
            [1000, 8]
        ],
        autoPlay: 5000,
        scrollPerPage: true
    });
    $('.fancybox').fancybox({ autoSize: 'false', maxWidth: 600 });
    $('.fancybox-foto').fancybox({ autoSize: 'false', maxWidth: 1100 });
    $('#parentVerticalTab').easyResponsiveTabs({
        type: 'vertical', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo2');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    /*$(".forma-contacto").submit(function(e){
    	e.preventDefault();
    	valido = true;
    	
    	$(this).find('input').each(function(){
    		if($(this).prop('required')){
    			if($(this).val().length === 0){
    				valido = false;
    			}
    		}
    	});
    	
    	if(valido){
    		$(this).find('input[type="submit"]').val('Enviando...');
    		$(this).find('input[type="submit"]').attr('disabled','disabled');
    		$.post("php/envia.php", $(this).serialize(), function(data) {
    			if(data.msj=="OK"){
    				location.href = data.url;
    			}
    			else{
    				alert("Ocurrió un error al enviar el formulario, intenta de nuevo");
    				$(this).find('input[type="submit"]').removeAttr('disabled');
    				$(this).find('input[type="submit"]').val('Enviar');
    			}
    		}, 'json');
    	}
    	else{
    		alert("Favor de completar los campos obligatorios");
    	}
    });*/
});