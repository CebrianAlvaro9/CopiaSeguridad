function generarTablaDinamica() {

    var columnas = ['triángulo', 'cuadrado', 'pentágono', 'heptágono', 'hexágono'];
    var filas = ['azul', 'rojo', 'verde', 'amarillo', 'morado'];

    var div = document.getElementById('divTablaDinamica');
    var table = document.createElement('table');
    table.setAttribute('border', 'solid 1px');

    filas.forEach(color => {
        var tr = document.createElement('tr');
        columnas.forEach(forma => {
            var td = document.createElement('td');
            var txt = document.createTextNode(color + " - " + forma);
            td.appendChild(txt);
            tr.appendChild(td);
        });
        table.appendChild(tr);
    });

    div.appendChild(table);

}