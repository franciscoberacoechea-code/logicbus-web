



var allTags=[];
var selectedTags = [];


function fillTagList() {
    var tagList = document.getElementById("tagList");
    allTags.forEach(function(tag) {
      var option = document.createElement("option");
      option.value = tag;
      tagList.appendChild(option);
    });
  }
  
  // Función para añadir un tag al contenedor
  function addTagToList(tag) {
    if (allTags.includes(tag)) {
      // Agregar la etiqueta al div
      if (!document.getElementById("t"+tag)) {
      var div = document.createElement("div");
      var ctag= tag.replace('"', "-");
      div.textContent = tag;
      div.id = "t"+ctag;
      div.className = "tag-item";
      
      div.innerHTML += " <button onclick='removeTag(\"" + ctag + "\")'>X</button>";
   
      document.getElementById("selectedTags").appendChild(div);
  
      // Agregar la etiqueta al datalis
      document.getElementById('tags').value="";
  
  
      //El tag es guardado en el array
      var elemento =document.getElementById("FindGet");
      // Crea un nuevo campo de entrada
      var nuevoCampo = document.createElement("input");
      nuevoCampo.type = "text";
      nuevoCampo.name = "tagArray[]";
      nuevoCampo.value= ""+ tag ;
      nuevoCampo.id="sub"+ctag;
      nuevoCampo.style="display: none"
      // Agrega el nuevo campo de entrada al formulario
      elemento.appendChild(nuevoCampo);
      }else{document.getElementById('tags').value="";}
  
    }
  }
  
  // Función para eliminar un tag del contenedor
  function removeTag(tag) {
    var div = document.getElementById("t"+tag);
    document.getElementById("selectedTags").removeChild(div);
    var elemento =document.getElementById("sub"+tag);
    document.getElementById("FindGet").removeChild(elemento);
  }
  
  // Función para actualizar el campo oculto antes de enviar el formulario
  function updateHiddenInput() {
    var selectedTags = Array.from(document.getElementById("selectedTags").children).map(function(div) {
      return div.id;
    });
    document.getElementById("hiddenInput").value = selectedTags.join(",");
  }
  
  // Llama a la función para llenar la lista de tags
  fillTagList();
  
//funcion para cargar las tags de la bd y en la busqueda
function getTags(A,B){
    allTags=A;
    selectedTags=B;
}
