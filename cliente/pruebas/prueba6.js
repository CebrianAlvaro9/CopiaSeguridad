
function iniciar(){

  contra1= document.getElementById("btnContras");
  contra1.addEventListener("click",segura);
}

function segura(){
  var myregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; 
  contra= document.getElementById("contra").value;
  if(myregex.test(contra)){
    alert(" es valido :-) !");
  }else{
    alert(" NO es valido!");
  }

}


   
  