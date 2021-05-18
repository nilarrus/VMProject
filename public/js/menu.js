    
    function showForm() {
        $("#formSpas").show();
        var random = Math.floor(Math.random()* (9999 - 1)+1);
        $("input[name=nsala]").val(random+"ab");
        $("#show").hide();
        $(".lista").hide();
    }