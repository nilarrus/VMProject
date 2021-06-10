var CelCorrectes;
var idInter;

function stopInterval() {
        clearInterval(idInter);

}

function rellotge() {
    var reg = $("#gameTime").text();
    var time = parseInt(reg)+1;
    $("#gameTime").text(time);
}


//Set interval

function playTime() {
    idInter = setInterval(rellotge,1000);
}

/**
 * Genera la taula 
 * @param {Integer} rows 
 * @param {Integer} cols 
 */
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
}
//Llençar la creacio de la taula recollint les celes per ajax ajaxCalls.js
/**
 * 
 * @param {Array} JsonCeles 
 * @param {Integer} level 
 */
function SGame(JsonCeles,level) {
    CelCorrectes = JsonCeles;
    rc = level+2;
    generarTauler(rc,rc);
    console.log("Dins la funcio: ",CelCorrectes, " ",level);
}