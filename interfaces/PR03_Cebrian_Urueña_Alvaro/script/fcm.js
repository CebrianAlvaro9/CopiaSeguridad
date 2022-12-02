/*la Fórmula de la edad (FCM= 220 –edad, en hombres y FCM= 226-edad en mujeres)*/


function clickBtnCalcular1() {

    var txtEdad = document.getElementById('txtEdad');
    var edad = txtEdad.value;
    var txtsexo = document.getElementById('sexo');
    var sexo = txtsexo.value;

    console.log(sexo);

    var fcmH=220-edad;
    var fcmM=226-edad;

    /*  zona recuperacion (60%-70%).
        Zona aeróbica (70%-80%).
        Zona anaeróbica (80%-90%).
        Línea roja (90%-100%).*/
    recuperacion1= Math.round(fcmH*0.6);
    recuperacion1M= Math.round(fcmM*0.6);
    recuperacion2= Math.round(fcmH*0.7);
    recuperacion2M= Math.round(fcmM*0.7);
    recuperacion3= Math.round(fcmH*0.8);
    recuperacion3M= Math.round(fcmM*0.8);
    recuperacion4= Math.round(fcmH*0.9);
    recuperacion4M= Math.round(fcmM*0.9);

    if(edad=="" || edad>100 || edad<=0){
        document.getElementById('a').innerHTML= "";
        document.getElementById('b').innerHTML= "";
        document.getElementById('c').innerHTML= "";
        document.getElementById('d').innerHTML= "";
      
        document.getElementById('respuesta').innerHTML="El campo de edad es oligatorio, no introduzca edades masyores a 100 o menores que 0";
        
    }else{
        document.getElementById('respuesta').innerHTML="";
   
        if(sexo=="hombre"){
            document.getElementById('a').innerHTML= "("+recuperacion1+"-"+recuperacion2+")";
            document.getElementById('b').innerHTML= "("+recuperacion2+"-"+recuperacion3+")";
            document.getElementById('c').innerHTML= "("+recuperacion3+"-"+recuperacion4+")";
            document.getElementById('d').innerHTML= "("+recuperacion4+"-"+fcmH+")";
        }else{
            document.getElementById('a').innerHTML= "("+recuperacion1M+"-"+recuperacion2M+")";
            document.getElementById('b').innerHTML= "("+recuperacion2M+"-"+recuperacion3M+")";
            document.getElementById('c').innerHTML= "("+recuperacion3M+"-"+recuperacion4M+")";
            document.getElementById('d').innerHTML= "("+recuperacion4M+"-"+fcmM+")";
        }

    }
 
  
   


    
  
  }