




function princ(){

    let boton=document.querySelector("#boton");
    boton.addEventListener("click",()=>{
        var horas1 = ["","10:00 - 10:45","10:45 - 11:30","11:30 - 12:15","13:00 - 13:45","17:00 - 17:45","17:45 - 18:30","18:30 - 18:15","19:00 - 19:45","19:45 - 20:30","20:30 - 21:15"];
        var sesiones1=["Juan","Paco","Camilo","Miguel","Aitor"];
        var div1="uno"
        var id="tabla3";
        genera_tablas(div1,id,sesiones1,horas1);
    });

}

function genera_tablas(div1,id,clase,horas ){
    var diasDeLaSemena = ["", "Lunes","Martes","Miercoles","Jueves", "viernes","sabado"];
    if (document.querySelector("#"+id)==null){

        var div= document.getElementById(div1);
        var body = document.getElementsByTagName("body")[0];
        var tabla = document.createElement("table");
        tabla.setAttribute("id", id);
        
        var tblBody = document.createElement("tbody");
        
        var hilera = document.createElement("tr");
         for (var j = 0; j < 6; j++) {   
           textoCelda = diasDeLaSemena[j];
           var celda = document.createElement("th");
           celda.textContent = textoCelda;
           hilera.appendChild(celda);
         }
       tblBody.appendChild(hilera);
          
        for (var i = 1; i < horas.length; i++) {
          var elmt,textoCelda;
          var hilera = document.createElement("tr");
          for (var j = 0; j < 6; j++) {
             if(j==0){elmt = "th";
             textoCelda = horas[i];
             }else{elmt = "td";
                  textoCelda = clase[Math.floor(Math.random()*5)]}
             var celda = document.createElement(elmt);
            
            celda.textContent = textoCelda;
            hilera.appendChild(celda);
          }
      
          
      
          tblBody.appendChild(hilera);
        }
        
      
        tabla.appendChild(tblBody);
      
        div.appendChild(tabla);
      
        tabla.setAttribute("border", "2");
    }
       

}