function checkPassword(tr) {
    var passw = tr.children[0].innerHTML;
    $.ajax({
        type: "POST",
        url: "/mplrch",
        data: {_token: getCSRFTokenValue() ,pass: passw},
        success: function (response) {
            alert(response);
        }
    });

}

