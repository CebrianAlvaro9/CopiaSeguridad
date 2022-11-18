
    function iniciar() {
        
        btnCalcular = document.getElementById("btnCalcular");
        btnCalcular.addEventListener("click", eliminar);
        btnCalcular.addEventListener("click", clickBtnCalcular);
      
        
    }
  
      function clickBtnCalcular() {
        
        var txtPeso = document.getElementById('txtPeso');
        var peso = txtPeso.value;
  
        var txtAltura = document.getElementById('txtAltura');
        var altura = txtAltura.value;
  
        var imc = peso / (altura * altura);
       
        document.getElementById('imc').innerHTML= "El IMC es: "+imc;

        if(imc==16){
          $id ="a1";
       
        }else if(imc>16&&imc<=16.99){
          $id ="a2";
        }else if(imc>16.99&&imc<=18.49){
          $id ="a3";
        }else if(imc>18.49&&imc<=24.99){
          $id ="a4";
        }else if(imc>24.99&&imc<=29.99){
          $id ="a5";
        }else if(imc>29.99&&imc<=34.99){
          $id ="a6";
        }   
        else if(imc>34.99&&imc<=40){
          $id ="a7";
        }   
        else if(imc>40){
          $id ="a8";
        }

        document.getElementById($id).style.color="blue";
        
      
      }


      function eliminar(){

       lista = document.getElementsByClassName("b3");
       lista1 = document.getElementsByClassName("b3");
       for(i=0;i<lista.length;i++){
        
         lista[i].style.color="black";
         
         console.log(lista1[i].textContent);

       }
      }