function main(){
    //Determinar qué formulario está operativo

    //Deshabilita 'contenido1'
    //document.getElementById("contenido1").style.display = "none";
    //Deshabilita 'contenido2'
    document.getElementById("contenido2").style.display = "none";
    //Deshabilita 'contenido3'
    document.getElementById("contenido3").style.display = "none";

}





function btnOk_onClick(){
    enviarDatos();
}

function enviarDatos(){
    formulario = document.forms.datos;
    alert("El valor de cmpNombreTxt es: " + formulario.cmpNombreTxt.value);
    formulario.cmpApellidoTxt.focus();

    // Ámbito de servidor
    formulario.action = ".php";
    formulario.target = "_self";
    // document.datos.submit();
}

function btnCancel_onClick(){
    alert("btnCancel_onClick In");
}