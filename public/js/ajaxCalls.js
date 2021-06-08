function celesServer() {
    console.log("call");
    $.ajax({
        type: 'POST',
        url: "/c",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
            "nsala" : " 1235ab "
        },
        success: function (backd) {
            console.log(backd);
            //$("#msg").html(data.msg);
        }
    });
}