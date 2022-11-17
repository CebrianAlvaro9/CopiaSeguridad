function genera_tabla() {

    
    var filas=['16.00: Infrapeso (delgadez severa)',' 16.00 – 16.99: Infrapeso (delgadez moderada)','17.00 - 18.49: Infrapeso (delgadez aceptable)','18.50 - 24.99: Peso normal','25.00 - 29.99: Sobrepeso','30.00 - 34.99: Obeso (Tipo I)','35.00 - 40.00: Obeso (Tipo II)','>40.00: Obeso (Tipo III)']
    // Obtener la referencia del elemento body

    var body = document.getElementsByTagName("body")[0];
  
    // Crea un elemento <table> y un elemento <tbody>
   

    document.createElement("ul");
    for (var j = 0; j < filas.length; j++) {
        var textoCelda = (filas[j]);
        document.createElement("li");
        document.write(textoCelda);
        document.createElement("/li");
    }
   

    document.createElement("/ul");
  
  }