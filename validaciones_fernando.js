var ban;


function popUpdes(URL) {
    day = new Date();
    id = day.getTime();
    eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=600,height=155,left = 100,top = 5');");
  }

function act_des1(f){
  f.cam2.disabled=true
  f.fec2.disabled=true
  f.hor.disabled=true
  f.cam1.disabled=false
  f.fec1.disabled=false
}

function act_des2(f){
  f.cam1.disabled=true
  f.fec1.disabled=true
  f.cam2.disabled=false
  f.fec2.disabled=false
  f.hor.disabled=false
}

function checar(f){
 if (f.reporte[0].checked==true && (f.cam1.value=='' || f.fec1.value=='')){
   alert ("Del camión que elegiste no existe archivo")
   return false;
 } else 
    if (f.reporte[1].checked==true && (f.cam2.value=='' || f.fec2.value=='' || f.hor.value=='')){
      alert ("Del camión que elegiste no existen registros")
      return false;
    }
 if (ban==1){
  f.action='generar.php'
 }
}


function no_nulos(forma)	//ESTA FUNCION SE EJECUTA EN EL EVENTO onsubmit() 
{						 	//NO PERMITE CAMPOS EN BLANCO
  cont=0; arroba=-1; punto=-1;
  x = forma.length	//ESTA LINEA OBTIEN EL NUMERO DE OBJETOS DE LA FORMA
  msg_alert = ['','','','',
               'Escribe tu nombre', 
               'Escribe tu apellido paterno',
			   'Escribe tu apellido materno',
               'Es indispensable el E-Mail',
               'Es necesario ingresar la empresa',
               'Escribe tu direccion',
         	   'Escribe el número interior',
			   '',
               '',
               'Escribe tu telefono',
			   '',
               'Selecciona tu pais',
               'Selecciona tu estado',
			   '', 
               'Escribe tu ciudad',
			   '',
               '',
               
               'Escribe la direccion de tu pagina web',
               'Haznos saber tu comentario',
			   '',
			   '',
			   '',
			   'Introduce el texto del CAPTCHA']

  for(i = 0; i < x; i++)
 if( forma[i].type == 'text' || forma[i].name == 'msg' || forma[i].name == 'edo' || forma[i].name == 'pais')  //AL UTILIZAR LA FORMA CON INDICE SE HACE REFERENCIA AL OBJETO
    {
      forma[i].style.backgroundColor="" 
      cont += 1
    }




  for(i = 0; i < x; i++)

if ((( forma[i].type == 'text' || forma[i].name == 'msg' || forma[i].name == 'edo' || forma[i].name == 'pais' ) && (i!=11 && i!=12 && i!=14 && i!=17 ))&& forma[i].value == '')
    {
      alert(msg_alert[i])
	  forma[i].style.backgroundColor="#ADCDFE"
      forma[i].focus()
      return false;
}


     /*****************************************************************************************************
     *  El siguiente IF fue modifico el 15-Dic-05 por Daniel Flores					  *
     *	Debido a que la linea:										  *
     *													  *
     *  forma.mail.value.indexOf('@') != forma.mail.value.indexOf('.',forma.mail.value.indexOf('@'))-1)   *
     *													  *
     *	era la siguiente:										  *
     *													  *
     *	forma.mail.value.indexOf('@') < forma.mail.value.indexOf('.')-1)				  *
     *													  *
     *	Esto no permitia enviar mails con punto antes del arroba(@) pero tambien validaba que no ubiera   *
     *	un punto enseguida del arroba(@)								  *
     *													  *
     *	Por lo tanto no se elimino la comparacion, si no que solo se modifico para que buscara el indice  *
      *	del punto despues del arroba(@) y se confirmara que es diferente al indice del arroba(@)          *
     *****************************************************************************************************/
	 arroba = forma.mail.value.indexOf('@')
	 punto = forma.mail.value.indexOf('.')
  if(forma.mail.value.indexOf(' ')==-1 &&
	 (forma.mail.value.indexOf('@') > 0 &&
      forma.mail.value.indexOf('@') < forma.mail.value.length-3) &&
	 (forma.mail.value.indexOf('.') > 0 &&
	  forma.mail.value.indexOf('.') < forma.mail.value.length-1) &&
	 (forma.mail.value.lastIndexOf('.') > forma.mail.value.lastIndexOf('@')) )
	    forma.mail.style.backgroundColor=""
  else
  {
    alert("La direccion del e-mail es incorrecta.\nEjemplo:\ntu_login@tu_proveedor.ext.ext")
    forma.mail.style.backgroundColor="#ADCDFE"
    forma.mail.focus()
    return false
  }



  //PARA VALIDAR EL NUMERO DE TELEFONO CON EL FORMATO 33 38545975 NO IMPORTA QUE TENGA GUION PERO DEBE DE LLEVAR LA LADA 
  //Y DEBEN DE SER AL MENOS 10 DIGITOS
  
  var cad = forma.tel.value
  if(cad.indexOf('-') != -1)
  {
    
    var temp = new Array();
    temp = cad.split('-');
    cad = ''
    for(var i = 0; i < temp.length; i++)
      cad = cad + temp[i];
  }

  if(cad.length < 7)
  {
    alert("El telefono debe contener al menos 7 digitos.")
    forma.tel.style.backgroundColor="#ADCDFE"
    forma.tel.focus()
    return false; 
  }


  if(forma.dist.checked || forma.prod.checked || forma.mailq.checked)
    return true
  else
  {
    alert("Por lo menos una opcion debe de ser seleccionada")
    forma.dist.style.backgroundColor="#ADCDFE"
    forma.prod.style.backgroundColor="#ADCDFE"
    forma.mailq.style.backgroundColor="#ADCDFE"
    return false
  }
    
if(forma.pais.label==3 && forma.estado==""){
alert("Escribe tu estado");
forma.estado.style.visibility='';
return false;
}
else{
return true;
}




}	//FIN FUNCION NO_NULOS									


