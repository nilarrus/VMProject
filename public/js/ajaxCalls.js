function celesServer() {
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

$("#start").on("click",function () {
    celesServer();
    
});