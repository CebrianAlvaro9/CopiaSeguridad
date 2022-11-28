
function cambiarParrafoColor() {
    parrafo = document.getElementById("p3");
    parrafo.style.color="red";
}

function quitarParrafoColor() {
    parrafo = document.getElementById("p3");
    parrafo.style.color="";
}

function btnAtarEvento_Click() {
    document.getElementById('p3').onmouseover = cambiarParrafoColor;
    document.getElementById('p3').onmouseout = quitarParrafoColor;
}

function btnDesatarEvento_Click() {
    document.getElementById('p3').removeEventListener(onmouseover, cambiarParrafoColor);
    document.getElementById('p3').removeEventListener(onmouseout, quitarParrafoColor);
}