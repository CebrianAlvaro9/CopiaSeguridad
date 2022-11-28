function comprobar(formato) {

    let cadena = document.forms["myForm"]["cadena"].value;

    var resultadoValor = cadena.match(formato);
    var resultadoTest = formato.test(cadena);

    document.write("cadena: " + cadena);
    document.write("<br>formato: " + formato);

    document.write("<br><br>------------<br><br>match: " + resultadoValor + "<br>test: " + resultadoTest);
}

function ej01() {
    var formato = /\d/g;
    comprobar(formato);
}

function ej02() {
    var formato = /^[aAlLsS]/g;
    comprobar(formato);
}