function no_nulos_g(forma)	//ESTA FUNCION SE EJECUTA EN EL EVENTO onsubmit() PARA FORMULARIO DE BUZON DE GERENCIA
{						 	//NO PERMITE CAMPOS EN BLANCO
  cont=0; arroba=-1; punto=-1;
  x = forma.length	//ESTA LINEA OBTIEN EL NUMERO DE OBJETOS DE LA FORMA
  msg_alert = ['Escribe tu nombre', 
               'Escribe tu apellido paterno',
			   'Escribe tu apellido materno',
               'Es indispensable el E-Mail',
			   '',
               '',
               'Haznos saber tu comentario',
			   'Introduce el texto del CAPTCHA']

  for(i = 0; i < x; i++)
 if( forma[i].type == 'text' || forma[i].name == 'msg2' || forma[i].name == 'cd2' || forma[i].name == 'pais2')  //AL UTILIZAR LA FORMA CON INDICE SE HACE REFERENCIA AL OBJETO
    {
      forma[i].style.backgroundColor="" 
      cont += 1
    }




  for(i = 0; i < x; i++)

if ((( forma[i].type == 'text' || forma[i].name == 'msg2' || forma[i].name == 'cd2' || forma[i].name == 'pais2' ) && (i!=4 && i!=5))&& forma[i].value == '')
    {
      alert(msg_alert[i])
	  forma[i].style.backgroundColor="#ADCDFE"
      forma[i].focus()
      return false;
}


     /*****************************************************************************************************
     *  El siguiente IF fue modifico el 15-Dic-05 por Daniel Flores					  *
     *	Debido a que la linea:										  *
     *													  *
     *  forma.mail.value.indexOf('@') != forma.mail.value.indexOf('.',forma.mail.value.indexOf('@'))-1)   *
     *													  *
     *	era la siguiente:										  *
     *													  *
     *	forma.mail.value.indexOf('@') < forma.mail.value.indexOf('.')-1)				  *
     *													  *
     *	Esto no permitia enviar mails con punto antes del arroba(@) pero tambien validaba que no ubiera   *
     *	un punto enseguida del arroba(@)								  *
     *													  *
     *	Por lo tanto no se elimino la comparacion, si no que solo se modifico para que buscara el indice  *
      *	del punto despues del arroba(@) y se confirmara que es diferente al indice del arroba(@)          *
     *****************************************************************************************************/
	 arroba = forma.mail2.value.indexOf('@')
	 punto = forma.mail2.value.indexOf('.')
  if(forma.mail2.value.indexOf(' ')==-1 &&
	 (forma.mail2.value.indexOf('@') > 0 &&
      forma.mail2.value.indexOf('@') < forma.mail2.value.length-3) &&
	 (forma.mail2.value.indexOf('.') > 0 &&
	  forma.mail2.value.indexOf('.') < forma.mail2.value.length-1) &&
	 (forma.mail2.value.lastIndexOf('.') > forma.mail2.value.lastIndexOf('@')) )
	    forma.mail2.style.backgroundColor=""
  else
  {
    alert("La direccion del e-mail es incorrecta.\nEjemplo:\ntu_login@tu_proveedor.ext.ext")
    forma.mail2.style.backgroundColor="#ADCDFE"
    forma.mail2.focus()
    return false
  }



  //PARA VALIDAR EL NUMERO DE TELEFONO CON EL FORMATO 33 38545975 NO IMPORTA QUE TENGA GUION PERO DEBE DE LLEVAR LA LADA 
  //Y DEBEN DE SER AL MENOS 10 DIGITOS
  
  /*var cad = forma.tel.value
  if(cad.indexOf('-') != -1)
  {
    
    var temp = new Array();
    temp = cad.split('-');
    cad = ''
    for(var i = 0; i < temp.length; i++)
      cad = cad + temp[i];
  }

  if(cad.length < 7)
  {
    alert("El telefono debe contener al menos 7 digitos.")
    forma.tel.style.backgroundColor="#ADCDFE"
    forma.tel.focus()
    return false; 
  }


  if(forma.dist.checked || forma.prod.checked || forma.mailq.checked)
    return true
  else
  {
    alert("Por lo menos una opcion debe de ser seleccionada")
    forma.dist.style.backgroundColor="#ADCDFE"
    forma.prod.style.backgroundColor="#ADCDFE"
    forma.mailq.style.backgroundColor="#ADCDFE"
    return false
  }
    
if(forma.pais.label==3 && forma.estado==""){
alert("Escribe tu estado");
forma.estado.style.visibility='';
return false;
}
else{
return true;
}*/




}	//FIN FUNCION NO_NULOS PARA FORMULARIO DE BUZON DE GERENCIA


