function generarTauler(rows,cols) {
    // tbody
    var tbody = $('<tbody>');
    // filas y columnas 
    for (let row = 0; row < rows; row++) {
        //Filas
        var tr = $('<tr>');
        //Columnas
        for (let col = 0; col < cols; col++) {
            //Unimos las columnas con la filas
            tr.append($('<td>').attr('class','cel'));
        }
        //filas al body
        tbody.append(tr);
    }
    //Añadimos el tbody a la tabla
    $('#table').append(tbody);
}

function SGame(JsonCeles,level) {
    generarTauler(level+2,level+2);
    console.log("Dins la funcio: ",JsonCeles);
}