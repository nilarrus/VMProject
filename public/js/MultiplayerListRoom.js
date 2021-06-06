function multiGameList(z) {
    //$("#FormPass").css("display", "block");

    var temp = z
    alert(temp.children[0].innerHTML);
    alert(temp.children[1].innerHTML);
    
}
function inGameList() {
    var lista = $("tr#rowList");
    console.log(lista);
    for (let index = 0; index < lista.length; index++) {
        lista[index].setAttribute("onclick","multiGameList(this)");
        
    }
}