function celesServer(nSala) {
    console.log("call");
    $.ajax({
        type: 'POST',
        url: "/c",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
            "nsala" : nSala
        },
        success: function (backd) {
            console.log(backd.Celes);
            $("#backAjax").html(backd.Celes);
        }
    });
}