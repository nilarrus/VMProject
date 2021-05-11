    
    function showForm() {
        $("#formSpas").show();
        var random = Math.random()* (9999 - 1)+1;
        $("input[name=nsala]").val(random);
    }