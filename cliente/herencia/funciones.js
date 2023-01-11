function inicio(){
    botonC= document.getElementById("colegio");
  botonC.addEventListener("click",crearColegio);
  botonM= document.getElementById("mod");
  botonM.addEventListener("click",modificarColegio);
  botonMos= document.getElementById("mos");


}
var colegio1=[];
var col;
function crearColegio(){

    var nombreColegio= document.getElementById("nombreC").value;
    var nAulas= document.getElementById("nAulas").value;
    var nAlumnos= document.getElementById("nAlumnos").value ;
    col =new Colegio(nombreColegio,nAulas,nAlumnos);
    colegio1.push(col);
    mostrarcolegios();
   
 
  }


  function modificarColegio(){

    var nombreColegio= document.getElementById("nombreM").value;
    mod = colegio1.find(({ nombre }) => nombre === nombreColegio);
    if(mod){
      
      mod.modificarAlumnos();
      console.log(mod);
      mostrarcolegios();
    }else{
      alert("Nombre de colegio no valido");
    }

 
  }

  function mostrarcolegios(){

    var p1="";
  
    p0="<tr><td> NOMBRE </td><td> N AULAS </td><td> N ALUMNOS </td></tr>";
    for(var i=0;i<colegio1.length;i++){
      p1= p1+"<tr><td>  "+colegio1[i].nombre+"</td><td>"+colegio1[i].nAulas+"</td><td>"+colegio1[i].nAlumnos+"</td></tr>";

    }
  var tabla = document.getElementById("table")
  tabla.innerHTML=p0+p1;
  tabla.setAttribute("border", "2");


  }