// Memory Game
// © 2014 Nate Wiley
// License -- MIT
// best in full screen, works on phones/tablets (min height for game is 500px..) enjoy ;)
// Follow me on Codepen

(function(){
	
	var Memory = {

		init: function(cards){
			this.$game = $(".game");
			this.$modal = $(".modal");
			this.$overlay = $(".modal-overlay");
			this.$restartButton = $("button.restart");
			this.cardsArray = $.merge(cards, cards);
			this.shuffleCards(this.cardsArray);
			this.setup();
		},

		shuffleCards: function(cardsArray){
			this.$cards = $(this.shuffle(this.cardsArray));
		},

		setup: function(){
			this.html = this.buildHTML();
			this.$game.html(this.html);
			this.$memoryCards = $(".card");
			this.binding();
			this.paused = false;
     	this.guess = null;
		},

		binding: function(){
			this.$memoryCards.on("click", this.cardClicked);
			this.$restartButton.on("click", $.proxy(this.reset, this));
		},
		// kinda messy but hey
		cardClicked: function(){
			var _ = Memory;
			var $card = $(this);
			if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
				$card.find(".inside").addClass("picked");
				if(!_.guess){
					_.guess = $(this).attr("data-id");
				} else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
					$(".picked").addClass("matched");
					_.guess = null;
				} else {
					_.guess = null;
					_.paused = true;
					setTimeout(function(){
						$(".picked").removeClass("picked");
						Memory.paused = false;
					}, 600);
				}
				if($(".matched").length == $(".card").length){
					_.win();
				}
			}
		},

		win: function(){
			this.paused = true;
			setTimeout(function(){
				Memory.showModal();
				Memory.$game.fadeOut();
			}, 1000);
		},

		showModal: function(){
			this.$overlay.show();
			this.$modal.fadeIn("slow");
		},

		hideModal: function(){
			this.$overlay.hide();
			this.$modal.hide();
		},

		reset: function(){
			this.hideModal();
			this.shuffleCards(this.cardsArray);
			this.setup();
			this.$game.show("slow");
		},

		// Fisher--Yates Algorithm -- http://bost.ocks.org/mike/shuffle/
		shuffle: function(array){
			var counter = array.length, temp, index;
	   	// While there are elements in the array
	   	while (counter > 0) {
        	// Pick a random index
        	index = Math.floor(Math.random() * counter);
        	// Decrease counter by 1
        	counter--;
        	// And swap the last element with it
        	temp = array[counter];
        	array[counter] = array[index];
        	array[index] = temp;
	    	}
	    	return array;
		},

		buildHTML: function(){
			var frag = '';
			this.$cards.each(function(k, v){
				frag += '<div class="card" data-id="'+ v.id +'"><div class="inside">\
				<div class="front"><img src="'+ v.img +'"\
				alt="'+ v.name +'" /><p><span style="font-size: 8px;">'+ v.nombre +'</span></p></div>\
				<div class="back"><img src="images/favicon.ico"\
				alt="Codepen" /></div></div>\
				</div>';
			});
			return frag;
		}
	};

	var cards = [
		{
			name: "encoder",
			img: "imagenes/224/Model-755A-thumb.png",
			nombre: "Encoder",
			id: 1,
		},
		{
			name: "logicbus",
			img: "images/logo_logicbus_ch.jpg",
			nombre: "Logicbus",
			id: 2
		},
		{
			name: "indusoft",
			img: "imagenes/02/indusoft/logo.jpg",
			nombre: "Indusoft",
			id: 3
		},
		{
			name: "plc",
			img: "imagenes/29/Nueva%20carpeta/FBs-24MCU/DSC04342.JPG",
			nombre: "PLC",
			id: 4
		}, 
		{
			name: "celdas de carga",
			img: "imagenes/36/llb500TL.jpg",
			nombre: "Celdas de Carga",
			id: 5
		},
		{
			name: "convertidores de protocolos",
			img: "imagenes/02/I-7520AR.jpg",
			nombre: "Convertidores de Protocolos",
			id: 6
		},
		{
			name: "switch ethernet industrial",
			img: "imagenes/02/NS-208_ch.jpg",
			nombre: "Switch Ethernet Industrial",
			id: 7
		},
		{
			name: "Pantalla HMI Touchscreen",
			img: "http://tienda.logicbus.com.mx/assets/images/50/lbmt504230te.png",
			nombre: "Pantalla HMI Touchscreen",
			id: 8
		},
		{
			name: "Adquision de Datos",
			img: "http://tienda.logicbus.com.mx/assets/images/01/E-DIO24.jpg",
			nombre: "Adquisición de Datos",
			id: 9
		},
		/*
		
		
		
		
		
		{
			name: "sass",
			img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/sass-logo.png",
			id: 10
		},
		{
			name: "sublime",
			img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/sublime-logo.png",
			id: 11
		},
		{
			name: "wordpress",
			img: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/wordpress-logo.png",
			id: 12
		},
		*/
	];
    
	Memory.init(cards);


})();