function limpiar(forma)
{
  x = forma.length	//ESTA LINEA OBTIEN EL NUMERO DE OBJETOS DE LA FORMA
  
  for(i = 0; i < x; i++)
      forma[i].style.backgroundColor="";
      cont += 1;
  return true;
}




function permite_letras(){								//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()

if((event.keyCode >=65 && event.keyCode <=90)  || 		//SOLO PERMITE LETRAS
   (event.keyCode >=97 && event.keyCode <=122) ||
    event.keyCode==32 || event.keyCode==46     ||
    event.keyCode==242|| event.keyCode==241    || 
    event.keyCode==243|| event.keyCode==225    || 
    event.keyCode==237|| event.keyCode==250    || 
    event.keyCode==233|| event.keyCode==44    || 
    event.keyCode==224|| event.keyCode==232    ||
    event.keyCode==236|| event.keyCode==249    ||
    event.keyCode==209 || event.keyCode==192)
 return true
else
 return false
}							

function limpia(valor){						//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()
if(valor.value==0)
	valor.value=""
}

function suma(total,precio,cant,subt,iva,total2){			//ESTA FUNCION SE EJECUTA EN EL EVENTO 
var suma_tot=0
var suma=0
var total
var tabla = document.getElementById('base');
var lastRow = tabla.rows.length-1;

total.value= precio.value * cant.value
for (i = 1; i <= lastRow; i++){
suma=document.getElementById("total"+i).value
suma_tot= eval(suma_tot) + eval(suma)
}
    subt.value=suma_tot
	iva.value= suma_tot * 0.16
    total=eval(iva.value) + eval(subt.value)
   total=total.toFixed(2)
   total2.value=total

}

function calc_iva(iva,subt,total){						//ESTA FUNCION SE EJECUTA EN EL EVENTO }

   total.value=eval(iva.value) + eval(subt.value)

}


function email(edit){						//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()
 texto=edit.value							//PERMITE SOLO UNA "@"
 if(event.keyCode==64) 
  if(texto.indexOf("@")==-1)
   return true
  else
   return false
}

/* function letras(){
    c = event.keyCode
    if ((c>=65 && c<=90) || (c>=97 && c<=122) || c==46 || c==32)
      return true
	else
	  return false
  }
*/
function permite_numeros(){
    c = event.keyCode
    if ((c>=48 && c<=57) || c==45 || c==46)
      return true
else if(c.which)
{

}
	else
	  return false
}
 function soloNumeros(evt)  
    {  
        //Validar la existencia del objeto event  
        evt = (evt) ? evt : event;  
         
       //Extraer el codigo del caracter de uno de los diferentes grupos de codigos  
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));  
         
       //Predefinir como valido  
       var respuesta = true;  
         
       //Validar si el codigo corresponde a los NO aceptables  
       if (charCode > 31 && (charCode < 48 || charCode > 57))   
       {  
           //Asignar FALSE a la respuesta si es de los NO aceptables  
           respuesta = false;  
       }  
         
       //Regresar la respuesta  
       return respuesta;  
   }  


  function dos(){
    c = event.keyCode
	if ((c>=48 && c<=57) || (c>=65 && c<=90) || (c>=97 && c<=122) || c==46 || c==32)
      return true
	else
	  return false
  }
  
  function ac(){
	document.formulario.url.disabled = false
  }
  function de(){
    document.formulario.url.disabled = true
  }

 function confirma(){
  if (confirm ("¿Deseas salir?")==true){	  
   return true;
  }
   else
    return false;
 }
 
 function elimina(valor){
  if (valor == 'Borrar'){
	if (confirm("Deseas borrar permanentemente\na este cliente?")){
	  return true
	}
	  else
	   return false
	
  }
    else
     return true
 }

