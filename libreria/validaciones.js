// JavaScript Document

var ban;

if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(searchElement /*, fromIndex */)
  {
    "use strict";
 
    if (this === void 0 || this === null)
      throw new TypeError();
 
    var t = Object(this);
    var len = t.length >>> 0;
    if (len === 0)
      return -1;
 
    var n = 0;
    if (arguments.length > 0)
    {
      n = Number(arguments[1]);
      if (n !== n)
        n = 0;
      else if (n !== 0 && n !== (1 / 0) && n !== -(1 / 0))
        n = (n > 0 || -1) * Math.floor(Math.abs(n));
    }
 
    if (n >= len)
      return -1;
 
    var k = n >= 0
          ? n
          : Math.max(len - Math.abs(n), 0);
 
    for (; k < len; k++)
    {
      if (k in t && t[k] === searchElement)
        return k;
    }
    return -1;
  };
}

function busca(texto, caracter){
cant=0
for(i=0;i<texto.length;i++){
if(texto.charAt(i)==caracter) 
cant=cant+1;
}
return cant;
}

function busca_pos(texto, caracter){
for(i=0;i<texto.length;i++){
if(texto.charAt(i)==caracter) 
return i;
}
return false;
}

function no_nulos_curso(forma)	
{
  //mensajesw de alerta para los campos obligatorios
    msg_alert_fecha = "Escribe la fecha del curso de tu interes"
	msg_alert_nombre = "Escribe tu nombre"
    msg_alert_apellidos = "Escribe tus apellidos"
    msg_alert_mail = "Escribe tu direccion de correo electronico"
    msg_alert_mal_mail="La direccion del e-mail es  incorrecta.\nEjemplo:\ntu_login@tu_proveedor.ext.ext"
    msg_alert_email_confirm="Confirmacion de Email incorrecta"
    msg_alert_captcha="Escribe el texto de seguridad"
    msg_alert_acuerdo = "Debe aceptar el aviso de privacidad para mandar el mensaje."
 
 
  //checa que el campo del telefono no este vacio antes de enviar el formulario 
	if( forma.fecha.value == ""){ 
    alert (msg_alert_fecha)
	forma.fecha.style.backgroundColor="#ADCDFE"
	forma.fecha.focus()
	return false;
	}
	else
	forma.fecha.style.backgroundColor="#FFFFFF"

	
  //checa que el campo del telefono no este vacio antes de enviar el formulario 
	if( forma.nombre.value == ""){ 
    alert (msg_alert_nombre)
	forma.nombre.style.backgroundColor="#ADCDFE"
	forma.nombre.focus()
	return false;
	}
	else
	forma.nombre.style.backgroundColor="#FFFFFF"
	
  //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.apellidos.value == ""){ 
    alert (msg_alert_apellidos)
	forma.apellidos.style.backgroundColor="#ADCDFE"
	forma.apellidos.focus()
	return false;
	}
	else
	forma.apellidos.style.backgroundColor="#FFFFFF"
	
	 //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.e_mail.value == ""){ 
    alert (msg_alert_mail)
	forma.e_mail.style.backgroundColor="#ADCDFE"
	forma.e_mail.focus()
	return false;
	}
	else
	forma.e_mail.style.backgroundColor="#FFFFFF"
	

    //checa que la direccion de email sea valida segun la estructura o forma correcta 

  if(forma.e_mail.value.indexOf(' ')==-1 &&
	 (forma.e_mail.value.indexOf('@') > 0 &&
      forma.e_mail.value.indexOf('@') < forma.e_mail.value.length-3) &&
	 (forma.e_mail.value.indexOf('.') > 0 &&
	  forma.e_mail.value.indexOf('.') < forma.e_mail.value.length-1) &&
	 (forma.e_mail.value.lastIndexOf('.') > forma.e_mail.value.lastIndexOf('@')) )
	    forma.e_mail.style.backgroundColor=""
  else
  {
    alert(msg_alert_mal_mail)
    forma.e_mail.style.backgroundColor="#ADCDFE"
    forma.e_mail.focus()
    return false
  }


// checa que la confirmacion del correo electronico sea igual 
if( forma.e_mail_confirma.value != forma.e_mail.value){ 
    alert (msg_alert_email_confirm)
	forma.e_mail_confirma.style.backgroundColor="#ADCDFE"
	forma.e_mail_confirma.focus()
	return false;
	}
