
var nband=5;        
var Timeoutfinished = false;
const code = [0,0,0,0,0]; // lista de colores
var Lfilt = ['none','none','none','none','invert(73%) sepia(43%) saturate(2203%) hue-rotate(12deg) brightness(114%) contrast(90%)','none']; //memoria de colores
var myVar;


// iniciacion de la imagen de la resistencia (canvas)
var canvas = document.getElementById('resistencia');
if (window.innerWidth <= 600) { 
canvas.width = 250;
canvas.height = 100;
} else {
canvas.width = 500;
canvas.height = 200;
}
var context = canvas.getContext('2d' , { willReadFrequently: true });
var imagenes = [
new Image(),
new Image(),
new Image(),
new Image(),
new Image(),
new Image(),
new Image()
];
imagenes[0].src = 'images/resistencia/linea1.svg';
imagenes[1].src = 'images/resistencia/linea2.svg';
imagenes[2].src = 'images/resistencia/linea3.svg';
imagenes[3].src = 'images/resistencia/linea4.svg';
imagenes[4].src = 'images/resistencia/linea5.svg';
imagenes[6].src = 'images/resistencia/base.svg';
imagenes[5].src = 'images/resistencia/sombra.svg';
imagenes[0].id = '1';
imagenes[1].id = '2';
imagenes[2].id = '3';
imagenes[3].id = '4';
imagenes[4].id = '5';
imagenes[6].id = 'base';
imagenes[5].id = 'sombra';
var imagenesCargadas = 0;
for (var i = 0; i < imagenes.length-1; i++) {
imagenes[i].onload = function() {
        imagenesCargadas++;
        if (imagenesCargadas == imagenes.length-1) { // Todas las imágenes se han cargado
        context.drawImage(imagenes[6], 0, 0, canvas.width, canvas.height);
        for (var j = 0; j < imagenes.length-1; j++) {
                if (j==4)context.filter ="invert(73%) sepia(43%) saturate(2203%) hue-rotate(12deg) brightness(114%) contrast(90%)";
                else context.filter ="none";
                context.drawImage(imagenes[j], 0, 0, canvas.width, canvas.height);
                
        }
        context.stroke();
        }
};
}

//evento de escucha
canvas.addEventListener('click', function(e) {
var x = e.clientX - canvas.getBoundingClientRect().left;
var y = e.clientY - canvas.getBoundingClientRect().top;
var clickedImageData = context.getImageData(x, y, 1, 1).data;
for (var i = 0; i < imagenes.length; i++) {
if(nband==4 && i==0){}
else{
        var tempCanvas = document.createElement('canvas');
        tempCanvas.width = canvas.width;
        tempCanvas.height = canvas.height;
        var tempContext = tempCanvas.getContext('2d');
        tempContext.drawImage(imagenes[i], 0, 0, canvas.width, canvas.height);
        var tempImageData = tempContext.getImageData(x, y, 1, 1).data;
        if (tempImageData[3] !== 0 && i!=5 && i!=6) { // Si la imagen no es transparente en el punto de clic
        linecolored(imagenes[i].id ,context , i );
        }
}        
}
});

//funcion de 4-5 lineas
function changeLines(n){
        nband=n;
        code[0]=0;
        if(nband==5){
                Lfilt[0]="none";
        }else{
                Lfilt[0]="invert(81%) sepia(58%) saturate(326%) hue-rotate(344deg) brightness(89%) contrast(89%)";
        }
        context.filter=Lfilt[5];
        context.drawImage(imagenes[6], 0, 0, canvas.width, canvas.height);
        for(n=0;n<6;n++){
                context.filter = Lfilt[n];
                context.drawImage(imagenes[n], 0, 0, canvas.width, canvas.height);        
        }
        calcRes();
}

 // funciones de colores
