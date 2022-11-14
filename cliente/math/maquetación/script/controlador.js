
function main(){}
function btnOk_onClick(){
    enviarDatos();
}

function btnCancel_onClick(){
    alert("btnCancel_onClick In");
}


function enviarDatos(){
    formulario = document.forms.datos;
    debugger;
    alert("El valor de cmpNombreTxt es: "+ formulario.cmpNombreTxt.value);
    formulario.cmApellidoTxt.focus();

    //ambitos de servidor
    formulario.action = ".php";
    formulario.target= "_self";
    //document.datos.submit();

}

