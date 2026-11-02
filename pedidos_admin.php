<HTML>
<HEAD>
<TITLE>Prueba de formulario "Eselente"</TITLE>

<script type="text/javascript">

function opera(form) {
var numero1
var numero2 
var suma

numero1 = parseFloat(document.formu.total.value)
numero2 = parseFloat(document.formu.neto.value)
suma = numero1+numero2
document.formu.total.value = suma


}


function resuelve(form) {


document.formu.eq.value = ""
document.formu.neto.value = ""
document.formu.campo.value = ""
document.formu.cantidad.value = ""

}
</script> 


<script type="text/javascript">

function $(x) { return document.getElementById(x); }

function addOpt(oCntrl, sTxt){
if(document.formu.campo.value==""){
alert('Debe escoger un producto');
exit;
}
else
if(document.formu.cantidad.value==""){

alert('Debe digitar una cantidad');
exit;
}
else
var sVal = sTxt;
var selOpcion = new Option(sTxt, sVal);
var iPos = oCntrl.options.length;
oCntrl.options[iPos] = selOpcion;

}
</script> 





<SCRIPT LANGUAGE="JavaScript">

function ver(form) {
var num1, num2
var suma
document.formu.campo.value="$ "+(form.equipos.options[form.equipos.selectedIndex].value)
document.formu.eq.value = (form.equipos.options[form.equipos.selectedIndex].text)

num1=(form.equipos.options[form.equipos.selectedIndex].value)

num2=document.formu.cantidad.value

suma=num1*num2




document.formu.neto.value = (suma)

} </SCRIPT>


<SCRIPT LANGUAGE="JavaScript">
function multi(form) {
var num1, num2

var suma

num1=(form.equipos.options[form.equipos.selectedIndex].value)

num2=document.formu.cantidad.value

suma=num1*num2

document.formu.neto.value = suma

} </SCRIPT>


<BODY>
<FORM NAME="formu" form method="post" action="http://forms.melodysoft.com">
<input type="hidden" name="id" value="pablito153">


Su nombre:<BR>
<input type="text" name="nombre" id = "nombre1" tabindex = "1">
<BR>
E-Mail:<BR> <input type="text" name="email" tabindex = "2">
<BR>
Empresa:<BR> <input type="text" name="empresa" tabindex = "3">
<BR>
Mensaje:<BR> <textarea name="mensaje" tabindex = "4"></textarea>
<BR>
Producto: <BR>
<SELECT NAME="equipos" id= "equipos1" onChange="ver(this.form)" tabindex = "5">
<option value="0">Escoja...</option>
<option value="1000">Pulmón</option>
<option value="2000">Corazón</option>
<option value="3500">Lengua</option>
<option value="2454">Hígado</option>
<option value="5879">Cayos</option>
<option value="6525">Criadillas</option>

</SELECT>
<BR>Precio Unitario:<BR> <input type="text" Name="campo" style="border:0;"><BR>
Cantidad (Kilos) :<BR> <INPUT TYPE="text" id = "cant" NAME = "cantidad" onKeyUp="multi(this.form)" tabindex = "6">Kg.<BR>
Subtotal: <BR><input type="text" id= "subs" Name="neto" value = 0 style="border:0;"><BR>




<input type="text" id="espacios" value= "____" style="border:0;"><BR> 
<input type="text" name= "eq" id="equipos2" value= "" style="border:0;"><BR><br/>



<select id="elSelect" size="10" onchange = "seleccionar(this.form)" >
<option value="prod">PRODUCTO</option>
</select>

<select id="elSelect1" size="10" >
<option value="val">VL. UN</option>
</select>

<select id="elSelect2" size="10" >
<option value="CANT">CANTIDAD</option>
</select>

<select id="elSelect3" size="10" >
<option value="neto">NETO</option>
</select>

<BR>TOTAL COTIZACIÓN: <BR><input type="text" Name="total" value=0>
<input type="submit" value="Enviar" tabindex = "8">
<input type="reset" value="Borrar" tabindex = "9">


</FORM>
<button onclick="opera(this.form);addOpt( $('elSelect'), $('equipos2').value);addOpt( $('elSelect1'),$('equipos1').value);addOpt( $('elSelect2'),$('cant').value);addOpt( $('elSelect3'),$('subs').value);resuelve(this.form )">Agrega ítem a la cotización >> </button>
</BODY>
</HTML> 