else
{
forma.e_mail_confirma.style.backgroundColor="#FFFFFF"
}
// para checar que se introdusco el texto de seguridad
  if( forma.tmptxt.value == ""){ 
    alert (msg_alert_captcha)
	forma.tmptxt.style.backgroundColor="#ADCDFE"
	forma.tmptxt.focus()
	return false;
	}

  if(forma.acuerdo.checked == false){ 
    alert (msg_alert_acuerdo)
	forma.acuerdo.style.backgroundColor="#ADCDFE"
	forma.acuerdo.focus()
	return false;
	}

// si todas las condiciones son correctas se continua y se envia el formulario a la pagina que lo procesara de lo contrario no continua y se queda en la misma pagina sin procesarlo
return true;

}										


function no_nulos_dist(forma)	
{
  //mensajesw de alerta para los campos obligatorios
	msg_alert_razon_social = "Escribe la razon social de tu empresa"
	msg_alert_giro = "Escribe el giro de tu empresa"
	msg_alert_direccion = "Escribe la direccion de tu empresa"
	msg_alert_ciudad = "Escribe la ciudad donde esta tu empresa"
	msg_alert_estado = "Escribe el estado donde esta tu empresa"
    msg_alert_nombre = "Escribe tu nombre"
    msg_alert_apellidos = "Escribe tus apellidos"
    msg_alert_mail = "Escribe tu direccion de correo electronico"
    msg_alert_mal_mail="La direccion del e-mail es  incorrecta.\nEjemplo:\ntu_login@tu_proveedor.ext.ext"
    msg_alert_email_confirm="Confirmacion de Email incorrecta"
    msg_alert_resena_negocio="Escribe la resena de tu negocio"
    msg_alert_captcha="Escribe el texto de seguridad"
	msg_alert_acuerdo = "Debe aceptar el aviso de privacidad para mandar el mensaje."
  
  //checa que el campo del nombre no este vacio antes de enviar el formulario 
    if( forma.razon_social.value == ""){ 
    alert (msg_alert_razon_social)
	forma.razon_social.style.backgroundColor="#ADCDFE"
	forma.razon_social.focus()
	return false;
	}
	

  //checa que el campo de la colonia no este vacio antes de enviar el formulario 
	if( forma.giro.value == ""){ 
    alert (msg_alert_giro)
	forma.giro.style.backgroundColor="#ADCDFE"
	forma.giro.focus()
	return false;
	}
	
	
    //checa que el campo de la direccion no este vacio antes de enviar el formulario 
	if( forma.direccion.value == ""){ 
    alert (msg_alert_direccion)
	forma.direccion.style.backgroundColor="#ADCDFE"
	forma.direccion.focus()
	return false;
	}
	
	
   //checa que el campo de la ciudad no este vacio antes de enviar el formulario 
	if( forma.ciudad.value == ""){ 
    alert (msg_alert_ciudad)
	forma.ciudad.style.backgroundColor="#ADCDFE"
	forma.ciudad.focus()
	return false;
	}
	

//checa que el campo de el estado no este vacio antes de enviar el formulario 
	if( forma.estado.value == ""){ 
    alert (msg_alert_estado)
	forma.estado.style.backgroundColor="#ADCDFE"
	forma.estado.focus()
	return false;
	}

	
  //checa que el campo del telefono no este vacio antes de enviar el formulario 
	if( forma.nombre.value == ""){ 
    alert (msg_alert_nombre)
	forma.nombre.style.backgroundColor="#ADCDFE"
	forma.nombre.focus()
	return false;
	}
	
  //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.apellidos.value == ""){ 
    alert (msg_alert_apellidos)
	forma.apellidos.style.backgroundColor="#ADCDFE"
	forma.apellidos.focus()
	return false;
	}
	
	 //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.e_mail.value == ""){ 
    alert (msg_alert_mail)
	forma.e_mail.style.backgroundColor="#ADCDFE"
	forma.e_mail.focus()
	return false;
	}
	

    //checa que la direccion de email sea valida segun la estructura o forma correcta 

  if(forma.e_mail.value.indexOf(' ')==-1 &&
	 (forma.e_mail.value.indexOf('@') > 0 &&
      forma.e_mail.value.indexOf('@') < forma.e_mail.value.length-3) &&
	 (forma.e_mail.value.indexOf('.') > 0 &&
	  forma.e_mail.value.indexOf('.') < forma.e_mail.value.length-1) &&
	 (forma.e_mail.value.lastIndexOf('.') > forma.e_mail.value.lastIndexOf('@')) )
	    forma.e_mail.style.backgroundColor=""
  else
  {
    alert(msg_alert_mal_mail)
    forma.e_mail.style.backgroundColor="#ADCDFE"
    forma.e_mail.focus()
    return false
  }


