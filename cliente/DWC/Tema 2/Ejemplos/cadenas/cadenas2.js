function main() {
    arrayDeDatos();
}

function arrayDeDatos() {
    var arrayDatos1 = ["uno", "dos", "tres"];
    var arrayDatos2 = ["valorUno2", "valorDos2", "valrTres2"];
    var arrayDatosDiferentes = ["cadena 1", 32, "cadena", false, ["1", "3", "r"]];
    var arrayDatosCompuesto = [arrayDatos1, arrayDatos2];
    
    var posicion = 0;
    var elementos = 1;
    // Eliminar posicion array (0, 1) posicion, numero de elementos
    var elementoEliminado = arrayDatos1.splice(posicion, elementos);

    // inice de elemento del arrayDatos1
    arrayDatos1.indexOf("dos");

    // añadir elemento a la última posición
    arrayDatos1.push("elemento a insertar");

    // eliminar primer elemento
    var primerElementoEliminado = arrayDatos1.shift();

    // añadir elemento al principio del array
    arrayDatos2.unshift("Nuevo elemento como primero");

    // elimiar último elemento
    var elementoPop = arrayDatos2.pop();

    // recorrer array
    arrayDatos2.forEach(
        function (elemento, indice, array) {
            console.log(elemento, indice)
        }
    );

    // copiar array
    var copiaArray = arrayDatos2.slice();
    console.log("el tipo de dato de la variable arrayDatos2[2] " + arrayDatos[2] + " es: " + typeof(arrayDatos2[2]));
}