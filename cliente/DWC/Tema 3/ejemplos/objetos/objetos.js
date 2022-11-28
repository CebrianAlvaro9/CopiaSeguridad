function Persona (nombre, apellidos) {
    this.nombre = nombre; //atributo público
    this.apellidos = apellidos; //atributo público
    var estado = 'Activo'; //atributo privado
}
    

Persona.atributoEstatico = 22;

Persona.metodoEstatico = function() {
    console.log("Soy un método estático");
}

console.log(Persona.atributoEstatico);
console.log(Persona.metodoEstatico);

class TarjetaFelicitacion {
    constructor(mensaje){
        this.mensajeTarjeta = mensaje;
    }
    //añado métodos

    personaliza(nombre){
        return(nombre + " tengo este mensaje: " + this.mensajeTarjeta);
    }
}//cierra clase

var miTarjeta = new TarjetaFelicitacion ('Feliz Cumple!');

// Sobre el ejemplo anterior pedir por pantalla el mensaje a insertar 
// en la tarjeta que será guardado en un objeto de la clase
// para asignar ese mensaje al atributo .innerHTML de 'divPrincipal'

var msn = prompt("mensaje:");
var miTarjeta2 = new TarjetaFelicitacion (msn)
var mensajeFinal = miTarjeta2.personaliza("Juan");
console.log(mensajeFinal);

let div = document.body.getElementById('divPrincipal');
console.log(div);
div.innerHTML = mensajeFinal;



