document.onload = function(){f1()};

function f1(){
    $.ajax({
        url: "multi.blade.php",
        timeout : 3000
    }).done(function()
    {
        $("#tempMis1").text("Yo");

    }).fail(function(jqXHR, textStatus)
    {
        if(textStatus === 'timeout')
        {
            alext('Failed from timeout');
        }
    });
}
