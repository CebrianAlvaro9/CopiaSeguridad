function paginaCargada(){
    debugger;
    var elemento = document.getElementById("div1");
    var elemento = document.getElementsByClassName("claseParrafo");
}

function generarParrafo(){
    var parrafo = document.createElement("p");
    parrafo.id="p3";
    var nodo = document.createTextNode("Parrafo dinamico");
    parrafo.appendChild(nodo);
    var element= document.getElementById("div1");
    element.appendChild(parrafo);
}


function eliminarParrafo(){
    var parrafo = document.getElementById("p3");
   parrafo.remove();
}

function modificarParrafo(){
    
   
    var parrafo = document.getElementById("p3");

    parrafo.innerHTML = prompt("Nuevo Texto");
}

