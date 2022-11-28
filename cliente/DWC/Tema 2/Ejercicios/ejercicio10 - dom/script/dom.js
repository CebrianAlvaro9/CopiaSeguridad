
function paginaCargada() {
    debugger;
    var elemento = document.getElementById("div1");
    var elementoClases = document.getElementsByClassName("claseParrafo");
}

// Generar párrafo de forma dinámica
function generarParrafo() {
    // Generamos párrafo y contenido                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    var parrafo = document.createElement("p");
    parrafo.id = "p3";
    parrafo.name = "nombrep3";
    parrafo.tagName = "tagnamep3";
    var nodo = document.createTextNode("Párrafo dinámico");
    // Añadimos el nodo al nuevo párrafo
    parrafo.appendChild(nodo);
    // Añadimos el nuevo nodo al contenedor 'div1'
    var element = document.getElementById("div1");

    element.appendChild(parrafo);
}

// generar un botón con función 'eliminarParrafo()' que elimine el párrafo 
// con id="p3" generado previamente.
// para ello generaremos igualmente una variable con el párrafo a eliminar y 
// usaremos la instrucción variable.remove()
 
function eliminarParrafo() {
    var parrafo = document.getElementById("p3");
    parrafo.remove();
}


/*
- Generar un botón para modificar el párrafo:
    pedirá el usuario por pantalla el texto que queremos introducir y lo asignaremos sobre la propiedad 'innerHtml',
    comprobar la propiedad en la consola para ver su valor
*/

function modificarParrafo() {
    var parrafo = document.getElementById("p3");

    var mod = prompt("Nuevo texto: ");

    parrafo.innerHTML = mod;
} 


