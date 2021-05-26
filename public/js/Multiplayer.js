function multiGameList() {
    
}
function inGameList() {
    var lista = $("tr.rowList");
    for (let index = 0; index < lista.length; index++) {
        lista[index].setAttribute("onclick","multiGameList()");
        
    }
}

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
            tr.append($('<td>').attr('class','celda'));
        }
        //filas al body
        tbody.append(tr);
    }
    //Añadimos el tbody a la tabla
    $('#table').append(tbody);
    //on Click
    inGameList();
}

function SGame(JsonCeles,level) {
    rc = level+2;
    generarTauler(rc,rc);
    console.log("Dins la funcio: ",JsonCeles);
}