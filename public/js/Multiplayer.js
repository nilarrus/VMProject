var CelCorrectes;
var CelesHtmlElemets;
var idInter;
var CelUser;
var fGame = 0;

function finDelJuego() {
    clearInterval(idInter);
    alert("Fin del juego");
    $("#table").css("border","7px solid black");
    var list =$(".celda");
    for (let x = 0; x < list.length; x++) {
        DeshabilitarMouseClick(x);
    }
    
}

function detectarCelda(nC) {
    var list = $(".celda");
    if(nC>=0){    
        if(CelCorrectes.includes(nC)){
            list[nC].style.backgroundColor="green";
            DeshabilitarMouseClick(nC);
            fGame = fGame+1;

            if(CelCorrectes.length == fGame){
                finDelJuego();
            }
            
        }else{
            setTimeout(() => {
                list[nC].style.backgroundColor = "wheat";
            }, 1000);
            list[nC].style.backgroundColor = "red";
            
            var fail = parseInt($("#gameFails").text())+1;
            $("#gameFails").text(fail.toString());
            
        }
    }
}


//Hablita el click para saber que celda al pulsado
function HabilitarMouseClick() {
    var lista = $("td.celda");
    CelUser = Array();
    for (let ind = 0; ind < lista.length; ind++) {
        lista[ind].setAttribute("onclick","detectarCelda("+ind+")");        
    }
}

//Deshablitar el click de la celda
function DeshabilitarMouseClick(celIndx) {
    var lista = $("td.celda");
    lista[celIndx].setAttribute("onclick","detectarCelda(-"+1+")");        
    
}


// Close interval clearInterval(idInter);

function getCelesCorrectes(acc) {
    CelesHtmlElemets = new Array(acc.length);
    var list = document.getElementsByClassName("celda");
    for (let c = 0; c < acc.length; c++) {
        var x = acc[c];
        CelesHtmlElemets[c] = list[x];
    }
    return CelesHtmlElemets;
}


function pCelesCorrectes(cc) {
   
    var list = getCelesCorrectes(cc);
    
    for (let c = 0; c < list.length; c++) {
        setTimeout(() => {
            list[c].style.backgroundColor = "wheat"
            //habilitar el mouse
            HabilitarMouseClick();
            $("#table").css("border","7px solid green");
        }, 3000);
        list[c].style.backgroundColor = "green"
    }
    setTimeout(() => {
        playTime();
    }, 3000);
    
    
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
    $("#start").hide();
    CelCorrectes = JsonCeles;
    rc = level+2;
    generarTauler(rc,rc);
    pCelesCorrectes(CelCorrectes);

}