$("#start").on("click",function () {
    $.ajax({
        type: 'POST',
        url: "/c",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
            
        },
        success: function (backd) {
            console.log(backd);
            //$("#msg").html(data.msg);
        }
    });
})