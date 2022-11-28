var variableGlobal = 100;

function miFuncion() {
    var variableLocal = 200;
    alert(variableGlobal);
    alert(variableLocal);
    variableGlobal++;
    alert(variableGlobal);
}