// checa que la confirmacion del correo electronico sea igual 
if( forma.e_mail_confirma.value != forma.e_mail.value){ 
    alert (msg_alert_email_confirm)
	forma.e_mail_confirma.style.backgroundColor="#ADCDFE"
	forma.e_mail_confirma.focus()
	return false;
	}


    //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.resena_negocio.value == ""){ 
    alert (msg_alert_resena_negocio)
	forma.resena_negocio.style.backgroundColor="#ADCDFE"
	forma.resena_negocio.focus()
	return false;
	}
  
  
// para checar que se introdusco el texto de seguridad
  if( forma.tmptxt.value == ""){ 
    alert (msg_alert_captcha)
	forma.tmptxt.style.backgroundColor="#ADCDFE"
	forma.tmptxt.focus()
	return false;
	}

  if(forma.acuerdo.checked == false){ 
    alert (msg_alert_acuerdo)
	forma.acuerdo.style.backgroundColor="#ADCDFE"
	forma.acuerdo.focus()
	return false;
	}

// si todas las condiciones son correctas se continua y se envia el formulario a la pagina que lo procesara de lo contrario no continua y se queda en la misma pagina sin procesarlo
return true;

}										



//ESTA FUNCION SE EJECUTA EN EL EVENTO onsubmit() 
//NO PERMITE CAMPOS EN BLANCO
function no_nulos(forma, idioma)	
{						 	

  //mensajesw de alerta para los campos obligatorios
if(idioma=="ingles"){
  msg_alert_nombre = "Please type your name"
  msg_alert_empresa = "Please type your company"
  msg_alert_pais = "Please type your country"
  msg_alert_tel = "Please type your telephone number"
  msg_alert_mail = "Please type your email address"	
  msg_alert_mal_mail="Your email address is wrong. Please try again \nEjample:\nyour_login@your_provider.ext.ext"
  msg_alert_email_confirm="The Email confirmation is wrong"
  msg_alert_tel_minimo="The phone number must be at least 10 digits including area code"
    msg_alert_captcha="Please type the security text"

}
else
{
  msg_alert_nombre = "Escribe tu nombre"
  msg_alert_empresa = "Escribe tu empresa"
  msg_alert_pais = "Escribe tu pais"
  msg_alert_tel = "Escribe tu telefono"
  msg_alert_mail = "Escribe tu direccion de correo electronico"
  msg_alert_mal_mail="La direccion del e-mail es  incorrecta.\nEjemplo:\ntu_login@tu_proveedor.ext.ext"
  msg_alert_email_confirm="Confirmacion de Email incorrecta"
  msg_alert_tel_minimo="El telefono debe contener al menos 10 digitos incluyendo codigo de area"
  msg_alert_captcha="Escribe el texto de seguridad"
  msg_alert_acuerdo = "Debe aceptar el aviso de privacidad para mandar el mensaje."
}
  
  //checa que el campo del nombre no este vacio antes de enviar el formulario 
    if( forma.nombre.value == ""){ 
    alert (msg_alert_nombre)
	forma.nombre.style.backgroundColor="#ADCDFE"
	forma.nombre.focus()
	return false;
	}

  //checa que el campo de la colonia no este vacio antes de enviar el formulario 
	if( forma.empresa.value == ""){ 
    alert (msg_alert_empresa)
	forma.empresa.style.backgroundColor="#ADCDFE"
	forma.empresa.focus()
	return false;
	}
	
    //checa que el campo del pais no este vacio antes de enviar el formulario 
	if( forma.pais.value == ""){ 
    alert (msg_alert_pais)
	forma.pais.style.backgroundColor="#ADCDFE"
	forma.pais.focus()
	return false;
	}
	
	
  //checa que el campo del telefono no este vacio antes de enviar el formulario 
	if( forma.telefono.value == ""){ 
    alert (msg_alert_tel)
	forma.telefono.style.backgroundColor="#ADCDFE"
	forma.telefono.focus()
	return false;
	}
	
  //checa que el campo del Email no este vacio antes de enviar el formulario 
	if( forma.e_mail.value == ""){ 
    alert (msg_alert_mail)
	forma.e_mail.style.backgroundColor="#ADCDFE"
	forma.e_mail.focus()
	return false;
	}
	
  //checa que la direccion de email sea valida segun la estructura o forma correcta 
  if(forma.e_mail.value.indexOf(' ')==-1 &&
	 (forma.e_mail.value.indexOf('@') > 0 &&
      forma.e_mail.value.indexOf('@') < forma.e_mail.value.length-3) &&
	 (forma.e_mail.value.indexOf('.') > 0 &&
	  forma.e_mail.value.indexOf('.') < forma.e_mail.value.length-1) &&
	 (forma.e_mail.value.lastIndexOf('.') > forma.e_mail.value.lastIndexOf('@')) )
	    forma.e_mail.style.backgroundColor=""
  else
  {
    alert(msg_alert_mal_mail)
    forma.e_mail.style.backgroundColor="#ADCDFE"
    forma.e_mail.focus()
    return false
  }

// checa que la confirmacion del correo electronico sea igual 
if( forma.e_mail_confirma.value != forma.e_mail.value){ 
    alert (msg_alert_email_confirm)
	forma.e_mail_confirma.style.backgroundColor="#ADCDFE"
	forma.e_mail_confirma.focus()
	return false;
	}


  //PARA VALIDAR EL NUMERO DE TELEFONO NO IMPORTA QUE TENGA GUION 
  //Y DEBEN DE SER AL MENOS 8 DIGITOS
  
  var cad = forma.Telefono.value
  if(cad.indexOf('-') != -1)
  {
    
    var temp = new Array();
    temp = cad.split('-');
    cad = ''
    for(var i = 0; i < temp.length; i++)
      cad = cad + temp[i];
  }

  if(cad.length < 8)
  {
    alert(msg_alert_tel_minimo)
    forma.telefono.style.backgroundColor="#ADCDFE"
    forma.telefono.focus()
    return false;
  }

// para checar que se introdusco el texto de seguridad
  if( forma.tmptxt.value == ""){ 
    alert (msg_alert_captcha)
	forma.tmptxt.style.backgroundColor="#ADCDFE"
	forma.tmptxt.focus()
	return false;
	}

  if(forma.acuerdo.checked == false){ 
    alert (msg_alert_acuerdo)
	forma.acuerdo.style.backgroundColor="#ADCDFE"
	forma.acuerdo.focus()
	return false;
	}
// si todas las condiciones son correctas se continua y se envia el formulario a la pagina que lo procesara de lo contrario no continua y se queda en la misma pagina sin procesarlo
return true;

}										


