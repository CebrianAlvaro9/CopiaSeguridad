
function miFuncion(){
    var opcion;
    
    opcion=prompt('Ingrese su opcion:');

    switch (opcion) {
        case '1':
           alert('has elegido naranjas');
          break;
        case '2':
          alert('has elegido peras');
          break;
          default:
            alert('No existe la opcion ' + opcion + '.');
        }
        
    
  
}

