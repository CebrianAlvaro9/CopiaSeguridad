function hijos() {
    var hijosdiv1 = document.getElementById("div1").childNodes; 
    let text;
    for (let i = 0; i < hijosdiv1.length; i++) {
        text += hijosdiv1[i].textvalue + "<br>";
    }

    document.writeln(text);
}

function hijosLista() {
    var hijos = document.getElementById("ul1");
    document.writeln(hijos.nextSibling.nodeName);
    document.writeln(hijos.nextSibling.nodeName);
    document.writeln(hijos.nextSibling.nodeName);
}


