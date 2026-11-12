function mostrar(id){
	obj = document.getElementById('productos-desc');
numero = obj.getElementsByTagName('div').length;
numero=numero -1;
	//alert ("numro = " + numero);
	//alert ("id = " + id);
	i=1;
	while(i<=numero)
	{
		//alert("i = " + i);
		
	    if(i==id)
		{
		   obj = document.getElementById('mpd-' + i);
		   obj.style.display="block";
		   obj = document.getElementById('menu-actual').value=i;
		  // alert("si" + i);
		}
		else
		{
		  obj = document.getElementById('mpd-' + i);
		   obj.style.display="none";
		   //alert("no" + i);
		}
		
		i++;
	}
}

function atras(){
	actual=document.getElementById('menu-actual').value;
	if(actual>1)
	{
	   mostrar(actual - 1);
	}

}

function siguiente(){
	obj = document.getElementById('productos-desc');
	numero = obj.getElementsByTagName('div').length;
	numero = numero -1;
	actual=document.getElementById('menu-actual').value;
	actual=parseInt(actual);
	//alert("numero =" + numero + " y actual =" + actual);
	if(actual < numero)
	{
	  mostrar(actual + 1 );
	}

}

function primero(){
mostrar(1);
}

function ultimo(){
obj = document.getElementById('productos-desc');
	numero = obj.getElementsByTagName('div').length;
	numero = numero -1;
    mostrar(numero);
}