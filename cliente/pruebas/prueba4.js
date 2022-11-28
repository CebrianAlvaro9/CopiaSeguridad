function generarTablaDinamica() {

    var columnas = ['triángulo', 'cuadrado', 'pentágono', 'heptágono', 'hexágono'];
    var filas = ['azul', 'rojo', 'verde', 'amarillo', 'morado'];

    var div = document.getElementById('divTablaDinamica');
    var table = document.createElement('table');
    table.setAttribute('border', 'solid 1px');

    filas.forEach(color => {
        var tr = document.createElement('tr');
        columnas.forEach(forma => {
            var td = document.createElement('td');
            var txt = document.createTextNode(color + " - " + forma);
            td.appendChild(txt);
            tr.appendChild(td);
        });
        table.appendChild(tr);
    });

    div.appendChild(table);

}

var diasDeLaSemena = ["", "Lunes","Martes","Miercoles","Jueves", "viernes","sabado"]
var entreHorras = ["","9:00 - 10:00","10:00 - 11:00","11:00 - 12:00","12:00 - 13:00","13:00 - 14:00","14:00 - 15:00","15:00 - 16:00","16:00 - 17:00","17:00 - 18:00","18:00 - 19:00","19:00 - 20:00","20:00 - 21:00"];
var sesiones=["pilates","spinning","bodycombat","zumba","boxeo"]

function genera_tabla() {
	
  var body = document.getElementsByTagName("body")[0];
  var tabla = document.createElement("table");
  var tblBody = document.createElement("tbody");
  
  var hilera = document.createElement("tr");
   for (var j = 0; j < 6; j++) {   
     textoCelda = diasDeLaSemena[j];
     var celda = document.createElement("th");
     celda.textContent = textoCelda;
     hilera.appendChild(celda);
   }
 tblBody.appendChild(hilera);
	
  for (var i = 1; i < 13; i++) {
    var elmt,textoCelda;
    var hilera = document.createElement("tr");
    for (var j = 0; j < 6; j++) {
       if(j==0){elmt = "th";
       textoCelda = entreHorras[i];
       }else{elmt = "td";
            textoCelda = sesiones[Math.floor(Math.random()*5)]}
       var celda = document.createElement(elmt);
      
      celda.textContent = textoCelda;
      hilera.appendChild(celda);
    }

    

    tblBody.appendChild(hilera);
  }
  

  tabla.appendChild(tblBody);

  body.appendChild(tabla);

  tabla.setAttribute("border", "2");
}

var diasDeLaSemena1 = ["", "Lunes","Martes","Miercoles","Jueves", "viernes","sabado"]
var entreHorras1 = ["","10:00 - 10:45","10:45 - 11:30","11:30 - 12:15","13:00 - 13:45","17:00 - 17:45","17:45 - 18:30","18:30 - 18:15","19:00 - 19:45","19:45 - 20:30","20:30 - 21:15"];
var sesiones1=["Juan","Paco","Camilo","Miguel","Aitor"]
function genera_tabla2() {
	
    var body = document.getElementsByTagName("body")[0];
    var tabla = document.createElement("table");
    var tblBody = document.createElement("tbody");
    
    var hilera = document.createElement("tr");
     for (var j = 0; j < 6; j++) {   
       textoCelda = diasDeLaSemena1[j];
       var celda = document.createElement("th");
       celda.textContent = textoCelda;
       hilera.appendChild(celda);
     }
   tblBody.appendChild(hilera);
      
    for (var i = 1; i < 11; i++) {
      var elmt,textoCelda;
      var hilera = document.createElement("tr");
      for (var j = 0; j < 6; j++) {
         if(j==0){elmt = "th";
         textoCelda = entreHorras1[i];
         }else{elmt = "td";
              textoCelda = sesiones1[Math.floor(Math.random()*5)]}
         var celda = document.createElement(elmt);
        
        celda.textContent = textoCelda;
        hilera.appendChild(celda);
      }
  
      
  
      tblBody.appendChild(hilera);
    }
    
  
    tabla.appendChild(tblBody);
  
    body.appendChild(tabla);
  
    tabla.setAttribute("border", "2");
  }