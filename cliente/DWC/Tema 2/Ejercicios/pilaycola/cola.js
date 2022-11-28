var cola = [];

function insertar() {
    var elemento = prompt("Nombre elemento: ");
    cola.push(elemento);
    console.log(cola);
}

function eliminar() {
    cola.shift();
    console.log(cola);
}