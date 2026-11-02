<html>
<head>
<title>	Categorias-Picotech</title>
</head>
<body>

<script type="text/javascript" language="javascript">


function mostrar_imagen(id) {
   img = document.getElementById(id);
   img.innerHTML = '<img src="http://www.logicbus.com.mx/images/images-1-menu.jpg" />';
  }



function ocultar_imagen(id) {
    img = document.getElementById(id);
    img.innerHTML = '';
}
</script>

<input type="button" value="Kit de inicio 2 canales" onClick="javascript:mostrar_imagen('imagen')" />
<input type="button" value="Ocultar imagen" onClick="javascript:ocultar_imagen('imagen')" />
<br />
<div id="imagen">
</div>

</body>
</html>  