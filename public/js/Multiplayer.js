var CelCorrectes;
var CelesHtmlElemets;
var idInter;

// Close interval clearInterval(idInter);

function getCelesCorrectes(acc) {
    CelesHtmlElemets = new Array(acc.length);
    var list = document.getElementsByClassName("celda");
    for (let c = 0; c < acc.length; c++) {
        var x = acc[c];
        CelesHtmlElemets.push(list[x]);
 
    }
    console.log(CelesHtmlElemets);
}

function pCelesCorrectes(cc) {
   
    var list = getCelesCorrectes(cc);
    /*
    for (let c = 0; c < list.length; c++) {
        setTimeout(() => {
            list[c].style.backgroundColor = "green"
        }, 1000);
        list[c].style.backgroundColor = "wheat"
    }
    //habilitar el mouse

    //tiempo
    playTime();
    */
}




// Rellotges del joc 
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
    pCelesCorrectes(CelCorrectes);
}