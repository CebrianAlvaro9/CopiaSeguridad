function inicio(){
    var boton = document.getElementById("boton");
    boton.addEventListener("click",enlazar);
}

function enlazar(){
    var parrafo= document.getElementById("parrafo");
    parrafo("mouseover",(parrafo.style.color="blue"));
 
}