function full_cuest(forma)
{
  arr_radio = ['',
               '',
               'uno', 
               'dos',
               'tres',
               'cuatro',
               'cinco',
               'seis',
               'siete',
               'ocho',
               'nueve',
               'diez']

  x = forma.length;	//ESTA LINEA OBTIEN EL NUMERO DE OBJETOS DE LA FORMA
  valor = -1;        //VALOR DEL RADIOBUTTON
  idx = 2;           //INDEX DEL ARREGLO DE NUMEROS EN TEXTO 
  cont = 1;          //CONTADOR PARA LIMITE DE RADIOBUTTONS POR PREGUNTA


  for(i = 2;i < x-3; i++) //Evitar los cuadros de texto cotizacion y factura, asi como los botones submit y reset
  {
    if (arr_radio[idx] == forma[i].name)
    {
      cont ++
      if (forma[i].checked)   //SI HAY UNO SELECCIONADO SE OBTIENE EL VALOR
        valor = forma[i].value;  //AL UTILIZAR LA FORMA CON INDICE SE HACE REFERENCIA AL OBJETO

      if (forma[i].name == 'uno')  //PONE EL LIMITE PARA LOS RADIO BUTTONS  PREGUNTA 1 tiene 2 las demas tienen 5
        limit = 2;
      else
        limit = 5;
      
      if (cont > limit && valor == -1)
      {
        alert("Porfavor responde la pregunta " + forma[i].name);
        color('latabla',arr_radio[idx],'azul');                         //LLAMA LA FUNCION COLOR PARA PONER EL COLOR DEL FONDO
        return false;
      }
        
    }
    else  //EL RADIO BUTTON YA NO ES IGUAL POR LO TANTO REGRESAMOS 1 EN EL NOMBRE DEL RADIO Y AUMENTAMOS EN EL ARREGLO DE TEXTO
    {
      idx = idx + 1;  //SE CONTINUA AL SIGUIENTE OBJETO DEL ARREGLO DE TEXTO
      i = i - 1;      //SE REGRESA 1 EN LOS NOMBRES DE LOS RADIO BUTTONS PARA PODER CONTINUAR COMPARANDO
      valor = -1;     //EL VALOR SE DEVUELVE A -1 PARA CONTINUAR BUSCANDO PREGUNTAS NO CONTESTADAS
      cont = 1;       //SE INICIALIZA NUEVAMENTE EL CONTADOR
    }
  }//FIN FOR

/*  if(forma.coment.value == "")
  {
    alert("Haznos saber tus comentarios")
    forma.coment.style.backgroundColor="#ADCDFE"
    forma.coment.focus()
    return false;
  }
*/
  forma.cot.disabled = false;
  forma.fac.disabled = false;
  return true; //SI SE PUEDE CONTINUAR CON EL ENVIO DEL E-MAIL
  
}

function color(id,cel,colorear)
{

  if(document.getElementsByTagName)
  {  
    var table = document.getElementById(id);
    var divs = table.getElementsByTagName("div");

    for(i = 0; i < divs.length; i++)
    {
      if(divs[i].id == cel)
      {
        divs[i].className = colorear; 
      }
    }           

  }
  return false;

}

function no_color(id)
{
  if(document.getElementsByTagName)
  {  
    var table = document.getElementById(id);
    var divs = table.getElementsByTagName("div");

    for(i = 0; i < divs.length; i++)
        divs[i].className = 'normal';
  }
  document.seguimiento.coment.style.backgroundColor=""
  return true;
}

function listarr(forma)
{
  x = forma.length;
  cad = "";
  //alert("va\nYa");
  for(i = 0; i < x; i++)
  {
    if (forma[i].type == 'radio')
    cad = cad + "<br>$respuestas[] = $_POST[\"" + forma[i].name + "\"]";
    //cad = cad + "arreg_post" + forma[i].name;
    //cad = cad + "<br>Tipo: " + forma[i].type + " Nombre: " + forma[i].name;
  }
  if (forma[0].checked) 
    document.write(cad);
  alert(cad);
  return false;

}

