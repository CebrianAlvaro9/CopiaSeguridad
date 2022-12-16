
/**
 * 1.- Diseña una clase Colegio y una clase Alumno de acuerdo a las siguientes especificaciones:
a) La clase Colegio tendrá como atributos nombre, número de aulas y número de
alumnos.
b) Cada alumno se representará como un objeto de la clase Alumno.
c) La clase Alumno tendrá los atributos “DNI”, “nombre” y “notaMedia”.
d) Implementa un método en Colegio que permita modificar el número de alumnos
e) Implementa un método en Alumno para modificar la nota media.
Comenta el código con los comentarios que estimes necesarios y verifica su correcto
funcionamiento creando formularios que permitan crear objetos de cada equipo y sendas
tablas que muestren los contenidos de los objetos creados. Implementa también la
posibilidad de que el usuario pueda vía web modificar la nota media de un alumno y el
número de alumnos de un colegio.
 */



class Colegio {
    constructor(nombre, nAulas, nAlumnos) {
   
      this.nombre = nombre;
      this.nAulas = nAulas;
      this.nAlumnos = nAlumnos;
    }

    modificarAlumnos(){
       this.nAlumnos= prompt("modifica el numero de alumnos");
    }
}

class Alumno {
        constructor(DNI,nombre,notaMedia) {
        this.DNI = DNI;
        this.nombre = nombre;
        this.notaMedia = notaMedia;
        }

        modificarNotaMedia(){
            this.notaMedia= prompt("modifica nota media");
         }

  
  }

