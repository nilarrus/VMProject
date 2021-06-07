function multiGameList(z) {
    $("#FormPass").css("display", "block");

    var temp = z
    $("#lnsala").html(temp.children[0].innerHTML);
    $("#nsala").val(temp.children[0].innerHTML);
    $("#lcreador").html(temp.children[1].innerHTML);
    $("#creador").val(temp.children[1].innerHTML);
    
    
}
function inGameList() {
    var lista = $("tr#rowList");
    //console.log(lista);
    for (let index = 0; index < lista.length; index++) {
        lista[index].setAttribute("onclick","multiGameList(this)");
        
    }
}