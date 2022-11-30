function main() {
    cadena();
}

function cadena() {
    var cadena1 = "Mi cadena de caracteres";
    cadena = 'Mi cadena con comillas simples';
    cadena = `Mi cadena con comillas simples 2`;

    // acceso a un caracter determinado
    'CAD'.charAt(1);
    cadena.charAt(5);

    // longitud de una cadena
    cadena.length;

    // para hacer búsquedas dentro de cadenas usaremos:
    var cadenaABuscar = "comi";
    var indice = 0;
    cadena.indexOf(cadenaABuscar, indice);

    // uso de subcadenas, posición inicial, caracteres.
    var posicionInicial = 2;
    var caracteres = 9; 
    var miSubcadena = cadena1.substring(posicionInicial, caracteres);
    
    // división de subcadenas a partir de un elemento divisorio
    var separador = ";";
    var cadena2 = "MiPrimeraCadena;MiSegundaCadena";
    var arraySubcadenas = cadena2.split(separador);
}