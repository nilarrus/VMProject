var CelesCorrectes;

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
            
            $("#backAjax").html(backd.msg.Celes);
            CelesCorrectes = JSON.parse(backd.msg.Celes);
            console.log(CelesCorrectes);
            SGame(backd.msg.Celes,parseInt($("#nivel").text()));
        }
    });
}