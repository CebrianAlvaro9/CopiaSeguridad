function cambiarParrafoColor() {
    parrafo = document.getElementById("p3");
    parrafo.style.color="red";
}

// cambios en tiempo de ejecución
function btnAtarEvento_Click(){
    atarEvento()
}

// cambios realizados en tiempo de ejecución.
function atarEvento() {
    alert("se ha atado el evento onmouseover al párrafo p3\n pasa el cursor sobre el párrafo");
    document.getElementById('p3').onmouseover = cambiarParrafoColor;
}

// Devuelve el objeto del evento click
function dispararEvento(event){
    alert("P: " + event);
}

// Función manejador de eventos del contenedor 'div1'
function dispararEventoDiv(event){
    alert("Div: " + event);
}