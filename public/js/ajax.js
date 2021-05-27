function checkPassword(tr) {
    var passw = tr.children[0].innerHTML;
    $.ajax({
        type: "POST",
        url: "/mplrch",
        data: {pass: passw},
        success: function (response) {
            alert(response);
        }
    });

}

