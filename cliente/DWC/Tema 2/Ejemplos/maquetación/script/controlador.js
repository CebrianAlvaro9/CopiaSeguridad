function main(){
    //Determinar qué formulario está operativo

    //Deshabilita 'contenido1'
    document.getElementById("contenido1").style.display = "none";
    //Deshabilita 'contenido2'
    document.getElementById("contenido2").style.display = "none";
    //Deshabilita 'contenido3'
    //document.getElementById("contenido3").style.display = "none";

    //Listado de opciones
    document.getElementById("lista").children; //Array con sus hijos
    document.getElementById("lista").options;//Array elementos option
    document.getElementById("lista").options[1];
    
    //Lista de opciones múltiples
    document.getElementById("listaM").children //array de los hijos
    document.getElementById("listaM").options //array de los hijos
    document.getElementById("listaM").options[1].selected //devuelve booleano indicando si está seleccionado

    //Listas ordenadas/desordenadas
    document.getElementById("ulDesordenadas").children // Nos va a devolver los hijos

    //tabla
    document.getElementById("tabla1").getElementsByTagName("tr");

    //txtBoc - password - Hidden
    document.getElementById("cmpTxt").value;
    document.getElementById("cmpPass").value;
    document.getElementById("cmpHidden").value;

    //text Area
    document.getElementById("txtArea1").value;

    // Radio Button: permiete una sola opción de selección
    var variableRadio = document.getElementsByName("languaje");
    for (var i=0; i<variableRadio.length; i++){
        if(variableRadio[i].checked){
            console.log("variableRadio["+i+"]:" + "true");
        }
    }

    //checkbox
    var variableCheck = document.getElementsByName("miCheck");
    for (var i=0; i<variableCheck.length; i++){
        if(variableCheck[i].checked){
            console.log("variableCheck["+i+"]:" + "true");
        }
    }
}





function btnOk_onClick(){
    alert("btnOk_onClick In");
}

function btnCancel_onClick(){
    alert("btnCancel_onClick In");
}

/*
    Dar funcionalidad a los dos botones btnAddClass y btnRemoveClass de forma que
    - Añadan o eliminen una nueva clase de alguno de los elementos LI
    - La clase se va a llamar componenteUListaLi
    - Utilizaremos la función .setAtribute('ClaseAñadir', "");
    -- podremos usar también .classList.add('clase1', 'clase2');
    - Para eliminar la clase podremos usar classList.remove('nombreClass');
    - El color del texto sea rojo
        que el tipo de letra sea cursiva (font-style: italic);
*/

function btnAddClass_onClick(){
   document.getElementById("item1").setAttribute('class', 'claseAñadir');
}

function btnRemoveClass_onClick(){
    document.getElementById("item1").classList.remove('claseAñadir');
}