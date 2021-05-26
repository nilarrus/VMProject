function multiGameList(z) {
    var temp = z
    console.log(temp.firstChild.innerHTML);
}
function inGameList() {
    var lista = $("tr#rowList");
    console.log(lista);
    for (let index = 0; index < lista.length; index++) {
        lista[index].setAttribute("onclick","multiGameList(this)");
        
    }
}