async function linecolored(id ,context , i  ){
showband(id);
var col=id-1;
var filt="";
while(!Timeoutfinished) {
        await new Promise(resolve => setTimeout(resolve, 50));
}
Timeoutfinished=false;
switch(code[col]){
        case 0: filt="invert(0%) sepia(0%) saturate(7041%) hue-rotate(140deg) brightness(85%) contrast(107%)"; break;
        case 1: filt="invert(25%) sepia(11%) saturate(5315%) hue-rotate(322deg) brightness(108%) contrast(109%)"; break;
        case 2: filt="invert(11%) sepia(88%) saturate(5012%) hue-rotate(357deg) brightness(118%) contrast(119%)"; break;
        case 3: filt="invert(80%) sepia(52%) saturate(5629%) hue-rotate(2deg) brightness(106%) contrast(102%)"; break;
        case 4: filt="invert(93%) sepia(51%) saturate(1891%) hue-rotate(356deg) brightness(105%) contrast(108%)"; break;
        case 5: filt="invert(24%) sepia(100%) saturate(2073%) hue-rotate(96deg) brightness(92%) contrast(104%)"; break;
        case 6: filt="invert(9%) sepia(99%) saturate(7285%) hue-rotate(247deg) brightness(90%) contrast(145%)"; break;
        case 7: filt="invert(65%) sepia(58%) saturate(687%) hue-rotate(253deg) brightness(104%) contrast(87%)"; break;
        case 8: filt="invert(50%) sepia(0%) saturate(417%) hue-rotate(202deg) brightness(101%) contrast(83%)"; break;
        case 9: filt="invert(100%) sepia(0%) saturate(7487%) hue-rotate(224deg) brightness(102%) contrast(106%)"; break;
        case 10:filt="invert(81%) sepia(58%) saturate(326%) hue-rotate(344deg) brightness(89%) contrast(89%)"; break;
        case 11:filt="invert(73%) sepia(43%) saturate(2203%) hue-rotate(12deg) brightness(114%) contrast(90%)";break;
        case 12:filt="invert(78%) sepia(26%) saturate(32%) hue-rotate(314deg) brightness(107%) contrast(83%)";break;
}
Lfilt[i]=filt;
        context.filter=Lfilt[5];
        context.drawImage(imagenes[6], 0, 0, canvas.width, canvas.height);
        
        for(n=0;n<6;n++){
                context.filter = Lfilt[n];
                context.drawImage(imagenes[n], 0, 0, canvas.width, canvas.height);        
        }
}





function colorcalc(Line,Color){
        clearTimeout(myVar);
        var out = 1+Line;
        var div = document.getElementById("line"+out);
        div.style.transform = "scaleY(0)";
        div.style.overflow="hidden";
        code[Line]=Color;
        Timeoutfinished = true;
        calcRes();
}



function showband(l){

var div = document.getElementById("line"+l);
        div.style.width = "120px";
        div.style.transform = "scaleY(1)";
        div.style.overflow="visible";
        myVar = setTimeout(function(){ 
        var div = document.getElementById("line"+l);
        div.style.transform = "scaleY(0)";
        div.style.overflow="hidden";
        Timeoutfinished = true;
        }, 8000);
        return;
}

function contarUnidades(numero) {
    // Convertir el número a cadena
var str = numero.toString();
    // Separar la cadena en dos partes: antes y después del punto decimal
var partes = str.split('.');
    // Contar las unidades antes y después del punto decimal
var Units = partes[0].length;
var Decimals = partes.length > 1 ? partes[1].length : 0;
    // Devolver el resultado
return {
        U: Units,
        D: Decimals
};
}

function calcRes(){
        var resVal = 0;

        var e=10**code[3];
        switch (code[3]){
                case (11):
                        e=0.1;
                break;
                case (12):
                        e=0.01;
                break;

        };
//calculo de la resistencia
resVal=((code[0]*100)+(code[1]*10)+(code[2]*1))*e;


var val = contarUnidades(resVal);
let valor = val.U;
var prefi="";
var resTx=resVal.toString();
switch (true) {
case (resTx.charAt(0) === '0' &&  val.D >0):
        resVal= resVal*1000;
        prefi="m";
        break;
case (valor < 4):
        break;
case (valor >= 4 && valor <= 6):
        resVal= resVal*0.001;
        prefi="K";
        break;
case (valor >= 7 && valor <= 9):
        resVal= resVal*0.000001;
        prefi="M";
        break;
case (valor > 9):
        resVal= resVal*0.000000001;
        prefi="G";
        break;
default:
}

var tol="5%"
switch (code[4]){
        case (1): tol="1%";
                break;
        case (2): tol="2%";
                break;
        case (11): tol="5%";
                break;
        case (12): tol="10%";
                break;
        case (10): tol="20%";
                break;
        default: tol="5%";
                break;
}

document.getElementById("value").innerHTML =parseFloat(resVal.toFixed(3)) +" " + prefi +"Ohms <br>±"+tol ;


}
 