//limpia todos los campos del formulario
function limpiar(forma)
{
  x = forma.length	//ESTA LINEA OBTIEN EL NUMERO DE OBJETOS DE LA FORMA
  
  for(i = 0; i < x; i++)
      forma[i].style.backgroundColor="";
      cont += 1;
  return true;
}


//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()
function permite_letras(){ 
//SOLO PERMITE LETRAS
if((event.keyCode >=65 && event.keyCode <=90)  || 		
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

//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()
function limpia(valor){		
if(valor.value==0)
	valor.value=""
}

//ESTA FUNCION SE EJECUTA EN EL EVENTO onkeypress()
//PERMITE SOLO UNA "@"
function email(edit, e){		
 texto=edit.value			
 var c = (document.all) ? e.keyCode : e.which; 	  
 if(c==64) 
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

// esta funcion soo permite numeros 
// para que funcione en FF se ocupa enviar como poarametros la constante event 
function permite_numeros(e){
var c = (document.all) ? e.keyCode : e.which; 
    if ((c>=48 && c<=57) || c==42 || c==43 || c==45 || c==46 || c==47 || c==32 || c==58 || c==8 || c==0 || c==13)
      return true
	else
	  return false
}

 //Esta funcione permite letras mayusculas y minusculas y numeros asi como caracteres especiales
  function dos(){       c = event.keyCode
	if ((c>=48 && c<=57) || (c>=65 && c<=90) || (c>=97 && c<=122) || c==46 || c==32)
      return true
	else
	  return false
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

