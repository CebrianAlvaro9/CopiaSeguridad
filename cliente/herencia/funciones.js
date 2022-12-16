function inicio(){
    botonC= document.getElementById("colegio");
  botonC.addEventListener("click",crearColegio);
  botonM= document.getElementById("mod");
  botonM.addEventListener("click",modificarColegio);
  botonMos= document.getElementById("mos");
  botonMos.addEventListener("click",mostrarcolegios);

}
var colegio1=[];
var col;
function crearColegio(){

    var nombreColegio= document.getElementById("nombreC").value;
    var nAulas= document.getElementById("nAulas").value;
    var nAlumnos= document.getElementById("nAlumnos").value ;
    col =new Colegio(nombreColegio,nAulas,nAlumnos);
    colegio1.push(col);
   
 
  }


  function modificarColegio(){

    var nombreColegio= document.getElementById("nombreC").value;
    mod = colegio1.find(col => col.nombre === nombreColegio);
    mod.modificarAlumnos();
 
  }

  function mostrarcolegios(){
    
    colegio1.forEach(element => console.log(element));

   

  }