
var sesiones=["pilates","spinning","bodycombat","zumba","boxeo"];
var sesiones1=["Juan","Paco","Camilo","Miguel","Aitor"];

  function iniciar() {
    btnCalcular1 = document.getElementById("btnCalcular1");
    btnCalcular1.addEventListener("click", clickBtnCalcular1);
    btnCalcular = document.getElementById("btnCalcular");
    btnCalcular.addEventListener("click", eliminar1);
    btnCalcular.addEventListener("click", clickBtnCalcular);  
    btnFisio = document.getElementById("btnFisio");
    btnClases = document.getElementById("btnClase");
    btnClases.addEventListener("click", eliminar);
    btnFisio.addEventListener("click", fisio);
    btnClases.addEventListener("click", clase);
    contra1= document.getElementById("btnContras");
    contra1.addEventListener("click",segura);

    let boton2=document.querySelector("#tablaFisios");
    boton2.addEventListener("click",()=>{
        var horas1 = ["","10:00 - 10:45","10:45 - 11:30","11:30 - 12:15","13:00 - 13:45","17:00 - 17:45","17:45 - 18:30","18:30 - 18:15","19:00 - 19:45","19:45 - 20:30","20:30 - 21:15"];
        var div1="dos"
        var id="tabla2";
        var boton="tablaFisios";
        var formu="fisios";
        var h1="h1f"
        genera_tablas(div1,id,sesiones1,horas1,boton,formu,h1);
     
        
    });

    let boton1=document.querySelector("#tablaClases");
    boton1.addEventListener("click",()=>{
        var horas = ["","9:00 - 10:00","10:00 - 11:00","11:00 - 12:00","12:00 - 13:00","13:00 - 14:00","14:00 - 15:00","15:00 - 16:00","16:00 - 17:00","17:00 - 18:00","18:00 - 19:00","19:00 - 20:00","20:00 - 21:00"];
        var div1="uno"
        var id="tabla1";
        var boton="tablaClases";
        var formu="clases";
        var h1="h1c"
        genera_tablas(div1,id,sesiones,horas,boton,formu,h1);
      
    });

}



function fisio(){


    for(i=0;i<sesiones1.length;i++){
    
        if (document.getElementById(sesiones1[i]).checked)
        {
           var fisio=sesiones1[i];
        }
    }
    
    lista = document.getElementsByTagName('td');
 
   
    console.log(fisio);

   

    for(i=0;i<lista.length;i++){
     
        if(lista[i].textContent==fisio){

        lista[i].style.color="red";
        }else{
            lista[i].style.color="white";  
        }

      console.log(lista[i].textContent);

    }
}

function clase(){
  

    var clase=[];
    for(i=0;i<sesiones.length;i++){
    
        if (document.getElementById(sesiones[i]).checked)
        {
           clase.push(sesiones[i]);
           console.log(clase[i]);
        }
    }
    
    lista = document.getElementsByTagName('td');

   
    for(i=0;i<lista.length;i++){
        for(j=0;j<clase.length;j++){
        if(lista[i].textContent==clase[j]){
        lista[i].style.color="red"; 
    }
      console.log(lista[i].textContent);
    }
}

}

function eliminar(){

    lista = document.getElementsByTagName('td');
    for(i=0;i<lista.length;i++){
     
      lista[i].style.color="white";
      
      console.log(lista[i].textContent);

    }
}

function genera_tablas(div1,id,clase,horas,boton,formu,h1 ){
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
       
        tabla.style.padding="1%";
       document.getElementById(boton).style.display = "none";
       document.getElementById(boton).style.margin = "0";
       document.getElementById(formu).style.display = "contents";
       document.getElementById(h1).style.display = "contents";
       

        
    }
}

function segura(){
  var myregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; 
  contra= document.getElementById("contra").value;
  if(myregex.test(contra)){
    document.getElementById('respuesta1').innerHTML="Contraseña valida cumple los requisitos de seguridad";
    document.getElementById('respuesta1').style.color="green";
  }else{
    document.getElementById('respuesta1').innerHTML=("Contraseña no valida no cumple los requisitos de seguridad");
    document.getElementById('respuesta1').style.color="red";
  }

}