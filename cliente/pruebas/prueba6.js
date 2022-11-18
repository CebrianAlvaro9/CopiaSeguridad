function checkPassword(valor){
    var myregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; 
   if(myregex.test(valor)){
       alert(valor+" es valido :-) !");
       return true;        
   }else{
      alert(valor+" NO es valido!");
       return false;        
   }   
 }

  function checkForm(form){
    if(form.username.value == "") {
      alert("Error: Debe escribir Usuario!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Nombre de usuario debe contener únicamente letras, numeros y underscores!");
      form.username.focus();
      return false;
    }
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(!checkPassword(form.pwd1.value)) {
        alert("La contraseña no es valida!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: las contraseñas no coinciden!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }