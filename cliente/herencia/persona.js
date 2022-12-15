class Persona{
 
    constructor (nombrePila, apellido, edad) {
        this.nombre = {
          nombrePila,
          apellido
        };
        this.edad = edad;

      };
}
var juan = new Persona("juan","Alvarez",33);

class Profesor extends Persona{
    constructor(nombrePila, apellido, edad,materia){
        super(nombrePila, apellido, edad);{
            this.materia=materia;

        }
    }


}

var Profesor= new Profesor('manuel',"garcia",24,"ciencias")