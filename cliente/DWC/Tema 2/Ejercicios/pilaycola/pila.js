var pila = [];

function insertar() {
    var elemento = prompt("Nombre elemento: ");
    pila.push(elemento);
    console.log(pila);
}

function eliminar() {
    pila.pop();
    console.log(pila);
}